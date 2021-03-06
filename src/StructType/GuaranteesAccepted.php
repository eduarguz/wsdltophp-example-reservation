<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteesAccepted StructType
 * @subpackage Structs
 */
class GuaranteesAccepted extends AbstractStructBase
{
    /**
     * The GuaranteeAccepted
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteeAccepted[]
     */
    public $GuaranteeAccepted;
    /**
     * Constructor method for GuaranteesAccepted
     * @uses GuaranteesAccepted::setGuaranteeAccepted()
     * @param \Sabre\UpdateReservation\StructType\GuaranteeAccepted[] $guaranteeAccepted
     */
    public function __construct(array $guaranteeAccepted = array())
    {
        $this
            ->setGuaranteeAccepted($guaranteeAccepted);
    }
    /**
     * Get GuaranteeAccepted value
     * @return \Sabre\UpdateReservation\StructType\GuaranteeAccepted[]|null
     */
    public function getGuaranteeAccepted()
    {
        return $this->GuaranteeAccepted;
    }
    /**
     * Set GuaranteeAccepted value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GuaranteeAccepted[] $guaranteeAccepted
     * @return \Sabre\UpdateReservation\StructType\GuaranteesAccepted
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted = array())
    {
        foreach ($guaranteeAccepted as $guaranteesAcceptedGuaranteeAcceptedItem) {
            // validation for constraint: itemType
            if (!$guaranteesAcceptedGuaranteeAcceptedItem instanceof \Sabre\UpdateReservation\StructType\GuaranteeAccepted) {
                throw new \InvalidArgumentException(sprintf('The GuaranteeAccepted property can only contain items of \Sabre\UpdateReservation\StructType\GuaranteeAccepted, "%s" given', is_object($guaranteesAcceptedGuaranteeAcceptedItem) ? get_class($guaranteesAcceptedGuaranteeAcceptedItem) : gettype($guaranteesAcceptedGuaranteeAcceptedItem)), __LINE__);
            }
        }
        $this->GuaranteeAccepted = $guaranteeAccepted;
        return $this;
    }
    /**
     * Add item to GuaranteeAccepted value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GuaranteeAccepted $item
     * @return \Sabre\UpdateReservation\StructType\GuaranteesAccepted
     */
    public function addToGuaranteeAccepted(\Sabre\UpdateReservation\StructType\GuaranteeAccepted $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\GuaranteeAccepted) {
            throw new \InvalidArgumentException(sprintf('The GuaranteeAccepted property can only contain items of \Sabre\UpdateReservation\StructType\GuaranteeAccepted, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteeAccepted[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GuaranteesAccepted
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
