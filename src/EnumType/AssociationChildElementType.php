<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AssociationChildElementType EnumType
 * @subpackage Enumerations
 */
class AssociationChildElementType
{
    /**
     * Constant for value 'Remark'
     * @return string 'Remark'
     */
    const VALUE_REMARK = 'Remark';
    /**
     * Constant for value 'PhoneNumber'
     * @return string 'PhoneNumber'
     */
    const VALUE_PHONE_NUMBER = 'PhoneNumber';
    /**
     * Constant for value 'Ticket'
     * @return string 'Ticket'
     */
    const VALUE_TICKET = 'Ticket';
    /**
     * Constant for value 'AccountingLine'
     * @return string 'AccountingLine'
     */
    const VALUE_ACCOUNTING_LINE = 'AccountingLine';
    /**
     * Constant for value 'FOP'
     * @return string 'FOP'
     */
    const VALUE_FOP = 'FOP';
    /**
     * Constant for value 'FopUsageType'
     * @return string 'FopUsageType'
     */
    const VALUE_FOP_USAGE_TYPE = 'FopUsageType';
    /**
     * Constant for value 'FopTripType'
     * @return string 'FopTripType'
     */
    const VALUE_FOP_TRIP_TYPE = 'FopTripType';
    /**
     * Constant for value 'AccountingField'
     * @return string 'AccountingField'
     */
    const VALUE_ACCOUNTING_FIELD = 'AccountingField';
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
     * @uses self::VALUE_REMARK
     * @uses self::VALUE_PHONE_NUMBER
     * @uses self::VALUE_TICKET
     * @uses self::VALUE_ACCOUNTING_LINE
     * @uses self::VALUE_FOP
     * @uses self::VALUE_FOP_USAGE_TYPE
     * @uses self::VALUE_FOP_TRIP_TYPE
     * @uses self::VALUE_ACCOUNTING_FIELD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REMARK,
            self::VALUE_PHONE_NUMBER,
            self::VALUE_TICKET,
            self::VALUE_ACCOUNTING_LINE,
            self::VALUE_FOP,
            self::VALUE_FOP_USAGE_TYPE,
            self::VALUE_FOP_TRIP_TYPE,
            self::VALUE_ACCOUNTING_FIELD,
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
