<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_multi_exec
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_multi_exec',
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
                  'startLine' => 19,
                  'endLine' => 19,
                  'startTokenPos' => 16,
                  'startFilePos' => 766,
                  'endTokenPos' => 22,
                  'endFilePos' => 793,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 19,
                  'endLine' => 19,
                  'startTokenPos' => 28,
                  'startFilePos' => 805,
                  'endTokenPos' => 28,
                  'endFilePos' => 814,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 19,
        'endLine' => 20,
        'startColumn' => 9,
        'endColumn' => 37,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'still_running' => 
      array (
        'name' => 'still_running',
        'default' => NULL,
        'type' => NULL,
        'isVariadic' => false,
        'byRef' => true,
        'isPromoted' => false,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'JetBrains\\PhpStorm\\Internal\\PhpStormStubsElementAvailable',
            'isRepeated' => false,
            'arguments' => 
            array (
              'from' => 
              array (
                'code' => '\'8.0\'',
                'attributes' => 
                array (
                  'startLine' => 21,
                  'endLine' => 21,
                  'startTokenPos' => 43,
                  'startFilePos' => 932,
                  'endTokenPos' => 43,
                  'endFilePos' => 936,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 21,
        'endLine' => 22,
        'startColumn' => 9,
        'endColumn' => 23,
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
 * Run the sub-connections of the current cURL handle
 * @link https://php.net/manual/en/function.curl-multi-exec.php
 * @param CurlMultiHandle|resource $multi_handle A cURL multi handle returned by curl_multi_init.
 * @param int &$still_running <p>
 * A reference to a flag to tell whether the operations are still running.
 * </p>
 * @return int A cURL code defined in the cURL Predefined Constants.
 * <p>
 * This only returns errors regarding the whole multi stack. There might still have
 * occurred problems on individual transfers even when this function returns
 * CURLM_OK.
 * </p>
 */',
    'startLine' => 18,
    'endLine' => 25,
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
        'name' => 'curl_multi_exec',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));