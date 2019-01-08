<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remarks StructType
 * Meta informations extracted from the WSDL
 * - documentation: additional remarks
 * @subpackage Structs
 */
class Remarks extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: "Text" is used to return miscellaneous remark-related information if applicable.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for Remarks
     * @uses Remarks::setText()
     * @param string $text
     */
    public function __construct($text = null)
    {
        $this
            ->setText($text);
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
     * @return \Sabre\UpdateReservation\StructType\Remarks
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Remarks
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
