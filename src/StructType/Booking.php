<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Booking StructType
 * @subpackage Structs
 */
class Booking extends AbstractStructBase
{
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: ID of the Ski booking
     * @var string
     */
    public $ID;
    /**
     * Constructor method for Booking
     * @uses Booking::setID()
     * @param string $iD
     */
    public function __construct($iD = null)
    {
        $this
            ->setID($iD);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Sabre\UpdateReservation\StructType\Booking
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Booking
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
