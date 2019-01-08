<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyType StructType
 * @subpackage Structs
 */
class CurrencyType extends AbstractStructBase
{
    /**
     * The dual
     * Meta informations extracted from the WSDL
     * - documentation: Dual currency | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $dual;
    /**
     * The mOverride
     * Meta informations extracted from the WSDL
     * - documentation: M override
     * @var bool
     */
    public $mOverride;
    /**
     * Constructor method for CurrencyType
     * @uses CurrencyType::setDual()
     * @uses CurrencyType::setMOverride()
     * @param string $dual
     * @param bool $mOverride
     */
    public function __construct($dual = null, $mOverride = null)
    {
        $this
            ->setDual($dual)
            ->setMOverride($mOverride);
    }
    /**
     * Get dual value
     * @return string|null
     */
    public function getDual()
    {
        return $this->dual;
    }
    /**
     * Set dual value
     * @param string $dual
     * @return \Sabre\UpdateReservation\StructType\CurrencyType
     */
    public function setDual($dual = null)
    {
        // validation for constraint: pattern
        if (is_scalar($dual) && !preg_match('/[a-zA-Z]{3}/', $dual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($dual, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($dual) && !is_string($dual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dual)), __LINE__);
        }
        $this->dual = $dual;
        return $this;
    }
    /**
     * Get mOverride value
     * @return bool|null
     */
    public function getMOverride()
    {
        return $this->mOverride;
    }
    /**
     * Set mOverride value
     * @param bool $mOverride
     * @return \Sabre\UpdateReservation\StructType\CurrencyType
     */
    public function setMOverride($mOverride = null)
    {
        // validation for constraint: boolean
        if (!is_null($mOverride) && !is_bool($mOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mOverride)), __LINE__);
        }
        $this->mOverride = $mOverride;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CurrencyType
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
