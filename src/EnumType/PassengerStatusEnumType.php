<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for PassengerStatusEnumType EnumType
 * @subpackage Enumerations
 */
class PassengerStatusEnumType
{
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
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
     * @uses self::VALUE_R
     * @uses self::VALUE_E
     * @uses self::VALUE_N
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_R,
            self::VALUE_E,
            self::VALUE_N,
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
