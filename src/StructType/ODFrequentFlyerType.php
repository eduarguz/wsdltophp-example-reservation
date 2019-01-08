<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ODFrequentFlyerType StructType
 * @subpackage Structs
 */
class ODFrequentFlyerType extends AbstractStructBase
{
    /**
     * The tierLevel
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $tierLevel;
    /**
     * The supplierCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $supplierCode;
    /**
     * Constructor method for ODFrequentFlyerType
     * @uses ODFrequentFlyerType::setTierLevel()
     * @uses ODFrequentFlyerType::setSupplierCode()
     * @param int $tierLevel
     * @param string $supplierCode
     */
    public function __construct($tierLevel = null, $supplierCode = null)
    {
        $this
            ->setTierLevel($tierLevel)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get tierLevel value
     * @return int|null
     */
    public function getTierLevel()
    {
        return $this->tierLevel;
    }
    /**
     * Set tierLevel value
     * @param int $tierLevel
     * @return \Sabre\UpdateReservation\StructType\ODFrequentFlyerType
     */
    public function setTierLevel($tierLevel = null)
    {
        // validation for constraint: maxInclusive
        if ($tierLevel > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $tierLevel), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($tierLevel < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $tierLevel), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($tierLevel) && !is_numeric($tierLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tierLevel)), __LINE__);
        }
        $this->tierLevel = $tierLevel;
        return $this;
    }
    /**
     * Get supplierCode value
     * @return string|null
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }
    /**
     * Set supplierCode value
     * @param string $supplierCode
     * @return \Sabre\UpdateReservation\StructType\ODFrequentFlyerType
     */
    public function setSupplierCode($supplierCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierCode)), __LINE__);
        }
        $this->supplierCode = $supplierCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ODFrequentFlyerType
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
