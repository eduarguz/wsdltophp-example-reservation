<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentRPHsType StructType
 * @subpackage Structs
 */
class FlightSegmentRPHsType extends AbstractStructBase
{
    /**
     * The FlightSegmentRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to the flight segments for this traveler
     * - maxOccurs: 99
     * @var string[]
     */
    public $FlightSegmentRPH;
    /**
     * Constructor method for FlightSegmentRPHsType
     * @uses FlightSegmentRPHsType::setFlightSegmentRPH()
     * @param string[] $flightSegmentRPH
     */
    public function __construct(array $flightSegmentRPH = array())
    {
        $this
            ->setFlightSegmentRPH($flightSegmentRPH);
    }
    /**
     * Get FlightSegmentRPH value
     * @return string[]|null
     */
    public function getFlightSegmentRPH()
    {
        return $this->FlightSegmentRPH;
    }
    /**
     * Set FlightSegmentRPH value
     * @throws \InvalidArgumentException
     * @param string[] $flightSegmentRPH
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType
     */
    public function setFlightSegmentRPH(array $flightSegmentRPH = array())
    {
        foreach ($flightSegmentRPH as $flightSegmentRPHsTypeFlightSegmentRPHItem) {
            // validation for constraint: itemType
            if (!is_string($flightSegmentRPHsTypeFlightSegmentRPHItem)) {
                throw new \InvalidArgumentException(sprintf('The FlightSegmentRPH property can only contain items of string, "%s" given', is_object($flightSegmentRPHsTypeFlightSegmentRPHItem) ? get_class($flightSegmentRPHsTypeFlightSegmentRPHItem) : gettype($flightSegmentRPHsTypeFlightSegmentRPHItem)), __LINE__);
            }
        }
        $this->FlightSegmentRPH = $flightSegmentRPH;
        return $this;
    }
    /**
     * Add item to FlightSegmentRPH value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType
     */
    public function addToFlightSegmentRPH($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FlightSegmentRPH property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegmentRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType
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
