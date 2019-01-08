<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckInCheckOutPolicy StructType
 * @subpackage Structs
 */
class CheckInCheckOutPolicy extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The CheckIn
     * Meta informations extracted from the WSDL
     * - documentation: The checkin time policy used to inform guest should check in after this check-in time.
     * @var string
     */
    public $CheckIn;
    /**
     * The CheckOut
     * Meta informations extracted from the WSDL
     * - documentation: The checkout time policy used to inform that guest needs to check-out by this time
     * @var string
     */
    public $CheckOut;
    /**
     * Constructor method for CheckInCheckOutPolicy
     * @uses CheckInCheckOutPolicy::set_()
     * @uses CheckInCheckOutPolicy::setCheckIn()
     * @uses CheckInCheckOutPolicy::setCheckOut()
     * @param string $_
     * @param string $checkIn
     * @param string $checkOut
     */
    public function __construct($_ = null, $checkIn = null, $checkOut = null)
    {
        $this
            ->set_($_)
            ->setCheckIn($checkIn)
            ->setCheckOut($checkOut);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get CheckIn value
     * @return string|null
     */
    public function getCheckIn()
    {
        return $this->CheckIn;
    }
    /**
     * Set CheckIn value
     * @param string $checkIn
     * @return \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy
     */
    public function setCheckIn($checkIn = null)
    {
        // validation for constraint: string
        if (!is_null($checkIn) && !is_string($checkIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkIn)), __LINE__);
        }
        $this->CheckIn = $checkIn;
        return $this;
    }
    /**
     * Get CheckOut value
     * @return string|null
     */
    public function getCheckOut()
    {
        return $this->CheckOut;
    }
    /**
     * Set CheckOut value
     * @param string $checkOut
     * @return \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy
     */
    public function setCheckOut($checkOut = null)
    {
        // validation for constraint: string
        if (!is_null($checkOut) && !is_string($checkOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOut)), __LINE__);
        }
        $this->CheckOut = $checkOut;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CheckInCheckOutPolicy
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
