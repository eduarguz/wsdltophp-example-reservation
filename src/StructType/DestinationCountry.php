<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationCountry StructType
 * Meta informations extracted from the WSDL
 * - documentation: Destination country for visa
 * @subpackage Structs
 */
class DestinationCountry extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: Country code
     * @var string
     */
    public $code;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Country name
     * @var string
     */
    public $name;
    /**
     * Constructor method for DestinationCountry
     * @uses DestinationCountry::setCode()
     * @uses DestinationCountry::setName()
     * @param string $code
     * @param string $name
     */
    public function __construct($code = null, $name = null)
    {
        $this
            ->setCode($code)
            ->setName($name);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\DestinationCountry
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
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\DestinationCountry
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DestinationCountry
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
