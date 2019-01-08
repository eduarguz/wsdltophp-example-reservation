<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for LodgingPaymentTypeCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Payment type can be DEPOSIT or GUARANTEE
 * @subpackage Enumerations
 */
class LodgingPaymentTypeCode
{
    /**
     * Constant for value 'DEPOSIT'
     * @return string 'DEPOSIT'
     */
    const VALUE_DEPOSIT = 'DEPOSIT';
    /**
     * Constant for value 'GUARANTEE'
     * @return string 'GUARANTEE'
     */
    const VALUE_GUARANTEE = 'GUARANTEE';
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
     * @uses self::VALUE_DEPOSIT
     * @uses self::VALUE_GUARANTEE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEPOSIT,
            self::VALUE_GUARANTEE,
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
