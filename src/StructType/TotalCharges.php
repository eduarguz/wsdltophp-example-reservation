<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalCharges StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes Total and various charge for the trip
 * @subpackage Structs
 */
class TotalCharges extends AbstractStructBase
{
    /**
     * The AmountAfterTax
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $AmountAfterTax;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
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
     * The Changed
     * Meta informations extracted from the WSDL
     * - documentation: Denotes that total is changed since shopping
     * - use: optional
     * @var bool
     */
    public $Changed;
    /**
     * The BalanceAmount
     * Meta informations extracted from the WSDL
     * - documentation: Some aggregators return a balance amount that needs to be paid after cancellation | Used for currency Amount
     * - use: optional
     * - fractionDigits: 2
     * @var float
     */
    public $BalanceAmount;
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
     * Constructor method for TotalCharges
     * @uses TotalCharges::setAmountAfterTax()
     * @uses TotalCharges::setCurrencyCode()
     * @uses TotalCharges::setAmountBeforeTax()
     * @uses TotalCharges::setChanged()
     * @uses TotalCharges::setBalanceAmount()
     * @uses TotalCharges::setSupplierChangedAmount()
     * @param float $amountAfterTax
     * @param string $currencyCode
     * @param float $amountBeforeTax
     * @param bool $changed
     * @param float $balanceAmount
     * @param float $supplierChangedAmount
     */
    public function __construct($amountAfterTax = null, $currencyCode = null, $amountBeforeTax = null, $changed = null, $balanceAmount = null, $supplierChangedAmount = null)
    {
        $this
            ->setAmountAfterTax($amountAfterTax)
            ->setCurrencyCode($currencyCode)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setChanged($changed)
            ->setBalanceAmount($balanceAmount)
            ->setSupplierChangedAmount($supplierChangedAmount);
    }
    /**
     * Get AmountAfterTax value
     * @return float
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param float $amountAfterTax
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
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
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
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
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
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
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
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
     * Get BalanceAmount value
     * @return float|null
     */
    public function getBalanceAmount()
    {
        return $this->BalanceAmount;
    }
    /**
     * Set BalanceAmount value
     * @param float $balanceAmount
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
     */
    public function setBalanceAmount($balanceAmount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($balanceAmount) && strlen(substr($balanceAmount, strpos($balanceAmount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($balanceAmount, strpos($balanceAmount, '.') + 1))), __LINE__);
        }
        $this->BalanceAmount = $balanceAmount;
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
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TotalCharges
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
