<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentReferences StructType
 * Meta informations extracted from the WSDL
 * - documentation: to be checked
 * @subpackage Structs
 */
class SegmentReferences extends AbstractStructBase
{
    /**
     * The SegmentRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\SegmentRef[]
     */
    public $SegmentRef;
    /**
     * Constructor method for SegmentReferences
     * @uses SegmentReferences::setSegmentRef()
     * @param \Sabre\UpdateReservation\StructType\SegmentRef[] $segmentRef
     */
    public function __construct(array $segmentRef = array())
    {
        $this
            ->setSegmentRef($segmentRef);
    }
    /**
     * Get SegmentRef value
     * @return \Sabre\UpdateReservation\StructType\SegmentRef[]|null
     */
    public function getSegmentRef()
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentRef[] $segmentRef
     * @return \Sabre\UpdateReservation\StructType\SegmentReferences
     */
    public function setSegmentRef(array $segmentRef = array())
    {
        foreach ($segmentRef as $segmentReferencesSegmentRefItem) {
            // validation for constraint: itemType
            if (!$segmentReferencesSegmentRefItem instanceof \Sabre\UpdateReservation\StructType\SegmentRef) {
                throw new \InvalidArgumentException(sprintf('The SegmentRef property can only contain items of \Sabre\UpdateReservation\StructType\SegmentRef, "%s" given', is_object($segmentReferencesSegmentRefItem) ? get_class($segmentReferencesSegmentRefItem) : gettype($segmentReferencesSegmentRefItem)), __LINE__);
            }
        }
        $this->SegmentRef = $segmentRef;
        return $this;
    }
    /**
     * Add item to SegmentRef value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentRef $item
     * @return \Sabre\UpdateReservation\StructType\SegmentReferences
     */
    public function addToSegmentRef(\Sabre\UpdateReservation\StructType\SegmentRef $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SegmentRef) {
            throw new \InvalidArgumentException(sprintf('The SegmentRef property can only contain items of \Sabre\UpdateReservation\StructType\SegmentRef, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentRef[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SegmentReferences
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
