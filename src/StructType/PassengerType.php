<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerType StructType
 * @subpackage Structs
 */
class PassengerType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Type
     */
    public $Type;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType[]
     */
    public $Address;
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Age;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DateOfBirth;
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProfileType[]
     */
    public $Profile;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - documentation: Passenger gender identification ex. Female, Male
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The passengerID
     * @var string
     */
    public $passengerID;
    /**
     * The primary
     * @var bool
     */
    public $primary;
    /**
     * Constructor method for PassengerType
     * @uses PassengerType::setType()
     * @uses PassengerType::setPersonName()
     * @uses PassengerType::setTelephone()
     * @uses PassengerType::setEmail()
     * @uses PassengerType::setAddress()
     * @uses PassengerType::setAge()
     * @uses PassengerType::setDateOfBirth()
     * @uses PassengerType::setProfile()
     * @uses PassengerType::setGender()
     * @uses PassengerType::setPassengerID()
     * @uses PassengerType::setPrimary()
     * @param \Sabre\UpdateReservation\StructType\Type $type
     * @param string $personName
     * @param \Sabre\UpdateReservation\StructType\PhoneType[] $telephone
     * @param string[] $email
     * @param \Sabre\UpdateReservation\StructType\AddressType[] $address
     * @param int $age
     * @param string $dateOfBirth
     * @param \Sabre\UpdateReservation\StructType\ProfileType[] $profile
     * @param string $gender
     * @param string $passengerID
     * @param bool $primary
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Type $type = null, $personName = null, array $telephone = array(), array $email = array(), array $address = array(), $age = null, $dateOfBirth = null, array $profile = array(), $gender = null, $passengerID = null, $primary = null)
    {
        $this
            ->setType($type)
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setAddress($address)
            ->setAge($age)
            ->setDateOfBirth($dateOfBirth)
            ->setProfile($profile)
            ->setGender($gender)
            ->setPassengerID($passengerID)
            ->setPrimary($primary);
    }
    /**
     * Get Type value
     * @return \Sabre\UpdateReservation\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Sabre\UpdateReservation\StructType\Type $type
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setType(\Sabre\UpdateReservation\StructType\Type $type = null)
    {
        $this->Type = $type;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\PassengerType
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
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $passengerTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$passengerTypeTelephoneItem instanceof \Sabre\UpdateReservation\StructType\PhoneType) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Sabre\UpdateReservation\StructType\PhoneType, "%s" given', is_object($passengerTypeTelephoneItem) ? get_class($passengerTypeTelephoneItem) : gettype($passengerTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneType $item
     * @return \Sabre\UpdateReservation\StructType\PassengerType
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
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $passengerTypeEmailItem) {
            // validation for constraint: itemType
            if (!is_string($passengerTypeEmailItem)) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of string, "%s" given', is_object($passengerTypeEmailItem) ? get_class($passengerTypeEmailItem) : gettype($passengerTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\PassengerType
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
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $passengerTypeAddressItem) {
            // validation for constraint: itemType
            if (!$passengerTypeAddressItem instanceof \Sabre\UpdateReservation\StructType\AddressType) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Sabre\UpdateReservation\StructType\AddressType, "%s" given', is_object($passengerTypeAddressItem) ? get_class($passengerTypeAddressItem) : gettype($passengerTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AddressType $item
     * @return \Sabre\UpdateReservation\StructType\PassengerType
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
     * Get Age value
     * @return int|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setAge($age = null)
    {
        // validation for constraint: int
        if (!is_null($age) && !is_numeric($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Get Profile value
     * @return \Sabre\UpdateReservation\StructType\ProfileType[]|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProfileType[] $profile
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setProfile(array $profile = array())
    {
        foreach ($profile as $passengerTypeProfileItem) {
            // validation for constraint: itemType
            if (!$passengerTypeProfileItem instanceof \Sabre\UpdateReservation\StructType\ProfileType) {
                throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of \Sabre\UpdateReservation\StructType\ProfileType, "%s" given', is_object($passengerTypeProfileItem) ? get_class($passengerTypeProfileItem) : gettype($passengerTypeProfileItem)), __LINE__);
            }
        }
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Add item to Profile value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProfileType $item
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function addToProfile(\Sabre\UpdateReservation\StructType\ProfileType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ProfileType) {
            throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of \Sabre\UpdateReservation\StructType\ProfileType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Profile[] = $item;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get passengerID value
     * @return string|null
     */
    public function getPassengerID()
    {
        return $this->passengerID;
    }
    /**
     * Set passengerID value
     * @param string $passengerID
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setPassengerID($passengerID = null)
    {
        // validation for constraint: string
        if (!is_null($passengerID) && !is_string($passengerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerID)), __LINE__);
        }
        $this->passengerID = $passengerID;
        return $this;
    }
    /**
     * Get primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->primary;
    }
    /**
     * Set primary value
     * @param bool $primary
     * @return \Sabre\UpdateReservation\StructType\PassengerType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primary)), __LINE__);
        }
        $this->primary = $primary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerType
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
