<?php

/**
 * \AppserverIo\Psr\HttpMessage\Protocol
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Johann Zelger <jz@appserver.io>
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\HttpMessage;

/**
 * Basic constants for usage with the HTTP protocol.
 *
 * @author    Johann Zelger <jz@appserver.io>
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/http-message
 * @link      http://www.appserver.io
 * @link      http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html
 */
class Protocol
{

    /**
     * Header name value separator
     *
     * @var string
     */
    const HEADER_SEPARATOR = ': ';

    /**
     * Status header name.
     *
     * @var string
     */
    const HEADER_STATUS = 'Status';

    /**
     * Date header name.
     *
     * @var string
     */
    const HEADER_DATE = 'Date';

    /**
     * Connection header name.
     *
     * @var string
     */
    const HEADER_CONNECTION = 'Connection';

    /**
     * Connection header value for close
     *
     * @var string
     */
    const HEADER_CONNECTION_VALUE_CLOSE = 'Close';

    /**
     * Connection header value for keep-alive
     *
     * @var string
     */
    const HEADER_CONNECTION_VALUE_KEEPALIVE = 'Keep-Alive';

    /**
     * Content-Type header name.
     *
     * @var string
     */
    const HEADER_CONTENT_TYPE = 'Content-Type';

    /**
     * If-None-Match header name
     *
     * @var string
     */
    const HEADER_IF_NONE_MATCH = 'If-None-Match';

    /**
     * Content-Disposition header name.
     *
     * @var string
     */
    const HEADER_CONTENT_DISPOSITION = 'Content-Disposition';

    /**
     * Content-Length header name.
     *
     * @var string
     */
    const HEADER_CONTENT_LENGTH = 'Content-Length';

    /**
     * Content-Encoding header name.
     *
     * @var string
     */
    const HEADER_CONTENT_ENCODING = 'Content-Encoding';

    /**
     * Cache-Control header name.
     *
     * @var string
     */
    const HEADER_CACHE_CONTROL = 'Cache-Control';

    /**
     * Pragma header name.
     *
     * @var string
     */
    const HEADER_PRAGMA = 'Pragma';

    /**
     * Proxy-Connection header name
     *
     * @var string
     */
    const HEADER_PROXY_CONNECTION = 'Proxy-Connection';

    /**
     * X-Forward header name
     *
     * @var string
     */
    const HEADER_X_FORWARD = 'X-Forward';

    /**
     * Status header name.
     *
     * @var string
     */
    const HEADER_LAST_MODIFIED = 'Last-Modified';

    /**
     * Expires header name.
     *
     * @var string
     */
    const HEADER_EXPIRES = 'Expires';

    /**
     * If-Modified-Since header name.
     *
     * @var string
     */
    const HEADER_IF_MODIFIED_SINCE = 'If-Modified-Since';

    /**
     * Location header name.
     *
     * @var string
     */
    const HEADER_LOCATION = 'Location';

    /**
     * X-Powered-By header name.
     *
     * @var string
     */
    const HEADER_X_POWERED_BY = 'X-Powered-By';

    /**
     * Cookie header name.
     *
     * @var string
     */
    const HEADER_COOKIE = 'Cookie';

    /**
     * Set-Cookie header name.
     *
     * @var string
     */
    const HEADER_SET_COOKIE = 'Set-Cookie';

    /**
     * Host header name.
     *
     * @var string
     */
    const HEADER_HOST = 'Host';

    /**
     * Accept header name.
     *
     * @var string
     */
    const HEADER_ACCEPT = 'Accept';

    /**
     * Accept-Charset header name
     *
     * @var string
     */
    const HEADER_ACCEPT_CHARSET = 'Accept-Charset';

    /**
     * Accept-Language header name.
     *
     * @var string
     */
    const HEADER_ACCEPT_LANGUAGE = 'Accept-Language';

    /**
     * Accept-Encoding header name.
     *
     * @var string
     */
    const HEADER_ACCEPT_ENCODING = 'Accept-Encoding';

    /**
     * User-Agent header name.
     *
     * @var string
     */
    const HEADER_USER_AGENT = 'User-Agent';

