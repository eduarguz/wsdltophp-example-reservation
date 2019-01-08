<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoluntaryChangesSMPType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies charges and/or penalties associated with making ticket changes after purchase.
 * @subpackage Structs
 */
class VoluntaryChangesSMPType extends AbstractStructBase
{
    /**
     * The Penalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Penalty[]
     */
    public $Penalty;
    /**
     * The match
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $match;
    /**
     * Constructor method for VoluntaryChangesSMPType
     * @uses VoluntaryChangesSMPType::setPenalty()
     * @uses VoluntaryChangesSMPType::setMatch()
     * @param \Sabre\UpdateReservation\StructType\Penalty[] $penalty
     * @param string $match
     */
    public function __construct(array $penalty = array(), $match = null)
    {
        $this
            ->setPenalty($penalty)
            ->setMatch($match);
    }
    /**
     * Get Penalty value
     * @return \Sabre\UpdateReservation\StructType\Penalty[]|null
     */
    public function getPenalty()
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Penalty[] $penalty
     * @return \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType
     */
    public function setPenalty(array $penalty = array())
    {
        foreach ($penalty as $voluntaryChangesSMPTypePenaltyItem) {
            // validation for constraint: itemType
            if (!$voluntaryChangesSMPTypePenaltyItem instanceof \Sabre\UpdateReservation\StructType\Penalty) {
                throw new \InvalidArgumentException(sprintf('The Penalty property can only contain items of \Sabre\UpdateReservation\StructType\Penalty, "%s" given', is_object($voluntaryChangesSMPTypePenaltyItem) ? get_class($voluntaryChangesSMPTypePenaltyItem) : gettype($voluntaryChangesSMPTypePenaltyItem)), __LINE__);
            }
        }
        $this->Penalty = $penalty;
        return $this;
    }
    /**
     * Add item to Penalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Penalty $item
     * @return \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType
     */
    public function addToPenalty(\Sabre\UpdateReservation\StructType\Penalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Penalty) {
            throw new \InvalidArgumentException(sprintf('The Penalty property can only contain items of \Sabre\UpdateReservation\StructType\Penalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Penalty[] = $item;
        return $this;
    }
    /**
     * Get match value
     * @return string|null
     */
    public function getMatch()
    {
        return $this->match;
    }
    /**
     * Set match value
     * @param string $match
     * @return \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType
     */
    public function setMatch($match = null)
    {
        // validation for constraint: string
        if (!is_null($match) && !is_string($match)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($match)), __LINE__);
        }
        $this->match = $match;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType
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
