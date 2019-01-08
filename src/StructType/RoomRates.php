<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRates StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reservation rate(s).
 * @subpackage Structs
 */
class RoomRates extends AbstractStructBase
{
    /**
     * The AmountBeforeTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AmountBeforeTax;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Override
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Override;
    /**
     * Constructor method for RoomRates
     * @uses RoomRates::setAmountBeforeTax()
     * @uses RoomRates::setCurrencyCode()
     * @uses RoomRates::setOverride()
     * @param string $amountBeforeTax
     * @param string $currencyCode
     * @param bool $override
     */
    public function __construct($amountBeforeTax = null, $currencyCode = null, $override = null)
    {
        $this
            ->setAmountBeforeTax($amountBeforeTax)
            ->setCurrencyCode($currencyCode)
            ->setOverride($override);
    }
    /**
     * Get AmountBeforeTax value
     * @return string|null
     */
    public function getAmountBeforeTax()
    {
        return $this->AmountBeforeTax;
    }
    /**
     * Set AmountBeforeTax value
     * @param string $amountBeforeTax
     * @return \Sabre\UpdateReservation\StructType\RoomRates
     */
    public function setAmountBeforeTax($amountBeforeTax = null)
    {
        // validation for constraint: string
        if (!is_null($amountBeforeTax) && !is_string($amountBeforeTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountBeforeTax)), __LINE__);
        }
        $this->AmountBeforeTax = $amountBeforeTax;
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
     * @return \Sabre\UpdateReservation\StructType\RoomRates
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get Override value
     * @return bool|null
     */
    public function getOverride()
    {
        return $this->Override;
    }
    /**
     * Set Override value
     * @param bool $override
     * @return \Sabre\UpdateReservation\StructType\RoomRates
     */
    public function setOverride($override = null)
    {
        // validation for constraint: boolean
        if (!is_null($override) && !is_bool($override)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($override)), __LINE__);
        }
        $this->Override = $override;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RoomRates
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
