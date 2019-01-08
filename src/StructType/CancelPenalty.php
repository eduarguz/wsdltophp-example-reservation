<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenalty StructType
 * Meta informations extracted from the WSDL
 * - documentation: Description Of cancel Penalty
 * @subpackage Structs
 */
class CancelPenalty extends AbstractStructBase
{
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Deadline
     */
    public $Deadline;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AmountPercent
     */
    public $AmountPercent;
    /**
     * The PenaltyDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PenaltyDescription
     */
    public $PenaltyDescription;
    /**
     * The Refundable
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Refundable;
    /**
     * Constructor method for CancelPenalty
     * @uses CancelPenalty::setDeadline()
     * @uses CancelPenalty::setAmountPercent()
     * @uses CancelPenalty::setPenaltyDescription()
     * @uses CancelPenalty::setRefundable()
     * @param \Sabre\UpdateReservation\StructType\Deadline $deadline
     * @param \Sabre\UpdateReservation\StructType\AmountPercent $amountPercent
     * @param \Sabre\UpdateReservation\StructType\PenaltyDescription $penaltyDescription
     * @param bool $refundable
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Deadline $deadline = null, \Sabre\UpdateReservation\StructType\AmountPercent $amountPercent = null, \Sabre\UpdateReservation\StructType\PenaltyDescription $penaltyDescription = null, $refundable = null)
    {
        $this
            ->setDeadline($deadline)
            ->setAmountPercent($amountPercent)
            ->setPenaltyDescription($penaltyDescription)
            ->setRefundable($refundable);
    }
    /**
     * Get Deadline value
     * @return \Sabre\UpdateReservation\StructType\Deadline|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param \Sabre\UpdateReservation\StructType\Deadline $deadline
     * @return \Sabre\UpdateReservation\StructType\CancelPenalty
     */
    public function setDeadline(\Sabre\UpdateReservation\StructType\Deadline $deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return \Sabre\UpdateReservation\StructType\AmountPercent|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param \Sabre\UpdateReservation\StructType\AmountPercent $amountPercent
     * @return \Sabre\UpdateReservation\StructType\CancelPenalty
     */
    public function setAmountPercent(\Sabre\UpdateReservation\StructType\AmountPercent $amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get PenaltyDescription value
     * @return \Sabre\UpdateReservation\StructType\PenaltyDescription|null
     */
    public function getPenaltyDescription()
    {
        return $this->PenaltyDescription;
    }
    /**
     * Set PenaltyDescription value
     * @param \Sabre\UpdateReservation\StructType\PenaltyDescription $penaltyDescription
     * @return \Sabre\UpdateReservation\StructType\CancelPenalty
     */
    public function setPenaltyDescription(\Sabre\UpdateReservation\StructType\PenaltyDescription $penaltyDescription = null)
    {
        $this->PenaltyDescription = $penaltyDescription;
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool|null
     */
    public function getRefundable()
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Sabre\UpdateReservation\StructType\CancelPenalty
     */
    public function setRefundable($refundable = null)
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($refundable)), __LINE__);
        }
        $this->Refundable = $refundable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CancelPenalty
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
