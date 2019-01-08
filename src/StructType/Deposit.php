<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Deposit StructType
 * Meta informations extracted from the WSDL
 * - documentation: Deposit will be sent
 * @subpackage Structs
 */
class Deposit extends AbstractStructBase
{
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - documentation: Deposit due date
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
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Currency code
     * @var string
     */
    public $currencyCode;
    /**
     * The information
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $information;
    /**
     * Constructor method for Deposit
     * @uses Deposit::setDueDate()
     * @uses Deposit::setAmount()
     * @uses Deposit::setCurrencyCode()
     * @uses Deposit::setInformation()
     * @param string $dueDate
     * @param float $amount
     * @param string $currencyCode
     * @param string $information
     */
    public function __construct($dueDate = null, $amount = null, $currencyCode = null, $information = null)
    {
        $this
            ->setDueDate($dueDate)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setInformation($information);
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
     * @return \Sabre\UpdateReservation\StructType\Deposit
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
     * @return \Sabre\UpdateReservation\StructType\Deposit
     */
    public function setAmount($amount = null)
    {
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
     * @return \Sabre\UpdateReservation\StructType\Deposit
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
     * Get information value
     * @return string|null
     */
    public function getInformation()
    {
        return $this->information;
    }
    /**
     * Set information value
     * @param string $information
     * @return \Sabre\UpdateReservation\StructType\Deposit
     */
    public function setInformation($information = null)
    {
        // validation for constraint: string
        if (!is_null($information) && !is_string($information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($information)), __LINE__);
        }
        $this->information = $information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Deposit
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
