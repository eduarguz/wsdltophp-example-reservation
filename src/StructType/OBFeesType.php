<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OBFeesType StructType
 * @subpackage Structs
 */
class OBFeesType extends AbstractStructBase
{
    /**
     * The rType
     * Meta informations extracted from the WSDL
     * - documentation: Indicator Returning R-Type OB Fees
     * @var bool
     */
    public $rType;
    /**
     * The tType
     * Meta informations extracted from the WSDL
     * - documentation: Indicator Returning T-Type OB Fees
     * @var bool
     */
    public $tType;
    /**
     * Constructor method for OBFeesType
     * @uses OBFeesType::setRType()
     * @uses OBFeesType::setTType()
     * @param bool $rType
     * @param bool $tType
     */
    public function __construct($rType = null, $tType = null)
    {
        $this
            ->setRType($rType)
            ->setTType($tType);
    }
    /**
     * Get rType value
     * @return bool|null
     */
    public function getRType()
    {
        return $this->rType;
    }
    /**
     * Set rType value
     * @param bool $rType
     * @return \Sabre\UpdateReservation\StructType\OBFeesType
     */
    public function setRType($rType = null)
    {
        // validation for constraint: boolean
        if (!is_null($rType) && !is_bool($rType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rType)), __LINE__);
        }
        $this->rType = $rType;
        return $this;
    }
    /**
     * Get tType value
     * @return bool|null
     */
    public function getTType()
    {
        return $this->tType;
    }
    /**
     * Set tType value
     * @param bool $tType
     * @return \Sabre\UpdateReservation\StructType\OBFeesType
     */
    public function setTType($tType = null)
    {
        // validation for constraint: boolean
        if (!is_null($tType) && !is_bool($tType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tType)), __LINE__);
        }
        $this->tType = $tType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OBFeesType
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
