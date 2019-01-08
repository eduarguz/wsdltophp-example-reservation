<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactNumbers StructType
 * @subpackage Structs
 */
class ContactNumbers extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PhoneNumber;
    /**
     * The FaxNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FaxNumber;
    /**
     * Constructor method for ContactNumbers
     * @uses ContactNumbers::setPhoneNumber()
     * @uses ContactNumbers::setFaxNumber()
     * @param string[] $phoneNumber
     * @param string $faxNumber
     */
    public function __construct(array $phoneNumber = array(), $faxNumber = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setFaxNumber($faxNumber);
    }
    /**
     * Get PhoneNumber value
     * @return string[]|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @throws \InvalidArgumentException
     * @param string[] $phoneNumber
     * @return \Sabre\UpdateReservation\StructType\ContactNumbers
     */
    public function setPhoneNumber(array $phoneNumber = array())
    {
        foreach ($phoneNumber as $contactNumbersPhoneNumberItem) {
            // validation for constraint: itemType
            if (!is_string($contactNumbersPhoneNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of string, "%s" given', is_object($contactNumbersPhoneNumberItem) ? get_class($contactNumbersPhoneNumberItem) : gettype($contactNumbersPhoneNumberItem)), __LINE__);
            }
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\ContactNumbers
     */
    public function addToPhoneNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        return $this;
    }
    /**
     * Get FaxNumber value
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }
    /**
     * Set FaxNumber value
     * @param string $faxNumber
     * @return \Sabre\UpdateReservation\StructType\ContactNumbers
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: string
        if (!is_null($faxNumber) && !is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxNumber)), __LINE__);
        }
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ContactNumbers
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
