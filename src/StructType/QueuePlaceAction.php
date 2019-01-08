<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueuePlaceAction StructType
 * @subpackage Structs
 */
class QueuePlaceAction extends AbstractStructBase
{
    /**
     * The QueuePlacement
     * Meta informations extracted from the WSDL
     * - documentation: Number and pit code of the queue, where pnr should be placed
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\QueuePlacement[]
     */
    public $QueuePlacement;
    /**
     * Constructor method for QueuePlaceAction
     * @uses QueuePlaceAction::setQueuePlacement()
     * @param \Sabre\UpdateReservation\StructType\QueuePlacement[] $queuePlacement
     */
    public function __construct(array $queuePlacement = array())
    {
        $this
            ->setQueuePlacement($queuePlacement);
    }
    /**
     * Get QueuePlacement value
     * @return \Sabre\UpdateReservation\StructType\QueuePlacement[]
     */
    public function getQueuePlacement()
    {
        return $this->QueuePlacement;
    }
    /**
     * Set QueuePlacement value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\QueuePlacement[] $queuePlacement
     * @return \Sabre\UpdateReservation\StructType\QueuePlaceAction
     */
    public function setQueuePlacement(array $queuePlacement = array())
    {
        foreach ($queuePlacement as $queuePlaceActionQueuePlacementItem) {
            // validation for constraint: itemType
            if (!$queuePlaceActionQueuePlacementItem instanceof \Sabre\UpdateReservation\StructType\QueuePlacement) {
                throw new \InvalidArgumentException(sprintf('The QueuePlacement property can only contain items of \Sabre\UpdateReservation\StructType\QueuePlacement, "%s" given', is_object($queuePlaceActionQueuePlacementItem) ? get_class($queuePlaceActionQueuePlacementItem) : gettype($queuePlaceActionQueuePlacementItem)), __LINE__);
            }
        }
        $this->QueuePlacement = $queuePlacement;
        return $this;
    }
    /**
     * Add item to QueuePlacement value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\QueuePlacement $item
     * @return \Sabre\UpdateReservation\StructType\QueuePlaceAction
     */
    public function addToQueuePlacement(\Sabre\UpdateReservation\StructType\QueuePlacement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\QueuePlacement) {
            throw new \InvalidArgumentException(sprintf('The QueuePlacement property can only contain items of \Sabre\UpdateReservation\StructType\QueuePlacement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueuePlacement[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\QueuePlaceAction
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