    /**
     * Referer header name.
     *
     * @var string
     */
    const HEADER_REFERER = 'Referer';

    /**
     * Keep-Alive header name.
     *
     * @var string
     */
    const HEADER_KEEP_ALIVE = 'Keep-Alive';

    /**
     * Server header name.
     *
     * @var string
     */
    const HEADER_SERVER = 'Server';

    /**
     * WWW-Authenticate header name.
     *
     * @var string
     */
    const HEADER_WWW_AUTHENTICATE = 'WWW-Authenticate';

    /**
     * Authorization header name.
     *
     * @var string
     */
    const HEADER_AUTHORIZATION = 'Authorization';

    /**
     * ETag header name.
     *
     * @var string
     */
    const HEADER_ETAG = 'ETag';

    /**
     * Mainly used to identify Ajax requests.
     * Most JavaScript frameworks send this header with value of XMLHttpRequest
     *
     * @var string
     */
    const HEADER_X_REQUESTED_WITH = 'X-Requested-With';

    /**
     * Access-Control-Allow-Origin header name.
     *
     * @var string
     */
    const HEADER_ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';

    /**
     * Access-Control-Allow-Credentials header name.
     *
     * @var string
     */
    const HEADER_ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';

    /**
     * Access-Control-Allow-Headers header name.
     *
     * @var string
     */
    const HEADER_ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';

    /**
     * Access-Control-Allow-Methods header name.
     *
     * @var string
     */
    const HEADER_ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';

    /**
     * Forwarded header name.
     *
     * @var string
     */
    const HEADER_FORWARDED = 'Forwarded';

    /**
     * The X-Frame-Options header has to be included in the HTTP response to protect browsers against
     * 'ClickJacking' attacks.
     *
     * @var string
     * @link http://blogs.msdn.com/b/ieinternals/archive/2010/03/30/combating-clickjacking-with-x-frame-options.aspx
     */
    const HEADER_X_FRAME_OPTIONS = 'X-Frame-Options';

    /**
     * If the X-Frame-Options value contains the token Deny, browsers will prevent the page from rendering if it will
     * be contained within a frame.
     *
     * @var string
     */
    const HEADER_X_FRAME_OPTIONS_VALUE_DENY = 'Deny';

    /**
     * If the X-Frame-Options value contains the token Sameorigin, the browser will block rendering only if the origin
     * of the top-level browsing-context is different than the origin of the content containing the X-Frame-Options
     * directive.
     *
     * @var string
     */
    const HEADER_X_FRAME_OPTIONS_VALUE_SAMEORIGIN = 'Sameorigin';

    /**
     * If the value contains the token Allow-From origin, the browser will block rendering only if the origin of the
     * top-level browsing context is different than the origin value supplied with the Allow-From directive.
     *
     * @var string
     */
    const HEADER_X_FRAME_OPTIONS_VALUE_ALLOW_FROM = 'Allow-From';

    /**
     * The X-XSS-Protection HTTP response header allows the web server to enable or disable the web browser's XSS
     * protection mechanism.
     *
     * @var string
     * @link https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet
     * @link https://blog.veracode.com/2014/03/guidelines-for-setting-security-headers/
     */
    const HEADER_X_XSS_PROTECTION = 'X-XSS-Protection';

    /**
     * Ensures that the web browser's XSS filter is enabled.
     *
     * @var string
     */
    const HEADER_X_XSS_PROTECTION_VALUE_ON = 1;

    /**
     * Ensures that the web browser's XSS filter is disabled.
     *
     * @var string
     */
    const HEADER_X_XSS_PROTECTION_VALUE_OFF = 0;

    /**
     * If the Anti-MIME-Sniffing header X-Content-Type-Options was not set to 'nosniff', older versions of Internet
     * Explorer and Chrome are able to perform MIME-sniffing on the response body, potentially causing the response
     * body to be interpreted and displayed as a content type other than the declared content type.
     *
     * @var string
     * @link https://www.owasp.org/index.php/List_of_useful_HTTP_headers
     * @link http://msdn.microsoft.com/en-us/library/ie/gg622941%28v=vs.85%29.aspx
     */
    const HEADER_X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';

