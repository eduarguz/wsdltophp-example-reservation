<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelPolicy StructType
 * @subpackage Structs
 */
class HotelPolicy extends AbstractStructBase
{
    /**
     * The DepositPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepositPolicy;
    /**
     * The GuaranteePolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GuaranteePolicy;
    /**
     * The LateArrivalPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LateArrivalPolicy;
    /**
     * The LateDeparturePolicy
     * Meta informations extracted from the WSDL
     * - documentation: Details specifics of the late departure policy policy
     * - minOccurs: 0
     * @var string
     */
    public $LateDeparturePolicy;
    /**
     * The CancellationPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CancellationPolicy;
    /**
     * The CancellationPolicyInfoList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList
     */
    public $CancellationPolicyInfoList;
    /**
     * The AdditionalPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MultilineTextType
     */
    public $AdditionalPolicy;
    /**
     * The CheckInCheckOutPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy
     */
    public $CheckInCheckOutPolicy;
    /**
     * Constructor method for HotelPolicy
     * @uses HotelPolicy::setDepositPolicy()
     * @uses HotelPolicy::setGuaranteePolicy()
     * @uses HotelPolicy::setLateArrivalPolicy()
     * @uses HotelPolicy::setLateDeparturePolicy()
     * @uses HotelPolicy::setCancellationPolicy()
     * @uses HotelPolicy::setCancellationPolicyInfoList()
     * @uses HotelPolicy::setAdditionalPolicy()
     * @uses HotelPolicy::setCheckInCheckOutPolicy()
     * @param string $depositPolicy
     * @param string $guaranteePolicy
     * @param string $lateArrivalPolicy
     * @param string $lateDeparturePolicy
     * @param string $cancellationPolicy
     * @param \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList $cancellationPolicyInfoList
     * @param \Sabre\UpdateReservation\StructType\MultilineTextType $additionalPolicy
     * @param \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy $checkInCheckOutPolicy
     */
    public function __construct($depositPolicy = null, $guaranteePolicy = null, $lateArrivalPolicy = null, $lateDeparturePolicy = null, $cancellationPolicy = null, \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList $cancellationPolicyInfoList = null, \Sabre\UpdateReservation\StructType\MultilineTextType $additionalPolicy = null, \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy $checkInCheckOutPolicy = null)
    {
        $this
            ->setDepositPolicy($depositPolicy)
            ->setGuaranteePolicy($guaranteePolicy)
            ->setLateArrivalPolicy($lateArrivalPolicy)
            ->setLateDeparturePolicy($lateDeparturePolicy)
            ->setCancellationPolicy($cancellationPolicy)
            ->setCancellationPolicyInfoList($cancellationPolicyInfoList)
            ->setAdditionalPolicy($additionalPolicy)
            ->setCheckInCheckOutPolicy($checkInCheckOutPolicy);
    }
    /**
     * Get DepositPolicy value
     * @return string|null
     */
    public function getDepositPolicy()
    {
        return $this->DepositPolicy;
    }
    /**
     * Set DepositPolicy value
     * @param string $depositPolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setDepositPolicy($depositPolicy = null)
    {
        // validation for constraint: string
        if (!is_null($depositPolicy) && !is_string($depositPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositPolicy)), __LINE__);
        }
        $this->DepositPolicy = $depositPolicy;
        return $this;
    }
    /**
     * Get GuaranteePolicy value
     * @return string|null
     */
    public function getGuaranteePolicy()
    {
        return $this->GuaranteePolicy;
    }
    /**
     * Set GuaranteePolicy value
     * @param string $guaranteePolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setGuaranteePolicy($guaranteePolicy = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteePolicy) && !is_string($guaranteePolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteePolicy)), __LINE__);
        }
        $this->GuaranteePolicy = $guaranteePolicy;
        return $this;
    }
    /**
     * Get LateArrivalPolicy value
     * @return string|null
     */
    public function getLateArrivalPolicy()
    {
        return $this->LateArrivalPolicy;
    }
    /**
     * Set LateArrivalPolicy value
     * @param string $lateArrivalPolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setLateArrivalPolicy($lateArrivalPolicy = null)
    {
        // validation for constraint: string
        if (!is_null($lateArrivalPolicy) && !is_string($lateArrivalPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lateArrivalPolicy)), __LINE__);
        }
        $this->LateArrivalPolicy = $lateArrivalPolicy;
        return $this;
    }
    /**
     * Get LateDeparturePolicy value
     * @return string|null
     */
    public function getLateDeparturePolicy()
    {
        return $this->LateDeparturePolicy;
    }
    /**
     * Set LateDeparturePolicy value
     * @param string $lateDeparturePolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setLateDeparturePolicy($lateDeparturePolicy = null)
    {
        // validation for constraint: string
        if (!is_null($lateDeparturePolicy) && !is_string($lateDeparturePolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lateDeparturePolicy)), __LINE__);
        }
        $this->LateDeparturePolicy = $lateDeparturePolicy;
        return $this;
    }
    /**
     * Get CancellationPolicy value
     * @return string|null
     */
    public function getCancellationPolicy()
    {
        return $this->CancellationPolicy;
    }
    /**
     * Set CancellationPolicy value
     * @param string $cancellationPolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setCancellationPolicy($cancellationPolicy = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationPolicy) && !is_string($cancellationPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationPolicy)), __LINE__);
        }
        $this->CancellationPolicy = $cancellationPolicy;
        return $this;
    }
    /**
     * Get CancellationPolicyInfoList value
     * @return \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList|null
     */
    public function getCancellationPolicyInfoList()
    {
        return $this->CancellationPolicyInfoList;
    }
    /**
     * Set CancellationPolicyInfoList value
     * @param \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList $cancellationPolicyInfoList
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setCancellationPolicyInfoList(\Sabre\UpdateReservation\StructType\CancellationPolicyInfoList $cancellationPolicyInfoList = null)
    {
        $this->CancellationPolicyInfoList = $cancellationPolicyInfoList;
        return $this;
    }
    /**
     * Get AdditionalPolicy value
     * @return \Sabre\UpdateReservation\StructType\MultilineTextType|null
     */
    public function getAdditionalPolicy()
    {
        return $this->AdditionalPolicy;
    }
    /**
     * Set AdditionalPolicy value
     * @param \Sabre\UpdateReservation\StructType\MultilineTextType $additionalPolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setAdditionalPolicy(\Sabre\UpdateReservation\StructType\MultilineTextType $additionalPolicy = null)
    {
        $this->AdditionalPolicy = $additionalPolicy;
        return $this;
    }
    /**
     * Get CheckInCheckOutPolicy value
     * @return \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy|null
     */
    public function getCheckInCheckOutPolicy()
    {
        return $this->CheckInCheckOutPolicy;
    }
    /**
     * Set CheckInCheckOutPolicy value
     * @param \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy $checkInCheckOutPolicy
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
     */
    public function setCheckInCheckOutPolicy(\Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy $checkInCheckOutPolicy = null)
    {
        $this->CheckInCheckOutPolicy = $checkInCheckOutPolicy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelPolicy
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
