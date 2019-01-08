<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for RemarkType.PNRB EnumType
 * Meta informations extracted from the WSDL
 * - documentation: HS = Historical (5H-) | HD = Hidden (5HR) | QQ = Queue Place (5Q-) | CLIADR = Client Address (5/) | DELADR = Delivery Address (5DL-) | INVOICE = Invoice Remark (5.) | INVSEGASSOC = Invoice Remark (5.Snbr ) | ITINERARY = Itinerary
 * Segment Associated Remark (5¥) | ITINSEGASSOC = Itinerary Segment Associated Remark (5¥Snbr ) | INTERFACE = Interface/Billing Remark (5X/-) | FILLER = Filler Strip Remark (5,) | CODED = Coded Remark (5[A-Z]¥ ) | PRTONTKT = Print On Ticket (5*) |
 * FOP = Form of Payment (5-) | CORPORATE = Corporate Remark (5C-) | REG = Freetext/Basic Remark (5freetext)
 * @subpackage Enumerations
 */
class RemarkType_PNRB
{
    /**
     * Constant for value 'HS'
     * @return string 'HS'
     */
    const VALUE_HS = 'HS';
    /**
     * Constant for value 'HD'
     * @return string 'HD'
     */
    const VALUE_HD = 'HD';
    /**
     * Constant for value 'REG'
     * @return string 'REG'
     */
    const VALUE_REG = 'REG';
    /**
     * Constant for value 'QQ'
     * @return string 'QQ'
     */
    const VALUE_QQ = 'QQ';
    /**
     * Constant for value 'CLIADR'
     * @return string 'CLIADR'
     */
    const VALUE_CLIADR = 'CLIADR';
    /**
     * Constant for value 'DELADR'
     * @return string 'DELADR'
     */
    const VALUE_DELADR = 'DELADR';
    /**
     * Constant for value 'INVOICE'
     * @return string 'INVOICE'
     */
    const VALUE_INVOICE = 'INVOICE';
    /**
     * Constant for value 'ITINERARY'
     * @return string 'ITINERARY'
     */
    const VALUE_ITINERARY = 'ITINERARY';
    /**
     * Constant for value 'INTERFACE'
     * @return string 'INTERFACE'
     */
    const VALUE_INTERFACE = 'INTERFACE';
    /**
     * Constant for value 'FILLER'
     * @return string 'FILLER'
     */
    const VALUE_FILLER = 'FILLER';
    /**
     * Constant for value 'CODED'
     * @return string 'CODED'
     */
    const VALUE_CODED = 'CODED';
    /**
     * Constant for value 'PRTONTKT'
     * @return string 'PRTONTKT'
     */
    const VALUE_PRTONTKT = 'PRTONTKT';
    /**
     * Constant for value 'INVSEGASSOC'
     * @return string 'INVSEGASSOC'
     */
    const VALUE_INVSEGASSOC = 'INVSEGASSOC';
    /**
     * Constant for value 'ITINSEGASSOC'
     * @return string 'ITINSEGASSOC'
     */
    const VALUE_ITINSEGASSOC = 'ITINSEGASSOC';
    /**
     * Constant for value 'FOP'
     * @return string 'FOP'
     */
    const VALUE_FOP = 'FOP';
    /**
     * Constant for value 'CORPORATE'
     * @return string 'CORPORATE'
     */
    const VALUE_CORPORATE = 'CORPORATE';
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
     * @uses self::VALUE_HS
     * @uses self::VALUE_HD
     * @uses self::VALUE_REG
     * @uses self::VALUE_QQ
     * @uses self::VALUE_CLIADR
     * @uses self::VALUE_DELADR
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_ITINERARY
     * @uses self::VALUE_INTERFACE
     * @uses self::VALUE_FILLER
     * @uses self::VALUE_CODED
     * @uses self::VALUE_PRTONTKT
     * @uses self::VALUE_INVSEGASSOC
     * @uses self::VALUE_ITINSEGASSOC
     * @uses self::VALUE_FOP
     * @uses self::VALUE_CORPORATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HS,
            self::VALUE_HD,
            self::VALUE_REG,
            self::VALUE_QQ,
            self::VALUE_CLIADR,
            self::VALUE_DELADR,
            self::VALUE_INVOICE,
            self::VALUE_ITINERARY,
            self::VALUE_INTERFACE,
            self::VALUE_FILLER,
            self::VALUE_CODED,
            self::VALUE_PRTONTKT,
            self::VALUE_INVSEGASSOC,
            self::VALUE_ITINSEGASSOC,
            self::VALUE_FOP,
            self::VALUE_CORPORATE,
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
