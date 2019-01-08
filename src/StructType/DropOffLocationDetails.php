<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DropOffLocationDetails StructType
 * @subpackage Structs
 */
class DropOffLocationDetails extends AbstractStructBase
{
    /**
     * The locationCode
     * Meta informations extracted from the WSDL
     * - documentation: "LocationCode" is used to return the vehicle drop off rental location code.
     * - use: optional
     * @var string
     */
    public $locationCode;
    /**
     * Constructor method for DropOffLocationDetails
     * @uses DropOffLocationDetails::setLocationCode()
     * @param string $locationCode
     */
    public function __construct($locationCode = null)
    {
        $this
            ->setLocationCode($locationCode);
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
     * @return \Sabre\UpdateReservation\StructType\DropOffLocationDetails
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DropOffLocationDetails
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
