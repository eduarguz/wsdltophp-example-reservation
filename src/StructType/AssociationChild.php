<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationChild StructType
 * @subpackage Structs
 */
class AssociationChild extends AbstractStructBase
{
    /**
     * The RemarkType
     * Meta informations extracted from the WSDL
     * - documentation: Only included when Child/@Type=Remark and Child/@ReferenceType=Type
     * - minOccurs: 0
     * @var string
     */
    public $RemarkType;
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - documentation: Key value of the child item being associated
     * @var string
     */
    public $Reference;
    /**
     * The TempReference
     * Meta informations extracted from the WSDL
     * - documentation: Key value of the child item being associated which will be updated with reference value.
     * @var string
     */
    public $TempReference;
    /**
     * The ReferenceType
     * Meta informations extracted from the WSDL
     * - documentation: Type of value passed in Reference, which is the item to be associated to the parent item
     * @var string
     */
    public $ReferenceType;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type of data, optional if Op equals U
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AssociationChild
     * @uses AssociationChild::setRemarkType()
     * @uses AssociationChild::setReference()
     * @uses AssociationChild::setTempReference()
     * @uses AssociationChild::setReferenceType()
     * @uses AssociationChild::setType()
     * @param string $remarkType
     * @param string $reference
     * @param string $tempReference
     * @param string $referenceType
     * @param string $type
     */
    public function __construct($remarkType = null, $reference = null, $tempReference = null, $referenceType = null, $type = null)
    {
        $this
            ->setRemarkType($remarkType)
            ->setReference($reference)
            ->setTempReference($tempReference)
            ->setReferenceType($referenceType)
            ->setType($type);
    }
    /**
     * Get RemarkType value
     * @return string|null
     */
    public function getRemarkType()
    {
        return $this->RemarkType;
    }
    /**
     * Set RemarkType value
     * @uses \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $remarkType
     * @return \Sabre\UpdateReservation\StructType\AssociationChild
     */
    public function setRemarkType($remarkType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RemarkType_PNRB::valueIsValid($remarkType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $remarkType, implode(', ', \Sabre\UpdateReservation\EnumType\RemarkType_PNRB::getValidValues())), __LINE__);
        }
        $this->RemarkType = $remarkType;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\AssociationChild
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
     * Get TempReference value
     * @return string|null
     */
    public function getTempReference()
    {
        return $this->TempReference;
    }
    /**
     * Set TempReference value
     * @param string $tempReference
     * @return \Sabre\UpdateReservation\StructType\AssociationChild
     */
    public function setTempReference($tempReference = null)
    {
        // validation for constraint: string
        if (!is_null($tempReference) && !is_string($tempReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tempReference)), __LINE__);
        }
        $this->TempReference = $tempReference;
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
     * @uses \Sabre\UpdateReservation\EnumType\AssociationChildReferenceType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AssociationChildReferenceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $referenceType
     * @return \Sabre\UpdateReservation\StructType\AssociationChild
     */
    public function setReferenceType($referenceType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AssociationChildReferenceType::valueIsValid($referenceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $referenceType, implode(', ', \Sabre\UpdateReservation\EnumType\AssociationChildReferenceType::getValidValues())), __LINE__);
        }
        $this->ReferenceType = $referenceType;
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
     * @uses \Sabre\UpdateReservation\EnumType\AssociationChildElementType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AssociationChildElementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\AssociationChild
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AssociationChildElementType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\AssociationChildElementType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociationChild
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
