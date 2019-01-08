<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationCompletionCriteria.PNRB StructType
 * @subpackage Structs
 */
class ReservationCompletionCriteria_PNRB extends AbstractStructBase
{
    /**
     * The SendEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SendEmail_PNRB
     */
    public $SendEmail;
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Transaction_PNRB
     */
    public $Transaction;
    /**
     * The returnReservation
     * @var bool
     */
    public $returnReservation;
    /**
     * Constructor method for ReservationCompletionCriteria.PNRB
     * @uses ReservationCompletionCriteria_PNRB::setSendEmail()
     * @uses ReservationCompletionCriteria_PNRB::setTransaction()
     * @uses ReservationCompletionCriteria_PNRB::setReturnReservation()
     * @param \Sabre\UpdateReservation\StructType\SendEmail_PNRB $sendEmail
     * @param \Sabre\UpdateReservation\StructType\Transaction_PNRB $transaction
     * @param bool $returnReservation
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SendEmail_PNRB $sendEmail = null, \Sabre\UpdateReservation\StructType\Transaction_PNRB $transaction = null, $returnReservation = null)
    {
        $this
            ->setSendEmail($sendEmail)
            ->setTransaction($transaction)
            ->setReturnReservation($returnReservation);
    }
    /**
     * Get SendEmail value
     * @return \Sabre\UpdateReservation\StructType\SendEmail_PNRB|null
     */
    public function getSendEmail()
    {
        return $this->SendEmail;
    }
    /**
     * Set SendEmail value
     * @param \Sabre\UpdateReservation\StructType\SendEmail_PNRB $sendEmail
     * @return \Sabre\UpdateReservation\StructType\ReservationCompletionCriteria_PNRB
     */
    public function setSendEmail(\Sabre\UpdateReservation\StructType\SendEmail_PNRB $sendEmail = null)
    {
        $this->SendEmail = $sendEmail;
        return $this;
    }
    /**
     * Get Transaction value
     * @return \Sabre\UpdateReservation\StructType\Transaction_PNRB|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \Sabre\UpdateReservation\StructType\Transaction_PNRB $transaction
     * @return \Sabre\UpdateReservation\StructType\ReservationCompletionCriteria_PNRB
     */
    public function setTransaction(\Sabre\UpdateReservation\StructType\Transaction_PNRB $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Get returnReservation value
     * @return bool|null
     */
    public function getReturnReservation()
    {
        return $this->returnReservation;
    }
    /**
     * Set returnReservation value
     * @param bool $returnReservation
     * @return \Sabre\UpdateReservation\StructType\ReservationCompletionCriteria_PNRB
     */
    public function setReturnReservation($returnReservation = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnReservation) && !is_bool($returnReservation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnReservation)), __LINE__);
        }
        $this->returnReservation = $returnReservation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReservationCompletionCriteria_PNRB
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
