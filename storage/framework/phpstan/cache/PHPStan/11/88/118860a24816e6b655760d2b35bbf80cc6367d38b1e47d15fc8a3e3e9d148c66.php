<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionConstant-CURLOPT_FOLLOWLOCATION
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\InternalLocatedSource',
      'data' => 
      array (
        'name' => 'CURLOPT_FOLLOWLOCATION',
        'filename' => 'phpstorm-stubs:curl/curl_d.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
    'name' => 'CURLOPT_FOLLOWLOCATION',
    'shortName' => 'CURLOPT_FOLLOWLOCATION',
    'value' => 
    array (
      'code' => '52',
      'attributes' => 
      array (
        'startLine' => 10,
        'endLine' => 10,
        'startTokenPos' => 9,
        'startFilePos' => 431,
        'endTokenPos' => 9,
        'endFilePos' => 432,
      ),
    ),
    'docComment' => '/**
 * <b>TRUE</b> to follow any "<em>Location: </em>" header that the server sends as part of the HTTP header
 * (note this is recursive, PHP will follow as many "Location: " headers that it is sent, unless <b>CURLOPT_MAXREDIRS</b> is set).
 * This constant is not available when open_basedir
 * or safe_mode are enabled.
 * @link https://www.php.net/manual/en/function.curl-setopt.php
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 10,
    'startColumn' => 1,
    'endColumn' => 36,
    'namespace' => NULL,
  ),
));