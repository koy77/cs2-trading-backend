<?php declare(strict_types = 1);

// osfsl-/app/vendor/composer/../laravel/pennant/src/Drivers/Decorator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Pennant\Drivers\Decorator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-5c62caa8fc5d3948f360eb989f99a2ff52288a1507f4cef021716379b2677525-8.4-6.73.0.5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'filename' => '/app/vendor/composer/../laravel/pennant/src/Drivers/Decorator.php',
      ),
    ),
    'namespace' => 'Laravel\\Pennant\\Drivers',
    'name' => 'Laravel\\Pennant\\Drivers\\Decorator',
    'shortName' => 'Decorator',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @mixin PendingScopedFeatureInteraction
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 45,
    'endLine' => 943,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Laravel\\Pennant\\Contracts\\CanListStoredFeatures',
      1 => 'Laravel\\Pennant\\Contracts\\CanSetManyFeaturesForScopes',
      2 => 'Laravel\\Pennant\\Contracts\\Driver',
      3 => 'Laravel\\Pennant\\Contracts\\HasFlushableCache',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'name' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'name' => 'name',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The driver name.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'driver' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'name' => 'driver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The driver being decorated.
 *
 * @var Driver
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'defaultScopeResolver' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'name' => 'defaultScopeResolver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The default scope resolver.
 *
 * @var callable(): mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'container' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The container instance.
 *
 * @var Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cache' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'name' => 'cache',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The in-memory feature state cache.
 *
 * @var Collection<int, array{ feature: string, scope: mixed, value: mixed }>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 84,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'nameMap' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'name' => 'nameMap',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 91,
            'endLine' => 91,
            'startTokenPos' => 263,
            'startFilePos' => 2381,
            'endTokenPos' => 264,
            'endFilePos' => 2382,
          ),
        ),
        'docComment' => '/**
 * Map of feature names to their implementations.
 *
 * @var array<string, mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 91,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 28,
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
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 33,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'driver' => 
          array (
            'name' => 'driver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'defaultScopeResolver' => 
          array (
            'name' => 'defaultScopeResolver',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 49,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 72,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'cache' => 
          array (
            'name' => 'cache',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 84,
            'endColumn' => 89,
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
 * Create a new driver decorator instance.
 *
 * @param  string  $name
 * @param  Driver  $driver
 * @param  (callable(): mixed)  $defaultScopeResolver
 * @param  Container  $container
 * @param  Collection<int, array{ feature: string, scope: mixed, value: mixed }>  $cache
 */',
        'startLine' => 102,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'discover' => 
      array (
        'name' => 'discover',
        'parameters' => 
        array (
          'namespace' => 
          array (
            'name' => 'namespace',
            'default' => 
            array (
              'code' => '\'App\\Features\'',
              'attributes' => 
              array (
                'startLine' => 118,
                'endLine' => 118,
                'startTokenPos' => 351,
                'startFilePos' => 3218,
                'endTokenPos' => 351,
                'endFilePos' => 3232,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 30,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 118,
                'endLine' => 118,
                'startTokenPos' => 358,
                'startFilePos' => 3243,
                'endTokenPos' => 358,
                'endFilePos' => 3246,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 60,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Discover and register the application\'s feature classes.
 *
 * @param  string  $namespace
 * @param  string|null  $path
 * @return void
 */',
        'startLine' => 118,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'resolver' => 
          array (
            'name' => 'resolver',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 468,
                'startFilePos' => 3798,
                'endTokenPos' => 468,
                'endFilePos' => 3801,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 38,
            'endColumn' => 53,
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
 * @param  \\BackedEnum|\\UnitEnum|class-string|string  $feature
 * @param  mixed  $resolver
 */',
        'startLine' => 136,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
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
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 32,
            'endColumn' => 39,
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
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
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
            'startLine' => 184,
            'endLine' => 184,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Resolve the feature value.
 *
 * @param  string  $feature
 * @param  callable  $resolver
 * @param  mixed  $scope
 * @return mixed
 */',
        'startLine' => 184,
        'endLine' => 193,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'isResolverValidForScope' => 
      array (
        'name' => 'isResolverValidForScope',
        'parameters' => 
        array (
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 45,
            'endColumn' => 53,
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
            'startLine' => 202,
            'endLine' => 202,
            'startColumn' => 56,
            'endColumn' => 61,
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
 * Determine if the resolver can handle the scope.
 *
 * @param  callable|class-string  $resolver
 * @param  mixed  $scope
 * @return bool
 */',
        'startLine' => 202,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'typeAllowsScope' => 
      array (
        'name' => 'typeAllowsScope',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 40,
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
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 235,
            'endLine' => 235,
            'startColumn' => 55,
            'endColumn' => 63,
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
 * Determine if the type can handle the scope.
 *
 * @param  \\ReflectionType  $type
 * @param  mixed  $scope
 * @param  \\ReflectionMethod|ReflectionFunction  $function
 * @return bool
 */',
        'startLine' => 235,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'canHandleNullScope' => 
      array (
        'name' => 'canHandleNullScope',
        'parameters' => 
        array (
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
            'startLine' => 287,
            'endLine' => 287,
            'startColumn' => 43,
            'endColumn' => 51,
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
 * Determine if the resolver accepts null scope.
 *
 * @param  callable|ReflectionFunction|\\ReflectionMethod  $resolver
 * @return bool
 */',
        'startLine' => 287,
        'endLine' => 296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
        'startLine' => 303,
        'endLine' => 306,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
        'startLine' => 313,
        'endLine' => 320,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 330,
            'endLine' => 330,
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
 * @internal
 *
 * @param  string|array<int|string, mixed>  $features
 * @return array<string, array<int, mixed>>
 */',
        'startLine' => 330,
        'endLine' => 378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'getAllMissing' => 
      array (
        'name' => 'getAllMissing',
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
            'startLine' => 388,
            'endLine' => 388,
            'startColumn' => 35,
            'endColumn' => 43,
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
 * Get multiple feature flag values that are missing.
 *
 * @internal
 *
 * @param  string|array<int|string, mixed>  $features
 * @return array<string, array<int, mixed>>
 */',
        'startLine' => 388,
        'endLine' => 398,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'normalizeFeaturesToLoad' => 
      array (
        'name' => 'normalizeFeaturesToLoad',
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
            'startLine' => 406,
            'endLine' => 406,
            'startColumn' => 48,
            'endColumn' => 56,
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
 * Normalize the features to load.
 *
 * @param  string|array<int|string, mixed>  $features
 * @return Collection<string, array<int, mixed>>
 */',
        'startLine' => 406,
        'endLine' => 420,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 430,
            'endLine' => 430,
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
            'startLine' => 430,
            'endLine' => 430,
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
 * @internal
 *
 * @param  string  $feature
 * @param  mixed  $scope
 */',
        'startLine' => 430,
        'endLine' => 458,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'resolveBeforeHook' => 
      array (
        'name' => 'resolveBeforeHook',
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
            'startLine' => 468,
            'endLine' => 468,
            'startColumn' => 42,
            'endColumn' => 49,
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
            'startLine' => 468,
            'endLine' => 468,
            'startColumn' => 52,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'hook' => 
          array (
            'name' => 'hook',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 468,
            'endLine' => 468,
            'startColumn' => 60,
            'endColumn' => 64,
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
 * Resolve the before hook value.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @param  callable  $hook
 * @return mixed
 */',
        'startLine' => 468,
        'endLine' => 477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 488,
            'endLine' => 488,
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
            'startLine' => 488,
            'endLine' => 488,
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
            'startLine' => 488,
            'endLine' => 488,
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
 * @internal
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @param  mixed  $value
 */',
        'startLine' => 488,
        'endLine' => 499,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 508,
            'endLine' => 508,
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
 * @internal
 *
 * @param  list<array{ feature: string, scope: mixed, value: mixed }>  $features
 */',
        'startLine' => 508,
        'endLine' => 537,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'globally' => 
      array (
        'name' => 'globally',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a pending feature interaction for the global scope, ignoring the default scope resolver.
 *
 * @return PendingScopedFeatureInteraction
 */',
        'startLine' => 544,
        'endLine' => 547,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'activateForEveryone' => 
      array (
        'name' => 'activateForEveryone',
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
            'startLine' => 556,
            'endLine' => 556,
            'startColumn' => 41,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 556,
                'endLine' => 556,
                'startTokenPos' => 3013,
                'startFilePos' => 16594,
                'endTokenPos' => 3013,
                'endFilePos' => 16597,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 556,
            'endLine' => 556,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Activate the feature for everyone.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<\\BackedEnum|\\UnitEnum|string>  $feature
 * @param  mixed  $value
 * @return void
 */',
        'startLine' => 556,
        'endLine' => 560,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'deactivateForEveryone' => 
      array (
        'name' => 'deactivateForEveryone',
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
            'startLine' => 568,
            'endLine' => 568,
            'startColumn' => 43,
            'endColumn' => 50,
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
 * Deactivate the feature for everyone.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<\\BackedEnum|\\UnitEnum|string>  $feature
 * @return void
 */',
        'startLine' => 568,
        'endLine' => 572,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 582,
            'endLine' => 582,
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
            'startLine' => 582,
            'endLine' => 582,
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
 * @internal
 *
 * @param  string  $feature
 * @param  mixed  $value
 */',
        'startLine' => 582,
        'endLine' => 593,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'startLine' => 603,
            'endLine' => 603,
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
            'startLine' => 603,
            'endLine' => 603,
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
 * @internal
 *
 * @param  string  $feature
 * @param  mixed  $scope
 */',
        'startLine' => 603,
        'endLine' => 614,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
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
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 621,
                'endLine' => 621,
                'startTokenPos' => 3287,
                'startFilePos' => 18277,
                'endTokenPos' => 3287,
                'endFilePos' => 18280,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 621,
            'endLine' => 621,
            'startColumn' => 27,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
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
 * @param  \\BackedEnum|\\UnitEnum|string|array<\\BackedEnum|\\UnitEnum|string>|null  $features
 */',
        'startLine' => 621,
        'endLine' => 642,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'name' => 
      array (
        'name' => 'name',
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
            'startLine' => 650,
            'endLine' => 650,
            'startColumn' => 26,
            'endColumn' => 33,
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
 * Retrieve the feature\'s name.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @return string
 */',
        'startLine' => 650,
        'endLine' => 653,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'nameMap' => 
      array (
        'name' => 'nameMap',
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
 * Retrieve the map of feature names to their implementations.
 */',
        'startLine' => 658,
        'endLine' => 661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'instance' => 
      array (
        'name' => 'instance',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 669,
            'endLine' => 669,
            'startColumn' => 30,
            'endColumn' => 34,
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
 * Retrieve the feature\'s class.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $name
 * @return mixed
 */',
        'startLine' => 669,
        'endLine' => 684,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'definedFeaturesForScope' => 
      array (
        'name' => 'definedFeaturesForScope',
        'parameters' => 
        array (
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
            'startLine' => 694,
            'endLine' => 694,
            'startColumn' => 45,
            'endColumn' => 50,
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
 * Retrieve the defined features for the given scope.
 *
 * @internal
 *
 * @param  mixed  $scope
 * @return Collection<int, string>
 */',
        'startLine' => 694,
        'endLine' => 712,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'resolveFeature' => 
      array (
        'name' => 'resolveFeature',
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
            'startLine' => 720,
            'endLine' => 720,
            'startColumn' => 39,
            'endColumn' => 46,
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
 * Resolve the feature name and ensure it is defined.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @return string
 */',
        'startLine' => 720,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'shouldDynamicallyDefine' => 
      array (
        'name' => 'shouldDynamicallyDefine',
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
            'startLine' => 735,
            'endLine' => 735,
            'startColumn' => 48,
            'endColumn' => 55,
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
 * Determine if the feature should be dynamically defined.
 *
 * @param  string  $feature
 * @return bool
 */',
        'startLine' => 735,
        'endLine' => 740,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'ensureDynamicFeatureIsDefined' => 
      array (
        'name' => 'ensureDynamicFeatureIsDefined',
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
            'startLine' => 748,
            'endLine' => 748,
            'startColumn' => 54,
            'endColumn' => 61,
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
 * Dynamically define the feature.
 *
 * @param  string  $feature
 * @return string
 */',
        'startLine' => 748,
        'endLine' => 757,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'hasBeforeHook' => 
      array (
        'name' => 'hasBeforeHook',
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
            'startLine' => 765,
            'endLine' => 765,
            'startColumn' => 38,
            'endColumn' => 45,
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
 * Determine if the given feature has a before hook.
 *
 * @param  string  $feature
 * @return bool
 */',
        'startLine' => 765,
        'endLine' => 770,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'implementationClass' => 
      array (
        'name' => 'implementationClass',
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
            'startLine' => 777,
            'endLine' => 777,
            'startColumn' => 44,
            'endColumn' => 51,
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
 * Retrieve the implementation feature class for the given feature name.
 *
 * @return ?string
 */',
        'startLine' => 777,
        'endLine' => 786,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'resolveFeatureName' => 
      array (
        'name' => 'resolveFeatureName',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 795,
            'endLine' => 795,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'instance' => 
          array (
            'name' => 'instance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 795,
            'endLine' => 795,
            'startColumn' => 51,
            'endColumn' => 59,
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
 * Resolve the name for a feature class.
 *
 * @param  string  $class
 * @param  object  $instance
 * @return string
 */',
        'startLine' => 795,
        'endLine' => 804,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'resolveScope' => 
      array (
        'name' => 'resolveScope',
        'parameters' => 
        array (
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
            'startLine' => 812,
            'endLine' => 812,
            'startColumn' => 37,
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
 * Resolve the scope.
 *
 * @param  mixed  $scope
 * @return mixed
 */',
        'startLine' => 812,
        'endLine' => 817,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'isCached' => 
      array (
        'name' => 'isCached',
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
            'startLine' => 826,
            'endLine' => 826,
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
            'startLine' => 826,
            'endLine' => 826,
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
 * Determine if a feature\'s value is in the cache for the given scope.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @return bool
 */',
        'startLine' => 826,
        'endLine' => 833,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'putInCache' => 
      array (
        'name' => 'putInCache',
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
            'startLine' => 843,
            'endLine' => 843,
            'startColumn' => 35,
            'endColumn' => 42,
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
            'startLine' => 843,
            'endLine' => 843,
            'startColumn' => 45,
            'endColumn' => 50,
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
            'startLine' => 843,
            'endLine' => 843,
            'startColumn' => 53,
            'endColumn' => 58,
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
 * Put the given feature\'s value into the cache.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @param  mixed  $value
 * @return void
 */',
        'startLine' => 843,
        'endLine' => 856,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'removeFromCache' => 
      array (
        'name' => 'removeFromCache',
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
            'startLine' => 865,
            'endLine' => 865,
            'startColumn' => 40,
            'endColumn' => 47,
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
            'startLine' => 865,
            'endLine' => 865,
            'startColumn' => 50,
            'endColumn' => 55,
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
 * Remove the given feature\'s value from the cache.
 *
 * @param  string  $feature
 * @param  mixed  $scope
 * @return void
 */',
        'startLine' => 865,
        'endLine' => 876,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'defaultScope' => 
      array (
        'name' => 'defaultScope',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the default scope.
 *
 * @return mixed
 */',
        'startLine' => 883,
        'endLine' => 886,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'flushCache' => 
      array (
        'name' => 'flushCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flush the in-memory cache of feature values.
 *
 * @return void
 */',
        'startLine' => 893,
        'endLine' => 900,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'getDriver' => 
      array (
        'name' => 'getDriver',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying feature driver.
 *
 * @return Driver
 */',
        'startLine' => 907,
        'endLine' => 910,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      'setContainer' => 
      array (
        'name' => 'setContainer',
        'parameters' => 
        array (
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 917,
            'endLine' => 917,
            'startColumn' => 34,
            'endColumn' => 53,
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
 * Set the container instance used by the decorator.
 *
 * @return $this
 */',
        'startLine' => 917,
        'endLine' => 922,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 931,
            'endLine' => 931,
            'startColumn' => 28,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 931,
            'endLine' => 931,
            'startColumn' => 35,
            'endColumn' => 45,
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
 * Dynamically create a pending feature interaction.
 *
 * @param  string  $name
 * @param  array<mixed>  $parameters
 * @return mixed
 */',
        'startLine' => 931,
        'endLine' => 942,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant\\Drivers',
        'declaringClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'implementingClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'currentClassName' => 'Laravel\\Pennant\\Drivers\\Decorator',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Support\\Traits\\Macroable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\macroable::__call',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
      ),
    ),
  ),
));