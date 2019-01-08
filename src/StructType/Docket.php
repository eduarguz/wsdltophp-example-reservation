<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Docket StructType
 * @subpackage Structs
 */
class Docket extends AbstractStructBase
{
    /**
     * The DocketNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DocketNumber;
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Prefix;
    /**
     * The AgentInitials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AgentInitials;
    /**
     * The BNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BNumber;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * Constructor method for Docket
     * @uses Docket::setDocketNumber()
     * @uses Docket::setPrefix()
     * @uses Docket::setAgentInitials()
     * @uses Docket::setBNumber()
     * @uses Docket::setCustom()
     * @param string $docketNumber
     * @param string $prefix
     * @param string $agentInitials
     * @param string $bNumber
     * @param string $custom
     */
    public function __construct($docketNumber = null, $prefix = null, $agentInitials = null, $bNumber = null, $custom = null)
    {
        $this
            ->setDocketNumber($docketNumber)
            ->setPrefix($prefix)
            ->setAgentInitials($agentInitials)
            ->setBNumber($bNumber)
            ->setCustom($custom);
    }
    /**
     * Get DocketNumber value
     * @return string
     */
    public function getDocketNumber()
    {
        return $this->DocketNumber;
    }
    /**
     * Set DocketNumber value
     * @param string $docketNumber
     * @return \Sabre\UpdateReservation\StructType\Docket
     */
    public function setDocketNumber($docketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($docketNumber) && !is_string($docketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($docketNumber)), __LINE__);
        }
        $this->DocketNumber = $docketNumber;
        return $this;
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Sabre\UpdateReservation\StructType\Docket
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->Prefix = $prefix;
        return $this;
    }
    /**
     * Get AgentInitials value
     * @return string|null
     */
    public function getAgentInitials()
    {
        return $this->AgentInitials;
    }
    /**
     * Set AgentInitials value
     * @param string $agentInitials
     * @return \Sabre\UpdateReservation\StructType\Docket
     */
    public function setAgentInitials($agentInitials = null)
    {
        // validation for constraint: string
        if (!is_null($agentInitials) && !is_string($agentInitials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentInitials)), __LINE__);
        }
        $this->AgentInitials = $agentInitials;
        return $this;
    }
    /**
     * Get BNumber value
     * @return string|null
     */
    public function getBNumber()
    {
        return $this->BNumber;
    }
    /**
     * Set BNumber value
     * @param string $bNumber
     * @return \Sabre\UpdateReservation\StructType\Docket
     */
    public function setBNumber($bNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bNumber) && !is_string($bNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bNumber)), __LINE__);
        }
        $this->BNumber = $bNumber;
        return $this;
    }
    /**
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \Sabre\UpdateReservation\StructType\Docket
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Docket
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
