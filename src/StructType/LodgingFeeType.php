<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingFeeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Single Fee
 * @subpackage Structs
 */
class LodgingFeeType extends AbstractStructBase
{
    /**
     * The FeeDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FeeDescription
     */
    public $FeeDescription;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: OpenTravel Code List Fee Tax Type (FIT) | Positive Integer to denote OTA Codes
     * - use: optional
     * - minInclusive: 1
     * @var int
     */
    public $Code;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
    /**
     * The ApplyAs
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ApplyAs;
    /**
     * The BasisType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BasisType;
    /**
     * Constructor method for LodgingFeeType
     * @uses LodgingFeeType::setFeeDescription()
     * @uses LodgingFeeType::setCode()
     * @uses LodgingFeeType::setAmount()
     * @uses LodgingFeeType::setCurrencyCode()
     * @uses LodgingFeeType::setApplyAs()
     * @uses LodgingFeeType::setBasisType()
     * @param \Sabre\UpdateReservation\StructType\FeeDescription $feeDescription
     * @param int $code
     * @param float $amount
     * @param string $currencyCode
     * @param string $applyAs
     * @param string $basisType
     */
    public function __construct(\Sabre\UpdateReservation\StructType\FeeDescription $feeDescription = null, $code = null, $amount = null, $currencyCode = null, $applyAs = null, $basisType = null)
    {
        $this
            ->setFeeDescription($feeDescription)
            ->setCode($code)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setApplyAs($applyAs)
            ->setBasisType($basisType);
    }
    /**
     * Get FeeDescription value
     * @return \Sabre\UpdateReservation\StructType\FeeDescription|null
     */
    public function getFeeDescription()
    {
        return $this->FeeDescription;
    }
    /**
     * Set FeeDescription value
     * @param \Sabre\UpdateReservation\StructType\FeeDescription $feeDescription
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
     */
    public function setFeeDescription(\Sabre\UpdateReservation\StructType\FeeDescription $feeDescription = null)
    {
        $this->FeeDescription = $feeDescription;
        return $this;
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
     */
    public function setCode($code = null)
    {
        // validation for constraint: minInclusive
        if ($code < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $code), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) > 3) || (is_array($currencyCode) && count($currencyCode) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($currencyCode) ? strlen($currencyCode) : count($currencyCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get ApplyAs value
     * @return string|null
     */
    public function getApplyAs()
    {
        return $this->ApplyAs;
    }
    /**
     * Set ApplyAs value
     * @param string $applyAs
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
     */
    public function setApplyAs($applyAs = null)
    {
        // validation for constraint: string
        if (!is_null($applyAs) && !is_string($applyAs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applyAs)), __LINE__);
        }
        $this->ApplyAs = $applyAs;
        return $this;
    }
    /**
     * Get BasisType value
     * @return string|null
     */
    public function getBasisType()
    {
        return $this->BasisType;
    }
    /**
     * Set BasisType value
     * @param string $basisType
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
     */
    public function setBasisType($basisType = null)
    {
        // validation for constraint: string
        if (!is_null($basisType) && !is_string($basisType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($basisType)), __LINE__);
        }
        $this->BasisType = $basisType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingFeeType
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
