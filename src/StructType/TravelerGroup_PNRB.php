<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerGroup.PNRB StructType
 * @subpackage Structs
 */
class TravelerGroup_PNRB extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NumInGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumInGroup;
    /**
     * The NumberOfSeatsRemaining
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberOfSeatsRemaining;
    /**
     * The AncillaryServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServices
     */
    public $AncillaryServices;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The nameId
     * @var string
     */
    public $nameId;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for TravelerGroup.PNRB
     * @uses TravelerGroup_PNRB::setName()
     * @uses TravelerGroup_PNRB::setNumInGroup()
     * @uses TravelerGroup_PNRB::setNumberOfSeatsRemaining()
     * @uses TravelerGroup_PNRB::setAncillaryServices()
     * @uses TravelerGroup_PNRB::setId()
     * @uses TravelerGroup_PNRB::setNameId()
     * @uses TravelerGroup_PNRB::setOp()
     * @param string $name
     * @param int $numInGroup
     * @param int $numberOfSeatsRemaining
     * @param \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices
     * @param string $id
     * @param string $nameId
     * @param string $op
     */
    public function __construct($name = null, $numInGroup = null, $numberOfSeatsRemaining = null, \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices = null, $id = null, $nameId = null, $op = null)
    {
        $this
            ->setName($name)
            ->setNumInGroup($numInGroup)
            ->setNumberOfSeatsRemaining($numberOfSeatsRemaining)
            ->setAncillaryServices($ancillaryServices)
            ->setId($id)
            ->setNameId($nameId)
            ->setOp($op);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumInGroup value
     * @return int|null
     */
    public function getNumInGroup()
    {
        return $this->NumInGroup;
    }
    /**
     * Set NumInGroup value
     * @param int $numInGroup
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
     */
    public function setNumInGroup($numInGroup = null)
    {
        // validation for constraint: maxInclusive
        if ($numInGroup > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numInGroup), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numInGroup < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numInGroup), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numInGroup) && !is_numeric($numInGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numInGroup)), __LINE__);
        }
        $this->NumInGroup = $numInGroup;
        return $this;
    }
    /**
     * Get NumberOfSeatsRemaining value
     * @return int|null
     */
    public function getNumberOfSeatsRemaining()
    {
        return $this->NumberOfSeatsRemaining;
    }
    /**
     * Set NumberOfSeatsRemaining value
     * @param int $numberOfSeatsRemaining
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
     */
    public function setNumberOfSeatsRemaining($numberOfSeatsRemaining = null)
    {
        // validation for constraint: maxInclusive
        if ($numberOfSeatsRemaining > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberOfSeatsRemaining), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberOfSeatsRemaining < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberOfSeatsRemaining), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberOfSeatsRemaining) && !is_numeric($numberOfSeatsRemaining)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsRemaining)), __LINE__);
        }
        $this->NumberOfSeatsRemaining = $numberOfSeatsRemaining;
        return $this;
    }
    /**
     * Get AncillaryServices value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServices|null
     */
    public function getAncillaryServices()
    {
        return $this->AncillaryServices;
    }
    /**
     * Set AncillaryServices value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
     */
    public function setAncillaryServices(\Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices = null)
    {
        $this->AncillaryServices = $ancillaryServices;
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
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
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
