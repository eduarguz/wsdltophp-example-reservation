<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTypes StructType
 * @subpackage Structs
 */
class VehicleTypes extends AbstractStructBase
{
    /**
     * The Transmission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Transmission;
    /**
     * The VehType
     * Meta informations extracted from the WSDL
     * - documentation: "VehType" is used to return the vehicle type associated with the vehicle reservation.
     * - minOccurs: 0
     * @var string
     */
    public $VehType;
    /**
     * The UpgradedVehType
     * Meta informations extracted from the WSDL
     * - documentation: Vehicle Upgrade field – indicates upgrade field provided by supplier – ‘/UPG-@ECAR’
     * - minOccurs: 0
     * @var string
     */
    public $UpgradedVehType;
    /**
     * Constructor method for VehicleTypes
     * @uses VehicleTypes::setTransmission()
     * @uses VehicleTypes::setVehType()
     * @uses VehicleTypes::setUpgradedVehType()
     * @param string $transmission
     * @param string $vehType
     * @param string $upgradedVehType
     */
    public function __construct($transmission = null, $vehType = null, $upgradedVehType = null)
    {
        $this
            ->setTransmission($transmission)
            ->setVehType($vehType)
            ->setUpgradedVehType($upgradedVehType);
    }
    /**
     * Get Transmission value
     * @return string|null
     */
    public function getTransmission()
    {
        return $this->Transmission;
    }
    /**
     * Set Transmission value
     * @param string $transmission
     * @return \Sabre\UpdateReservation\StructType\VehicleTypes
     */
    public function setTransmission($transmission = null)
    {
        // validation for constraint: string
        if (!is_null($transmission) && !is_string($transmission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transmission)), __LINE__);
        }
        $this->Transmission = $transmission;
        return $this;
    }
    /**
     * Get VehType value
     * @return string|null
     */
    public function getVehType()
    {
        return $this->VehType;
    }
    /**
     * Set VehType value
     * @param string $vehType
     * @return \Sabre\UpdateReservation\StructType\VehicleTypes
     */
    public function setVehType($vehType = null)
    {
        // validation for constraint: string
        if (!is_null($vehType) && !is_string($vehType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehType)), __LINE__);
        }
        $this->VehType = $vehType;
        return $this;
    }
    /**
     * Get UpgradedVehType value
     * @return string|null
     */
    public function getUpgradedVehType()
    {
        return $this->UpgradedVehType;
    }
    /**
     * Set UpgradedVehType value
     * @param string $upgradedVehType
     * @return \Sabre\UpdateReservation\StructType\VehicleTypes
     */
    public function setUpgradedVehType($upgradedVehType = null)
    {
        // validation for constraint: string
        if (!is_null($upgradedVehType) && !is_string($upgradedVehType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($upgradedVehType)), __LINE__);
        }
        $this->UpgradedVehType = $upgradedVehType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicleTypes
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
