<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountPercent StructType
 * @subpackage Structs
 */
class AmountPercent extends AbstractStructBase
{
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
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The FeesInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $FeesInclusive;
    /**
     * The NmbrOfNights
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NmbrOfNights;
    /**
     * The BasisType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BasisType;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Specifies a percentage, max 2 decimals.
     * - fractionDigits: 2
     * @var float
     */
    public $Percent;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $Amount;
    /**
     * The ApplyAs
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ApplyAs;
    /**
     * Constructor method for AmountPercent
     * @uses AmountPercent::setCurrencyCode()
     * @uses AmountPercent::setTaxInclusive()
     * @uses AmountPercent::setFeesInclusive()
     * @uses AmountPercent::setNmbrOfNights()
     * @uses AmountPercent::setBasisType()
     * @uses AmountPercent::setPercent()
     * @uses AmountPercent::setAmount()
     * @uses AmountPercent::setApplyAs()
     * @param string $currencyCode
     * @param bool $taxInclusive
     * @param bool $feesInclusive
     * @param int $nmbrOfNights
     * @param string $basisType
     * @param float $percent
     * @param float $amount
     * @param string $applyAs
     */
    public function __construct($currencyCode = null, $taxInclusive = null, $feesInclusive = null, $nmbrOfNights = null, $basisType = null, $percent = null, $amount = null, $applyAs = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setTaxInclusive($taxInclusive)
            ->setFeesInclusive($feesInclusive)
            ->setNmbrOfNights($nmbrOfNights)
            ->setBasisType($basisType)
            ->setPercent($percent)
            ->setAmount($amount)
            ->setApplyAs($applyAs);
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
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
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
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusive)), __LINE__);
        }
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Get FeesInclusive value
     * @return bool|null
     */
    public function getFeesInclusive()
    {
        return $this->FeesInclusive;
    }
    /**
     * Set FeesInclusive value
     * @param bool $feesInclusive
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setFeesInclusive($feesInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($feesInclusive) && !is_bool($feesInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($feesInclusive)), __LINE__);
        }
        $this->FeesInclusive = $feesInclusive;
        return $this;
    }
    /**
     * Get NmbrOfNights value
     * @return int|null
     */
    public function getNmbrOfNights()
    {
        return $this->NmbrOfNights;
    }
    /**
     * Set NmbrOfNights value
     * @param int $nmbrOfNights
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setNmbrOfNights($nmbrOfNights = null)
    {
        // validation for constraint: int
        if (!is_null($nmbrOfNights) && !is_numeric($nmbrOfNights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nmbrOfNights)), __LINE__);
        }
        $this->NmbrOfNights = $nmbrOfNights;
        return $this;
    }
    /**
     * Get BasisType value
     * @return string|null
     */
    public function getBasisType()
    {
        return $this->BasisType;
    }
    /**
     * Set BasisType value
     * @param string $basisType
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setBasisType($basisType = null)
    {
        // validation for constraint: string
        if (!is_null($basisType) && !is_string($basisType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($basisType)), __LINE__);
        }
        $this->BasisType = $basisType;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($percent) && strlen(substr($percent, strpos($percent, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($percent, strpos($percent, '.') + 1))), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ApplyAs value
     * @return string|null
     */
    public function getApplyAs()
    {
        return $this->ApplyAs;
    }
    /**
     * Set ApplyAs value
     * @param string $applyAs
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public function setApplyAs($applyAs = null)
    {
        // validation for constraint: string
        if (!is_null($applyAs) && !is_string($applyAs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applyAs)), __LINE__);
        }
        $this->ApplyAs = $applyAs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AmountPercent
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
