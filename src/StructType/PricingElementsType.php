<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingElementsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common pricing elements
 * @subpackage Structs
 */
class PricingElementsType extends AbstractStructBase
{
    /**
     * The Deposit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Deposit
     */
    public $Deposit;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Discount[]
     */
    public $Discount;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Payment
     */
    public $Payment;
    /**
     * Constructor method for PricingElementsType
     * @uses PricingElementsType::setDeposit()
     * @uses PricingElementsType::setDiscount()
     * @uses PricingElementsType::setPayment()
     * @param \Sabre\UpdateReservation\StructType\Deposit $deposit
     * @param \Sabre\UpdateReservation\StructType\Discount[] $discount
     * @param \Sabre\UpdateReservation\StructType\Payment $payment
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Deposit $deposit = null, array $discount = array(), \Sabre\UpdateReservation\StructType\Payment $payment = null)
    {
        $this
            ->setDeposit($deposit)
            ->setDiscount($discount)
            ->setPayment($payment);
    }
    /**
     * Get Deposit value
     * @return \Sabre\UpdateReservation\StructType\Deposit|null
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param \Sabre\UpdateReservation\StructType\Deposit $deposit
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public function setDeposit(\Sabre\UpdateReservation\StructType\Deposit $deposit = null)
    {
        $this->Deposit = $deposit;
        return $this;
    }
    /**
     * Get Discount value
     * @return \Sabre\UpdateReservation\StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Discount[] $discount
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $pricingElementsTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$pricingElementsTypeDiscountItem instanceof \Sabre\UpdateReservation\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Sabre\UpdateReservation\StructType\Discount, "%s" given', is_object($pricingElementsTypeDiscountItem) ? get_class($pricingElementsTypeDiscountItem) : gettype($pricingElementsTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Discount $item
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public function addToDiscount(\Sabre\UpdateReservation\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Sabre\UpdateReservation\StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
    /**
     * Get Payment value
     * @return \Sabre\UpdateReservation\StructType\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Sabre\UpdateReservation\StructType\Payment $payment
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public function setPayment(\Sabre\UpdateReservation\StructType\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType
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
