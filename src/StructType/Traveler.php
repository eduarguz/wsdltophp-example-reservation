<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Traveler StructType
 * @subpackage Structs
 */
class Traveler extends PassengerType
{
    /**
     * The CoverAddOn
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[]
     */
    public $CoverAddOn;
    /**
     * The treatAsAdult
     * @var bool
     */
    public $treatAsAdult;
    /**
     * Constructor method for Traveler
     * @uses Traveler::setCoverAddOn()
     * @uses Traveler::setTreatAsAdult()
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[] $coverAddOn
     * @param bool $treatAsAdult
     */
    public function __construct(array $coverAddOn = array(), $treatAsAdult = null)
    {
        $this
            ->setCoverAddOn($coverAddOn)
            ->setTreatAsAdult($treatAsAdult);
    }
    /**
     * Get CoverAddOn value
     * @return \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[]|null
     */
    public function getCoverAddOn()
    {
        return $this->CoverAddOn;
    }
    /**
     * Set CoverAddOn value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn[] $coverAddOn
     * @return \Sabre\UpdateReservation\StructType\Traveler
     */
    public function setCoverAddOn(array $coverAddOn = array())
    {
        foreach ($coverAddOn as $travelerCoverAddOnItem) {
            // validation for constraint: itemType
            if (!$travelerCoverAddOnItem instanceof \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn) {
                throw new \InvalidArgumentException(sprintf('The CoverAddOn property can only contain items of \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn, "%s" given', is_object($travelerCoverAddOnItem) ? get_class($travelerCoverAddOnItem) : gettype($travelerCoverAddOnItem)), __LINE__);
            }
        }
        $this->CoverAddOn = $coverAddOn;
        return $this;
    }
    /**
     * Add item to CoverAddOn value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn $item
     * @return \Sabre\UpdateReservation\StructType\Traveler
     */
    public function addToCoverAddOn(\Sabre\UpdateReservation\StructType\InsuranceCoverAddOn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn) {
            throw new \InvalidArgumentException(sprintf('The CoverAddOn property can only contain items of \Sabre\UpdateReservation\StructType\InsuranceCoverAddOn, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CoverAddOn[] = $item;
        return $this;
    }
    /**
     * Get treatAsAdult value
     * @return bool|null
     */
    public function getTreatAsAdult()
    {
        return $this->treatAsAdult;
    }
    /**
     * Set treatAsAdult value
     * @param bool $treatAsAdult
     * @return \Sabre\UpdateReservation\StructType\Traveler
     */
    public function setTreatAsAdult($treatAsAdult = null)
    {
        // validation for constraint: boolean
        if (!is_null($treatAsAdult) && !is_bool($treatAsAdult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($treatAsAdult)), __LINE__);
        }
        $this->treatAsAdult = $treatAsAdult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Traveler
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
