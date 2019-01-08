<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationParent StructType
 * @subpackage Structs
 */
class AssociationParent extends AbstractStructBase
{
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - documentation: Key value of the parent item being associated to
     * @var string
     */
    public $Reference;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type of value passed in primaryRef
     * @var string
     */
    public $Type;
    /**
     * The ReferenceType
     * Meta informations extracted from the WSDL
     * - documentation: Type of value passed in Reference, which is the item to be associated as parent
     * @var string
     */
    public $ReferenceType;
    /**
     * Constructor method for AssociationParent
     * @uses AssociationParent::setReference()
     * @uses AssociationParent::setType()
     * @uses AssociationParent::setReferenceType()
     * @param string $reference
     * @param string $type
     * @param string $referenceType
     */
    public function __construct($reference = null, $type = null, $referenceType = null)
    {
        $this
            ->setReference($reference)
            ->setType($type)
            ->setReferenceType($referenceType);
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \Sabre\UpdateReservation\StructType\AssociationParent
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Sabre\UpdateReservation\EnumType\AssociationParentType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AssociationParentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\AssociationParent
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AssociationParentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\AssociationParentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ReferenceType value
     * @return string|null
     */
    public function getReferenceType()
    {
        return $this->ReferenceType;
    }
    /**
     * Set ReferenceType value
     * @uses \Sabre\UpdateReservation\EnumType\AssociationParentReferenceType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AssociationParentReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $referenceType
     * @return \Sabre\UpdateReservation\StructType\AssociationParent
     */
    public function setReferenceType($referenceType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AssociationParentReferenceType::valueIsValid($referenceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $referenceType, implode(', ', \Sabre\UpdateReservation\EnumType\AssociationParentReferenceType::getValidValues())), __LINE__);
        }
        $this->ReferenceType = $referenceType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociationParent
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
