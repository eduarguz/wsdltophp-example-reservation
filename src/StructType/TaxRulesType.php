<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxRulesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Combines exemption rules connected with taxes.
 * @subpackage Structs
 */
class TaxRulesType extends AbstractStructBase
{
    /**
     * The ExemptAllTaxes
     * Meta informations extracted from the WSDL
     * - documentation: Exempt all taxes (/TE)
     * - minOccurs: 0
     * @var bool
     */
    public $ExemptAllTaxes;
    /**
     * The ExemptAllTaxesAndFees
     * Meta informations extracted from the WSDL
     * - documentation: Exempt all taxes and fees (/TN)
     * - minOccurs: 0
     * @var bool
     */
    public $ExemptAllTaxesAndFees;
    /**
     * The ExemptTax
     * Meta informations extracted from the WSDL
     * - documentation: Exempt Tax (/TE)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TaxCodeType[]
     */
    public $ExemptTax;
    /**
     * Constructor method for TaxRulesType
     * @uses TaxRulesType::setExemptAllTaxes()
     * @uses TaxRulesType::setExemptAllTaxesAndFees()
     * @uses TaxRulesType::setExemptTax()
     * @param bool $exemptAllTaxes
     * @param bool $exemptAllTaxesAndFees
     * @param \Sabre\UpdateReservation\StructType\TaxCodeType[] $exemptTax
     */
    public function __construct($exemptAllTaxes = null, $exemptAllTaxesAndFees = null, array $exemptTax = array())
    {
        $this
            ->setExemptAllTaxes($exemptAllTaxes)
            ->setExemptAllTaxesAndFees($exemptAllTaxesAndFees)
            ->setExemptTax($exemptTax);
    }
    /**
     * Get ExemptAllTaxes value
     * @return bool|null
     */
    public function getExemptAllTaxes()
    {
        return $this->ExemptAllTaxes;
    }
    /**
     * Set ExemptAllTaxes value
     * @param bool $exemptAllTaxes
     * @return \Sabre\UpdateReservation\StructType\TaxRulesType
     */
    public function setExemptAllTaxes($exemptAllTaxes = null)
    {
        // validation for constraint: boolean
        if (!is_null($exemptAllTaxes) && !is_bool($exemptAllTaxes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exemptAllTaxes)), __LINE__);
        }
        $this->ExemptAllTaxes = $exemptAllTaxes;
        return $this;
    }
    /**
     * Get ExemptAllTaxesAndFees value
     * @return bool|null
     */
    public function getExemptAllTaxesAndFees()
    {
        return $this->ExemptAllTaxesAndFees;
    }
    /**
     * Set ExemptAllTaxesAndFees value
     * @param bool $exemptAllTaxesAndFees
     * @return \Sabre\UpdateReservation\StructType\TaxRulesType
     */
    public function setExemptAllTaxesAndFees($exemptAllTaxesAndFees = null)
    {
        // validation for constraint: boolean
        if (!is_null($exemptAllTaxesAndFees) && !is_bool($exemptAllTaxesAndFees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exemptAllTaxesAndFees)), __LINE__);
        }
        $this->ExemptAllTaxesAndFees = $exemptAllTaxesAndFees;
        return $this;
    }
    /**
     * Get ExemptTax value
     * @return \Sabre\UpdateReservation\StructType\TaxCodeType[]|null
     */
    public function getExemptTax()
    {
        return $this->ExemptTax;
    }
    /**
     * Set ExemptTax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TaxCodeType[] $exemptTax
     * @return \Sabre\UpdateReservation\StructType\TaxRulesType
     */
    public function setExemptTax(array $exemptTax = array())
    {
        foreach ($exemptTax as $taxRulesTypeExemptTaxItem) {
            // validation for constraint: itemType
            if (!$taxRulesTypeExemptTaxItem instanceof \Sabre\UpdateReservation\StructType\TaxCodeType) {
                throw new \InvalidArgumentException(sprintf('The ExemptTax property can only contain items of \Sabre\UpdateReservation\StructType\TaxCodeType, "%s" given', is_object($taxRulesTypeExemptTaxItem) ? get_class($taxRulesTypeExemptTaxItem) : gettype($taxRulesTypeExemptTaxItem)), __LINE__);
            }
        }
        $this->ExemptTax = $exemptTax;
        return $this;
    }
    /**
     * Add item to ExemptTax value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TaxCodeType $item
     * @return \Sabre\UpdateReservation\StructType\TaxRulesType
     */
    public function addToExemptTax(\Sabre\UpdateReservation\StructType\TaxCodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TaxCodeType) {
            throw new \InvalidArgumentException(sprintf('The ExemptTax property can only contain items of \Sabre\UpdateReservation\StructType\TaxCodeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExemptTax[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TaxRulesType
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
