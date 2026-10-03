<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_setopt_array
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_setopt_array',
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
                  'startLine' => 19,
                  'endLine' => 19,
                  'startTokenPos' => 16,
                  'startFilePos' => 748,
                  'endTokenPos' => 22,
                  'endFilePos' => 770,
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
                  'startFilePos' => 782,
                  'endTokenPos' => 28,
                  'endFilePos' => 791,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 19,
        'endLine' => 20,
        'startColumn' => 9,
        'endColumn' => 26,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'options' => 
      array (
        'name' => 'options',
        'default' => NULL,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 21,
        'endLine' => 21,
        'startColumn' => 9,
        'endColumn' => 22,
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
        'name' => 'bool',
        'isIdentifier' => true,
      ),
    ),
    'attributes' => 
    array (
    ),
    'docComment' => '/**
 * Set multiple options for a cURL transfer
 * @link https://php.net/manual/en/function.curl-setopt-array.php
 * @param CurlHandle|resource $handle A cURL handle returned by curl_init.
 * @param array $options <p>
 * An array specifying which options to set and their values.
 * The keys should be valid curl_setopt constants or
 * their integer equivalents.
 * </p>
 * @return bool true if all options were successfully set. If an option could
 * not be successfully set, false is immediately returned, ignoring any
 * future options in the options array.
 * @since 5.1
 */',
    'startLine' => 18,
    'endLine' => 24,
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
        'name' => 'curl_setopt_array',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));