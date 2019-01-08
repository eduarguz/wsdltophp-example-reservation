<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreReservedSeats.PNRB StructType
 * @subpackage Structs
 */
class PreReservedSeats_PNRB extends AbstractStructBase
{
    /**
     * The PreReservedSeat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB[]
     */
    public $PreReservedSeat;
    /**
     * Constructor method for PreReservedSeats.PNRB
     * @uses PreReservedSeats_PNRB::setPreReservedSeat()
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB[] $preReservedSeat
     */
    public function __construct(array $preReservedSeat = array())
    {
        $this
            ->setPreReservedSeat($preReservedSeat);
    }
    /**
     * Get PreReservedSeat value
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB[]|null
     */
    public function getPreReservedSeat()
    {
        return $this->PreReservedSeat;
    }
    /**
     * Set PreReservedSeat value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB[] $preReservedSeat
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB
     */
    public function setPreReservedSeat(array $preReservedSeat = array())
    {
        foreach ($preReservedSeat as $preReservedSeats_PNRBPreReservedSeatItem) {
            // validation for constraint: itemType
            if (!$preReservedSeats_PNRBPreReservedSeatItem instanceof \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PreReservedSeat property can only contain items of \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB, "%s" given', is_object($preReservedSeats_PNRBPreReservedSeatItem) ? get_class($preReservedSeats_PNRBPreReservedSeatItem) : gettype($preReservedSeats_PNRBPreReservedSeatItem)), __LINE__);
            }
        }
        $this->PreReservedSeat = $preReservedSeat;
        return $this;
    }
    /**
     * Add item to PreReservedSeat value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB
     */
    public function addToPreReservedSeat(\Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PreReservedSeat property can only contain items of \Sabre\UpdateReservation\StructType\PreReservedSeat_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PreReservedSeat[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB
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
