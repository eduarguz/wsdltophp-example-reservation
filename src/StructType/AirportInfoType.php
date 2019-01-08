<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirportInfoType StructType
 * @subpackage Structs
 */
class AirportInfoType extends AbstractStructBase
{
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirlineType
     */
    public $Airline;
    /**
     * The AirportName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirportName;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationCode;
    /**
     * The Terminal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Terminal;
    /**
     * The Gate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Gate;
    /**
     * Constructor method for AirportInfoType
     * @uses AirportInfoType::setAirline()
     * @uses AirportInfoType::setAirportName()
     * @uses AirportInfoType::setLocationCode()
     * @uses AirportInfoType::setTerminal()
     * @uses AirportInfoType::setGate()
     * @param \Sabre\UpdateReservation\StructType\AirlineType $airline
     * @param string $airportName
     * @param string $locationCode
     * @param string $terminal
     * @param string $gate
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AirlineType $airline = null, $airportName = null, $locationCode = null, $terminal = null, $gate = null)
    {
        $this
            ->setAirline($airline)
            ->setAirportName($airportName)
            ->setLocationCode($locationCode)
            ->setTerminal($terminal)
            ->setGate($gate);
    }
    /**
     * Get Airline value
     * @return \Sabre\UpdateReservation\StructType\AirlineType|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param \Sabre\UpdateReservation\StructType\AirlineType $airline
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType
     */
    public function setAirline(\Sabre\UpdateReservation\StructType\AirlineType $airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get AirportName value
     * @return string|null
     */
    public function getAirportName()
    {
        return $this->AirportName;
    }
    /**
     * Set AirportName value
     * @param string $airportName
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType
     */
    public function setAirportName($airportName = null)
    {
        // validation for constraint: string
        if (!is_null($airportName) && !is_string($airportName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportName)), __LINE__);
        }
        $this->AirportName = $airportName;
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Get Terminal value
     * @return string|null
     */
    public function getTerminal()
    {
        return $this->Terminal;
    }
    /**
     * Set Terminal value
     * @param string $terminal
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType
     */
    public function setTerminal($terminal = null)
    {
        // validation for constraint: string
        if (!is_null($terminal) && !is_string($terminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminal)), __LINE__);
        }
        $this->Terminal = $terminal;
        return $this;
    }
    /**
     * Get Gate value
     * @return string|null
     */
    public function getGate()
    {
        return $this->Gate;
    }
    /**
     * Set Gate value
     * @param string $gate
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType
     */
    public function setGate($gate = null)
    {
        // validation for constraint: string
        if (!is_null($gate) && !is_string($gate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gate)), __LINE__);
        }
        $this->Gate = $gate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirportInfoType
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
