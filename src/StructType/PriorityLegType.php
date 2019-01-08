<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriorityLegType StructType
 * @subpackage Structs
 */
class PriorityLegType extends AbstractStructBase
{
    /**
     * The priority
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $priority;
    /**
     * The leg
     * Meta informations extracted from the WSDL
     * - documentation: Which leg is most significant one? If inconclusive continue comparisons segment by segment starting from the beginning of itinerary
     * @var int
     */
    public $leg;
    /**
     * Constructor method for PriorityLegType
     * @uses PriorityLegType::setPriority()
     * @uses PriorityLegType::setLeg()
     * @param int $priority
     * @param int $leg
     */
    public function __construct($priority = null, $leg = null)
    {
        $this
            ->setPriority($priority)
            ->setLeg($leg);
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
     * @return \Sabre\UpdateReservation\StructType\PriorityLegType
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
     * Get leg value
     * @return int|null
     */
    public function getLeg()
    {
        return $this->leg;
    }
    /**
     * Set leg value
     * @param int $leg
     * @return \Sabre\UpdateReservation\StructType\PriorityLegType
     */
    public function setLeg($leg = null)
    {
        // validation for constraint: int
        if (!is_null($leg) && !is_numeric($leg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leg)), __LINE__);
        }
        $this->leg = $leg;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriorityLegType
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
