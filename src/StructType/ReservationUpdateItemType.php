<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationUpdateItemType StructType
 * @subpackage Structs
 */
class ReservationUpdateItemType extends AbstractStructBase
{
    /**
     * The PassengerNameUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB
     */
    public $PassengerNameUpdate;
    /**
     * The GroupNameUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB
     */
    public $GroupNameUpdate;
    /**
     * The AncillaryServicesUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public $AncillaryServicesUpdate;
    /**
     * The AncillaryServicesPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public $AncillaryServicesPartialUpdate;
    /**
     * The EmailAddressUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[]
     */
    public $EmailAddressUpdate;
    /**
     * The ProfileUpdate
     * @var \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public $ProfileUpdate;
    /**
     * The PreReservedSeatPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB
     */
    public $PreReservedSeatPartialUpdate;
    /**
     * The SpecialServiceRequestUpdate
     * @var \Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB
     */
    public $SpecialServiceRequestUpdate;
    /**
     * The SpecialServiceRequestPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB
     */
    public $SpecialServiceRequestPartialUpdate;
    /**
     * The RemarkUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[]
     */
    public $RemarkUpdate;
    /**
     * The TicketDetailsUpdate
     * @var \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB
     */
    public $TicketDetailsUpdate;
    /**
     * The CssRequestUpdate
     * @var \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB
     */
    public $CssRequestUpdate;
    /**
     * The RemarkPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB
     */
    public $RemarkPartialUpdate;
    /**
     * The FrequentFlyerTSAPreCheckUpdate
     * @var \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB
     */
    public $FrequentFlyerTSAPreCheckUpdate;
    /**
     * The ProductUpdate
     * @var \Sabre\UpdateReservation\StructType\ProductUpdate_PNRB
     */
    public $ProductUpdate;
    /**
     * The PhoneNumberUpdate
     * @var \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB
     */
    public $PhoneNumberUpdate;
    /**
     * The PhoneNumberPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB
     */
    public $PhoneNumberPartialUpdate;
    /**
     * The OpenReservationElementUpdate
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB
     */
    public $OpenReservationElementUpdate;
    /**
     * The DKNumber
     * @var \Sabre\UpdateReservation\StructType\DKNumber_PNRB
     */
    public $DKNumber;
    /**
     * The OtherServiceInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB[]
     */
    public $OtherServiceInformation;
    /**
     * The AccountingLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[]
     */
    public $AccountingLine;
    /**
     * The AirSegmentPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB
     */
    public $AirSegmentPartialUpdate;
    /**
     * The AirItineraryUpdate
     * @var \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB
     */
    public $AirItineraryUpdate;
    /**
     * The GeneralSegmentUpdate
     * @var \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB
     */
    public $GeneralSegmentUpdate;
    /**
     * The CarrierRefundItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB
     */
    public $CarrierRefundItem;
    /**
     * The HeaderUpdateItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB
     */
    public $HeaderUpdateItem;
    /**
     * The AssociationMatrixUpdate
     * @var \Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB
     */
    public $AssociationMatrixUpdate;
    /**
     * The PreReservedSeatUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB
     */
    public $PreReservedSeatUpdate;
    /**
     * The TicketingInfoUpdate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingInfo
     */
    public $TicketingInfoUpdate;
    /**
     * The BookAndHold
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB
     */
    public $BookAndHold;
    /**
     * The OpenReservationAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationAction
     */
    public $OpenReservationAction;
    /**
     * The UpdateId
     * @var string
     */
    public $UpdateId;
    /**
     * Constructor method for ReservationUpdateItemType
     * @uses ReservationUpdateItemType::setPassengerNameUpdate()
     * @uses ReservationUpdateItemType::setGroupNameUpdate()
     * @uses ReservationUpdateItemType::setAncillaryServicesUpdate()
     * @uses ReservationUpdateItemType::setAncillaryServicesPartialUpdate()
     * @uses ReservationUpdateItemType::setEmailAddressUpdate()
     * @uses ReservationUpdateItemType::setProfileUpdate()
     * @uses ReservationUpdateItemType::setPreReservedSeatPartialUpdate()
     * @uses ReservationUpdateItemType::setSpecialServiceRequestUpdate()
     * @uses ReservationUpdateItemType::setSpecialServiceRequestPartialUpdate()
     * @uses ReservationUpdateItemType::setRemarkUpdate()
     * @uses ReservationUpdateItemType::setTicketDetailsUpdate()
     * @uses ReservationUpdateItemType::setCssRequestUpdate()
     * @uses ReservationUpdateItemType::setRemarkPartialUpdate()
     * @uses ReservationUpdateItemType::setFrequentFlyerTSAPreCheckUpdate()
     * @uses ReservationUpdateItemType::setProductUpdate()
     * @uses ReservationUpdateItemType::setPhoneNumberUpdate()
     * @uses ReservationUpdateItemType::setPhoneNumberPartialUpdate()
     * @uses ReservationUpdateItemType::setOpenReservationElementUpdate()
     * @uses ReservationUpdateItemType::setDKNumber()
     * @uses ReservationUpdateItemType::setOtherServiceInformation()
     * @uses ReservationUpdateItemType::setAccountingLine()
     * @uses ReservationUpdateItemType::setAirSegmentPartialUpdate()
     * @uses ReservationUpdateItemType::setAirItineraryUpdate()
     * @uses ReservationUpdateItemType::setGeneralSegmentUpdate()
     * @uses ReservationUpdateItemType::setCarrierRefundItem()
     * @uses ReservationUpdateItemType::setHeaderUpdateItem()
     * @uses ReservationUpdateItemType::setAssociationMatrixUpdate()
     * @uses ReservationUpdateItemType::setPreReservedSeatUpdate()
     * @uses ReservationUpdateItemType::setTicketingInfoUpdate()
     * @uses ReservationUpdateItemType::setBookAndHold()
     * @uses ReservationUpdateItemType::setOpenReservationAction()
     * @uses ReservationUpdateItemType::setUpdateId()
     * @param \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB $passengerNameUpdate
     * @param \Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB $groupNameUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB $ancillaryServicesUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB $ancillaryServicesPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[] $emailAddressUpdate
     * @param \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB $profileUpdate
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB $preReservedSeatPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB $specialServiceRequestUpdate
     * @param \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB $specialServiceRequestPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[] $remarkUpdate
     * @param \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB $ticketDetailsUpdate
     * @param \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB $cssRequestUpdate
     * @param \Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB $remarkPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB $frequentFlyerTSAPreCheckUpdate
     * @param \Sabre\UpdateReservation\StructType\ProductUpdate_PNRB $productUpdate
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB $phoneNumberUpdate
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB $phoneNumberPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB $openReservationElementUpdate
     * @param \Sabre\UpdateReservation\StructType\DKNumber_PNRB $dKNumber
     * @param \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB[] $otherServiceInformation
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[] $accountingLine
     * @param \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB $airSegmentPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB $airItineraryUpdate
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB $generalSegmentUpdate
     * @param \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB $carrierRefundItem
     * @param \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB $headerUpdateItem
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB $associationMatrixUpdate
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB $preReservedSeatUpdate
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfoUpdate
     * @param \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB $bookAndHold
     * @param \Sabre\UpdateReservation\StructType\OpenReservationAction $openReservationAction
     * @param string $updateId
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB $passengerNameUpdate = null, \Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB $groupNameUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB $ancillaryServicesUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB $ancillaryServicesPartialUpdate = null, array $emailAddressUpdate = array(), \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB $profileUpdate = null, \Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB $preReservedSeatPartialUpdate = null, \Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB $specialServiceRequestUpdate = null, \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB $specialServiceRequestPartialUpdate = null, array $remarkUpdate = array(), \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB $ticketDetailsUpdate = null, \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB $cssRequestUpdate = null, \Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB $remarkPartialUpdate = null, \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB $frequentFlyerTSAPreCheckUpdate = null, \Sabre\UpdateReservation\StructType\ProductUpdate_PNRB $productUpdate = null, \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB $phoneNumberUpdate = null, \Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB $phoneNumberPartialUpdate = null, \Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB $openReservationElementUpdate = null, \Sabre\UpdateReservation\StructType\DKNumber_PNRB $dKNumber = null, array $otherServiceInformation = array(), array $accountingLine = array(), \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB $airSegmentPartialUpdate = null, \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB $airItineraryUpdate = null, \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB $generalSegmentUpdate = null, \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB $carrierRefundItem = null, \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB $headerUpdateItem = null, \Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB $associationMatrixUpdate = null, \Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB $preReservedSeatUpdate = null, \Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfoUpdate = null, \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB $bookAndHold = null, \Sabre\UpdateReservation\StructType\OpenReservationAction $openReservationAction = null, $updateId = null)
    {
        $this
            ->setPassengerNameUpdate($passengerNameUpdate)
            ->setGroupNameUpdate($groupNameUpdate)
            ->setAncillaryServicesUpdate($ancillaryServicesUpdate)
            ->setAncillaryServicesPartialUpdate($ancillaryServicesPartialUpdate)
            ->setEmailAddressUpdate($emailAddressUpdate)
            ->setProfileUpdate($profileUpdate)
            ->setPreReservedSeatPartialUpdate($preReservedSeatPartialUpdate)
            ->setSpecialServiceRequestUpdate($specialServiceRequestUpdate)
            ->setSpecialServiceRequestPartialUpdate($specialServiceRequestPartialUpdate)
            ->setRemarkUpdate($remarkUpdate)
            ->setTicketDetailsUpdate($ticketDetailsUpdate)
            ->setCssRequestUpdate($cssRequestUpdate)
            ->setRemarkPartialUpdate($remarkPartialUpdate)
            ->setFrequentFlyerTSAPreCheckUpdate($frequentFlyerTSAPreCheckUpdate)
            ->setProductUpdate($productUpdate)
            ->setPhoneNumberUpdate($phoneNumberUpdate)
            ->setPhoneNumberPartialUpdate($phoneNumberPartialUpdate)
            ->setOpenReservationElementUpdate($openReservationElementUpdate)
            ->setDKNumber($dKNumber)
            ->setOtherServiceInformation($otherServiceInformation)
            ->setAccountingLine($accountingLine)
            ->setAirSegmentPartialUpdate($airSegmentPartialUpdate)
            ->setAirItineraryUpdate($airItineraryUpdate)
            ->setGeneralSegmentUpdate($generalSegmentUpdate)
            ->setCarrierRefundItem($carrierRefundItem)
            ->setHeaderUpdateItem($headerUpdateItem)
            ->setAssociationMatrixUpdate($associationMatrixUpdate)
            ->setPreReservedSeatUpdate($preReservedSeatUpdate)
            ->setTicketingInfoUpdate($ticketingInfoUpdate)
            ->setBookAndHold($bookAndHold)
            ->setOpenReservationAction($openReservationAction)
            ->setUpdateId($updateId);
    }
    /**
     * Get PassengerNameUpdate value
     * @return \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB|null
     */
    public function getPassengerNameUpdate()
    {
        return $this->PassengerNameUpdate;
    }
    /**
     * Set PassengerNameUpdate value
     * @param \Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB $passengerNameUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setPassengerNameUpdate(\Sabre\UpdateReservation\StructType\PassengerNameUpdate_PNRB $passengerNameUpdate = null)
    {
        $this->PassengerNameUpdate = $passengerNameUpdate;
        return $this;
    }
    /**
     * Get GroupNameUpdate value
     * @return \Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB|null
     */
    public function getGroupNameUpdate()
    {
        return $this->GroupNameUpdate;
    }
    /**
     * Set GroupNameUpdate value
     * @param \Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB $groupNameUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setGroupNameUpdate(\Sabre\UpdateReservation\StructType\GroupNameUpdate_PNRB $groupNameUpdate = null)
    {
        $this->GroupNameUpdate = $groupNameUpdate;
        return $this;
    }
    /**
     * Get AncillaryServicesUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB|null
     */
    public function getAncillaryServicesUpdate()
    {
        return $this->AncillaryServicesUpdate;
    }
    /**
     * Set AncillaryServicesUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB $ancillaryServicesUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setAncillaryServicesUpdate(\Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB $ancillaryServicesUpdate = null)
    {
        $this->AncillaryServicesUpdate = $ancillaryServicesUpdate;
        return $this;
    }
    /**
     * Get AncillaryServicesPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB|null
     */
    public function getAncillaryServicesPartialUpdate()
    {
        return $this->AncillaryServicesPartialUpdate;
    }
    /**
     * Set AncillaryServicesPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB $ancillaryServicesPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setAncillaryServicesPartialUpdate(\Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB $ancillaryServicesPartialUpdate = null)
    {
        $this->AncillaryServicesPartialUpdate = $ancillaryServicesPartialUpdate;
        return $this;
    }
    /**
     * Get EmailAddressUpdate value
     * @return \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[]|null
     */
    public function getEmailAddressUpdate()
    {
        return $this->EmailAddressUpdate;
    }
    /**
     * Set EmailAddressUpdate value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[] $emailAddressUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setEmailAddressUpdate(array $emailAddressUpdate = array())
    {
        foreach ($emailAddressUpdate as $reservationUpdateItemTypeEmailAddressUpdateItem) {
            // validation for constraint: itemType
            if (!$reservationUpdateItemTypeEmailAddressUpdateItem instanceof \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The EmailAddressUpdate property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB, "%s" given', is_object($reservationUpdateItemTypeEmailAddressUpdateItem) ? get_class($reservationUpdateItemTypeEmailAddressUpdateItem) : gettype($reservationUpdateItemTypeEmailAddressUpdateItem)), __LINE__);
            }
        }
        $this->EmailAddressUpdate = $emailAddressUpdate;
        return $this;
    }
    /**
     * Add item to EmailAddressUpdate value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function addToEmailAddressUpdate(\Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The EmailAddressUpdate property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailAddressUpdate[] = $item;
        return $this;
    }
    /**
     * Get ProfileUpdate value
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB|null
     */
    public function getProfileUpdate()
    {
        return $this->ProfileUpdate;
    }
    /**
     * Set ProfileUpdate value
     * @param \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB $profileUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setProfileUpdate(\Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB $profileUpdate = null)
    {
        $this->ProfileUpdate = $profileUpdate;
        return $this;
    }
    /**
     * Get PreReservedSeatPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB|null
     */
    public function getPreReservedSeatPartialUpdate()
    {
        return $this->PreReservedSeatPartialUpdate;
    }
    /**
     * Set PreReservedSeatPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB $preReservedSeatPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setPreReservedSeatPartialUpdate(\Sabre\UpdateReservation\StructType\PreReservedSeatPartialUpdate_PNRB $preReservedSeatPartialUpdate = null)
    {
        $this->PreReservedSeatPartialUpdate = $preReservedSeatPartialUpdate;
        return $this;
    }
    /**
     * Get SpecialServiceRequestUpdate value
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB|null
     */
    public function getSpecialServiceRequestUpdate()
    {
        return $this->SpecialServiceRequestUpdate;
    }
    /**
     * Set SpecialServiceRequestUpdate value
     * @param \Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB $specialServiceRequestUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setSpecialServiceRequestUpdate(\Sabre\UpdateReservation\StructType\SpecialServiceRequestUpdate_PNRB $specialServiceRequestUpdate = null)
    {
        $this->SpecialServiceRequestUpdate = $specialServiceRequestUpdate;
        return $this;
    }
    /**
     * Get SpecialServiceRequestPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB|null
     */
    public function getSpecialServiceRequestPartialUpdate()
    {
        return $this->SpecialServiceRequestPartialUpdate;
    }
    /**
     * Set SpecialServiceRequestPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB $specialServiceRequestPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setSpecialServiceRequestPartialUpdate(\Sabre\UpdateReservation\StructType\SSRPartialUpdate_PNRB $specialServiceRequestPartialUpdate = null)
    {
        $this->SpecialServiceRequestPartialUpdate = $specialServiceRequestPartialUpdate;
        return $this;
    }
    /**
     * Get RemarkUpdate value
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[]|null
     */
    public function getRemarkUpdate()
    {
        return $this->RemarkUpdate;
    }
    /**
     * Set RemarkUpdate value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[] $remarkUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setRemarkUpdate(array $remarkUpdate = array())
    {
        foreach ($remarkUpdate as $reservationUpdateItemTypeRemarkUpdateItem) {
            // validation for constraint: itemType
            if (!$reservationUpdateItemTypeRemarkUpdateItem instanceof \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The RemarkUpdate property can only contain items of \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB, "%s" given', is_object($reservationUpdateItemTypeRemarkUpdateItem) ? get_class($reservationUpdateItemTypeRemarkUpdateItem) : gettype($reservationUpdateItemTypeRemarkUpdateItem)), __LINE__);
            }
        }
        $this->RemarkUpdate = $remarkUpdate;
        return $this;
    }
    /**
     * Add item to RemarkUpdate value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function addToRemarkUpdate(\Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The RemarkUpdate property can only contain items of \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RemarkUpdate[] = $item;
        return $this;
    }
    /**
     * Get TicketDetailsUpdate value
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB|null
     */
    public function getTicketDetailsUpdate()
    {
        return $this->TicketDetailsUpdate;
    }
    /**
     * Set TicketDetailsUpdate value
     * @param \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB $ticketDetailsUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setTicketDetailsUpdate(\Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB $ticketDetailsUpdate = null)
    {
        $this->TicketDetailsUpdate = $ticketDetailsUpdate;
        return $this;
    }
    /**
     * Get CssRequestUpdate value
     * @return \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB|null
     */
    public function getCssRequestUpdate()
    {
        return $this->CssRequestUpdate;
    }
    /**
     * Set CssRequestUpdate value
     * @param \Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB $cssRequestUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setCssRequestUpdate(\Sabre\UpdateReservation\StructType\CssRequestUpdate_PNRB $cssRequestUpdate = null)
    {
        $this->CssRequestUpdate = $cssRequestUpdate;
        return $this;
    }
    /**
     * Get RemarkPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB|null
     */
    public function getRemarkPartialUpdate()
    {
        return $this->RemarkPartialUpdate;
    }
    /**
     * Set RemarkPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB $remarkPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setRemarkPartialUpdate(\Sabre\UpdateReservation\StructType\RemarkPartialUpdate_PNRB $remarkPartialUpdate = null)
    {
        $this->RemarkPartialUpdate = $remarkPartialUpdate;
        return $this;
    }
    /**
     * Get FrequentFlyerTSAPreCheckUpdate value
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB|null
     */
    public function getFrequentFlyerTSAPreCheckUpdate()
    {
        return $this->FrequentFlyerTSAPreCheckUpdate;
    }
    /**
     * Set FrequentFlyerTSAPreCheckUpdate value
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB $frequentFlyerTSAPreCheckUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setFrequentFlyerTSAPreCheckUpdate(\Sabre\UpdateReservation\StructType\FrequentFlyerTSAPreCheckUpdate_PNRB $frequentFlyerTSAPreCheckUpdate = null)
    {
        $this->FrequentFlyerTSAPreCheckUpdate = $frequentFlyerTSAPreCheckUpdate;
        return $this;
    }
    /**
     * Get ProductUpdate value
     * @return \Sabre\UpdateReservation\StructType\ProductUpdate_PNRB|null
     */
    public function getProductUpdate()
    {
        return $this->ProductUpdate;
    }
    /**
     * Set ProductUpdate value
     * @param \Sabre\UpdateReservation\StructType\ProductUpdate_PNRB $productUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setProductUpdate(\Sabre\UpdateReservation\StructType\ProductUpdate_PNRB $productUpdate = null)
    {
        $this->ProductUpdate = $productUpdate;
        return $this;
    }
    /**
     * Get PhoneNumberUpdate value
     * @return \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB|null
     */
    public function getPhoneNumberUpdate()
    {
        return $this->PhoneNumberUpdate;
    }
    /**
     * Set PhoneNumberUpdate value
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB $phoneNumberUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setPhoneNumberUpdate(\Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB $phoneNumberUpdate = null)
    {
        $this->PhoneNumberUpdate = $phoneNumberUpdate;
        return $this;
    }
    /**
     * Get PhoneNumberPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB|null
     */
    public function getPhoneNumberPartialUpdate()
    {
        return $this->PhoneNumberPartialUpdate;
    }
    /**
     * Set PhoneNumberPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB $phoneNumberPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setPhoneNumberPartialUpdate(\Sabre\UpdateReservation\StructType\PhoneNumberPartialUpdate_PNRB $phoneNumberPartialUpdate = null)
    {
        $this->PhoneNumberPartialUpdate = $phoneNumberPartialUpdate;
        return $this;
    }
    /**
     * Get OpenReservationElementUpdate value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB|null
     */
    public function getOpenReservationElementUpdate()
    {
        return $this->OpenReservationElementUpdate;
    }
    /**
     * Set OpenReservationElementUpdate value
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB $openReservationElementUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setOpenReservationElementUpdate(\Sabre\UpdateReservation\StructType\OpenReservationElementUpdate_PNRB $openReservationElementUpdate = null)
    {
        $this->OpenReservationElementUpdate = $openReservationElementUpdate;
        return $this;
    }
    /**
     * Get DKNumber value
     * @return \Sabre\UpdateReservation\StructType\DKNumber_PNRB|null
     */
    public function getDKNumber()
    {
        return $this->DKNumber;
    }
    /**
     * Set DKNumber value
     * @param \Sabre\UpdateReservation\StructType\DKNumber_PNRB $dKNumber
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setDKNumber(\Sabre\UpdateReservation\StructType\DKNumber_PNRB $dKNumber = null)
    {
        $this->DKNumber = $dKNumber;
        return $this;
    }
    /**
     * Get OtherServiceInformation value
     * @return \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB[]|null
     */
    public function getOtherServiceInformation()
    {
        return $this->OtherServiceInformation;
    }
    /**
     * Set OtherServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB[] $otherServiceInformation
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setOtherServiceInformation(array $otherServiceInformation = array())
    {
        foreach ($otherServiceInformation as $reservationUpdateItemTypeOtherServiceInformationItem) {
            // validation for constraint: itemType
            if (!$reservationUpdateItemTypeOtherServiceInformationItem instanceof \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB) {
                throw new \InvalidArgumentException(sprintf('The OtherServiceInformation property can only contain items of \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB, "%s" given', is_object($reservationUpdateItemTypeOtherServiceInformationItem) ? get_class($reservationUpdateItemTypeOtherServiceInformationItem) : gettype($reservationUpdateItemTypeOtherServiceInformationItem)), __LINE__);
            }
        }
        $this->OtherServiceInformation = $otherServiceInformation;
        return $this;
    }
    /**
     * Add item to OtherServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function addToOtherServiceInformation(\Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB) {
            throw new \InvalidArgumentException(sprintf('The OtherServiceInformation property can only contain items of \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherServiceInformation[] = $item;
        return $this;
    }
    /**
     * Get AccountingLine value
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[]|null
     */
    public function getAccountingLine()
    {
        return $this->AccountingLine;
    }
    /**
     * Set AccountingLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[] $accountingLine
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setAccountingLine(array $accountingLine = array())
    {
        foreach ($accountingLine as $reservationUpdateItemTypeAccountingLineItem) {
            // validation for constraint: itemType
            if (!$reservationUpdateItemTypeAccountingLineItem instanceof \Sabre\UpdateReservation\StructType\AccountingLine_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of \Sabre\UpdateReservation\StructType\AccountingLine_PNRB, "%s" given', is_object($reservationUpdateItemTypeAccountingLineItem) ? get_class($reservationUpdateItemTypeAccountingLineItem) : gettype($reservationUpdateItemTypeAccountingLineItem)), __LINE__);
            }
        }
        $this->AccountingLine = $accountingLine;
        return $this;
    }
    /**
     * Add item to AccountingLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function addToAccountingLine(\Sabre\UpdateReservation\StructType\AccountingLine_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountingLine_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of \Sabre\UpdateReservation\StructType\AccountingLine_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccountingLine[] = $item;
        return $this;
    }
    /**
     * Get AirSegmentPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB|null
     */
    public function getAirSegmentPartialUpdate()
    {
        return $this->AirSegmentPartialUpdate;
    }
    /**
     * Set AirSegmentPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB $airSegmentPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setAirSegmentPartialUpdate(\Sabre\UpdateReservation\StructType\AirSegmentPartialUpdate_PNRB $airSegmentPartialUpdate = null)
    {
        $this->AirSegmentPartialUpdate = $airSegmentPartialUpdate;
        return $this;
    }
    /**
     * Get AirItineraryUpdate value
     * @return \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB|null
     */
    public function getAirItineraryUpdate()
    {
        return $this->AirItineraryUpdate;
    }
    /**
     * Set AirItineraryUpdate value
     * @param \Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB $airItineraryUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setAirItineraryUpdate(\Sabre\UpdateReservation\StructType\AirItineraryUpdate_PNRB $airItineraryUpdate = null)
    {
        $this->AirItineraryUpdate = $airItineraryUpdate;
        return $this;
    }
    /**
     * Get GeneralSegmentUpdate value
     * @return \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB|null
     */
    public function getGeneralSegmentUpdate()
    {
        return $this->GeneralSegmentUpdate;
    }
    /**
     * Set GeneralSegmentUpdate value
     * @param \Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB $generalSegmentUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setGeneralSegmentUpdate(\Sabre\UpdateReservation\StructType\GeneralSegmentUpdate_PNRB $generalSegmentUpdate = null)
    {
        $this->GeneralSegmentUpdate = $generalSegmentUpdate;
        return $this;
    }
    /**
     * Get CarrierRefundItem value
     * @return \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB|null
     */
    public function getCarrierRefundItem()
    {
        return $this->CarrierRefundItem;
    }
    /**
     * Set CarrierRefundItem value
     * @param \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB $carrierRefundItem
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setCarrierRefundItem(\Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB $carrierRefundItem = null)
    {
        $this->CarrierRefundItem = $carrierRefundItem;
        return $this;
    }
    /**
     * Get HeaderUpdateItem value
     * @return \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB|null
     */
    public function getHeaderUpdateItem()
    {
        return $this->HeaderUpdateItem;
    }
    /**
     * Set HeaderUpdateItem value
     * @param \Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB $headerUpdateItem
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setHeaderUpdateItem(\Sabre\UpdateReservation\StructType\HeaderUpdateItem_PNRB $headerUpdateItem = null)
    {
        $this->HeaderUpdateItem = $headerUpdateItem;
        return $this;
    }
    /**
     * Get AssociationMatrixUpdate value
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB|null
     */
    public function getAssociationMatrixUpdate()
    {
        return $this->AssociationMatrixUpdate;
    }
    /**
     * Set AssociationMatrixUpdate value
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB $associationMatrixUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setAssociationMatrixUpdate(\Sabre\UpdateReservation\StructType\AssociationMatrixUpdate_PNRB $associationMatrixUpdate = null)
    {
        $this->AssociationMatrixUpdate = $associationMatrixUpdate;
        return $this;
    }
    /**
     * Get PreReservedSeatUpdate value
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB|null
     */
    public function getPreReservedSeatUpdate()
    {
        return $this->PreReservedSeatUpdate;
    }
    /**
     * Set PreReservedSeatUpdate value
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB $preReservedSeatUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setPreReservedSeatUpdate(\Sabre\UpdateReservation\StructType\PreReservedSeatUpdate_PNRB $preReservedSeatUpdate = null)
    {
        $this->PreReservedSeatUpdate = $preReservedSeatUpdate;
        return $this;
    }
    /**
     * Get TicketingInfoUpdate value
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo|null
     */
    public function getTicketingInfoUpdate()
    {
        return $this->TicketingInfoUpdate;
    }
    /**
     * Set TicketingInfoUpdate value
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfoUpdate
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setTicketingInfoUpdate(\Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfoUpdate = null)
    {
        $this->TicketingInfoUpdate = $ticketingInfoUpdate;
        return $this;
    }
    /**
     * Get BookAndHold value
     * @return \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB|null
     */
    public function getBookAndHold()
    {
        return $this->BookAndHold;
    }
    /**
     * Set BookAndHold value
     * @param \Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB $bookAndHold
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setBookAndHold(\Sabre\UpdateReservation\StructType\BookAndHoldType_PNRB $bookAndHold = null)
    {
        $this->BookAndHold = $bookAndHold;
        return $this;
    }
    /**
     * Get OpenReservationAction value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationAction|null
     */
    public function getOpenReservationAction()
    {
        return $this->OpenReservationAction;
    }
    /**
     * Set OpenReservationAction value
     * @param \Sabre\UpdateReservation\StructType\OpenReservationAction $openReservationAction
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setOpenReservationAction(\Sabre\UpdateReservation\StructType\OpenReservationAction $openReservationAction = null)
    {
        $this->OpenReservationAction = $openReservationAction;
        return $this;
    }
    /**
     * Get UpdateId value
     * @return string|null
     */
    public function getUpdateId()
    {
        return $this->UpdateId;
    }
    /**
     * Set UpdateId value
     * @param string $updateId
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
     */
    public function setUpdateId($updateId = null)
    {
        // validation for constraint: string
        if (!is_null($updateId) && !is_string($updateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateId)), __LINE__);
        }
        $this->UpdateId = $updateId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReservationUpdateItemType
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
