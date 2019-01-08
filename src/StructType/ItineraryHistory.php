<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryHistory StructType
 * @subpackage Structs
 */
class ItineraryHistory extends AbstractStructBase
{
    /**
     * The AirSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirSegmentHistoryType
     */
    public $AirSegment;
    /**
     * The GeneralSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GeneralSegmentHistoryType
     */
    public $GeneralSegment;
    /**
     * The VehicleSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehicleSegmentHistoryType
     */
    public $VehicleSegment;
    /**
     * The HotelSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelSegmentHistoryType
     */
    public $HotelSegment;
    /**
     * The ProductBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductBaseHistoryType
     */
    public $ProductBase;
    /**
     * Constructor method for ItineraryHistory
     * @uses ItineraryHistory::setAirSegment()
     * @uses ItineraryHistory::setGeneralSegment()
     * @uses ItineraryHistory::setVehicleSegment()
     * @uses ItineraryHistory::setHotelSegment()
     * @uses ItineraryHistory::setProductBase()
     * @param \Sabre\UpdateReservation\StructType\AirSegmentHistoryType $airSegment
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentHistoryType $generalSegment
     * @param \Sabre\UpdateReservation\StructType\VehicleSegmentHistoryType $vehicleSegment
     * @param \Sabre\UpdateReservation\StructType\HotelSegmentHistoryType $hotelSegment
     * @param \Sabre\UpdateReservation\StructType\ProductBaseHistoryType $productBase
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AirSegmentHistoryType $airSegment = null, \Sabre\UpdateReservation\StructType\GeneralSegmentHistoryType $generalSegment = null, \Sabre\UpdateReservation\StructType\VehicleSegmentHistoryType $vehicleSegment = null, \Sabre\UpdateReservation\StructType\HotelSegmentHistoryType $hotelSegment = null, \Sabre\UpdateReservation\StructType\ProductBaseHistoryType $productBase = null)
    {
        $this
            ->setAirSegment($airSegment)
            ->setGeneralSegment($generalSegment)
            ->setVehicleSegment($vehicleSegment)
            ->setHotelSegment($hotelSegment)
            ->setProductBase($productBase);
    }
    /**
     * Get AirSegment value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentHistoryType|null
     */
    public function getAirSegment()
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentHistoryType $airSegment
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory
     */
    public function setAirSegment(\Sabre\UpdateReservation\StructType\AirSegmentHistoryType $airSegment = null)
    {
        $this->AirSegment = $airSegment;
        return $this;
    }
    /**
     * Get GeneralSegment value
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentHistoryType|null
     */
    public function getGeneralSegment()
    {
        return $this->GeneralSegment;
    }
    /**
     * Set GeneralSegment value
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentHistoryType $generalSegment
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory
     */
    public function setGeneralSegment(\Sabre\UpdateReservation\StructType\GeneralSegmentHistoryType $generalSegment = null)
    {
        $this->GeneralSegment = $generalSegment;
        return $this;
    }
    /**
     * Get VehicleSegment value
     * @return \Sabre\UpdateReservation\StructType\VehicleSegmentHistoryType|null
     */
    public function getVehicleSegment()
    {
        return $this->VehicleSegment;
    }
    /**
     * Set VehicleSegment value
     * @param \Sabre\UpdateReservation\StructType\VehicleSegmentHistoryType $vehicleSegment
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory
     */
    public function setVehicleSegment(\Sabre\UpdateReservation\StructType\VehicleSegmentHistoryType $vehicleSegment = null)
    {
        $this->VehicleSegment = $vehicleSegment;
        return $this;
    }
    /**
     * Get HotelSegment value
     * @return \Sabre\UpdateReservation\StructType\HotelSegmentHistoryType|null
     */
    public function getHotelSegment()
    {
        return $this->HotelSegment;
    }
    /**
     * Set HotelSegment value
     * @param \Sabre\UpdateReservation\StructType\HotelSegmentHistoryType $hotelSegment
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory
     */
    public function setHotelSegment(\Sabre\UpdateReservation\StructType\HotelSegmentHistoryType $hotelSegment = null)
    {
        $this->HotelSegment = $hotelSegment;
        return $this;
    }
    /**
     * Get ProductBase value
     * @return \Sabre\UpdateReservation\StructType\ProductBaseHistoryType|null
     */
    public function getProductBase()
    {
        return $this->ProductBase;
    }
    /**
     * Set ProductBase value
     * @param \Sabre\UpdateReservation\StructType\ProductBaseHistoryType $productBase
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory
     */
    public function setProductBase(\Sabre\UpdateReservation\StructType\ProductBaseHistoryType $productBase = null)
    {
        $this->ProductBase = $productBase;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory
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
