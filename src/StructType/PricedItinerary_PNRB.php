<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedItinerary.PNRB StructType
 * @subpackage Structs
 */
class PricedItinerary_PNRB extends AbstractStructBase
{
    /**
     * The AirItineraryPricingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo
     */
    public $AirItineraryPricingInfo;
    /**
     * The NetTicketingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NetTicketingInfoType
     */
    public $NetTicketingInfo;
    /**
     * The TaxExempt
     * Meta informations extracted from the WSDL
     * - documentation: Tax exemption.
     * - use: optional
     * @var string
     */
    public $TaxExempt;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: Status code.
     * - use: optional
     * @var string
     */
    public $StatusCode;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: SequenceNumber.
     * - use: optional
     * @var int
     */
    public $SequenceNumber;
    /**
     * The InputMessage
     * Meta informations extracted from the WSDL
     * - documentation: InputMessage.
     * - use: optional
     * @var string
     */
    public $InputMessage;
    /**
     * The ValidatingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: Validating Carrier
     * - use: optional
     * @var string
     */
    public $ValidatingCarrier;
    /**
     * Constructor method for PricedItinerary.PNRB
     * @uses PricedItinerary_PNRB::setAirItineraryPricingInfo()
     * @uses PricedItinerary_PNRB::setNetTicketingInfo()
     * @uses PricedItinerary_PNRB::setTaxExempt()
     * @uses PricedItinerary_PNRB::setStatusCode()
     * @uses PricedItinerary_PNRB::setSequenceNumber()
     * @uses PricedItinerary_PNRB::setInputMessage()
     * @uses PricedItinerary_PNRB::setValidatingCarrier()
     * @param \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo $airItineraryPricingInfo
     * @param \Sabre\UpdateReservation\StructType\NetTicketingInfoType $netTicketingInfo
     * @param string $taxExempt
     * @param string $statusCode
     * @param int $sequenceNumber
     * @param string $inputMessage
     * @param string $validatingCarrier
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AirItineraryPricingInfo $airItineraryPricingInfo = null, \Sabre\UpdateReservation\StructType\NetTicketingInfoType $netTicketingInfo = null, $taxExempt = null, $statusCode = null, $sequenceNumber = null, $inputMessage = null, $validatingCarrier = null)
    {
        $this
            ->setAirItineraryPricingInfo($airItineraryPricingInfo)
            ->setNetTicketingInfo($netTicketingInfo)
            ->setTaxExempt($taxExempt)
            ->setStatusCode($statusCode)
            ->setSequenceNumber($sequenceNumber)
            ->setInputMessage($inputMessage)
            ->setValidatingCarrier($validatingCarrier);
    }
    /**
     * Get AirItineraryPricingInfo value
     * @return \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo|null
     */
    public function getAirItineraryPricingInfo()
    {
        return $this->AirItineraryPricingInfo;
    }
    /**
     * Set AirItineraryPricingInfo value
     * @param \Sabre\UpdateReservation\StructType\AirItineraryPricingInfo $airItineraryPricingInfo
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setAirItineraryPricingInfo(\Sabre\UpdateReservation\StructType\AirItineraryPricingInfo $airItineraryPricingInfo = null)
    {
        $this->AirItineraryPricingInfo = $airItineraryPricingInfo;
        return $this;
    }
    /**
     * Get NetTicketingInfo value
     * @return \Sabre\UpdateReservation\StructType\NetTicketingInfoType|null
     */
    public function getNetTicketingInfo()
    {
        return $this->NetTicketingInfo;
    }
    /**
     * Set NetTicketingInfo value
     * @param \Sabre\UpdateReservation\StructType\NetTicketingInfoType $netTicketingInfo
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setNetTicketingInfo(\Sabre\UpdateReservation\StructType\NetTicketingInfoType $netTicketingInfo = null)
    {
        $this->NetTicketingInfo = $netTicketingInfo;
        return $this;
    }
    /**
     * Get TaxExempt value
     * @return string|null
     */
    public function getTaxExempt()
    {
        return $this->TaxExempt;
    }
    /**
     * Set TaxExempt value
     * @param string $taxExempt
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setTaxExempt($taxExempt = null)
    {
        // validation for constraint: string
        if (!is_null($taxExempt) && !is_string($taxExempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxExempt)), __LINE__);
        }
        $this->TaxExempt = $taxExempt;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get InputMessage value
     * @return string|null
     */
    public function getInputMessage()
    {
        return $this->InputMessage;
    }
    /**
     * Set InputMessage value
     * @param string $inputMessage
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setInputMessage($inputMessage = null)
    {
        // validation for constraint: string
        if (!is_null($inputMessage) && !is_string($inputMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inputMessage)), __LINE__);
        }
        $this->InputMessage = $inputMessage;
        return $this;
    }
    /**
     * Get ValidatingCarrier value
     * @return string|null
     */
    public function getValidatingCarrier()
    {
        return $this->ValidatingCarrier;
    }
    /**
     * Set ValidatingCarrier value
     * @param string $validatingCarrier
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
     */
    public function setValidatingCarrier($validatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($validatingCarrier) && !is_string($validatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingCarrier)), __LINE__);
        }
        $this->ValidatingCarrier = $validatingCarrier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricedItinerary_PNRB
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
