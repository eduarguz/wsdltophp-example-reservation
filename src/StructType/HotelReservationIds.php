<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationIds StructType
 * @subpackage Structs
 */
class HotelReservationIds extends AbstractStructBase
{
    /**
     * The HotelReservation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\HotelReservation[]
     */
    public $HotelReservation;
    /**
     * Constructor method for HotelReservationIds
     * @uses HotelReservationIds::setHotelReservation()
     * @param \Sabre\UpdateReservation\StructType\HotelReservation[] $hotelReservation
     */
    public function __construct(array $hotelReservation = array())
    {
        $this
            ->setHotelReservation($hotelReservation);
    }
    /**
     * Get HotelReservation value
     * @return \Sabre\UpdateReservation\StructType\HotelReservation[]|null
     */
    public function getHotelReservation()
    {
        return $this->HotelReservation;
    }
    /**
     * Set HotelReservation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelReservation[] $hotelReservation
     * @return \Sabre\UpdateReservation\StructType\HotelReservationIds
     */
    public function setHotelReservation(array $hotelReservation = array())
    {
        foreach ($hotelReservation as $hotelReservationIdsHotelReservationItem) {
            // validation for constraint: itemType
            if (!$hotelReservationIdsHotelReservationItem instanceof \Sabre\UpdateReservation\StructType\HotelReservation) {
                throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of \Sabre\UpdateReservation\StructType\HotelReservation, "%s" given', is_object($hotelReservationIdsHotelReservationItem) ? get_class($hotelReservationIdsHotelReservationItem) : gettype($hotelReservationIdsHotelReservationItem)), __LINE__);
            }
        }
        $this->HotelReservation = $hotelReservation;
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelReservation $item
     * @return \Sabre\UpdateReservation\StructType\HotelReservationIds
     */
    public function addToHotelReservation(\Sabre\UpdateReservation\StructType\HotelReservation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HotelReservation) {
            throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of \Sabre\UpdateReservation\StructType\HotelReservation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelReservation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelReservationIds
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
