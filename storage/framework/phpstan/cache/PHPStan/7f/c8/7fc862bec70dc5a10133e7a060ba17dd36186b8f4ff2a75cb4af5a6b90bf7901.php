<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_multi_init
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_multi_init',
    'parameters' => 
    array (
    ),
    'returnsReference' => false,
    'returnType' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
      'data' => 
      array (
        'name' => 'CurlMultiHandle',
        'isIdentifier' => false,
      ),
    ),
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '[\'8.0\' => \'CurlMultiHandle\']',
            'attributes' => 
            array (
              'startLine' => 9,
              'endLine' => 9,
              'startTokenPos' => 11,
              'startFilePos' => 306,
              'endTokenPos' => 17,
              'endFilePos' => 333,
            ),
          ),
          'default' => 
          array (
            'code' => '\'resource\'',
            'attributes' => 
            array (
              'startLine' => 9,
              'endLine' => 9,
              'startTokenPos' => 23,
              'startFilePos' => 345,
              'endTokenPos' => 23,
              'endFilePos' => 354,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Returns a new cURL multi handle
 * @link https://php.net/manual/en/function.curl-multi-init.php
 * @return resource|CurlMultiHandle a cURL multi handle resource or object depends on the php version
 */',
    'startLine' => 9,
    'endLine' => 12,
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
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\InternalLocatedSource',
      'data' => 
      array (
        'name' => 'curl_multi_init',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));