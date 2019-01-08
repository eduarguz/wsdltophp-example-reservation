<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardHolder StructType
 * @subpackage Structs
 */
class CardHolder extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PersonName;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType
     */
    public $Address;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneType[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Email;
    /**
     * Constructor method for CardHolder
     * @uses CardHolder::setPersonName()
     * @uses CardHolder::setAddress()
     * @uses CardHolder::setTelephone()
     * @uses CardHolder::setEmail()
     * @param string $personName
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $telephone
     * @param string[] $email
     */
    public function __construct($personName = null, \Sabre\UpdateReservation\StructType\AddressType $address = null, array $telephone = array(), array $email = array())
    {
        $this
            ->setPersonName($personName)
            ->setAddress($address)
            ->setTelephone($telephone)
            ->setEmail($email);
    }
    /**
     * Get PersonName value
     * @return string|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @uses \Sabre\UpdateReservation\EnumType\PersonNameType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PersonNameType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $personName
     * @return \Sabre\UpdateReservation\StructType\CardHolder
     */
    public function setPersonName($personName = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PersonNameType::valueIsValid($personName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $personName, implode(', ', \Sabre\UpdateReservation\EnumType\PersonNameType::getValidValues())), __LINE__);
        }
        $this->PersonName = $personName;
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
     * @return \Sabre\UpdateReservation\StructType\CardHolder
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Sabre\UpdateReservation\StructType\PhoneType[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $telephone
     * @return \Sabre\UpdateReservation\StructType\CardHolder
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $cardHolderTelephoneItem) {
            // validation for constraint: itemType
            if (!$cardHolderTelephoneItem instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($cardHolderTelephoneItem) ? get_class($cardHolderTelephoneItem) : gettype($cardHolderTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType $item
     * @return \Sabre\UpdateReservation\StructType\CardHolder
     */
    public function addToTelephone(\Sabre\UpdateReservation\StructType\PhoneType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return string[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param string[] $email
     * @return \Sabre\UpdateReservation\StructType\CardHolder
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $cardHolderEmailItem) {
            // validation for constraint: itemType
            if (!is_string($cardHolderEmailItem)) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of string, "%s" given', is_object($cardHolderEmailItem) ? get_class($cardHolderEmailItem) : gettype($cardHolderEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\CardHolder
     */
    public function addToEmail($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CardHolder
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
