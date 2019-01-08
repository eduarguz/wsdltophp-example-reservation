<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Allowance StructType
 * @subpackage Structs
 */
class Allowance extends AbstractStructBase
{
    /**
     * The pieces
     * Meta informations extracted from the WSDL
     * - documentation: Number of Pieces
     * @var int
     */
    public $pieces;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight Limit
     * @var int
     */
    public $weight;
    /**
     * The unit
     * @var string
     */
    public $unit;
    /**
     * Constructor method for Allowance
     * @uses Allowance::setPieces()
     * @uses Allowance::setWeight()
     * @uses Allowance::setUnit()
     * @param int $pieces
     * @param int $weight
     * @param string $unit
     */
    public function __construct($pieces = null, $weight = null, $unit = null)
    {
        $this
            ->setPieces($pieces)
            ->setWeight($weight)
            ->setUnit($unit);
    }
    /**
     * Get pieces value
     * @return int|null
     */
    public function getPieces()
    {
        return $this->pieces;
    }
    /**
     * Set pieces value
     * @param int $pieces
     * @return \Sabre\UpdateReservation\StructType\Allowance
     */
    public function setPieces($pieces = null)
    {
        // validation for constraint: int
        if (!is_null($pieces) && !is_numeric($pieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieces)), __LINE__);
        }
        $this->pieces = $pieces;
        return $this;
    }
    /**
     * Get weight value
     * @return int|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param int $weight
     * @return \Sabre\UpdateReservation\StructType\Allowance
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: int
        if (!is_null($weight) && !is_numeric($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @param string $unit
     * @return \Sabre\UpdateReservation\StructType\Allowance
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unit)), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Allowance
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
