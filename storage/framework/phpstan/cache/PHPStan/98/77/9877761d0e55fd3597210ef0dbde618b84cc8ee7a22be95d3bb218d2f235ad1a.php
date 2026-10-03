<?php declare(strict_types = 1);

// odsl-/app/packages/steam-sdk/src/WebApi/PublicClient.php-PHPStan\BetterReflection\Reflection\ReflectionClass-SteamSdk\WebApi\PublicClient
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-462199974ab1c16fc217946b30ef6c427d2b0f46f466891975adde9d4d7bdf47',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'SteamSdk\\WebApi\\PublicClient',
        'filename' => '/app/packages/steam-sdk/src/WebApi/PublicClient.php',
      ),
    ),
    'namespace' => 'SteamSdk\\WebApi',
    'name' => 'SteamSdk\\WebApi\\PublicClient',
    'shortName' => 'PublicClient',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * Keyless access to public Steam Web API methods that need no API key.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 67,
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
      'BASE_URL' => 
      array (
        'declaringClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'implementingClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'name' => 'BASE_URL',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'https://api.steampowered.com\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 43,
            'startFilePos' => 289,
            'endTokenPos' => 43,
            'endFilePos' => 318,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 60,
      ),
    ),
    'immediateProperties' => 
    array (
      'http' => 
      array (
        'declaringClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'implementingClassName' => 'SteamSdk\\WebApi\\PublicClient',
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
        'startLine' => 17,
        'endLine' => 17,
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
                'startLine' => 19,
                'endLine' => 19,
                'startTokenPos' => 68,
                'startFilePos' => 436,
                'endTokenPos' => 68,
                'endFilePos' => 439,
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
            'startLine' => 19,
            'endLine' => 19,
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
        'startLine' => 19,
        'endLine' => 22,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\WebApi',
        'declaringClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'implementingClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'currentClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'aliasName' => NULL,
      ),
      'playerCount' => 
      array (
        'name' => 'playerCount',
        'parameters' => 
        array (
          'appId' => 
          array (
            'name' => 'appId',
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
            'startLine' => 27,
            'endLine' => 27,
            'startColumn' => 33,
            'endColumn' => 42,
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
                  'name' => 'int',
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
 * Current number of players in an app (ISteamUserStats/GetNumberOfCurrentPlayers).
 */',
        'startLine' => 27,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\WebApi',
        'declaringClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'implementingClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'currentClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'aliasName' => NULL,
      ),
      'news' => 
      array (
        'name' => 'news',
        'parameters' => 
        array (
          'appId' => 
          array (
            'name' => 'appId',
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'count' => 
          array (
            'name' => 'count',
            'default' => 
            array (
              'code' => '3',
              'attributes' => 
              array (
                'startLine' => 47,
                'endLine' => 47,
                'startTokenPos' => 213,
                'startFilePos' => 1226,
                'endTokenPos' => 213,
                'endFilePos' => 1226,
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
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
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
 * Latest news items for an app (ISteamNews/GetNewsForApp), newest first.
 *
 * @return list<array<string, mixed>>
 */',
        'startLine' => 47,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\WebApi',
        'declaringClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'implementingClassName' => 'SteamSdk\\WebApi\\PublicClient',
        'currentClassName' => 'SteamSdk\\WebApi\\PublicClient',
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