<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rooms StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of Extended Rooms. Used in response
 * @subpackage Structs
 */
class Rooms extends AbstractStructBase
{
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\RoomInformation[]
     */
    public $Room;
    /**
     * The NumberOfRooms
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberOfRooms;
    /**
     * The GuestCount
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $GuestCount;
    /**
     * Constructor method for Rooms
     * @uses Rooms::setRoom()
     * @uses Rooms::setNumberOfRooms()
     * @uses Rooms::setGuestCount()
     * @param \Sabre\UpdateReservation\StructType\RoomInformation[] $room
     * @param int $numberOfRooms
     * @param int $guestCount
     */
    public function __construct(array $room = array(), $numberOfRooms = null, $guestCount = null)
    {
        $this
            ->setRoom($room)
            ->setNumberOfRooms($numberOfRooms)
            ->setGuestCount($guestCount);
    }
    /**
     * Get Room value
     * @return \Sabre\UpdateReservation\StructType\RoomInformation[]|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RoomInformation[] $room
     * @return \Sabre\UpdateReservation\StructType\Rooms
     */
    public function setRoom(array $room = array())
    {
        foreach ($room as $roomsRoomItem) {
            // validation for constraint: itemType
            if (!$roomsRoomItem instanceof \Sabre\UpdateReservation\StructType\RoomInformation) {
                throw new \InvalidArgumentException(sprintf('The Room property can only contain items of \Sabre\UpdateReservation\StructType\RoomInformation, "%s" given', is_object($roomsRoomItem) ? get_class($roomsRoomItem) : gettype($roomsRoomItem)), __LINE__);
            }
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Add item to Room value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RoomInformation $item
     * @return \Sabre\UpdateReservation\StructType\Rooms
     */
    public function addToRoom(\Sabre\UpdateReservation\StructType\RoomInformation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RoomInformation) {
            throw new \InvalidArgumentException(sprintf('The Room property can only contain items of \Sabre\UpdateReservation\StructType\RoomInformation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Room[] = $item;
        return $this;
    }
    /**
     * Get NumberOfRooms value
     * @return int|null
     */
    public function getNumberOfRooms()
    {
        return $this->NumberOfRooms;
    }
    /**
     * Set NumberOfRooms value
     * @param int $numberOfRooms
     * @return \Sabre\UpdateReservation\StructType\Rooms
     */
    public function setNumberOfRooms($numberOfRooms = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfRooms) && !is_numeric($numberOfRooms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfRooms)), __LINE__);
        }
        $this->NumberOfRooms = $numberOfRooms;
        return $this;
    }
    /**
     * Get GuestCount value
     * @return int|null
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }
    /**
     * Set GuestCount value
     * @param int $guestCount
     * @return \Sabre\UpdateReservation\StructType\Rooms
     */
    public function setGuestCount($guestCount = null)
    {
        // validation for constraint: int
        if (!is_null($guestCount) && !is_numeric($guestCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($guestCount)), __LINE__);
        }
        $this->GuestCount = $guestCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Rooms
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
