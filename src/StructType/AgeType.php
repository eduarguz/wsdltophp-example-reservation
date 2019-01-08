<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgeType StructType
 * @subpackage Structs
 */
class AgeType extends AbstractStructBase
{
    /**
     * The years
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $years;
    /**
     * Constructor method for AgeType
     * @uses AgeType::setYears()
     * @param int $years
     */
    public function __construct($years = null)
    {
        $this
            ->setYears($years);
    }
    /**
     * Get years value
     * @return int
     */
    public function getYears()
    {
        return $this->years;
    }
    /**
     * Set years value
     * @param int $years
     * @return \Sabre\UpdateReservation\StructType\AgeType
     */
    public function setYears($years = null)
    {
        // validation for constraint: int
        if (!is_null($years) && !is_numeric($years)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($years)), __LINE__);
        }
        $this->years = $years;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AgeType
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
