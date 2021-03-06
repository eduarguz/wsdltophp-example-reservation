<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Code StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a company by the company code.
 * @subpackage Structs
 */
class Code extends AbstractStructBase
{
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
     * Constructor method for Code
     * @uses Code::set_()
     * @uses Code::setCodeContext()
     * @param string $_
     * @param string $codeContext
     */
    public function __construct($_ = null, $codeContext = null)
    {
        $this
            ->set_($_)
            ->setCodeContext($codeContext);
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
     * @return \Sabre\UpdateReservation\StructType\Code
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
     * @return \Sabre\UpdateReservation\StructType\Code
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
     * @return \Sabre\UpdateReservation\StructType\Code
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
