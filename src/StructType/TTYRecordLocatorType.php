<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TTYRecordLocatorType StructType
 * @subpackage Structs
 */
class TTYRecordLocatorType extends AbstractStructBase
{
    /**
     * The CRSLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CRSLocator;
    /**
     * The CRSCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CRSCode;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecordLocator;
    /**
     * The AgencyId
     * Meta informations extracted from the WSDL
     * - documentation: Booking Source arranger
     * - minOccurs: 0
     * @var string
     */
    public $AgencyId;
    /**
     * The IataNumber
     * Meta informations extracted from the WSDL
     * - documentation: Booking Source location IATA Number
     * - minOccurs: 0
     * @var string
     */
    public $IataNumber;
    /**
     * The AgencyLocation
     * Meta informations extracted from the WSDL
     * - documentation: Booking Source agent Location
     * - minOccurs: 0
     * @var string
     */
    public $AgencyLocation;
    /**
     * The UserType
     * Meta informations extracted from the WSDL
     * - documentation: A - Airline; E - ERSP; N - no user ID assigned by IATA; T - user ID assigned by IATA other than ERSP. Ex. "A"
     * - minOccurs: 0
     * @var string
     */
    public $UserType;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Currency;
    /**
     * The DutyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DutyCode;
    /**
     * The ERSPUserId
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Reservation Service Provider number.
     * - minOccurs: 0
     * @var string
     */
    public $ERSPUserId;
    /**
     * The FirstPointOfDeparture
     * Meta informations extracted from the WSDL
     * - documentation: First point of departure for this booking.
     * - minOccurs: 0
     * @var string
     */
    public $FirstPointOfDeparture;
    /**
     * Constructor method for TTYRecordLocatorType
     * @uses TTYRecordLocatorType::setCRSLocator()
     * @uses TTYRecordLocatorType::setCRSCode()
     * @uses TTYRecordLocatorType::setRecordLocator()
     * @uses TTYRecordLocatorType::setAgencyId()
     * @uses TTYRecordLocatorType::setIataNumber()
     * @uses TTYRecordLocatorType::setAgencyLocation()
     * @uses TTYRecordLocatorType::setUserType()
     * @uses TTYRecordLocatorType::setCountryCode()
     * @uses TTYRecordLocatorType::setCurrency()
     * @uses TTYRecordLocatorType::setDutyCode()
     * @uses TTYRecordLocatorType::setERSPUserId()
     * @uses TTYRecordLocatorType::setFirstPointOfDeparture()
     * @param string $cRSLocator
     * @param string $cRSCode
     * @param string $recordLocator
     * @param string $agencyId
     * @param string $iataNumber
     * @param string $agencyLocation
     * @param string $userType
     * @param string $countryCode
     * @param string $currency
     * @param string $dutyCode
     * @param string $eRSPUserId
     * @param string $firstPointOfDeparture
     */
    public function __construct($cRSLocator = null, $cRSCode = null, $recordLocator = null, $agencyId = null, $iataNumber = null, $agencyLocation = null, $userType = null, $countryCode = null, $currency = null, $dutyCode = null, $eRSPUserId = null, $firstPointOfDeparture = null)
    {
        $this
            ->setCRSLocator($cRSLocator)
            ->setCRSCode($cRSCode)
            ->setRecordLocator($recordLocator)
            ->setAgencyId($agencyId)
            ->setIataNumber($iataNumber)
            ->setAgencyLocation($agencyLocation)
            ->setUserType($userType)
            ->setCountryCode($countryCode)
            ->setCurrency($currency)
            ->setDutyCode($dutyCode)
            ->setERSPUserId($eRSPUserId)
            ->setFirstPointOfDeparture($firstPointOfDeparture);
    }
    /**
     * Get CRSLocator value
     * @return string|null
     */
    public function getCRSLocator()
    {
        return $this->CRSLocator;
    }
    /**
     * Set CRSLocator value
     * @param string $cRSLocator
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setCRSLocator($cRSLocator = null)
    {
        // validation for constraint: string
        if (!is_null($cRSLocator) && !is_string($cRSLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cRSLocator)), __LINE__);
        }
        $this->CRSLocator = $cRSLocator;
        return $this;
    }
    /**
     * Get CRSCode value
     * @return string|null
     */
    public function getCRSCode()
    {
        return $this->CRSCode;
    }
    /**
     * Set CRSCode value
     * @param string $cRSCode
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setCRSCode($cRSCode = null)
    {
        // validation for constraint: string
        if (!is_null($cRSCode) && !is_string($cRSCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cRSCode)), __LINE__);
        }
        $this->CRSCode = $cRSCode;
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get AgencyId value
     * @return string|null
     */
    public function getAgencyId()
    {
        return $this->AgencyId;
    }
    /**
     * Set AgencyId value
     * @param string $agencyId
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setAgencyId($agencyId = null)
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyId)), __LINE__);
        }
        $this->AgencyId = $agencyId;
        return $this;
    }
    /**
     * Get IataNumber value
     * @return string|null
     */
    public function getIataNumber()
    {
        return $this->IataNumber;
    }
    /**
     * Set IataNumber value
     * @param string $iataNumber
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setIataNumber($iataNumber = null)
    {
        // validation for constraint: string
        if (!is_null($iataNumber) && !is_string($iataNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iataNumber)), __LINE__);
        }
        $this->IataNumber = $iataNumber;
        return $this;
    }
    /**
     * Get AgencyLocation value
     * @return string|null
     */
    public function getAgencyLocation()
    {
        return $this->AgencyLocation;
    }
    /**
     * Set AgencyLocation value
     * @param string $agencyLocation
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setAgencyLocation($agencyLocation = null)
    {
        // validation for constraint: string
        if (!is_null($agencyLocation) && !is_string($agencyLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyLocation)), __LINE__);
        }
        $this->AgencyLocation = $agencyLocation;
        return $this;
    }
    /**
     * Get UserType value
     * @return string|null
     */
    public function getUserType()
    {
        return $this->UserType;
    }
    /**
     * Set UserType value
     * @param string $userType
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setUserType($userType = null)
    {
        // validation for constraint: string
        if (!is_null($userType) && !is_string($userType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userType)), __LINE__);
        }
        $this->UserType = $userType;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get DutyCode value
     * @return string|null
     */
    public function getDutyCode()
    {
        return $this->DutyCode;
    }
    /**
     * Set DutyCode value
     * @param string $dutyCode
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setDutyCode($dutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($dutyCode) && !is_string($dutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dutyCode)), __LINE__);
        }
        $this->DutyCode = $dutyCode;
        return $this;
    }
    /**
     * Get ERSPUserId value
     * @return string|null
     */
    public function getERSPUserId()
    {
        return $this->ERSPUserId;
    }
    /**
     * Set ERSPUserId value
     * @param string $eRSPUserId
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setERSPUserId($eRSPUserId = null)
    {
        // validation for constraint: string
        if (!is_null($eRSPUserId) && !is_string($eRSPUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eRSPUserId)), __LINE__);
        }
        $this->ERSPUserId = $eRSPUserId;
        return $this;
    }
    /**
     * Get FirstPointOfDeparture value
     * @return string|null
     */
    public function getFirstPointOfDeparture()
    {
        return $this->FirstPointOfDeparture;
    }
    /**
     * Set FirstPointOfDeparture value
     * @param string $firstPointOfDeparture
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
     */
    public function setFirstPointOfDeparture($firstPointOfDeparture = null)
    {
        // validation for constraint: string
        if (!is_null($firstPointOfDeparture) && !is_string($firstPointOfDeparture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstPointOfDeparture)), __LINE__);
        }
        $this->FirstPointOfDeparture = $firstPointOfDeparture;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TTYRecordLocatorType
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
