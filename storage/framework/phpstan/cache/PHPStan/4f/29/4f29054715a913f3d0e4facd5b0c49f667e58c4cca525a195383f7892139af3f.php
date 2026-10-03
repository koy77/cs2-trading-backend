<?php declare(strict_types = 1);

// odsl-/app/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php-PHPStan\BetterReflection\Reflection\ReflectionFunction-dispatch_sync
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.73.0.5-8.4-84a94be4f68fd0f749a87f05a7cb1b78ddc07c7d2121b56c6f05ff6ef80d34c6',
   'data' => 
  array (
    'name' => 'dispatch_sync',
    'parameters' => 
    array (
      'job' => 
      array (
        'name' => 'job',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 475,
        'endLine' => 475,
        'startColumn' => 28,
        'endColumn' => 31,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'handler' => 
      array (
        'name' => 'handler',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 475,
            'endLine' => 475,
            'startTokenPos' => 2157,
            'startFilePos' => 13790,
            'endTokenPos' => 2157,
            'endFilePos' => 13793,
          ),
        ),
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 475,
        'endLine' => 475,
        'startColumn' => 34,
        'endColumn' => 48,
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
 * Dispatch a command to its appropriate handler in the current process.
 *
 * Queueable jobs will be dispatched to the "sync" queue.
 *
 * @param  mixed  $job
 * @param  mixed  $handler
 * @return mixed
 */',
    'startLine' => 475,
    'endLine' => 478,
    'startColumn' => 5,
    'endColumn' => 5,
    'couldThrow' => false,
    'isClosure' => false,
    'isGenerator' => false,
    'isVariadic' => false,
    'isStatic' => false,
    'namespace' => NULL,
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'dispatch_sync',
        'filename' => '/app/vendor/composer/../laravel/framework/src/Illuminate/Foundation/helpers.php',
      ),
    ),
  ),
));