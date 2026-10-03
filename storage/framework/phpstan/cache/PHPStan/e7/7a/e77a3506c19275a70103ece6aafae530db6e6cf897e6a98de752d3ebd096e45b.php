<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_multi_select
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_multi_select',
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
                  'startLine' => 16,
                  'endLine' => 16,
                  'startTokenPos' => 16,
                  'startFilePos' => 783,
                  'endTokenPos' => 22,
                  'endFilePos' => 810,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 16,
                  'endLine' => 16,
                  'startTokenPos' => 28,
                  'startFilePos' => 822,
                  'endTokenPos' => 28,
                  'endFilePos' => 831,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 16,
        'endLine' => 17,
        'startColumn' => 9,
        'endColumn' => 37,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'timeout' => 
      array (
        'name' => 'timeout',
        'default' => 
        array (
          'code' => '1.0',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 18,
            'startTokenPos' => 43,
            'startFilePos' => 899,
            'endTokenPos' => 43,
            'endFilePos' => 901,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'float',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 18,
        'startColumn' => 9,
        'endColumn' => 28,
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
        'name' => 'int',
        'isIdentifier' => true,
      ),
    ),
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Wait for activity on any curl_multi connection
 * @link https://php.net/manual/en/function.curl-multi-select.php
 * @param CurlMultiHandle|resource $multi_handle A cURL multi handle returned by curl_multi_init.
 * @param float $timeout [optional] <p>
 * Time, in seconds, to wait for a response.
 * </p>
 * @return int On success, returns the number of descriptors contained in,
 * the descriptor sets. On failure, this function will return -1 on a select failure or timeout (from the underlying select system call).
 * @throws \\ValueError Throws a ValueError if timeout is less than 0 or greater than PHP_INT_MAX.
 */',
    'startLine' => 15,
    'endLine' => 21,
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
        'name' => 'curl_multi_select',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));