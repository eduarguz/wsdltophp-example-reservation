<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedPNRSummaries.PNRB StructType
 * @subpackage Structs
 */
class AssociatedPNRSummaries_PNRB extends AbstractStructBase
{
    /**
     * The AssociatedPNRSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB[]
     */
    public $AssociatedPNRSummary;
    /**
     * Constructor method for AssociatedPNRSummaries.PNRB
     * @uses AssociatedPNRSummaries_PNRB::setAssociatedPNRSummary()
     * @param \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB[] $associatedPNRSummary
     */
    public function __construct(array $associatedPNRSummary = array())
    {
        $this
            ->setAssociatedPNRSummary($associatedPNRSummary);
    }
    /**
     * Get AssociatedPNRSummary value
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB[]|null
     */
    public function getAssociatedPNRSummary()
    {
        return $this->AssociatedPNRSummary;
    }
    /**
     * Set AssociatedPNRSummary value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB[] $associatedPNRSummary
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB
     */
    public function setAssociatedPNRSummary(array $associatedPNRSummary = array())
    {
        foreach ($associatedPNRSummary as $associatedPNRSummaries_PNRBAssociatedPNRSummaryItem) {
            // validation for constraint: itemType
            if (!$associatedPNRSummaries_PNRBAssociatedPNRSummaryItem instanceof \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AssociatedPNRSummary property can only contain items of \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB, "%s" given', is_object($associatedPNRSummaries_PNRBAssociatedPNRSummaryItem) ? get_class($associatedPNRSummaries_PNRBAssociatedPNRSummaryItem) : gettype($associatedPNRSummaries_PNRBAssociatedPNRSummaryItem)), __LINE__);
            }
        }
        $this->AssociatedPNRSummary = $associatedPNRSummary;
        return $this;
    }
    /**
     * Add item to AssociatedPNRSummary value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB
     */
    public function addToAssociatedPNRSummary(\Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AssociatedPNRSummary property can only contain items of \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedPNRSummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummaries_PNRB
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
