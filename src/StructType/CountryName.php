<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryName StructType
 * @subpackage Structs
 */
class CountryName extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: required
     * - documentation: 2 Character Country Code
     * - maxLength: 2
     * - minLength: 2
     * @var string
     */
    public $Code;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for CountryName
     * @uses CountryName::setCode()
     * @uses CountryName::set_()
     * @param string $code
     * @param string $_
     */
    public function __construct($code = null, $_ = null)
    {
        $this
            ->setCode($code)
            ->set_($_);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\CountryName
     */
    public function setCode($code = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($code) && strlen($code) > 2) || (is_array($code) && count($code) > 2)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at most, "%d" length given', is_scalar($code) ? strlen($code) : count($code)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($code) && strlen($code) < 2) || (is_array($code) && count($code) < 2)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\CountryName
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CountryName
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
