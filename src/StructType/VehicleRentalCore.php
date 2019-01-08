<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalCore StructType
 * Meta informations extracted from the WSDL
 * - documentation: "VehicleRentalCore" is used to return vehicle rental rental time-related information.
 * @subpackage Structs
 */
class VehicleRentalCore extends AbstractStructBase
{
    /**
     * The DropOffLocationDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DropOffLocationDetails
     */
    public $DropOffLocationDetails;
    /**
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FlightSegment
     */
    public $FlightSegment;
    /**
     * The LocationDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetails
     */
    public $LocationDetails;
    /**
     * The pickUpDateTime
     * Meta informations extracted from the WSDL
     * - documentation: "pickUpDateTime" follows this format: MM-DDTHH:MM
     * - use: optional
     * @var string
     */
    public $pickUpDateTime;
    /**
     * The returnDateTime
     * Meta informations extracted from the WSDL
     * - documentation: "returnDateTime" follows this format: MM-DDTHH:MM
     * - use: optional
     * @var string
     */
    public $returnDateTime;
    /**
     * Constructor method for VehicleRentalCore
     * @uses VehicleRentalCore::setDropOffLocationDetails()
     * @uses VehicleRentalCore::setFlightSegment()
     * @uses VehicleRentalCore::setLocationDetails()
     * @uses VehicleRentalCore::setPickUpDateTime()
     * @uses VehicleRentalCore::setReturnDateTime()
     * @param \Sabre\UpdateReservation\StructType\DropOffLocationDetails $dropOffLocationDetails
     * @param \Sabre\UpdateReservation\StructType\FlightSegment $flightSegment
     * @param \Sabre\UpdateReservation\StructType\LocationDetails $locationDetails
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     */
    public function __construct(\Sabre\UpdateReservation\StructType\DropOffLocationDetails $dropOffLocationDetails = null, \Sabre\UpdateReservation\StructType\FlightSegment $flightSegment = null, \Sabre\UpdateReservation\StructType\LocationDetails $locationDetails = null, $pickUpDateTime = null, $returnDateTime = null)
    {
        $this
            ->setDropOffLocationDetails($dropOffLocationDetails)
            ->setFlightSegment($flightSegment)
            ->setLocationDetails($locationDetails)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime);
    }
    /**
     * Get DropOffLocationDetails value
     * @return \Sabre\UpdateReservation\StructType\DropOffLocationDetails|null
     */
    public function getDropOffLocationDetails()
    {
        return $this->DropOffLocationDetails;
    }
    /**
     * Set DropOffLocationDetails value
     * @param \Sabre\UpdateReservation\StructType\DropOffLocationDetails $dropOffLocationDetails
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore
     */
    public function setDropOffLocationDetails(\Sabre\UpdateReservation\StructType\DropOffLocationDetails $dropOffLocationDetails = null)
    {
        $this->DropOffLocationDetails = $dropOffLocationDetails;
        return $this;
    }
    /**
     * Get FlightSegment value
     * @return \Sabre\UpdateReservation\StructType\FlightSegment|null
     */
    public function getFlightSegment()
    {
        return $this->FlightSegment;
    }
    /**
     * Set FlightSegment value
     * @param \Sabre\UpdateReservation\StructType\FlightSegment $flightSegment
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore
     */
    public function setFlightSegment(\Sabre\UpdateReservation\StructType\FlightSegment $flightSegment = null)
    {
        $this->FlightSegment = $flightSegment;
        return $this;
    }
    /**
     * Get LocationDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetails|null
     */
    public function getLocationDetails()
    {
        return $this->LocationDetails;
    }
    /**
     * Set LocationDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetails $locationDetails
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore
     */
    public function setLocationDetails(\Sabre\UpdateReservation\StructType\LocationDetails $locationDetails = null)
    {
        $this->LocationDetails = $locationDetails;
        return $this;
    }
    /**
     * Get pickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->pickUpDateTime;
    }
    /**
     * Set pickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->pickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get returnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }
    /**
     * Set returnDateTime value
     * @param string $returnDateTime
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->returnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicleRentalCore
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
