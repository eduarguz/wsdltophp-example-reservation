<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookAndHoldType.PNRB StructType
 * @subpackage Structs
 */
class BookAndHoldType_PNRB extends AbstractStructBase
{
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Determines airline whose segments should be held. If not provided, all eligible segments will be held. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter.
     * | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string[]
     */
    public $AirlineCode;
    /**
     * Constructor method for BookAndHoldType.PNRB
     * @uses BookAndHoldType_PNRB::setAirlineCode()
     * @param string[] $airlineCode
     */
    public function __construct(array $airlineCode = array())
    {
        $this
            ->setAirlineCode($airlineCode);
    }
    /**
     * Get AirlineCode value
     * @return string[]|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @throws \InvalidArgumentException
     * @param string[] $airlineCode
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB
     */
    public function setAirlineCode(array $airlineCode = array())
    {
        // validation for constraint: pattern
        if (is_scalar($airlineCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($airlineCode, true)), __LINE__);
        }
        foreach ($airlineCode as $bookAndHoldType_PNRBAirlineCodeItem) {
            // validation for constraint: itemType
            if (!is_string($bookAndHoldType_PNRBAirlineCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The AirlineCode property can only contain items of string, "%s" given', is_object($bookAndHoldType_PNRBAirlineCodeItem) ? get_class($bookAndHoldType_PNRBAirlineCodeItem) : gettype($bookAndHoldType_PNRBAirlineCodeItem)), __LINE__);
            }
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Add item to AirlineCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB
     */
    public function addToAirlineCode($item)
    {
        // validation for constraint: pattern
        if (is_scalar($item) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($item, true)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AirlineCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirlineCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB
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
