<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerDetails StructType
 * @subpackage Structs
 */
class PassengerDetails extends AbstractStructBase
{
    /**
     * The PassengerEmail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerEmailType
     */
    public $PassengerEmail;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerTypeType
     */
    public $PassengerType;
    /**
     * The PassengerProfile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerProfileType
     */
    public $PassengerProfile;
    /**
     * Constructor method for PassengerDetails
     * @uses PassengerDetails::setPassengerEmail()
     * @uses PassengerDetails::setPassengerType()
     * @uses PassengerDetails::setPassengerProfile()
     * @param \Sabre\UpdateReservation\StructType\PassengerEmailType $passengerEmail
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeType $passengerType
     * @param \Sabre\UpdateReservation\StructType\PassengerProfileType $passengerProfile
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PassengerEmailType $passengerEmail = null, \Sabre\UpdateReservation\StructType\PassengerTypeType $passengerType = null, \Sabre\UpdateReservation\StructType\PassengerProfileType $passengerProfile = null)
    {
        $this
            ->setPassengerEmail($passengerEmail)
            ->setPassengerType($passengerType)
            ->setPassengerProfile($passengerProfile);
    }
    /**
     * Get PassengerEmail value
     * @return \Sabre\UpdateReservation\StructType\PassengerEmailType|null
     */
    public function getPassengerEmail()
    {
        return $this->PassengerEmail;
    }
    /**
     * Set PassengerEmail value
     * @param \Sabre\UpdateReservation\StructType\PassengerEmailType $passengerEmail
     * @return \Sabre\UpdateReservation\StructType\PassengerDetails
     */
    public function setPassengerEmail(\Sabre\UpdateReservation\StructType\PassengerEmailType $passengerEmail = null)
    {
        $this->PassengerEmail = $passengerEmail;
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeType|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeType $passengerType
     * @return \Sabre\UpdateReservation\StructType\PassengerDetails
     */
    public function setPassengerType(\Sabre\UpdateReservation\StructType\PassengerTypeType $passengerType = null)
    {
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get PassengerProfile value
     * @return \Sabre\UpdateReservation\StructType\PassengerProfileType|null
     */
    public function getPassengerProfile()
    {
        return $this->PassengerProfile;
    }
    /**
     * Set PassengerProfile value
     * @param \Sabre\UpdateReservation\StructType\PassengerProfileType $passengerProfile
     * @return \Sabre\UpdateReservation\StructType\PassengerDetails
     */
    public function setPassengerProfile(\Sabre\UpdateReservation\StructType\PassengerProfileType $passengerProfile = null)
    {
        $this->PassengerProfile = $passengerProfile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerDetails
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
