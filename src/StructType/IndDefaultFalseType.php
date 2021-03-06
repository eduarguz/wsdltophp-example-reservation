<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndDefaultFalseType StructType
 * @subpackage Structs
 */
class IndDefaultFalseType extends AbstractStructBase
{
    /**
     * The ind
     * Meta informations extracted from the WSDL
     * - default: false
     * @var bool
     */
    public $ind;
    /**
     * Constructor method for IndDefaultFalseType
     * @uses IndDefaultFalseType::setInd()
     * @param bool $ind
     */
    public function __construct($ind = false)
    {
        $this
            ->setInd($ind);
    }
    /**
     * Get ind value
     * @return bool|null
     */
    public function getInd()
    {
        return $this->ind;
    }
    /**
     * Set ind value
     * @param bool $ind
     * @return \Sabre\UpdateReservation\StructType\IndDefaultFalseType
     */
    public function setInd($ind = false)
    {
        // validation for constraint: boolean
        if (!is_null($ind) && !is_bool($ind)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ind)), __LINE__);
        }
        $this->ind = $ind;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\IndDefaultFalseType
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
