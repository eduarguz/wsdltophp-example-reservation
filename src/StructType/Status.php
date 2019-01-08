<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Status StructType
 * Meta informations extracted from the WSDL
 * - documentation: Result of holding a booking for a given airline; SUCCESS, FAILURE
 * @subpackage Structs
 */
class Status extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - documentation: Additional information of the holding result
     * - use: optional
     * @var string
     */
    public $message;
    /**
     * Constructor method for Status
     * @uses Status::set_()
     * @uses Status::setMessage()
     * @param string $_
     * @param string $message
     */
    public function __construct($_ = null, $message = null)
    {
        $this
            ->set_($_)
            ->setMessage($message);
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
     * @return \Sabre\UpdateReservation\StructType\Status
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
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Sabre\UpdateReservation\StructType\Status
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Status
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
