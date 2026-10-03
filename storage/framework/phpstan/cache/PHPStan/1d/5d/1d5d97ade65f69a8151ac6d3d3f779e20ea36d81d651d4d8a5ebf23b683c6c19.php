<?php declare(strict_types = 1);

// odsl-/app/app/Console/Commands/PerfRun.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Console\Commands\PerfRun
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-973b7c78516935a946a8fe96d568834d429ed7be624db3b686c444aa776278b6',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Console\\Commands\\PerfRun',
        'filename' => '/app/app/Console/Commands/PerfRun.php',
      ),
    ),
    'namespace' => 'App\\Console\\Commands',
    'name' => 'App\\Console\\Commands\\PerfRun',
    'shortName' => 'PerfRun',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Перф-тест: лёгкий батч-сид PERF_ROWS строк (по умолчанию 100k — секунды)
 * + замер «до/после индекса» с EXPLAIN. Изолированная таблица perf_listings,
 * демо-данные не трогаются. Ноутбук не страдает: всё батчами по 1000 строк.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 123,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'INDEX' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\PerfRun',
        'implementingClassName' => 'App\\Console\\Commands\\PerfRun',
        'name' => 'INDEX',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'perf_status_price_idx\'',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 19,
            'startTokenPos' => 55,
            'startFilePos' => 799,
            'endTokenPos' => 55,
            'endFilePos' => 821,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
    ),
    'immediateProperties' => 
    array (
      'signature' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\PerfRun',
        'implementingClassName' => 'App\\Console\\Commands\\PerfRun',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'perf:run {--rows=100000} {--batch=1000} {--drop : удалить индекс в конце}\'',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 35,
            'startFilePos' => 549,
            'endTokenPos' => 35,
            'endFilePos' => 642,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 122,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'App\\Console\\Commands\\PerfRun',
        'implementingClassName' => 'App\\Console\\Commands\\PerfRun',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Сид 100k строк + замер эффекта индекса (EXPLAIN, тайминги)\'',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 44,
            'startFilePos' => 675,
            'endTokenPos' => 44,
            'endFilePos' => 769,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 125,
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
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 21,
        'endLine' => 92,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\PerfRun',
        'implementingClassName' => 'App\\Console\\Commands\\PerfRun',
        'currentClassName' => 'App\\Console\\Commands\\PerfRun',
        'aliasName' => NULL,
      ),
      'measure' => 
      array (
        'name' => 'measure',
        'parameters' => 
        array (
          'where' => 
          array (
            'name' => 'where',
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
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 30,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array{ms: float, rows: string, key: string, count: int}
 */',
        'startLine' => 97,
        'endLine' => 113,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\PerfRun',
        'implementingClassName' => 'App\\Console\\Commands\\PerfRun',
        'currentClassName' => 'App\\Console\\Commands\\PerfRun',
        'aliasName' => NULL,
      ),
      'dropIndex' => 
      array (
        'name' => 'dropIndex',
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
        'startLine' => 115,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Console\\Commands',
        'declaringClassName' => 'App\\Console\\Commands\\PerfRun',
        'implementingClassName' => 'App\\Console\\Commands\\PerfRun',
        'currentClassName' => 'App\\Console\\Commands\\PerfRun',
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