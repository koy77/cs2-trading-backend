<?php

declare(strict_types=1);

namespace SteamSdk\OpenId;

use SteamSdk\Exceptions\SteamRequestException;
use SteamSdk\Support\RateLimitedHttpClient;

/**
 * Keyless Steam OpenID 2.0 (checkid_setup / check_authentication) helper.
 */
class SteamOpenId
{
    public const LOGIN_URL = 'https://steamcommunity.com/openid/login';

    public const IDENTIFIER_SELECT = 'http://specs.openid.net/auth/2.0/identifier_select';

    /**
     * PHP normalises dots in request variable names to underscores, so callers
     * that hand over $_GET-style arrays lose "openid.claim_id" -> "openid_claimed_id".
     * Known names are mapped back to their real OpenID form.
     */
    private const NORMALISED_NAMES = [
        'openid_ns' => 'openid.ns',
        'openid_mode' => 'openid.mode',
        'openid_return_to' => 'openid.return_to',
        'openid_realm' => 'openid.realm',
        'openid_identity' => 'openid.identity',
        'openid_claimed_id' => 'openid.claimed_id',
        'openid_assoc_handle' => 'openid.assoc_handle',
        'openid_signed' => 'openid.signed',
        'openid_sig' => 'openid.sig',
        'openid_response_nonce' => 'openid.response_nonce',
        'openid_invalidate_handle' => 'openid.invalidate_handle',
        'openid_op_endpoint' => 'openid.op_endpoint',
        'openid_ns_sreg' => 'openid.ns.sreg',
        'openid_sreg_required' => 'openid.sreg.required',
        'openid_sreg_optional' => 'openid.sreg.optional',
        'openid_sreg_policy_url' => 'openid.sreg.policy_url',
        'openid_ns_pape' => 'openid.ns.pape',
        'openid_pape_max_auth_age' => 'openid.pape.max_auth_age',
        'openid_pape_preferred_auth_level_types' => 'openid.pape.preferred_auth_level_types',
        'openid_pape_preferred_auth_level' => 'openid.pape.preferred_auth_level',
        'openid_ns_ax' => 'openid.ns.ax',
        'openid_ax_mode' => 'openid.ax.mode',
        'openid_ax_type' => 'openid.ax.type',
        'openid_ax_count' => 'openid.ax.count',
        'openid_ax_update_url' => 'openid.ax.update_url',
        'openid_ax_term_url' => 'openid.ax.term_url',
        'openid_ax_required' => 'openid.ax.required',
        'openid_ax_optional' => 'openid.ax.optional',
    ];

    private readonly RateLimitedHttpClient $http;

    public function __construct(?RateLimitedHttpClient $http = null)
    {
        $this->http = $http ?? new RateLimitedHttpClient;
    }

    /**
     * Build the URL the user must be redirected to in order to sign in via Steam.
     */
    public function url(string $returnTo, string $realm): string
    {
        return self::LOGIN_URL.'?'.http_build_query([
            'openid.ns' => 'http://specs.openid.net/auth/2.0',
            'openid.mode' => 'checkid_setup',
            'openid.return_to' => $returnTo,
            'openid.realm' => $realm,
            'openid.identity' => self::IDENTIFIER_SELECT,
            'openid.claimed_id' => self::IDENTIFIER_SELECT,
        ]);
    }

    /**
     * Validate the callback query against Steam and return the SteamID64 on success.
     *
     * Returns null when the payload is not a valid id_res callback, when Steam does
     * not answer with "is_valid:true", or when the verification request fails.
     *
     * @param  array<string, mixed>  $query  the callback query parameters (openid.* or openid_* keys)
     */
    public function validate(array $query): ?string
    {
        $claimedId = self::stringParam($query, 'openid.claimed_id', 'openid_claimed_id');
        $mode = self::stringParam($query, 'openid.mode', 'openid_mode');

        if ($claimedId === null || $mode !== 'id_res') {
            return null;
        }

        $steamId64 = $this->steamIdFromClaimedId($claimedId);

        if ($steamId64 === null) {
            return null;
        }

        $params = [];

        foreach ($query as $key => $value) {
            if (! is_string($key) || is_array($value)) {
                continue;
            }

            $name = self::normaliseParamName($key);

            if (! str_starts_with($name, 'openid.')) {
                continue;
            }

            $params[$name] = (string) $value;
        }

        $params['openid.mode'] = 'check_authentication';

        try {
            $body = $this->http->postForm(self::LOGIN_URL, $params);
        } catch (SteamRequestException) {
            return null;
        }

        return preg_match('/is_valid\s*:\s*true/i', $body) === 1 ? $steamId64 : null;
    }

    /**
     * Extract the SteamID64 from an OpenID claimed_id, e.g.
     * "https://steamcommunity.com/openid/id/76561197960287930" => "76561197960287930".
     */
    public function steamIdFromClaimedId(string $claimedId): ?string
    {
        if (preg_match('~/openid/id/(\d{17})$~', $claimedId, $matches) !== 1) {
            return null;
        }

        return $matches[1];
    }

    /**
     * @param  array<string, mixed>  $query
     */
    private static function stringParam(array $query, string ...$keys): ?string
    {
        foreach ($keys as $key) {
            $value = $query[$key] ?? null;

            if (is_string($value) && $value !== '') {
                return $value;
            }
        }

        return null;
    }

    private static function normaliseParamName(string $name): string
    {
        if (str_contains($name, '.')) {
            return $name;
        }

        if (isset(self::NORMALISED_NAMES[$name])) {
            return self::NORMALISED_NAMES[$name];
        }

        if (str_starts_with($name, 'openid_')) {
            // Best effort for unknown namespaced extension parameters.
            return 'openid.'.str_replace('_', '.', substr($name, 7));
        }

        return $name;
    }
}
