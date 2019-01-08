<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceCoverage StructType
 * @subpackage Structs
 */
class InsuranceCoverage extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: "Name" is used to return the coverage name associated with the particular insurance segment.
     * @var string
     */
    public $Name;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: coverage code as defined in Sabre system (DU table)
     * @var string
     */
    public $code;
    /**
     * The vendorCode
     * @var string
     */
    public $vendorCode;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: "Amount" is used to return the coverage amount associated with the particular insurance segment.
     * @var string
     */
    public $amount;
    /**
     * Constructor method for InsuranceCoverage
     * @uses InsuranceCoverage::setName()
     * @uses InsuranceCoverage::setDescription()
     * @uses InsuranceCoverage::setCode()
     * @uses InsuranceCoverage::setVendorCode()
     * @uses InsuranceCoverage::setAmount()
     * @param string $name
     * @param string $description
     * @param string $code
     * @param string $vendorCode
     * @param string $amount
     */
    public function __construct($name = null, $description = null, $code = null, $vendorCode = null, $amount = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setCode($code)
            ->setVendorCode($vendorCode)
            ->setAmount($amount);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get vendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }
    /**
     * Set vendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->vendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverage
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
