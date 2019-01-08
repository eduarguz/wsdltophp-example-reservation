<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExcessRate StructType
 * @subpackage Structs
 */
class ExcessRate extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: "amount" is used to return excess rate amount.
     * - use: optional
     * @var string
     */
    public $amount;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: "currencyCode" is used to return the currency code associated with excess rate charges.
     * - use: optional
     * @var string
     */
    public $currencyCode;
    /**
     * Constructor method for ExcessRate
     * @uses ExcessRate::setAmount()
     * @uses ExcessRate::setCurrencyCode()
     * @param string $amount
     * @param string $currencyCode
     */
    public function __construct($amount = null, $currencyCode = null)
    {
        $this
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\ExcessRate
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get currencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\ExcessRate
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ExcessRate
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
