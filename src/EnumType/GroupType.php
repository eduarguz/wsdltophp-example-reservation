<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for GroupType EnumType
 * @subpackage Enumerations
 */
class GroupType
{
    /**
     * Constant for value 'CORP'
     * @return string 'CORP'
     */
    const VALUE_CORP = 'CORP';
    /**
     * Constant for value 'BSG'
     * @return string 'BSG'
     */
    const VALUE_BSG = 'BSG';
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
     * @uses self::VALUE_CORP
     * @uses self::VALUE_BSG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CORP,
            self::VALUE_BSG,
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
