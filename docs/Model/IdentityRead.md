# # IdentityRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | Unique User Id of this identity in the identity provider (including the provider type) |
**provider** | **string** | The identity provider type this identity came from |
**sub** | **string** | Unique User Id of this identity in the identity provider (NOT including the provider type) |
**email** | **string** | Email connected to this account identity |
**email_verified** | **bool** | Whether this email address connected to this account identity is verified or not. For social providers like &#39;Login with Google&#39; this is done automatically, otherwise we will send the user a verification link in email. |
**auth0_info** | **object** | Raw user info json coming from our identity provider and matching a specific account identity |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
