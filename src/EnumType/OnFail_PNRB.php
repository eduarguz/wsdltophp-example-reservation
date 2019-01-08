<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for OnFail.PNRB EnumType
 * @subpackage Enumerations
 */
class OnFail_PNRB
{
    /**
     * Constant for value 'UPDATE_SESSION'
     * @return string 'UPDATE_SESSION'
     */
    const VALUE_UPDATE_SESSION = 'UPDATE_SESSION';
    /**
     * Constant for value 'UPDATE_AND_FILE'
     * @return string 'UPDATE_AND_FILE'
     */
    const VALUE_UPDATE_AND_FILE = 'UPDATE_AND_FILE';
    /**
     * Constant for value 'REJECT_ALL_UPDATES'
     * @return string 'REJECT_ALL_UPDATES'
     */
    const VALUE_REJECT_ALL_UPDATES = 'REJECT_ALL_UPDATES';
    /**
     * Constant for value 'UPDATE_SESSION_REJECT_FILE_REQUEST'
     * @return string 'UPDATE_SESSION_REJECT_FILE_REQUEST'
     */
    const VALUE_UPDATE_SESSION_REJECT_FILE_REQUEST = 'UPDATE_SESSION_REJECT_FILE_REQUEST';
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
     * @uses self::VALUE_UPDATE_SESSION
     * @uses self::VALUE_UPDATE_AND_FILE
     * @uses self::VALUE_REJECT_ALL_UPDATES
     * @uses self::VALUE_UPDATE_SESSION_REJECT_FILE_REQUEST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UPDATE_SESSION,
            self::VALUE_UPDATE_AND_FILE,
            self::VALUE_REJECT_ALL_UPDATES,
            self::VALUE_UPDATE_SESSION_REJECT_FILE_REQUEST,
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
