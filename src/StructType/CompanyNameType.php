<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyNameType StructType
 * @subpackage Structs
 */
class CompanyNameType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The CompanyShortName
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide the company common name.
     * @var string
     */
    public $CompanyShortName;
    /**
     * The TravelSector
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Travel Sector (TVS). | Refer to OTA Code List Travel Sector (TVS).
     * @var string
     */
    public $TravelSector;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a company by the company code.
     * @var string
     */
    public $Code;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     * @var string
     */
    public $CodeContext;
    /**
     * The Division
     * Meta informations extracted from the WSDL
     * - documentation: The division name or ID with which the contact is associated.
     * @var string
     */
    public $Division;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - documentation: The department name or ID with which the contact is associated.
     * @var string
     */
    public $Department;
    /**
     * Constructor method for CompanyNameType
     * @uses CompanyNameType::set_()
     * @uses CompanyNameType::setCompanyShortName()
     * @uses CompanyNameType::setTravelSector()
     * @uses CompanyNameType::setCode()
     * @uses CompanyNameType::setCodeContext()
     * @uses CompanyNameType::setDivision()
     * @uses CompanyNameType::setDepartment()
     * @param string $_
     * @param string $companyShortName
     * @param string $travelSector
     * @param string $code
     * @param string $codeContext
     * @param string $division
     * @param string $department
     */
    public function __construct($_ = null, $companyShortName = null, $travelSector = null, $code = null, $codeContext = null, $division = null, $department = null)
    {
        $this
            ->set_($_)
            ->setCompanyShortName($companyShortName)
            ->setTravelSector($travelSector)
            ->setCode($code)
            ->setCodeContext($codeContext)
            ->setDivision($division)
            ->setDepartment($department);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get CompanyShortName value
     * @return string|null
     */
    public function getCompanyShortName()
    {
        return $this->CompanyShortName;
    }
    /**
     * Set CompanyShortName value
     * @param string $companyShortName
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function setCompanyShortName($companyShortName = null)
    {
        // validation for constraint: string
        if (!is_null($companyShortName) && !is_string($companyShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyShortName)), __LINE__);
        }
        $this->CompanyShortName = $companyShortName;
        return $this;
    }
    /**
     * Get TravelSector value
     * @return string|null
     */
    public function getTravelSector()
    {
        return $this->TravelSector;
    }
    /**
     * Set TravelSector value
     * @param string $travelSector
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function setTravelSector($travelSector = null)
    {
        // validation for constraint: string
        if (!is_null($travelSector) && !is_string($travelSector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelSector)), __LINE__);
        }
        $this->TravelSector = $travelSector;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param string $codeContext
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get Division value
     * @return string|null
     */
    public function getDivision()
    {
        return $this->Division;
    }
    /**
     * Set Division value
     * @param string $division
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function setDivision($division = null)
    {
        // validation for constraint: string
        if (!is_null($division) && !is_string($division)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($division)), __LINE__);
        }
        $this->Division = $division;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType
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
