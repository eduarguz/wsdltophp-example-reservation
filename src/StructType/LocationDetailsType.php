<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationDetailsType StructType
 * @subpackage Structs
 */
class LocationDetailsType extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType
     */
    public $Address;
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateTime;
    /**
     * The AirportInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirportInfoType
     */
    public $AirportInfo;
    /**
     * The RailwayStationInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RailwayStationInfo
     */
    public $RailwayStationInfo;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comments;
    /**
     * Constructor method for LocationDetailsType
     * @uses LocationDetailsType::setAddress()
     * @uses LocationDetailsType::setDateTime()
     * @uses LocationDetailsType::setAirportInfo()
     * @uses LocationDetailsType::setRailwayStationInfo()
     * @uses LocationDetailsType::setComments()
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @param string $dateTime
     * @param \Sabre\UpdateReservation\StructType\AirportInfoType $airportInfo
     * @param \Sabre\UpdateReservation\StructType\RailwayStationInfo $railwayStationInfo
     * @param string $comments
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AddressType $address = null, $dateTime = null, \Sabre\UpdateReservation\StructType\AirportInfoType $airportInfo = null, \Sabre\UpdateReservation\StructType\RailwayStationInfo $railwayStationInfo = null, $comments = null)
    {
        $this
            ->setAddress($address)
            ->setDateTime($dateTime)
            ->setAirportInfo($airportInfo)
            ->setRailwayStationInfo($railwayStationInfo)
            ->setComments($comments);
    }
    /**
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Get AirportInfo value
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType|null
     */
    public function getAirportInfo()
    {
        return $this->AirportInfo;
    }
    /**
     * Set AirportInfo value
     * @param \Sabre\UpdateReservation\StructType\AirportInfoType $airportInfo
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public function setAirportInfo(\Sabre\UpdateReservation\StructType\AirportInfoType $airportInfo = null)
    {
        $this->AirportInfo = $airportInfo;
        return $this;
    }
    /**
     * Get RailwayStationInfo value
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo|null
     */
    public function getRailwayStationInfo()
    {
        return $this->RailwayStationInfo;
    }
    /**
     * Set RailwayStationInfo value
     * @param \Sabre\UpdateReservation\StructType\RailwayStationInfo $railwayStationInfo
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public function setRailwayStationInfo(\Sabre\UpdateReservation\StructType\RailwayStationInfo $railwayStationInfo = null)
    {
        $this->RailwayStationInfo = $railwayStationInfo;
        return $this;
    }
    /**
     * Get Comments value
     * @return string|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param string $comments
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public function setComments($comments = null)
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comments)), __LINE__);
        }
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType
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
