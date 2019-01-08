<?php

namespace Sabre\UpdateReservation\EnumType;

/**
 * This class stands for DocumentType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: if included the only valid option is V (visa) | TODO - add explanation as to why this can only be a V and what source states this
 * @subpackage Enumerations
 */
class DocumentType
{
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * The DocumentID
     * @var string
     */
    public $DocumentID;
    /**
     * The AgencyAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AgencyAccountNumber;
    /**
     * The CreationChannel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationChannel;
    /**
     * The SeatNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SeatNumber;
    /**
     * The TypeOfPass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TypeOfPass;
    /**
     * The PassengerReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerReferences
     */
    public $PassengerReferences;
    /**
     * The SegmentReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentReferences
     */
    public $SegmentReferences;
    /**
     * The IssueTimeLimit
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueTimeLimit;
    /**
     * The IssueDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueDateTime;
    /**
     * The DocumentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentStatus;
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChargesType
     */
    public $Charges;
    /**
     * The FormOfPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public $FormOfPayment;
    /**
     * The File
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\File
     */
    public $File;
    /**
     * The IssueType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $IssueType;
    /**
     * The DocumentRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DocumentRules
     */
    public $DocumentRules;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The codeContext
     * @var string
     */
    public $codeContext;
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
     * @uses self::VALUE_V
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_V,
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
