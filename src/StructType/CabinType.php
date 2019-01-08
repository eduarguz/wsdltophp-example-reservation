<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Cabin data form ATPCO RBD Answer Table (A02 record).
 * @subpackage Structs
 */
class CabinType extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - documentation: Reservation Booking Designator code.
     * @var string
     */
    public $code;
    /**
     * The sabreCode
     * Meta informations extracted from the WSDL
     * - documentation: Reservation Booking Designator Sabre code.
     * @var string
     */
    public $sabreCode;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - documentation: Long name of the Reservation booking designator. Example: Premium Economy.
     * @var string
     */
    public $name;
    /**
     * The shortName
     * Meta informations extracted from the WSDL
     * - documentation: Short name of the Reservation booking designator. Example: PR ECON.
     * @var string
     */
    public $shortName;
    /**
     * The lang
     * Meta informations extracted from the WSDL
     * - documentation: Language of the names.
     * @var string
     */
    public $lang;
    /**
     * Constructor method for CabinType
     * @uses CabinType::setCode()
     * @uses CabinType::setSabreCode()
     * @uses CabinType::setName()
     * @uses CabinType::setShortName()
     * @uses CabinType::setLang()
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
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\CabinType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get sabreCode value
     * @return string|null
     */
    public function getSabreCode()
    {
        return $this->sabreCode;
    }
    /**
     * Set sabreCode value
     * @param string $sabreCode
     * @return \Sabre\UpdateReservation\StructType\CabinType
     */
    public function setSabreCode($sabreCode = null)
    {
        // validation for constraint: string
        if (!is_null($sabreCode) && !is_string($sabreCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sabreCode)), __LINE__);
        }
        $this->sabreCode = $sabreCode;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\CabinType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get shortName value
     * @return string|null
     */
    public function getShortName()
    {
        return $this->shortName;
    }
    /**
     * Set shortName value
     * @param string $shortName
     * @return \Sabre\UpdateReservation\StructType\CabinType
     */
    public function setShortName($shortName = null)
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortName)), __LINE__);
        }
        $this->shortName = $shortName;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Sabre\UpdateReservation\StructType\CabinType
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CabinType
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
