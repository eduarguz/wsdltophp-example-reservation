<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GTRPayment.PNRB StructType
 * @subpackage Structs
 */
class GTRPayment_PNRB extends Payment_PNRB
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: Government Travel Request number * max of 15 characters, if type = GTR
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * Constructor method for GTRPayment.PNRB
     * @uses GTRPayment_PNRB::setNumber()
     * @param string $number
     */
    public function __construct($number = null)
    {
        $this
            ->setNumber($number);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\GTRPayment_PNRB
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GTRPayment_PNRB
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
