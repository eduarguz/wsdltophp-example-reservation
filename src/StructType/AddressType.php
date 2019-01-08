<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType StructType
 * @subpackage Structs
 */
class AddressType extends AbstractStructBase
{
    /**
     * The LocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationType;
    /**
     * The AddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var string[]
     */
    public $AddressLine;
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityName;
    /**
     * The CityCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CityCodes
     */
    public $CityCodes;
    /**
     * The LocalCityName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocalCityName;
    /**
     * The StateProvince
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CodeDescriptionType
     */
    public $StateProvince;
    /**
     * The StateProvinceCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StateProvinceCodes
     */
    public $StateProvinceCodes;
    /**
     * The PostCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostCode;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CodeDescriptionType
     */
    public $Country;
    /**
     * The CountryCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CountryCodes
     */
    public $CountryCodes;
    /**
     * The Latitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Longitude;
    /**
     * The Altitude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Altitude;
    /**
     * Constructor method for AddressType
     * @uses AddressType::setLocationType()
     * @uses AddressType::setAddressLine()
     * @uses AddressType::setCityName()
     * @uses AddressType::setCityCodes()
     * @uses AddressType::setLocalCityName()
     * @uses AddressType::setStateProvince()
     * @uses AddressType::setStateProvinceCodes()
     * @uses AddressType::setPostCode()
     * @uses AddressType::setCountry()
     * @uses AddressType::setCountryCodes()
     * @uses AddressType::setLatitude()
     * @uses AddressType::setLongitude()
     * @uses AddressType::setAltitude()
     * @param string $locationType
     * @param string[] $addressLine
     * @param string $cityName
     * @param \Sabre\UpdateReservation\StructType\CityCodes $cityCodes
     * @param string $localCityName
     * @param \Sabre\UpdateReservation\StructType\CodeDescriptionType $stateProvince
     * @param \Sabre\UpdateReservation\StructType\StateProvinceCodes $stateProvinceCodes
     * @param string $postCode
     * @param \Sabre\UpdateReservation\StructType\CodeDescriptionType $country
     * @param \Sabre\UpdateReservation\StructType\CountryCodes $countryCodes
     * @param string $latitude
     * @param string $longitude
     * @param string $altitude
     */
    public function __construct($locationType = null, array $addressLine = array(), $cityName = null, \Sabre\UpdateReservation\StructType\CityCodes $cityCodes = null, $localCityName = null, \Sabre\UpdateReservation\StructType\CodeDescriptionType $stateProvince = null, \Sabre\UpdateReservation\StructType\StateProvinceCodes $stateProvinceCodes = null, $postCode = null, \Sabre\UpdateReservation\StructType\CodeDescriptionType $country = null, \Sabre\UpdateReservation\StructType\CountryCodes $countryCodes = null, $latitude = null, $longitude = null, $altitude = null)
    {
        $this
            ->setLocationType($locationType)
            ->setAddressLine($addressLine)
            ->setCityName($cityName)
            ->setCityCodes($cityCodes)
            ->setLocalCityName($localCityName)
            ->setStateProvince($stateProvince)
            ->setStateProvinceCodes($stateProvinceCodes)
            ->setPostCode($postCode)
            ->setCountry($country)
            ->setCountryCodes($countryCodes)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setAltitude($altitude);
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @param string $locationType
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: string
        if (!is_null($locationType) && !is_string($locationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationType)), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
    }
    /**
     * Get AddressLine value
     * @return string[]|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @throws \InvalidArgumentException
     * @param string[] $addressLine
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setAddressLine(array $addressLine = array())
    {
        foreach ($addressLine as $addressTypeAddressLineItem) {
            // validation for constraint: itemType
            if (!is_string($addressTypeAddressLineItem)) {
                throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of string, "%s" given', is_object($addressTypeAddressLineItem) ? get_class($addressTypeAddressLineItem) : gettype($addressTypeAddressLineItem)), __LINE__);
            }
        }
        $this->AddressLine = $addressLine;
        return $this;
    }
    /**
     * Add item to AddressLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function addToAddressLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressLine[] = $item;
        return $this;
    }
    /**
     * Get CityName value
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param string $cityName
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (!is_null($cityName) && !is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get CityCodes value
     * @return \Sabre\UpdateReservation\StructType\CityCodes|null
     */
    public function getCityCodes()
    {
        return $this->CityCodes;
    }
    /**
     * Set CityCodes value
     * @param \Sabre\UpdateReservation\StructType\CityCodes $cityCodes
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setCityCodes(\Sabre\UpdateReservation\StructType\CityCodes $cityCodes = null)
    {
        $this->CityCodes = $cityCodes;
        return $this;
    }
    /**
     * Get LocalCityName value
     * @return string|null
     */
    public function getLocalCityName()
    {
        return $this->LocalCityName;
    }
    /**
     * Set LocalCityName value
     * @param string $localCityName
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setLocalCityName($localCityName = null)
    {
        // validation for constraint: string
        if (!is_null($localCityName) && !is_string($localCityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localCityName)), __LINE__);
        }
        $this->LocalCityName = $localCityName;
        return $this;
    }
    /**
     * Get StateProvince value
     * @return \Sabre\UpdateReservation\StructType\CodeDescriptionType|null
     */
    public function getStateProvince()
    {
        return $this->StateProvince;
    }
    /**
     * Set StateProvince value
     * @param \Sabre\UpdateReservation\StructType\CodeDescriptionType $stateProvince
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setStateProvince(\Sabre\UpdateReservation\StructType\CodeDescriptionType $stateProvince = null)
    {
        $this->StateProvince = $stateProvince;
        return $this;
    }
    /**
     * Get StateProvinceCodes value
     * @return \Sabre\UpdateReservation\StructType\StateProvinceCodes|null
     */
    public function getStateProvinceCodes()
    {
        return $this->StateProvinceCodes;
    }
    /**
     * Set StateProvinceCodes value
     * @param \Sabre\UpdateReservation\StructType\StateProvinceCodes $stateProvinceCodes
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setStateProvinceCodes(\Sabre\UpdateReservation\StructType\StateProvinceCodes $stateProvinceCodes = null)
    {
        $this->StateProvinceCodes = $stateProvinceCodes;
        return $this;
    }
    /**
     * Get PostCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->PostCode;
    }
    /**
     * Set PostCode value
     * @param string $postCode
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        $this->PostCode = $postCode;
        return $this;
    }
    /**
     * Get Country value
     * @return \Sabre\UpdateReservation\StructType\CodeDescriptionType|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param \Sabre\UpdateReservation\StructType\CodeDescriptionType $country
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setCountry(\Sabre\UpdateReservation\StructType\CodeDescriptionType $country = null)
    {
        $this->Country = $country;
        return $this;
    }
    /**
     * Get CountryCodes value
     * @return \Sabre\UpdateReservation\StructType\CountryCodes|null
     */
    public function getCountryCodes()
    {
        return $this->CountryCodes;
    }
    /**
     * Set CountryCodes value
     * @param \Sabre\UpdateReservation\StructType\CountryCodes $countryCodes
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setCountryCodes(\Sabre\UpdateReservation\StructType\CountryCodes $countryCodes = null)
    {
        $this->CountryCodes = $countryCodes;
        return $this;
    }
    /**
     * Get Latitude value
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param string $latitude
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param string $longitude
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Get Altitude value
     * @return string|null
     */
    public function getAltitude()
    {
        return $this->Altitude;
    }
    /**
     * Set Altitude value
     * @param string $altitude
     * @return \Sabre\UpdateReservation\StructType\AddressType
     */
    public function setAltitude($altitude = null)
    {
        // validation for constraint: string
        if (!is_null($altitude) && !is_string($altitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($altitude)), __LINE__);
        }
        $this->Altitude = $altitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AddressType
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
