<?php
/**
 * BudgetApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Topal REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Topal\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Topal\Client\ApiException;
use Topal\Client\Configuration;
use Topal\Client\HeaderSelector;
use Topal\Client\ObjectSerializer;

/**
 * BudgetApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BudgetApi
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
        'budgetGet' => [
            'application/json',
        ],
        'budgetGet_0' => [
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
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation budgetGet
     *
     * Retreives list of buget
     *
     * @param  string $client_id client_id (required)
     * @param  string $fiscal_year_id fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet'] to see the possible values for this operation
     *
     * @throws \Topal\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Topal\Client\Model\Budget[]
     */
    public function budgetGet($client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet'][0])
    {
        list($response) = $this->budgetGetWithHttpInfo($client_id, $fiscal_year_id, $contentType);
        return $response;
    }

    /**
     * Operation budgetGetWithHttpInfo
     *
     * Retreives list of buget
     *
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet'] to see the possible values for this operation
     *
     * @throws \Topal\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Topal\Client\Model\Budget[], HTTP status code, HTTP response headers (array of strings)
     */
    public function budgetGetWithHttpInfo($client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet'][0])
    {
        $request = $this->budgetGetRequest($client_id, $fiscal_year_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Topal\Client\Model\Budget[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Topal\Client\Model\Budget[]' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Topal\Client\Model\Budget[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Topal\Client\Model\Budget[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\Topal\Client\Model\Budget[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation budgetGetAsync
     *
     * Retreives list of buget
     *
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function budgetGetAsync($client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet'][0])
    {
        return $this->budgetGetAsyncWithHttpInfo($client_id, $fiscal_year_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation budgetGetAsyncWithHttpInfo
     *
     * Retreives list of buget
     *
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function budgetGetAsyncWithHttpInfo($client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet'][0])
    {
        $returnType = '\Topal\Client\Model\Budget[]';
        $request = $this->budgetGetRequest($client_id, $fiscal_year_id, $contentType);

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
     * Create request for operation 'budgetGet'
     *
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function budgetGetRequest($client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet'][0])
    {

        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling budgetGet'
            );
        }

        // verify the required parameter 'fiscal_year_id' is set
        if ($fiscal_year_id === null || (is_array($fiscal_year_id) && count($fiscal_year_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fiscal_year_id when calling budgetGet'
            );
        }


        $resourcePath = '/api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/budgets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                '{' . 'clientId' . '}',
                ObjectSerializer::toPathValue($client_id),
                $resourcePath
            );
        }
        // path params
        if ($fiscal_year_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fiscalYearId' . '}',
                ObjectSerializer::toPathValue($fiscal_year_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/json', 'application/xml', 'text/xml', ],
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
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
     * Operation budgetGet_0
     *
     * Get budget by id
     *
     * @param  int $id id (required)
     * @param  string $client_id client_id (required)
     * @param  string $fiscal_year_id fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet_0'] to see the possible values for this operation
     *
     * @throws \Topal\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Topal\Client\Model\Budget
     */
    public function budgetGet_0($id, $client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet_0'][0])
    {
        list($response) = $this->budgetGet_0WithHttpInfo($id, $client_id, $fiscal_year_id, $contentType);
        return $response;
    }

    /**
     * Operation budgetGet_0WithHttpInfo
     *
     * Get budget by id
     *
     * @param  int $id (required)
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet_0'] to see the possible values for this operation
     *
     * @throws \Topal\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Topal\Client\Model\Budget, HTTP status code, HTTP response headers (array of strings)
     */
    public function budgetGet_0WithHttpInfo($id, $client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet_0'][0])
    {
        $request = $this->budgetGet_0Request($id, $client_id, $fiscal_year_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    if ('\Topal\Client\Model\Budget' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Topal\Client\Model\Budget' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Topal\Client\Model\Budget', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

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

            $returnType = '\Topal\Client\Model\Budget';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        '\Topal\Client\Model\Budget',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation budgetGet_0Async
     *
     * Get budget by id
     *
     * @param  int $id (required)
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet_0'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function budgetGet_0Async($id, $client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet_0'][0])
    {
        return $this->budgetGet_0AsyncWithHttpInfo($id, $client_id, $fiscal_year_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation budgetGet_0AsyncWithHttpInfo
     *
     * Get budget by id
     *
     * @param  int $id (required)
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet_0'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function budgetGet_0AsyncWithHttpInfo($id, $client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet_0'][0])
    {
        $returnType = '\Topal\Client\Model\Budget';
        $request = $this->budgetGet_0Request($id, $client_id, $fiscal_year_id, $contentType);

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
     * Create request for operation 'budgetGet_0'
     *
     * @param  int $id (required)
     * @param  string $client_id (required)
     * @param  string $fiscal_year_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['budgetGet_0'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function budgetGet_0Request($id, $client_id, $fiscal_year_id, string $contentType = self::contentTypes['budgetGet_0'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling budgetGet_0'
            );
        }

        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling budgetGet_0'
            );
        }

        // verify the required parameter 'fiscal_year_id' is set
        if ($fiscal_year_id === null || (is_array($fiscal_year_id) && count($fiscal_year_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fiscal_year_id when calling budgetGet_0'
            );
        }


        $resourcePath = '/api/v1/clients/{clientId}/fiscalYears/{fiscalYearId}/budgets/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                '{' . 'clientId' . '}',
                ObjectSerializer::toPathValue($client_id),
                $resourcePath
            );
        }
        // path params
        if ($fiscal_year_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fiscalYearId' . '}',
                ObjectSerializer::toPathValue($fiscal_year_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/json', 'application/xml', 'text/xml', ],
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
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
