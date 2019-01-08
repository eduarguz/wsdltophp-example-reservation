<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitToRemarkType StructType
 * @subpackage Structs
 */
class SplitToRemarkType extends BaseRemarkType
{
    /**
     * The OriginalNumberOfPax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalNumberOfPax;
    /**
     * The CurrentNumberOfPax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CurrentNumberOfPax;
    /**
     * The CurrentPassengerNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 14
     * - minLength: 1
     * @var string
     */
    public $CurrentPassengerNames;
    /**
     * Constructor method for SplitToRemarkType
     * @uses SplitToRemarkType::setOriginalNumberOfPax()
     * @uses SplitToRemarkType::setCurrentNumberOfPax()
     * @uses SplitToRemarkType::setCurrentPassengerNames()
     * @param string $originalNumberOfPax
     * @param string $currentNumberOfPax
     * @param string $currentPassengerNames
     */
    public function __construct($originalNumberOfPax = null, $currentNumberOfPax = null, $currentPassengerNames = null)
    {
        $this
            ->setOriginalNumberOfPax($originalNumberOfPax)
            ->setCurrentNumberOfPax($currentNumberOfPax)
            ->setCurrentPassengerNames($currentPassengerNames);
    }
    /**
     * Get OriginalNumberOfPax value
     * @return string|null
     */
    public function getOriginalNumberOfPax()
    {
        return $this->OriginalNumberOfPax;
    }
    /**
     * Set OriginalNumberOfPax value
     * @param string $originalNumberOfPax
     * @return \Sabre\UpdateReservation\StructType\SplitToRemarkType
     */
    public function setOriginalNumberOfPax($originalNumberOfPax = null)
    {
        // validation for constraint: string
        if (!is_null($originalNumberOfPax) && !is_string($originalNumberOfPax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalNumberOfPax)), __LINE__);
        }
        $this->OriginalNumberOfPax = $originalNumberOfPax;
        return $this;
    }
    /**
     * Get CurrentNumberOfPax value
     * @return string|null
     */
    public function getCurrentNumberOfPax()
    {
        return $this->CurrentNumberOfPax;
    }
    /**
     * Set CurrentNumberOfPax value
     * @param string $currentNumberOfPax
     * @return \Sabre\UpdateReservation\StructType\SplitToRemarkType
     */
    public function setCurrentNumberOfPax($currentNumberOfPax = null)
    {
        // validation for constraint: string
        if (!is_null($currentNumberOfPax) && !is_string($currentNumberOfPax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentNumberOfPax)), __LINE__);
        }
        $this->CurrentNumberOfPax = $currentNumberOfPax;
        return $this;
    }
    /**
     * Get CurrentPassengerNames value
     * @return string|null
     */
    public function getCurrentPassengerNames()
    {
        return $this->CurrentPassengerNames;
    }
    /**
     * Set CurrentPassengerNames value
     * @param string $currentPassengerNames
     * @return \Sabre\UpdateReservation\StructType\SplitToRemarkType
     */
    public function setCurrentPassengerNames($currentPassengerNames = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currentPassengerNames) && strlen($currentPassengerNames) > 14) || (is_array($currentPassengerNames) && count($currentPassengerNames) > 14)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 14 element(s) or a scalar of 14 character(s) at most, "%d" length given', is_scalar($currentPassengerNames) ? strlen($currentPassengerNames) : count($currentPassengerNames)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($currentPassengerNames) && strlen($currentPassengerNames) < 1) || (is_array($currentPassengerNames) && count($currentPassengerNames) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currentPassengerNames) && !is_string($currentPassengerNames)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currentPassengerNames)), __LINE__);
        }
        $this->CurrentPassengerNames = $currentPassengerNames;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SplitToRemarkType
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
