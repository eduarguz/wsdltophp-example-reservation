<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for GuestType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Adult/Child
 * @subpackage Enumerations
 */
class GuestType
{
    /**
     * Constant for value 'ADT'
     * @return string 'ADT'
     */
    const VALUE_ADT = 'ADT';
    /**
     * Constant for value 'CHD'
     * @return string 'CHD'
     */
    const VALUE_CHD = 'CHD';
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
     * @uses self::VALUE_ADT
     * @uses self::VALUE_CHD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADT,
            self::VALUE_CHD,
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
