<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignedInfoType StructType
 * @subpackage Structs
 */
class SignedInfoType extends AbstractStructBase
{
    /**
     * The CanonicalizationMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:CanonicalizationMethod
     * @var \Sabre\UpdateReservation\StructType\CanonicalizationMethodType
     */
    public $CanonicalizationMethod;
    /**
     * The SignatureMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:SignatureMethod
     * @var \Sabre\UpdateReservation\StructType\SignatureMethodType
     */
    public $SignatureMethod;
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
     * Constructor method for SignedInfoType
     * @uses SignedInfoType::setCanonicalizationMethod()
     * @uses SignedInfoType::setSignatureMethod()
     * @uses SignedInfoType::setReference()
     * @uses SignedInfoType::setId()
     * @param \Sabre\UpdateReservation\StructType\CanonicalizationMethodType $canonicalizationMethod
     * @param \Sabre\UpdateReservation\StructType\SignatureMethodType $signatureMethod
     * @param \Sabre\UpdateReservation\StructType\ReferenceType[] $reference
     * @param \Sabre\UpdateReservation\StructType\ID $id
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CanonicalizationMethodType $canonicalizationMethod = null, \Sabre\UpdateReservation\StructType\SignatureMethodType $signatureMethod = null, array $reference = array(), \Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this
            ->setCanonicalizationMethod($canonicalizationMethod)
            ->setSignatureMethod($signatureMethod)
            ->setReference($reference)
            ->setId($id);
    }
    /**
     * Get CanonicalizationMethod value
     * @return \Sabre\UpdateReservation\StructType\CanonicalizationMethodType|null
     */
    public function getCanonicalizationMethod()
    {
        return $this->CanonicalizationMethod;
    }
    /**
     * Set CanonicalizationMethod value
     * @param \Sabre\UpdateReservation\StructType\CanonicalizationMethodType $canonicalizationMethod
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType
     */
    public function setCanonicalizationMethod(\Sabre\UpdateReservation\StructType\CanonicalizationMethodType $canonicalizationMethod = null)
    {
        $this->CanonicalizationMethod = $canonicalizationMethod;
        return $this;
    }
    /**
     * Get SignatureMethod value
     * @return \Sabre\UpdateReservation\StructType\SignatureMethodType|null
     */
    public function getSignatureMethod()
    {
        return $this->SignatureMethod;
    }
    /**
     * Set SignatureMethod value
     * @param \Sabre\UpdateReservation\StructType\SignatureMethodType $signatureMethod
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType
     */
    public function setSignatureMethod(\Sabre\UpdateReservation\StructType\SignatureMethodType $signatureMethod = null)
    {
        $this->SignatureMethod = $signatureMethod;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType
     */
    public function setReference(array $reference = array())
    {
        foreach ($reference as $signedInfoTypeReferenceItem) {
            // validation for constraint: itemType
            if (!$signedInfoTypeReferenceItem instanceof \Sabre\UpdateReservation\StructType\ReferenceType) {
                throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Sabre\UpdateReservation\StructType\ReferenceType, "%s" given', is_object($signedInfoTypeReferenceItem) ? get_class($signedInfoTypeReferenceItem) : gettype($signedInfoTypeReferenceItem)), __LINE__);
            }
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Add item to Reference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReferenceType $item
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType
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
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType
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
     * @return \Sabre\UpdateReservation\StructType\SignedInfoType
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
