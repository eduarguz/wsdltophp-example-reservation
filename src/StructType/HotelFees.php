<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelFees StructType
 * Meta informations extracted from the WSDL
 * - documentation: This element breaks out certain taxes and fees collected by the hotel that are otherwise not specifically detailed in the Surcharges array. Contains size attribute to indicate the number of charges contained.
 * @subpackage Structs
 */
class HotelFees extends AbstractStructBase
{
    /**
     * The HotelFee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\HotelFee[]
     */
    public $HotelFee;
    /**
     * Constructor method for HotelFees
     * @uses HotelFees::setHotelFee()
     * @param \Sabre\UpdateReservation\StructType\HotelFee[] $hotelFee
     */
    public function __construct(array $hotelFee = array())
    {
        $this
            ->setHotelFee($hotelFee);
    }
    /**
     * Get HotelFee value
     * @return \Sabre\UpdateReservation\StructType\HotelFee[]|null
     */
    public function getHotelFee()
    {
        return $this->HotelFee;
    }
    /**
     * Set HotelFee value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelFee[] $hotelFee
     * @return \Sabre\UpdateReservation\StructType\HotelFees
     */
    public function setHotelFee(array $hotelFee = array())
    {
        foreach ($hotelFee as $hotelFeesHotelFeeItem) {
            // validation for constraint: itemType
            if (!$hotelFeesHotelFeeItem instanceof \Sabre\UpdateReservation\StructType\HotelFee) {
                throw new \InvalidArgumentException(sprintf('The HotelFee property can only contain items of \Sabre\UpdateReservation\StructType\HotelFee, "%s" given', is_object($hotelFeesHotelFeeItem) ? get_class($hotelFeesHotelFeeItem) : gettype($hotelFeesHotelFeeItem)), __LINE__);
            }
        }
        $this->HotelFee = $hotelFee;
        return $this;
    }
    /**
     * Add item to HotelFee value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelFee $item
     * @return \Sabre\UpdateReservation\StructType\HotelFees
     */
    public function addToHotelFee(\Sabre\UpdateReservation\StructType\HotelFee $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HotelFee) {
            throw new \InvalidArgumentException(sprintf('The HotelFee property can only contain items of \Sabre\UpdateReservation\StructType\HotelFee, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelFee[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelFees
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
