<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinMaxType StructType
 * @subpackage Structs
 */
class MinMaxType extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The min
     * @var float
     */
    public $min;
    /**
     * The max
     * @var float
     */
    public $max;
    /**
     * Constructor method for MinMaxType
     * @uses MinMaxType::set_()
     * @uses MinMaxType::setMin()
     * @uses MinMaxType::setMax()
     * @param float $_
     * @param float $min
     * @param float $max
     */
    public function __construct($_ = null, $min = null, $max = null)
    {
        $this
            ->set_($_)
            ->setMin($min)
            ->setMax($max);
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \Sabre\UpdateReservation\StructType\MinMaxType
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Get min value
     * @return float|null
     */
    public function getMin()
    {
        return $this->min;
    }
    /**
     * Set min value
     * @param float $min
     * @return \Sabre\UpdateReservation\StructType\MinMaxType
     */
    public function setMin($min = null)
    {
        $this->min = $min;
        return $this;
    }
    /**
     * Get max value
     * @return float|null
     */
    public function getMax()
    {
        return $this->max;
    }
    /**
     * Set max value
     * @param float $max
     * @return \Sabre\UpdateReservation\StructType\MinMaxType
     */
    public function setMax($max = null)
    {
        $this->max = $max;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MinMaxType
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
