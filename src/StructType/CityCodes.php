<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityCodes StructType
 * @subpackage Structs
 */
class CityCodes extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\Code[]
     */
    public $Code;
    /**
     * Constructor method for CityCodes
     * @uses CityCodes::setCode()
     * @param \Sabre\UpdateReservation\StructType\Code[] $code
     */
    public function __construct(array $code = array())
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return \Sabre\UpdateReservation\StructType\Code[]|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Code[] $code
     * @return \Sabre\UpdateReservation\StructType\CityCodes
     */
    public function setCode(array $code = array())
    {
        foreach ($code as $cityCodesCodeItem) {
            // validation for constraint: itemType
            if (!$cityCodesCodeItem instanceof \Sabre\UpdateReservation\StructType\Code) {
                throw new \InvalidArgumentException(sprintf('The Code property can only contain items of \Sabre\UpdateReservation\StructType\Code, "%s" given', is_object($cityCodesCodeItem) ? get_class($cityCodesCodeItem) : gettype($cityCodesCodeItem)), __LINE__);
            }
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Add item to Code value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Code $item
     * @return \Sabre\UpdateReservation\StructType\CityCodes
     */
    public function addToCode(\Sabre\UpdateReservation\StructType\Code $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Code) {
            throw new \InvalidArgumentException(sprintf('The Code property can only contain items of \Sabre\UpdateReservation\StructType\Code, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Code[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CityCodes
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
