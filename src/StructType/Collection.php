<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Collection StructType
 * Meta informations extracted from the WSDL
 * - documentation: Is car to be collected at end of rental.
 * @subpackage Structs
 */
class Collection extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: name of person to collect the car from
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - documentation: collection city
     * - minOccurs: 0
     * @var string
     */
    public $City;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - documentation: collection country
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - documentation: collection state
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The ZipCode
     * Meta informations extracted from the WSDL
     * - documentation: collection zip code
     * - minOccurs: 0
     * @var string
     */
    public $ZipCode;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - documentation: collection phone number
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: collection address
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * Constructor method for Collection
     * @uses Collection::setName()
     * @uses Collection::setCity()
     * @uses Collection::setCountry()
     * @uses Collection::setState()
     * @uses Collection::setZipCode()
     * @uses Collection::setPhone()
     * @uses Collection::setAddress()
     * @param string $name
     * @param string $city
     * @param string $country
     * @param string $state
     * @param string $zipCode
     * @param string $phone
     * @param string $address
     */
    public function __construct($name = null, $city = null, $country = null, $state = null, $zipCode = null, $phone = null, $address = null)
    {
        $this
            ->setName($name)
            ->setCity($city)
            ->setCountry($country)
            ->setState($state)
            ->setZipCode($zipCode)
            ->setPhone($phone)
            ->setAddress($address);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Collection
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \Sabre\UpdateReservation\StructType\Collection
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
     * @return \Sabre\UpdateReservation\StructType\Collection
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
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \Sabre\UpdateReservation\StructType\Collection
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->State = $state;
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
     * @return \Sabre\UpdateReservation\StructType\Collection
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
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Sabre\UpdateReservation\StructType\Collection
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Sabre\UpdateReservation\StructType\Collection
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Collection
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
