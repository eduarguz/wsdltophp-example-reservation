<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneTextUpdate StructType
 * @subpackage Structs
 */
class PhoneTextUpdate extends AbstractStructBase
{
    /**
     * The PhoneText
     * @var string
     */
    public $PhoneText;
    /**
     * Constructor method for PhoneTextUpdate
     * @uses PhoneTextUpdate::setPhoneText()
     * @param string $phoneText
     */
    public function __construct($phoneText = null)
    {
        $this
            ->setPhoneText($phoneText);
    }
    /**
     * Get PhoneText value
     * @return string|null
     */
    public function getPhoneText()
    {
        return $this->PhoneText;
    }
    /**
     * Set PhoneText value
     * @param string $phoneText
     * @return \Sabre\UpdateReservation\StructType\PhoneTextUpdate
     */
    public function setPhoneText($phoneText = null)
    {
        // validation for constraint: string
        if (!is_null($phoneText) && !is_string($phoneText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneText)), __LINE__);
        }
        $this->PhoneText = $phoneText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PhoneTextUpdate
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
