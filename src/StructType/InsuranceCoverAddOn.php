<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceCoverAddOn StructType
 * @subpackage Structs
 */
class InsuranceCoverAddOn extends InsuranceCoverage
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Options
     */
    public $Options;
    /**
     * Constructor method for InsuranceCoverAddOn
     * @uses InsuranceCoverAddOn::setOptions()
     * @param \Sabre\UpdateReservation\StructType\Options $options
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Options $options = null)
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return \Sabre\UpdateReservation\StructType\Options|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Sabre\UpdateReservation\StructType\Options $options
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn
     */
    public function setOptions(\Sabre\UpdateReservation\StructType\Options $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn
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
