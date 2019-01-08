<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherPayment.PNRB StructType
 * @subpackage Structs
 */
class OtherPayment_PNRB extends Payment_PNRB
{
    /**
     * The PaymentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInfo;
    /**
     * Constructor method for OtherPayment.PNRB
     * @uses OtherPayment_PNRB::setPaymentInfo()
     * @param string $paymentInfo
     */
    public function __construct($paymentInfo = null)
    {
        $this
            ->setPaymentInfo($paymentInfo);
    }
    /**
     * Get PaymentInfo value
     * @return string|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @param string $paymentInfo
     * @return \Sabre\UpdateReservation\StructType\OtherPayment_PNRB
     */
    public function setPaymentInfo($paymentInfo = null)
    {
        // validation for constraint: string
        if (!is_null($paymentInfo) && !is_string($paymentInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentInfo)), __LINE__);
        }
        $this->PaymentInfo = $paymentInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OtherPayment_PNRB
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
