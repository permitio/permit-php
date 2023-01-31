# # OrgMemberRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique id of the account member |
**email** | **string** | Email of the user controlling this account |
**email_verified** | **bool** | Whether this email address is verified or not. For social providers like &#39;Login with Google&#39; this is done automatically, otherwise we will send the user a verification link in email. |
**name** | **string** | Name of this user | [optional]
**given_name** | **string** | First name of the user | [optional]
**family_name** | **string** | Last name of the user | [optional]
**picture** | **string** | URL to picture, photo, or avatar of the user that controls this account. | [optional]
**is_superuser** | **bool** | Whether or not this user has special access to permit.io organizations |
**is_onboarding** | **bool** | Whether or not this user is currently onboarding, needs to be replaced by a user journey object |
**onboarding_step** | [**OnboardingStep**](OnboardingStep.md) | the step the user is currently going through in onboarding |
**created_at** | **\DateTime** | Date and time when the account member was created (ISO_8601 format). |
**last_login** | **\DateTime** | Last date and time this user logged in (ISO_8601 format). | [optional]
**last_ip** | **string** | Last IP address from which this user logged in. | [optional] [default to '0.0.0.0']
**logins_count** | **int** | Total number of logins this user has performed. | [optional] [default to 0]
**identities** | [**\OpenAPI\Client\Model\IdentityRead[]**](IdentityRead.md) |  |
**settings** | **object** | Custom permit.io dashboard settings, such as preferred theme, etc. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
