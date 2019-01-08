<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleResCore StructType
 * @subpackage Structs
 */
class VehicleResCore extends AbstractStructBase
{
    /**
     * The CollectionDeliveryInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo
     */
    public $CollectionDeliveryInfo;
    /**
     * The GuaranteePrepaid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public $GuaranteePrepaid;
    /**
     * The PricedEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricedEquipment
     */
    public $PricedEquipment;
    /**
     * The RentalRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RentalRate
     */
    public $RentalRate;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Charge
     */
    public $Charge;
    /**
     * Constructor method for VehicleResCore
     * @uses VehicleResCore::setCollectionDeliveryInfo()
     * @uses VehicleResCore::setGuaranteePrepaid()
     * @uses VehicleResCore::setPricedEquipment()
     * @uses VehicleResCore::setRentalRate()
     * @uses VehicleResCore::setCharge()
     * @param \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo $collectionDeliveryInfo
     * @param \Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid
     * @param \Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment
     * @param \Sabre\UpdateReservation\StructType\RentalRate $rentalRate
     * @param \Sabre\UpdateReservation\StructType\Charge $charge
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CollectionDeliveryInfo $collectionDeliveryInfo = null, \Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid = null, \Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment = null, \Sabre\UpdateReservation\StructType\RentalRate $rentalRate = null, \Sabre\UpdateReservation\StructType\Charge $charge = null)
    {
        $this
            ->setCollectionDeliveryInfo($collectionDeliveryInfo)
            ->setGuaranteePrepaid($guaranteePrepaid)
            ->setPricedEquipment($pricedEquipment)
            ->setRentalRate($rentalRate)
            ->setCharge($charge);
    }
    /**
     * Get CollectionDeliveryInfo value
     * @return \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo|null
     */
    public function getCollectionDeliveryInfo()
    {
        return $this->CollectionDeliveryInfo;
    }
    /**
     * Set CollectionDeliveryInfo value
     * @param \Sabre\UpdateReservation\StructType\CollectionDeliveryInfo $collectionDeliveryInfo
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore
     */
    public function setCollectionDeliveryInfo(\Sabre\UpdateReservation\StructType\CollectionDeliveryInfo $collectionDeliveryInfo = null)
    {
        $this->CollectionDeliveryInfo = $collectionDeliveryInfo;
        return $this;
    }
    /**
     * Get GuaranteePrepaid value
     * @return \Sabre\UpdateReservation\StructType\GuaranteePrepaid|null
     */
    public function getGuaranteePrepaid()
    {
        return $this->GuaranteePrepaid;
    }
    /**
     * Set GuaranteePrepaid value
     * @param \Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore
     */
    public function setGuaranteePrepaid(\Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid = null)
    {
        $this->GuaranteePrepaid = $guaranteePrepaid;
        return $this;
    }
    /**
     * Get PricedEquipment value
     * @return \Sabre\UpdateReservation\StructType\PricedEquipment|null
     */
    public function getPricedEquipment()
    {
        return $this->PricedEquipment;
    }
    /**
     * Set PricedEquipment value
     * @param \Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore
     */
    public function setPricedEquipment(\Sabre\UpdateReservation\StructType\PricedEquipment $pricedEquipment = null)
    {
        $this->PricedEquipment = $pricedEquipment;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return \Sabre\UpdateReservation\StructType\RentalRate|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @param \Sabre\UpdateReservation\StructType\RentalRate $rentalRate
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore
     */
    public function setRentalRate(\Sabre\UpdateReservation\StructType\RentalRate $rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Get Charge value
     * @return \Sabre\UpdateReservation\StructType\Charge|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param \Sabre\UpdateReservation\StructType\Charge $charge
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore
     */
    public function setCharge(\Sabre\UpdateReservation\StructType\Charge $charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore
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
