<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Options StructType
 * @subpackage Structs
 */
class Options extends AbstractStructBase
{
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\Option[]
     */
    public $Option;
    /**
     * Constructor method for Options
     * @uses Options::setOption()
     * @param \Sabre\UpdateReservation\StructType\Option[] $option
     */
    public function __construct(array $option = array())
    {
        $this
            ->setOption($option);
    }
    /**
     * Get Option value
     * @return \Sabre\UpdateReservation\StructType\Option[]
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Option[] $option
     * @return \Sabre\UpdateReservation\StructType\Options
     */
    public function setOption(array $option = array())
    {
        foreach ($option as $optionsOptionItem) {
            // validation for constraint: itemType
            if (!$optionsOptionItem instanceof \Sabre\UpdateReservation\StructType\Option) {
                throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \Sabre\UpdateReservation\StructType\Option, "%s" given', is_object($optionsOptionItem) ? get_class($optionsOptionItem) : gettype($optionsOptionItem)), __LINE__);
            }
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Add item to Option value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Option $item
     * @return \Sabre\UpdateReservation\StructType\Options
     */
    public function addToOption(\Sabre\UpdateReservation\StructType\Option $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Option) {
            throw new \InvalidArgumentException(sprintf('The Option property can only contain items of \Sabre\UpdateReservation\StructType\Option, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Option[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Options
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
