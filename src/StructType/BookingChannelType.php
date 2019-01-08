<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingChannelType StructType
 * @subpackage Structs
 */
class BookingChannelType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of booking channel (e.g. Global Distribution System (GDS), Alternative Distribution System (ADS), Sales and Catering System (SCS), Property Management System (PMS), Central Reservation System (CRS), Tour Operator System
     * (TOS), Internet and ALL). Refer to OTA Code List Booking Channel Type (BCT).
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the company that is associated with the booking channel.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public $CompanyName;
    /**
     * The Primary
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     * @var bool
     */
    public $Primary;
    /**
     * Constructor method for BookingChannelType
     * @uses BookingChannelType::setType()
     * @uses BookingChannelType::setCompanyName()
     * @uses BookingChannelType::setPrimary()
     * @param string $type
     * @param \Sabre\UpdateReservation\StructType\CompanyNameType $companyName
     * @param bool $primary
     */
    public function __construct($type = null, \Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null, $primary = null)
    {
        $this
            ->setType($type)
            ->setCompanyName($companyName)
            ->setPrimary($primary);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\BookingChannelType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return \Sabre\UpdateReservation\StructType\CompanyNameType|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Sabre\UpdateReservation\StructType\CompanyNameType $companyName
     * @return \Sabre\UpdateReservation\StructType\BookingChannelType
     */
    public function setCompanyName(\Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get Primary value
     * @return bool|null
     */
    public function getPrimary()
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param bool $primary
     * @return \Sabre\UpdateReservation\StructType\BookingChannelType
     */
    public function setPrimary($primary = null)
    {
        // validation for constraint: boolean
        if (!is_null($primary) && !is_bool($primary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primary)), __LINE__);
        }
        $this->Primary = $primary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BookingChannelType
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
