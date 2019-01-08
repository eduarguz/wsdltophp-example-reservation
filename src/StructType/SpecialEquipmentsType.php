<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipmentsType StructType
 * @subpackage Structs
 */
class SpecialEquipmentsType extends AbstractStructBase
{
    /**
     * The SpecialEquipment
     * Meta informations extracted from the WSDL
     * - documentation: Special equipment code. ex. PHN for Mobile Phone
     * - maxOccurs: 10
     * @var string[]
     */
    public $SpecialEquipment;
    /**
     * Constructor method for SpecialEquipmentsType
     * @uses SpecialEquipmentsType::setSpecialEquipment()
     * @param string[] $specialEquipment
     */
    public function __construct(array $specialEquipment = array())
    {
        $this
            ->setSpecialEquipment($specialEquipment);
    }
    /**
     * Get SpecialEquipment value
     * @return string[]|null
     */
    public function getSpecialEquipment()
    {
        return $this->SpecialEquipment;
    }
    /**
     * Set SpecialEquipment value
     * @throws \InvalidArgumentException
     * @param string[] $specialEquipment
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentsType
     */
    public function setSpecialEquipment(array $specialEquipment = array())
    {
        foreach ($specialEquipment as $specialEquipmentsTypeSpecialEquipmentItem) {
            // validation for constraint: itemType
            if (!is_string($specialEquipmentsTypeSpecialEquipmentItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of string, "%s" given', is_object($specialEquipmentsTypeSpecialEquipmentItem) ? get_class($specialEquipmentsTypeSpecialEquipmentItem) : gettype($specialEquipmentsTypeSpecialEquipmentItem)), __LINE__);
            }
        }
        $this->SpecialEquipment = $specialEquipment;
        return $this;
    }
    /**
     * Add item to SpecialEquipment value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentsType
     */
    public function addToSpecialEquipment($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialEquipment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentsType
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
