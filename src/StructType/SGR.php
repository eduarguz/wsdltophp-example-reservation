<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SGR StructType
 * @subpackage Structs
 */
class SGR extends AbstractStructBase
{
    /**
     * The Information
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Information;
    /**
     * Constructor method for SGR
     * @uses SGR::setInformation()
     * @param string $information
     */
    public function __construct($information = null)
    {
        $this
            ->setInformation($information);
    }
    /**
     * Get Information value
     * @return string|null
     */
    public function getInformation()
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @param string $information
     * @return \Sabre\UpdateReservation\StructType\SGR
     */
    public function setInformation($information = null)
    {
        // validation for constraint: string
        if (!is_null($information) && !is_string($information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($information)), __LINE__);
        }
        $this->Information = $information;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SGR
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
