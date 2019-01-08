<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PshUpdate.PNRB StructType
 * @subpackage Structs
 */
class PshUpdate_PNRB extends AbstractStructBase
{
    /**
     * The ParentId
     * @var string
     */
    public $ParentId;
    /**
     * The ChildId
     * @var string
     */
    public $ChildId;
    /**
     * The ChildType
     * @var string
     */
    public $ChildType;
    /**
     * The Operation
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for PshUpdate.PNRB
     * @uses PshUpdate_PNRB::setParentId()
     * @uses PshUpdate_PNRB::setChildId()
     * @uses PshUpdate_PNRB::setChildType()
     * @uses PshUpdate_PNRB::setOperation()
     * @param string $parentId
     * @param string $childId
     * @param string $childType
     * @param string $operation
     */
    public function __construct($parentId = null, $childId = null, $childType = null, $operation = null)
    {
        $this
            ->setParentId($parentId)
            ->setChildId($childId)
            ->setChildType($childType)
            ->setOperation($operation);
    }
    /**
     * Get ParentId value
     * @return string|null
     */
    public function getParentId()
    {
        return $this->ParentId;
    }
    /**
     * Set ParentId value
     * @param string $parentId
     * @return \Sabre\UpdateReservation\StructType\PshUpdate_PNRB
     */
    public function setParentId($parentId = null)
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentId)), __LINE__);
        }
        $this->ParentId = $parentId;
        return $this;
    }
    /**
     * Get ChildId value
     * @return string|null
     */
    public function getChildId()
    {
        return $this->ChildId;
    }
    /**
     * Set ChildId value
     * @param string $childId
     * @return \Sabre\UpdateReservation\StructType\PshUpdate_PNRB
     */
    public function setChildId($childId = null)
    {
        // validation for constraint: string
        if (!is_null($childId) && !is_string($childId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($childId)), __LINE__);
        }
        $this->ChildId = $childId;
        return $this;
    }
    /**
     * Get ChildType value
     * @return string|null
     */
    public function getChildType()
    {
        return $this->ChildType;
    }
    /**
     * Set ChildType value
     * @uses \Sabre\UpdateReservation\EnumType\AssociationChildElementType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AssociationChildElementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $childType
     * @return \Sabre\UpdateReservation\StructType\PshUpdate_PNRB
     */
    public function setChildType($childType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AssociationChildElementType::valueIsValid($childType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $childType, implode(', ', \Sabre\UpdateReservation\EnumType\AssociationChildElementType::getValidValues())), __LINE__);
        }
        $this->ChildType = $childType;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operation
     * @return \Sabre\UpdateReservation\StructType\PshUpdate_PNRB
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($operation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operation, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PshUpdate_PNRB
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
