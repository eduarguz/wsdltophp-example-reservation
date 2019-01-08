<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceActionCodeUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceActionCodeUpdate_PNRB extends AbstractStructBase
{
    /**
     * The CurrentActionCode
     * @var string
     */
    public $CurrentActionCode;
    /**
     * The PreviousActionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PreviousActionCode;
    /**
     * Constructor method for AncillaryServiceActionCodeUpdate.PNRB
     * @uses AncillaryServiceActionCodeUpdate_PNRB::setCurrentActionCode()
     * @uses AncillaryServiceActionCodeUpdate_PNRB::setPreviousActionCode()
     * @param string $currentActionCode
     * @param string $previousActionCode
     */
    public function __construct($currentActionCode = null, $previousActionCode = null)
    {
        $this
            ->setCurrentActionCode($currentActionCode)
            ->setPreviousActionCode($previousActionCode);
    }
    /**
     * Get CurrentActionCode value
     * @return string|null
     */
    public function getCurrentActionCode()
    {
        return $this->CurrentActionCode;
    }
    /**
     * Set CurrentActionCode value
     * @param string $currentActionCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB
     */
    public function setCurrentActionCode($currentActionCode = null)
    {
        // validation for constraint: string
        if (!is_null($currentActionCode) && !is_string($currentActionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentActionCode)), __LINE__);
        }
        $this->CurrentActionCode = $currentActionCode;
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB
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
