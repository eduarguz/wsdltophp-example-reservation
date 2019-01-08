<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickUpLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: A code to identify the pick up location, along with an optional code context. | Code and optional string to describe a location point.
 * @subpackage Structs
 */
class PickUpLocation extends AbstractStructBase
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
     * The LocationName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a company by the company code.
     * - minOccurs: 0
     * @var string
     */
    public $LocationName;
    /**
     * The ServiceLocationName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceLocationName;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     * - minOccurs: 0
     * @var string
     */
    public $CodeContext;
    /**
     * Constructor method for PickUpLocation
     * @uses PickUpLocation::setLocationCode()
     * @uses PickUpLocation::setLocationName()
     * @uses PickUpLocation::setServiceLocationName()
     * @uses PickUpLocation::setCodeContext()
     * @param string $locationCode
     * @param string $locationName
     * @param string $serviceLocationName
     * @param string $codeContext
     */
    public function __construct($locationCode = null, $locationName = null, $serviceLocationName = null, $codeContext = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setLocationName($locationName)
            ->setServiceLocationName($serviceLocationName)
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
     * @return \Sabre\UpdateReservation\StructType\PickUpLocation
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
     * Get LocationName value
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }
    /**
     * Set LocationName value
     * @param string $locationName
     * @return \Sabre\UpdateReservation\StructType\PickUpLocation
     */
    public function setLocationName($locationName = null)
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationName)), __LINE__);
        }
        $this->LocationName = $locationName;
        return $this;
    }
    /**
     * Get ServiceLocationName value
     * @return string|null
     */
    public function getServiceLocationName()
    {
        return $this->ServiceLocationName;
    }
    /**
     * Set ServiceLocationName value
     * @param string $serviceLocationName
     * @return \Sabre\UpdateReservation\StructType\PickUpLocation
     */
    public function setServiceLocationName($serviceLocationName = null)
    {
        // validation for constraint: string
        if (!is_null($serviceLocationName) && !is_string($serviceLocationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceLocationName)), __LINE__);
        }
        $this->ServiceLocationName = $serviceLocationName;
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
     * @return \Sabre\UpdateReservation\StructType\PickUpLocation
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
     * @return \Sabre\UpdateReservation\StructType\PickUpLocation
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
