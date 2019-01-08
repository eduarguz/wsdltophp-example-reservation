<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for Gender.PNRB EnumType
 * @subpackage Enumerations
 */
class Gender_PNRB
{
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'U'
     * @return string 'U'
     */
    const VALUE_U = 'U';
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
     * @uses self::VALUE_F
     * @uses self::VALUE_M
     * @uses self::VALUE_U
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_F,
            self::VALUE_M,
            self::VALUE_U,
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
