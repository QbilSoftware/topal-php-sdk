<?php
/**
 * AccountSummary
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * AccountSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance_cf' => 'float',
        'balance' => 'float',
        'debit_amount' => 'float',
        'credit_amount' => 'float',
        'balance_cffc' => 'float',
        'balance_fc' => 'float',
        'debit_fc_amount' => 'float',
        'credit_fc_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance_cf' => 'double',
        'balance' => 'double',
        'debit_amount' => 'double',
        'credit_amount' => 'double',
        'balance_cffc' => 'double',
        'balance_fc' => 'double',
        'debit_fc_amount' => 'double',
        'credit_fc_amount' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'balance_cf' => false,
        'balance' => false,
        'debit_amount' => false,
        'credit_amount' => false,
        'balance_cffc' => false,
        'balance_fc' => false,
        'debit_fc_amount' => false,
        'credit_fc_amount' => false
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
        'balance_cf' => 'balanceCF',
        'balance' => 'balance',
        'debit_amount' => 'debitAmount',
        'credit_amount' => 'creditAmount',
        'balance_cffc' => 'balanceCFFC',
        'balance_fc' => 'balanceFC',
        'debit_fc_amount' => 'debitFcAmount',
        'credit_fc_amount' => 'creditFcAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance_cf' => 'setBalanceCf',
        'balance' => 'setBalance',
        'debit_amount' => 'setDebitAmount',
        'credit_amount' => 'setCreditAmount',
        'balance_cffc' => 'setBalanceCffc',
        'balance_fc' => 'setBalanceFc',
        'debit_fc_amount' => 'setDebitFcAmount',
        'credit_fc_amount' => 'setCreditFcAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance_cf' => 'getBalanceCf',
        'balance' => 'getBalance',
        'debit_amount' => 'getDebitAmount',
        'credit_amount' => 'getCreditAmount',
        'balance_cffc' => 'getBalanceCffc',
        'balance_fc' => 'getBalanceFc',
        'debit_fc_amount' => 'getDebitFcAmount',
        'credit_fc_amount' => 'getCreditFcAmount'
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
        $this->setIfExists('balance_cf', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('debit_amount', $data ?? [], null);
        $this->setIfExists('credit_amount', $data ?? [], null);
        $this->setIfExists('balance_cffc', $data ?? [], null);
        $this->setIfExists('balance_fc', $data ?? [], null);
        $this->setIfExists('debit_fc_amount', $data ?? [], null);
        $this->setIfExists('credit_fc_amount', $data ?? [], null);
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
     * Gets balance_cf
     *
     * @return float|null
     */
    public function getBalanceCf()
    {
        return $this->container['balance_cf'];
    }

    /**
     * Sets balance_cf
     *
     * @param float|null $balance_cf balance_cf
     *
     * @return self
     */
    public function setBalanceCf($balance_cf)
    {
        if (is_null($balance_cf)) {
            throw new \InvalidArgumentException('non-nullable balance_cf cannot be null');
        }
        $this->container['balance_cf'] = $balance_cf;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        if (is_null($balance)) {
            throw new \InvalidArgumentException('non-nullable balance cannot be null');
        }
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets debit_amount
     *
     * @return float|null
     */
    public function getDebitAmount()
    {
        return $this->container['debit_amount'];
    }

    /**
     * Sets debit_amount
     *
     * @param float|null $debit_amount debit_amount
     *
     * @return self
     */
    public function setDebitAmount($debit_amount)
    {
        if (is_null($debit_amount)) {
            throw new \InvalidArgumentException('non-nullable debit_amount cannot be null');
        }
        $this->container['debit_amount'] = $debit_amount;

        return $this;
    }

    /**
     * Gets credit_amount
     *
     * @return float|null
     */
    public function getCreditAmount()
    {
        return $this->container['credit_amount'];
    }

    /**
     * Sets credit_amount
     *
     * @param float|null $credit_amount credit_amount
     *
     * @return self
     */
    public function setCreditAmount($credit_amount)
    {
        if (is_null($credit_amount)) {
            throw new \InvalidArgumentException('non-nullable credit_amount cannot be null');
        }
        $this->container['credit_amount'] = $credit_amount;

        return $this;
    }

    /**
     * Gets balance_cffc
     *
     * @return float|null
     */
    public function getBalanceCffc()
    {
        return $this->container['balance_cffc'];
    }

    /**
     * Sets balance_cffc
     *
     * @param float|null $balance_cffc balance_cffc
     *
     * @return self
     */
    public function setBalanceCffc($balance_cffc)
    {
        if (is_null($balance_cffc)) {
            throw new \InvalidArgumentException('non-nullable balance_cffc cannot be null');
        }
        $this->container['balance_cffc'] = $balance_cffc;

        return $this;
    }

    /**
     * Gets balance_fc
     *
     * @return float|null
     */
    public function getBalanceFc()
    {
        return $this->container['balance_fc'];
    }

    /**
     * Sets balance_fc
     *
     * @param float|null $balance_fc balance_fc
     *
     * @return self
     */
    public function setBalanceFc($balance_fc)
    {
        if (is_null($balance_fc)) {
            throw new \InvalidArgumentException('non-nullable balance_fc cannot be null');
        }
        $this->container['balance_fc'] = $balance_fc;

        return $this;
    }

    /**
     * Gets debit_fc_amount
     *
     * @return float|null
     */
    public function getDebitFcAmount()
    {
        return $this->container['debit_fc_amount'];
    }

    /**
     * Sets debit_fc_amount
     *
     * @param float|null $debit_fc_amount debit_fc_amount
     *
     * @return self
     */
    public function setDebitFcAmount($debit_fc_amount)
    {
        if (is_null($debit_fc_amount)) {
            throw new \InvalidArgumentException('non-nullable debit_fc_amount cannot be null');
        }
        $this->container['debit_fc_amount'] = $debit_fc_amount;

        return $this;
    }

    /**
     * Gets credit_fc_amount
     *
     * @return float|null
     */
    public function getCreditFcAmount()
    {
        return $this->container['credit_fc_amount'];
    }

    /**
     * Sets credit_fc_amount
     *
     * @param float|null $credit_fc_amount credit_fc_amount
     *
     * @return self
     */
    public function setCreditFcAmount($credit_fc_amount)
    {
        if (is_null($credit_fc_amount)) {
            throw new \InvalidArgumentException('non-nullable credit_fc_amount cannot be null');
        }
        $this->container['credit_fc_amount'] = $credit_fc_amount;

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

