<?php declare(strict_types = 1);

// phpinternal-PHPStan\BetterReflection\Reflection\ReflectionFunction-curl_getinfo
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v3-6.73.0.5-dev-master@e4f5f6c-8.4-',
   'data' => 
  array (
    'name' => 'curl_getinfo',
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
                  'startLine' => 266,
                  'endLine' => 266,
                  'startTokenPos' => 23,
                  'startFilePos' => 13988,
                  'endTokenPos' => 29,
                  'endFilePos' => 14010,
                ),
              ),
              'default' => 
              array (
                'code' => '\'resource\'',
                'attributes' => 
                array (
                  'startLine' => 266,
                  'endLine' => 266,
                  'startTokenPos' => 35,
                  'startFilePos' => 14022,
                  'endTokenPos' => 35,
                  'endFilePos' => 14031,
                ),
              ),
            ),
          ),
        ),
        'startLine' => 266,
        'endLine' => 267,
        'startColumn' => 9,
        'endColumn' => 26,
        'parameterIndex' => 0,
        'isOptional' => false,
      ),
      'option' => 
      array (
        'name' => 'option',
        'default' => 
        array (
          'code' => '\\null',
          'attributes' => 
          array (
            'startLine' => 268,
            'endLine' => 268,
            'startTokenPos' => 51,
            'startFilePos' => 14086,
            'endTokenPos' => 51,
            'endFilePos' => 14089,
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
                  'name' => 'int',
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
        'startLine' => 268,
        'endLine' => 268,
        'startColumn' => 9,
        'endColumn' => 27,
        'parameterIndex' => 1,
        'isOptional' => true,
      ),
    ),
    'returnsReference' => false,
    'returnType' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
      'data' => 
      array (
        'name' => 'mixed',
        'isIdentifier' => true,
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
              'startLine' => 264,
              'endLine' => 264,
              'startTokenPos' => 11,
              'startFilePos' => 13892,
              'endTokenPos' => 11,
              'endFilePos' => 13895,
            ),
          ),
        ),
      ),
    ),
    'docComment' => '/**
 * Get information regarding a specific transfer
 * @link https://php.net/manual/en/function.curl-getinfo.php
 * @param CurlHandle|resource $handle A cURL handle returned by curl_init.
 * @param int|null $option [optional] <p>
 * This may be one of the following constants:
 * <ul>
 *   <li>
 *     <strong><code class="code">CURLINFO_EFFECTIVE_URL</code></strong> - Last effective URL
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTP_CODE</code></strong> - The last response code. As of cURL 7.10.8, this is a legacy alias of
 *     <strong><code class="code">CURLINFO_RESPONSE_CODE</code>
 *     </strong>
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_FILETIME</code></strong> - Remote time of the retrieved document, with the
 *     <strong><code class="code">CURLOPT_FILETIME</code>
 *     </strong> enabled; if -1 is returned the time of the document is unknown
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_TOTAL_TIME</code></strong> - Total transaction time in seconds for last transfer
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_NAMELOOKUP_TIME</code></strong> - Time in seconds until name resolving was complete
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONNECT_TIME</code></strong> - Time in seconds it took to establish the connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRETRANSFER_TIME</code></strong> - Time in seconds from start until just before file transfer begins
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_STARTTRANSFER_TIME</code></strong> - Time in seconds until the first byte is about to be transferred
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_COUNT</code></strong> - Number of redirects, with the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option enabled
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_TIME</code></strong> - Time in seconds of all redirection steps before final transaction was started, with the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option enabled
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_URL</code></strong> - With the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option disabled: redirect URL found in the last transaction, that should be requested manually next. With the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option enabled: this is empty. The redirect URL in this case is available in
 *     <strong><code class="code">CURLINFO_EFFECTIVE_URL</code>
 *     </strong>
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRIMARY_IP</code></strong> - IP address of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRIMARY_PORT</code></strong> - Destination port of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_LOCAL_IP</code></strong> - Local (source) IP address of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_LOCAL_PORT</code></strong> - Local (source) port of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_UPLOAD</code></strong> - Total number of bytes uploaded
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_DOWNLOAD</code></strong> - Total number of bytes downloaded
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_DOWNLOAD</code></strong> - Average download speed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_UPLOAD</code></strong> - Average upload speed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HEADER_SIZE</code></strong> - Total size of all headers received
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HEADER_OUT</code></strong> - The request string sent. For this to work, add the
 *     <strong><code class="code">CURLINFO_HEADER_OUT</code>
 *     </strong> option to the handle by calling curl_setopt()
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REQUEST_SIZE</code></strong> - Total size of issued requests, currently only for HTTP requests
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SSL_VERIFYRESULT</code></strong> - Result of SSL certification verification requested by setting
 *     <strong><code class="code">CURLOPT_SSL_VERIFYPEER</code>
 *     </strong>
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_DOWNLOAD</code></strong> - Content length of download, read from
 *     <code class="code">Content-Length:</code> field
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_UPLOAD</code></strong> - Specified size of upload
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_TYPE</code>
 *     </strong> -
 *     <code class="code">Content-Type:</code> of the requested document. NULL indicates server did not send valid
 *     <code class="code">Content-Type:</code> header
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRIVATE</code></strong> - Private data associated with this cURL handle, previously set with the
 *     <strong><code class="code">CURLOPT_PRIVATE</code>
 *     </strong> option of curl_setopt()
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RESPONSE_CODE</code></strong> - The last response code
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTP_CONNECTCODE</code></strong> - The CONNECT response code
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTPAUTH_AVAIL</code></strong> - Bitmask indicating the authentication method(s) available according to the previous response
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PROXYAUTH_AVAIL</code></strong> - Bitmask indicating the proxy authentication method(s) available according to the previous response
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_OS_ERRNO</code></strong> - Errno from a connect failure. The number is OS and system specific.
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_NUM_CONNECTS</code></strong> - Number of connections curl had to create to achieve the previous transfer
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SSL_ENGINES</code></strong> - OpenSSL crypto-engines supported
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_COOKIELIST</code></strong> - All known cookies
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_FTP_ENTRY_PATH</code></strong> - Entry path in FTP server
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_APPCONNECT_TIME</code></strong> - Time in seconds it took from the start until the SSL/SSH connect/handshake to the remote host was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CERTINFO</code></strong> - TLS certificate chain
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONDITION_UNMET</code></strong> - Info on unmet time conditional
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_CLIENT_CSEQ</code></strong> - Next RTSP client CSeq
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_CSEQ_RECV</code></strong> - Recently received CSeq
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_SERVER_CSEQ</code></strong> - Next RTSP server CSeq
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_SESSION_ID</code></strong> - RTSP session ID
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_DOWNLOAD_T</code></strong> - The content-length of the download. This is the value read from the
 *     <code class="code">Content-Type:</code> field. -1 if the size isn\'t known
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_UPLOAD_T</code></strong> - The specified size of the upload. -1 if the size isn\'t known
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTP_VERSION</code></strong> - The version used in the last HTTP connection. The return value will be one of the defined
 *     <strong><code class="code">CURL_HTTP_VERSION_*</code>
 *     </strong> constants or 0 if the version can\'t be determined
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PROTOCOL</code></strong> - The protocol used in the last HTTP connection. The returned value will be exactly one of the
 *     <strong><code class="code">CURLPROTO_*</code>
 *     </strong> values
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PROXY_SSL_VERIFYRESULT</code></strong> - The result of the certificate verification that was requested (using the
 *     <strong><code class="code">CURLOPT_PROXY_SSL_VERIFYPEER</code>
 *     </strong> option). Only used for HTTPS proxies
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SCHEME</code></strong> - The URL scheme used for the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_DOWNLOAD_T</code></strong> - Total number of bytes that were downloaded. The number is only for the latest transfer and will be reset again for each new transfer
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_UPLOAD_T</code></strong> - Total number of bytes that were uploaded
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_DOWNLOAD_T</code></strong> - The average download speed in bytes/second that curl measured for the complete download
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_UPLOAD_T</code></strong> - The average upload speed in bytes/second that curl measured for the complete upload
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_APPCONNECT_TIME_T</code></strong> - Time, in microseconds, it took from the start until the SSL/SSH connect/handshake to the remote host was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONNECT_TIME_T</code></strong> - Total time taken, in microseconds, from the start until the connection to the remote host (or proxy) was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_FILETIME_T</code></strong> - Remote time of the retrieved document (as Unix timestamp), an alternative to
 *     <strong><code class="code">CURLINFO_FILETIME</code>
 *     </strong> to allow systems with 32 bit long variables to extract dates outside of the 32bit timestamp range
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_NAMELOOKUP_TIME_T</code></strong> - Time in microseconds from the start until the name resolving was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRETRANSFER_TIME_T</code></strong> - Time taken from the start until the file transfer is just about to begin, in microseconds
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_TIME_T</code></strong> - Total time, in microseconds, it took for all redirection steps include name lookup, connect, pretransfer and transfer before final transaction was started
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_STARTTRANSFER_TIME_T</code></strong> - Time, in microseconds, it took from the start until the first byte is received
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_TOTAL_TIME_T</code></strong> - Total time in microseconds for the previous transfer, including name resolving, TCP connect etc.
 * </ul>
 *
 * @return mixed If <em><code class="parameter">$option</code></em> is given, returns its value as a string.
 * Otherwise, returns an associative array with the following elements
 * (which correspond to <em><code class="parameter">$option</code></em>), or false on failure:
 * <ul>
 *   <li>url</li>
 *   <li>content_type</li>
 *   <li>http_code</li>
 *   <li>header_size</li>
 *   <li>request_size</li>
 *   <li>filetime</li>
 *   <li>ssl_verify_result</li>
 *   <li>redirect_count</li>
 *   <li>total_time</li>
 *   <li>namelookup_time</li>
 *   <li>connect_time</li>
 *   <li>pretransfer_time</li>
 *   <li>size_upload</li>
 *   <li>size_download</li>
 *   <li>speed_download</li>
 *   <li>speed_upload</li>
 *   <li>download_content_length</li>
 *   <li>upload_content_length</li>
 *   <li>starttransfer_time</li>
 *   <li>redirect_time</li>
 *   <li>certinfo</li>
 *   <li>primary_ip</li>
 *   <li>primary_port</li>
 *   <li>local_ip</li>
 *   <li>local_port</li>
 *   <li>redirect_url</li>
 *   <li>request_header (This is only set if the
 *     <strong><code>CURLINFO_HEADER_OUT</code>
 *     </strong> is set by a previous call to curl_setopt()
 *   </li>
 * </ul>
 */',
    'startLine' => 264,
    'endLine' => 271,
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
        'name' => 'curl_getinfo',
        'filename' => 'phpstorm-stubs:curl/curl.stub',
        'extensionName' => 'curl',
        'aliasName' => NULL,
      ),
    ),
  ),
));