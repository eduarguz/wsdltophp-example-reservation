<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AirSegmentType.PNRB EnumType
 * @subpackage Enumerations
 */
class AirSegmentType_PNRB
{
    /**
     * Constant for value 'REG'
     * @return string 'REG'
     */
    const VALUE_REG = 'REG';
    /**
     * Constant for value 'ARNK'
     * @return string 'ARNK'
     */
    const VALUE_ARNK = 'ARNK';
    /**
     * Constant for value 'OPEN'
     * @return string 'OPEN'
     */
    const VALUE_OPEN = 'OPEN';
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
     * @uses self::VALUE_REG
     * @uses self::VALUE_ARNK
     * @uses self::VALUE_OPEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REG,
            self::VALUE_ARNK,
            self::VALUE_OPEN,
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
