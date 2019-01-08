<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareAdjustmentType StructType
 * @subpackage Structs
 */
class FareAdjustmentType extends AbstractStructBase
{
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: Adjustment Value, can be positive or negative, number or percentage
     * - use: required
     * @var string
     */
    public $value;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - documentation: Currency of Adjustment's Value | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $currency;
    /**
     * Constructor method for FareAdjustmentType
     * @uses FareAdjustmentType::setValue()
     * @uses FareAdjustmentType::setCurrency()
     * @param string $value
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
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Sabre\UpdateReservation\StructType\FareAdjustmentType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
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
     * @return \Sabre\UpdateReservation\StructType\FareAdjustmentType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currency) && !preg_match('/[a-zA-Z]{3}/', $currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($currency, true)), __LINE__);
        }
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
     * @return \Sabre\UpdateReservation\StructType\FareAdjustmentType
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
