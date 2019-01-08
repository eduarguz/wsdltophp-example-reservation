<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTravelerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about the person traveling. Gender - the gender of the customer, if needed. BirthDate - Date of Birth. Currency - the preferred currency in which monetary amounts should be returned.
 * @subpackage Structs
 */
class AirTravelerType extends AbstractStructBase
{
    /**
     * The passengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: A three-letter code representing passenger type (e.g. .ADT. for adult, .CNN. for child) | Used for Alphabetic Strings, length exactly 3
     * - use: required
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $passengerTypeCode;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - documentation: Specify a customer loyalty program.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CustLoyaltyType[]
     */
    public $CustLoyalty;
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Define information on the number of passengers of a specific type.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public $PassengerTypeQuantity;
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     * @var \Sabre\UpdateReservation\StructType\TravelerRefNumberType
     */
    public $TravelerRefNumber;
    /**
     * The FlightSegmentRPHs
     * Meta informations extracted from the WSDL
     * - documentation: Reference pointers to flight segments
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType
     */
    public $FlightSegmentRPHs;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The preferred currency in which monetary amounts should be returned. | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $currencyCode;
    /**
     * The accompaniedByInfant
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if an infant accompanying a traveler is with or without a seat.
     * @var bool
     */
    public $accompaniedByInfant;
    /**
     * Constructor method for AirTravelerType
     * @uses AirTravelerType::setPassengerTypeCode()
     * @uses AirTravelerType::setCustLoyalty()
     * @uses AirTravelerType::setPassengerTypeQuantity()
     * @uses AirTravelerType::setTravelerRefNumber()
     * @uses AirTravelerType::setFlightSegmentRPHs()
     * @uses AirTravelerType::setCurrencyCode()
     * @uses AirTravelerType::setAccompaniedByInfant()
     * @param string $passengerTypeCode
     * @param \Sabre\UpdateReservation\StructType\CustLoyaltyType[] $custLoyalty
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType $passengerTypeQuantity
     * @param \Sabre\UpdateReservation\StructType\TravelerRefNumberType $travelerRefNumber
     * @param \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType $flightSegmentRPHs
     * @param string $currencyCode
     * @param bool $accompaniedByInfant
     */
    public function __construct($passengerTypeCode = null, array $custLoyalty = array(), \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType $passengerTypeQuantity = null, \Sabre\UpdateReservation\StructType\TravelerRefNumberType $travelerRefNumber = null, \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType $flightSegmentRPHs = null, $currencyCode = null, $accompaniedByInfant = null)
    {
        $this
            ->setPassengerTypeCode($passengerTypeCode)
            ->setCustLoyalty($custLoyalty)
            ->setPassengerTypeQuantity($passengerTypeQuantity)
            ->setTravelerRefNumber($travelerRefNumber)
            ->setFlightSegmentRPHs($flightSegmentRPHs)
            ->setCurrencyCode($currencyCode)
            ->setAccompaniedByInfant($accompaniedByInfant);
    }
    /**
     * Get passengerTypeCode value
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }
    /**
     * Set passengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($passengerTypeCode) && !preg_match('/[a-zA-Z]{3}/', $passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($passengerTypeCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->passengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType[]|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CustLoyaltyType[] $custLoyalty
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $airTravelerTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!$airTravelerTypeCustLoyaltyItem instanceof \Sabre\UpdateReservation\StructType\CustLoyaltyType) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \Sabre\UpdateReservation\StructType\CustLoyaltyType, "%s" given', is_object($airTravelerTypeCustLoyaltyItem) ? get_class($airTravelerTypeCustLoyaltyItem) : gettype($airTravelerTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CustLoyaltyType $item
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function addToCustLoyalty(\Sabre\UpdateReservation\StructType\CustLoyaltyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CustLoyaltyType) {
            throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \Sabre\UpdateReservation\StructType\CustLoyaltyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustLoyalty[] = $item;
        return $this;
    }
    /**
     * Get PassengerTypeQuantity value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType $passengerTypeQuantity
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setPassengerTypeQuantity(\Sabre\UpdateReservation\StructType\PassengerTypeQuantityType $passengerTypeQuantity = null)
    {
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Get TravelerRefNumber value
     * @return \Sabre\UpdateReservation\StructType\TravelerRefNumberType|null
     */
    public function getTravelerRefNumber()
    {
        return $this->TravelerRefNumber;
    }
    /**
     * Set TravelerRefNumber value
     * @param \Sabre\UpdateReservation\StructType\TravelerRefNumberType $travelerRefNumber
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setTravelerRefNumber(\Sabre\UpdateReservation\StructType\TravelerRefNumberType $travelerRefNumber = null)
    {
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Get FlightSegmentRPHs value
     * @return \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType|null
     */
    public function getFlightSegmentRPHs()
    {
        return $this->FlightSegmentRPHs;
    }
    /**
     * Set FlightSegmentRPHs value
     * @param \Sabre\UpdateReservation\StructType\FlightSegmentRPHsType $flightSegmentRPHs
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setFlightSegmentRPHs(\Sabre\UpdateReservation\StructType\FlightSegmentRPHsType $flightSegmentRPHs = null)
    {
        $this->FlightSegmentRPHs = $flightSegmentRPHs;
        return $this;
    }
    /**
     * Get currencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currencyCode) && !preg_match('/[a-zA-Z]{3}/', $currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($currencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get accompaniedByInfant value
     * @return bool|null
     */
    public function getAccompaniedByInfant()
    {
        return $this->accompaniedByInfant;
    }
    /**
     * Set accompaniedByInfant value
     * @param bool $accompaniedByInfant
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public function setAccompaniedByInfant($accompaniedByInfant = null)
    {
        // validation for constraint: boolean
        if (!is_null($accompaniedByInfant) && !is_bool($accompaniedByInfant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($accompaniedByInfant)), __LINE__);
        }
        $this->accompaniedByInfant = $accompaniedByInfant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType
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
