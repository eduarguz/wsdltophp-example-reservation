<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for PhoneLocationType.PNRB EnumType
 * @subpackage Enumerations
 */
class PhoneLocationType_PNRB
{
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'H'
     * @return string 'H'
     */
    const VALUE_H = 'H';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'O'
     * @return string 'O'
     */
    const VALUE_O = 'O';
    /**
     * Constant for value 'HTL'
     * @return string 'HTL'
     */
    const VALUE_HTL = 'HTL';
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
     * @uses self::VALUE_A
     * @uses self::VALUE_H
     * @uses self::VALUE_B
     * @uses self::VALUE_C
     * @uses self::VALUE_M
     * @uses self::VALUE_F
     * @uses self::VALUE_O
     * @uses self::VALUE_HTL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_H,
            self::VALUE_B,
            self::VALUE_C,
            self::VALUE_M,
            self::VALUE_F,
            self::VALUE_O,
            self::VALUE_HTL,
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
