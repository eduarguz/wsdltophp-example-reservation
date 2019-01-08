<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingPOSType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Point Of Sale Information
 * @subpackage Structs
 */
class LodgingPOSType extends AbstractStructBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Source
     */
    public $Source;
    /**
     * Constructor method for LodgingPOSType
     * @uses LodgingPOSType::setSource()
     * @param \Sabre\UpdateReservation\StructType\Source $source
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Source $source = null)
    {
        $this
            ->setSource($source);
    }
    /**
     * Get Source value
     * @return \Sabre\UpdateReservation\StructType\Source|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param \Sabre\UpdateReservation\StructType\Source $source
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSType
     */
    public function setSource(\Sabre\UpdateReservation\StructType\Source $source = null)
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
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSType
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
