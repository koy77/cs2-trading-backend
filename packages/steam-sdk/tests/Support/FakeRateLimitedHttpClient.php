<?php

declare(strict_types=1);

namespace SteamSdk\Tests\Support;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use SteamSdk\Support\RateLimitedHttpClient;

/**
 * RateLimitedHttpClient wired to a Guzzle MockHandler with no real network I/O.
 *
 * - recorded requests are available via $requests / lastRequest();
 * - sleeps (throttling waits and retry backoffs) are captured in $sleeps
 *   instead of actually sleeping, keeping the suite fast.
 */
final class FakeRateLimitedHttpClient extends RateLimitedHttpClient
{
    /** @var list<float> */
    public array $sleeps = [];

    /** @var list<RequestInterface> */
    public array $requests = [];

    public function __construct(
        private readonly MockHandler $mockHandler,
        float $minIntervalSeconds = 0.0,
        int $maxRetries = 2,
        ?callable $beforeRequest = null,
    ) {
        parent::__construct($minIntervalSeconds, $maxRetries, $beforeRequest);
    }

    public function lastRequest(): ?RequestInterface
    {
        if ($this->requests === []) {
            return null;
        }

        return $this->requests[count($this->requests) - 1];
    }

    protected function createDefaultClient(): ClientInterface
    {
        $stack = HandlerStack::create($this->mockHandler);

        $stack->push(function (callable $handler): callable {
            return function (RequestInterface $request, array $options) use ($handler) {
                $this->requests[] = $request;

                return $handler($request, $options);
            };
        });

        return new Client(['handler' => $stack]);
    }

    protected function sleep(float $seconds): void
    {
        $this->sleeps[] = $seconds;
    }
}
