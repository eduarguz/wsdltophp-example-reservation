<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentPartialUpdate.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to update air segment information
 * @subpackage Structs
 */
class AirSegmentPartialUpdate_PNRB extends AbstractStructBase
{
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - use: required
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The ConfirmationUpdate
     * @var \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB
     */
    public $ConfirmationUpdate;
    /**
     * The ActionCodeUpdate
     * @var \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB
     */
    public $ActionCodeUpdate;
    /**
     * The ClassOfServiceUpdate
     * @var \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB
     */
    public $ClassOfServiceUpdate;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for AirSegmentPartialUpdate.PNRB
     * @uses AirSegmentPartialUpdate_PNRB::setId()
     * @uses AirSegmentPartialUpdate_PNRB::setConfirmationUpdate()
     * @uses AirSegmentPartialUpdate_PNRB::setActionCodeUpdate()
     * @uses AirSegmentPartialUpdate_PNRB::setClassOfServiceUpdate()
     * @uses AirSegmentPartialUpdate_PNRB::setOp()
     * @param string $id
     * @param \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB $confirmationUpdate
     * @param \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB $actionCodeUpdate
     * @param \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB $classOfServiceUpdate
     * @param string $op
     */
    public function __construct($id = null, \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB $confirmationUpdate = null, \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB $actionCodeUpdate = null, \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB $classOfServiceUpdate = null, $op = null)
    {
        $this
            ->setId($id)
            ->setConfirmationUpdate($confirmationUpdate)
            ->setActionCodeUpdate($actionCodeUpdate)
            ->setClassOfServiceUpdate($classOfServiceUpdate)
            ->setOp($op);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
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
     * Get ConfirmationUpdate value
     * @return \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB|null
     */
    public function getConfirmationUpdate()
    {
        return $this->ConfirmationUpdate;
    }
    /**
     * Set ConfirmationUpdate value
     * @param \Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB $confirmationUpdate
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
     */
    public function setConfirmationUpdate(\Sabre\UpdateReservation\StructType\ConfirmationUpdate_PNRB $confirmationUpdate = null)
    {
        $this->ConfirmationUpdate = $confirmationUpdate;
        return $this;
    }
    /**
     * Get ActionCodeUpdate value
     * @return \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB|null
     */
    public function getActionCodeUpdate()
    {
        return $this->ActionCodeUpdate;
    }
    /**
     * Set ActionCodeUpdate value
     * @param \Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB $actionCodeUpdate
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
     */
    public function setActionCodeUpdate(\Sabre\UpdateReservation\StructType\AirActionCodeUpdate_PNRB $actionCodeUpdate = null)
    {
        $this->ActionCodeUpdate = $actionCodeUpdate;
        return $this;
    }
    /**
     * Get ClassOfServiceUpdate value
     * @return \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB|null
     */
    public function getClassOfServiceUpdate()
    {
        return $this->ClassOfServiceUpdate;
    }
    /**
     * Set ClassOfServiceUpdate value
     * @param \Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB $classOfServiceUpdate
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
     */
    public function setClassOfServiceUpdate(\Sabre\UpdateReservation\StructType\ClassOfServiceUpdate_PNRB $classOfServiceUpdate = null)
    {
        $this->ClassOfServiceUpdate = $classOfServiceUpdate;
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
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
