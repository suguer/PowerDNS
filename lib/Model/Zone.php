<?php
/**
 * Zone
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PowerDNS Authoritative HTTP API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.15
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Zone Class Doc Comment
 *
 * @category Class
 * @description This represents an authoritative DNS Zone.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Zone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Zone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'url' => 'string',
        'kind' => 'string',
        'rrsets' => '\Swagger\Client\Model\RRSet[]',
        'serial' => 'int',
        'notified_serial' => 'int',
        'edited_serial' => 'int',
        'masters' => 'string[]',
        'dnssec' => 'bool',
        'nsec3param' => 'string',
        'nsec3narrow' => 'bool',
        'presigned' => 'bool',
        'soa_edit' => 'string',
        'soa_edit_api' => 'string',
        'api_rectify' => 'bool',
        'zone' => 'string',
        'account' => 'string',
        'nameservers' => 'string[]',
        'master_tsig_key_ids' => 'string[]',
        'slave_tsig_key_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'url' => null,
        'kind' => null,
        'rrsets' => null,
        'serial' => null,
        'notified_serial' => null,
        'edited_serial' => null,
        'masters' => null,
        'dnssec' => null,
        'nsec3param' => null,
        'nsec3narrow' => null,
        'presigned' => null,
        'soa_edit' => null,
        'soa_edit_api' => null,
        'api_rectify' => null,
        'zone' => null,
        'account' => null,
        'nameservers' => null,
        'master_tsig_key_ids' => null,
        'slave_tsig_key_ids' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'url' => 'url',
        'kind' => 'kind',
        'rrsets' => 'rrsets',
        'serial' => 'serial',
        'notified_serial' => 'notified_serial',
        'edited_serial' => 'edited_serial',
        'masters' => 'masters',
        'dnssec' => 'dnssec',
        'nsec3param' => 'nsec3param',
        'nsec3narrow' => 'nsec3narrow',
        'presigned' => 'presigned',
        'soa_edit' => 'soa_edit',
        'soa_edit_api' => 'soa_edit_api',
        'api_rectify' => 'api_rectify',
        'zone' => 'zone',
        'account' => 'account',
        'nameservers' => 'nameservers',
        'master_tsig_key_ids' => 'master_tsig_key_ids',
        'slave_tsig_key_ids' => 'slave_tsig_key_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'url' => 'setUrl',
        'kind' => 'setKind',
        'rrsets' => 'setRrsets',
        'serial' => 'setSerial',
        'notified_serial' => 'setNotifiedSerial',
        'edited_serial' => 'setEditedSerial',
        'masters' => 'setMasters',
        'dnssec' => 'setDnssec',
        'nsec3param' => 'setNsec3param',
        'nsec3narrow' => 'setNsec3narrow',
        'presigned' => 'setPresigned',
        'soa_edit' => 'setSoaEdit',
        'soa_edit_api' => 'setSoaEditApi',
        'api_rectify' => 'setApiRectify',
        'zone' => 'setZone',
        'account' => 'setAccount',
        'nameservers' => 'setNameservers',
        'master_tsig_key_ids' => 'setMasterTsigKeyIds',
        'slave_tsig_key_ids' => 'setSlaveTsigKeyIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'url' => 'getUrl',
        'kind' => 'getKind',
        'rrsets' => 'getRrsets',
        'serial' => 'getSerial',
        'notified_serial' => 'getNotifiedSerial',
        'edited_serial' => 'getEditedSerial',
        'masters' => 'getMasters',
        'dnssec' => 'getDnssec',
        'nsec3param' => 'getNsec3param',
        'nsec3narrow' => 'getNsec3narrow',
        'presigned' => 'getPresigned',
        'soa_edit' => 'getSoaEdit',
        'soa_edit_api' => 'getSoaEditApi',
        'api_rectify' => 'getApiRectify',
        'zone' => 'getZone',
        'account' => 'getAccount',
        'nameservers' => 'getNameservers',
        'master_tsig_key_ids' => 'getMasterTsigKeyIds',
        'slave_tsig_key_ids' => 'getSlaveTsigKeyIds'
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
        return self::$swaggerModelName;
    }

    const KIND_NATIVE = 'Native';
    const KIND_MASTER = 'Master';
    const KIND_SLAVE = 'Slave';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKindAllowableValues()
    {
        return [
            self::KIND_NATIVE,
            self::KIND_MASTER,
            self::KIND_SLAVE,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['rrsets'] = isset($data['rrsets']) ? $data['rrsets'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['notified_serial'] = isset($data['notified_serial']) ? $data['notified_serial'] : null;
        $this->container['edited_serial'] = isset($data['edited_serial']) ? $data['edited_serial'] : null;
        $this->container['masters'] = isset($data['masters']) ? $data['masters'] : null;
        $this->container['dnssec'] = isset($data['dnssec']) ? $data['dnssec'] : null;
        $this->container['nsec3param'] = isset($data['nsec3param']) ? $data['nsec3param'] : null;
        $this->container['nsec3narrow'] = isset($data['nsec3narrow']) ? $data['nsec3narrow'] : null;
        $this->container['presigned'] = isset($data['presigned']) ? $data['presigned'] : null;
        $this->container['soa_edit'] = isset($data['soa_edit']) ? $data['soa_edit'] : null;
        $this->container['soa_edit_api'] = isset($data['soa_edit_api']) ? $data['soa_edit_api'] : null;
        $this->container['api_rectify'] = isset($data['api_rectify']) ? $data['api_rectify'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['nameservers'] = isset($data['nameservers']) ? $data['nameservers'] : null;
        $this->container['master_tsig_key_ids'] = isset($data['master_tsig_key_ids']) ? $data['master_tsig_key_ids'] : null;
        $this->container['slave_tsig_key_ids'] = isset($data['slave_tsig_key_ids']) ? $data['slave_tsig_key_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($this->container['kind']) && !in_array($this->container['kind'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kind', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Opaque zone id (string), assigned by the server, should not be interpreted by the application. Guaranteed to be safe for embedding in URLs.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the zone (e.g. “example.com.”) MUST have a trailing dot
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Set to “Zone”
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url API endpoint for this zone
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind Zone kind, one of “Native”, “Master”, “Slave”
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $allowedValues = $this->getKindAllowableValues();
        if (!is_null($kind) && !in_array($kind, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kind', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets rrsets
     *
     * @return \Swagger\Client\Model\RRSet[]
     */
    public function getRrsets()
    {
        return $this->container['rrsets'];
    }

    /**
     * Sets rrsets
     *
     * @param \Swagger\Client\Model\RRSet[] $rrsets RRSets in this zone (for zones/{zone_id} endpoint only; omitted during GET on the .../zones list endpoint)
     *
     * @return $this
     */
    public function setRrsets($rrsets)
    {
        $this->container['rrsets'] = $rrsets;

        return $this;
    }

    /**
     * Gets serial
     *
     * @return int
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     *
     * @param int $serial The SOA serial number
     *
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets notified_serial
     *
     * @return int
     */
    public function getNotifiedSerial()
    {
        return $this->container['notified_serial'];
    }

    /**
     * Sets notified_serial
     *
     * @param int $notified_serial The SOA serial notifications have been sent out for
     *
     * @return $this
     */
    public function setNotifiedSerial($notified_serial)
    {
        $this->container['notified_serial'] = $notified_serial;

        return $this;
    }

    /**
     * Gets edited_serial
     *
     * @return int
     */
    public function getEditedSerial()
    {
        return $this->container['edited_serial'];
    }

    /**
     * Sets edited_serial
     *
     * @param int $edited_serial The SOA serial as seen in query responses. Calculated using the SOA-EDIT metadata, default-soa-edit and default-soa-edit-signed settings
     *
     * @return $this
     */
    public function setEditedSerial($edited_serial)
    {
        $this->container['edited_serial'] = $edited_serial;

        return $this;
    }

    /**
     * Gets masters
     *
     * @return string[]
     */
    public function getMasters()
    {
        return $this->container['masters'];
    }

    /**
     * Sets masters
     *
     * @param string[] $masters List of IP addresses configured as a master for this zone (“Slave” type zones only)
     *
     * @return $this
     */
    public function setMasters($masters)
    {
        $this->container['masters'] = $masters;

        return $this;
    }

    /**
     * Gets dnssec
     *
     * @return bool
     */
    public function getDnssec()
    {
        return $this->container['dnssec'];
    }

    /**
     * Sets dnssec
     *
     * @param bool $dnssec Whether or not this zone is DNSSEC signed (inferred from presigned being true XOR presence of at least one cryptokey with active being true)
     *
     * @return $this
     */
    public function setDnssec($dnssec)
    {
        $this->container['dnssec'] = $dnssec;

        return $this;
    }

    /**
     * Gets nsec3param
     *
     * @return string
     */
    public function getNsec3param()
    {
        return $this->container['nsec3param'];
    }

    /**
     * Sets nsec3param
     *
     * @param string $nsec3param The NSEC3PARAM record
     *
     * @return $this
     */
    public function setNsec3param($nsec3param)
    {
        $this->container['nsec3param'] = $nsec3param;

        return $this;
    }

    /**
     * Gets nsec3narrow
     *
     * @return bool
     */
    public function getNsec3narrow()
    {
        return $this->container['nsec3narrow'];
    }

    /**
     * Sets nsec3narrow
     *
     * @param bool $nsec3narrow Whether or not the zone uses NSEC3 narrow
     *
     * @return $this
     */
    public function setNsec3narrow($nsec3narrow)
    {
        $this->container['nsec3narrow'] = $nsec3narrow;

        return $this;
    }

    /**
     * Gets presigned
     *
     * @return bool
     */
    public function getPresigned()
    {
        return $this->container['presigned'];
    }

    /**
     * Sets presigned
     *
     * @param bool $presigned Whether or not the zone is pre-signed
     *
     * @return $this
     */
    public function setPresigned($presigned)
    {
        $this->container['presigned'] = $presigned;

        return $this;
    }

    /**
     * Gets soa_edit
     *
     * @return string
     */
    public function getSoaEdit()
    {
        return $this->container['soa_edit'];
    }

    /**
     * Sets soa_edit
     *
     * @param string $soa_edit The SOA-EDIT metadata item
     *
     * @return $this
     */
    public function setSoaEdit($soa_edit)
    {
        $this->container['soa_edit'] = $soa_edit;

        return $this;
    }

    /**
     * Gets soa_edit_api
     *
     * @return string
     */
    public function getSoaEditApi()
    {
        return $this->container['soa_edit_api'];
    }

    /**
     * Sets soa_edit_api
     *
     * @param string $soa_edit_api The SOA-EDIT-API metadata item
     *
     * @return $this
     */
    public function setSoaEditApi($soa_edit_api)
    {
        $this->container['soa_edit_api'] = $soa_edit_api;

        return $this;
    }

    /**
     * Gets api_rectify
     *
     * @return bool
     */
    public function getApiRectify()
    {
        return $this->container['api_rectify'];
    }

    /**
     * Sets api_rectify
     *
     * @param bool $api_rectify Whether or not the zone will be rectified on data changes via the API
     *
     * @return $this
     */
    public function setApiRectify($api_rectify)
    {
        $this->container['api_rectify'] = $api_rectify;

        return $this;
    }

    /**
     * Gets zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param string $zone MAY contain a BIND-style zone file when creating a zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string $account MAY be set. Its value is defined by local policy
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets nameservers
     *
     * @return string[]
     */
    public function getNameservers()
    {
        return $this->container['nameservers'];
    }

    /**
     * Sets nameservers
     *
     * @param string[] $nameservers MAY be sent in client bodies during creation, and MUST NOT be sent by the server. Simple list of strings of nameserver names, including the trailing dot. Not required for slave zones.
     *
     * @return $this
     */
    public function setNameservers($nameservers)
    {
        $this->container['nameservers'] = $nameservers;

        return $this;
    }

    /**
     * Gets master_tsig_key_ids
     *
     * @return string[]
     */
    public function getMasterTsigKeyIds()
    {
        return $this->container['master_tsig_key_ids'];
    }

    /**
     * Sets master_tsig_key_ids
     *
     * @param string[] $master_tsig_key_ids The id of the TSIG keys used for master operation in this zone
     *
     * @return $this
     */
    public function setMasterTsigKeyIds($master_tsig_key_ids)
    {
        $this->container['master_tsig_key_ids'] = $master_tsig_key_ids;

        return $this;
    }

    /**
     * Gets slave_tsig_key_ids
     *
     * @return string[]
     */
    public function getSlaveTsigKeyIds()
    {
        return $this->container['slave_tsig_key_ids'];
    }

    /**
     * Sets slave_tsig_key_ids
     *
     * @param string[] $slave_tsig_key_ids The id of the TSIG keys used for slave operation in this zone
     *
     * @return $this
     */
    public function setSlaveTsigKeyIds($slave_tsig_key_ids)
    {
        $this->container['slave_tsig_key_ids'] = $slave_tsig_key_ids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


