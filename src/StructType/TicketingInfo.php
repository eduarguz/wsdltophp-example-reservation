<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ticketing information must be entered before the PNR can be finalized. The ticketing field (7) has a maximum of 71 characters starting with the 7, regardless of the entry or character combination used.
 * @subpackage Structs
 */
class TicketingInfo extends AbstractStructBase
{
    /**
     * The FutureTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB
     */
    public $FutureTicketing;
    /**
     * The TicketingTimeLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public $TicketingTimeLimit;
    /**
     * The AlreadyTicketed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB
     */
    public $AlreadyTicketed;
    /**
     * Constructor method for TicketingInfo
     * @uses TicketingInfo::setFutureTicketing()
     * @uses TicketingInfo::setTicketingTimeLimit()
     * @uses TicketingInfo::setAlreadyTicketed()
     * @param \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB $futureTicketing
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingTimeLimit
     * @param \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB $alreadyTicketed
     */
    public function __construct(\Sabre\UpdateReservation\StructType\FutureTicketing_PNRB $futureTicketing = null, \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingTimeLimit = null, \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB $alreadyTicketed = null)
    {
        $this
            ->setFutureTicketing($futureTicketing)
            ->setTicketingTimeLimit($ticketingTimeLimit)
            ->setAlreadyTicketed($alreadyTicketed);
    }
    /**
     * Get FutureTicketing value
     * @return \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB|null
     */
    public function getFutureTicketing()
    {
        return $this->FutureTicketing;
    }
    /**
     * Set FutureTicketing value
     * @param \Sabre\UpdateReservation\StructType\FutureTicketing_PNRB $futureTicketing
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo
     */
    public function setFutureTicketing(\Sabre\UpdateReservation\StructType\FutureTicketing_PNRB $futureTicketing = null)
    {
        $this->FutureTicketing = $futureTicketing;
        return $this;
    }
    /**
     * Get TicketingTimeLimit value
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB|null
     */
    public function getTicketingTimeLimit()
    {
        return $this->TicketingTimeLimit;
    }
    /**
     * Set TicketingTimeLimit value
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingTimeLimit
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo
     */
    public function setTicketingTimeLimit(\Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingTimeLimit = null)
    {
        $this->TicketingTimeLimit = $ticketingTimeLimit;
        return $this;
    }
    /**
     * Get AlreadyTicketed value
     * @return \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB|null
     */
    public function getAlreadyTicketed()
    {
        return $this->AlreadyTicketed;
    }
    /**
     * Set AlreadyTicketed value
     * @param \Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB $alreadyTicketed
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo
     */
    public function setAlreadyTicketed(\Sabre\UpdateReservation\StructType\AlreadyTicketed_PNRB $alreadyTicketed = null)
    {
        $this->AlreadyTicketed = $alreadyTicketed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo
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
