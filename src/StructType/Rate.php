<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rate StructType
 * @subpackage Structs
 */
class Rate extends AbstractStructBase
{
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $EndDate;
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
     * Constructor method for Rate
     * @uses Rate::setStartDate()
     * @uses Rate::setEndDate()
     * @uses Rate::setAmountBeforeTax()
     * @uses Rate::setAmountAfterTax()
     * @uses Rate::setCurrencyCode()
     * @param string $startDate
     * @param string $endDate
     * @param float $amountBeforeTax
     * @param float $amountAfterTax
     * @param string $currencyCode
     */
    public function __construct($startDate = null, $endDate = null, $amountBeforeTax = null, $amountAfterTax = null, $currencyCode = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Sabre\UpdateReservation\StructType\Rate
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Sabre\UpdateReservation\StructType\Rate
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
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
     * @return \Sabre\UpdateReservation\StructType\Rate
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
     * @return \Sabre\UpdateReservation\StructType\Rate
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
     * @return \Sabre\UpdateReservation\StructType\Rate
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Rate
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
