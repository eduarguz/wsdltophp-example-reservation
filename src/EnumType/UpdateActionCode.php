<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for UpdateActionCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Action Code For Update
 * @subpackage Enumerations
 */
class UpdateActionCode
{
    /**
     * Constant for value 'CREATE'
     * @return string 'CREATE'
     */
    const VALUE_CREATE = 'CREATE';
    /**
     * Constant for value 'CANCEL'
     * @return string 'CANCEL'
     */
    const VALUE_CANCEL = 'CANCEL';
    /**
     * Constant for value 'MODIFY'
     * @return string 'MODIFY'
     */
    const VALUE_MODIFY = 'MODIFY';
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
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_MODIFY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATE,
            self::VALUE_CANCEL,
            self::VALUE_MODIFY,
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
