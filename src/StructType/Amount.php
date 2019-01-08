<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Amount as defined in RULE for monetary discounts/markups | Amount as defined in RULE for monetary discounts/markups
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The currency
     * @var string
     */
    public $currency;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - default: USD
     * @var string
     */
    public $currencyCode;
    /**
     * Constructor method for Amount
     * @uses Amount::set_()
     * @uses Amount::setCurrency()
     * @uses Amount::setCurrencyCode()
     * @param float $_
     * @param string $currency
     * @param string $currencyCode
     */
    public function __construct($_ = null, $currency = null, $currencyCode = 'USD')
    {
        $this
            ->set_($_)
            ->setCurrency($currency)
            ->setCurrencyCode($currencyCode);
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
     * @return \Sabre\UpdateReservation\StructType\Amount
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Sabre\UpdateReservation\StructType\Amount
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
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
     * @uses \Sabre\UpdateReservation\EnumType\CurrencyCodeList::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\CurrencyCodeList::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\Amount
     */
    public function setCurrencyCode($currencyCode = 'USD')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\CurrencyCodeList::valueIsValid($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $currencyCode, implode(', ', \Sabre\UpdateReservation\EnumType\CurrencyCodeList::getValidValues())), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\Amount
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
