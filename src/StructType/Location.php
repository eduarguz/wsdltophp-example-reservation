<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 * Meta informations extracted from the WSDL
 * - documentation: Location information
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
    /**
     * The Regions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Regions
     */
    public $Regions;
    /**
     * The Resort
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Resort
     */
    public $Resort;
    /**
     * The cityCode
     * Meta informations extracted from the WSDL
     * - documentation: Location city code e.g. DFW
     * - use: optional
     * @var string
     */
    public $cityCode;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Location name if city code unavailable
     * - use: optional
     * @var string
     */
    public $name;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $LocationCode;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - documentation: "Origin" is used to return first city of particular Fare Component.
     * - use: optional
     * @var string
     */
    public $Origin;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: "Destination" is used to return last city of particular Fare Component.
     * - use: optional
     * @var string
     */
    public $Destination;
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
     * Constructor method for Location
     * @uses Location::setRegions()
     * @uses Location::setResort()
     * @uses Location::setCityCode()
     * @uses Location::setName()
     * @uses Location::setLocationCode()
     * @uses Location::setOrigin()
     * @uses Location::setDestination()
     * @uses Location::setCodeContext()
     * @uses Location::setPoint()
     * @param \Sabre\UpdateReservation\StructType\Regions $regions
     * @param \Sabre\UpdateReservation\StructType\Resort $resort
     * @param string $cityCode
     * @param string $name
     * @param string $locationCode
     * @param string $origin
     * @param string $destination
     * @param string $codeContext
     * @param string $point
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Regions $regions = null, \Sabre\UpdateReservation\StructType\Resort $resort = null, $cityCode = null, $name = null, $locationCode = null, $origin = null, $destination = null, $codeContext = null, $point = null)
    {
        $this
            ->setRegions($regions)
            ->setResort($resort)
            ->setCityCode($cityCode)
            ->setName($name)
            ->setLocationCode($locationCode)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCodeContext($codeContext)
            ->setPoint($point);
    }
    /**
     * Get Regions value
     * @return \Sabre\UpdateReservation\StructType\Regions|null
     */
    public function getRegions()
    {
        return $this->Regions;
    }
    /**
     * Set Regions value
     * @param \Sabre\UpdateReservation\StructType\Regions $regions
     * @return \Sabre\UpdateReservation\StructType\Location
     */
    public function setRegions(\Sabre\UpdateReservation\StructType\Regions $regions = null)
    {
        $this->Regions = $regions;
        return $this;
    }
    /**
     * Get Resort value
     * @return \Sabre\UpdateReservation\StructType\Resort|null
     */
    public function getResort()
    {
        return $this->Resort;
    }
    /**
     * Set Resort value
     * @param \Sabre\UpdateReservation\StructType\Resort $resort
     * @return \Sabre\UpdateReservation\StructType\Location
     */
    public function setResort(\Sabre\UpdateReservation\StructType\Resort $resort = null)
    {
        $this->Resort = $resort;
        return $this;
    }
    /**
     * Get cityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }
    /**
     * Set cityCode value
     * @param string $cityCode
     * @return \Sabre\UpdateReservation\StructType\Location
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->cityCode = $cityCode;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Location
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\Location
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
     * Get Origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Sabre\UpdateReservation\StructType\Location
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origin)), __LINE__);
        }
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Sabre\UpdateReservation\StructType\Location
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        $this->Destination = $destination;
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
     * @return \Sabre\UpdateReservation\StructType\Location
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
     * @return \Sabre\UpdateReservation\StructType\Location
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
     * @return \Sabre\UpdateReservation\StructType\Location
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
