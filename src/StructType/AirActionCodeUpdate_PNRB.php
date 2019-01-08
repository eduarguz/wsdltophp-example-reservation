<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirActionCodeUpdate.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to update action code of air segment
 * @subpackage Structs
 */
class AirActionCodeUpdate_PNRB extends AbstractStructBase
{
    /**
     * The ActionCode
     * @var string
     */
    public $ActionCode;
    /**
     * Constructor method for AirActionCodeUpdate.PNRB
     * @uses AirActionCodeUpdate_PNRB::setActionCode()
     * @param string $actionCode
     */
    public function __construct($actionCode = null)
    {
        $this
            ->setActionCode($actionCode);
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB
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
