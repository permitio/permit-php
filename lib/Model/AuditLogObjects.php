<?php
/**
 * AuditLogObjects
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Permit.io API
 *
 * Authorization as a service
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AuditLogObjects Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuditLogObjects implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuditLogObjects';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'organization_object' => '\OpenAPI\Client\Model\OrganizationObject',
        'project_object' => '\OpenAPI\Client\Model\ProjectObject',
        'environment_object' => '\OpenAPI\Client\Model\EnvironmentObject',
        'pdp_config_object' => '\OpenAPI\Client\Model\PdpConfigObject',
        'user_object' => '\OpenAPI\Client\Model\UserObject',
        'action_object' => '\OpenAPI\Client\Model\ActionObject',
        'resource_type_object' => '\OpenAPI\Client\Model\ResourceTypeObject',
        'tenant_object' => '\OpenAPI\Client\Model\TenantObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'organization_object' => null,
        'project_object' => null,
        'environment_object' => null,
        'pdp_config_object' => null,
        'user_object' => null,
        'action_object' => null,
        'resource_type_object' => null,
        'tenant_object' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'organization_object' => false,
		'project_object' => false,
		'environment_object' => false,
		'pdp_config_object' => false,
		'user_object' => false,
		'action_object' => false,
		'resource_type_object' => false,
		'tenant_object' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'organization_object' => 'organization_object',
        'project_object' => 'project_object',
        'environment_object' => 'environment_object',
        'pdp_config_object' => 'pdp_config_object',
        'user_object' => 'user_object',
        'action_object' => 'action_object',
        'resource_type_object' => 'resource_type_object',
        'tenant_object' => 'tenant_object'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_object' => 'setOrganizationObject',
        'project_object' => 'setProjectObject',
        'environment_object' => 'setEnvironmentObject',
        'pdp_config_object' => 'setPdpConfigObject',
        'user_object' => 'setUserObject',
        'action_object' => 'setActionObject',
        'resource_type_object' => 'setResourceTypeObject',
        'tenant_object' => 'setTenantObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_object' => 'getOrganizationObject',
        'project_object' => 'getProjectObject',
        'environment_object' => 'getEnvironmentObject',
        'pdp_config_object' => 'getPdpConfigObject',
        'user_object' => 'getUserObject',
        'action_object' => 'getActionObject',
        'resource_type_object' => 'getResourceTypeObject',
        'tenant_object' => 'getTenantObject'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('organization_object', $data ?? [], null);
        $this->setIfExists('project_object', $data ?? [], null);
        $this->setIfExists('environment_object', $data ?? [], null);
        $this->setIfExists('pdp_config_object', $data ?? [], null);
        $this->setIfExists('user_object', $data ?? [], null);
        $this->setIfExists('action_object', $data ?? [], null);
        $this->setIfExists('resource_type_object', $data ?? [], null);
        $this->setIfExists('tenant_object', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets organization_object
     *
     * @return \OpenAPI\Client\Model\OrganizationObject|null
     */
    public function getOrganizationObject()
    {
        return $this->container['organization_object'];
    }

    /**
     * Sets organization_object
     *
     * @param \OpenAPI\Client\Model\OrganizationObject|null $organization_object organization_object
     *
     * @return self
     */
    public function setOrganizationObject($organization_object)
    {

        if (is_null($organization_object)) {
            throw new \InvalidArgumentException('non-nullable organization_object cannot be null');
        }

        $this->container['organization_object'] = $organization_object;

        return $this;
    }

    /**
     * Gets project_object
     *
     * @return \OpenAPI\Client\Model\ProjectObject|null
     */
    public function getProjectObject()
    {
        return $this->container['project_object'];
    }

    /**
     * Sets project_object
     *
     * @param \OpenAPI\Client\Model\ProjectObject|null $project_object project_object
     *
     * @return self
     */
    public function setProjectObject($project_object)
    {

        if (is_null($project_object)) {
            throw new \InvalidArgumentException('non-nullable project_object cannot be null');
        }

        $this->container['project_object'] = $project_object;

        return $this;
    }

    /**
     * Gets environment_object
     *
     * @return \OpenAPI\Client\Model\EnvironmentObject|null
     */
    public function getEnvironmentObject()
    {
        return $this->container['environment_object'];
    }

    /**
     * Sets environment_object
     *
     * @param \OpenAPI\Client\Model\EnvironmentObject|null $environment_object environment_object
     *
     * @return self
     */
    public function setEnvironmentObject($environment_object)
    {

        if (is_null($environment_object)) {
            throw new \InvalidArgumentException('non-nullable environment_object cannot be null');
        }

        $this->container['environment_object'] = $environment_object;

        return $this;
    }

    /**
     * Gets pdp_config_object
     *
     * @return \OpenAPI\Client\Model\PdpConfigObject|null
     */
    public function getPdpConfigObject()
    {
        return $this->container['pdp_config_object'];
    }

    /**
     * Sets pdp_config_object
     *
     * @param \OpenAPI\Client\Model\PdpConfigObject|null $pdp_config_object pdp_config_object
     *
     * @return self
     */
    public function setPdpConfigObject($pdp_config_object)
    {

        if (is_null($pdp_config_object)) {
            throw new \InvalidArgumentException('non-nullable pdp_config_object cannot be null');
        }

        $this->container['pdp_config_object'] = $pdp_config_object;

        return $this;
    }

    /**
     * Gets user_object
     *
     * @return \OpenAPI\Client\Model\UserObject|null
     */
    public function getUserObject()
    {
        return $this->container['user_object'];
    }

    /**
     * Sets user_object
     *
     * @param \OpenAPI\Client\Model\UserObject|null $user_object user_object
     *
     * @return self
     */
    public function setUserObject($user_object)
    {

        if (is_null($user_object)) {
            throw new \InvalidArgumentException('non-nullable user_object cannot be null');
        }

        $this->container['user_object'] = $user_object;

        return $this;
    }

    /**
     * Gets action_object
     *
     * @return \OpenAPI\Client\Model\ActionObject|null
     */
    public function getActionObject()
    {
        return $this->container['action_object'];
    }

    /**
     * Sets action_object
     *
     * @param \OpenAPI\Client\Model\ActionObject|null $action_object action_object
     *
     * @return self
     */
    public function setActionObject($action_object)
    {

        if (is_null($action_object)) {
            throw new \InvalidArgumentException('non-nullable action_object cannot be null');
        }

        $this->container['action_object'] = $action_object;

        return $this;
    }

    /**
     * Gets resource_type_object
     *
     * @return \OpenAPI\Client\Model\ResourceTypeObject|null
     */
    public function getResourceTypeObject()
    {
        return $this->container['resource_type_object'];
    }

    /**
     * Sets resource_type_object
     *
     * @param \OpenAPI\Client\Model\ResourceTypeObject|null $resource_type_object resource_type_object
     *
     * @return self
     */
    public function setResourceTypeObject($resource_type_object)
    {

        if (is_null($resource_type_object)) {
            throw new \InvalidArgumentException('non-nullable resource_type_object cannot be null');
        }

        $this->container['resource_type_object'] = $resource_type_object;

        return $this;
    }

    /**
     * Gets tenant_object
     *
     * @return \OpenAPI\Client\Model\TenantObject|null
     */
    public function getTenantObject()
    {
        return $this->container['tenant_object'];
    }

    /**
     * Sets tenant_object
     *
     * @param \OpenAPI\Client\Model\TenantObject|null $tenant_object tenant_object
     *
     * @return self
     */
    public function setTenantObject($tenant_object)
    {

        if (is_null($tenant_object)) {
            throw new \InvalidArgumentException('non-nullable tenant_object cannot be null');
        }

        $this->container['tenant_object'] = $tenant_object;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


