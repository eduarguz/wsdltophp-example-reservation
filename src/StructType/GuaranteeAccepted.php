<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteeAccepted StructType
 * @subpackage Structs
 */
class GuaranteeAccepted extends AbstractStructBase
{
    /**
     * The PaymentCard
     * @var \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public $PaymentCard;
    /**
     * The GuaranteeTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Uses OTA for PMT Table. | Positive Integer to denote OTA Codes
     * - minInclusive: 1
     * @var int
     */
    public $GuaranteeTypeCode;
    /**
     * Constructor method for GuaranteeAccepted
     * @uses GuaranteeAccepted::setPaymentCard()
     * @uses GuaranteeAccepted::setGuaranteeTypeCode()
     * @param \Sabre\UpdateReservation\StructType\PaymentCard $paymentCard
     * @param int $guaranteeTypeCode
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PaymentCard $paymentCard = null, $guaranteeTypeCode = null)
    {
        $this
            ->setPaymentCard($paymentCard)
            ->setGuaranteeTypeCode($guaranteeTypeCode);
    }
    /**
     * Get PaymentCard value
     * @return \Sabre\UpdateReservation\StructType\PaymentCard|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param \Sabre\UpdateReservation\StructType\PaymentCard $paymentCard
     * @return \Sabre\UpdateReservation\StructType\GuaranteeAccepted
     */
    public function setPaymentCard(\Sabre\UpdateReservation\StructType\PaymentCard $paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get GuaranteeTypeCode value
     * @return int|null
     */
    public function getGuaranteeTypeCode()
    {
        return $this->GuaranteeTypeCode;
    }
    /**
     * Set GuaranteeTypeCode value
     * @param int $guaranteeTypeCode
     * @return \Sabre\UpdateReservation\StructType\GuaranteeAccepted
     */
    public function setGuaranteeTypeCode($guaranteeTypeCode = null)
    {
        // validation for constraint: minInclusive
        if ($guaranteeTypeCode < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $guaranteeTypeCode), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($guaranteeTypeCode) && !is_numeric($guaranteeTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($guaranteeTypeCode)), __LINE__);
        }
        $this->GuaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GuaranteeAccepted
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
