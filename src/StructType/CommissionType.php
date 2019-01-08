<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used for explaining commission on response
 * @subpackage Structs
 */
class CommissionType extends AbstractStructBase
{
    /**
     * The CommissionDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CommissionDescription
     */
    public $CommissionDescription;
    /**
     * The CommissionIndicator
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $CommissionIndicator;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Specifies a percentage, max 2 decimals.
     * - fractionDigits: 2
     * @var float
     */
    public $Percent;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - use: optional
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
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type will be None Or Variable
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PercentageType
     */
    public $Percentage;
    /**
     * Constructor method for CommissionType
     * @uses CommissionType::setCommissionDescription()
     * @uses CommissionType::setCommissionIndicator()
     * @uses CommissionType::setPercent()
     * @uses CommissionType::setAmount()
     * @uses CommissionType::setCurrencyCode()
     * @uses CommissionType::setType()
     * @uses CommissionType::setPercentage()
     * @param \Sabre\UpdateReservation\StructType\CommissionDescription $commissionDescription
     * @param bool $commissionIndicator
     * @param float $percent
     * @param float $amount
     * @param string $currencyCode
     * @param string $type
     * @param \Sabre\UpdateReservation\StructType\PercentageType $percentage
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CommissionDescription $commissionDescription = null, $commissionIndicator = null, $percent = null, $amount = null, $currencyCode = null, $type = null, \Sabre\UpdateReservation\StructType\PercentageType $percentage = null)
    {
        $this
            ->setCommissionDescription($commissionDescription)
            ->setCommissionIndicator($commissionIndicator)
            ->setPercent($percent)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setType($type)
            ->setPercentage($percentage);
    }
    /**
     * Get CommissionDescription value
     * @return \Sabre\UpdateReservation\StructType\CommissionDescription|null
     */
    public function getCommissionDescription()
    {
        return $this->CommissionDescription;
    }
    /**
     * Set CommissionDescription value
     * @param \Sabre\UpdateReservation\StructType\CommissionDescription $commissionDescription
     * @return \Sabre\UpdateReservation\StructType\CommissionType
     */
    public function setCommissionDescription(\Sabre\UpdateReservation\StructType\CommissionDescription $commissionDescription = null)
    {
        $this->CommissionDescription = $commissionDescription;
        return $this;
    }
    /**
     * Get CommissionIndicator value
     * @return bool|null
     */
    public function getCommissionIndicator()
    {
        return $this->CommissionIndicator;
    }
    /**
     * Set CommissionIndicator value
     * @param bool $commissionIndicator
     * @return \Sabre\UpdateReservation\StructType\CommissionType
     */
    public function setCommissionIndicator($commissionIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($commissionIndicator) && !is_bool($commissionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($commissionIndicator)), __LINE__);
        }
        $this->CommissionIndicator = $commissionIndicator;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Sabre\UpdateReservation\StructType\CommissionType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($percent) && strlen(substr($percent, strpos($percent, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($percent, strpos($percent, '.') + 1))), __LINE__);
        }
        $this->Percent = $percent;
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
     * @return \Sabre\UpdateReservation\StructType\CommissionType
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
     * @return \Sabre\UpdateReservation\StructType\CommissionType
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\CommissionType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Percentage value
     * @return \Sabre\UpdateReservation\StructType\PercentageType|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param \Sabre\UpdateReservation\StructType\PercentageType $percentage
     * @return \Sabre\UpdateReservation\StructType\CommissionType
     */
    public function setPercentage(\Sabre\UpdateReservation\StructType\PercentageType $percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CommissionType
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
