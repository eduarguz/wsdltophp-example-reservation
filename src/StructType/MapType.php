<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapType StructType
 * @subpackage Structs
 */
class MapType extends AbstractStructBase
{
    /**
     * The entry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Entry[]
     */
    public $entry;
    /**
     * Constructor method for MapType
     * @uses MapType::setEntry()
     * @param \Sabre\UpdateReservation\StructType\Entry[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get entry value
     * @return \Sabre\UpdateReservation\StructType\Entry[]|null
     */
    public function getEntry()
    {
        return $this->entry;
    }
    /**
     * Set entry value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Entry[] $entry
     * @return \Sabre\UpdateReservation\StructType\MapType
     */
    public function setEntry(array $entry = array())
    {
        foreach ($entry as $mapTypeEntryItem) {
            // validation for constraint: itemType
            if (!$mapTypeEntryItem instanceof \Sabre\UpdateReservation\StructType\Entry) {
                throw new \InvalidArgumentException(sprintf('The entry property can only contain items of \Sabre\UpdateReservation\StructType\Entry, "%s" given', is_object($mapTypeEntryItem) ? get_class($mapTypeEntryItem) : gettype($mapTypeEntryItem)), __LINE__);
            }
        }
        $this->entry = $entry;
        return $this;
    }
    /**
     * Add item to entry value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Entry $item
     * @return \Sabre\UpdateReservation\StructType\MapType
     */
    public function addToEntry(\Sabre\UpdateReservation\StructType\Entry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Entry) {
            throw new \InvalidArgumentException(sprintf('The entry property can only contain items of \Sabre\UpdateReservation\StructType\Entry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->entry[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MapType
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
