<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_init
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_init',
    'parameters' => 
    array (
      'url' => 
      array (
        'name' => 'url',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 38,
            'startFilePos' => 568,
            'endTokenPos' => 38,
            'endFilePos' => 571,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 24,
        'endColumn' => 42,
        'parameterIndex' => 0,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
      'data' => 
      array (
        'types' => 
        array (
          0 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'CurlHandle',
              'isIdentifier' => false,
            ),
          ),
          1 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'false',
              'isIdentifier' => true,
            ),
          ),
        ),
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
            'code' => '[\'8.0\' => \'CurlHandle|false\']',
            'attributes' => 
            array (
              'startLine' => 14,
              'endLine' => 14,
              'startTokenPos' => 11,
              'startFilePos' => 471,
              'endTokenPos' => 17,
              'endFilePos' => 499,
            ),
          ),
          'default' => 
          array (
            'code' => '\'resource|false\'',
            'attributes' => 
            array (
              'startLine' => 14,
              'endLine' => 14,
              'startTokenPos' => 23,
              'startFilePos' => 511,
              'endTokenPos' => 23,
              'endFilePos' => 526,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Initialize a cURL session
 * @link https://php.net/manual/en/function.curl-init.php
 * @param string|null $url [optional] <p>
 * If provided, the CURLOPT_URL option will be set
 * to its value. You can manually set this using the
 * curl_setopt function.
 * </p>
 * @return resource|false|CurlHandle a cURL handle on success, false on errors.
 */',
    'startLine' => 14,
    'endLine' => 17,
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
        'name' => 'curl_init',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));