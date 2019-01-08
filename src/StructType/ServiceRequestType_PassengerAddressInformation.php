<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRequestType.PassengerAddressInformation StructType
 * @subpackage Structs
 */
class ServiceRequestType_PassengerAddressInformation extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Street;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The StateOrProvince
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvince;
    /**
     * The Infant
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Infant;
    /**
     * The ZipCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ZipCode;
    /**
     * Constructor method for ServiceRequestType.PassengerAddressInformation
     * @uses ServiceRequestType_PassengerAddressInformation::setType()
     * @uses ServiceRequestType_PassengerAddressInformation::setCountry()
     * @uses ServiceRequestType_PassengerAddressInformation::setStreet()
     * @uses ServiceRequestType_PassengerAddressInformation::setCity()
     * @uses ServiceRequestType_PassengerAddressInformation::setStateOrProvince()
     * @uses ServiceRequestType_PassengerAddressInformation::setInfant()
     * @uses ServiceRequestType_PassengerAddressInformation::setZipCode()
     * @param string $type
     * @param string $country
     * @param string $street
     * @param string $city
     * @param string $stateOrProvince
     * @param bool $infant
     * @param string $zipCode
     */
    public function __construct($type = null, $country = null, $street = null, $city = null, $stateOrProvince = null, $infant = null, $zipCode = null)
    {
        $this
            ->setType($type)
            ->setCountry($country)
            ->setStreet($street)
            ->setCity($city)
            ->setStateOrProvince($stateOrProvince)
            ->setInfant($infant)
            ->setZipCode($zipCode);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get StateOrProvince value
     * @return string|null
     */
    public function getStateOrProvince()
    {
        return $this->StateOrProvince;
    }
    /**
     * Set StateOrProvince value
     * @param string $stateOrProvince
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setStateOrProvince($stateOrProvince = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvince) && !is_string($stateOrProvince)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateOrProvince)), __LINE__);
        }
        $this->StateOrProvince = $stateOrProvince;
        return $this;
    }
    /**
     * Get Infant value
     * @return bool|null
     */
    public function getInfant()
    {
        return $this->Infant;
    }
    /**
     * Set Infant value
     * @param bool $infant
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setInfant($infant = null)
    {
        // validation for constraint: boolean
        if (!is_null($infant) && !is_bool($infant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($infant)), __LINE__);
        }
        $this->Infant = $infant;
        return $this;
    }
    /**
     * Get ZipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }
    /**
     * Set ZipCode value
     * @param string $zipCode
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zipCode)), __LINE__);
        }
        $this->ZipCode = $zipCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_PassengerAddressInformation
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
