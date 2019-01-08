<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardApprovalAction StructType
 * @subpackage Structs
 */
class PaymentCardApprovalAction extends AbstractStructBase
{
    /**
     * The PaymentCardApproval
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\PaymentCardApproval[]
     */
    public $PaymentCardApproval;
    /**
     * The fopElementId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $fopElementId;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $op;
    /**
     * Constructor method for PaymentCardApprovalAction
     * @uses PaymentCardApprovalAction::setPaymentCardApproval()
     * @uses PaymentCardApprovalAction::setFopElementId()
     * @uses PaymentCardApprovalAction::setOp()
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApproval[] $paymentCardApproval
     * @param string $fopElementId
     * @param string $op
     */
    public function __construct(array $paymentCardApproval = array(), $fopElementId = null, $op = null)
    {
        $this
            ->setPaymentCardApproval($paymentCardApproval)
            ->setFopElementId($fopElementId)
            ->setOp($op);
    }
    /**
     * Get PaymentCardApproval value
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval[]
     */
    public function getPaymentCardApproval()
    {
        return $this->PaymentCardApproval;
    }
    /**
     * Set PaymentCardApproval value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApproval[] $paymentCardApproval
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction
     */
    public function setPaymentCardApproval(array $paymentCardApproval = array())
    {
        foreach ($paymentCardApproval as $paymentCardApprovalActionPaymentCardApprovalItem) {
            // validation for constraint: itemType
            if (!$paymentCardApprovalActionPaymentCardApprovalItem instanceof \Sabre\UpdateReservation\StructType\PaymentCardApproval) {
                throw new \InvalidArgumentException(sprintf('The PaymentCardApproval property can only contain items of \Sabre\UpdateReservation\StructType\PaymentCardApproval, "%s" given', is_object($paymentCardApprovalActionPaymentCardApprovalItem) ? get_class($paymentCardApprovalActionPaymentCardApprovalItem) : gettype($paymentCardApprovalActionPaymentCardApprovalItem)), __LINE__);
            }
        }
        $this->PaymentCardApproval = $paymentCardApproval;
        return $this;
    }
    /**
     * Add item to PaymentCardApproval value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApproval $item
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction
     */
    public function addToPaymentCardApproval(\Sabre\UpdateReservation\StructType\PaymentCardApproval $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PaymentCardApproval) {
            throw new \InvalidArgumentException(sprintf('The PaymentCardApproval property can only contain items of \Sabre\UpdateReservation\StructType\PaymentCardApproval, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentCardApproval[] = $item;
        return $this;
    }
    /**
     * Get fopElementId value
     * @return string
     */
    public function getFopElementId()
    {
        return $this->fopElementId;
    }
    /**
     * Set fopElementId value
     * @param string $fopElementId
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction
     */
    public function setFopElementId($fopElementId = null)
    {
        // validation for constraint: string
        if (!is_null($fopElementId) && !is_string($fopElementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fopElementId)), __LINE__);
        }
        $this->fopElementId = $fopElementId;
        return $this;
    }
    /**
     * Get op value
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OpenReservationOperation::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OpenReservationOperation::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OpenReservationOperation::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OpenReservationOperation::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction
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
