<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureLine StructType
 * @subpackage Structs
 */
class SignatureLine extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Signature line text.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The ExpirationDateTime
     * Meta informations extracted from the WSDL
     * - documentation: "ExpirationDateTime" is used to return the PQ record expiration date/time.
     * - use: optional
     * @var string
     */
    public $ExpirationDateTime;
    /**
     * Constructor method for SignatureLine
     * @uses SignatureLine::setText()
     * @uses SignatureLine::setExpirationDateTime()
     * @param string $text
     * @param string $expirationDateTime
     */
    public function __construct($text = null, $expirationDateTime = null)
    {
        $this
            ->setText($text)
            ->setExpirationDateTime($expirationDateTime);
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
     * @return \Sabre\UpdateReservation\StructType\SignatureLine
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
     * Get ExpirationDateTime value
     * @return string|null
     */
    public function getExpirationDateTime()
    {
        return $this->ExpirationDateTime;
    }
    /**
     * Set ExpirationDateTime value
     * @param string $expirationDateTime
     * @return \Sabre\UpdateReservation\StructType\SignatureLine
     */
    public function setExpirationDateTime($expirationDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDateTime) && !is_string($expirationDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDateTime)), __LINE__);
        }
        $this->ExpirationDateTime = $expirationDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SignatureLine
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
