<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentFlyerType StructType
 * @subpackage Structs
 */
class FrequentFlyerType extends AbstractStructBase
{
    /**
     * The tier
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $tier;
    /**
     * The carrier
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $carrier;
    /**
     * Constructor method for FrequentFlyerType
     * @uses FrequentFlyerType::setTier()
     * @uses FrequentFlyerType::setCarrier()
     * @param int $tier
     * @param string $carrier
     */
    public function __construct($tier = null, $carrier = null)
    {
        $this
            ->setTier($tier)
            ->setCarrier($carrier);
    }
    /**
     * Get tier value
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }
    /**
     * Set tier value
     * @param int $tier
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerType
     */
    public function setTier($tier = null)
    {
        // validation for constraint: int
        if (!is_null($tier) && !is_numeric($tier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tier)), __LINE__);
        }
        $this->tier = $tier;
        return $this;
    }
    /**
     * Get carrier value
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerType
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerType
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
