<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of Hotel Fees
 * @subpackage Structs
 */
class FeesType extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingFeeType[]
     */
    public $Fee;
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
     * Constructor method for FeesType
     * @uses FeesType::setFee()
     * @uses FeesType::setAmount()
     * @uses FeesType::setCurrencyCode()
     * @param \Sabre\UpdateReservation\StructType\LodgingFeeType[] $fee
     * @param float $amount
     * @param string $currencyCode
     */
    public function __construct(array $fee = array(), $amount = null, $currencyCode = null)
    {
        $this
            ->setFee($fee)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get Fee value
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LodgingFeeType[] $fee
     * @return \Sabre\UpdateReservation\StructType\FeesType
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $feesTypeFeeItem) {
            // validation for constraint: itemType
            if (!$feesTypeFeeItem instanceof \Sabre\UpdateReservation\StructType\LodgingFeeType) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \Sabre\UpdateReservation\StructType\LodgingFeeType, "%s" given', is_object($feesTypeFeeItem) ? get_class($feesTypeFeeItem) : gettype($feesTypeFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LodgingFeeType $item
     * @return \Sabre\UpdateReservation\StructType\FeesType
     */
    public function addToFee(\Sabre\UpdateReservation\StructType\LodgingFeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\LodgingFeeType) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \Sabre\UpdateReservation\StructType\LodgingFeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\FeesType
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
     * @return \Sabre\UpdateReservation\StructType\FeesType
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
     * @return \Sabre\UpdateReservation\StructType\FeesType
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
