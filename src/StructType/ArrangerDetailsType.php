<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrangerDetailsType StructType
 * @subpackage Structs
 */
class ArrangerDetailsType extends AbstractStructBase
{
    /**
     * The PersonName
     * @var string
     */
    public $PersonName;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneType[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    public $Email;
    /**
     * Constructor method for ArrangerDetailsType
     * @uses ArrangerDetailsType::setPersonName()
     * @uses ArrangerDetailsType::setTelephone()
     * @uses ArrangerDetailsType::setEmail()
     * @param string $personName
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $telephone
     * @param string[] $email
     */
    public function __construct($personName = null, array $telephone = array(), array $email = array())
    {
        $this
            ->setPersonName($personName)
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
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $arrangerDetailsTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$arrangerDetailsTypeTelephoneItem instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($arrangerDetailsTypeTelephoneItem) ? get_class($arrangerDetailsTypeTelephoneItem) : gettype($arrangerDetailsTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType $item
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $arrangerDetailsTypeEmailItem) {
            // validation for constraint: itemType
            if (!is_string($arrangerDetailsTypeEmailItem)) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of string, "%s" given', is_object($arrangerDetailsTypeEmailItem) ? get_class($arrangerDetailsTypeEmailItem) : gettype($arrangerDetailsTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\ArrangerDetailsType
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
