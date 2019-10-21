# HelloAsso\Api\OrganizationsApi

All URIs are relative to *https://api.helloasso-rc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEvent**](OrganizationsApi.md#createevent) | **POST** /v5/organizations/{organization_slug}/forms/events/action/quick-create | 
[**getEventTypes**](OrganizationsApi.md#geteventtypes) | **GET** /v5/values/form/event/types | 

# **createEvent**
> \HelloAsso\Api\Model\NewOrganizationEventResponse createEvent($organization_slug, $body)



Create a new organization event

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: apiBearer
    $config = HelloAsso\Api\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HelloAsso\Api\HelloAsso\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_slug = "organization_slug_example"; // string | Slug identifying the organization
$body = new \HelloAsso\Api\Model\OrganizationEvent(); // \HelloAsso\Api\Model\OrganizationEvent | 

try {
    $result = $apiInstance->createEvent($organization_slug, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_slug** | **string**| Slug identifying the organization |
 **body** | [**\HelloAsso\Api\Model\OrganizationEvent**](../Model/OrganizationEvent.md)|  | [optional]

### Return type

[**\HelloAsso\Api\Model\NewOrganizationEventResponse**](../Model/NewOrganizationEventResponse.md)

### Authorization

[apiBearer](../../README.md#apiBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventTypes**
> \HelloAsso\Api\Model\OrganizationEventTypesResponse getEventTypes()



Organization event preset types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: apiBearer
    $config = HelloAsso\Api\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new HelloAsso\Api\HelloAsso\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEventTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\HelloAsso\Api\Model\OrganizationEventTypesResponse**](../Model/OrganizationEventTypesResponse.md)

### Authorization

[apiBearer](../../README.md#apiBearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

