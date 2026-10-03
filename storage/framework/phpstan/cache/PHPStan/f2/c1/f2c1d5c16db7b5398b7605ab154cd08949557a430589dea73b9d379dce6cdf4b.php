<?php declare(strict_types = 1);

// osfsl-/app/vendor/composer/../laravel/pennant/src/PendingScopedFeatureInteraction.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Pennant\PendingScopedFeatureInteraction
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-ba06a253a0479b87ad4dbdd10ef4924f34bf4bb0dda2b606e28d2e1eb529678f-8.4-6.73.0.5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'filename' => '/app/vendor/composer/../laravel/pennant/src/PendingScopedFeatureInteraction.php',
      ),
    ),
    'namespace' => 'Laravel\\Pennant',
    'name' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
    'shortName' => 'PendingScopedFeatureInteraction',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 332,
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
    ),
    'immediateProperties' => 
    array (
      'driver' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'name' => 'driver',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The feature driver.
 *
 * @var Decorator
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 16,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'scope' => 
      array (
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'name' => 'scope',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 43,
            'startFilePos' => 377,
            'endTokenPos' => 44,
            'endFilePos' => 378,
          ),
        ),
        'docComment' => '/**
 * The feature interaction scope.
 *
 * @var array<mixed>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 26,
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
            'startLine' => 30,
            'endLine' => 30,
            'startColumn' => 33,
            'endColumn' => 39,
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
 * Create a new Pending Scoped Feature Interaction instance.
 *
 * @param  Decorator  $driver
 */',
        'startLine' => 30,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'for' => 
      array (
        'name' => 'for',
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
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 25,
            'endColumn' => 30,
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
 * Add scope to the feature interaction.
 *
 * @param  mixed  $scope
 * @return $this
 */',
        'startLine' => 41,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'load' => 
      array (
        'name' => 'load',
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
            'startLine' => 54,
            'endLine' => 54,
            'startColumn' => 26,
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
 * Load the feature into memory.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return array<string, array<int, mixed>>
 */',
        'startLine' => 54,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'loadMissing' => 
      array (
        'name' => 'loadMissing',
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 33,
            'endColumn' => 41,
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
 * Load the missing features into memory.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return array<string, array<int, mixed>>
 */',
        'startLine' => 69,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'loadAll' => 
      array (
        'name' => 'loadAll',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Load all defined features into memory.
 *
 * @return array<string, array<int, mixed>>
 */',
        'startLine' => 83,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'value' => 
      array (
        'name' => 'value',
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
            'startLine' => 96,
            'endLine' => 96,
            'startColumn' => 27,
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
 * Get the value of the flag.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @return mixed
 */',
        'startLine' => 96,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'values' => 
      array (
        'name' => 'values',
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
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 28,
            'endColumn' => 36,
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
 * Get the values of the flag.
 *
 * @param  array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return array<string, mixed>
 */',
        'startLine' => 107,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'all' => 
      array (
        'name' => 'all',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve all the features and their values.
 *
 * @return array<string, mixed>
 */',
        'startLine' => 129,
        'endLine' => 134,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'active' => 
      array (
        'name' => 'active',
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
            'startLine' => 142,
            'endLine' => 142,
            'startColumn' => 28,
            'endColumn' => 35,
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
 * Determine if the feature is active.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @return bool
 */',
        'startLine' => 142,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'allAreActive' => 
      array (
        'name' => 'allAreActive',
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
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 34,
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
 * Determine if all the features are active.
 *
 * @param  array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return bool
 */',
        'startLine' => 153,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'someAreActive' => 
      array (
        'name' => 'someAreActive',
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
            'startLine' => 170,
            'endLine' => 170,
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
 * Determine if any of the features are active.
 *
 * @param  array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return bool
 */',
        'startLine' => 170,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'inactive' => 
      array (
        'name' => 'inactive',
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
            'startLine' => 187,
            'endLine' => 187,
            'startColumn' => 30,
            'endColumn' => 37,
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
 * Determine if the feature is inactive.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @return bool
 */',
        'startLine' => 187,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'allAreInactive' => 
      array (
        'name' => 'allAreInactive',
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
            'startLine' => 198,
            'endLine' => 198,
            'startColumn' => 36,
            'endColumn' => 44,
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
 * Determine if all the features are inactive.
 *
 * @param  array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return bool
 */',
        'startLine' => 198,
        'endLine' => 207,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'someAreInactive' => 
      array (
        'name' => 'someAreInactive',
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
            'startLine' => 215,
            'endLine' => 215,
            'startColumn' => 37,
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
 * Determine if any of the features are inactive.
 *
 * @param  array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return bool
 */',
        'startLine' => 215,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'when' => 
      array (
        'name' => 'when',
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
            'startLine' => 234,
            'endLine' => 234,
            'startColumn' => 26,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'whenActive' => 
          array (
            'name' => 'whenActive',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 234,
            'endLine' => 234,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'whenInactive' => 
          array (
            'name' => 'whenInactive',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 234,
                'endLine' => 234,
                'startTokenPos' => 975,
                'startFilePos' => 6096,
                'endTokenPos' => 975,
                'endFilePos' => 6099,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 234,
            'endLine' => 234,
            'startColumn' => 49,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the feature is active.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @param  \\Closure  $whenActive
 * @param  \\Closure|null  $whenInactive
 * @return mixed
 */',
        'startLine' => 234,
        'endLine' => 243,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'unless' => 
      array (
        'name' => 'unless',
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
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'whenInactive' => 
          array (
            'name' => 'whenInactive',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'whenActive' => 
          array (
            'name' => 'whenActive',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 253,
                'endLine' => 253,
                'startTokenPos' => 1053,
                'startFilePos' => 6616,
                'endTokenPos' => 1053,
                'endFilePos' => 6619,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 253,
            'endLine' => 253,
            'startColumn' => 53,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the feature is inactive.
 *
 * @param  \\BackedEnum|\\UnitEnum|string  $feature
 * @param  \\Closure  $whenInactive
 * @param  \\Closure|null  $whenActive
 * @return mixed
 */',
        'startLine' => 253,
        'endLine' => 256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'activate' => 
      array (
        'name' => 'activate',
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
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 30,
            'endColumn' => 37,
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
                'startLine' => 265,
                'endLine' => 265,
                'startTokenPos' => 1102,
                'startFilePos' => 6962,
                'endTokenPos' => 1102,
                'endFilePos' => 6965,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 265,
            'endLine' => 265,
            'startColumn' => 40,
            'endColumn' => 52,
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
 * Activate the feature.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<int, \\BackedEnum|\\UnitEnum|string>  $feature
 * @param  mixed  $value
 * @return void
 */',
        'startLine' => 265,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'deactivate' => 
      array (
        'name' => 'deactivate',
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
            'startLine' => 283,
            'endLine' => 283,
            'startColumn' => 32,
            'endColumn' => 39,
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
 * Deactivate the feature.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<int, \\BackedEnum|\\UnitEnum|string>  $feature
 * @return void
 */',
        'startLine' => 283,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'forget' => 
      array (
        'name' => 'forget',
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
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 28,
            'endColumn' => 36,
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
 * Forget the flags value.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return void
 */',
        'startLine' => 301,
        'endLine' => 308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'normalize' => 
      array (
        'name' => 'normalize',
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
            'startLine' => 316,
            'endLine' => 316,
            'startColumn' => 34,
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
 * Normalize the given features to their scalar names.
 *
 * @param  \\BackedEnum|\\UnitEnum|string|array<int, \\BackedEnum|\\UnitEnum|string>  $features
 * @return array<int, mixed>
 */',
        'startLine' => 316,
        'endLine' => 321,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'aliasName' => NULL,
      ),
      'scope' => 
      array (
        'name' => 'scope',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The scope to pass to the driver.
 *
 * @return array<mixed>
 */',
        'startLine' => 328,
        'endLine' => 331,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'implementingClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
        'currentClassName' => 'Laravel\\Pennant\\PendingScopedFeatureInteraction',
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