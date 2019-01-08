<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryPricingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Airitinerary pricing information.
 * @subpackage Structs
 */
class AirItineraryPricingInfo extends AbstractStructBase
{
    /**
     * The ItinTotalFare
     * Meta informations extracted from the WSDL
     * - documentation: Air itinerary total fare information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FeeDetailsTotal[]
     */
    public $ItinTotalFare;
    /**
     * The PTC_FareBreakdown
     * Meta informations extracted from the WSDL
     * - documentation: PTC fare breakdown information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareBreakdown[]
     */
    public $PTC_FareBreakdown;
    /**
     * The TicketingFees
     * Meta informations extracted from the WSDL
     * - documentation: Ticketing fees.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingFees
     */
    public $TicketingFees;
    /**
     * The SignatureLine
     * Meta informations extracted from the WSDL
     * - documentation: Agent signature line.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SignatureLine
     */
    public $SignatureLine;
    /**
     * Constructor method for AirItineraryPricingInfo
     * @uses AirItineraryPricingInfo::setItinTotalFare()
     * @uses AirItineraryPricingInfo::setPTC_FareBreakdown()
     * @uses AirItineraryPricingInfo::setTicketingFees()
     * @uses AirItineraryPricingInfo::setSignatureLine()
     * @param \Sabre\UpdateReservation\StructType\FeeDetailsTotal[] $itinTotalFare
     * @param \Sabre\UpdateReservation\StructType\FareBreakdown[] $pTC_FareBreakdown
     * @param \Sabre\UpdateReservation\StructType\TicketingFees $ticketingFees
     * @param \Sabre\UpdateReservation\StructType\SignatureLine $signatureLine
     */
    public function __construct(array $itinTotalFare = array(), array $pTC_FareBreakdown = array(), \Sabre\UpdateReservation\StructType\TicketingFees $ticketingFees = null, \Sabre\UpdateReservation\StructType\SignatureLine $signatureLine = null)
    {
        $this
            ->setItinTotalFare($itinTotalFare)
            ->setPTC_FareBreakdown($pTC_FareBreakdown)
            ->setTicketingFees($ticketingFees)
            ->setSignatureLine($signatureLine);
    }
    /**
     * Get ItinTotalFare value
     * @return \Sabre\UpdateReservation\StructType\FeeDetailsTotal[]|null
     */
    public function getItinTotalFare()
    {
        return $this->ItinTotalFare;
    }
    /**
     * Set ItinTotalFare value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FeeDetailsTotal[] $itinTotalFare
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public function setItinTotalFare(array $itinTotalFare = array())
    {
        foreach ($itinTotalFare as $airItineraryPricingInfoItinTotalFareItem) {
            // validation for constraint: itemType
            if (!$airItineraryPricingInfoItinTotalFareItem instanceof \Sabre\UpdateReservation\StructType\FeeDetailsTotal) {
                throw new \InvalidArgumentException(sprintf('The ItinTotalFare property can only contain items of \Sabre\UpdateReservation\StructType\FeeDetailsTotal, "%s" given', is_object($airItineraryPricingInfoItinTotalFareItem) ? get_class($airItineraryPricingInfoItinTotalFareItem) : gettype($airItineraryPricingInfoItinTotalFareItem)), __LINE__);
            }
        }
        $this->ItinTotalFare = $itinTotalFare;
        return $this;
    }
    /**
     * Add item to ItinTotalFare value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FeeDetailsTotal $item
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public function addToItinTotalFare(\Sabre\UpdateReservation\StructType\FeeDetailsTotal $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FeeDetailsTotal) {
            throw new \InvalidArgumentException(sprintf('The ItinTotalFare property can only contain items of \Sabre\UpdateReservation\StructType\FeeDetailsTotal, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItinTotalFare[] = $item;
        return $this;
    }
    /**
     * Get PTC_FareBreakdown value
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown[]|null
     */
    public function getPTC_FareBreakdown()
    {
        return $this->PTC_FareBreakdown;
    }
    /**
     * Set PTC_FareBreakdown value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareBreakdown[] $pTC_FareBreakdown
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public function setPTC_FareBreakdown(array $pTC_FareBreakdown = array())
    {
        foreach ($pTC_FareBreakdown as $airItineraryPricingInfoPTC_FareBreakdownItem) {
            // validation for constraint: itemType
            if (!$airItineraryPricingInfoPTC_FareBreakdownItem instanceof \Sabre\UpdateReservation\StructType\FareBreakdown) {
                throw new \InvalidArgumentException(sprintf('The PTC_FareBreakdown property can only contain items of \Sabre\UpdateReservation\StructType\FareBreakdown, "%s" given', is_object($airItineraryPricingInfoPTC_FareBreakdownItem) ? get_class($airItineraryPricingInfoPTC_FareBreakdownItem) : gettype($airItineraryPricingInfoPTC_FareBreakdownItem)), __LINE__);
            }
        }
        $this->PTC_FareBreakdown = $pTC_FareBreakdown;
        return $this;
    }
    /**
     * Add item to PTC_FareBreakdown value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareBreakdown $item
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public function addToPTC_FareBreakdown(\Sabre\UpdateReservation\StructType\FareBreakdown $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FareBreakdown) {
            throw new \InvalidArgumentException(sprintf('The PTC_FareBreakdown property can only contain items of \Sabre\UpdateReservation\StructType\FareBreakdown, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PTC_FareBreakdown[] = $item;
        return $this;
    }
    /**
     * Get TicketingFees value
     * @return \Sabre\UpdateReservation\StructType\TicketingFees|null
     */
    public function getTicketingFees()
    {
        return $this->TicketingFees;
    }
    /**
     * Set TicketingFees value
     * @param \Sabre\UpdateReservation\StructType\TicketingFees $ticketingFees
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public function setTicketingFees(\Sabre\UpdateReservation\StructType\TicketingFees $ticketingFees = null)
    {
        $this->TicketingFees = $ticketingFees;
        return $this;
    }
    /**
     * Get SignatureLine value
     * @return \Sabre\UpdateReservation\StructType\SignatureLine|null
     */
    public function getSignatureLine()
    {
        return $this->SignatureLine;
    }
    /**
     * Set SignatureLine value
     * @param \Sabre\UpdateReservation\StructType\SignatureLine $signatureLine
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public function setSignatureLine(\Sabre\UpdateReservation\StructType\SignatureLine $signatureLine = null)
    {
        $this->SignatureLine = $signatureLine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
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
