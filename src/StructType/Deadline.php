<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Deadline StructType
 * @subpackage Structs
 */
class Deadline extends AbstractStructBase
{
    /**
     * The AbsoluteDeadline
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AbsoluteDeadline;
    /**
     * The OffsetDropTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OffsetDropTime;
    /**
     * The OffsetTimeUnit
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OffsetTimeUnit;
    /**
     * The OffsetUnitMultiplier
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OffsetUnitMultiplier;
    /**
     * Constructor method for Deadline
     * @uses Deadline::setAbsoluteDeadline()
     * @uses Deadline::setOffsetDropTime()
     * @uses Deadline::setOffsetTimeUnit()
     * @uses Deadline::setOffsetUnitMultiplier()
     * @param string $absoluteDeadline
     * @param string $offsetDropTime
     * @param string $offsetTimeUnit
     * @param string $offsetUnitMultiplier
     */
    public function __construct($absoluteDeadline = null, $offsetDropTime = null, $offsetTimeUnit = null, $offsetUnitMultiplier = null)
    {
        $this
            ->setAbsoluteDeadline($absoluteDeadline)
            ->setOffsetDropTime($offsetDropTime)
            ->setOffsetTimeUnit($offsetTimeUnit)
            ->setOffsetUnitMultiplier($offsetUnitMultiplier);
    }
    /**
     * Get AbsoluteDeadline value
     * @return string|null
     */
    public function getAbsoluteDeadline()
    {
        return $this->AbsoluteDeadline;
    }
    /**
     * Set AbsoluteDeadline value
     * @param string $absoluteDeadline
     * @return \Sabre\UpdateReservation\StructType\Deadline
     */
    public function setAbsoluteDeadline($absoluteDeadline = null)
    {
        // validation for constraint: string
        if (!is_null($absoluteDeadline) && !is_string($absoluteDeadline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($absoluteDeadline)), __LINE__);
        }
        $this->AbsoluteDeadline = $absoluteDeadline;
        return $this;
    }
    /**
     * Get OffsetDropTime value
     * @return string|null
     */
    public function getOffsetDropTime()
    {
        return $this->OffsetDropTime;
    }
    /**
     * Set OffsetDropTime value
     * @param string $offsetDropTime
     * @return \Sabre\UpdateReservation\StructType\Deadline
     */
    public function setOffsetDropTime($offsetDropTime = null)
    {
        // validation for constraint: string
        if (!is_null($offsetDropTime) && !is_string($offsetDropTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetDropTime)), __LINE__);
        }
        $this->OffsetDropTime = $offsetDropTime;
        return $this;
    }
    /**
     * Get OffsetTimeUnit value
     * @return string|null
     */
    public function getOffsetTimeUnit()
    {
        return $this->OffsetTimeUnit;
    }
    /**
     * Set OffsetTimeUnit value
     * @param string $offsetTimeUnit
     * @return \Sabre\UpdateReservation\StructType\Deadline
     */
    public function setOffsetTimeUnit($offsetTimeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($offsetTimeUnit) && !is_string($offsetTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetTimeUnit)), __LINE__);
        }
        $this->OffsetTimeUnit = $offsetTimeUnit;
        return $this;
    }
    /**
     * Get OffsetUnitMultiplier value
     * @return string|null
     */
    public function getOffsetUnitMultiplier()
    {
        return $this->OffsetUnitMultiplier;
    }
    /**
     * Set OffsetUnitMultiplier value
     * @param string $offsetUnitMultiplier
     * @return \Sabre\UpdateReservation\StructType\Deadline
     */
    public function setOffsetUnitMultiplier($offsetUnitMultiplier = null)
    {
        // validation for constraint: string
        if (!is_null($offsetUnitMultiplier) && !is_string($offsetUnitMultiplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offsetUnitMultiplier)), __LINE__);
        }
        $this->OffsetUnitMultiplier = $offsetUnitMultiplier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Deadline
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
