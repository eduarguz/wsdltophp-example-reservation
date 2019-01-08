<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateChange StructType
 * @subpackage Structs
 */
class RateChange extends AbstractStructBase
{
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * The Amount
     * @var string
     */
    public $Amount;
    /**
     * The Effective
     * @var string
     */
    public $Effective;
    /**
     * The Surcharge
     * @var string
     */
    public $Surcharge;
    /**
     * The Tax
     * @var string
     */
    public $Tax;
    /**
     * Constructor method for RateChange
     * @uses RateChange::setId()
     * @uses RateChange::setAmount()
     * @uses RateChange::setEffective()
     * @uses RateChange::setSurcharge()
     * @uses RateChange::setTax()
     * @param string $id
     * @param string $amount
     * @param string $effective
     * @param string $surcharge
     * @param string $tax
     */
    public function __construct($id = null, $amount = null, $effective = null, $surcharge = null, $tax = null)
    {
        $this
            ->setId($id)
            ->setAmount($amount)
            ->setEffective($effective)
            ->setSurcharge($surcharge)
            ->setTax($tax);
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
     * @return \Sabre\UpdateReservation\StructType\RateChange
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
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\RateChange
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Effective value
     * @return string|null
     */
    public function getEffective()
    {
        return $this->Effective;
    }
    /**
     * Set Effective value
     * @param string $effective
     * @return \Sabre\UpdateReservation\StructType\RateChange
     */
    public function setEffective($effective = null)
    {
        // validation for constraint: string
        if (!is_null($effective) && !is_string($effective)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effective)), __LINE__);
        }
        $this->Effective = $effective;
        return $this;
    }
    /**
     * Get Surcharge value
     * @return string|null
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param string $surcharge
     * @return \Sabre\UpdateReservation\StructType\RateChange
     */
    public function setSurcharge($surcharge = null)
    {
        // validation for constraint: string
        if (!is_null($surcharge) && !is_string($surcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surcharge)), __LINE__);
        }
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Get Tax value
     * @return string|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param string $tax
     * @return \Sabre\UpdateReservation\StructType\RateChange
     */
    public function setTax($tax = null)
    {
        // validation for constraint: string
        if (!is_null($tax) && !is_string($tax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tax)), __LINE__);
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RateChange
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
