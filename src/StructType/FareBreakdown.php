<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBreakdown StructType
 * @subpackage Structs
 */
class FareBreakdown extends PassengerQuantity
{
    /**
     * The FareBasisCode
     * Meta informations extracted from the WSDL
     * - documentation: FBC.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FareBasisCode;
    /**
     * The FareCalc
     * Meta informations extracted from the WSDL
     * - documentation: Fare calculation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $FareCalc;
    /**
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FlightSegment[]
     */
    public $FlightSegment;
    /**
     * The FareComponent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareComponent[]
     */
    public $FareComponent;
    /**
     * The PassengerTypeRequested
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerTypeRequested
     */
    public $PassengerTypeRequested;
    /**
     * The PassengerTypePriced
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerTypePriced
     */
    public $PassengerTypePriced;
    /**
     * Constructor method for FareBreakdown
     * @uses FareBreakdown::setFareBasisCode()
     * @uses FareBreakdown::setFareCalc()
     * @uses FareBreakdown::setFlightSegment()
     * @uses FareBreakdown::setFareComponent()
     * @uses FareBreakdown::setPassengerTypeRequested()
     * @uses FareBreakdown::setPassengerTypePriced()
     * @param string[] $fareBasisCode
     * @param string[] $fareCalc
     * @param \Sabre\UpdateReservation\StructType\FlightSegment[] $flightSegment
     * @param \Sabre\UpdateReservation\StructType\FareComponent[] $fareComponent
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeRequested $passengerTypeRequested
     * @param \Sabre\UpdateReservation\StructType\PassengerTypePriced $passengerTypePriced
     */
    public function __construct(array $fareBasisCode = array(), array $fareCalc = array(), array $flightSegment = array(), array $fareComponent = array(), \Sabre\UpdateReservation\StructType\PassengerTypeRequested $passengerTypeRequested = null, \Sabre\UpdateReservation\StructType\PassengerTypePriced $passengerTypePriced = null)
    {
        $this
            ->setFareBasisCode($fareBasisCode)
            ->setFareCalc($fareCalc)
            ->setFlightSegment($flightSegment)
            ->setFareComponent($fareComponent)
            ->setPassengerTypeRequested($passengerTypeRequested)
            ->setPassengerTypePriced($passengerTypePriced);
    }
    /**
     * Get FareBasisCode value
     * @return string[]|null
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @throws \InvalidArgumentException
     * @param string[] $fareBasisCode
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function setFareBasisCode(array $fareBasisCode = array())
    {
        foreach ($fareBasisCode as $fareBreakdownFareBasisCodeItem) {
            // validation for constraint: itemType
            if (!is_string($fareBreakdownFareBasisCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The FareBasisCode property can only contain items of string, "%s" given', is_object($fareBreakdownFareBasisCodeItem) ? get_class($fareBreakdownFareBasisCodeItem) : gettype($fareBreakdownFareBasisCodeItem)), __LINE__);
            }
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Add item to FareBasisCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function addToFareBasisCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FareBasisCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareBasisCode[] = $item;
        return $this;
    }
    /**
     * Get FareCalc value
     * @return string[]|null
     */
    public function getFareCalc()
    {
        return $this->FareCalc;
    }
    /**
     * Set FareCalc value
     * @throws \InvalidArgumentException
     * @param string[] $fareCalc
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function setFareCalc(array $fareCalc = array())
    {
        foreach ($fareCalc as $fareBreakdownFareCalcItem) {
            // validation for constraint: itemType
            if (!is_string($fareBreakdownFareCalcItem)) {
                throw new \InvalidArgumentException(sprintf('The FareCalc property can only contain items of string, "%s" given', is_object($fareBreakdownFareCalcItem) ? get_class($fareBreakdownFareCalcItem) : gettype($fareBreakdownFareCalcItem)), __LINE__);
            }
        }
        $this->FareCalc = $fareCalc;
        return $this;
    }
    /**
     * Add item to FareCalc value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function addToFareCalc($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The FareCalc property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareCalc[] = $item;
        return $this;
    }
    /**
     * Get FlightSegment value
     * @return \Sabre\UpdateReservation\StructType\FlightSegment[]|null
     */
    public function getFlightSegment()
    {
        return $this->FlightSegment;
    }
    /**
     * Set FlightSegment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FlightSegment[] $flightSegment
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function setFlightSegment(array $flightSegment = array())
    {
        foreach ($flightSegment as $fareBreakdownFlightSegmentItem) {
            // validation for constraint: itemType
            if (!$fareBreakdownFlightSegmentItem instanceof \Sabre\UpdateReservation\StructType\FlightSegment) {
                throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of \Sabre\UpdateReservation\StructType\FlightSegment, "%s" given', is_object($fareBreakdownFlightSegmentItem) ? get_class($fareBreakdownFlightSegmentItem) : gettype($fareBreakdownFlightSegmentItem)), __LINE__);
            }
        }
        $this->FlightSegment = $flightSegment;
        return $this;
    }
    /**
     * Add item to FlightSegment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FlightSegment $item
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function addToFlightSegment(\Sabre\UpdateReservation\StructType\FlightSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FlightSegment) {
            throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of \Sabre\UpdateReservation\StructType\FlightSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegment[] = $item;
        return $this;
    }
    /**
     * Get FareComponent value
     * @return \Sabre\UpdateReservation\StructType\FareComponent[]|null
     */
    public function getFareComponent()
    {
        return $this->FareComponent;
    }
    /**
     * Set FareComponent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareComponent[] $fareComponent
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function setFareComponent(array $fareComponent = array())
    {
        foreach ($fareComponent as $fareBreakdownFareComponentItem) {
            // validation for constraint: itemType
            if (!$fareBreakdownFareComponentItem instanceof \Sabre\UpdateReservation\StructType\FareComponent) {
                throw new \InvalidArgumentException(sprintf('The FareComponent property can only contain items of \Sabre\UpdateReservation\StructType\FareComponent, "%s" given', is_object($fareBreakdownFareComponentItem) ? get_class($fareBreakdownFareComponentItem) : gettype($fareBreakdownFareComponentItem)), __LINE__);
            }
        }
        $this->FareComponent = $fareComponent;
        return $this;
    }
    /**
     * Add item to FareComponent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareComponent $item
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function addToFareComponent(\Sabre\UpdateReservation\StructType\FareComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FareComponent) {
            throw new \InvalidArgumentException(sprintf('The FareComponent property can only contain items of \Sabre\UpdateReservation\StructType\FareComponent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComponent[] = $item;
        return $this;
    }
    /**
     * Get PassengerTypeRequested value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeRequested|null
     */
    public function getPassengerTypeRequested()
    {
        return $this->PassengerTypeRequested;
    }
    /**
     * Set PassengerTypeRequested value
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeRequested $passengerTypeRequested
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function setPassengerTypeRequested(\Sabre\UpdateReservation\StructType\PassengerTypeRequested $passengerTypeRequested = null)
    {
        $this->PassengerTypeRequested = $passengerTypeRequested;
        return $this;
    }
    /**
     * Get PassengerTypePriced value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypePriced|null
     */
    public function getPassengerTypePriced()
    {
        return $this->PassengerTypePriced;
    }
    /**
     * Set PassengerTypePriced value
     * @param \Sabre\UpdateReservation\StructType\PassengerTypePriced $passengerTypePriced
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
     */
    public function setPassengerTypePriced(\Sabre\UpdateReservation\StructType\PassengerTypePriced $passengerTypePriced = null)
    {
        $this->PassengerTypePriced = $passengerTypePriced;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FareBreakdown
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
