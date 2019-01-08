<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignaturePropertiesType StructType
 * @subpackage Structs
 */
class SignaturePropertiesType extends AbstractStructBase
{
    /**
     * The SignatureProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ds:SignatureProperty
     * @var \Sabre\UpdateReservation\StructType\SignaturePropertyType[]
     */
    public $SignatureProperty;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $Id;
    /**
     * Constructor method for SignaturePropertiesType
     * @uses SignaturePropertiesType::setSignatureProperty()
     * @uses SignaturePropertiesType::setId()
     * @param \Sabre\UpdateReservation\StructType\SignaturePropertyType[] $signatureProperty
     * @param \Sabre\UpdateReservation\StructType\ID $id
     */
    public function __construct(array $signatureProperty = array(), \Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this
            ->setSignatureProperty($signatureProperty)
            ->setId($id);
    }
    /**
     * Get SignatureProperty value
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertyType[]|null
     */
    public function getSignatureProperty()
    {
        return $this->SignatureProperty;
    }
    /**
     * Set SignatureProperty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SignaturePropertyType[] $signatureProperty
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertiesType
     */
    public function setSignatureProperty(array $signatureProperty = array())
    {
        foreach ($signatureProperty as $signaturePropertiesTypeSignaturePropertyItem) {
            // validation for constraint: itemType
            if (!$signaturePropertiesTypeSignaturePropertyItem instanceof \Sabre\UpdateReservation\StructType\SignaturePropertyType) {
                throw new \InvalidArgumentException(sprintf('The SignatureProperty property can only contain items of \Sabre\UpdateReservation\StructType\SignaturePropertyType, "%s" given', is_object($signaturePropertiesTypeSignaturePropertyItem) ? get_class($signaturePropertiesTypeSignaturePropertyItem) : gettype($signaturePropertiesTypeSignaturePropertyItem)), __LINE__);
            }
        }
        $this->SignatureProperty = $signatureProperty;
        return $this;
    }
    /**
     * Add item to SignatureProperty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SignaturePropertyType $item
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertiesType
     */
    public function addToSignatureProperty(\Sabre\UpdateReservation\StructType\SignaturePropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SignaturePropertyType) {
            throw new \InvalidArgumentException(sprintf('The SignatureProperty property can only contain items of \Sabre\UpdateReservation\StructType\SignaturePropertyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SignatureProperty[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertiesType
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
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertiesType
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
