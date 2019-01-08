<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HistoryTransaction.PNRB StructType
 * @subpackage Structs
 */
class HistoryTransaction_PNRB extends AbstractStructBase
{
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public $Passengers;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentType_PNRB
     */
    public $Segments;
    /**
     * The historySequence
     * @var string
     */
    public $historySequence;
    /**
     * The historyDateTime
     * @var string
     */
    public $historyDateTime;
    /**
     * Constructor method for HistoryTransaction.PNRB
     * @uses HistoryTransaction_PNRB::setPassengers()
     * @uses HistoryTransaction_PNRB::setSegments()
     * @uses HistoryTransaction_PNRB::setHistorySequence()
     * @uses HistoryTransaction_PNRB::setHistoryDateTime()
     * @param \Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers
     * @param \Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments
     * @param string $historySequence
     * @param string $historyDateTime
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers = null, \Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments = null, $historySequence = null, $historyDateTime = null)
    {
        $this
            ->setPassengers($passengers)
            ->setSegments($segments)
            ->setHistorySequence($historySequence)
            ->setHistoryDateTime($historyDateTime);
    }
    /**
     * Get Passengers value
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB
     */
    public function setPassengers(\Sabre\UpdateReservation\StructType\Passengers_PNRB $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Get Segments value
     * @return \Sabre\UpdateReservation\StructType\SegmentType_PNRB|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB
     */
    public function setSegments(\Sabre\UpdateReservation\StructType\SegmentType_PNRB $segments = null)
    {
        $this->Segments = $segments;
        return $this;
    }
    /**
     * Get historySequence value
     * @return string|null
     */
    public function getHistorySequence()
    {
        return $this->historySequence;
    }
    /**
     * Set historySequence value
     * @param string $historySequence
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB
     */
    public function setHistorySequence($historySequence = null)
    {
        // validation for constraint: string
        if (!is_null($historySequence) && !is_string($historySequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historySequence)), __LINE__);
        }
        $this->historySequence = $historySequence;
        return $this;
    }
    /**
     * Get historyDateTime value
     * @return string|null
     */
    public function getHistoryDateTime()
    {
        return $this->historyDateTime;
    }
    /**
     * Set historyDateTime value
     * @param string $historyDateTime
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB
     */
    public function setHistoryDateTime($historyDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($historyDateTime) && !is_string($historyDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyDateTime)), __LINE__);
        }
        $this->historyDateTime = $historyDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction_PNRB
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
