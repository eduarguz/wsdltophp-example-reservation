<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlacementNumber StructType
 * @subpackage Structs
 */
class PlacementNumber extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The compartmentRefId
     * @var string
     */
    public $compartmentRefId;
    /**
     * Constructor method for PlacementNumber
     * @uses PlacementNumber::set_()
     * @uses PlacementNumber::setCompartmentRefId()
     * @param string $_
     * @param string $compartmentRefId
     */
    public function __construct($_ = null, $compartmentRefId = null)
    {
        $this
            ->set_($_)
            ->setCompartmentRefId($compartmentRefId);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\PlacementNumber
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get compartmentRefId value
     * @return string|null
     */
    public function getCompartmentRefId()
    {
        return $this->compartmentRefId;
    }
    /**
     * Set compartmentRefId value
     * @param string $compartmentRefId
     * @return \Sabre\UpdateReservation\StructType\PlacementNumber
     */
    public function setCompartmentRefId($compartmentRefId = null)
    {
        // validation for constraint: string
        if (!is_null($compartmentRefId) && !is_string($compartmentRefId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compartmentRefId)), __LINE__);
        }
        $this->compartmentRefId = $compartmentRefId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PlacementNumber
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
