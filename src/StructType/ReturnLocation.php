<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: A code to identify the return location, along with an optional code context. | Code and optional string to describe a location point.
 * @subpackage Structs
 */
class ReturnLocation extends AbstractStructBase
{
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a company by the company code.
     * - minOccurs: 0
     * @var string
     */
    public $LocationCode;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     * - minOccurs: 0
     * @var string
     */
    public $CodeContext;
    /**
     * Constructor method for ReturnLocation
     * @uses ReturnLocation::setLocationCode()
     * @uses ReturnLocation::setCodeContext()
     * @param string $locationCode
     * @param string $codeContext
     */
    public function __construct($locationCode = null, $codeContext = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setCodeContext($codeContext);
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Sabre\UpdateReservation\StructType\ReturnLocation
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
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
     * @return \Sabre\UpdateReservation\StructType\ReturnLocation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReturnLocation
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
