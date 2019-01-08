<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenity StructType
 * @subpackage Structs
 */
class Amenity extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Uses HAC table for OTA mapped codes and description. ComplimentaryInd - true : Attribute is not displayed in response as Amenity has no additional charge and it is complimentary false : Amenity has additional charge and appropriately
     * indicated | Positive Integer to denote OTA Codes
     * - minInclusive: 1
     * @var int
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Used for Character Strings, length 0 to 255.
     * - maxLength: 255
     * - minLength: 0
     * @var string
     */
    public $Description;
    /**
     * The ComplimentaryInd
     * @var bool
     */
    public $ComplimentaryInd;
    /**
     * Constructor method for Amenity
     * @uses Amenity::setCode()
     * @uses Amenity::setDescription()
     * @uses Amenity::setComplimentaryInd()
     * @param int $code
     * @param string $description
     * @param bool $complimentaryInd
     */
    public function __construct($code = null, $description = null, $complimentaryInd = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setComplimentaryInd($complimentaryInd);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Sabre\UpdateReservation\StructType\Amenity
     */
    public function setCode($code = null)
    {
        // validation for constraint: minInclusive
        if ($code < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $code), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\Amenity
     */
    public function setDescription($description = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($description) && strlen($description) > 255) || (is_array($description) && count($description) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($description) ? strlen($description) : count($description)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($description) && strlen($description) < 0) || (is_array($description) && count($description) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ComplimentaryInd value
     * @return bool|null
     */
    public function getComplimentaryInd()
    {
        return $this->ComplimentaryInd;
    }
    /**
     * Set ComplimentaryInd value
     * @param bool $complimentaryInd
     * @return \Sabre\UpdateReservation\StructType\Amenity
     */
    public function setComplimentaryInd($complimentaryInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($complimentaryInd) && !is_bool($complimentaryInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($complimentaryInd)), __LINE__);
        }
        $this->ComplimentaryInd = $complimentaryInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Amenity
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
