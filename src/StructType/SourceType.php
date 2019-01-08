<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SourceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on the source of a request. This is from the OTA xsd.
 * @subpackage Structs
 */
class SourceType extends AbstractStructBase
{
    /**
     * The RequestorID
     * Meta informations extracted from the WSDL
     * - documentation: An identifier of the entity making the request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider (ERSP), Association of British Travel Agents (ABTA)).
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RequestorIDType
     */
    public $RequestorID;
    /**
     * The BookingChannel
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BookingChannelType
     */
    public $BookingChannel;
    /**
     * The TTYRecordLocator
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TTYRecordLocatorType[]
     */
    public $TTYRecordLocator;
    /**
     * The OAC
     * Meta informations extracted from the WSDL
     * - documentation: Office Account Code. Defines agency PCC extension
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OACType
     */
    public $OAC;
    /**
     * The BookingSource
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the booking source within the requesting entity.
     * @var string
     */
    public $BookingSource;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the party within the requesting entity.
     * @var string
     */
    public $AgentSine;
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - documentation: An identification code assigned to an office/agency by a reservation system.
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The ISOCountry
     * Meta informations extracted from the WSDL
     * - documentation: The country code of the requesting party.
     * @var string
     */
    public $ISOCountry;
    /**
     * The ISOCurrency
     * @var string
     */
    public $ISOCurrency;
    /**
     * The AgentDutyCode
     * Meta informations extracted from the WSDL
     * - documentation: An authority code assigned to a requestor.
     * @var string
     */
    public $AgentDutyCode;
    /**
     * The AirlineVendorID
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airline code.
     * @var string
     */
    public $AirlineVendorID;
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airport code.
     * @var string
     */
    public $AirportCode;
    /**
     * The FirstDepartPoint
     * Meta informations extracted from the WSDL
     * - documentation: The point of first departure in a trip.
     * @var string
     */
    public $FirstDepartPoint;
    /**
     * The SourceSystem
     * Meta informations extracted from the WSDL
     * - documentation: e.g., CSS, CSI
     * @var string
     */
    public $SourceSystem;
    /**
     * The TerminalID
     * Meta informations extracted from the WSDL
     * - documentation: This is the electronic address of the device from which information is entered.
     * @var string
     */
    public $TerminalID;
    /**
     * Constructor method for SourceType
     * @uses SourceType::setRequestorID()
     * @uses SourceType::setBookingChannel()
     * @uses SourceType::setTTYRecordLocator()
     * @uses SourceType::setOAC()
     * @uses SourceType::setBookingSource()
     * @uses SourceType::setAgentSine()
     * @uses SourceType::setPseudoCityCode()
     * @uses SourceType::setISOCountry()
     * @uses SourceType::setISOCurrency()
     * @uses SourceType::setAgentDutyCode()
     * @uses SourceType::setAirlineVendorID()
     * @uses SourceType::setAirportCode()
     * @uses SourceType::setFirstDepartPoint()
     * @uses SourceType::setSourceSystem()
     * @uses SourceType::setTerminalID()
     * @param \Sabre\UpdateReservation\StructType\RequestorIDType $requestorID
     * @param \Sabre\UpdateReservation\StructType\BookingChannelType $bookingChannel
     * @param \Sabre\UpdateReservation\StructType\TTYRecordLocatorType[] $tTYRecordLocator
     * @param \Sabre\UpdateReservation\StructType\OACType $oAC
     * @param string $bookingSource
     * @param string $agentSine
     * @param string $pseudoCityCode
     * @param string $iSOCountry
     * @param string $iSOCurrency
     * @param string $agentDutyCode
     * @param string $airlineVendorID
     * @param string $airportCode
     * @param string $firstDepartPoint
     * @param string $sourceSystem
     * @param string $terminalID
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RequestorIDType $requestorID = null, \Sabre\UpdateReservation\StructType\BookingChannelType $bookingChannel = null, array $tTYRecordLocator = array(), \Sabre\UpdateReservation\StructType\OACType $oAC = null, $bookingSource = null, $agentSine = null, $pseudoCityCode = null, $iSOCountry = null, $iSOCurrency = null, $agentDutyCode = null, $airlineVendorID = null, $airportCode = null, $firstDepartPoint = null, $sourceSystem = null, $terminalID = null)
    {
        $this
            ->setRequestorID($requestorID)
            ->setBookingChannel($bookingChannel)
            ->setTTYRecordLocator($tTYRecordLocator)
            ->setOAC($oAC)
            ->setBookingSource($bookingSource)
            ->setAgentSine($agentSine)
            ->setPseudoCityCode($pseudoCityCode)
            ->setISOCountry($iSOCountry)
            ->setISOCurrency($iSOCurrency)
            ->setAgentDutyCode($agentDutyCode)
            ->setAirlineVendorID($airlineVendorID)
            ->setAirportCode($airportCode)
            ->setFirstDepartPoint($firstDepartPoint)
            ->setSourceSystem($sourceSystem)
            ->setTerminalID($terminalID);
    }
    /**
     * Get RequestorID value
     * @return \Sabre\UpdateReservation\StructType\RequestorIDType|null
     */
    public function getRequestorID()
    {
        return $this->RequestorID;
    }
    /**
     * Set RequestorID value
     * @param \Sabre\UpdateReservation\StructType\RequestorIDType $requestorID
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setRequestorID(\Sabre\UpdateReservation\StructType\RequestorIDType $requestorID = null)
    {
        $this->RequestorID = $requestorID;
        return $this;
    }
    /**
     * Get BookingChannel value
     * @return \Sabre\UpdateReservation\StructType\BookingChannelType|null
     */
    public function getBookingChannel()
    {
        return $this->BookingChannel;
    }
    /**
     * Set BookingChannel value
     * @param \Sabre\UpdateReservation\StructType\BookingChannelType $bookingChannel
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setBookingChannel(\Sabre\UpdateReservation\StructType\BookingChannelType $bookingChannel = null)
    {
        $this->BookingChannel = $bookingChannel;
        return $this;
    }
    /**
     * Get TTYRecordLocator value
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType[]|null
     */
    public function getTTYRecordLocator()
    {
        return $this->TTYRecordLocator;
    }
    /**
     * Set TTYRecordLocator value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TTYRecordLocatorType[] $tTYRecordLocator
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setTTYRecordLocator(array $tTYRecordLocator = array())
    {
        foreach ($tTYRecordLocator as $sourceTypeTTYRecordLocatorItem) {
            // validation for constraint: itemType
            if (!$sourceTypeTTYRecordLocatorItem instanceof \Sabre\UpdateReservation\StructType\TTYRecordLocatorType) {
                throw new \InvalidArgumentException(sprintf('The TTYRecordLocator property can only contain items of \Sabre\UpdateReservation\StructType\TTYRecordLocatorType, "%s" given', is_object($sourceTypeTTYRecordLocatorItem) ? get_class($sourceTypeTTYRecordLocatorItem) : gettype($sourceTypeTTYRecordLocatorItem)), __LINE__);
            }
        }
        $this->TTYRecordLocator = $tTYRecordLocator;
        return $this;
    }
    /**
     * Add item to TTYRecordLocator value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TTYRecordLocatorType $item
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function addToTTYRecordLocator(\Sabre\UpdateReservation\StructType\TTYRecordLocatorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TTYRecordLocatorType) {
            throw new \InvalidArgumentException(sprintf('The TTYRecordLocator property can only contain items of \Sabre\UpdateReservation\StructType\TTYRecordLocatorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TTYRecordLocator[] = $item;
        return $this;
    }
    /**
     * Get OAC value
     * @return \Sabre\UpdateReservation\StructType\OACType|null
     */
    public function getOAC()
    {
        return $this->OAC;
    }
    /**
     * Set OAC value
     * @param \Sabre\UpdateReservation\StructType\OACType $oAC
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setOAC(\Sabre\UpdateReservation\StructType\OACType $oAC = null)
    {
        $this->OAC = $oAC;
        return $this;
    }
    /**
     * Get BookingSource value
     * @return string|null
     */
    public function getBookingSource()
    {
        return $this->BookingSource;
    }
    /**
     * Set BookingSource value
     * @param string $bookingSource
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setBookingSource($bookingSource = null)
    {
        // validation for constraint: string
        if (!is_null($bookingSource) && !is_string($bookingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingSource)), __LINE__);
        }
        $this->BookingSource = $bookingSource;
        return $this;
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setAgentSine($agentSine = null)
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setPseudoCityCode($pseudoCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Get ISOCountry value
     * @return string|null
     */
    public function getISOCountry()
    {
        return $this->ISOCountry;
    }
    /**
     * Set ISOCountry value
     * @param string $iSOCountry
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setISOCountry($iSOCountry = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCountry) && !is_string($iSOCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCountry)), __LINE__);
        }
        $this->ISOCountry = $iSOCountry;
        return $this;
    }
    /**
     * Get ISOCurrency value
     * @return string|null
     */
    public function getISOCurrency()
    {
        return $this->ISOCurrency;
    }
    /**
     * Set ISOCurrency value
     * @param string $iSOCurrency
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setISOCurrency($iSOCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCurrency) && !is_string($iSOCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCurrency)), __LINE__);
        }
        $this->ISOCurrency = $iSOCurrency;
        return $this;
    }
    /**
     * Get AgentDutyCode value
     * @return string|null
     */
    public function getAgentDutyCode()
    {
        return $this->AgentDutyCode;
    }
    /**
     * Set AgentDutyCode value
     * @param string $agentDutyCode
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setAgentDutyCode($agentDutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($agentDutyCode) && !is_string($agentDutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentDutyCode)), __LINE__);
        }
        $this->AgentDutyCode = $agentDutyCode;
        return $this;
    }
    /**
     * Get AirlineVendorID value
     * @return string|null
     */
    public function getAirlineVendorID()
    {
        return $this->AirlineVendorID;
    }
    /**
     * Set AirlineVendorID value
     * @param string $airlineVendorID
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setAirlineVendorID($airlineVendorID = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorID) && !is_string($airlineVendorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorID)), __LINE__);
        }
        $this->AirlineVendorID = $airlineVendorID;
        return $this;
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setAirportCode($airportCode = null)
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportCode)), __LINE__);
        }
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get FirstDepartPoint value
     * @return string|null
     */
    public function getFirstDepartPoint()
    {
        return $this->FirstDepartPoint;
    }
    /**
     * Set FirstDepartPoint value
     * @param string $firstDepartPoint
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setFirstDepartPoint($firstDepartPoint = null)
    {
        // validation for constraint: string
        if (!is_null($firstDepartPoint) && !is_string($firstDepartPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstDepartPoint)), __LINE__);
        }
        $this->FirstDepartPoint = $firstDepartPoint;
        return $this;
    }
    /**
     * Get SourceSystem value
     * @return string|null
     */
    public function getSourceSystem()
    {
        return $this->SourceSystem;
    }
    /**
     * Set SourceSystem value
     * @param string $sourceSystem
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setSourceSystem($sourceSystem = null)
    {
        // validation for constraint: string
        if (!is_null($sourceSystem) && !is_string($sourceSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceSystem)), __LINE__);
        }
        $this->SourceSystem = $sourceSystem;
        return $this;
    }
    /**
     * Get TerminalID value
     * @return string|null
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }
    /**
     * Set TerminalID value
     * @param string $terminalID
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function setTerminalID($terminalID = null)
    {
        // validation for constraint: string
        if (!is_null($terminalID) && !is_string($terminalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalID)), __LINE__);
        }
        $this->TerminalID = $terminalID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SourceType
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
