<?php
/**
 * TemplatesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Squidex API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Squidex\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Squidex\Client\ApiException;
use Squidex\Client\Configuration;
use Squidex\Client\HeaderSelector;
use Squidex\Client\ObjectSerializer;

/**
 * TemplatesApi Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TemplatesApi
{
    /**
     * @var
     */
    protected $options;
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
        'getTemplate' => [
            'application/json',
        ],
        'getTemplates' => [
            'application/json',
        ],
    ];

/**
     * @param $options
     */
    public function __construct($options) {
        $this->options = $options;
        $this->client =  new Client();
        $this->config =  new Configuration();
        $this->headerSelector = new HeaderSelector();
        $this->hostIndex = 0;
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
     * Operation getTemplate
     *
     * Get template details.
     *
     * @param  string $name The name of the template. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplate'] to see the possible values for this operation
     *
     * @throws \Squidex\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Squidex\Client\Model\TemplateDetailsDto|\Squidex\Client\Model\ErrorDto
     */
    public function getTemplate($name, string $contentType = self::contentTypes['getTemplate'][0])
    {
        list($response) = $this->getTemplateWithHttpInfo($name, $contentType);
        return $response;
    }

    /**
     * Operation getTemplateWithHttpInfo
     *
     * Get template details.
     *
     * @param  string $name The name of the template. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplate'] to see the possible values for this operation
     *
     * @throws \Squidex\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Squidex\Client\Model\TemplateDetailsDto|\Squidex\Client\Model\ErrorDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplateWithHttpInfo($name, string $contentType = self::contentTypes['getTemplate'][0])
    {
        $request = $this->getTemplateRequest($name, $contentType);

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
                    if ('\Squidex\Client\Model\TemplateDetailsDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Squidex\Client\Model\TemplateDetailsDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Squidex\Client\Model\TemplateDetailsDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Squidex\Client\Model\ErrorDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Squidex\Client\Model\ErrorDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Squidex\Client\Model\ErrorDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Squidex\Client\Model\TemplateDetailsDto';
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
                        '\Squidex\Client\Model\TemplateDetailsDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Squidex\Client\Model\ErrorDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTemplateAsync
     *
     * Get template details.
     *
     * @param  string $name The name of the template. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTemplateAsync($name, string $contentType = self::contentTypes['getTemplate'][0])
    {
        return $this->getTemplateAsyncWithHttpInfo($name, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTemplateAsyncWithHttpInfo
     *
     * Get template details.
     *
     * @param  string $name The name of the template. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTemplateAsyncWithHttpInfo($name, string $contentType = self::contentTypes['getTemplate'][0])
    {
        $returnType = '\Squidex\Client\Model\TemplateDetailsDto';
        $request = $this->getTemplateRequest($name, $contentType);

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
     * Create request for operation 'getTemplate'
     *
     * @param  string $name The name of the template. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplate'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTemplateRequest($name, string $contentType = self::contentTypes['getTemplate'][0])
    {

        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling '
            );
        }


        $resourcePath = '/api/templates/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = $this->getAuthorizationHeader();
        $httpBody = '';
        $multipart = false;



        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
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
     * Operation getTemplates
     *
     * Get all templates.
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplates'] to see the possible values for this operation
     *
     * @throws \Squidex\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Squidex\Client\Model\TemplatesDto|\Squidex\Client\Model\ErrorDto
     */
    public function getTemplates(string $contentType = self::contentTypes['getTemplates'][0])
    {
        list($response) = $this->getTemplatesWithHttpInfo($contentType);
        return $response;
    }

    /**
     * Operation getTemplatesWithHttpInfo
     *
     * Get all templates.
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplates'] to see the possible values for this operation
     *
     * @throws \Squidex\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Squidex\Client\Model\TemplatesDto|\Squidex\Client\Model\ErrorDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTemplatesWithHttpInfo(string $contentType = self::contentTypes['getTemplates'][0])
    {
        $request = $this->getTemplatesRequest($contentType);

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
                    if ('\Squidex\Client\Model\TemplatesDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Squidex\Client\Model\TemplatesDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Squidex\Client\Model\TemplatesDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Squidex\Client\Model\ErrorDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Squidex\Client\Model\ErrorDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Squidex\Client\Model\ErrorDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Squidex\Client\Model\TemplatesDto';
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
                        '\Squidex\Client\Model\TemplatesDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Squidex\Client\Model\ErrorDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTemplatesAsync
     *
     * Get all templates.
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTemplatesAsync(string $contentType = self::contentTypes['getTemplates'][0])
    {
        return $this->getTemplatesAsyncWithHttpInfo($contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTemplatesAsyncWithHttpInfo
     *
     * Get all templates.
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTemplatesAsyncWithHttpInfo(string $contentType = self::contentTypes['getTemplates'][0])
    {
        $returnType = '\Squidex\Client\Model\TemplatesDto';
        $request = $this->getTemplatesRequest($contentType);

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
     * Create request for operation 'getTemplates'
     *
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getTemplates'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTemplatesRequest(string $contentType = self::contentTypes['getTemplates'][0])
    {


        $resourcePath = '/api/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = $this->getAuthorizationHeader();
        $httpBody = '';
        $multipart = false;





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

    /**
     * @return array
     */
    protected function getAuthorizationHeader()
    {
        return ['Authorization' => 'Bearer '.$this->options['access_token']];
    }
}
