<?php declare(strict_types = 1);

// osfsl-/app/vendor/composer/../laravel/pennant/src/Drivers/DatabaseDriver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Pennant\Drivers\DatabaseDriver
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ad6a2cbf3dd827dccb25fe856e8a382ca145c8a5b314db348746ccc3f723ccb9-8.4-6.73.0.5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'filename' => '/app/vendor/composer/../laravel/pennant/src/Drivers/DatabaseDriver.php',
      ),
    ),
    'namespace' => 'Laravel\\Pennant\\Drivers',
    'name' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
    'shortName' => 'DatabaseDriver',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 428,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Laravel\\Pennant\\Contracts\\CanListStoredFeatures',
      1 => 'Laravel\\Pennant\\Contracts\\CanSetManyFeaturesForScopes',
      2 => 'Laravel\\Pennant\\Contracts\\Driver',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'CREATED_AT' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'CREATED_AT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'created_at\'',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 159,
            'startFilePos' => 1646,
            'endTokenPos' => 159,
            'endFilePos' => 1657,
          ),
        ),
        'docComment' => '/**
 * The name of the "created at" column.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
      'UPDATED_AT' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'UPDATED_AT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'updated_at\'',
          'attributes' => 
          array (
            'startLine' => 84,
            'endLine' => 84,
            'startTokenPos' => 170,
            'startFilePos' => 1770,
            'endTokenPos' => 170,
            'endFilePos' => 1781,
          ),
        ),
        'docComment' => '/**
 * The name of the "updated at" column.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 36,
      ),
    ),
    'immediateProperties' => 
    array (
      'db' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'db',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database connection.
 *
 * @var DatabaseManager
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'config' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'config',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The user configuration.
 *
 * @var Repository
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'name' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The store\'s name.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'events' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event dispatcher.
 *
 * @var Dispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'featureStateResolvers' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'featureStateResolvers',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The feature state resolvers.
 *
 * @var array<string, (callable(mixed): mixed)>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unknownFeatureValue' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'unknownFeatureValue',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The sentinel value for unknown features.
 *
 * @var stdClass
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'retryDepth' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'name' => 'retryDepth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 148,
            'startFilePos' => 1533,
            'endTokenPos' => 148,
            'endFilePos' => 1533,
          ),
        ),
        'docComment' => '/**
 * The current retry depth for retrieving values from the database.
 *
 * @var int
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 30,
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
          'db' => 
          array (
            'name' => 'db',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\DatabaseManager',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 33,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'events' => 
          array (
            'name' => 'events',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 54,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'config' => 
          array (
            'name' => 'config',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Config\\Repository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 74,
            'endColumn' => 91,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
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
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 94,
            'endColumn' => 105,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'featureStateResolvers' => 
          array (
            'name' => 'featureStateResolvers',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 92,
            'endLine' => 92,
            'startColumn' => 108,
            'endColumn' => 129,
            'parameterIndex' => 4,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new driver instance.
 *
 * @param  array<string, (callable(mixed $scope): mixed)>  $featureStateResolvers
 * @return void
 */',
        'startLine' => 92,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'define' => 
      array (
        'name' => 'define',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'resolver' => 
          array (
            'name' => 'resolver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 38,
            'endColumn' => 46,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Define an initial feature flag state resolver.
 *
 * @param  string  $feature
 * @param  (callable(mixed $scope): mixed)  $resolver
 */',
        'startLine' => 109,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'defined' => 
      array (
        'name' => 'defined',
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
 * Retrieve the names of all defined features.
 *
 * @return array<string>
 */',
        'startLine' => 119,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'stored' => 
      array (
        'name' => 'stored',
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
 * Retrieve the names of all stored features.
 *
 * @return array<string>
 */',
        'startLine' => 129,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'getAll' => 
      array (
        'name' => 'getAll',
        'parameters' => 
        array (
          'features' => 
          array (
            'name' => 'features',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 145,
            'endLine' => 145,
            'startColumn' => 28,
            'endColumn' => 36,
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
 * Get multiple feature flag values.
 *
 * @param  array<string, array<int, mixed>>  $features
 * @return array<string, array<int, mixed>>
 */',
        'startLine' => 145,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 206,
            'endLine' => 206,
            'startColumn' => 25,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 206,
            'endLine' => 206,
            'startColumn' => 35,
            'endColumn' => 40,
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
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve a feature flag\'s value.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 */',
        'startLine' => 206,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'retrieve' => 
      array (
        'name' => 'retrieve',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the value for the given feature and scope from storage.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @return object|null
 */',
        'startLine' => 242,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'resolveValue' => 
      array (
        'name' => 'resolveValue',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine the initial value for a given feature and scope.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @return mixed
 */',
        'startLine' => 257,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'set' => 
      array (
        'name' => 'set',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 25,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 2,
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
 * Set a feature flag\'s value.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @param  mixed  $value
 */',
        'startLine' => 275,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'setAll' => 
      array (
        'name' => 'setAll',
        'parameters' => 
        array (
          'features' => 
          array (
            'name' => 'features',
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
            'startLine' => 291,
            'endLine' => 291,
            'startColumn' => 28,
            'endColumn' => 42,
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
 * Set multiple feature flag values.
 *
 * @param  list<array{ feature: string, scope: mixed, value: mixed }>  $features
 */',
        'startLine' => 291,
        'endLine' => 302,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'setForAllScopes' => 
      array (
        'name' => 'setForAllScopes',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 310,
            'endLine' => 310,
            'startColumn' => 47,
            'endColumn' => 52,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set a feature flag\'s value for all scopes.
 *
 * @param  string  $feature
 * @param  mixed  $value
 */',
        'startLine' => 310,
        'endLine' => 318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 328,
            'endLine' => 328,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update the value for the given feature and scope in storage.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 328,
        'endLine' => 337,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert the value for the given feature and scope into storage.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 347,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'insertMany' => 
      array (
        'name' => 'insertMany',
        'parameters' => 
        array (
          'inserts' => 
          array (
            'name' => 'inserts',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert the given feature values into storage.
 *
 * @param  array<int, array{name: string, scope: mixed, value: mixed}>  $inserts
 * @return bool
 */',
        'startLine' => 362,
        'endLine' => 373,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'feature' => 
          array (
            'name' => 'feature',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'scope' => 
          array (
            'name' => 'scope',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 38,
            'endColumn' => 43,
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete a feature flag\'s value.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 */',
        'startLine' => 381,
        'endLine' => 387,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'purge' => 
      array (
        'name' => 'purge',
        'parameters' => 
        array (
          'features' => 
          array (
            'name' => 'features',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 394,
            'endLine' => 394,
            'startColumn' => 27,
            'endColumn' => 35,
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
 * Purge the given feature from storage.
 *
 * @param  array|null  $features
 */',
        'startLine' => 394,
        'endLine' => 403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'newQuery' => 
      array (
        'name' => 'newQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new table query.
 *
 * @return Builder
 */',
        'startLine' => 410,
        'endLine' => 415,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'aliasName' => NULL,
      ),
      'connection' => 
      array (
        'name' => 'connection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The database connection.
 *
 * @return Connection
 */',
        'startLine' => 422,
        'endLine' => 427,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\DatabaseDriver',
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