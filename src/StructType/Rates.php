<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rates StructType
 * Meta informations extracted from the WSDL
 * - documentation: Cost of visa
 * @subpackage Structs
 */
class Rates extends AbstractStructBase
{
    /**
     * The Rate
     * @var \Sabre\UpdateReservation\StructType\Rate
     */
    public $Rate;
    /**
     * The FOP
     * Meta informations extracted from the WSDL
     * - documentation: Form of payments
     * - minOccurs: 0
     * @var string
     */
    public $FOP;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: Amount to pay
     * @var float
     */
    public $amount;
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - documentation: Currency
     * @var string
     */
    public $currency;
    /**
     * Constructor method for Rates
     * @uses Rates::setRate()
     * @uses Rates::setFOP()
     * @uses Rates::setAmount()
     * @uses Rates::setCurrency()
     * @param \Sabre\UpdateReservation\StructType\Rate $rate
     * @param string $fOP
     * @param float $amount
     * @param string $currency
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Rate $rate = null, $fOP = null, $amount = null, $currency = null)
    {
        $this
            ->setRate($rate)
            ->setFOP($fOP)
            ->setAmount($amount)
            ->setCurrency($currency);
    }
    /**
     * Get Rate value
     * @return \Sabre\UpdateReservation\StructType\Rate|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param \Sabre\UpdateReservation\StructType\Rate $rate
     * @return \Sabre\UpdateReservation\StructType\Rates
     */
    public function setRate(\Sabre\UpdateReservation\StructType\Rate $rate = null)
    {
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Get FOP value
     * @return string|null
     */
    public function getFOP()
    {
        return $this->FOP;
    }
    /**
     * Set FOP value
     * @param string $fOP
     * @return \Sabre\UpdateReservation\StructType\Rates
     */
    public function setFOP($fOP = null)
    {
        // validation for constraint: string
        if (!is_null($fOP) && !is_string($fOP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fOP)), __LINE__);
        }
        $this->FOP = $fOP;
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
     * @return \Sabre\UpdateReservation\StructType\Rates
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;
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
     * @return \Sabre\UpdateReservation\StructType\Rates
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
     * @return \Sabre\UpdateReservation\StructType\Rates
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
