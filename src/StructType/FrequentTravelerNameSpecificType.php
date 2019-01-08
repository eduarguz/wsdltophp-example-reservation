<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentTravelerNameSpecificType StructType
 * @subpackage Structs
 */
class FrequentTravelerNameSpecificType extends FlightBasicData
{
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
     * Constructor method for FrequentTravelerNameSpecificType
     * @uses FrequentTravelerNameSpecificType::setFrequentTravelerAirline()
     * @uses FrequentTravelerNameSpecificType::setFrequentTravelerNumber()
     * @uses FrequentTravelerNameSpecificType::setFreeText()
     * @uses FrequentTravelerNameSpecificType::setSSRPreference()
     * @uses FrequentTravelerNameSpecificType::setSeatPreference()
     * @uses FrequentTravelerNameSpecificType::setPassengerName()
     * @param string $frequentTravelerAirline
     * @param string $frequentTravelerNumber
     * @param string $freeText
     * @param string $sSRPreference
     * @param string $seatPreference
     * @param string $passengerName
     */
    public function __construct($frequentTravelerAirline = null, $frequentTravelerNumber = null, $freeText = null, $sSRPreference = null, $seatPreference = null, $passengerName = null)
    {
        $this
            ->setFrequentTravelerAirline($frequentTravelerAirline)
            ->setFrequentTravelerNumber($frequentTravelerNumber)
            ->setFreeText($freeText)
            ->setSSRPreference($sSRPreference)
            ->setSeatPreference($seatPreference)
            ->setPassengerName($passengerName);
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
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerNameSpecificType
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
