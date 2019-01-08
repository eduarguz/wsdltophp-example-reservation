<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StateProv StructType
 * Meta informations extracted from the WSDL
 * - documentation: State name with code
 * @subpackage Structs
 */
class StateProv extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The StateCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StateCode;
    /**
     * Constructor method for StateProv
     * @uses StateProv::set_()
     * @uses StateProv::setStateCode()
     * @param string $_
     * @param string $stateCode
     */
    public function __construct($_ = null, $stateCode = null)
    {
        $this
            ->set_($_)
            ->setStateCode($stateCode);
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
     * @return \Sabre\UpdateReservation\StructType\StateProv
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
     * Get StateCode value
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param string $stateCode
     * @return \Sabre\UpdateReservation\StructType\StateProv
     */
    public function setStateCode($stateCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateCode) && !is_string($stateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateCode)), __LINE__);
        }
        $this->StateCode = $stateCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\StateProv
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
