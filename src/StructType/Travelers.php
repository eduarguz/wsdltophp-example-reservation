<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Travelers StructType
 * @subpackage Structs
 */
class Travelers extends AbstractStructBase
{
    /**
     * The Traveler
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Traveler[]
     */
    public $Traveler;
    /**
     * Constructor method for Travelers
     * @uses Travelers::setTraveler()
     * @param \Sabre\UpdateReservation\StructType\Traveler[] $traveler
     */
    public function __construct(array $traveler = array())
    {
        $this
            ->setTraveler($traveler);
    }
    /**
     * Get Traveler value
     * @return \Sabre\UpdateReservation\StructType\Traveler[]|null
     */
    public function getTraveler()
    {
        return $this->Traveler;
    }
    /**
     * Set Traveler value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Traveler[] $traveler
     * @return \Sabre\UpdateReservation\StructType\Travelers
     */
    public function setTraveler(array $traveler = array())
    {
        foreach ($traveler as $travelersTravelerItem) {
            // validation for constraint: itemType
            if (!$travelersTravelerItem instanceof \Sabre\UpdateReservation\StructType\Traveler) {
                throw new \InvalidArgumentException(sprintf('The Traveler property can only contain items of \Sabre\UpdateReservation\StructType\Traveler, "%s" given', is_object($travelersTravelerItem) ? get_class($travelersTravelerItem) : gettype($travelersTravelerItem)), __LINE__);
            }
        }
        $this->Traveler = $traveler;
        return $this;
    }
    /**
     * Add item to Traveler value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Traveler $item
     * @return \Sabre\UpdateReservation\StructType\Travelers
     */
    public function addToTraveler(\Sabre\UpdateReservation\StructType\Traveler $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Traveler) {
            throw new \InvalidArgumentException(sprintf('The Traveler property can only contain items of \Sabre\UpdateReservation\StructType\Traveler, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Traveler[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Travelers
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
