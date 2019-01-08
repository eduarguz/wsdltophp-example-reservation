<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for entry StructType
 * @subpackage Structs
 */
class Entry extends AbstractStructBase
{
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $key;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $value;
    /**
     * Constructor method for entry
     * @uses Entry::setKey()
     * @uses Entry::setValue()
     * @param string $key
     * @param string $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Sabre\UpdateReservation\StructType\Entry
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get value value
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Sabre\UpdateReservation\StructType\Entry
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Entry
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
