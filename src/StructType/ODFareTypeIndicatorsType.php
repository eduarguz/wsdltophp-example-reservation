<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ODFareTypeIndicatorsType StructType
 * @subpackage Structs
 */
class ODFareTypeIndicatorsType extends AbstractStructBase
{
    /**
     * The regular
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $regular;
    /**
     * The sponsor
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $sponsor;
    /**
     * The default
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $default;
    /**
     * The sponsorDefault
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $sponsorDefault;
    /**
     * The hostDefault
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $hostDefault;
    /**
     * Constructor method for ODFareTypeIndicatorsType
     * @uses ODFareTypeIndicatorsType::setRegular()
     * @uses ODFareTypeIndicatorsType::setSponsor()
     * @uses ODFareTypeIndicatorsType::setDefault()
     * @uses ODFareTypeIndicatorsType::setSponsorDefault()
     * @uses ODFareTypeIndicatorsType::setHostDefault()
     * @param bool $regular
     * @param bool $sponsor
     * @param bool $default
     * @param bool $sponsorDefault
     * @param bool $hostDefault
     */
    public function __construct($regular = false, $sponsor = false, $default = false, $sponsorDefault = false, $hostDefault = false)
    {
        $this
            ->setRegular($regular)
            ->setSponsor($sponsor)
            ->setDefault($default)
            ->setSponsorDefault($sponsorDefault)
            ->setHostDefault($hostDefault);
    }
    /**
     * Get regular value
     * @return bool|null
     */
    public function getRegular()
    {
        return $this->regular;
    }
    /**
     * Set regular value
     * @param bool $regular
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
     */
    public function setRegular($regular = false)
    {
        // validation for constraint: boolean
        if (!is_null($regular) && !is_bool($regular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($regular)), __LINE__);
        }
        $this->regular = $regular;
        return $this;
    }
    /**
     * Get sponsor value
     * @return bool|null
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }
    /**
     * Set sponsor value
     * @param bool $sponsor
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
     */
    public function setSponsor($sponsor = false)
    {
        // validation for constraint: boolean
        if (!is_null($sponsor) && !is_bool($sponsor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sponsor)), __LINE__);
        }
        $this->sponsor = $sponsor;
        return $this;
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
     */
    public function setDefault($default = false)
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($default)), __LINE__);
        }
        $this->default = $default;
        return $this;
    }
    /**
     * Get sponsorDefault value
     * @return bool|null
     */
    public function getSponsorDefault()
    {
        return $this->sponsorDefault;
    }
    /**
     * Set sponsorDefault value
     * @param bool $sponsorDefault
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
     */
    public function setSponsorDefault($sponsorDefault = false)
    {
        // validation for constraint: boolean
        if (!is_null($sponsorDefault) && !is_bool($sponsorDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sponsorDefault)), __LINE__);
        }
        $this->sponsorDefault = $sponsorDefault;
        return $this;
    }
    /**
     * Get hostDefault value
     * @return bool|null
     */
    public function getHostDefault()
    {
        return $this->hostDefault;
    }
    /**
     * Set hostDefault value
     * @param bool $hostDefault
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
     */
    public function setHostDefault($hostDefault = false)
    {
        // validation for constraint: boolean
        if (!is_null($hostDefault) && !is_bool($hostDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hostDefault)), __LINE__);
        }
        $this->hostDefault = $hostDefault;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
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
