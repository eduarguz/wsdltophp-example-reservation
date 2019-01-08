<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for History StructType
 * @subpackage Structs
 */
class History extends AbstractStructBase
{
    /**
     * The HistoryTransaction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HistoryTransaction[]
     */
    public $HistoryTransaction;
    /**
     * Constructor method for History
     * @uses History::setHistoryTransaction()
     * @param \Sabre\UpdateReservation\StructType\HistoryTransaction[] $historyTransaction
     */
    public function __construct(array $historyTransaction = array())
    {
        $this
            ->setHistoryTransaction($historyTransaction);
    }
    /**
     * Get HistoryTransaction value
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction[]|null
     */
    public function getHistoryTransaction()
    {
        return $this->HistoryTransaction;
    }
    /**
     * Set HistoryTransaction value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HistoryTransaction[] $historyTransaction
     * @return \Sabre\UpdateReservation\StructType\History
     */
    public function setHistoryTransaction(array $historyTransaction = array())
    {
        foreach ($historyTransaction as $historyHistoryTransactionItem) {
            // validation for constraint: itemType
            if (!$historyHistoryTransactionItem instanceof \Sabre\UpdateReservation\StructType\HistoryTransaction) {
                throw new \InvalidArgumentException(sprintf('The HistoryTransaction property can only contain items of \Sabre\UpdateReservation\StructType\HistoryTransaction, "%s" given', is_object($historyHistoryTransactionItem) ? get_class($historyHistoryTransactionItem) : gettype($historyHistoryTransactionItem)), __LINE__);
            }
        }
        $this->HistoryTransaction = $historyTransaction;
        return $this;
    }
    /**
     * Add item to HistoryTransaction value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HistoryTransaction $item
     * @return \Sabre\UpdateReservation\StructType\History
     */
    public function addToHistoryTransaction(\Sabre\UpdateReservation\StructType\HistoryTransaction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HistoryTransaction) {
            throw new \InvalidArgumentException(sprintf('The HistoryTransaction property can only contain items of \Sabre\UpdateReservation\StructType\HistoryTransaction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HistoryTransaction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\History
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
