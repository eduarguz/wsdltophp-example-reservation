<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureType StructType
 * @subpackage Structs
 */
class SignatureType extends AbstractStructBase
{
    /**
     * The SignedInfo
     * Meta informations extracted from the WSDL
     * - ref: ds:SignedInfo
     * @var \Sabre\UpdateReservation\StructType\SignedInfoType
     */
    public $SignedInfo;
    /**
     * The SignatureValue
     * Meta informations extracted from the WSDL
     * - ref: ds:SignatureValue
     * @var \Sabre\UpdateReservation\StructType\SignatureValueType
     */
    public $SignatureValue;
    /**
     * The KeyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ds:KeyInfo
     * @var \Sabre\UpdateReservation\StructType\KeyInfoType
     */
    public $KeyInfo;
    /**
     * The Object
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ds:Object
     * @var \Sabre\UpdateReservation\StructType\ObjectType[]
     */
    public $Object;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $Id;
    /**
     * The HistoryTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryTimestamp;
    /**
     * The DutyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DutyCode;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AgentSine;
    /**
     * The HomePCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HomePCC;
    /**
     * The AgencyPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AgencyPCC;
    /**
     * The OAC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OACType
     */
    public $OAC;
    /**
     * The HistoryFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryFrom;
    /**
     * The SequenceNbr
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $SequenceNbr;
    /**
     * Constructor method for SignatureType
     * @uses SignatureType::setSignedInfo()
     * @uses SignatureType::setSignatureValue()
     * @uses SignatureType::setKeyInfo()
     * @uses SignatureType::setObject()
     * @uses SignatureType::setId()
     * @uses SignatureType::setHistoryTimestamp()
     * @uses SignatureType::setDutyCode()
     * @uses SignatureType::setAgentSine()
     * @uses SignatureType::setHomePCC()
     * @uses SignatureType::setAgencyPCC()
     * @uses SignatureType::setOAC()
     * @uses SignatureType::setHistoryFrom()
     * @uses SignatureType::setSequenceNbr()
     * @param \Sabre\UpdateReservation\StructType\SignedInfoType $signedInfo
     * @param \Sabre\UpdateReservation\StructType\SignatureValueType $signatureValue
     * @param \Sabre\UpdateReservation\StructType\KeyInfoType $keyInfo
     * @param \Sabre\UpdateReservation\StructType\ObjectType[] $object
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $historyTimestamp
     * @param string $dutyCode
     * @param string $agentSine
     * @param string $homePCC
     * @param string $agencyPCC
     * @param \Sabre\UpdateReservation\StructType\OACType $oAC
     * @param string $historyFrom
     * @param int $sequenceNbr
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SignedInfoType $signedInfo = null, \Sabre\UpdateReservation\StructType\SignatureValueType $signatureValue = null, \Sabre\UpdateReservation\StructType\KeyInfoType $keyInfo = null, array $object = array(), \Sabre\UpdateReservation\StructType\ID $id = null, $historyTimestamp = null, $dutyCode = null, $agentSine = null, $homePCC = null, $agencyPCC = null, \Sabre\UpdateReservation\StructType\OACType $oAC = null, $historyFrom = null, $sequenceNbr = null)
    {
        $this
            ->setSignedInfo($signedInfo)
            ->setSignatureValue($signatureValue)
            ->setKeyInfo($keyInfo)
            ->setObject($object)
            ->setId($id)
            ->setHistoryTimestamp($historyTimestamp)
            ->setDutyCode($dutyCode)
            ->setAgentSine($agentSine)
            ->setHomePCC($homePCC)
            ->setAgencyPCC($agencyPCC)
            ->setOAC($oAC)
            ->setHistoryFrom($historyFrom)
            ->setSequenceNbr($sequenceNbr);
    }
    /**
     * Get SignedInfo value
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType|null
     */
    public function getSignedInfo()
    {
        return $this->SignedInfo;
    }
    /**
     * Set SignedInfo value
     * @param \Sabre\UpdateReservation\StructType\SignedInfoType $signedInfo
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setSignedInfo(\Sabre\UpdateReservation\StructType\SignedInfoType $signedInfo = null)
    {
        $this->SignedInfo = $signedInfo;
        return $this;
    }
    /**
     * Get SignatureValue value
     * @return \Sabre\UpdateReservation\StructType\SignatureValueType|null
     */
    public function getSignatureValue()
    {
        return $this->SignatureValue;
    }
    /**
     * Set SignatureValue value
     * @param \Sabre\UpdateReservation\StructType\SignatureValueType $signatureValue
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setSignatureValue(\Sabre\UpdateReservation\StructType\SignatureValueType $signatureValue = null)
    {
        $this->SignatureValue = $signatureValue;
        return $this;
    }
    /**
     * Get KeyInfo value
     * @return \Sabre\UpdateReservation\StructType\KeyInfoType|null
     */
    public function getKeyInfo()
    {
        return $this->KeyInfo;
    }
    /**
     * Set KeyInfo value
     * @param \Sabre\UpdateReservation\StructType\KeyInfoType $keyInfo
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setKeyInfo(\Sabre\UpdateReservation\StructType\KeyInfoType $keyInfo = null)
    {
        $this->KeyInfo = $keyInfo;
        return $this;
    }
    /**
     * Get Object value
     * @return \Sabre\UpdateReservation\StructType\ObjectType[]|null
     */
    public function getObject()
    {
        return $this->Object;
    }
    /**
     * Set Object value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ObjectType[] $object
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setObject(array $object = array())
    {
        foreach ($object as $signatureTypeObjectItem) {
            // validation for constraint: itemType
            if (!$signatureTypeObjectItem instanceof \Sabre\UpdateReservation\StructType\ObjectType) {
                throw new \InvalidArgumentException(sprintf('The Object property can only contain items of \Sabre\UpdateReservation\StructType\ObjectType, "%s" given', is_object($signatureTypeObjectItem) ? get_class($signatureTypeObjectItem) : gettype($signatureTypeObjectItem)), __LINE__);
            }
        }
        $this->Object = $object;
        return $this;
    }
    /**
     * Add item to Object value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ObjectType $item
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function addToObject(\Sabre\UpdateReservation\StructType\ObjectType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ObjectType) {
            throw new \InvalidArgumentException(sprintf('The Object property can only contain items of \Sabre\UpdateReservation\StructType\ObjectType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Object[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get HistoryTimestamp value
     * @return string|null
     */
    public function getHistoryTimestamp()
    {
        return $this->HistoryTimestamp;
    }
    /**
     * Set HistoryTimestamp value
     * @param string $historyTimestamp
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setHistoryTimestamp($historyTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($historyTimestamp) && !is_string($historyTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyTimestamp)), __LINE__);
        }
        $this->HistoryTimestamp = $historyTimestamp;
        return $this;
    }
    /**
     * Get DutyCode value
     * @return string|null
     */
    public function getDutyCode()
    {
        return $this->DutyCode;
    }
    /**
     * Set DutyCode value
     * @param string $dutyCode
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setDutyCode($dutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($dutyCode) && !is_string($dutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dutyCode)), __LINE__);
        }
        $this->DutyCode = $dutyCode;
        return $this;
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setAgentSine($agentSine = null)
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get HomePCC value
     * @return string|null
     */
    public function getHomePCC()
    {
        return $this->HomePCC;
    }
    /**
     * Set HomePCC value
     * @param string $homePCC
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setHomePCC($homePCC = null)
    {
        // validation for constraint: string
        if (!is_null($homePCC) && !is_string($homePCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($homePCC)), __LINE__);
        }
        $this->HomePCC = $homePCC;
        return $this;
    }
    /**
     * Get AgencyPCC value
     * @return string|null
     */
    public function getAgencyPCC()
    {
        return $this->AgencyPCC;
    }
    /**
     * Set AgencyPCC value
     * @param string $agencyPCC
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setAgencyPCC($agencyPCC = null)
    {
        // validation for constraint: string
        if (!is_null($agencyPCC) && !is_string($agencyPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyPCC)), __LINE__);
        }
        $this->AgencyPCC = $agencyPCC;
        return $this;
    }
    /**
     * Get OAC value
     * @return \Sabre\UpdateReservation\StructType\OACType|null
     */
    public function getOAC()
    {
        return $this->OAC;
    }
    /**
     * Set OAC value
     * @param \Sabre\UpdateReservation\StructType\OACType $oAC
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setOAC(\Sabre\UpdateReservation\StructType\OACType $oAC = null)
    {
        $this->OAC = $oAC;
        return $this;
    }
    /**
     * Get HistoryFrom value
     * @return string|null
     */
    public function getHistoryFrom()
    {
        return $this->HistoryFrom;
    }
    /**
     * Set HistoryFrom value
     * @param string $historyFrom
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setHistoryFrom($historyFrom = null)
    {
        // validation for constraint: string
        if (!is_null($historyFrom) && !is_string($historyFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyFrom)), __LINE__);
        }
        $this->HistoryFrom = $historyFrom;
        return $this;
    }
    /**
     * Get SequenceNbr value
     * @return int|null
     */
    public function getSequenceNbr()
    {
        return $this->SequenceNbr;
    }
    /**
     * Set SequenceNbr value
     * @param int $sequenceNbr
     * @return \Sabre\UpdateReservation\StructType\SignatureType
     */
    public function setSequenceNbr($sequenceNbr = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNbr) && !is_numeric($sequenceNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNbr)), __LINE__);
        }
        $this->SequenceNbr = $sequenceNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SignatureType
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
