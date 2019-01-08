<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerReferences StructType
 * @subpackage Structs
 */
class PassengerReferences extends AbstractStructBase
{
    /**
     * The PassengerRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\PassengerRef[]
     */
    public $PassengerRef;
    /**
     * Constructor method for PassengerReferences
     * @uses PassengerReferences::setPassengerRef()
     * @param \Sabre\UpdateReservation\StructType\PassengerRef[] $passengerRef
     */
    public function __construct(array $passengerRef = array())
    {
        $this
            ->setPassengerRef($passengerRef);
    }
    /**
     * Get PassengerRef value
     * @return \Sabre\UpdateReservation\StructType\PassengerRef[]|null
     */
    public function getPassengerRef()
    {
        return $this->PassengerRef;
    }
    /**
     * Set PassengerRef value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerRef[] $passengerRef
     * @return \Sabre\UpdateReservation\StructType\PassengerReferences
     */
    public function setPassengerRef(array $passengerRef = array())
    {
        foreach ($passengerRef as $passengerReferencesPassengerRefItem) {
            // validation for constraint: itemType
            if (!$passengerReferencesPassengerRefItem instanceof \Sabre\UpdateReservation\StructType\PassengerRef) {
                throw new \InvalidArgumentException(sprintf('The PassengerRef property can only contain items of \Sabre\UpdateReservation\StructType\PassengerRef, "%s" given', is_object($passengerReferencesPassengerRefItem) ? get_class($passengerReferencesPassengerRefItem) : gettype($passengerReferencesPassengerRefItem)), __LINE__);
            }
        }
        $this->PassengerRef = $passengerRef;
        return $this;
    }
    /**
     * Add item to PassengerRef value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerRef $item
     * @return \Sabre\UpdateReservation\StructType\PassengerReferences
     */
    public function addToPassengerRef(\Sabre\UpdateReservation\StructType\PassengerRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassengerRef) {
            throw new \InvalidArgumentException(sprintf('The PassengerRef property can only contain items of \Sabre\UpdateReservation\StructType\PassengerRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerRef[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerReferences
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
