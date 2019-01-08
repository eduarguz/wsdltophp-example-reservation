<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VisaType StructType
 * @subpackage Structs
 */
class VisaType extends AbstractStructBase
{
    /**
     * The CustomerResponsibilityID
     * Meta informations extracted from the WSDL
     * - documentation: Customer responsibility ID
     * - minOccurs: 0
     * @var string
     */
    public $CustomerResponsibilityID;
    /**
     * The Rates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Rates
     */
    public $Rates;
    /**
     * The ServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceFee
     */
    public $ServiceFee;
    /**
     * The DestinationCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DestinationCountry
     */
    public $DestinationCountry;
    /**
     * The ProcessingTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProcessingTime
     */
    public $ProcessingTime;
    /**
     * The Purpose
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Purpose
     */
    public $Purpose;
    /**
     * The Transit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Transit
     */
    public $Transit;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vendor
     */
    public $Vendor;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Visa duration
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Payment
     */
    public $Payment;
    /**
     * The PricingElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public $PricingElements;
    /**
     * Constructor method for VisaType
     * @uses VisaType::setCustomerResponsibilityID()
     * @uses VisaType::setRates()
     * @uses VisaType::setServiceFee()
     * @uses VisaType::setDestinationCountry()
     * @uses VisaType::setProcessingTime()
     * @uses VisaType::setPurpose()
     * @uses VisaType::setTransit()
     * @uses VisaType::setVendor()
     * @uses VisaType::setDuration()
     * @uses VisaType::setPayment()
     * @uses VisaType::setPricingElements()
     * @param string $customerResponsibilityID
     * @param \Sabre\UpdateReservation\StructType\Rates $rates
     * @param \Sabre\UpdateReservation\StructType\ServiceFee $serviceFee
     * @param \Sabre\UpdateReservation\StructType\DestinationCountry $destinationCountry
     * @param \Sabre\UpdateReservation\StructType\ProcessingTime $processingTime
     * @param \Sabre\UpdateReservation\StructType\Purpose $purpose
     * @param \Sabre\UpdateReservation\StructType\Transit $transit
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @param string $duration
     * @param \Sabre\UpdateReservation\StructType\Payment $payment
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     */
    public function __construct($customerResponsibilityID = null, \Sabre\UpdateReservation\StructType\Rates $rates = null, \Sabre\UpdateReservation\StructType\ServiceFee $serviceFee = null, \Sabre\UpdateReservation\StructType\DestinationCountry $destinationCountry = null, \Sabre\UpdateReservation\StructType\ProcessingTime $processingTime = null, \Sabre\UpdateReservation\StructType\Purpose $purpose = null, \Sabre\UpdateReservation\StructType\Transit $transit = null, \Sabre\UpdateReservation\StructType\Vendor $vendor = null, $duration = null, \Sabre\UpdateReservation\StructType\Payment $payment = null, \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this
            ->setCustomerResponsibilityID($customerResponsibilityID)
            ->setRates($rates)
            ->setServiceFee($serviceFee)
            ->setDestinationCountry($destinationCountry)
            ->setProcessingTime($processingTime)
            ->setPurpose($purpose)
            ->setTransit($transit)
            ->setVendor($vendor)
            ->setDuration($duration)
            ->setPayment($payment)
            ->setPricingElements($pricingElements);
    }
    /**
     * Get CustomerResponsibilityID value
     * @return string|null
     */
    public function getCustomerResponsibilityID()
    {
        return $this->CustomerResponsibilityID;
    }
    /**
     * Set CustomerResponsibilityID value
     * @param string $customerResponsibilityID
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setCustomerResponsibilityID($customerResponsibilityID = null)
    {
        // validation for constraint: string
        if (!is_null($customerResponsibilityID) && !is_string($customerResponsibilityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerResponsibilityID)), __LINE__);
        }
        $this->CustomerResponsibilityID = $customerResponsibilityID;
        return $this;
    }
    /**
     * Get Rates value
     * @return \Sabre\UpdateReservation\StructType\Rates|null
     */
    public function getRates()
    {
        return $this->Rates;
    }
    /**
     * Set Rates value
     * @param \Sabre\UpdateReservation\StructType\Rates $rates
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setRates(\Sabre\UpdateReservation\StructType\Rates $rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get ServiceFee value
     * @return \Sabre\UpdateReservation\StructType\ServiceFee|null
     */
    public function getServiceFee()
    {
        return $this->ServiceFee;
    }
    /**
     * Set ServiceFee value
     * @param \Sabre\UpdateReservation\StructType\ServiceFee $serviceFee
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setServiceFee(\Sabre\UpdateReservation\StructType\ServiceFee $serviceFee = null)
    {
        $this->ServiceFee = $serviceFee;
        return $this;
    }
    /**
     * Get DestinationCountry value
     * @return \Sabre\UpdateReservation\StructType\DestinationCountry|null
     */
    public function getDestinationCountry()
    {
        return $this->DestinationCountry;
    }
    /**
     * Set DestinationCountry value
     * @param \Sabre\UpdateReservation\StructType\DestinationCountry $destinationCountry
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setDestinationCountry(\Sabre\UpdateReservation\StructType\DestinationCountry $destinationCountry = null)
    {
        $this->DestinationCountry = $destinationCountry;
        return $this;
    }
    /**
     * Get ProcessingTime value
     * @return \Sabre\UpdateReservation\StructType\ProcessingTime|null
     */
    public function getProcessingTime()
    {
        return $this->ProcessingTime;
    }
    /**
     * Set ProcessingTime value
     * @param \Sabre\UpdateReservation\StructType\ProcessingTime $processingTime
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setProcessingTime(\Sabre\UpdateReservation\StructType\ProcessingTime $processingTime = null)
    {
        $this->ProcessingTime = $processingTime;
        return $this;
    }
    /**
     * Get Purpose value
     * @return \Sabre\UpdateReservation\StructType\Purpose|null
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @param \Sabre\UpdateReservation\StructType\Purpose $purpose
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setPurpose(\Sabre\UpdateReservation\StructType\Purpose $purpose = null)
    {
        $this->Purpose = $purpose;
        return $this;
    }
    /**
     * Get Transit value
     * @return \Sabre\UpdateReservation\StructType\Transit|null
     */
    public function getTransit()
    {
        return $this->Transit;
    }
    /**
     * Set Transit value
     * @param \Sabre\UpdateReservation\StructType\Transit $transit
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setTransit(\Sabre\UpdateReservation\StructType\Transit $transit = null)
    {
        $this->Transit = $transit;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get Payment value
     * @return \Sabre\UpdateReservation\StructType\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Sabre\UpdateReservation\StructType\Payment $payment
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setPayment(\Sabre\UpdateReservation\StructType\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get PricingElements value
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType|null
     */
    public function getPricingElements()
    {
        return $this->PricingElements;
    }
    /**
     * Set PricingElements value
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @return \Sabre\UpdateReservation\StructType\VisaType
     */
    public function setPricingElements(\Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this->PricingElements = $pricingElements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VisaType
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
