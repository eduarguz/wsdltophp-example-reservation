<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingAirline StructType
 * @subpackage Structs
 */
class MarketingAirline extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: "code" is used to return the marketing airline code associated with the particular vehicle segment.
     * - use: optional
     * @var string
     */
    public $code;
    /**
     * The flightNumber
     * Meta informations extracted from the WSDL
     * - documentation: "flightNumber" is used to return the flight number associated with the particular vehicle segment.
     * - use: optional
     * @var string
     */
    public $flightNumber;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a company by the company code.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for MarketingAirline
     * @uses MarketingAirline::setCode()
     * @uses MarketingAirline::setFlightNumber()
     * @uses MarketingAirline::setCode_1()
     * @param string $code
     * @param string $flightNumber
     * @param string $code
     */
    public function __construct($code = null, $flightNumber = null, $code_1 = null)
    {
        $this
            ->setCode($code)
            ->setFlightNumber($flightNumber)
            ->setCode_1($code_1);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\MarketingAirline
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get flightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }
    /**
     * Set flightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\MarketingAirline
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->flightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode_1()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\MarketingAirline
     */
    public function setCode_1($code_1 = null)
    {
        // validation for constraint: string
        if (!is_null($code_1) && !is_string($code_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code_1)), __LINE__);
        }
        $this->Code = $code_1;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MarketingAirline
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
