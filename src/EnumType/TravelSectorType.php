<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for TravelSectorType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: 4/29/2009 - added GroundTransport to accomodate Profiles data. Other values from OTA Code List: travel sector (TVS). | Values from OTA Code List: travel sector (TVS).
 * @subpackage Enumerations
 */
class TravelSectorType
{
    /**
     * Constant for value 'Air'
     * @return string 'Air'
     */
    const VALUE_AIR = 'Air';
    /**
     * Constant for value 'Car'
     * @return string 'Car'
     */
    const VALUE_CAR = 'Car';
    /**
     * Constant for value 'Hotel'
     * @return string 'Hotel'
     */
    const VALUE_HOTEL = 'Hotel';
    /**
     * Constant for value 'Insurance'
     * @return string 'Insurance'
     */
    const VALUE_INSURANCE = 'Insurance';
    /**
     * Constant for value 'Golf'
     * @return string 'Golf'
     */
    const VALUE_GOLF = 'Golf';
    /**
     * Constant for value 'Tour'
     * @return string 'Tour'
     */
    const VALUE_TOUR = 'Tour';
    /**
     * Constant for value 'Rail'
     * @return string 'Rail'
     */
    const VALUE_RAIL = 'Rail';
    /**
     * Constant for value 'Cruise'
     * @return string 'Cruise'
     */
    const VALUE_CRUISE = 'Cruise';
    /**
     * Constant for value 'Excursion'
     * @return string 'Excursion'
     */
    const VALUE_EXCURSION = 'Excursion';
    /**
     * Constant for value 'Ferry'
     * @return string 'Ferry'
     */
    const VALUE_FERRY = 'Ferry';
    /**
     * Constant for value 'GroundTransport'
     * @return string 'GroundTransport'
     */
    const VALUE_GROUND_TRANSPORT = 'GroundTransport';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_AIR
     * @uses self::VALUE_CAR
     * @uses self::VALUE_HOTEL
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_GOLF
     * @uses self::VALUE_TOUR
     * @uses self::VALUE_RAIL
     * @uses self::VALUE_CRUISE
     * @uses self::VALUE_EXCURSION
     * @uses self::VALUE_FERRY
     * @uses self::VALUE_GROUND_TRANSPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AIR,
            self::VALUE_CAR,
            self::VALUE_HOTEL,
            self::VALUE_INSURANCE,
            self::VALUE_GOLF,
            self::VALUE_TOUR,
            self::VALUE_RAIL,
            self::VALUE_CRUISE,
            self::VALUE_EXCURSION,
            self::VALUE_FERRY,
            self::VALUE_GROUND_TRANSPORT,
        );
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
