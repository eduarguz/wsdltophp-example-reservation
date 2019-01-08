<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRequestType.TravelDocument StructType
 * @subpackage Structs
 */
class ServiceRequestType_TravelDocument extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The DocumentIssueCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentIssueCountry;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The DocumentNationalityCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNationalityCountry;
    /**
     * The DocumentExpirationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentExpirationDate;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DateOfBirth;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - documentation: Middle name or Initial or Second name
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MiddleName;
    /**
     * The Infant
     * Meta informations extracted from the WSDL
     * - documentation: Infant if gender I or FI or MI
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Infant;
    /**
     * The PrimaryDocHolderInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PrimaryDocHolderInd;
    /**
     * The HasDocumentData
     * Meta informations extracted from the WSDL
     * - documentation: true if DocumentType, FirstName, LastName, IssueCountry) fields available
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $HasDocumentData;
    /**
     * Constructor method for ServiceRequestType.TravelDocument
     * @uses ServiceRequestType_TravelDocument::setType()
     * @uses ServiceRequestType_TravelDocument::setDocumentIssueCountry()
     * @uses ServiceRequestType_TravelDocument::setDocumentNumber()
     * @uses ServiceRequestType_TravelDocument::setDocumentNationalityCountry()
     * @uses ServiceRequestType_TravelDocument::setDocumentExpirationDate()
     * @uses ServiceRequestType_TravelDocument::setDateOfBirth()
     * @uses ServiceRequestType_TravelDocument::setGender()
     * @uses ServiceRequestType_TravelDocument::setLastName()
     * @uses ServiceRequestType_TravelDocument::setFirstName()
     * @uses ServiceRequestType_TravelDocument::setMiddleName()
     * @uses ServiceRequestType_TravelDocument::setInfant()
     * @uses ServiceRequestType_TravelDocument::setPrimaryDocHolderInd()
     * @uses ServiceRequestType_TravelDocument::setHasDocumentData()
     * @param string $type
     * @param string $documentIssueCountry
     * @param string $documentNumber
     * @param string $documentNationalityCountry
     * @param string $documentExpirationDate
     * @param string $dateOfBirth
     * @param string $gender
     * @param string $lastName
     * @param string $firstName
     * @param string $middleName
     * @param bool $infant
     * @param bool $primaryDocHolderInd
     * @param bool $hasDocumentData
     */
    public function __construct($type = null, $documentIssueCountry = null, $documentNumber = null, $documentNationalityCountry = null, $documentExpirationDate = null, $dateOfBirth = null, $gender = null, $lastName = null, $firstName = null, $middleName = null, $infant = null, $primaryDocHolderInd = null, $hasDocumentData = null)
    {
        $this
            ->setType($type)
            ->setDocumentIssueCountry($documentIssueCountry)
            ->setDocumentNumber($documentNumber)
            ->setDocumentNationalityCountry($documentNationalityCountry)
            ->setDocumentExpirationDate($documentExpirationDate)
            ->setDateOfBirth($dateOfBirth)
            ->setGender($gender)
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setMiddleName($middleName)
            ->setInfant($infant)
            ->setPrimaryDocHolderInd($primaryDocHolderInd)
            ->setHasDocumentData($hasDocumentData);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get DocumentIssueCountry value
     * @return string|null
     */
    public function getDocumentIssueCountry()
    {
        return $this->DocumentIssueCountry;
    }
    /**
     * Set DocumentIssueCountry value
     * @param string $documentIssueCountry
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setDocumentIssueCountry($documentIssueCountry = null)
    {
        // validation for constraint: string
        if (!is_null($documentIssueCountry) && !is_string($documentIssueCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentIssueCountry)), __LINE__);
        }
        $this->DocumentIssueCountry = $documentIssueCountry;
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
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
     * @param string $gender
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
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
     * Get Infant value
     * @return bool|null
     */
    public function getInfant()
    {
        return $this->Infant;
    }
    /**
     * Set Infant value
     * @param bool $infant
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setInfant($infant = null)
    {
        // validation for constraint: boolean
        if (!is_null($infant) && !is_bool($infant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($infant)), __LINE__);
        }
        $this->Infant = $infant;
        return $this;
    }
    /**
     * Get PrimaryDocHolderInd value
     * @return bool|null
     */
    public function getPrimaryDocHolderInd()
    {
        return $this->PrimaryDocHolderInd;
    }
    /**
     * Set PrimaryDocHolderInd value
     * @param bool $primaryDocHolderInd
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setPrimaryDocHolderInd($primaryDocHolderInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryDocHolderInd) && !is_bool($primaryDocHolderInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryDocHolderInd)), __LINE__);
        }
        $this->PrimaryDocHolderInd = $primaryDocHolderInd;
        return $this;
    }
    /**
     * Get HasDocumentData value
     * @return bool|null
     */
    public function getHasDocumentData()
    {
        return $this->HasDocumentData;
    }
    /**
     * Set HasDocumentData value
     * @param bool $hasDocumentData
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
     */
    public function setHasDocumentData($hasDocumentData = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasDocumentData) && !is_bool($hasDocumentData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasDocumentData)), __LINE__);
        }
        $this->HasDocumentData = $hasDocumentData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_TravelDocument
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