    /**
     * If the value of the X-Content-Type-Options is set to Nosniff, older versions of Internet Explorer and Chrome
     * are protected from performing MIME-sniffing on the response body.
     *
     * @var string
     */
    const HEADER_X_CONTENT_TYPE_OPTIONS_VALUE_NOSNIFF = 'Nosniff';

    /**
     * Defines the value consts for content-type header
     *
     * @var string
     */
    const HEADER_CONTENT_TYPE_VALUE_APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    const HEADER_CONTENT_TYPE_VALUE_MULTIPART_FORM_DATA = 'multipart/form-data';

    /**
     * POST request method string.
     *
     * @var string
     */
    const METHOD_POST = 'POST';

    /**
     * GET request method string.
     *
     * @var string
     */
    const METHOD_GET = 'GET';

    /**
     * HEAD request method string.
     *
     * @var string
     */
    const METHOD_HEAD = 'HEAD';

    /**
     * PUT request method string.
     *
     * @var string
     */
    const METHOD_PUT = 'PUT';

    /**
     * DELETE request method string.
     *
     * @var string
     */
    const METHOD_DELETE = 'DELETE';

    /**
     * OPTIONS request method string.
     *
     * @var string
     */
    const METHOD_OPTIONS = 'OPTIONS';

    /**
     * TRACE request method string.
     *
     * @var string
     */
    const METHOD_TRACE = 'TRACE';

    /**
     * CONNECT request method string.
     *
     * @var string
     */
    const METHOD_CONNECT = 'CONNECT';

    /**
     * PATCH request method string.
     *
     * @var string
     */
    const METHOD_PATCH = 'PATCH';

    /**
     * Defines the http 1.0 protocol version identifier
     *
     * @var string
     */
    const VERSION_1_0 = 'HTTP/1.0';

    /**
     * Defines the http 1.1 protocol version identifier
     *
     * @var string
     */
    const VERSION_1_1 = 'HTTP/1.1';

    /**
     * Defines status const's
     *
     * @var string
     */
    const STATUS_REASONPHRASE_UNASSIGNED = 'Unassigned';

