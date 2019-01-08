<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingFieldSegmentOrTravelPortion StructType
 * @subpackage Structs
 */
class AccountingFieldSegmentOrTravelPortion extends AbstractStructBase
{
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirlineCode;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The OperatingFlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: Operating flight number
     * - minOccurs: 0
     * @var string
     */
    public $OperatingFlightNumber;
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
     * The BoardPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BoardPoint;
    /**
     * The OffPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OffPoint;
    /**
     * The EquipmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EquipmentType;
    /**
     * The ETicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ETicketNumber;
    /**
     * The ETicketCoupon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ETicketCoupon;
    /**
     * The EMDNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EMDNumber;
    /**
     * The EMDCoupon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EMDCoupon;
    /**
     * The MarketingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MarketingCarrier;
    /**
     * The OperatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperatingCarrier;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: optional
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The sequence
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $sequence;
    /**
     * The advisory
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $advisory;
    /**
     * Constructor method for AccountingFieldSegmentOrTravelPortion
     * @uses AccountingFieldSegmentOrTravelPortion::setAirlineCode()
     * @uses AccountingFieldSegmentOrTravelPortion::setFlightNumber()
     * @uses AccountingFieldSegmentOrTravelPortion::setOperatingFlightNumber()
     * @uses AccountingFieldSegmentOrTravelPortion::setClassOfService()
     * @uses AccountingFieldSegmentOrTravelPortion::setDepartureDate()
     * @uses AccountingFieldSegmentOrTravelPortion::setBoardPoint()
     * @uses AccountingFieldSegmentOrTravelPortion::setOffPoint()
     * @uses AccountingFieldSegmentOrTravelPortion::setEquipmentType()
     * @uses AccountingFieldSegmentOrTravelPortion::setETicketNumber()
     * @uses AccountingFieldSegmentOrTravelPortion::setETicketCoupon()
     * @uses AccountingFieldSegmentOrTravelPortion::setEMDNumber()
     * @uses AccountingFieldSegmentOrTravelPortion::setEMDCoupon()
     * @uses AccountingFieldSegmentOrTravelPortion::setMarketingCarrier()
     * @uses AccountingFieldSegmentOrTravelPortion::setOperatingCarrier()
     * @uses AccountingFieldSegmentOrTravelPortion::setId()
     * @uses AccountingFieldSegmentOrTravelPortion::setSequence()
     * @uses AccountingFieldSegmentOrTravelPortion::setAdvisory()
     * @param string $airlineCode
     * @param string $flightNumber
     * @param string $operatingFlightNumber
     * @param string $classOfService
     * @param string $departureDate
     * @param string $boardPoint
     * @param string $offPoint
     * @param string $equipmentType
     * @param string $eTicketNumber
     * @param string $eTicketCoupon
     * @param string $eMDNumber
     * @param string $eMDCoupon
     * @param string $marketingCarrier
     * @param string $operatingCarrier
     * @param string $id
     * @param int $sequence
     * @param bool $advisory
     */
    public function __construct($airlineCode = null, $flightNumber = null, $operatingFlightNumber = null, $classOfService = null, $departureDate = null, $boardPoint = null, $offPoint = null, $equipmentType = null, $eTicketNumber = null, $eTicketCoupon = null, $eMDNumber = null, $eMDCoupon = null, $marketingCarrier = null, $operatingCarrier = null, $id = null, $sequence = null, $advisory = null)
    {
        $this
            ->setAirlineCode($airlineCode)
            ->setFlightNumber($flightNumber)
            ->setOperatingFlightNumber($operatingFlightNumber)
            ->setClassOfService($classOfService)
            ->setDepartureDate($departureDate)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setEquipmentType($equipmentType)
            ->setETicketNumber($eTicketNumber)
            ->setETicketCoupon($eTicketCoupon)
            ->setEMDNumber($eMDNumber)
            ->setEMDCoupon($eMDCoupon)
            ->setMarketingCarrier($marketingCarrier)
            ->setOperatingCarrier($operatingCarrier)
            ->setId($id)
            ->setSequence($sequence)
            ->setAdvisory($advisory);
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
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
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
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
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
     * Get OperatingFlightNumber value
     * @return string|null
     */
    public function getOperatingFlightNumber()
    {
        return $this->OperatingFlightNumber;
    }
    /**
     * Set OperatingFlightNumber value
     * @param string $operatingFlightNumber
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setOperatingFlightNumber($operatingFlightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($operatingFlightNumber) && !is_string($operatingFlightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingFlightNumber)), __LINE__);
        }
        $this->OperatingFlightNumber = $operatingFlightNumber;
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
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
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
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
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
     * Get BoardPoint value
     * @return string|null
     */
    public function getBoardPoint()
    {
        return $this->BoardPoint;
    }
    /**
     * Set BoardPoint value
     * @param string $boardPoint
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setBoardPoint($boardPoint = null)
    {
        // validation for constraint: string
        if (!is_null($boardPoint) && !is_string($boardPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardPoint)), __LINE__);
        }
        $this->BoardPoint = $boardPoint;
        return $this;
    }
    /**
     * Get OffPoint value
     * @return string|null
     */
    public function getOffPoint()
    {
        return $this->OffPoint;
    }
    /**
     * Set OffPoint value
     * @param string $offPoint
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setOffPoint($offPoint = null)
    {
        // validation for constraint: string
        if (!is_null($offPoint) && !is_string($offPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offPoint)), __LINE__);
        }
        $this->OffPoint = $offPoint;
        return $this;
    }
    /**
     * Get EquipmentType value
     * @return string|null
     */
    public function getEquipmentType()
    {
        return $this->EquipmentType;
    }
    /**
     * Set EquipmentType value
     * @param string $equipmentType
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setEquipmentType($equipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentType) && !is_string($equipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentType)), __LINE__);
        }
        $this->EquipmentType = $equipmentType;
        return $this;
    }
    /**
     * Get ETicketNumber value
     * @return string|null
     */
    public function getETicketNumber()
    {
        return $this->ETicketNumber;
    }
    /**
     * Set ETicketNumber value
     * @param string $eTicketNumber
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setETicketNumber($eTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eTicketNumber) && !is_string($eTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eTicketNumber)), __LINE__);
        }
        $this->ETicketNumber = $eTicketNumber;
        return $this;
    }
    /**
     * Get ETicketCoupon value
     * @return string|null
     */
    public function getETicketCoupon()
    {
        return $this->ETicketCoupon;
    }
    /**
     * Set ETicketCoupon value
     * @param string $eTicketCoupon
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setETicketCoupon($eTicketCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($eTicketCoupon) && !is_string($eTicketCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eTicketCoupon)), __LINE__);
        }
        $this->ETicketCoupon = $eTicketCoupon;
        return $this;
    }
    /**
     * Get EMDNumber value
     * @return string|null
     */
    public function getEMDNumber()
    {
        return $this->EMDNumber;
    }
    /**
     * Set EMDNumber value
     * @param string $eMDNumber
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setEMDNumber($eMDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eMDNumber) && !is_string($eMDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDNumber)), __LINE__);
        }
        $this->EMDNumber = $eMDNumber;
        return $this;
    }
    /**
     * Get EMDCoupon value
     * @return string|null
     */
    public function getEMDCoupon()
    {
        return $this->EMDCoupon;
    }
    /**
     * Set EMDCoupon value
     * @param string $eMDCoupon
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setEMDCoupon($eMDCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($eMDCoupon) && !is_string($eMDCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDCoupon)), __LINE__);
        }
        $this->EMDCoupon = $eMDCoupon;
        return $this;
    }
    /**
     * Get MarketingCarrier value
     * @return string|null
     */
    public function getMarketingCarrier()
    {
        return $this->MarketingCarrier;
    }
    /**
     * Set MarketingCarrier value
     * @param string $marketingCarrier
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setMarketingCarrier($marketingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($marketingCarrier) && !is_string($marketingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingCarrier)), __LINE__);
        }
        $this->MarketingCarrier = $marketingCarrier;
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return string|null
     */
    public function getOperatingCarrier()
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param string $operatingCarrier
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setOperatingCarrier($operatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingCarrier)), __LINE__);
        }
        $this->OperatingCarrier = $operatingCarrier;
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
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
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
     * Get sequence value
     * @return int|null
     */
    public function getSequence()
    {
        return $this->sequence;
    }
    /**
     * Set sequence value
     * @param int $sequence
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: maxInclusive
        if ($sequence > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $sequence), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($sequence < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $sequence), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * Get advisory value
     * @return bool|null
     */
    public function getAdvisory()
    {
        return $this->advisory;
    }
    /**
     * Set advisory value
     * @param bool $advisory
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
     */
    public function setAdvisory($advisory = null)
    {
        // validation for constraint: boolean
        if (!is_null($advisory) && !is_bool($advisory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($advisory)), __LINE__);
        }
        $this->advisory = $advisory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingFieldSegmentOrTravelPortion
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
