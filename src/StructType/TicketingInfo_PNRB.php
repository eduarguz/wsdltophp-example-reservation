<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingInfo.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ticketing information must be entered before the PNR can be finalized. The ticketing field (7) has a maximum of 71 characters starting with the 7, regardless of the entry or character combination used.
 * @subpackage Structs
 */
class TicketingInfo_PNRB extends AbstractStructBase
{
    /**
     * The FutureTicketing
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB[]
     */
    public $FutureTicketing;
    /**
     * The TicketingTimeLimit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB[]
     */
    public $TicketingTimeLimit;
    /**
     * The TourTicketing
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TourTicketing_PNRB[]
     */
    public $TourTicketing;
    /**
     * The AlreadyTicketed
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB[]
     */
    public $AlreadyTicketed;
    /**
     * The ETicketNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ETicketNumberType[]
     */
    public $ETicketNumber;
    /**
     * The TicketDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketDetailsType[]
     */
    public $TicketDetails;
    /**
     * Constructor method for TicketingInfo.PNRB
     * @uses TicketingInfo_PNRB::setFutureTicketing()
     * @uses TicketingInfo_PNRB::setTicketingTimeLimit()
     * @uses TicketingInfo_PNRB::setTourTicketing()
     * @uses TicketingInfo_PNRB::setAlreadyTicketed()
     * @uses TicketingInfo_PNRB::setETicketNumber()
     * @uses TicketingInfo_PNRB::setTicketDetails()
     * @param \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB[] $futureTicketing
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB[] $ticketingTimeLimit
     * @param \Sabre\UpdateReservation\StructType\TourTicketing_PNRB[] $tourTicketing
     * @param \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB[] $alreadyTicketed
     * @param \Sabre\UpdateReservation\StructType\ETicketNumberType[] $eTicketNumber
     * @param \Sabre\UpdateReservation\StructType\TicketDetailsType[] $ticketDetails
     */
    public function __construct(array $futureTicketing = array(), array $ticketingTimeLimit = array(), array $tourTicketing = array(), array $alreadyTicketed = array(), array $eTicketNumber = array(), array $ticketDetails = array())
    {
        $this
            ->setFutureTicketing($futureTicketing)
            ->setTicketingTimeLimit($ticketingTimeLimit)
            ->setTourTicketing($tourTicketing)
            ->setAlreadyTicketed($alreadyTicketed)
            ->setETicketNumber($eTicketNumber)
            ->setTicketDetails($ticketDetails);
    }
    /**
     * Get FutureTicketing value
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB[]|null
     */
    public function getFutureTicketing()
    {
        return $this->FutureTicketing;
    }
    /**
     * Set FutureTicketing value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB[] $futureTicketing
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function setFutureTicketing(array $futureTicketing = array())
    {
        foreach ($futureTicketing as $ticketingInfo_PNRBFutureTicketingItem) {
            // validation for constraint: itemType
            if (!$ticketingInfo_PNRBFutureTicketingItem instanceof \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB) {
                throw new \InvalidArgumentException(sprintf('The FutureTicketing property can only contain items of \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB, "%s" given', is_object($ticketingInfo_PNRBFutureTicketingItem) ? get_class($ticketingInfo_PNRBFutureTicketingItem) : gettype($ticketingInfo_PNRBFutureTicketingItem)), __LINE__);
            }
        }
        $this->FutureTicketing = $futureTicketing;
        return $this;
    }
    /**
     * Add item to FutureTicketing value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function addToFutureTicketing(\Sabre\UpdateReservation\StructType\FutureTicketing_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB) {
            throw new \InvalidArgumentException(sprintf('The FutureTicketing property can only contain items of \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FutureTicketing[] = $item;
        return $this;
    }
    /**
     * Get TicketingTimeLimit value
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB[]|null
     */
    public function getTicketingTimeLimit()
    {
        return $this->TicketingTimeLimit;
    }
    /**
     * Set TicketingTimeLimit value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB[] $ticketingTimeLimit
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function setTicketingTimeLimit(array $ticketingTimeLimit = array())
    {
        foreach ($ticketingTimeLimit as $ticketingInfo_PNRBTicketingTimeLimitItem) {
            // validation for constraint: itemType
            if (!$ticketingInfo_PNRBTicketingTimeLimitItem instanceof \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB) {
                throw new \InvalidArgumentException(sprintf('The TicketingTimeLimit property can only contain items of \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB, "%s" given', is_object($ticketingInfo_PNRBTicketingTimeLimitItem) ? get_class($ticketingInfo_PNRBTicketingTimeLimitItem) : gettype($ticketingInfo_PNRBTicketingTimeLimitItem)), __LINE__);
            }
        }
        $this->TicketingTimeLimit = $ticketingTimeLimit;
        return $this;
    }
    /**
     * Add item to TicketingTimeLimit value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function addToTicketingTimeLimit(\Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB) {
            throw new \InvalidArgumentException(sprintf('The TicketingTimeLimit property can only contain items of \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketingTimeLimit[] = $item;
        return $this;
    }
    /**
     * Get TourTicketing value
     * @return \Sabre\UpdateReservation\StructType\TourTicketing_PNRB[]|null
     */
    public function getTourTicketing()
    {
        return $this->TourTicketing;
    }
    /**
     * Set TourTicketing value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TourTicketing_PNRB[] $tourTicketing
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function setTourTicketing(array $tourTicketing = array())
    {
        foreach ($tourTicketing as $ticketingInfo_PNRBTourTicketingItem) {
            // validation for constraint: itemType
            if (!$ticketingInfo_PNRBTourTicketingItem instanceof \Sabre\UpdateReservation\StructType\TourTicketing_PNRB) {
                throw new \InvalidArgumentException(sprintf('The TourTicketing property can only contain items of \Sabre\UpdateReservation\StructType\TourTicketing_PNRB, "%s" given', is_object($ticketingInfo_PNRBTourTicketingItem) ? get_class($ticketingInfo_PNRBTourTicketingItem) : gettype($ticketingInfo_PNRBTourTicketingItem)), __LINE__);
            }
        }
        $this->TourTicketing = $tourTicketing;
        return $this;
    }
    /**
     * Add item to TourTicketing value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TourTicketing_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function addToTourTicketing(\Sabre\UpdateReservation\StructType\TourTicketing_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TourTicketing_PNRB) {
            throw new \InvalidArgumentException(sprintf('The TourTicketing property can only contain items of \Sabre\UpdateReservation\StructType\TourTicketing_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TourTicketing[] = $item;
        return $this;
    }
    /**
     * Get AlreadyTicketed value
     * @return \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB[]|null
     */
    public function getAlreadyTicketed()
    {
        return $this->AlreadyTicketed;
    }
    /**
     * Set AlreadyTicketed value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB[] $alreadyTicketed
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function setAlreadyTicketed(array $alreadyTicketed = array())
    {
        foreach ($alreadyTicketed as $ticketingInfo_PNRBAlreadyTicketedItem) {
            // validation for constraint: itemType
            if (!$ticketingInfo_PNRBAlreadyTicketedItem instanceof \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AlreadyTicketed property can only contain items of \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB, "%s" given', is_object($ticketingInfo_PNRBAlreadyTicketedItem) ? get_class($ticketingInfo_PNRBAlreadyTicketedItem) : gettype($ticketingInfo_PNRBAlreadyTicketedItem)), __LINE__);
            }
        }
        $this->AlreadyTicketed = $alreadyTicketed;
        return $this;
    }
    /**
     * Add item to AlreadyTicketed value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function addToAlreadyTicketed(\Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AlreadyTicketed property can only contain items of \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AlreadyTicketed[] = $item;
        return $this;
    }
    /**
     * Get ETicketNumber value
     * @return \Sabre\UpdateReservation\StructType\ETicketNumberType[]|null
     */
    public function getETicketNumber()
    {
        return $this->ETicketNumber;
    }
    /**
     * Set ETicketNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ETicketNumberType[] $eTicketNumber
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function setETicketNumber(array $eTicketNumber = array())
    {
        foreach ($eTicketNumber as $ticketingInfo_PNRBETicketNumberItem) {
            // validation for constraint: itemType
            if (!$ticketingInfo_PNRBETicketNumberItem instanceof \Sabre\UpdateReservation\StructType\ETicketNumberType) {
                throw new \InvalidArgumentException(sprintf('The ETicketNumber property can only contain items of \Sabre\UpdateReservation\StructType\ETicketNumberType, "%s" given', is_object($ticketingInfo_PNRBETicketNumberItem) ? get_class($ticketingInfo_PNRBETicketNumberItem) : gettype($ticketingInfo_PNRBETicketNumberItem)), __LINE__);
            }
        }
        $this->ETicketNumber = $eTicketNumber;
        return $this;
    }
    /**
     * Add item to ETicketNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ETicketNumberType $item
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function addToETicketNumber(\Sabre\UpdateReservation\StructType\ETicketNumberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ETicketNumberType) {
            throw new \InvalidArgumentException(sprintf('The ETicketNumber property can only contain items of \Sabre\UpdateReservation\StructType\ETicketNumberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ETicketNumber[] = $item;
        return $this;
    }
    /**
     * Get TicketDetails value
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType[]|null
     */
    public function getTicketDetails()
    {
        return $this->TicketDetails;
    }
    /**
     * Set TicketDetails value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketDetailsType[] $ticketDetails
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function setTicketDetails(array $ticketDetails = array())
    {
        foreach ($ticketDetails as $ticketingInfo_PNRBTicketDetailsItem) {
            // validation for constraint: itemType
            if (!$ticketingInfo_PNRBTicketDetailsItem instanceof \Sabre\UpdateReservation\StructType\TicketDetailsType) {
                throw new \InvalidArgumentException(sprintf('The TicketDetails property can only contain items of \Sabre\UpdateReservation\StructType\TicketDetailsType, "%s" given', is_object($ticketingInfo_PNRBTicketDetailsItem) ? get_class($ticketingInfo_PNRBTicketDetailsItem) : gettype($ticketingInfo_PNRBTicketDetailsItem)), __LINE__);
            }
        }
        $this->TicketDetails = $ticketDetails;
        return $this;
    }
    /**
     * Add item to TicketDetails value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketDetailsType $item
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public function addToTicketDetails(\Sabre\UpdateReservation\StructType\TicketDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TicketDetailsType) {
            throw new \InvalidArgumentException(sprintf('The TicketDetails property can only contain items of \Sabre\UpdateReservation\StructType\TicketDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
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
