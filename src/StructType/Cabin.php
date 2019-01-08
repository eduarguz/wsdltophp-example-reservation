<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cabin StructType
 * @subpackage Structs
 */
class Cabin extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Reservation Booking Designator code
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The SabreCode
     * Meta informations extracted from the WSDL
     * - documentation: Reservation Booking Designator sabre code
     * - use: optional
     * @var string
     */
    public $SabreCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Long name of the Reservation booking designator. Example: Premium Economy
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - documentation: Short name of the Reservation booking designator. Example: PR ECON
     * - use: optional
     * @var string
     */
    public $ShortName;
    /**
     * The Lang
     * Meta informations extracted from the WSDL
     * - documentation: Language of the names
     * - use: optional
     * @var string
     */
    public $Lang;
    /**
     * Constructor method for Cabin
     * @uses Cabin::setCode()
     * @uses Cabin::setSabreCode()
     * @uses Cabin::setName()
     * @uses Cabin::setShortName()
     * @uses Cabin::setLang()
     * @param string $code
     * @param string $sabreCode
     * @param string $name
     * @param string $shortName
     * @param string $lang
     */
    public function __construct($code = null, $sabreCode = null, $name = null, $shortName = null, $lang = null)
    {
        $this
            ->setCode($code)
            ->setSabreCode($sabreCode)
            ->setName($name)
            ->setShortName($shortName)
            ->setLang($lang);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Cabin
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get SabreCode value
     * @return string|null
     */
    public function getSabreCode()
    {
        return $this->SabreCode;
    }
    /**
     * Set SabreCode value
     * @param string $sabreCode
     * @return \Sabre\UpdateReservation\StructType\Cabin
     */
    public function setSabreCode($sabreCode = null)
    {
        // validation for constraint: string
        if (!is_null($sabreCode) && !is_string($sabreCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sabreCode)), __LINE__);
        }
        $this->SabreCode = $sabreCode;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Cabin
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ShortName value
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }
    /**
     * Set ShortName value
     * @param string $shortName
     * @return \Sabre\UpdateReservation\StructType\Cabin
     */
    public function setShortName($shortName = null)
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortName)), __LINE__);
        }
        $this->ShortName = $shortName;
        return $this;
    }
    /**
     * Get Lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->Lang;
    }
    /**
     * Set Lang value
     * @param string $lang
     * @return \Sabre\UpdateReservation\StructType\Cabin
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->Lang = $lang;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Cabin
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
