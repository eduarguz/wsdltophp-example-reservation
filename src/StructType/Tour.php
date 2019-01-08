<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tour StructType
 * @subpackage Structs
 */
class Tour extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NumberOfNights
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfNights;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Price;
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RoomType;
    /**
     * The CarInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarInfo;
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Option;
    /**
     * The Feature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Feature;
    /**
     * The Meal
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Meal;
    /**
     * The Extension
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Extension;
    /**
     * Constructor method for Tour
     * @uses Tour::setCode()
     * @uses Tour::setName()
     * @uses Tour::setNumberOfNights()
     * @uses Tour::setPrice()
     * @uses Tour::setRoomType()
     * @uses Tour::setCarInfo()
     * @uses Tour::setOption()
     * @uses Tour::setFeature()
     * @uses Tour::setMeal()
     * @uses Tour::setExtension()
     * @param string $code
     * @param string $name
     * @param int $numberOfNights
     * @param string $price
     * @param string $roomType
     * @param string $carInfo
     * @param string[] $option
     * @param string[] $feature
     * @param string[] $meal
     * @param string[] $extension
     */
    public function __construct($code = null, $name = null, $numberOfNights = null, $price = null, $roomType = null, $carInfo = null, array $option = array(), array $feature = array(), array $meal = array(), array $extension = array())
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setNumberOfNights($numberOfNights)
            ->setPrice($price)
            ->setRoomType($roomType)
            ->setCarInfo($carInfo)
            ->setOption($option)
            ->setFeature($feature)
            ->setMeal($meal)
            ->setExtension($extension);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumberOfNights value
     * @return int|null
     */
    public function getNumberOfNights()
    {
        return $this->NumberOfNights;
    }
    /**
     * Set NumberOfNights value
     * @param int $numberOfNights
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setNumberOfNights($numberOfNights = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfNights) && !is_numeric($numberOfNights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfNights)), __LINE__);
        }
        $this->NumberOfNights = $numberOfNights;
        return $this;
    }
    /**
     * Get Price value
     * @return string|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param string $price
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setPrice($price = null)
    {
        // validation for constraint: string
        if (!is_null($price) && !is_string($price)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($price)), __LINE__);
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Get RoomType value
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @param string $roomType
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setRoomType($roomType = null)
    {
        // validation for constraint: string
        if (!is_null($roomType) && !is_string($roomType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomType)), __LINE__);
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Get CarInfo value
     * @return string|null
     */
    public function getCarInfo()
    {
        return $this->CarInfo;
    }
    /**
     * Set CarInfo value
     * @param string $carInfo
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setCarInfo($carInfo = null)
    {
        // validation for constraint: string
        if (!is_null($carInfo) && !is_string($carInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carInfo)), __LINE__);
        }
        $this->CarInfo = $carInfo;
        return $this;
    }
    /**
     * Get Option value
     * @return string[]|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @throws \InvalidArgumentException
     * @param string[] $option
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setOption(array $option = array())
    {
        foreach ($option as $tourOptionItem) {
            // validation for constraint: itemType
            if (!is_string($tourOptionItem)) {
                throw new \InvalidArgumentException(sprintf('The Option property can only contain items of string, "%s" given', is_object($tourOptionItem) ? get_class($tourOptionItem) : gettype($tourOptionItem)), __LINE__);
            }
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Add item to Option value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function addToOption($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Option property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Option[] = $item;
        return $this;
    }
    /**
     * Get Feature value
     * @return string[]|null
     */
    public function getFeature()
    {
        return $this->Feature;
    }
    /**
     * Set Feature value
     * @throws \InvalidArgumentException
     * @param string[] $feature
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setFeature(array $feature = array())
    {
        foreach ($feature as $tourFeatureItem) {
            // validation for constraint: itemType
            if (!is_string($tourFeatureItem)) {
                throw new \InvalidArgumentException(sprintf('The Feature property can only contain items of string, "%s" given', is_object($tourFeatureItem) ? get_class($tourFeatureItem) : gettype($tourFeatureItem)), __LINE__);
            }
        }
        $this->Feature = $feature;
        return $this;
    }
    /**
     * Add item to Feature value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function addToFeature($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Feature property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Feature[] = $item;
        return $this;
    }
    /**
     * Get Meal value
     * @return string[]|null
     */
    public function getMeal()
    {
        return $this->Meal;
    }
    /**
     * Set Meal value
     * @throws \InvalidArgumentException
     * @param string[] $meal
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setMeal(array $meal = array())
    {
        foreach ($meal as $tourMealItem) {
            // validation for constraint: itemType
            if (!is_string($tourMealItem)) {
                throw new \InvalidArgumentException(sprintf('The Meal property can only contain items of string, "%s" given', is_object($tourMealItem) ? get_class($tourMealItem) : gettype($tourMealItem)), __LINE__);
            }
        }
        $this->Meal = $meal;
        return $this;
    }
    /**
     * Add item to Meal value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function addToMeal($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Meal property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Meal[] = $item;
        return $this;
    }
    /**
     * Get Extension value
     * @return string[]|null
     */
    public function getExtension()
    {
        return $this->Extension;
    }
    /**
     * Set Extension value
     * @throws \InvalidArgumentException
     * @param string[] $extension
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function setExtension(array $extension = array())
    {
        foreach ($extension as $tourExtensionItem) {
            // validation for constraint: itemType
            if (!is_string($tourExtensionItem)) {
                throw new \InvalidArgumentException(sprintf('The Extension property can only contain items of string, "%s" given', is_object($tourExtensionItem) ? get_class($tourExtensionItem) : gettype($tourExtensionItem)), __LINE__);
            }
        }
        $this->Extension = $extension;
        return $this;
    }
    /**
     * Add item to Extension value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Tour
     */
    public function addToExtension($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Extension property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Extension[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Tour
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
