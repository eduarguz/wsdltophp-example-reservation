<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ODMarketType StructType
 * @subpackage Structs
 */
class ODMarketType extends AbstractStructBase
{
    /**
     * The destination
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $destination;
    /**
     * The destinationLevel
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $destinationLevel;
    /**
     * The origin
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $origin;
    /**
     * The originLevel
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $originLevel;
    /**
     * Constructor method for ODMarketType
     * @uses ODMarketType::setDestination()
     * @uses ODMarketType::setDestinationLevel()
     * @uses ODMarketType::setOrigin()
     * @uses ODMarketType::setOriginLevel()
     * @param string $destination
     * @param int $destinationLevel
     * @param string $origin
     * @param int $originLevel
     */
    public function __construct($destination = null, $destinationLevel = null, $origin = null, $originLevel = null)
    {
        $this
            ->setDestination($destination)
            ->setDestinationLevel($destinationLevel)
            ->setOrigin($origin)
            ->setOriginLevel($originLevel);
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
    /**
     * Get destinationLevel value
     * @return int|null
     */
    public function getDestinationLevel()
    {
        return $this->destinationLevel;
    }
    /**
     * Set destinationLevel value
     * @param int $destinationLevel
     * @return \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public function setDestinationLevel($destinationLevel = null)
    {
        // validation for constraint: maxInclusive
        if ($destinationLevel > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $destinationLevel), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($destinationLevel < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $destinationLevel), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($destinationLevel) && !is_numeric($destinationLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($destinationLevel)), __LINE__);
        }
        $this->destinationLevel = $destinationLevel;
        return $this;
    }
    /**
     * Get origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        return $this;
    }
    /**
     * Get originLevel value
     * @return int|null
     */
    public function getOriginLevel()
    {
        return $this->originLevel;
    }
    /**
     * Set originLevel value
     * @param int $originLevel
     * @return \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public function setOriginLevel($originLevel = null)
    {
        // validation for constraint: maxInclusive
        if ($originLevel > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $originLevel), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($originLevel < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $originLevel), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($originLevel) && !is_numeric($originLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originLevel)), __LINE__);
        }
        $this->originLevel = $originLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ODMarketType
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
