<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOCOEntry.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Formats: 3DOCO(segment number)/(place of birth)/(document type)/(document number)/ (visa place of issue)/(visa issue date)/(visa applicable country)/ (lap child indicator)-(pnr name number) * enter visa info 3DOCO2/LYON
 * FR/V/789789/PARIS FR/14JUN2005/CH-2.1 * enter visa info, but omit place of birth 3DOCO1//V/789789/HOUSTON/14JUN04/USA * enter only the place of birth (no other visa info is expected) 3DOCO1/MANCHESTER-1.1 * omit visa info 3DOCO2/MUNICH/////2.1 NOTE:
 * If you omit the doc type in the entry, you must include the place of birth * enter visa info with multiple segment selection 3DOCO1,3-5/MUNICH/V/789789/HOUSTON/14JUN04/USA * delete a DOCO entry 3(line/item #)¤ 37¤
 * @subpackage Structs
 */
class DOCOEntry_PNRB extends AbstractStructBase
{
    /**
     * The PlaceOfBirth
     * Meta informations extracted from the WSDL
     * - documentation: 2-35 chars
     * - minOccurs: 0
     * @var string
     */
    public $PlaceOfBirth;
    /**
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentType;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - documentation: max 15 chars
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The VisaPlaceOfIssue
     * Meta informations extracted from the WSDL
     * - documentation: max 35 chars
     * - minOccurs: 0
     * @var string
     */
    public $VisaPlaceOfIssue;
    /**
     * The VisaIssueDate
     * Meta informations extracted from the WSDL
     * - documentation: ddmmmyy or ddmmmyyyy
     * - minOccurs: 0
     * @var string
     */
    public $VisaIssueDate;
    /**
     * The VisaApplicableCountry
     * Meta informations extracted from the WSDL
     * - documentation: 2 or 3 chars
     * - minOccurs: 0
     * @var string
     */
    public $VisaApplicableCountry;
    /**
     * The LapChild
     * Meta informations extracted from the WSDL
     * - documentation: this would be an "I" in the TPC command
     * - minOccurs: 0
     * @var bool
     */
    public $LapChild;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: A = AFAX G = GFAX
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for DOCOEntry.PNRB
     * @uses DOCOEntry_PNRB::setPlaceOfBirth()
     * @uses DOCOEntry_PNRB::setDocumentType()
     * @uses DOCOEntry_PNRB::setDocumentNumber()
     * @uses DOCOEntry_PNRB::setVisaPlaceOfIssue()
     * @uses DOCOEntry_PNRB::setVisaIssueDate()
     * @uses DOCOEntry_PNRB::setVisaApplicableCountry()
     * @uses DOCOEntry_PNRB::setLapChild()
     * @uses DOCOEntry_PNRB::setFreeText()
     * @uses DOCOEntry_PNRB::setActionCode()
     * @uses DOCOEntry_PNRB::setNumberInParty()
     * @uses DOCOEntry_PNRB::setId()
     * @uses DOCOEntry_PNRB::setType()
     * @uses DOCOEntry_PNRB::setOp()
     * @param string $placeOfBirth
     * @param string $documentType
     * @param string $documentNumber
     * @param string $visaPlaceOfIssue
     * @param string $visaIssueDate
     * @param string $visaApplicableCountry
     * @param bool $lapChild
     * @param string $freeText
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($placeOfBirth = null, $documentType = null, $documentNumber = null, $visaPlaceOfIssue = null, $visaIssueDate = null, $visaApplicableCountry = null, $lapChild = null, $freeText = null, $actionCode = null, $numberInParty = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setPlaceOfBirth($placeOfBirth)
            ->setDocumentType($documentType)
            ->setDocumentNumber($documentNumber)
            ->setVisaPlaceOfIssue($visaPlaceOfIssue)
            ->setVisaIssueDate($visaIssueDate)
            ->setVisaApplicableCountry($visaApplicableCountry)
            ->setLapChild($lapChild)
            ->setFreeText($freeText)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get PlaceOfBirth value
     * @return string|null
     */
    public function getPlaceOfBirth()
    {
        return $this->PlaceOfBirth;
    }
    /**
     * Set PlaceOfBirth value
     * @param string $placeOfBirth
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setPlaceOfBirth($placeOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($placeOfBirth) && !is_string($placeOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($placeOfBirth)), __LINE__);
        }
        $this->PlaceOfBirth = $placeOfBirth;
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @uses \Sabre\UpdateReservation\EnumType\DocumentType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\DocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\DocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentType, implode(', ', \Sabre\UpdateReservation\EnumType\DocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get VisaPlaceOfIssue value
     * @return string|null
     */
    public function getVisaPlaceOfIssue()
    {
        return $this->VisaPlaceOfIssue;
    }
    /**
     * Set VisaPlaceOfIssue value
     * @param string $visaPlaceOfIssue
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setVisaPlaceOfIssue($visaPlaceOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($visaPlaceOfIssue) && !is_string($visaPlaceOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaPlaceOfIssue)), __LINE__);
        }
        $this->VisaPlaceOfIssue = $visaPlaceOfIssue;
        return $this;
    }
    /**
     * Get VisaIssueDate value
     * @return string|null
     */
    public function getVisaIssueDate()
    {
        return $this->VisaIssueDate;
    }
    /**
     * Set VisaIssueDate value
     * @param string $visaIssueDate
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setVisaIssueDate($visaIssueDate = null)
    {
        // validation for constraint: string
        if (!is_null($visaIssueDate) && !is_string($visaIssueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaIssueDate)), __LINE__);
        }
        $this->VisaIssueDate = $visaIssueDate;
        return $this;
    }
    /**
     * Get VisaApplicableCountry value
     * @return string|null
     */
    public function getVisaApplicableCountry()
    {
        return $this->VisaApplicableCountry;
    }
    /**
     * Set VisaApplicableCountry value
     * @param string $visaApplicableCountry
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setVisaApplicableCountry($visaApplicableCountry = null)
    {
        // validation for constraint: string
        if (!is_null($visaApplicableCountry) && !is_string($visaApplicableCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($visaApplicableCountry)), __LINE__);
        }
        $this->VisaApplicableCountry = $visaApplicableCountry;
        return $this;
    }
    /**
     * Get LapChild value
     * @return bool|null
     */
    public function getLapChild()
    {
        return $this->LapChild;
    }
    /**
     * Set LapChild value
     * @param bool $lapChild
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setLapChild($lapChild = null)
    {
        // validation for constraint: boolean
        if (!is_null($lapChild) && !is_bool($lapChild)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lapChild)), __LINE__);
        }
        $this->LapChild = $lapChild;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DOCOEntry_PNRB
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
