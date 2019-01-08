<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contact information
 * @subpackage Structs
 */
class ContactType extends AbstractStructBase
{
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Phone;
    /**
     * The Mobile
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Mobile;
    /**
     * The Fax
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Fax;
    /**
     * Constructor method for ContactType
     * @uses ContactType::setPhone()
     * @uses ContactType::setMobile()
     * @uses ContactType::setFax()
     * @param string $phone
     * @param string $mobile
     * @param string $fax
     */
    public function __construct($phone = null, $mobile = null, $fax = null)
    {
        $this
            ->setPhone($phone)
            ->setMobile($mobile)
            ->setFax($fax);
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
     * @return \Sabre\UpdateReservation\StructType\ContactType
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
     * Get Mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }
    /**
     * Set Mobile value
     * @param string $mobile
     * @return \Sabre\UpdateReservation\StructType\ContactType
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->Mobile = $mobile;
        return $this;
    }
    /**
     * Get Fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->Fax;
    }
    /**
     * Set Fax value
     * @param string $fax
     * @return \Sabre\UpdateReservation\StructType\ContactType
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fax)), __LINE__);
        }
        $this->Fax = $fax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ContactType
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
