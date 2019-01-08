<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentARNK.PNRB StructType
 * @subpackage Structs
 */
class AirSegmentARNK_PNRB extends AbstractStructBase
{
    /**
     * The SurfaceSegmentIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SurfaceSegmentIndicator;
    /**
     * The segmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $segmentNumber;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for AirSegmentARNK.PNRB
     * @uses AirSegmentARNK_PNRB::setSurfaceSegmentIndicator()
     * @uses AirSegmentARNK_PNRB::setSegmentNumber()
     * @uses AirSegmentARNK_PNRB::setId()
     * @uses AirSegmentARNK_PNRB::setOp()
     * @param string $surfaceSegmentIndicator
     * @param int $segmentNumber
     * @param string $id
     * @param string $op
     */
    public function __construct($surfaceSegmentIndicator = null, $segmentNumber = null, $id = null, $op = null)
    {
        $this
            ->setSurfaceSegmentIndicator($surfaceSegmentIndicator)
            ->setSegmentNumber($segmentNumber)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get SurfaceSegmentIndicator value
     * @return string|null
     */
    public function getSurfaceSegmentIndicator()
    {
        return $this->SurfaceSegmentIndicator;
    }
    /**
     * Set SurfaceSegmentIndicator value
     * @param string $surfaceSegmentIndicator
     * @return \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB
     */
    public function setSurfaceSegmentIndicator($surfaceSegmentIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($surfaceSegmentIndicator) && !is_string($surfaceSegmentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surfaceSegmentIndicator)), __LINE__);
        }
        $this->SurfaceSegmentIndicator = $surfaceSegmentIndicator;
        return $this;
    }
    /**
     * Get segmentNumber value
     * @return int|null
     */
    public function getSegmentNumber()
    {
        return $this->segmentNumber;
    }
    /**
     * Set segmentNumber value
     * @param int $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($segmentNumber) && !is_numeric($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->segmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirSegmentARNK_PNRB
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