    /**
     * Defines reasonPhrases
     *
     * @var string
     */
    const STATUS_REASONPHRASE_100 = "Continue"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.2.1]
    const STATUS_REASONPHRASE_101 = "Switching Protocols"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.2.2]
    const STATUS_REASONPHRASE_102 = "Processing"; //[RFC2518]
    const STATUS_REASONPHRASE_200 = "OK"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.3.1]
    const STATUS_REASONPHRASE_201 = "Created"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.3.2]
    const STATUS_REASONPHRASE_202 = "Accepted"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.3.3]
    const STATUS_REASONPHRASE_203 = "Non-Authoritative Information"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.3.4]
    const STATUS_REASONPHRASE_204 = "No Content"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.3.5]
    const STATUS_REASONPHRASE_205 = "Reset Content"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.3.6]
    const STATUS_REASONPHRASE_206 = "Partial Content"; //[RFC-ietf-httpbis-p5-range-26, Section 4.1]
    const STATUS_REASONPHRASE_207 = "Multi-Status"; //[RFC4918]
    const STATUS_REASONPHRASE_208 = "Already Reported"; //[RFC5842]
    const STATUS_REASONPHRASE_226 = "IM Used"; //[RFC3229]
    const STATUS_REASONPHRASE_300 = "Multiple Choices"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.1]
    const STATUS_REASONPHRASE_301 = "Moved Permanently"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.2]
    const STATUS_REASONPHRASE_302 = "Found"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.3]
    const STATUS_REASONPHRASE_303 = "See Other"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.4]
    const STATUS_REASONPHRASE_304 = "Not Modified"; //[RFC-ietf-httpbis-p4-conditional-26, Section 4.1]
    const STATUS_REASONPHRASE_305 = "Use Proxy"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.5]
    const STATUS_REASONPHRASE_306 = "(Unused)"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.6]
    const STATUS_REASONPHRASE_307 = "Temporary Redirect"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.4.7]
    const STATUS_REASONPHRASE_308 = "Permanent Redirect"; //[RFC-reschke-http-status-308-07]
    const STATUS_REASONPHRASE_400 = "Bad Request"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.1]
    const STATUS_REASONPHRASE_401 = "Unauthorized"; //[RFC-ietf-httpbis-p7-auth-26, Section 3.1]
    const STATUS_REASONPHRASE_402 = "Payment Required"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.2]
    const STATUS_REASONPHRASE_403 = "Forbidden"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.3]
    const STATUS_REASONPHRASE_404 = "Not Found"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.4]
    const STATUS_REASONPHRASE_405 = "Method Not Allowed"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.5]
    const STATUS_REASONPHRASE_406 = "Not Acceptable"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.6]
    const STATUS_REASONPHRASE_407 = "Proxy Authentication Required"; //[RFC-ietf-httpbis-p7-auth-26, Section 3.2]
    const STATUS_REASONPHRASE_408 = "Request Timeout"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.7]
    const STATUS_REASONPHRASE_409 = "Conflict"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.8]
    const STATUS_REASONPHRASE_410 = "Gone"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.9]
    const STATUS_REASONPHRASE_411 = "Length Required"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.10]
    const STATUS_REASONPHRASE_412 = "Precondition Failed"; //[RFC-ietf-httpbis-p4-conditional-26, Section 4.2]
    const STATUS_REASONPHRASE_413 = "Payload Too Large"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.11]
    const STATUS_REASONPHRASE_414 = "URI Too Long"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.12]
    const STATUS_REASONPHRASE_415 = "Unsupported Media Type"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.13]
    const STATUS_REASONPHRASE_416 = "Requested Range Not Satisfiable"; //[RFC-ietf-httpbis-p5-range-26, Section 4.4]
    const STATUS_REASONPHRASE_417 = "Expectation Failed"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.14]
    const STATUS_REASONPHRASE_418 = "I’m a teapot"; //[RFC2324]
    const STATUS_REASONPHRASE_422 = "Unprocessable Entity"; //[RFC4918]
    const STATUS_REASONPHRASE_423 = "Locked"; //[RFC4918]
    const STATUS_REASONPHRASE_424 = "Failed Dependency"; //[RFC4918]
    const STATUS_REASONPHRASE_426 = "Upgrade Required"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.5.15]
    const STATUS_REASONPHRASE_428 = "Precondition Required"; //[RFC6585]
    const STATUS_REASONPHRASE_429 = "Too Many Requests"; //[RFC6585]
    const STATUS_REASONPHRASE_431 = "Request Header Fields Too Large"; //[RFC6585]
    const STATUS_REASONPHRASE_500 = "Internal Server Error"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.6.1]
    const STATUS_REASONPHRASE_501 = "Not Implemented"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.6.2]
    const STATUS_REASONPHRASE_502 = "Bad Gateway"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.6.3]
    const STATUS_REASONPHRASE_503 = "Service Unavailable"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.6.4]
    const STATUS_REASONPHRASE_504 = "Gateway Timeout"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.6.5]
    const STATUS_REASONPHRASE_505 = "HTTP Version Not Supported"; //[RFC-ietf-httpbis-p2-semantics-26, Section 6.6.6]
    const STATUS_REASONPHRASE_506 = "Variant Also Negotiates (Experimental)"; //[RFC2295]
    const STATUS_REASONPHRASE_507 = "Insufficient Storage"; //[RFC4918]
    const STATUS_REASONPHRASE_508 = "Loop Detected"; //[RFC5842]
    const STATUS_REASONPHRASE_510 = "Not Extended"; //[RFC2774]
    const STATUS_REASONPHRASE_511 = "Network Authentication Required"; //[RFC6585]

    /**
     * Returns the reason phrase by given status code
     *
     * @param int $statusCode The http status code
     *
     * @return string The reason phrase
     */
    public static function getStatusReasonPhraseByCode($statusCode)
    {
        $reasonPhraseConstant = 'STATUS_REASONPHRASE_' . (string)$statusCode;
        if (defined('\AppserverIo\Psr\HttpMessage\Protocol::' . $reasonPhraseConstant)) {
            return constant('\AppserverIo\Psr\HttpMessage\Protocol::' . $reasonPhraseConstant);
        }
        return Protocol::STATUS_REASONPHRASE_UNASSIGNED;
    }
}
