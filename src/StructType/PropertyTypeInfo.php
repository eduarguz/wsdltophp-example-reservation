<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyTypeInfo StructType
 * @subpackage Structs
 */
class PropertyTypeInfo extends AbstractStructBase
{
    /**
     * The PropertyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PropertyType[]
     */
    public $PropertyType;
    /**
     * Constructor method for PropertyTypeInfo
     * @uses PropertyTypeInfo::setPropertyType()
     * @param \Sabre\UpdateReservation\StructType\PropertyType[] $propertyType
     */
    public function __construct(array $propertyType = array())
    {
        $this
            ->setPropertyType($propertyType);
    }
    /**
     * Get PropertyType value
     * @return \Sabre\UpdateReservation\StructType\PropertyType[]|null
     */
    public function getPropertyType()
    {
        return $this->PropertyType;
    }
    /**
     * Set PropertyType value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PropertyType[] $propertyType
     * @return \Sabre\UpdateReservation\StructType\PropertyTypeInfo
     */
    public function setPropertyType(array $propertyType = array())
    {
        foreach ($propertyType as $propertyTypeInfoPropertyTypeItem) {
            // validation for constraint: itemType
            if (!$propertyTypeInfoPropertyTypeItem instanceof \Sabre\UpdateReservation\StructType\PropertyType) {
                throw new \InvalidArgumentException(sprintf('The PropertyType property can only contain items of \Sabre\UpdateReservation\StructType\PropertyType, "%s" given', is_object($propertyTypeInfoPropertyTypeItem) ? get_class($propertyTypeInfoPropertyTypeItem) : gettype($propertyTypeInfoPropertyTypeItem)), __LINE__);
            }
        }
        $this->PropertyType = $propertyType;
        return $this;
    }
    /**
     * Add item to PropertyType value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PropertyType $item
     * @return \Sabre\UpdateReservation\StructType\PropertyTypeInfo
     */
    public function addToPropertyType(\Sabre\UpdateReservation\StructType\PropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PropertyType) {
            throw new \InvalidArgumentException(sprintf('The PropertyType property can only contain items of \Sabre\UpdateReservation\StructType\PropertyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PropertyTypeInfo
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
