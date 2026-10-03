<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-simplexml_load_string
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'simplexml_load_string',
    'parameters' => 
    array (
      'data' => 
      array (
        'name' => 'data',
        'default' => NULL,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 36,
        'endColumn' => 47,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'class_name' => 
      array (
        'name' => 'class_name',
        'default' => 
        array (
          'code' => '"SimpleXMLElement"',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 24,
            'startFilePos' => 1210,
            'endTokenPos' => 24,
            'endFilePos' => 1227,
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
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 50,
        'endColumn' => 89,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
      'options' => 
      array (
        'name' => 'options',
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 33,
            'startFilePos' => 1245,
            'endTokenPos' => 33,
            'endFilePos' => 1245,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 92,
        'endColumn' => 107,
        'parameterIndex' => 2,
        'isOptional' => true,
      ),
      'namespace_or_prefix' => 
      array (
        'name' => 'namespace_or_prefix',
        'default' => 
        array (
          'code' => '""',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 42,
            'startFilePos' => 1278,
            'endTokenPos' => 42,
            'endFilePos' => 1279,
          ),
        ),
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'isVariadic' => false,
        'byRef' => false,
        'isPromoted' => false,
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 110,
        'endColumn' => 141,
        'parameterIndex' => 3,
        'isOptional' => true,
      ),
      'is_prefix' => 
      array (
        'name' => 'is_prefix',
        'default' => 
        array (
          'code' => '\\false',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 31,
            'startTokenPos' => 51,
            'startFilePos' => 1300,
            'endTokenPos' => 51,
            'endFilePos' => 1304,
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
        ),
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 144,
        'endColumn' => 166,
        'parameterIndex' => 4,
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
              'name' => 'SimpleXMLElement',
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
    ),
    'docComment' => '/**
 * Interprets a string of XML into an object
 * @link https://php.net/manual/en/function.simplexml-load-string.php
 * @param string $data <p>
 * A well-formed XML string
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_load_string</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @param int $options [optional] <p>
 * Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <i>options</i> parameter to specify additional Libxml parameters.
 * </p>
 * @param string $namespace_or_prefix [optional] <p>
 * Namespace prefix or URI.
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <b>TRUE</b> if <i>ns</i> is a prefix, <b>FALSE</b> if it\'s a URI;
 * defaults to <b>FALSE</b>.
 * </p>
 * @return SimpleXMLElement|false an object of class SimpleXMLElement with
 * properties containing the data held within the xml document, or <b>FALSE</b> on failure.
 * @meta
 */',
    'startLine' => 31,
    'endLine' => 33,
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
        'name' => 'simplexml_load_string',
        'filename' => 'phpstorm-stubs:SimpleXML/SimpleXML.stub',
        'extensionName' => 'SimpleXML',
        'aliasName' => NULL,
      ),
    ),
  ),
));