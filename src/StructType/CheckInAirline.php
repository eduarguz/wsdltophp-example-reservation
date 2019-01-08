<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckInAirline StructType
 * @subpackage Structs
 */
class CheckInAirline extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: "Code" is used to return the check in airline code associated with the particular flight segment. | "Code" is used to return the check in airline code associated with the particular flight segment. | "Code" is used to return the
     * check in airline code associated with the particular flight segment.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The CompanyShortName
     * Meta informations extracted from the WSDL
     * - documentation: "CompanyShortName" is used to return the check in airline name. | "CompanyShortName" is used to return the check in airline name. | "CompanyShortName" is used to return the check in airline name.
     * - use: optional
     * @var string
     */
    public $CompanyShortName;
    /**
     * Constructor method for CheckInAirline
     * @uses CheckInAirline::setCode()
     * @uses CheckInAirline::setCompanyShortName()
     * @param string $code
     * @param string $companyShortName
     */
    public function __construct($code = null, $companyShortName = null)
    {
        $this
            ->setCode($code)
            ->setCompanyShortName($companyShortName);
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
     * @return \Sabre\UpdateReservation\StructType\CheckInAirline
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
     * @return \Sabre\UpdateReservation\StructType\CheckInAirline
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CheckInAirline
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
