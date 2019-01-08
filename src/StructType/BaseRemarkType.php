<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseRemarkType StructType
 * @subpackage Structs
 */
abstract class BaseRemarkType extends AbstractStructBase
{
    /**
     * The DivideTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DivideTimestamp;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [A-Z]{6}
     * @var string
     */
    public $RecordLocator;
    /**
     * Constructor method for BaseRemarkType
     * @uses BaseRemarkType::setDivideTimestamp()
     * @uses BaseRemarkType::setRecordLocator()
     * @param string $divideTimestamp
     * @param string $recordLocator
     */
    public function __construct($divideTimestamp = null, $recordLocator = null)
    {
        $this
            ->setDivideTimestamp($divideTimestamp)
            ->setRecordLocator($recordLocator);
    }
    /**
     * Get DivideTimestamp value
     * @return string|null
     */
    public function getDivideTimestamp()
    {
        return $this->DivideTimestamp;
    }
    /**
     * Set DivideTimestamp value
     * @param string $divideTimestamp
     * @return \Sabre\UpdateReservation\StructType\BaseRemarkType
     */
    public function setDivideTimestamp($divideTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($divideTimestamp) && !is_string($divideTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($divideTimestamp)), __LINE__);
        }
        $this->DivideTimestamp = $divideTimestamp;
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Sabre\UpdateReservation\StructType\BaseRemarkType
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($recordLocator) && !preg_match('/[A-Z]{6}/', $recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{6}", "%s" given', var_export($recordLocator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BaseRemarkType
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
