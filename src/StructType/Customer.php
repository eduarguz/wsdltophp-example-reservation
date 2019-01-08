<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer StructType
 * Meta informations extracted from the WSDL
 * - documentation: Customer name.
 * @subpackage Structs
 */
class Customer extends AbstractStructBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - documentation: Customer - Address.
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - documentation: Customer - Phone.
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The DriverLicense
     * Meta informations extracted from the WSDL
     * - documentation: Driver license number.
     * - minOccurs: 0
     * @var string
     */
    public $DriverLicense;
    /**
     * Constructor method for Customer
     * @uses Customer::setAddress()
     * @uses Customer::setPhone()
     * @uses Customer::setDriverLicense()
     * @param string $address
     * @param string $phone
     * @param string $driverLicense
     */
    public function __construct($address = null, $phone = null, $driverLicense = null)
    {
        $this
            ->setAddress($address)
            ->setPhone($phone)
            ->setDriverLicense($driverLicense);
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Sabre\UpdateReservation\StructType\Customer
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Sabre\UpdateReservation\StructType\Customer
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get DriverLicense value
     * @return string|null
     */
    public function getDriverLicense()
    {
        return $this->DriverLicense;
    }
    /**
     * Set DriverLicense value
     * @param string $driverLicense
     * @return \Sabre\UpdateReservation\StructType\Customer
     */
    public function setDriverLicense($driverLicense = null)
    {
        // validation for constraint: string
        if (!is_null($driverLicense) && !is_string($driverLicense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driverLicense)), __LINE__);
        }
        $this->DriverLicense = $driverLicense;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Customer
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
