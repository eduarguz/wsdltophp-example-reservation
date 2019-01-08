<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameAssociatedSpecialRequests.PNRB StructType
 * @subpackage Structs
 */
class NameAssociatedSpecialRequests_PNRB extends AbstractStructBase
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
     * The ChildRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChildRequest_PNRB[]
     */
    public $ChildRequest;
    /**
     * The APISRequest
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of SSR that was sent. Ex."206"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\APISRequest_PNRB[]
     */
    public $APISRequest;
    /**
     * The EmergencyContactRequest
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of SSR/OSI e.g. APAY, BLND.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB[]
     */
    public $EmergencyContactRequest;
    /**
     * The SpecialMealRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB[]
     */
    public $SpecialMealRequest;
    /**
     * The PassportInfoMessage
     * Meta informations extracted from the WSDL
     * - documentation: name associated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB[]
     */
    public $PassportInfoMessage;
    /**
     * The SeatRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[]
     */
    public $SeatRequest;
    /**
     * The UnaccompaniedMinorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB[]
     */
    public $UnaccompaniedMinorMessage;
    /**
     * The WheelchairRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB[]
     */
    public $WheelchairRequest;
    /**
     * The TicketingRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingRequestType[]
     */
    public $TicketingRequest;
    /**
     * Constructor method for NameAssociatedSpecialRequests.PNRB
     * @uses NameAssociatedSpecialRequests_PNRB::setGenericSpecialRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setChildRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setAPISRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setEmergencyContactRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setSpecialMealRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setPassportInfoMessage()
     * @uses NameAssociatedSpecialRequests_PNRB::setSeatRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setUnaccompaniedMinorMessage()
     * @uses NameAssociatedSpecialRequests_PNRB::setWheelchairRequest()
     * @uses NameAssociatedSpecialRequests_PNRB::setTicketingRequest()
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[] $genericSpecialRequest
     * @param \Sabre\UpdateReservation\StructType\ChildRequest_PNRB[] $childRequest
     * @param \Sabre\UpdateReservation\StructType\APISRequest_PNRB[] $aPISRequest
     * @param \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB[] $emergencyContactRequest
     * @param \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB[] $specialMealRequest
     * @param \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB[] $passportInfoMessage
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB[] $seatRequest
     * @param \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB[] $unaccompaniedMinorMessage
     * @param \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB[] $wheelchairRequest
     * @param \Sabre\UpdateReservation\StructType\TicketingRequestType[] $ticketingRequest
     */
    public function __construct(array $genericSpecialRequest = array(), array $childRequest = array(), array $aPISRequest = array(), array $emergencyContactRequest = array(), array $specialMealRequest = array(), array $passportInfoMessage = array(), array $seatRequest = array(), array $unaccompaniedMinorMessage = array(), array $wheelchairRequest = array(), array $ticketingRequest = array())
    {
        $this
            ->setGenericSpecialRequest($genericSpecialRequest)
            ->setChildRequest($childRequest)
            ->setAPISRequest($aPISRequest)
            ->setEmergencyContactRequest($emergencyContactRequest)
            ->setSpecialMealRequest($specialMealRequest)
            ->setPassportInfoMessage($passportInfoMessage)
            ->setSeatRequest($seatRequest)
            ->setUnaccompaniedMinorMessage($unaccompaniedMinorMessage)
            ->setWheelchairRequest($wheelchairRequest)
            ->setTicketingRequest($ticketingRequest);
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
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setGenericSpecialRequest(array $genericSpecialRequest = array())
    {
        foreach ($genericSpecialRequest as $nameAssociatedSpecialRequests_PNRBGenericSpecialRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBGenericSpecialRequestItem instanceof \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The GenericSpecialRequest property can only contain items of \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBGenericSpecialRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBGenericSpecialRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBGenericSpecialRequestItem)), __LINE__);
            }
        }
        $this->GenericSpecialRequest = $genericSpecialRequest;
        return $this;
    }
    /**
     * Add item to GenericSpecialRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
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
     * Get ChildRequest value
     * @return \Sabre\UpdateReservation\StructType\ChildRequest_PNRB[]|null
     */
    public function getChildRequest()
    {
        return $this->ChildRequest;
    }
    /**
     * Set ChildRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ChildRequest_PNRB[] $childRequest
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setChildRequest(array $childRequest = array())
    {
        foreach ($childRequest as $nameAssociatedSpecialRequests_PNRBChildRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBChildRequestItem instanceof \Sabre\UpdateReservation\StructType\ChildRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The ChildRequest property can only contain items of \Sabre\UpdateReservation\StructType\ChildRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBChildRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBChildRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBChildRequestItem)), __LINE__);
            }
        }
        $this->ChildRequest = $childRequest;
        return $this;
    }
    /**
     * Add item to ChildRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ChildRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToChildRequest(\Sabre\UpdateReservation\StructType\ChildRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ChildRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The ChildRequest property can only contain items of \Sabre\UpdateReservation\StructType\ChildRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ChildRequest[] = $item;
        return $this;
    }
    /**
     * Get APISRequest value
     * @return \Sabre\UpdateReservation\StructType\APISRequest_PNRB[]|null
     */
    public function getAPISRequest()
    {
        return $this->APISRequest;
    }
    /**
     * Set APISRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\APISRequest_PNRB[] $aPISRequest
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setAPISRequest(array $aPISRequest = array())
    {
        foreach ($aPISRequest as $nameAssociatedSpecialRequests_PNRBAPISRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBAPISRequestItem instanceof \Sabre\UpdateReservation\StructType\APISRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The APISRequest property can only contain items of \Sabre\UpdateReservation\StructType\APISRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBAPISRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBAPISRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBAPISRequestItem)), __LINE__);
            }
        }
        $this->APISRequest = $aPISRequest;
        return $this;
    }
    /**
     * Add item to APISRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\APISRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToAPISRequest(\Sabre\UpdateReservation\StructType\APISRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\APISRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The APISRequest property can only contain items of \Sabre\UpdateReservation\StructType\APISRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->APISRequest[] = $item;
        return $this;
    }
    /**
     * Get EmergencyContactRequest value
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB[]|null
     */
    public function getEmergencyContactRequest()
    {
        return $this->EmergencyContactRequest;
    }
    /**
     * Set EmergencyContactRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB[] $emergencyContactRequest
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setEmergencyContactRequest(array $emergencyContactRequest = array())
    {
        foreach ($emergencyContactRequest as $nameAssociatedSpecialRequests_PNRBEmergencyContactRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBEmergencyContactRequestItem instanceof \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The EmergencyContactRequest property can only contain items of \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBEmergencyContactRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBEmergencyContactRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBEmergencyContactRequestItem)), __LINE__);
            }
        }
        $this->EmergencyContactRequest = $emergencyContactRequest;
        return $this;
    }
    /**
     * Add item to EmergencyContactRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToEmergencyContactRequest(\Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The EmergencyContactRequest property can only contain items of \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmergencyContactRequest[] = $item;
        return $this;
    }
    /**
     * Get SpecialMealRequest value
     * @return \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB[]|null
     */
    public function getSpecialMealRequest()
    {
        return $this->SpecialMealRequest;
    }
    /**
     * Set SpecialMealRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB[] $specialMealRequest
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setSpecialMealRequest(array $specialMealRequest = array())
    {
        foreach ($specialMealRequest as $nameAssociatedSpecialRequests_PNRBSpecialMealRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBSpecialMealRequestItem instanceof \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SpecialMealRequest property can only contain items of \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBSpecialMealRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBSpecialMealRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBSpecialMealRequestItem)), __LINE__);
            }
        }
        $this->SpecialMealRequest = $specialMealRequest;
        return $this;
    }
    /**
     * Add item to SpecialMealRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToSpecialMealRequest(\Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The SpecialMealRequest property can only contain items of \Sabre\UpdateReservation\StructType\SpecialMealRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialMealRequest[] = $item;
        return $this;
    }
    /**
     * Get PassportInfoMessage value
     * @return \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB[]|null
     */
    public function getPassportInfoMessage()
    {
        return $this->PassportInfoMessage;
    }
    /**
     * Set PassportInfoMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB[] $passportInfoMessage
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setPassportInfoMessage(array $passportInfoMessage = array())
    {
        foreach ($passportInfoMessage as $nameAssociatedSpecialRequests_PNRBPassportInfoMessageItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBPassportInfoMessageItem instanceof \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PassportInfoMessage property can only contain items of \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBPassportInfoMessageItem) ? get_class($nameAssociatedSpecialRequests_PNRBPassportInfoMessageItem) : gettype($nameAssociatedSpecialRequests_PNRBPassportInfoMessageItem)), __LINE__);
            }
        }
        $this->PassportInfoMessage = $passportInfoMessage;
        return $this;
    }
    /**
     * Add item to PassportInfoMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToPassportInfoMessage(\Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PassportInfoMessage property can only contain items of \Sabre\UpdateReservation\StructType\PassportInfoMessage_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassportInfoMessage[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setSeatRequest(array $seatRequest = array())
    {
        foreach ($seatRequest as $nameAssociatedSpecialRequests_PNRBSeatRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBSeatRequestItem instanceof \Sabre\UpdateReservation\StructType\SeatRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SeatRequest property can only contain items of \Sabre\UpdateReservation\StructType\SeatRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBSeatRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBSeatRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBSeatRequestItem)), __LINE__);
            }
        }
        $this->SeatRequest = $seatRequest;
        return $this;
    }
    /**
     * Add item to SeatRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SeatRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
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
     * Get UnaccompaniedMinorMessage value
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB[]|null
     */
    public function getUnaccompaniedMinorMessage()
    {
        return $this->UnaccompaniedMinorMessage;
    }
    /**
     * Set UnaccompaniedMinorMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB[] $unaccompaniedMinorMessage
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setUnaccompaniedMinorMessage(array $unaccompaniedMinorMessage = array())
    {
        foreach ($unaccompaniedMinorMessage as $nameAssociatedSpecialRequests_PNRBUnaccompaniedMinorMessageItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBUnaccompaniedMinorMessageItem instanceof \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB) {
                throw new \InvalidArgumentException(sprintf('The UnaccompaniedMinorMessage property can only contain items of \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBUnaccompaniedMinorMessageItem) ? get_class($nameAssociatedSpecialRequests_PNRBUnaccompaniedMinorMessageItem) : gettype($nameAssociatedSpecialRequests_PNRBUnaccompaniedMinorMessageItem)), __LINE__);
            }
        }
        $this->UnaccompaniedMinorMessage = $unaccompaniedMinorMessage;
        return $this;
    }
    /**
     * Add item to UnaccompaniedMinorMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToUnaccompaniedMinorMessage(\Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB) {
            throw new \InvalidArgumentException(sprintf('The UnaccompaniedMinorMessage property can only contain items of \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnaccompaniedMinorMessage[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setWheelchairRequest(array $wheelchairRequest = array())
    {
        foreach ($wheelchairRequest as $nameAssociatedSpecialRequests_PNRBWheelchairRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBWheelchairRequestItem instanceof \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The WheelchairRequest property can only contain items of \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBWheelchairRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBWheelchairRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBWheelchairRequestItem)), __LINE__);
            }
        }
        $this->WheelchairRequest = $wheelchairRequest;
        return $this;
    }
    /**
     * Add item to WheelchairRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
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
     * Get TicketingRequest value
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType[]|null
     */
    public function getTicketingRequest()
    {
        return $this->TicketingRequest;
    }
    /**
     * Set TicketingRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketingRequestType[] $ticketingRequest
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function setTicketingRequest(array $ticketingRequest = array())
    {
        foreach ($ticketingRequest as $nameAssociatedSpecialRequests_PNRBTicketingRequestItem) {
            // validation for constraint: itemType
            if (!$nameAssociatedSpecialRequests_PNRBTicketingRequestItem instanceof \Sabre\UpdateReservation\StructType\TicketingRequestType) {
                throw new \InvalidArgumentException(sprintf('The TicketingRequest property can only contain items of \Sabre\UpdateReservation\StructType\TicketingRequestType, "%s" given', is_object($nameAssociatedSpecialRequests_PNRBTicketingRequestItem) ? get_class($nameAssociatedSpecialRequests_PNRBTicketingRequestItem) : gettype($nameAssociatedSpecialRequests_PNRBTicketingRequestItem)), __LINE__);
            }
        }
        $this->TicketingRequest = $ticketingRequest;
        return $this;
    }
    /**
     * Add item to TicketingRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketingRequestType $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public function addToTicketingRequest(\Sabre\UpdateReservation\StructType\TicketingRequestType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TicketingRequestType) {
            throw new \InvalidArgumentException(sprintf('The TicketingRequest property can only contain items of \Sabre\UpdateReservation\StructType\TicketingRequestType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketingRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
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
