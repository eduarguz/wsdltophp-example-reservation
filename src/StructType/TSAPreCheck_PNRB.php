<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TSAPreCheck.PNRB StructType
 * @subpackage Structs
 */
class TSAPreCheck_PNRB extends AbstractStructBase
{
    /**
     * The CodeWordLevel
     * Meta informations extracted from the WSDL
     * - documentation: Also referred to as Known Traveler Indicator.
     * - minOccurs: 0
     * @var string
     */
    public $CodeWordLevel;
    /**
     * Constructor method for TSAPreCheck.PNRB
     * @uses TSAPreCheck_PNRB::setCodeWordLevel()
     * @param string $codeWordLevel
     */
    public function __construct($codeWordLevel = null)
    {
        $this
            ->setCodeWordLevel($codeWordLevel);
    }
    /**
     * Get CodeWordLevel value
     * @return string|null
     */
    public function getCodeWordLevel()
    {
        return $this->CodeWordLevel;
    }
    /**
     * Set CodeWordLevel value
     * @param string $codeWordLevel
     * @return \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB
     */
    public function setCodeWordLevel($codeWordLevel = null)
    {
        // validation for constraint: string
        if (!is_null($codeWordLevel) && !is_string($codeWordLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeWordLevel)), __LINE__);
        }
        $this->CodeWordLevel = $codeWordLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TSAPreCheck_PNRB
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
