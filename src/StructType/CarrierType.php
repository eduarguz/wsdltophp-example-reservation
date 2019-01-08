<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierType StructType
 * @subpackage Structs
 */
class CarrierType extends PriorityLegType
{
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\Carrier[]
     */
    public $Carrier;
    /**
     * Constructor method for CarrierType
     * @uses CarrierType::setCarrier()
     * @param \Sabre\UpdateReservation\StructType\Carrier[] $carrier
     */
    public function __construct(array $carrier = array())
    {
        $this
            ->setCarrier($carrier);
    }
    /**
     * Get Carrier value
     * @return \Sabre\UpdateReservation\StructType\Carrier[]
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Carrier[] $carrier
     * @return \Sabre\UpdateReservation\StructType\CarrierType
     */
    public function setCarrier(array $carrier = array())
    {
        foreach ($carrier as $carrierTypeCarrierItem) {
            // validation for constraint: itemType
            if (!$carrierTypeCarrierItem instanceof \Sabre\UpdateReservation\StructType\Carrier) {
                throw new \InvalidArgumentException(sprintf('The Carrier property can only contain items of \Sabre\UpdateReservation\StructType\Carrier, "%s" given', is_object($carrierTypeCarrierItem) ? get_class($carrierTypeCarrierItem) : gettype($carrierTypeCarrierItem)), __LINE__);
            }
        }
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Carrier $item
     * @return \Sabre\UpdateReservation\StructType\CarrierType
     */
    public function addToCarrier(\Sabre\UpdateReservation\StructType\Carrier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Carrier) {
            throw new \InvalidArgumentException(sprintf('The Carrier property can only contain items of \Sabre\UpdateReservation\StructType\Carrier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Carrier[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CarrierType
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
