<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GoverningCarrierOverrideType StructType
 * @subpackage Structs
 */
class GoverningCarrierOverrideType extends AbstractStructBase
{
    /**
     * The airlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Airline Carrier Code - override the GOVERNING CARRIER to get the fare filed by that carrier.
     * - use: required
     * - pattern: [0-9A-Z]{2,3}
     * @var string
     */
    public $airlineCode;
    /**
     * Constructor method for GoverningCarrierOverrideType
     * @uses GoverningCarrierOverrideType::setAirlineCode()
     * @param string $airlineCode
     */
    public function __construct($airlineCode = null)
    {
        $this
            ->setAirlineCode($airlineCode);
    }
    /**
     * Get airlineCode value
     * @return string
     */
    public function getAirlineCode()
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airlineCode) && !preg_match('/[0-9A-Z]{2,3}/', $airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{2,3}", "%s" given', var_export($airlineCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType
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
