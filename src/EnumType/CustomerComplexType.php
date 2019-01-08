<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for CustomerComplexType EnumType
 * @subpackage Enumerations
 */
class CustomerComplexType
{
    /**
     * Constant for value 'REGULAR'
     * @return string 'REGULAR'
     */
    const VALUE_REGULAR = 'REGULAR';
    /**
     * Constant for value 'TVLYPREF'
     * @return string 'TVLYPREF'
     */
    const VALUE_TVLYPREF = 'TVLYPREF';
    /**
     * Constant for value 'PREFELITE'
     * @return string 'PREFELITE'
     */
    const VALUE_PREFELITE = 'PREFELITE';
    /**
     * Constant for value 'LOYALTY'
     * @return string 'LOYALTY'
     */
    const VALUE_LOYALTY = 'LOYALTY';
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
     * @uses self::VALUE_REGULAR
     * @uses self::VALUE_TVLYPREF
     * @uses self::VALUE_PREFELITE
     * @uses self::VALUE_LOYALTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REGULAR,
            self::VALUE_TVLYPREF,
            self::VALUE_PREFELITE,
            self::VALUE_LOYALTY,
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
