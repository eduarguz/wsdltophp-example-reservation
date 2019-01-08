<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for status.type EnumType
 * @subpackage Enumerations
 */
class Status_type
{
    /**
     * Constant for value 'Reset'
     * @return string 'Reset'
     */
    const VALUE_RESET = 'Reset';
    /**
     * Constant for value 'Continue'
     * @return string 'Continue'
     */
    const VALUE_CONTINUE = 'Continue';
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
     * @uses self::VALUE_RESET
     * @uses self::VALUE_CONTINUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RESET,
            self::VALUE_CONTINUE,
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
