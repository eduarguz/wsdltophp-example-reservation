<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentOpen.PNRB StructType
 * @subpackage Structs
 */
class AirSegmentOpen_PNRB extends AbstractStructBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The UnitsBooked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitsBooked;
    /**
     * The AirlineDesignator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The DayOfWeekIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeekIndicator;
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
     * Constructor method for AirSegmentOpen.PNRB
     * @uses AirSegmentOpen_PNRB::setStatusCode()
     * @uses AirSegmentOpen_PNRB::setUnitsBooked()
     * @uses AirSegmentOpen_PNRB::setAirlineDesignator()
     * @uses AirSegmentOpen_PNRB::setClassOfService()
     * @uses AirSegmentOpen_PNRB::setDepartureDate()
     * @uses AirSegmentOpen_PNRB::setDepartureTime()
     * @uses AirSegmentOpen_PNRB::setDayOfWeekIndicator()
     * @uses AirSegmentOpen_PNRB::setSegmentSpecialRequests()
     * @uses AirSegmentOpen_PNRB::setPreReservedSeats()
     * @uses AirSegmentOpen_PNRB::setFrequentFlyer()
     * @uses AirSegmentOpen_PNRB::setSegmentNumber()
     * @uses AirSegmentOpen_PNRB::setId()
     * @uses AirSegmentOpen_PNRB::setOp()
     * @param string $statusCode
     * @param string $unitsBooked
     * @param string $airlineDesignator
     * @param string $classOfService
     * @param string $departureDate
     * @param string $departureTime
     * @param string $dayOfWeekIndicator
     * @param \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @param \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer
     * @param int $segmentNumber
     * @param string $id
     * @param string $op
     */
    public function __construct($statusCode = null, $unitsBooked = null, $airlineDesignator = null, $classOfService = null, $departureDate = null, $departureTime = null, $dayOfWeekIndicator = null, \Sabre\UpdateReservation\StructType\ItinerarySpecialRequests_PNRB $segmentSpecialRequests = null, \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null, \Sabre\UpdateReservation\StructType\Loyalty_PNRB $frequentFlyer = null, $segmentNumber = null, $id = null, $op = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setUnitsBooked($unitsBooked)
            ->setAirlineDesignator($airlineDesignator)
            ->setClassOfService($classOfService)
            ->setDepartureDate($departureDate)
            ->setDepartureTime($departureTime)
            ->setDayOfWeekIndicator($dayOfWeekIndicator)
            ->setSegmentSpecialRequests($segmentSpecialRequests)
            ->setPreReservedSeats($preReservedSeats)
            ->setFrequentFlyer($frequentFlyer)
            ->setSegmentNumber($segmentNumber)
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * Get UnitsBooked value
     * @return string|null
     */
    public function getUnitsBooked()
    {
        return $this->UnitsBooked;
    }
    /**
     * Set UnitsBooked value
     * @param string $unitsBooked
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
     */
    public function setUnitsBooked($unitsBooked = null)
    {
        // validation for constraint: string
        if (!is_null($unitsBooked) && !is_string($unitsBooked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitsBooked)), __LINE__);
        }
        $this->UnitsBooked = $unitsBooked;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
     */
    public function setAirlineDesignator($airlineDesignator = null)
    {
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentOpen_PNRB
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
