<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RSAKeyValueType StructType
 * @subpackage Structs
 */
class RSAKeyValueType extends AbstractStructBase
{
    /**
     * The Modulus
     * @var string
     */
    public $Modulus;
    /**
     * The Exponent
     * @var string
     */
    public $Exponent;
    /**
     * Constructor method for RSAKeyValueType
     * @uses RSAKeyValueType::setModulus()
     * @uses RSAKeyValueType::setExponent()
     * @param string $modulus
     * @param string $exponent
     */
    public function __construct($modulus = null, $exponent = null)
    {
        $this
            ->setModulus($modulus)
            ->setExponent($exponent);
    }
    /**
     * Get Modulus value
     * @return string|null
     */
    public function getModulus()
    {
        return $this->Modulus;
    }
    /**
     * Set Modulus value
     * @param string $modulus
     * @return \Sabre\UpdateReservation\StructType\RSAKeyValueType
     */
    public function setModulus($modulus = null)
    {
        // validation for constraint: string
        if (!is_null($modulus) && !is_string($modulus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modulus)), __LINE__);
        }
        $this->Modulus = $modulus;
        return $this;
    }
    /**
     * Get Exponent value
     * @return string|null
     */
    public function getExponent()
    {
        return $this->Exponent;
    }
    /**
     * Set Exponent value
     * @param string $exponent
     * @return \Sabre\UpdateReservation\StructType\RSAKeyValueType
     */
    public function setExponent($exponent = null)
    {
        // validation for constraint: string
        if (!is_null($exponent) && !is_string($exponent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exponent)), __LINE__);
        }
        $this->Exponent = $exponent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RSAKeyValueType
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
