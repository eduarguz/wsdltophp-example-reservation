<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServices StructType
 * @subpackage Structs
 */
class AncillaryServices extends AbstractStructBase
{
    /**
     * The AncillaryService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryService[]
     */
    public $AncillaryService;
    /**
     * Constructor method for AncillaryServices
     * @uses AncillaryServices::setAncillaryService()
     * @param \Sabre\UpdateReservation\StructType\AncillaryService[] $ancillaryService
     */
    public function __construct(array $ancillaryService = array())
    {
        $this
            ->setAncillaryService($ancillaryService);
    }
    /**
     * Get AncillaryService value
     * @return \Sabre\UpdateReservation\StructType\AncillaryService[]|null
     */
    public function getAncillaryService()
    {
        return $this->AncillaryService;
    }
    /**
     * Set AncillaryService value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryService[] $ancillaryService
     * @return \Sabre\UpdateReservation\StructType\AncillaryServices
     */
    public function setAncillaryService(array $ancillaryService = array())
    {
        foreach ($ancillaryService as $ancillaryServicesAncillaryServiceItem) {
            // validation for constraint: itemType
            if (!$ancillaryServicesAncillaryServiceItem instanceof \Sabre\UpdateReservation\StructType\AncillaryService) {
                throw new \InvalidArgumentException(sprintf('The AncillaryService property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryService, "%s" given', is_object($ancillaryServicesAncillaryServiceItem) ? get_class($ancillaryServicesAncillaryServiceItem) : gettype($ancillaryServicesAncillaryServiceItem)), __LINE__);
            }
        }
        $this->AncillaryService = $ancillaryService;
        return $this;
    }
    /**
     * Add item to AncillaryService value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryService $item
     * @return \Sabre\UpdateReservation\StructType\AncillaryServices
     */
    public function addToAncillaryService(\Sabre\UpdateReservation\StructType\AncillaryService $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AncillaryService) {
            throw new \InvalidArgumentException(sprintf('The AncillaryService property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryService, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AncillaryService[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServices
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
