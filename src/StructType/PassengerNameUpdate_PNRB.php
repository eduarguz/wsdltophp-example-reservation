<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerNameUpdate.PNRB StructType
 * @subpackage Structs
 */
class PassengerNameUpdate_PNRB extends AbstractStructBase
{
    /**
     * The TravelerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelerName
     */
    public $TravelerName;
    /**
     * The NameAssociationTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB
     */
    public $NameAssociationTag;
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
     * Constructor method for PassengerNameUpdate.PNRB
     * @uses PassengerNameUpdate_PNRB::setTravelerName()
     * @uses PassengerNameUpdate_PNRB::setNameAssociationTag()
     * @uses PassengerNameUpdate_PNRB::setId()
     * @uses PassengerNameUpdate_PNRB::setOp()
     * @param \Sabre\UpdateReservation\StructType\TravelerName $travelerName
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB $nameAssociationTag
     * @param string $id
     * @param string $op
     */
    public function __construct(\Sabre\UpdateReservation\StructType\TravelerName $travelerName = null, \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB $nameAssociationTag = null, $id = null, $op = null)
    {
        $this
            ->setTravelerName($travelerName)
            ->setNameAssociationTag($nameAssociationTag)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get TravelerName value
     * @return \Sabre\UpdateReservation\StructType\TravelerName|null
     */
    public function getTravelerName()
    {
        return $this->TravelerName;
    }
    /**
     * Set TravelerName value
     * @param \Sabre\UpdateReservation\StructType\TravelerName $travelerName
     * @return \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB
     */
    public function setTravelerName(\Sabre\UpdateReservation\StructType\TravelerName $travelerName = null)
    {
        $this->TravelerName = $travelerName;
        return $this;
    }
    /**
     * Get NameAssociationTag value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB|null
     */
    public function getNameAssociationTag()
    {
        return $this->NameAssociationTag;
    }
    /**
     * Set NameAssociationTag value
     * @param \Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB $nameAssociationTag
     * @return \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB
     */
    public function setNameAssociationTag(\Sabre\UpdateReservation\StructType\NameAssociationTag_PNRB $nameAssociationTag = null)
    {
        $this->NameAssociationTag = $nameAssociationTag;
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
     * @return \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB
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
