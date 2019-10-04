# OrganizationEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The event name, it will be used to create the slug | 
**type** | **string** | Free text to describe the type of event. &#x60;/api/values/form/event/types&#x60; can be used for preset types | 
**description** | **string** | A free text to describe the event | [optional] 
**place** | [**\HelloAsso\Api\Model\OrganizationEventPlace**](OrganizationEventPlace.md) |  | [optional] 
**start_date** | **string** | If setting a date, for a one day event use, startDate and set endDate to null. | [optional] 
**end_date** | **string** | If setting a date, for a one day event use, startDate and set endDate to null. | [optional] 
**sale_end_date** | **string** |  | [optional] 
**contact** | **string** |  | [optional] 
**firstname** | **string** |  | [optional] 
**lastname** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**phone** | **string** |  | [optional] 
**tiers** | [**\HelloAsso\Api\Model\OrganizationEventTiers[]**](OrganizationEventTiers.md) | List of tiers “Tarifs”. Required at least one | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

