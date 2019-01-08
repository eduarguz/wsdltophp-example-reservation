<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultilineTextType StructType
 * @subpackage Structs
 */
class MultilineTextType extends AbstractStructBase
{
    /**
     * The TextLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $TextLine;
    /**
     * Constructor method for MultilineTextType
     * @uses MultilineTextType::setTextLine()
     * @param string[] $textLine
     */
    public function __construct(array $textLine = array())
    {
        $this
            ->setTextLine($textLine);
    }
    /**
     * Get TextLine value
     * @return string[]
     */
    public function getTextLine()
    {
        return $this->TextLine;
    }
    /**
     * Set TextLine value
     * @throws \InvalidArgumentException
     * @param string[] $textLine
     * @return \Sabre\UpdateReservation\StructType\MultilineTextType
     */
    public function setTextLine(array $textLine = array())
    {
        foreach ($textLine as $multilineTextTypeTextLineItem) {
            // validation for constraint: itemType
            if (!is_string($multilineTextTypeTextLineItem)) {
                throw new \InvalidArgumentException(sprintf('The TextLine property can only contain items of string, "%s" given', is_object($multilineTextTypeTextLineItem) ? get_class($multilineTextTypeTextLineItem) : gettype($multilineTextTypeTextLineItem)), __LINE__);
            }
        }
        $this->TextLine = $textLine;
        return $this;
    }
    /**
     * Add item to TextLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\MultilineTextType
     */
    public function addToTextLine($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TextLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MultilineTextType
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
