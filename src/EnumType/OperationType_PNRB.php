<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for OperationType.PNRB EnumType
 * @subpackage Enumerations
 */
class OperationType_PNRB
{
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'U'
     * @return string 'U'
     */
    const VALUE_U = 'U';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
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
     * @uses self::VALUE_U
     * @uses self::VALUE_D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_C,
            self::VALUE_U,
            self::VALUE_D,
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
