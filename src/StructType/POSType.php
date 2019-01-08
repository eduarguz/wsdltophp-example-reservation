<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for POSType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Point of Sale (POS) is the details identifying the party or connection channel making the request.
 * @subpackage Structs
 */
class POSType extends AbstractStructBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: This holds details regarding the requestor. It may be repeated to also accommodate the delivery systems.
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\SourceType
     */
    public $Source;
    /**
     * Constructor method for POSType
     * @uses POSType::setSource()
     * @param \Sabre\UpdateReservation\StructType\SourceType $source
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SourceType $source = null)
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return \Sabre\UpdateReservation\StructType\SourceType
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param \Sabre\UpdateReservation\StructType\SourceType $source
     * @return \Sabre\UpdateReservation\StructType\POSType
     */
    public function setSource(\Sabre\UpdateReservation\StructType\SourceType $source = null)
    {
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\POSType
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
