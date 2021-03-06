<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TierLabel StructType
 * @subpackage Structs
 */
class TierLabel extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Character Strings, length 0 to 500.
     * - maxLength: 500
     * - minLength: 0
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Character Strings, length 0 to 500.
     * - maxLength: 500
     * - minLength: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for TierLabel
     * @uses TierLabel::setType()
     * @uses TierLabel::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\TierLabel
     */
    public function setType($type = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($type) && strlen($type) > 500) || (is_array($type) && count($type) > 500)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 500 element(s) or a scalar of 500 character(s) at most, "%d" length given', is_scalar($type) ? strlen($type) : count($type)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($type) && strlen($type) < 0) || (is_array($type) && count($type) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Sabre\UpdateReservation\StructType\TierLabel
     */
    public function setValue($value = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($value) && strlen($value) > 500) || (is_array($value) && count($value) > 500)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 500 element(s) or a scalar of 500 character(s) at most, "%d" length given', is_scalar($value) ? strlen($value) : count($value)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($value) && strlen($value) < 0) || (is_array($value) && count($value) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TierLabel
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
