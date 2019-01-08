<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegment.PNRB StructType
 * @subpackage Structs
 */
class AirSegment_PNRB extends AbstractStructBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The NumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberOfSeats;
    /**
     * The AirlineDesignator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $AirlineDesignator;
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
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
     * The NumberOfStops
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberOfStops;
    /**
     * The SegmentTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SegmentTag;
    /**
     * The SpecialMeal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SpecialMeal;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTime;
    /**
     * The FlightStatusDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightStatusDescription;
    /**
     * The ETicketEligibilityIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ETicketEligibilityIndicator;
    /**
     * The ConnectionIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConnectionIndicator;
    /**
     * The MarriedConnectionIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MarriedConnectionIndicator;
    /**
     * The SegmentSpecialRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB
     */
    public $SegmentSpecialRequests;
    /**
     * The PreReservedSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB
     */
    public $PreReservedSeats;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public $FrequentFlyer;
    /**
     * The OtherAirlineSign
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OtherAirlineSign;
    /**
     * The Informational
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Informational;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for AirSegment.PNRB
     * @uses AirSegment_PNRB::setStatusCode()
     * @uses AirSegment_PNRB::setNumberOfSeats()
     * @uses AirSegment_PNRB::setAirlineDesignator()
     * @uses AirSegment_PNRB::setClassOfService()
     * @uses AirSegment_PNRB::setFlightNumber()
     * @uses AirSegment_PNRB::setNumberOfStops()
     * @uses AirSegment_PNRB::setSegmentTag()
     * @uses AirSegment_PNRB::setSpecialMeal()
     * @uses AirSegment_PNRB::setDepartureTime()
     * @uses AirSegment_PNRB::setFlightStatusDescription()
     * @uses AirSegment_PNRB::setETicketEligibilityIndicator()
     * @uses AirSegment_PNRB::setConnectionIndicator()
     * @uses AirSegment_PNRB::setMarriedConnectionIndicator()
     * @uses AirSegment_PNRB::setSegmentSpecialRequests()
     * @uses AirSegment_PNRB::setPreReservedSeats()
     * @uses AirSegment_PNRB::setFrequentFlyer()
     * @uses AirSegment_PNRB::setOtherAirlineSign()
     * @uses AirSegment_PNRB::setInformational()
     * @uses AirSegment_PNRB::setIndex()
     * @uses AirSegment_PNRB::setId()
     * @uses AirSegment_PNRB::setOp()
     * @param string $statusCode
     * @param int $numberOfSeats
     * @param string $airlineDesignator
     * @param string $classOfService
     * @param string $flightNumber
     * @param int $numberOfStops
     * @param string $segmentTag
     * @param bool $specialMeal
     * @param string $departureTime
     * @param string $flightStatusDescription
     * @param string $eTicketEligibilityIndicator
     * @param string $connectionIndicator
     * @param string $marriedConnectionIndicator
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @param string $otherAirlineSign
     * @param bool $informational
     * @param int $index
     * @param string $id
     * @param string $op
     */
    public function __construct($statusCode = null, $numberOfSeats = null, $airlineDesignator = null, $classOfService = null, $flightNumber = null, $numberOfStops = null, $segmentTag = null, $specialMeal = null, $departureTime = null, $flightStatusDescription = null, $eTicketEligibilityIndicator = null, $connectionIndicator = null, $marriedConnectionIndicator = null, \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null, \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null, \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null, $otherAirlineSign = null, $informational = null, $index = null, $id = null, $op = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setNumberOfSeats($numberOfSeats)
            ->setAirlineDesignator($airlineDesignator)
            ->setClassOfService($classOfService)
            ->setFlightNumber($flightNumber)
            ->setNumberOfStops($numberOfStops)
            ->setSegmentTag($segmentTag)
            ->setSpecialMeal($specialMeal)
            ->setDepartureTime($departureTime)
            ->setFlightStatusDescription($flightStatusDescription)
            ->setETicketEligibilityIndicator($eTicketEligibilityIndicator)
            ->setConnectionIndicator($connectionIndicator)
            ->setMarriedConnectionIndicator($marriedConnectionIndicator)
            ->setSegmentSpecialRequests($segmentSpecialRequests)
            ->setPreReservedSeats($preReservedSeats)
            ->setFrequentFlyer($frequentFlyer)
            ->setOtherAirlineSign($otherAirlineSign)
            ->setInformational($informational)
            ->setIndex($index)
            ->setId($id)
            ->setOp($op);
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
     * Get NumberOfSeats value
     * @return int|null
     */
    public function getNumberOfSeats()
    {
        return $this->NumberOfSeats;
    }
    /**
     * Set NumberOfSeats value
     * @param int $numberOfSeats
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setNumberOfSeats($numberOfSeats = null)
    {
        // validation for constraint: maxInclusive
        if ($numberOfSeats > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberOfSeats), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberOfSeats < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberOfSeats), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberOfSeats) && !is_numeric($numberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeats)), __LINE__);
        }
        $this->NumberOfSeats = $numberOfSeats;
        return $this;
    }
    /**
     * Get AirlineDesignator value
     * @return string|null
     */
    public function getAirlineDesignator()
    {
        return $this->AirlineDesignator;
    }
    /**
     * Set AirlineDesignator value
     * @param string $airlineDesignator
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setAirlineDesignator($airlineDesignator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airlineDesignator) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $airlineDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($airlineDesignator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airlineDesignator) && !is_string($airlineDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineDesignator)), __LINE__);
        }
        $this->AirlineDesignator = $airlineDesignator;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setNumberOfStops($numberOfStops = null)
    {
        // validation for constraint: maxInclusive
        if ($numberOfStops > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberOfStops), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberOfStops < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberOfStops), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberOfStops) && !is_numeric($numberOfStops)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfStops)), __LINE__);
        }
        $this->NumberOfStops = $numberOfStops;
        return $this;
    }
    /**
     * Get SegmentTag value
     * @return string|null
     */
    public function getSegmentTag()
    {
        return $this->SegmentTag;
    }
    /**
     * Set SegmentTag value
     * @param string $segmentTag
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setSegmentTag($segmentTag = null)
    {
        // validation for constraint: string
        if (!is_null($segmentTag) && !is_string($segmentTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentTag)), __LINE__);
        }
        $this->SegmentTag = $segmentTag;
        return $this;
    }
    /**
     * Get SpecialMeal value
     * @return bool|null
     */
    public function getSpecialMeal()
    {
        return $this->SpecialMeal;
    }
    /**
     * Set SpecialMeal value
     * @param bool $specialMeal
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setSpecialMeal($specialMeal = null)
    {
        // validation for constraint: boolean
        if (!is_null($specialMeal) && !is_bool($specialMeal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($specialMeal)), __LINE__);
        }
        $this->SpecialMeal = $specialMeal;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
     * Get FlightStatusDescription value
     * @return string|null
     */
    public function getFlightStatusDescription()
    {
        return $this->FlightStatusDescription;
    }
    /**
     * Set FlightStatusDescription value
     * @param string $flightStatusDescription
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setFlightStatusDescription($flightStatusDescription = null)
    {
        // validation for constraint: string
        if (!is_null($flightStatusDescription) && !is_string($flightStatusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightStatusDescription)), __LINE__);
        }
        $this->FlightStatusDescription = $flightStatusDescription;
        return $this;
    }
    /**
     * Get ETicketEligibilityIndicator value
     * @return string|null
     */
    public function getETicketEligibilityIndicator()
    {
        return $this->ETicketEligibilityIndicator;
    }
    /**
     * Set ETicketEligibilityIndicator value
     * @param string $eTicketEligibilityIndicator
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setETicketEligibilityIndicator($eTicketEligibilityIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($eTicketEligibilityIndicator) && !is_string($eTicketEligibilityIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eTicketEligibilityIndicator)), __LINE__);
        }
        $this->ETicketEligibilityIndicator = $eTicketEligibilityIndicator;
        return $this;
    }
    /**
     * Get ConnectionIndicator value
     * @return string|null
     */
    public function getConnectionIndicator()
    {
        return $this->ConnectionIndicator;
    }
    /**
     * Set ConnectionIndicator value
     * @param string $connectionIndicator
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setConnectionIndicator($connectionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($connectionIndicator) && !is_string($connectionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectionIndicator)), __LINE__);
        }
        $this->ConnectionIndicator = $connectionIndicator;
        return $this;
    }
    /**
     * Get MarriedConnectionIndicator value
     * @return string|null
     */
    public function getMarriedConnectionIndicator()
    {
        return $this->MarriedConnectionIndicator;
    }
    /**
     * Set MarriedConnectionIndicator value
     * @param string $marriedConnectionIndicator
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setMarriedConnectionIndicator($marriedConnectionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($marriedConnectionIndicator) && !is_string($marriedConnectionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marriedConnectionIndicator)), __LINE__);
        }
        $this->MarriedConnectionIndicator = $marriedConnectionIndicator;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setSegmentSpecialRequests(\Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null)
    {
        $this->SegmentSpecialRequests = $segmentSpecialRequests;
        return $this;
    }
    /**
     * Get PreReservedSeats value
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB|null
     */
    public function getPreReservedSeats()
    {
        return $this->PreReservedSeats;
    }
    /**
     * Set PreReservedSeats value
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setPreReservedSeats(\Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null)
    {
        $this->PreReservedSeats = $preReservedSeats;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setFrequentFlyer(\Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null)
    {
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Get OtherAirlineSign value
     * @return string|null
     */
    public function getOtherAirlineSign()
    {
        return $this->OtherAirlineSign;
    }
    /**
     * Set OtherAirlineSign value
     * @param string $otherAirlineSign
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setOtherAirlineSign($otherAirlineSign = null)
    {
        // validation for constraint: string
        if (!is_null($otherAirlineSign) && !is_string($otherAirlineSign)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherAirlineSign)), __LINE__);
        }
        $this->OtherAirlineSign = $otherAirlineSign;
        return $this;
    }
    /**
     * Get Informational value
     * @return bool|null
     */
    public function getInformational()
    {
        return $this->Informational;
    }
    /**
     * Set Informational value
     * @param bool $informational
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setInformational($informational = null)
    {
        // validation for constraint: boolean
        if (!is_null($informational) && !is_bool($informational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($informational)), __LINE__);
        }
        $this->Informational = $informational;
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegment_PNRB
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
