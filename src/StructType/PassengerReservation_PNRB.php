<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerReservation.PNRB StructType
 * @subpackage Structs
 */
class PassengerReservation_PNRB extends AbstractStructBase
{
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public $Passengers;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public $Segments;
    /**
     * The FormsOfPayment
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the form of payment such as cash/credit card, check, other.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB
     */
    public $FormsOfPayment;
    /**
     * The TicketingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public $TicketingInfo;
    /**
     * The ItineraryPricing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
     */
    public $ItineraryPricing;
    /**
     * Constructor method for PassengerReservation.PNRB
     * @uses PassengerReservation_PNRB::setPassengers()
     * @uses PassengerReservation_PNRB::setSegments()
     * @uses PassengerReservation_PNRB::setFormsOfPayment()
     * @uses PassengerReservation_PNRB::setTicketingInfo()
     * @uses PassengerReservation_PNRB::setItineraryPricing()
     * @param \Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers
     * @param \Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments
     * @param \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB $formsOfPayment
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo
     * @param \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB $itineraryPricing
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers = null, \Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments = null, \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB $formsOfPayment = null, \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo = null, \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB $itineraryPricing = null)
    {
        $this
            ->setPassengers($passengers)
            ->setSegments($segments)
            ->setFormsOfPayment($formsOfPayment)
            ->setTicketingInfo($ticketingInfo)
            ->setItineraryPricing($itineraryPricing);
    }
    /**
     * Get Passengers value
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
     */
    public function setPassengers(\Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Get Segments value
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
     */
    public function setSegments(\Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments = null)
    {
        $this->Segments = $segments;
        return $this;
    }
    /**
     * Get FormsOfPayment value
     * @return \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB|null
     */
    public function getFormsOfPayment()
    {
        return $this->FormsOfPayment;
    }
    /**
     * Set FormsOfPayment value
     * @param \Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB $formsOfPayment
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
     */
    public function setFormsOfPayment(\Sabre\UpdateReservation\StructType\FormsOfPayment_PNRB $formsOfPayment = null)
    {
        $this->FormsOfPayment = $formsOfPayment;
        return $this;
    }
    /**
     * Get TicketingInfo value
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB|null
     */
    public function getTicketingInfo()
    {
        return $this->TicketingInfo;
    }
    /**
     * Set TicketingInfo value
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
     */
    public function setTicketingInfo(\Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo = null)
    {
        $this->TicketingInfo = $ticketingInfo;
        return $this;
    }
    /**
     * Get ItineraryPricing value
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB|null
     */
    public function getItineraryPricing()
    {
        return $this->ItineraryPricing;
    }
    /**
     * Set ItineraryPricing value
     * @param \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB $itineraryPricing
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
     */
    public function setItineraryPricing(\Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB $itineraryPricing = null)
    {
        $this->ItineraryPricing = $itineraryPricing;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
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
