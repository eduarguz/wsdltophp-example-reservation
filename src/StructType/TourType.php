<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TourType StructType
 * @subpackage Structs
 */
class TourType extends AbstractStructBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The MessageStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MessageStatus;
    /**
     * The TravelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelType;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CompanyType
     */
    public $Vendor;
    /**
     * The StartDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public $StartDetails;
    /**
     * The EndDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public $EndDetails;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Price
     */
    public $Price;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerType
     */
    public $Customer;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Passengers
     */
    public $Passengers;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Services
     */
    public $Services;
    /**
     * Constructor method for TourType
     * @uses TourType::setStatusCode()
     * @uses TourType::setMessageStatus()
     * @uses TourType::setTravelType()
     * @uses TourType::setVendor()
     * @uses TourType::setStartDetails()
     * @uses TourType::setEndDetails()
     * @uses TourType::setPrice()
     * @uses TourType::setCustomer()
     * @uses TourType::setPassengers()
     * @uses TourType::setServices()
     * @param string $statusCode
     * @param string $messageStatus
     * @param string $travelType
     * @param \Sabre\UpdateReservation\StructType\CompanyType $vendor
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails
     * @param \Sabre\UpdateReservation\StructType\Price $price
     * @param \Sabre\UpdateReservation\StructType\PassengerType $customer
     * @param \Sabre\UpdateReservation\StructType\Passengers $passengers
     * @param \Sabre\UpdateReservation\StructType\Services $services
     */
    public function __construct($statusCode = null, $messageStatus = null, $travelType = null, \Sabre\UpdateReservation\StructType\CompanyType $vendor = null, \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails = null, \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails = null, \Sabre\UpdateReservation\StructType\Price $price = null, \Sabre\UpdateReservation\StructType\PassengerType $customer = null, \Sabre\UpdateReservation\StructType\Passengers $passengers = null, \Sabre\UpdateReservation\StructType\Services $services = null)
    {
        $this
            ->setStatusCode($statusCode)
            ->setMessageStatus($messageStatus)
            ->setTravelType($travelType)
            ->setVendor($vendor)
            ->setStartDetails($startDetails)
            ->setEndDetails($endDetails)
            ->setPrice($price)
            ->setCustomer($customer)
            ->setPassengers($passengers)
            ->setServices($services);
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get MessageStatus value
     * @return string|null
     */
    public function getMessageStatus()
    {
        return $this->MessageStatus;
    }
    /**
     * Set MessageStatus value
     * @param string $messageStatus
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setMessageStatus($messageStatus = null)
    {
        // validation for constraint: string
        if (!is_null($messageStatus) && !is_string($messageStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageStatus)), __LINE__);
        }
        $this->MessageStatus = $messageStatus;
        return $this;
    }
    /**
     * Get TravelType value
     * @return string|null
     */
    public function getTravelType()
    {
        return $this->TravelType;
    }
    /**
     * Set TravelType value
     * @param string $travelType
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setTravelType($travelType = null)
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelType)), __LINE__);
        }
        $this->TravelType = $travelType;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\CompanyType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\CompanyType $vendor
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\CompanyType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get StartDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType|null
     */
    public function getStartDetails()
    {
        return $this->StartDetails;
    }
    /**
     * Set StartDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setStartDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails = null)
    {
        $this->StartDetails = $startDetails;
        return $this;
    }
    /**
     * Get EndDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType|null
     */
    public function getEndDetails()
    {
        return $this->EndDetails;
    }
    /**
     * Set EndDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setEndDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails = null)
    {
        $this->EndDetails = $endDetails;
        return $this;
    }
    /**
     * Get Price value
     * @return \Sabre\UpdateReservation\StructType\Price|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \Sabre\UpdateReservation\StructType\Price $price
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setPrice(\Sabre\UpdateReservation\StructType\Price $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Sabre\UpdateReservation\StructType\PassengerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Sabre\UpdateReservation\StructType\PassengerType $customer
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setCustomer(\Sabre\UpdateReservation\StructType\PassengerType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Sabre\UpdateReservation\StructType\Passengers|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Sabre\UpdateReservation\StructType\Passengers $passengers
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setPassengers(\Sabre\UpdateReservation\StructType\Passengers $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Get Services value
     * @return \Sabre\UpdateReservation\StructType\Services|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Sabre\UpdateReservation\StructType\Services $services
     * @return \Sabre\UpdateReservation\StructType\TourType
     */
    public function setServices(\Sabre\UpdateReservation\StructType\Services $services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TourType
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
