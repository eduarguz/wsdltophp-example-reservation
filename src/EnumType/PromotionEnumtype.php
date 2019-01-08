<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for PromotionEnumtype EnumType
 * @subpackage Enumerations
 */
class PromotionEnumtype
{
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
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
     * @uses self::VALUE_C
     * @uses self::VALUE_L
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_C,
            self::VALUE_L,
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
