# Permit PHP SDK


Authorization as a service



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/permitio/permit-php.git"
    }
  ],
  "require": {
    "permitio/permit-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: HTTPBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\APIKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_key_create = new \OpenAPI\Client\Model\APIKeyCreate(); // \OpenAPI\Client\Model\APIKeyCreate

try {
    $result = $apiInstance->createApiKey($api_key_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APIKeysApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*APIKeysApi* | [**createApiKey**](docs/Api/APIKeysApi.md#createapikey) | **POST** /v2/api-key | Create Api Key
*APIKeysApi* | [**deleteApiKey**](docs/Api/APIKeysApi.md#deleteapikey) | **DELETE** /v2/api-key/{api_key_id} | Delete Api Key
*APIKeysApi* | [**getApiKey**](docs/Api/APIKeysApi.md#getapikey) | **GET** /v2/api-key/{api_key_id} | Get Api Key
*APIKeysApi* | [**getApiKeyScope**](docs/Api/APIKeysApi.md#getapikeyscope) | **GET** /v2/api-key/scope | Get Api Key Scope
*APIKeysApi* | [**getEnvironmentApiKey**](docs/Api/APIKeysApi.md#getenvironmentapikey) | **GET** /v2/api-key/{proj_id}/{env_id} | Get Environment Api Key
*APIKeysApi* | [**listApiKeys**](docs/Api/APIKeysApi.md#listapikeys) | **GET** /v2/api-key | List Api Keys
*AuditElementsDataApi* | [**elementsListAuditLogs**](docs/Api/AuditElementsDataApi.md#elementslistauditlogs) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/audit_logs | List audit logs
*AuditLogsApi* | [**getDetailedAuditLog**](docs/Api/AuditLogsApi.md#getdetailedauditlog) | **GET** /v2/pdps/{proj_id}/{env_id}/audit_logs/{log_id} | Get detailed audit log
*AuditLogsApi* | [**listAuditLogs**](docs/Api/AuditLogsApi.md#listauditlogs) | **GET** /v2/pdps/{proj_id}/{env_id}/audit_logs | List Audit Logs
*AuthenticationApi* | [**devLogin**](docs/Api/AuthenticationApi.md#devlogin) | **POST** /v2/auth/devlogin | (DEV MODE) Login
*AuthenticationApi* | [**elementsLoginAs**](docs/Api/AuthenticationApi.md#elementsloginas) | **POST** /v2/auth/elements_login_as | Elements Login As
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /v2/auth/login | Login
*AuthenticationApi* | [**loginElements**](docs/Api/AuthenticationApi.md#loginelements) | **GET** /v2/auth/login_elements | Login Elements
*AuthenticationApi* | [**logoutGet**](docs/Api/AuthenticationApi.md#logoutget) | **GET** /v2/auth/logout | Logout Get
*AuthenticationApi* | [**logoutPost**](docs/Api/AuthenticationApi.md#logoutpost) | **POST** /v2/auth/logout | Logout Post
*AuthenticationApi* | [**me**](docs/Api/AuthenticationApi.md#me) | **GET** /v2/auth/me | Me
*AuthenticationApi* | [**switchOrganization**](docs/Api/AuthenticationApi.md#switchorganization) | **POST** /v2/auth/switch_org/{org_id} | Switch Organization
*ConditionSetRulesApi* | [**assignSetPermissions**](docs/Api/ConditionSetRulesApi.md#assignsetpermissions) | **POST** /v2/facts/{proj_id}/{env_id}/set_rules | Assign Set Permissions
*ConditionSetRulesApi* | [**listSetPermissions**](docs/Api/ConditionSetRulesApi.md#listsetpermissions) | **GET** /v2/facts/{proj_id}/{env_id}/set_rules | List Set Permissions
*ConditionSetRulesApi* | [**unassignSetPermissions**](docs/Api/ConditionSetRulesApi.md#unassignsetpermissions) | **DELETE** /v2/facts/{proj_id}/{env_id}/set_rules | Unassign Set Permissions
*ConditionSetsApi* | [**createConditionSet**](docs/Api/ConditionSetsApi.md#createconditionset) | **POST** /v2/schema/{proj_id}/{env_id}/condition_sets | Create Condition Set
*ConditionSetsApi* | [**deleteConditionSet**](docs/Api/ConditionSetsApi.md#deleteconditionset) | **DELETE** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Delete Condition Set
*ConditionSetsApi* | [**getConditionSet**](docs/Api/ConditionSetsApi.md#getconditionset) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Get Condition Set
*ConditionSetsApi* | [**listConditionSets**](docs/Api/ConditionSetsApi.md#listconditionsets) | **GET** /v2/schema/{proj_id}/{env_id}/condition_sets | List Condition Sets
*ConditionSetsApi* | [**updateConditionSet**](docs/Api/ConditionSetsApi.md#updateconditionset) | **PATCH** /v2/schema/{proj_id}/{env_id}/condition_sets/{condition_set_id} | Update Condition Set
*DecisionLogsApi* | [**listPdpDecisionLogs**](docs/Api/DecisionLogsApi.md#listpdpdecisionlogs) | **GET** /v2/pdps/{proj_id}/{env_id}/decision-logs/{pdp_id} | List PDP Decisions
*DecisionLogsIngressApi* | [**insertOpaDecisionLogs**](docs/Api/DecisionLogsIngressApi.md#insertopadecisionlogs) | **POST** /v2/decision-logs/ingress | OPA Decision Logs Ingress
*DefaultApi* | [**dummy**](docs/Api/DefaultApi.md#dummy) | **GET** /v2/stress/dummy | Dummy
*DefaultApi* | [**dummyDb**](docs/Api/DefaultApi.md#dummydb) | **GET** /v2/stress/db/dummy | Dummy Db
*DefaultApi* | [**getOrganizationV2StressDbOrganizationGet**](docs/Api/DefaultApi.md#getorganizationv2stressdborganizationget) | **GET** /v2/stress/db/organization | Get Organization
*DefaultApi* | [**getOrganizationWithAuthn**](docs/Api/DefaultApi.md#getorganizationwithauthn) | **GET** /v2/stress/db/organization_auth | Get Organization With Authn
*DefaultApi* | [**getOrganizationWithAuthz**](docs/Api/DefaultApi.md#getorganizationwithauthz) | **GET** /v2/stress/db/organization_authz | Get Organization With Authz
*ElementsConfigsApi* | [**createElementsConfig**](docs/Api/ElementsConfigsApi.md#createelementsconfig) | **POST** /v2/elements/{proj_id}/{env_id}/config | Create Elements Config
*ElementsConfigsApi* | [**deleteElementsConfig**](docs/Api/ElementsConfigsApi.md#deleteelementsconfig) | **DELETE** /v2/elements/{proj_id}/{env_id}/{elements_config_id} | Delete Elements Config
*ElementsConfigsApi* | [**getElementsConfig**](docs/Api/ElementsConfigsApi.md#getelementsconfig) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Get Elements Config
*ElementsConfigsApi* | [**getElementsConfigRuntime**](docs/Api/ElementsConfigsApi.md#getelementsconfigruntime) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/runtime | Get Elements Config Runtime
*ElementsConfigsApi* | [**getElementsTypeConfig**](docs/Api/ElementsConfigsApi.md#getelementstypeconfig) | **GET** /v2/elements/{proj_id}/{env_id}/{element_type} | Get Elements Type Config
*ElementsConfigsApi* | [**listElementsConfigs**](docs/Api/ElementsConfigsApi.md#listelementsconfigs) | **GET** /v2/elements/{proj_id}/{env_id}/config | List Elements Configs
*ElementsConfigsApi* | [**updateElementsConfig**](docs/Api/ElementsConfigsApi.md#updateelementsconfig) | **PATCH** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id} | Update Elements Config
*ElementsConfigsApi* | [**updateElementsTypePermissions**](docs/Api/ElementsConfigsApi.md#updateelementstypepermissions) | **PATCH** /v2/elements/{proj_id}/{env_id}/{element_type} | Update Elements Type Permissions
*EnvironmentsApi* | [**createEnvironment**](docs/Api/EnvironmentsApi.md#createenvironment) | **POST** /v2/projects/{proj_id}/envs | Create Environment
*EnvironmentsApi* | [**deleteEnvironment**](docs/Api/EnvironmentsApi.md#deleteenvironment) | **DELETE** /v2/projects/{proj_id}/envs/{env_id} | Delete Environment
*EnvironmentsApi* | [**getEnvironment**](docs/Api/EnvironmentsApi.md#getenvironment) | **GET** /v2/projects/{proj_id}/envs/{env_id} | Get Environment
*EnvironmentsApi* | [**listEnvironments**](docs/Api/EnvironmentsApi.md#listenvironments) | **GET** /v2/projects/{proj_id}/envs | List Environments
*EnvironmentsApi* | [**statsEnvironments**](docs/Api/EnvironmentsApi.md#statsenvironments) | **GET** /v2/projects/{proj_id}/envs/{env_id}/stats | Stats Environments
*EnvironmentsApi* | [**updateEnvironment**](docs/Api/EnvironmentsApi.md#updateenvironment) | **PATCH** /v2/projects/{proj_id}/envs/{env_id} | Update Environment
*InstructionsApi* | [**listLanguageInstructions**](docs/Api/InstructionsApi.md#listlanguageinstructions) | **GET** /v2/{proj_id}/{env_id}/get_instructions | List Language Instructions
*MembersApi* | [**deleteOrganizationMember**](docs/Api/MembersApi.md#deleteorganizationmember) | **DELETE** /v2/members/{member_id} | Delete Organization Member
*MembersApi* | [**getAuthenticatedMember**](docs/Api/MembersApi.md#getauthenticatedmember) | **GET** /v2/members/me | Get the authenticated account member
*MembersApi* | [**getOrganizationMember**](docs/Api/MembersApi.md#getorganizationmember) | **GET** /v2/members/{member_id} | Get Organization Member
*MembersApi* | [**listOrganizationMembers**](docs/Api/MembersApi.md#listorganizationmembers) | **GET** /v2/members | List Organization Members
*MembersApi* | [**updateOrganizationMember**](docs/Api/MembersApi.md#updateorganizationmember) | **PATCH** /v2/members/{member_id} | Update Organization Member
*OPALDataApi* | [**getAllData**](docs/Api/OPALDataApi.md#getalldata) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id} | Get All Data
*OPALDataApi* | [**getDataForRole**](docs/Api/OPALDataApi.md#getdataforrole) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/roles/{role_id} | Get Data For Role
*OPALDataApi* | [**getDataForSetRule**](docs/Api/OPALDataApi.md#getdataforsetrule) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/condition_set_rules/{user_set_id}/{resource_set_id} | Get Data For Set Rule
*OPALDataApi* | [**getDataForUser**](docs/Api/OPALDataApi.md#getdataforuser) | **GET** /v2/internal/opal_data/{org_id}/{proj_id}/{env_id}/users/{user_id} | Get Data For User
*OrganizationsApi* | [**cancelInvite**](docs/Api/OrganizationsApi.md#cancelinvite) | **DELETE** /v2/orgs/{org_id}/invites/{invite_id} | Cancel Invite
*OrganizationsApi* | [**createOrganization**](docs/Api/OrganizationsApi.md#createorganization) | **POST** /v2/orgs | Create Organization
*OrganizationsApi* | [**deleteOrganization**](docs/Api/OrganizationsApi.md#deleteorganization) | **DELETE** /v2/orgs/{org_id} | Delete Organization
*OrganizationsApi* | [**getActiveOrganization**](docs/Api/OrganizationsApi.md#getactiveorganization) | **GET** /v2/orgs/active/org | Get Active Organization
*OrganizationsApi* | [**getOrganization**](docs/Api/OrganizationsApi.md#getorganization) | **GET** /v2/orgs/{org_id} | Get Organization
*OrganizationsApi* | [**inviteMembersToOrganization**](docs/Api/OrganizationsApi.md#invitememberstoorganization) | **POST** /v2/orgs/{org_id}/invites | Invite Members To Organization
*OrganizationsApi* | [**listOrganizationInvites**](docs/Api/OrganizationsApi.md#listorganizationinvites) | **GET** /v2/orgs/{org_id}/invites | List Organization Invites
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /v2/orgs | List Organizations
*OrganizationsApi* | [**updateOrganization**](docs/Api/OrganizationsApi.md#updateorganization) | **PATCH** /v2/orgs/{org_id} | Update Organization
*PolicyApi* | [**getOpalDataSources**](docs/Api/PolicyApi.md#getopaldatasources) | **GET** /v2/opal/data/config | Get Opal Data Sources
*PolicyApi* | [**getOpalDataSourcesOpalDataConfigGet**](docs/Api/PolicyApi.md#getopaldatasourcesopaldataconfigget) | **GET** /opal/data/config | Get Opal Data Sources
*PolicyDecisionPointsApi* | [**getAuthenticatingPdpConfigValues**](docs/Api/PolicyDecisionPointsApi.md#getauthenticatingpdpconfigvalues) | **POST** /v2/pdps/me/config | Get connected PDP configuration and push state
*PolicyDecisionPointsApi* | [**getAuthenticatingPdpConfigValuesLegacy**](docs/Api/PolicyDecisionPointsApi.md#getauthenticatingpdpconfigvalueslegacy) | **GET** /v2/pdps/me/config | Get connected PDP configuration
*PolicyDecisionPointsApi* | [**getPdpConfigValues**](docs/Api/PolicyDecisionPointsApi.md#getpdpconfigvalues) | **GET** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/values | Get PDP configuration
*PolicyDecisionPointsApi* | [**listPdpConfigs**](docs/Api/PolicyDecisionPointsApi.md#listpdpconfigs) | **GET** /v2/pdps/{proj_id}/{env_id}/configs | List PDP configurations
*PolicyDecisionPointsApi* | [**rotatePdpApiKey**](docs/Api/PolicyDecisionPointsApi.md#rotatepdpapikey) | **POST** /v2/pdps/{proj_id}/{env_id}/configs/{pdp_id}/rotate-api-key | Rotate PDP API Key
*PolicyGitRepositoriesApi* | [**activatePolicyRepo**](docs/Api/PolicyGitRepositoriesApi.md#activatepolicyrepo) | **PUT** /v2/projects/{proj_id}/repos/{repo_id}/activate | Activate Policy Repo
*PolicyGitRepositoriesApi* | [**createPolicyRepo**](docs/Api/PolicyGitRepositoriesApi.md#createpolicyrepo) | **POST** /v2/projects/{proj_id}/repos | Create Policy Repo
*PolicyGitRepositoriesApi* | [**deletePolicyRepo**](docs/Api/PolicyGitRepositoriesApi.md#deletepolicyrepo) | **DELETE** /v2/projects/{proj_id}/repos/{repo_id} | Delete Policy Repo
*PolicyGitRepositoriesApi* | [**disableActivePolicyRepo**](docs/Api/PolicyGitRepositoriesApi.md#disableactivepolicyrepo) | **PUT** /v2/projects/{proj_id}/repos/disable | Disable Active Policy Repo
*PolicyGitRepositoriesApi* | [**getActivePolicyRepo**](docs/Api/PolicyGitRepositoriesApi.md#getactivepolicyrepo) | **GET** /v2/projects/{proj_id}/repos/active | Get Active Policy Repo
*PolicyGitRepositoriesApi* | [**getPolicyRepo**](docs/Api/PolicyGitRepositoriesApi.md#getpolicyrepo) | **GET** /v2/projects/{proj_id}/repos/{repo_id} | Get Policy Repo
*PolicyGitRepositoriesApi* | [**listPolicyRepos**](docs/Api/PolicyGitRepositoriesApi.md#listpolicyrepos) | **GET** /v2/projects/{proj_id}/repos | List Policy Repos
*ProjectsApi* | [**createProject**](docs/Api/ProjectsApi.md#createproject) | **POST** /v2/projects | Create Project
*ProjectsApi* | [**deleteProject**](docs/Api/ProjectsApi.md#deleteproject) | **DELETE** /v2/projects/{proj_id} | Delete Project
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /v2/projects/{proj_id} | Get Project
*ProjectsApi* | [**listProjects**](docs/Api/ProjectsApi.md#listprojects) | **GET** /v2/projects | List Projects
*ProjectsApi* | [**updateProject**](docs/Api/ProjectsApi.md#updateproject) | **PATCH** /v2/projects/{proj_id} | Update Project
*ResourceActionsApi* | [**createResourceAction**](docs/Api/ResourceActionsApi.md#createresourceaction) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions | Create Resource Action
*ResourceActionsApi* | [**deleteResourceAction**](docs/Api/ResourceActionsApi.md#deleteresourceaction) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Delete Resource Action
*ResourceActionsApi* | [**getResourceAction**](docs/Api/ResourceActionsApi.md#getresourceaction) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Get Resource Action
*ResourceActionsApi* | [**listResourceActions**](docs/Api/ResourceActionsApi.md#listresourceactions) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions | List Resource Actions
*ResourceActionsApi* | [**updateResourceAction**](docs/Api/ResourceActionsApi.md#updateresourceaction) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/actions/{action_id} | Update Resource Action
*ResourceAttributesApi* | [**createResourceAttribute**](docs/Api/ResourceAttributesApi.md#createresourceattribute) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes | Create Resource Attribute
*ResourceAttributesApi* | [**deleteResourceAttribute**](docs/Api/ResourceAttributesApi.md#deleteresourceattribute) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Delete Resource Attribute
*ResourceAttributesApi* | [**getResourceAttribute**](docs/Api/ResourceAttributesApi.md#getresourceattribute) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Get Resource Attribute
*ResourceAttributesApi* | [**listResourceAttributes**](docs/Api/ResourceAttributesApi.md#listresourceattributes) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes | List Resource Attributes
*ResourceAttributesApi* | [**updateResourceAttribute**](docs/Api/ResourceAttributesApi.md#updateresourceattribute) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/attributes/{attribute_id} | Update Resource Attribute
*ResourceInstancesApi* | [**createResourceInstance**](docs/Api/ResourceInstancesApi.md#createresourceinstance) | **POST** /v2/facts/{proj_id}/{env_id}/resource_instances | Create Resource Instance
*ResourceInstancesApi* | [**deleteResourceInstance**](docs/Api/ResourceInstancesApi.md#deleteresourceinstance) | **DELETE** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Delete Resource Instance
*ResourceInstancesApi* | [**getResourceInstance**](docs/Api/ResourceInstancesApi.md#getresourceinstance) | **GET** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Get Resource Instance
*ResourceInstancesApi* | [**listResourceInstances**](docs/Api/ResourceInstancesApi.md#listresourceinstances) | **GET** /v2/facts/{proj_id}/{env_id}/resource_instances | List Resource Instances
*ResourceInstancesApi* | [**updateResourceInstance**](docs/Api/ResourceInstancesApi.md#updateresourceinstance) | **PATCH** /v2/facts/{proj_id}/{env_id}/resource_instances/{instance_id} | Update Resource Instance
*ResourceRolesApi* | [**addParentResourceRole**](docs/Api/ResourceRolesApi.md#addparentresourcerole) | **PUT** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/parents/{parent_role_id} | Add Parent Role
*ResourceRolesApi* | [**assignPermissionsToResourceRole**](docs/Api/ResourceRolesApi.md#assignpermissionstoresourcerole) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/permissions | Assign Permissions to Role
*ResourceRolesApi* | [**createResourceRole**](docs/Api/ResourceRolesApi.md#createresourcerole) | **POST** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles | Create Resource Role
*ResourceRolesApi* | [**deleteResourceRole**](docs/Api/ResourceRolesApi.md#deleteresourcerole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Delete Resource Role
*ResourceRolesApi* | [**getResourceRole**](docs/Api/ResourceRolesApi.md#getresourcerole) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Get Resource Role
*ResourceRolesApi* | [**listResourceRoles**](docs/Api/ResourceRolesApi.md#listresourceroles) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles | List Resource Roles
*ResourceRolesApi* | [**removeParentResourceRole**](docs/Api/ResourceRolesApi.md#removeparentresourcerole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/parents/{parent_role_id} | Remove Parent Role
*ResourceRolesApi* | [**removePermissionsFromResourceRole**](docs/Api/ResourceRolesApi.md#removepermissionsfromresourcerole) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id}/permissions | Remove Permissions from Role
*ResourceRolesApi* | [**updateResourceRole**](docs/Api/ResourceRolesApi.md#updateresourcerole) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id}/roles/{role_id} | Update Resource Role
*ResourcesApi* | [**createResource**](docs/Api/ResourcesApi.md#createresource) | **POST** /v2/schema/{proj_id}/{env_id}/resources | Create Resource
*ResourcesApi* | [**deleteResource**](docs/Api/ResourcesApi.md#deleteresource) | **DELETE** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Delete Resource
*ResourcesApi* | [**getResource**](docs/Api/ResourcesApi.md#getresource) | **GET** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Get Resource
*ResourcesApi* | [**listResources**](docs/Api/ResourcesApi.md#listresources) | **GET** /v2/schema/{proj_id}/{env_id}/resources | List Resources
*ResourcesApi* | [**replaceResource**](docs/Api/ResourcesApi.md#replaceresource) | **PUT** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Replace Resource
*ResourcesApi* | [**updateResource**](docs/Api/ResourcesApi.md#updateresource) | **PATCH** /v2/schema/{proj_id}/{env_id}/resources/{resource_id} | Update Resource
*RoleAssignmentsApi* | [**assignRole**](docs/Api/RoleAssignmentsApi.md#assignrole) | **POST** /v2/facts/{proj_id}/{env_id}/role_assignments | Assign Role
*RoleAssignmentsApi* | [**listRoleAssignments**](docs/Api/RoleAssignmentsApi.md#listroleassignments) | **GET** /v2/facts/{proj_id}/{env_id}/role_assignments | List Role Assignments
*RoleAssignmentsApi* | [**unassignRole**](docs/Api/RoleAssignmentsApi.md#unassignrole) | **DELETE** /v2/facts/{proj_id}/{env_id}/role_assignments | Unassign Role
*RolesApi* | [**addParentRole**](docs/Api/RolesApi.md#addparentrole) | **PUT** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/parents/{parent_role_id} | Add Parent Role
*RolesApi* | [**assignPermissionsToRole**](docs/Api/RolesApi.md#assignpermissionstorole) | **POST** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Assign Permissions To Role
*RolesApi* | [**createRole**](docs/Api/RolesApi.md#createrole) | **POST** /v2/schema/{proj_id}/{env_id}/roles | Create Role
*RolesApi* | [**deleteRole**](docs/Api/RolesApi.md#deleterole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Delete Role
*RolesApi* | [**getRole**](docs/Api/RolesApi.md#getrole) | **GET** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Get Role
*RolesApi* | [**listRoles**](docs/Api/RolesApi.md#listroles) | **GET** /v2/schema/{proj_id}/{env_id}/roles | List Roles
*RolesApi* | [**removeParentRole**](docs/Api/RolesApi.md#removeparentrole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/parents/{parent_role_id} | Remove Parent Role
*RolesApi* | [**removePermissionsFromRole**](docs/Api/RolesApi.md#removepermissionsfromrole) | **DELETE** /v2/schema/{proj_id}/{env_id}/roles/{role_id}/permissions | Remove Permissions From Role
*RolesApi* | [**updateRole**](docs/Api/RolesApi.md#updaterole) | **PATCH** /v2/schema/{proj_id}/{env_id}/roles/{role_id} | Update Role
*TenantsApi* | [**createTenant**](docs/Api/TenantsApi.md#createtenant) | **POST** /v2/facts/{proj_id}/{env_id}/tenants | Create Tenant
*TenantsApi* | [**deleteTenant**](docs/Api/TenantsApi.md#deletetenant) | **DELETE** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Delete Tenant
*TenantsApi* | [**deleteTenantUser**](docs/Api/TenantsApi.md#deletetenantuser) | **DELETE** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users/{user_id} | Delete Tenant User
*TenantsApi* | [**getTenant**](docs/Api/TenantsApi.md#gettenant) | **GET** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Get Tenant
*TenantsApi* | [**listTenantUsers**](docs/Api/TenantsApi.md#listtenantusers) | **GET** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id}/users | List Tenant Users
*TenantsApi* | [**listTenants**](docs/Api/TenantsApi.md#listtenants) | **GET** /v2/facts/{proj_id}/{env_id}/tenants | List Tenants
*TenantsApi* | [**updateTenant**](docs/Api/TenantsApi.md#updatetenant) | **PATCH** /v2/facts/{proj_id}/{env_id}/tenants/{tenant_id} | Update Tenant
*UserAttributesApi* | [**createUserAttribute**](docs/Api/UserAttributesApi.md#createuserattribute) | **POST** /v2/schema/{proj_id}/{env_id}/users/attributes | Create User Attribute
*UserAttributesApi* | [**deleteUserAttribute**](docs/Api/UserAttributesApi.md#deleteuserattribute) | **DELETE** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Delete User Attribute
*UserAttributesApi* | [**getUserAttribute**](docs/Api/UserAttributesApi.md#getuserattribute) | **GET** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Get User Attribute
*UserAttributesApi* | [**listUserAttributes**](docs/Api/UserAttributesApi.md#listuserattributes) | **GET** /v2/schema/{proj_id}/{env_id}/users/attributes | List User Attributes
*UserAttributesApi* | [**updateUserAttribute**](docs/Api/UserAttributesApi.md#updateuserattribute) | **PATCH** /v2/schema/{proj_id}/{env_id}/users/attributes/{attribute_id} | Update User Attribute
*UsersApi* | [**assignRoleToUser**](docs/Api/UsersApi.md#assignroletouser) | **POST** /v2/facts/{proj_id}/{env_id}/users/{user_id}/roles | Assign Role To User
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /v2/facts/{proj_id}/{env_id}/users | Create User
*UsersApi* | [**deleteUser**](docs/Api/UsersApi.md#deleteuser) | **DELETE** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Delete User
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Get User
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /v2/facts/{proj_id}/{env_id}/users | List Users
*UsersApi* | [**replaceUser**](docs/Api/UsersApi.md#replaceuser) | **PUT** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Replace User
*UsersApi* | [**unassignRoleFromUser**](docs/Api/UsersApi.md#unassignrolefromuser) | **DELETE** /v2/facts/{proj_id}/{env_id}/users/{user_id}/roles | Unassign Role From User
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PATCH** /v2/facts/{proj_id}/{env_id}/users/{user_id} | Update User
*UsersElementsDataApi* | [**elementsAssignRoleToUser**](docs/Api/UsersElementsDataApi.md#elementsassignroletouser) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id}/roles | Assign role to user
*UsersElementsDataApi* | [**elementsCreateUser**](docs/Api/UsersElementsDataApi.md#elementscreateuser) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users | Create user
*UsersElementsDataApi* | [**elementsDeleteUser**](docs/Api/UsersElementsDataApi.md#elementsdeleteuser) | **DELETE** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id} | Delete user
*UsersElementsDataApi* | [**elementsListRoles**](docs/Api/UsersElementsDataApi.md#elementslistroles) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/roles | List roles
*UsersElementsDataApi* | [**elementsListUsers**](docs/Api/UsersElementsDataApi.md#elementslistusers) | **GET** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users | List users
*UsersElementsDataApi* | [**elementsUnassignRoleFromUser**](docs/Api/UsersElementsDataApi.md#elementsunassignrolefromuser) | **DELETE** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/users/{user_id}/roles | Unassign role from user
*UsersElementsDataApi* | [**setConfigActive**](docs/Api/UsersElementsDataApi.md#setconfigactive) | **POST** /v2/elements/{proj_id}/{env_id}/config/{elements_config_id}/data/active | Set Config Active

## Models

- [APIKeyCreate](docs/Model/APIKeyCreate.md)
- [APIKeyOwnerType](docs/Model/APIKeyOwnerType.md)
- [APIKeyRead](docs/Model/APIKeyRead.md)
- [APIKeyScopeRead](docs/Model/APIKeyScopeRead.md)
- [ActionBlockEditable](docs/Model/ActionBlockEditable.md)
- [ActionBlockRead](docs/Model/ActionBlockRead.md)
- [ActionObject](docs/Model/ActionObject.md)
- [Actor](docs/Model/Actor.md)
- [AddRolePermissions](docs/Model/AddRolePermissions.md)
- [AttributeBlockEditable](docs/Model/AttributeBlockEditable.md)
- [AttributeBlockRead](docs/Model/AttributeBlockRead.md)
- [AttributeType](docs/Model/AttributeType.md)
- [Attributes](docs/Model/Attributes.md)
- [AuditLog](docs/Model/AuditLog.md)
- [AuditLogObjects](docs/Model/AuditLogObjects.md)
- [AuthnMeAPIKeyRead](docs/Model/AuthnMeAPIKeyRead.md)
- [AuthnMeMemberRead](docs/Model/AuthnMeMemberRead.md)
- [AuthnMeRead](docs/Model/AuthnMeRead.md)
- [AuthnMeUserRead](docs/Model/AuthnMeUserRead.md)
- [ConditionSetCreate](docs/Model/ConditionSetCreate.md)
- [ConditionSetRead](docs/Model/ConditionSetRead.md)
- [ConditionSetRuleCreate](docs/Model/ConditionSetRuleCreate.md)
- [ConditionSetRuleRead](docs/Model/ConditionSetRuleRead.md)
- [ConditionSetRuleRemove](docs/Model/ConditionSetRuleRemove.md)
- [ConditionSetType](docs/Model/ConditionSetType.md)
- [ConditionSetUpdate](docs/Model/ConditionSetUpdate.md)
- [DataSourceConfig](docs/Model/DataSourceConfig.md)
- [DataSourceEntry](docs/Model/DataSourceEntry.md)
- [DetailedAuditLog](docs/Model/DetailedAuditLog.md)
- [DevLogin](docs/Model/DevLogin.md)
- [DummyEngineModel](docs/Model/DummyEngineModel.md)
- [ElementsConfigCreate](docs/Model/ElementsConfigCreate.md)
- [ElementsConfigRead](docs/Model/ElementsConfigRead.md)
- [ElementsConfigRuntimeRead](docs/Model/ElementsConfigRuntimeRead.md)
- [ElementsConfigUpdate](docs/Model/ElementsConfigUpdate.md)
- [ElementsEnvTypeRead](docs/Model/ElementsEnvTypeRead.md)
- [ElementsEnvTypeUpdate](docs/Model/ElementsEnvTypeUpdate.md)
- [ElementsPermissionLevel](docs/Model/ElementsPermissionLevel.md)
- [ElementsRoleRead](docs/Model/ElementsRoleRead.md)
- [ElementsType](docs/Model/ElementsType.md)
- [ElementsUserCreate](docs/Model/ElementsUserCreate.md)
- [ElementsUserRoleCreate](docs/Model/ElementsUserRoleCreate.md)
- [ElementsUserRoleRemove](docs/Model/ElementsUserRoleRemove.md)
- [EmbeddedLoginRequestOutput](docs/Model/EmbeddedLoginRequestOutput.md)
- [Engine](docs/Model/Engine.md)
- [EnvironmentCreate](docs/Model/EnvironmentCreate.md)
- [EnvironmentObject](docs/Model/EnvironmentObject.md)
- [EnvironmentRead](docs/Model/EnvironmentRead.md)
- [EnvironmentStats](docs/Model/EnvironmentStats.md)
- [EnvironmentUpdate](docs/Model/EnvironmentUpdate.md)
- [FailedInvite](docs/Model/FailedInvite.md)
- [FullData](docs/Model/FullData.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [IdentityRead](docs/Model/IdentityRead.md)
- [InviteAttemptResult](docs/Model/InviteAttemptResult.md)
- [InviteCreate](docs/Model/InviteCreate.md)
- [InviteRead](docs/Model/InviteRead.md)
- [InviteStatus](docs/Model/InviteStatus.md)
- [Labels](docs/Model/Labels.md)
- [LanguageInstructions](docs/Model/LanguageInstructions.md)
- [LocationInner](docs/Model/LocationInner.md)
- [LoginResult](docs/Model/LoginResult.md)
- [MemberAccessLevel](docs/Model/MemberAccessLevel.md)
- [MemberAccessObj](docs/Model/MemberAccessObj.md)
- [MultiInviteResult](docs/Model/MultiInviteResult.md)
- [OPADecisionLog](docs/Model/OPADecisionLog.md)
- [OPAEngineDecisionLog](docs/Model/OPAEngineDecisionLog.md)
- [OPALClient](docs/Model/OPALClient.md)
- [OPALabels](docs/Model/OPALabels.md)
- [OPAMetrics](docs/Model/OPAMetrics.md)
- [OnboardingStep](docs/Model/OnboardingStep.md)
- [OrgMemberRead](docs/Model/OrgMemberRead.md)
- [OrgMemberUpdate](docs/Model/OrgMemberUpdate.md)
- [OrganizationCreate](docs/Model/OrganizationCreate.md)
- [OrganizationObject](docs/Model/OrganizationObject.md)
- [OrganizationRead](docs/Model/OrganizationRead.md)
- [OrganizationReadWithAPIKey](docs/Model/OrganizationReadWithAPIKey.md)
- [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
- [PDPConfigObject](docs/Model/PDPConfigObject.md)
- [PDPConfigRead](docs/Model/PDPConfigRead.md)
- [PDPContext](docs/Model/PDPContext.md)
- [PDPState](docs/Model/PDPState.md)
- [PDPStateUpdate](docs/Model/PDPStateUpdate.md)
- [PaginatedResultAPIKeyRead](docs/Model/PaginatedResultAPIKeyRead.md)
- [PaginatedResultAuditLog](docs/Model/PaginatedResultAuditLog.md)
- [PaginatedResultElementsConfigRead](docs/Model/PaginatedResultElementsConfigRead.md)
- [PaginatedResultOPADecisionLog](docs/Model/PaginatedResultOPADecisionLog.md)
- [PaginatedResultUserRead](docs/Model/PaginatedResultUserRead.md)
- [Pdp](docs/Model/Pdp.md)
- [PdpConfigObject](docs/Model/PdpConfigObject.md)
- [PdpValues](docs/Model/PdpValues.md)
- [PermissionLevelRoleRead](docs/Model/PermissionLevelRoleRead.md)
- [PolicyRepoCreate](docs/Model/PolicyRepoCreate.md)
- [PolicyRepoRead](docs/Model/PolicyRepoRead.md)
- [PolicyRepoStatus](docs/Model/PolicyRepoStatus.md)
- [ProgrammingLanguage](docs/Model/ProgrammingLanguage.md)
- [ProjectCreate](docs/Model/ProjectCreate.md)
- [ProjectObject](docs/Model/ProjectObject.md)
- [ProjectRead](docs/Model/ProjectRead.md)
- [ProjectUpdate](docs/Model/ProjectUpdate.md)
- [RawData](docs/Model/RawData.md)
- [RelationshipTupleObject](docs/Model/RelationshipTupleObject.md)
- [RemoteConfig](docs/Model/RemoteConfig.md)
- [RemoveRolePermissions](docs/Model/RemoveRolePermissions.md)
- [ResourceActionCreate](docs/Model/ResourceActionCreate.md)
- [ResourceActionRead](docs/Model/ResourceActionRead.md)
- [ResourceActionUpdate](docs/Model/ResourceActionUpdate.md)
- [ResourceAttributeCreate](docs/Model/ResourceAttributeCreate.md)
- [ResourceAttributeRead](docs/Model/ResourceAttributeRead.md)
- [ResourceAttributeUpdate](docs/Model/ResourceAttributeUpdate.md)
- [ResourceAttributes](docs/Model/ResourceAttributes.md)
- [ResourceCreate](docs/Model/ResourceCreate.md)
- [ResourceId](docs/Model/ResourceId.md)
- [ResourceInstanceCreate](docs/Model/ResourceInstanceCreate.md)
- [ResourceInstanceRead](docs/Model/ResourceInstanceRead.md)
- [ResourceInstanceUpdate](docs/Model/ResourceInstanceUpdate.md)
- [ResourceRead](docs/Model/ResourceRead.md)
- [ResourceReplace](docs/Model/ResourceReplace.md)
- [ResourceRoleCreate](docs/Model/ResourceRoleCreate.md)
- [ResourceRoleRead](docs/Model/ResourceRoleRead.md)
- [ResourceRoleUpdate](docs/Model/ResourceRoleUpdate.md)
- [ResourceTypeObject](docs/Model/ResourceTypeObject.md)
- [ResourceUpdate](docs/Model/ResourceUpdate.md)
- [RoleAssignmentCreate](docs/Model/RoleAssignmentCreate.md)
- [RoleAssignmentRead](docs/Model/RoleAssignmentRead.md)
- [RoleAssignmentRemove](docs/Model/RoleAssignmentRemove.md)
- [RoleBlock](docs/Model/RoleBlock.md)
- [RoleCreate](docs/Model/RoleCreate.md)
- [RoleData](docs/Model/RoleData.md)
- [RoleRead](docs/Model/RoleRead.md)
- [RoleUpdate](docs/Model/RoleUpdate.md)
- [SSHAuthData](docs/Model/SSHAuthData.md)
- [Settings](docs/Model/Settings.md)
- [Statistics](docs/Model/Statistics.md)
- [TenantCreate](docs/Model/TenantCreate.md)
- [TenantObject](docs/Model/TenantObject.md)
- [TenantRead](docs/Model/TenantRead.md)
- [TenantUpdate](docs/Model/TenantUpdate.md)
- [UserCreate](docs/Model/UserCreate.md)
- [UserData](docs/Model/UserData.md)
- [UserLoginRequestInput](docs/Model/UserLoginRequestInput.md)
- [UserObject](docs/Model/UserObject.md)
- [UserRead](docs/Model/UserRead.md)
- [UserRole](docs/Model/UserRole.md)
- [UserRoleCreate](docs/Model/UserRoleCreate.md)
- [UserRoleRemove](docs/Model/UserRoleRemove.md)
- [UserUpdate](docs/Model/UserUpdate.md)
- [ValidationError](docs/Model/ValidationError.md)
- [WebhookCreate](docs/Model/WebhookCreate.md)
- [WebhookRead](docs/Model/WebhookRead.md)
- [WebhookUpdate](docs/Model/WebhookUpdate.md)

## Authorization

### HTTPBearer

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
