<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerStatusType StructType
 * @subpackage Structs
 */
class PassengerStatusType extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $type;
    /**
     * The StateCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StateCode;
    /**
     * The CountryCode
     * @var string
     */
    public $CountryCode;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - documentation: Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $CityCode;
    /**
     * Constructor method for PassengerStatusType
     * @uses PassengerStatusType::setType()
     * @uses PassengerStatusType::setStateCode()
     * @uses PassengerStatusType::setCountryCode()
     * @uses PassengerStatusType::setCityCode()
     * @param string $type
     * @param string $stateCode
     * @param string $countryCode
     * @param string $cityCode
     */
    public function __construct($type = null, $stateCode = null, $countryCode = null, $cityCode = null)
    {
        $this
            ->setType($type)
            ->setStateCode($stateCode)
            ->setCountryCode($countryCode)
            ->setCityCode($cityCode);
    }
    /**
     * Get type value
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\PassengerStatusEnumType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PassengerStatusEnumType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\PassengerStatusType
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PassengerStatusEnumType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\PassengerStatusEnumType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get StateCode value
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param string $stateCode
     * @return \Sabre\UpdateReservation\StructType\PassengerStatusType
     */
    public function setStateCode($stateCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateCode) && !is_string($stateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateCode)), __LINE__);
        }
        $this->StateCode = $stateCode;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Sabre\UpdateReservation\StructType\PassengerStatusType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Sabre\UpdateReservation\StructType\PassengerStatusType
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($cityCode) && !preg_match('/[a-zA-Z]{3}/', $cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($cityCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerStatusType
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
