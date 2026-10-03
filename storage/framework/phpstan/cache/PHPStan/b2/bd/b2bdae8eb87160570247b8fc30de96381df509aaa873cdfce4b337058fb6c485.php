<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_multi_remove_handle
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_multi_remove_handle',
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
                  'startTokenPos' => 35,
                  'startFilePos' => 646,
                  'endTokenPos' => 41,
                  'endFilePos' => 673,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 13,
                  'endLine' => 13,
                  'startTokenPos' => 47,
                  'startFilePos' => 685,
                  'endTokenPos' => 47,
                  'endFilePos' => 694,
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
                  'startTokenPos' => 59,
                  'startFilePos' => 799,
                  'endTokenPos' => 65,
                  'endFilePos' => 821,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 15,
                  'endLine' => 15,
                  'startTokenPos' => 71,
                  'startFilePos' => 833,
                  'endTokenPos' => 71,
                  'endFilePos' => 842,
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
      0 => 
      array (
        'name' => 'JetBrains\\PhpStorm\\Internal\\LanguageLevelTypeAware',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '[\'8.0\' => \'int\']',
            'attributes' => 
            array (
              'startLine' => 11,
              'endLine' => 11,
              'startTokenPos' => 11,
              'startFilePos' => 504,
              'endTokenPos' => 17,
              'endFilePos' => 519,
            ),
          ),
          'default' => 
          array (
            'code' => '\'int|false\'',
            'attributes' => 
            array (
              'startLine' => 11,
              'endLine' => 11,
              'startTokenPos' => 23,
              'startFilePos' => 531,
              'endTokenPos' => 23,
              'endFilePos' => 541,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Remove a multi handle from a set of cURL handles
 * @link https://php.net/manual/en/function.curl-multi-remove-handle.php
 * @param CurlMultiHandle|resource $multi_handle A cURL multi handle returned by curl_multi_init.
 * @param CurlHandle|resource $handle A cURL handle returned by curl_init.
 * @return int|false On success, returns one of the CURLM_XXX error codes, false on failure.
 */',
    'startLine' => 11,
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
        'name' => 'curl_multi_remove_handle',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));