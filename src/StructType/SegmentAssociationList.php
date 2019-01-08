<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentAssociationList StructType
 * Meta informations extracted from the WSDL
 * - minOccurs: 0
 * - type: SegmentAssociationList
 * @subpackage Structs
 */
class SegmentAssociationList extends AbstractStructBase
{
    /**
     * The SegmentAssociationTag
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationTag[]
     */
    public $SegmentAssociationTag;
    /**
     * The SegmentAssociationId
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $SegmentAssociationId;
    /**
     * Constructor method for SegmentAssociationList
     * @uses SegmentAssociationList::setSegmentAssociationTag()
     * @uses SegmentAssociationList::setSegmentAssociationId()
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag[] $segmentAssociationTag
     * @param int[] $segmentAssociationId
     */
    public function __construct(array $segmentAssociationTag = array(), array $segmentAssociationId = array())
    {
        $this
            ->setSegmentAssociationTag($segmentAssociationTag)
            ->setSegmentAssociationId($segmentAssociationId);
    }
    /**
     * Get SegmentAssociationTag value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationTag[]|null
     */
    public function getSegmentAssociationTag()
    {
        return $this->SegmentAssociationTag;
    }
    /**
     * Set SegmentAssociationTag value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag[] $segmentAssociationTag
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList
     */
    public function setSegmentAssociationTag(array $segmentAssociationTag = array())
    {
        foreach ($segmentAssociationTag as $segmentAssociationListSegmentAssociationTagItem) {
            // validation for constraint: itemType
            if (!$segmentAssociationListSegmentAssociationTagItem instanceof \Sabre\UpdateReservation\StructType\SegmentAssociationTag) {
                throw new \InvalidArgumentException(sprintf('The SegmentAssociationTag property can only contain items of \Sabre\UpdateReservation\StructType\SegmentAssociationTag, "%s" given', is_object($segmentAssociationListSegmentAssociationTagItem) ? get_class($segmentAssociationListSegmentAssociationTagItem) : gettype($segmentAssociationListSegmentAssociationTagItem)), __LINE__);
            }
        }
        $this->SegmentAssociationTag = $segmentAssociationTag;
        return $this;
    }
    /**
     * Add item to SegmentAssociationTag value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag $item
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList
     */
    public function addToSegmentAssociationTag(\Sabre\UpdateReservation\StructType\SegmentAssociationTag $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SegmentAssociationTag) {
            throw new \InvalidArgumentException(sprintf('The SegmentAssociationTag property can only contain items of \Sabre\UpdateReservation\StructType\SegmentAssociationTag, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentAssociationTag[] = $item;
        return $this;
    }
    /**
     * Get SegmentAssociationId value
     * @return int[]|null
     */
    public function getSegmentAssociationId()
    {
        return $this->SegmentAssociationId;
    }
    /**
     * Set SegmentAssociationId value
     * @throws \InvalidArgumentException
     * @param int[] $segmentAssociationId
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList
     */
    public function setSegmentAssociationId(array $segmentAssociationId = array())
    {
        foreach ($segmentAssociationId as $segmentAssociationListSegmentAssociationIdItem) {
            // validation for constraint: itemType
            if (!is_numeric($segmentAssociationListSegmentAssociationIdItem)) {
                throw new \InvalidArgumentException(sprintf('The SegmentAssociationId property can only contain items of int, "%s" given', is_object($segmentAssociationListSegmentAssociationIdItem) ? get_class($segmentAssociationListSegmentAssociationIdItem) : gettype($segmentAssociationListSegmentAssociationIdItem)), __LINE__);
            }
        }
        $this->SegmentAssociationId = $segmentAssociationId;
        return $this;
    }
    /**
     * Add item to SegmentAssociationId value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList
     */
    public function addToSegmentAssociationId($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The SegmentAssociationId property can only contain items of int, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentAssociationId[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList
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
