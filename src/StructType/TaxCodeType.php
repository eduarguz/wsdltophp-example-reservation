<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the data fields available for tax code.
 * @subpackage Structs
 */
class TaxCodeType extends AbstractStructBase
{
    /**
     * The taxCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the code for the tax.
     * - use: required
     * @var string
     */
    public $taxCode;
    /**
     * Constructor method for TaxCodeType
     * @uses TaxCodeType::setTaxCode()
     * @param string $taxCode
     */
    public function __construct($taxCode = null)
    {
        $this
            ->setTaxCode($taxCode);
    }
    /**
     * Get taxCode value
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }
    /**
     * Set taxCode value
     * @param string $taxCode
     * @return \Sabre\UpdateReservation\StructType\TaxCodeType
     */
    public function setTaxCode($taxCode = null)
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCode)), __LINE__);
        }
        $this->taxCode = $taxCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TaxCodeType
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
