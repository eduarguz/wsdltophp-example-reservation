<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrainDetailsType StructType
 * @subpackage Structs
 */
class TrainDetailsType extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShortName;
    /**
     * The LongName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LongName;
    /**
     * Constructor method for TrainDetailsType
     * @uses TrainDetailsType::setNumber()
     * @uses TrainDetailsType::setCode()
     * @uses TrainDetailsType::setShortName()
     * @uses TrainDetailsType::setLongName()
     * @param string $number
     * @param string $code
     * @param string $shortName
     * @param string $longName
     */
    public function __construct($number = null, $code = null, $shortName = null, $longName = null)
    {
        $this
            ->setNumber($number)
            ->setCode($code)
            ->setShortName($shortName)
            ->setLongName($longName);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\TrainDetailsType
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\TrainDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\TrainDetailsType
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
     * Get LongName value
     * @return string|null
     */
    public function getLongName()
    {
        return $this->LongName;
    }
    /**
     * Set LongName value
     * @param string $longName
     * @return \Sabre\UpdateReservation\StructType\TrainDetailsType
     */
    public function setLongName($longName = null)
    {
        // validation for constraint: string
        if (!is_null($longName) && !is_string($longName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longName)), __LINE__);
        }
        $this->LongName = $longName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TrainDetailsType
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
