<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionInfo StructType
 * @subpackage Structs
 */
class CollectionInfo extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType
     */
    public $Address;
    /**
     * The ContactNumber
     * Meta informations extracted from the WSDL
     * - documentation: "phone" is used to return the collection site phone number associated with the vehicle reservation if applicable.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneType
     */
    public $ContactNumber;
    /**
     * The siteID
     * Meta informations extracted from the WSDL
     * - documentation: "siteID" is used to return the collection site ID associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $siteID;
    /**
     * The siteName
     * Meta informations extracted from the WSDL
     * - documentation: "siteName" is used to return the collection site name associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $siteName;
    /**
     * Constructor method for CollectionInfo
     * @uses CollectionInfo::setAddress()
     * @uses CollectionInfo::setContactNumber()
     * @uses CollectionInfo::setSiteID()
     * @uses CollectionInfo::setSiteName()
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @param \Sabre\UpdateReservation\StructType\PhoneType $contactNumber
     * @param string $siteID
     * @param string $siteName
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AddressType $address = null, \Sabre\UpdateReservation\StructType\PhoneType $contactNumber = null, $siteID = null, $siteName = null)
    {
        $this
            ->setAddress($address)
            ->setContactNumber($contactNumber)
            ->setSiteID($siteID)
            ->setSiteName($siteName);
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
     * @return \Sabre\UpdateReservation\StructType\CollectionInfo
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get ContactNumber value
     * @return \Sabre\UpdateReservation\StructType\PhoneType|null
     */
    public function getContactNumber()
    {
        return $this->ContactNumber;
    }
    /**
     * Set ContactNumber value
     * @param \Sabre\UpdateReservation\StructType\PhoneType $contactNumber
     * @return \Sabre\UpdateReservation\StructType\CollectionInfo
     */
    public function setContactNumber(\Sabre\UpdateReservation\StructType\PhoneType $contactNumber = null)
    {
        $this->ContactNumber = $contactNumber;
        return $this;
    }
    /**
     * Get siteID value
     * @return string|null
     */
    public function getSiteID()
    {
        return $this->siteID;
    }
    /**
     * Set siteID value
     * @param string $siteID
     * @return \Sabre\UpdateReservation\StructType\CollectionInfo
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: string
        if (!is_null($siteID) && !is_string($siteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteID)), __LINE__);
        }
        $this->siteID = $siteID;
        return $this;
    }
    /**
     * Get siteName value
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->siteName;
    }
    /**
     * Set siteName value
     * @param string $siteName
     * @return \Sabre\UpdateReservation\StructType\CollectionInfo
     */
    public function setSiteName($siteName = null)
    {
        // validation for constraint: string
        if (!is_null($siteName) && !is_string($siteName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteName)), __LINE__);
        }
        $this->siteName = $siteName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CollectionInfo
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
