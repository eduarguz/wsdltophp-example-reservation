<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HiddenStop StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to return hidden stop details.
 * @subpackage Structs
 */
class HiddenStop extends AbstractStructBase
{
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Arrival date and time to hidden stop
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Departure date and time from hidden stop
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The Airport
     * Meta informations extracted from the WSDL
     * - documentation: "Airport" is used to determine airport location code | "Airport" is used to determine airport location code
     * @var string
     */
    public $Airport;
    /**
     * The EquipmentType
     * Meta informations extracted from the WSDL
     * - documentation: "EquipmentType" is used to return the aircraft equipment type associated with the particular flight segment. | "EquipmentType" is used to return the aircraft equipment type associated with the particular flight segment. Its not used
     * in booking process.
     * - use: optional
     * @var string
     */
    public $EquipmentType;
    /**
     * Constructor method for HiddenStop
     * @uses HiddenStop::setArrivalDateTime()
     * @uses HiddenStop::setDepartureDateTime()
     * @uses HiddenStop::setAirport()
     * @uses HiddenStop::setEquipmentType()
     * @param string $arrivalDateTime
     * @param string $departureDateTime
     * @param string $airport
     * @param string $equipmentType
     */
    public function __construct($arrivalDateTime = null, $departureDateTime = null, $airport = null, $equipmentType = null)
    {
        $this
            ->setArrivalDateTime($arrivalDateTime)
            ->setDepartureDateTime($departureDateTime)
            ->setAirport($airport)
            ->setEquipmentType($equipmentType);
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
     * @return \Sabre\UpdateReservation\StructType\HiddenStop
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
     * @return \Sabre\UpdateReservation\StructType\HiddenStop
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
     * Get Airport value
     * @return string|null
     */
    public function getAirport()
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @param string $airport
     * @return \Sabre\UpdateReservation\StructType\HiddenStop
     */
    public function setAirport($airport = null)
    {
        // validation for constraint: string
        if (!is_null($airport) && !is_string($airport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airport)), __LINE__);
        }
        $this->Airport = $airport;
        return $this;
    }
    /**
     * Get EquipmentType value
     * @return string|null
     */
    public function getEquipmentType()
    {
        return $this->EquipmentType;
    }
    /**
     * Set EquipmentType value
     * @param string $equipmentType
     * @return \Sabre\UpdateReservation\StructType\HiddenStop
     */
    public function setEquipmentType($equipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentType) && !is_string($equipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentType)), __LINE__);
        }
        $this->EquipmentType = $equipmentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HiddenStop
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
