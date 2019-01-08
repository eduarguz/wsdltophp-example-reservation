<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestCounts StructType
 * Meta informations extracted from the WSDL
 * - documentation: Number of guests associated with this reservation.
 * @subpackage Structs
 */
class GuestCounts extends AbstractStructBase
{
    /**
     * The GuestCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $GuestCount;
    /**
     * The ExtraGuestCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExtraGuestCount;
    /**
     * The RollAwayCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RollAwayCount;
    /**
     * The CribCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    public $CribCount;
    /**
     * The ReserveUnderName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ReserveUnderName;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Name;
    /**
     * The ChildGuestCount
     * Meta informations extracted from the WSDL
     * - documentation: Child guest count for the room. Required for all properties. Used in combination with ChildAges to determine availability and rates.
     * - minOccurs: 0
     * @var int
     */
    public $ChildGuestCount;
    /**
     * The ChildAges
     * Meta informations extracted from the WSDL
     * - documentation: The individual ages of the children in the room as a comma-separated list.
     * - minOccurs: 0
     * - pattern: \d{1,5}(,\d{1,5})*
     * @var string
     */
    public $ChildAges;
    /**
     * Constructor method for GuestCounts
     * @uses GuestCounts::setGuestCount()
     * @uses GuestCounts::setExtraGuestCount()
     * @uses GuestCounts::setRollAwayCount()
     * @uses GuestCounts::setCribCount()
     * @uses GuestCounts::setReserveUnderName()
     * @uses GuestCounts::setName()
     * @uses GuestCounts::setChildGuestCount()
     * @uses GuestCounts::setChildAges()
     * @param int $guestCount
     * @param string[] $extraGuestCount
     * @param string[] $rollAwayCount
     * @param int[] $cribCount
     * @param string[] $reserveUnderName
     * @param string[] $name
     * @param int $childGuestCount
     * @param string $childAges
     */
    public function __construct($guestCount = null, array $extraGuestCount = array(), array $rollAwayCount = array(), array $cribCount = array(), array $reserveUnderName = array(), array $name = array(), $childGuestCount = null, $childAges = null)
    {
        $this
            ->setGuestCount($guestCount)
            ->setExtraGuestCount($extraGuestCount)
            ->setRollAwayCount($rollAwayCount)
            ->setCribCount($cribCount)
            ->setReserveUnderName($reserveUnderName)
            ->setName($name)
            ->setChildGuestCount($childGuestCount)
            ->setChildAges($childAges);
    }
    /**
     * Get GuestCount value
     * @return int|null
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }
    /**
     * Set GuestCount value
     * @param int $guestCount
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setGuestCount($guestCount = null)
    {
        // validation for constraint: int
        if (!is_null($guestCount) && !is_numeric($guestCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($guestCount)), __LINE__);
        }
        $this->GuestCount = $guestCount;
        return $this;
    }
    /**
     * Get ExtraGuestCount value
     * @return string[]|null
     */
    public function getExtraGuestCount()
    {
        return $this->ExtraGuestCount;
    }
    /**
     * Set ExtraGuestCount value
     * @throws \InvalidArgumentException
     * @param string[] $extraGuestCount
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setExtraGuestCount(array $extraGuestCount = array())
    {
        foreach ($extraGuestCount as $guestCountsExtraGuestCountItem) {
            // validation for constraint: itemType
            if (!is_string($guestCountsExtraGuestCountItem)) {
                throw new \InvalidArgumentException(sprintf('The ExtraGuestCount property can only contain items of string, "%s" given', is_object($guestCountsExtraGuestCountItem) ? get_class($guestCountsExtraGuestCountItem) : gettype($guestCountsExtraGuestCountItem)), __LINE__);
            }
        }
        $this->ExtraGuestCount = $extraGuestCount;
        return $this;
    }
    /**
     * Add item to ExtraGuestCount value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function addToExtraGuestCount($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExtraGuestCount property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExtraGuestCount[] = $item;
        return $this;
    }
    /**
     * Get RollAwayCount value
     * @return string[]|null
     */
    public function getRollAwayCount()
    {
        return $this->RollAwayCount;
    }
    /**
     * Set RollAwayCount value
     * @throws \InvalidArgumentException
     * @param string[] $rollAwayCount
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setRollAwayCount(array $rollAwayCount = array())
    {
        foreach ($rollAwayCount as $guestCountsRollAwayCountItem) {
            // validation for constraint: itemType
            if (!is_string($guestCountsRollAwayCountItem)) {
                throw new \InvalidArgumentException(sprintf('The RollAwayCount property can only contain items of string, "%s" given', is_object($guestCountsRollAwayCountItem) ? get_class($guestCountsRollAwayCountItem) : gettype($guestCountsRollAwayCountItem)), __LINE__);
            }
        }
        $this->RollAwayCount = $rollAwayCount;
        return $this;
    }
    /**
     * Add item to RollAwayCount value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function addToRollAwayCount($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The RollAwayCount property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RollAwayCount[] = $item;
        return $this;
    }
    /**
     * Get CribCount value
     * @return int[]|null
     */
    public function getCribCount()
    {
        return $this->CribCount;
    }
    /**
     * Set CribCount value
     * @throws \InvalidArgumentException
     * @param int[] $cribCount
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setCribCount(array $cribCount = array())
    {
        foreach ($cribCount as $guestCountsCribCountItem) {
            // validation for constraint: itemType
            if (!is_numeric($guestCountsCribCountItem)) {
                throw new \InvalidArgumentException(sprintf('The CribCount property can only contain items of integer, "%s" given', is_object($guestCountsCribCountItem) ? get_class($guestCountsCribCountItem) : gettype($guestCountsCribCountItem)), __LINE__);
            }
        }
        $this->CribCount = $cribCount;
        return $this;
    }
    /**
     * Add item to CribCount value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function addToCribCount($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The CribCount property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CribCount[] = $item;
        return $this;
    }
    /**
     * Get ReserveUnderName value
     * @return string[]|null
     */
    public function getReserveUnderName()
    {
        return $this->ReserveUnderName;
    }
    /**
     * Set ReserveUnderName value
     * @throws \InvalidArgumentException
     * @param string[] $reserveUnderName
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setReserveUnderName(array $reserveUnderName = array())
    {
        foreach ($reserveUnderName as $guestCountsReserveUnderNameItem) {
            // validation for constraint: itemType
            if (!is_string($guestCountsReserveUnderNameItem)) {
                throw new \InvalidArgumentException(sprintf('The ReserveUnderName property can only contain items of string, "%s" given', is_object($guestCountsReserveUnderNameItem) ? get_class($guestCountsReserveUnderNameItem) : gettype($guestCountsReserveUnderNameItem)), __LINE__);
            }
        }
        $this->ReserveUnderName = $reserveUnderName;
        return $this;
    }
    /**
     * Add item to ReserveUnderName value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function addToReserveUnderName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ReserveUnderName property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReserveUnderName[] = $item;
        return $this;
    }
    /**
     * Get Name value
     * @return string[]|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @throws \InvalidArgumentException
     * @param string[] $name
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setName(array $name = array())
    {
        foreach ($name as $guestCountsNameItem) {
            // validation for constraint: itemType
            if (!is_string($guestCountsNameItem)) {
                throw new \InvalidArgumentException(sprintf('The Name property can only contain items of string, "%s" given', is_object($guestCountsNameItem) ? get_class($guestCountsNameItem) : gettype($guestCountsNameItem)), __LINE__);
            }
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Add item to Name value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function addToName($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Name property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Name[] = $item;
        return $this;
    }
    /**
     * Get ChildGuestCount value
     * @return int|null
     */
    public function getChildGuestCount()
    {
        return $this->ChildGuestCount;
    }
    /**
     * Set ChildGuestCount value
     * @param int $childGuestCount
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setChildGuestCount($childGuestCount = null)
    {
        // validation for constraint: int
        if (!is_null($childGuestCount) && !is_numeric($childGuestCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($childGuestCount)), __LINE__);
        }
        $this->ChildGuestCount = $childGuestCount;
        return $this;
    }
    /**
     * Get ChildAges value
     * @return string|null
     */
    public function getChildAges()
    {
        return $this->ChildAges;
    }
    /**
     * Set ChildAges value
     * @param string $childAges
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
     */
    public function setChildAges($childAges = null)
    {
        // validation for constraint: pattern
        if (is_scalar($childAges) && !preg_match('/\\d{1,5}(,\\d{1,5})*/', $childAges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\d{1,5}(,\d{1,5})*", "%s" given', var_export($childAges, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($childAges) && !is_string($childAges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($childAges)), __LINE__);
        }
        $this->ChildAges = $childAges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GuestCounts
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
