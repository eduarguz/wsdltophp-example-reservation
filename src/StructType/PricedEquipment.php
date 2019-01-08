<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedEquipment StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of special equipment that is part of this reservation, along with the charges associated with this equipment. | The VehicleEquipmentPricedType complex type identifies the data that describes a priced piece of special
 * equipment in association with the rental of a vehicle. The data consists of the equipment and the correspondinng charge.
 * @subpackage Structs
 */
class PricedEquipment extends AbstractStructBase
{
    /**
     * The SpecialEquipments
     * Meta informations extracted from the WSDL
     * - documentation: Holds list of Special equipments in this item.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialEquipmentsType
     */
    public $SpecialEquipments;
    /**
     * The equipmentType
     * Meta informations extracted from the WSDL
     * - documentation: "equipType" is used to return the category of vehicle associated with the vehicle rental.
     * - use: optional
     * @var string
     */
    public $equipmentType;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - documentation: "quantity" is used to return the number of reserved vehicles associated with the vehicle rental.
     * - use: optional
     * @var string
     */
    public $quantity;
    /**
     * The specialEquipmentConfirmed
     * Meta informations extracted from the WSDL
     * - documentation: "specialEquipConfirmed" is used to denote whether or not the special equipment is confirmed.
     * - use: optional
     * @var string
     */
    public $specialEquipmentConfirmed;
    /**
     * The EquipType
     * Meta informations extracted from the WSDL
     * - documentation: The VehicleEquipmentPricedType complex type identifies the data that describes a priced piece of special equipment in association with the rental of a vehicle. The data consists of the equipment and the correspondinng charge. The
     * VehicleEquipmentPricedType complex type identifies the data that describes a priced piece of special equipment in association with the rental of a vehicle. The data consists of the equipment and the correspondinng charge. Category of rental vehicle.
     * Example "EDMR"
     * - minOccurs: 0
     * @var string
     */
    public $EquipType;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of booked vehicles. Example "1"
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for PricedEquipment
     * @uses PricedEquipment::setSpecialEquipments()
     * @uses PricedEquipment::setEquipmentType()
     * @uses PricedEquipment::setQuantity()
     * @uses PricedEquipment::setSpecialEquipmentConfirmed()
     * @uses PricedEquipment::setEquipType()
     * @uses PricedEquipment::setQuantity_1()
     * @param \Sabre\UpdateReservation\StructType\SpecialEquipmentsType $specialEquipments
     * @param string $equipmentType
     * @param string $quantity
     * @param string $specialEquipmentConfirmed
     * @param string $equipType
     * @param int $quantity
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SpecialEquipmentsType $specialEquipments = null, $equipmentType = null, $quantity = null, $specialEquipmentConfirmed = null, $equipType = null, $quantity_1 = null)
    {
        $this
            ->setSpecialEquipments($specialEquipments)
            ->setEquipmentType($equipmentType)
            ->setQuantity($quantity)
            ->setSpecialEquipmentConfirmed($specialEquipmentConfirmed)
            ->setEquipType($equipType)
            ->setQuantity_1($quantity_1);
    }
    /**
     * Get SpecialEquipments value
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentsType|null
     */
    public function getSpecialEquipments()
    {
        return $this->SpecialEquipments;
    }
    /**
     * Set SpecialEquipments value
     * @param \Sabre\UpdateReservation\StructType\SpecialEquipmentsType $specialEquipments
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public function setSpecialEquipments(\Sabre\UpdateReservation\StructType\SpecialEquipmentsType $specialEquipments = null)
    {
        $this->SpecialEquipments = $specialEquipments;
        return $this;
    }
    /**
     * Get equipmentType value
     * @return string|null
     */
    public function getEquipmentType()
    {
        return $this->equipmentType;
    }
    /**
     * Set equipmentType value
     * @param string $equipmentType
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public function setEquipmentType($equipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentType) && !is_string($equipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentType)), __LINE__);
        }
        $this->equipmentType = $equipmentType;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get specialEquipmentConfirmed value
     * @return string|null
     */
    public function getSpecialEquipmentConfirmed()
    {
        return $this->specialEquipmentConfirmed;
    }
    /**
     * Set specialEquipmentConfirmed value
     * @param string $specialEquipmentConfirmed
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public function setSpecialEquipmentConfirmed($specialEquipmentConfirmed = null)
    {
        // validation for constraint: string
        if (!is_null($specialEquipmentConfirmed) && !is_string($specialEquipmentConfirmed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialEquipmentConfirmed)), __LINE__);
        }
        $this->specialEquipmentConfirmed = $specialEquipmentConfirmed;
        return $this;
    }
    /**
     * Get EquipType value
     * @return string|null
     */
    public function getEquipType()
    {
        return $this->EquipType;
    }
    /**
     * Set EquipType value
     * @param string $equipType
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public function setEquipType($equipType = null)
    {
        // validation for constraint: string
        if (!is_null($equipType) && !is_string($equipType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipType)), __LINE__);
        }
        $this->EquipType = $equipType;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity_1()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public function setQuantity_1($quantity_1 = null)
    {
        // validation for constraint: int
        if (!is_null($quantity_1) && !is_numeric($quantity_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity_1)), __LINE__);
        }
        $this->Quantity = $quantity_1;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment
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
