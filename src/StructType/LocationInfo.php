<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Hotel Location
 * @subpackage Structs
 */
class LocationInfo extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public $Address;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ContactType
     */
    public $Contact;
    /**
     * The Latitude
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Longitude;
    /**
     * Constructor method for LocationInfo
     * @uses LocationInfo::setAddress()
     * @uses LocationInfo::setContact()
     * @uses LocationInfo::setLatitude()
     * @uses LocationInfo::setLongitude()
     * @param \Sabre\UpdateReservation\StructType\LodgingAddressType $address
     * @param \Sabre\UpdateReservation\StructType\ContactType $contact
     * @param string $latitude
     * @param string $longitude
     */
    public function __construct(\Sabre\UpdateReservation\StructType\LodgingAddressType $address = null, \Sabre\UpdateReservation\StructType\ContactType $contact = null, $latitude = null, $longitude = null)
    {
        $this
            ->setAddress($address)
            ->setContact($contact)
            ->setLatitude($latitude)
            ->setLongitude($longitude);
    }
    /**
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Sabre\UpdateReservation\StructType\LodgingAddressType $address
     * @return \Sabre\UpdateReservation\StructType\LocationInfo
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\LodgingAddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Contact value
     * @return \Sabre\UpdateReservation\StructType\ContactType|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \Sabre\UpdateReservation\StructType\ContactType $contact
     * @return \Sabre\UpdateReservation\StructType\LocationInfo
     */
    public function setContact(\Sabre\UpdateReservation\StructType\ContactType $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Latitude value
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }
    /**
     * Set Latitude value
     * @param string $latitude
     * @return \Sabre\UpdateReservation\StructType\LocationInfo
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }
    /**
     * Get Longitude value
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }
    /**
     * Set Longitude value
     * @param string $longitude
     * @return \Sabre\UpdateReservation\StructType\LocationInfo
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LocationInfo
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
