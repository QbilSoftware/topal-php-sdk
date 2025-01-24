<?php
/**
 * COATreeView
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
 * COATreeView Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class COATreeView implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'COATreeView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => '\Topal\Client\Model\Account',
        'id' => 'int',
        'coa_fid' => 'int',
        'acc_area_fid' => 'int',
        'account_fid' => 'int',
        'parent_id' => 'int',
        'group_id' => 'int',
        'compare_fid' => 'int',
        'type' => 'int',
        'code' => 'string',
        'name' => 'string',
        'name2' => 'string',
        'remarks' => 'string',
        'children' => '\Topal\Client\Model\COATreeView[]',
        'balance' => 'float',
        'prev_balance' => 'float',
        'balance_cf' => 'float',
        'budget' => 'float',
        'is_invisible' => 'bool',
        'page_before' => 'bool',
        'lines_before' => 'int',
        'is_credit' => 'bool',
        'interest_fid' => 'int',
        'liquidity_group_fid' => 'int',
        'depreciation_fid' => 'int',
        'capital_partner_fid' => 'int',
        'private_partner_fid' => 'int',
        'name2_usage' => 'bool',
        'no_acc_balance' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account' => null,
        'id' => 'int32',
        'coa_fid' => 'int32',
        'acc_area_fid' => 'int32',
        'account_fid' => 'int32',
        'parent_id' => 'int32',
        'group_id' => 'int32',
        'compare_fid' => 'int32',
        'type' => 'int32',
        'code' => null,
        'name' => null,
        'name2' => null,
        'remarks' => null,
        'children' => null,
        'balance' => 'double',
        'prev_balance' => 'double',
        'balance_cf' => 'double',
        'budget' => 'double',
        'is_invisible' => null,
        'page_before' => null,
        'lines_before' => 'int32',
        'is_credit' => null,
        'interest_fid' => 'int32',
        'liquidity_group_fid' => 'int32',
        'depreciation_fid' => 'int32',
        'capital_partner_fid' => 'int32',
        'private_partner_fid' => 'int32',
        'name2_usage' => null,
        'no_acc_balance' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account' => false,
        'id' => false,
        'coa_fid' => false,
        'acc_area_fid' => false,
        'account_fid' => false,
        'parent_id' => false,
        'group_id' => false,
        'compare_fid' => false,
        'type' => false,
        'code' => false,
        'name' => false,
        'name2' => false,
        'remarks' => false,
        'children' => false,
        'balance' => false,
        'prev_balance' => false,
        'balance_cf' => false,
        'budget' => false,
        'is_invisible' => false,
        'page_before' => false,
        'lines_before' => false,
        'is_credit' => false,
        'interest_fid' => false,
        'liquidity_group_fid' => false,
        'depreciation_fid' => false,
        'capital_partner_fid' => false,
        'private_partner_fid' => false,
        'name2_usage' => false,
        'no_acc_balance' => false
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
        'account' => 'account',
        'id' => 'id',
        'coa_fid' => 'coaFID',
        'acc_area_fid' => 'accAreaFID',
        'account_fid' => 'accountFID',
        'parent_id' => 'parentID',
        'group_id' => 'groupID',
        'compare_fid' => 'compareFID',
        'type' => 'type',
        'code' => 'code',
        'name' => 'name',
        'name2' => 'name2',
        'remarks' => 'remarks',
        'children' => 'children',
        'balance' => 'balance',
        'prev_balance' => 'prevBalance',
        'balance_cf' => 'balanceCF',
        'budget' => 'budget',
        'is_invisible' => 'isInvisible',
        'page_before' => 'pageBefore',
        'lines_before' => 'linesBefore',
        'is_credit' => 'isCredit',
        'interest_fid' => 'interestFID',
        'liquidity_group_fid' => 'liquidityGroupFID',
        'depreciation_fid' => 'depreciationFID',
        'capital_partner_fid' => 'capitalPartnerFID',
        'private_partner_fid' => 'privatePartnerFID',
        'name2_usage' => 'name2Usage',
        'no_acc_balance' => 'noAccBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'id' => 'setId',
        'coa_fid' => 'setCoaFid',
        'acc_area_fid' => 'setAccAreaFid',
        'account_fid' => 'setAccountFid',
        'parent_id' => 'setParentId',
        'group_id' => 'setGroupId',
        'compare_fid' => 'setCompareFid',
        'type' => 'setType',
        'code' => 'setCode',
        'name' => 'setName',
        'name2' => 'setName2',
        'remarks' => 'setRemarks',
        'children' => 'setChildren',
        'balance' => 'setBalance',
        'prev_balance' => 'setPrevBalance',
        'balance_cf' => 'setBalanceCf',
        'budget' => 'setBudget',
        'is_invisible' => 'setIsInvisible',
        'page_before' => 'setPageBefore',
        'lines_before' => 'setLinesBefore',
        'is_credit' => 'setIsCredit',
        'interest_fid' => 'setInterestFid',
        'liquidity_group_fid' => 'setLiquidityGroupFid',
        'depreciation_fid' => 'setDepreciationFid',
        'capital_partner_fid' => 'setCapitalPartnerFid',
        'private_partner_fid' => 'setPrivatePartnerFid',
        'name2_usage' => 'setName2Usage',
        'no_acc_balance' => 'setNoAccBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'id' => 'getId',
        'coa_fid' => 'getCoaFid',
        'acc_area_fid' => 'getAccAreaFid',
        'account_fid' => 'getAccountFid',
        'parent_id' => 'getParentId',
        'group_id' => 'getGroupId',
        'compare_fid' => 'getCompareFid',
        'type' => 'getType',
        'code' => 'getCode',
        'name' => 'getName',
        'name2' => 'getName2',
        'remarks' => 'getRemarks',
        'children' => 'getChildren',
        'balance' => 'getBalance',
        'prev_balance' => 'getPrevBalance',
        'balance_cf' => 'getBalanceCf',
        'budget' => 'getBudget',
        'is_invisible' => 'getIsInvisible',
        'page_before' => 'getPageBefore',
        'lines_before' => 'getLinesBefore',
        'is_credit' => 'getIsCredit',
        'interest_fid' => 'getInterestFid',
        'liquidity_group_fid' => 'getLiquidityGroupFid',
        'depreciation_fid' => 'getDepreciationFid',
        'capital_partner_fid' => 'getCapitalPartnerFid',
        'private_partner_fid' => 'getPrivatePartnerFid',
        'name2_usage' => 'getName2Usage',
        'no_acc_balance' => 'getNoAccBalance'
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
        $this->setIfExists('account', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('coa_fid', $data ?? [], null);
        $this->setIfExists('acc_area_fid', $data ?? [], null);
        $this->setIfExists('account_fid', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('group_id', $data ?? [], null);
        $this->setIfExists('compare_fid', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name2', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('children', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('prev_balance', $data ?? [], null);
        $this->setIfExists('balance_cf', $data ?? [], null);
        $this->setIfExists('budget', $data ?? [], null);
        $this->setIfExists('is_invisible', $data ?? [], null);
        $this->setIfExists('page_before', $data ?? [], null);
        $this->setIfExists('lines_before', $data ?? [], null);
        $this->setIfExists('is_credit', $data ?? [], null);
        $this->setIfExists('interest_fid', $data ?? [], null);
        $this->setIfExists('liquidity_group_fid', $data ?? [], null);
        $this->setIfExists('depreciation_fid', $data ?? [], null);
        $this->setIfExists('capital_partner_fid', $data ?? [], null);
        $this->setIfExists('private_partner_fid', $data ?? [], null);
        $this->setIfExists('name2_usage', $data ?? [], null);
        $this->setIfExists('no_acc_balance', $data ?? [], null);
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
     * Gets account
     *
     * @return \Topal\Client\Model\Account|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Topal\Client\Model\Account|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        if (is_null($account)) {
            throw new \InvalidArgumentException('non-nullable account cannot be null');
        }
        $this->container['account'] = $account;

        return $this;
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
     * Gets coa_fid
     *
     * @return int|null
     */
    public function getCoaFid()
    {
        return $this->container['coa_fid'];
    }

    /**
     * Sets coa_fid
     *
     * @param int|null $coa_fid coa_fid
     *
     * @return self
     */
    public function setCoaFid($coa_fid)
    {
        if (is_null($coa_fid)) {
            throw new \InvalidArgumentException('non-nullable coa_fid cannot be null');
        }
        $this->container['coa_fid'] = $coa_fid;

        return $this;
    }

    /**
     * Gets acc_area_fid
     *
     * @return int|null
     */
    public function getAccAreaFid()
    {
        return $this->container['acc_area_fid'];
    }

    /**
     * Sets acc_area_fid
     *
     * @param int|null $acc_area_fid acc_area_fid
     *
     * @return self
     */
    public function setAccAreaFid($acc_area_fid)
    {
        if (is_null($acc_area_fid)) {
            throw new \InvalidArgumentException('non-nullable acc_area_fid cannot be null');
        }
        $this->container['acc_area_fid'] = $acc_area_fid;

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
     * Gets parent_id
     *
     * @return int|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int|null $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        if (is_null($group_id)) {
            throw new \InvalidArgumentException('non-nullable group_id cannot be null');
        }
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets compare_fid
     *
     * @return int|null
     */
    public function getCompareFid()
    {
        return $this->container['compare_fid'];
    }

    /**
     * Sets compare_fid
     *
     * @param int|null $compare_fid compare_fid
     *
     * @return self
     */
    public function setCompareFid($compare_fid)
    {
        if (is_null($compare_fid)) {
            throw new \InvalidArgumentException('non-nullable compare_fid cannot be null');
        }
        $this->container['compare_fid'] = $compare_fid;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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
     * Gets name2
     *
     * @return string|null
     */
    public function getName2()
    {
        return $this->container['name2'];
    }

    /**
     * Sets name2
     *
     * @param string|null $name2 name2
     *
     * @return self
     */
    public function setName2($name2)
    {
        if (is_null($name2)) {
            throw new \InvalidArgumentException('non-nullable name2 cannot be null');
        }
        $this->container['name2'] = $name2;

        return $this;
    }

    /**
     * Gets remarks
     *
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string|null $remarks remarks
     *
     * @return self
     */
    public function setRemarks($remarks)
    {
        if (is_null($remarks)) {
            throw new \InvalidArgumentException('non-nullable remarks cannot be null');
        }
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Topal\Client\Model\COATreeView[]|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Topal\Client\Model\COATreeView[]|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        if (is_null($children)) {
            throw new \InvalidArgumentException('non-nullable children cannot be null');
        }
        $this->container['children'] = $children;

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
     * Gets prev_balance
     *
     * @return float|null
     */
    public function getPrevBalance()
    {
        return $this->container['prev_balance'];
    }

    /**
     * Sets prev_balance
     *
     * @param float|null $prev_balance prev_balance
     *
     * @return self
     */
    public function setPrevBalance($prev_balance)
    {
        if (is_null($prev_balance)) {
            throw new \InvalidArgumentException('non-nullable prev_balance cannot be null');
        }
        $this->container['prev_balance'] = $prev_balance;

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
     * Gets budget
     *
     * @return float|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        if (is_null($budget)) {
            throw new \InvalidArgumentException('non-nullable budget cannot be null');
        }
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets is_invisible
     *
     * @return bool|null
     */
    public function getIsInvisible()
    {
        return $this->container['is_invisible'];
    }

    /**
     * Sets is_invisible
     *
     * @param bool|null $is_invisible is_invisible
     *
     * @return self
     */
    public function setIsInvisible($is_invisible)
    {
        if (is_null($is_invisible)) {
            throw new \InvalidArgumentException('non-nullable is_invisible cannot be null');
        }
        $this->container['is_invisible'] = $is_invisible;

        return $this;
    }

    /**
     * Gets page_before
     *
     * @return bool|null
     */
    public function getPageBefore()
    {
        return $this->container['page_before'];
    }

    /**
     * Sets page_before
     *
     * @param bool|null $page_before page_before
     *
     * @return self
     */
    public function setPageBefore($page_before)
    {
        if (is_null($page_before)) {
            throw new \InvalidArgumentException('non-nullable page_before cannot be null');
        }
        $this->container['page_before'] = $page_before;

        return $this;
    }

    /**
     * Gets lines_before
     *
     * @return int|null
     */
    public function getLinesBefore()
    {
        return $this->container['lines_before'];
    }

    /**
     * Sets lines_before
     *
     * @param int|null $lines_before lines_before
     *
     * @return self
     */
    public function setLinesBefore($lines_before)
    {
        if (is_null($lines_before)) {
            throw new \InvalidArgumentException('non-nullable lines_before cannot be null');
        }
        $this->container['lines_before'] = $lines_before;

        return $this;
    }

    /**
     * Gets is_credit
     *
     * @return bool|null
     */
    public function getIsCredit()
    {
        return $this->container['is_credit'];
    }

    /**
     * Sets is_credit
     *
     * @param bool|null $is_credit is_credit
     *
     * @return self
     */
    public function setIsCredit($is_credit)
    {
        if (is_null($is_credit)) {
            throw new \InvalidArgumentException('non-nullable is_credit cannot be null');
        }
        $this->container['is_credit'] = $is_credit;

        return $this;
    }

    /**
     * Gets interest_fid
     *
     * @return int|null
     */
    public function getInterestFid()
    {
        return $this->container['interest_fid'];
    }

    /**
     * Sets interest_fid
     *
     * @param int|null $interest_fid interest_fid
     *
     * @return self
     */
    public function setInterestFid($interest_fid)
    {
        if (is_null($interest_fid)) {
            throw new \InvalidArgumentException('non-nullable interest_fid cannot be null');
        }
        $this->container['interest_fid'] = $interest_fid;

        return $this;
    }

    /**
     * Gets liquidity_group_fid
     *
     * @return int|null
     */
    public function getLiquidityGroupFid()
    {
        return $this->container['liquidity_group_fid'];
    }

    /**
     * Sets liquidity_group_fid
     *
     * @param int|null $liquidity_group_fid liquidity_group_fid
     *
     * @return self
     */
    public function setLiquidityGroupFid($liquidity_group_fid)
    {
        if (is_null($liquidity_group_fid)) {
            throw new \InvalidArgumentException('non-nullable liquidity_group_fid cannot be null');
        }
        $this->container['liquidity_group_fid'] = $liquidity_group_fid;

        return $this;
    }

    /**
     * Gets depreciation_fid
     *
     * @return int|null
     */
    public function getDepreciationFid()
    {
        return $this->container['depreciation_fid'];
    }

    /**
     * Sets depreciation_fid
     *
     * @param int|null $depreciation_fid depreciation_fid
     *
     * @return self
     */
    public function setDepreciationFid($depreciation_fid)
    {
        if (is_null($depreciation_fid)) {
            throw new \InvalidArgumentException('non-nullable depreciation_fid cannot be null');
        }
        $this->container['depreciation_fid'] = $depreciation_fid;

        return $this;
    }

    /**
     * Gets capital_partner_fid
     *
     * @return int|null
     */
    public function getCapitalPartnerFid()
    {
        return $this->container['capital_partner_fid'];
    }

    /**
     * Sets capital_partner_fid
     *
     * @param int|null $capital_partner_fid capital_partner_fid
     *
     * @return self
     */
    public function setCapitalPartnerFid($capital_partner_fid)
    {
        if (is_null($capital_partner_fid)) {
            throw new \InvalidArgumentException('non-nullable capital_partner_fid cannot be null');
        }
        $this->container['capital_partner_fid'] = $capital_partner_fid;

        return $this;
    }

    /**
     * Gets private_partner_fid
     *
     * @return int|null
     */
    public function getPrivatePartnerFid()
    {
        return $this->container['private_partner_fid'];
    }

    /**
     * Sets private_partner_fid
     *
     * @param int|null $private_partner_fid private_partner_fid
     *
     * @return self
     */
    public function setPrivatePartnerFid($private_partner_fid)
    {
        if (is_null($private_partner_fid)) {
            throw new \InvalidArgumentException('non-nullable private_partner_fid cannot be null');
        }
        $this->container['private_partner_fid'] = $private_partner_fid;

        return $this;
    }

    /**
     * Gets name2_usage
     *
     * @return bool|null
     */
    public function getName2Usage()
    {
        return $this->container['name2_usage'];
    }

    /**
     * Sets name2_usage
     *
     * @param bool|null $name2_usage name2_usage
     *
     * @return self
     */
    public function setName2Usage($name2_usage)
    {
        if (is_null($name2_usage)) {
            throw new \InvalidArgumentException('non-nullable name2_usage cannot be null');
        }
        $this->container['name2_usage'] = $name2_usage;

        return $this;
    }

    /**
     * Gets no_acc_balance
     *
     * @return bool|null
     */
    public function getNoAccBalance()
    {
        return $this->container['no_acc_balance'];
    }

    /**
     * Sets no_acc_balance
     *
     * @param bool|null $no_acc_balance no_acc_balance
     *
     * @return self
     */
    public function setNoAccBalance($no_acc_balance)
    {
        if (is_null($no_acc_balance)) {
            throw new \InvalidArgumentException('non-nullable no_acc_balance cannot be null');
        }
        $this->container['no_acc_balance'] = $no_acc_balance;

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


