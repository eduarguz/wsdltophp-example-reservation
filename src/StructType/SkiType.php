<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SkiType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ski product is used to ski tour sale and processing purposes
 * @subpackage Structs
 */
class SkiType extends AbstractStructBase
{
    /**
     * The Booking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Booking
     */
    public $Booking;
    /**
     * The ChangePolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChangePolicy
     */
    public $ChangePolicy;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\City
     */
    public $City;
    /**
     * The ClothingHire
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ClothingHire
     */
    public $ClothingHire;
    /**
     * The EquipmentHire
     * Meta informations extracted from the WSDL
     * - documentation: "EquipmentHire" is used to order ski equipment
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public $EquipmentHire;
    /**
     * The Extras
     * Meta informations extracted from the WSDL
     * - documentation: "Extras" is used to order extra services
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public $Extras;
    /**
     * The Lessons
     * Meta informations extracted from the WSDL
     * - documentation: "Lessons" is used to order ski lessons
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public $Lessons;
    /**
     * The LiftPass
     * Meta informations extracted from the WSDL
     * - documentation: "LiftPass" is used to order ski lift pass
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SkiCommonElementsType
     */
    public $LiftPass;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Location
     */
    public $Location;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vendor
     */
    public $Vendor;
    /**
     * The Transfers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Transfers
     */
    public $Transfers;
    /**
     * The PricingElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public $PricingElements;
    /**
     * Constructor method for SkiType
     * @uses SkiType::setBooking()
     * @uses SkiType::setChangePolicy()
     * @uses SkiType::setCity()
     * @uses SkiType::setClothingHire()
     * @uses SkiType::setEquipmentHire()
     * @uses SkiType::setExtras()
     * @uses SkiType::setLessons()
     * @uses SkiType::setLiftPass()
     * @uses SkiType::setLocation()
     * @uses SkiType::setVendor()
     * @uses SkiType::setTransfers()
     * @uses SkiType::setPricingElements()
     * @param \Sabre\UpdateReservation\StructType\Booking $booking
     * @param \Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy
     * @param \Sabre\UpdateReservation\StructType\City $city
     * @param \Sabre\UpdateReservation\StructType\ClothingHire $clothingHire
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $equipmentHire
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $extras
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $lessons
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $liftPass
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @param \Sabre\UpdateReservation\StructType\Transfers $transfers
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Booking $booking = null, \Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy = null, \Sabre\UpdateReservation\StructType\City $city = null, \Sabre\UpdateReservation\StructType\ClothingHire $clothingHire = null, \Sabre\UpdateReservation\StructType\SkiCommonElementsType $equipmentHire = null, \Sabre\UpdateReservation\StructType\SkiCommonElementsType $extras = null, \Sabre\UpdateReservation\StructType\SkiCommonElementsType $lessons = null, \Sabre\UpdateReservation\StructType\SkiCommonElementsType $liftPass = null, \Sabre\UpdateReservation\StructType\Location $location = null, \Sabre\UpdateReservation\StructType\Vendor $vendor = null, \Sabre\UpdateReservation\StructType\Transfers $transfers = null, \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this
            ->setBooking($booking)
            ->setChangePolicy($changePolicy)
            ->setCity($city)
            ->setClothingHire($clothingHire)
            ->setEquipmentHire($equipmentHire)
            ->setExtras($extras)
            ->setLessons($lessons)
            ->setLiftPass($liftPass)
            ->setLocation($location)
            ->setVendor($vendor)
            ->setTransfers($transfers)
            ->setPricingElements($pricingElements);
    }
    /**
     * Get Booking value
     * @return \Sabre\UpdateReservation\StructType\Booking|null
     */
    public function getBooking()
    {
        return $this->Booking;
    }
    /**
     * Set Booking value
     * @param \Sabre\UpdateReservation\StructType\Booking $booking
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setBooking(\Sabre\UpdateReservation\StructType\Booking $booking = null)
    {
        $this->Booking = $booking;
        return $this;
    }
    /**
     * Get ChangePolicy value
     * @return \Sabre\UpdateReservation\StructType\ChangePolicy|null
     */
    public function getChangePolicy()
    {
        return $this->ChangePolicy;
    }
    /**
     * Set ChangePolicy value
     * @param \Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setChangePolicy(\Sabre\UpdateReservation\StructType\ChangePolicy $changePolicy = null)
    {
        $this->ChangePolicy = $changePolicy;
        return $this;
    }
    /**
     * Get City value
     * @return \Sabre\UpdateReservation\StructType\City|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param \Sabre\UpdateReservation\StructType\City $city
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setCity(\Sabre\UpdateReservation\StructType\City $city = null)
    {
        $this->City = $city;
        return $this;
    }
    /**
     * Get ClothingHire value
     * @return \Sabre\UpdateReservation\StructType\ClothingHire|null
     */
    public function getClothingHire()
    {
        return $this->ClothingHire;
    }
    /**
     * Set ClothingHire value
     * @param \Sabre\UpdateReservation\StructType\ClothingHire $clothingHire
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setClothingHire(\Sabre\UpdateReservation\StructType\ClothingHire $clothingHire = null)
    {
        $this->ClothingHire = $clothingHire;
        return $this;
    }
    /**
     * Get EquipmentHire value
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType|null
     */
    public function getEquipmentHire()
    {
        return $this->EquipmentHire;
    }
    /**
     * Set EquipmentHire value
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $equipmentHire
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setEquipmentHire(\Sabre\UpdateReservation\StructType\SkiCommonElementsType $equipmentHire = null)
    {
        $this->EquipmentHire = $equipmentHire;
        return $this;
    }
    /**
     * Get Extras value
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType|null
     */
    public function getExtras()
    {
        return $this->Extras;
    }
    /**
     * Set Extras value
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $extras
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setExtras(\Sabre\UpdateReservation\StructType\SkiCommonElementsType $extras = null)
    {
        $this->Extras = $extras;
        return $this;
    }
    /**
     * Get Lessons value
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType|null
     */
    public function getLessons()
    {
        return $this->Lessons;
    }
    /**
     * Set Lessons value
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $lessons
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setLessons(\Sabre\UpdateReservation\StructType\SkiCommonElementsType $lessons = null)
    {
        $this->Lessons = $lessons;
        return $this;
    }
    /**
     * Get LiftPass value
     * @return \Sabre\UpdateReservation\StructType\SkiCommonElementsType|null
     */
    public function getLiftPass()
    {
        return $this->LiftPass;
    }
    /**
     * Set LiftPass value
     * @param \Sabre\UpdateReservation\StructType\SkiCommonElementsType $liftPass
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setLiftPass(\Sabre\UpdateReservation\StructType\SkiCommonElementsType $liftPass = null)
    {
        $this->LiftPass = $liftPass;
        return $this;
    }
    /**
     * Get Location value
     * @return \Sabre\UpdateReservation\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setLocation(\Sabre\UpdateReservation\StructType\Location $location = null)
    {
        $this->Location = $location;
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
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get Transfers value
     * @return \Sabre\UpdateReservation\StructType\Transfers|null
     */
    public function getTransfers()
    {
        return $this->Transfers;
    }
    /**
     * Set Transfers value
     * @param \Sabre\UpdateReservation\StructType\Transfers $transfers
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setTransfers(\Sabre\UpdateReservation\StructType\Transfers $transfers = null)
    {
        $this->Transfers = $transfers;
        return $this;
    }
    /**
     * Get PricingElements value
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType|null
     */
    public function getPricingElements()
    {
        return $this->PricingElements;
    }
    /**
     * Set PricingElements value
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @return \Sabre\UpdateReservation\StructType\SkiType
     */
    public function setPricingElements(\Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this->PricingElements = $pricingElements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SkiType
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
