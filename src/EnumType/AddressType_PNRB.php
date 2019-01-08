<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for AddressType.PNRB EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Address Line Type - "A" - Address; "C" - City-State-Country; "N" - Name; "Z" - ZipCode; "B" - Business; "O" - Default-Other
 * @subpackage Enumerations
 */
class AddressType_PNRB
{
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'Z'
     * @return string 'Z'
     */
    const VALUE_Z = 'Z';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Constant for value 'O'
     * @return string 'O'
     */
    const VALUE_O = 'O';
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
     * @uses self::VALUE_N
     * @uses self::VALUE_A
     * @uses self::VALUE_C
     * @uses self::VALUE_Z
     * @uses self::VALUE_B
     * @uses self::VALUE_O
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_N,
            self::VALUE_A,
            self::VALUE_C,
            self::VALUE_Z,
            self::VALUE_B,
            self::VALUE_O,
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
