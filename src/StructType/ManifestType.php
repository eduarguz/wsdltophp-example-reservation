<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManifestType StructType
 * @subpackage Structs
 */
class ManifestType extends AbstractStructBase
{
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ds:Reference
     * @var \Sabre\UpdateReservation\StructType\ReferenceType[]
     */
    public $Reference;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $Id;
    /**
     * Constructor method for ManifestType
     * @uses ManifestType::setReference()
     * @uses ManifestType::setId()
     * @param \Sabre\UpdateReservation\StructType\ReferenceType[] $reference
     * @param \Sabre\UpdateReservation\StructType\ID $id
     */
    public function __construct(array $reference = array(), \Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this
            ->setReference($reference)
            ->setId($id);
    }
    /**
     * Get Reference value
     * @return \Sabre\UpdateReservation\StructType\ReferenceType[]|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReferenceType[] $reference
     * @return \Sabre\UpdateReservation\StructType\ManifestType
     */
    public function setReference(array $reference = array())
    {
        foreach ($reference as $manifestTypeReferenceItem) {
            // validation for constraint: itemType
            if (!$manifestTypeReferenceItem instanceof \Sabre\UpdateReservation\StructType\ReferenceType) {
                throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Sabre\UpdateReservation\StructType\ReferenceType, "%s" given', is_object($manifestTypeReferenceItem) ? get_class($manifestTypeReferenceItem) : gettype($manifestTypeReferenceItem)), __LINE__);
            }
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Add item to Reference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReferenceType $item
     * @return \Sabre\UpdateReservation\StructType\ManifestType
     */
    public function addToReference(\Sabre\UpdateReservation\StructType\ReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ReferenceType) {
            throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Sabre\UpdateReservation\StructType\ReferenceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Reference[] = $item;
        return $this;
    }
    /**
     * Get Id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\ManifestType
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ManifestType
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
