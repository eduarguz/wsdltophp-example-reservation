<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for PassengerType.PNRB EnumType
 * @subpackage Enumerations
 */
class PassengerType_PNRB
{
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
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
     * @uses self::VALUE_I
     * @uses self::VALUE_S
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_I,
            self::VALUE_S,
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
