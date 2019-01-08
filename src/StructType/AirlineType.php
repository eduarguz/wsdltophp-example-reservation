<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirlineType StructType
 * @subpackage Structs
 */
class AirlineType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The flightNumber
     * @var string
     */
    public $flightNumber;
    /**
     * The flightDateTime
     * @var string
     */
    public $flightDateTime;
    /**
     * The flightType
     * @var string
     */
    public $flightType;
    /**
     * The privateAviation
     * @var bool
     */
    public $privateAviation;
    /**
     * Constructor method for AirlineType
     * @uses AirlineType::set_()
     * @uses AirlineType::setCode()
     * @uses AirlineType::setFlightNumber()
     * @uses AirlineType::setFlightDateTime()
     * @uses AirlineType::setFlightType()
     * @uses AirlineType::setPrivateAviation()
     * @param string $_
     * @param string $code
     * @param string $flightNumber
     * @param string $flightDateTime
     * @param string $flightType
     * @param bool $privateAviation
     */
    public function __construct($_ = null, $code = null, $flightNumber = null, $flightDateTime = null, $flightType = null, $privateAviation = null)
    {
        $this
            ->set_($_)
            ->setCode($code)
            ->setFlightNumber($flightNumber)
            ->setFlightDateTime($flightDateTime)
            ->setFlightType($flightType)
            ->setPrivateAviation($privateAviation);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\AirlineType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\AirlineType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get flightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }
    /**
     * Set flightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\AirlineType
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->flightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get flightDateTime value
     * @return string|null
     */
    public function getFlightDateTime()
    {
        return $this->flightDateTime;
    }
    /**
     * Set flightDateTime value
     * @param string $flightDateTime
     * @return \Sabre\UpdateReservation\StructType\AirlineType
     */
    public function setFlightDateTime($flightDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($flightDateTime) && !is_string($flightDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightDateTime)), __LINE__);
        }
        $this->flightDateTime = $flightDateTime;
        return $this;
    }
    /**
     * Get flightType value
     * @return string|null
     */
    public function getFlightType()
    {
        return $this->flightType;
    }
    /**
     * Set flightType value
     * @uses \Sabre\UpdateReservation\EnumType\FlightDirectionType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\FlightDirectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flightType
     * @return \Sabre\UpdateReservation\StructType\AirlineType
     */
    public function setFlightType($flightType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\FlightDirectionType::valueIsValid($flightType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flightType, implode(', ', \Sabre\UpdateReservation\EnumType\FlightDirectionType::getValidValues())), __LINE__);
        }
        $this->flightType = $flightType;
        return $this;
    }
    /**
     * Get privateAviation value
     * @return bool|null
     */
    public function getPrivateAviation()
    {
        return $this->privateAviation;
    }
    /**
     * Set privateAviation value
     * @param bool $privateAviation
     * @return \Sabre\UpdateReservation\StructType\AirlineType
     */
    public function setPrivateAviation($privateAviation = null)
    {
        // validation for constraint: boolean
        if (!is_null($privateAviation) && !is_bool($privateAviation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($privateAviation)), __LINE__);
        }
        $this->privateAviation = $privateAviation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirlineType
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
