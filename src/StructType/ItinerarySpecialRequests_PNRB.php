<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItinerarySpecialRequests.PNRB StructType
 * @subpackage Structs
 */
class ItinerarySpecialRequests_PNRB extends AbstractStructBase
{
    /**
     * The GenericSpecialRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[]
     */
    public $GenericSpecialRequest;
    /**
     * The OTHSFOPMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB[]
     */
    public $OTHSFOPMessage;
    /**
     * The SeatRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[]
     */
    public $SeatRequest;
    /**
     * The WheelchairRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB[]
     */
    public $WheelchairRequest;
    /**
     * Constructor method for ItinerarySpecialRequests.PNRB
     * @uses ItinerarySpecialRequests_PNRB::setGenericSpecialRequest()
     * @uses ItinerarySpecialRequests_PNRB::setOTHSFOPMessage()
     * @uses ItinerarySpecialRequests_PNRB::setSeatRequest()
     * @uses ItinerarySpecialRequests_PNRB::setWheelchairRequest()
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[] $genericSpecialRequest
     * @param \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB[] $oTHSFOPMessage
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[] $seatRequest
     * @param \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB[] $wheelchairRequest
     */
    public function __construct(array $genericSpecialRequest = array(), array $oTHSFOPMessage = array(), array $seatRequest = array(), array $wheelchairRequest = array())
    {
        $this
            ->setGenericSpecialRequest($genericSpecialRequest)
            ->setOTHSFOPMessage($oTHSFOPMessage)
            ->setSeatRequest($seatRequest)
            ->setWheelchairRequest($wheelchairRequest);
    }
    /**
     * Get GenericSpecialRequest value
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[]|null
     */
    public function getGenericSpecialRequest()
    {
        return $this->GenericSpecialRequest;
    }
    /**
     * Set GenericSpecialRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[] $genericSpecialRequest
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function setGenericSpecialRequest(array $genericSpecialRequest = array())
    {
        foreach ($genericSpecialRequest as $itinerarySpecialRequests_PNRBGenericSpecialRequestItem) {
            // validation for constraint: itemType
            if (!$itinerarySpecialRequests_PNRBGenericSpecialRequestItem instanceof \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The GenericSpecialRequest property can only contain items of \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB, "%s" given', is_object($itinerarySpecialRequests_PNRBGenericSpecialRequestItem) ? get_class($itinerarySpecialRequests_PNRBGenericSpecialRequestItem) : gettype($itinerarySpecialRequests_PNRBGenericSpecialRequestItem)), __LINE__);
            }
        }
        $this->GenericSpecialRequest = $genericSpecialRequest;
        return $this;
    }
    /**
     * Add item to GenericSpecialRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function addToGenericSpecialRequest(\Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The GenericSpecialRequest property can only contain items of \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GenericSpecialRequest[] = $item;
        return $this;
    }
    /**
     * Get OTHSFOPMessage value
     * @return \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB[]|null
     */
    public function getOTHSFOPMessage()
    {
        return $this->OTHSFOPMessage;
    }
    /**
     * Set OTHSFOPMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB[] $oTHSFOPMessage
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function setOTHSFOPMessage(array $oTHSFOPMessage = array())
    {
        foreach ($oTHSFOPMessage as $itinerarySpecialRequests_PNRBOTHSFOPMessageItem) {
            // validation for constraint: itemType
            if (!$itinerarySpecialRequests_PNRBOTHSFOPMessageItem instanceof \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB) {
                throw new \InvalidArgumentException(sprintf('The OTHSFOPMessage property can only contain items of \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB, "%s" given', is_object($itinerarySpecialRequests_PNRBOTHSFOPMessageItem) ? get_class($itinerarySpecialRequests_PNRBOTHSFOPMessageItem) : gettype($itinerarySpecialRequests_PNRBOTHSFOPMessageItem)), __LINE__);
            }
        }
        $this->OTHSFOPMessage = $oTHSFOPMessage;
        return $this;
    }
    /**
     * Add item to OTHSFOPMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function addToOTHSFOPMessage(\Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB) {
            throw new \InvalidArgumentException(sprintf('The OTHSFOPMessage property can only contain items of \Sabre\UpdateReservation\StructType\OTHSFOPMessage_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OTHSFOPMessage[] = $item;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function setSeatRequest(array $seatRequest = array())
    {
        foreach ($seatRequest as $itinerarySpecialRequests_PNRBSeatRequestItem) {
            // validation for constraint: itemType
            if (!$itinerarySpecialRequests_PNRBSeatRequestItem instanceof \Sabre\UpdateReservation\StructType\SeatRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \Sabre\UpdateReservation\StructType\SeatRequest_PNRB, "%s" given', is_object($itinerarySpecialRequests_PNRBSeatRequestItem) ? get_class($itinerarySpecialRequests_PNRBSeatRequestItem) : gettype($itinerarySpecialRequests_PNRBSeatRequestItem)), __LINE__);
            }
        }
        $this->SeatRequest = $seatRequest;
        return $this;
    }
    /**
     * Add item to SeatRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
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
     * Get WheelchairRequest value
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB[]|null
     */
    public function getWheelchairRequest()
    {
        return $this->WheelchairRequest;
    }
    /**
     * Set WheelchairRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB[] $wheelchairRequest
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function setWheelchairRequest(array $wheelchairRequest = array())
    {
        foreach ($wheelchairRequest as $itinerarySpecialRequests_PNRBWheelchairRequestItem) {
            // validation for constraint: itemType
            if (!$itinerarySpecialRequests_PNRBWheelchairRequestItem instanceof \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The WheelchairRequest property can only contain items of \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB, "%s" given', is_object($itinerarySpecialRequests_PNRBWheelchairRequestItem) ? get_class($itinerarySpecialRequests_PNRBWheelchairRequestItem) : gettype($itinerarySpecialRequests_PNRBWheelchairRequestItem)), __LINE__);
            }
        }
        $this->WheelchairRequest = $wheelchairRequest;
        return $this;
    }
    /**
     * Add item to WheelchairRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public function addToWheelchairRequest(\Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The WheelchairRequest property can only contain items of \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WheelchairRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
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
