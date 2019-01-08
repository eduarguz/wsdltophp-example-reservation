<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Air StructType
 * Meta informations extracted from the WSDL
 * - documentation: Flight reservation information. | Flight reservation information.
 * @subpackage Structs
 */
class Air extends AirType
{
    /**
     * The CheckInAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CheckInAirline
     */
    public $CheckInAirline;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items). | The Reference Place Holder (RPH) is
     * an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items). | The Reference Place Holder (RPH) is an index code used to identify an instance in a
     * collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DepartureAirport
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ArrivalAirport
     */
    public $ArrivalAirport;
    /**
     * The MarketingAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MarketingAirline
     */
    public $MarketingAirline;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number of the flight.
     * - use: optional
     * @var string
     */
    public $FlightNumber;
    /**
     * Constructor method for Air
     * @uses Air::setCheckInAirline()
     * @uses Air::setRPH()
     * @uses Air::setDepartureAirport()
     * @uses Air::setArrivalAirport()
     * @uses Air::setMarketingAirline()
     * @uses Air::setDepartureDateTime()
     * @uses Air::setFlightNumber()
     * @param \Sabre\UpdateReservation\StructType\CheckInAirline $checkInAirline
     * @param string $rPH
     * @param \Sabre\UpdateReservation\StructType\DepartureAirport $departureAirport
     * @param \Sabre\UpdateReservation\StructType\ArrivalAirport $arrivalAirport
     * @param \Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline
     * @param string $departureDateTime
     * @param string $flightNumber
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CheckInAirline $checkInAirline = null, $rPH = null, \Sabre\UpdateReservation\StructType\DepartureAirport $departureAirport = null, \Sabre\UpdateReservation\StructType\ArrivalAirport $arrivalAirport = null, \Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline = null, $departureDateTime = null, $flightNumber = null)
    {
        $this
            ->setCheckInAirline($checkInAirline)
            ->setRPH($rPH)
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setMarketingAirline($marketingAirline)
            ->setDepartureDateTime($departureDateTime)
            ->setFlightNumber($flightNumber);
    }
    /**
     * Get CheckInAirline value
     * @return \Sabre\UpdateReservation\StructType\CheckInAirline|null
     */
    public function getCheckInAirline()
    {
        return $this->CheckInAirline;
    }
    /**
     * Set CheckInAirline value
     * @param \Sabre\UpdateReservation\StructType\CheckInAirline $checkInAirline
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setCheckInAirline(\Sabre\UpdateReservation\StructType\CheckInAirline $checkInAirline = null)
    {
        $this->CheckInAirline = $checkInAirline;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return \Sabre\UpdateReservation\StructType\DepartureAirport|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \Sabre\UpdateReservation\StructType\DepartureAirport $departureAirport
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setDepartureAirport(\Sabre\UpdateReservation\StructType\DepartureAirport $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return \Sabre\UpdateReservation\StructType\ArrivalAirport|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param \Sabre\UpdateReservation\StructType\ArrivalAirport $arrivalAirport
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setArrivalAirport(\Sabre\UpdateReservation\StructType\ArrivalAirport $arrivalAirport = null)
    {
        $this->ArrivalAirport = $arrivalAirport;
        return $this;
    }
    /**
     * Get MarketingAirline value
     * @return \Sabre\UpdateReservation\StructType\MarketingAirline|null
     */
    public function getMarketingAirline()
    {
        return $this->MarketingAirline;
    }
    /**
     * Set MarketingAirline value
     * @param \Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setMarketingAirline(\Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline = null)
    {
        $this->MarketingAirline = $marketingAirline;
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\Air
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Air
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
