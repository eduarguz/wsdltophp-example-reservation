<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Penalty StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies penalty charges as either a currency amount or a percentage of the fare. | The penalty charge defined a fee in terms of its amount, currency and decimal laces.
 * @subpackage Structs
 */
class Penalty extends AbstractStructBase
{
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $type;
    /**
     * The exclude
     * Meta informations extracted from the WSDL
     * - documentation: Indicate that specific penalty type should be excluded from the response.
     * - use: optional
     * @var bool
     */
    public $exclude;
    /**
     * The application
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $application;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: Used for amounts, max 3 decimals
     * - fractionDigits: 3
     * @var float
     */
    public $amount;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: A currency code (e.g. USD, EUR, PLN) | Used for Currency Codes | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $currencyCode;
    /**
     * The decimalPlaces
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".
     * @var int
     */
    public $decimalPlaces;
    /**
     * Constructor method for Penalty
     * @uses Penalty::setType()
     * @uses Penalty::setExclude()
     * @uses Penalty::setApplication()
     * @uses Penalty::setAmount()
     * @uses Penalty::setCurrencyCode()
     * @uses Penalty::setDecimalPlaces()
     * @param string $type
     * @param bool $exclude
     * @param string $application
     * @param float $amount
     * @param string $currencyCode
     * @param int $decimalPlaces
     */
    public function __construct($type = null, $exclude = null, $application = null, $amount = null, $currencyCode = null, $decimalPlaces = null)
    {
        $this
            ->setType($type)
            ->setExclude($exclude)
            ->setApplication($application)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setDecimalPlaces($decimalPlaces);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Penalty
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get exclude value
     * @return bool|null
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    /**
     * Set exclude value
     * @param bool $exclude
     * @return \Sabre\UpdateReservation\StructType\Penalty
     */
    public function setExclude($exclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude) && !is_bool($exclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclude)), __LINE__);
        }
        $this->exclude = $exclude;
        return $this;
    }
    /**
     * Get application value
     * @return string|null
     */
    public function getApplication()
    {
        return $this->application;
    }
    /**
     * Set application value
     * @param string $application
     * @return \Sabre\UpdateReservation\StructType\Penalty
     */
    public function setApplication($application = null)
    {
        // validation for constraint: string
        if (!is_null($application) && !is_string($application)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($application)), __LINE__);
        }
        $this->application = $application;
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\Penalty
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 3 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\Penalty
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
     * Get decimalPlaces value
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }
    /**
     * Set decimalPlaces value
     * @param int $decimalPlaces
     * @return \Sabre\UpdateReservation\StructType\Penalty
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($decimalPlaces) && !is_numeric($decimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($decimalPlaces)), __LINE__);
        }
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Penalty
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
