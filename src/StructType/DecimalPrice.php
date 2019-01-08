<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DecimalPrice StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides a monetary amount and the currency code to reflect the currency in which this amount is expressed.
 * @subpackage Structs
 */
class DecimalPrice extends AbstractStructBase
{
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: Used for Currency Codes | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $currencyCode;
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for DecimalPrice
     * @uses DecimalPrice::setCurrencyCode()
     * @uses DecimalPrice::set_()
     * @param string $currencyCode
     * @param float $_
     */
    public function __construct($currencyCode = null, $_ = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->set_($_);
    }
    /**
     * Get currencyCode value
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currencyCode) && !preg_match('/[a-zA-Z]{3}/', $currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($currencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice
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
