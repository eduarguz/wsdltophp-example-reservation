<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationDetails StructType
 * @subpackage Structs
 */
class LocationDetails extends AbstractStructBase
{
    /**
     * The ContactNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneType
     */
    public $ContactNumber;
    /**
     * The extendedLocationCode
     * Meta informations extracted from the WSDL
     * - documentation: "extendedLocationCode" is used to return the extended vehicle pick up rental location code.
     * - use: optional
     * @var string
     */
    public $extendedLocationCode;
    /**
     * The locationCode
     * Meta informations extracted from the WSDL
     * - documentation: "locationCode" is used to return the vehicle pick up rental location code.
     * - use: optional
     * @var string
     */
    public $locationCode;
    /**
     * The locationName
     * Meta informations extracted from the WSDL
     * - documentation: "locationName" is used to return the vehicle pick up rental location name.
     * - use: optional
     * @var string
     */
    public $locationName;
    /**
     * Constructor method for LocationDetails
     * @uses LocationDetails::setContactNumber()
     * @uses LocationDetails::setExtendedLocationCode()
     * @uses LocationDetails::setLocationCode()
     * @uses LocationDetails::setLocationName()
     * @param \Sabre\UpdateReservation\StructType\PhoneType $contactNumber
     * @param string $extendedLocationCode
     * @param string $locationCode
     * @param string $locationName
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PhoneType $contactNumber = null, $extendedLocationCode = null, $locationCode = null, $locationName = null)
    {
        $this
            ->setContactNumber($contactNumber)
            ->setExtendedLocationCode($extendedLocationCode)
            ->setLocationCode($locationCode)
            ->setLocationName($locationName);
    }
    /**
     * Get ContactNumber value
     * @return \Sabre\UpdateReservation\StructType\PhoneType|null
     */
    public function getContactNumber()
    {
        return $this->ContactNumber;
    }
    /**
     * Set ContactNumber value
     * @param \Sabre\UpdateReservation\StructType\PhoneType $contactNumber
     * @return \Sabre\UpdateReservation\StructType\LocationDetails
     */
    public function setContactNumber(\Sabre\UpdateReservation\StructType\PhoneType $contactNumber = null)
    {
        $this->ContactNumber = $contactNumber;
        return $this;
    }
    /**
     * Get extendedLocationCode value
     * @return string|null
     */
    public function getExtendedLocationCode()
    {
        return $this->extendedLocationCode;
    }
    /**
     * Set extendedLocationCode value
     * @param string $extendedLocationCode
     * @return \Sabre\UpdateReservation\StructType\LocationDetails
     */
    public function setExtendedLocationCode($extendedLocationCode = null)
    {
        // validation for constraint: string
        if (!is_null($extendedLocationCode) && !is_string($extendedLocationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedLocationCode)), __LINE__);
        }
        $this->extendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Get locationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }
    /**
     * Set locationCode value
     * @param string $locationCode
     * @return \Sabre\UpdateReservation\StructType\LocationDetails
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
     * Get locationName value
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->locationName;
    }
    /**
     * Set locationName value
     * @param string $locationName
     * @return \Sabre\UpdateReservation\StructType\LocationDetails
     */
    public function setLocationName($locationName = null)
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationName)), __LINE__);
        }
        $this->locationName = $locationName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LocationDetails
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
