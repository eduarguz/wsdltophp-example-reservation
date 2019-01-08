<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkTextUpdate StructType
 * @subpackage Structs
 */
class RemarkTextUpdate extends AbstractStructBase
{
    /**
     * The RemarkText
     * @var string
     */
    public $RemarkText;
    /**
     * The OriginalRemarkText
     * @var \Sabre\UpdateReservation\StructType\NativeLanguageValueType
     */
    public $OriginalRemarkText;
    /**
     * Constructor method for RemarkTextUpdate
     * @uses RemarkTextUpdate::setRemarkText()
     * @uses RemarkTextUpdate::setOriginalRemarkText()
     * @param string $remarkText
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText
     */
    public function __construct($remarkText = null, \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText = null)
    {
        $this
            ->setRemarkText($remarkText)
            ->setOriginalRemarkText($originalRemarkText);
    }
    /**
     * Get RemarkText value
     * @return string|null
     */
    public function getRemarkText()
    {
        return $this->RemarkText;
    }
    /**
     * Set RemarkText value
     * @param string $remarkText
     * @return \Sabre\UpdateReservation\StructType\RemarkTextUpdate
     */
    public function setRemarkText($remarkText = null)
    {
        // validation for constraint: string
        if (!is_null($remarkText) && !is_string($remarkText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarkText)), __LINE__);
        }
        $this->RemarkText = $remarkText;
        return $this;
    }
    /**
     * Get OriginalRemarkText value
     * @return \Sabre\UpdateReservation\StructType\NativeLanguageValueType|null
     */
    public function getOriginalRemarkText()
    {
        return $this->OriginalRemarkText;
    }
    /**
     * Set OriginalRemarkText value
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText
     * @return \Sabre\UpdateReservation\StructType\RemarkTextUpdate
     */
    public function setOriginalRemarkText(\Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalRemarkText = null)
    {
        $this->OriginalRemarkText = $originalRemarkText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RemarkTextUpdate
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
