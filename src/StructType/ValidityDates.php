<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidityDates StructType
 * @subpackage Structs
 */
class ValidityDates extends AbstractStructBase
{
    /**
     * The NotValidBefore
     * Meta informations extracted from the WSDL
     * - documentation: Validity dates.
     * - minOccurs: 0
     * @var string
     */
    public $NotValidBefore;
    /**
     * The NotValidAfter
     * Meta informations extracted from the WSDL
     * - documentation: Validity dates.
     * - minOccurs: 0
     * @var string
     */
    public $NotValidAfter;
    /**
     * Constructor method for ValidityDates
     * @uses ValidityDates::setNotValidBefore()
     * @uses ValidityDates::setNotValidAfter()
     * @param string $notValidBefore
     * @param string $notValidAfter
     */
    public function __construct($notValidBefore = null, $notValidAfter = null)
    {
        $this
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter);
    }
    /**
     * Get NotValidBefore value
     * @return string|null
     */
    public function getNotValidBefore()
    {
        return $this->NotValidBefore;
    }
    /**
     * Set NotValidBefore value
     * @param string $notValidBefore
     * @return \Sabre\UpdateReservation\StructType\ValidityDates
     */
    public function setNotValidBefore($notValidBefore = null)
    {
        // validation for constraint: string
        if (!is_null($notValidBefore) && !is_string($notValidBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notValidBefore)), __LINE__);
        }
        $this->NotValidBefore = $notValidBefore;
        return $this;
    }
    /**
     * Get NotValidAfter value
     * @return string|null
     */
    public function getNotValidAfter()
    {
        return $this->NotValidAfter;
    }
    /**
     * Set NotValidAfter value
     * @param string $notValidAfter
     * @return \Sabre\UpdateReservation\StructType\ValidityDates
     */
    public function setNotValidAfter($notValidAfter = null)
    {
        // validation for constraint: string
        if (!is_null($notValidAfter) && !is_string($notValidAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notValidAfter)), __LINE__);
        }
        $this->NotValidAfter = $notValidAfter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ValidityDates
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
