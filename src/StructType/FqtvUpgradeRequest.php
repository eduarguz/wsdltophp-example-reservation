<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FqtvUpgradeRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Flight and frequent traveler upgrade request details
 * @subpackage Structs
 */
class FqtvUpgradeRequest extends FlightBasicData
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The OriginalRequestTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalRequestTimestamp;
    /**
     * The LocalDepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocalDepartureDate;
    /**
     * The TierLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TierLevel;
    /**
     * The RequestedUpgradeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestedUpgradeClass;
    /**
     * The CompanionData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompanionData;
    /**
     * The FrequentTravelerAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FrequentTravelerAirline;
    /**
     * The FrequentTravelerNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FrequentTravelerNumber;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The SSRPreference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SSRPreference;
    /**
     * The SeatPreference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SeatPreference;
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The UpgradeType
     * @var string
     */
    public $UpgradeType;
    /**
     * Constructor method for FqtvUpgradeRequest
     * @uses FqtvUpgradeRequest::setStatusCode()
     * @uses FqtvUpgradeRequest::setOriginalRequestTimestamp()
     * @uses FqtvUpgradeRequest::setLocalDepartureDate()
     * @uses FqtvUpgradeRequest::setTierLevel()
     * @uses FqtvUpgradeRequest::setRequestedUpgradeClass()
     * @uses FqtvUpgradeRequest::setCompanionData()
     * @uses FqtvUpgradeRequest::setFrequentTravelerAirline()
     * @uses FqtvUpgradeRequest::setFrequentTravelerNumber()
     * @uses FqtvUpgradeRequest::setFreeText()
     * @uses FqtvUpgradeRequest::setSSRPreference()
     * @uses FqtvUpgradeRequest::setSeatPreference()
     * @uses FqtvUpgradeRequest::setPassengerName()
     * @uses FqtvUpgradeRequest::setUpgradeType()
     * @param string $statusCode
     * @param string $originalRequestTimestamp
     * @param string $localDepartureDate
     * @param int $tierLevel
     * @param string $requestedUpgradeClass
     * @param string $companionData
     * @param string $frequentTravelerAirline
     * @param string $frequentTravelerNumber
     * @param string $freeText
     * @param string $sSRPreference
     * @param string $seatPreference
     * @param string $passengerName
     * @param string $upgradeType
     */
    public function __construct($statusCode = null, $originalRequestTimestamp = null, $localDepartureDate = null, $tierLevel = null, $requestedUpgradeClass = null, $companionData = null, $frequentTravelerAirline = null, $frequentTravelerNumber = null, $freeText = null, $sSRPreference = null, $seatPreference = null, $passengerName = null, $upgradeType = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setOriginalRequestTimestamp($originalRequestTimestamp)
            ->setLocalDepartureDate($localDepartureDate)
            ->setTierLevel($tierLevel)
            ->setRequestedUpgradeClass($requestedUpgradeClass)
            ->setCompanionData($companionData)
            ->setFrequentTravelerAirline($frequentTravelerAirline)
            ->setFrequentTravelerNumber($frequentTravelerNumber)
            ->setFreeText($freeText)
            ->setSSRPreference($sSRPreference)
            ->setSeatPreference($seatPreference)
            ->setPassengerName($passengerName)
            ->setUpgradeType($upgradeType);
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
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
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
     * Get OriginalRequestTimestamp value
     * @return string|null
     */
    public function getOriginalRequestTimestamp()
    {
        return $this->OriginalRequestTimestamp;
    }
    /**
     * Set OriginalRequestTimestamp value
     * @param string $originalRequestTimestamp
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setOriginalRequestTimestamp($originalRequestTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($originalRequestTimestamp) && !is_string($originalRequestTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalRequestTimestamp)), __LINE__);
        }
        $this->OriginalRequestTimestamp = $originalRequestTimestamp;
        return $this;
    }
    /**
     * Get LocalDepartureDate value
     * @return string|null
     */
    public function getLocalDepartureDate()
    {
        return $this->LocalDepartureDate;
    }
    /**
     * Set LocalDepartureDate value
     * @param string $localDepartureDate
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setLocalDepartureDate($localDepartureDate = null)
    {
        // validation for constraint: string
        if (!is_null($localDepartureDate) && !is_string($localDepartureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localDepartureDate)), __LINE__);
        }
        $this->LocalDepartureDate = $localDepartureDate;
        return $this;
    }
    /**
     * Get TierLevel value
     * @return int|null
     */
    public function getTierLevel()
    {
        return $this->TierLevel;
    }
    /**
     * Set TierLevel value
     * @param int $tierLevel
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setTierLevel($tierLevel = null)
    {
        // validation for constraint: int
        if (!is_null($tierLevel) && !is_numeric($tierLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tierLevel)), __LINE__);
        }
        $this->TierLevel = $tierLevel;
        return $this;
    }
    /**
     * Get RequestedUpgradeClass value
     * @return string|null
     */
    public function getRequestedUpgradeClass()
    {
        return $this->RequestedUpgradeClass;
    }
    /**
     * Set RequestedUpgradeClass value
     * @param string $requestedUpgradeClass
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setRequestedUpgradeClass($requestedUpgradeClass = null)
    {
        // validation for constraint: string
        if (!is_null($requestedUpgradeClass) && !is_string($requestedUpgradeClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedUpgradeClass)), __LINE__);
        }
        $this->RequestedUpgradeClass = $requestedUpgradeClass;
        return $this;
    }
    /**
     * Get CompanionData value
     * @return string|null
     */
    public function getCompanionData()
    {
        return $this->CompanionData;
    }
    /**
     * Set CompanionData value
     * @param string $companionData
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setCompanionData($companionData = null)
    {
        // validation for constraint: string
        if (!is_null($companionData) && !is_string($companionData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companionData)), __LINE__);
        }
        $this->CompanionData = $companionData;
        return $this;
    }
    /**
     * Get FrequentTravelerAirline value
     * @return string|null
     */
    public function getFrequentTravelerAirline()
    {
        return $this->FrequentTravelerAirline;
    }
    /**
     * Set FrequentTravelerAirline value
     * @param string $frequentTravelerAirline
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setFrequentTravelerAirline($frequentTravelerAirline = null)
    {
        // validation for constraint: string
        if (!is_null($frequentTravelerAirline) && !is_string($frequentTravelerAirline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentTravelerAirline)), __LINE__);
        }
        $this->FrequentTravelerAirline = $frequentTravelerAirline;
        return $this;
    }
    /**
     * Get FrequentTravelerNumber value
     * @return string|null
     */
    public function getFrequentTravelerNumber()
    {
        return $this->FrequentTravelerNumber;
    }
    /**
     * Set FrequentTravelerNumber value
     * @param string $frequentTravelerNumber
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setFrequentTravelerNumber($frequentTravelerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($frequentTravelerNumber) && !is_string($frequentTravelerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentTravelerNumber)), __LINE__);
        }
        $this->FrequentTravelerNumber = $frequentTravelerNumber;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get SSRPreference value
     * @return string|null
     */
    public function getSSRPreference()
    {
        return $this->SSRPreference;
    }
    /**
     * Set SSRPreference value
     * @param string $sSRPreference
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setSSRPreference($sSRPreference = null)
    {
        // validation for constraint: string
        if (!is_null($sSRPreference) && !is_string($sSRPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSRPreference)), __LINE__);
        }
        $this->SSRPreference = $sSRPreference;
        return $this;
    }
    /**
     * Get SeatPreference value
     * @return string|null
     */
    public function getSeatPreference()
    {
        return $this->SeatPreference;
    }
    /**
     * Set SeatPreference value
     * @param string $seatPreference
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setSeatPreference($seatPreference = null)
    {
        // validation for constraint: string
        if (!is_null($seatPreference) && !is_string($seatPreference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatPreference)), __LINE__);
        }
        $this->SeatPreference = $seatPreference;
        return $this;
    }
    /**
     * Get PassengerName value
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->PassengerName;
    }
    /**
     * Set PassengerName value
     * @param string $passengerName
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setPassengerName($passengerName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerName)), __LINE__);
        }
        $this->PassengerName = $passengerName;
        return $this;
    }
    /**
     * Get UpgradeType value
     * @return string|null
     */
    public function getUpgradeType()
    {
        return $this->UpgradeType;
    }
    /**
     * Set UpgradeType value
     * @param string $upgradeType
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
     */
    public function setUpgradeType($upgradeType = null)
    {
        // validation for constraint: string
        if (!is_null($upgradeType) && !is_string($upgradeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($upgradeType)), __LINE__);
        }
        $this->UpgradeType = $upgradeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest
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
