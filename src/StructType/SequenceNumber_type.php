<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sequenceNumber.type StructType
 * @subpackage Structs
 */
class SequenceNumber_type extends AbstractStructBase
{
    /**
     * The _
     * @var int
     */
    public $_;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - default: Continue
     * @var string
     */
    public $status;
    /**
     * Constructor method for sequenceNumber.type
     * @uses SequenceNumber_type::set_()
     * @uses SequenceNumber_type::setStatus()
     * @param int $_
     * @param string $status
     */
    public function __construct($_ = null, $status = 'Continue')
    {
        $this
            ->set_($_)
            ->setStatus($status);
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \Sabre\UpdateReservation\StructType\SequenceNumber_type
     */
    public function set_($_ = null)
    {
        // validation for constraint: int
        if (!is_null($_) && !is_numeric($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \Sabre\UpdateReservation\EnumType\Status_type::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\Status_type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Sabre\UpdateReservation\StructType\SequenceNumber_type
     */
    public function setStatus($status = 'Continue')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\Status_type::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Sabre\UpdateReservation\EnumType\Status_type::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SequenceNumber_type
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
