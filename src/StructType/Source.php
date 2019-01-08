<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Source StructType
 * @subpackage Structs
 */
class Source extends LodgingPOSSource
{
    /**
     * The RequestorID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RequestorID
     */
    public $RequestorID;
    /**
     * The AgencyAddress
     * Meta informations extracted from the WSDL
     * - documentation: Agency Address is mandatory for GDS Booking
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingAddressType
     */
    public $AgencyAddress;
    /**
     * The AgencyContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ContactType
     */
    public $AgencyContact;
    /**
     * Constructor method for Source
     * @uses Source::setRequestorID()
     * @uses Source::setAgencyAddress()
     * @uses Source::setAgencyContact()
     * @param \Sabre\UpdateReservation\StructType\RequestorID $requestorID
     * @param \Sabre\UpdateReservation\StructType\LodgingAddressType $agencyAddress
     * @param \Sabre\UpdateReservation\StructType\ContactType $agencyContact
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RequestorID $requestorID = null, \Sabre\UpdateReservation\StructType\LodgingAddressType $agencyAddress = null, \Sabre\UpdateReservation\StructType\ContactType $agencyContact = null)
    {
        $this
            ->setRequestorID($requestorID)
            ->setAgencyAddress($agencyAddress)
            ->setAgencyContact($agencyContact);
    }
    /**
     * Get RequestorID value
     * @return \Sabre\UpdateReservation\StructType\RequestorID|null
     */
    public function getRequestorID()
    {
        return $this->RequestorID;
    }
    /**
     * Set RequestorID value
     * @param \Sabre\UpdateReservation\StructType\RequestorID $requestorID
     * @return \Sabre\UpdateReservation\StructType\Source
     */
    public function setRequestorID(\Sabre\UpdateReservation\StructType\RequestorID $requestorID = null)
    {
        $this->RequestorID = $requestorID;
        return $this;
    }
    /**
     * Get AgencyAddress value
     * @return \Sabre\UpdateReservation\StructType\LodgingAddressType|null
     */
    public function getAgencyAddress()
    {
        return $this->AgencyAddress;
    }
    /**
     * Set AgencyAddress value
     * @param \Sabre\UpdateReservation\StructType\LodgingAddressType $agencyAddress
     * @return \Sabre\UpdateReservation\StructType\Source
     */
    public function setAgencyAddress(\Sabre\UpdateReservation\StructType\LodgingAddressType $agencyAddress = null)
    {
        $this->AgencyAddress = $agencyAddress;
        return $this;
    }
    /**
     * Get AgencyContact value
     * @return \Sabre\UpdateReservation\StructType\ContactType|null
     */
    public function getAgencyContact()
    {
        return $this->AgencyContact;
    }
    /**
     * Set AgencyContact value
     * @param \Sabre\UpdateReservation\StructType\ContactType $agencyContact
     * @return \Sabre\UpdateReservation\StructType\Source
     */
    public function setAgencyContact(\Sabre\UpdateReservation\StructType\ContactType $agencyContact = null)
    {
        $this->AgencyContact = $agencyContact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Source
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
