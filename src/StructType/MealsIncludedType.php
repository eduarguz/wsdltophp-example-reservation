<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealsIncludedType StructType
 * @subpackage Structs
 */
class MealsIncludedType extends AbstractStructBase
{
    /**
     * The MealIncluded
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MealIncludedType[]
     */
    public $MealIncluded;
    /**
     * Constructor method for MealsIncludedType
     * @uses MealsIncludedType::setMealIncluded()
     * @param \Sabre\UpdateReservation\StructType\MealIncludedType[] $mealIncluded
     */
    public function __construct(array $mealIncluded = array())
    {
        $this
            ->setMealIncluded($mealIncluded);
    }
    /**
     * Get MealIncluded value
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType[]|null
     */
    public function getMealIncluded()
    {
        return $this->MealIncluded;
    }
    /**
     * Set MealIncluded value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\MealIncludedType[] $mealIncluded
     * @return \Sabre\UpdateReservation\StructType\MealsIncludedType
     */
    public function setMealIncluded(array $mealIncluded = array())
    {
        foreach ($mealIncluded as $mealsIncludedTypeMealIncludedItem) {
            // validation for constraint: itemType
            if (!$mealsIncludedTypeMealIncludedItem instanceof \Sabre\UpdateReservation\StructType\MealIncludedType) {
                throw new \InvalidArgumentException(sprintf('The MealIncluded property can only contain items of \Sabre\UpdateReservation\StructType\MealIncludedType, "%s" given', is_object($mealsIncludedTypeMealIncludedItem) ? get_class($mealsIncludedTypeMealIncludedItem) : gettype($mealsIncludedTypeMealIncludedItem)), __LINE__);
            }
        }
        $this->MealIncluded = $mealIncluded;
        return $this;
    }
    /**
     * Add item to MealIncluded value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\MealIncludedType $item
     * @return \Sabre\UpdateReservation\StructType\MealsIncludedType
     */
    public function addToMealIncluded(\Sabre\UpdateReservation\StructType\MealIncludedType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\MealIncludedType) {
            throw new \InvalidArgumentException(sprintf('The MealIncluded property can only contain items of \Sabre\UpdateReservation\StructType\MealIncludedType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MealIncluded[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MealsIncludedType
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
