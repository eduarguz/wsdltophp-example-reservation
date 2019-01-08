<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinearEntryRequestType.PNRB StructType
 * @subpackage Structs
 */
class LinearEntryRequestType_PNRB extends AbstractStructBase
{
    /**
     * The LinearEntry
     * Meta informations extracted from the WSDL
     * - documentation: Linear entry commands such as CKS* coming from Terminal Gateway, restricted for internal use
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $LinearEntry;
    /**
     * Constructor method for LinearEntryRequestType.PNRB
     * @uses LinearEntryRequestType_PNRB::setLinearEntry()
     * @param string $linearEntry
     */
    public function __construct($linearEntry = null)
    {
        $this
            ->setLinearEntry($linearEntry);
    }
    /**
     * Get LinearEntry value
     * @return string
     */
    public function getLinearEntry()
    {
        return $this->LinearEntry;
    }
    /**
     * Set LinearEntry value
     * @param string $linearEntry
     * @return \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB
     */
    public function setLinearEntry($linearEntry = null)
    {
        // validation for constraint: string
        if (!is_null($linearEntry) && !is_string($linearEntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linearEntry)), __LINE__);
        }
        $this->LinearEntry = $linearEntry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB
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
