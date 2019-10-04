# HelloAsso\Api\AuthApi

All URIs are relative to *https://api.helloasso-rc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauth2TokenPost**](AuthApi.md#oauth2tokenpost) | **POST** /oauth2/token | Authorization request

# **oauth2TokenPost**
> \HelloAsso\Api\Model\AuthorizationResponse oauth2TokenPost($client_id, $client_secret, $grant_type, $refresh_token, $user_email, $user_first_name, $user_last_name, $organization_name, $organization_address, $organization_zipcode, $organization_city, $organization_phone, $organization_type, $organization_website)

Authorization request

Refresh token or register a new organization and get access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new HelloAsso\Api\HelloAsso\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = "client_id_example"; // string | 
$client_secret = "client_secret_example"; // string | 
$grant_type = "grant_type_example"; // string | 
$refresh_token = "refresh_token_example"; // string | 
$user_email = "user_email_example"; // string | 
$user_first_name = "user_first_name_example"; // string | 
$user_last_name = "user_last_name_example"; // string | 
$organization_name = "organization_name_example"; // string | 
$organization_address = "organization_address_example"; // string | 
$organization_zipcode = "organization_zipcode_example"; // string | 
$organization_city = "organization_city_example"; // string | 
$organization_phone = "organization_phone_example"; // string | 
$organization_type = "organization_type_example"; // string | 
$organization_website = "organization_website_example"; // string | 

try {
    $result = $apiInstance->oauth2TokenPost($client_id, $client_secret, $grant_type, $refresh_token, $user_email, $user_first_name, $user_last_name, $organization_name, $organization_address, $organization_zipcode, $organization_city, $organization_phone, $organization_type, $organization_website);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->oauth2TokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]
 **grant_type** | **string**|  | [optional]
 **refresh_token** | **string**|  | [optional]
 **user_email** | **string**|  | [optional]
 **user_first_name** | **string**|  | [optional]
 **user_last_name** | **string**|  | [optional]
 **organization_name** | **string**|  | [optional]
 **organization_address** | **string**|  | [optional]
 **organization_zipcode** | **string**|  | [optional]
 **organization_city** | **string**|  | [optional]
 **organization_phone** | **string**|  | [optional]
 **organization_type** | **string**|  | [optional]
 **organization_website** | **string**|  | [optional]

### Return type

[**\HelloAsso\Api\Model\AuthorizationResponse**](../Model/AuthorizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

