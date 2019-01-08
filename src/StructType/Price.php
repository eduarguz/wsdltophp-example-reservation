<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Price StructType
 * @subpackage Structs
 */
class Price extends AbstractStructBase
{
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceType
     */
    public $Total;
    /**
     * The Breakdown
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Breakdown[]
     */
    public $Breakdown;
    /**
     * Constructor method for Price
     * @uses Price::setTotal()
     * @uses Price::setBreakdown()
     * @param \Sabre\UpdateReservation\StructType\PriceType $total
     * @param \Sabre\UpdateReservation\StructType\Breakdown[] $breakdown
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PriceType $total = null, array $breakdown = array())
    {
        $this
            ->setTotal($total)
            ->setBreakdown($breakdown);
    }
    /**
     * Get Total value
     * @return \Sabre\UpdateReservation\StructType\PriceType|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Sabre\UpdateReservation\StructType\PriceType $total
     * @return \Sabre\UpdateReservation\StructType\Price
     */
    public function setTotal(\Sabre\UpdateReservation\StructType\PriceType $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Breakdown value
     * @return \Sabre\UpdateReservation\StructType\Breakdown[]|null
     */
    public function getBreakdown()
    {
        return $this->Breakdown;
    }
    /**
     * Set Breakdown value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Breakdown[] $breakdown
     * @return \Sabre\UpdateReservation\StructType\Price
     */
    public function setBreakdown(array $breakdown = array())
    {
        foreach ($breakdown as $priceBreakdownItem) {
            // validation for constraint: itemType
            if (!$priceBreakdownItem instanceof \Sabre\UpdateReservation\StructType\Breakdown) {
                throw new \InvalidArgumentException(sprintf('The Breakdown property can only contain items of \Sabre\UpdateReservation\StructType\Breakdown, "%s" given', is_object($priceBreakdownItem) ? get_class($priceBreakdownItem) : gettype($priceBreakdownItem)), __LINE__);
            }
        }
        $this->Breakdown = $breakdown;
        return $this;
    }
    /**
     * Add item to Breakdown value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Breakdown $item
     * @return \Sabre\UpdateReservation\StructType\Price
     */
    public function addToBreakdown(\Sabre\UpdateReservation\StructType\Breakdown $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Breakdown) {
            throw new \InvalidArgumentException(sprintf('The Breakdown property can only contain items of \Sabre\UpdateReservation\StructType\Breakdown, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Breakdown[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Price
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
