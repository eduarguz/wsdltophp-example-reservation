<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductTextDetailsItem StructType
 * @subpackage Structs
 */
class ProductTextDetailsItem extends AbstractStructBase
{
    /**
     * The ItemName
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ItemName;
    /**
     * The ItemValue
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ItemValue;
    /**
     * Constructor method for ProductTextDetailsItem
     * @uses ProductTextDetailsItem::setItemName()
     * @uses ProductTextDetailsItem::setItemValue()
     * @param string $itemName
     * @param string $itemValue
     */
    public function __construct($itemName = null, $itemValue = null)
    {
        $this
            ->setItemName($itemName)
            ->setItemValue($itemValue);
    }
    /**
     * Get ItemName value
     * @return string
     */
    public function getItemName()
    {
        return $this->ItemName;
    }
    /**
     * Set ItemName value
     * @param string $itemName
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetailsItem
     */
    public function setItemName($itemName = null)
    {
        // validation for constraint: string
        if (!is_null($itemName) && !is_string($itemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemName)), __LINE__);
        }
        $this->ItemName = $itemName;
        return $this;
    }
    /**
     * Get ItemValue value
     * @return string
     */
    public function getItemValue()
    {
        return $this->ItemValue;
    }
    /**
     * Set ItemValue value
     * @param string $itemValue
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetailsItem
     */
    public function setItemValue($itemValue = null)
    {
        // validation for constraint: string
        if (!is_null($itemValue) && !is_string($itemValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemValue)), __LINE__);
        }
        $this->ItemValue = $itemValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetailsItem
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
