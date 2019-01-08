<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for RemarkPrintCode.PNRB EnumType
 * @subpackage Enumerations
 */
class RemarkPrintCode_PNRB
{
    /**
     * Constant for value 'ITIN'
     * @return string 'ITIN'
     */
    const VALUE_ITIN = 'ITIN';
    /**
     * Constant for value 'INV'
     * @return string 'INV'
     */
    const VALUE_INV = 'INV';
    /**
     * Constant for value 'PAY'
     * @return string 'PAY'
     */
    const VALUE_PAY = 'PAY';
    /**
     * Constant for value 'NAME'
     * @return string 'NAME'
     */
    const VALUE_NAME = 'NAME';
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
     * @uses self::VALUE_ITIN
     * @uses self::VALUE_INV
     * @uses self::VALUE_PAY
     * @uses self::VALUE_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITIN,
            self::VALUE_INV,
            self::VALUE_PAY,
            self::VALUE_NAME,
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
