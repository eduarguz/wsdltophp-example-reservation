<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CssRequestUpdate.PNRB StructType
 * @subpackage Structs
 */
class CssRequestUpdate_PNRB extends AbstractStructBase
{
    /**
     * The cssText
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $cssText;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * Constructor method for CssRequestUpdate.PNRB
     * @uses CssRequestUpdate_PNRB::setCssText()
     * @uses CssRequestUpdate_PNRB::setId()
     * @param string $cssText
     * @param string $id
     */
    public function __construct($cssText = null, $id = null)
    {
        $this
            ->setCssText($cssText)
            ->setId($id);
    }
    /**
     * Get cssText value
     * @return string
     */
    public function getCssText()
    {
        return $this->cssText;
    }
    /**
     * Set cssText value
     * @param string $cssText
     * @return \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB
     */
    public function setCssText($cssText = null)
    {
        // validation for constraint: string
        if (!is_null($cssText) && !is_string($cssText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cssText)), __LINE__);
        }
        $this->cssText = $cssText;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB
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
