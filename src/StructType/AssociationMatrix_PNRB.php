<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationMatrix.PNRB StructType
 * @subpackage Structs
 */
class AssociationMatrix_PNRB extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Parent
     * @var \Sabre\UpdateReservation\StructType\_Parent
     */
    public $Parent;
    /**
     * The Child
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\Child[]
     */
    public $Child;
    /**
     * The elementId
     * @var string
     */
    public $elementId;
    /**
     * Constructor method for AssociationMatrix.PNRB
     * @uses AssociationMatrix_PNRB::setName()
     * @uses AssociationMatrix_PNRB::setParent()
     * @uses AssociationMatrix_PNRB::setChild()
     * @uses AssociationMatrix_PNRB::setElementId()
     * @param string $name
     * @param \Sabre\UpdateReservation\StructType\_Parent $parent
     * @param \Sabre\UpdateReservation\StructType\Child[] $child
     * @param string $elementId
     */
    public function __construct($name = null, \Sabre\UpdateReservation\StructType\_Parent $parent = null, array $child = array(), $elementId = null)
    {
        $this
            ->setName($name)
            ->setParent($parent)
            ->setChild($child)
            ->setElementId($elementId);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB
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
     * Get Parent value
     * @return \Sabre\UpdateReservation\StructType\_Parent|null
     */
    public function getParent()
    {
        return $this->Parent;
    }
    /**
     * Set Parent value
     * @param \Sabre\UpdateReservation\StructType\_Parent $parent
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB
     */
    public function setParent(\Sabre\UpdateReservation\StructType\_Parent $parent = null)
    {
        $this->Parent = $parent;
        return $this;
    }
    /**
     * Get Child value
     * @return \Sabre\UpdateReservation\StructType\Child[]|null
     */
    public function getChild()
    {
        return $this->Child;
    }
    /**
     * Set Child value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Child[] $child
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB
     */
    public function setChild(array $child = array())
    {
        foreach ($child as $associationMatrix_PNRBChildItem) {
            // validation for constraint: itemType
            if (!$associationMatrix_PNRBChildItem instanceof \Sabre\UpdateReservation\StructType\Child) {
                throw new \InvalidArgumentException(sprintf('The Child property can only contain items of \Sabre\UpdateReservation\StructType\Child, "%s" given', is_object($associationMatrix_PNRBChildItem) ? get_class($associationMatrix_PNRBChildItem) : gettype($associationMatrix_PNRBChildItem)), __LINE__);
            }
        }
        $this->Child = $child;
        return $this;
    }
    /**
     * Add item to Child value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Child $item
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB
     */
    public function addToChild(\Sabre\UpdateReservation\StructType\Child $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Child) {
            throw new \InvalidArgumentException(sprintf('The Child property can only contain items of \Sabre\UpdateReservation\StructType\Child, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Child[] = $item;
        return $this;
    }
    /**
     * Get elementId value
     * @return string|null
     */
    public function getElementId()
    {
        return $this->elementId;
    }
    /**
     * Set elementId value
     * @param string $elementId
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB
     */
    public function setElementId($elementId = null)
    {
        // validation for constraint: string
        if (!is_null($elementId) && !is_string($elementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elementId)), __LINE__);
        }
        $this->elementId = $elementId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrix_PNRB
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
