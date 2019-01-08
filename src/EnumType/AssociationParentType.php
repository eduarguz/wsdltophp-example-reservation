<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AssociationParentType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: - NameNumber e.g. 1.1, only type currently supported
 * @subpackage Enumerations
 */
class AssociationParentType
{
    /**
     * Constant for value 'NameNumber'
     * @return string 'NameNumber'
     */
    const VALUE_NAME_NUMBER = 'NameNumber';
    /**
     * Constant for value 'NameSeqId'
     * @return string 'NameSeqId'
     */
    const VALUE_NAME_SEQ_ID = 'NameSeqId';
    /**
     * Constant for value 'FOP'
     * @return string 'FOP'
     */
    const VALUE_FOP = 'FOP';
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
     * @uses self::VALUE_NAME_NUMBER
     * @uses self::VALUE_NAME_SEQ_ID
     * @uses self::VALUE_FOP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NAME_NUMBER,
            self::VALUE_NAME_SEQ_ID,
            self::VALUE_FOP,
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
