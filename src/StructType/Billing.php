<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Billing StructType
 * @subpackage Structs
 */
class Billing extends AbstractStructBase
{
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - documentation: "number" is used to return the billing number.
     * - use: optional
     * @var string
     */
    public $number;
    /**
     * The reference
     * Meta informations extracted from the WSDL
     * - documentation: "reference" is used to return the billing reference number.
     * - use: optional
     * @var string
     */
    public $reference;
    /**
     * Constructor method for Billing
     * @uses Billing::setNumber()
     * @uses Billing::setReference()
     * @param string $number
     * @param string $reference
     */
    public function __construct($number = null, $reference = null)
    {
        $this
            ->setNumber($number)
            ->setReference($reference);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\Billing
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Sabre\UpdateReservation\StructType\Billing
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Billing
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
