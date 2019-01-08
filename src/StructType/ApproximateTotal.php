<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApproximateTotal StructType
 * @subpackage Structs
 */
class ApproximateTotal extends AbstractStructBase
{
    /**
     * The AmountAndCurrency
     * @var string
     */
    public $AmountAndCurrency;
    /**
     * Constructor method for ApproximateTotal
     * @uses ApproximateTotal::setAmountAndCurrency()
     * @param string $amountAndCurrency
     */
    public function __construct($amountAndCurrency = null)
    {
        $this
            ->setAmountAndCurrency($amountAndCurrency);
    }
    /**
     * Get AmountAndCurrency value
     * @return string|null
     */
    public function getAmountAndCurrency()
    {
        return $this->AmountAndCurrency;
    }
    /**
     * Set AmountAndCurrency value
     * @param string $amountAndCurrency
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotal
     */
    public function setAmountAndCurrency($amountAndCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($amountAndCurrency) && !is_string($amountAndCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountAndCurrency)), __LINE__);
        }
        $this->AmountAndCurrency = $amountAndCurrency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotal
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
