<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Addresses.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: There can be only one address for each of the following: agency, client and delivery.
 * @subpackage Structs
 */
class Addresses_PNRB extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Address_PNRB[]
     */
    public $Address;
    /**
     * Constructor method for Addresses.PNRB
     * @uses Addresses_PNRB::setAddress()
     * @param \Sabre\UpdateReservation\StructType\Address_PNRB[] $address
     */
    public function __construct(array $address = array())
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\Address_PNRB[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Address_PNRB[] $address
     * @return \Sabre\UpdateReservation\StructType\Addresses_PNRB
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $addresses_PNRBAddressItem) {
            // validation for constraint: itemType
            if (!$addresses_PNRBAddressItem instanceof \Sabre\UpdateReservation\StructType\Address_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Sabre\UpdateReservation\StructType\Address_PNRB, "%s" given', is_object($addresses_PNRBAddressItem) ? get_class($addresses_PNRBAddressItem) : gettype($addresses_PNRBAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Address_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Addresses_PNRB
     */
    public function addToAddress(\Sabre\UpdateReservation\StructType\Address_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Address_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Sabre\UpdateReservation\StructType\Address_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Addresses_PNRB
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
