<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Poc StructType
 * @subpackage Structs
 */
class Poc extends AbstractStructBase
{
    /**
     * The Airport
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Airport;
    /**
     * The Departure
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Departure;
    /**
     * Constructor method for Poc
     * @uses Poc::setAirport()
     * @uses Poc::setDeparture()
     * @param string $airport
     * @param string $departure
     */
    public function __construct($airport = null, $departure = null)
    {
        $this
            ->setAirport($airport)
            ->setDeparture($departure);
    }
    /**
     * Get Airport value
     * @return string
     */
    public function getAirport()
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @param string $airport
     * @return \Sabre\UpdateReservation\StructType\Poc
     */
    public function setAirport($airport = null)
    {
        // validation for constraint: string
        if (!is_null($airport) && !is_string($airport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airport)), __LINE__);
        }
        $this->Airport = $airport;
        return $this;
    }
    /**
     * Get Departure value
     * @return string
     */
    public function getDeparture()
    {
        return $this->Departure;
    }
    /**
     * Set Departure value
     * @param string $departure
     * @return \Sabre\UpdateReservation\StructType\Poc
     */
    public function setDeparture($departure = null)
    {
        // validation for constraint: string
        if (!is_null($departure) && !is_string($departure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departure)), __LINE__);
        }
        $this->Departure = $departure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Poc
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
