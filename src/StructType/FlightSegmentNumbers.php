<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentNumbers StructType
 * @subpackage Structs
 */
class FlightSegmentNumbers extends AbstractStructBase
{
    /**
     * The FlightSegmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: "FlightSegmentNumber" is used to display flight segments number covered by this particular fare component.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FlightSegmentNumber;
    /**
     * Constructor method for FlightSegmentNumbers
     * @uses FlightSegmentNumbers::setFlightSegmentNumber()
     * @param string[] $flightSegmentNumber
     */
    public function __construct(array $flightSegmentNumber = array())
    {
        $this
            ->setFlightSegmentNumber($flightSegmentNumber);
    }
    /**
     * Get FlightSegmentNumber value
     * @return string[]|null
     */
    public function getFlightSegmentNumber()
    {
        return $this->FlightSegmentNumber;
    }
    /**
     * Set FlightSegmentNumber value
     * @throws \InvalidArgumentException
     * @param string[] $flightSegmentNumber
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentNumbers
     */
    public function setFlightSegmentNumber(array $flightSegmentNumber = array())
    {
        foreach ($flightSegmentNumber as $flightSegmentNumbersFlightSegmentNumberItem) {
            // validation for constraint: itemType
            if (!is_string($flightSegmentNumbersFlightSegmentNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The FlightSegmentNumber property can only contain items of string, "%s" given', is_object($flightSegmentNumbersFlightSegmentNumberItem) ? get_class($flightSegmentNumbersFlightSegmentNumberItem) : gettype($flightSegmentNumbersFlightSegmentNumberItem)), __LINE__);
            }
        }
        $this->FlightSegmentNumber = $flightSegmentNumber;
        return $this;
    }
    /**
     * Add item to FlightSegmentNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentNumbers
     */
    public function addToFlightSegmentNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FlightSegmentNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegmentNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentNumbers
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
