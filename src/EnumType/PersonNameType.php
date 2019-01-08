<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for PersonNameType EnumType
 * @subpackage Enumerations
 */
class PersonNameType
{
    /**
     * Constant for value 'Former'
     * @return string 'Former'
     */
    const VALUE_FORMER = 'Former';
    /**
     * Constant for value 'Nickname'
     * @return string 'Nickname'
     */
    const VALUE_NICKNAME = 'Nickname';
    /**
     * Constant for value 'Alternate'
     * @return string 'Alternate'
     */
    const VALUE_ALTERNATE = 'Alternate';
    /**
     * Constant for value 'Maiden'
     * @return string 'Maiden'
     */
    const VALUE_MAIDEN = 'Maiden';
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - documentation: Salutation of honorific. (e.g., Mr. Mrs., Ms., Miss, Dr.)
     * - minOccurs: 0
     * @var string
     */
    public $Prefix;
    /**
     * The Given
     * Meta informations extracted from the WSDL
     * - documentation: Given name, first name or names
     * - minOccurs: 0
     * @var string
     */
    public $Given;
    /**
     * The Middle
     * Meta informations extracted from the WSDL
     * - documentation: The middle name of the person name
     * - minOccurs: 0
     * @var string
     */
    public $Middle;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - documentation: Family name aslo known as last name.
     * @var string
     */
    public $Surname;
    /**
     * The Suffix
     * Meta informations extracted from the WSDL
     * - documentation: Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.).
     * - minOccurs: 0
     * @var string
     */
    public $Suffix;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The PreferredFirstName
     * Meta informations extracted from the WSDL
     * - documentation: Any preferred names for first name used instead of GivenName
     * - minOccurs: 0
     * @var string
     */
    public $PreferredFirstName;
    /**
     * The PreferredSurname
     * Meta informations extracted from the WSDL
     * - documentation: Any preferred names for last names used instead of surname
     * - minOccurs: 0
     * @var string
     */
    public $PreferredSurname;
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
     * @uses self::VALUE_FORMER
     * @uses self::VALUE_NICKNAME
     * @uses self::VALUE_ALTERNATE
     * @uses self::VALUE_MAIDEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FORMER,
            self::VALUE_NICKNAME,
            self::VALUE_ALTERNATE,
            self::VALUE_MAIDEN,
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
