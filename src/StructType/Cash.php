<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cash StructType
 * Meta informations extracted from the WSDL
 * - type: Cash
 * @subpackage Structs
 */
class Cash extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The BNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BNumber;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * Constructor method for Cash
     * @uses Cash::setText()
     * @uses Cash::setBNumber()
     * @uses Cash::setCustom()
     * @param string $text
     * @param string $bNumber
     * @param string $custom
     */
    public function __construct($text = null, $bNumber = null, $custom = null)
    {
        $this
            ->setText($text)
            ->setBNumber($bNumber)
            ->setCustom($custom);
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\Cash
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get BNumber value
     * @return string|null
     */
    public function getBNumber()
    {
        return $this->BNumber;
    }
    /**
     * Set BNumber value
     * @param string $bNumber
     * @return \Sabre\UpdateReservation\StructType\Cash
     */
    public function setBNumber($bNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bNumber) && !is_string($bNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bNumber)), __LINE__);
        }
        $this->BNumber = $bNumber;
        return $this;
    }
    /**
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \Sabre\UpdateReservation\StructType\Cash
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Cash
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
