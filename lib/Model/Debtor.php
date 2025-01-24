<?php
/**
 * Debtor
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
 * Debtor Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Debtor implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Debtor';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'party_fid' => 'int',
        'account_fid' => 'int',
        'pay_method_fid' => 'int',
        'pay_term_fid' => 'int',
        'free_code' => 'string',
        'is_inactiv' => 'bool',
        'no_reminders' => 'bool',
        'no_reminders_fee' => 'bool',
        'credit_line' => 'float',
        'max_reminder_level' => 'int',
        'person' => '\OpenAPI\Client\Model\Person',
        'pay_methods' => '\OpenAPI\Client\Model\PayMethod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'party_fid' => 'int32',
        'account_fid' => 'int32',
        'pay_method_fid' => 'int32',
        'pay_term_fid' => 'int32',
        'free_code' => null,
        'is_inactiv' => null,
        'no_reminders' => null,
        'no_reminders_fee' => null,
        'credit_line' => 'double',
        'max_reminder_level' => 'int32',
        'person' => null,
        'pay_methods' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'party_fid' => false,
        'account_fid' => false,
        'pay_method_fid' => false,
        'pay_term_fid' => false,
        'free_code' => false,
        'is_inactiv' => false,
        'no_reminders' => false,
        'no_reminders_fee' => false,
        'credit_line' => false,
        'max_reminder_level' => false,
        'person' => false,
        'pay_methods' => false
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
        'party_fid' => 'partyFID',
        'account_fid' => 'accountFID',
        'pay_method_fid' => 'payMethodFID',
        'pay_term_fid' => 'payTermFID',
        'free_code' => 'freeCode',
        'is_inactiv' => 'isInactiv',
        'no_reminders' => 'noReminders',
        'no_reminders_fee' => 'noRemindersFee',
        'credit_line' => 'creditLine',
        'max_reminder_level' => 'maxReminderLevel',
        'person' => 'person',
        'pay_methods' => 'payMethods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'party_fid' => 'setPartyFid',
        'account_fid' => 'setAccountFid',
        'pay_method_fid' => 'setPayMethodFid',
        'pay_term_fid' => 'setPayTermFid',
        'free_code' => 'setFreeCode',
        'is_inactiv' => 'setIsInactiv',
        'no_reminders' => 'setNoReminders',
        'no_reminders_fee' => 'setNoRemindersFee',
        'credit_line' => 'setCreditLine',
        'max_reminder_level' => 'setMaxReminderLevel',
        'person' => 'setPerson',
        'pay_methods' => 'setPayMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'party_fid' => 'getPartyFid',
        'account_fid' => 'getAccountFid',
        'pay_method_fid' => 'getPayMethodFid',
        'pay_term_fid' => 'getPayTermFid',
        'free_code' => 'getFreeCode',
        'is_inactiv' => 'getIsInactiv',
        'no_reminders' => 'getNoReminders',
        'no_reminders_fee' => 'getNoRemindersFee',
        'credit_line' => 'getCreditLine',
        'max_reminder_level' => 'getMaxReminderLevel',
        'person' => 'getPerson',
        'pay_methods' => 'getPayMethods'
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
        $this->setIfExists('party_fid', $data ?? [], null);
        $this->setIfExists('account_fid', $data ?? [], null);
        $this->setIfExists('pay_method_fid', $data ?? [], null);
        $this->setIfExists('pay_term_fid', $data ?? [], null);
        $this->setIfExists('free_code', $data ?? [], null);
        $this->setIfExists('is_inactiv', $data ?? [], null);
        $this->setIfExists('no_reminders', $data ?? [], null);
        $this->setIfExists('no_reminders_fee', $data ?? [], null);
        $this->setIfExists('credit_line', $data ?? [], null);
        $this->setIfExists('max_reminder_level', $data ?? [], null);
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('pay_methods', $data ?? [], null);
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
     * Gets party_fid
     *
     * @return int|null
     */
    public function getPartyFid()
    {
        return $this->container['party_fid'];
    }

    /**
     * Sets party_fid
     *
     * @param int|null $party_fid party_fid
     *
     * @return self
     */
    public function setPartyFid($party_fid)
    {
        if (is_null($party_fid)) {
            throw new \InvalidArgumentException('non-nullable party_fid cannot be null');
        }
        $this->container['party_fid'] = $party_fid;

        return $this;
    }

    /**
     * Gets account_fid
     *
     * @return int|null
     */
    public function getAccountFid()
    {
        return $this->container['account_fid'];
    }

    /**
     * Sets account_fid
     *
     * @param int|null $account_fid account_fid
     *
     * @return self
     */
    public function setAccountFid($account_fid)
    {
        if (is_null($account_fid)) {
            throw new \InvalidArgumentException('non-nullable account_fid cannot be null');
        }
        $this->container['account_fid'] = $account_fid;

        return $this;
    }

    /**
     * Gets pay_method_fid
     *
     * @return int|null
     */
    public function getPayMethodFid()
    {
        return $this->container['pay_method_fid'];
    }

    /**
     * Sets pay_method_fid
     *
     * @param int|null $pay_method_fid pay_method_fid
     *
     * @return self
     */
    public function setPayMethodFid($pay_method_fid)
    {
        if (is_null($pay_method_fid)) {
            throw new \InvalidArgumentException('non-nullable pay_method_fid cannot be null');
        }
        $this->container['pay_method_fid'] = $pay_method_fid;

        return $this;
    }

    /**
     * Gets pay_term_fid
     *
     * @return int|null
     */
    public function getPayTermFid()
    {
        return $this->container['pay_term_fid'];
    }

    /**
     * Sets pay_term_fid
     *
     * @param int|null $pay_term_fid pay_term_fid
     *
     * @return self
     */
    public function setPayTermFid($pay_term_fid)
    {
        if (is_null($pay_term_fid)) {
            throw new \InvalidArgumentException('non-nullable pay_term_fid cannot be null');
        }
        $this->container['pay_term_fid'] = $pay_term_fid;

        return $this;
    }

    /**
     * Gets free_code
     *
     * @return string|null
     */
    public function getFreeCode()
    {
        return $this->container['free_code'];
    }

    /**
     * Sets free_code
     *
     * @param string|null $free_code free_code
     *
     * @return self
     */
    public function setFreeCode($free_code)
    {
        if (is_null($free_code)) {
            throw new \InvalidArgumentException('non-nullable free_code cannot be null');
        }
        $this->container['free_code'] = $free_code;

        return $this;
    }

    /**
     * Gets is_inactiv
     *
     * @return bool|null
     */
    public function getIsInactiv()
    {
        return $this->container['is_inactiv'];
    }

    /**
     * Sets is_inactiv
     *
     * @param bool|null $is_inactiv is_inactiv
     *
     * @return self
     */
    public function setIsInactiv($is_inactiv)
    {
        if (is_null($is_inactiv)) {
            throw new \InvalidArgumentException('non-nullable is_inactiv cannot be null');
        }
        $this->container['is_inactiv'] = $is_inactiv;

        return $this;
    }

    /**
     * Gets no_reminders
     *
     * @return bool|null
     */
    public function getNoReminders()
    {
        return $this->container['no_reminders'];
    }

    /**
     * Sets no_reminders
     *
     * @param bool|null $no_reminders no_reminders
     *
     * @return self
     */
    public function setNoReminders($no_reminders)
    {
        if (is_null($no_reminders)) {
            throw new \InvalidArgumentException('non-nullable no_reminders cannot be null');
        }
        $this->container['no_reminders'] = $no_reminders;

        return $this;
    }

    /**
     * Gets no_reminders_fee
     *
     * @return bool|null
     */
    public function getNoRemindersFee()
    {
        return $this->container['no_reminders_fee'];
    }

    /**
     * Sets no_reminders_fee
     *
     * @param bool|null $no_reminders_fee no_reminders_fee
     *
     * @return self
     */
    public function setNoRemindersFee($no_reminders_fee)
    {
        if (is_null($no_reminders_fee)) {
            throw new \InvalidArgumentException('non-nullable no_reminders_fee cannot be null');
        }
        $this->container['no_reminders_fee'] = $no_reminders_fee;

        return $this;
    }

    /**
     * Gets credit_line
     *
     * @return float|null
     */
    public function getCreditLine()
    {
        return $this->container['credit_line'];
    }

    /**
     * Sets credit_line
     *
     * @param float|null $credit_line credit_line
     *
     * @return self
     */
    public function setCreditLine($credit_line)
    {
        if (is_null($credit_line)) {
            throw new \InvalidArgumentException('non-nullable credit_line cannot be null');
        }
        $this->container['credit_line'] = $credit_line;

        return $this;
    }

    /**
     * Gets max_reminder_level
     *
     * @return int|null
     */
    public function getMaxReminderLevel()
    {
        return $this->container['max_reminder_level'];
    }

    /**
     * Sets max_reminder_level
     *
     * @param int|null $max_reminder_level max_reminder_level
     *
     * @return self
     */
    public function setMaxReminderLevel($max_reminder_level)
    {
        if (is_null($max_reminder_level)) {
            throw new \InvalidArgumentException('non-nullable max_reminder_level cannot be null');
        }
        $this->container['max_reminder_level'] = $max_reminder_level;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \OpenAPI\Client\Model\Person|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \OpenAPI\Client\Model\Person|null $person person
     *
     * @return self
     */
    public function setPerson($person)
    {
        if (is_null($person)) {
            throw new \InvalidArgumentException('non-nullable person cannot be null');
        }
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets pay_methods
     *
     * @return \OpenAPI\Client\Model\PayMethod[]|null
     */
    public function getPayMethods()
    {
        return $this->container['pay_methods'];
    }

    /**
     * Sets pay_methods
     *
     * @param \OpenAPI\Client\Model\PayMethod[]|null $pay_methods pay_methods
     *
     * @return self
     */
    public function setPayMethods($pay_methods)
    {
        if (is_null($pay_methods)) {
            throw new \InvalidArgumentException('non-nullable pay_methods cannot be null');
        }
        $this->container['pay_methods'] = $pay_methods;

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


