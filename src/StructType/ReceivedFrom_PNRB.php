<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceivedFrom.PNRB StructType
 * @subpackage Structs
 */
class ReceivedFrom_PNRB extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The AgentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AgentName;
    /**
     * The TourWholesalerPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TourWholesalerPCC;
    /**
     * The NewControllingPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NewControllingPCC;
    /**
     * The fromPassenger
     * @var bool
     */
    public $fromPassenger;
    /**
     * Constructor method for ReceivedFrom.PNRB
     * @uses ReceivedFrom_PNRB::setName()
     * @uses ReceivedFrom_PNRB::setAgentName()
     * @uses ReceivedFrom_PNRB::setTourWholesalerPCC()
     * @uses ReceivedFrom_PNRB::setNewControllingPCC()
     * @uses ReceivedFrom_PNRB::setFromPassenger()
     * @param string $name
     * @param string $agentName
     * @param string $tourWholesalerPCC
     * @param string $newControllingPCC
     * @param bool $fromPassenger
     */
    public function __construct($name = null, $agentName = null, $tourWholesalerPCC = null, $newControllingPCC = null, $fromPassenger = null)
    {
        $this
            ->setName($name)
            ->setAgentName($agentName)
            ->setTourWholesalerPCC($tourWholesalerPCC)
            ->setNewControllingPCC($newControllingPCC)
            ->setFromPassenger($fromPassenger);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AgentName value
     * @return string|null
     */
    public function getAgentName()
    {
        return $this->AgentName;
    }
    /**
     * Set AgentName value
     * @param string $agentName
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public function setAgentName($agentName = null)
    {
        // validation for constraint: string
        if (!is_null($agentName) && !is_string($agentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentName)), __LINE__);
        }
        $this->AgentName = $agentName;
        return $this;
    }
    /**
     * Get TourWholesalerPCC value
     * @return string|null
     */
    public function getTourWholesalerPCC()
    {
        return $this->TourWholesalerPCC;
    }
    /**
     * Set TourWholesalerPCC value
     * @param string $tourWholesalerPCC
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public function setTourWholesalerPCC($tourWholesalerPCC = null)
    {
        // validation for constraint: string
        if (!is_null($tourWholesalerPCC) && !is_string($tourWholesalerPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourWholesalerPCC)), __LINE__);
        }
        $this->TourWholesalerPCC = $tourWholesalerPCC;
        return $this;
    }
    /**
     * Get NewControllingPCC value
     * @return string|null
     */
    public function getNewControllingPCC()
    {
        return $this->NewControllingPCC;
    }
    /**
     * Set NewControllingPCC value
     * @param string $newControllingPCC
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public function setNewControllingPCC($newControllingPCC = null)
    {
        // validation for constraint: string
        if (!is_null($newControllingPCC) && !is_string($newControllingPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newControllingPCC)), __LINE__);
        }
        $this->NewControllingPCC = $newControllingPCC;
        return $this;
    }
    /**
     * Get fromPassenger value
     * @return bool|null
     */
    public function getFromPassenger()
    {
        return $this->fromPassenger;
    }
    /**
     * Set fromPassenger value
     * @param bool $fromPassenger
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public function setFromPassenger($fromPassenger = null)
    {
        // validation for constraint: boolean
        if (!is_null($fromPassenger) && !is_bool($fromPassenger)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fromPassenger)), __LINE__);
        }
        $this->fromPassenger = $fromPassenger;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
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
