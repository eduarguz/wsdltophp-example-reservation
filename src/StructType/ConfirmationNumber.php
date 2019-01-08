<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmationNumber StructType
 * @subpackage Structs
 */
class ConfirmationNumber extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: Source of this confirmation Number
     * @var string
     */
    public $Source;
    /**
     * The DirectConnect
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: set if hotel was sold via DirectConnect
     * @var bool
     */
    public $DirectConnect;
    /**
     * Constructor method for ConfirmationNumber
     * @uses ConfirmationNumber::set_()
     * @uses ConfirmationNumber::setSource()
     * @uses ConfirmationNumber::setDirectConnect()
     * @param string $_
     * @param string $source
     * @param bool $directConnect
     */
    public function __construct($_ = null, $source = null, $directConnect = false)
    {
        $this
            ->set_($_)
            ->setSource($source)
            ->setDirectConnect($directConnect);
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
     * @return \Sabre\UpdateReservation\StructType\ConfirmationNumber
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
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Sabre\UpdateReservation\StructType\ConfirmationNumber
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get DirectConnect value
     * @return bool|null
     */
    public function getDirectConnect()
    {
        return $this->DirectConnect;
    }
    /**
     * Set DirectConnect value
     * @param bool $directConnect
     * @return \Sabre\UpdateReservation\StructType\ConfirmationNumber
     */
    public function setDirectConnect($directConnect = false)
    {
        // validation for constraint: boolean
        if (!is_null($directConnect) && !is_bool($directConnect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($directConnect)), __LINE__);
        }
        $this->DirectConnect = $directConnect;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ConfirmationNumber
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
