<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRequestType.OtherSupplementaryInformation
 * StructType
 * @subpackage Structs
 */
class ServiceRequestType_OtherSupplementaryInformation extends AbstractStructBase
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
     * The PlaceOfBirth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PlaceOfBirth;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The PlaceOfIssue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PlaceOfIssue;
    /**
     * The IssueDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssueDate;
    /**
     * The ApplicableCountry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ApplicableCountry;
    /**
     * The Infant
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Infant;
    /**
     * The HasDocumentData
     * Meta informations extracted from the WSDL
     * - documentation: true if fields DocumentType, IssuePlace, IssueDate available
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $HasDocumentData;
    /**
     * Constructor method for ServiceRequestType.OtherSupplementaryInformation
     * @uses ServiceRequestType_OtherSupplementaryInformation::setType()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setPlaceOfBirth()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setDocumentNumber()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setPlaceOfIssue()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setIssueDate()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setApplicableCountry()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setInfant()
     * @uses ServiceRequestType_OtherSupplementaryInformation::setHasDocumentData()
     * @param string $type
     * @param string $placeOfBirth
     * @param string $documentNumber
     * @param string $placeOfIssue
     * @param string $issueDate
     * @param string $applicableCountry
     * @param bool $infant
     * @param bool $hasDocumentData
     */
    public function __construct($type = null, $placeOfBirth = null, $documentNumber = null, $placeOfIssue = null, $issueDate = null, $applicableCountry = null, $infant = null, $hasDocumentData = null)
    {
        $this
            ->setType($type)
            ->setPlaceOfBirth($placeOfBirth)
            ->setDocumentNumber($documentNumber)
            ->setPlaceOfIssue($placeOfIssue)
            ->setIssueDate($issueDate)
            ->setApplicableCountry($applicableCountry)
            ->setInfant($infant)
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
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
     * Get PlaceOfIssue value
     * @return string|null
     */
    public function getPlaceOfIssue()
    {
        return $this->PlaceOfIssue;
    }
    /**
     * Set PlaceOfIssue value
     * @param string $placeOfIssue
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
     */
    public function setPlaceOfIssue($placeOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($placeOfIssue) && !is_string($placeOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($placeOfIssue)), __LINE__);
        }
        $this->PlaceOfIssue = $placeOfIssue;
        return $this;
    }
    /**
     * Get IssueDate value
     * @return string|null
     */
    public function getIssueDate()
    {
        return $this->IssueDate;
    }
    /**
     * Set IssueDate value
     * @param string $issueDate
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
     */
    public function setIssueDate($issueDate = null)
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issueDate)), __LINE__);
        }
        $this->IssueDate = $issueDate;
        return $this;
    }
    /**
     * Get ApplicableCountry value
     * @return string|null
     */
    public function getApplicableCountry()
    {
        return $this->ApplicableCountry;
    }
    /**
     * Set ApplicableCountry value
     * @param string $applicableCountry
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
     */
    public function setApplicableCountry($applicableCountry = null)
    {
        // validation for constraint: string
        if (!is_null($applicableCountry) && !is_string($applicableCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicableCountry)), __LINE__);
        }
        $this->ApplicableCountry = $applicableCountry;
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRequestType_OtherSupplementaryInformation
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
