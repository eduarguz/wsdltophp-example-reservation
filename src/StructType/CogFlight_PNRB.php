<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CogFlight.PNRB StructType
 * @subpackage Structs
 */
class CogFlight_PNRB extends AbstractStructBase
{
    /**
     * The first
     * @var bool
     */
    public $first;
    /**
     * The secondary
     * @var bool
     */
    public $secondary;
    /**
     * Constructor method for CogFlight.PNRB
     * @uses CogFlight_PNRB::setFirst()
     * @uses CogFlight_PNRB::setSecondary()
     * @param bool $first
     * @param bool $secondary
     */
    public function __construct($first = null, $secondary = null)
    {
        $this
            ->setFirst($first)
            ->setSecondary($secondary);
    }
    /**
     * Get first value
     * @return bool|null
     */
    public function getFirst()
    {
        return $this->first;
    }
    /**
     * Set first value
     * @param bool $first
     * @return \Sabre\UpdateReservation\StructType\CogFlight_PNRB
     */
    public function setFirst($first = null)
    {
        // validation for constraint: boolean
        if (!is_null($first) && !is_bool($first)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($first)), __LINE__);
        }
        $this->first = $first;
        return $this;
    }
    /**
     * Get secondary value
     * @return bool|null
     */
    public function getSecondary()
    {
        return $this->secondary;
    }
    /**
     * Set secondary value
     * @param bool $secondary
     * @return \Sabre\UpdateReservation\StructType\CogFlight_PNRB
     */
    public function setSecondary($secondary = null)
    {
        // validation for constraint: boolean
        if (!is_null($secondary) && !is_bool($secondary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($secondary)), __LINE__);
        }
        $this->secondary = $secondary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CogFlight_PNRB
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
