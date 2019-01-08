<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fault StructType
 * Meta informations extracted from the WSDL
 * - documentation: Fault reporting structure
 * - final: extension
 * - type: tns:Fault
 * @subpackage Structs
 */
class Fault extends AbstractStructBase
{
    /**
     * The faultcode
     * @var string
     */
    public $faultcode;
    /**
     * The faultstring
     * @var string
     */
    public $faultstring;
    /**
     * The faultactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $faultactor;
    /**
     * The detail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Detail
     */
    public $detail;
    /**
     * Constructor method for Fault
     * @uses Fault::setFaultcode()
     * @uses Fault::setFaultstring()
     * @uses Fault::setFaultactor()
     * @uses Fault::setDetail()
     * @param string $faultcode
     * @param string $faultstring
     * @param string $faultactor
     * @param \Sabre\UpdateReservation\StructType\Detail $detail
     */
    public function __construct($faultcode = null, $faultstring = null, $faultactor = null, \Sabre\UpdateReservation\StructType\Detail $detail = null)
    {
        $this
            ->setFaultcode($faultcode)
            ->setFaultstring($faultstring)
            ->setFaultactor($faultactor)
            ->setDetail($detail);
    }
    /**
     * Get faultcode value
     * @return string|null
     */
    public function getFaultcode()
    {
        return $this->faultcode;
    }
    /**
     * Set faultcode value
     * @param string $faultcode
     * @return \Sabre\UpdateReservation\StructType\Fault
     */
    public function setFaultcode($faultcode = null)
    {
        // validation for constraint: string
        if (!is_null($faultcode) && !is_string($faultcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faultcode)), __LINE__);
        }
        $this->faultcode = $faultcode;
        return $this;
    }
    /**
     * Get faultstring value
     * @return string|null
     */
    public function getFaultstring()
    {
        return $this->faultstring;
    }
    /**
     * Set faultstring value
     * @param string $faultstring
     * @return \Sabre\UpdateReservation\StructType\Fault
     */
    public function setFaultstring($faultstring = null)
    {
        // validation for constraint: string
        if (!is_null($faultstring) && !is_string($faultstring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faultstring)), __LINE__);
        }
        $this->faultstring = $faultstring;
        return $this;
    }
    /**
     * Get faultactor value
     * @return string|null
     */
    public function getFaultactor()
    {
        return $this->faultactor;
    }
    /**
     * Set faultactor value
     * @param string $faultactor
     * @return \Sabre\UpdateReservation\StructType\Fault
     */
    public function setFaultactor($faultactor = null)
    {
        // validation for constraint: string
        if (!is_null($faultactor) && !is_string($faultactor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faultactor)), __LINE__);
        }
        $this->faultactor = $faultactor;
        return $this;
    }
    /**
     * Get detail value
     * @return \Sabre\UpdateReservation\StructType\Detail|null
     */
    public function getDetail()
    {
        return $this->detail;
    }
    /**
     * Set detail value
     * @param \Sabre\UpdateReservation\StructType\Detail $detail
     * @return \Sabre\UpdateReservation\StructType\Fault
     */
    public function setDetail(\Sabre\UpdateReservation\StructType\Detail $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Fault
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
