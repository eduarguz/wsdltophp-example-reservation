<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for RequestEnumerationType EnumType
 * @subpackage Enumerations
 */
class RequestEnumerationType
{
    /**
     * Constant for value 'Stateful'
     * @return string 'Stateful'
     */
    const VALUE_STATEFUL = 'Stateful';
    /**
     * Constant for value 'Stateless'
     * @return string 'Stateless'
     */
    const VALUE_STATELESS = 'Stateless';
    /**
     * Constant for value 'Payload'
     * @return string 'Payload'
     */
    const VALUE_PAYLOAD = 'Payload';
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
     * @uses self::VALUE_STATEFUL
     * @uses self::VALUE_STATELESS
     * @uses self::VALUE_PAYLOAD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STATEFUL,
            self::VALUE_STATELESS,
            self::VALUE_PAYLOAD,
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
