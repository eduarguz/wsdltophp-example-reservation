<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fees StructType
 * @subpackage Structs
 */
class Fees extends AbstractStructBase
{
    /**
     * The Fee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\FeeType[]
     */
    public $Fee;
    /**
     * Constructor method for Fees
     * @uses Fees::setFee()
     * @param \Sabre\UpdateReservation\StructType\FeeType[] $fee
     */
    public function __construct(array $fee = array())
    {
        $this
            ->setFee($fee);
    }
    /**
     * Get Fee value
     * @return \Sabre\UpdateReservation\StructType\FeeType[]|null
     */
    public function getFee()
    {
        return $this->Fee;
    }
    /**
     * Set Fee value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FeeType[] $fee
     * @return \Sabre\UpdateReservation\StructType\Fees
     */
    public function setFee(array $fee = array())
    {
        foreach ($fee as $feesFeeItem) {
            // validation for constraint: itemType
            if (!$feesFeeItem instanceof \Sabre\UpdateReservation\StructType\FeeType) {
                throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \Sabre\UpdateReservation\StructType\FeeType, "%s" given', is_object($feesFeeItem) ? get_class($feesFeeItem) : gettype($feesFeeItem)), __LINE__);
            }
        }
        $this->Fee = $fee;
        return $this;
    }
    /**
     * Add item to Fee value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FeeType $item
     * @return \Sabre\UpdateReservation\StructType\Fees
     */
    public function addToFee(\Sabre\UpdateReservation\StructType\FeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FeeType) {
            throw new \InvalidArgumentException(sprintf('The Fee property can only contain items of \Sabre\UpdateReservation\StructType\FeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Fee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Fees
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
