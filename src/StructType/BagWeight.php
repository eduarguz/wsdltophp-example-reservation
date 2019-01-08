<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BagWeight StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to hold the weight of the Bag for baggage ancillary types | Used to hold the weight of the Bag for baggage ancillary types
 * - minOccurs: 0
 * @subpackage Structs
 */
class BagWeight extends AbstractStructBase
{
    /**
     * The _
     * @var int
     */
    public $_;
    /**
     * The Unit
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Unit;
    /**
     * Constructor method for BagWeight
     * @uses BagWeight::set_()
     * @uses BagWeight::setUnit()
     * @param int $_
     * @param string $unit
     */
    public function __construct($_ = null, $unit = null)
    {
        $this
            ->set_($_)
            ->setUnit($unit);
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \Sabre\UpdateReservation\StructType\BagWeight
     */
    public function set_($_ = null)
    {
        // validation for constraint: int
        if (!is_null($_) && !is_numeric($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param string $unit
     * @return \Sabre\UpdateReservation\StructType\BagWeight
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unit)), __LINE__);
        }
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BagWeight
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
