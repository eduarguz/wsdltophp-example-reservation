<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AddressType.RD.PNRB EnumType
 * @subpackage Enumerations
 */
class AddressType_RD_PNRB
{
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
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
     * @uses self::VALUE_D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_R,
            self::VALUE_D,
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
