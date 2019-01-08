<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AssociationParentReferenceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: - Index : the index/sequence number for the item being associated to | - UkyId : the LREC Uky of the item being associated to
 * @subpackage Enumerations
 */
class AssociationParentReferenceType
{
    /**
     * Constant for value 'Index'
     * @return string 'Index'
     */
    const VALUE_INDEX = 'Index';
    /**
     * Constant for value 'UkyId'
     * @return string 'UkyId'
     */
    const VALUE_UKY_ID = 'UkyId';
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
     * @uses self::VALUE_INDEX
     * @uses self::VALUE_UKY_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INDEX,
            self::VALUE_UKY_ID,
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
