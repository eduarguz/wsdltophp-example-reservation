<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddOns StructType
 * @subpackage Structs
 */
class AddOns extends AbstractStructBase
{
    /**
     * The AddOn
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[]
     */
    public $AddOn;
    /**
     * Constructor method for AddOns
     * @uses AddOns::setAddOn()
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[] $addOn
     */
    public function __construct(array $addOn = array())
    {
        $this
            ->setAddOn($addOn);
    }
    /**
     * Get AddOn value
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[]|null
     */
    public function getAddOn()
    {
        return $this->AddOn;
    }
    /**
     * Set AddOn value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[] $addOn
     * @return \Sabre\UpdateReservation\StructType\AddOns
     */
    public function setAddOn(array $addOn = array())
    {
        foreach ($addOn as $addOnsAddOnItem) {
            // validation for constraint: itemType
            if (!$addOnsAddOnItem instanceof \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn) {
                throw new \InvalidArgumentException(sprintf('The AddOn property can only contain items of \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn, "%s" given', is_object($addOnsAddOnItem) ? get_class($addOnsAddOnItem) : gettype($addOnsAddOnItem)), __LINE__);
            }
        }
        $this->AddOn = $addOn;
        return $this;
    }
    /**
     * Add item to AddOn value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn $item
     * @return \Sabre\UpdateReservation\StructType\AddOns
     */
    public function addToAddOn(\Sabre\UpdateReservation\StructType\InsuranceCoverAddOn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn) {
            throw new \InvalidArgumentException(sprintf('The AddOn property can only contain items of \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddOn[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AddOns
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
