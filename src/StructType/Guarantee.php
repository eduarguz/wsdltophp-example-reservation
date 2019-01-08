<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Guarantee StructType
 * Meta informations extracted from the WSDL
 * - documentation: The guarantee information to hold a reservation
 * @subpackage Structs
 */
class Guarantee extends AbstractStructBase
{
    /**
     * The PaymentCardNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentCardNumber;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for Guarantee
     * @uses Guarantee::setPaymentCardNumber()
     * @uses Guarantee::setText()
     * @param string $paymentCardNumber
     * @param string $text
     */
    public function __construct($paymentCardNumber = null, $text = null)
    {
        $this
            ->setPaymentCardNumber($paymentCardNumber)
            ->setText($text);
    }
    /**
     * Get PaymentCardNumber value
     * @return string|null
     */
    public function getPaymentCardNumber()
    {
        return $this->PaymentCardNumber;
    }
    /**
     * Set PaymentCardNumber value
     * @param string $paymentCardNumber
     * @return \Sabre\UpdateReservation\StructType\Guarantee
     */
    public function setPaymentCardNumber($paymentCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($paymentCardNumber) && !is_string($paymentCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentCardNumber)), __LINE__);
        }
        $this->PaymentCardNumber = $paymentCardNumber;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\Guarantee
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Guarantee
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
