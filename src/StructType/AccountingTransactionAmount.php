<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingTransactionAmount StructType
 * @subpackage Structs
 */
class AccountingTransactionAmount extends AbstractStructBase
{
    /**
     * The Money
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MoneyType
     */
    public $Money;
    /**
     * The Points
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Points
     */
    public $Points;
    /**
     * Constructor method for AccountingTransactionAmount
     * @uses AccountingTransactionAmount::setMoney()
     * @uses AccountingTransactionAmount::setPoints()
     * @param \Sabre\UpdateReservation\StructType\MoneyType $money
     * @param \Sabre\UpdateReservation\StructType\Points $points
     */
    public function __construct(\Sabre\UpdateReservation\StructType\MoneyType $money = null, \Sabre\UpdateReservation\StructType\Points $points = null)
    {
        $this
            ->setMoney($money)
            ->setPoints($points);
    }
    /**
     * Get Money value
     * @return \Sabre\UpdateReservation\StructType\MoneyType|null
     */
    public function getMoney()
    {
        return $this->Money;
    }
    /**
     * Set Money value
     * @param \Sabre\UpdateReservation\StructType\MoneyType $money
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmount
     */
    public function setMoney(\Sabre\UpdateReservation\StructType\MoneyType $money = null)
    {
        $this->Money = $money;
        return $this;
    }
    /**
     * Get Points value
     * @return \Sabre\UpdateReservation\StructType\Points|null
     */
    public function getPoints()
    {
        return $this->Points;
    }
    /**
     * Set Points value
     * @param \Sabre\UpdateReservation\StructType\Points $points
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmount
     */
    public function setPoints(\Sabre\UpdateReservation\StructType\Points $points = null)
    {
        $this->Points = $points;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmount
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
