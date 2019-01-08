<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceOptOut StructType
 * Meta informations extracted from the WSDL
 * - type: InsuranceOptOut
 * @subpackage Structs
 */
class InsuranceOptOut extends AbstractStructBase
{
    /**
     * The VendorCode
     * @var string
     */
    public $VendorCode;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QuoteID;
    /**
     * The ReasonCode
     * @var string
     */
    public $ReasonCode;
    /**
     * The ReasonText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReasonText;
    /**
     * Constructor method for InsuranceOptOut
     * @uses InsuranceOptOut::setVendorCode()
     * @uses InsuranceOptOut::setQuoteID()
     * @uses InsuranceOptOut::setReasonCode()
     * @uses InsuranceOptOut::setReasonText()
     * @param string $vendorCode
     * @param string $quoteID
     * @param string $reasonCode
     * @param string $reasonText
     */
    public function __construct($vendorCode = null, $quoteID = null, $reasonCode = null, $reasonText = null)
    {
        $this
            ->setVendorCode($vendorCode)
            ->setQuoteID($quoteID)
            ->setReasonCode($reasonCode)
            ->setReasonText($reasonText);
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\InsuranceOptOut
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param string $quoteID
     * @return \Sabre\UpdateReservation\StructType\InsuranceOptOut
     */
    public function setQuoteID($quoteID = null)
    {
        // validation for constraint: string
        if (!is_null($quoteID) && !is_string($quoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteID)), __LINE__);
        }
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $reasonCode
     * @return \Sabre\UpdateReservation\StructType\InsuranceOptOut
     */
    public function setReasonCode($reasonCode = null)
    {
        // validation for constraint: string
        if (!is_null($reasonCode) && !is_string($reasonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonCode)), __LINE__);
        }
        $this->ReasonCode = $reasonCode;
        return $this;
    }
    /**
     * Get ReasonText value
     * @return string|null
     */
    public function getReasonText()
    {
        return $this->ReasonText;
    }
    /**
     * Set ReasonText value
     * @param string $reasonText
     * @return \Sabre\UpdateReservation\StructType\InsuranceOptOut
     */
    public function setReasonText($reasonText = null)
    {
        // validation for constraint: string
        if (!is_null($reasonText) && !is_string($reasonText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonText)), __LINE__);
        }
        $this->ReasonText = $reasonText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\InsuranceOptOut
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
