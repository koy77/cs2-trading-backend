<?php

declare(strict_types=1);

namespace SteamSdk\Support;

use Closure;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use JsonException;
use SimpleXMLElement;
use SteamSdk\Exceptions\SteamRequestException;

/**
 * Small keyless HTTP client for public Steam endpoints.
 *
 * - calls $beforeRequest (if given) before every network attempt (throttling hook);
 * - keeps at least $minIntervalSeconds between two consecutive attempts (start to start);
 * - retries HTTP 429 / 5xx and transport errors with a 1s / 2s backoff;
 * - throws SteamRequestException when the last attempt fails.
 *
 * The class is intentionally non-final: tests subclass it and override
 * createDefaultClient() / sleep() to inject a Guzzle MockHandler and to capture
 * backoff sleeps without real delays.
 */
class RateLimitedHttpClient
{
    public const DEFAULT_USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36';

    /** @var list<float> seconds to sleep before retry #1, retry #2, ... */
    private const RETRY_BACKOFF_SECONDS = [1.0, 2.0];

    private readonly float $minIntervalSeconds;

    private readonly int $maxRetries;

    private readonly ?Closure $beforeRequest;

    private ?ClientInterface $client = null;

    private ?float $lastAttemptAt = null;

    public function __construct(float $minIntervalSeconds = 1.0, int $maxRetries = 2, ?callable $beforeRequest = null)
    {
        $this->minIntervalSeconds = max(0.0, $minIntervalSeconds);
        $this->maxRetries = max(0, $maxRetries);
        $this->beforeRequest = $beforeRequest === null ? null : Closure::fromCallable($beforeRequest);
    }

    /**
     * Inject a custom Guzzle client (used by tests and by host applications that
     * already manage a shared client instance).
     */
    public function setClient(ClientInterface $client): void
    {
        $this->client = $client;
    }

    /**
     * @return array<string, mixed>
     *
     * @throws SteamRequestException
     */
    public function getJson(string $url): array
    {
        $body = $this->getRaw($url);

        try {
            $decoded = json_decode($body, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw SteamRequestException::forRequest('GET', $url, 'invalid JSON response: '.$exception->getMessage(), $exception);
        }

        if (! is_array($decoded)) {
            throw SteamRequestException::forRequest('GET', $url, 'expected a JSON object, got '.get_debug_type($decoded));
        }

        return $decoded;
    }

    /**
     * @throws SteamRequestException
     */
    public function getXml(string $url): SimpleXMLElement
    {
        $body = $this->getRaw($url);

        if (trim($body) === '') {
            throw SteamRequestException::forRequest('GET', $url, 'empty XML response');
        }

        $useInternalErrors = libxml_use_internal_errors(true);

        try {
            $xml = simplexml_load_string($body);
        } finally {
            libxml_clear_errors();
            libxml_use_internal_errors($useInternalErrors);
        }

        if ($xml === false) {
            throw SteamRequestException::forRequest('GET', $url, 'invalid XML response');
        }

        return $xml;
    }

    /**
     * @throws SteamRequestException
     */
    public function getRaw(string $url): string
    {
        return $this->send('GET', $url);
    }

    /**
     * @param  array<string, mixed>  $data
     *
     * @throws SteamRequestException
     */
    public function postForm(string $url, array $data): string
    {
        return $this->send('POST', $url, ['form_params' => $data]);
    }

    /**
     * @return array<string, string>
     */
    public static function defaultHeaders(): array
    {
        return [
            'User-Agent' => self::DEFAULT_USER_AGENT,
            'Referer' => 'https://steamcommunity.com/',
            'Accept-Language' => 'en-US,en;q=0.9',
            'Accept' => '*/*',
        ];
    }

    /**
     * @param  array<string, mixed>  $options
     *
     * @throws SteamRequestException
     */
    private function send(string $method, string $url, array $options = []): string
    {
        $options = array_merge([
            'headers' => self::defaultHeaders(),
            'http_errors' => false,
            'timeout' => 20.0,
            'connect_timeout' => 10.0,
        ], $options);

        $retriesDone = 0;

        while (true) {
            $this->throttle();

            try {
                $response = $this->client()->request($method, $url, $options);
            } catch (GuzzleException $exception) {
                if ($retriesDone >= $this->maxRetries) {
                    throw SteamRequestException::forRequest($method, $url, 'transport error: '.$exception->getMessage(), $exception);
                }

                $this->sleepBeforeRetry($retriesDone);
                $retriesDone++;

                continue;
            }

            $status = $response->getStatusCode();

            if ($status === 429 || $status >= 500) {
                if ($retriesDone >= $this->maxRetries) {
                    throw SteamRequestException::forRequest($method, $url, sprintf('HTTP %d after %d attempt(s)', $status, $retriesDone + 1));
                }

                $this->sleepBeforeRetry($retriesDone);
                $retriesDone++;

                continue;
            }

            if ($status >= 400) {
                throw SteamRequestException::forRequest($method, $url, sprintf('HTTP %d', $status));
            }

            return (string) $response->getBody();
        }
    }

    private function throttle(): void
    {
        if ($this->beforeRequest !== null) {
            ($this->beforeRequest)();
        }

        if ($this->lastAttemptAt !== null) {
            $wait = $this->minIntervalSeconds - (microtime(true) - $this->lastAttemptAt);

            if ($wait > 0) {
                $this->sleep($wait);
            }
        }

        $this->lastAttemptAt = microtime(true);
    }

    private function sleepBeforeRetry(int $retriesDone): void
    {
        $index = min($retriesDone, count(self::RETRY_BACKOFF_SECONDS) - 1);

        $this->sleep(self::RETRY_BACKOFF_SECONDS[$index]);
    }

    private function client(): ClientInterface
    {
        return $this->client ??= $this->createDefaultClient();
    }

    protected function createDefaultClient(): ClientInterface
    {
        return new Client;
    }

    protected function sleep(float $seconds): void
    {
        if ($seconds > 0) {
            usleep((int) round($seconds * 1_000_000));
        }
    }
}
