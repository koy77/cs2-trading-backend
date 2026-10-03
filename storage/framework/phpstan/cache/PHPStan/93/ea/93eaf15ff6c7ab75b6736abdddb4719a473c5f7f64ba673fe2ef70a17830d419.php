<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_multi_add_handle
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_multi_add_handle',
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
                  'startLine' => 13,
                  'endLine' => 13,
                  'startTokenPos' => 16,
                  'startFilePos' => 520,
                  'endTokenPos' => 22,
                  'endFilePos' => 547,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 13,
                  'endLine' => 13,
                  'startTokenPos' => 28,
                  'startFilePos' => 559,
                  'endTokenPos' => 28,
                  'endFilePos' => 568,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 13,
        'endLine' => 14,
        'startColumn' => 9,
        'endColumn' => 37,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'default' => NULL,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'CurlHandle',
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
                'code' => '[\'8.0\' => \'CurlHandle\']',
                'attributes' => 
                array (
                  'startLine' => 15,
                  'endLine' => 15,
                  'startTokenPos' => 40,
                  'startFilePos' => 673,
                  'endTokenPos' => 46,
                  'endFilePos' => 695,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 15,
                  'endLine' => 15,
                  'startTokenPos' => 52,
                  'startFilePos' => 707,
                  'endTokenPos' => 52,
                  'endFilePos' => 716,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 15,
        'endLine' => 16,
        'startColumn' => 9,
        'endColumn' => 26,
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
        'name' => 'int',
        'isIdentifier' => true,
      ),
    ),
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Add a normal cURL handle to a cURL multi handle
 * @link https://php.net/manual/en/function.curl-multi-add-handle.php
 * @param CurlMultiHandle|resource $multi_handle A cURL multi handle returned by curl_multi_init.
 * @param CurlHandle|resource $handle A cURL handle returned by curl_init.
 * @return int 0 on success, or one of the CURLM_XXX errors
 * code.
 */',
    'startLine' => 12,
    'endLine' => 19,
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
        'name' => 'curl_multi_add_handle',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));