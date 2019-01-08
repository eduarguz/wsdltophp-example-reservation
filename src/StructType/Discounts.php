<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discounts StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of Discount
 * @subpackage Structs
 */
class Discounts extends AbstractStructBase
{
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Discount[]
     */
    public $Discount;
    /**
     * Constructor method for Discounts
     * @uses Discounts::setDiscount()
     * @param \Sabre\UpdateReservation\StructType\Discount[] $discount
     */
    public function __construct(array $discount = array())
    {
        $this
            ->setDiscount($discount);
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
     * @return \Sabre\UpdateReservation\StructType\Discounts
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $discountsDiscountItem) {
            // validation for constraint: itemType
            if (!$discountsDiscountItem instanceof \Sabre\UpdateReservation\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Sabre\UpdateReservation\StructType\Discount, "%s" given', is_object($discountsDiscountItem) ? get_class($discountsDiscountItem) : gettype($discountsDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Discount $item
     * @return \Sabre\UpdateReservation\StructType\Discounts
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Discounts
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
