<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatRequest.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: name associated. formats (AFAX and GFAX for all) * request seat assignment 4(seat code)(seg #)-(name #) 4NSST1-2.1 * request seats for all segments for multiple name fields 4(seat code)(seg #)-(name #),(name #) 4NSST1-1.1,2.0 *
 * request seats for specified segment for specified name number and add free text 4(seat code)(seg #)/(free text)-(name number) 4SMST4/WDW-2.1 * request seats for specified segment for multiple specified name numbers and add free text 4(seat code)(seg
 * #)/(free text)-(name #),(name#) 4NSST2/AISLE-1.1,2.0
 * @subpackage Structs
 */
class SeatRequest_PNRB extends AbstractStructBase
{
    /**
     * The SeatCode
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of SSR/OSI e.g. RQST, NSST.
     * - minOccurs: 0
     * @var string
     */
    public $SeatCode;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number of the associated flight. Ex."0002"
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier OSI/SSR is being sent to. Ex."EY"
     * - minOccurs: 0
     * @var string
     */
    public $VendorCode;
    /**
     * The FlightDate
     * Meta informations extracted from the WSDL
     * - documentation: Date that service starts for the flight. Ex."2013-07-29"
     * - minOccurs: 0
     * @var string
     */
    public $FlightDate;
    /**
     * The BoardCity
     * Meta informations extracted from the WSDL
     * - documentation: Start city for the flight. Ex."FRA"
     * - minOccurs: 0
     * @var string
     */
    public $BoardCity;
    /**
     * The OffCity
     * Meta informations extracted from the WSDL
     * - documentation: End/Arrival city of the flight. Ex."AUH"
     * - minOccurs: 0
     * @var string
     */
    public $OffCity;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Seat Comment. Ex."27HN27KN"
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the current status of the SSR message. Ex."NN"
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - documentation: Class of service
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers for whom the Special Service Request is being requested. Ex."1". | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: A = AFAX G = GFAX
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for SeatRequest.PNRB
     * @uses SeatRequest_PNRB::setSeatCode()
     * @uses SeatRequest_PNRB::setFlightNumber()
     * @uses SeatRequest_PNRB::setVendorCode()
     * @uses SeatRequest_PNRB::setFlightDate()
     * @uses SeatRequest_PNRB::setBoardCity()
     * @uses SeatRequest_PNRB::setOffCity()
     * @uses SeatRequest_PNRB::setComment()
     * @uses SeatRequest_PNRB::setActionCode()
     * @uses SeatRequest_PNRB::setClassOfService()
     * @uses SeatRequest_PNRB::setNumberInParty()
     * @uses SeatRequest_PNRB::setId()
     * @uses SeatRequest_PNRB::setType()
     * @uses SeatRequest_PNRB::setOp()
     * @param string $seatCode
     * @param string $flightNumber
     * @param string $vendorCode
     * @param string $flightDate
     * @param string $boardCity
     * @param string $offCity
     * @param string $comment
     * @param string $actionCode
     * @param string $classOfService
     * @param int $numberInParty
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($seatCode = null, $flightNumber = null, $vendorCode = null, $flightDate = null, $boardCity = null, $offCity = null, $comment = null, $actionCode = null, $classOfService = null, $numberInParty = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setSeatCode($seatCode)
            ->setFlightNumber($flightNumber)
            ->setVendorCode($vendorCode)
            ->setFlightDate($flightDate)
            ->setBoardCity($boardCity)
            ->setOffCity($offCity)
            ->setComment($comment)
            ->setActionCode($actionCode)
            ->setClassOfService($classOfService)
            ->setNumberInParty($numberInParty)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get SeatCode value
     * @return string|null
     */
    public function getSeatCode()
    {
        return $this->SeatCode;
    }
    /**
     * Set SeatCode value
     * @param string $seatCode
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
     */
    public function setSeatCode($seatCode = null)
    {
        // validation for constraint: string
        if (!is_null($seatCode) && !is_string($seatCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatCode)), __LINE__);
        }
        $this->SeatCode = $seatCode;
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * Get FlightDate value
     * @return string|null
     */
    public function getFlightDate()
    {
        return $this->FlightDate;
    }
    /**
     * Set FlightDate value
     * @param string $flightDate
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
     */
    public function setFlightDate($flightDate = null)
    {
        // validation for constraint: string
        if (!is_null($flightDate) && !is_string($flightDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightDate)), __LINE__);
        }
        $this->FlightDate = $flightDate;
        return $this;
    }
    /**
     * Get BoardCity value
     * @return string|null
     */
    public function getBoardCity()
    {
        return $this->BoardCity;
    }
    /**
     * Set BoardCity value
     * @param string $boardCity
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
     */
    public function setBoardCity($boardCity = null)
    {
        // validation for constraint: string
        if (!is_null($boardCity) && !is_string($boardCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardCity)), __LINE__);
        }
        $this->BoardCity = $boardCity;
        return $this;
    }
    /**
     * Get OffCity value
     * @return string|null
     */
    public function getOffCity()
    {
        return $this->OffCity;
    }
    /**
     * Set OffCity value
     * @param string $offCity
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
     */
    public function setOffCity($offCity = null)
    {
        // validation for constraint: string
        if (!is_null($offCity) && !is_string($offCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offCity)), __LINE__);
        }
        $this->OffCity = $offCity;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SeatRequest_PNRB
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
