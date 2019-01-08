<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ID StructType
 * Meta informations extracted from the WSDL
 * - documentation: A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
 * - use: required
 * @subpackage Structs
 */
class ID extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - maxOccurs: 50
     * @var string[]
     */
    public $Number;
    /**
     * Constructor method for ID
     * @uses ID::setNumber()
     * @param string[] $number
     */
    public function __construct(array $number = array())
    {
        $this
            ->setNumber($number);
    }
    /**
     * Get Number value
     * @return string[]|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @throws \InvalidArgumentException
     * @param string[] $number
     * @return \Sabre\UpdateReservation\StructType\ID
     */
    public function setNumber(array $number = array())
    {
        foreach ($number as $iDNumberItem) {
            // validation for constraint: itemType
            if (!is_string($iDNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The Number property can only contain items of string, "%s" given', is_object($iDNumberItem) ? get_class($iDNumberItem) : gettype($iDNumberItem)), __LINE__);
            }
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Add item to Number value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\ID
     */
    public function addToNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Number property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Number[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ID
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
