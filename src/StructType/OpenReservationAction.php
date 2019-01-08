<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenReservationAction StructType
 * @subpackage Structs
 */
class OpenReservationAction extends AbstractStructBase
{
    /**
     * The PaymentCardApprovalAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction
     */
    public $PaymentCardApprovalAction;
    /**
     * The PaymentCardCorporateIDAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction
     */
    public $PaymentCardCorporateIDAction;
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for OpenReservationAction
     * @uses OpenReservationAction::setPaymentCardApprovalAction()
     * @uses OpenReservationAction::setPaymentCardCorporateIDAction()
     * @uses OpenReservationAction::setId()
     * @uses OpenReservationAction::setName()
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction $paymentCardApprovalAction
     * @param \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction $paymentCardCorporateIDAction
     * @param string $id
     * @param string $name
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PaymentCardApprovalAction $paymentCardApprovalAction = null, \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction $paymentCardCorporateIDAction = null, $id = null, $name = null)
    {
        $this
            ->setPaymentCardApprovalAction($paymentCardApprovalAction)
            ->setPaymentCardCorporateIDAction($paymentCardCorporateIDAction)
            ->setId($id)
            ->setName($name);
    }
    /**
     * Get PaymentCardApprovalAction value
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction|null
     */
    public function getPaymentCardApprovalAction()
    {
        return $this->PaymentCardApprovalAction;
    }
    /**
     * Set PaymentCardApprovalAction value
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApprovalAction $paymentCardApprovalAction
     * @return \Sabre\UpdateReservation\StructType\OpenReservationAction
     */
    public function setPaymentCardApprovalAction(\Sabre\UpdateReservation\StructType\PaymentCardApprovalAction $paymentCardApprovalAction = null)
    {
        $this->PaymentCardApprovalAction = $paymentCardApprovalAction;
        return $this;
    }
    /**
     * Get PaymentCardCorporateIDAction value
     * @return \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction|null
     */
    public function getPaymentCardCorporateIDAction()
    {
        return $this->PaymentCardCorporateIDAction;
    }
    /**
     * Set PaymentCardCorporateIDAction value
     * @param \Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction $paymentCardCorporateIDAction
     * @return \Sabre\UpdateReservation\StructType\OpenReservationAction
     */
    public function setPaymentCardCorporateIDAction(\Sabre\UpdateReservation\StructType\PaymentCardCorporateIDAction $paymentCardCorporateIDAction = null)
    {
        $this->PaymentCardCorporateIDAction = $paymentCardCorporateIDAction;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\OpenReservationAction
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\OpenReservationAction
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OpenReservationAction
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
