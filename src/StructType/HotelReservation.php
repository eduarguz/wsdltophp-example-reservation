<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservation StructType
 * @subpackage Structs
 */
class HotelReservation extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Id;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Uses OTA Table UIT Code [ 24 : PNR , 40 : Confirmation Number ] | Positive Integer to denote OTA Codes
     * - use: required
     * - minInclusive: 1
     * @var int
     */
    public $Type;
    /**
     * Constructor method for HotelReservation
     * @uses HotelReservation::setId()
     * @uses HotelReservation::setType()
     * @param string $id
     * @param int $type
     */
    public function __construct($id = null, $type = null)
    {
        $this
            ->setId($id)
            ->setType($type);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\HotelReservation
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Type value
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \Sabre\UpdateReservation\StructType\HotelReservation
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelReservation
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
