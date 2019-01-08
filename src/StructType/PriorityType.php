<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriorityType StructType
 * @subpackage Structs
 */
class PriorityType extends AbstractStructBase
{
    /**
     * The priority
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $priority;
    /**
     * Constructor method for PriorityType
     * @uses PriorityType::setPriority()
     * @param int $priority
     */
    public function __construct($priority = null)
    {
        $this
            ->setPriority($priority);
    }
    /**
     * Get priority value
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Sabre\UpdateReservation\StructType\PriorityType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !is_numeric($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriorityType
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
