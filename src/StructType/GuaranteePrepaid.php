<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteePrepaid StructType
 * @subpackage Structs
 */
class GuaranteePrepaid extends AbstractStructBase
{
    /**
     * The returnGuaranteedRates
     * @var bool
     */
    public $returnGuaranteedRates;
    /**
     * The returnPrepaidRates
     * @var bool
     */
    public $returnPrepaidRates;
    /**
     * The returnRegularRates
     * @var bool
     */
    public $returnRegularRates;
    /**
     * The CancellationRefundAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CancellationRefundAmount[]
     */
    public $CancellationRefundAmount;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: "amount" is used to return the guarantee amount.
     * - use: optional
     * @var string
     */
    public $amount;
    /**
     * The amountPercentage
     * Meta informations extracted from the WSDL
     * - documentation: "amountPercentage" is used to indicate whether the CancellationRefundAmount is an amount or a percentage.
     * - use: optional
     * @var string
     */
    public $amountPercentage;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: "currencyCode" is used to return the guarantee currency code.
     * - use: optional
     * @var string
     */
    public $currencyCode;
    /**
     * The typeOfGuarantee
     * Meta informations extracted from the WSDL
     * - documentation: "typeOfGuarantee" is used to return the type of guarantee, i.e. guarantee or a prepaid.
     * - use: optional
     * @var string
     */
    public $typeOfGuarantee;
    /**
     * Constructor method for GuaranteePrepaid
     * @uses GuaranteePrepaid::setReturnGuaranteedRates()
     * @uses GuaranteePrepaid::setReturnPrepaidRates()
     * @uses GuaranteePrepaid::setReturnRegularRates()
     * @uses GuaranteePrepaid::setCancellationRefundAmount()
     * @uses GuaranteePrepaid::setAmount()
     * @uses GuaranteePrepaid::setAmountPercentage()
     * @uses GuaranteePrepaid::setCurrencyCode()
     * @uses GuaranteePrepaid::setTypeOfGuarantee()
     * @param bool $returnGuaranteedRates
     * @param bool $returnPrepaidRates
     * @param bool $returnRegularRates
     * @param \Sabre\UpdateReservation\StructType\CancellationRefundAmount[] $cancellationRefundAmount
     * @param string $amount
     * @param string $amountPercentage
     * @param string $currencyCode
     * @param string $typeOfGuarantee
     */
    public function __construct($returnGuaranteedRates = null, $returnPrepaidRates = null, $returnRegularRates = null, array $cancellationRefundAmount = array(), $amount = null, $amountPercentage = null, $currencyCode = null, $typeOfGuarantee = null)
    {
        $this
            ->setReturnGuaranteedRates($returnGuaranteedRates)
            ->setReturnPrepaidRates($returnPrepaidRates)
            ->setReturnRegularRates($returnRegularRates)
            ->setCancellationRefundAmount($cancellationRefundAmount)
            ->setAmount($amount)
            ->setAmountPercentage($amountPercentage)
            ->setCurrencyCode($currencyCode)
            ->setTypeOfGuarantee($typeOfGuarantee);
    }
    /**
     * Get returnGuaranteedRates value
     * @return bool|null
     */
    public function getReturnGuaranteedRates()
    {
        return $this->returnGuaranteedRates;
    }
    /**
     * Set returnGuaranteedRates value
     * @param bool $returnGuaranteedRates
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setReturnGuaranteedRates($returnGuaranteedRates = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnGuaranteedRates) && !is_bool($returnGuaranteedRates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnGuaranteedRates)), __LINE__);
        }
        $this->returnGuaranteedRates = $returnGuaranteedRates;
        return $this;
    }
    /**
     * Get returnPrepaidRates value
     * @return bool|null
     */
    public function getReturnPrepaidRates()
    {
        return $this->returnPrepaidRates;
    }
    /**
     * Set returnPrepaidRates value
     * @param bool $returnPrepaidRates
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setReturnPrepaidRates($returnPrepaidRates = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnPrepaidRates) && !is_bool($returnPrepaidRates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnPrepaidRates)), __LINE__);
        }
        $this->returnPrepaidRates = $returnPrepaidRates;
        return $this;
    }
    /**
     * Get returnRegularRates value
     * @return bool|null
     */
    public function getReturnRegularRates()
    {
        return $this->returnRegularRates;
    }
    /**
     * Set returnRegularRates value
     * @param bool $returnRegularRates
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setReturnRegularRates($returnRegularRates = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnRegularRates) && !is_bool($returnRegularRates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnRegularRates)), __LINE__);
        }
        $this->returnRegularRates = $returnRegularRates;
        return $this;
    }
    /**
     * Get CancellationRefundAmount value
     * @return \Sabre\UpdateReservation\StructType\CancellationRefundAmount[]|null
     */
    public function getCancellationRefundAmount()
    {
        return $this->CancellationRefundAmount;
    }
    /**
     * Set CancellationRefundAmount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CancellationRefundAmount[] $cancellationRefundAmount
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setCancellationRefundAmount(array $cancellationRefundAmount = array())
    {
        foreach ($cancellationRefundAmount as $guaranteePrepaidCancellationRefundAmountItem) {
            // validation for constraint: itemType
            if (!$guaranteePrepaidCancellationRefundAmountItem instanceof \Sabre\UpdateReservation\StructType\CancellationRefundAmount) {
                throw new \InvalidArgumentException(sprintf('The CancellationRefundAmount property can only contain items of \Sabre\UpdateReservation\StructType\CancellationRefundAmount, "%s" given', is_object($guaranteePrepaidCancellationRefundAmountItem) ? get_class($guaranteePrepaidCancellationRefundAmountItem) : gettype($guaranteePrepaidCancellationRefundAmountItem)), __LINE__);
            }
        }
        $this->CancellationRefundAmount = $cancellationRefundAmount;
        return $this;
    }
    /**
     * Add item to CancellationRefundAmount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CancellationRefundAmount $item
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function addToCancellationRefundAmount(\Sabre\UpdateReservation\StructType\CancellationRefundAmount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CancellationRefundAmount) {
            throw new \InvalidArgumentException(sprintf('The CancellationRefundAmount property can only contain items of \Sabre\UpdateReservation\StructType\CancellationRefundAmount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancellationRefundAmount[] = $item;
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get amountPercentage value
     * @return string|null
     */
    public function getAmountPercentage()
    {
        return $this->amountPercentage;
    }
    /**
     * Set amountPercentage value
     * @param string $amountPercentage
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setAmountPercentage($amountPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($amountPercentage) && !is_string($amountPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountPercentage)), __LINE__);
        }
        $this->amountPercentage = $amountPercentage;
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
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
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
     * Get typeOfGuarantee value
     * @return string|null
     */
    public function getTypeOfGuarantee()
    {
        return $this->typeOfGuarantee;
    }
    /**
     * Set typeOfGuarantee value
     * @param string $typeOfGuarantee
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public function setTypeOfGuarantee($typeOfGuarantee = null)
    {
        // validation for constraint: string
        if (!is_null($typeOfGuarantee) && !is_string($typeOfGuarantee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfGuarantee)), __LINE__);
        }
        $this->typeOfGuarantee = $typeOfGuarantee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid
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
