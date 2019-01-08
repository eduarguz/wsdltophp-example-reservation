<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelTotalPricing StructType
 * @subpackage Structs
 */
class HotelTotalPricing extends AbstractStructBase
{
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TotalTax
     */
    public $TotalTax;
    /**
     * The TotalSurcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TotalSurcharge
     */
    public $TotalSurcharge;
    /**
     * The ApproximateTotal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ApproximateTotal
     */
    public $ApproximateTotal;
    /**
     * The RateChange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RateChange[]
     */
    public $RateChange;
    /**
     * The Disclaimer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Disclaimer[]
     */
    public $Disclaimer;
    /**
     * The HotelFees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelFees
     */
    public $HotelFees;
    /**
     * The NightlyRateTotal
     * Meta informations extracted from the WSDL
     * - documentation: Total of all nightly rate values.
     * - minOccurs: 0
     * @var float
     */
    public $NightlyRateTotal;
    /**
     * The MaxNightlyRate
     * Meta informations extracted from the WSDL
     * - documentation: The highest nightly rate of all rates.
     * - minOccurs: 0
     * @var float
     */
    public $MaxNightlyRate;
    /**
     * The CommissionableUsdTotal
     * Meta informations extracted from the WSDL
     * - documentation: Amount used to calculate partner commissions, in USD. Total of nightly rates less surcharges.
     * - minOccurs: 0
     * @var float
     */
    public $CommissionableUsdTotal;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code specifying a monetary unit. Use ISO 4217, three alpha code
     * @var string
     */
    public $CurrencyCode;
    /**
     * Constructor method for HotelTotalPricing
     * @uses HotelTotalPricing::setTotalTax()
     * @uses HotelTotalPricing::setTotalSurcharge()
     * @uses HotelTotalPricing::setApproximateTotal()
     * @uses HotelTotalPricing::setRateChange()
     * @uses HotelTotalPricing::setDisclaimer()
     * @uses HotelTotalPricing::setHotelFees()
     * @uses HotelTotalPricing::setNightlyRateTotal()
     * @uses HotelTotalPricing::setMaxNightlyRate()
     * @uses HotelTotalPricing::setCommissionableUsdTotal()
     * @uses HotelTotalPricing::setCurrencyCode()
     * @param \Sabre\UpdateReservation\StructType\TotalTax $totalTax
     * @param \Sabre\UpdateReservation\StructType\TotalSurcharge $totalSurcharge
     * @param \Sabre\UpdateReservation\StructType\ApproximateTotal $approximateTotal
     * @param \Sabre\UpdateReservation\StructType\RateChange[] $rateChange
     * @param \Sabre\UpdateReservation\StructType\Disclaimer[] $disclaimer
     * @param \Sabre\UpdateReservation\StructType\HotelFees $hotelFees
     * @param float $nightlyRateTotal
     * @param float $maxNightlyRate
     * @param float $commissionableUsdTotal
     * @param string $currencyCode
     */
    public function __construct(\Sabre\UpdateReservation\StructType\TotalTax $totalTax = null, \Sabre\UpdateReservation\StructType\TotalSurcharge $totalSurcharge = null, \Sabre\UpdateReservation\StructType\ApproximateTotal $approximateTotal = null, array $rateChange = array(), array $disclaimer = array(), \Sabre\UpdateReservation\StructType\HotelFees $hotelFees = null, $nightlyRateTotal = null, $maxNightlyRate = null, $commissionableUsdTotal = null, $currencyCode = null)
    {
        $this
            ->setTotalTax($totalTax)
            ->setTotalSurcharge($totalSurcharge)
            ->setApproximateTotal($approximateTotal)
            ->setRateChange($rateChange)
            ->setDisclaimer($disclaimer)
            ->setHotelFees($hotelFees)
            ->setNightlyRateTotal($nightlyRateTotal)
            ->setMaxNightlyRate($maxNightlyRate)
            ->setCommissionableUsdTotal($commissionableUsdTotal)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get TotalTax value
     * @return \Sabre\UpdateReservation\StructType\TotalTax|null
     */
    public function getTotalTax()
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param \Sabre\UpdateReservation\StructType\TotalTax $totalTax
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setTotalTax(\Sabre\UpdateReservation\StructType\TotalTax $totalTax = null)
    {
        $this->TotalTax = $totalTax;
        return $this;
    }
    /**
     * Get TotalSurcharge value
     * @return \Sabre\UpdateReservation\StructType\TotalSurcharge|null
     */
    public function getTotalSurcharge()
    {
        return $this->TotalSurcharge;
    }
    /**
     * Set TotalSurcharge value
     * @param \Sabre\UpdateReservation\StructType\TotalSurcharge $totalSurcharge
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setTotalSurcharge(\Sabre\UpdateReservation\StructType\TotalSurcharge $totalSurcharge = null)
    {
        $this->TotalSurcharge = $totalSurcharge;
        return $this;
    }
    /**
     * Get ApproximateTotal value
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotal|null
     */
    public function getApproximateTotal()
    {
        return $this->ApproximateTotal;
    }
    /**
     * Set ApproximateTotal value
     * @param \Sabre\UpdateReservation\StructType\ApproximateTotal $approximateTotal
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setApproximateTotal(\Sabre\UpdateReservation\StructType\ApproximateTotal $approximateTotal = null)
    {
        $this->ApproximateTotal = $approximateTotal;
        return $this;
    }
    /**
     * Get RateChange value
     * @return \Sabre\UpdateReservation\StructType\RateChange[]|null
     */
    public function getRateChange()
    {
        return $this->RateChange;
    }
    /**
     * Set RateChange value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RateChange[] $rateChange
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setRateChange(array $rateChange = array())
    {
        foreach ($rateChange as $hotelTotalPricingRateChangeItem) {
            // validation for constraint: itemType
            if (!$hotelTotalPricingRateChangeItem instanceof \Sabre\UpdateReservation\StructType\RateChange) {
                throw new \InvalidArgumentException(sprintf('The RateChange property can only contain items of \Sabre\UpdateReservation\StructType\RateChange, "%s" given', is_object($hotelTotalPricingRateChangeItem) ? get_class($hotelTotalPricingRateChangeItem) : gettype($hotelTotalPricingRateChangeItem)), __LINE__);
            }
        }
        $this->RateChange = $rateChange;
        return $this;
    }
    /**
     * Add item to RateChange value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RateChange $item
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function addToRateChange(\Sabre\UpdateReservation\StructType\RateChange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RateChange) {
            throw new \InvalidArgumentException(sprintf('The RateChange property can only contain items of \Sabre\UpdateReservation\StructType\RateChange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateChange[] = $item;
        return $this;
    }
    /**
     * Get Disclaimer value
     * @return \Sabre\UpdateReservation\StructType\Disclaimer[]|null
     */
    public function getDisclaimer()
    {
        return $this->Disclaimer;
    }
    /**
     * Set Disclaimer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Disclaimer[] $disclaimer
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setDisclaimer(array $disclaimer = array())
    {
        foreach ($disclaimer as $hotelTotalPricingDisclaimerItem) {
            // validation for constraint: itemType
            if (!$hotelTotalPricingDisclaimerItem instanceof \Sabre\UpdateReservation\StructType\Disclaimer) {
                throw new \InvalidArgumentException(sprintf('The Disclaimer property can only contain items of \Sabre\UpdateReservation\StructType\Disclaimer, "%s" given', is_object($hotelTotalPricingDisclaimerItem) ? get_class($hotelTotalPricingDisclaimerItem) : gettype($hotelTotalPricingDisclaimerItem)), __LINE__);
            }
        }
        $this->Disclaimer = $disclaimer;
        return $this;
    }
    /**
     * Add item to Disclaimer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Disclaimer $item
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function addToDisclaimer(\Sabre\UpdateReservation\StructType\Disclaimer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Disclaimer) {
            throw new \InvalidArgumentException(sprintf('The Disclaimer property can only contain items of \Sabre\UpdateReservation\StructType\Disclaimer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Disclaimer[] = $item;
        return $this;
    }
    /**
     * Get HotelFees value
     * @return \Sabre\UpdateReservation\StructType\HotelFees|null
     */
    public function getHotelFees()
    {
        return $this->HotelFees;
    }
    /**
     * Set HotelFees value
     * @param \Sabre\UpdateReservation\StructType\HotelFees $hotelFees
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setHotelFees(\Sabre\UpdateReservation\StructType\HotelFees $hotelFees = null)
    {
        $this->HotelFees = $hotelFees;
        return $this;
    }
    /**
     * Get NightlyRateTotal value
     * @return float|null
     */
    public function getNightlyRateTotal()
    {
        return $this->NightlyRateTotal;
    }
    /**
     * Set NightlyRateTotal value
     * @param float $nightlyRateTotal
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setNightlyRateTotal($nightlyRateTotal = null)
    {
        $this->NightlyRateTotal = $nightlyRateTotal;
        return $this;
    }
    /**
     * Get MaxNightlyRate value
     * @return float|null
     */
    public function getMaxNightlyRate()
    {
        return $this->MaxNightlyRate;
    }
    /**
     * Set MaxNightlyRate value
     * @param float $maxNightlyRate
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setMaxNightlyRate($maxNightlyRate = null)
    {
        $this->MaxNightlyRate = $maxNightlyRate;
        return $this;
    }
    /**
     * Get CommissionableUsdTotal value
     * @return float|null
     */
    public function getCommissionableUsdTotal()
    {
        return $this->CommissionableUsdTotal;
    }
    /**
     * Set CommissionableUsdTotal value
     * @param float $commissionableUsdTotal
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setCommissionableUsdTotal($commissionableUsdTotal = null)
    {
        $this->CommissionableUsdTotal = $commissionableUsdTotal;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing
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
