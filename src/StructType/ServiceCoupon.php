<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceCoupon StructType
 * @subpackage Structs
 */
class ServiceCoupon extends AbstractStructBase
{
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
    /**
     * The StartLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartLocation;
    /**
     * The StartDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDateTime;
    /**
     * The EndLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndLocation;
    /**
     * The CurrentStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CurrentStatus;
    /**
     * The coupon
     * @var string
     */
    public $coupon;
    /**
     * Constructor method for ServiceCoupon
     * @uses ServiceCoupon::setClassOfService()
     * @uses ServiceCoupon::setStartLocation()
     * @uses ServiceCoupon::setStartDateTime()
     * @uses ServiceCoupon::setEndLocation()
     * @uses ServiceCoupon::setCurrentStatus()
     * @uses ServiceCoupon::setCoupon()
     * @param string $classOfService
     * @param string $startLocation
     * @param string $startDateTime
     * @param string $endLocation
     * @param string $currentStatus
     * @param string $coupon
     */
    public function __construct($classOfService = null, $startLocation = null, $startDateTime = null, $endLocation = null, $currentStatus = null, $coupon = null)
    {
        $this
            ->setClassOfService($classOfService)
            ->setStartLocation($startLocation)
            ->setStartDateTime($startDateTime)
            ->setEndLocation($endLocation)
            ->setCurrentStatus($currentStatus)
            ->setCoupon($coupon);
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService()
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
     */
    public function setClassOfService($classOfService = null)
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        return $this;
    }
    /**
     * Get StartLocation value
     * @return string|null
     */
    public function getStartLocation()
    {
        return $this->StartLocation;
    }
    /**
     * Set StartLocation value
     * @param string $startLocation
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
     */
    public function setStartLocation($startLocation = null)
    {
        // validation for constraint: string
        if (!is_null($startLocation) && !is_string($startLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startLocation)), __LINE__);
        }
        $this->StartLocation = $startLocation;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndLocation value
     * @return string|null
     */
    public function getEndLocation()
    {
        return $this->EndLocation;
    }
    /**
     * Set EndLocation value
     * @param string $endLocation
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
     */
    public function setEndLocation($endLocation = null)
    {
        // validation for constraint: string
        if (!is_null($endLocation) && !is_string($endLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endLocation)), __LINE__);
        }
        $this->EndLocation = $endLocation;
        return $this;
    }
    /**
     * Get CurrentStatus value
     * @return string|null
     */
    public function getCurrentStatus()
    {
        return $this->CurrentStatus;
    }
    /**
     * Set CurrentStatus value
     * @param string $currentStatus
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
     */
    public function setCurrentStatus($currentStatus = null)
    {
        // validation for constraint: string
        if (!is_null($currentStatus) && !is_string($currentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentStatus)), __LINE__);
        }
        $this->CurrentStatus = $currentStatus;
        return $this;
    }
    /**
     * Get coupon value
     * @return string|null
     */
    public function getCoupon()
    {
        return $this->coupon;
    }
    /**
     * Set coupon value
     * @param string $coupon
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
     */
    public function setCoupon($coupon = null)
    {
        // validation for constraint: string
        if (!is_null($coupon) && !is_string($coupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coupon)), __LINE__);
        }
        $this->coupon = $coupon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon
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
