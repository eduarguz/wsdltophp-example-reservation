<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalTax StructType
 * @subpackage Structs
 */
class TotalTax extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Tax[]
     */
    public $Tax;
    /**
     * The Amount
     * @var string
     */
    public $Amount;
    /**
     * Constructor method for TotalTax
     * @uses TotalTax::setTax()
     * @uses TotalTax::setAmount()
     * @param \Sabre\UpdateReservation\StructType\Tax[] $tax
     * @param string $amount
     */
    public function __construct(array $tax = array(), $amount = null)
    {
        $this
            ->setTax($tax)
            ->setAmount($amount);
    }
    /**
     * Get Tax value
     * @return \Sabre\UpdateReservation\StructType\Tax[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Tax[] $tax
     * @return \Sabre\UpdateReservation\StructType\TotalTax
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $totalTaxTaxItem) {
            // validation for constraint: itemType
            if (!$totalTaxTaxItem instanceof \Sabre\UpdateReservation\StructType\Tax) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\Tax, "%s" given', is_object($totalTaxTaxItem) ? get_class($totalTaxTaxItem) : gettype($totalTaxTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Tax $item
     * @return \Sabre\UpdateReservation\StructType\TotalTax
     */
    public function addToTax(\Sabre\UpdateReservation\StructType\Tax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Tax) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of \Sabre\UpdateReservation\StructType\Tax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\TotalTax
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TotalTax
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
