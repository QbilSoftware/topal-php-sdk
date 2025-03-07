<?php
/**
 * UserAccount
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Topal REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Topal\Client\Model;

use \ArrayAccess;
use \Topal\Client\ObjectSerializer;

/**
 * UserAccount Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'login' => 'string',
        'street' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'country' => 'string',
        'business_e_mail' => 'string',
        'business_e_mail2' => 'string',
        'private_e_mail' => 'string',
        'business_phone' => 'string',
        'mobile_phone' => 'string',
        'user_group' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'login' => null,
        'street' => null,
        'zip_code' => null,
        'city' => null,
        'country' => null,
        'business_e_mail' => null,
        'business_e_mail2' => null,
        'private_e_mail' => null,
        'business_phone' => null,
        'mobile_phone' => null,
        'user_group' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'login' => false,
        'street' => false,
        'zip_code' => false,
        'city' => false,
        'country' => false,
        'business_e_mail' => false,
        'business_e_mail2' => false,
        'private_e_mail' => false,
        'business_phone' => false,
        'mobile_phone' => false,
        'user_group' => false
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
        'name' => 'name',
        'login' => 'login',
        'street' => 'street',
        'zip_code' => 'zipCode',
        'city' => 'city',
        'country' => 'country',
        'business_e_mail' => 'businessEMail',
        'business_e_mail2' => 'businessEMail2',
        'private_e_mail' => 'privateEMail',
        'business_phone' => 'businessPhone',
        'mobile_phone' => 'mobilePhone',
        'user_group' => 'userGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'login' => 'setLogin',
        'street' => 'setStreet',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'country' => 'setCountry',
        'business_e_mail' => 'setBusinessEMail',
        'business_e_mail2' => 'setBusinessEMail2',
        'private_e_mail' => 'setPrivateEMail',
        'business_phone' => 'setBusinessPhone',
        'mobile_phone' => 'setMobilePhone',
        'user_group' => 'setUserGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'login' => 'getLogin',
        'street' => 'getStreet',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'country' => 'getCountry',
        'business_e_mail' => 'getBusinessEMail',
        'business_e_mail2' => 'getBusinessEMail2',
        'private_e_mail' => 'getPrivateEMail',
        'business_phone' => 'getBusinessPhone',
        'mobile_phone' => 'getMobilePhone',
        'user_group' => 'getUserGroup'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('login', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('zip_code', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('business_e_mail', $data ?? [], null);
        $this->setIfExists('business_e_mail2', $data ?? [], null);
        $this->setIfExists('private_e_mail', $data ?? [], null);
        $this->setIfExists('business_phone', $data ?? [], null);
        $this->setIfExists('mobile_phone', $data ?? [], null);
        $this->setIfExists('user_group', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login login
     *
     * @return self
     */
    public function setLogin($login)
    {
        if (is_null($login)) {
            throw new \InvalidArgumentException('non-nullable login cannot be null');
        }
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string|null $zip_code zip_code
     *
     * @return self
     */
    public function setZipCode($zip_code)
    {
        if (is_null($zip_code)) {
            throw new \InvalidArgumentException('non-nullable zip_code cannot be null');
        }
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets business_e_mail
     *
     * @return string|null
     */
    public function getBusinessEMail()
    {
        return $this->container['business_e_mail'];
    }

    /**
     * Sets business_e_mail
     *
     * @param string|null $business_e_mail business_e_mail
     *
     * @return self
     */
    public function setBusinessEMail($business_e_mail)
    {
        if (is_null($business_e_mail)) {
            throw new \InvalidArgumentException('non-nullable business_e_mail cannot be null');
        }
        $this->container['business_e_mail'] = $business_e_mail;

        return $this;
    }

    /**
     * Gets business_e_mail2
     *
     * @return string|null
     */
    public function getBusinessEMail2()
    {
        return $this->container['business_e_mail2'];
    }

    /**
     * Sets business_e_mail2
     *
     * @param string|null $business_e_mail2 business_e_mail2
     *
     * @return self
     */
    public function setBusinessEMail2($business_e_mail2)
    {
        if (is_null($business_e_mail2)) {
            throw new \InvalidArgumentException('non-nullable business_e_mail2 cannot be null');
        }
        $this->container['business_e_mail2'] = $business_e_mail2;

        return $this;
    }

    /**
     * Gets private_e_mail
     *
     * @return string|null
     */
    public function getPrivateEMail()
    {
        return $this->container['private_e_mail'];
    }

    /**
     * Sets private_e_mail
     *
     * @param string|null $private_e_mail private_e_mail
     *
     * @return self
     */
    public function setPrivateEMail($private_e_mail)
    {
        if (is_null($private_e_mail)) {
            throw new \InvalidArgumentException('non-nullable private_e_mail cannot be null');
        }
        $this->container['private_e_mail'] = $private_e_mail;

        return $this;
    }

    /**
     * Gets business_phone
     *
     * @return string|null
     */
    public function getBusinessPhone()
    {
        return $this->container['business_phone'];
    }

    /**
     * Sets business_phone
     *
     * @param string|null $business_phone business_phone
     *
     * @return self
     */
    public function setBusinessPhone($business_phone)
    {
        if (is_null($business_phone)) {
            throw new \InvalidArgumentException('non-nullable business_phone cannot be null');
        }
        $this->container['business_phone'] = $business_phone;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string|null $mobile_phone mobile_phone
     *
     * @return self
     */
    public function setMobilePhone($mobile_phone)
    {
        if (is_null($mobile_phone)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone cannot be null');
        }
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets user_group
     *
     * @return string|null
     */
    public function getUserGroup()
    {
        return $this->container['user_group'];
    }

    /**
     * Sets user_group
     *
     * @param string|null $user_group user_group
     *
     * @return self
     */
    public function setUserGroup($user_group)
    {
        if (is_null($user_group)) {
            throw new \InvalidArgumentException('non-nullable user_group cannot be null');
        }
        $this->container['user_group'] = $user_group;

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


