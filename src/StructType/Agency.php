<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Agency StructType
 * Meta informations extracted from the WSDL
 * - documentation: Direct Bill to Agency. Address and Name are optional if IATANumber is provided
 * @subpackage Structs
 */
class Agency extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType
     */
    public $Address;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneType[]
     */
    public $Phone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Email[]
     */
    public $Email;
    /**
     * The IATANumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IATANumber;
    /**
     * Constructor method for Agency
     * @uses Agency::setName()
     * @uses Agency::setAddress()
     * @uses Agency::setPhone()
     * @uses Agency::setEmail()
     * @uses Agency::setIATANumber()
     * @param string $name
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $phone
     * @param \Sabre\UpdateReservation\StructType\Email[] $email
     * @param string $iATANumber
     */
    public function __construct($name = null, \Sabre\UpdateReservation\StructType\AddressType $address = null, array $phone = array(), array $email = array(), $iATANumber = null)
    {
        $this
            ->setName($name)
            ->setAddress($address)
            ->setPhone($phone)
            ->setEmail($email)
            ->setIATANumber($iATANumber);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Phone value
     * @return \Sabre\UpdateReservation\StructType\PhoneType[]|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $phone
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function setPhone(array $phone = array())
    {
        foreach ($phone as $agencyPhoneItem) {
            // validation for constraint: itemType
            if (!$agencyPhoneItem instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
                throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($agencyPhoneItem) ? get_class($agencyPhoneItem) : gettype($agencyPhoneItem)), __LINE__);
            }
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Add item to Phone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType $item
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function addToPhone(\Sabre\UpdateReservation\StructType\PhoneType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
            throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Phone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return \Sabre\UpdateReservation\StructType\Email[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Email[] $email
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $agencyEmailItem) {
            // validation for constraint: itemType
            if (!$agencyEmailItem instanceof \Sabre\UpdateReservation\StructType\Email) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Sabre\UpdateReservation\StructType\Email, "%s" given', is_object($agencyEmailItem) ? get_class($agencyEmailItem) : gettype($agencyEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Email $item
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function addToEmail(\Sabre\UpdateReservation\StructType\Email $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Email) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Sabre\UpdateReservation\StructType\Email, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Get IATANumber value
     * @return string|null
     */
    public function getIATANumber()
    {
        return $this->IATANumber;
    }
    /**
     * Set IATANumber value
     * @param string $iATANumber
     * @return \Sabre\UpdateReservation\StructType\Agency
     */
    public function setIATANumber($iATANumber = null)
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATANumber)), __LINE__);
        }
        $this->IATANumber = $iATANumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Agency
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
