<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Segments.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: When non-air segments are defined they will be added to this sequence.
 * @subpackage Structs
 */
class Segments_PNRB extends AbstractStructBase
{
    /**
     * The AirSegmentBundledSell
     * @var \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public $AirSegmentBundledSell;
    /**
     * The AirSegment
     * @var \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public $AirSegment;
    /**
     * The AirSegmentMultiLeg
     * @var \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public $AirSegmentMultiLeg;
    /**
     * The AirSegmentOpen
     * @var \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
     */
    public $AirSegmentOpen;
    /**
     * The AirSegmentARNK
     * @var \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB
     */
    public $AirSegmentARNK;
    /**
     * The AirSegmentSellFromBSGInventory
     * @var \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public $AirSegmentSellFromBSGInventory;
    /**
     * The addARNKS
     * @var bool
     */
    public $addARNKS;
    /**
     * Constructor method for Segments.PNRB
     * @uses Segments_PNRB::setAirSegmentBundledSell()
     * @uses Segments_PNRB::setAirSegment()
     * @uses Segments_PNRB::setAirSegmentMultiLeg()
     * @uses Segments_PNRB::setAirSegmentOpen()
     * @uses Segments_PNRB::setAirSegmentARNK()
     * @uses Segments_PNRB::setAirSegmentSellFromBSGInventory()
     * @uses Segments_PNRB::setAddARNKS()
     * @param \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB $airSegmentBundledSell
     * @param \Sabre\UpdateReservation\StructType\AirSegment_PNRB $airSegment
     * @param \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB $airSegmentMultiLeg
     * @param \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB $airSegmentOpen
     * @param \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB $airSegmentARNK
     * @param \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $airSegmentSellFromBSGInventory
     * @param bool $addARNKS
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB $airSegmentBundledSell = null, \Sabre\UpdateReservation\StructType\AirSegment_PNRB $airSegment = null, \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB $airSegmentMultiLeg = null, \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB $airSegmentOpen = null, \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB $airSegmentARNK = null, \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $airSegmentSellFromBSGInventory = null, $addARNKS = null)
    {
        $this
            ->setAirSegmentBundledSell($airSegmentBundledSell)
            ->setAirSegment($airSegment)
            ->setAirSegmentMultiLeg($airSegmentMultiLeg)
            ->setAirSegmentOpen($airSegmentOpen)
            ->setAirSegmentARNK($airSegmentARNK)
            ->setAirSegmentSellFromBSGInventory($airSegmentSellFromBSGInventory)
            ->setAddARNKS($addARNKS);
    }
    /**
     * Get AirSegmentBundledSell value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB|null
     */
    public function getAirSegmentBundledSell()
    {
        return $this->AirSegmentBundledSell;
    }
    /**
     * Set AirSegmentBundledSell value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB $airSegmentBundledSell
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAirSegmentBundledSell(\Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB $airSegmentBundledSell = null)
    {
        $this->AirSegmentBundledSell = $airSegmentBundledSell;
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB|null
     */
    public function getAirSegment()
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Sabre\UpdateReservation\StructType\AirSegment_PNRB $airSegment
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAirSegment(\Sabre\UpdateReservation\StructType\AirSegment_PNRB $airSegment = null)
    {
        $this->AirSegment = $airSegment;
        return $this;
    }
    /**
     * Get AirSegmentMultiLeg value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB|null
     */
    public function getAirSegmentMultiLeg()
    {
        return $this->AirSegmentMultiLeg;
    }
    /**
     * Set AirSegmentMultiLeg value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB $airSegmentMultiLeg
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAirSegmentMultiLeg(\Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB $airSegmentMultiLeg = null)
    {
        $this->AirSegmentMultiLeg = $airSegmentMultiLeg;
        return $this;
    }
    /**
     * Get AirSegmentOpen value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB|null
     */
    public function getAirSegmentOpen()
    {
        return $this->AirSegmentOpen;
    }
    /**
     * Set AirSegmentOpen value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB $airSegmentOpen
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAirSegmentOpen(\Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB $airSegmentOpen = null)
    {
        $this->AirSegmentOpen = $airSegmentOpen;
        return $this;
    }
    /**
     * Get AirSegmentARNK value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB|null
     */
    public function getAirSegmentARNK()
    {
        return $this->AirSegmentARNK;
    }
    /**
     * Set AirSegmentARNK value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB $airSegmentARNK
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAirSegmentARNK(\Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB $airSegmentARNK = null)
    {
        $this->AirSegmentARNK = $airSegmentARNK;
        return $this;
    }
    /**
     * Get AirSegmentSellFromBSGInventory value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB|null
     */
    public function getAirSegmentSellFromBSGInventory()
    {
        return $this->AirSegmentSellFromBSGInventory;
    }
    /**
     * Set AirSegmentSellFromBSGInventory value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $airSegmentSellFromBSGInventory
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAirSegmentSellFromBSGInventory(\Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $airSegmentSellFromBSGInventory = null)
    {
        $this->AirSegmentSellFromBSGInventory = $airSegmentSellFromBSGInventory;
        return $this;
    }
    /**
     * Get addARNKS value
     * @return bool|null
     */
    public function getAddARNKS()
    {
        return $this->addARNKS;
    }
    /**
     * Set addARNKS value
     * @param bool $addARNKS
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
     */
    public function setAddARNKS($addARNKS = null)
    {
        // validation for constraint: boolean
        if (!is_null($addARNKS) && !is_bool($addARNKS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addARNKS)), __LINE__);
        }
        $this->addARNKS = $addARNKS;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Segments_PNRB
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
