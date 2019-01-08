<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerQuantity StructType
 * @subpackage Structs
 */
class PassengerQuantity extends AbstractStructBase
{
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerTypeQuantity[]
     */
    public $PassengerTypeQuantity;
    /**
     * Constructor method for PassengerQuantity
     * @uses PassengerQuantity::setPassengerTypeQuantity()
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantity[] $passengerTypeQuantity
     */
    public function __construct(array $passengerTypeQuantity = array())
    {
        $this
            ->setPassengerTypeQuantity($passengerTypeQuantity);
    }
    /**
     * Get PassengerTypeQuantity value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantity[]|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantity[] $passengerTypeQuantity
     * @return \Sabre\UpdateReservation\StructType\PassengerQuantity
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity = array())
    {
        foreach ($passengerTypeQuantity as $passengerQuantityPassengerTypeQuantityItem) {
            // validation for constraint: itemType
            if (!$passengerQuantityPassengerTypeQuantityItem instanceof \Sabre\UpdateReservation\StructType\PassengerTypeQuantity) {
                throw new \InvalidArgumentException(sprintf('The PassengerTypeQuantity property can only contain items of \Sabre\UpdateReservation\StructType\PassengerTypeQuantity, "%s" given', is_object($passengerQuantityPassengerTypeQuantityItem) ? get_class($passengerQuantityPassengerTypeQuantityItem) : gettype($passengerQuantityPassengerTypeQuantityItem)), __LINE__);
            }
        }
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Add item to PassengerTypeQuantity value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantity $item
     * @return \Sabre\UpdateReservation\StructType\PassengerQuantity
     */
    public function addToPassengerTypeQuantity(\Sabre\UpdateReservation\StructType\PassengerTypeQuantity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassengerTypeQuantity) {
            throw new \InvalidArgumentException(sprintf('The PassengerTypeQuantity property can only contain items of \Sabre\UpdateReservation\StructType\PassengerTypeQuantity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerTypeQuantity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerQuantity
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
