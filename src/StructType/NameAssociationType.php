<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameAssociationType StructType
 * @subpackage Structs
 */
class NameAssociationType extends AbstractStructBase
{
    /**
     * The nameId
     * @var string
     */
    public $nameId;
    /**
     * Constructor method for NameAssociationType
     * @uses NameAssociationType::setNameId()
     * @param string $nameId
     */
    public function __construct($nameId = null)
    {
        $this
            ->setNameId($nameId);
    }
    /**
     * Get nameId value
     * @return string|null
     */
    public function getNameId()
    {
        return $this->nameId;
    }
    /**
     * Set nameId value
     * @param string $nameId
     * @return \Sabre\UpdateReservation\StructType\NameAssociationType
     */
    public function setNameId($nameId = null)
    {
        // validation for constraint: string
        if (!is_null($nameId) && !is_string($nameId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameId)), __LINE__);
        }
        $this->nameId = $nameId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NameAssociationType
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
