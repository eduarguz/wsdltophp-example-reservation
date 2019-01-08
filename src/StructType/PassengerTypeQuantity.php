<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerTypeQuantity StructType
 * Meta informations extracted from the WSDL
 * - documentation: Quantity of particulat pax type indicator.
 * @subpackage Structs
 */
class PassengerTypeQuantity extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxLength: 3
     * - minLength: 3
     * - pattern: [A-Z][A-Z0-9]{2,2}
     * @var string
     */
    public $Code;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Passenger type quantity. Ex."1"
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for PassengerTypeQuantity
     * @uses PassengerTypeQuantity::setCode()
     * @uses PassengerTypeQuantity::setQuantity()
     * @param string $code
     * @param int $quantity
     */
    public function __construct($code = null, $quantity = null)
    {
        $this
            ->setCode($code)
            ->setQuantity($quantity);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantity
     */
    public function setCode($code = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($code) && strlen($code) > 3) || (is_array($code) && count($code) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($code) ? strlen($code) : count($code)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($code) && strlen($code) < 3) || (is_array($code) && count($code) < 3)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($code) && !preg_match('/[A-Z][A-Z0-9]{2,2}/', $code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z][A-Z0-9]{2,2}", "%s" given', var_export($code, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantity
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantity
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
