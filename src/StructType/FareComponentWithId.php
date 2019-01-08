<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComponentWithId StructType
 * @subpackage Structs
 */
class FareComponentWithId extends FareComponent
{
    /**
     * The FareComponentID
     * Meta informations extracted from the WSDL
     * - documentation: Numeric value identifying fare component
     * - minOccurs: 0
     * @var int
     */
    public $FareComponentID;
    /**
     * Constructor method for FareComponentWithId
     * @uses FareComponentWithId::setFareComponentID()
     * @param int $fareComponentID
     */
    public function __construct($fareComponentID = null)
    {
        $this
            ->setFareComponentID($fareComponentID);
    }
    /**
     * Get FareComponentID value
     * @return int|null
     */
    public function getFareComponentID()
    {
        return $this->FareComponentID;
    }
    /**
     * Set FareComponentID value
     * @param int $fareComponentID
     * @return \Sabre\UpdateReservation\StructType\FareComponentWithId
     */
    public function setFareComponentID($fareComponentID = null)
    {
        // validation for constraint: int
        if (!is_null($fareComponentID) && !is_numeric($fareComponentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fareComponentID)), __LINE__);
        }
        $this->FareComponentID = $fareComponentID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FareComponentWithId
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
