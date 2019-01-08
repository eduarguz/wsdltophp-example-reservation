<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for SingleVendorIndType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates if program is affiliated with a group of related offers accumulating credits.
 * @subpackage Enumerations
 */
class SingleVendorIndType
{
    /**
     * Constant for value 'SingleVndr'
     * @return string 'SingleVndr'
     */
    const VALUE_SINGLE_VNDR = 'SingleVndr';
    /**
     * Constant for value 'Alliance'
     * @return string 'Alliance'
     */
    const VALUE_ALLIANCE = 'Alliance';
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
     * @uses self::VALUE_SINGLE_VNDR
     * @uses self::VALUE_ALLIANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE_VNDR,
            self::VALUE_ALLIANCE,
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
