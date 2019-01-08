<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETicketableOverrideType StructType
 * @subpackage Structs
 */
class ETicketableOverrideType extends AbstractStructBase
{
    /**
     * The value
     * Meta informations extracted from the WSDL
     * - documentation: ETicketable override
     * @var bool
     */
    public $value;
    /**
     * Constructor method for ETicketableOverrideType
     * @uses ETicketableOverrideType::setValue()
     * @param bool $value
     */
    public function __construct($value = null)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get value value
     * @return bool|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param bool $value
     * @return \Sabre\UpdateReservation\StructType\ETicketableOverrideType
     */
    public function setValue($value = null)
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ETicketableOverrideType
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
