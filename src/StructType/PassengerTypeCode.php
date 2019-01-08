<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerTypeCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the type of passenger to whom the record applies like "ADT".
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
class PassengerTypeCode extends AbstractStructBase
{
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $code;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The codeContext
     * @var string
     */
    public $codeContext;
    /**
     * Constructor method for PassengerTypeCode
     * @uses PassengerTypeCode::setCode()
     * @uses PassengerTypeCode::set_()
     * @uses PassengerTypeCode::setCodeContext()
     * @param string $code
     * @param string $_
     * @param string $codeContext
     */
    public function __construct($code = null, $_ = null, $codeContext = null)
    {
        $this
            ->setCode($code)
            ->set_($_)
            ->setCodeContext($codeContext);
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeCode
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeCode
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get codeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }
    /**
     * Set codeContext value
     * @param string $codeContext
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeCode
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->codeContext = $codeContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeCode
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
