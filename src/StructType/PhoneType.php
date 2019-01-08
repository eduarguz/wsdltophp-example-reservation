<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneType StructType
 * @subpackage Structs
 */
class PhoneType extends AbstractStructBase
{
    /**
     * The PhoneUseType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneUseType;
    /**
     * The PhoneCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneCountryCode;
    /**
     * The PhoneCountryName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneCountryName;
    /**
     * The PhoneNumber
     * @var string
     */
    public $PhoneNumber;
    /**
     * Constructor method for PhoneType
     * @uses PhoneType::setPhoneUseType()
     * @uses PhoneType::setPhoneCountryCode()
     * @uses PhoneType::setPhoneCountryName()
     * @uses PhoneType::setPhoneNumber()
     * @param string $phoneUseType
     * @param string $phoneCountryCode
     * @param string $phoneCountryName
     * @param string $phoneNumber
     */
    public function __construct($phoneUseType = null, $phoneCountryCode = null, $phoneCountryName = null, $phoneNumber = null)
    {
        $this
            ->setPhoneUseType($phoneUseType)
            ->setPhoneCountryCode($phoneCountryCode)
            ->setPhoneCountryName($phoneCountryName)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get PhoneUseType value
     * @return string|null
     */
    public function getPhoneUseType()
    {
        return $this->PhoneUseType;
    }
    /**
     * Set PhoneUseType value
     * @param string $phoneUseType
     * @return \Sabre\UpdateReservation\StructType\PhoneType
     */
    public function setPhoneUseType($phoneUseType = null)
    {
        // validation for constraint: string
        if (!is_null($phoneUseType) && !is_string($phoneUseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneUseType)), __LINE__);
        }
        $this->PhoneUseType = $phoneUseType;
        return $this;
    }
    /**
     * Get PhoneCountryCode value
     * @return string|null
     */
    public function getPhoneCountryCode()
    {
        return $this->PhoneCountryCode;
    }
    /**
     * Set PhoneCountryCode value
     * @param string $phoneCountryCode
     * @return \Sabre\UpdateReservation\StructType\PhoneType
     */
    public function setPhoneCountryCode($phoneCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($phoneCountryCode) && !is_string($phoneCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneCountryCode)), __LINE__);
        }
        $this->PhoneCountryCode = $phoneCountryCode;
        return $this;
    }
    /**
     * Get PhoneCountryName value
     * @return string|null
     */
    public function getPhoneCountryName()
    {
        return $this->PhoneCountryName;
    }
    /**
     * Set PhoneCountryName value
     * @param string $phoneCountryName
     * @return \Sabre\UpdateReservation\StructType\PhoneType
     */
    public function setPhoneCountryName($phoneCountryName = null)
    {
        // validation for constraint: string
        if (!is_null($phoneCountryName) && !is_string($phoneCountryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneCountryName)), __LINE__);
        }
        $this->PhoneCountryName = $phoneCountryName;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Sabre\UpdateReservation\StructType\PhoneType
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PhoneType
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
