<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WheelchairRequest.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: can be name associated. formats (both AFAX and GFAX) * request wheelchair, all segments 4(Wheelchair code) 4WCHR * request wheelchair, specific name, all segments 4(Wheelchair code)-(name number) 4WCHR-1.2 * request wheelchair,
 * specific segment and name 4(Wheelchair code)(segment #)-(name num) 4WCHR3-1.2 * request wheelchair, specific city 4(Wheelchair code)(seg #)/(city code) 4WCHR3/MIA * request wheelchair, specific city and name 4(Wheelchair code)(segment #)/(city
 * code)-(name #) 4WCHR3/MIA-1.2
 * @subpackage Structs
 */
class WheelchairRequest_PNRB extends AbstractStructBase
{
    /**
     * The WheelchairCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WheelchairCode;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - documentation: Free text
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityCode;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number of the associated flight. Ex."25643" | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK
     * means Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different
     * than 900). | Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the
     * cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than 900).
     * - minOccurs: 0
     * - union: _flightNumberPattern | _flightNumberLiterals
     * @var string
     */
    public $FlightNumber;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier OSI/SSR is being sent to. Ex."OS"
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
     * - documentation: Start city for the flight. Ex." WAW"
     * - minOccurs: 0
     * @var string
     */
    public $BoardCity;
    /**
     * The OffCity
     * Meta informations extracted from the WSDL
     * - documentation: End/Arrival city of the flight. Ex."KUL"
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
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers for whom the Special Service Request is being requested. Ex. "2" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - documentation: Class of service
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
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
     * Constructor method for WheelchairRequest.PNRB
     * @uses WheelchairRequest_PNRB::setWheelchairCode()
     * @uses WheelchairRequest_PNRB::setFreeText()
     * @uses WheelchairRequest_PNRB::setCityCode()
     * @uses WheelchairRequest_PNRB::setFlightNumber()
     * @uses WheelchairRequest_PNRB::setVendorCode()
     * @uses WheelchairRequest_PNRB::setFlightDate()
     * @uses WheelchairRequest_PNRB::setBoardCity()
     * @uses WheelchairRequest_PNRB::setOffCity()
     * @uses WheelchairRequest_PNRB::setActionCode()
     * @uses WheelchairRequest_PNRB::setNumberInParty()
     * @uses WheelchairRequest_PNRB::setClassOfService()
     * @uses WheelchairRequest_PNRB::setId()
     * @uses WheelchairRequest_PNRB::setType()
     * @uses WheelchairRequest_PNRB::setOp()
     * @param string $wheelchairCode
     * @param string $freeText
     * @param string $cityCode
     * @param string $flightNumber
     * @param string $vendorCode
     * @param string $flightDate
     * @param string $boardCity
     * @param string $offCity
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $classOfService
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($wheelchairCode = null, $freeText = null, $cityCode = null, $flightNumber = null, $vendorCode = null, $flightDate = null, $boardCity = null, $offCity = null, $actionCode = null, $numberInParty = null, $classOfService = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setWheelchairCode($wheelchairCode)
            ->setFreeText($freeText)
            ->setCityCode($cityCode)
            ->setFlightNumber($flightNumber)
            ->setVendorCode($vendorCode)
            ->setFlightDate($flightDate)
            ->setBoardCity($boardCity)
            ->setOffCity($offCity)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setClassOfService($classOfService)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get WheelchairCode value
     * @return string|null
     */
    public function getWheelchairCode()
    {
        return $this->WheelchairCode;
    }
    /**
     * Set WheelchairCode value
     * @uses \Sabre\UpdateReservation\EnumType\WheelchairCode_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\WheelchairCode_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $wheelchairCode
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
     */
    public function setWheelchairCode($wheelchairCode = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\WheelchairCode_PNRB::valueIsValid($wheelchairCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $wheelchairCode, implode(', ', \Sabre\UpdateReservation\EnumType\WheelchairCode_PNRB::getValidValues())), __LINE__);
        }
        $this->WheelchairCode = $wheelchairCode;
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($flightNumber) && !preg_match('/[0-9]{1,4}[A-Z]?/', $flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($flightNumber, true)), __LINE__);
        }
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\WheelchairRequest_PNRB
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
