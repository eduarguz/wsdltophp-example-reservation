<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelPortions StructType
 * Meta informations extracted from the WSDL
 * - minOccurs: 0
 * @subpackage Structs
 */
class TravelPortions extends AbstractStructBase
{
    /**
     * The TravelPortion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion[]
     */
    public $TravelPortion;
    /**
     * Constructor method for TravelPortions
     * @uses TravelPortions::setTravelPortion()
     * @param \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion[] $travelPortion
     */
    public function __construct(array $travelPortion = array())
    {
        $this
            ->setTravelPortion($travelPortion);
    }
    /**
     * Get TravelPortion value
     * @return \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion[]|null
     */
    public function getTravelPortion()
    {
        return $this->TravelPortion;
    }
    /**
     * Set TravelPortion value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion[] $travelPortion
     * @return \Sabre\UpdateReservation\StructType\TravelPortions
     */
    public function setTravelPortion(array $travelPortion = array())
    {
        foreach ($travelPortion as $travelPortionsTravelPortionItem) {
            // validation for constraint: itemType
            if (!$travelPortionsTravelPortionItem instanceof \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion) {
                throw new \InvalidArgumentException(sprintf('The TravelPortion property can only contain items of \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion, "%s" given', is_object($travelPortionsTravelPortionItem) ? get_class($travelPortionsTravelPortionItem) : gettype($travelPortionsTravelPortionItem)), __LINE__);
            }
        }
        $this->TravelPortion = $travelPortion;
        return $this;
    }
    /**
     * Add item to TravelPortion value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion $item
     * @return \Sabre\UpdateReservation\StructType\TravelPortions
     */
    public function addToTravelPortion(\Sabre\UpdateReservation\StructType\SegmentOrTravelPortion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion) {
            throw new \InvalidArgumentException(sprintf('The TravelPortion property can only contain items of \Sabre\UpdateReservation\StructType\SegmentOrTravelPortion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelPortion[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelPortions
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
