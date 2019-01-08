<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginalPrice StructType
 * Meta informations extracted from the WSDL
 * - documentation: Original Price from Pricing - will need to be persisted with the waiver code | Original Price from Pricing - will need to be persisted with the waiver code | Original Price from Pricing - will need to be persisted with the waiver
 * code
 * - minOccurs: 0
 * @subpackage Structs
 */
class OriginalPrice extends AbstractStructBase
{
    /**
     * The WaiverCode
     * Meta informations extracted from the WSDL
     * - documentation: To override the price, waiver code is required | To override the price, waiver code is required | To override the price, waiver code is required
     * - use: required
     * - maxLength: 10
     * - minLength: 1
     * @var string
     */
    public $WaiverCode;
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for OriginalPrice
     * @uses OriginalPrice::setWaiverCode()
     * @uses OriginalPrice::set_()
     * @param string $waiverCode
     * @param float $_
     */
    public function __construct($waiverCode = null, $_ = null)
    {
        $this
            ->setWaiverCode($waiverCode)
            ->set_($_);
    }
    /**
     * Get WaiverCode value
     * @return string
     */
    public function getWaiverCode()
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param string $waiverCode
     * @return \Sabre\UpdateReservation\StructType\OriginalPrice
     */
    public function setWaiverCode($waiverCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($waiverCode) && strlen($waiverCode) > 10) || (is_array($waiverCode) && count($waiverCode) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($waiverCode) ? strlen($waiverCode) : count($waiverCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($waiverCode) && strlen($waiverCode) < 1) || (is_array($waiverCode) && count($waiverCode) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($waiverCode) && !is_string($waiverCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($waiverCode)), __LINE__);
        }
        $this->WaiverCode = $waiverCode;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \Sabre\UpdateReservation\StructType\OriginalPrice
     */
    public function set_($_ = null)
    {
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OriginalPrice
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
