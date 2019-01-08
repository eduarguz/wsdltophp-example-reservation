<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PnrContent StructType
 * @subpackage Structs
 */
class PnrContent extends AbstractStructBase
{
    /**
     * The RawContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RawContent;
    /**
     * Constructor method for PnrContent
     * @uses PnrContent::setRawContent()
     * @param string $rawContent
     */
    public function __construct($rawContent = null)
    {
        $this
            ->setRawContent($rawContent);
    }
    /**
     * Get RawContent value
     * @return string|null
     */
    public function getRawContent()
    {
        return $this->RawContent;
    }
    /**
     * Set RawContent value
     * @param string $rawContent
     * @return \Sabre\UpdateReservation\StructType\PnrContent
     */
    public function setRawContent($rawContent = null)
    {
        // validation for constraint: string
        if (!is_null($rawContent) && !is_string($rawContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rawContent)), __LINE__);
        }
        $this->RawContent = $rawContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PnrContent
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
