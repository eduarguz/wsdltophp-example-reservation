<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for MembershipLevelTypeCodes EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The type of value in the membership level value. Possibilities include: 2L, 3L, Banner (BN), Tier Level Indicator (TI)
 * @subpackage Enumerations
 */
class MembershipLevelTypeCodes
{
    /**
     * Constant for value '2L'
     * @return string '2L'
     */
    const VALUE_2_L = '2L';
    /**
     * Constant for value '3L'
     * @return string '3L'
     */
    const VALUE_3_L = '3L';
    /**
     * Constant for value 'BN'
     * @return string 'BN'
     */
    const VALUE_BN = 'BN';
    /**
     * Constant for value 'TI'
     * @return string 'TI'
     */
    const VALUE_TI = 'TI';
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
     * @uses self::VALUE_2_L
     * @uses self::VALUE_3_L
     * @uses self::VALUE_BN
     * @uses self::VALUE_TI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_2_L,
            self::VALUE_3_L,
            self::VALUE_BN,
            self::VALUE_TI,
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
