<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a rate plan in response
 * @subpackage Structs
 */
class RatePlanType extends AbstractStructBase
{
    /**
     * The RatePlanDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RatePlanDescriptionType
     */
    public $RatePlanDescription;
    /**
     * The RatePlanInclusions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RatePlanInclusionsType
     */
    public $RatePlanInclusions;
    /**
     * The MealsIncluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MealsIncludedType
     */
    public $MealsIncluded;
    /**
     * The RateInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RateInfoType
     */
    public $RateInfo;
    /**
     * The RatePlanName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RatePlanName;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
    /**
     * The SupplierRatePlanCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SupplierRatePlanCode;
    /**
     * The RatePlanType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RatePlanType;
    /**
     * The PrepaidIndicator
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $PrepaidIndicator;
    /**
     * The RateAssured
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RateAssured;
    /**
     * Constructor method for RatePlanType
     * @uses RatePlanType::setRatePlanDescription()
     * @uses RatePlanType::setRatePlanInclusions()
     * @uses RatePlanType::setMealsIncluded()
     * @uses RatePlanType::setRateInfo()
     * @uses RatePlanType::setRatePlanName()
     * @uses RatePlanType::setRatePlanCode()
     * @uses RatePlanType::setSupplierRatePlanCode()
     * @uses RatePlanType::setRatePlanType()
     * @uses RatePlanType::setPrepaidIndicator()
     * @uses RatePlanType::setRateAssured()
     * @param \Sabre\UpdateReservation\StructType\RatePlanDescriptionType $ratePlanDescription
     * @param \Sabre\UpdateReservation\StructType\RatePlanInclusionsType $ratePlanInclusions
     * @param \Sabre\UpdateReservation\StructType\MealsIncludedType $mealsIncluded
     * @param \Sabre\UpdateReservation\StructType\RateInfoType $rateInfo
     * @param string $ratePlanName
     * @param string $ratePlanCode
     * @param string $supplierRatePlanCode
     * @param string $ratePlanType
     * @param bool $prepaidIndicator
     * @param string $rateAssured
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RatePlanDescriptionType $ratePlanDescription = null, \Sabre\UpdateReservation\StructType\RatePlanInclusionsType $ratePlanInclusions = null, \Sabre\UpdateReservation\StructType\MealsIncludedType $mealsIncluded = null, \Sabre\UpdateReservation\StructType\RateInfoType $rateInfo = null, $ratePlanName = null, $ratePlanCode = null, $supplierRatePlanCode = null, $ratePlanType = null, $prepaidIndicator = null, $rateAssured = null)
    {
        $this
            ->setRatePlanDescription($ratePlanDescription)
            ->setRatePlanInclusions($ratePlanInclusions)
            ->setMealsIncluded($mealsIncluded)
            ->setRateInfo($rateInfo)
            ->setRatePlanName($ratePlanName)
            ->setRatePlanCode($ratePlanCode)
            ->setSupplierRatePlanCode($supplierRatePlanCode)
            ->setRatePlanType($ratePlanType)
            ->setPrepaidIndicator($prepaidIndicator)
            ->setRateAssured($rateAssured);
    }
    /**
     * Get RatePlanDescription value
     * @return \Sabre\UpdateReservation\StructType\RatePlanDescriptionType|null
     */
    public function getRatePlanDescription()
    {
        return $this->RatePlanDescription;
    }
    /**
     * Set RatePlanDescription value
     * @param \Sabre\UpdateReservation\StructType\RatePlanDescriptionType $ratePlanDescription
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRatePlanDescription(\Sabre\UpdateReservation\StructType\RatePlanDescriptionType $ratePlanDescription = null)
    {
        $this->RatePlanDescription = $ratePlanDescription;
        return $this;
    }
    /**
     * Get RatePlanInclusions value
     * @return \Sabre\UpdateReservation\StructType\RatePlanInclusionsType|null
     */
    public function getRatePlanInclusions()
    {
        return $this->RatePlanInclusions;
    }
    /**
     * Set RatePlanInclusions value
     * @param \Sabre\UpdateReservation\StructType\RatePlanInclusionsType $ratePlanInclusions
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRatePlanInclusions(\Sabre\UpdateReservation\StructType\RatePlanInclusionsType $ratePlanInclusions = null)
    {
        $this->RatePlanInclusions = $ratePlanInclusions;
        return $this;
    }
    /**
     * Get MealsIncluded value
     * @return \Sabre\UpdateReservation\StructType\MealsIncludedType|null
     */
    public function getMealsIncluded()
    {
        return $this->MealsIncluded;
    }
    /**
     * Set MealsIncluded value
     * @param \Sabre\UpdateReservation\StructType\MealsIncludedType $mealsIncluded
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setMealsIncluded(\Sabre\UpdateReservation\StructType\MealsIncludedType $mealsIncluded = null)
    {
        $this->MealsIncluded = $mealsIncluded;
        return $this;
    }
    /**
     * Get RateInfo value
     * @return \Sabre\UpdateReservation\StructType\RateInfoType|null
     */
    public function getRateInfo()
    {
        return $this->RateInfo;
    }
    /**
     * Set RateInfo value
     * @param \Sabre\UpdateReservation\StructType\RateInfoType $rateInfo
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRateInfo(\Sabre\UpdateReservation\StructType\RateInfoType $rateInfo = null)
    {
        $this->RateInfo = $rateInfo;
        return $this;
    }
    /**
     * Get RatePlanName value
     * @return string|null
     */
    public function getRatePlanName()
    {
        return $this->RatePlanName;
    }
    /**
     * Set RatePlanName value
     * @param string $ratePlanName
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRatePlanName($ratePlanName = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanName) && !is_string($ratePlanName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanName)), __LINE__);
        }
        $this->RatePlanName = $ratePlanName;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get SupplierRatePlanCode value
     * @return string|null
     */
    public function getSupplierRatePlanCode()
    {
        return $this->SupplierRatePlanCode;
    }
    /**
     * Set SupplierRatePlanCode value
     * @param string $supplierRatePlanCode
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setSupplierRatePlanCode($supplierRatePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierRatePlanCode) && !is_string($supplierRatePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierRatePlanCode)), __LINE__);
        }
        $this->SupplierRatePlanCode = $supplierRatePlanCode;
        return $this;
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType()
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRatePlanType($ratePlanType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        return $this;
    }
    /**
     * Get PrepaidIndicator value
     * @return bool|null
     */
    public function getPrepaidIndicator()
    {
        return $this->PrepaidIndicator;
    }
    /**
     * Set PrepaidIndicator value
     * @param bool $prepaidIndicator
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setPrepaidIndicator($prepaidIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($prepaidIndicator) && !is_bool($prepaidIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($prepaidIndicator)), __LINE__);
        }
        $this->PrepaidIndicator = $prepaidIndicator;
        return $this;
    }
    /**
     * Get RateAssured value
     * @return string|null
     */
    public function getRateAssured()
    {
        return $this->RateAssured;
    }
    /**
     * Set RateAssured value
     * @param string $rateAssured
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
     */
    public function setRateAssured($rateAssured = null)
    {
        // validation for constraint: string
        if (!is_null($rateAssured) && !is_string($rateAssured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateAssured)), __LINE__);
        }
        $this->RateAssured = $rateAssured;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RatePlanType
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
