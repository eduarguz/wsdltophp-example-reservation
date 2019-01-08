<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClassOfServiceUpdate.PNRB StructType
 * @subpackage Structs
 */
class ClassOfServiceUpdate_PNRB extends AbstractStructBase
{
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 99 inclusive.
     * - maxInclusive: 99
     * - minInclusive: 1
     * @var int
     */
    public $SegmentNumber;
    /**
     * The DepartureCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DepartureCity;
    /**
     * The ArrivalCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ArrivalCity;
    /**
     * The ClassOfService
     * @var string
     */
    public $ClassOfService;
    /**
     * The instantPurchase
     * @var bool
     */
    public $instantPurchase;
    /**
     * The journeyCarrierType
     * @var string
     */
    public $journeyCarrierType;
    /**
     * The isAvailabilityBreak
     * @var bool
     */
    public $isAvailabilityBreak;
    /**
     * The cat5RequiresRebook
     * @var bool
     */
    public $cat5RequiresRebook;
    /**
     * Constructor method for ClassOfServiceUpdate.PNRB
     * @uses ClassOfServiceUpdate_PNRB::setSegmentNumber()
     * @uses ClassOfServiceUpdate_PNRB::setDepartureCity()
     * @uses ClassOfServiceUpdate_PNRB::setArrivalCity()
     * @uses ClassOfServiceUpdate_PNRB::setClassOfService()
     * @uses ClassOfServiceUpdate_PNRB::setInstantPurchase()
     * @uses ClassOfServiceUpdate_PNRB::setJourneyCarrierType()
     * @uses ClassOfServiceUpdate_PNRB::setIsAvailabilityBreak()
     * @uses ClassOfServiceUpdate_PNRB::setCat5RequiresRebook()
     * @param int $segmentNumber
     * @param string $departureCity
     * @param string $arrivalCity
     * @param string $classOfService
     * @param bool $instantPurchase
     * @param string $journeyCarrierType
     * @param bool $isAvailabilityBreak
     * @param bool $cat5RequiresRebook
     */
    public function __construct($segmentNumber = null, $departureCity = null, $arrivalCity = null, $classOfService = null, $instantPurchase = null, $journeyCarrierType = null, $isAvailabilityBreak = null, $cat5RequiresRebook = null)
    {
        $this
            ->setSegmentNumber($segmentNumber)
            ->setDepartureCity($departureCity)
            ->setArrivalCity($arrivalCity)
            ->setClassOfService($classOfService)
            ->setInstantPurchase($instantPurchase)
            ->setJourneyCarrierType($journeyCarrierType)
            ->setIsAvailabilityBreak($isAvailabilityBreak)
            ->setCat5RequiresRebook($cat5RequiresRebook);
    }
    /**
     * Get SegmentNumber value
     * @return int|null
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @param int $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentNumber < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($segmentNumber) && !is_numeric($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get DepartureCity value
     * @return string|null
     */
    public function getDepartureCity()
    {
        return $this->DepartureCity;
    }
    /**
     * Set DepartureCity value
     * @param string $departureCity
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setDepartureCity($departureCity = null)
    {
        // validation for constraint: string
        if (!is_null($departureCity) && !is_string($departureCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureCity)), __LINE__);
        }
        $this->DepartureCity = $departureCity;
        return $this;
    }
    /**
     * Get ArrivalCity value
     * @return string|null
     */
    public function getArrivalCity()
    {
        return $this->ArrivalCity;
    }
    /**
     * Set ArrivalCity value
     * @param string $arrivalCity
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setArrivalCity($arrivalCity = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalCity) && !is_string($arrivalCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalCity)), __LINE__);
        }
        $this->ArrivalCity = $arrivalCity;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
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
     * Get instantPurchase value
     * @return bool|null
     */
    public function getInstantPurchase()
    {
        return $this->instantPurchase;
    }
    /**
     * Set instantPurchase value
     * @param bool $instantPurchase
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setInstantPurchase($instantPurchase = null)
    {
        // validation for constraint: boolean
        if (!is_null($instantPurchase) && !is_bool($instantPurchase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($instantPurchase)), __LINE__);
        }
        $this->instantPurchase = $instantPurchase;
        return $this;
    }
    /**
     * Get journeyCarrierType value
     * @return string|null
     */
    public function getJourneyCarrierType()
    {
        return $this->journeyCarrierType;
    }
    /**
     * Set journeyCarrierType value
     * @param string $journeyCarrierType
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setJourneyCarrierType($journeyCarrierType = null)
    {
        // validation for constraint: string
        if (!is_null($journeyCarrierType) && !is_string($journeyCarrierType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($journeyCarrierType)), __LINE__);
        }
        $this->journeyCarrierType = $journeyCarrierType;
        return $this;
    }
    /**
     * Get isAvailabilityBreak value
     * @return bool|null
     */
    public function getIsAvailabilityBreak()
    {
        return $this->isAvailabilityBreak;
    }
    /**
     * Set isAvailabilityBreak value
     * @param bool $isAvailabilityBreak
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setIsAvailabilityBreak($isAvailabilityBreak = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAvailabilityBreak) && !is_bool($isAvailabilityBreak)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAvailabilityBreak)), __LINE__);
        }
        $this->isAvailabilityBreak = $isAvailabilityBreak;
        return $this;
    }
    /**
     * Get cat5RequiresRebook value
     * @return bool|null
     */
    public function getCat5RequiresRebook()
    {
        return $this->cat5RequiresRebook;
    }
    /**
     * Set cat5RequiresRebook value
     * @param bool $cat5RequiresRebook
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public function setCat5RequiresRebook($cat5RequiresRebook = null)
    {
        // validation for constraint: boolean
        if (!is_null($cat5RequiresRebook) && !is_bool($cat5RequiresRebook)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cat5RequiresRebook)), __LINE__);
        }
        $this->cat5RequiresRebook = $cat5RequiresRebook;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
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
