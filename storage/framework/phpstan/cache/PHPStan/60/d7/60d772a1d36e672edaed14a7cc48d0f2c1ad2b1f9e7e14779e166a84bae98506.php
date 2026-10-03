<?php declare(strict_types = 1);

// osfsl-/app/vendor/composer/../laravel/pennant/src/Feature.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Laravel\Pennant\Feature
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f2cd2659c8861101b88e6d40c0fc2d91853628ca5ea43cf51052ea7c9ba5c832-8.4-6.73.0.5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Laravel\\Pennant\\Feature',
        'filename' => '/app/vendor/composer/../laravel/pennant/src/Feature.php',
      ),
    ),
    'namespace' => 'Laravel\\Pennant',
    'name' => 'Laravel\\Pennant\\Feature',
    'shortName' => 'Feature',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @method static \\Laravel\\Pennant\\Drivers\\Decorator store(string|null $store = null)
 * @method static \\Laravel\\Pennant\\Drivers\\Decorator driver(string|null $name = null)
 * @method static \\Laravel\\Pennant\\Drivers\\ArrayDriver createArrayDriver()
 * @method static \\Laravel\\Pennant\\Drivers\\DatabaseDriver createDatabaseDriver(array $config, string $name)
 * @method static string serializeScope(mixed $scope)
 * @method static \\Laravel\\Pennant\\FeatureManager useMorphMap(bool $value = true)
 * @method static void flushCache()
 * @method static void resolveScopeUsing(callable $resolver)
 * @method static string getDefaultDriver()
 * @method static void setDefaultDriver(string $name)
 * @method static \\Laravel\\Pennant\\FeatureManager forgetDriver(array|string|null $name = null)
 * @method static \\Laravel\\Pennant\\FeatureManager forgetDrivers()
 * @method static \\Laravel\\Pennant\\FeatureManager extend(string $driver, \\Closure $callback)
 * @method static \\Laravel\\Pennant\\FeatureManager setContainer(\\Illuminate\\Container\\Container $container)
 * @method static void discover(string $namespace = \'App\\\\Features\', string|null $path = null)
 * @method static void define(\\BackedEnum|\\UnitEnum|string $feature, mixed $resolver = null)
 * @method static bool isResolverValidForScope(callable|string $resolver, mixed $scope)
 * @method static array defined()
 * @method static array stored()
 * @method static void activateForEveryone(\\BackedEnum|\\UnitEnum|string|array $feature, mixed $value = true)
 * @method static void deactivateForEveryone(\\BackedEnum|\\UnitEnum|string|array $feature)
 * @method static void purge(\\BackedEnum|\\UnitEnum|string|array|null $features = null)
 * @method static string name(\\BackedEnum|\\UnitEnum|string $feature)
 * @method static array nameMap()
 * @method static mixed instance(\\BackedEnum|\\UnitEnum|string $name)
 * @method static \\Laravel\\Pennant\\Contracts\\Driver getDriver()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 * @method static mixed macroCall(string $method, array $parameters)
 * @method static \\Laravel\\Pennant\\PendingScopedFeatureInteraction for(mixed $scope)
 * @method static \\Laravel\\Pennant\\PendingScopedFeatureInteraction globally()
 * @method static array load(\\BackedEnum|\\UnitEnum|string|array $features)
 * @method static array loadMissing(\\BackedEnum|\\UnitEnum|string|array $features)
 * @method static array loadAll()
 * @method static mixed value(\\BackedEnum|\\UnitEnum|string $feature)
 * @method static array values(array $features)
 * @method static array all()
 * @method static bool active(\\BackedEnum|\\UnitEnum|string $feature)
 * @method static bool allAreActive(array $features)
 * @method static bool someAreActive(array $features)
 * @method static bool inactive(\\BackedEnum|\\UnitEnum|string $feature)
 * @method static bool allAreInactive(array $features)
 * @method static bool someAreInactive(array $features)
 * @method static mixed when(\\BackedEnum|\\UnitEnum|string $feature, \\Closure $whenActive, \\Closure|null $whenInactive = null)
 * @method static mixed unless(\\BackedEnum|\\UnitEnum|string $feature, \\Closure $whenInactive, \\Closure|null $whenActive = null)
 * @method static void activate(\\BackedEnum|\\UnitEnum|string|array $feature, mixed $value = true)
 * @method static void deactivate(\\BackedEnum|\\UnitEnum|string|array $feature)
 * @method static void forget(\\BackedEnum|\\UnitEnum|string|array $features)
 *
 * @see FeatureManager
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 61,
    'endLine' => 72,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Facades\\Facade',
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
    ),
    'immediateMethods' => 
    array (
      'getFacadeAccessor' => 
      array (
        'name' => 'getFacadeAccessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the registered name of the component.
 *
 * @return string
 */',
        'startLine' => 68,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Laravel\\Pennant',
        'declaringClassName' => 'Laravel\\Pennant\\Feature',
        'implementingClassName' => 'Laravel\\Pennant\\Feature',
        'currentClassName' => 'Laravel\\Pennant\\Feature',
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