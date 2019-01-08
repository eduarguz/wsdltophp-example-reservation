<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for Save.PNRB EnumType
 * @subpackage Enumerations
 */
class Save_PNRB
{
    /**
     * Constant for value 'ON_SUCCESS'
     * @return string 'ON_SUCCESS'
     */
    const VALUE_ON_SUCCESS = 'ON_SUCCESS';
    /**
     * Constant for value 'NEVER'
     * @return string 'NEVER'
     */
    const VALUE_NEVER = 'NEVER';
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
     * @uses self::VALUE_ON_SUCCESS
     * @uses self::VALUE_NEVER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ON_SUCCESS,
            self::VALUE_NEVER,
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
