<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalTaxes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Tax multiplied by "NumberOfItems".
 * - minOccurs: 0
 * @subpackage Structs
 */
class TotalTaxes extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryTax[]
     */
    public $Tax;
    /**
     * Constructor method for TotalTaxes
     * @uses TotalTaxes::setTax()
     * @param \Sabre\UpdateReservation\StructType\AncillaryTax[] $tax
     */
    public function __construct(array $tax = array())
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return \Sabre\UpdateReservation\StructType\AncillaryTax[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryTax[] $tax
     * @return \Sabre\UpdateReservation\StructType\TotalTaxes
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $totalTaxesTaxItem) {
            // validation for constraint: itemType
            if (!$totalTaxesTaxItem instanceof \Sabre\UpdateReservation\StructType\AncillaryTax) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryTax, "%s" given', is_object($totalTaxesTaxItem) ? get_class($totalTaxesTaxItem) : gettype($totalTaxesTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryTax $item
     * @return \Sabre\UpdateReservation\StructType\TotalTaxes
     */
    public function addToTax(\Sabre\UpdateReservation\StructType\AncillaryTax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AncillaryTax) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryTax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TotalTaxes
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
