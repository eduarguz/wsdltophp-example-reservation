<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentData StructType
 * @subpackage Structs
 */
class SegmentData extends AbstractStructBase
{
    /**
     * The FareComponent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareComponent
     */
    public $FareComponent;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion[]
     */
    public $Segments;
    /**
     * Constructor method for SegmentData
     * @uses SegmentData::setFareComponent()
     * @uses SegmentData::setSegments()
     * @param \Sabre\UpdateReservation\StructType\FareComponent $fareComponent
     * @param \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion[] $segments
     */
    public function __construct(\Sabre\UpdateReservation\StructType\FareComponent $fareComponent = null, array $segments = array())
    {
        $this
            ->setFareComponent($fareComponent)
            ->setSegments($segments);
    }
    /**
     * Get FareComponent value
     * @return \Sabre\UpdateReservation\StructType\FareComponent|null
     */
    public function getFareComponent()
    {
        return $this->FareComponent;
    }
    /**
     * Set FareComponent value
     * @param \Sabre\UpdateReservation\StructType\FareComponent $fareComponent
     * @return \Sabre\UpdateReservation\StructType\SegmentData
     */
    public function setFareComponent(\Sabre\UpdateReservation\StructType\FareComponent $fareComponent = null)
    {
        $this->FareComponent = $fareComponent;
        return $this;
    }
    /**
     * Get Segments value
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion[]|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion[] $segments
     * @return \Sabre\UpdateReservation\StructType\SegmentData
     */
    public function setSegments(array $segments = array())
    {
        foreach ($segments as $segmentDataSegmentsItem) {
            // validation for constraint: itemType
            if (!$segmentDataSegmentsItem instanceof \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion) {
                throw new \InvalidArgumentException(sprintf('The Segments property can only contain items of \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion, "%s" given', is_object($segmentDataSegmentsItem) ? get_class($segmentDataSegmentsItem) : gettype($segmentDataSegmentsItem)), __LINE__);
            }
        }
        $this->Segments = $segments;
        return $this;
    }
    /**
     * Add item to Segments value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion $item
     * @return \Sabre\UpdateReservation\StructType\SegmentData
     */
    public function addToSegments(\Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion) {
            throw new \InvalidArgumentException(sprintf('The Segments property can only contain items of \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Segments[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SegmentData
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
