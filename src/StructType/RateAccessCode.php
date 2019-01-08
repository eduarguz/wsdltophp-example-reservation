<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateAccessCode StructType
 * @subpackage Structs
 */
class RateAccessCode extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $code;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * Constructor method for RateAccessCode
     * @uses RateAccessCode::setCode()
     * @uses RateAccessCode::set_()
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
     * @return \Sabre\UpdateReservation\StructType\RateAccessCode
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
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
     * @return \Sabre\UpdateReservation\StructType\RateAccessCode
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
     * @return \Sabre\UpdateReservation\StructType\RateAccessCode
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
