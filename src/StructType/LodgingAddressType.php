<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingAddressType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used For Address Information
 * @subpackage Structs
 */
class LodgingAddressType extends AbstractStructBase
{
    /**
     * The AddressLine1
     * @var string
     */
    public $AddressLine1;
    /**
     * The AddressLine2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressLine2;
    /**
     * The AddressLine3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressLine3;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CityCodeType
     */
    public $CityName;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StateProv
     */
    public $StateProv;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The CountryName
     * @var \Sabre\UpdateReservation\StructType\CountryName
     */
    public $CountryName;
    /**
     * Constructor method for LodgingAddressType
     * @uses LodgingAddressType::setAddressLine1()
     * @uses LodgingAddressType::setAddressLine2()
     * @uses LodgingAddressType::setAddressLine3()
     * @uses LodgingAddressType::setCityName()
     * @uses LodgingAddressType::setStateProv()
     * @uses LodgingAddressType::setPostalCode()
     * @uses LodgingAddressType::setCountryName()
     * @param string $addressLine1
     * @param string $addressLine2
     * @param string $addressLine3
     * @param \Sabre\UpdateReservation\StructType\CityCodeType $cityName
     * @param \Sabre\UpdateReservation\StructType\StateProv $stateProv
     * @param string $postalCode
     * @param \Sabre\UpdateReservation\StructType\CountryName $countryName
     */
    public function __construct($addressLine1 = null, $addressLine2 = null, $addressLine3 = null, \Sabre\UpdateReservation\StructType\CityCodeType $cityName = null, \Sabre\UpdateReservation\StructType\StateProv $stateProv = null, $postalCode = null, \Sabre\UpdateReservation\StructType\CountryName $countryName = null)
    {
        $this
            ->setAddressLine1($addressLine1)
            ->setAddressLine2($addressLine2)
            ->setAddressLine3($addressLine3)
            ->setCityName($cityName)
            ->setStateProv($stateProv)
            ->setPostalCode($postalCode)
            ->setCountryName($countryName);
    }
    /**
     * Get AddressLine1 value
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }
    /**
     * Set AddressLine1 value
     * @param string $addressLine1
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setAddressLine1($addressLine1 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine1) && !is_string($addressLine1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine1)), __LINE__);
        }
        $this->AddressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Get AddressLine2 value
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }
    /**
     * Set AddressLine2 value
     * @param string $addressLine2
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setAddressLine2($addressLine2 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine2) && !is_string($addressLine2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine2)), __LINE__);
        }
        $this->AddressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Get AddressLine3 value
     * @return string|null
     */
    public function getAddressLine3()
    {
        return $this->AddressLine3;
    }
    /**
     * Set AddressLine3 value
     * @param string $addressLine3
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setAddressLine3($addressLine3 = null)
    {
        // validation for constraint: string
        if (!is_null($addressLine3) && !is_string($addressLine3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLine3)), __LINE__);
        }
        $this->AddressLine3 = $addressLine3;
        return $this;
    }
    /**
     * Get CityName value
     * @return \Sabre\UpdateReservation\StructType\CityCodeType|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param \Sabre\UpdateReservation\StructType\CityCodeType $cityName
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setCityName(\Sabre\UpdateReservation\StructType\CityCodeType $cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get StateProv value
     * @return \Sabre\UpdateReservation\StructType\StateProv|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param \Sabre\UpdateReservation\StructType\StateProv $stateProv
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setStateProv(\Sabre\UpdateReservation\StructType\StateProv $stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get CountryName value
     * @return \Sabre\UpdateReservation\StructType\CountryName|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param \Sabre\UpdateReservation\StructType\CountryName $countryName
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public function setCountryName(\Sabre\UpdateReservation\StructType\CountryName $countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType
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
