<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailAccommodationType StructType
 * @subpackage Structs
 */
class RailAccommodationType extends AbstractStructBase
{
    /**
     * The PassengerRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerRef;
    /**
     * The Placement
     * @var \Sabre\UpdateReservation\StructType\Placement
     */
    public $Placement;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Meal;
    /**
     * Constructor method for RailAccommodationType
     * @uses RailAccommodationType::setPassengerRef()
     * @uses RailAccommodationType::setPlacement()
     * @uses RailAccommodationType::setMeal()
     * @param string $passengerRef
     * @param \Sabre\UpdateReservation\StructType\Placement $placement
     * @param string $meal
     */
    public function __construct($passengerRef = null, \Sabre\UpdateReservation\StructType\Placement $placement = null, $meal = null)
    {
        $this
            ->setPassengerRef($passengerRef)
            ->setPlacement($placement)
            ->setMeal($meal);
    }
    /**
     * Get PassengerRef value
     * @return string|null
     */
    public function getPassengerRef()
    {
        return $this->PassengerRef;
    }
    /**
     * Set PassengerRef value
     * @param string $passengerRef
     * @return \Sabre\UpdateReservation\StructType\RailAccommodationType
     */
    public function setPassengerRef($passengerRef = null)
    {
        // validation for constraint: string
        if (!is_null($passengerRef) && !is_string($passengerRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerRef)), __LINE__);
        }
        $this->PassengerRef = $passengerRef;
        return $this;
    }
    /**
     * Get Placement value
     * @return \Sabre\UpdateReservation\StructType\Placement|null
     */
    public function getPlacement()
    {
        return $this->Placement;
    }
    /**
     * Set Placement value
     * @param \Sabre\UpdateReservation\StructType\Placement $placement
     * @return \Sabre\UpdateReservation\StructType\RailAccommodationType
     */
    public function setPlacement(\Sabre\UpdateReservation\StructType\Placement $placement = null)
    {
        $this->Placement = $placement;
        return $this;
    }
    /**
     * Get Meal value
     * @return string|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @param string $meal
     * @return \Sabre\UpdateReservation\StructType\RailAccommodationType
     */
    public function setMeal($meal = null)
    {
        // validation for constraint: string
        if (!is_null($meal) && !is_string($meal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meal)), __LINE__);
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RailAccommodationType
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
