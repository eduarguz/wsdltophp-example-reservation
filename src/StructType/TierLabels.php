<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TierLabels StructType
 * @subpackage Structs
 */
class TierLabels extends AbstractStructBase
{
    /**
     * The TierLabel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * @var \Sabre\UpdateReservation\StructType\TierLabel[]
     */
    public $TierLabel;
    /**
     * Constructor method for TierLabels
     * @uses TierLabels::setTierLabel()
     * @param \Sabre\UpdateReservation\StructType\TierLabel[] $tierLabel
     */
    public function __construct(array $tierLabel = array())
    {
        $this
            ->setTierLabel($tierLabel);
    }
    /**
     * Get TierLabel value
     * @return \Sabre\UpdateReservation\StructType\TierLabel[]|null
     */
    public function getTierLabel()
    {
        return $this->TierLabel;
    }
    /**
     * Set TierLabel value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TierLabel[] $tierLabel
     * @return \Sabre\UpdateReservation\StructType\TierLabels
     */
    public function setTierLabel(array $tierLabel = array())
    {
        foreach ($tierLabel as $tierLabelsTierLabelItem) {
            // validation for constraint: itemType
            if (!$tierLabelsTierLabelItem instanceof \Sabre\UpdateReservation\StructType\TierLabel) {
                throw new \InvalidArgumentException(sprintf('The TierLabel property can only contain items of \Sabre\UpdateReservation\StructType\TierLabel, "%s" given', is_object($tierLabelsTierLabelItem) ? get_class($tierLabelsTierLabelItem) : gettype($tierLabelsTierLabelItem)), __LINE__);
            }
        }
        $this->TierLabel = $tierLabel;
        return $this;
    }
    /**
     * Add item to TierLabel value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TierLabel $item
     * @return \Sabre\UpdateReservation\StructType\TierLabels
     */
    public function addToTierLabel(\Sabre\UpdateReservation\StructType\TierLabel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TierLabel) {
            throw new \InvalidArgumentException(sprintf('The TierLabel property can only contain items of \Sabre\UpdateReservation\StructType\TierLabel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TierLabel[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TierLabels
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
