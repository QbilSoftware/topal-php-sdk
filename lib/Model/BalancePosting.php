<?php
/**
 * BalancePosting
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
 * BalancePosting Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BalancePosting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BalancePosting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_fid' => 'string',
        'doc_num' => 'int',
        'doc_type' => 'string',
        'doc_date' => '\DateTime',
        'text' => 'string',
        'contra_account_code' => 'string',
        'account_code' => 'string',
        'debit_amount' => 'float',
        'credit_amount' => 'float',
        'vat_amount' => 'float',
        'vat_code' => 'string',
        'vat_percent' => 'float',
        'balance' => 'float',
        'currency_code' => 'string',
        'fc_amount' => 'float',
        'exchange_rate' => 'float',
        'debit_fc_amount' => 'float',
        'credit_fc_amount' => 'float',
        'balance_fc' => 'float',
        'party_num' => 'int',
        'party_name' => 'string',
        'invoice_num' => 'int',
        'free_invoice_num' => 'string',
        'cost_center_code' => 'string',
        'user_name' => 'string',
        'modify_date' => '\DateTime',
        'is_cf_posting' => 'bool',
        'vat_fid' => 'int',
        'currency_fid' => 'int',
        'posting_type_fid' => 'int',
        'has_any_document' => 'bool',
        'posting_index' => 'int',
        'is_in_cost_center_transaction' => 'bool',
        'contra_postings' => '\OpenAPI\Client\Model\BalancePosting[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_fid' => 'uuid',
        'doc_num' => 'int32',
        'doc_type' => null,
        'doc_date' => 'date-time',
        'text' => null,
        'contra_account_code' => null,
        'account_code' => null,
        'debit_amount' => 'double',
        'credit_amount' => 'double',
        'vat_amount' => 'double',
        'vat_code' => null,
        'vat_percent' => 'double',
        'balance' => 'double',
        'currency_code' => null,
        'fc_amount' => 'double',
        'exchange_rate' => 'double',
        'debit_fc_amount' => 'double',
        'credit_fc_amount' => 'double',
        'balance_fc' => 'double',
        'party_num' => 'int32',
        'party_name' => null,
        'invoice_num' => 'int32',
        'free_invoice_num' => null,
        'cost_center_code' => null,
        'user_name' => null,
        'modify_date' => 'date-time',
        'is_cf_posting' => null,
        'vat_fid' => 'int32',
        'currency_fid' => 'int32',
        'posting_type_fid' => 'int32',
        'has_any_document' => null,
        'posting_index' => 'int32',
        'is_in_cost_center_transaction' => null,
        'contra_postings' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_fid' => false,
        'doc_num' => false,
        'doc_type' => false,
        'doc_date' => false,
        'text' => false,
        'contra_account_code' => false,
        'account_code' => false,
        'debit_amount' => false,
        'credit_amount' => false,
        'vat_amount' => false,
        'vat_code' => false,
        'vat_percent' => false,
        'balance' => false,
        'currency_code' => false,
        'fc_amount' => false,
        'exchange_rate' => false,
        'debit_fc_amount' => false,
        'credit_fc_amount' => false,
        'balance_fc' => false,
        'party_num' => false,
        'party_name' => false,
        'invoice_num' => false,
        'free_invoice_num' => false,
        'cost_center_code' => false,
        'user_name' => false,
        'modify_date' => false,
        'is_cf_posting' => false,
        'vat_fid' => false,
        'currency_fid' => false,
        'posting_type_fid' => false,
        'has_any_document' => false,
        'posting_index' => false,
        'is_in_cost_center_transaction' => false,
        'contra_postings' => false
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
        'transaction_fid' => 'transactionFID',
        'doc_num' => 'docNum',
        'doc_type' => 'docType',
        'doc_date' => 'docDate',
        'text' => 'text',
        'contra_account_code' => 'contraAccountCode',
        'account_code' => 'accountCode',
        'debit_amount' => 'debitAmount',
        'credit_amount' => 'creditAmount',
        'vat_amount' => 'vatAmount',
        'vat_code' => 'vatCode',
        'vat_percent' => 'vatPercent',
        'balance' => 'balance',
        'currency_code' => 'currencyCode',
        'fc_amount' => 'fcAmount',
        'exchange_rate' => 'exchangeRate',
        'debit_fc_amount' => 'debitFcAmount',
        'credit_fc_amount' => 'creditFcAmount',
        'balance_fc' => 'balanceFC',
        'party_num' => 'partyNum',
        'party_name' => 'partyName',
        'invoice_num' => 'InvoiceNum',
        'free_invoice_num' => 'freeInvoiceNum',
        'cost_center_code' => 'costCenterCode',
        'user_name' => 'userName',
        'modify_date' => 'modifyDate',
        'is_cf_posting' => 'isCFPosting',
        'vat_fid' => 'vatFID',
        'currency_fid' => 'currencyFID',
        'posting_type_fid' => 'postingTypeFID',
        'has_any_document' => 'hasAnyDocument',
        'posting_index' => 'postingIndex',
        'is_in_cost_center_transaction' => 'isInCostCenterTransaction',
        'contra_postings' => 'contraPostings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_fid' => 'setTransactionFid',
        'doc_num' => 'setDocNum',
        'doc_type' => 'setDocType',
        'doc_date' => 'setDocDate',
        'text' => 'setText',
        'contra_account_code' => 'setContraAccountCode',
        'account_code' => 'setAccountCode',
        'debit_amount' => 'setDebitAmount',
        'credit_amount' => 'setCreditAmount',
        'vat_amount' => 'setVatAmount',
        'vat_code' => 'setVatCode',
        'vat_percent' => 'setVatPercent',
        'balance' => 'setBalance',
        'currency_code' => 'setCurrencyCode',
        'fc_amount' => 'setFcAmount',
        'exchange_rate' => 'setExchangeRate',
        'debit_fc_amount' => 'setDebitFcAmount',
        'credit_fc_amount' => 'setCreditFcAmount',
        'balance_fc' => 'setBalanceFc',
        'party_num' => 'setPartyNum',
        'party_name' => 'setPartyName',
        'invoice_num' => 'setInvoiceNum',
        'free_invoice_num' => 'setFreeInvoiceNum',
        'cost_center_code' => 'setCostCenterCode',
        'user_name' => 'setUserName',
        'modify_date' => 'setModifyDate',
        'is_cf_posting' => 'setIsCfPosting',
        'vat_fid' => 'setVatFid',
        'currency_fid' => 'setCurrencyFid',
        'posting_type_fid' => 'setPostingTypeFid',
        'has_any_document' => 'setHasAnyDocument',
        'posting_index' => 'setPostingIndex',
        'is_in_cost_center_transaction' => 'setIsInCostCenterTransaction',
        'contra_postings' => 'setContraPostings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_fid' => 'getTransactionFid',
        'doc_num' => 'getDocNum',
        'doc_type' => 'getDocType',
        'doc_date' => 'getDocDate',
        'text' => 'getText',
        'contra_account_code' => 'getContraAccountCode',
        'account_code' => 'getAccountCode',
        'debit_amount' => 'getDebitAmount',
        'credit_amount' => 'getCreditAmount',
        'vat_amount' => 'getVatAmount',
        'vat_code' => 'getVatCode',
        'vat_percent' => 'getVatPercent',
        'balance' => 'getBalance',
        'currency_code' => 'getCurrencyCode',
        'fc_amount' => 'getFcAmount',
        'exchange_rate' => 'getExchangeRate',
        'debit_fc_amount' => 'getDebitFcAmount',
        'credit_fc_amount' => 'getCreditFcAmount',
        'balance_fc' => 'getBalanceFc',
        'party_num' => 'getPartyNum',
        'party_name' => 'getPartyName',
        'invoice_num' => 'getInvoiceNum',
        'free_invoice_num' => 'getFreeInvoiceNum',
        'cost_center_code' => 'getCostCenterCode',
        'user_name' => 'getUserName',
        'modify_date' => 'getModifyDate',
        'is_cf_posting' => 'getIsCfPosting',
        'vat_fid' => 'getVatFid',
        'currency_fid' => 'getCurrencyFid',
        'posting_type_fid' => 'getPostingTypeFid',
        'has_any_document' => 'getHasAnyDocument',
        'posting_index' => 'getPostingIndex',
        'is_in_cost_center_transaction' => 'getIsInCostCenterTransaction',
        'contra_postings' => 'getContraPostings'
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
        $this->setIfExists('transaction_fid', $data ?? [], null);
        $this->setIfExists('doc_num', $data ?? [], null);
        $this->setIfExists('doc_type', $data ?? [], null);
        $this->setIfExists('doc_date', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('contra_account_code', $data ?? [], null);
        $this->setIfExists('account_code', $data ?? [], null);
        $this->setIfExists('debit_amount', $data ?? [], null);
        $this->setIfExists('credit_amount', $data ?? [], null);
        $this->setIfExists('vat_amount', $data ?? [], null);
        $this->setIfExists('vat_code', $data ?? [], null);
        $this->setIfExists('vat_percent', $data ?? [], null);
        $this->setIfExists('balance', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('fc_amount', $data ?? [], null);
        $this->setIfExists('exchange_rate', $data ?? [], null);
        $this->setIfExists('debit_fc_amount', $data ?? [], null);
        $this->setIfExists('credit_fc_amount', $data ?? [], null);
        $this->setIfExists('balance_fc', $data ?? [], null);
        $this->setIfExists('party_num', $data ?? [], null);
        $this->setIfExists('party_name', $data ?? [], null);
        $this->setIfExists('invoice_num', $data ?? [], null);
        $this->setIfExists('free_invoice_num', $data ?? [], null);
        $this->setIfExists('cost_center_code', $data ?? [], null);
        $this->setIfExists('user_name', $data ?? [], null);
        $this->setIfExists('modify_date', $data ?? [], null);
        $this->setIfExists('is_cf_posting', $data ?? [], null);
        $this->setIfExists('vat_fid', $data ?? [], null);
        $this->setIfExists('currency_fid', $data ?? [], null);
        $this->setIfExists('posting_type_fid', $data ?? [], null);
        $this->setIfExists('has_any_document', $data ?? [], null);
        $this->setIfExists('posting_index', $data ?? [], null);
        $this->setIfExists('is_in_cost_center_transaction', $data ?? [], null);
        $this->setIfExists('contra_postings', $data ?? [], null);
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
     * Gets transaction_fid
     *
     * @return string|null
     */
    public function getTransactionFid()
    {
        return $this->container['transaction_fid'];
    }

    /**
     * Sets transaction_fid
     *
     * @param string|null $transaction_fid transaction_fid
     *
     * @return self
     */
    public function setTransactionFid($transaction_fid)
    {
        if (is_null($transaction_fid)) {
            throw new \InvalidArgumentException('non-nullable transaction_fid cannot be null');
        }
        $this->container['transaction_fid'] = $transaction_fid;

        return $this;
    }

    /**
     * Gets doc_num
     *
     * @return int|null
     */
    public function getDocNum()
    {
        return $this->container['doc_num'];
    }

    /**
     * Sets doc_num
     *
     * @param int|null $doc_num doc_num
     *
     * @return self
     */
    public function setDocNum($doc_num)
    {
        if (is_null($doc_num)) {
            throw new \InvalidArgumentException('non-nullable doc_num cannot be null');
        }
        $this->container['doc_num'] = $doc_num;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return string|null
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param string|null $doc_type doc_type
     *
     * @return self
     */
    public function setDocType($doc_type)
    {
        if (is_null($doc_type)) {
            throw new \InvalidArgumentException('non-nullable doc_type cannot be null');
        }
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets doc_date
     *
     * @return \DateTime|null
     */
    public function getDocDate()
    {
        return $this->container['doc_date'];
    }

    /**
     * Sets doc_date
     *
     * @param \DateTime|null $doc_date doc_date
     *
     * @return self
     */
    public function setDocDate($doc_date)
    {
        if (is_null($doc_date)) {
            throw new \InvalidArgumentException('non-nullable doc_date cannot be null');
        }
        $this->container['doc_date'] = $doc_date;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets contra_account_code
     *
     * @return string|null
     */
    public function getContraAccountCode()
    {
        return $this->container['contra_account_code'];
    }

    /**
     * Sets contra_account_code
     *
     * @param string|null $contra_account_code contra_account_code
     *
     * @return self
     */
    public function setContraAccountCode($contra_account_code)
    {
        if (is_null($contra_account_code)) {
            throw new \InvalidArgumentException('non-nullable contra_account_code cannot be null');
        }
        $this->container['contra_account_code'] = $contra_account_code;

        return $this;
    }

    /**
     * Gets account_code
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string|null $account_code account_code
     *
     * @return self
     */
    public function setAccountCode($account_code)
    {
        if (is_null($account_code)) {
            throw new \InvalidArgumentException('non-nullable account_code cannot be null');
        }
        $this->container['account_code'] = $account_code;

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
     * Gets vat_amount
     *
     * @return float|null
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param float|null $vat_amount vat_amount
     *
     * @return self
     */
    public function setVatAmount($vat_amount)
    {
        if (is_null($vat_amount)) {
            throw new \InvalidArgumentException('non-nullable vat_amount cannot be null');
        }
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets vat_code
     *
     * @return string|null
     */
    public function getVatCode()
    {
        return $this->container['vat_code'];
    }

    /**
     * Sets vat_code
     *
     * @param string|null $vat_code vat_code
     *
     * @return self
     */
    public function setVatCode($vat_code)
    {
        if (is_null($vat_code)) {
            throw new \InvalidArgumentException('non-nullable vat_code cannot be null');
        }
        $this->container['vat_code'] = $vat_code;

        return $this;
    }

    /**
     * Gets vat_percent
     *
     * @return float|null
     */
    public function getVatPercent()
    {
        return $this->container['vat_percent'];
    }

    /**
     * Sets vat_percent
     *
     * @param float|null $vat_percent vat_percent
     *
     * @return self
     */
    public function setVatPercent($vat_percent)
    {
        if (is_null($vat_percent)) {
            throw new \InvalidArgumentException('non-nullable vat_percent cannot be null');
        }
        $this->container['vat_percent'] = $vat_percent;

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
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            throw new \InvalidArgumentException('non-nullable currency_code cannot be null');
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets fc_amount
     *
     * @return float|null
     */
    public function getFcAmount()
    {
        return $this->container['fc_amount'];
    }

    /**
     * Sets fc_amount
     *
     * @param float|null $fc_amount fc_amount
     *
     * @return self
     */
    public function setFcAmount($fc_amount)
    {
        if (is_null($fc_amount)) {
            throw new \InvalidArgumentException('non-nullable fc_amount cannot be null');
        }
        $this->container['fc_amount'] = $fc_amount;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate exchange_rate
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        if (is_null($exchange_rate)) {
            throw new \InvalidArgumentException('non-nullable exchange_rate cannot be null');
        }
        $this->container['exchange_rate'] = $exchange_rate;

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
     * Gets party_num
     *
     * @return int|null
     */
    public function getPartyNum()
    {
        return $this->container['party_num'];
    }

    /**
     * Sets party_num
     *
     * @param int|null $party_num party_num
     *
     * @return self
     */
    public function setPartyNum($party_num)
    {
        if (is_null($party_num)) {
            throw new \InvalidArgumentException('non-nullable party_num cannot be null');
        }
        $this->container['party_num'] = $party_num;

        return $this;
    }

    /**
     * Gets party_name
     *
     * @return string|null
     */
    public function getPartyName()
    {
        return $this->container['party_name'];
    }

    /**
     * Sets party_name
     *
     * @param string|null $party_name party_name
     *
     * @return self
     */
    public function setPartyName($party_name)
    {
        if (is_null($party_name)) {
            throw new \InvalidArgumentException('non-nullable party_name cannot be null');
        }
        $this->container['party_name'] = $party_name;

        return $this;
    }

    /**
     * Gets invoice_num
     *
     * @return int|null
     */
    public function getInvoiceNum()
    {
        return $this->container['invoice_num'];
    }

    /**
     * Sets invoice_num
     *
     * @param int|null $invoice_num invoice_num
     *
     * @return self
     */
    public function setInvoiceNum($invoice_num)
    {
        if (is_null($invoice_num)) {
            throw new \InvalidArgumentException('non-nullable invoice_num cannot be null');
        }
        $this->container['invoice_num'] = $invoice_num;

        return $this;
    }

    /**
     * Gets free_invoice_num
     *
     * @return string|null
     */
    public function getFreeInvoiceNum()
    {
        return $this->container['free_invoice_num'];
    }

    /**
     * Sets free_invoice_num
     *
     * @param string|null $free_invoice_num free_invoice_num
     *
     * @return self
     */
    public function setFreeInvoiceNum($free_invoice_num)
    {
        if (is_null($free_invoice_num)) {
            throw new \InvalidArgumentException('non-nullable free_invoice_num cannot be null');
        }
        $this->container['free_invoice_num'] = $free_invoice_num;

        return $this;
    }

    /**
     * Gets cost_center_code
     *
     * @return string|null
     */
    public function getCostCenterCode()
    {
        return $this->container['cost_center_code'];
    }

    /**
     * Sets cost_center_code
     *
     * @param string|null $cost_center_code cost_center_code
     *
     * @return self
     */
    public function setCostCenterCode($cost_center_code)
    {
        if (is_null($cost_center_code)) {
            throw new \InvalidArgumentException('non-nullable cost_center_code cannot be null');
        }
        $this->container['cost_center_code'] = $cost_center_code;

        return $this;
    }

    /**
     * Gets user_name
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     *
     * @param string|null $user_name user_name
     *
     * @return self
     */
    public function setUserName($user_name)
    {
        if (is_null($user_name)) {
            throw new \InvalidArgumentException('non-nullable user_name cannot be null');
        }
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets modify_date
     *
     * @return \DateTime|null
     */
    public function getModifyDate()
    {
        return $this->container['modify_date'];
    }

    /**
     * Sets modify_date
     *
     * @param \DateTime|null $modify_date modify_date
     *
     * @return self
     */
    public function setModifyDate($modify_date)
    {
        if (is_null($modify_date)) {
            throw new \InvalidArgumentException('non-nullable modify_date cannot be null');
        }
        $this->container['modify_date'] = $modify_date;

        return $this;
    }

    /**
     * Gets is_cf_posting
     *
     * @return bool|null
     */
    public function getIsCfPosting()
    {
        return $this->container['is_cf_posting'];
    }

    /**
     * Sets is_cf_posting
     *
     * @param bool|null $is_cf_posting is_cf_posting
     *
     * @return self
     */
    public function setIsCfPosting($is_cf_posting)
    {
        if (is_null($is_cf_posting)) {
            throw new \InvalidArgumentException('non-nullable is_cf_posting cannot be null');
        }
        $this->container['is_cf_posting'] = $is_cf_posting;

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
     * Gets posting_type_fid
     *
     * @return int|null
     */
    public function getPostingTypeFid()
    {
        return $this->container['posting_type_fid'];
    }

    /**
     * Sets posting_type_fid
     *
     * @param int|null $posting_type_fid posting_type_fid
     *
     * @return self
     */
    public function setPostingTypeFid($posting_type_fid)
    {
        if (is_null($posting_type_fid)) {
            throw new \InvalidArgumentException('non-nullable posting_type_fid cannot be null');
        }
        $this->container['posting_type_fid'] = $posting_type_fid;

        return $this;
    }

    /**
     * Gets has_any_document
     *
     * @return bool|null
     */
    public function getHasAnyDocument()
    {
        return $this->container['has_any_document'];
    }

    /**
     * Sets has_any_document
     *
     * @param bool|null $has_any_document has_any_document
     *
     * @return self
     */
    public function setHasAnyDocument($has_any_document)
    {
        if (is_null($has_any_document)) {
            throw new \InvalidArgumentException('non-nullable has_any_document cannot be null');
        }
        $this->container['has_any_document'] = $has_any_document;

        return $this;
    }

    /**
     * Gets posting_index
     *
     * @return int|null
     */
    public function getPostingIndex()
    {
        return $this->container['posting_index'];
    }

    /**
     * Sets posting_index
     *
     * @param int|null $posting_index posting_index
     *
     * @return self
     */
    public function setPostingIndex($posting_index)
    {
        if (is_null($posting_index)) {
            throw new \InvalidArgumentException('non-nullable posting_index cannot be null');
        }
        $this->container['posting_index'] = $posting_index;

        return $this;
    }

    /**
     * Gets is_in_cost_center_transaction
     *
     * @return bool|null
     */
    public function getIsInCostCenterTransaction()
    {
        return $this->container['is_in_cost_center_transaction'];
    }

    /**
     * Sets is_in_cost_center_transaction
     *
     * @param bool|null $is_in_cost_center_transaction is_in_cost_center_transaction
     *
     * @return self
     */
    public function setIsInCostCenterTransaction($is_in_cost_center_transaction)
    {
        if (is_null($is_in_cost_center_transaction)) {
            throw new \InvalidArgumentException('non-nullable is_in_cost_center_transaction cannot be null');
        }
        $this->container['is_in_cost_center_transaction'] = $is_in_cost_center_transaction;

        return $this;
    }

    /**
     * Gets contra_postings
     *
     * @return \OpenAPI\Client\Model\BalancePosting[]|null
     */
    public function getContraPostings()
    {
        return $this->container['contra_postings'];
    }

    /**
     * Sets contra_postings
     *
     * @param \OpenAPI\Client\Model\BalancePosting[]|null $contra_postings contra_postings
     *
     * @return self
     */
    public function setContraPostings($contra_postings)
    {
        if (is_null($contra_postings)) {
            throw new \InvalidArgumentException('non-nullable contra_postings cannot be null');
        }
        $this->container['contra_postings'] = $contra_postings;

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

