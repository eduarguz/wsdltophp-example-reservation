<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TaxType[]
     */
    public $Tax;
    /**
     * The TotalTaxAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $TotalTaxAmount;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setTax()
     * @uses TaxesType::setTotalTaxAmount()
     * @param \Sabre\UpdateReservation\StructType\TaxType[] $tax
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $totalTaxAmount
     */
    public function __construct(array $tax = array(), \Sabre\UpdateReservation\StructType\DecimalPrice $totalTaxAmount = null)
    {
        $this
            ->setTax($tax)
            ->setTotalTaxAmount($totalTaxAmount);
    }
    /**
     * Get Tax value
     * @return \Sabre\UpdateReservation\StructType\TaxType[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TaxType[] $tax
     * @return \Sabre\UpdateReservation\StructType\TaxesType
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $taxesTypeTaxItem) {
            // validation for constraint: itemType
            if (!$taxesTypeTaxItem instanceof \Sabre\UpdateReservation\StructType\TaxType) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\TaxType, "%s" given', is_object($taxesTypeTaxItem) ? get_class($taxesTypeTaxItem) : gettype($taxesTypeTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TaxType $item
     * @return \Sabre\UpdateReservation\StructType\TaxesType
     */
    public function addToTax(\Sabre\UpdateReservation\StructType\TaxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TaxType) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\TaxType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getTotalTaxAmount()
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $totalTaxAmount
     * @return \Sabre\UpdateReservation\StructType\TaxesType
     */
    public function setTotalTaxAmount(\Sabre\UpdateReservation\StructType\DecimalPrice $totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TaxesType
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
