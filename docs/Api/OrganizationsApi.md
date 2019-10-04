# HelloAsso\Api\OrganizationsApi

All URIs are relative to *https://api.helloasso-rc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v5ApiOrganizationsOrganizationSlugFormsEventsActionQuickCreatePost**](OrganizationsApi.md#v5apiorganizationsorganizationslugformseventsactionquickcreatepost) | **POST** /v5/api/organizations/{organization_slug}/forms/events/action/quick-create | 

# **v5ApiOrganizationsOrganizationSlugFormsEventsActionQuickCreatePost**
> \HelloAsso\Api\Model\NewOrganizationEventResponse v5ApiOrganizationsOrganizationSlugFormsEventsActionQuickCreatePost($organization_slug, $body)



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
$body = new \HelloAsso\Api\Model\Body1(); // \HelloAsso\Api\Model\Body1 | 

try {
    $result = $apiInstance->v5ApiOrganizationsOrganizationSlugFormsEventsActionQuickCreatePost($organization_slug, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v5ApiOrganizationsOrganizationSlugFormsEventsActionQuickCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_slug** | **string**| Slug identifying the organization |
 **body** | [**\HelloAsso\Api\Model\Body1**](../Model/Body1.md)|  | [optional]

### Return type

[**\HelloAsso\Api\Model\NewOrganizationEventResponse**](../Model/NewOrganizationEventResponse.md)

### Authorization

[apiBearer](../../README.md#apiBearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

