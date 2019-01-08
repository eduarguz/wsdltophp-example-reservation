<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingTaxesType StructType
 * @subpackage Structs
 */
class LodgingTaxesType extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Tax[]
     */
    public $Tax;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: OpenTravel Code List Fee Tax Type (FIT) | Positive Integer to denote OTA Codes
     * - use: optional
     * - minInclusive: 1
     * @var int
     */
    public $Code;
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
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
    /**
     * Constructor method for LodgingTaxesType
     * @uses LodgingTaxesType::setTax()
     * @uses LodgingTaxesType::setCode()
     * @uses LodgingTaxesType::setAmount()
     * @uses LodgingTaxesType::setCurrencyCode()
     * @param \Sabre\UpdateReservation\StructType\Tax[] $tax
     * @param int $code
     * @param float $amount
     * @param string $currencyCode
     */
    public function __construct(array $tax = array(), $code = null, $amount = null, $currencyCode = null)
    {
        $this
            ->setTax($tax)
            ->setCode($code)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get Tax value
     * @return \Sabre\UpdateReservation\StructType\Tax[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Tax[] $tax
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $lodgingTaxesTypeTaxItem) {
            // validation for constraint: itemType
            if (!$lodgingTaxesTypeTaxItem instanceof \Sabre\UpdateReservation\StructType\Tax) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\Tax, "%s" given', is_object($lodgingTaxesTypeTaxItem) ? get_class($lodgingTaxesTypeTaxItem) : gettype($lodgingTaxesTypeTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Tax $item
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType
     */
    public function addToTax(\Sabre\UpdateReservation\StructType\Tax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Tax) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\Tax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType
     */
    public function setCode($code = null)
    {
        // validation for constraint: minInclusive
        if ($code < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $code), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType
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
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType
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
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType
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
