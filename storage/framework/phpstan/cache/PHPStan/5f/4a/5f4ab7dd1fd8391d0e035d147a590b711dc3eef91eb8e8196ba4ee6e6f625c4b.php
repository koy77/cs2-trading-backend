<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_close
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_close',
    'parameters' => 
    array (
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
                  'startLine' => 12,
                  'endLine' => 12,
                  'startTokenPos' => 29,
                  'startFilePos' => 418,
                  'endTokenPos' => 35,
                  'endFilePos' => 440,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 12,
                  'endLine' => 12,
                  'startTokenPos' => 41,
                  'startFilePos' => 452,
                  'endTokenPos' => 41,
                  'endFilePos' => 461,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 12,
        'endLine' => 13,
        'startColumn' => 9,
        'endColumn' => 26,
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
      0 => 
      array (
        'name' => 'JetBrains\\PhpStorm\\Deprecated',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\'Deprecated: it has no effect\'',
            'attributes' => 
            array (
              'startLine' => 10,
              'endLine' => 10,
              'startTokenPos' => 11,
              'startFilePos' => 284,
              'endTokenPos' => 11,
              'endFilePos' => 313,
            ),
          ),
          'since' => 
          array (
            'code' => '\'8.5\'',
            'attributes' => 
            array (
              'startLine' => 10,
              'endLine' => 10,
              'startTokenPos' => 17,
              'startFilePos' => 323,
              'endTokenPos' => 17,
              'endFilePos' => 327,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Close a cURL session
 * @link https://php.net/manual/en/function.curl-close.php
 * @param CurlHandle|resource $handle A cURL handle returned by curl_init.
 * @return void No value is returned.
 */',
    'startLine' => 10,
    'endLine' => 16,
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
        'name' => 'curl_close',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));