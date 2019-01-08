<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationLocation StructType
 * @subpackage Structs
 */
class DestinationLocation extends AbstractStructBase
{
    /**
     * The locationCode
     * Meta informations extracted from the WSDL
     * - documentation: "LocationCode" is used to return the arrival location code associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $locationCode;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - documentation: "countryCode" is used to return the arrival country associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $countryCode;
    /**
     * The areaCode
     * Meta informations extracted from the WSDL
     * - documentation: "area" is used to return the arrival area associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $areaCode;
    /**
     * The areaName
     * Meta informations extracted from the WSDL
     * - documentation: "area" is used to return the arrival area associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $areaName;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: International or domestic "type" of destination.
     * - use: optional
     * @var string
     */
    public $type;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $LocationCode;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CodeContext;
    /**
     * The Point
     * @var string
     */
    public $Point;
    /**
     * Constructor method for DestinationLocation
     * @uses DestinationLocation::setLocationCode()
     * @uses DestinationLocation::setCountryCode()
     * @uses DestinationLocation::setAreaCode()
     * @uses DestinationLocation::setAreaName()
     * @uses DestinationLocation::setType()
     * @uses DestinationLocation::setLocationCode_1()
     * @uses DestinationLocation::setCodeContext()
     * @uses DestinationLocation::setPoint()
     * @param string $locationCode
     * @param string $countryCode
     * @param string $areaCode
     * @param string $areaName
     * @param string $type
     * @param string $locationCode
     * @param string $codeContext
     * @param string $point
     */
    public function __construct($locationCode = null, $countryCode = null, $areaCode = null, $areaName = null, $type = null, $locationCode_1 = null, $codeContext = null, $point = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setCountryCode($countryCode)
            ->setAreaCode($areaCode)
            ->setAreaName($areaName)
            ->setType($type)
            ->setLocationCode_1($locationCode_1)
            ->setCodeContext($codeContext)
            ->setPoint($point);
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->locationCode = $locationCode;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode()
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $areaCode
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setAreaCode($areaCode = null)
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     * Get areaName value
     * @return string|null
     */
    public function getAreaName()
    {
        return $this->areaName;
    }
    /**
     * Set areaName value
     * @param string $areaName
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setAreaName($areaName = null)
    {
        // validation for constraint: string
        if (!is_null($areaName) && !is_string($areaName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($areaName)), __LINE__);
        }
        $this->areaName = $areaName;
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
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode_1()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setLocationCode_1($locationCode_1 = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode_1) && !is_string($locationCode_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode_1)), __LINE__);
        }
        $this->LocationCode = $locationCode_1;
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
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
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
     * Get Point value
     * @return string|null
     */
    public function getPoint()
    {
        return $this->Point;
    }
    /**
     * Set Point value
     * @param string $point
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
     */
    public function setPoint($point = null)
    {
        // validation for constraint: string
        if (!is_null($point) && !is_string($point)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($point)), __LINE__);
        }
        $this->Point = $point;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation
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
