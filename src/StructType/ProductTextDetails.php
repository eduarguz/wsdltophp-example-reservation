<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductTextDetails StructType
 * Meta informations extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * @subpackage Structs
 */
class ProductTextDetails extends AbstractStructBase
{
    /**
     * The ProductTextDetailsItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductTextDetailsItem[]
     */
    public $ProductTextDetailsItem;
    /**
     * Constructor method for ProductTextDetails
     * @uses ProductTextDetails::setProductTextDetailsItem()
     * @param \Sabre\UpdateReservation\StructType\ProductTextDetailsItem[] $productTextDetailsItem
     */
    public function __construct(array $productTextDetailsItem = array())
    {
        $this
            ->setProductTextDetailsItem($productTextDetailsItem);
    }
    /**
     * Get ProductTextDetailsItem value
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetailsItem[]|null
     */
    public function getProductTextDetailsItem()
    {
        return $this->ProductTextDetailsItem;
    }
    /**
     * Set ProductTextDetailsItem value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProductTextDetailsItem[] $productTextDetailsItem
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetails
     */
    public function setProductTextDetailsItem(array $productTextDetailsItem = array())
    {
        foreach ($productTextDetailsItem as $productTextDetailsProductTextDetailsItemItem) {
            // validation for constraint: itemType
            if (!$productTextDetailsProductTextDetailsItemItem instanceof \Sabre\UpdateReservation\StructType\ProductTextDetailsItem) {
                throw new \InvalidArgumentException(sprintf('The ProductTextDetailsItem property can only contain items of \Sabre\UpdateReservation\StructType\ProductTextDetailsItem, "%s" given', is_object($productTextDetailsProductTextDetailsItemItem) ? get_class($productTextDetailsProductTextDetailsItemItem) : gettype($productTextDetailsProductTextDetailsItemItem)), __LINE__);
            }
        }
        $this->ProductTextDetailsItem = $productTextDetailsItem;
        return $this;
    }
    /**
     * Add item to ProductTextDetailsItem value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProductTextDetailsItem $item
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetails
     */
    public function addToProductTextDetailsItem(\Sabre\UpdateReservation\StructType\ProductTextDetailsItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ProductTextDetailsItem) {
            throw new \InvalidArgumentException(sprintf('The ProductTextDetailsItem property can only contain items of \Sabre\UpdateReservation\StructType\ProductTextDetailsItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProductTextDetailsItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetails
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
