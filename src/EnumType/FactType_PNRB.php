<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for FactType.PNRB EnumType
 * @subpackage Enumerations
 */
class FactType_PNRB
{
    /**
     * Constant for value 'G'
     * @return string 'G'
     */
    const VALUE_G = 'G';
    /**
     * Constant for value 'H'
     * @return string 'H'
     */
    const VALUE_H = 'H';
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
     * @uses self::VALUE_G
     * @uses self::VALUE_H
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_G,
            self::VALUE_H,
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
