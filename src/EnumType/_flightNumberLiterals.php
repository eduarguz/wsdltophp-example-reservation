<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for _flightNumberLiterals EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This private type enumerates flight number literals used for ground links and open segments in an itinerary. | This private type enumerates flight number literals used for ground links and open segments in an itinerary.
 * @subpackage Enumerations
 */
class _flightNumberLiterals
{
    /**
     * Constant for value 'OPEN'
     * @return string 'OPEN'
     */
    const VALUE_OPEN = 'OPEN';
    /**
     * Constant for value 'ARNK'
     * @return string 'ARNK'
     */
    const VALUE_ARNK = 'ARNK';
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
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_ARNK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPEN,
            self::VALUE_ARNK,
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
