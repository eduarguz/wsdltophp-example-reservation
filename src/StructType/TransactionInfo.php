<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionInfo StructType
 * @subpackage Structs
 */
class TransactionInfo extends AbstractStructBase
{
    /**
     * The RequestorInfo
     * @var \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public $RequestorInfo;
    /**
     * The LastUpdateTimeStamp
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes
     * 2003-11-20T13:59:38Z).
     * @var string
     */
    public $LastUpdateTimeStamp;
    /**
     * Constructor method for TransactionInfo
     * @uses TransactionInfo::setRequestorInfo()
     * @uses TransactionInfo::setLastUpdateTimeStamp()
     * @param \Sabre\UpdateReservation\StructType\RequestorSourceType $requestorInfo
     * @param string $lastUpdateTimeStamp
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RequestorSourceType $requestorInfo = null, $lastUpdateTimeStamp = null)
    {
        $this
            ->setRequestorInfo($requestorInfo)
            ->setLastUpdateTimeStamp($lastUpdateTimeStamp);
    }
    /**
     * Get RequestorInfo value
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType|null
     */
    public function getRequestorInfo()
    {
        return $this->RequestorInfo;
    }
    /**
     * Set RequestorInfo value
     * @param \Sabre\UpdateReservation\StructType\RequestorSourceType $requestorInfo
     * @return \Sabre\UpdateReservation\StructType\TransactionInfo
     */
    public function setRequestorInfo(\Sabre\UpdateReservation\StructType\RequestorSourceType $requestorInfo = null)
    {
        $this->RequestorInfo = $requestorInfo;
        return $this;
    }
    /**
     * Get LastUpdateTimeStamp value
     * @return string|null
     */
    public function getLastUpdateTimeStamp()
    {
        return $this->LastUpdateTimeStamp;
    }
    /**
     * Set LastUpdateTimeStamp value
     * @param string $lastUpdateTimeStamp
     * @return \Sabre\UpdateReservation\StructType\TransactionInfo
     */
    public function setLastUpdateTimeStamp($lastUpdateTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdateTimeStamp) && !is_string($lastUpdateTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdateTimeStamp)), __LINE__);
        }
        $this->LastUpdateTimeStamp = $lastUpdateTimeStamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TransactionInfo
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
