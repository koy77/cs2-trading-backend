<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionConstant-CURLINFO_REDIRECT_URL
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\InternalLocatedSource',
      'data' => 
      array (
        'name' => 'CURLINFO_REDIRECT_URL',
        'filename' => 'phpstorm-stubs:curl/curl_d.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
    'name' => 'CURLINFO_REDIRECT_URL',
    'shortName' => 'CURLINFO_REDIRECT_URL',
    'value' => 
    array (
      'code' => '1048607',
      'attributes' => 
      array (
        'startLine' => 11,
        'endLine' => 11,
        'startTokenPos' => 9,
        'startFilePos' => 428,
        'endTokenPos' => 9,
        'endFilePos' => 434,
      ),
    ),
    'docComment' => '/**
 * With the <b>CURLOPT_FOLLOWLOCATION</b> option disabled:
 *   redirect URL found in the last transaction, that should be requested manually next.
 * With the <b>CURLOPT_FOLLOWLOCATION</b> option enabled:
 *   this is empty. The redirect URL in this case is available in <b>CURLINFO_EFFECTIVE_URL</b>
 * @link https://www.php.net/manual/en/function.curl-getinfo.php
 * @since 5.3
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 11,
    'startColumn' => 1,
    'endColumn' => 40,
    'namespace' => NULL,
  ),
));