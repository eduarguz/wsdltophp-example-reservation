<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleVendorAvail StructType
 * @subpackage Structs
 */
class VehicleVendorAvail extends AbstractStructBase
{
    /**
     * The VehicleResCore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehicleResCore
     */
    public $VehicleResCore;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vendor
     */
    public $Vendor;
    /**
     * Constructor method for VehicleVendorAvail
     * @uses VehicleVendorAvail::setVehicleResCore()
     * @uses VehicleVendorAvail::setVendor()
     * @param \Sabre\UpdateReservation\StructType\VehicleResCore $vehicleResCore
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     */
    public function __construct(\Sabre\UpdateReservation\StructType\VehicleResCore $vehicleResCore = null, \Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this
            ->setVehicleResCore($vehicleResCore)
            ->setVendor($vendor);
    }
    /**
     * Get VehicleResCore value
     * @return \Sabre\UpdateReservation\StructType\VehicleResCore|null
     */
    public function getVehicleResCore()
    {
        return $this->VehicleResCore;
    }
    /**
     * Set VehicleResCore value
     * @param \Sabre\UpdateReservation\StructType\VehicleResCore $vehicleResCore
     * @return \Sabre\UpdateReservation\StructType\VehicleVendorAvail
     */
    public function setVehicleResCore(\Sabre\UpdateReservation\StructType\VehicleResCore $vehicleResCore = null)
    {
        $this->VehicleResCore = $vehicleResCore;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @return \Sabre\UpdateReservation\StructType\VehicleVendorAvail
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehicleVendorAvail
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
