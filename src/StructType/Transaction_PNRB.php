<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction.PNRB StructType
 * @subpackage Structs
 */
class Transaction_PNRB extends AbstractStructBase
{
    /**
     * The StatelessTransaction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB
     */
    public $StatelessTransaction;
    /**
     * The StatefulTransaction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB
     */
    public $StatefulTransaction;
    /**
     * Constructor method for Transaction.PNRB
     * @uses Transaction_PNRB::setStatelessTransaction()
     * @uses Transaction_PNRB::setStatefulTransaction()
     * @param \Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB $statelessTransaction
     * @param \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB $statefulTransaction
     */
    public function __construct(\Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB $statelessTransaction = null, \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB $statefulTransaction = null)
    {
        $this
            ->setStatelessTransaction($statelessTransaction)
            ->setStatefulTransaction($statefulTransaction);
    }
    /**
     * Get StatelessTransaction value
     * @return \Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB|null
     */
    public function getStatelessTransaction()
    {
        return $this->StatelessTransaction;
    }
    /**
     * Set StatelessTransaction value
     * @param \Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB $statelessTransaction
     * @return \Sabre\UpdateReservation\StructType\Transaction_PNRB
     */
    public function setStatelessTransaction(\Sabre\UpdateReservation\StructType\StatelessTransaction_PNRB $statelessTransaction = null)
    {
        $this->StatelessTransaction = $statelessTransaction;
        return $this;
    }
    /**
     * Get StatefulTransaction value
     * @return \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB|null
     */
    public function getStatefulTransaction()
    {
        return $this->StatefulTransaction;
    }
    /**
     * Set StatefulTransaction value
     * @param \Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB $statefulTransaction
     * @return \Sabre\UpdateReservation\StructType\Transaction_PNRB
     */
    public function setStatefulTransaction(\Sabre\UpdateReservation\StructType\StatefulTransaction_PNRB $statefulTransaction = null)
    {
        $this->StatefulTransaction = $statefulTransaction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Transaction_PNRB
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
