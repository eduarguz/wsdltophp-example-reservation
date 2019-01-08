<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestrictionsType StructType
 * @subpackage Structs
 */
class RestrictionsType extends AbstractStructBase
{
    /**
     * The CancelPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\MultilineTextType
     */
    public $CancelPolicy;
    /**
     * Constructor method for RestrictionsType
     * @uses RestrictionsType::setCancelPolicy()
     * @param \Sabre\UpdateReservation\StructType\MultilineTextType $cancelPolicy
     */
    public function __construct(\Sabre\UpdateReservation\StructType\MultilineTextType $cancelPolicy = null)
    {
        $this
            ->setCancelPolicy($cancelPolicy);
    }
    /**
     * Get CancelPolicy value
     * @return \Sabre\UpdateReservation\StructType\MultilineTextType
     */
    public function getCancelPolicy()
    {
        return $this->CancelPolicy;
    }
    /**
     * Set CancelPolicy value
     * @param \Sabre\UpdateReservation\StructType\MultilineTextType $cancelPolicy
     * @return \Sabre\UpdateReservation\StructType\RestrictionsType
     */
    public function setCancelPolicy(\Sabre\UpdateReservation\StructType\MultilineTextType $cancelPolicy = null)
    {
        $this->CancelPolicy = $cancelPolicy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RestrictionsType
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
