<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanDescriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rate plan description
 * @subpackage Structs
 */
class RatePlanDescriptionType extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * Constructor method for RatePlanDescriptionType
     * @uses RatePlanDescriptionType::setText()
     * @param string[] $text
     */
    public function __construct(array $text = array())
    {
        $this
            ->setText($text);
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\RatePlanDescriptionType
     */
    public function setText(array $text = array())
    {
        foreach ($text as $ratePlanDescriptionTypeTextItem) {
            // validation for constraint: itemType
            if (!is_string($ratePlanDescriptionTypeTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($ratePlanDescriptionTypeTextItem) ? get_class($ratePlanDescriptionTypeTextItem) : gettype($ratePlanDescriptionTypeTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\RatePlanDescriptionType
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RatePlanDescriptionType
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
