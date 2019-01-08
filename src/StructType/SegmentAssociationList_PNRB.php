<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentAssociationList.PNRB StructType
 * @subpackage Structs
 */
class SegmentAssociationList_PNRB extends AbstractStructBase
{
    /**
     * The SegmentAssociationTag
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB[]
     */
    public $SegmentAssociationTag;
    /**
     * Constructor method for SegmentAssociationList.PNRB
     * @uses SegmentAssociationList_PNRB::setSegmentAssociationTag()
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB[] $segmentAssociationTag
     */
    public function __construct(array $segmentAssociationTag = array())
    {
        $this
            ->setSegmentAssociationTag($segmentAssociationTag);
    }
    /**
     * Get SegmentAssociationTag value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB[]|null
     */
    public function getSegmentAssociationTag()
    {
        return $this->SegmentAssociationTag;
    }
    /**
     * Set SegmentAssociationTag value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB[] $segmentAssociationTag
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public function setSegmentAssociationTag(array $segmentAssociationTag = array())
    {
        foreach ($segmentAssociationTag as $segmentAssociationList_PNRBSegmentAssociationTagItem) {
            // validation for constraint: itemType
            if (!$segmentAssociationList_PNRBSegmentAssociationTagItem instanceof \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SegmentAssociationTag property can only contain items of \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB, "%s" given', is_object($segmentAssociationList_PNRBSegmentAssociationTagItem) ? get_class($segmentAssociationList_PNRBSegmentAssociationTagItem) : gettype($segmentAssociationList_PNRBSegmentAssociationTagItem)), __LINE__);
            }
        }
        $this->SegmentAssociationTag = $segmentAssociationTag;
        return $this;
    }
    /**
     * Add item to SegmentAssociationTag value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public function addToSegmentAssociationTag(\Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB) {
            throw new \InvalidArgumentException(sprintf('The SegmentAssociationTag property can only contain items of \Sabre\UpdateReservation\StructType\SegmentAssociationTag_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentAssociationTag[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
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
