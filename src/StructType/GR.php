<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GR StructType
 * @subpackage Structs
 */
class GR extends AbstractStructBase
{
    /**
     * The GGR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GGR
     */
    public $GGR;
    /**
     * The Information
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Information;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * Constructor method for GR
     * @uses GR::setGGR()
     * @uses GR::setInformation()
     * @uses GR::setCustom()
     * @param \Sabre\UpdateReservation\StructType\GGR $gGR
     * @param string $information
     * @param string $custom
     */
    public function __construct(\Sabre\UpdateReservation\StructType\GGR $gGR = null, $information = null, $custom = null)
    {
        $this
            ->setGGR($gGR)
            ->setInformation($information)
            ->setCustom($custom);
    }
    /**
     * Get GGR value
     * @return \Sabre\UpdateReservation\StructType\GGR|null
     */
    public function getGGR()
    {
        return $this->GGR;
    }
    /**
     * Set GGR value
     * @param \Sabre\UpdateReservation\StructType\GGR $gGR
     * @return \Sabre\UpdateReservation\StructType\GR
     */
    public function setGGR(\Sabre\UpdateReservation\StructType\GGR $gGR = null)
    {
        $this->GGR = $gGR;
        return $this;
    }
    /**
     * Get Information value
     * @return string|null
     */
    public function getInformation()
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @param string $information
     * @return \Sabre\UpdateReservation\StructType\GR
     */
    public function setInformation($information = null)
    {
        // validation for constraint: string
        if (!is_null($information) && !is_string($information)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($information)), __LINE__);
        }
        $this->Information = $information;
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
     * @return \Sabre\UpdateReservation\StructType\GR
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
     * @return \Sabre\UpdateReservation\StructType\GR
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
