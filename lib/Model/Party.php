<?php
/**
 * Party
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
 * Party Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Party implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Party';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'country_fid' => 'int',
        'language_fid' => 'int',
        'short_name' => 'string',
        'name' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'city' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'address_block' => 'string',
        'email' => 'string',
        'remarks' => 'string',
        'telefax' => 'string',
        'telephone' => 'string',
        'web' => 'string',
        'is_private' => 'bool',
        'party_num' => 'int',
        'free_party_num' => 'string',
        'is_have_debtor' => 'bool',
        'is_have_creditor' => 'bool',
        'country_code' => 'string',
        'language_code' => 'string',
        'zip' => 'string',
        'person' => '\OpenAPI\Client\Model\Person',
        'debtor' => '\OpenAPI\Client\Model\Debtor',
        'creditor' => '\OpenAPI\Client\Model\Creditor',
        'uid' => 'int'
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
        'country_fid' => 'int32',
        'language_fid' => 'int32',
        'short_name' => null,
        'name' => null,
        'line1' => null,
        'line2' => null,
        'city' => null,
        'address1' => null,
        'address2' => null,
        'address_block' => null,
        'email' => null,
        'remarks' => null,
        'telefax' => null,
        'telephone' => null,
        'web' => null,
        'is_private' => null,
        'party_num' => 'int32',
        'free_party_num' => null,
        'is_have_debtor' => null,
        'is_have_creditor' => null,
        'country_code' => null,
        'language_code' => null,
        'zip' => null,
        'person' => null,
        'debtor' => null,
        'creditor' => null,
        'uid' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'country_fid' => false,
        'language_fid' => false,
        'short_name' => false,
        'name' => false,
        'line1' => false,
        'line2' => false,
        'city' => false,
        'address1' => false,
        'address2' => false,
        'address_block' => false,
        'email' => false,
        'remarks' => false,
        'telefax' => false,
        'telephone' => false,
        'web' => false,
        'is_private' => false,
        'party_num' => false,
        'free_party_num' => false,
        'is_have_debtor' => false,
        'is_have_creditor' => false,
        'country_code' => false,
        'language_code' => false,
        'zip' => false,
        'person' => false,
        'debtor' => false,
        'creditor' => false,
        'uid' => false
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
        'country_fid' => 'countryFID',
        'language_fid' => 'languageFID',
        'short_name' => 'shortName',
        'name' => 'name',
        'line1' => 'line1',
        'line2' => 'line2',
        'city' => 'city',
        'address1' => 'address1',
        'address2' => 'address2',
        'address_block' => 'addressBlock',
        'email' => 'email',
        'remarks' => 'remarks',
        'telefax' => 'telefax',
        'telephone' => 'telephone',
        'web' => 'web',
        'is_private' => 'isPrivate',
        'party_num' => 'partyNum',
        'free_party_num' => 'freePartyNum',
        'is_have_debtor' => 'isHaveDebtor',
        'is_have_creditor' => 'isHaveCreditor',
        'country_code' => 'countryCode',
        'language_code' => 'languageCode',
        'zip' => 'zip',
        'person' => 'person',
        'debtor' => 'debtor',
        'creditor' => 'creditor',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'country_fid' => 'setCountryFid',
        'language_fid' => 'setLanguageFid',
        'short_name' => 'setShortName',
        'name' => 'setName',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'city' => 'setCity',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address_block' => 'setAddressBlock',
        'email' => 'setEmail',
        'remarks' => 'setRemarks',
        'telefax' => 'setTelefax',
        'telephone' => 'setTelephone',
        'web' => 'setWeb',
        'is_private' => 'setIsPrivate',
        'party_num' => 'setPartyNum',
        'free_party_num' => 'setFreePartyNum',
        'is_have_debtor' => 'setIsHaveDebtor',
        'is_have_creditor' => 'setIsHaveCreditor',
        'country_code' => 'setCountryCode',
        'language_code' => 'setLanguageCode',
        'zip' => 'setZip',
        'person' => 'setPerson',
        'debtor' => 'setDebtor',
        'creditor' => 'setCreditor',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'country_fid' => 'getCountryFid',
        'language_fid' => 'getLanguageFid',
        'short_name' => 'getShortName',
        'name' => 'getName',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'city' => 'getCity',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address_block' => 'getAddressBlock',
        'email' => 'getEmail',
        'remarks' => 'getRemarks',
        'telefax' => 'getTelefax',
        'telephone' => 'getTelephone',
        'web' => 'getWeb',
        'is_private' => 'getIsPrivate',
        'party_num' => 'getPartyNum',
        'free_party_num' => 'getFreePartyNum',
        'is_have_debtor' => 'getIsHaveDebtor',
        'is_have_creditor' => 'getIsHaveCreditor',
        'country_code' => 'getCountryCode',
        'language_code' => 'getLanguageCode',
        'zip' => 'getZip',
        'person' => 'getPerson',
        'debtor' => 'getDebtor',
        'creditor' => 'getCreditor',
        'uid' => 'getUid'
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
        $this->setIfExists('country_fid', $data ?? [], null);
        $this->setIfExists('language_fid', $data ?? [], null);
        $this->setIfExists('short_name', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('line1', $data ?? [], null);
        $this->setIfExists('line2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('address_block', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('remarks', $data ?? [], null);
        $this->setIfExists('telefax', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('web', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
        $this->setIfExists('party_num', $data ?? [], null);
        $this->setIfExists('free_party_num', $data ?? [], null);
        $this->setIfExists('is_have_debtor', $data ?? [], null);
        $this->setIfExists('is_have_creditor', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('debtor', $data ?? [], null);
        $this->setIfExists('creditor', $data ?? [], null);
        $this->setIfExists('uid', $data ?? [], null);
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
     * Gets country_fid
     *
     * @return int|null
     */
    public function getCountryFid()
    {
        return $this->container['country_fid'];
    }

    /**
     * Sets country_fid
     *
     * @param int|null $country_fid country_fid
     *
     * @return self
     */
    public function setCountryFid($country_fid)
    {
        if (is_null($country_fid)) {
            throw new \InvalidArgumentException('non-nullable country_fid cannot be null');
        }
        $this->container['country_fid'] = $country_fid;

        return $this;
    }

    /**
     * Gets language_fid
     *
     * @return int|null
     */
    public function getLanguageFid()
    {
        return $this->container['language_fid'];
    }

    /**
     * Sets language_fid
     *
     * @param int|null $language_fid language_fid
     *
     * @return self
     */
    public function setLanguageFid($language_fid)
    {
        if (is_null($language_fid)) {
            throw new \InvalidArgumentException('non-nullable language_fid cannot be null');
        }
        $this->container['language_fid'] = $language_fid;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name short_name
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        if (is_null($short_name)) {
            throw new \InvalidArgumentException('non-nullable short_name cannot be null');
        }
        $this->container['short_name'] = $short_name;

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
     * Gets line1
     *
     * @return string|null
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string|null $line1 line1
     *
     * @return self
     */
    public function setLine1($line1)
    {
        if (is_null($line1)) {
            throw new \InvalidArgumentException('non-nullable line1 cannot be null');
        }
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 line2
     *
     * @return self
     */
    public function setLine2($line2)
    {
        if (is_null($line2)) {
            throw new \InvalidArgumentException('non-nullable line2 cannot be null');
        }
        $this->container['line2'] = $line2;

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
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 address1
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 address2
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address_block
     *
     * @return string|null
     */
    public function getAddressBlock()
    {
        return $this->container['address_block'];
    }

    /**
     * Sets address_block
     *
     * @param string|null $address_block address_block
     *
     * @return self
     */
    public function setAddressBlock($address_block)
    {
        if (is_null($address_block)) {
            throw new \InvalidArgumentException('non-nullable address_block cannot be null');
        }
        $this->container['address_block'] = $address_block;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

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
     * Gets telefax
     *
     * @return string|null
     */
    public function getTelefax()
    {
        return $this->container['telefax'];
    }

    /**
     * Sets telefax
     *
     * @param string|null $telefax telefax
     *
     * @return self
     */
    public function setTelefax($telefax)
    {
        if (is_null($telefax)) {
            throw new \InvalidArgumentException('non-nullable telefax cannot be null');
        }
        $this->container['telefax'] = $telefax;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone telephone
     *
     * @return self
     */
    public function setTelephone($telephone)
    {
        if (is_null($telephone)) {
            throw new \InvalidArgumentException('non-nullable telephone cannot be null');
        }
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets web
     *
     * @return string|null
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param string|null $web web
     *
     * @return self
     */
    public function setWeb($web)
    {
        if (is_null($web)) {
            throw new \InvalidArgumentException('non-nullable web cannot be null');
        }
        $this->container['web'] = $web;

        return $this;
    }

    /**
     * Gets is_private
     *
     * @return bool|null
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool|null $is_private is_private
     *
     * @return self
     */
    public function setIsPrivate($is_private)
    {
        if (is_null($is_private)) {
            throw new \InvalidArgumentException('non-nullable is_private cannot be null');
        }
        $this->container['is_private'] = $is_private;

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
     * Gets free_party_num
     *
     * @return string|null
     */
    public function getFreePartyNum()
    {
        return $this->container['free_party_num'];
    }

    /**
     * Sets free_party_num
     *
     * @param string|null $free_party_num free_party_num
     *
     * @return self
     */
    public function setFreePartyNum($free_party_num)
    {
        if (is_null($free_party_num)) {
            throw new \InvalidArgumentException('non-nullable free_party_num cannot be null');
        }
        $this->container['free_party_num'] = $free_party_num;

        return $this;
    }

    /**
     * Gets is_have_debtor
     *
     * @return bool|null
     */
    public function getIsHaveDebtor()
    {
        return $this->container['is_have_debtor'];
    }

    /**
     * Sets is_have_debtor
     *
     * @param bool|null $is_have_debtor is_have_debtor
     *
     * @return self
     */
    public function setIsHaveDebtor($is_have_debtor)
    {
        if (is_null($is_have_debtor)) {
            throw new \InvalidArgumentException('non-nullable is_have_debtor cannot be null');
        }
        $this->container['is_have_debtor'] = $is_have_debtor;

        return $this;
    }

    /**
     * Gets is_have_creditor
     *
     * @return bool|null
     */
    public function getIsHaveCreditor()
    {
        return $this->container['is_have_creditor'];
    }

    /**
     * Sets is_have_creditor
     *
     * @param bool|null $is_have_creditor is_have_creditor
     *
     * @return self
     */
    public function setIsHaveCreditor($is_have_creditor)
    {
        if (is_null($is_have_creditor)) {
            throw new \InvalidArgumentException('non-nullable is_have_creditor cannot be null');
        }
        $this->container['is_have_creditor'] = $is_have_creditor;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code language_code
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }
        $this->container['zip'] = $zip;

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
     * Gets debtor
     *
     * @return \OpenAPI\Client\Model\Debtor|null
     */
    public function getDebtor()
    {
        return $this->container['debtor'];
    }

    /**
     * Sets debtor
     *
     * @param \OpenAPI\Client\Model\Debtor|null $debtor debtor
     *
     * @return self
     */
    public function setDebtor($debtor)
    {
        if (is_null($debtor)) {
            throw new \InvalidArgumentException('non-nullable debtor cannot be null');
        }
        $this->container['debtor'] = $debtor;

        return $this;
    }

    /**
     * Gets creditor
     *
     * @return \OpenAPI\Client\Model\Creditor|null
     */
    public function getCreditor()
    {
        return $this->container['creditor'];
    }

    /**
     * Sets creditor
     *
     * @param \OpenAPI\Client\Model\Creditor|null $creditor creditor
     *
     * @return self
     */
    public function setCreditor($creditor)
    {
        if (is_null($creditor)) {
            throw new \InvalidArgumentException('non-nullable creditor cannot be null');
        }
        $this->container['creditor'] = $creditor;

        return $this;
    }

    /**
     * Gets uid
     *
     * @return int|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int|null $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }
        $this->container['uid'] = $uid;

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


