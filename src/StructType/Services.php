<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Services StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies additional services to be provided by hotel.
 * @subpackage Structs
 */
class Services extends AbstractStructBase
{
    /**
     * The MealType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MealType
     */
    public $MealType;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\ServiceRefType[]
     */
    public $Service;
    /**
     * Constructor method for Services
     * @uses Services::setMealType()
     * @uses Services::setService()
     * @param \Sabre\UpdateReservation\StructType\MealType $mealType
     * @param \Sabre\UpdateReservation\StructType\ServiceRefType[] $service
     */
    public function __construct(\Sabre\UpdateReservation\StructType\MealType $mealType = null, array $service = array())
    {
        $this
            ->setMealType($mealType)
            ->setService($service);
    }
    /**
     * Get MealType value
     * @return \Sabre\UpdateReservation\StructType\MealType|null
     */
    public function getMealType()
    {
        return $this->MealType;
    }
    /**
     * Set MealType value
     * @param \Sabre\UpdateReservation\StructType\MealType $mealType
     * @return \Sabre\UpdateReservation\StructType\Services
     */
    public function setMealType(\Sabre\UpdateReservation\StructType\MealType $mealType = null)
    {
        $this->MealType = $mealType;
        return $this;
    }
    /**
     * Get Service value
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType[]|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ServiceRefType[] $service
     * @return \Sabre\UpdateReservation\StructType\Services
     */
    public function setService(array $service = array())
    {
        foreach ($service as $servicesServiceItem) {
            // validation for constraint: itemType
            if (!$servicesServiceItem instanceof \Sabre\UpdateReservation\StructType\ServiceRefType) {
                throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \Sabre\UpdateReservation\StructType\ServiceRefType, "%s" given', is_object($servicesServiceItem) ? get_class($servicesServiceItem) : gettype($servicesServiceItem)), __LINE__);
            }
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Add item to Service value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ServiceRefType $item
     * @return \Sabre\UpdateReservation\StructType\Services
     */
    public function addToService(\Sabre\UpdateReservation\StructType\ServiceRefType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ServiceRefType) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of \Sabre\UpdateReservation\StructType\ServiceRefType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Service[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Services
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
