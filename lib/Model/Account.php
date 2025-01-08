<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'acc_type_fid' => 'int',
        'currency_fid' => 'int',
        'vat_fid' => 'int',
        'cost_center_fid' => 'int',
        'code' => 'string',
        'name' => 'string',
        'is_money_acc' => 'bool',
        'is_cc_required' => 'bool',
        'no_direct_posting' => 'bool',
        'no_acc_details' => 'bool',
        'incl_in_valuation' => 'bool',
        'is_inactiv' => 'bool',
        'balance' => 'float',
        'balance_fc' => 'float',
        'balance_cf' => 'float',
        'balance_cffc' => 'float',
        'account_type_name' => 'string',
        'credit_amount' => 'float',
        'credit_postings_count' => 'int',
        'debit_amount' => 'float',
        'debit_postings_count' => 'int',
        'starting_balance' => 'float',
        'starting_balance_fc' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'acc_type_fid' => 'int32',
        'currency_fid' => 'int32',
        'vat_fid' => 'int32',
        'cost_center_fid' => 'int32',
        'code' => null,
        'name' => null,
        'is_money_acc' => null,
        'is_cc_required' => null,
        'no_direct_posting' => null,
        'no_acc_details' => null,
        'incl_in_valuation' => null,
        'is_inactiv' => null,
        'balance' => 'double',
        'balance_fc' => 'double',
        'balance_cf' => 'double',
        'balance_cffc' => 'double',
        'account_type_name' => null,
        'credit_amount' => 'double',
        'credit_postings_count' => 'int32',
        'debit_amount' => 'double',
        'debit_postings_count' => 'int32',
        'starting_balance' => 'double',
        'starting_balance_fc' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'acc_type_fid' => false,
        'currency_fid' => false,
        'vat_fid' => false,
        'cost_center_fid' => false,
        'code' => false,
        'name' => false,
        'is_money_acc' => false,
        'is_cc_required' => false,
        'no_direct_posting' => false,
        'no_acc_details' => false,
        'incl_in_valuation' => false,
        'is_inactiv' => false,
        'balance' => false,
        'balance_fc' => false,
        'balance_cf' => false,
        'balance_cffc' => false,
        'account_type_name' => false,
        'credit_amount' => false,
        'credit_postings_count' => false,
        'debit_amount' => false,
        'debit_postings_count' => false,
        'starting_balance' => false,
        'starting_balance_fc' => false
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
        'id' => 'id',
        'acc_type_fid' => 'accTypeFID',
        'currency_fid' => 'currencyFID',
        'vat_fid' => 'vatFID',
        'cost_center_fid' => 'costCenterFID',
        'code' => 'code',
        'name' => 'name',
        'is_money_acc' => 'isMoneyAcc',
        'is_cc_required' => 'isCcRequired',
        'no_direct_posting' => 'noDirectPosting',
        'no_acc_details' => 'noAccDetails',
        'incl_in_valuation' => 'inclInValuation',
        'is_inactiv' => 'isInactiv',
        'balance' => 'balance',
        'balance_fc' => 'balanceFC',
        'balance_cf' => 'balanceCF',
        'balance_cffc' => 'balanceCFFC',
        'account_type_name' => 'accountTypeName',
        'credit_amount' => 'creditAmount',
        'credit_postings_count' => 'creditPostingsCount',
        'debit_amount' => 'debitAmount',
        'debit_postings_count' => 'debitPostingsCount',
        'starting_balance' => 'startingBalance',
        'starting_balance_fc' => 'startingBalanceFC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'acc_type_fid' => 'setAccTypeFid',
        'currency_fid' => 'setCurrencyFid',
        'vat_fid' => 'setVatFid',
        'cost_center_fid' => 'setCostCenterFid',
        'code' => 'setCode',
        'name' => 'setName',
        'is_money_acc' => 'setIsMoneyAcc',
        'is_cc_required' => 'setIsCcRequired',
        'no_direct_posting' => 'setNoDirectPosting',
        'no_acc_details' => 'setNoAccDetails',
        'incl_in_valuation' => 'setInclInValuation',
        'is_inactiv' => 'setIsInactiv',
        'balance' => 'setBalance',
        'balance_fc' => 'setBalanceFc',
        'balance_cf' => 'setBalanceCf',
        'balance_cffc' => 'setBalanceCffc',
        'account_type_name' => 'setAccountTypeName',
        'credit_amount' => 'setCreditAmount',
        'credit_postings_count' => 'setCreditPostingsCount',
        'debit_amount' => 'setDebitAmount',
        'debit_postings_count' => 'setDebitPostingsCount',
        'starting_balance' => 'setStartingBalance',
        'starting_balance_fc' => 'setStartingBalanceFc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'acc_type_fid' => 'getAccTypeFid',
        'currency_fid' => 'getCurrencyFid',
        'vat_fid' => 'getVatFid',
        'cost_center_fid' => 'getCostCenterFid',
        'code' => 'getCode',
        'name' => 'getName',
        'is_money_acc' => 'getIsMoneyAcc',
        'is_cc_required' => 'getIsCcRequired',
        'no_direct_posting' => 'getNoDirectPosting',
        'no_acc_details' => 'getNoAccDetails',
        'incl_in_valuation' => 'getInclInValuation',
        'is_inactiv' => 'getIsInactiv',
        'balance' => 'getBalance',
        'balance_fc' => 'getBalanceFc',
        'balance_cf' => 'getBalanceCf',
        'balance_cffc' => 'getBalanceCffc',
        'account_type_name' => 'getAccountTypeName',
        'credit_amount' => 'getCreditAmount',
        'credit_postings_count' => 'getCreditPostingsCount',
        'debit_amount' => 'getDebitAmount',
        'debit_postings_count' => 'getDebitPostingsCount',
        'starting_balance' => 'getStartingBalance',
        'starting_balance_fc' => 'getStartingBalanceFc'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('acc_type_fid', $data ?? [], null);
        $this->setIfExists('currency_fid', $data ?? [], null);
        $this->setIfExists('vat_fid', $data ?? [], null);
        $this->setIfExists('cost_center_fid', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('is_money_acc', $data ?? [], null);
        $this->setIfExists('is_cc_required', $data ?? [], null);
        $this->setIfExists('no_direct_posting', $data ?? [], null);
        $this->setIfExists('no_acc_details', $data ?? [], null);
        $this->setIfExists('incl_in_valuation', $data ?? [], null);
        $this->setIfExists('is_inactiv', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('balance_fc', $data ?? [], null);
        $this->setIfExists('balance_cf', $data ?? [], null);
        $this->setIfExists('balance_cffc', $data ?? [], null);
        $this->setIfExists('account_type_name', $data ?? [], null);
        $this->setIfExists('credit_amount', $data ?? [], null);
        $this->setIfExists('credit_postings_count', $data ?? [], null);
        $this->setIfExists('debit_amount', $data ?? [], null);
        $this->setIfExists('debit_postings_count', $data ?? [], null);
        $this->setIfExists('starting_balance', $data ?? [], null);
        $this->setIfExists('starting_balance_fc', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets acc_type_fid
     *
     * @return int|null
     */
    public function getAccTypeFid()
    {
        return $this->container['acc_type_fid'];
    }

    /**
     * Sets acc_type_fid
     *
     * @param int|null $acc_type_fid acc_type_fid
     *
     * @return self
     */
    public function setAccTypeFid($acc_type_fid)
    {
        if (is_null($acc_type_fid)) {
            throw new \InvalidArgumentException('non-nullable acc_type_fid cannot be null');
        }
        $this->container['acc_type_fid'] = $acc_type_fid;

        return $this;
    }

    /**
     * Gets currency_fid
     *
     * @return int|null
     */
    public function getCurrencyFid()
    {
        return $this->container['currency_fid'];
    }

    /**
     * Sets currency_fid
     *
     * @param int|null $currency_fid currency_fid
     *
     * @return self
     */
    public function setCurrencyFid($currency_fid)
    {
        if (is_null($currency_fid)) {
            throw new \InvalidArgumentException('non-nullable currency_fid cannot be null');
        }
        $this->container['currency_fid'] = $currency_fid;

        return $this;
    }

    /**
     * Gets vat_fid
     *
     * @return int|null
     */
    public function getVatFid()
    {
        return $this->container['vat_fid'];
    }

    /**
     * Sets vat_fid
     *
     * @param int|null $vat_fid vat_fid
     *
     * @return self
     */
    public function setVatFid($vat_fid)
    {
        if (is_null($vat_fid)) {
            throw new \InvalidArgumentException('non-nullable vat_fid cannot be null');
        }
        $this->container['vat_fid'] = $vat_fid;

        return $this;
    }

    /**
     * Gets cost_center_fid
     *
     * @return int|null
     */
    public function getCostCenterFid()
    {
        return $this->container['cost_center_fid'];
    }

    /**
     * Sets cost_center_fid
     *
     * @param int|null $cost_center_fid cost_center_fid
     *
     * @return self
     */
    public function setCostCenterFid($cost_center_fid)
    {
        if (is_null($cost_center_fid)) {
            throw new \InvalidArgumentException('non-nullable cost_center_fid cannot be null');
        }
        $this->container['cost_center_fid'] = $cost_center_fid;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
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
     * Gets is_money_acc
     *
     * @return bool|null
     */
    public function getIsMoneyAcc()
    {
        return $this->container['is_money_acc'];
    }

    /**
     * Sets is_money_acc
     *
     * @param bool|null $is_money_acc is_money_acc
     *
     * @return self
     */
    public function setIsMoneyAcc($is_money_acc)
    {
        if (is_null($is_money_acc)) {
            throw new \InvalidArgumentException('non-nullable is_money_acc cannot be null');
        }
        $this->container['is_money_acc'] = $is_money_acc;

        return $this;
    }

    /**
     * Gets is_cc_required
     *
     * @return bool|null
     */
    public function getIsCcRequired()
    {
        return $this->container['is_cc_required'];
    }

    /**
     * Sets is_cc_required
     *
     * @param bool|null $is_cc_required is_cc_required
     *
     * @return self
     */
    public function setIsCcRequired($is_cc_required)
    {
        if (is_null($is_cc_required)) {
            throw new \InvalidArgumentException('non-nullable is_cc_required cannot be null');
        }
        $this->container['is_cc_required'] = $is_cc_required;

        return $this;
    }

    /**
     * Gets no_direct_posting
     *
     * @return bool|null
     */
    public function getNoDirectPosting()
    {
        return $this->container['no_direct_posting'];
    }

    /**
     * Sets no_direct_posting
     *
     * @param bool|null $no_direct_posting no_direct_posting
     *
     * @return self
     */
    public function setNoDirectPosting($no_direct_posting)
    {
        if (is_null($no_direct_posting)) {
            throw new \InvalidArgumentException('non-nullable no_direct_posting cannot be null');
        }
        $this->container['no_direct_posting'] = $no_direct_posting;

        return $this;
    }

    /**
     * Gets no_acc_details
     *
     * @return bool|null
     */
    public function getNoAccDetails()
    {
        return $this->container['no_acc_details'];
    }

    /**
     * Sets no_acc_details
     *
     * @param bool|null $no_acc_details no_acc_details
     *
     * @return self
     */
    public function setNoAccDetails($no_acc_details)
    {
        if (is_null($no_acc_details)) {
            throw new \InvalidArgumentException('non-nullable no_acc_details cannot be null');
        }
        $this->container['no_acc_details'] = $no_acc_details;

        return $this;
    }

    /**
     * Gets incl_in_valuation
     *
     * @return bool|null
     */
    public function getInclInValuation()
    {
        return $this->container['incl_in_valuation'];
    }

    /**
     * Sets incl_in_valuation
     *
     * @param bool|null $incl_in_valuation incl_in_valuation
     *
     * @return self
     */
    public function setInclInValuation($incl_in_valuation)
    {
        if (is_null($incl_in_valuation)) {
            throw new \InvalidArgumentException('non-nullable incl_in_valuation cannot be null');
        }
        $this->container['incl_in_valuation'] = $incl_in_valuation;

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
     * Gets account_type_name
     *
     * @return string|null
     */
    public function getAccountTypeName()
    {
        return $this->container['account_type_name'];
    }

    /**
     * Sets account_type_name
     *
     * @param string|null $account_type_name account_type_name
     *
     * @return self
     */
    public function setAccountTypeName($account_type_name)
    {
        if (is_null($account_type_name)) {
            throw new \InvalidArgumentException('non-nullable account_type_name cannot be null');
        }
        $this->container['account_type_name'] = $account_type_name;

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
     * Gets credit_postings_count
     *
     * @return int|null
     */
    public function getCreditPostingsCount()
    {
        return $this->container['credit_postings_count'];
    }

    /**
     * Sets credit_postings_count
     *
     * @param int|null $credit_postings_count credit_postings_count
     *
     * @return self
     */
    public function setCreditPostingsCount($credit_postings_count)
    {
        if (is_null($credit_postings_count)) {
            throw new \InvalidArgumentException('non-nullable credit_postings_count cannot be null');
        }
        $this->container['credit_postings_count'] = $credit_postings_count;

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
     * Gets debit_postings_count
     *
     * @return int|null
     */
    public function getDebitPostingsCount()
    {
        return $this->container['debit_postings_count'];
    }

    /**
     * Sets debit_postings_count
     *
     * @param int|null $debit_postings_count debit_postings_count
     *
     * @return self
     */
    public function setDebitPostingsCount($debit_postings_count)
    {
        if (is_null($debit_postings_count)) {
            throw new \InvalidArgumentException('non-nullable debit_postings_count cannot be null');
        }
        $this->container['debit_postings_count'] = $debit_postings_count;

        return $this;
    }

    /**
     * Gets starting_balance
     *
     * @return float|null
     */
    public function getStartingBalance()
    {
        return $this->container['starting_balance'];
    }

    /**
     * Sets starting_balance
     *
     * @param float|null $starting_balance starting_balance
     *
     * @return self
     */
    public function setStartingBalance($starting_balance)
    {
        if (is_null($starting_balance)) {
            throw new \InvalidArgumentException('non-nullable starting_balance cannot be null');
        }
        $this->container['starting_balance'] = $starting_balance;

        return $this;
    }

    /**
     * Gets starting_balance_fc
     *
     * @return float|null
     */
    public function getStartingBalanceFc()
    {
        return $this->container['starting_balance_fc'];
    }

    /**
     * Sets starting_balance_fc
     *
     * @param float|null $starting_balance_fc starting_balance_fc
     *
     * @return self
     */
    public function setStartingBalanceFc($starting_balance_fc)
    {
        if (is_null($starting_balance_fc)) {
            throw new \InvalidArgumentException('non-nullable starting_balance_fc cannot be null');
        }
        $this->container['starting_balance_fc'] = $starting_balance_fc;

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

