<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentMultiLeg.PNRB StructType
 * @subpackage Structs
 */
class AirSegmentMultiLeg_PNRB extends AbstractStructBase
{
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
     * The AircraftTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AircraftTypeCode;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDate;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureTime;
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
     * The MealCode1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MealCode1;
    /**
     * The MealCode2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MealCode2;
    /**
     * The MealCode3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MealCode3;
    /**
     * The DayOfWeekIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeekIndicator;
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeek;
    /**
     * The ElapsedTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ElapsedTime;
    /**
     * The AirMilesFlown
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirMilesFlown;
    /**
     * The SmokingPrefOfferedIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SmokingPrefOfferedIndicator;
    /**
     * The OperatingAirlineDesignator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $OperatingAirlineDesignator;
    /**
     * The AirlineName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirlineName;
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
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for AirSegmentMultiLeg.PNRB
     * @uses AirSegmentMultiLeg_PNRB::setAirlineDesignator()
     * @uses AirSegmentMultiLeg_PNRB::setAircraftTypeCode()
     * @uses AirSegmentMultiLeg_PNRB::setDepartureDate()
     * @uses AirSegmentMultiLeg_PNRB::setDepartureTime()
     * @uses AirSegmentMultiLeg_PNRB::setArrivalDate()
     * @uses AirSegmentMultiLeg_PNRB::setArrivalTime()
     * @uses AirSegmentMultiLeg_PNRB::setMealCode1()
     * @uses AirSegmentMultiLeg_PNRB::setMealCode2()
     * @uses AirSegmentMultiLeg_PNRB::setMealCode3()
     * @uses AirSegmentMultiLeg_PNRB::setDayOfWeekIndicator()
     * @uses AirSegmentMultiLeg_PNRB::setDayOfWeek()
     * @uses AirSegmentMultiLeg_PNRB::setElapsedTime()
     * @uses AirSegmentMultiLeg_PNRB::setAirMilesFlown()
     * @uses AirSegmentMultiLeg_PNRB::setSmokingPrefOfferedIndicator()
     * @uses AirSegmentMultiLeg_PNRB::setOperatingAirlineDesignator()
     * @uses AirSegmentMultiLeg_PNRB::setAirlineName()
     * @uses AirSegmentMultiLeg_PNRB::setSegmentSpecialRequests()
     * @uses AirSegmentMultiLeg_PNRB::setPreReservedSeats()
     * @uses AirSegmentMultiLeg_PNRB::setFrequentFlyer()
     * @uses AirSegmentMultiLeg_PNRB::setSegmentNumber()
     * @uses AirSegmentMultiLeg_PNRB::setId()
     * @uses AirSegmentMultiLeg_PNRB::setOp()
     * @param string $airlineDesignator
     * @param string $aircraftTypeCode
     * @param string $departureDate
     * @param string $departureTime
     * @param string $arrivalDate
     * @param string $arrivalTime
     * @param string $mealCode1
     * @param string $mealCode2
     * @param string $mealCode3
     * @param string $dayOfWeekIndicator
     * @param string $dayOfWeek
     * @param string $elapsedTime
     * @param string $airMilesFlown
     * @param bool $smokingPrefOfferedIndicator
     * @param string $operatingAirlineDesignator
     * @param string $airlineName
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @param int $segmentNumber
     * @param string $id
     * @param string $op
     */
    public function __construct($airlineDesignator = null, $aircraftTypeCode = null, $departureDate = null, $departureTime = null, $arrivalDate = null, $arrivalTime = null, $mealCode1 = null, $mealCode2 = null, $mealCode3 = null, $dayOfWeekIndicator = null, $dayOfWeek = null, $elapsedTime = null, $airMilesFlown = null, $smokingPrefOfferedIndicator = null, $operatingAirlineDesignator = null, $airlineName = null, \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null, \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null, \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null, $segmentNumber = null, $id = null, $op = null)
    {
        $this
            ->setAirlineDesignator($airlineDesignator)
            ->setAircraftTypeCode($aircraftTypeCode)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setArrivalDate($arrivalDate)
            ->setArrivalTime($arrivalTime)
            ->setMealCode1($mealCode1)
            ->setMealCode2($mealCode2)
            ->setMealCode3($mealCode3)
            ->setDayOfWeekIndicator($dayOfWeekIndicator)
            ->setDayOfWeek($dayOfWeek)
            ->setElapsedTime($elapsedTime)
            ->setAirMilesFlown($airMilesFlown)
            ->setSmokingPrefOfferedIndicator($smokingPrefOfferedIndicator)
            ->setOperatingAirlineDesignator($operatingAirlineDesignator)
            ->setAirlineName($airlineName)
            ->setSegmentSpecialRequests($segmentSpecialRequests)
            ->setPreReservedSeats($preReservedSeats)
            ->setFrequentFlyer($frequentFlyer)
            ->setSegmentNumber($segmentNumber)
            ->setId($id)
            ->setOp($op);
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * Get AircraftTypeCode value
     * @return string|null
     */
    public function getAircraftTypeCode()
    {
        return $this->AircraftTypeCode;
    }
    /**
     * Set AircraftTypeCode value
     * @param string $aircraftTypeCode
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setAircraftTypeCode($aircraftTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($aircraftTypeCode) && !is_string($aircraftTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aircraftTypeCode)), __LINE__);
        }
        $this->AircraftTypeCode = $aircraftTypeCode;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * Get MealCode1 value
     * @return string|null
     */
    public function getMealCode1()
    {
        return $this->MealCode1;
    }
    /**
     * Set MealCode1 value
     * @param string $mealCode1
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setMealCode1($mealCode1 = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode1) && !is_string($mealCode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode1)), __LINE__);
        }
        $this->MealCode1 = $mealCode1;
        return $this;
    }
    /**
     * Get MealCode2 value
     * @return string|null
     */
    public function getMealCode2()
    {
        return $this->MealCode2;
    }
    /**
     * Set MealCode2 value
     * @param string $mealCode2
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setMealCode2($mealCode2 = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode2) && !is_string($mealCode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode2)), __LINE__);
        }
        $this->MealCode2 = $mealCode2;
        return $this;
    }
    /**
     * Get MealCode3 value
     * @return string|null
     */
    public function getMealCode3()
    {
        return $this->MealCode3;
    }
    /**
     * Set MealCode3 value
     * @param string $mealCode3
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setMealCode3($mealCode3 = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode3) && !is_string($mealCode3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode3)), __LINE__);
        }
        $this->MealCode3 = $mealCode3;
        return $this;
    }
    /**
     * Get DayOfWeekIndicator value
     * @return string|null
     */
    public function getDayOfWeekIndicator()
    {
        return $this->DayOfWeekIndicator;
    }
    /**
     * Set DayOfWeekIndicator value
     * @param string $dayOfWeekIndicator
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setDayOfWeekIndicator($dayOfWeekIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeekIndicator) && !is_string($dayOfWeekIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeekIndicator)), __LINE__);
        }
        $this->DayOfWeekIndicator = $dayOfWeekIndicator;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \Sabre\UpdateReservation\EnumType\DayOfWeek::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\DayOfWeek::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeek
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\DayOfWeek::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \Sabre\UpdateReservation\EnumType\DayOfWeek::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get ElapsedTime value
     * @return string|null
     */
    public function getElapsedTime()
    {
        return $this->ElapsedTime;
    }
    /**
     * Set ElapsedTime value
     * @param string $elapsedTime
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setElapsedTime($elapsedTime = null)
    {
        // validation for constraint: string
        if (!is_null($elapsedTime) && !is_string($elapsedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elapsedTime)), __LINE__);
        }
        $this->ElapsedTime = $elapsedTime;
        return $this;
    }
    /**
     * Get AirMilesFlown value
     * @return string|null
     */
    public function getAirMilesFlown()
    {
        return $this->AirMilesFlown;
    }
    /**
     * Set AirMilesFlown value
     * @param string $airMilesFlown
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setAirMilesFlown($airMilesFlown = null)
    {
        // validation for constraint: string
        if (!is_null($airMilesFlown) && !is_string($airMilesFlown)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airMilesFlown)), __LINE__);
        }
        $this->AirMilesFlown = $airMilesFlown;
        return $this;
    }
    /**
     * Get SmokingPrefOfferedIndicator value
     * @return bool|null
     */
    public function getSmokingPrefOfferedIndicator()
    {
        return $this->SmokingPrefOfferedIndicator;
    }
    /**
     * Set SmokingPrefOfferedIndicator value
     * @param bool $smokingPrefOfferedIndicator
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setSmokingPrefOfferedIndicator($smokingPrefOfferedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($smokingPrefOfferedIndicator) && !is_bool($smokingPrefOfferedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($smokingPrefOfferedIndicator)), __LINE__);
        }
        $this->SmokingPrefOfferedIndicator = $smokingPrefOfferedIndicator;
        return $this;
    }
    /**
     * Get OperatingAirlineDesignator value
     * @return string|null
     */
    public function getOperatingAirlineDesignator()
    {
        return $this->OperatingAirlineDesignator;
    }
    /**
     * Set OperatingAirlineDesignator value
     * @param string $operatingAirlineDesignator
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setOperatingAirlineDesignator($operatingAirlineDesignator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($operatingAirlineDesignator) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $operatingAirlineDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($operatingAirlineDesignator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($operatingAirlineDesignator) && !is_string($operatingAirlineDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingAirlineDesignator)), __LINE__);
        }
        $this->OperatingAirlineDesignator = $operatingAirlineDesignator;
        return $this;
    }
    /**
     * Get AirlineName value
     * @return string|null
     */
    public function getAirlineName()
    {
        return $this->AirlineName;
    }
    /**
     * Set AirlineName value
     * @param string $airlineName
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
     */
    public function setAirlineName($airlineName = null)
    {
        // validation for constraint: string
        if (!is_null($airlineName) && !is_string($airlineName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineName)), __LINE__);
        }
        $this->AirlineName = $airlineName;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentMultiLeg_PNRB
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
