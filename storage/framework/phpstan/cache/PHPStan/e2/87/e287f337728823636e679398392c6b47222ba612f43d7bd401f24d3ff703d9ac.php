<?php declare(strict_types = 1);

// odsl-/app/app/Jobs/PoisonJob.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Jobs\PoisonJob
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-25466de59b9fcc7d6e70838099a87c9f00e40ed74ef9f4adf949a7d9ec082458',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Jobs\\PoisonJob',
        'filename' => '/app/app/Jobs/PoisonJob.php',
      ),
    ),
    'namespace' => 'App\\Jobs',
    'name' => 'App\\Jobs\\PoisonJob',
    'shortName' => 'PoisonJob',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Демонстрационное «отравленное» сообщение.
 *
 * Первая доставка падает намеренно → задача уходит в failed_jobs.
 * «Разобрать failed» (queue:retry all) доставляет её повторно — и она ПРОХОДИТ:
 * полный цикл «упало → разобрали → переиграли» (в жизни так реплеят задачи после фикса бага).
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 42,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Foundation\\Queue\\Queueable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'tries' => 
      array (
        'declaringClassName' => 'App\\Jobs\\PoisonJob',
        'implementingClassName' => 'App\\Jobs\\PoisonJob',
        'name' => 'tries',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 20,
            'endLine' => 20,
            'startTokenPos' => 47,
            'startFilePos' => 725,
            'endTokenPos' => 47,
            'endFilePos' => 725,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'token' => 
      array (
        'declaringClassName' => 'App\\Jobs\\PoisonJob',
        'implementingClassName' => 'App\\Jobs\\PoisonJob',
        'name' => 'token',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '\'\'',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 60,
            'startFilePos' => 891,
            'endTokenPos' => 60,
            'endFilePos' => 892,
          ),
        ),
        'docComment' => '/** Токен изолирует один «яд» от другого (флаг «уже падал» — на задачу). */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
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
          'token' => 
          array (
            'name' => 'token',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 25,
                'endLine' => 25,
                'startTokenPos' => 75,
                'startFilePos' => 944,
                'endTokenPos' => 75,
                'endFilePos' => 945,
              ),
            ),
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
            'startLine' => 25,
            'endLine' => 25,
            'startColumn' => 33,
            'endColumn' => 50,
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
        'startLine' => 25,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Jobs',
        'declaringClassName' => 'App\\Jobs\\PoisonJob',
        'implementingClassName' => 'App\\Jobs\\PoisonJob',
        'currentClassName' => 'App\\Jobs\\PoisonJob',
        'aliasName' => NULL,
      ),
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
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 30,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Jobs',
        'declaringClassName' => 'App\\Jobs\\PoisonJob',
        'implementingClassName' => 'App\\Jobs\\PoisonJob',
        'currentClassName' => 'App\\Jobs\\PoisonJob',
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