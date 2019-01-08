<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageData StructType
 * @subpackage Structs
 */
class MessageData extends AbstractStructBase
{
    /**
     * The MessageId
     * Meta informations extracted from the WSDL
     * - ref: tns:MessageId
     * - minLength: 1
     * @var string
     */
    public $MessageId;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - ref: tns:Timestamp
     * @var string
     */
    public $Timestamp;
    /**
     * The RefToMessageId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:RefToMessageId
     * - minLength: 1
     * @var string
     */
    public $RefToMessageId;
    /**
     * The TimeToLive
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:TimeToLive
     * @var string
     */
    public $TimeToLive;
    /**
     * Constructor method for MessageData
     * @uses MessageData::setMessageId()
     * @uses MessageData::setTimestamp()
     * @uses MessageData::setRefToMessageId()
     * @uses MessageData::setTimeToLive()
     * @param string $messageId
     * @param string $timestamp
     * @param string $refToMessageId
     * @param string $timeToLive
     */
    public function __construct($messageId = null, $timestamp = null, $refToMessageId = null, $timeToLive = null)
    {
        $this
            ->setMessageId($messageId)
            ->setTimestamp($timestamp)
            ->setRefToMessageId($refToMessageId)
            ->setTimeToLive($timeToLive);
    }
    /**
     * Get MessageId value
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }
    /**
     * Set MessageId value
     * @param string $messageId
     * @return \Sabre\UpdateReservation\StructType\MessageData
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($messageId) && strlen($messageId) < 1) || (is_array($messageId) && count($messageId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($messageId) && !is_string($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageId)), __LINE__);
        }
        $this->MessageId = $messageId;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \Sabre\UpdateReservation\StructType\MessageData
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get RefToMessageId value
     * @return string|null
     */
    public function getRefToMessageId()
    {
        return $this->RefToMessageId;
    }
    /**
     * Set RefToMessageId value
     * @param string $refToMessageId
     * @return \Sabre\UpdateReservation\StructType\MessageData
     */
    public function setRefToMessageId($refToMessageId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($refToMessageId) && strlen($refToMessageId) < 1) || (is_array($refToMessageId) && count($refToMessageId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($refToMessageId) && !is_string($refToMessageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refToMessageId)), __LINE__);
        }
        $this->RefToMessageId = $refToMessageId;
        return $this;
    }
    /**
     * Get TimeToLive value
     * @return string|null
     */
    public function getTimeToLive()
    {
        return $this->TimeToLive;
    }
    /**
     * Set TimeToLive value
     * @param string $timeToLive
     * @return \Sabre\UpdateReservation\StructType\MessageData
     */
    public function setTimeToLive($timeToLive = null)
    {
        // validation for constraint: string
        if (!is_null($timeToLive) && !is_string($timeToLive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeToLive)), __LINE__);
        }
        $this->TimeToLive = $timeToLive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MessageData
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
