<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameAssociations StructType
 * @subpackage Structs
 */
class NameAssociations extends AbstractStructBase
{
    /**
     * The NameID
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NameID;
    /**
     * Constructor method for NameAssociations
     * @uses NameAssociations::setNameID()
     * @param string[] $nameID
     */
    public function __construct(array $nameID = array())
    {
        $this
            ->setNameID($nameID);
    }
    /**
     * Get NameID value
     * @return string[]|null
     */
    public function getNameID()
    {
        return $this->NameID;
    }
    /**
     * Set NameID value
     * @throws \InvalidArgumentException
     * @param string[] $nameID
     * @return \Sabre\UpdateReservation\StructType\NameAssociations
     */
    public function setNameID(array $nameID = array())
    {
        foreach ($nameID as $nameAssociationsNameIDItem) {
            // validation for constraint: itemType
            if (!is_string($nameAssociationsNameIDItem)) {
                throw new \InvalidArgumentException(sprintf('The NameID property can only contain items of string, "%s" given', is_object($nameAssociationsNameIDItem) ? get_class($nameAssociationsNameIDItem) : gettype($nameAssociationsNameIDItem)), __LINE__);
            }
        }
        $this->NameID = $nameID;
        return $this;
    }
    /**
     * Add item to NameID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\NameAssociations
     */
    public function addToNameID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The NameID property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameID[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NameAssociations
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
