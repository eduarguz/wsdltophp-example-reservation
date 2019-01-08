<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Documents StructType
 * @subpackage Structs
 */
class Documents extends AbstractStructBase
{
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Document;
    /**
     * Constructor method for Documents
     * @uses Documents::setDocument()
     * @param string[] $document
     */
    public function __construct(array $document = array())
    {
        $this
            ->setDocument($document);
    }
    /**
     * Get Document value
     * @return string[]|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @uses \Sabre\UpdateReservation\EnumType\DocumentType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\DocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $document
     * @return \Sabre\UpdateReservation\StructType\Documents
     */
    public function setDocument(array $document = array())
    {
        $invalidValues = array();
        foreach ($document as $documentsDocumentItem) {
            if (!\Sabre\UpdateReservation\EnumType\DocumentType::valueIsValid($documentsDocumentItem)) {
                $invalidValues[] = var_export($documentsDocumentItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Sabre\UpdateReservation\EnumType\DocumentType::getValidValues())), __LINE__);
        }
        $this->Document = $document;
        return $this;
    }
    /**
     * Add item to Document value
     * @uses \Sabre\UpdateReservation\EnumType\DocumentType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\DocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Documents
     */
    public function addToDocument($item)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\DocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Sabre\UpdateReservation\EnumType\DocumentType::getValidValues())), __LINE__);
        }
        $this->Document[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Documents
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
