<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxBreakdownCode StructType
 * @subpackage Structs
 */
class TaxBreakdownCode extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The TaxPaid
     * @var bool
     */
    public $TaxPaid;
    /**
     * Constructor method for TaxBreakdownCode
     * @uses TaxBreakdownCode::set_()
     * @uses TaxBreakdownCode::setTaxPaid()
     * @param string $_
     * @param bool $taxPaid
     */
    public function __construct($_ = null, $taxPaid = null)
    {
        $this
            ->set_($_)
            ->setTaxPaid($taxPaid);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\TaxBreakdownCode
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get TaxPaid value
     * @return bool|null
     */
    public function getTaxPaid()
    {
        return $this->TaxPaid;
    }
    /**
     * Set TaxPaid value
     * @param bool $taxPaid
     * @return \Sabre\UpdateReservation\StructType\TaxBreakdownCode
     */
    public function setTaxPaid($taxPaid = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxPaid) && !is_bool($taxPaid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxPaid)), __LINE__);
        }
        $this->TaxPaid = $taxPaid;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TaxBreakdownCode
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
