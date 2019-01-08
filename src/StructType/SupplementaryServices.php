<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplementaryServices StructType
 * @subpackage Structs
 */
class SupplementaryServices extends AbstractStructBase
{
    /**
     * The SupplementaryService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\SupplementaryServiceType[]
     */
    public $SupplementaryService;
    /**
     * Constructor method for SupplementaryServices
     * @uses SupplementaryServices::setSupplementaryService()
     * @param \Sabre\UpdateReservation\StructType\SupplementaryServiceType[] $supplementaryService
     */
    public function __construct(array $supplementaryService = array())
    {
        $this
            ->setSupplementaryService($supplementaryService);
    }
    /**
     * Get SupplementaryService value
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServiceType[]|null
     */
    public function getSupplementaryService()
    {
        return $this->SupplementaryService;
    }
    /**
     * Set SupplementaryService value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SupplementaryServiceType[] $supplementaryService
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServices
     */
    public function setSupplementaryService(array $supplementaryService = array())
    {
        foreach ($supplementaryService as $supplementaryServicesSupplementaryServiceItem) {
            // validation for constraint: itemType
            if (!$supplementaryServicesSupplementaryServiceItem instanceof \Sabre\UpdateReservation\StructType\SupplementaryServiceType) {
                throw new \InvalidArgumentException(sprintf('The SupplementaryService property can only contain items of \Sabre\UpdateReservation\StructType\SupplementaryServiceType, "%s" given', is_object($supplementaryServicesSupplementaryServiceItem) ? get_class($supplementaryServicesSupplementaryServiceItem) : gettype($supplementaryServicesSupplementaryServiceItem)), __LINE__);
            }
        }
        $this->SupplementaryService = $supplementaryService;
        return $this;
    }
    /**
     * Add item to SupplementaryService value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SupplementaryServiceType $item
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServices
     */
    public function addToSupplementaryService(\Sabre\UpdateReservation\StructType\SupplementaryServiceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SupplementaryServiceType) {
            throw new \InvalidArgumentException(sprintf('The SupplementaryService property can only contain items of \Sabre\UpdateReservation\StructType\SupplementaryServiceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupplementaryService[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SupplementaryServices
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
