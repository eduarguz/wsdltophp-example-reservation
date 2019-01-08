<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPenalties StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of Cancel Penalties
 * @subpackage Structs
 */
class CancelPenalties extends AbstractStructBase
{
    /**
     * The CancelPenalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\CancelPenalty[]
     */
    public $CancelPenalty;
    /**
     * Constructor method for CancelPenalties
     * @uses CancelPenalties::setCancelPenalty()
     * @param \Sabre\UpdateReservation\StructType\CancelPenalty[] $cancelPenalty
     */
    public function __construct(array $cancelPenalty = array())
    {
        $this
            ->setCancelPenalty($cancelPenalty);
    }
    /**
     * Get CancelPenalty value
     * @return \Sabre\UpdateReservation\StructType\CancelPenalty[]|null
     */
    public function getCancelPenalty()
    {
        return $this->CancelPenalty;
    }
    /**
     * Set CancelPenalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CancelPenalty[] $cancelPenalty
     * @return \Sabre\UpdateReservation\StructType\CancelPenalties
     */
    public function setCancelPenalty(array $cancelPenalty = array())
    {
        foreach ($cancelPenalty as $cancelPenaltiesCancelPenaltyItem) {
            // validation for constraint: itemType
            if (!$cancelPenaltiesCancelPenaltyItem instanceof \Sabre\UpdateReservation\StructType\CancelPenalty) {
                throw new \InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of \Sabre\UpdateReservation\StructType\CancelPenalty, "%s" given', is_object($cancelPenaltiesCancelPenaltyItem) ? get_class($cancelPenaltiesCancelPenaltyItem) : gettype($cancelPenaltiesCancelPenaltyItem)), __LINE__);
            }
        }
        $this->CancelPenalty = $cancelPenalty;
        return $this;
    }
    /**
     * Add item to CancelPenalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CancelPenalty $item
     * @return \Sabre\UpdateReservation\StructType\CancelPenalties
     */
    public function addToCancelPenalty(\Sabre\UpdateReservation\StructType\CancelPenalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CancelPenalty) {
            throw new \InvalidArgumentException(sprintf('The CancelPenalty property can only contain items of \Sabre\UpdateReservation\StructType\CancelPenalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelPenalty[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CancelPenalties
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
