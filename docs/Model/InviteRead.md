# # InviteRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The invited member&#39;s email address |
**role** | **string** | The role the member will be assigned with |
**id** | **string** | Unique id of the invite |
**organization_id** | **string** | Unique id of the organization that the invite belongs to. |
**invite_code** | **string** | The invite code that is sent to the member&#39;s email |
**created_at** | **\DateTime** | Date and time when the invite was created (ISO_8601 format). |
**status** | [**InviteStatus**](InviteStatus.md) | The status of the invite (pending, failed, etc) |
**failed_reason** | **string** | if failed, the reason the invitation failed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
