<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnaccompaniedMinorMessage.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: name associated. format (both AFAX and GFAX) 4UMNR/(seg #)/UM (age in two digits)-(name #) 4UMNR1/UM 08-1.1
 * @subpackage Structs
 */
class UnaccompaniedMinorMessage_PNRB extends AbstractStructBase
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - documentation: age in two digits. add leading zero if necessary.
     * - minOccurs: 0
     * - maxInclusive: 99
     * - minInclusive: 0
     * @var int
     */
    public $Age;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number of the associated flight. Ex."122"
     * - minOccurs: 0
     * @var string
     */
    public $FlightNumber;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier OSI/SSR is being sent to. Ex. "VA"
     * - minOccurs: 0
     * @var string
     */
    public $VendorCode;
    /**
     * The FlightDate
     * Meta informations extracted from the WSDL
     * - documentation: Date that service starts for the flight. Ex. "2013-11-08"
     * - minOccurs: 0
     * @var string
     */
    public $FlightDate;
    /**
     * The BoardCity
     * Meta informations extracted from the WSDL
     * - documentation: Start city for the flight. Ex. "SYD"
     * - minOccurs: 0
     * @var string
     */
    public $BoardCity;
    /**
     * The OffCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OffCity;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the current status of the SSR message. Ex."NN"
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
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
     * Constructor method for UnaccompaniedMinorMessage.PNRB
     * @uses UnaccompaniedMinorMessage_PNRB::setAge()
     * @uses UnaccompaniedMinorMessage_PNRB::setFlightNumber()
     * @uses UnaccompaniedMinorMessage_PNRB::setVendorCode()
     * @uses UnaccompaniedMinorMessage_PNRB::setFlightDate()
     * @uses UnaccompaniedMinorMessage_PNRB::setBoardCity()
     * @uses UnaccompaniedMinorMessage_PNRB::setOffCity()
     * @uses UnaccompaniedMinorMessage_PNRB::setActionCode()
     * @uses UnaccompaniedMinorMessage_PNRB::setId()
     * @uses UnaccompaniedMinorMessage_PNRB::setType()
     * @uses UnaccompaniedMinorMessage_PNRB::setOp()
     * @param int $age
     * @param string $flightNumber
     * @param string $vendorCode
     * @param string $flightDate
     * @param string $boardCity
     * @param string $offCity
     * @param string $actionCode
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($age = null, $flightNumber = null, $vendorCode = null, $flightDate = null, $boardCity = null, $offCity = null, $actionCode = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setAge($age)
            ->setFlightNumber($flightNumber)
            ->setVendorCode($vendorCode)
            ->setFlightDate($flightDate)
            ->setBoardCity($boardCity)
            ->setOffCity($offCity)
            ->setActionCode($actionCode)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
     */
    public function setAge($age = null)
    {
        // validation for constraint: maxInclusive
        if ($age > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $age), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($age < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $age), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($age) && !is_numeric($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\UnaccompaniedMinorMessage_PNRB
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
