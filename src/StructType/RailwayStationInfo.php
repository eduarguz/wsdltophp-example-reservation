<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailwayStationInfo StructType
 * @subpackage Structs
 */
class RailwayStationInfo extends RailwayStationInfoType
{
    /**
     * The StationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StationName
     */
    public $StationName;
    /**
     * The LocalStationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocalStationName
     */
    public $LocalStationName;
    /**
     * The LocationCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationCodes
     */
    public $LocationCodes;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amenities
     */
    public $Amenities;
    /**
     * The borderPoint
     * @var string
     */
    public $borderPoint;
    /**
     * Constructor method for RailwayStationInfo
     * @uses RailwayStationInfo::setStationName()
     * @uses RailwayStationInfo::setLocalStationName()
     * @uses RailwayStationInfo::setLocationCodes()
     * @uses RailwayStationInfo::setAmenities()
     * @uses RailwayStationInfo::setBorderPoint()
     * @param \Sabre\UpdateReservation\StructType\StationName $stationName
     * @param \Sabre\UpdateReservation\StructType\LocalStationName $localStationName
     * @param \Sabre\UpdateReservation\StructType\LocationCodes $locationCodes
     * @param \Sabre\UpdateReservation\StructType\Amenities $amenities
     * @param string $borderPoint
     */
    public function __construct(\Sabre\UpdateReservation\StructType\StationName $stationName = null, \Sabre\UpdateReservation\StructType\LocalStationName $localStationName = null, \Sabre\UpdateReservation\StructType\LocationCodes $locationCodes = null, \Sabre\UpdateReservation\StructType\Amenities $amenities = null, $borderPoint = null)
    {
        $this
            ->setStationName($stationName)
            ->setLocalStationName($localStationName)
            ->setLocationCodes($locationCodes)
            ->setAmenities($amenities)
            ->setBorderPoint($borderPoint);
    }
    /**
     * Get StationName value
     * @return \Sabre\UpdateReservation\StructType\StationName|null
     */
    public function getStationName()
    {
        return $this->StationName;
    }
    /**
     * Set StationName value
     * @param \Sabre\UpdateReservation\StructType\StationName $stationName
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo
     */
    public function setStationName(\Sabre\UpdateReservation\StructType\StationName $stationName = null)
    {
        $this->StationName = $stationName;
        return $this;
    }
    /**
     * Get LocalStationName value
     * @return \Sabre\UpdateReservation\StructType\LocalStationName|null
     */
    public function getLocalStationName()
    {
        return $this->LocalStationName;
    }
    /**
     * Set LocalStationName value
     * @param \Sabre\UpdateReservation\StructType\LocalStationName $localStationName
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo
     */
    public function setLocalStationName(\Sabre\UpdateReservation\StructType\LocalStationName $localStationName = null)
    {
        $this->LocalStationName = $localStationName;
        return $this;
    }
    /**
     * Get LocationCodes value
     * @return \Sabre\UpdateReservation\StructType\LocationCodes|null
     */
    public function getLocationCodes()
    {
        return $this->LocationCodes;
    }
    /**
     * Set LocationCodes value
     * @param \Sabre\UpdateReservation\StructType\LocationCodes $locationCodes
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo
     */
    public function setLocationCodes(\Sabre\UpdateReservation\StructType\LocationCodes $locationCodes = null)
    {
        $this->LocationCodes = $locationCodes;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Sabre\UpdateReservation\StructType\Amenities|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Sabre\UpdateReservation\StructType\Amenities $amenities
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo
     */
    public function setAmenities(\Sabre\UpdateReservation\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get borderPoint value
     * @return string|null
     */
    public function getBorderPoint()
    {
        return $this->borderPoint;
    }
    /**
     * Set borderPoint value
     * @param string $borderPoint
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo
     */
    public function setBorderPoint($borderPoint = null)
    {
        // validation for constraint: string
        if (!is_null($borderPoint) && !is_string($borderPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($borderPoint)), __LINE__);
        }
        $this->borderPoint = $borderPoint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RailwayStationInfo
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
