<?php
/**
 * TranslationsApi
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
 * Generator version: 7.8.0
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
 * TranslationsApi Class Doc Comment
 *
 * @category Class
 * @package  Squidex\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TranslationsApi
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
        'postTranslation' => [
            'application/json',
        ],
    ];

/**
     * @param $options
     */
    public function __construct($config, $client) {
        $this->client =  $client;
        $this->config =  $config;
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
     * Operation postTranslation
     *
     * Translate a text.
     *
     * @param  \Squidex\Client\Model\TranslateDto $translate_dto The translation request. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postTranslation'] to see the possible values for this operation
     *
     * @throws \Squidex\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Squidex\Client\Model\TranslationDto|\Squidex\Client\Model\ErrorDto|\Squidex\Client\Model\ErrorDto
     */
    public function postTranslation($translate_dto, string $contentType = self::contentTypes['postTranslation'][0])
    {
        list($response) = $this->postTranslationWithHttpInfo($translate_dto, $contentType);
        return $response;
    }

    /**
     * Operation postTranslationWithHttpInfo
     *
     * Translate a text.
     *
     * @param  \Squidex\Client\Model\TranslateDto $translate_dto The translation request. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postTranslation'] to see the possible values for this operation
     *
     * @throws \Squidex\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Squidex\Client\Model\TranslationDto|\Squidex\Client\Model\ErrorDto|\Squidex\Client\Model\ErrorDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function postTranslationWithHttpInfo($translate_dto, string $contentType = self::contentTypes['postTranslation'][0])
    {
        $request = $this->postTranslationRequest($translate_dto, $contentType);

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
                    if ('\Squidex\Client\Model\TranslationDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Squidex\Client\Model\TranslationDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Squidex\Client\Model\TranslationDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
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

            $returnType = '\Squidex\Client\Model\TranslationDto';
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
                        '\Squidex\Client\Model\TranslationDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Squidex\Client\Model\ErrorDto',
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
     * Operation postTranslationAsync
     *
     * Translate a text.
     *
     * @param  \Squidex\Client\Model\TranslateDto $translate_dto The translation request. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postTranslation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTranslationAsync($translate_dto, string $contentType = self::contentTypes['postTranslation'][0])
    {
        return $this->postTranslationAsyncWithHttpInfo($translate_dto, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postTranslationAsyncWithHttpInfo
     *
     * Translate a text.
     *
     * @param  \Squidex\Client\Model\TranslateDto $translate_dto The translation request. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postTranslation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTranslationAsyncWithHttpInfo($translate_dto, string $contentType = self::contentTypes['postTranslation'][0])
    {
        $returnType = '\Squidex\Client\Model\TranslationDto';
        $request = $this->postTranslationRequest($translate_dto, $contentType);

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
     * Create request for operation 'postTranslation'
     *
     * @param  \Squidex\Client\Model\TranslateDto $translate_dto The translation request. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['postTranslation'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postTranslationRequest($translate_dto, string $contentType = self::contentTypes['postTranslation'][0])
    {

        // verify the required parameter 'app' is set
        $app = $this->config->getAppName();
        if ($app === null || (is_array($app) && count($app) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $app when calling '
            );
        }

        // verify the required parameter 'translate_dto' is set
        if ($translate_dto === null || (is_array($translate_dto) && count($translate_dto) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $translate_dto when calling '
            );
        }


        $resourcePath = '/api/apps/{app}/translations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($app !== null) {
            $resourcePath = str_replace(
                '{' . 'app' . '}',
                ObjectSerializer::toPathValue($app),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($translate_dto)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($translate_dto));
            } else {
                $httpBody = $translate_dto;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
