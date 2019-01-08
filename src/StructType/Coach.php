<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coach StructType
 * @subpackage Structs
 */
class Coach extends AbstractStructBase
{
    /**
     * The CoachNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoachNumber;
    /**
     * The PlacementNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PlacementNumber[]
     */
    public $PlacementNumber;
    /**
     * The CompartmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompartmentNumber;
    /**
     * Constructor method for Coach
     * @uses Coach::setCoachNumber()
     * @uses Coach::setPlacementNumber()
     * @uses Coach::setCompartmentNumber()
     * @param string $coachNumber
     * @param \Sabre\UpdateReservation\StructType\PlacementNumber[] $placementNumber
     * @param string $compartmentNumber
     */
    public function __construct($coachNumber = null, array $placementNumber = array(), $compartmentNumber = null)
    {
        $this
            ->setCoachNumber($coachNumber)
            ->setPlacementNumber($placementNumber)
            ->setCompartmentNumber($compartmentNumber);
    }
    /**
     * Get CoachNumber value
     * @return string|null
     */
    public function getCoachNumber()
    {
        return $this->CoachNumber;
    }
    /**
     * Set CoachNumber value
     * @param string $coachNumber
     * @return \Sabre\UpdateReservation\StructType\Coach
     */
    public function setCoachNumber($coachNumber = null)
    {
        // validation for constraint: string
        if (!is_null($coachNumber) && !is_string($coachNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coachNumber)), __LINE__);
        }
        $this->CoachNumber = $coachNumber;
        return $this;
    }
    /**
     * Get PlacementNumber value
     * @return \Sabre\UpdateReservation\StructType\PlacementNumber[]|null
     */
    public function getPlacementNumber()
    {
        return $this->PlacementNumber;
    }
    /**
     * Set PlacementNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PlacementNumber[] $placementNumber
     * @return \Sabre\UpdateReservation\StructType\Coach
     */
    public function setPlacementNumber(array $placementNumber = array())
    {
        foreach ($placementNumber as $coachPlacementNumberItem) {
            // validation for constraint: itemType
            if (!$coachPlacementNumberItem instanceof \Sabre\UpdateReservation\StructType\PlacementNumber) {
                throw new \InvalidArgumentException(sprintf('The PlacementNumber property can only contain items of \Sabre\UpdateReservation\StructType\PlacementNumber, "%s" given', is_object($coachPlacementNumberItem) ? get_class($coachPlacementNumberItem) : gettype($coachPlacementNumberItem)), __LINE__);
            }
        }
        $this->PlacementNumber = $placementNumber;
        return $this;
    }
    /**
     * Add item to PlacementNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PlacementNumber $item
     * @return \Sabre\UpdateReservation\StructType\Coach
     */
    public function addToPlacementNumber(\Sabre\UpdateReservation\StructType\PlacementNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PlacementNumber) {
            throw new \InvalidArgumentException(sprintf('The PlacementNumber property can only contain items of \Sabre\UpdateReservation\StructType\PlacementNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PlacementNumber[] = $item;
        return $this;
    }
    /**
     * Get CompartmentNumber value
     * @return string|null
     */
    public function getCompartmentNumber()
    {
        return $this->CompartmentNumber;
    }
    /**
     * Set CompartmentNumber value
     * @param string $compartmentNumber
     * @return \Sabre\UpdateReservation\StructType\Coach
     */
    public function setCompartmentNumber($compartmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($compartmentNumber) && !is_string($compartmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($compartmentNumber)), __LINE__);
        }
        $this->CompartmentNumber = $compartmentNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Coach
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
