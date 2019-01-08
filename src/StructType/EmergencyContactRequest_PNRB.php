<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmergencyContactRequest.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Can be name associated. formats: * add emergency information (GFAX AND AFAX) 4PCTC/(contact name)/(country code)(phone number)-(name number) 4PCTC/PIERRE BOUVIER/US 817 555 0000-1.1 * add emergency information with free text (GFAX
 * AND AFAX) 4PCTC/(contact name)/(country code) (phone number)/(free text) 4PCTC/MEIER THOMAS/DE 49 9131 45567/HOME * indicate that passenger has refused to provide emergency contact info (GFAX AND AFAX) 4PCTC//
 * @subpackage Structs
 */
class EmergencyContactRequest_PNRB extends AbstractStructBase
{
    /**
     * The ContactName
     * Meta informations extracted from the WSDL
     * - documentation: Name given by the passenger as an emergency contact in a PCTC SSR message that can be reached at the EmergencyPhoneNumber. Ex. " SMITH/ANNE"
     * - minOccurs: 0
     * @var string
     */
    public $ContactName;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: The country code corresponding to the EmergencyPhoneNumber in a PCTC SSR message. Ex."PL"
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: must not contain dashes and must include the entire telephone number including area codes, etc...
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Free text associated with the PCTC SSR, often indicating the relationship of the EmergencyContactName to the passenger; Also used for the text accompanying an OSI message starting with 'CTC'.
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The PassengerRefusal
     * Meta informations extracted from the WSDL
     * - documentation: True/False indicates whether the pax refused to provide emergency contact info. Ex."TRUE"
     * - minOccurs: 0
     * @var bool
     */
    public $PassengerRefusal;
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - documentation: Carrier OSI/SSR is being sent to. Ex."EY"
     * - minOccurs: 0
     * @var string
     */
    public $VendorCode;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: A = AFAX G = GFAX
     * @var string
     */
    public $type;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for EmergencyContactRequest.PNRB
     * @uses EmergencyContactRequest_PNRB::setContactName()
     * @uses EmergencyContactRequest_PNRB::setCountryCode()
     * @uses EmergencyContactRequest_PNRB::setPhoneNumber()
     * @uses EmergencyContactRequest_PNRB::setFreeText()
     * @uses EmergencyContactRequest_PNRB::setComment()
     * @uses EmergencyContactRequest_PNRB::setPassengerRefusal()
     * @uses EmergencyContactRequest_PNRB::setVendorCode()
     * @uses EmergencyContactRequest_PNRB::setId()
     * @uses EmergencyContactRequest_PNRB::setType()
     * @uses EmergencyContactRequest_PNRB::setOp()
     * @param string $contactName
     * @param string $countryCode
     * @param string $phoneNumber
     * @param string $freeText
     * @param string $comment
     * @param bool $passengerRefusal
     * @param string $vendorCode
     * @param string $id
     * @param string $type
     * @param string $op
     */
    public function __construct($contactName = null, $countryCode = null, $phoneNumber = null, $freeText = null, $comment = null, $passengerRefusal = null, $vendorCode = null, $id = null, $type = null, $op = null)
    {
        $this
            ->setContactName($contactName)
            ->setCountryCode($countryCode)
            ->setPhoneNumber($phoneNumber)
            ->setFreeText($freeText)
            ->setComment($comment)
            ->setPassengerRefusal($passengerRefusal)
            ->setVendorCode($vendorCode)
            ->setId($id)
            ->setType($type)
            ->setOp($op);
    }
    /**
     * Get ContactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }
    /**
     * Set ContactName value
     * @param string $contactName
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (!is_null($contactName) && !is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get PassengerRefusal value
     * @return bool|null
     */
    public function getPassengerRefusal()
    {
        return $this->PassengerRefusal;
    }
    /**
     * Set PassengerRefusal value
     * @param bool $passengerRefusal
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setPassengerRefusal($passengerRefusal = null)
    {
        // validation for constraint: boolean
        if (!is_null($passengerRefusal) && !is_bool($passengerRefusal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passengerRefusal)), __LINE__);
        }
        $this->PassengerRefusal = $passengerRefusal;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestType_PNRB::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\RequestType_PNRB::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\EmergencyContactRequest_PNRB
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
