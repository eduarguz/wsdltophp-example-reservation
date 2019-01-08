<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherAttributes StructType
 * @subpackage Structs
 */
class VoucherAttributes extends AbstractStructBase
{
    /**
     * The VoucherAttribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\AttributeType[]
     */
    public $VoucherAttribute;
    /**
     * Constructor method for VoucherAttributes
     * @uses VoucherAttributes::setVoucherAttribute()
     * @param \Sabre\UpdateReservation\StructType\AttributeType[] $voucherAttribute
     */
    public function __construct(array $voucherAttribute = array())
    {
        $this
            ->setVoucherAttribute($voucherAttribute);
    }
    /**
     * Get VoucherAttribute value
     * @return \Sabre\UpdateReservation\StructType\AttributeType[]|null
     */
    public function getVoucherAttribute()
    {
        return $this->VoucherAttribute;
    }
    /**
     * Set VoucherAttribute value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AttributeType[] $voucherAttribute
     * @return \Sabre\UpdateReservation\StructType\VoucherAttributes
     */
    public function setVoucherAttribute(array $voucherAttribute = array())
    {
        foreach ($voucherAttribute as $voucherAttributesVoucherAttributeItem) {
            // validation for constraint: itemType
            if (!$voucherAttributesVoucherAttributeItem instanceof \Sabre\UpdateReservation\StructType\AttributeType) {
                throw new \InvalidArgumentException(sprintf('The VoucherAttribute property can only contain items of \Sabre\UpdateReservation\StructType\AttributeType, "%s" given', is_object($voucherAttributesVoucherAttributeItem) ? get_class($voucherAttributesVoucherAttributeItem) : gettype($voucherAttributesVoucherAttributeItem)), __LINE__);
            }
        }
        $this->VoucherAttribute = $voucherAttribute;
        return $this;
    }
    /**
     * Add item to VoucherAttribute value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AttributeType $item
     * @return \Sabre\UpdateReservation\StructType\VoucherAttributes
     */
    public function addToVoucherAttribute(\Sabre\UpdateReservation\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The VoucherAttribute property can only contain items of \Sabre\UpdateReservation\StructType\AttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VoucherAttribute[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VoucherAttributes
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
