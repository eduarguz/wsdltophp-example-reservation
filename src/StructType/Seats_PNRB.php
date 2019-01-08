<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Seats.PNRB StructType
 * @subpackage Structs
 */
class Seats_PNRB extends AbstractStructBase
{
    /**
     * The PreReservedSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB
     */
    public $PreReservedSeats;
    /**
     * The SeatSpecialRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SeatRequests_PNRB
     */
    public $SeatSpecialRequests;
    /**
     * Constructor method for Seats.PNRB
     * @uses Seats_PNRB::setPreReservedSeats()
     * @uses Seats_PNRB::setSeatSpecialRequests()
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @param \Sabre\UpdateReservation\StructType\SeatRequests_PNRB $seatSpecialRequests
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null, \Sabre\UpdateReservation\StructType\SeatRequests_PNRB $seatSpecialRequests = null)
    {
        $this
            ->setPreReservedSeats($preReservedSeats)
            ->setSeatSpecialRequests($seatSpecialRequests);
    }
    /**
     * Get PreReservedSeats value
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB|null
     */
    public function getPreReservedSeats()
    {
        return $this->PreReservedSeats;
    }
    /**
     * Set PreReservedSeats value
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @return \Sabre\UpdateReservation\StructType\Seats_PNRB
     */
    public function setPreReservedSeats(\Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null)
    {
        $this->PreReservedSeats = $preReservedSeats;
        return $this;
    }
    /**
     * Get SeatSpecialRequests value
     * @return \Sabre\UpdateReservation\StructType\SeatRequests_PNRB|null
     */
    public function getSeatSpecialRequests()
    {
        return $this->SeatSpecialRequests;
    }
    /**
     * Set SeatSpecialRequests value
     * @param \Sabre\UpdateReservation\StructType\SeatRequests_PNRB $seatSpecialRequests
     * @return \Sabre\UpdateReservation\StructType\Seats_PNRB
     */
    public function setSeatSpecialRequests(\Sabre\UpdateReservation\StructType\SeatRequests_PNRB $seatSpecialRequests = null)
    {
        $this->SeatSpecialRequests = $seatSpecialRequests;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Seats_PNRB
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
