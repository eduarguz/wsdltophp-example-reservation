<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryTax.PNRB StructType
 * @subpackage Structs
 */
class AncillaryTax_PNRB extends AbstractStructBase
{
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: Amount
     * @var float
     */
    public $TaxAmount;
    /**
     * The TaxCode
     * Meta informations extracted from the WSDL
     * - documentation: Code
     * @var string
     */
    public $TaxCode;
    /**
     * Constructor method for AncillaryTax.PNRB
     * @uses AncillaryTax_PNRB::setTaxAmount()
     * @uses AncillaryTax_PNRB::setTaxCode()
     * @param float $taxAmount
     * @param string $taxCode
     */
    public function __construct($taxAmount = null, $taxCode = null)
    {
        $this
            ->setTaxAmount($taxAmount)
            ->setTaxCode($taxCode);
    }
    /**
     * Get TaxAmount value
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param float $taxAmount
     * @return \Sabre\UpdateReservation\StructType\AncillaryTax_PNRB
     */
    public function setTaxAmount($taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get TaxCode value
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param string $taxCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryTax_PNRB
     */
    public function setTaxCode($taxCode = null)
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCode)), __LINE__);
        }
        $this->TaxCode = $taxCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryTax_PNRB
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
