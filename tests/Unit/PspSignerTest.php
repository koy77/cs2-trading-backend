<?php

namespace Tests\Unit;

use App\Services\Money\PspSigner;
use Tests\TestCase;

class PspSignerTest extends TestCase
{
    private function signer(): PspSigner
    {
        return new PspSigner('unit-secret', 300);
    }

    public function test_sign_and_verify_roundtrip(): void
    {
        $signer = $this->signer();
        $body = '{"event":"payment.paid","event_id":"evt_1"}';

        $signature = $signer->sign($body);

        $this->assertStringStartsWith('sha256=', $signature);

        $result = $signer->verify($body, $signature, (string) now()->getTimestamp());

        $this->assertTrue($result['ok']);
        $this->assertNull($result['error']);
    }

    public function test_rejects_bad_signature(): void
    {
        $result = $this->signer()->verify('{"a":1}', 'sha256='.str_repeat('0', 64), (string) now()->getTimestamp());

        $this->assertFalse($result['ok']);
        $this->assertSame('bad_signature', $result['error']);
    }

    public function test_rejects_stale_timestamp(): void
    {
        $signer = $this->signer();
        $body = '{"a":1}';
        $signature = $signer->sign($body);

        $result = $signer->verify($body, $signature, (string) (now()->getTimestamp() - 3600));

        $this->assertFalse($result['ok']);
        $this->assertSame('stale_timestamp', $result['error']);
    }

    public function test_rejects_missing_headers(): void
    {
        $signer = $this->signer();
        $now = (string) now()->getTimestamp();

        $this->assertSame('missing_signature', $signer->verify('{}', null, $now)['error']);
        $this->assertSame('missing_signature', $signer->verify('{}', '', $now)['error']);
        $this->assertSame('missing_timestamp', $signer->verify('{}', 'sha256=x', null)['error']);
        $this->assertSame('missing_timestamp', $signer->verify('{}', 'sha256=x', 'not-a-number')['error']);
    }

    public function test_modified_body_fails_verification(): void
    {
        $signer = $this->signer();
        $signature = $signer->sign('{"amount":100}');

        $result = $signer->verify('{"amount":999}', $signature, (string) now()->getTimestamp());

        $this->assertFalse($result['ok']);
        $this->assertSame('bad_signature', $result['error']);
    }
}
