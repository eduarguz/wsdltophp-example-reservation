<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClothingHire StructType
 * Meta informations extracted from the WSDL
 * - documentation: "ClothingHire" is used to order ski clothing
 * @subpackage Structs
 */
class ClothingHire extends SkiCommonElementsType
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - documentation: Clothing item
     * - minOccurs: 0
     * @var string
     */
    public $Item;
    /**
     * Constructor method for ClothingHire
     * @uses ClothingHire::setItem()
     * @param string $item
     */
    public function __construct($item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return string|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\ClothingHire
     */
    public function setItem($item = null)
    {
        // validation for constraint: string
        if (!is_null($item) && !is_string($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($item)), __LINE__);
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ClothingHire
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
