<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingRequestType StructType
 * @subpackage Structs
 */
class TicketingRequestType extends AbstractStructBase
{
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketType;
    /**
     * The ValidatingCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ValidatingCarrier;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
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
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
    /**
     * The DateOfTravel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateOfTravel;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * The CouponNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CouponNumber;
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * Constructor method for TicketingRequestType
     * @uses TicketingRequestType::setTicketType()
     * @uses TicketingRequestType::setValidatingCarrier()
     * @uses TicketingRequestType::setActionCode()
     * @uses TicketingRequestType::setNumberInParty()
     * @uses TicketingRequestType::setBoardPoint()
     * @uses TicketingRequestType::setOffPoint()
     * @uses TicketingRequestType::setClassOfService()
     * @uses TicketingRequestType::setDateOfTravel()
     * @uses TicketingRequestType::setTicketNumber()
     * @uses TicketingRequestType::setCouponNumber()
     * @uses TicketingRequestType::setPassengerName()
     * @param string $ticketType
     * @param string $validatingCarrier
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $boardPoint
     * @param string $offPoint
     * @param string $classOfService
     * @param string $dateOfTravel
     * @param string $ticketNumber
     * @param string $couponNumber
     * @param string $passengerName
     */
    public function __construct($ticketType = null, $validatingCarrier = null, $actionCode = null, $numberInParty = null, $boardPoint = null, $offPoint = null, $classOfService = null, $dateOfTravel = null, $ticketNumber = null, $couponNumber = null, $passengerName = null)
    {
        $this
            ->setTicketType($ticketType)
            ->setValidatingCarrier($validatingCarrier)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setClassOfService($classOfService)
            ->setDateOfTravel($dateOfTravel)
            ->setTicketNumber($ticketNumber)
            ->setCouponNumber($couponNumber)
            ->setPassengerName($passengerName);
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType()
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @param string $ticketType
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setTicketType($ticketType = null)
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketType)), __LINE__);
        }
        $this->TicketType = $ticketType;
        return $this;
    }
    /**
     * Get ValidatingCarrier value
     * @return string|null
     */
    public function getValidatingCarrier()
    {
        return $this->ValidatingCarrier;
    }
    /**
     * Set ValidatingCarrier value
     * @param string $validatingCarrier
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setValidatingCarrier($validatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($validatingCarrier) && !is_string($validatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingCarrier)), __LINE__);
        }
        $this->ValidatingCarrier = $validatingCarrier;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
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
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
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
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
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
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
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
     * Get DateOfTravel value
     * @return string|null
     */
    public function getDateOfTravel()
    {
        return $this->DateOfTravel;
    }
    /**
     * Set DateOfTravel value
     * @param string $dateOfTravel
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setDateOfTravel($dateOfTravel = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfTravel) && !is_string($dateOfTravel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfTravel)), __LINE__);
        }
        $this->DateOfTravel = $dateOfTravel;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get CouponNumber value
     * @return string|null
     */
    public function getCouponNumber()
    {
        return $this->CouponNumber;
    }
    /**
     * Set CouponNumber value
     * @param string $couponNumber
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
     */
    public function setCouponNumber($couponNumber = null)
    {
        // validation for constraint: string
        if (!is_null($couponNumber) && !is_string($couponNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($couponNumber)), __LINE__);
        }
        $this->CouponNumber = $couponNumber;
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
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
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
     * @return \Sabre\UpdateReservation\StructType\TicketingRequestType
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
