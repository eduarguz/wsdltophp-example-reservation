<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicGuestInformation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Basic Information about Guest /Person. Includes Lead Guest, Loyalty Id, Frequent traveler ID
 * @subpackage Structs
 */
class BasicGuestInformation extends GuestName
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Email Validation
     * - pattern: [A-Z0-9a-z_.]*@[A-Z0-9a-z_.]*
     * @var string
     */
    public $Email;
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Age;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for room/guest indexes
     * - minInclusive: 1
     * @var int
     */
    public $Index;
    /**
     * The LeadGuest
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Only one lead passenger per booking
     * - use: optional
     * @var bool
     */
    public $LeadGuest;
    /**
     * The FrequentFlyerNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Should only be one ID per reservation
     * - minLength: 1
     * @var string
     */
    public $FrequentFlyerNumber;
    /**
     * The LoyaltyId
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Should only be one ID per reservation
     * - minLength: 1
     * @var string
     */
    public $LoyaltyId;
    /**
     * Constructor method for BasicGuestInformation
     * @uses BasicGuestInformation::setEmail()
     * @uses BasicGuestInformation::setAge()
     * @uses BasicGuestInformation::setIndex()
     * @uses BasicGuestInformation::setLeadGuest()
     * @uses BasicGuestInformation::setFrequentFlyerNumber()
     * @uses BasicGuestInformation::setLoyaltyId()
     * @param string $email
     * @param string $age
     * @param int $index
     * @param bool $leadGuest
     * @param string $frequentFlyerNumber
     * @param string $loyaltyId
     */
    public function __construct($email = null, $age = null, $index = null, $leadGuest = false, $frequentFlyerNumber = null, $loyaltyId = null)
    {
        $this
            ->setEmail($email)
            ->setAge($age)
            ->setIndex($index)
            ->setLeadGuest($leadGuest)
            ->setFrequentFlyerNumber($frequentFlyerNumber)
            ->setLoyaltyId($loyaltyId);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
     */
    public function setEmail($email = null)
    {
        // validation for constraint: pattern
        if (is_scalar($email) && !preg_match('/[A-Z0-9a-z_.]*@[A-Z0-9a-z_.]*/', $email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9a-z_.]*@[A-Z0-9a-z_.]*", "%s" given', var_export($email, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get Index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->Index;
    }
    /**
     * Set Index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
     */
    public function setIndex($index = null)
    {
        // validation for constraint: minInclusive
        if ($index < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->Index = $index;
        return $this;
    }
    /**
     * Get LeadGuest value
     * @return bool|null
     */
    public function getLeadGuest()
    {
        return $this->LeadGuest;
    }
    /**
     * Set LeadGuest value
     * @param bool $leadGuest
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
     */
    public function setLeadGuest($leadGuest = false)
    {
        // validation for constraint: boolean
        if (!is_null($leadGuest) && !is_bool($leadGuest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($leadGuest)), __LINE__);
        }
        $this->LeadGuest = $leadGuest;
        return $this;
    }
    /**
     * Get FrequentFlyerNumber value
     * @return string|null
     */
    public function getFrequentFlyerNumber()
    {
        return $this->FrequentFlyerNumber;
    }
    /**
     * Set FrequentFlyerNumber value
     * @param string $frequentFlyerNumber
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
     */
    public function setFrequentFlyerNumber($frequentFlyerNumber = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($frequentFlyerNumber) && strlen($frequentFlyerNumber) < 1) || (is_array($frequentFlyerNumber) && count($frequentFlyerNumber) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($frequentFlyerNumber) && !is_string($frequentFlyerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlyerNumber)), __LINE__);
        }
        $this->FrequentFlyerNumber = $frequentFlyerNumber;
        return $this;
    }
    /**
     * Get LoyaltyId value
     * @return string|null
     */
    public function getLoyaltyId()
    {
        return $this->LoyaltyId;
    }
    /**
     * Set LoyaltyId value
     * @param string $loyaltyId
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
     */
    public function setLoyaltyId($loyaltyId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($loyaltyId) && strlen($loyaltyId) < 1) || (is_array($loyaltyId) && count($loyaltyId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($loyaltyId) && !is_string($loyaltyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loyaltyId)), __LINE__);
        }
        $this->LoyaltyId = $loyaltyId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BasicGuestInformation
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
