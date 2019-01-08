<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Child StructType
 * @subpackage Structs
 */
class Child extends AbstractStructBase
{
    /**
     * The AssociationRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationRule[]
     */
    public $AssociationRule;
    /**
     * The ref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ref;
    /**
     * The newRef
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $newRef;
    /**
     * The key
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $key;
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $value;
    /**
     * Constructor method for Child
     * @uses Child::setAssociationRule()
     * @uses Child::setRef()
     * @uses Child::setNewRef()
     * @uses Child::setKey()
     * @uses Child::setValue()
     * @param \Sabre\UpdateReservation\StructType\AssociationRule[] $associationRule
     * @param string $ref
     * @param string $newRef
     * @param string $key
     * @param string $value
     */
    public function __construct(array $associationRule = array(), $ref = null, $newRef = null, $key = null, $value = null)
    {
        $this
            ->setAssociationRule($associationRule)
            ->setRef($ref)
            ->setNewRef($newRef)
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get AssociationRule value
     * @return \Sabre\UpdateReservation\StructType\AssociationRule[]|null
     */
    public function getAssociationRule()
    {
        return $this->AssociationRule;
    }
    /**
     * Set AssociationRule value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationRule[] $associationRule
     * @return \Sabre\UpdateReservation\StructType\Child
     */
    public function setAssociationRule(array $associationRule = array())
    {
        foreach ($associationRule as $childAssociationRuleItem) {
            // validation for constraint: itemType
            if (!$childAssociationRuleItem instanceof \Sabre\UpdateReservation\StructType\AssociationRule) {
                throw new \InvalidArgumentException(sprintf('The AssociationRule property can only contain items of \Sabre\UpdateReservation\StructType\AssociationRule, "%s" given', is_object($childAssociationRuleItem) ? get_class($childAssociationRuleItem) : gettype($childAssociationRuleItem)), __LINE__);
            }
        }
        $this->AssociationRule = $associationRule;
        return $this;
    }
    /**
     * Add item to AssociationRule value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociationRule $item
     * @return \Sabre\UpdateReservation\StructType\Child
     */
    public function addToAssociationRule(\Sabre\UpdateReservation\StructType\AssociationRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociationRule) {
            throw new \InvalidArgumentException(sprintf('The AssociationRule property can only contain items of \Sabre\UpdateReservation\StructType\AssociationRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociationRule[] = $item;
        return $this;
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \Sabre\UpdateReservation\StructType\Child
     */
    public function setRef($ref = null)
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        return $this;
    }
    /**
     * Get newRef value
     * @return string|null
     */
    public function getNewRef()
    {
        return $this->newRef;
    }
    /**
     * Set newRef value
     * @param string $newRef
     * @return \Sabre\UpdateReservation\StructType\Child
     */
    public function setNewRef($newRef = null)
    {
        // validation for constraint: string
        if (!is_null($newRef) && !is_string($newRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newRef)), __LINE__);
        }
        $this->newRef = $newRef;
        return $this;
    }
    /**
     * Get key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param string $key
     * @return \Sabre\UpdateReservation\StructType\Child
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($key)), __LINE__);
        }
        $this->key = $key;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Sabre\UpdateReservation\StructType\Child
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Child
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
