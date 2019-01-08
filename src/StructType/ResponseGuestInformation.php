<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseGuestInformation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Added Optional Full Name to Guest Information because sometimes first name/last name is not returned
 * @subpackage Structs
 */
class ResponseGuestInformation extends ExtendedGuestInformation
{
    /**
     * The FullName
     * Meta informations extracted from the WSDL
     * - documentation: In response sometimes aggregator does not return first name / last name and only full name is returned
     * - use: optional
     * @var string
     */
    public $FullName;
    /**
     * Constructor method for ResponseGuestInformation
     * @uses ResponseGuestInformation::setFullName()
     * @param string $fullName
     */
    public function __construct($fullName = null)
    {
        $this
            ->setFullName($fullName);
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \Sabre\UpdateReservation\StructType\ResponseGuestInformation
     */
    public function setFullName($fullName = null)
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullName)), __LINE__);
        }
        $this->FullName = $fullName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ResponseGuestInformation
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
