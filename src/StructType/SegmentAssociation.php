<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentAssociation StructType
 * Meta informations extracted from the WSDL
 * - maxOccurs: unbounded
 * - minOccurs: 0
 * - type: SegmentAssociation
 * @subpackage Structs
 */
class SegmentAssociation extends AbstractStructBase
{
    /**
     * The AirSegment
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationTag
     */
    public $AirSegment;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Id of record, unique within PNR
     * @var string
     */
    public $Id;
    /**
     * The SegmentAssociationId
     * Meta informations extracted from the WSDL
     * - documentation: Id of a segment record, unique within itinerary
     * @var string
     */
    public $SegmentAssociationId;
    /**
     * The Sequence
     * Meta informations extracted from the WSDL
     * - documentation: Sequence number of a segment record, unique within itinerary
     * @var string
     */
    public $Sequence;
    /**
     * Constructor method for SegmentAssociation
     * @uses SegmentAssociation::setAirSegment()
     * @uses SegmentAssociation::setId()
     * @uses SegmentAssociation::setSegmentAssociationId()
     * @uses SegmentAssociation::setSequence()
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag $airSegment
     * @param string $id
     * @param string $segmentAssociationId
     * @param string $sequence
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SegmentAssociationTag $airSegment = null, $id = null, $segmentAssociationId = null, $sequence = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setId($id)
            ->setSegmentAssociationId($segmentAssociationId)
            ->setSequence($sequence);
    }
    /**
     * Get AirSegment value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationTag|null
     */
    public function getAirSegment()
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationTag $airSegment
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociation
     */
    public function setAirSegment(\Sabre\UpdateReservation\StructType\SegmentAssociationTag $airSegment = null)
    {
        $this->AirSegment = $airSegment;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociation
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get SegmentAssociationId value
     * @return string|null
     */
    public function getSegmentAssociationId()
    {
        return $this->SegmentAssociationId;
    }
    /**
     * Set SegmentAssociationId value
     * @param string $segmentAssociationId
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociation
     */
    public function setSegmentAssociationId($segmentAssociationId = null)
    {
        // validation for constraint: string
        if (!is_null($segmentAssociationId) && !is_string($segmentAssociationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentAssociationId)), __LINE__);
        }
        $this->SegmentAssociationId = $segmentAssociationId;
        return $this;
    }
    /**
     * Get Sequence value
     * @return string|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }
    /**
     * Set Sequence value
     * @param string $sequence
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociation
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: string
        if (!is_null($sequence) && !is_string($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->Sequence = $sequence;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociation
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
