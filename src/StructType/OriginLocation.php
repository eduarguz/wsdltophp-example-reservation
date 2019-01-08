<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Associated Itinerary start city. Ex."MEL"
 * @subpackage Structs
 */
class OriginLocation extends AbstractStructBase
{
    /**
     * The locationCode
     * Meta informations extracted from the WSDL
     * - documentation: "LocationCode" is used to return the departure location code associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $locationCode;
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
     * Constructor method for OriginLocation
     * @uses OriginLocation::setLocationCode()
     * @uses OriginLocation::setLocationCode_1()
     * @uses OriginLocation::setCodeContext()
     * @uses OriginLocation::setPoint()
     * @param string $locationCode
     * @param string $locationCode
     * @param string $codeContext
     * @param string $point
     */
    public function __construct($locationCode = null, $locationCode_1 = null, $codeContext = null, $point = null)
    {
        $this
            ->setLocationCode($locationCode)
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
     * @return \Sabre\UpdateReservation\StructType\OriginLocation
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
     * @return \Sabre\UpdateReservation\StructType\OriginLocation
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
     * @return \Sabre\UpdateReservation\StructType\OriginLocation
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
     * @return \Sabre\UpdateReservation\StructType\OriginLocation
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
     * @return \Sabre\UpdateReservation\StructType\OriginLocation
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
