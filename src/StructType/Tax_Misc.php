<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax.Misc StructType
 * @subpackage Structs
 */
class Tax_Misc extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: A code that applies to the tax (e.g, US, ZP). Mapped to: SR05_C2_TCOD
     * - use: required
     * - pattern: [0-9a-zA-Z]{2,3}
     * @var string
     */
    public $code;
    /**
     * The Amount
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $Amount;
    /**
     * The exempt
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: An indicator that a tax has been exempted. Mapped to:
     * @var bool
     */
    public $exempt;
    /**
     * Constructor method for Tax.Misc
     * @uses Tax_Misc::setCode()
     * @uses Tax_Misc::setAmount()
     * @uses Tax_Misc::setExempt()
     * @param string $code
     * @param \Sabre\UpdateReservation\StructType\Amount $amount
     * @param bool $exempt
     */
    public function __construct($code = null, \Sabre\UpdateReservation\StructType\Amount $amount = null, $exempt = false)
    {
        $this
            ->setCode($code)
            ->setAmount($amount)
            ->setExempt($exempt);
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Tax_Misc
     */
    public function setCode($code = null)
    {
        // validation for constraint: pattern
        if (is_scalar($code) && !preg_match('/[0-9a-zA-Z]{2,3}/', $code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9a-zA-Z]{2,3}", "%s" given', var_export($code, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get Amount value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Sabre\UpdateReservation\StructType\Amount $amount
     * @return \Sabre\UpdateReservation\StructType\Tax_Misc
     */
    public function setAmount(\Sabre\UpdateReservation\StructType\Amount $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get exempt value
     * @return bool|null
     */
    public function getExempt()
    {
        return $this->exempt;
    }
    /**
     * Set exempt value
     * @param bool $exempt
     * @return \Sabre\UpdateReservation\StructType\Tax_Misc
     */
    public function setExempt($exempt = false)
    {
        // validation for constraint: boolean
        if (!is_null($exempt) && !is_bool($exempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exempt)), __LINE__);
        }
        $this->exempt = $exempt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Tax_Misc
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
