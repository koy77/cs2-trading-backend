<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_multi_close
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_multi_close',
    'parameters' => 
    array (
      'multi_handle' => 
      array (
        'name' => 'multi_handle',
        'default' => NULL,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CurlMultiHandle',
            'isIdentifier' => false,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
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
                  'startLine' => 11,
                  'endLine' => 11,
                  'startTokenPos' => 16,
                  'startFilePos' => 376,
                  'endTokenPos' => 22,
                  'endFilePos' => 403,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 11,
                  'endLine' => 11,
                  'startTokenPos' => 28,
                  'startFilePos' => 415,
                  'endTokenPos' => 28,
                  'endFilePos' => 424,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 11,
        'endLine' => 12,
        'startColumn' => 9,
        'endColumn' => 37,
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
 * Close a set of cURL handles
 * @link https://php.net/manual/en/function.curl-multi-close.php
 * @param CurlMultiHandle|resource $multi_handle A cURL multi handle returned by curl_multi_init.
 * @return void No value is returned.
 */',
    'startLine' => 10,
    'endLine' => 15,
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
        'name' => 'curl_multi_close',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));