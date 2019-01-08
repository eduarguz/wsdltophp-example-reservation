<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardNumber StructType
 * @subpackage Structs
 */
class CardNumber extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The tokenized
     * @var bool
     */
    public $tokenized;
    /**
     * The masked
     * @var bool
     */
    public $masked;
    /**
     * The token
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $token;
    /**
     * Constructor method for CardNumber
     * @uses CardNumber::set_()
     * @uses CardNumber::setTokenized()
     * @uses CardNumber::setMasked()
     * @uses CardNumber::setToken()
     * @param string $_
     * @param bool $tokenized
     * @param bool $masked
     * @param string $token
     */
    public function __construct($_ = null, $tokenized = null, $masked = null, $token = null)
    {
        $this
            ->set_($_)
            ->setTokenized($tokenized)
            ->setMasked($masked)
            ->setToken($token);
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
     * @return \Sabre\UpdateReservation\StructType\CardNumber
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
     * Get tokenized value
     * @return bool|null
     */
    public function getTokenized()
    {
        return $this->tokenized;
    }
    /**
     * Set tokenized value
     * @param bool $tokenized
     * @return \Sabre\UpdateReservation\StructType\CardNumber
     */
    public function setTokenized($tokenized = null)
    {
        // validation for constraint: boolean
        if (!is_null($tokenized) && !is_bool($tokenized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tokenized)), __LINE__);
        }
        $this->tokenized = $tokenized;
        return $this;
    }
    /**
     * Get masked value
     * @return bool|null
     */
    public function getMasked()
    {
        return $this->masked;
    }
    /**
     * Set masked value
     * @param bool $masked
     * @return \Sabre\UpdateReservation\StructType\CardNumber
     */
    public function setMasked($masked = null)
    {
        // validation for constraint: boolean
        if (!is_null($masked) && !is_bool($masked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($masked)), __LINE__);
        }
        $this->masked = $masked;
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken()
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Sabre\UpdateReservation\StructType\CardNumber
     */
    public function setToken($token = null)
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($token)), __LINE__);
        }
        $this->token = $token;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CardNumber
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
