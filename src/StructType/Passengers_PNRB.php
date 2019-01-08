<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passengers.PNRB StructType
 * @subpackage Structs
 */
class Passengers_PNRB extends AbstractStructBase
{
    /**
     * The Corporate
     * Meta informations extracted from the WSDL
     * - documentation: Corporate PNR
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
     */
    public $Corporate;
    /**
     * The BlockedSpaceGroup
     * Meta informations extracted from the WSDL
     * - documentation: BSG Master PNR
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BSGGroup_PNRB
     */
    public $BlockedSpaceGroup;
    /**
     * The ZGroup
     * Meta informations extracted from the WSDL
     * - documentation: Z-Name Group PNR
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB
     */
    public $ZGroup;
    /**
     * The Passenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Passenger_PNRB[]
     */
    public $Passenger;
    /**
     * The numberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $numberInParty;
    /**
     * Constructor method for Passengers.PNRB
     * @uses Passengers_PNRB::setCorporate()
     * @uses Passengers_PNRB::setBlockedSpaceGroup()
     * @uses Passengers_PNRB::setZGroup()
     * @uses Passengers_PNRB::setPassenger()
     * @uses Passengers_PNRB::setNumberInParty()
     * @param \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $corporate
     * @param \Sabre\UpdateReservation\StructType\BSGGroup_PNRB $blockedSpaceGroup
     * @param \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $zGroup
     * @param \Sabre\UpdateReservation\StructType\Passenger_PNRB[] $passenger
     * @param int $numberInParty
     */
    public function __construct(\Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $corporate = null, \Sabre\UpdateReservation\StructType\BSGGroup_PNRB $blockedSpaceGroup = null, \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $zGroup = null, array $passenger = array(), $numberInParty = null)
    {
        $this
            ->setCorporate($corporate)
            ->setBlockedSpaceGroup($blockedSpaceGroup)
            ->setZGroup($zGroup)
            ->setPassenger($passenger)
            ->setNumberInParty($numberInParty);
    }
    /**
     * Get Corporate value
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB|null
     */
    public function getCorporate()
    {
        return $this->Corporate;
    }
    /**
     * Set Corporate value
     * @param \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $corporate
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public function setCorporate(\Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $corporate = null)
    {
        $this->Corporate = $corporate;
        return $this;
    }
    /**
     * Get BlockedSpaceGroup value
     * @return \Sabre\UpdateReservation\StructType\BSGGroup_PNRB|null
     */
    public function getBlockedSpaceGroup()
    {
        return $this->BlockedSpaceGroup;
    }
    /**
     * Set BlockedSpaceGroup value
     * @param \Sabre\UpdateReservation\StructType\BSGGroup_PNRB $blockedSpaceGroup
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public function setBlockedSpaceGroup(\Sabre\UpdateReservation\StructType\BSGGroup_PNRB $blockedSpaceGroup = null)
    {
        $this->BlockedSpaceGroup = $blockedSpaceGroup;
        return $this;
    }
    /**
     * Get ZGroup value
     * @return \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB|null
     */
    public function getZGroup()
    {
        return $this->ZGroup;
    }
    /**
     * Set ZGroup value
     * @param \Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $zGroup
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public function setZGroup(\Sabre\UpdateReservation\StructType\TravelerGroup_PNRB $zGroup = null)
    {
        $this->ZGroup = $zGroup;
        return $this;
    }
    /**
     * Get Passenger value
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB[]|null
     */
    public function getPassenger()
    {
        return $this->Passenger;
    }
    /**
     * Set Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Passenger_PNRB[] $passenger
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public function setPassenger(array $passenger = array())
    {
        foreach ($passenger as $passengers_PNRBPassengerItem) {
            // validation for constraint: itemType
            if (!$passengers_PNRBPassengerItem instanceof \Sabre\UpdateReservation\StructType\Passenger_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\Passenger_PNRB, "%s" given', is_object($passengers_PNRBPassengerItem) ? get_class($passengers_PNRBPassengerItem) : gettype($passengers_PNRBPassengerItem)), __LINE__);
            }
        }
        $this->Passenger = $passenger;
        return $this;
    }
    /**
     * Add item to Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Passenger_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public function addToPassenger(\Sabre\UpdateReservation\StructType\Passenger_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Passenger_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\Passenger_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Passenger[] = $item;
        return $this;
    }
    /**
     * Get numberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }
    /**
     * Set numberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($numberInParty > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->numberInParty = $numberInParty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Passengers_PNRB
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
