<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomExtras StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of Room Extras
 * @subpackage Structs
 */
class RoomExtras extends AbstractStructBase
{
    /**
     * The RoomExtra
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * @var \Sabre\UpdateReservation\StructType\RoomExtra[]
     */
    public $RoomExtra;
    /**
     * Constructor method for RoomExtras
     * @uses RoomExtras::setRoomExtra()
     * @param \Sabre\UpdateReservation\StructType\RoomExtra[] $roomExtra
     */
    public function __construct(array $roomExtra = array())
    {
        $this
            ->setRoomExtra($roomExtra);
    }
    /**
     * Get RoomExtra value
     * @return \Sabre\UpdateReservation\StructType\RoomExtra[]|null
     */
    public function getRoomExtra()
    {
        return $this->RoomExtra;
    }
    /**
     * Set RoomExtra value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RoomExtra[] $roomExtra
     * @return \Sabre\UpdateReservation\StructType\RoomExtras
     */
    public function setRoomExtra(array $roomExtra = array())
    {
        foreach ($roomExtra as $roomExtrasRoomExtraItem) {
            // validation for constraint: itemType
            if (!$roomExtrasRoomExtraItem instanceof \Sabre\UpdateReservation\StructType\RoomExtra) {
                throw new \InvalidArgumentException(sprintf('The RoomExtra property can only contain items of \Sabre\UpdateReservation\StructType\RoomExtra, "%s" given', is_object($roomExtrasRoomExtraItem) ? get_class($roomExtrasRoomExtraItem) : gettype($roomExtrasRoomExtraItem)), __LINE__);
            }
        }
        $this->RoomExtra = $roomExtra;
        return $this;
    }
    /**
     * Add item to RoomExtra value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RoomExtra $item
     * @return \Sabre\UpdateReservation\StructType\RoomExtras
     */
    public function addToRoomExtra(\Sabre\UpdateReservation\StructType\RoomExtra $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RoomExtra) {
            throw new \InvalidArgumentException(sprintf('The RoomExtra property can only contain items of \Sabre\UpdateReservation\StructType\RoomExtra, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomExtra[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RoomExtras
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
