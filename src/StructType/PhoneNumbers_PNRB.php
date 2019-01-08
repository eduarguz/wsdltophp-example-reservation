<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumbers.PNRB StructType
 * @subpackage Structs
 */
class PhoneNumbers_PNRB extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB[]
     */
    public $PhoneNumber;
    /**
     * Constructor method for PhoneNumbers.PNRB
     * @uses PhoneNumbers_PNRB::setPhoneNumber()
     * @param \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB[] $phoneNumber
     */
    public function __construct(array $phoneNumber = array())
    {
        $this
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get PhoneNumber value
     * @return \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB[]|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB[] $phoneNumber
     * @return \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB
     */
    public function setPhoneNumber(array $phoneNumber = array())
    {
        foreach ($phoneNumber as $phoneNumbers_PNRBPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$phoneNumbers_PNRBPhoneNumberItem instanceof \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB, "%s" given', is_object($phoneNumbers_PNRBPhoneNumberItem) ? get_class($phoneNumbers_PNRBPhoneNumberItem) : gettype($phoneNumbers_PNRBPhoneNumberItem)), __LINE__);
            }
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB
     */
    public function addToPhoneNumber(\Sabre\UpdateReservation\StructType\PhoneNumber_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of \Sabre\UpdateReservation\StructType\PhoneNumber_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB
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
