<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for messageStatus.type EnumType
 * @subpackage Enumerations
 */
class MessageStatus_type
{
    /**
     * Constant for value 'UnAuthorized'
     * @return string 'UnAuthorized'
     */
    const VALUE_UN_AUTHORIZED = 'UnAuthorized';
    /**
     * Constant for value 'NotRecognized'
     * @return string 'NotRecognized'
     */
    const VALUE_NOT_RECOGNIZED = 'NotRecognized';
    /**
     * Constant for value 'Received'
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'Processed'
     * @return string 'Processed'
     */
    const VALUE_PROCESSED = 'Processed';
    /**
     * Constant for value 'Forwarded'
     * @return string 'Forwarded'
     */
    const VALUE_FORWARDED = 'Forwarded';
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
     * @uses self::VALUE_UN_AUTHORIZED
     * @uses self::VALUE_NOT_RECOGNIZED
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_PROCESSED
     * @uses self::VALUE_FORWARDED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UN_AUTHORIZED,
            self::VALUE_NOT_RECOGNIZED,
            self::VALUE_RECEIVED,
            self::VALUE_PROCESSED,
            self::VALUE_FORWARDED,
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
