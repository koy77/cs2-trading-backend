<?php declare(strict_types = 1);

// odsl-/app/packages/steam-sdk/src/Support/RateLimitedHttpClient.php-PHPStan\BetterReflection\Reflection\ReflectionClass-SteamSdk\Support\RateLimitedHttpClient
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-934b064269f3899711a9c01cf48a2ead379c43aef845c75aace8777b018745ef',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'filename' => '/app/packages/steam-sdk/src/Support/RateLimitedHttpClient.php',
      ),
    ),
    'namespace' => 'SteamSdk\\Support',
    'name' => 'SteamSdk\\Support\\RateLimitedHttpClient',
    'shortName' => 'RateLimitedHttpClient',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
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
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 233,
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
      'DEFAULT_USER_AGENT' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'DEFAULT_USER_AGENT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36\'',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 29,
            'startTokenPos' => 66,
            'startFilePos' => 904,
            'endTokenPos' => 66,
            'endFilePos' => 1016,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 152,
      ),
      'RETRY_BACKOFF_SECONDS' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'RETRY_BACKOFF_SECONDS',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[1.0, 2.0]',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 79,
            'startFilePos' => 1138,
            'endTokenPos' => 84,
            'endFilePos' => 1147,
          ),
        ),
        'docComment' => '/** @var list<float> seconds to sleep before retry #1, retry #2, ... */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 53,
      ),
    ),
    'immediateProperties' => 
    array (
      'minIntervalSeconds' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'minIntervalSeconds',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'float',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 34,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 47,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'maxRetries' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'maxRetries',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeRequest' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'beforeRequest',
        'modifiers' => 132,
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
                  'name' => 'Closure',
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
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'client' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'client',
        'modifiers' => 4,
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
                  'name' => 'GuzzleHttp\\ClientInterface',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 124,
            'startFilePos' => 1325,
            'endTokenPos' => 124,
            'endFilePos' => 1328,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastAttemptAt' => 
      array (
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'name' => 'lastAttemptAt',
        'modifiers' => 4,
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
                  'name' => 'float',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 136,
            'startFilePos' => 1368,
            'endTokenPos' => 136,
            'endFilePos' => 1371,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 41,
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
          'minIntervalSeconds' => 
          array (
            'name' => 'minIntervalSeconds',
            'default' => 
            array (
              'code' => '1.0',
              'attributes' => 
              array (
                'startLine' => 44,
                'endLine' => 44,
                'startTokenPos' => 151,
                'startFilePos' => 1435,
                'endTokenPos' => 151,
                'endFilePos' => 1437,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'float',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 33,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'maxRetries' => 
          array (
            'name' => 'maxRetries',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 44,
                'endLine' => 44,
                'startTokenPos' => 160,
                'startFilePos' => 1458,
                'endTokenPos' => 160,
                'endFilePos' => 1458,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 66,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'beforeRequest' => 
          array (
            'name' => 'beforeRequest',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 44,
                'endLine' => 44,
                'startTokenPos' => 170,
                'startFilePos' => 1488,
                'endTokenPos' => 170,
                'endFilePos' => 1491,
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
                      'name' => 'callable',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 44,
            'endLine' => 44,
            'startColumn' => 87,
            'endColumn' => 117,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 44,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'setClient' => 
      array (
        'name' => 'setClient',
        'parameters' => 
        array (
          'client' => 
          array (
            'name' => 'client',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'GuzzleHttp\\ClientInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 55,
            'endLine' => 55,
            'startColumn' => 31,
            'endColumn' => 53,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Inject a custom Guzzle client (used by tests and by host applications that
 * already manage a shared client instance).
 */',
        'startLine' => 55,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'getJson' => 
      array (
        'name' => 'getJson',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
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
            'startColumn' => 29,
            'endColumn' => 39,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string, mixed>
 *
 * @throws SteamRequestException
 */',
        'startLine' => 65,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'getXml' => 
      array (
        'name' => 'getXml',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
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
            'startLine' => 85,
            'endLine' => 85,
            'startColumn' => 28,
            'endColumn' => 38,
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
            'name' => 'SimpleXMLElement',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @throws SteamRequestException
 */',
        'startLine' => 85,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'getRaw' => 
      array (
        'name' => 'getRaw',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
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
            'startLine' => 112,
            'endLine' => 112,
            'startColumn' => 28,
            'endColumn' => 38,
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
        'docComment' => '/**
 * @throws SteamRequestException
 */',
        'startLine' => 112,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'postForm' => 
      array (
        'name' => 'postForm',
        'parameters' => 
        array (
          'url' => 
          array (
            'name' => 'url',
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
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 30,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
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
            'startLine' => 122,
            'endLine' => 122,
            'startColumn' => 43,
            'endColumn' => 53,
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
 * @param  array<string, mixed>  $data
 *
 * @throws SteamRequestException
 */',
        'startLine' => 122,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'defaultHeaders' => 
      array (
        'name' => 'defaultHeaders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string, string>
 */',
        'startLine' => 130,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'send' => 
      array (
        'name' => 'send',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'url' => 
          array (
            'name' => 'url',
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 145,
                'endLine' => 145,
                'startTokenPos' => 700,
                'startFilePos' => 4262,
                'endTokenPos' => 701,
                'endFilePos' => 4263,
              ),
            ),
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
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 56,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
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
 * @param  array<string, mixed>  $options
 *
 * @throws SteamRequestException
 */',
        'startLine' => 145,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'throttle' => 
      array (
        'name' => 'throttle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 193,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'sleepBeforeRetry' => 
      array (
        'name' => 'sleepBeforeRetry',
        'parameters' => 
        array (
          'retriesDone' => 
          array (
            'name' => 'retriesDone',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 39,
            'endColumn' => 54,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 210,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'client' => 
      array (
        'name' => 'client',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'GuzzleHttp\\ClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 217,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'createDefaultClient' => 
      array (
        'name' => 'createDefaultClient',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'GuzzleHttp\\ClientInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 222,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'aliasName' => NULL,
      ),
      'sleep' => 
      array (
        'name' => 'sleep',
        'parameters' => 
        array (
          'seconds' => 
          array (
            'name' => 'seconds',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'float',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 30,
            'endColumn' => 43,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 227,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'SteamSdk\\Support',
        'declaringClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'implementingClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
        'currentClassName' => 'SteamSdk\\Support\\RateLimitedHttpClient',
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