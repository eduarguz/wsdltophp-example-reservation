<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestorSourceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information on the source of a request.
 * @subpackage Structs
 */
class RequestorSourceType extends AbstractStructBase
{
    /**
     * The ApplicationID
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the calling application that used by this requestor to submit this payload.
     * - use: required
     * @var string
     */
    public $ApplicationID;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the party within the requesting entity.
     * - use: optional
     * @var string
     */
    public $AgentSine;
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - documentation: An identification code assigned to an office/agency by a reservation system.
     * - use: optional
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The AgentDutyCode
     * Meta informations extracted from the WSDL
     * - documentation: An authority code assigned to a requestor.
     * - use: optional
     * @var string
     */
    public $AgentDutyCode;
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airport code.
     * - use: optional
     * @var string
     */
    public $AirportCode;
    /**
     * The TerminalID
     * Meta informations extracted from the WSDL
     * - documentation: This is the electronic address of the device from which payload is submitted.
     * - use: optional
     * @var string
     */
    public $TerminalID;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the calling agency
     * - use: optional
     * @var string
     */
    public $Agency;
    /**
     * The SubAgency
     * Meta informations extracted from the WSDL
     * - documentation: The identifier of the sub agency
     * - use: optional
     * @var string
     */
    public $SubAgency;
    /**
     * Constructor method for RequestorSourceType
     * @uses RequestorSourceType::setApplicationID()
     * @uses RequestorSourceType::setAgentSine()
     * @uses RequestorSourceType::setPseudoCityCode()
     * @uses RequestorSourceType::setAgentDutyCode()
     * @uses RequestorSourceType::setAirportCode()
     * @uses RequestorSourceType::setTerminalID()
     * @uses RequestorSourceType::setAgency()
     * @uses RequestorSourceType::setSubAgency()
     * @param string $applicationID
     * @param string $agentSine
     * @param string $pseudoCityCode
     * @param string $agentDutyCode
     * @param string $airportCode
     * @param string $terminalID
     * @param string $agency
     * @param string $subAgency
     */
    public function __construct($applicationID = null, $agentSine = null, $pseudoCityCode = null, $agentDutyCode = null, $airportCode = null, $terminalID = null, $agency = null, $subAgency = null)
    {
        $this
            ->setApplicationID($applicationID)
            ->setAgentSine($agentSine)
            ->setPseudoCityCode($pseudoCityCode)
            ->setAgentDutyCode($agentDutyCode)
            ->setAirportCode($airportCode)
            ->setTerminalID($terminalID)
            ->setAgency($agency)
            ->setSubAgency($subAgency);
    }
    /**
     * Get ApplicationID value
     * @return string
     */
    public function getApplicationID()
    {
        return $this->ApplicationID;
    }
    /**
     * Set ApplicationID value
     * @param string $applicationID
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setApplicationID($applicationID = null)
    {
        // validation for constraint: string
        if (!is_null($applicationID) && !is_string($applicationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationID)), __LINE__);
        }
        $this->ApplicationID = $applicationID;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
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
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setPseudoCityCode($pseudoCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Get AgentDutyCode value
     * @return string|null
     */
    public function getAgentDutyCode()
    {
        return $this->AgentDutyCode;
    }
    /**
     * Set AgentDutyCode value
     * @param string $agentDutyCode
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setAgentDutyCode($agentDutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($agentDutyCode) && !is_string($agentDutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentDutyCode)), __LINE__);
        }
        $this->AgentDutyCode = $agentDutyCode;
        return $this;
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setAirportCode($airportCode = null)
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportCode)), __LINE__);
        }
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get TerminalID value
     * @return string|null
     */
    public function getTerminalID()
    {
        return $this->TerminalID;
    }
    /**
     * Set TerminalID value
     * @param string $terminalID
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setTerminalID($terminalID = null)
    {
        // validation for constraint: string
        if (!is_null($terminalID) && !is_string($terminalID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalID)), __LINE__);
        }
        $this->TerminalID = $terminalID;
        return $this;
    }
    /**
     * Get Agency value
     * @return string|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param string $agency
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setAgency($agency = null)
    {
        // validation for constraint: string
        if (!is_null($agency) && !is_string($agency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agency)), __LINE__);
        }
        $this->Agency = $agency;
        return $this;
    }
    /**
     * Get SubAgency value
     * @return string|null
     */
    public function getSubAgency()
    {
        return $this->SubAgency;
    }
    /**
     * Set SubAgency value
     * @param string $subAgency
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
     */
    public function setSubAgency($subAgency = null)
    {
        // validation for constraint: string
        if (!is_null($subAgency) && !is_string($subAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subAgency)), __LINE__);
        }
        $this->SubAgency = $subAgency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RequestorSourceType
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
