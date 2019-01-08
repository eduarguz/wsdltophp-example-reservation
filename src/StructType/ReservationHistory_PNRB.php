<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationHistory.PNRB StructType
 * @subpackage Structs
 */
class ReservationHistory_PNRB extends AbstractStructBase
{
    /**
     * The HistoryTransaction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB[]
     */
    public $HistoryTransaction;
    /**
     * Constructor method for ReservationHistory.PNRB
     * @uses ReservationHistory_PNRB::setHistoryTransaction()
     * @param \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB[] $historyTransaction
     */
    public function __construct(array $historyTransaction = array())
    {
        $this
            ->setHistoryTransaction($historyTransaction);
    }
    /**
     * Get HistoryTransaction value
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB[]|null
     */
    public function getHistoryTransaction()
    {
        return $this->HistoryTransaction;
    }
    /**
     * Set HistoryTransaction value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB[] $historyTransaction
     * @return \Sabre\UpdateReservation\StructType\ReservationHistory_PNRB
     */
    public function setHistoryTransaction(array $historyTransaction = array())
    {
        foreach ($historyTransaction as $reservationHistory_PNRBHistoryTransactionItem) {
            // validation for constraint: itemType
            if (!$reservationHistory_PNRBHistoryTransactionItem instanceof \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB) {
                throw new \InvalidArgumentException(sprintf('The HistoryTransaction property can only contain items of \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB, "%s" given', is_object($reservationHistory_PNRBHistoryTransactionItem) ? get_class($reservationHistory_PNRBHistoryTransactionItem) : gettype($reservationHistory_PNRBHistoryTransactionItem)), __LINE__);
            }
        }
        $this->HistoryTransaction = $historyTransaction;
        return $this;
    }
    /**
     * Add item to HistoryTransaction value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ReservationHistory_PNRB
     */
    public function addToHistoryTransaction(\Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB) {
            throw new \InvalidArgumentException(sprintf('The HistoryTransaction property can only contain items of \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\ReservationHistory_PNRB
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
