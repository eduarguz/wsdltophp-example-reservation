<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicalType StructType
 * @subpackage Structs
 */
class VehicalType extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LineNumber;
    /**
     * The LineStatus
     * Meta informations extracted from the WSDL
     * - documentation: Current status of booked segment. Example "HK".
     * - minOccurs: 0
     * @var string
     */
    public $LineStatus;
    /**
     * The POSRequestorID
     * Meta informations extracted from the WSDL
     * - documentation: Point of Sale ID.
     * - minOccurs: 0
     * @var string
     */
    public $POSRequestorID;
    /**
     * The ConfId
     * Meta informations extracted from the WSDL
     * - documentation: A confirmation number by which this reservation can be uniquely identified. Value assigned by the creating system.
     * - minOccurs: 0
     * @var string
     */
    public $ConfId;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the vendor associated with this information
     * - minOccurs: 0
     * @var string
     */
    public $VendorCode;
    /**
     * The PickUpLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PickUpLocation
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReturnLocation
     */
    public $ReturnLocation;
    /**
     * The PickUpDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Pick up datetime. Example "2013-08-08T13:00:00"
     * - minOccurs: 0
     * @var string
     */
    public $PickUpDateTime;
    /**
     * The PickUpDay
     * Meta informations extracted from the WSDL
     * - documentation: The car pick up day.
     * - minOccurs: 0
     * @var string
     */
    public $PickUpDay;
    /**
     * The ReturnDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Number of days the car is rented for; A one day rental with pick-up and return in the same or next day would reflect a value of '1'; Segments without a valid return date will have a value of '0'. Example "2013-08-08T13:00:00"
     * - minOccurs: 0
     * @var string
     */
    public $ReturnDateTime;
    /**
     * The RentalRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public $RentalRate;
    /**
     * The PricedEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public $PricedEquipment;
    /**
     * The VehSegmentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public $VehSegmentInfo;
    /**
     * The AirVendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Airline code of arrival flight.
     * - minOccurs: 0
     * @var string
     */
    public $AirVendorCode;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - documentation: Tour Code used.
     * - minOccurs: 0
     * @var string
     */
    public $TourCode;
    /**
     * The WrittenConfirmation
     * Meta informations extracted from the WSDL
     * - documentation: Written confirmation is requested.
     * - minOccurs: 0
     * @var bool
     */
    public $WrittenConfirmation;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Customer
     */
    public $Customer;
    /**
     * The Delivery
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Delivery
     */
    public $Delivery;
    /**
     * The Collection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Collection
     */
    public $Collection;
    /**
     * The SegmentText
     * Meta informations extracted from the WSDL
     * - documentation: Can be the airport code or a text description of a non-airport pick-up location for the rental car when specified in the optional PUP field in the segment. Example
     * "CUN/09AUG/EDMR/ARR-1P/RET-1P/DT-16JUL130636/SBS-HS/TAC-@2.8515.000PCT/RG-USD19.00 UNL DY/AP-@USD24.75 UNL 1DY 0HR 5.75MC/BS-45605302/RC-SXA/CF-9800046742"
     * - minOccurs: 0
     * @var string
     */
    public $SegmentText;
    /**
     * The DayOfWeekInd
     * Meta informations extracted from the WSDL
     * - documentation: "DayOfWeekInd" is used to return the day of the week indicator.
     * - use: optional
     * @var string
     */
    public $DayOfWeekInd;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Sabre index ID. | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
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
     * The sequence
     * Meta informations extracted from the WSDL
     * - documentation: Identifies sequence number of Itinerary
     * @var int
     */
    public $sequence;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The isPast
     * Meta informations extracted from the WSDL
     * - documentation: It returns information if current segment is past or not.
     * - use: optional
     * @var bool
     */
    public $isPast;
    /**
     * Constructor method for VehicalType
     * @uses VehicalType::setLineNumber()
     * @uses VehicalType::setLineStatus()
     * @uses VehicalType::setPOSRequestorID()
     * @uses VehicalType::setConfId()
     * @uses VehicalType::setVendorCode()
     * @uses VehicalType::setPickUpLocation()
     * @uses VehicalType::setReturnLocation()
     * @uses VehicalType::setPickUpDateTime()
     * @uses VehicalType::setPickUpDay()
     * @uses VehicalType::setReturnDateTime()
     * @uses VehicalType::setRentalRate()
     * @uses VehicalType::setPricedEquipment()
     * @uses VehicalType::setVehSegmentInfo()
     * @uses VehicalType::setAirVendorCode()
     * @uses VehicalType::setFlightNumber()
     * @uses VehicalType::setTourCode()
     * @uses VehicalType::setWrittenConfirmation()
     * @uses VehicalType::setCustomer()
     * @uses VehicalType::setDelivery()
     * @uses VehicalType::setCollection()
     * @uses VehicalType::setSegmentText()
     * @uses VehicalType::setDayOfWeekInd()
     * @uses VehicalType::setIndex()
     * @uses VehicalType::setId()
     * @uses VehicalType::setSequence()
     * @uses VehicalType::setOp()
     * @uses VehicalType::setIsPast()
     * @param string $lineNumber
     * @param string $lineStatus
     * @param string $pOSRequestorID
     * @param string $confId
     * @param string $vendorCode
     * @param \Sabre\UpdateReservation\StructType\PickUpLocation $pickUpLocation
     * @param \Sabre\UpdateReservation\StructType\ReturnLocation $returnLocation
     * @param string $pickUpDateTime
     * @param string $pickUpDay
     * @param string $returnDateTime
     * @param \Sabre\UpdateReservation\StructType\RentalRate_PNRB $rentalRate
     * @param \Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment
     * @param \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB $vehSegmentInfo
     * @param string $airVendorCode
     * @param string $flightNumber
     * @param string $tourCode
     * @param bool $writtenConfirmation
     * @param \Sabre\UpdateReservation\StructType\Customer $customer
     * @param \Sabre\UpdateReservation\StructType\Delivery $delivery
     * @param \Sabre\UpdateReservation\StructType\Collection $collection
     * @param string $segmentText
     * @param string $dayOfWeekInd
     * @param int $index
     * @param string $id
     * @param int $sequence
     * @param string $op
     * @param bool $isPast
     */
    public function __construct($lineNumber = null, $lineStatus = null, $pOSRequestorID = null, $confId = null, $vendorCode = null, \Sabre\UpdateReservation\StructType\PickUpLocation $pickUpLocation = null, \Sabre\UpdateReservation\StructType\ReturnLocation $returnLocation = null, $pickUpDateTime = null, $pickUpDay = null, $returnDateTime = null, \Sabre\UpdateReservation\StructType\RentalRate_PNRB $rentalRate = null, \Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment = null, \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB $vehSegmentInfo = null, $airVendorCode = null, $flightNumber = null, $tourCode = null, $writtenConfirmation = null, \Sabre\UpdateReservation\StructType\Customer $customer = null, \Sabre\UpdateReservation\StructType\Delivery $delivery = null, \Sabre\UpdateReservation\StructType\Collection $collection = null, $segmentText = null, $dayOfWeekInd = null, $index = null, $id = null, $sequence = null, $op = null, $isPast = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setLineStatus($lineStatus)
            ->setPOSRequestorID($pOSRequestorID)
            ->setConfId($confId)
            ->setVendorCode($vendorCode)
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPickUpDateTime($pickUpDateTime)
            ->setPickUpDay($pickUpDay)
            ->setReturnDateTime($returnDateTime)
            ->setRentalRate($rentalRate)
            ->setPricedEquipment($pricedEquipment)
            ->setVehSegmentInfo($vehSegmentInfo)
            ->setAirVendorCode($airVendorCode)
            ->setFlightNumber($flightNumber)
            ->setTourCode($tourCode)
            ->setWrittenConfirmation($writtenConfirmation)
            ->setCustomer($customer)
            ->setDelivery($delivery)
            ->setCollection($collection)
            ->setSegmentText($segmentText)
            ->setDayOfWeekInd($dayOfWeekInd)
            ->setIndex($index)
            ->setId($id)
            ->setSequence($sequence)
            ->setOp($op)
            ->setIsPast($isPast);
    }
    /**
     * Get LineNumber value
     * @return string|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param string $lineNumber
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: string
        if (!is_null($lineNumber) && !is_string($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get LineStatus value
     * @return string|null
     */
    public function getLineStatus()
    {
        return $this->LineStatus;
    }
    /**
     * Set LineStatus value
     * @param string $lineStatus
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setLineStatus($lineStatus = null)
    {
        // validation for constraint: string
        if (!is_null($lineStatus) && !is_string($lineStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineStatus)), __LINE__);
        }
        $this->LineStatus = $lineStatus;
        return $this;
    }
    /**
     * Get POSRequestorID value
     * @return string|null
     */
    public function getPOSRequestorID()
    {
        return $this->POSRequestorID;
    }
    /**
     * Set POSRequestorID value
     * @param string $pOSRequestorID
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setPOSRequestorID($pOSRequestorID = null)
    {
        // validation for constraint: string
        if (!is_null($pOSRequestorID) && !is_string($pOSRequestorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOSRequestorID)), __LINE__);
        }
        $this->POSRequestorID = $pOSRequestorID;
        return $this;
    }
    /**
     * Get ConfId value
     * @return string|null
     */
    public function getConfId()
    {
        return $this->ConfId;
    }
    /**
     * Set ConfId value
     * @param string $confId
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setConfId($confId = null)
    {
        // validation for constraint: string
        if (!is_null($confId) && !is_string($confId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confId)), __LINE__);
        }
        $this->ConfId = $confId;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get PickUpLocation value
     * @return \Sabre\UpdateReservation\StructType\PickUpLocation|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param \Sabre\UpdateReservation\StructType\PickUpLocation $pickUpLocation
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setPickUpLocation(\Sabre\UpdateReservation\StructType\PickUpLocation $pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return \Sabre\UpdateReservation\StructType\ReturnLocation|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param \Sabre\UpdateReservation\StructType\ReturnLocation $returnLocation
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setReturnLocation(\Sabre\UpdateReservation\StructType\ReturnLocation $returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get PickUpDay value
     * @return string|null
     */
    public function getPickUpDay()
    {
        return $this->PickUpDay;
    }
    /**
     * Set PickUpDay value
     * @param string $pickUpDay
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setPickUpDay($pickUpDay = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDay) && !is_string($pickUpDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDay)), __LINE__);
        }
        $this->PickUpDay = $pickUpDay;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @param \Sabre\UpdateReservation\StructType\RentalRate_PNRB $rentalRate
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setRentalRate(\Sabre\UpdateReservation\StructType\RentalRate_PNRB $rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Get PricedEquipment value
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment|null
     */
    public function getPricedEquipment()
    {
        return $this->PricedEquipment;
    }
    /**
     * Set PricedEquipment value
     * @param \Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setPricedEquipment(\Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment = null)
    {
        $this->PricedEquipment = $pricedEquipment;
        return $this;
    }
    /**
     * Get VehSegmentInfo value
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB|null
     */
    public function getVehSegmentInfo()
    {
        return $this->VehSegmentInfo;
    }
    /**
     * Set VehSegmentInfo value
     * @param \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB $vehSegmentInfo
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setVehSegmentInfo(\Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB $vehSegmentInfo = null)
    {
        $this->VehSegmentInfo = $vehSegmentInfo;
        return $this;
    }
    /**
     * Get AirVendorCode value
     * @return string|null
     */
    public function getAirVendorCode()
    {
        return $this->AirVendorCode;
    }
    /**
     * Set AirVendorCode value
     * @param string $airVendorCode
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setAirVendorCode($airVendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($airVendorCode) && !is_string($airVendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airVendorCode)), __LINE__);
        }
        $this->AirVendorCode = $airVendorCode;
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
     * @return \Sabre\UpdateReservation\StructType\VehicalType
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
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setTourCode($tourCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get WrittenConfirmation value
     * @return bool|null
     */
    public function getWrittenConfirmation()
    {
        return $this->WrittenConfirmation;
    }
    /**
     * Set WrittenConfirmation value
     * @param bool $writtenConfirmation
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setWrittenConfirmation($writtenConfirmation = null)
    {
        // validation for constraint: boolean
        if (!is_null($writtenConfirmation) && !is_bool($writtenConfirmation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($writtenConfirmation)), __LINE__);
        }
        $this->WrittenConfirmation = $writtenConfirmation;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Sabre\UpdateReservation\StructType\Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Sabre\UpdateReservation\StructType\Customer $customer
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setCustomer(\Sabre\UpdateReservation\StructType\Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Delivery value
     * @return \Sabre\UpdateReservation\StructType\Delivery|null
     */
    public function getDelivery()
    {
        return $this->Delivery;
    }
    /**
     * Set Delivery value
     * @param \Sabre\UpdateReservation\StructType\Delivery $delivery
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setDelivery(\Sabre\UpdateReservation\StructType\Delivery $delivery = null)
    {
        $this->Delivery = $delivery;
        return $this;
    }
    /**
     * Get Collection value
     * @return \Sabre\UpdateReservation\StructType\Collection|null
     */
    public function getCollection()
    {
        return $this->Collection;
    }
    /**
     * Set Collection value
     * @param \Sabre\UpdateReservation\StructType\Collection $collection
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setCollection(\Sabre\UpdateReservation\StructType\Collection $collection = null)
    {
        $this->Collection = $collection;
        return $this;
    }
    /**
     * Get SegmentText value
     * @return string|null
     */
    public function getSegmentText()
    {
        return $this->SegmentText;
    }
    /**
     * Set SegmentText value
     * @param string $segmentText
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setSegmentText($segmentText = null)
    {
        // validation for constraint: string
        if (!is_null($segmentText) && !is_string($segmentText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentText)), __LINE__);
        }
        $this->SegmentText = $segmentText;
        return $this;
    }
    /**
     * Get DayOfWeekInd value
     * @return string|null
     */
    public function getDayOfWeekInd()
    {
        return $this->DayOfWeekInd;
    }
    /**
     * Set DayOfWeekInd value
     * @param string $dayOfWeekInd
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setDayOfWeekInd($dayOfWeekInd = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeekInd) && !is_string($dayOfWeekInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeekInd)), __LINE__);
        }
        $this->DayOfWeekInd = $dayOfWeekInd;
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
     * @return \Sabre\UpdateReservation\StructType\VehicalType
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
     * @return \Sabre\UpdateReservation\StructType\VehicalType
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
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
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
     * @return \Sabre\UpdateReservation\StructType\VehicalType
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
     * Get isPast value
     * @return bool|null
     */
    public function getIsPast()
    {
        return $this->isPast;
    }
    /**
     * Set isPast value
     * @param bool $isPast
     * @return \Sabre\UpdateReservation\StructType\VehicalType
     */
    public function setIsPast($isPast = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPast) && !is_bool($isPast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPast)), __LINE__);
        }
        $this->isPast = $isPast;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicalType
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
