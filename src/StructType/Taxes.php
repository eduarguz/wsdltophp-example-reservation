<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Taxes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Taxes
 * - minOccurs: 0
 * @subpackage Structs
 */
class Taxes extends AbstractStructBase
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
     * The TaxBreakdownCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TaxBreakdownCode[]
     */
    public $TaxBreakdownCode;
    /**
     * Constructor method for Taxes
     * @uses Taxes::setTax()
     * @uses Taxes::setTaxBreakdownCode()
     * @param \Sabre\UpdateReservation\StructType\AncillaryTax[] $tax
     * @param \Sabre\UpdateReservation\StructType\TaxBreakdownCode[] $taxBreakdownCode
     */
    public function __construct(array $tax = array(), array $taxBreakdownCode = array())
    {
        $this
            ->setTax($tax)
            ->setTaxBreakdownCode($taxBreakdownCode);
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
     * @return \Sabre\UpdateReservation\StructType\Taxes
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $taxesTaxItem) {
            // validation for constraint: itemType
            if (!$taxesTaxItem instanceof \Sabre\UpdateReservation\StructType\AncillaryTax) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryTax, "%s" given', is_object($taxesTaxItem) ? get_class($taxesTaxItem) : gettype($taxesTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryTax $item
     * @return \Sabre\UpdateReservation\StructType\Taxes
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
     * Get TaxBreakdownCode value
     * @return \Sabre\UpdateReservation\StructType\TaxBreakdownCode[]|null
     */
    public function getTaxBreakdownCode()
    {
        return $this->TaxBreakdownCode;
    }
    /**
     * Set TaxBreakdownCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TaxBreakdownCode[] $taxBreakdownCode
     * @return \Sabre\UpdateReservation\StructType\Taxes
     */
    public function setTaxBreakdownCode(array $taxBreakdownCode = array())
    {
        foreach ($taxBreakdownCode as $taxesTaxBreakdownCodeItem) {
            // validation for constraint: itemType
            if (!$taxesTaxBreakdownCodeItem instanceof \Sabre\UpdateReservation\StructType\TaxBreakdownCode) {
                throw new \InvalidArgumentException(sprintf('The TaxBreakdownCode property can only contain items of \Sabre\UpdateReservation\StructType\TaxBreakdownCode, "%s" given', is_object($taxesTaxBreakdownCodeItem) ? get_class($taxesTaxBreakdownCodeItem) : gettype($taxesTaxBreakdownCodeItem)), __LINE__);
            }
        }
        $this->TaxBreakdownCode = $taxBreakdownCode;
        return $this;
    }
    /**
     * Add item to TaxBreakdownCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TaxBreakdownCode $item
     * @return \Sabre\UpdateReservation\StructType\Taxes
     */
    public function addToTaxBreakdownCode(\Sabre\UpdateReservation\StructType\TaxBreakdownCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TaxBreakdownCode) {
            throw new \InvalidArgumentException(sprintf('The TaxBreakdownCode property can only contain items of \Sabre\UpdateReservation\StructType\TaxBreakdownCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxBreakdownCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Taxes
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
