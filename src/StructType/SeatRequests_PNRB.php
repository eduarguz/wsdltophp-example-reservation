<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatRequests.PNRB StructType
 * @subpackage Structs
 */
class SeatRequests_PNRB extends AbstractStructBase
{
    /**
     * The SeatRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[]
     */
    public $SeatRequest;
    /**
     * Constructor method for SeatRequests.PNRB
     * @uses SeatRequests_PNRB::setSeatRequest()
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[] $seatRequest
     */
    public function __construct(array $seatRequest = array())
    {
        $this
            ->setSeatRequest($seatRequest);
    }
    /**
     * Get SeatRequest value
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[]|null
     */
    public function getSeatRequest()
    {
        return $this->SeatRequest;
    }
    /**
     * Set SeatRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[] $seatRequest
     * @return \Sabre\UpdateReservation\StructType\SeatRequests_PNRB
     */
    public function setSeatRequest(array $seatRequest = array())
    {
        foreach ($seatRequest as $seatRequests_PNRBSeatRequestItem) {
            // validation for constraint: itemType
            if (!$seatRequests_PNRBSeatRequestItem instanceof \Sabre\UpdateReservation\StructType\SeatRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \Sabre\UpdateReservation\StructType\SeatRequest_PNRB, "%s" given', is_object($seatRequests_PNRBSeatRequestItem) ? get_class($seatRequests_PNRBSeatRequestItem) : gettype($seatRequests_PNRBSeatRequestItem)), __LINE__);
            }
        }
        $this->SeatRequest = $seatRequest;
        return $this;
    }
    /**
     * Add item to SeatRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\SeatRequests_PNRB
     */
    public function addToSeatRequest(\Sabre\UpdateReservation\StructType\SeatRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SeatRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \Sabre\UpdateReservation\StructType\SeatRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SeatRequests_PNRB
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
