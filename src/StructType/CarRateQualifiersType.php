<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarRateQualifiersType StructType
 * @subpackage Structs
 */
class CarRateQualifiersType extends AbstractStructBase
{
    /**
     * The Corporate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Corporate
     */
    public $Corporate;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The GuaranteePrepaid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteePrepaid
     */
    public $GuaranteePrepaid;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $ID;
    /**
     * The Promotion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Promotion
     */
    public $Promotion;
    /**
     * The RateCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 50
     * - minOccurs: 0
     * @var string[]
     */
    public $RateCode;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TourCode
     */
    public $TourCode;
    /**
     * The VehiclePreferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehiclePreferences
     */
    public $VehiclePreferences;
    /**
     * The LocationPreferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationPreferences
     */
    public $LocationPreferences;
    /**
     * The VendorPreferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VendorPreferences
     */
    public $VendorPreferences;
    /**
     * The SpecialEquipmentPreferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences
     */
    public $SpecialEquipmentPreferences;
    /**
     * The ccRate
     * @var string
     */
    public $ccRate;
    /**
     * The commission
     * @var bool
     */
    public $commission;
    /**
     * The currencyCode
     * @var string
     */
    public $currencyCode;
    /**
     * The mileagePlan
     * @var string
     */
    public $mileagePlan;
    /**
     * The rateAssured
     * @var bool
     */
    public $rateAssured;
    /**
     * The rateCategory
     * @var string
     */
    public $rateCategory;
    /**
     * The ratePlan
     * @var string
     */
    public $ratePlan;
    /**
     * Constructor method for CarRateQualifiersType
     * @uses CarRateQualifiersType::setCorporate()
     * @uses CarRateQualifiersType::setCustLoyalty()
     * @uses CarRateQualifiersType::setGuaranteePrepaid()
     * @uses CarRateQualifiersType::setID()
     * @uses CarRateQualifiersType::setPromotion()
     * @uses CarRateQualifiersType::setRateCode()
     * @uses CarRateQualifiersType::setTourCode()
     * @uses CarRateQualifiersType::setVehiclePreferences()
     * @uses CarRateQualifiersType::setLocationPreferences()
     * @uses CarRateQualifiersType::setVendorPreferences()
     * @uses CarRateQualifiersType::setSpecialEquipmentPreferences()
     * @uses CarRateQualifiersType::setCcRate()
     * @uses CarRateQualifiersType::setCommission()
     * @uses CarRateQualifiersType::setCurrencyCode()
     * @uses CarRateQualifiersType::setMileagePlan()
     * @uses CarRateQualifiersType::setRateAssured()
     * @uses CarRateQualifiersType::setRateCategory()
     * @uses CarRateQualifiersType::setRatePlan()
     * @param \Sabre\UpdateReservation\StructType\Corporate $corporate
     * @param \Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty
     * @param \Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid
     * @param \Sabre\UpdateReservation\StructType\ID $iD
     * @param \Sabre\UpdateReservation\StructType\Promotion $promotion
     * @param string[] $rateCode
     * @param \Sabre\UpdateReservation\StructType\TourCode $tourCode
     * @param \Sabre\UpdateReservation\StructType\VehiclePreferences $vehiclePreferences
     * @param \Sabre\UpdateReservation\StructType\LocationPreferences $locationPreferences
     * @param \Sabre\UpdateReservation\StructType\VendorPreferences $vendorPreferences
     * @param \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences $specialEquipmentPreferences
     * @param string $ccRate
     * @param bool $commission
     * @param string $currencyCode
     * @param string $mileagePlan
     * @param bool $rateAssured
     * @param string $rateCategory
     * @param string $ratePlan
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Corporate $corporate = null, \Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty = null, \Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid = null, \Sabre\UpdateReservation\StructType\ID $iD = null, \Sabre\UpdateReservation\StructType\Promotion $promotion = null, array $rateCode = array(), \Sabre\UpdateReservation\StructType\TourCode $tourCode = null, \Sabre\UpdateReservation\StructType\VehiclePreferences $vehiclePreferences = null, \Sabre\UpdateReservation\StructType\LocationPreferences $locationPreferences = null, \Sabre\UpdateReservation\StructType\VendorPreferences $vendorPreferences = null, \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences $specialEquipmentPreferences = null, $ccRate = null, $commission = null, $currencyCode = null, $mileagePlan = null, $rateAssured = null, $rateCategory = null, $ratePlan = null)
    {
        $this
            ->setCorporate($corporate)
            ->setCustLoyalty($custLoyalty)
            ->setGuaranteePrepaid($guaranteePrepaid)
            ->setID($iD)
            ->setPromotion($promotion)
            ->setRateCode($rateCode)
            ->setTourCode($tourCode)
            ->setVehiclePreferences($vehiclePreferences)
            ->setLocationPreferences($locationPreferences)
            ->setVendorPreferences($vendorPreferences)
            ->setSpecialEquipmentPreferences($specialEquipmentPreferences)
            ->setCcRate($ccRate)
            ->setCommission($commission)
            ->setCurrencyCode($currencyCode)
            ->setMileagePlan($mileagePlan)
            ->setRateAssured($rateAssured)
            ->setRateCategory($rateCategory)
            ->setRatePlan($ratePlan);
    }
    /**
     * Get Corporate value
     * @return \Sabre\UpdateReservation\StructType\Corporate|null
     */
    public function getCorporate()
    {
        return $this->Corporate;
    }
    /**
     * Set Corporate value
     * @param \Sabre\UpdateReservation\StructType\Corporate $corporate
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setCorporate(\Sabre\UpdateReservation\StructType\Corporate $corporate = null)
    {
        $this->Corporate = $corporate;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Sabre\UpdateReservation\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setCustLoyalty(\Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
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
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setGuaranteePrepaid(\Sabre\UpdateReservation\StructType\GuaranteePrepaid $guaranteePrepaid = null)
    {
        $this->GuaranteePrepaid = $guaranteePrepaid;
        return $this;
    }
    /**
     * Get ID value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param \Sabre\UpdateReservation\StructType\ID $iD
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setID(\Sabre\UpdateReservation\StructType\ID $iD = null)
    {
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Promotion value
     * @return \Sabre\UpdateReservation\StructType\Promotion|null
     */
    public function getPromotion()
    {
        return $this->Promotion;
    }
    /**
     * Set Promotion value
     * @param \Sabre\UpdateReservation\StructType\Promotion $promotion
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setPromotion(\Sabre\UpdateReservation\StructType\Promotion $promotion = null)
    {
        $this->Promotion = $promotion;
        return $this;
    }
    /**
     * Get RateCode value
     * @return string[]|null
     */
    public function getRateCode()
    {
        return $this->RateCode;
    }
    /**
     * Set RateCode value
     * @throws \InvalidArgumentException
     * @param string[] $rateCode
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setRateCode(array $rateCode = array())
    {
        foreach ($rateCode as $carRateQualifiersTypeRateCodeItem) {
            // validation for constraint: itemType
            if (!is_string($carRateQualifiersTypeRateCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The RateCode property can only contain items of string, "%s" given', is_object($carRateQualifiersTypeRateCodeItem) ? get_class($carRateQualifiersTypeRateCodeItem) : gettype($carRateQualifiersTypeRateCodeItem)), __LINE__);
            }
        }
        $this->RateCode = $rateCode;
        return $this;
    }
    /**
     * Add item to RateCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function addToRateCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The RateCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateCode[] = $item;
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Sabre\UpdateReservation\StructType\TourCode|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Sabre\UpdateReservation\StructType\TourCode $tourCode
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setTourCode(\Sabre\UpdateReservation\StructType\TourCode $tourCode = null)
    {
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get VehiclePreferences value
     * @return \Sabre\UpdateReservation\StructType\VehiclePreferences|null
     */
    public function getVehiclePreferences()
    {
        return $this->VehiclePreferences;
    }
    /**
     * Set VehiclePreferences value
     * @param \Sabre\UpdateReservation\StructType\VehiclePreferences $vehiclePreferences
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setVehiclePreferences(\Sabre\UpdateReservation\StructType\VehiclePreferences $vehiclePreferences = null)
    {
        $this->VehiclePreferences = $vehiclePreferences;
        return $this;
    }
    /**
     * Get LocationPreferences value
     * @return \Sabre\UpdateReservation\StructType\LocationPreferences|null
     */
    public function getLocationPreferences()
    {
        return $this->LocationPreferences;
    }
    /**
     * Set LocationPreferences value
     * @param \Sabre\UpdateReservation\StructType\LocationPreferences $locationPreferences
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setLocationPreferences(\Sabre\UpdateReservation\StructType\LocationPreferences $locationPreferences = null)
    {
        $this->LocationPreferences = $locationPreferences;
        return $this;
    }
    /**
     * Get VendorPreferences value
     * @return \Sabre\UpdateReservation\StructType\VendorPreferences|null
     */
    public function getVendorPreferences()
    {
        return $this->VendorPreferences;
    }
    /**
     * Set VendorPreferences value
     * @param \Sabre\UpdateReservation\StructType\VendorPreferences $vendorPreferences
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setVendorPreferences(\Sabre\UpdateReservation\StructType\VendorPreferences $vendorPreferences = null)
    {
        $this->VendorPreferences = $vendorPreferences;
        return $this;
    }
    /**
     * Get SpecialEquipmentPreferences value
     * @return \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences|null
     */
    public function getSpecialEquipmentPreferences()
    {
        return $this->SpecialEquipmentPreferences;
    }
    /**
     * Set SpecialEquipmentPreferences value
     * @param \Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences $specialEquipmentPreferences
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setSpecialEquipmentPreferences(\Sabre\UpdateReservation\StructType\SpecialEquipmentPreferences $specialEquipmentPreferences = null)
    {
        $this->SpecialEquipmentPreferences = $specialEquipmentPreferences;
        return $this;
    }
    /**
     * Get ccRate value
     * @return string|null
     */
    public function getCcRate()
    {
        return $this->ccRate;
    }
    /**
     * Set ccRate value
     * @param string $ccRate
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setCcRate($ccRate = null)
    {
        // validation for constraint: string
        if (!is_null($ccRate) && !is_string($ccRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ccRate)), __LINE__);
        }
        $this->ccRate = $ccRate;
        return $this;
    }
    /**
     * Get commission value
     * @return bool|null
     */
    public function getCommission()
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param bool $commission
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setCommission($commission = null)
    {
        // validation for constraint: boolean
        if (!is_null($commission) && !is_bool($commission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        return $this;
    }
    /**
     * Get currencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get mileagePlan value
     * @return string|null
     */
    public function getMileagePlan()
    {
        return $this->mileagePlan;
    }
    /**
     * Set mileagePlan value
     * @param string $mileagePlan
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setMileagePlan($mileagePlan = null)
    {
        // validation for constraint: string
        if (!is_null($mileagePlan) && !is_string($mileagePlan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mileagePlan)), __LINE__);
        }
        $this->mileagePlan = $mileagePlan;
        return $this;
    }
    /**
     * Get rateAssured value
     * @return bool|null
     */
    public function getRateAssured()
    {
        return $this->rateAssured;
    }
    /**
     * Set rateAssured value
     * @param bool $rateAssured
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setRateAssured($rateAssured = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateAssured) && !is_bool($rateAssured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateAssured)), __LINE__);
        }
        $this->rateAssured = $rateAssured;
        return $this;
    }
    /**
     * Get rateCategory value
     * @return string|null
     */
    public function getRateCategory()
    {
        return $this->rateCategory;
    }
    /**
     * Set rateCategory value
     * @param string $rateCategory
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setRateCategory($rateCategory = null)
    {
        // validation for constraint: string
        if (!is_null($rateCategory) && !is_string($rateCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateCategory)), __LINE__);
        }
        $this->rateCategory = $rateCategory;
        return $this;
    }
    /**
     * Get ratePlan value
     * @return string|null
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }
    /**
     * Set ratePlan value
     * @param string $ratePlan
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
     */
    public function setRatePlan($ratePlan = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlan) && !is_string($ratePlan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlan)), __LINE__);
        }
        $this->ratePlan = $ratePlan;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CarRateQualifiersType
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
