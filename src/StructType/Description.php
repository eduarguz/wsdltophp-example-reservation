<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Description StructType
 * @subpackage Structs
 */
class Description extends AbstractStructBase
{
    /**
     * The lang
     * Meta informations extracted from the WSDL
     * - ref: xml:lang
     * - use: required
     * @var string
     */
    public $lang;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $_;
    /**
     * Constructor method for Description
     * @uses Description::setLang()
     * @uses Description::set_()
     * @param string $lang
     * @param string $_
     */
    public function __construct($lang = null, $_ = null)
    {
        $this
            ->setLang($lang)
            ->set_($_);
    }
    /**
     * Get lang value
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Sabre\UpdateReservation\StructType\Description
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
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
     * @return \Sabre\UpdateReservation\StructType\Description
     */
    public function set_($_ = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($_) && strlen($_) < 1) || (is_array($_) && count($_) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Description
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
