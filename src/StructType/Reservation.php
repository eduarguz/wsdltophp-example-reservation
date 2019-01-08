<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reservation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Hotel reservation information.
 * - type: pnrb:Reservation.PNRB
 * @subpackage Structs
 */
class Reservation extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineNumber;
    /**
     * The LineType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LineType;
    /**
     * The LineStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LineStatus;
    /**
     * The POSRequestorID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $POSRequestorID;
    /**
     * The SpecialPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialPrefs
     */
    public $SpecialPrefs;
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RoomType
     */
    public $RoomType;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Services
     */
    public $Services;
    /**
     * The RoomRates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RoomRates
     */
    public $RoomRates;
    /**
     * The RateAccessCodeBooked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RateAccessCodeBooked
     */
    public $RateAccessCodeBooked;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public $GuestCounts;
    /**
     * The TimeSpanStart
     * Meta informations extracted from the WSDL
     * - documentation: The starting value of the time span.
     * - minOccurs: 0
     * @var string
     */
    public $TimeSpanStart;
    /**
     * The TimeSpanDuration
     * Meta informations extracted from the WSDL
     * - documentation: The lexical representation for timeDuration is the [ISO 8601] extended format PnYn MnDTnH nMnS, where nY represents the number of years, nM the number of months, nD the number of days, 'T' is the date/time separator, nH the number of
     * hours, nM the number of minutes and nS the number of seconds. The number of seconds can include decimal digits to arbitrary precision. As an example, 7 months, 2 days, 2hours and 30 minutes would be expressed as P0Y7M2DT2H30M0S. Truncated
     * representations are allowed provided they conform to ISO 8601 format.
     * - minOccurs: 0
     * @var string
     */
    public $TimeSpanDuration;
    /**
     * The TimeSpanEnd
     * Meta informations extracted from the WSDL
     * - documentation: The ending value of the time span.
     * - minOccurs: 0
     * @var string
     */
    public $TimeSpanEnd;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Guarantee
     */
    public $Guarantee;
    /**
     * The ChainCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     * - minOccurs: 0
     * @var string
     */
    public $ChainCode;
    /**
     * The HotelCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelCode[]
     */
    public $HotelCode;
    /**
     * The HotelCityCode
     * Meta informations extracted from the WSDL
     * - documentation: The IATA city code; for example DCA, ORD.
     * - minOccurs: 0
     * @var string
     */
    public $HotelCityCode;
    /**
     * The HotelName
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to communicate the proper name of the hotel.
     * - minOccurs: 0
     * @var string
     */
    public $HotelName;
    /**
     * The HotelTotalPricing
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelTotalPricing
     */
    public $HotelTotalPricing;
    /**
     * The HotelReplyText
     * Meta informations extracted from the WSDL
     * - documentation: A text field with info received from the hotel at the time of booking.
     * - minOccurs: 0
     * @var string
     */
    public $HotelReplyText;
    /**
     * The HotelUniqueID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelUniqueIDType[]
     */
    public $HotelUniqueID;
    /**
     * The DayOfWeekInd
     * Meta informations extracted from the WSDL
     * - documentation: "DayOfWeekInd" is used to return the day of the week indicator.
     * - use: optional
     * @var string
     */
    public $DayOfWeekInd;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: "NumberInParty" is used to return the number of passengers associated with the particular hotel segment.
     * - use: optional
     * @var string
     */
    public $NumberInParty;
    /**
     * Constructor method for Reservation
     * @uses Reservation::setLineNumber()
     * @uses Reservation::setLineType()
     * @uses Reservation::setLineStatus()
     * @uses Reservation::setPOSRequestorID()
     * @uses Reservation::setSpecialPrefs()
     * @uses Reservation::setRoomType()
     * @uses Reservation::setServices()
     * @uses Reservation::setRoomRates()
     * @uses Reservation::setRateAccessCodeBooked()
     * @uses Reservation::setGuestCounts()
     * @uses Reservation::setTimeSpanStart()
     * @uses Reservation::setTimeSpanDuration()
     * @uses Reservation::setTimeSpanEnd()
     * @uses Reservation::setGuarantee()
     * @uses Reservation::setChainCode()
     * @uses Reservation::setHotelCode()
     * @uses Reservation::setHotelCityCode()
     * @uses Reservation::setHotelName()
     * @uses Reservation::setHotelTotalPricing()
     * @uses Reservation::setHotelReplyText()
     * @uses Reservation::setHotelUniqueID()
     * @uses Reservation::setDayOfWeekInd()
     * @uses Reservation::setNumberInParty()
     * @param int $lineNumber
     * @param string $lineType
     * @param string $lineStatus
     * @param string $pOSRequestorID
     * @param \Sabre\UpdateReservation\StructType\SpecialPrefs $specialPrefs
     * @param \Sabre\UpdateReservation\StructType\RoomType $roomType
     * @param \Sabre\UpdateReservation\StructType\Services $services
     * @param \Sabre\UpdateReservation\StructType\RoomRates $roomRates
     * @param \Sabre\UpdateReservation\StructType\RateAccessCodeBooked $rateAccessCodeBooked
     * @param \Sabre\UpdateReservation\StructType\GuestCounts $guestCounts
     * @param string $timeSpanStart
     * @param string $timeSpanDuration
     * @param string $timeSpanEnd
     * @param \Sabre\UpdateReservation\StructType\Guarantee $guarantee
     * @param string $chainCode
     * @param \Sabre\UpdateReservation\StructType\HotelCode[] $hotelCode
     * @param string $hotelCityCode
     * @param string $hotelName
     * @param \Sabre\UpdateReservation\StructType\HotelTotalPricing $hotelTotalPricing
     * @param string $hotelReplyText
     * @param \Sabre\UpdateReservation\StructType\HotelUniqueIDType[] $hotelUniqueID
     * @param string $dayOfWeekInd
     * @param string $numberInParty
     */
    public function __construct($lineNumber = null, $lineType = null, $lineStatus = null, $pOSRequestorID = null, \Sabre\UpdateReservation\StructType\SpecialPrefs $specialPrefs = null, \Sabre\UpdateReservation\StructType\RoomType $roomType = null, \Sabre\UpdateReservation\StructType\Services $services = null, \Sabre\UpdateReservation\StructType\RoomRates $roomRates = null, \Sabre\UpdateReservation\StructType\RateAccessCodeBooked $rateAccessCodeBooked = null, \Sabre\UpdateReservation\StructType\GuestCounts $guestCounts = null, $timeSpanStart = null, $timeSpanDuration = null, $timeSpanEnd = null, \Sabre\UpdateReservation\StructType\Guarantee $guarantee = null, $chainCode = null, array $hotelCode = array(), $hotelCityCode = null, $hotelName = null, \Sabre\UpdateReservation\StructType\HotelTotalPricing $hotelTotalPricing = null, $hotelReplyText = null, array $hotelUniqueID = array(), $dayOfWeekInd = null, $numberInParty = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setLineType($lineType)
            ->setLineStatus($lineStatus)
            ->setPOSRequestorID($pOSRequestorID)
            ->setSpecialPrefs($specialPrefs)
            ->setRoomType($roomType)
            ->setServices($services)
            ->setRoomRates($roomRates)
            ->setRateAccessCodeBooked($rateAccessCodeBooked)
            ->setGuestCounts($guestCounts)
            ->setTimeSpanStart($timeSpanStart)
            ->setTimeSpanDuration($timeSpanDuration)
            ->setTimeSpanEnd($timeSpanEnd)
            ->setGuarantee($guarantee)
            ->setChainCode($chainCode)
            ->setHotelCode($hotelCode)
            ->setHotelCityCode($hotelCityCode)
            ->setHotelName($hotelName)
            ->setHotelTotalPricing($hotelTotalPricing)
            ->setHotelReplyText($hotelReplyText)
            ->setHotelUniqueID($hotelUniqueID)
            ->setDayOfWeekInd($dayOfWeekInd)
            ->setNumberInParty($numberInParty);
    }
    /**
     * Get LineNumber value
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param int $lineNumber
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: int
        if (!is_null($lineNumber) && !is_numeric($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get LineType value
     * @return string|null
     */
    public function getLineType()
    {
        return $this->LineType;
    }
    /**
     * Set LineType value
     * @param string $lineType
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setLineType($lineType = null)
    {
        // validation for constraint: string
        if (!is_null($lineType) && !is_string($lineType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineType)), __LINE__);
        }
        $this->LineType = $lineType;
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
     * @return \Sabre\UpdateReservation\StructType\Reservation
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
     * @return \Sabre\UpdateReservation\StructType\Reservation
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
     * Get SpecialPrefs value
     * @return \Sabre\UpdateReservation\StructType\SpecialPrefs|null
     */
    public function getSpecialPrefs()
    {
        return $this->SpecialPrefs;
    }
    /**
     * Set SpecialPrefs value
     * @param \Sabre\UpdateReservation\StructType\SpecialPrefs $specialPrefs
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setSpecialPrefs(\Sabre\UpdateReservation\StructType\SpecialPrefs $specialPrefs = null)
    {
        $this->SpecialPrefs = $specialPrefs;
        return $this;
    }
    /**
     * Get RoomType value
     * @return \Sabre\UpdateReservation\StructType\RoomType|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param \Sabre\UpdateReservation\StructType\RoomType $roomType
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setRoomType(\Sabre\UpdateReservation\StructType\RoomType $roomType = null)
    {
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get Services value
     * @return \Sabre\UpdateReservation\StructType\Services|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Sabre\UpdateReservation\StructType\Services $services
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setServices(\Sabre\UpdateReservation\StructType\Services $services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Get RoomRates value
     * @return \Sabre\UpdateReservation\StructType\RoomRates|null
     */
    public function getRoomRates()
    {
        return $this->RoomRates;
    }
    /**
     * Set RoomRates value
     * @param \Sabre\UpdateReservation\StructType\RoomRates $roomRates
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setRoomRates(\Sabre\UpdateReservation\StructType\RoomRates $roomRates = null)
    {
        $this->RoomRates = $roomRates;
        return $this;
    }
    /**
     * Get RateAccessCodeBooked value
     * @return \Sabre\UpdateReservation\StructType\RateAccessCodeBooked|null
     */
    public function getRateAccessCodeBooked()
    {
        return $this->RateAccessCodeBooked;
    }
    /**
     * Set RateAccessCodeBooked value
     * @param \Sabre\UpdateReservation\StructType\RateAccessCodeBooked $rateAccessCodeBooked
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setRateAccessCodeBooked(\Sabre\UpdateReservation\StructType\RateAccessCodeBooked $rateAccessCodeBooked = null)
    {
        $this->RateAccessCodeBooked = $rateAccessCodeBooked;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return \Sabre\UpdateReservation\StructType\GuestCounts|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \Sabre\UpdateReservation\StructType\GuestCounts $guestCounts
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setGuestCounts(\Sabre\UpdateReservation\StructType\GuestCounts $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get TimeSpanStart value
     * @return string|null
     */
    public function getTimeSpanStart()
    {
        return $this->TimeSpanStart;
    }
    /**
     * Set TimeSpanStart value
     * @param string $timeSpanStart
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setTimeSpanStart($timeSpanStart = null)
    {
        // validation for constraint: string
        if (!is_null($timeSpanStart) && !is_string($timeSpanStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeSpanStart)), __LINE__);
        }
        $this->TimeSpanStart = $timeSpanStart;
        return $this;
    }
    /**
     * Get TimeSpanDuration value
     * @return string|null
     */
    public function getTimeSpanDuration()
    {
        return $this->TimeSpanDuration;
    }
    /**
     * Set TimeSpanDuration value
     * @param string $timeSpanDuration
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setTimeSpanDuration($timeSpanDuration = null)
    {
        // validation for constraint: string
        if (!is_null($timeSpanDuration) && !is_string($timeSpanDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeSpanDuration)), __LINE__);
        }
        $this->TimeSpanDuration = $timeSpanDuration;
        return $this;
    }
    /**
     * Get TimeSpanEnd value
     * @return string|null
     */
    public function getTimeSpanEnd()
    {
        return $this->TimeSpanEnd;
    }
    /**
     * Set TimeSpanEnd value
     * @param string $timeSpanEnd
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setTimeSpanEnd($timeSpanEnd = null)
    {
        // validation for constraint: string
        if (!is_null($timeSpanEnd) && !is_string($timeSpanEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeSpanEnd)), __LINE__);
        }
        $this->TimeSpanEnd = $timeSpanEnd;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Sabre\UpdateReservation\StructType\Guarantee|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Sabre\UpdateReservation\StructType\Guarantee $guarantee
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setGuarantee(\Sabre\UpdateReservation\StructType\Guarantee $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get ChainCode value
     * @return string|null
     */
    public function getChainCode()
    {
        return $this->ChainCode;
    }
    /**
     * Set ChainCode value
     * @param string $chainCode
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setChainCode($chainCode = null)
    {
        // validation for constraint: string
        if (!is_null($chainCode) && !is_string($chainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainCode)), __LINE__);
        }
        $this->ChainCode = $chainCode;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return \Sabre\UpdateReservation\StructType\HotelCode[]|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelCode[] $hotelCode
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setHotelCode(array $hotelCode = array())
    {
        foreach ($hotelCode as $reservationHotelCodeItem) {
            // validation for constraint: itemType
            if (!$reservationHotelCodeItem instanceof \Sabre\UpdateReservation\StructType\HotelCode) {
                throw new \InvalidArgumentException(sprintf('The HotelCode property can only contain items of \Sabre\UpdateReservation\StructType\HotelCode, "%s" given', is_object($reservationHotelCodeItem) ? get_class($reservationHotelCodeItem) : gettype($reservationHotelCodeItem)), __LINE__);
            }
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Add item to HotelCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelCode $item
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function addToHotelCode(\Sabre\UpdateReservation\StructType\HotelCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HotelCode) {
            throw new \InvalidArgumentException(sprintf('The HotelCode property can only contain items of \Sabre\UpdateReservation\StructType\HotelCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelCode[] = $item;
        return $this;
    }
    /**
     * Get HotelCityCode value
     * @return string|null
     */
    public function getHotelCityCode()
    {
        return $this->HotelCityCode;
    }
    /**
     * Set HotelCityCode value
     * @param string $hotelCityCode
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setHotelCityCode($hotelCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCityCode) && !is_string($hotelCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCityCode)), __LINE__);
        }
        $this->HotelCityCode = $hotelCityCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Get HotelTotalPricing value
     * @return \Sabre\UpdateReservation\StructType\HotelTotalPricing|null
     */
    public function getHotelTotalPricing()
    {
        return $this->HotelTotalPricing;
    }
    /**
     * Set HotelTotalPricing value
     * @param \Sabre\UpdateReservation\StructType\HotelTotalPricing $hotelTotalPricing
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setHotelTotalPricing(\Sabre\UpdateReservation\StructType\HotelTotalPricing $hotelTotalPricing = null)
    {
        $this->HotelTotalPricing = $hotelTotalPricing;
        return $this;
    }
    /**
     * Get HotelReplyText value
     * @return string|null
     */
    public function getHotelReplyText()
    {
        return $this->HotelReplyText;
    }
    /**
     * Set HotelReplyText value
     * @param string $hotelReplyText
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setHotelReplyText($hotelReplyText = null)
    {
        // validation for constraint: string
        if (!is_null($hotelReplyText) && !is_string($hotelReplyText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelReplyText)), __LINE__);
        }
        $this->HotelReplyText = $hotelReplyText;
        return $this;
    }
    /**
     * Get HotelUniqueID value
     * @return \Sabre\UpdateReservation\StructType\HotelUniqueIDType[]|null
     */
    public function getHotelUniqueID()
    {
        return $this->HotelUniqueID;
    }
    /**
     * Set HotelUniqueID value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelUniqueIDType[] $hotelUniqueID
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function setHotelUniqueID(array $hotelUniqueID = array())
    {
        foreach ($hotelUniqueID as $reservationHotelUniqueIDItem) {
            // validation for constraint: itemType
            if (!$reservationHotelUniqueIDItem instanceof \Sabre\UpdateReservation\StructType\HotelUniqueIDType) {
                throw new \InvalidArgumentException(sprintf('The HotelUniqueID property can only contain items of \Sabre\UpdateReservation\StructType\HotelUniqueIDType, "%s" given', is_object($reservationHotelUniqueIDItem) ? get_class($reservationHotelUniqueIDItem) : gettype($reservationHotelUniqueIDItem)), __LINE__);
            }
        }
        $this->HotelUniqueID = $hotelUniqueID;
        return $this;
    }
    /**
     * Add item to HotelUniqueID value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\HotelUniqueIDType $item
     * @return \Sabre\UpdateReservation\StructType\Reservation
     */
    public function addToHotelUniqueID(\Sabre\UpdateReservation\StructType\HotelUniqueIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\HotelUniqueIDType) {
            throw new \InvalidArgumentException(sprintf('The HotelUniqueID property can only contain items of \Sabre\UpdateReservation\StructType\HotelUniqueIDType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelUniqueID[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\Reservation
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
     * @return \Sabre\UpdateReservation\StructType\Reservation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Reservation
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
