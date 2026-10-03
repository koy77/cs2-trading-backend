<?php declare(strict_types = 1);

// odsl-/app/app/Support/SystemStatus.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Support\SystemStatus
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-d27bfeeda524c681b28424fda988d6701bff3d303967b3a33ed46d50794a3af1',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Support\\SystemStatus',
        'filename' => '/app/app/Support/SystemStatus.php',
      ),
    ),
    'namespace' => 'App\\Support',
    'name' => 'App\\Support\\SystemStatus',
    'shortName' => 'SystemStatus',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Статусы систем для панели: MySQL, Redis, RabbitMQ (+глубины очередей), Steam, PSP.
 * Тяжёлые проверки кэшируются на несколько секунд (панель поллит часто).
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 152,
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
      'APP_QUEUES' => 
      array (
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'name' => 'APP_QUEUES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'inventory.sync\', \'prices.refresh\', \'orders.fulfill\', \'trades.poll\', \'webhooks.out\']',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 48,
            'startFilePos' => 504,
            'endTokenPos' => 62,
            'endFilePos' => 588,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 116,
      ),
    ),
    'immediateProperties' => 
    array (
      'psp' => 
      array (
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'name' => 'psp',
        'modifiers' => 132,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'App\\Services\\Psp\\PspClient',
            'isIdentifier' => false,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 33,
        'endColumn' => 63,
        'isPromoted' => true,
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
          'psp' => 
          array (
            'name' => 'psp',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Services\\Psp\\PspClient',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 19,
            'endLine' => 19,
            'startColumn' => 33,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 19,
        'startColumn' => 5,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'snapshot' => 
      array (
        'name' => 'snapshot',
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
 * @return array<string, mixed>
 */',
        'startLine' => 24,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'mysql' => 
      array (
        'name' => 'mysql',
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
        'docComment' => '/** @return array{ok: bool, info: string} */',
        'startLine' => 38,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'redis' => 
      array (
        'name' => 'redis',
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
        'docComment' => '/** @return array{ok: bool, info: string} */',
        'startLine' => 52,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'rabbit' => 
      array (
        'name' => 'rabbit',
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
        'docComment' => '/** @return array{ok: bool, info: string} */',
        'startLine' => 66,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'queues' => 
      array (
        'name' => 'queues',
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
        'docComment' => '/** @return array<string, int> queue => messages_ready */',
        'startLine' => 84,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'failedJobs' => 
      array (
        'name' => 'failedJobs',
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
        'docComment' => '/** @return array{ok: bool, info: string} */',
        'startLine' => 114,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'steam' => 
      array (
        'name' => 'steam',
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
        'docComment' => '/** @return array{mode: string, min_interval: float, demo_profile: string} */',
        'startLine' => 128,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'pspHealth' => 
      array (
        'name' => 'pspHealth',
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
        'docComment' => '/** @return array{ok: bool, mode: string} */',
        'startLine' => 138,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
        'aliasName' => NULL,
      ),
      'rabbitUrl' => 
      array (
        'name' => 'rabbitUrl',
        'parameters' => 
        array (
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
        'startLine' => 148,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Support',
        'declaringClassName' => 'App\\Support\\SystemStatus',
        'implementingClassName' => 'App\\Support\\SystemStatus',
        'currentClassName' => 'App\\Support\\SystemStatus',
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