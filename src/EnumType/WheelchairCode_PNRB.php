<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for WheelchairCode.PNRB EnumType
 * @subpackage Enumerations
 */
class WheelchairCode_PNRB
{
    /**
     * Constant for value 'WCHR'
     * @return string 'WCHR'
     */
    const VALUE_WCHR = 'WCHR';
    /**
     * Constant for value 'WCHS'
     * @return string 'WCHS'
     */
    const VALUE_WCHS = 'WCHS';
    /**
     * Constant for value 'WCHC'
     * @return string 'WCHC'
     */
    const VALUE_WCHC = 'WCHC';
    /**
     * Constant for value 'WCBD'
     * @return string 'WCBD'
     */
    const VALUE_WCBD = 'WCBD';
    /**
     * Constant for value 'WCBW'
     * @return string 'WCBW'
     */
    const VALUE_WCBW = 'WCBW';
    /**
     * Constant for value 'WCMP'
     * @return string 'WCMP'
     */
    const VALUE_WCMP = 'WCMP';
    /**
     * Constant for value 'WCOB'
     * @return string 'WCOB'
     */
    const VALUE_WCOB = 'WCOB';
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
     * @uses self::VALUE_WCHR
     * @uses self::VALUE_WCHS
     * @uses self::VALUE_WCHC
     * @uses self::VALUE_WCBD
     * @uses self::VALUE_WCBW
     * @uses self::VALUE_WCMP
     * @uses self::VALUE_WCOB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WCHR,
            self::VALUE_WCHS,
            self::VALUE_WCHC,
            self::VALUE_WCBD,
            self::VALUE_WCBW,
            self::VALUE_WCMP,
            self::VALUE_WCOB,
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
