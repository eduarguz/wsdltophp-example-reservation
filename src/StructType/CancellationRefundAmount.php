<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancellationRefundAmount StructType
 * Meta informations extracted from the WSDL
 * - documentation: "CancellationRefundAmount" is used to return the CancellationRefundAmount amount or percentage.
 * @subpackage Structs
 */
class CancellationRefundAmount extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The numDays
     * Meta informations extracted from the WSDL
     * - documentation: "numDays" is used to return the number of days associated with the particular CancellationRefundAmount.
     * - use: optional
     * @var string
     */
    public $numDays;
    /**
     * Constructor method for CancellationRefundAmount
     * @uses CancellationRefundAmount::set_()
     * @uses CancellationRefundAmount::setNumDays()
     * @param string $_
     * @param string $numDays
     */
    public function __construct($_ = null, $numDays = null)
    {
        $this
            ->set_($_)
            ->setNumDays($numDays);
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
     * @return \Sabre\UpdateReservation\StructType\CancellationRefundAmount
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
     * Get numDays value
     * @return string|null
     */
    public function getNumDays()
    {
        return $this->numDays;
    }
    /**
     * Set numDays value
     * @param string $numDays
     * @return \Sabre\UpdateReservation\StructType\CancellationRefundAmount
     */
    public function setNumDays($numDays = null)
    {
        // validation for constraint: string
        if (!is_null($numDays) && !is_string($numDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numDays)), __LINE__);
        }
        $this->numDays = $numDays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CancellationRefundAmount
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
