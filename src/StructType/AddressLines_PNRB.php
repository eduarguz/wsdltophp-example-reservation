<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressLines.PNRB StructType
 * @subpackage Structs
 */
class AddressLines_PNRB extends AbstractStructBase
{
    /**
     * The AddressLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressLine_PNRB[]
     */
    public $AddressLine;
    /**
     * Constructor method for AddressLines.PNRB
     * @uses AddressLines_PNRB::setAddressLine()
     * @param \Sabre\UpdateReservation\StructType\AddressLine_PNRB[] $addressLine
     */
    public function __construct(array $addressLine = array())
    {
        $this
            ->setAddressLine($addressLine);
    }
    /**
     * Get AddressLine value
     * @return \Sabre\UpdateReservation\StructType\AddressLine_PNRB[]|null
     */
    public function getAddressLine()
    {
        return $this->AddressLine;
    }
    /**
     * Set AddressLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AddressLine_PNRB[] $addressLine
     * @return \Sabre\UpdateReservation\StructType\AddressLines_PNRB
     */
    public function setAddressLine(array $addressLine = array())
    {
        foreach ($addressLine as $addressLines_PNRBAddressLineItem) {
            // validation for constraint: itemType
            if (!$addressLines_PNRBAddressLineItem instanceof \Sabre\UpdateReservation\StructType\AddressLine_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of \Sabre\UpdateReservation\StructType\AddressLine_PNRB, "%s" given', is_object($addressLines_PNRBAddressLineItem) ? get_class($addressLines_PNRBAddressLineItem) : gettype($addressLines_PNRBAddressLineItem)), __LINE__);
            }
        }
        $this->AddressLine = $addressLine;
        return $this;
    }
    /**
     * Add item to AddressLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AddressLine_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\AddressLines_PNRB
     */
    public function addToAddressLine(\Sabre\UpdateReservation\StructType\AddressLine_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AddressLine_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AddressLine property can only contain items of \Sabre\UpdateReservation\StructType\AddressLine_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AddressLines_PNRB
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
