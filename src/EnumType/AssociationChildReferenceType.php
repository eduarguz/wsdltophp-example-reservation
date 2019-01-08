<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AssociationChildReferenceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: - Index : the index/sequence number for the item being associated | - UkyId : the LREC Uky of the item being associated | - New : the item being associated is new, and so the reference needs to be generated | - Type : the association
 * action should be applied to all items of the given type
 * @subpackage Enumerations
 */
class AssociationChildReferenceType
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
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Type'
     * @return string 'Type'
     */
    const VALUE_TYPE = 'Type';
    /**
     * Constant for value 'Static'
     * @return string 'Static'
     */
    const VALUE_STATIC = 'Static';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_TYPE
     * @uses self::VALUE_STATIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INDEX,
            self::VALUE_UKY_ID,
            self::VALUE_NEW,
            self::VALUE_TYPE,
            self::VALUE_STATIC,
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
