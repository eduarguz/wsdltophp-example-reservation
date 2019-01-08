<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActionCodeUpdate StructType
 * @subpackage Structs
 */
class ActionCodeUpdate extends AbstractStructBase
{
    /**
     * The CurrentActioncode
     * @var string
     */
    public $CurrentActioncode;
    /**
     * The PreviousActionCode
     * @var string
     */
    public $PreviousActionCode;
    /**
     * The ActionCode
     * @var string
     */
    public $ActionCode;
    /**
     * Constructor method for ActionCodeUpdate
     * @uses ActionCodeUpdate::setCurrentActioncode()
     * @uses ActionCodeUpdate::setPreviousActionCode()
     * @uses ActionCodeUpdate::setActionCode()
     * @param string $currentActioncode
     * @param string $previousActionCode
     * @param string $actionCode
     */
    public function __construct($currentActioncode = null, $previousActionCode = null, $actionCode = null)
    {
        $this
            ->setCurrentActioncode($currentActioncode)
            ->setPreviousActionCode($previousActionCode)
            ->setActionCode($actionCode);
    }
    /**
     * Get CurrentActioncode value
     * @return string|null
     */
    public function getCurrentActioncode()
    {
        return $this->CurrentActioncode;
    }
    /**
     * Set CurrentActioncode value
     * @param string $currentActioncode
     * @return \Sabre\UpdateReservation\StructType\ActionCodeUpdate
     */
    public function setCurrentActioncode($currentActioncode = null)
    {
        // validation for constraint: string
        if (!is_null($currentActioncode) && !is_string($currentActioncode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentActioncode)), __LINE__);
        }
        $this->CurrentActioncode = $currentActioncode;
        return $this;
    }
    /**
     * Get PreviousActionCode value
     * @return string|null
     */
    public function getPreviousActionCode()
    {
        return $this->PreviousActionCode;
    }
    /**
     * Set PreviousActionCode value
     * @param string $previousActionCode
     * @return \Sabre\UpdateReservation\StructType\ActionCodeUpdate
     */
    public function setPreviousActionCode($previousActionCode = null)
    {
        // validation for constraint: string
        if (!is_null($previousActionCode) && !is_string($previousActionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousActionCode)), __LINE__);
        }
        $this->PreviousActionCode = $previousActionCode;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\ActionCodeUpdate
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
     * @return \Sabre\UpdateReservation\StructType\ActionCodeUpdate
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
