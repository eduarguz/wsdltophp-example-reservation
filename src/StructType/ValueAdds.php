<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueAdds StructType
 * @subpackage Structs
 */
class ValueAdds extends AbstractStructBase
{
    /**
     * The ValueAdd
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\ValueAdd[]
     */
    public $ValueAdd;
    /**
     * Constructor method for ValueAdds
     * @uses ValueAdds::setValueAdd()
     * @param \Sabre\UpdateReservation\StructType\ValueAdd[] $valueAdd
     */
    public function __construct(array $valueAdd = array())
    {
        $this
            ->setValueAdd($valueAdd);
    }
    /**
     * Get ValueAdd value
     * @return \Sabre\UpdateReservation\StructType\ValueAdd[]|null
     */
    public function getValueAdd()
    {
        return $this->ValueAdd;
    }
    /**
     * Set ValueAdd value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ValueAdd[] $valueAdd
     * @return \Sabre\UpdateReservation\StructType\ValueAdds
     */
    public function setValueAdd(array $valueAdd = array())
    {
        foreach ($valueAdd as $valueAddsValueAddItem) {
            // validation for constraint: itemType
            if (!$valueAddsValueAddItem instanceof \Sabre\UpdateReservation\StructType\ValueAdd) {
                throw new \InvalidArgumentException(sprintf('The ValueAdd property can only contain items of \Sabre\UpdateReservation\StructType\ValueAdd, "%s" given', is_object($valueAddsValueAddItem) ? get_class($valueAddsValueAddItem) : gettype($valueAddsValueAddItem)), __LINE__);
            }
        }
        $this->ValueAdd = $valueAdd;
        return $this;
    }
    /**
     * Add item to ValueAdd value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ValueAdd $item
     * @return \Sabre\UpdateReservation\StructType\ValueAdds
     */
    public function addToValueAdd(\Sabre\UpdateReservation\StructType\ValueAdd $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ValueAdd) {
            throw new \InvalidArgumentException(sprintf('The ValueAdd property can only contain items of \Sabre\UpdateReservation\StructType\ValueAdd, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValueAdd[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ValueAdds
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
