<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentBundledSell.PNRB StructType
 * @subpackage Structs
 */
class AirSegmentBundledSell_PNRB extends AbstractStructBase
{
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $AirlineCode;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDate;
    /**
     * The DepartureCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureCity;
    /**
     * The ArrivalCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalCity;
    /**
     * The ConnectingCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConnectingCity;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTime;
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
     * The ArrivalDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDate;
    /**
     * The ArrivalTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalTime;
    /**
     * The NumberOfStops
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfStops;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The SegmentSpecialRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public $SegmentSpecialRequests;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public $FrequentFlyer;
    /**
     * The segmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $segmentNumber;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for AirSegmentBundledSell.PNRB
     * @uses AirSegmentBundledSell_PNRB::setClassOfService()
     * @uses AirSegmentBundledSell_PNRB::setAirlineCode()
     * @uses AirSegmentBundledSell_PNRB::setDepartureDate()
     * @uses AirSegmentBundledSell_PNRB::setDepartureCity()
     * @uses AirSegmentBundledSell_PNRB::setArrivalCity()
     * @uses AirSegmentBundledSell_PNRB::setConnectingCity()
     * @uses AirSegmentBundledSell_PNRB::setDepartureTime()
     * @uses AirSegmentBundledSell_PNRB::setFlightNumber()
     * @uses AirSegmentBundledSell_PNRB::setArrivalDate()
     * @uses AirSegmentBundledSell_PNRB::setArrivalTime()
     * @uses AirSegmentBundledSell_PNRB::setNumberOfStops()
     * @uses AirSegmentBundledSell_PNRB::setStatusCode()
     * @uses AirSegmentBundledSell_PNRB::setSegmentSpecialRequests()
     * @uses AirSegmentBundledSell_PNRB::setFrequentFlyer()
     * @uses AirSegmentBundledSell_PNRB::setSegmentNumber()
     * @uses AirSegmentBundledSell_PNRB::setId()
     * @uses AirSegmentBundledSell_PNRB::setType()
     * @uses AirSegmentBundledSell_PNRB::setOp()
     * @param string $classOfService
     * @param string $airlineCode
     * @param string $departureDate
     * @param string $departureCity
     * @param string $arrivalCity
     * @param string $connectingCity
     * @param string $departureTime
     * @param string $flightNumber
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param int $numberOfStops
     * @param string $statusCode
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @param int $segmentNumber
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($classOfService = null, $airlineCode = null, $departureDate = null, $departureCity = null, $arrivalCity = null, $connectingCity = null, $departureTime = null, $flightNumber = null, $arrivalDate = null, $arrivalTime = null, $numberOfStops = null, $statusCode = null, \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null, \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null, $segmentNumber = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setClassOfService($classOfService)
            ->setAirlineCode($airlineCode)
            ->setDepartureDate($departureDate)
            ->setDepartureCity($departureCity)
            ->setArrivalCity($arrivalCity)
            ->setConnectingCity($connectingCity)
            ->setDepartureTime($departureTime)
            ->setFlightNumber($flightNumber)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setNumberOfStops($numberOfStops)
            ->setStatusCode($statusCode)
            ->setSegmentSpecialRequests($segmentSpecialRequests)
            ->setFrequentFlyer($frequentFlyer)
            ->setSegmentNumber($segmentNumber)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService()
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setClassOfService($classOfService = null)
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airlineCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($airlineCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        return $this;
    }
    /**
     * Get DepartureCity value
     * @return string|null
     */
    public function getDepartureCity()
    {
        return $this->DepartureCity;
    }
    /**
     * Set DepartureCity value
     * @param string $departureCity
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setDepartureCity($departureCity = null)
    {
        // validation for constraint: string
        if (!is_null($departureCity) && !is_string($departureCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureCity)), __LINE__);
        }
        $this->DepartureCity = $departureCity;
        return $this;
    }
    /**
     * Get ArrivalCity value
     * @return string|null
     */
    public function getArrivalCity()
    {
        return $this->ArrivalCity;
    }
    /**
     * Set ArrivalCity value
     * @param string $arrivalCity
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setArrivalCity($arrivalCity = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalCity) && !is_string($arrivalCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalCity)), __LINE__);
        }
        $this->ArrivalCity = $arrivalCity;
        return $this;
    }
    /**
     * Get ConnectingCity value
     * @return string|null
     */
    public function getConnectingCity()
    {
        return $this->ConnectingCity;
    }
    /**
     * Set ConnectingCity value
     * @param string $connectingCity
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setConnectingCity($connectingCity = null)
    {
        // validation for constraint: string
        if (!is_null($connectingCity) && !is_string($connectingCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectingCity)), __LINE__);
        }
        $this->ConnectingCity = $connectingCity;
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setDepartureTime($departureTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($flightNumber) && !preg_match('/[0-9]{1,4}[A-Z]?/', $flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($flightNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get ArrivalDate value
     * @return string|null
     */
    public function getArrivalDate()
    {
        return $this->ArrivalDate;
    }
    /**
     * Set ArrivalDate value
     * @param string $arrivalDate
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setArrivalDate($arrivalDate = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDate)), __LINE__);
        }
        $this->ArrivalDate = $arrivalDate;
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime()
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setArrivalTime($arrivalTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * Get NumberOfStops value
     * @return int|null
     */
    public function getNumberOfStops()
    {
        return $this->NumberOfStops;
    }
    /**
     * Set NumberOfStops value
     * @param int $numberOfStops
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setNumberOfStops($numberOfStops = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfStops) && !is_numeric($numberOfStops)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfStops)), __LINE__);
        }
        $this->NumberOfStops = $numberOfStops;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get SegmentSpecialRequests value
     * @return \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB|null
     */
    public function getSegmentSpecialRequests()
    {
        return $this->SegmentSpecialRequests;
    }
    /**
     * Set SegmentSpecialRequests value
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setSegmentSpecialRequests(\Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null)
    {
        $this->SegmentSpecialRequests = $segmentSpecialRequests;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB|null
     */
    public function getFrequentFlyer()
    {
        return $this->FrequentFlyer;
    }
    /**
     * Set FrequentFlyer value
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setFrequentFlyer(\Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null)
    {
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Get segmentNumber value
     * @return int|null
     */
    public function getSegmentNumber()
    {
        return $this->segmentNumber;
    }
    /**
     * Set segmentNumber value
     * @param int $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($segmentNumber) && !is_numeric($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->segmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\AirSegmentType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AirSegmentType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AirSegmentType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\AirSegmentType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirSegmentBundledSell_PNRB
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
