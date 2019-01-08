<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOCSEntry.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Formats: 3DOCS(segment number)/(doc type)/(doc issue country)/(doc #)/(doc nationality country)/ (DOB)/(gender)/(doc exp date)/(last name)/(first name)/(middle name or initial)/ H-(pnr name number) * enter passport, or other various
 * document types, and associated info 3DOCS2/P/FR/123456789/FR/14AUG1947/M/30SEP2011/DELACROIX/DANIEL/STEPHANE/H-2.1 NOTE: You cannot include Visa information with this format; you must use the DOCO formats for Visa * enter passenger info with multiple
 * segment selection 3DOCS1,3/P/DE/09876543211234/DE/25APR1949/F/04JUL2009/NGUYEN/LAN/M-3.1 * enter passenger info, indicating a multiple passenger passport with a middle initial 3DOCS/P/US/93845039290293/US/26FEB1974/M/10OCT2010/ENGLISH/MICHAEL/R/H-1.1
 * * enter the passenger info using mandatory fields only 3DOCS/P/US/2345928398234/US/12JUN1948/F/01JAN2011/SMITH JONES/JANICE-1 * delete a DOCS entry 3 (line/item)¤ 37¤
 * @subpackage Structs
 */
class DOCSEntry_PNRB extends AbstractStructBase
{
    /**
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - documentation: Code indicating the type of document the passenger is using for identification purposes. Ex."P"
     * - minOccurs: 0
     * @var string
     */
    public $DocumentType;
    /**
     * The CountryOfIssue
     * Meta informations extracted from the WSDL
     * - documentation: either 2 or 3 chars
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfIssue;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - documentation: max 15 chars
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The DocumentNationalityCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNationalityCountry;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - documentation: format ddmmmyyyy or ddmmmyy
     * - minOccurs: 0
     * @var string
     */
    public $DateOfBirth;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - documentation: M = Male F = Female MI = Male traveling with an infant FI = Female traveling with an infant U = Unknown at the time of booking
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The DocumentExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: format ddmmmyyyy or ddmmmyy
     * - minOccurs: 0
     * @var string
     */
    public $DocumentExpirationDate;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - documentation: max 30 chars
     * - minOccurs: 0
     * @var string
     */
    public $Surname;
    /**
     * The Forename
     * Meta informations extracted from the WSDL
     * - documentation: max 30 chars
     * - minOccurs: 0
     * @var string
     */
    public $Forename;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - documentation: max 30 chars
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The PrimaryHolder
     * Meta informations extracted from the WSDL
     * - documentation: indicates if this document belongs to a passenger other than the passenger for whom the SSR is being sent. Ex."FALSE"
     * - minOccurs: 0
     * @var bool
     */
    public $PrimaryHolder;
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
     * - documentation: Indication of the status of the SSR notification. A value of 'HK' indicates the intended carrier has received the message and has confirmed its contents. Ex."HK"
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers for whom the Special Service Request is being requested. Ex."1" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberInParty;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier OSI/SSR is being sent to. Ex."EY"
     * - minOccurs: 0
     * @var string
     */
    public $VendorCode;
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
     * Constructor method for DOCSEntry.PNRB
     * @uses DOCSEntry_PNRB::setDocumentType()
     * @uses DOCSEntry_PNRB::setCountryOfIssue()
     * @uses DOCSEntry_PNRB::setDocumentNumber()
     * @uses DOCSEntry_PNRB::setDocumentNationalityCountry()
     * @uses DOCSEntry_PNRB::setDateOfBirth()
     * @uses DOCSEntry_PNRB::setGender()
     * @uses DOCSEntry_PNRB::setDocumentExpirationDate()
     * @uses DOCSEntry_PNRB::setSurname()
     * @uses DOCSEntry_PNRB::setForename()
     * @uses DOCSEntry_PNRB::setMiddleName()
     * @uses DOCSEntry_PNRB::setPrimaryHolder()
     * @uses DOCSEntry_PNRB::setFreeText()
     * @uses DOCSEntry_PNRB::setActionCode()
     * @uses DOCSEntry_PNRB::setNumberInParty()
     * @uses DOCSEntry_PNRB::setVendorCode()
     * @uses DOCSEntry_PNRB::setId()
     * @uses DOCSEntry_PNRB::setType()
     * @uses DOCSEntry_PNRB::setOp()
     * @param string $documentType
     * @param string $countryOfIssue
     * @param string $documentNumber
     * @param string $documentNationalityCountry
     * @param string $dateOfBirth
     * @param string $gender
     * @param string $documentExpirationDate
     * @param string $surname
     * @param string $forename
     * @param string $middleName
     * @param bool $primaryHolder
     * @param string $freeText
     * @param string $actionCode
     * @param int $numberInParty
     * @param string $vendorCode
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($documentType = null, $countryOfIssue = null, $documentNumber = null, $documentNationalityCountry = null, $dateOfBirth = null, $gender = null, $documentExpirationDate = null, $surname = null, $forename = null, $middleName = null, $primaryHolder = null, $freeText = null, $actionCode = null, $numberInParty = null, $vendorCode = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setDocumentType($documentType)
            ->setCountryOfIssue($countryOfIssue)
            ->setDocumentNumber($documentNumber)
            ->setDocumentNationalityCountry($documentNationalityCountry)
            ->setDateOfBirth($dateOfBirth)
            ->setGender($gender)
            ->setDocumentExpirationDate($documentExpirationDate)
            ->setSurname($surname)
            ->setForename($forename)
            ->setMiddleName($middleName)
            ->setPrimaryHolder($primaryHolder)
            ->setFreeText($freeText)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setVendorCode($vendorCode)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
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
     * @param string $documentType
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentType)), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get CountryOfIssue value
     * @return string|null
     */
    public function getCountryOfIssue()
    {
        return $this->CountryOfIssue;
    }
    /**
     * Set CountryOfIssue value
     * @param string $countryOfIssue
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setCountryOfIssue($countryOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfIssue) && !is_string($countryOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfIssue)), __LINE__);
        }
        $this->CountryOfIssue = $countryOfIssue;
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * Get DocumentNationalityCountry value
     * @return string|null
     */
    public function getDocumentNationalityCountry()
    {
        return $this->DocumentNationalityCountry;
    }
    /**
     * Set DocumentNationalityCountry value
     * @param string $documentNationalityCountry
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setDocumentNationalityCountry($documentNationalityCountry = null)
    {
        // validation for constraint: string
        if (!is_null($documentNationalityCountry) && !is_string($documentNationalityCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNationalityCountry)), __LINE__);
        }
        $this->DocumentNationalityCountry = $documentNationalityCountry;
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @uses \Sabre\UpdateReservation\EnumType\GenderDOCS_Entry_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\GenderDOCS_Entry_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gender
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setGender($gender = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\GenderDOCS_Entry_PNRB::valueIsValid($gender)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gender, implode(', ', \Sabre\UpdateReservation\EnumType\GenderDOCS_Entry_PNRB::getValidValues())), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get DocumentExpirationDate value
     * @return string|null
     */
    public function getDocumentExpirationDate()
    {
        return $this->DocumentExpirationDate;
    }
    /**
     * Set DocumentExpirationDate value
     * @param string $documentExpirationDate
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setDocumentExpirationDate($documentExpirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($documentExpirationDate) && !is_string($documentExpirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentExpirationDate)), __LINE__);
        }
        $this->DocumentExpirationDate = $documentExpirationDate;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get Forename value
     * @return string|null
     */
    public function getForename()
    {
        return $this->Forename;
    }
    /**
     * Set Forename value
     * @param string $forename
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setForename($forename = null)
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forename)), __LINE__);
        }
        $this->Forename = $forename;
        return $this;
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $middleName
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setMiddleName($middleName = null)
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middleName)), __LINE__);
        }
        $this->MiddleName = $middleName;
        return $this;
    }
    /**
     * Get PrimaryHolder value
     * @return bool|null
     */
    public function getPrimaryHolder()
    {
        return $this->PrimaryHolder;
    }
    /**
     * Set PrimaryHolder value
     * @param bool $primaryHolder
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setPrimaryHolder($primaryHolder = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryHolder) && !is_bool($primaryHolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryHolder)), __LINE__);
        }
        $this->PrimaryHolder = $primaryHolder;
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\DOCSEntry_PNRB
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
