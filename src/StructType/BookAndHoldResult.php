<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookAndHoldResult StructType
 * @subpackage Structs
 */
class BookAndHoldResult extends AbstractStructBase
{
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $AirlineCode;
    /**
     * The Status
     * @var \Sabre\UpdateReservation\StructType\Status
     */
    public $Status;
    /**
     * Constructor method for BookAndHoldResult
     * @uses BookAndHoldResult::setAirlineCode()
     * @uses BookAndHoldResult::setStatus()
     * @param string $airlineCode
     * @param \Sabre\UpdateReservation\StructType\Status $status
     */
    public function __construct($airlineCode = null, \Sabre\UpdateReservation\StructType\Status $status = null)
    {
        $this
            ->setAirlineCode($airlineCode)
            ->setStatus($status);
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldResult
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($airlineCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($airlineCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get Status value
     * @return \Sabre\UpdateReservation\StructType\Status|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \Sabre\UpdateReservation\StructType\Status $status
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldResult
     */
    public function setStatus(\Sabre\UpdateReservation\StructType\Status $status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldResult
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
