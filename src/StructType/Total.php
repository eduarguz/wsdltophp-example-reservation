<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Total StructType
 * Meta informations extracted from the WSDL
 * - documentation: Total payment after discount
 * @subpackage Structs
 */
class Total extends AbstractStructBase
{
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - documentation: Payment due date
     * - minOccurs: 0
     * @var string
     */
    public $DueDate;
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
     * Constructor method for Total
     * @uses Total::setDueDate()
     * @uses Total::setAmount()
     * @uses Total::setCurrency()
     * @param string $dueDate
     * @param float $amount
     * @param string $currency
     */
    public function __construct($dueDate = null, $amount = null, $currency = null)
    {
        $this
            ->setDueDate($dueDate)
            ->setAmount($amount)
            ->setCurrency($currency);
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Sabre\UpdateReservation\StructType\Total
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
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
     * @return \Sabre\UpdateReservation\StructType\Total
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
     * @return \Sabre\UpdateReservation\StructType\Total
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
     * @return \Sabre\UpdateReservation\StructType\Total
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
