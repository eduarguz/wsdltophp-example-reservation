<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Mileage StructType
 * @subpackage Structs
 */
class Mileage extends AbstractStructBase
{
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: "currencyCode" is used to return the currency code associated with mileage charges.
     * - use: optional
     * @var string
     */
    public $currencyCode;
    /**
     * The extraMileageCharge
     * Meta informations extracted from the WSDL
     * - documentation: "extraMileageCharge" is used to return extra mileage charge-related information.
     * - use: optional
     * @var string
     */
    public $extraMileageCharge;
    /**
     * The unitOfMeasure
     * Meta informations extracted from the WSDL
     * - documentation: "unitOfMeasure" is used to return the unit of measurement, i.e. miles or kilometers.
     * - use: optional
     * @var string
     */
    public $unitOfMeasure;
    /**
     * Constructor method for Mileage
     * @uses Mileage::setCurrencyCode()
     * @uses Mileage::setExtraMileageCharge()
     * @uses Mileage::setUnitOfMeasure()
     * @param string $currencyCode
     * @param string $extraMileageCharge
     * @param string $unitOfMeasure
     */
    public function __construct($currencyCode = null, $extraMileageCharge = null, $unitOfMeasure = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setExtraMileageCharge($extraMileageCharge)
            ->setUnitOfMeasure($unitOfMeasure);
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
     * @return \Sabre\UpdateReservation\StructType\Mileage
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
     * Get extraMileageCharge value
     * @return string|null
     */
    public function getExtraMileageCharge()
    {
        return $this->extraMileageCharge;
    }
    /**
     * Set extraMileageCharge value
     * @param string $extraMileageCharge
     * @return \Sabre\UpdateReservation\StructType\Mileage
     */
    public function setExtraMileageCharge($extraMileageCharge = null)
    {
        // validation for constraint: string
        if (!is_null($extraMileageCharge) && !is_string($extraMileageCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extraMileageCharge)), __LINE__);
        }
        $this->extraMileageCharge = $extraMileageCharge;
        return $this;
    }
    /**
     * Get unitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }
    /**
     * Set unitOfMeasure value
     * @param string $unitOfMeasure
     * @return \Sabre\UpdateReservation\StructType\Mileage
     */
    public function setUnitOfMeasure($unitOfMeasure = null)
    {
        // validation for constraint: string
        if (!is_null($unitOfMeasure) && !is_string($unitOfMeasure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitOfMeasure)), __LINE__);
        }
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Mileage
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
