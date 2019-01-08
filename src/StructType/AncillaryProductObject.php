<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryProductObject StructType
 * @subpackage Structs
 */
class AncillaryProductObject extends AbstractStructBase
{
    /**
     * The XmlData
     * @var \Sabre\UpdateReservation\StructType\ApoXmlData
     */
    public $XmlData;
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - default: CREATE
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for AncillaryProductObject
     * @uses AncillaryProductObject::setXmlData()
     * @uses AncillaryProductObject::setId()
     * @uses AncillaryProductObject::setOperation()
     * @param \Sabre\UpdateReservation\StructType\ApoXmlData $xmlData
     * @param string $id
     * @param string $operation
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ApoXmlData $xmlData = null, $id = null, $operation = 'CREATE')
    {
        $this
            ->setXmlData($xmlData)
            ->setId($id)
            ->setOperation($operation);
    }
    /**
     * Get XmlData value
     * @return \Sabre\UpdateReservation\StructType\ApoXmlData|null
     */
    public function getXmlData()
    {
        return $this->XmlData;
    }
    /**
     * Set XmlData value
     * @param \Sabre\UpdateReservation\StructType\ApoXmlData $xmlData
     * @return \Sabre\UpdateReservation\StructType\AncillaryProductObject
     */
    public function setXmlData(\Sabre\UpdateReservation\StructType\ApoXmlData $xmlData = null)
    {
        $this->XmlData = $xmlData;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\AncillaryProductObject
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
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
     * @uses \Sabre\UpdateReservation\EnumType\ApoOperation::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\ApoOperation::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operation
     * @return \Sabre\UpdateReservation\StructType\AncillaryProductObject
     */
    public function setOperation($operation = 'CREATE')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\ApoOperation::valueIsValid($operation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operation, implode(', ', \Sabre\UpdateReservation\EnumType\ApoOperation::getValidValues())), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryProductObject
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
