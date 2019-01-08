<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * @subpackage Structs
 */
class Tax extends AccountingTransactionAmountWithRule
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $code;
    /**
     * The TaxDescription
     * @var \Sabre\UpdateReservation\StructType\TaxDescription
     */
    public $TaxDescription;
    /**
     * The Code
     * @var int
     */
    public $Code;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * Constructor method for Tax
     * @uses Tax::setCode()
     * @uses Tax::setTaxDescription()
     * @uses Tax::setCode_1()
     * @uses Tax::setAmount()
     * @uses Tax::setCurrencyCode()
     * @uses Tax::set_()
     * @uses Tax::setId()
     * @param string $code
     * @param \Sabre\UpdateReservation\StructType\TaxDescription $taxDescription
     * @param int $code
     * @param float $amount
     * @param string $currencyCode
     * @param string $_
     * @param string $id
     */
    public function __construct($code = null, \Sabre\UpdateReservation\StructType\TaxDescription $taxDescription = null, $code_1 = null, $amount = null, $currencyCode = null, $_ = null, $id = null)
    {
        $this
            ->setCode($code)
            ->setTaxDescription($taxDescription)
            ->setCode_1($code_1)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->set_($_)
            ->setId($id);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get TaxDescription value
     * @return \Sabre\UpdateReservation\StructType\TaxDescription|null
     */
    public function getTaxDescription()
    {
        return $this->TaxDescription;
    }
    /**
     * Set TaxDescription value
     * @param \Sabre\UpdateReservation\StructType\TaxDescription $taxDescription
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function setTaxDescription(\Sabre\UpdateReservation\StructType\TaxDescription $taxDescription = null)
    {
        $this->TaxDescription = $taxDescription;
        return $this;
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode_1()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function setCode_1($code_1 = null)
    {
        // validation for constraint: int
        if (!is_null($code_1) && !is_numeric($code_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code_1)), __LINE__);
        }
        $this->Code = $code_1;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
        }
        $this->Amount = $amount;
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
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) > 3) || (is_array($currencyCode) && count($currencyCode) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($currencyCode) ? strlen($currencyCode) : count($currencyCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\Tax
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Tax
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
