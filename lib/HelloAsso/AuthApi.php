<?php
/**
 * AuthApi
 * PHP version 5
 *
 * @category Class
 * @package  HelloAsso\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hello Asso
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.11
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HelloAsso\Api\HelloAsso;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use HelloAsso\Api\ApiException;
use HelloAsso\Api\Configuration;
use HelloAsso\Api\HeaderSelector;
use HelloAsso\Api\ObjectSerializer;

/**
 * AuthApi Class Doc Comment
 *
 * @category Class
 * @package  HelloAsso\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation oauth2TokenPost
     *
     * Authorization request
     *
     * @param  string $client_id client_id (optional)
     * @param  string $client_secret client_secret (optional)
     * @param  string $grant_type grant_type (optional)
     * @param  string $refresh_token refresh_token (optional)
     * @param  string $user_email user_email (optional)
     * @param  string $user_first_name user_first_name (optional)
     * @param  string $user_last_name user_last_name (optional)
     * @param  string $organization_name organization_name (optional)
     * @param  string $organization_address organization_address (optional)
     * @param  string $organization_zipcode organization_zipcode (optional)
     * @param  string $organization_city organization_city (optional)
     * @param  string $organization_phone organization_phone (optional)
     * @param  string $organization_type organization_type (optional)
     * @param  string $organization_website organization_website (optional)
     *
     * @throws \HelloAsso\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \HelloAsso\Api\Model\AuthorizationResponse
     */
    public function oauth2TokenPost($client_id = null, $client_secret = null, $grant_type = null, $refresh_token = null, $user_email = null, $user_first_name = null, $user_last_name = null, $organization_name = null, $organization_address = null, $organization_zipcode = null, $organization_city = null, $organization_phone = null, $organization_type = null, $organization_website = null)
    {
        list($response) = $this->oauth2TokenPostWithHttpInfo($client_id, $client_secret, $grant_type, $refresh_token, $user_email, $user_first_name, $user_last_name, $organization_name, $organization_address, $organization_zipcode, $organization_city, $organization_phone, $organization_type, $organization_website);
        return $response;
    }

    /**
     * Operation oauth2TokenPostWithHttpInfo
     *
     * Authorization request
     *
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     * @param  string $user_email (optional)
     * @param  string $user_first_name (optional)
     * @param  string $user_last_name (optional)
     * @param  string $organization_name (optional)
     * @param  string $organization_address (optional)
     * @param  string $organization_zipcode (optional)
     * @param  string $organization_city (optional)
     * @param  string $organization_phone (optional)
     * @param  string $organization_type (optional)
     * @param  string $organization_website (optional)
     *
     * @throws \HelloAsso\Api\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \HelloAsso\Api\Model\AuthorizationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function oauth2TokenPostWithHttpInfo($client_id = null, $client_secret = null, $grant_type = null, $refresh_token = null, $user_email = null, $user_first_name = null, $user_last_name = null, $organization_name = null, $organization_address = null, $organization_zipcode = null, $organization_city = null, $organization_phone = null, $organization_type = null, $organization_website = null)
    {
        $returnType = '\HelloAsso\Api\Model\AuthorizationResponse';
        $request = $this->oauth2TokenPostRequest($client_id, $client_secret, $grant_type, $refresh_token, $user_email, $user_first_name, $user_last_name, $organization_name, $organization_address, $organization_zipcode, $organization_city, $organization_phone, $organization_type, $organization_website);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\HelloAsso\Api\Model\AuthorizationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HelloAsso\Api\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HelloAsso\Api\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation oauth2TokenPostAsync
     *
     * Authorization request
     *
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     * @param  string $user_email (optional)
     * @param  string $user_first_name (optional)
     * @param  string $user_last_name (optional)
     * @param  string $organization_name (optional)
     * @param  string $organization_address (optional)
     * @param  string $organization_zipcode (optional)
     * @param  string $organization_city (optional)
     * @param  string $organization_phone (optional)
     * @param  string $organization_type (optional)
     * @param  string $organization_website (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2TokenPostAsync($client_id = null, $client_secret = null, $grant_type = null, $refresh_token = null, $user_email = null, $user_first_name = null, $user_last_name = null, $organization_name = null, $organization_address = null, $organization_zipcode = null, $organization_city = null, $organization_phone = null, $organization_type = null, $organization_website = null)
    {
        return $this->oauth2TokenPostAsyncWithHttpInfo($client_id, $client_secret, $grant_type, $refresh_token, $user_email, $user_first_name, $user_last_name, $organization_name, $organization_address, $organization_zipcode, $organization_city, $organization_phone, $organization_type, $organization_website)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation oauth2TokenPostAsyncWithHttpInfo
     *
     * Authorization request
     *
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     * @param  string $user_email (optional)
     * @param  string $user_first_name (optional)
     * @param  string $user_last_name (optional)
     * @param  string $organization_name (optional)
     * @param  string $organization_address (optional)
     * @param  string $organization_zipcode (optional)
     * @param  string $organization_city (optional)
     * @param  string $organization_phone (optional)
     * @param  string $organization_type (optional)
     * @param  string $organization_website (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function oauth2TokenPostAsyncWithHttpInfo($client_id = null, $client_secret = null, $grant_type = null, $refresh_token = null, $user_email = null, $user_first_name = null, $user_last_name = null, $organization_name = null, $organization_address = null, $organization_zipcode = null, $organization_city = null, $organization_phone = null, $organization_type = null, $organization_website = null)
    {
        $returnType = '\HelloAsso\Api\Model\AuthorizationResponse';
        $request = $this->oauth2TokenPostRequest($client_id, $client_secret, $grant_type, $refresh_token, $user_email, $user_first_name, $user_last_name, $organization_name, $organization_address, $organization_zipcode, $organization_city, $organization_phone, $organization_type, $organization_website);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'oauth2TokenPost'
     *
     * @param  string $client_id (optional)
     * @param  string $client_secret (optional)
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     * @param  string $user_email (optional)
     * @param  string $user_first_name (optional)
     * @param  string $user_last_name (optional)
     * @param  string $organization_name (optional)
     * @param  string $organization_address (optional)
     * @param  string $organization_zipcode (optional)
     * @param  string $organization_city (optional)
     * @param  string $organization_phone (optional)
     * @param  string $organization_type (optional)
     * @param  string $organization_website (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function oauth2TokenPostRequest($client_id = null, $client_secret = null, $grant_type = null, $refresh_token = null, $user_email = null, $user_first_name = null, $user_last_name = null, $organization_name = null, $organization_address = null, $organization_zipcode = null, $organization_city = null, $organization_phone = null, $organization_type = null, $organization_website = null)
    {

        $resourcePath = '/oauth2/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // form params
        if ($client_secret !== null) {
            $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);
        }
        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = ObjectSerializer::toFormValue($refresh_token);
        }
        // form params
        if ($user_email !== null) {
            $formParams['user_email'] = ObjectSerializer::toFormValue($user_email);
        }
        // form params
        if ($user_first_name !== null) {
            $formParams['user_first_name'] = ObjectSerializer::toFormValue($user_first_name);
        }
        // form params
        if ($user_last_name !== null) {
            $formParams['user_last_name'] = ObjectSerializer::toFormValue($user_last_name);
        }
        // form params
        if ($organization_name !== null) {
            $formParams['organization_name'] = ObjectSerializer::toFormValue($organization_name);
        }
        // form params
        if ($organization_address !== null) {
            $formParams['organization_address'] = ObjectSerializer::toFormValue($organization_address);
        }
        // form params
        if ($organization_zipcode !== null) {
            $formParams['organization_zipcode'] = ObjectSerializer::toFormValue($organization_zipcode);
        }
        // form params
        if ($organization_city !== null) {
            $formParams['organization_city'] = ObjectSerializer::toFormValue($organization_city);
        }
        // form params
        if ($organization_phone !== null) {
            $formParams['organization_phone'] = ObjectSerializer::toFormValue($organization_phone);
        }
        // form params
        if ($organization_type !== null) {
            $formParams['organization_type'] = ObjectSerializer::toFormValue($organization_type);
        }
        // form params
        if ($organization_website !== null) {
            $formParams['organization_website'] = ObjectSerializer::toFormValue($organization_website);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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