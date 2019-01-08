<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Request StructType
 * @subpackage Structs
 */
class Request extends AbstractStructBase
{
    /**
     * The fragment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\Fragment[]
     */
    public $fragment;
    /**
     * Constructor method for Request
     * @uses Request::setFragment()
     * @param \Sabre\UpdateReservation\StructType\Fragment[] $fragment
     */
    public function __construct(array $fragment = array())
    {
        $this
            ->setFragment($fragment);
    }
    /**
     * Get fragment value
     * @return \Sabre\UpdateReservation\StructType\Fragment[]|null
     */
    public function getFragment()
    {
        return $this->fragment;
    }
    /**
     * Set fragment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Fragment[] $fragment
     * @return \Sabre\UpdateReservation\StructType\Request
     */
    public function setFragment(array $fragment = array())
    {
        foreach ($fragment as $requestFragmentItem) {
            // validation for constraint: itemType
            if (!$requestFragmentItem instanceof \Sabre\UpdateReservation\StructType\Fragment) {
                throw new \InvalidArgumentException(sprintf('The fragment property can only contain items of \Sabre\UpdateReservation\StructType\Fragment, "%s" given', is_object($requestFragmentItem) ? get_class($requestFragmentItem) : gettype($requestFragmentItem)), __LINE__);
            }
        }
        $this->fragment = $fragment;
        return $this;
    }
    /**
     * Add item to fragment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Fragment $item
     * @return \Sabre\UpdateReservation\StructType\Request
     */
    public function addToFragment(\Sabre\UpdateReservation\StructType\Fragment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Fragment) {
            throw new \InvalidArgumentException(sprintf('The fragment property can only contain items of \Sabre\UpdateReservation\StructType\Fragment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->fragment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Request
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
