<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmationUpdate.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to update confirmation for air segment
 * @subpackage Structs
 */
class ConfirmationUpdate_PNRB extends AbstractStructBase
{
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - documentation: Record Locator for booking in airline's system (e.g. "DABGTQ")
     * @var string
     */
    public $RecordLocator;
    /**
     * The SegmentAccess
     * Meta informations extracted from the WSDL
     * - documentation: Code for segment access (e.g. "RL", "DC")
     * @var string
     */
    public $SegmentAccess;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Code of airline confirming segment (e.g. "AA", "B6")
     * @var string
     */
    public $AirlineCode;
    /**
     * Constructor method for ConfirmationUpdate.PNRB
     * @uses ConfirmationUpdate_PNRB::setRecordLocator()
     * @uses ConfirmationUpdate_PNRB::setSegmentAccess()
     * @uses ConfirmationUpdate_PNRB::setAirlineCode()
     * @param string $recordLocator
     * @param string $segmentAccess
     * @param string $airlineCode
     */
    public function __construct($recordLocator = null, $segmentAccess = null, $airlineCode = null)
    {
        $this
            ->setRecordLocator($recordLocator)
            ->setSegmentAccess($segmentAccess)
            ->setAirlineCode($airlineCode);
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get SegmentAccess value
     * @return string|null
     */
    public function getSegmentAccess()
    {
        return $this->SegmentAccess;
    }
    /**
     * Set SegmentAccess value
     * @param string $segmentAccess
     * @return \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB
     */
    public function setSegmentAccess($segmentAccess = null)
    {
        // validation for constraint: string
        if (!is_null($segmentAccess) && !is_string($segmentAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentAccess)), __LINE__);
        }
        $this->SegmentAccess = $segmentAccess;
        return $this;
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB
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
