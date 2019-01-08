<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rate for a Room. Used in Response
 * @subpackage Structs
 */
class RateInfoType extends AbstractStructBase
{
    /**
     * The Rates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Rates
     */
    public $Rates;
    /**
     * The RatePlanDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RatePlanDescription
     */
    public $RatePlanDescription;
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - documentation: CheckIn Instruction Code is 8 in ADT table
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AdditionalDetailsType
     */
    public $AdditionalDetails;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FeesType
     */
    public $Fees;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingTaxesType
     */
    public $Taxes;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CancelPenalties
     */
    public $CancelPenalties;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public $Guarantee;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CommissionType
     */
    public $Commission;
    /**
     * The Discounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Discounts
     */
    public $Discounts;
    /**
     * The AmountBeforeTax
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $AmountBeforeTax;
    /**
     * The AmountAfterTax
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $AmountAfterTax;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
    /**
     * The AppliedDiscount
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $AppliedDiscount;
    /**
     * The NightlyRate
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $NightlyRate;
    /**
     * The AdditionalFeesExcludedIndicator
     * @var bool
     */
    public $AdditionalFeesExcludedIndicator;
    /**
     * The SupplierChangedAmount
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $SupplierChangedAmount;
    /**
     * The Changed
     * Meta informations extracted from the WSDL
     * - documentation: Denotes that total is changed since shopping
     * - use: optional
     * @var bool
     */
    public $Changed;
    /**
     * Constructor method for RateInfoType
     * @uses RateInfoType::setRates()
     * @uses RateInfoType::setRatePlanDescription()
     * @uses RateInfoType::setAdditionalDetails()
     * @uses RateInfoType::setFees()
     * @uses RateInfoType::setTaxes()
     * @uses RateInfoType::setCancelPenalties()
     * @uses RateInfoType::setGuarantee()
     * @uses RateInfoType::setCommission()
     * @uses RateInfoType::setDiscounts()
     * @uses RateInfoType::setAmountBeforeTax()
     * @uses RateInfoType::setAmountAfterTax()
     * @uses RateInfoType::setCurrencyCode()
     * @uses RateInfoType::setAppliedDiscount()
     * @uses RateInfoType::setNightlyRate()
     * @uses RateInfoType::setAdditionalFeesExcludedIndicator()
     * @uses RateInfoType::setSupplierChangedAmount()
     * @uses RateInfoType::setChanged()
     * @param \Sabre\UpdateReservation\StructType\Rates $rates
     * @param \Sabre\UpdateReservation\StructType\RatePlanDescription $ratePlanDescription
     * @param \Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails
     * @param \Sabre\UpdateReservation\StructType\FeesType $fees
     * @param \Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes
     * @param \Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties
     * @param \Sabre\UpdateReservation\StructType\GuaranteeType $guarantee
     * @param \Sabre\UpdateReservation\StructType\CommissionType $commission
     * @param \Sabre\UpdateReservation\StructType\Discounts $discounts
     * @param float $amountBeforeTax
     * @param float $amountAfterTax
     * @param string $currencyCode
     * @param bool $appliedDiscount
     * @param float $nightlyRate
     * @param bool $additionalFeesExcludedIndicator
     * @param float $supplierChangedAmount
     * @param bool $changed
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Rates $rates = null, \Sabre\UpdateReservation\StructType\RatePlanDescription $ratePlanDescription = null, \Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails = null, \Sabre\UpdateReservation\StructType\FeesType $fees = null, \Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes = null, \Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties = null, \Sabre\UpdateReservation\StructType\GuaranteeType $guarantee = null, \Sabre\UpdateReservation\StructType\CommissionType $commission = null, \Sabre\UpdateReservation\StructType\Discounts $discounts = null, $amountBeforeTax = null, $amountAfterTax = null, $currencyCode = null, $appliedDiscount = null, $nightlyRate = null, $additionalFeesExcludedIndicator = null, $supplierChangedAmount = null, $changed = null)
    {
        $this
            ->setRates($rates)
            ->setRatePlanDescription($ratePlanDescription)
            ->setAdditionalDetails($additionalDetails)
            ->setFees($fees)
            ->setTaxes($taxes)
            ->setCancelPenalties($cancelPenalties)
            ->setGuarantee($guarantee)
            ->setCommission($commission)
            ->setDiscounts($discounts)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax)
            ->setCurrencyCode($currencyCode)
            ->setAppliedDiscount($appliedDiscount)
            ->setNightlyRate($nightlyRate)
            ->setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator)
            ->setSupplierChangedAmount($supplierChangedAmount)
            ->setChanged($changed);
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
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setRates(\Sabre\UpdateReservation\StructType\Rates $rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get RatePlanDescription value
     * @return \Sabre\UpdateReservation\StructType\RatePlanDescription|null
     */
    public function getRatePlanDescription()
    {
        return $this->RatePlanDescription;
    }
    /**
     * Set RatePlanDescription value
     * @param \Sabre\UpdateReservation\StructType\RatePlanDescription $ratePlanDescription
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setRatePlanDescription(\Sabre\UpdateReservation\StructType\RatePlanDescription $ratePlanDescription = null)
    {
        $this->RatePlanDescription = $ratePlanDescription;
        return $this;
    }
    /**
     * Get AdditionalDetails value
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailsType|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @param \Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setAdditionalDetails(\Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails = null)
    {
        $this->AdditionalDetails = $additionalDetails;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Sabre\UpdateReservation\StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Sabre\UpdateReservation\StructType\FeesType $fees
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setFees(\Sabre\UpdateReservation\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return \Sabre\UpdateReservation\StructType\CancelPenalties|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param \Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setCancelPenalties(\Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Sabre\UpdateReservation\StructType\GuaranteeType $guarantee
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setGuarantee(\Sabre\UpdateReservation\StructType\GuaranteeType $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Sabre\UpdateReservation\StructType\CommissionType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Sabre\UpdateReservation\StructType\CommissionType $commission
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setCommission(\Sabre\UpdateReservation\StructType\CommissionType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get Discounts value
     * @return \Sabre\UpdateReservation\StructType\Discounts|null
     */
    public function getDiscounts()
    {
        return $this->Discounts;
    }
    /**
     * Set Discounts value
     * @param \Sabre\UpdateReservation\StructType\Discounts $discounts
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setDiscounts(\Sabre\UpdateReservation\StructType\Discounts $discounts = null)
    {
        $this->Discounts = $discounts;
        return $this;
    }
    /**
     * Get AmountBeforeTax value
     * @return float|null
     */
    public function getAmountBeforeTax()
    {
        return $this->AmountBeforeTax;
    }
    /**
     * Set AmountBeforeTax value
     * @param float $amountBeforeTax
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setAmountBeforeTax($amountBeforeTax = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amountBeforeTax) && strlen(substr($amountBeforeTax, strpos($amountBeforeTax, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amountBeforeTax, strpos($amountBeforeTax, '.') + 1))), __LINE__);
        }
        $this->AmountBeforeTax = $amountBeforeTax;
        return $this;
    }
    /**
     * Get AmountAfterTax value
     * @return float|null
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param float $amountAfterTax
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setAmountAfterTax($amountAfterTax = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amountAfterTax) && strlen(substr($amountAfterTax, strpos($amountAfterTax, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amountAfterTax, strpos($amountAfterTax, '.') + 1))), __LINE__);
        }
        $this->AmountAfterTax = $amountAfterTax;
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
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) > 3) || (is_array($currencyCode) && count($currencyCode) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($currencyCode) ? strlen($currencyCode) : count($currencyCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get AppliedDiscount value
     * @return bool|null
     */
    public function getAppliedDiscount()
    {
        return $this->AppliedDiscount;
    }
    /**
     * Set AppliedDiscount value
     * @param bool $appliedDiscount
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setAppliedDiscount($appliedDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($appliedDiscount) && !is_bool($appliedDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($appliedDiscount)), __LINE__);
        }
        $this->AppliedDiscount = $appliedDiscount;
        return $this;
    }
    /**
     * Get NightlyRate value
     * @return float|null
     */
    public function getNightlyRate()
    {
        return $this->NightlyRate;
    }
    /**
     * Set NightlyRate value
     * @param float $nightlyRate
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setNightlyRate($nightlyRate = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($nightlyRate) && strlen(substr($nightlyRate, strpos($nightlyRate, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($nightlyRate, strpos($nightlyRate, '.') + 1))), __LINE__);
        }
        $this->NightlyRate = $nightlyRate;
        return $this;
    }
    /**
     * Get AdditionalFeesExcludedIndicator value
     * @return bool|null
     */
    public function getAdditionalFeesExcludedIndicator()
    {
        return $this->AdditionalFeesExcludedIndicator;
    }
    /**
     * Set AdditionalFeesExcludedIndicator value
     * @param bool $additionalFeesExcludedIndicator
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($additionalFeesExcludedIndicator) && !is_bool($additionalFeesExcludedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($additionalFeesExcludedIndicator)), __LINE__);
        }
        $this->AdditionalFeesExcludedIndicator = $additionalFeesExcludedIndicator;
        return $this;
    }
    /**
     * Get SupplierChangedAmount value
     * @return float|null
     */
    public function getSupplierChangedAmount()
    {
        return $this->SupplierChangedAmount;
    }
    /**
     * Set SupplierChangedAmount value
     * @param float $supplierChangedAmount
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setSupplierChangedAmount($supplierChangedAmount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($supplierChangedAmount) && strlen(substr($supplierChangedAmount, strpos($supplierChangedAmount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($supplierChangedAmount, strpos($supplierChangedAmount, '.') + 1))), __LINE__);
        }
        $this->SupplierChangedAmount = $supplierChangedAmount;
        return $this;
    }
    /**
     * Get Changed value
     * @return bool|null
     */
    public function getChanged()
    {
        return $this->Changed;
    }
    /**
     * Set Changed value
     * @param bool $changed
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public function setChanged($changed = null)
    {
        // validation for constraint: boolean
        if (!is_null($changed) && !is_bool($changed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changed)), __LINE__);
        }
        $this->Changed = $changed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RateInfoType
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
