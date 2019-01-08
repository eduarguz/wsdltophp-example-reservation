<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vendor StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates service provider like "AA" or "MMGR"(Merchandising manager. Ex."EY" | Visa vendor
 * - minOccurs: 0
 * - type: CommonString
 * @subpackage Structs
 */
class Vendor extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Vendor name
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: Ski vendor code | "code" is used to return the vehicle vendor code. | "Code" is used to return the vendor code associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $code;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Ski vendor name
     * @var string
     */
    public $name;
    /**
     * The companyShortName
     * Meta informations extracted from the WSDL
     * - documentation: "companyShortName" is used to return the company name associated with the particular vehicle vendor code. | "CompanyShortName" is used to return the vendor's name associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $companyShortName;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Company marketing the policy. Ex."QF" | Company marketing the policy. Ex."QF"
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for Vendor
     * @uses Vendor::setName()
     * @uses Vendor::setCode()
     * @uses Vendor::setName_1()
     * @uses Vendor::setCompanyShortName()
     * @uses Vendor::setCode_1()
     * @param string $name
     * @param string $code
     * @param string $name
     * @param string $companyShortName
     * @param string $code
     */
    public function __construct($name = null, $code = null, $name_1 = null, $companyShortName = null, $code_1 = null)
    {
        $this
            ->setName($name)
            ->setCode($code)
            ->setName_1($name_1)
            ->setCompanyShortName($companyShortName)
            ->setCode_1($code_1);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Vendor
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Vendor
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName_1()
    {
        return $this->name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Vendor
     */
    public function setName_1($name_1 = null)
    {
        // validation for constraint: string
        if (!is_null($name_1) && !is_string($name_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name_1)), __LINE__);
        }
        $this->name = $name_1;
        return $this;
    }
    /**
     * Get companyShortName value
     * @return string|null
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }
    /**
     * Set companyShortName value
     * @param string $companyShortName
     * @return \Sabre\UpdateReservation\StructType\Vendor
     */
    public function setCompanyShortName($companyShortName = null)
    {
        // validation for constraint: string
        if (!is_null($companyShortName) && !is_string($companyShortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyShortName)), __LINE__);
        }
        $this->companyShortName = $companyShortName;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode_1()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Vendor
     */
    public function setCode_1($code_1 = null)
    {
        // validation for constraint: string
        if (!is_null($code_1) && !is_string($code_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code_1)), __LINE__);
        }
        $this->Code = $code_1;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Vendor
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
