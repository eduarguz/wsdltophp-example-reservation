<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for ValidatingCarrierPreferLevelType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify a preference level for ValidatingCarrier. For adding new enums see PreferLevelType.
 * @subpackage Enumerations
 */
class ValidatingCarrierPreferLevelType
{
    /**
     * Constant for value 'Unacceptable'
     * @return string 'Unacceptable'
     */
    const VALUE_UNACCEPTABLE = 'Unacceptable';
    /**
     * Constant for value 'Preferred'
     * @return string 'Preferred'
     */
    const VALUE_PREFERRED = 'Preferred';
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
     * @uses self::VALUE_UNACCEPTABLE
     * @uses self::VALUE_PREFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNACCEPTABLE,
            self::VALUE_PREFERRED,
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
