<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialService.PNRB StructType
 * @subpackage Structs
 */
class SpecialService_PNRB extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The CRSCode
     * @var string
     */
    public $CRSCode;
    /**
     * Constructor method for SpecialService.PNRB
     * @uses SpecialService_PNRB::setCode()
     * @uses SpecialService_PNRB::setText()
     * @uses SpecialService_PNRB::setCRSCode()
     * @param string $code
     * @param string $text
     * @param string $cRSCode
     */
    public function __construct($code = null, $text = null, $cRSCode = null)
    {
        $this
            ->setCode($code)
            ->setText($text)
            ->setCRSCode($cRSCode);
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
     * @return \Sabre\UpdateReservation\StructType\SpecialService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\SpecialService_PNRB
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
     * Get CRSCode value
     * @return string|null
     */
    public function getCRSCode()
    {
        return $this->CRSCode;
    }
    /**
     * Set CRSCode value
     * @param string $cRSCode
     * @return \Sabre\UpdateReservation\StructType\SpecialService_PNRB
     */
    public function setCRSCode($cRSCode = null)
    {
        // validation for constraint: string
        if (!is_null($cRSCode) && !is_string($cRSCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cRSCode)), __LINE__);
        }
        $this->CRSCode = $cRSCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SpecialService_PNRB
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
