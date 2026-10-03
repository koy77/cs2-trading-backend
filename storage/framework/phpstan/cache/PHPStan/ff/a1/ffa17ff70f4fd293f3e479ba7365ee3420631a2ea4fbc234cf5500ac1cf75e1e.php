<?php declare(strict_types = 1);

// odsl-/app/packages/steam-sdk/src/OpenId/SteamOpenId.php-PHPStan\BetterReflection\Reflection\ReflectionClass-SteamSdk\OpenId\SteamOpenId
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-c3e145f54857165864ad2183e22c45c7420caaa84b54b725156bc0cba33df462',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'SteamSdk\\OpenId\\SteamOpenId',
        'filename' => '/app/packages/steam-sdk/src/OpenId/SteamOpenId.php',
      ),
    ),
    'namespace' => 'SteamSdk\\OpenId',
    'name' => 'SteamSdk\\OpenId\\SteamOpenId',
    'shortName' => 'SteamOpenId',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Keyless Steam OpenID 2.0 (checkid_setup / check_authentication) helper.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 173,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'LOGIN_URL' => 
      array (
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'name' => 'LOGIN_URL',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'https://steamcommunity.com/openid/login\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 41,
            'startFilePos' => 285,
            'endTokenPos' => 41,
            'endFilePos' => 325,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 71,
      ),
      'IDENTIFIER_SELECT' => 
      array (
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'name' => 'IDENTIFIER_SELECT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'http://specs.openid.net/auth/2.0/identifier_select\'',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 52,
            'startFilePos' => 366,
            'endTokenPos' => 52,
            'endFilePos' => 417,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 90,
      ),
      'NORMALISED_NAMES' => 
      array (
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'name' => 'NORMALISED_NAMES',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'openid_ns\' => \'openid.ns\', \'openid_mode\' => \'openid.mode\', \'openid_return_to\' => \'openid.return_to\', \'openid_realm\' => \'openid.realm\', \'openid_identity\' => \'openid.identity\', \'openid_claimed_id\' => \'openid.claimed_id\', \'openid_assoc_handle\' => \'openid.assoc_handle\', \'openid_signed\' => \'openid.signed\', \'openid_sig\' => \'openid.sig\', \'openid_response_nonce\' => \'openid.response_nonce\', \'openid_invalidate_handle\' => \'openid.invalidate_handle\', \'openid_op_endpoint\' => \'openid.op_endpoint\', \'openid_ns_sreg\' => \'openid.ns.sreg\', \'openid_sreg_required\' => \'openid.sreg.required\', \'openid_sreg_optional\' => \'openid.sreg.optional\', \'openid_sreg_policy_url\' => \'openid.sreg.policy_url\', \'openid_ns_pape\' => \'openid.ns.pape\', \'openid_pape_max_auth_age\' => \'openid.pape.max_auth_age\', \'openid_pape_preferred_auth_level_types\' => \'openid.pape.preferred_auth_level_types\', \'openid_pape_preferred_auth_level\' => \'openid.pape.preferred_auth_level\', \'openid_ns_ax\' => \'openid.ns.ax\', \'openid_ax_mode\' => \'openid.ax.mode\', \'openid_ax_type\' => \'openid.ax.type\', \'openid_ax_count\' => \'openid.ax.count\', \'openid_ax_update_url\' => \'openid.ax.update_url\', \'openid_ax_term_url\' => \'openid.ax.term_url\', \'openid_ax_required\' => \'openid.ax.required\', \'openid_ax_optional\' => \'openid.ax.optional\']',
          'attributes' => 
          array (
            'startLine' => 24,
            'endLine' => 53,
            'startTokenPos' => 65,
            'startFilePos' => 704,
            'endTokenPos' => 263,
            'endFilePos' => 2210,
          ),
        ),
        'docComment' => '/**
 * PHP normalises dots in request variable names to underscores, so callers
 * that hand over $_GET-style arrays lose "openid.claim_id" -> "openid_claimed_id".
 * Known names are mapped back to their real OpenID form.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'http' => 
      array (
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'name' => 'http',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'SteamSdk\\Support\\RateLimitedHttpClient',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 49,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'http' => 
          array (
            'name' => 'http',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 57,
                'endLine' => 57,
                'startTokenPos' => 288,
                'startFilePos' => 2328,
                'endTokenPos' => 288,
                'endFilePos' => 2331,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'SteamSdk\\Support\\RateLimitedHttpClient',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 33,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 57,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\OpenId',
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'currentClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'aliasName' => NULL,
      ),
      'url' => 
      array (
        'name' => 'url',
        'parameters' => 
        array (
          'returnTo' => 
          array (
            'name' => 'returnTo',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'realm' => 
          array (
            'name' => 'realm',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 43,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Build the URL the user must be redirected to in order to sign in via Steam.
 */',
        'startLine' => 65,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\OpenId',
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'currentClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 30,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validate the callback query against Steam and return the SteamID64 on success.
 *
 * Returns null when the payload is not a valid id_res callback, when Steam does
 * not answer with "is_valid:true", or when the verification request fails.
 *
 * @param  array<string, mixed>  $query  the callback query parameters (openid.* or openid_* keys)
 */',
        'startLine' => 85,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\OpenId',
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'currentClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'aliasName' => NULL,
      ),
      'steamIdFromClaimedId' => 
      array (
        'name' => 'steamIdFromClaimedId',
        'parameters' => 
        array (
          'claimedId' => 
          array (
            'name' => 'claimedId',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 131,
            'endLine' => 131,
            'startColumn' => 42,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Extract the SteamID64 from an OpenID claimed_id, e.g.
 * "https://steamcommunity.com/openid/id/76561197960287930" => "76561197960287930".
 */',
        'startLine' => 131,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\OpenId',
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'currentClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'aliasName' => NULL,
      ),
      'stringParam' => 
      array (
        'name' => 'stringParam',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 41,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'keys' => 
          array (
            'name' => 'keys',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 143,
            'endLine' => 143,
            'startColumn' => 55,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param  array<string, mixed>  $query
 */',
        'startLine' => 143,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 20,
        'namespace' => 'SteamSdk\\OpenId',
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'currentClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'aliasName' => NULL,
      ),
      'normaliseParamName' => 
      array (
        'name' => 'normaliseParamName',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 48,
            'endColumn' => 59,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 156,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'SteamSdk\\OpenId',
        'declaringClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'implementingClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'currentClassName' => 'SteamSdk\\OpenId\\SteamOpenId',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));