<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyInfoType StructType
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class KeyInfoType extends AbstractStructBase
{
    /**
     * The KeyName
     * Meta informations extracted from the WSDL
     * - ref: ds:KeyName
     * @var string
     */
    public $KeyName;
    /**
     * The KeyValue
     * Meta informations extracted from the WSDL
     * - ref: ds:KeyValue
     * @var \Sabre\UpdateReservation\StructType\KeyValueType
     */
    public $KeyValue;
    /**
     * The RetrievalMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:RetrievalMethod
     * @var \Sabre\UpdateReservation\StructType\RetrievalMethodType
     */
    public $RetrievalMethod;
    /**
     * The X509Data
     * Meta informations extracted from the WSDL
     * - ref: ds:X509Data
     * @var \Sabre\UpdateReservation\StructType\X509DataType
     */
    public $X509Data;
    /**
     * The PGPData
     * Meta informations extracted from the WSDL
     * - ref: ds:PGPData
     * @var \Sabre\UpdateReservation\StructType\PGPDataType
     */
    public $PGPData;
    /**
     * The SPKIData
     * Meta informations extracted from the WSDL
     * - ref: ds:SPKIData
     * @var \Sabre\UpdateReservation\StructType\SPKIDataType
     */
    public $SPKIData;
    /**
     * The MgmtData
     * Meta informations extracted from the WSDL
     * - ref: ds:MgmtData
     * @var string
     */
    public $MgmtData;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $Id;
    /**
     * Constructor method for KeyInfoType
     * @uses KeyInfoType::setKeyName()
     * @uses KeyInfoType::setKeyValue()
     * @uses KeyInfoType::setRetrievalMethod()
     * @uses KeyInfoType::setX509Data()
     * @uses KeyInfoType::setPGPData()
     * @uses KeyInfoType::setSPKIData()
     * @uses KeyInfoType::setMgmtData()
     * @uses KeyInfoType::setAny()
     * @uses KeyInfoType::setId()
     * @param string $keyName
     * @param \Sabre\UpdateReservation\StructType\KeyValueType $keyValue
     * @param \Sabre\UpdateReservation\StructType\RetrievalMethodType $retrievalMethod
     * @param \Sabre\UpdateReservation\StructType\X509DataType $x509Data
     * @param \Sabre\UpdateReservation\StructType\PGPDataType $pGPData
     * @param \Sabre\UpdateReservation\StructType\SPKIDataType $sPKIData
     * @param string $mgmtData
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     */
    public function __construct($keyName = null, \Sabre\UpdateReservation\StructType\KeyValueType $keyValue = null, \Sabre\UpdateReservation\StructType\RetrievalMethodType $retrievalMethod = null, \Sabre\UpdateReservation\StructType\X509DataType $x509Data = null, \Sabre\UpdateReservation\StructType\PGPDataType $pGPData = null, \Sabre\UpdateReservation\StructType\SPKIDataType $sPKIData = null, $mgmtData = null, \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this
            ->setKeyName($keyName)
            ->setKeyValue($keyValue)
            ->setRetrievalMethod($retrievalMethod)
            ->setX509Data($x509Data)
            ->setPGPData($pGPData)
            ->setSPKIData($sPKIData)
            ->setMgmtData($mgmtData)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get KeyName value
     * @return string|null
     */
    public function getKeyName()
    {
        return $this->KeyName;
    }
    /**
     * Set KeyName value
     * @param string $keyName
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setKeyName($keyName = null)
    {
        // validation for constraint: string
        if (!is_null($keyName) && !is_string($keyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyName)), __LINE__);
        }
        $this->KeyName = $keyName;
        return $this;
    }
    /**
     * Get KeyValue value
     * @return \Sabre\UpdateReservation\StructType\KeyValueType|null
     */
    public function getKeyValue()
    {
        return $this->KeyValue;
    }
    /**
     * Set KeyValue value
     * @param \Sabre\UpdateReservation\StructType\KeyValueType $keyValue
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setKeyValue(\Sabre\UpdateReservation\StructType\KeyValueType $keyValue = null)
    {
        $this->KeyValue = $keyValue;
        return $this;
    }
    /**
     * Get RetrievalMethod value
     * @return \Sabre\UpdateReservation\StructType\RetrievalMethodType|null
     */
    public function getRetrievalMethod()
    {
        return $this->RetrievalMethod;
    }
    /**
     * Set RetrievalMethod value
     * @param \Sabre\UpdateReservation\StructType\RetrievalMethodType $retrievalMethod
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setRetrievalMethod(\Sabre\UpdateReservation\StructType\RetrievalMethodType $retrievalMethod = null)
    {
        $this->RetrievalMethod = $retrievalMethod;
        return $this;
    }
    /**
     * Get X509Data value
     * @return \Sabre\UpdateReservation\StructType\X509DataType|null
     */
    public function getX509Data()
    {
        return $this->X509Data;
    }
    /**
     * Set X509Data value
     * @param \Sabre\UpdateReservation\StructType\X509DataType $x509Data
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setX509Data(\Sabre\UpdateReservation\StructType\X509DataType $x509Data = null)
    {
        $this->X509Data = $x509Data;
        return $this;
    }
    /**
     * Get PGPData value
     * @return \Sabre\UpdateReservation\StructType\PGPDataType|null
     */
    public function getPGPData()
    {
        return $this->PGPData;
    }
    /**
     * Set PGPData value
     * @param \Sabre\UpdateReservation\StructType\PGPDataType $pGPData
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setPGPData(\Sabre\UpdateReservation\StructType\PGPDataType $pGPData = null)
    {
        $this->PGPData = $pGPData;
        return $this;
    }
    /**
     * Get SPKIData value
     * @return \Sabre\UpdateReservation\StructType\SPKIDataType|null
     */
    public function getSPKIData()
    {
        return $this->SPKIData;
    }
    /**
     * Set SPKIData value
     * @param \Sabre\UpdateReservation\StructType\SPKIDataType $sPKIData
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setSPKIData(\Sabre\UpdateReservation\StructType\SPKIDataType $sPKIData = null)
    {
        $this->SPKIData = $sPKIData;
        return $this;
    }
    /**
     * Get MgmtData value
     * @return string|null
     */
    public function getMgmtData()
    {
        return $this->MgmtData;
    }
    /**
     * Set MgmtData value
     * @param string $mgmtData
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setMgmtData($mgmtData = null)
    {
        // validation for constraint: string
        if (!is_null($mgmtData) && !is_string($mgmtData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mgmtData)), __LINE__);
        }
        $this->MgmtData = $mgmtData;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\KeyInfoType::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get Id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
