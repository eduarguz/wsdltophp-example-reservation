<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyFeesType StructType
 * @subpackage Structs
 */
class AgencyFeesType extends AbstractStructBase
{
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $PassengerType;
    /**
     * The NumberOfPassengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPassengers;
    /**
     * The Date
     * @var string
     */
    public $Date;
    /**
     * The FeeDescription
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $FeeDescription;
    /**
     * The RuleLineDescription
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $RuleLineDescription;
    /**
     * The RuleDetails
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $RuleDetails;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $Status;
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Tax;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for AgencyFeesType
     * @uses AgencyFeesType::setPassengerType()
     * @uses AgencyFeesType::setNumberOfPassengers()
     * @uses AgencyFeesType::setDate()
     * @uses AgencyFeesType::setFeeDescription()
     * @uses AgencyFeesType::setRuleLineDescription()
     * @uses AgencyFeesType::setRuleDetails()
     * @uses AgencyFeesType::setStatus()
     * @uses AgencyFeesType::setAmount()
     * @uses AgencyFeesType::setTax()
     * @uses AgencyFeesType::setCurrency()
     * @param string $passengerType
     * @param int $numberOfPassengers
     * @param string $date
     * @param string $feeDescription
     * @param string $ruleLineDescription
     * @param string $ruleDetails
     * @param string $status
     * @param float $amount
     * @param float $tax
     * @param string $currency
     */
    public function __construct($passengerType = null, $numberOfPassengers = null, $date = null, $feeDescription = null, $ruleLineDescription = null, $ruleDetails = null, $status = null, $amount = null, $tax = null, $currency = null)
    {
        $this
            ->setPassengerType($passengerType)
            ->setNumberOfPassengers($numberOfPassengers)
            ->setDate($date)
            ->setFeeDescription($feeDescription)
            ->setRuleLineDescription($ruleLineDescription)
            ->setRuleDetails($ruleDetails)
            ->setStatus($status)
            ->setAmount($amount)
            ->setTax($tax)
            ->setCurrency($currency);
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param string $passengerType
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($passengerType) && strlen($passengerType) < 1) || (is_array($passengerType) && count($passengerType) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerType)), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get NumberOfPassengers value
     * @return int|null
     */
    public function getNumberOfPassengers()
    {
        return $this->NumberOfPassengers;
    }
    /**
     * Set NumberOfPassengers value
     * @param int $numberOfPassengers
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setNumberOfPassengers($numberOfPassengers = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPassengers) && !is_numeric($numberOfPassengers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPassengers)), __LINE__);
        }
        $this->NumberOfPassengers = $numberOfPassengers;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get FeeDescription value
     * @return string|null
     */
    public function getFeeDescription()
    {
        return $this->FeeDescription;
    }
    /**
     * Set FeeDescription value
     * @param string $feeDescription
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setFeeDescription($feeDescription = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($feeDescription) && strlen($feeDescription) < 1) || (is_array($feeDescription) && count($feeDescription) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($feeDescription) && !is_string($feeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeDescription)), __LINE__);
        }
        $this->FeeDescription = $feeDescription;
        return $this;
    }
    /**
     * Get RuleLineDescription value
     * @return string|null
     */
    public function getRuleLineDescription()
    {
        return $this->RuleLineDescription;
    }
    /**
     * Set RuleLineDescription value
     * @param string $ruleLineDescription
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setRuleLineDescription($ruleLineDescription = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($ruleLineDescription) && strlen($ruleLineDescription) < 1) || (is_array($ruleLineDescription) && count($ruleLineDescription) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($ruleLineDescription) && !is_string($ruleLineDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleLineDescription)), __LINE__);
        }
        $this->RuleLineDescription = $ruleLineDescription;
        return $this;
    }
    /**
     * Get RuleDetails value
     * @return string|null
     */
    public function getRuleDetails()
    {
        return $this->RuleDetails;
    }
    /**
     * Set RuleDetails value
     * @param string $ruleDetails
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setRuleDetails($ruleDetails = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($ruleDetails) && strlen($ruleDetails) < 1) || (is_array($ruleDetails) && count($ruleDetails) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($ruleDetails) && !is_string($ruleDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleDetails)), __LINE__);
        }
        $this->RuleDetails = $ruleDetails;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($status) && strlen($status) < 1) || (is_array($status) && count($status) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
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
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Tax value
     * @return float|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param float $tax
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setTax($tax = null)
    {
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($currency) && strlen($currency) < 1) || (is_array($currency) && count($currency) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AgencyFeesType
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
