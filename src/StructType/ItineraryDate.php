<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryDate StructType
 * @subpackage Structs
 */
class ItineraryDate extends AbstractStructBase
{
    /**
     * The Start
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Start;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $End;
    /**
     * Constructor method for ItineraryDate
     * @uses ItineraryDate::setStart()
     * @uses ItineraryDate::setEnd()
     * @param string $start
     * @param string $end
     */
    public function __construct($start = null, $end = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Sabre\UpdateReservation\StructType\ItineraryDate
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Sabre\UpdateReservation\StructType\ItineraryDate
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ItineraryDate
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
