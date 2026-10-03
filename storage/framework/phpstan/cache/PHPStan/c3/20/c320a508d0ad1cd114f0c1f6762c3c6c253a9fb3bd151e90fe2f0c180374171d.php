<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-microtime
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'microtime',
    'parameters' => 
    array (
      'as_float' => 
      array (
        'name' => 'as_float',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 42,
            'startFilePos' => 1324,
            'endTokenPos' => 42,
            'endFilePos' => 1328,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'JetBrains\\PhpStorm\\Internal\\ReturnTypeContract',
            'isRepeated' => false,
            'arguments' => 
            array (
              'true' => 
              array (
                'code' => '"float"',
                'attributes' => 
                array (
                  'startLine' => 26,
                  'endLine' => 26,
                  'startTokenPos' => 26,
                  'startFilePos' => 1272,
                  'endTokenPos' => 26,
                  'endFilePos' => 1278,
                ),
              ),
              'false' => 
              array (
                'code' => '"string"',
                'attributes' => 
                array (
                  'startLine' => 26,
                  'endLine' => 26,
                  'startTokenPos' => 32,
                  'startFilePos' => 1288,
                  'endTokenPos' => 32,
                  'endFilePos' => 1295,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 26,
        'endLine' => 27,
        'startColumn' => 9,
        'endColumn' => 30,
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
              'name' => 'string',
              'isIdentifier' => true,
            ),
          ),
          1 => 
          array (
            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
            'data' => 
            array (
              'name' => 'float',
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
        'name' => 'JetBrains\\PhpStorm\\Pure',
        'isRepeated' => false,
        'arguments' => 
        array (
          0 => 
          array (
            'code' => '\\true',
            'attributes' => 
            array (
              'startLine' => 24,
              'endLine' => 24,
              'startTokenPos' => 11,
              'startFilePos' => 1177,
              'endTokenPos' => 11,
              'endFilePos' => 1180,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Return current Unix timestamp with microseconds
 * @link https://php.net/manual/en/function.microtime.php
 * @param bool $as_float [optional] <p>
 * When called without the optional argument, this function returns the string
 * "msec sec" where sec is the current time measured in the number of
 * seconds since the Unix Epoch (0:00:00 January 1, 1970 GMT), and
 * msec is the microseconds part.
 * Both portions of the string are returned in units of seconds.
 * </p>
 * <p>
 * If the optional get_as_float is set to
 * true then a float (in seconds) is returned.
 * </p>
 * @return string|float By default, microtime returns a string in the form "msec sec", where sec is
 * the number of seconds since the Unix epoch (0:00:00 January 1,1970 GMT), and msec measures
 * microseconds that have elapsed since sec and is also expressed in seconds as a decimal fraction.
 * If as_float is set to true, then microtime returns a float, which represents the current time in
 * seconds since the Unix epoch accurate to the nearest microsecond.
 */',
    'startLine' => 24,
    'endLine' => 30,
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
        'name' => 'microtime',
        'filename' => 'phpstorm-stubs:standard/standard_3.stub',
        'extensionName' => 'standard',
        'aliasName' => NULL,
      ),
    ),
  ),
));