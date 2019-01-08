<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for TravelerType EnumType
 * @subpackage Enumerations
 */
class TravelerType
{
    /**
     * Constant for value 'ADT'
     * @return string 'ADT'
     */
    const VALUE_ADT = 'ADT';
    /**
     * Constant for value 'INF'
     * @return string 'INF'
     */
    const VALUE_INF = 'INF';
    /**
     * Constant for value 'CNN'
     * @return string 'CNN'
     */
    const VALUE_CNN = 'CNN';
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
     * @uses self::VALUE_INF
     * @uses self::VALUE_CNN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADT,
            self::VALUE_INF,
            self::VALUE_CNN,
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
