<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteID StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to store the quote/offer id
 * @subpackage Structs
 */
class QuoteID extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - documentation: The session identifier to which the quote is assigned to. It won't be persisted in the PNR
     * @var string
     */
    public $sessionId;
    /**
     * Constructor method for QuoteID
     * @uses QuoteID::set_()
     * @uses QuoteID::setSessionId()
     * @param string $_
     * @param string $sessionId
     */
    public function __construct($_ = null, $sessionId = null)
    {
        $this
            ->set_($_)
            ->setSessionId($sessionId);
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
     * @return \Sabre\UpdateReservation\StructType\QuoteID
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
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \Sabre\UpdateReservation\StructType\QuoteID
     */
    public function setSessionId($sessionId = null)
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\QuoteID
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
