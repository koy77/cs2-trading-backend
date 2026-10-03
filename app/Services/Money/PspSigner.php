<?php

namespace App\Services\Money;

/**
 * HMAC-подписи вебхуков PSP: sha256=<hmac(raw_body, secret)> + окно timestamp.
 */
class PspSigner
{
    public function __construct(
        private readonly string $secret,
        private readonly int $windowSeconds,
    ) {}

    public function sign(string $rawBody): string
    {
        return 'sha256='.hash_hmac('sha256', $rawBody, $this->secret);
    }

    /**
     * @return array{ok: bool, error: ?string}
     */
    public function verify(string $rawBody, ?string $signatureHeader, ?string $timestampHeader): array
    {
        if ($signatureHeader === null || $signatureHeader === '') {
            return ['ok' => false, 'error' => 'missing_signature'];
        }

        if ($timestampHeader === null || ! ctype_digit($timestampHeader)) {
            return ['ok' => false, 'error' => 'missing_timestamp'];
        }

        $age = abs(now()->getTimestamp() - (int) $timestampHeader);

        if ($age > $this->windowSeconds) {
            return ['ok' => false, 'error' => 'stale_timestamp'];
        }

        $expected = $this->sign($rawBody);

        if (! hash_equals($expected, $signatureHeader)) {
            return ['ok' => false, 'error' => 'bad_signature'];
        }

        return ['ok' => true, 'error' => null];
    }
}
