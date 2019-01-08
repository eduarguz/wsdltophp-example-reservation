<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessingTime StructType
 * Meta informations extracted from the WSDL
 * - documentation: Approximate time to process visa
 * @subpackage Structs
 */
class ProcessingTime extends AbstractStructBase
{
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Duration of processing time
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - documentation: Notes for processing time
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Unit
     * Meta informations extracted from the WSDL
     * - documentation: Processing time unit
     * - minOccurs: 0
     * @var string
     */
    public $Unit;
    /**
     * Constructor method for ProcessingTime
     * @uses ProcessingTime::setDuration()
     * @uses ProcessingTime::setNotes()
     * @uses ProcessingTime::setUnit()
     * @param string $duration
     * @param string $notes
     * @param string $unit
     */
    public function __construct($duration = null, $notes = null, $unit = null)
    {
        $this
            ->setDuration($duration)
            ->setNotes($notes)
            ->setUnit($unit);
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Sabre\UpdateReservation\StructType\ProcessingTime
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Sabre\UpdateReservation\StructType\ProcessingTime
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param string $unit
     * @return \Sabre\UpdateReservation\StructType\ProcessingTime
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unit)), __LINE__);
        }
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProcessingTime
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
