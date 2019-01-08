<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for UpdateActionCodeForRoom EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Action Code For Update Request at room level
 * @subpackage Enumerations
 */
class UpdateActionCodeForRoom
{
    /**
     * Constant for value 'MODIFY'
     * @return string 'MODIFY'
     */
    const VALUE_MODIFY = 'MODIFY';
    /**
     * Constant for value 'CANCEL'
     * @return string 'CANCEL'
     */
    const VALUE_CANCEL = 'CANCEL';
    /**
     * Constant for value 'ADD'
     * @return string 'ADD'
     */
    const VALUE_ADD = 'ADD';
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
     * @uses self::VALUE_MODIFY
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_ADD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MODIFY,
            self::VALUE_CANCEL,
            self::VALUE_ADD,
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
