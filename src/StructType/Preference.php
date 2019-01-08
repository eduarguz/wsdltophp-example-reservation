<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preference StructType
 * @subpackage Structs
 */
class Preference extends AbstractStructBase
{
    /**
     * The equipType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $equipType;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use: required
     * - pattern: [0-9A-Z]{2,3}
     * @var string
     */
    public $code;
    /**
     * The level
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $level;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var string[]
     */
    public $VehicleType;
    /**
     * Constructor method for Preference
     * @uses Preference::setEquipType()
     * @uses Preference::setCode()
     * @uses Preference::setLevel()
     * @uses Preference::setVehicleType()
     * @param string $equipType
     * @param string $code
     * @param string $level
     * @param string[] $vehicleType
     */
    public function __construct($equipType = null, $code = null, $level = null, array $vehicleType = array())
    {
        $this
            ->setEquipType($equipType)
            ->setCode($code)
            ->setLevel($level)
            ->setVehicleType($vehicleType);
    }
    /**
     * Get equipType value
     * @return string
     */
    public function getEquipType()
    {
        return $this->equipType;
    }
    /**
     * Set equipType value
     * @param string $equipType
     * @return \Sabre\UpdateReservation\StructType\Preference
     */
    public function setEquipType($equipType = null)
    {
        // validation for constraint: string
        if (!is_null($equipType) && !is_string($equipType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipType)), __LINE__);
        }
        $this->equipType = $equipType;
        return $this;
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Preference
     */
    public function setCode($code = null)
    {
        // validation for constraint: pattern
        if (is_scalar($code) && !preg_match('/[0-9A-Z]{2,3}/', $code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{2,3}", "%s" given', var_export($code, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get level value
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @uses \Sabre\UpdateReservation\EnumType\ValidatingCarrierPreferLevelType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\ValidatingCarrierPreferLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \Sabre\UpdateReservation\StructType\Preference
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\ValidatingCarrierPreferLevelType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \Sabre\UpdateReservation\EnumType\ValidatingCarrierPreferLevelType::getValidValues())), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Get VehicleType value
     * @return string[]|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @throws \InvalidArgumentException
     * @param string[] $vehicleType
     * @return \Sabre\UpdateReservation\StructType\Preference
     */
    public function setVehicleType(array $vehicleType = array())
    {
        foreach ($vehicleType as $preferenceVehicleTypeItem) {
            // validation for constraint: itemType
            if (!is_string($preferenceVehicleTypeItem)) {
                throw new \InvalidArgumentException(sprintf('The VehicleType property can only contain items of string, "%s" given', is_object($preferenceVehicleTypeItem) ? get_class($preferenceVehicleTypeItem) : gettype($preferenceVehicleTypeItem)), __LINE__);
            }
        }
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Add item to VehicleType value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Preference
     */
    public function addToVehicleType($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The VehicleType property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Preference
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
