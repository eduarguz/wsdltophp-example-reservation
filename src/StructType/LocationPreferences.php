<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationPreferences StructType
 * @subpackage Structs
 */
class LocationPreferences extends AbstractStructBase
{
    /**
     * The locationCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $locationCode;
    /**
     * The cityLocation
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $cityLocation;
    /**
     * Constructor method for LocationPreferences
     * @uses LocationPreferences::setLocationCode()
     * @uses LocationPreferences::setCityLocation()
     * @param string $locationCode
     * @param string $cityLocation
     */
    public function __construct($locationCode = null, $cityLocation = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setCityLocation($cityLocation);
    }
    /**
     * Get locationCode value
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }
    /**
     * Set locationCode value
     * @param string $locationCode
     * @return \Sabre\UpdateReservation\StructType\LocationPreferences
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->locationCode = $locationCode;
        return $this;
    }
    /**
     * Get cityLocation value
     * @return string|null
     */
    public function getCityLocation()
    {
        return $this->cityLocation;
    }
    /**
     * Set cityLocation value
     * @param string $cityLocation
     * @return \Sabre\UpdateReservation\StructType\LocationPreferences
     */
    public function setCityLocation($cityLocation = null)
    {
        // validation for constraint: string
        if (!is_null($cityLocation) && !is_string($cityLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityLocation)), __LINE__);
        }
        $this->cityLocation = $cityLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LocationPreferences
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
