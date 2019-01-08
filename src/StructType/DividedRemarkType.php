<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DividedRemarkType StructType
 * @subpackage Structs
 */
class DividedRemarkType extends BaseRemarkType
{
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AgentSine;
    /**
     * Constructor method for DividedRemarkType
     * @uses DividedRemarkType::setAgentSine()
     * @param string $agentSine
     */
    public function __construct($agentSine = null)
    {
        $this
            ->setAgentSine($agentSine);
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Sabre\UpdateReservation\StructType\DividedRemarkType
     */
    public function setAgentSine($agentSine = null)
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DividedRemarkType
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
