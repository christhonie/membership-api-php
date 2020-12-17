# NumberTypeDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** |  | [optional] 
**format** | **string** | Format string, using Java String.format() specification, to display the number based on the sequence number. A mandatory %d field has to be provided. | [optional] 
**id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**parent_id** | **int** | Set Parent to indicate a number subtype | [optional] 
**parent_name** | **string** |  | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) | The default and earliest date numbers of this type can be valid. | 
**valid_to** | [**\DateTime**](\DateTime.md) | The default and latest date numbers of this type can be valid. Leave blank to leave unconstrained. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


