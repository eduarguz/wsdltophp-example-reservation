<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingInfo StructType
 * @subpackage Structs
 */
class BillingInfo extends AbstractStructBase
{
    /**
     * The BillingCode
     * Meta informations extracted from the WSDL
     * - documentation: Holds information about billing code for product
     * - minOccurs: 1
     * @var string
     */
    public $BillingCode;
    /**
     * Constructor method for BillingInfo
     * @uses BillingInfo::setBillingCode()
     * @param string $billingCode
     */
    public function __construct($billingCode = null)
    {
        $this
            ->setBillingCode($billingCode);
    }
    /**
     * Get BillingCode value
     * @return string
     */
    public function getBillingCode()
    {
        return $this->BillingCode;
    }
    /**
     * Set BillingCode value
     * @param string $billingCode
     * @return \Sabre\UpdateReservation\StructType\BillingInfo
     */
    public function setBillingCode($billingCode = null)
    {
        // validation for constraint: string
        if (!is_null($billingCode) && !is_string($billingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingCode)), __LINE__);
        }
        $this->BillingCode = $billingCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BillingInfo
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
