<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegment StructType
 * Meta informations extracted from the WSDL
 * - documentation: Flight segment.
 * @subpackage Structs
 */
class FlightSegment extends AbstractStructBase
{
    /**
     * The MarketingAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MarketingAirline
     */
    public $MarketingAirline;
    /**
     * The flightNumber
     * Meta informations extracted from the WSDL
     * - documentation: "flightNumber" is used to return the flight number associated with the particular flight segment.
     * - use: optional
     * @var string
     */
    public $flightNumber;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Departure date and time.
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Designator code.
     * - minOccurs: 0
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the
     * cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than 900). | Identifies a flight number (1 to 4 numbers
     * followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing
     * purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than 900).
     * - union: _flightNumberPattern | _flightNumberLiterals
     * @var string
     */
    public $FlightNumber;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Indication of the status of the SSR notification. A value of 'HK' indicates the intended carrier has received the.
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The FlightType
     * Meta informations extracted from the WSDL
     * - documentation: Flight type.
     * - minOccurs: 0
     * @var string
     */
    public $FlightType;
    /**
     * The AirPort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Airport
     */
    public $AirPort;
    /**
     * The OperatingAirline
     * Meta informations extracted from the WSDL
     * - documentation: Operating airline code. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric
     * characters followed by an optional uppercase letter.
     * - minOccurs: 0
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $OperatingAirline;
    /**
     * The FareBasisCode
     * Meta informations extracted from the WSDL
     * - documentation: FBC.
     * - minOccurs: 0
     * @var string
     */
    public $FareBasisCode;
    /**
     * The ValidityDates
     * Meta informations extracted from the WSDL
     * - documentation: Validity dates.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ValidityDates
     */
    public $ValidityDates;
    /**
     * The BaggageAllowance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BaggageAllowance
     */
    public $BaggageAllowance;
    /**
     * The RPH
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for FlightSegment
     * @uses FlightSegment::setMarketingAirline()
     * @uses FlightSegment::setFlightNumber()
     * @uses FlightSegment::setDepartureDateTime()
     * @uses FlightSegment::setResBookDesigCode()
     * @uses FlightSegment::setFlightNumber_1()
     * @uses FlightSegment::setActionCode()
     * @uses FlightSegment::setFlightType()
     * @uses FlightSegment::setAirPort()
     * @uses FlightSegment::setOperatingAirline()
     * @uses FlightSegment::setFareBasisCode()
     * @uses FlightSegment::setValidityDates()
     * @uses FlightSegment::setBaggageAllowance()
     * @uses FlightSegment::setRPH()
     * @param \Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline
     * @param string $flightNumber
     * @param string $departureDateTime
     * @param string $resBookDesigCode
     * @param string $flightNumber
     * @param string $actionCode
     * @param string $flightType
     * @param \Sabre\UpdateReservation\StructType\Airport $airPort
     * @param string $operatingAirline
     * @param string $fareBasisCode
     * @param \Sabre\UpdateReservation\StructType\ValidityDates $validityDates
     * @param \Sabre\UpdateReservation\StructType\BaggageAllowance $baggageAllowance
     * @param string $rPH
     */
    public function __construct(\Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline = null, $flightNumber = null, $departureDateTime = null, $resBookDesigCode = null, $flightNumber_1 = null, $actionCode = null, $flightType = null, \Sabre\UpdateReservation\StructType\Airport $airPort = null, $operatingAirline = null, $fareBasisCode = null, \Sabre\UpdateReservation\StructType\ValidityDates $validityDates = null, \Sabre\UpdateReservation\StructType\BaggageAllowance $baggageAllowance = null, $rPH = null)
    {
        $this
            ->setMarketingAirline($marketingAirline)
            ->setFlightNumber($flightNumber)
            ->setDepartureDateTime($departureDateTime)
            ->setResBookDesigCode($resBookDesigCode)
            ->setFlightNumber_1($flightNumber_1)
            ->setActionCode($actionCode)
            ->setFlightType($flightType)
            ->setAirPort($airPort)
            ->setOperatingAirline($operatingAirline)
            ->setFareBasisCode($fareBasisCode)
            ->setValidityDates($validityDates)
            ->setBaggageAllowance($baggageAllowance)
            ->setRPH($rPH);
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
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setMarketingAirline(\Sabre\UpdateReservation\StructType\MarketingAirline $marketingAirline = null)
    {
        $this->MarketingAirline = $marketingAirline;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->flightNumber = $flightNumber;
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
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
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
     * Get ResBookDesigCode value
     * @return string|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber_1()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setFlightNumber_1($flightNumber_1 = null)
    {
        // validation for constraint: pattern
        if (is_scalar($flightNumber_1) && !preg_match('/[0-9]{1,4}[A-Z]?/', $flightNumber_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($flightNumber_1, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($flightNumber_1) && !is_string($flightNumber_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber_1)), __LINE__);
        }
        $this->FlightNumber = $flightNumber_1;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get FlightType value
     * @return string|null
     */
    public function getFlightType()
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @param string $flightType
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setFlightType($flightType = null)
    {
        // validation for constraint: string
        if (!is_null($flightType) && !is_string($flightType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightType)), __LINE__);
        }
        $this->FlightType = $flightType;
        return $this;
    }
    /**
     * Get AirPort value
     * @return \Sabre\UpdateReservation\StructType\Airport|null
     */
    public function getAirPort()
    {
        return $this->AirPort;
    }
    /**
     * Set AirPort value
     * @param \Sabre\UpdateReservation\StructType\Airport $airPort
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setAirPort(\Sabre\UpdateReservation\StructType\Airport $airPort = null)
    {
        $this->AirPort = $airPort;
        return $this;
    }
    /**
     * Get OperatingAirline value
     * @return string|null
     */
    public function getOperatingAirline()
    {
        return $this->OperatingAirline;
    }
    /**
     * Set OperatingAirline value
     * @param string $operatingAirline
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setOperatingAirline($operatingAirline = null)
    {
        // validation for constraint: pattern
        if (is_scalar($operatingAirline) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $operatingAirline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($operatingAirline, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($operatingAirline) && !is_string($operatingAirline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingAirline)), __LINE__);
        }
        $this->OperatingAirline = $operatingAirline;
        return $this;
    }
    /**
     * Get FareBasisCode value
     * @return string|null
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setFareBasisCode($fareBasisCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBasisCode)), __LINE__);
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Get ValidityDates value
     * @return \Sabre\UpdateReservation\StructType\ValidityDates|null
     */
    public function getValidityDates()
    {
        return $this->ValidityDates;
    }
    /**
     * Set ValidityDates value
     * @param \Sabre\UpdateReservation\StructType\ValidityDates $validityDates
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setValidityDates(\Sabre\UpdateReservation\StructType\ValidityDates $validityDates = null)
    {
        $this->ValidityDates = $validityDates;
        return $this;
    }
    /**
     * Get BaggageAllowance value
     * @return \Sabre\UpdateReservation\StructType\BaggageAllowance|null
     */
    public function getBaggageAllowance()
    {
        return $this->BaggageAllowance;
    }
    /**
     * Set BaggageAllowance value
     * @param \Sabre\UpdateReservation\StructType\BaggageAllowance $baggageAllowance
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public function setBaggageAllowance(\Sabre\UpdateReservation\StructType\BaggageAllowance $baggageAllowance = null)
    {
        $this->BaggageAllowance = $baggageAllowance;
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
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FlightSegment
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
