<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for OptionalIndicatorType EnumType
 * @subpackage Enumerations
 */
class OptionalIndicatorType
{
    /**
     * Constant for value 'Y'
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value ' '
     * @return string ' '
     */
    const VALUE_ = ' ';
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
     * @uses self::VALUE_Y
     * @uses self::VALUE_N
     * @uses self::VALUE_
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_Y,
            self::VALUE_N,
            self::VALUE_,
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
