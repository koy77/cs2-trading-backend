<?php

declare(strict_types=1);

namespace SteamSdk\Exceptions;

use RuntimeException;
use Throwable;

/**
 * Thrown when an HTTP request to Steam fails after all retries are exhausted,
 * or when a response cannot be decoded (invalid JSON / XML).
 */
class SteamRequestException extends RuntimeException
{
    public static function forRequest(string $method, string $url, string $reason, ?Throwable $previous = null): self
    {
        return new self(sprintf('%s %s: %s', $method, $url, $reason), 0, $previous);
    }
}
