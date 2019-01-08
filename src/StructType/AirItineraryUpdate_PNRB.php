<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryUpdate.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to update air segment
 * @subpackage Structs
 */
class AirItineraryUpdate_PNRB extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: Used to define what to do in update e.g. CONFIRM-ALL is equivalent to the .HKALL action.
     * @var string
     */
    public $Action;
    /**
     * Constructor method for AirItineraryUpdate.PNRB
     * @uses AirItineraryUpdate_PNRB::setAction()
     * @param string $action
     */
    public function __construct($action = null)
    {
        $this
            ->setAction($action);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB
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
