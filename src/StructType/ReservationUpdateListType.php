<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationUpdateListType StructType
 * @subpackage Structs
 */
class ReservationUpdateListType extends AbstractStructBase
{
    /**
     * The Locator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocatorWithPartitionType
     */
    public $Locator;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - documentation: PNR creation date that is used as part of PNR identifier (both active and inactive PNRs)
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * The ReservationUpdateItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\ReservationUpdateItemType[]
     */
    public $ReservationUpdateItem;
    /**
     * The ChangeNbrInParty
     * @var \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB
     */
    public $ChangeNbrInParty;
    /**
     * The LinearEntryRequest
     * Meta informations extracted from the WSDL
     * - documentation: Linear entry requests such as CKS* coming from Terminal Gateway, restricted for internal use
     * @var \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB
     */
    public $LinearEntryRequest;
    /**
     * The GMRUpdate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB
     */
    public $GMRUpdate;
    /**
     * The ReceivedFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public $ReceivedFrom;
    /**
     * Constructor method for ReservationUpdateListType
     * @uses ReservationUpdateListType::setLocator()
     * @uses ReservationUpdateListType::setCreateDate()
     * @uses ReservationUpdateListType::setReservationUpdateItem()
     * @uses ReservationUpdateListType::setChangeNbrInParty()
     * @uses ReservationUpdateListType::setLinearEntryRequest()
     * @uses ReservationUpdateListType::setGMRUpdate()
     * @uses ReservationUpdateListType::setReceivedFrom()
     * @param \Sabre\UpdateReservation\StructType\LocatorWithPartitionType $locator
     * @param string $createDate
     * @param \Sabre\UpdateReservation\StructType\ReservationUpdateItemType[] $reservationUpdateItem
     * @param \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB $changeNbrInParty
     * @param \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB $linearEntryRequest
     * @param \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB $gMRUpdate
     * @param \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom
     */
    public function __construct(\Sabre\UpdateReservation\StructType\LocatorWithPartitionType $locator = null, $createDate = null, array $reservationUpdateItem = array(), \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB $changeNbrInParty = null, \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB $linearEntryRequest = null, \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB $gMRUpdate = null, \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom = null)
    {
        $this
            ->setLocator($locator)
            ->setCreateDate($createDate)
            ->setReservationUpdateItem($reservationUpdateItem)
            ->setChangeNbrInParty($changeNbrInParty)
            ->setLinearEntryRequest($linearEntryRequest)
            ->setGMRUpdate($gMRUpdate)
            ->setReceivedFrom($receivedFrom);
    }
    /**
     * Get Locator value
     * @return \Sabre\UpdateReservation\StructType\LocatorWithPartitionType|null
     */
    public function getLocator()
    {
        return $this->Locator;
    }
    /**
     * Set Locator value
     * @param \Sabre\UpdateReservation\StructType\LocatorWithPartitionType $locator
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setLocator(\Sabre\UpdateReservation\StructType\LocatorWithPartitionType $locator = null)
    {
        $this->Locator = $locator;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get ReservationUpdateItem value
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType[]|null
     */
    public function getReservationUpdateItem()
    {
        return $this->ReservationUpdateItem;
    }
    /**
     * Set ReservationUpdateItem value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReservationUpdateItemType[] $reservationUpdateItem
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setReservationUpdateItem(array $reservationUpdateItem = array())
    {
        foreach ($reservationUpdateItem as $reservationUpdateListTypeReservationUpdateItemItem) {
            // validation for constraint: itemType
            if (!$reservationUpdateListTypeReservationUpdateItemItem instanceof \Sabre\UpdateReservation\StructType\ReservationUpdateItemType) {
                throw new \InvalidArgumentException(sprintf('The ReservationUpdateItem property can only contain items of \Sabre\UpdateReservation\StructType\ReservationUpdateItemType, "%s" given', is_object($reservationUpdateListTypeReservationUpdateItemItem) ? get_class($reservationUpdateListTypeReservationUpdateItemItem) : gettype($reservationUpdateListTypeReservationUpdateItemItem)), __LINE__);
            }
        }
        $this->ReservationUpdateItem = $reservationUpdateItem;
        return $this;
    }
    /**
     * Add item to ReservationUpdateItem value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ReservationUpdateItemType $item
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function addToReservationUpdateItem(\Sabre\UpdateReservation\StructType\ReservationUpdateItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ReservationUpdateItemType) {
            throw new \InvalidArgumentException(sprintf('The ReservationUpdateItem property can only contain items of \Sabre\UpdateReservation\StructType\ReservationUpdateItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReservationUpdateItem[] = $item;
        return $this;
    }
    /**
     * Get ChangeNbrInParty value
     * @return \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB|null
     */
    public function getChangeNbrInParty()
    {
        return $this->ChangeNbrInParty;
    }
    /**
     * Set ChangeNbrInParty value
     * @param \Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB $changeNbrInParty
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setChangeNbrInParty(\Sabre\UpdateReservation\StructType\ChangeNbrInPartyType_PNRB $changeNbrInParty = null)
    {
        $this->ChangeNbrInParty = $changeNbrInParty;
        return $this;
    }
    /**
     * Get LinearEntryRequest value
     * @return \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB|null
     */
    public function getLinearEntryRequest()
    {
        return $this->LinearEntryRequest;
    }
    /**
     * Set LinearEntryRequest value
     * @param \Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB $linearEntryRequest
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setLinearEntryRequest(\Sabre\UpdateReservation\StructType\LinearEntryRequestType_PNRB $linearEntryRequest = null)
    {
        $this->LinearEntryRequest = $linearEntryRequest;
        return $this;
    }
    /**
     * Get GMRUpdate value
     * @return \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB|null
     */
    public function getGMRUpdate()
    {
        return $this->GMRUpdate;
    }
    /**
     * Set GMRUpdate value
     * @param \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB $gMRUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setGMRUpdate(\Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB $gMRUpdate = null)
    {
        $this->GMRUpdate = $gMRUpdate;
        return $this;
    }
    /**
     * Get ReceivedFrom value
     * @return \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB|null
     */
    public function getReceivedFrom()
    {
        return $this->ReceivedFrom;
    }
    /**
     * Set ReceivedFrom value
     * @param \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
     */
    public function setReceivedFrom(\Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom = null)
    {
        $this->ReceivedFrom = $receivedFrom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateListType
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
