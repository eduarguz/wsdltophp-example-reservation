<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedGuestInformation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Additional information includes contact
 * @subpackage Structs
 */
class ExtendedGuestInformation extends BasicGuestInformation
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ContactType
     */
    public $Contact;
    /**
     * Constructor method for ExtendedGuestInformation
     * @uses ExtendedGuestInformation::setContact()
     * @param \Sabre\UpdateReservation\StructType\ContactType $contact
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ContactType $contact = null)
    {
        $this
            ->setContact($contact);
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
     * @return \Sabre\UpdateReservation\StructType\ExtendedGuestInformation
     */
    public function setContact(\Sabre\UpdateReservation\StructType\ContactType $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ExtendedGuestInformation
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
