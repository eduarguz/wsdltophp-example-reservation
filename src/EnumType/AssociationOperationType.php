<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AssociationOperationType EnumType
 * @subpackage Enumerations
 */
class AssociationOperationType
{
    /**
     * Constant for value 'ADD'
     * @return string 'ADD'
     */
    const VALUE_ADD = 'ADD';
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
     * Constant for value 'KEEP'
     * @return string 'KEEP'
     */
    const VALUE_KEEP = 'KEEP';
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
     * @uses self::VALUE_ADD
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_KEEP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADD,
            self::VALUE_UPDATE,
            self::VALUE_DELETE,
            self::VALUE_KEEP,
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
