<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralSegmentType.PNRB StructType
 * @subpackage Structs
 */
class GeneralSegmentType_PNRB extends AbstractStructBase
{
    /**
     * The Line
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Line
     */
    public $Line;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vendor
     */
    public $Vendor;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NumberInParty;
    /**
     * The ServiceCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceCity
     */
    public $ServiceCity;
    /**
     * The ArrivalDepartureIdentifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDepartureIdentifier;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $POS;
    /**
     * The Air
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Air
     */
    public $Air;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Location
     */
    public $Location;
    /**
     * The OriginLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OriginLocation
     */
    public $OriginLocation;
    /**
     * The DestinationLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public $DestinationLocation;
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - documentation: Date policy begins. Ex."2013-10-23T00:00:00"
     * - minOccurs: 0
     * @var string
     */
    public $DateTime;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The ServiceInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ServiceInformation;
    /**
     * The SpaceReserved
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SpaceReserved;
    /**
     * The ShipOrVehicleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipOrVehicleName;
    /**
     * The Tour
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Tour
     */
    public $Tour;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Code of the travel protection offering. Ex." CANCELLATION INSURANCE"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * The LinkCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifier of accounting line assigned to segment
     * - minOccurs: 0
     * @var string
     */
    public $LinkCode;
    /**
     * The isPast
     * Meta informations extracted from the WSDL
     * - documentation: It returns information if current element is past or not.
     * - use: optional
     * @var bool
     */
    public $isPast;
    /**
     * The dayOfWeekInd
     * Meta informations extracted from the WSDL
     * - documentation: "DayOfWeekInd" is used to return the day of the week indicator.
     * - use: optional
     * @var string
     */
    public $dayOfWeekInd;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for GeneralSegmentType.PNRB
     * @uses GeneralSegmentType_PNRB::setLine()
     * @uses GeneralSegmentType_PNRB::setVendor()
     * @uses GeneralSegmentType_PNRB::setNumberInParty()
     * @uses GeneralSegmentType_PNRB::setServiceCity()
     * @uses GeneralSegmentType_PNRB::setArrivalDepartureIdentifier()
     * @uses GeneralSegmentType_PNRB::setPOS()
     * @uses GeneralSegmentType_PNRB::setAir()
     * @uses GeneralSegmentType_PNRB::setLocation()
     * @uses GeneralSegmentType_PNRB::setOriginLocation()
     * @uses GeneralSegmentType_PNRB::setDestinationLocation()
     * @uses GeneralSegmentType_PNRB::setDateTime()
     * @uses GeneralSegmentType_PNRB::setArrivalDateTime()
     * @uses GeneralSegmentType_PNRB::setConfirmationNumber()
     * @uses GeneralSegmentType_PNRB::setServiceInformation()
     * @uses GeneralSegmentType_PNRB::setSpaceReserved()
     * @uses GeneralSegmentType_PNRB::setShipOrVehicleName()
     * @uses GeneralSegmentType_PNRB::setTour()
     * @uses GeneralSegmentType_PNRB::setText()
     * @uses GeneralSegmentType_PNRB::setLinkCode()
     * @uses GeneralSegmentType_PNRB::setIsPast()
     * @uses GeneralSegmentType_PNRB::setDayOfWeekInd()
     * @uses GeneralSegmentType_PNRB::setRPH()
     * @param \Sabre\UpdateReservation\StructType\Line $line
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @param string $numberInParty
     * @param \Sabre\UpdateReservation\StructType\ServiceCity $serviceCity
     * @param string $arrivalDepartureIdentifier
     * @param string $pOS
     * @param \Sabre\UpdateReservation\StructType\Air $air
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @param \Sabre\UpdateReservation\StructType\OriginLocation $originLocation
     * @param \Sabre\UpdateReservation\StructType\DestinationLocation $destinationLocation
     * @param string $dateTime
     * @param string $arrivalDateTime
     * @param string $confirmationNumber
     * @param string[] $serviceInformation
     * @param string $spaceReserved
     * @param string $shipOrVehicleName
     * @param \Sabre\UpdateReservation\StructType\Tour $tour
     * @param string[] $text
     * @param string $linkCode
     * @param bool $isPast
     * @param string $dayOfWeekInd
     * @param string $rPH
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Line $line = null, \Sabre\UpdateReservation\StructType\Vendor $vendor = null, $numberInParty = null, \Sabre\UpdateReservation\StructType\ServiceCity $serviceCity = null, $arrivalDepartureIdentifier = null, $pOS = null, \Sabre\UpdateReservation\StructType\Air $air = null, \Sabre\UpdateReservation\StructType\Location $location = null, \Sabre\UpdateReservation\StructType\OriginLocation $originLocation = null, \Sabre\UpdateReservation\StructType\DestinationLocation $destinationLocation = null, $dateTime = null, $arrivalDateTime = null, $confirmationNumber = null, array $serviceInformation = array(), $spaceReserved = null, $shipOrVehicleName = null, \Sabre\UpdateReservation\StructType\Tour $tour = null, array $text = array(), $linkCode = null, $isPast = null, $dayOfWeekInd = null, $rPH = null)
    {
        $this
            ->setLine($line)
            ->setVendor($vendor)
            ->setNumberInParty($numberInParty)
            ->setServiceCity($serviceCity)
            ->setArrivalDepartureIdentifier($arrivalDepartureIdentifier)
            ->setPOS($pOS)
            ->setAir($air)
            ->setLocation($location)
            ->setOriginLocation($originLocation)
            ->setDestinationLocation($destinationLocation)
            ->setDateTime($dateTime)
            ->setArrivalDateTime($arrivalDateTime)
            ->setConfirmationNumber($confirmationNumber)
            ->setServiceInformation($serviceInformation)
            ->setSpaceReserved($spaceReserved)
            ->setShipOrVehicleName($shipOrVehicleName)
            ->setTour($tour)
            ->setText($text)
            ->setLinkCode($linkCode)
            ->setIsPast($isPast)
            ->setDayOfWeekInd($dayOfWeekInd)
            ->setRPH($rPH);
    }
    /**
     * Get Line value
     * @return \Sabre\UpdateReservation\StructType\Line|null
     */
    public function getLine()
    {
        return $this->Line;
    }
    /**
     * Set Line value
     * @param \Sabre\UpdateReservation\StructType\Line $line
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setLine(\Sabre\UpdateReservation\StructType\Line $line = null)
    {
        $this->Line = $line;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return string|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param string $numberInParty
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: string
        if (!is_null($numberInParty) && !is_string($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get ServiceCity value
     * @return \Sabre\UpdateReservation\StructType\ServiceCity|null
     */
    public function getServiceCity()
    {
        return $this->ServiceCity;
    }
    /**
     * Set ServiceCity value
     * @param \Sabre\UpdateReservation\StructType\ServiceCity $serviceCity
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setServiceCity(\Sabre\UpdateReservation\StructType\ServiceCity $serviceCity = null)
    {
        $this->ServiceCity = $serviceCity;
        return $this;
    }
    /**
     * Get ArrivalDepartureIdentifier value
     * @return string|null
     */
    public function getArrivalDepartureIdentifier()
    {
        return $this->ArrivalDepartureIdentifier;
    }
    /**
     * Set ArrivalDepartureIdentifier value
     * @param string $arrivalDepartureIdentifier
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setArrivalDepartureIdentifier($arrivalDepartureIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDepartureIdentifier) && !is_string($arrivalDepartureIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDepartureIdentifier)), __LINE__);
        }
        $this->ArrivalDepartureIdentifier = $arrivalDepartureIdentifier;
        return $this;
    }
    /**
     * Get POS value
     * @return string|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param string $pOS
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setPOS($pOS = null)
    {
        // validation for constraint: string
        if (!is_null($pOS) && !is_string($pOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOS)), __LINE__);
        }
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get Air value
     * @return \Sabre\UpdateReservation\StructType\Air|null
     */
    public function getAir()
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Sabre\UpdateReservation\StructType\Air $air
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setAir(\Sabre\UpdateReservation\StructType\Air $air = null)
    {
        $this->Air = $air;
        return $this;
    }
    /**
     * Get Location value
     * @return \Sabre\UpdateReservation\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setLocation(\Sabre\UpdateReservation\StructType\Location $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get OriginLocation value
     * @return \Sabre\UpdateReservation\StructType\OriginLocation|null
     */
    public function getOriginLocation()
    {
        return $this->OriginLocation;
    }
    /**
     * Set OriginLocation value
     * @param \Sabre\UpdateReservation\StructType\OriginLocation $originLocation
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setOriginLocation(\Sabre\UpdateReservation\StructType\OriginLocation $originLocation = null)
    {
        $this->OriginLocation = $originLocation;
        return $this;
    }
    /**
     * Get DestinationLocation value
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation|null
     */
    public function getDestinationLocation()
    {
        return $this->DestinationLocation;
    }
    /**
     * Set DestinationLocation value
     * @param \Sabre\UpdateReservation\StructType\DestinationLocation $destinationLocation
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setDestinationLocation(\Sabre\UpdateReservation\StructType\DestinationLocation $destinationLocation = null)
    {
        $this->DestinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string|null
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get ServiceInformation value
     * @return string[]|null
     */
    public function getServiceInformation()
    {
        return $this->ServiceInformation;
    }
    /**
     * Set ServiceInformation value
     * @throws \InvalidArgumentException
     * @param string[] $serviceInformation
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setServiceInformation(array $serviceInformation = array())
    {
        foreach ($serviceInformation as $generalSegmentType_PNRBServiceInformationItem) {
            // validation for constraint: itemType
            if (!is_string($generalSegmentType_PNRBServiceInformationItem)) {
                throw new \InvalidArgumentException(sprintf('The ServiceInformation property can only contain items of string, "%s" given', is_object($generalSegmentType_PNRBServiceInformationItem) ? get_class($generalSegmentType_PNRBServiceInformationItem) : gettype($generalSegmentType_PNRBServiceInformationItem)), __LINE__);
            }
        }
        $this->ServiceInformation = $serviceInformation;
        return $this;
    }
    /**
     * Add item to ServiceInformation value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function addToServiceInformation($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ServiceInformation property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceInformation[] = $item;
        return $this;
    }
    /**
     * Get SpaceReserved value
     * @return string|null
     */
    public function getSpaceReserved()
    {
        return $this->SpaceReserved;
    }
    /**
     * Set SpaceReserved value
     * @param string $spaceReserved
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setSpaceReserved($spaceReserved = null)
    {
        // validation for constraint: string
        if (!is_null($spaceReserved) && !is_string($spaceReserved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spaceReserved)), __LINE__);
        }
        $this->SpaceReserved = $spaceReserved;
        return $this;
    }
    /**
     * Get ShipOrVehicleName value
     * @return string|null
     */
    public function getShipOrVehicleName()
    {
        return $this->ShipOrVehicleName;
    }
    /**
     * Set ShipOrVehicleName value
     * @param string $shipOrVehicleName
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setShipOrVehicleName($shipOrVehicleName = null)
    {
        // validation for constraint: string
        if (!is_null($shipOrVehicleName) && !is_string($shipOrVehicleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipOrVehicleName)), __LINE__);
        }
        $this->ShipOrVehicleName = $shipOrVehicleName;
        return $this;
    }
    /**
     * Get Tour value
     * @return \Sabre\UpdateReservation\StructType\Tour|null
     */
    public function getTour()
    {
        return $this->Tour;
    }
    /**
     * Set Tour value
     * @param \Sabre\UpdateReservation\StructType\Tour $tour
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setTour(\Sabre\UpdateReservation\StructType\Tour $tour = null)
    {
        $this->Tour = $tour;
        return $this;
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setText(array $text = array())
    {
        foreach ($text as $generalSegmentType_PNRBTextItem) {
            // validation for constraint: itemType
            if (!is_string($generalSegmentType_PNRBTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($generalSegmentType_PNRBTextItem) ? get_class($generalSegmentType_PNRBTextItem) : gettype($generalSegmentType_PNRBTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Get LinkCode value
     * @return string|null
     */
    public function getLinkCode()
    {
        return $this->LinkCode;
    }
    /**
     * Set LinkCode value
     * @param string $linkCode
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setLinkCode($linkCode = null)
    {
        // validation for constraint: string
        if (!is_null($linkCode) && !is_string($linkCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkCode)), __LINE__);
        }
        $this->LinkCode = $linkCode;
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
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
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
     * Get dayOfWeekInd value
     * @return string|null
     */
    public function getDayOfWeekInd()
    {
        return $this->dayOfWeekInd;
    }
    /**
     * Set dayOfWeekInd value
     * @param string $dayOfWeekInd
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
     */
    public function setDayOfWeekInd($dayOfWeekInd = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeekInd) && !is_string($dayOfWeekInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeekInd)), __LINE__);
        }
        $this->dayOfWeekInd = $dayOfWeekInd;
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
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentType_PNRB
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
