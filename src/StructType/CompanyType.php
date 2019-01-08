<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyType StructType
 * @subpackage Structs
 */
class CompanyType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Code
     */
    public $Code;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneType[]
     */
    public $Telephone;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType[]
     */
    public $Address;
    /**
     * Constructor method for CompanyType
     * @uses CompanyType::setName()
     * @uses CompanyType::setCode()
     * @uses CompanyType::setTelephone()
     * @uses CompanyType::setAddress()
     * @param string $name
     * @param \Sabre\UpdateReservation\StructType\Code $code
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $telephone
     * @param \Sabre\UpdateReservation\StructType\AddressType[] $address
     */
    public function __construct($name = null, \Sabre\UpdateReservation\StructType\Code $code = null, array $telephone = array(), array $address = array())
    {
        $this
            ->setName($name)
            ->setCode($code)
            ->setTelephone($telephone)
            ->setAddress($address);
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
     * @return \Sabre\UpdateReservation\StructType\CompanyType
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
     * Get Code value
     * @return \Sabre\UpdateReservation\StructType\Code|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param \Sabre\UpdateReservation\StructType\Code $code
     * @return \Sabre\UpdateReservation\StructType\CompanyType
     */
    public function setCode(\Sabre\UpdateReservation\StructType\Code $code = null)
    {
        $this->Code = $code;
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
     * @return \Sabre\UpdateReservation\StructType\CompanyType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $companyTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$companyTypeTelephoneItem instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($companyTypeTelephoneItem) ? get_class($companyTypeTelephoneItem) : gettype($companyTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType $item
     * @return \Sabre\UpdateReservation\StructType\CompanyType
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
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\AddressType[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AddressType[] $address
     * @return \Sabre\UpdateReservation\StructType\CompanyType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $companyTypeAddressItem) {
            // validation for constraint: itemType
            if (!$companyTypeAddressItem instanceof \Sabre\UpdateReservation\StructType\AddressType) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Sabre\UpdateReservation\StructType\AddressType, "%s" given', is_object($companyTypeAddressItem) ? get_class($companyTypeAddressItem) : gettype($companyTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AddressType $item
     * @return \Sabre\UpdateReservation\StructType\CompanyType
     */
    public function addToAddress(\Sabre\UpdateReservation\StructType\AddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AddressType) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Sabre\UpdateReservation\StructType\AddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\CompanyType
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
