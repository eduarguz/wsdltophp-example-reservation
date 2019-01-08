<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for PriceMismatchActionType EnumType
 * @subpackage Enumerations
 */
class PriceMismatchActionType
{
    /**
     * Constant for value 'REJECT'
     * @return string 'REJECT'
     */
    const VALUE_REJECT = 'REJECT';
    /**
     * Constant for value 'ACCEPT_ANY_PRICE'
     * @return string 'ACCEPT_ANY_PRICE'
     */
    const VALUE_ACCEPT_ANY_PRICE = 'ACCEPT_ANY_PRICE';
    /**
     * Constant for value 'ACCEPT_LOWER_PRICE'
     * @return string 'ACCEPT_LOWER_PRICE'
     */
    const VALUE_ACCEPT_LOWER_PRICE = 'ACCEPT_LOWER_PRICE';
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
     * @uses self::VALUE_REJECT
     * @uses self::VALUE_ACCEPT_ANY_PRICE
     * @uses self::VALUE_ACCEPT_LOWER_PRICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REJECT,
            self::VALUE_ACCEPT_ANY_PRICE,
            self::VALUE_ACCEPT_LOWER_PRICE,
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
