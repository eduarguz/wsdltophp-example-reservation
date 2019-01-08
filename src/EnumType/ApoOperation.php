<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for ApoOperation EnumType
 * @subpackage Enumerations
 */
class ApoOperation
{
    /**
     * Constant for value 'CREATE'
     * @return string 'CREATE'
     */
    const VALUE_CREATE = 'CREATE';
    /**
     * Constant for value 'UPDATE'
     * @return string 'UPDATE'
     */
    const VALUE_UPDATE = 'UPDATE';
    /**
     * Constant for value 'DELETE'
     * @return string 'DELETE'
     */
    const VALUE_DELETE = 'DELETE';
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
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATE,
            self::VALUE_UPDATE,
            self::VALUE_DELETE,
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
