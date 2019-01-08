<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Actions.PNRB StructType
 * @subpackage Structs
 */
class Actions_PNRB extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Action_PNRB[]
     */
    public $Action;
    /**
     * Constructor method for Actions.PNRB
     * @uses Actions_PNRB::setAction()
     * @param \Sabre\UpdateReservation\StructType\Action_PNRB[] $action
     */
    public function __construct(array $action = array())
    {
        $this
            ->setAction($action);
    }
    /**
     * Get Action value
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB[]|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Action_PNRB[] $action
     * @return \Sabre\UpdateReservation\StructType\Actions_PNRB
     */
    public function setAction(array $action = array())
    {
        foreach ($action as $actions_PNRBActionItem) {
            // validation for constraint: itemType
            if (!$actions_PNRBActionItem instanceof \Sabre\UpdateReservation\StructType\Action_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Action property can only contain items of \Sabre\UpdateReservation\StructType\Action_PNRB, "%s" given', is_object($actions_PNRBActionItem) ? get_class($actions_PNRBActionItem) : gettype($actions_PNRBActionItem)), __LINE__);
            }
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Add item to Action value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Action_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Actions_PNRB
     */
    public function addToAction(\Sabre\UpdateReservation\StructType\Action_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Action_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Action property can only contain items of \Sabre\UpdateReservation\StructType\Action_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Action[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Actions_PNRB
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
