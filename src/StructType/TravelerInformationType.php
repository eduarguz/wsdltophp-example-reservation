<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies passenger numbers and types.
 * @subpackage Structs
 */
class TravelerInformationType extends AbstractStructBase
{
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies number of passengers using Passenger Type Codes.
     * - maxOccurs: 9
     * @var \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType[]
     */
    public $PassengerTypeQuantity;
    /**
     * The AirTraveler
     * Meta informations extracted from the WSDL
     * - documentation: Information profiling the person traveling Gender - the gender of the customer, if needed BirthDate - Date of Birth Currency - the preferred currency in which monetary amounts should be returned.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirTravelerType
     */
    public $AirTraveler;
    /**
     * Constructor method for TravelerInformationType
     * @uses TravelerInformationType::setPassengerTypeQuantity()
     * @uses TravelerInformationType::setAirTraveler()
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType[] $passengerTypeQuantity
     * @param \Sabre\UpdateReservation\StructType\AirTravelerType $airTraveler
     */
    public function __construct(array $passengerTypeQuantity = array(), \Sabre\UpdateReservation\StructType\AirTravelerType $airTraveler = null)
    {
        $this
            ->setPassengerTypeQuantity($passengerTypeQuantity)
            ->setAirTraveler($airTraveler);
    }
    /**
     * Get PassengerTypeQuantity value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType[]|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType[] $passengerTypeQuantity
     * @return \Sabre\UpdateReservation\StructType\TravelerInformationType
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity = array())
    {
        foreach ($passengerTypeQuantity as $travelerInformationTypePassengerTypeQuantityItem) {
            // validation for constraint: itemType
            if (!$travelerInformationTypePassengerTypeQuantityItem instanceof \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType) {
                throw new \InvalidArgumentException(sprintf('The PassengerTypeQuantity property can only contain items of \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType, "%s" given', is_object($travelerInformationTypePassengerTypeQuantityItem) ? get_class($travelerInformationTypePassengerTypeQuantityItem) : gettype($travelerInformationTypePassengerTypeQuantityItem)), __LINE__);
            }
        }
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Add item to PassengerTypeQuantity value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType $item
     * @return \Sabre\UpdateReservation\StructType\TravelerInformationType
     */
    public function addToPassengerTypeQuantity(\Sabre\UpdateReservation\StructType\PassengerTypeQuantityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType) {
            throw new \InvalidArgumentException(sprintf('The PassengerTypeQuantity property can only contain items of \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerTypeQuantity[] = $item;
        return $this;
    }
    /**
     * Get AirTraveler value
     * @return \Sabre\UpdateReservation\StructType\AirTravelerType|null
     */
    public function getAirTraveler()
    {
        return $this->AirTraveler;
    }
    /**
     * Set AirTraveler value
     * @param \Sabre\UpdateReservation\StructType\AirTravelerType $airTraveler
     * @return \Sabre\UpdateReservation\StructType\TravelerInformationType
     */
    public function setAirTraveler(\Sabre\UpdateReservation\StructType\AirTravelerType $airTraveler = null)
    {
        $this->AirTraveler = $airTraveler;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelerInformationType
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
