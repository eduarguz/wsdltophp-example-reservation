<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Itinerary StructType
 * @subpackage Structs
 */
class Itinerary extends AbstractStructBase
{
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductType[]
     */
    public $Product;
    /**
     * Constructor method for Itinerary
     * @uses Itinerary::setProduct()
     * @param \Sabre\UpdateReservation\StructType\ProductType[] $product
     */
    public function __construct(array $product = array())
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get Product value
     * @return \Sabre\UpdateReservation\StructType\ProductType[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProductType[] $product
     * @return \Sabre\UpdateReservation\StructType\Itinerary
     */
    public function setProduct(array $product = array())
    {
        foreach ($product as $itineraryProductItem) {
            // validation for constraint: itemType
            if (!$itineraryProductItem instanceof \Sabre\UpdateReservation\StructType\ProductType) {
                throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \Sabre\UpdateReservation\StructType\ProductType, "%s" given', is_object($itineraryProductItem) ? get_class($itineraryProductItem) : gettype($itineraryProductItem)), __LINE__);
            }
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProductType $item
     * @return \Sabre\UpdateReservation\StructType\Itinerary
     */
    public function addToProduct(\Sabre\UpdateReservation\StructType\ProductType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ProductType) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of \Sabre\UpdateReservation\StructType\ProductType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Itinerary
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
