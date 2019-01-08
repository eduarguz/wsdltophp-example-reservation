<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumber.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: each phone field can have up to 62 chars The formats for phone numbers are: * add phone contact 9(area code)(phone number)-(code) 9212-123-1234-A * insert phone field as a specific line 9(line # to insert at)/(area
 * code)-(prefix)-(number)-(phone location) * insert phone field and make it the first number in the field 90/(area code)-(prefix)-(number)-(phone location) 90/202-675-6543-A * add phone contact and include city code that is outside of your area 9/(city
 * code)(area code)(phone number)-(code) 9/BOS616-123-1234-A * change phone field to new number 9(line #)¤(area code)-(prefix)-(number)-(phone location) 92¤415-991-0220-A * change city code in phone field 9(line #)¤(new city code) 92¤LON * delete
 * specific line number in the phone field 9(line #)¤ 92¤ * delete a range of phone fields 9(first line # in range)-(last line # in range)¤ 92-3¤
 * @subpackage Structs
 */
class PhoneNumber_PNRB extends AbstractStructBase
{
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: A = Agency, H = Home, B = Business, C = Cell, M = Mobile, F = Fax, HTL = Hotel
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The TJRCityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TJRCityCode;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - documentation: City Code associated with the phone nunber. Ex."LON"
     * - minOccurs: 0
     * @var string
     */
    public $CityCode;
    /**
     * The Extension
     * Meta informations extracted from the WSDL
     * - documentation: max 5 chars
     * - minOccurs: 0
     * @var string
     */
    public $Extension;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * The elementId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $elementId;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for PhoneNumber.PNRB
     * @uses PhoneNumber_PNRB::setLocation()
     * @uses PhoneNumber_PNRB::setTJRCityCode()
     * @uses PhoneNumber_PNRB::setCityCode()
     * @uses PhoneNumber_PNRB::setExtension()
     * @uses PhoneNumber_PNRB::setNumber()
     * @uses PhoneNumber_PNRB::setId()
     * @uses PhoneNumber_PNRB::setOp()
     * @uses PhoneNumber_PNRB::setIndex()
     * @uses PhoneNumber_PNRB::setElementId()
     * @uses PhoneNumber_PNRB::setRPH()
     * @param string $location
     * @param string $tJRCityCode
     * @param string $cityCode
     * @param string $extension
     * @param string $number
     * @param string $id
     * @param string $op
     * @param int $index
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct($location = null, $tJRCityCode = null, $cityCode = null, $extension = null, $number = null, $id = null, $op = null, $index = null, $elementId = null, $rPH = null)
    {
        $this
            ->setLocation($location)
            ->setTJRCityCode($tJRCityCode)
            ->setCityCode($cityCode)
            ->setExtension($extension)
            ->setNumber($number)
            ->setId($id)
            ->setOp($op)
            ->setIndex($index)
            ->setElementId($elementId)
            ->setRPH($rPH);
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @uses \Sabre\UpdateReservation\EnumType\PhoneLocationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PhoneLocationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $location
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setLocation($location = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PhoneLocationType_PNRB::valueIsValid($location)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $location, implode(', ', \Sabre\UpdateReservation\EnumType\PhoneLocationType_PNRB::getValidValues())), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get TJRCityCode value
     * @return string|null
     */
    public function getTJRCityCode()
    {
        return $this->TJRCityCode;
    }
    /**
     * Set TJRCityCode value
     * @param string $tJRCityCode
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setTJRCityCode($tJRCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($tJRCityCode) && !is_string($tJRCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tJRCityCode)), __LINE__);
        }
        $this->TJRCityCode = $tJRCityCode;
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
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
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
     * Get Extension value
     * @return string|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @param string $extension
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setExtension($extension = null)
    {
        // validation for constraint: string
        if (!is_null($extension) && !is_string($extension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extension)), __LINE__);
        }
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
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
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
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
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Get elementId value
     * @return string|null
     */
    public function getElementId()
    {
        return $this->elementId;
    }
    /**
     * Set elementId value
     * @param string $elementId
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setElementId($elementId = null)
    {
        // validation for constraint: string
        if (!is_null($elementId) && !is_string($elementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elementId)), __LINE__);
        }
        $this->elementId = $elementId;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB
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
