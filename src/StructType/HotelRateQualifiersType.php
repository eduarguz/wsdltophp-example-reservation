<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRateQualifiersType StructType
 * @subpackage Structs
 */
class HotelRateQualifiersType extends AbstractStructBase
{
    /**
     * The RateAccessCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RateAccessCode[]
     */
    public $RateAccessCode;
    /**
     * The ContractNegotiatedRateCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var string[]
     */
    public $ContractNegotiatedRateCode;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RatePlanCode[]
     */
    public $RatePlanCode;
    /**
     * Constructor method for HotelRateQualifiersType
     * @uses HotelRateQualifiersType::setRateAccessCode()
     * @uses HotelRateQualifiersType::setContractNegotiatedRateCode()
     * @uses HotelRateQualifiersType::setRatePlanCode()
     * @param \Sabre\UpdateReservation\StructType\RateAccessCode[] $rateAccessCode
     * @param string[] $contractNegotiatedRateCode
     * @param \Sabre\UpdateReservation\StructType\RatePlanCode[] $ratePlanCode
     */
    public function __construct(array $rateAccessCode = array(), array $contractNegotiatedRateCode = array(), array $ratePlanCode = array())
    {
        $this
            ->setRateAccessCode($rateAccessCode)
            ->setContractNegotiatedRateCode($contractNegotiatedRateCode)
            ->setRatePlanCode($ratePlanCode);
    }
    /**
     * Get RateAccessCode value
     * @return \Sabre\UpdateReservation\StructType\RateAccessCode[]|null
     */
    public function getRateAccessCode()
    {
        return $this->RateAccessCode;
    }
    /**
     * Set RateAccessCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RateAccessCode[] $rateAccessCode
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public function setRateAccessCode(array $rateAccessCode = array())
    {
        foreach ($rateAccessCode as $hotelRateQualifiersTypeRateAccessCodeItem) {
            // validation for constraint: itemType
            if (!$hotelRateQualifiersTypeRateAccessCodeItem instanceof \Sabre\UpdateReservation\StructType\RateAccessCode) {
                throw new \InvalidArgumentException(sprintf('The RateAccessCode property can only contain items of \Sabre\UpdateReservation\StructType\RateAccessCode, "%s" given', is_object($hotelRateQualifiersTypeRateAccessCodeItem) ? get_class($hotelRateQualifiersTypeRateAccessCodeItem) : gettype($hotelRateQualifiersTypeRateAccessCodeItem)), __LINE__);
            }
        }
        $this->RateAccessCode = $rateAccessCode;
        return $this;
    }
    /**
     * Add item to RateAccessCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RateAccessCode $item
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public function addToRateAccessCode(\Sabre\UpdateReservation\StructType\RateAccessCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RateAccessCode) {
            throw new \InvalidArgumentException(sprintf('The RateAccessCode property can only contain items of \Sabre\UpdateReservation\StructType\RateAccessCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateAccessCode[] = $item;
        return $this;
    }
    /**
     * Get ContractNegotiatedRateCode value
     * @return string[]|null
     */
    public function getContractNegotiatedRateCode()
    {
        return $this->ContractNegotiatedRateCode;
    }
    /**
     * Set ContractNegotiatedRateCode value
     * @throws \InvalidArgumentException
     * @param string[] $contractNegotiatedRateCode
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public function setContractNegotiatedRateCode(array $contractNegotiatedRateCode = array())
    {
        foreach ($contractNegotiatedRateCode as $hotelRateQualifiersTypeContractNegotiatedRateCodeItem) {
            // validation for constraint: itemType
            if (!is_string($hotelRateQualifiersTypeContractNegotiatedRateCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The ContractNegotiatedRateCode property can only contain items of string, "%s" given', is_object($hotelRateQualifiersTypeContractNegotiatedRateCodeItem) ? get_class($hotelRateQualifiersTypeContractNegotiatedRateCodeItem) : gettype($hotelRateQualifiersTypeContractNegotiatedRateCodeItem)), __LINE__);
            }
        }
        $this->ContractNegotiatedRateCode = $contractNegotiatedRateCode;
        return $this;
    }
    /**
     * Add item to ContractNegotiatedRateCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public function addToContractNegotiatedRateCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ContractNegotiatedRateCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContractNegotiatedRateCode[] = $item;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return \Sabre\UpdateReservation\StructType\RatePlanCode[]|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RatePlanCode[] $ratePlanCode
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public function setRatePlanCode(array $ratePlanCode = array())
    {
        foreach ($ratePlanCode as $hotelRateQualifiersTypeRatePlanCodeItem) {
            // validation for constraint: itemType
            if (!$hotelRateQualifiersTypeRatePlanCodeItem instanceof \Sabre\UpdateReservation\StructType\RatePlanCode) {
                throw new \InvalidArgumentException(sprintf('The RatePlanCode property can only contain items of \Sabre\UpdateReservation\StructType\RatePlanCode, "%s" given', is_object($hotelRateQualifiersTypeRatePlanCodeItem) ? get_class($hotelRateQualifiersTypeRatePlanCodeItem) : gettype($hotelRateQualifiersTypeRatePlanCodeItem)), __LINE__);
            }
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Add item to RatePlanCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RatePlanCode $item
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
     */
    public function addToRatePlanCode(\Sabre\UpdateReservation\StructType\RatePlanCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RatePlanCode) {
            throw new \InvalidArgumentException(sprintf('The RatePlanCode property can only contain items of \Sabre\UpdateReservation\StructType\RatePlanCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlanCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelRateQualifiersType
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
