<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingTransaction StructType
 * @subpackage Structs
 */
class AccountingTransaction extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Status;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Date;
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\AccountingTransactionItem[]
     */
    public $Item;
    /**
     * The OriginatingLocator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OriginatingLocator;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\POSType
     */
    public $POS;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Payment[]
     */
    public $Payment;
    /**
     * Constructor method for AccountingTransaction
     * @uses AccountingTransaction::setType()
     * @uses AccountingTransaction::setStatus()
     * @uses AccountingTransaction::setDate()
     * @uses AccountingTransaction::setItem()
     * @uses AccountingTransaction::setOriginatingLocator()
     * @uses AccountingTransaction::setPOS()
     * @uses AccountingTransaction::setPayment()
     * @param string $type
     * @param string $status
     * @param string $date
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionItem[] $item
     * @param string $originatingLocator
     * @param \Sabre\UpdateReservation\StructType\POSType $pOS
     * @param \Sabre\UpdateReservation\StructType\Payment[] $payment
     */
    public function __construct($type = null, $status = null, $date = null, array $item = array(), $originatingLocator = null, \Sabre\UpdateReservation\StructType\POSType $pOS = null, array $payment = array())
    {
        $this
            ->setType($type)
            ->setStatus($status)
            ->setDate($date)
            ->setItem($item)
            ->setOriginatingLocator($originatingLocator)
            ->setPOS($pOS)
            ->setPayment($payment);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
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
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Date value
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
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
     * Get Item value
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionItem[]
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionItem[] $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $accountingTransactionItemItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionItemItem instanceof \Sabre\UpdateReservation\StructType\AccountingTransactionItem) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Sabre\UpdateReservation\StructType\AccountingTransactionItem, "%s" given', is_object($accountingTransactionItemItem) ? get_class($accountingTransactionItemItem) : gettype($accountingTransactionItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionItem $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function addToItem(\Sabre\UpdateReservation\StructType\AccountingTransactionItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountingTransactionItem) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Sabre\UpdateReservation\StructType\AccountingTransactionItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Get OriginatingLocator value
     * @return string|null
     */
    public function getOriginatingLocator()
    {
        return $this->OriginatingLocator;
    }
    /**
     * Set OriginatingLocator value
     * @param string $originatingLocator
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function setOriginatingLocator($originatingLocator = null)
    {
        // validation for constraint: string
        if (!is_null($originatingLocator) && !is_string($originatingLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originatingLocator)), __LINE__);
        }
        $this->OriginatingLocator = $originatingLocator;
        return $this;
    }
    /**
     * Get POS value
     * @return \Sabre\UpdateReservation\StructType\POSType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Sabre\UpdateReservation\StructType\POSType $pOS
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function setPOS(\Sabre\UpdateReservation\StructType\POSType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get Payment value
     * @return \Sabre\UpdateReservation\StructType\Payment[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Payment[] $payment
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function setPayment(array $payment = array())
    {
        foreach ($payment as $accountingTransactionPaymentItem) {
            // validation for constraint: itemType
            if (!$accountingTransactionPaymentItem instanceof \Sabre\UpdateReservation\StructType\Payment) {
                throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \Sabre\UpdateReservation\StructType\Payment, "%s" given', is_object($accountingTransactionPaymentItem) ? get_class($accountingTransactionPaymentItem) : gettype($accountingTransactionPaymentItem)), __LINE__);
            }
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Payment $item
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
     */
    public function addToPayment(\Sabre\UpdateReservation\StructType\Payment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Payment) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \Sabre\UpdateReservation\StructType\Payment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingTransaction
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
