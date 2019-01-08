<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerProfileType StructType
 * @subpackage Structs
 */
class PassengerProfileType extends AbstractStructBase
{
    /**
     * The ChildUnaccompaniedMinor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ChildUnaccompaniedMinor;
    /**
     * The TravelingWithChild
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TravelingWithChild;
    /**
     * The AirlineEmployee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AirlineEmployee;
    /**
     * The GroupBooking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $GroupBooking;
    /**
     * The PassengerArmed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PassengerArmed;
    /**
     * The Diplomat
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Diplomat;
    /**
     * The UnaccompaniedMinor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UnaccompaniedMinor;
    /**
     * The Infant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Infant;
    /**
     * The FreeTicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FreeTicket;
    /**
     * The NewProfileScore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NewProfileScore;
    /**
     * The RoundTrip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RoundTrip;
    /**
     * The FOPCreditCard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FOPCreditCard;
    /**
     * The FOPCash
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FOPCash;
    /**
     * The ProfileScore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProfileScore;
    /**
     * Constructor method for PassengerProfileType
     * @uses PassengerProfileType::setChildUnaccompaniedMinor()
     * @uses PassengerProfileType::setTravelingWithChild()
     * @uses PassengerProfileType::setAirlineEmployee()
     * @uses PassengerProfileType::setGroupBooking()
     * @uses PassengerProfileType::setPassengerArmed()
     * @uses PassengerProfileType::setDiplomat()
     * @uses PassengerProfileType::setUnaccompaniedMinor()
     * @uses PassengerProfileType::setInfant()
     * @uses PassengerProfileType::setFreeTicket()
     * @uses PassengerProfileType::setNewProfileScore()
     * @uses PassengerProfileType::setRoundTrip()
     * @uses PassengerProfileType::setFOPCreditCard()
     * @uses PassengerProfileType::setFOPCash()
     * @uses PassengerProfileType::setProfileScore()
     * @param bool $childUnaccompaniedMinor
     * @param bool $travelingWithChild
     * @param bool $airlineEmployee
     * @param bool $groupBooking
     * @param bool $passengerArmed
     * @param bool $diplomat
     * @param bool $unaccompaniedMinor
     * @param bool $infant
     * @param bool $freeTicket
     * @param bool $newProfileScore
     * @param bool $roundTrip
     * @param bool $fOPCreditCard
     * @param bool $fOPCash
     * @param int $profileScore
     */
    public function __construct($childUnaccompaniedMinor = null, $travelingWithChild = null, $airlineEmployee = null, $groupBooking = null, $passengerArmed = null, $diplomat = null, $unaccompaniedMinor = null, $infant = null, $freeTicket = null, $newProfileScore = null, $roundTrip = null, $fOPCreditCard = null, $fOPCash = null, $profileScore = null)
    {
        $this
            ->setChildUnaccompaniedMinor($childUnaccompaniedMinor)
            ->setTravelingWithChild($travelingWithChild)
            ->setAirlineEmployee($airlineEmployee)
            ->setGroupBooking($groupBooking)
            ->setPassengerArmed($passengerArmed)
            ->setDiplomat($diplomat)
            ->setUnaccompaniedMinor($unaccompaniedMinor)
            ->setInfant($infant)
            ->setFreeTicket($freeTicket)
            ->setNewProfileScore($newProfileScore)
            ->setRoundTrip($roundTrip)
            ->setFOPCreditCard($fOPCreditCard)
            ->setFOPCash($fOPCash)
            ->setProfileScore($profileScore);
    }
    /**
     * Get ChildUnaccompaniedMinor value
     * @return bool|null
     */
    public function getChildUnaccompaniedMinor()
    {
        return $this->ChildUnaccompaniedMinor;
    }
    /**
     * Set ChildUnaccompaniedMinor value
     * @param bool $childUnaccompaniedMinor
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setChildUnaccompaniedMinor($childUnaccompaniedMinor = null)
    {
        // validation for constraint: boolean
        if (!is_null($childUnaccompaniedMinor) && !is_bool($childUnaccompaniedMinor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($childUnaccompaniedMinor)), __LINE__);
        }
        $this->ChildUnaccompaniedMinor = $childUnaccompaniedMinor;
        return $this;
    }
    /**
     * Get TravelingWithChild value
     * @return bool|null
     */
    public function getTravelingWithChild()
    {
        return $this->TravelingWithChild;
    }
    /**
     * Set TravelingWithChild value
     * @param bool $travelingWithChild
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setTravelingWithChild($travelingWithChild = null)
    {
        // validation for constraint: boolean
        if (!is_null($travelingWithChild) && !is_bool($travelingWithChild)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($travelingWithChild)), __LINE__);
        }
        $this->TravelingWithChild = $travelingWithChild;
        return $this;
    }
    /**
     * Get AirlineEmployee value
     * @return bool|null
     */
    public function getAirlineEmployee()
    {
        return $this->AirlineEmployee;
    }
    /**
     * Set AirlineEmployee value
     * @param bool $airlineEmployee
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setAirlineEmployee($airlineEmployee = null)
    {
        // validation for constraint: boolean
        if (!is_null($airlineEmployee) && !is_bool($airlineEmployee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($airlineEmployee)), __LINE__);
        }
        $this->AirlineEmployee = $airlineEmployee;
        return $this;
    }
    /**
     * Get GroupBooking value
     * @return bool|null
     */
    public function getGroupBooking()
    {
        return $this->GroupBooking;
    }
    /**
     * Set GroupBooking value
     * @param bool $groupBooking
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setGroupBooking($groupBooking = null)
    {
        // validation for constraint: boolean
        if (!is_null($groupBooking) && !is_bool($groupBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($groupBooking)), __LINE__);
        }
        $this->GroupBooking = $groupBooking;
        return $this;
    }
    /**
     * Get PassengerArmed value
     * @return bool|null
     */
    public function getPassengerArmed()
    {
        return $this->PassengerArmed;
    }
    /**
     * Set PassengerArmed value
     * @param bool $passengerArmed
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setPassengerArmed($passengerArmed = null)
    {
        // validation for constraint: boolean
        if (!is_null($passengerArmed) && !is_bool($passengerArmed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passengerArmed)), __LINE__);
        }
        $this->PassengerArmed = $passengerArmed;
        return $this;
    }
    /**
     * Get Diplomat value
     * @return bool|null
     */
    public function getDiplomat()
    {
        return $this->Diplomat;
    }
    /**
     * Set Diplomat value
     * @param bool $diplomat
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setDiplomat($diplomat = null)
    {
        // validation for constraint: boolean
        if (!is_null($diplomat) && !is_bool($diplomat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($diplomat)), __LINE__);
        }
        $this->Diplomat = $diplomat;
        return $this;
    }
    /**
     * Get UnaccompaniedMinor value
     * @return bool|null
     */
    public function getUnaccompaniedMinor()
    {
        return $this->UnaccompaniedMinor;
    }
    /**
     * Set UnaccompaniedMinor value
     * @param bool $unaccompaniedMinor
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setUnaccompaniedMinor($unaccompaniedMinor = null)
    {
        // validation for constraint: boolean
        if (!is_null($unaccompaniedMinor) && !is_bool($unaccompaniedMinor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($unaccompaniedMinor)), __LINE__);
        }
        $this->UnaccompaniedMinor = $unaccompaniedMinor;
        return $this;
    }
    /**
     * Get Infant value
     * @return bool|null
     */
    public function getInfant()
    {
        return $this->Infant;
    }
    /**
     * Set Infant value
     * @param bool $infant
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setInfant($infant = null)
    {
        // validation for constraint: boolean
        if (!is_null($infant) && !is_bool($infant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($infant)), __LINE__);
        }
        $this->Infant = $infant;
        return $this;
    }
    /**
     * Get FreeTicket value
     * @return bool|null
     */
    public function getFreeTicket()
    {
        return $this->FreeTicket;
    }
    /**
     * Set FreeTicket value
     * @param bool $freeTicket
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setFreeTicket($freeTicket = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeTicket) && !is_bool($freeTicket)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freeTicket)), __LINE__);
        }
        $this->FreeTicket = $freeTicket;
        return $this;
    }
    /**
     * Get NewProfileScore value
     * @return bool|null
     */
    public function getNewProfileScore()
    {
        return $this->NewProfileScore;
    }
    /**
     * Set NewProfileScore value
     * @param bool $newProfileScore
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setNewProfileScore($newProfileScore = null)
    {
        // validation for constraint: boolean
        if (!is_null($newProfileScore) && !is_bool($newProfileScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($newProfileScore)), __LINE__);
        }
        $this->NewProfileScore = $newProfileScore;
        return $this;
    }
    /**
     * Get RoundTrip value
     * @return bool|null
     */
    public function getRoundTrip()
    {
        return $this->RoundTrip;
    }
    /**
     * Set RoundTrip value
     * @param bool $roundTrip
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setRoundTrip($roundTrip = null)
    {
        // validation for constraint: boolean
        if (!is_null($roundTrip) && !is_bool($roundTrip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($roundTrip)), __LINE__);
        }
        $this->RoundTrip = $roundTrip;
        return $this;
    }
    /**
     * Get FOPCreditCard value
     * @return bool|null
     */
    public function getFOPCreditCard()
    {
        return $this->FOPCreditCard;
    }
    /**
     * Set FOPCreditCard value
     * @param bool $fOPCreditCard
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setFOPCreditCard($fOPCreditCard = null)
    {
        // validation for constraint: boolean
        if (!is_null($fOPCreditCard) && !is_bool($fOPCreditCard)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fOPCreditCard)), __LINE__);
        }
        $this->FOPCreditCard = $fOPCreditCard;
        return $this;
    }
    /**
     * Get FOPCash value
     * @return bool|null
     */
    public function getFOPCash()
    {
        return $this->FOPCash;
    }
    /**
     * Set FOPCash value
     * @param bool $fOPCash
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setFOPCash($fOPCash = null)
    {
        // validation for constraint: boolean
        if (!is_null($fOPCash) && !is_bool($fOPCash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fOPCash)), __LINE__);
        }
        $this->FOPCash = $fOPCash;
        return $this;
    }
    /**
     * Get ProfileScore value
     * @return int|null
     */
    public function getProfileScore()
    {
        return $this->ProfileScore;
    }
    /**
     * Set ProfileScore value
     * @param int $profileScore
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public function setProfileScore($profileScore = null)
    {
        // validation for constraint: int
        if (!is_null($profileScore) && !is_numeric($profileScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($profileScore)), __LINE__);
        }
        $this->ProfileScore = $profileScore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType
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
