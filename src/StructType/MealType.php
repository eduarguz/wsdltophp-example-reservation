<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Type of meal (e.g. breakfast, dinner etc.)
 * @subpackage Structs
 */
class MealType extends AbstractStructBase
{
    /**
     * The mealTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Meal type code (e.g. BB, HB, AI)
     * @var string
     */
    public $mealTypeCode;
    /**
     * The mealTypeDescription
     * Meta informations extracted from the WSDL
     * - documentation: Meal type description
     * @var string
     */
    public $mealTypeDescription;
    /**
     * Constructor method for MealType
     * @uses MealType::setMealTypeCode()
     * @uses MealType::setMealTypeDescription()
     * @param string $mealTypeCode
     * @param string $mealTypeDescription
     */
    public function __construct($mealTypeCode = null, $mealTypeDescription = null)
    {
        $this
            ->setMealTypeCode($mealTypeCode)
            ->setMealTypeDescription($mealTypeDescription);
    }
    /**
     * Get mealTypeCode value
     * @return string|null
     */
    public function getMealTypeCode()
    {
        return $this->mealTypeCode;
    }
    /**
     * Set mealTypeCode value
     * @param string $mealTypeCode
     * @return \Sabre\UpdateReservation\StructType\MealType
     */
    public function setMealTypeCode($mealTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealTypeCode) && !is_string($mealTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealTypeCode)), __LINE__);
        }
        $this->mealTypeCode = $mealTypeCode;
        return $this;
    }
    /**
     * Get mealTypeDescription value
     * @return string|null
     */
    public function getMealTypeDescription()
    {
        return $this->mealTypeDescription;
    }
    /**
     * Set mealTypeDescription value
     * @param string $mealTypeDescription
     * @return \Sabre\UpdateReservation\StructType\MealType
     */
    public function setMealTypeDescription($mealTypeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($mealTypeDescription) && !is_string($mealTypeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealTypeDescription)), __LINE__);
        }
        $this->mealTypeDescription = $mealTypeDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MealType
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
