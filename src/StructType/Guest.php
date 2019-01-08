<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Guest StructType
 * Meta informations extracted from the WSDL
 * - documentation: An accompanying person
 * @subpackage Structs
 */
class Guest extends ResponseGuestInformation
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Positive Integer to denote OTA Codes
     * - minInclusive: 1
     * @var int
     */
    public $Type;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for Guest
     * @uses Guest::setType()
     * @uses Guest::setName()
     * @param int $type
     * @param string $name
     */
    public function __construct($type = null, $name = null)
    {
        $this
            ->setType($type)
            ->setName($name);
    }
    /**
     * Get Type value
     * @return int|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \Sabre\UpdateReservation\StructType\Guest
     */
    public function setType($type = null)
    {
        // validation for constraint: minInclusive
        if ($type < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $type), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($type) && !is_numeric($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\Guest
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
     * @return \Sabre\UpdateReservation\StructType\Guest
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
