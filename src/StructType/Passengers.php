<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passengers StructType
 * @subpackage Structs
 */
class Passengers extends AbstractStructBase
{
    /**
     * The Passenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerType[]
     */
    public $Passenger;
    /**
     * The quantity
     * @var string
     */
    public $quantity;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Name;
    /**
     * Constructor method for Passengers
     * @uses Passengers::setPassenger()
     * @uses Passengers::setQuantity()
     * @uses Passengers::setName()
     * @param \Sabre\UpdateReservation\StructType\PassengerType[] $passenger
     * @param string $quantity
     * @param string[] $name
     */
    public function __construct(array $passenger = array(), $quantity = null, array $name = array())
    {
        $this
            ->setPassenger($passenger)
            ->setQuantity($quantity)
            ->setName($name);
    }
    /**
     * Get Passenger value
     * @return \Sabre\UpdateReservation\StructType\PassengerType[]|null
     */
    public function getPassenger()
    {
        return $this->Passenger;
    }
    /**
     * Set Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerType[] $passenger
     * @return \Sabre\UpdateReservation\StructType\Passengers
     */
    public function setPassenger(array $passenger = array())
    {
        foreach ($passenger as $passengersPassengerItem) {
            // validation for constraint: itemType
            if (!$passengersPassengerItem instanceof \Sabre\UpdateReservation\StructType\PassengerType) {
                throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\PassengerType, "%s" given', is_object($passengersPassengerItem) ? get_class($passengersPassengerItem) : gettype($passengersPassengerItem)), __LINE__);
            }
        }
        $this->Passenger = $passenger;
        return $this;
    }
    /**
     * Add item to Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerType $item
     * @return \Sabre\UpdateReservation\StructType\Passengers
     */
    public function addToPassenger(\Sabre\UpdateReservation\StructType\PassengerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassengerType) {
            throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\PassengerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Passenger[] = $item;
        return $this;
    }
    /**
     * Get quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param string $quantity
     * @return \Sabre\UpdateReservation\StructType\Passengers
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get Name value
     * @return string[]|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @throws \InvalidArgumentException
     * @param string[] $name
     * @return \Sabre\UpdateReservation\StructType\Passengers
     */
    public function setName(array $name = array())
    {
        foreach ($name as $passengersNameItem) {
            // validation for constraint: itemType
            if (!is_string($passengersNameItem)) {
                throw new \InvalidArgumentException(sprintf('The Name property can only contain items of string, "%s" given', is_object($passengersNameItem) ? get_class($passengersNameItem) : gettype($passengersNameItem)), __LINE__);
            }
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Add item to Name value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Passengers
     */
    public function addToName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Name property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Name[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Passengers
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
