<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryPricing.PNRB StructType
 * @subpackage Structs
 */
class ItineraryPricing_PNRB extends AbstractStructBase
{
    /**
     * The FuturePriceInfo
     * Meta informations extracted from the WSDL
     * - documentation: Future price information.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB[]
     */
    public $FuturePriceInfo;
    /**
     * The PricedItinerary
     * Meta informations extracted from the WSDL
     * - documentation: Priced Itinerary information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB[]
     */
    public $PricedItinerary;
    /**
     * The numberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Ex. "1" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $numberInParty;
    /**
     * Constructor method for ItineraryPricing.PNRB
     * @uses ItineraryPricing_PNRB::setFuturePriceInfo()
     * @uses ItineraryPricing_PNRB::setPricedItinerary()
     * @uses ItineraryPricing_PNRB::setNumberInParty()
     * @param \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB[] $futurePriceInfo
     * @param \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB[] $pricedItinerary
     * @param int $numberInParty
     */
    public function __construct(array $futurePriceInfo = array(), array $pricedItinerary = array(), $numberInParty = null)
    {
        $this
            ->setFuturePriceInfo($futurePriceInfo)
            ->setPricedItinerary($pricedItinerary)
            ->setNumberInParty($numberInParty);
    }
    /**
     * Get FuturePriceInfo value
     * @return \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB[]|null
     */
    public function getFuturePriceInfo()
    {
        return $this->FuturePriceInfo;
    }
    /**
     * Set FuturePriceInfo value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB[] $futurePriceInfo
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
     */
    public function setFuturePriceInfo(array $futurePriceInfo = array())
    {
        foreach ($futurePriceInfo as $itineraryPricing_PNRBFuturePriceInfoItem) {
            // validation for constraint: itemType
            if (!$itineraryPricing_PNRBFuturePriceInfoItem instanceof \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB) {
                throw new \InvalidArgumentException(sprintf('The FuturePriceInfo property can only contain items of \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB, "%s" given', is_object($itineraryPricing_PNRBFuturePriceInfoItem) ? get_class($itineraryPricing_PNRBFuturePriceInfoItem) : gettype($itineraryPricing_PNRBFuturePriceInfoItem)), __LINE__);
            }
        }
        $this->FuturePriceInfo = $futurePriceInfo;
        return $this;
    }
    /**
     * Add item to FuturePriceInfo value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
     */
    public function addToFuturePriceInfo(\Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB) {
            throw new \InvalidArgumentException(sprintf('The FuturePriceInfo property can only contain items of \Sabre\UpdateReservation\StructType\FuturePriceInfo_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FuturePriceInfo[] = $item;
        return $this;
    }
    /**
     * Get PricedItinerary value
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB[]|null
     */
    public function getPricedItinerary()
    {
        return $this->PricedItinerary;
    }
    /**
     * Set PricedItinerary value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB[] $pricedItinerary
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
     */
    public function setPricedItinerary(array $pricedItinerary = array())
    {
        foreach ($pricedItinerary as $itineraryPricing_PNRBPricedItineraryItem) {
            // validation for constraint: itemType
            if (!$itineraryPricing_PNRBPricedItineraryItem instanceof \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PricedItinerary property can only contain items of \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB, "%s" given', is_object($itineraryPricing_PNRBPricedItineraryItem) ? get_class($itineraryPricing_PNRBPricedItineraryItem) : gettype($itineraryPricing_PNRBPricedItineraryItem)), __LINE__);
            }
        }
        $this->PricedItinerary = $pricedItinerary;
        return $this;
    }
    /**
     * Add item to PricedItinerary value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
     */
    public function addToPricedItinerary(\Sabre\UpdateReservation\StructType\PricedItinerary_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PricedItinerary property can only contain items of \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricedItinerary[] = $item;
        return $this;
    }
    /**
     * Get numberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }
    /**
     * Set numberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->numberInParty = $numberInParty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ItineraryPricing_PNRB
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
