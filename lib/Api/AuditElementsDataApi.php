<?php
/**
 * AuditElementsDataApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Permit.io API
 *
 * Authorization as a service
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * AuditElementsDataApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuditElementsDataApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'elementsListAuditLogs' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation elementsListAuditLogs
     *
     * List audit logs
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $elements_config_id Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $search Text search for the email field (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['elementsListAuditLogs'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\PaginatedResultAuditLog|\OpenAPI\Client\Model\HTTPValidationError
     */
    public function elementsListAuditLogs($proj_id, $env_id, $elements_config_id, $search = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['elementsListAuditLogs'][0])
    {
        list($response) = $this->elementsListAuditLogsWithHttpInfo($proj_id, $env_id, $elements_config_id, $search, $page, $per_page, $contentType);
        return $response;
    }

    /**
     * Operation elementsListAuditLogsWithHttpInfo
     *
     * List audit logs
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $elements_config_id Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $search Text search for the email field (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['elementsListAuditLogs'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\PaginatedResultAuditLog|\OpenAPI\Client\Model\HTTPValidationError, HTTP status code, HTTP response headers (array of strings)
     */
    public function elementsListAuditLogsWithHttpInfo($proj_id, $env_id, $elements_config_id, $search = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['elementsListAuditLogs'][0])
    {
        $request = $this->elementsListAuditLogsRequest($proj_id, $env_id, $elements_config_id, $search, $page, $per_page, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\PaginatedResultAuditLog' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\PaginatedResultAuditLog' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\PaginatedResultAuditLog', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 422:
                    if ('\OpenAPI\Client\Model\HTTPValidationError' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\HTTPValidationError' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\HTTPValidationError', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\PaginatedResultAuditLog';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\PaginatedResultAuditLog',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\HTTPValidationError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation elementsListAuditLogsAsync
     *
     * List audit logs
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $elements_config_id Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $search Text search for the email field (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['elementsListAuditLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function elementsListAuditLogsAsync($proj_id, $env_id, $elements_config_id, $search = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['elementsListAuditLogs'][0])
    {
        return $this->elementsListAuditLogsAsyncWithHttpInfo($proj_id, $env_id, $elements_config_id, $search, $page, $per_page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation elementsListAuditLogsAsyncWithHttpInfo
     *
     * List audit logs
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $elements_config_id Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $search Text search for the email field (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['elementsListAuditLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function elementsListAuditLogsAsyncWithHttpInfo($proj_id, $env_id, $elements_config_id, $search = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['elementsListAuditLogs'][0])
    {
        $returnType = '\OpenAPI\Client\Model\PaginatedResultAuditLog';
        $request = $this->elementsListAuditLogsRequest($proj_id, $env_id, $elements_config_id, $search, $page, $per_page, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'elementsListAuditLogs'
     *
     * @param  string $proj_id Either the unique id of the project, or the URL-friendly key of the project (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $env_id Either the unique id of the environment, or the URL-friendly key of the environment (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $elements_config_id Either the unique id of the elements_config, or the URL-friendly key of the elements_config (i.e: the \&quot;slug\&quot;). (required)
     * @param  string $search Text search for the email field (optional)
     * @param  int $page Page number of the results to fetch, starting at 1. (optional, default to 1)
     * @param  int $per_page The number of results per page (max 100). (optional, default to 30)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['elementsListAuditLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function elementsListAuditLogsRequest($proj_id, $env_id, $elements_config_id, $search = null, $page = 1, $per_page = 30, string $contentType = self::contentTypes['elementsListAuditLogs'][0])
    {

        // verify the required parameter 'proj_id' is set
        if ($proj_id === null || (is_array($proj_id) && count($proj_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $proj_id when calling elementsListAuditLogs'
            );
        }

        // verify the required parameter 'env_id' is set
        if ($env_id === null || (is_array($env_id) && count($env_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $env_id when calling elementsListAuditLogs'
            );
        }

        // verify the required parameter 'elements_config_id' is set
        if ($elements_config_id === null || (is_array($elements_config_id) && count($elements_config_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $elements_config_id when calling elementsListAuditLogs'
            );
        }


        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling AuditElementsDataApi.elementsListAuditLogs, must be bigger than or equal to 1.');
        }
        
        if ($per_page !== null && $per_page > 100) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling AuditElementsDataApi.elementsListAuditLogs, must be smaller than or equal to 100.');
        }
        if ($per_page !== null && $per_page < 1) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling AuditElementsDataApi.elementsListAuditLogs, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/audit_logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search,
            'search', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'per_page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($proj_id !== null) {
            $resourcePath = str_replace(
                '{' . 'proj_id' . '}',
                ObjectSerializer::toPathValue($proj_id),
                $resourcePath
            );
        }
        // path params
        if ($env_id !== null) {
            $resourcePath = str_replace(
                '{' . 'env_id' . '}',
                ObjectSerializer::toPathValue($env_id),
                $resourcePath
            );
        }
        // path params
        if ($elements_config_id !== null) {
            $resourcePath = str_replace(
                '{' . 'elements_config_id' . '}',
                ObjectSerializer::toPathValue($elements_config_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
