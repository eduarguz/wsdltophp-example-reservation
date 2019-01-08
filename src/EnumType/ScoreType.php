<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for ScoreType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type of the Score TDW - TDW, AL - Airline, MTO - Override, CE - Current Effective
 * @subpackage Enumerations
 */
class ScoreType
{
    /**
     * Constant for value 'TDW'
     * @return string 'TDW'
     */
    const VALUE_TDW = 'TDW';
    /**
     * Constant for value 'AL'
     * @return string 'AL'
     */
    const VALUE_AL = 'AL';
    /**
     * Constant for value 'MTO'
     * @return string 'MTO'
     */
    const VALUE_MTO = 'MTO';
    /**
     * Constant for value 'CE'
     * @return string 'CE'
     */
    const VALUE_CE = 'CE';
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $value;
    /**
     * The carrier
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $carrier;
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
     * @uses self::VALUE_TDW
     * @uses self::VALUE_AL
     * @uses self::VALUE_MTO
     * @uses self::VALUE_CE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TDW,
            self::VALUE_AL,
            self::VALUE_MTO,
            self::VALUE_CE,
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
