<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transactions StructType
 * @subpackage Structs
 */
class Transactions extends AbstractStructBase
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Transaction[]
     */
    public $Transaction;
    /**
     * Constructor method for Transactions
     * @uses Transactions::setTransaction()
     * @param \Sabre\UpdateReservation\StructType\Transaction[] $transaction
     */
    public function __construct(array $transaction = array())
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * @return \Sabre\UpdateReservation\StructType\Transaction[]|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Transaction[] $transaction
     * @return \Sabre\UpdateReservation\StructType\Transactions
     */
    public function setTransaction(array $transaction = array())
    {
        foreach ($transaction as $transactionsTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionsTransactionItem instanceof \Sabre\UpdateReservation\StructType\Transaction) {
                throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of \Sabre\UpdateReservation\StructType\Transaction, "%s" given', is_object($transactionsTransactionItem) ? get_class($transactionsTransactionItem) : gettype($transactionsTransactionItem)), __LINE__);
            }
        }
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Add item to Transaction value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Transaction $item
     * @return \Sabre\UpdateReservation\StructType\Transactions
     */
    public function addToTransaction(\Sabre\UpdateReservation\StructType\Transaction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Transaction) {
            throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of \Sabre\UpdateReservation\StructType\Transaction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transaction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Transactions
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
