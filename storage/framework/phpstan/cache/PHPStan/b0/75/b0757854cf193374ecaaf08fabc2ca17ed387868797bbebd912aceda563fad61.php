<?php declare(strict_types = 1);

// odsl-/app/packages/steam-sdk/src/Inventory/InventoryClient.php-PHPStan\BetterReflection\Reflection\ReflectionClass-SteamSdk\Inventory\InventoryClient
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-f96dee258568f0912cc17d3208afa8fd95e94e22e3fb487ab915cdfd74484eb2',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'SteamSdk\\Inventory\\InventoryClient',
        'filename' => '/app/packages/steam-sdk/src/Inventory/InventoryClient.php',
      ),
    ),
    'namespace' => 'SteamSdk\\Inventory',
    'name' => 'SteamSdk\\Inventory\\InventoryClient',
    'shortName' => 'InventoryClient',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * Fetches public Steam inventories via the keyless community endpoint,
 * following start_assetid / last_assetid pagination.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 14,
    'endLine' => 111,
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
      'DEFAULT_APP_ID' => 
      array (
        'declaringClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'implementingClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'name' => 'DEFAULT_APP_ID',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '730',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 16,
            'startTokenPos' => 43,
            'startFilePos' => 354,
            'endTokenPos' => 43,
            'endFilePos' => 356,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'DEFAULT_CONTEXT_ID' => 
      array (
        'declaringClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'implementingClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'name' => 'DEFAULT_CONTEXT_ID',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 54,
            'startFilePos' => 398,
            'endTokenPos' => 54,
            'endFilePos' => 398,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'PAGE_SIZE' => 
      array (
        'declaringClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'implementingClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'name' => 'PAGE_SIZE',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2000',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 65,
            'startFilePos' => 432,
            'endTokenPos' => 65,
            'endFilePos' => 435,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
    ),
    'immediateProperties' => 
    array (
      'http' => 
      array (
        'declaringClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'implementingClassName' => 'SteamSdk\\Inventory\\InventoryClient',
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
        'startLine' => 22,
        'endLine' => 22,
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
                'startLine' => 24,
                'endLine' => 24,
                'startTokenPos' => 90,
                'startFilePos' => 553,
                'endTokenPos' => 90,
                'endFilePos' => 556,
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
            'startLine' => 24,
            'endLine' => 24,
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
        'startLine' => 24,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Inventory',
        'declaringClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'implementingClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'currentClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'aliasName' => NULL,
      ),
      'fetch' => 
      array (
        'name' => 'fetch',
        'parameters' => 
        array (
          'steamId64' => 
          array (
            'name' => 'steamId64',
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
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 9,
            'endColumn' => 25,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'appId' => 
          array (
            'name' => 'appId',
            'default' => 
            array (
              'code' => 'self::DEFAULT_APP_ID',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 132,
                'startFilePos' => 916,
                'endTokenPos' => 134,
                'endFilePos' => 935,
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
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 9,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'contextId' => 
          array (
            'name' => 'contextId',
            'default' => 
            array (
              'code' => 'self::DEFAULT_CONTEXT_ID',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 143,
                'startFilePos' => 963,
                'endTokenPos' => 145,
                'endFilePos' => 986,
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
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 9,
            'endColumn' => 49,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'maxItems' => 
          array (
            'name' => 'maxItems',
            'default' => 
            array (
              'code' => '5000',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 154,
                'startFilePos' => 1013,
                'endTokenPos' => 154,
                'endFilePos' => 1016,
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
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 9,
            'endColumn' => 28,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'SteamSdk\\Inventory\\InventorySnapshot',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Fetch up to $maxItems items of a public inventory.
 *
 * Private inventories and request failures yield an invalid snapshot
 * (isSuccess() === false) instead of an exception.
 */',
        'startLine' => 35,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'SteamSdk\\Inventory',
        'declaringClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'implementingClassName' => 'SteamSdk\\Inventory\\InventoryClient',
        'currentClassName' => 'SteamSdk\\Inventory\\InventoryClient',
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