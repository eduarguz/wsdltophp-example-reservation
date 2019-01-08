<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversionRate StructType
 * Meta informations extracted from the WSDL
 * - documentation: "Conversion rate" is used to return currency and conversion rate for payment in foreign currency
 * @subpackage Structs
 */
class ConversionRate extends AbstractStructBase
{
    /**
     * The value
     * @var float
     */
    public $value;
    /**
     * The currency
     * @var string
     */
    public $currency;
    /**
     * Constructor method for ConversionRate
     * @uses ConversionRate::setValue()
     * @uses ConversionRate::setCurrency()
     * @param float $value
     * @param string $currency
     */
    public function __construct($value = null, $currency = null)
    {
        $this
            ->setValue($value)
            ->setCurrency($currency);
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Sabre\UpdateReservation\StructType\ConversionRate
     */
    public function setValue($value = null)
    {
        $this->value = $value;
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
     * @return \Sabre\UpdateReservation\StructType\ConversionRate
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ConversionRate
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
