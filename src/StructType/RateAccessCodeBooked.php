<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateAccessCodeBooked StructType
 * @subpackage Structs
 */
class RateAccessCodeBooked extends AbstractStructBase
{
    /**
     * The ClientIdentificationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClientIdentificationCode;
    /**
     * The RateAccessCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RateAccessCode;
    /**
     * The CategoryTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryTypeCode;
    /**
     * Constructor method for RateAccessCodeBooked
     * @uses RateAccessCodeBooked::setClientIdentificationCode()
     * @uses RateAccessCodeBooked::setRateAccessCode()
     * @uses RateAccessCodeBooked::setCategoryTypeCode()
     * @param string $clientIdentificationCode
     * @param string $rateAccessCode
     * @param string $categoryTypeCode
     */
    public function __construct($clientIdentificationCode = null, $rateAccessCode = null, $categoryTypeCode = null)
    {
        $this
            ->setClientIdentificationCode($clientIdentificationCode)
            ->setRateAccessCode($rateAccessCode)
            ->setCategoryTypeCode($categoryTypeCode);
    }
    /**
     * Get ClientIdentificationCode value
     * @return string|null
     */
    public function getClientIdentificationCode()
    {
        return $this->ClientIdentificationCode;
    }
    /**
     * Set ClientIdentificationCode value
     * @param string $clientIdentificationCode
     * @return \Sabre\UpdateReservation\StructType\RateAccessCodeBooked
     */
    public function setClientIdentificationCode($clientIdentificationCode = null)
    {
        // validation for constraint: string
        if (!is_null($clientIdentificationCode) && !is_string($clientIdentificationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientIdentificationCode)), __LINE__);
        }
        $this->ClientIdentificationCode = $clientIdentificationCode;
        return $this;
    }
    /**
     * Get RateAccessCode value
     * @return string|null
     */
    public function getRateAccessCode()
    {
        return $this->RateAccessCode;
    }
    /**
     * Set RateAccessCode value
     * @param string $rateAccessCode
     * @return \Sabre\UpdateReservation\StructType\RateAccessCodeBooked
     */
    public function setRateAccessCode($rateAccessCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateAccessCode) && !is_string($rateAccessCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateAccessCode)), __LINE__);
        }
        $this->RateAccessCode = $rateAccessCode;
        return $this;
    }
    /**
     * Get CategoryTypeCode value
     * @return string|null
     */
    public function getCategoryTypeCode()
    {
        return $this->CategoryTypeCode;
    }
    /**
     * Set CategoryTypeCode value
     * @param string $categoryTypeCode
     * @return \Sabre\UpdateReservation\StructType\RateAccessCodeBooked
     */
    public function setCategoryTypeCode($categoryTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($categoryTypeCode) && !is_string($categoryTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryTypeCode)), __LINE__);
        }
        $this->CategoryTypeCode = $categoryTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RateAccessCodeBooked
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
