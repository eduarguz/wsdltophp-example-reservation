<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationUpdate.PNRB StructType
 * @subpackage Structs
 */
class AssociationUpdate_PNRB extends AbstractStructBase
{
    /**
     * The Parent
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationParent[]
     */
    public $Parent;
    /**
     * The Child
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationChild[]
     */
    public $Child;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: CREATE, UPDATE, DELETE, KEEP
     * @var string
     */
    public $op;
    /**
     * Constructor method for AssociationUpdate.PNRB
     * @uses AssociationUpdate_PNRB::setParent()
     * @uses AssociationUpdate_PNRB::setChild()
     * @uses AssociationUpdate_PNRB::setOp()
     * @param \Sabre\UpdateReservation\StructType\AssociationParent[] $parent
     * @param \Sabre\UpdateReservation\StructType\AssociationChild[] $child
     * @param string $op
     */
    public function __construct(array $parent = array(), array $child = array(), $op = null)
    {
        $this
            ->setParent($parent)
            ->setChild($child)
            ->setOp($op);
    }
    /**
     * Get Parent value
     * @return \Sabre\UpdateReservation\StructType\AssociationParent[]|null
     */
    public function getParent()
    {
        return $this->Parent;
    }
    /**
     * Set Parent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationParent[] $parent
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB
     */
    public function setParent(array $parent = array())
    {
        foreach ($parent as $associationUpdate_PNRBParentItem) {
            // validation for constraint: itemType
            if (!$associationUpdate_PNRBParentItem instanceof \Sabre\UpdateReservation\StructType\AssociationParent) {
                throw new \InvalidArgumentException(sprintf('The Parent property can only contain items of \Sabre\UpdateReservation\StructType\AssociationParent, "%s" given', is_object($associationUpdate_PNRBParentItem) ? get_class($associationUpdate_PNRBParentItem) : gettype($associationUpdate_PNRBParentItem)), __LINE__);
            }
        }
        $this->Parent = $parent;
        return $this;
    }
    /**
     * Add item to Parent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationParent $item
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB
     */
    public function addToParent(\Sabre\UpdateReservation\StructType\AssociationParent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociationParent) {
            throw new \InvalidArgumentException(sprintf('The Parent property can only contain items of \Sabre\UpdateReservation\StructType\AssociationParent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Parent[] = $item;
        return $this;
    }
    /**
     * Get Child value
     * @return \Sabre\UpdateReservation\StructType\AssociationChild[]|null
     */
    public function getChild()
    {
        return $this->Child;
    }
    /**
     * Set Child value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationChild[] $child
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB
     */
    public function setChild(array $child = array())
    {
        foreach ($child as $associationUpdate_PNRBChildItem) {
            // validation for constraint: itemType
            if (!$associationUpdate_PNRBChildItem instanceof \Sabre\UpdateReservation\StructType\AssociationChild) {
                throw new \InvalidArgumentException(sprintf('The Child property can only contain items of \Sabre\UpdateReservation\StructType\AssociationChild, "%s" given', is_object($associationUpdate_PNRBChildItem) ? get_class($associationUpdate_PNRBChildItem) : gettype($associationUpdate_PNRBChildItem)), __LINE__);
            }
        }
        $this->Child = $child;
        return $this;
    }
    /**
     * Add item to Child value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationChild $item
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB
     */
    public function addToChild(\Sabre\UpdateReservation\StructType\AssociationChild $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociationChild) {
            throw new \InvalidArgumentException(sprintf('The Child property can only contain items of \Sabre\UpdateReservation\StructType\AssociationChild, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Child[] = $item;
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
     * @uses \Sabre\UpdateReservation\EnumType\AssociationOperationType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AssociationOperationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AssociationOperationType::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\AssociationOperationType::getValidValues())), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\AssociationUpdate_PNRB
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
