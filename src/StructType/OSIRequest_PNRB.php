<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OSIRequest.PNRB StructType
 * @subpackage Structs
 */
class OSIRequest_PNRB extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Text;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirlineCode;
    /**
     * Constructor method for OSIRequest.PNRB
     * @uses OSIRequest_PNRB::setText()
     * @uses OSIRequest_PNRB::setAirlineCode()
     * @param string $text
     * @param string $airlineCode
     */
    public function __construct($text = null, $airlineCode = null)
    {
        $this
            ->setText($text)
            ->setAirlineCode($airlineCode);
    }
    /**
     * Get Text value
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\OSIRequest_PNRB
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
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\OSIRequest_PNRB
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OSIRequest_PNRB
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
