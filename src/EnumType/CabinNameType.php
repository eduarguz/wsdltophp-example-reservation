<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for CabinNameType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y)
 * @subpackage Enumerations
 */
class CabinNameType
{
    /**
     * Constant for value 'PremiumFirst'
     * @return string 'PremiumFirst'
     */
    const VALUE_PREMIUM_FIRST = 'PremiumFirst';
    /**
     * Constant for value 'First'
     * @return string 'First'
     */
    const VALUE_FIRST = 'First';
    /**
     * Constant for value 'PremiumBusiness'
     * @return string 'PremiumBusiness'
     */
    const VALUE_PREMIUM_BUSINESS = 'PremiumBusiness';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'PremiumEconomy'
     * @return string 'PremiumEconomy'
     */
    const VALUE_PREMIUM_ECONOMY = 'PremiumEconomy';
    /**
     * Constant for value 'Economy'
     * @return string 'Economy'
     */
    const VALUE_ECONOMY = 'Economy';
    /**
     * Constant for value 'Y'
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'J'
     * @return string 'J'
     */
    const VALUE_J = 'J';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
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
     * @uses self::VALUE_PREMIUM_FIRST
     * @uses self::VALUE_FIRST
     * @uses self::VALUE_PREMIUM_BUSINESS
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_PREMIUM_ECONOMY
     * @uses self::VALUE_ECONOMY
     * @uses self::VALUE_Y
     * @uses self::VALUE_S
     * @uses self::VALUE_C
     * @uses self::VALUE_J
     * @uses self::VALUE_F
     * @uses self::VALUE_P
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PREMIUM_FIRST,
            self::VALUE_FIRST,
            self::VALUE_PREMIUM_BUSINESS,
            self::VALUE_BUSINESS,
            self::VALUE_PREMIUM_ECONOMY,
            self::VALUE_ECONOMY,
            self::VALUE_Y,
            self::VALUE_S,
            self::VALUE_C,
            self::VALUE_J,
            self::VALUE_F,
            self::VALUE_P,
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
