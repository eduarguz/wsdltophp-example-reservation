<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingChannel.PNRB StructType
 * @subpackage Structs
 */
class BookingChannel_PNRB extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the company that is associated with the booking channel.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CompanyNameType
     */
    public $CompanyName;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of booking channel (e.g. Global Distribution System (GDS), Alternative Distribution System (ADS), Sales and Catering System (SCS), Property Management System (PMS), Central Reservation System (CRS), Tour Operator System
     * (TOS), Internet and ALL). Refer to OTA Code List Booking Channel Type (BCT). | Used for codes in the OTA code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     * - pattern: [0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}
     * @var string
     */
    public $Type;
    /**
     * The Primary
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     * @var bool
     */
    public $Primary;
    /**
     * Constructor method for BookingChannel.PNRB
     * @uses BookingChannel_PNRB::setCompanyName()
     * @uses BookingChannel_PNRB::setType()
     * @uses BookingChannel_PNRB::setPrimary()
     * @param \Sabre\UpdateReservation\StructType\CompanyNameType $companyName
     * @param string $type
     * @param bool $primary
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null, $type = null, $primary = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setType($type)
            ->setPrimary($primary);
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
     * @return \Sabre\UpdateReservation\StructType\BookingChannel_PNRB
     */
    public function setCompanyName(\Sabre\UpdateReservation\StructType\CompanyNameType $companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\BookingChannel_PNRB
     */
    public function setType($type = null)
    {
        // validation for constraint: pattern
        if (is_scalar($type) && !preg_match('/[0-9A-Z]{1,3}(\\.[A-Z]{3}(\\.X){0,1}){0,1}/', $type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}", "%s" given', var_export($type, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\BookingChannel_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\BookingChannel_PNRB
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
