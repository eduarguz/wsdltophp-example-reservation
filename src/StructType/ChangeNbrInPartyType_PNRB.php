<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeNbrInPartyType.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Change Number in Party. Used when the user wants to increase or reduce the number of passengers in a PNR. *NewNbrInParty (mandatory element) Contains the desired passenger count; 0-99 are valid. *SegmentNumber (optional element(s)).
 * Default is to update all flights in the PNR. This is not valid on retrieved PNRs, only on a new PNR that has not been ended yet. Each contains an air segment number, to be updated. Used when the itinerary segments contain different passenger counts;
 * 1-99 are valid.
 * @subpackage Structs
 */
class ChangeNbrInPartyType_PNRB extends AbstractStructBase
{
    /**
     * The NewNbrInParty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Used for Numeric values, from 0 to 99 inclusive.
     * - maxInclusive: 99
     * - minInclusive: 0
     * @var int
     */
    public $NewNbrInParty;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 99 inclusive.
     * - maxInclusive: 99
     * - minInclusive: 1
     * @var int[]
     */
    public $SegmentNumber;
    /**
     * Constructor method for ChangeNbrInPartyType.PNRB
     * @uses ChangeNbrInPartyType_PNRB::setNewNbrInParty()
     * @uses ChangeNbrInPartyType_PNRB::setSegmentNumber()
     * @param int $newNbrInParty
     * @param int[] $segmentNumber
     */
    public function __construct($newNbrInParty = null, array $segmentNumber = array())
    {
        $this
            ->setNewNbrInParty($newNbrInParty)
            ->setSegmentNumber($segmentNumber);
    }
    /**
     * Get NewNbrInParty value
     * @return int
     */
    public function getNewNbrInParty()
    {
        return $this->NewNbrInParty;
    }
    /**
     * Set NewNbrInParty value
     * @param int $newNbrInParty
     * @return \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB
     */
    public function setNewNbrInParty($newNbrInParty = null)
    {
        // validation for constraint: maxInclusive
        if ($newNbrInParty > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $newNbrInParty), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($newNbrInParty < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $newNbrInParty), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($newNbrInParty) && !is_numeric($newNbrInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($newNbrInParty)), __LINE__);
        }
        $this->NewNbrInParty = $newNbrInParty;
        return $this;
    }
    /**
     * Get SegmentNumber value
     * @return int[]|null
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @throws \InvalidArgumentException
     * @param int[] $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB
     */
    public function setSegmentNumber(array $segmentNumber = array())
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentNumber < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $segmentNumber), __LINE__);
        }
        foreach ($segmentNumber as $changeNbrInPartyType_PNRBSegmentNumberItem) {
            // validation for constraint: itemType
            if (!is_numeric($changeNbrInPartyType_PNRBSegmentNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The SegmentNumber property can only contain items of integer, "%s" given', is_object($changeNbrInPartyType_PNRBSegmentNumberItem) ? get_class($changeNbrInPartyType_PNRBSegmentNumberItem) : gettype($changeNbrInPartyType_PNRBSegmentNumberItem)), __LINE__);
            }
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Add item to SegmentNumber value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB
     */
    public function addToSegmentNumber($item)
    {
        // validation for constraint: maxInclusive
        if ($item > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $item), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($item < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $item), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The SegmentNumber property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB
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
