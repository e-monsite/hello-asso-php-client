# HelloAsso\Api\PublicApi

All URIs are relative to *https://api.helloasso-rc.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrganizationCampaigns**](PublicApi.md#getorganizationcampaigns) | **GET** /v3/public/organizations/{organization_slug}/campaigns.json | 

# **getOrganizationCampaigns**
> \HelloAsso\Api\Model\OrganizationCampaignsResponse getOrganizationCampaigns($organization_slug, $type, $page, $results_per_page)



Retrieve organization campaigns using v3 API

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new HelloAsso\Api\HelloAsso\PublicApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_slug = "organization_slug_example"; // string | Slug identifying the organization
$type = "type_example"; // string | Type filter
$page = 1.2; // float | Page
$results_per_page = 1.2; // float | Number of results per page

try {
    $result = $apiInstance->getOrganizationCampaigns($organization_slug, $type, $page, $results_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicApi->getOrganizationCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_slug** | **string**| Slug identifying the organization |
 **type** | **string**| Type filter | [optional]
 **page** | **float**| Page | [optional]
 **results_per_page** | **float**| Number of results per page | [optional]

### Return type

[**\HelloAsso\Api\Model\OrganizationCampaignsResponse**](../Model/OrganizationCampaignsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

