<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dates StructType
 * @subpackage Structs
 */
class Dates extends AbstractStructBase
{
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - documentation: "DepartureDateTime" is used to return date and time for departure from first city of Fare component.
     * - use: optional
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - documentation: "ArrivalDateTime" is used to return date and time for arrival to last city of Fare component.
     * - use: optional
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * Constructor method for Dates
     * @uses Dates::setDepartureDateTime()
     * @uses Dates::setArrivalDateTime()
     * @param string $departureDateTime
     * @param string $arrivalDateTime
     */
    public function __construct($departureDateTime = null, $arrivalDateTime = null)
    {
        $this
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime);
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Sabre\UpdateReservation\StructType\Dates
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Sabre\UpdateReservation\StructType\Dates
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Dates
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
