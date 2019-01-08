<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingField StructType
 * Meta informations extracted from the WSDL
 * - documentation: Open Reservation Element Type used to store accounting field data
 * - type: AccountingField
 * @subpackage Structs
 */
class AccountingField extends AbstractStructBase
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public $Transaction;
    /**
     * Constructor method for AccountingField
     * @uses AccountingField::setTransaction()
     * @param \Sabre\UpdateReservation\StructType\AccountingTransaction $transaction
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AccountingTransaction $transaction = null)
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \Sabre\UpdateReservation\StructType\AccountingTransaction $transaction
     * @return \Sabre\UpdateReservation\StructType\AccountingField
     */
    public function setTransaction(\Sabre\UpdateReservation\StructType\AccountingTransaction $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingField
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
