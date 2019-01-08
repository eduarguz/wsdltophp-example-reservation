<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LangMatchDataType StructType
 * @subpackage Structs
 */
class LangMatchDataType extends AbstractStructBase
{
    /**
     * The Id
     * @var string
     */
    public $Id;
    /**
     * The Content
     * @var string
     */
    public $Content;
    /**
     * The ElementType
     * @var string
     */
    public $ElementType;
    /**
     * Constructor method for LangMatchDataType
     * @uses LangMatchDataType::setId()
     * @uses LangMatchDataType::setContent()
     * @uses LangMatchDataType::setElementType()
     * @param string $id
     * @param string $content
     * @param string $elementType
     */
    public function __construct($id = null, $content = null, $elementType = null)
    {
        $this
            ->setId($id)
            ->setContent($content)
            ->setElementType($elementType);
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
     * @return \Sabre\UpdateReservation\StructType\LangMatchDataType
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
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Sabre\UpdateReservation\StructType\LangMatchDataType
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Get ElementType value
     * @return string|null
     */
    public function getElementType()
    {
        return $this->ElementType;
    }
    /**
     * Set ElementType value
     * @param string $elementType
     * @return \Sabre\UpdateReservation\StructType\LangMatchDataType
     */
    public function setElementType($elementType = null)
    {
        // validation for constraint: string
        if (!is_null($elementType) && !is_string($elementType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elementType)), __LINE__);
        }
        $this->ElementType = $elementType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LangMatchDataType
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
