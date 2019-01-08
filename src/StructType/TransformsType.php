<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransformsType StructType
 * @subpackage Structs
 */
class TransformsType extends AbstractStructBase
{
    /**
     * The Transform
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ds:Transform
     * @var \Sabre\UpdateReservation\StructType\TransformType[]
     */
    public $Transform;
    /**
     * Constructor method for TransformsType
     * @uses TransformsType::setTransform()
     * @param \Sabre\UpdateReservation\StructType\TransformType[] $transform
     */
    public function __construct(array $transform = array())
    {
        $this
            ->setTransform($transform);
    }
    /**
     * Get Transform value
     * @return \Sabre\UpdateReservation\StructType\TransformType[]|null
     */
    public function getTransform()
    {
        return $this->Transform;
    }
    /**
     * Set Transform value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TransformType[] $transform
     * @return \Sabre\UpdateReservation\StructType\TransformsType
     */
    public function setTransform(array $transform = array())
    {
        foreach ($transform as $transformsTypeTransformItem) {
            // validation for constraint: itemType
            if (!$transformsTypeTransformItem instanceof \Sabre\UpdateReservation\StructType\TransformType) {
                throw new \InvalidArgumentException(sprintf('The Transform property can only contain items of \Sabre\UpdateReservation\StructType\TransformType, "%s" given', is_object($transformsTypeTransformItem) ? get_class($transformsTypeTransformItem) : gettype($transformsTypeTransformItem)), __LINE__);
            }
        }
        $this->Transform = $transform;
        return $this;
    }
    /**
     * Add item to Transform value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TransformType $item
     * @return \Sabre\UpdateReservation\StructType\TransformsType
     */
    public function addToTransform(\Sabre\UpdateReservation\StructType\TransformType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TransformType) {
            throw new \InvalidArgumentException(sprintf('The Transform property can only contain items of \Sabre\UpdateReservation\StructType\TransformType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transform[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TransformsType
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
