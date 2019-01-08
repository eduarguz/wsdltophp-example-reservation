<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Metadata StructType
 * @subpackage Structs
 */
class Metadata extends AbstractStructBase
{
    /**
     * The DisplayIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DisplayIndex;
    /**
     * Constructor method for Metadata
     * @uses Metadata::setDisplayIndex()
     * @param int $displayIndex
     */
    public function __construct($displayIndex = null)
    {
        $this
            ->setDisplayIndex($displayIndex);
    }
    /**
     * Get DisplayIndex value
     * @return int|null
     */
    public function getDisplayIndex()
    {
        return $this->DisplayIndex;
    }
    /**
     * Set DisplayIndex value
     * @param int $displayIndex
     * @return \Sabre\UpdateReservation\StructType\Metadata
     */
    public function setDisplayIndex($displayIndex = null)
    {
        // validation for constraint: int
        if (!is_null($displayIndex) && !is_numeric($displayIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($displayIndex)), __LINE__);
        }
        $this->DisplayIndex = $displayIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Metadata
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
