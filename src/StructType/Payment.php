<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public $FormOfPayment;
    /**
     * The Receiver
     * Meta informations extracted from the WSDL
     * - documentation: Visa payment receiver
     * - minOccurs: 0
     * @var string
     */
    public $Receiver;
    /**
     * The SubTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SubTotal
     */
    public $SubTotal;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Total
     */
    public $Total;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionId;
    /**
     * The SupplierId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SupplierId;
    /**
     * The ApprovalAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingTransactionAmount
     */
    public $ApprovalAmount;
    /**
     * The ApprovalCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ApprovalCode;
    /**
     * The Form
     * Meta informations extracted from the WSDL
     * - documentation: "Form" is used to return the form of payment used to purchase the insurance.
     * - minOccurs: 0
     * @var string
     */
    public $Form;
    /**
     * Constructor method for Payment
     * @uses Payment::setFormOfPayment()
     * @uses Payment::setReceiver()
     * @uses Payment::setSubTotal()
     * @uses Payment::setTotal()
     * @uses Payment::setTransactionId()
     * @uses Payment::setSupplierId()
     * @uses Payment::setApprovalAmount()
     * @uses Payment::setApprovalCode()
     * @uses Payment::setForm()
     * @param \Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment
     * @param string $receiver
     * @param \Sabre\UpdateReservation\StructType\SubTotal $subTotal
     * @param \Sabre\UpdateReservation\StructType\Total $total
     * @param string $transactionId
     * @param string $supplierId
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmount $approvalAmount
     * @param string $approvalCode
     * @param string $form
     */
    public function __construct(\Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment = null, $receiver = null, \Sabre\UpdateReservation\StructType\SubTotal $subTotal = null, \Sabre\UpdateReservation\StructType\Total $total = null, $transactionId = null, $supplierId = null, \Sabre\UpdateReservation\StructType\AccountingTransactionAmount $approvalAmount = null, $approvalCode = null, $form = null)
    {
        $this
            ->setFormOfPayment($formOfPayment)
            ->setReceiver($receiver)
            ->setSubTotal($subTotal)
            ->setTotal($total)
            ->setTransactionId($transactionId)
            ->setSupplierId($supplierId)
            ->setApprovalAmount($approvalAmount)
            ->setApprovalCode($approvalCode)
            ->setForm($form);
    }
    /**
     * Get FormOfPayment value
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function getFormOfPayment()
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setFormOfPayment(\Sabre\UpdateReservation\StructType\FormOfPayment $formOfPayment = null)
    {
        $this->FormOfPayment = $formOfPayment;
        return $this;
    }
    /**
     * Get Receiver value
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }
    /**
     * Set Receiver value
     * @param string $receiver
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setReceiver($receiver = null)
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receiver)), __LINE__);
        }
        $this->Receiver = $receiver;
        return $this;
    }
    /**
     * Get SubTotal value
     * @return \Sabre\UpdateReservation\StructType\SubTotal|null
     */
    public function getSubTotal()
    {
        return $this->SubTotal;
    }
    /**
     * Set SubTotal value
     * @param \Sabre\UpdateReservation\StructType\SubTotal $subTotal
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setSubTotal(\Sabre\UpdateReservation\StructType\SubTotal $subTotal = null)
    {
        $this->SubTotal = $subTotal;
        return $this;
    }
    /**
     * Get Total value
     * @return \Sabre\UpdateReservation\StructType\Total|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Sabre\UpdateReservation\StructType\Total $total
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setTotal(\Sabre\UpdateReservation\StructType\Total $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Get SupplierId value
     * @return string|null
     */
    public function getSupplierId()
    {
        return $this->SupplierId;
    }
    /**
     * Set SupplierId value
     * @param string $supplierId
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setSupplierId($supplierId = null)
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierId)), __LINE__);
        }
        $this->SupplierId = $supplierId;
        return $this;
    }
    /**
     * Get ApprovalAmount value
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmount|null
     */
    public function getApprovalAmount()
    {
        return $this->ApprovalAmount;
    }
    /**
     * Set ApprovalAmount value
     * @param \Sabre\UpdateReservation\StructType\AccountingTransactionAmount $approvalAmount
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setApprovalAmount(\Sabre\UpdateReservation\StructType\AccountingTransactionAmount $approvalAmount = null)
    {
        $this->ApprovalAmount = $approvalAmount;
        return $this;
    }
    /**
     * Get ApprovalCode value
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }
    /**
     * Set ApprovalCode value
     * @param string $approvalCode
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setApprovalCode($approvalCode = null)
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approvalCode)), __LINE__);
        }
        $this->ApprovalCode = $approvalCode;
        return $this;
    }
    /**
     * Get Form value
     * @return string|null
     */
    public function getForm()
    {
        return $this->Form;
    }
    /**
     * Set Form value
     * @param string $form
     * @return \Sabre\UpdateReservation\StructType\Payment
     */
    public function setForm($form = null)
    {
        // validation for constraint: string
        if (!is_null($form) && !is_string($form)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($form)), __LINE__);
        }
        $this->Form = $form;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Payment
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
