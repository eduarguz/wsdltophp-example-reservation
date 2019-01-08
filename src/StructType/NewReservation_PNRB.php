<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewReservation.PNRB StructType
 * @subpackage Structs
 */
class NewReservation_PNRB extends AbstractStructBase
{
    /**
     * The Itinerary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Itinerary
     */
    public $Itinerary;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelerName[]
     */
    public $PersonName;
    /**
     * The GroupName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GroupName
     */
    public $GroupName;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB[]
     */
    public $PhoneNumber;
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB[]
     */
    public $Profile;
    /**
     * The DkNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DKNumber_PNRB
     */
    public $DkNumber;
    /**
     * The TicketingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingInfo
     */
    public $TicketingInfo;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[]
     */
    public $Remark;
    /**
     * The OtherServiceInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB[]
     */
    public $OtherServiceInformation;
    /**
     * The SpecialServiceRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB[]
     */
    public $SpecialServiceRequest;
    /**
     * The AncillaryCreateRequest
     * Meta informations extracted from the WSDL
     * - documentation: Ancillary Create Request to support creating ancillaries via Create Reservation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB[]
     */
    public $AncillaryCreateRequest;
    /**
     * The ReceivedFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public $ReceivedFrom;
    /**
     * The CustomEntry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomEntry;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[]
     */
    public $EmailAddress;
    /**
     * The AccountingLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[]
     */
    public $AccountingLine;
    /**
     * The OpenReservationElement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementType[]
     */
    public $OpenReservationElement;
    /**
     * Constructor method for NewReservation.PNRB
     * @uses NewReservation_PNRB::setItinerary()
     * @uses NewReservation_PNRB::setPersonName()
     * @uses NewReservation_PNRB::setGroupName()
     * @uses NewReservation_PNRB::setPhoneNumber()
     * @uses NewReservation_PNRB::setProfile()
     * @uses NewReservation_PNRB::setDkNumber()
     * @uses NewReservation_PNRB::setTicketingInfo()
     * @uses NewReservation_PNRB::setRemark()
     * @uses NewReservation_PNRB::setOtherServiceInformation()
     * @uses NewReservation_PNRB::setSpecialServiceRequest()
     * @uses NewReservation_PNRB::setAncillaryCreateRequest()
     * @uses NewReservation_PNRB::setReceivedFrom()
     * @uses NewReservation_PNRB::setCustomEntry()
     * @uses NewReservation_PNRB::setEmailAddress()
     * @uses NewReservation_PNRB::setAccountingLine()
     * @uses NewReservation_PNRB::setOpenReservationElement()
     * @param \Sabre\UpdateReservation\StructType\Itinerary $itinerary
     * @param \Sabre\UpdateReservation\StructType\TravelerName[] $personName
     * @param \Sabre\UpdateReservation\StructType\GroupName $groupName
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB[] $phoneNumber
     * @param \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB[] $profile
     * @param \Sabre\UpdateReservation\StructType\DKNumber_PNRB $dkNumber
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfo
     * @param \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[] $remark
     * @param \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB[] $otherServiceInformation
     * @param \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB[] $specialServiceRequest
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB[] $ancillaryCreateRequest
     * @param \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom
     * @param string $customEntry
     * @param \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[] $emailAddress
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB[] $accountingLine
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType[] $openReservationElement
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Itinerary $itinerary = null, array $personName = array(), \Sabre\UpdateReservation\StructType\GroupName $groupName = null, array $phoneNumber = array(), array $profile = array(), \Sabre\UpdateReservation\StructType\DKNumber_PNRB $dkNumber = null, \Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfo = null, array $remark = array(), array $otherServiceInformation = array(), array $specialServiceRequest = array(), array $ancillaryCreateRequest = array(), \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom = null, $customEntry = null, array $emailAddress = array(), array $accountingLine = array(), array $openReservationElement = array())
    {
        $this
            ->setItinerary($itinerary)
            ->setPersonName($personName)
            ->setGroupName($groupName)
            ->setPhoneNumber($phoneNumber)
            ->setProfile($profile)
            ->setDkNumber($dkNumber)
            ->setTicketingInfo($ticketingInfo)
            ->setRemark($remark)
            ->setOtherServiceInformation($otherServiceInformation)
            ->setSpecialServiceRequest($specialServiceRequest)
            ->setAncillaryCreateRequest($ancillaryCreateRequest)
            ->setReceivedFrom($receivedFrom)
            ->setCustomEntry($customEntry)
            ->setEmailAddress($emailAddress)
            ->setAccountingLine($accountingLine)
            ->setOpenReservationElement($openReservationElement);
    }
    /**
     * Get Itinerary value
     * @return \Sabre\UpdateReservation\StructType\Itinerary|null
     */
    public function getItinerary()
    {
        return $this->Itinerary;
    }
    /**
     * Set Itinerary value
     * @param \Sabre\UpdateReservation\StructType\Itinerary $itinerary
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setItinerary(\Sabre\UpdateReservation\StructType\Itinerary $itinerary = null)
    {
        $this->Itinerary = $itinerary;
        return $this;
    }
    /**
     * Get PersonName value
     * @return \Sabre\UpdateReservation\StructType\TravelerName[]|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TravelerName[] $personName
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setPersonName(array $personName = array())
    {
        foreach ($personName as $newReservation_PNRBPersonNameItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBPersonNameItem instanceof \Sabre\UpdateReservation\StructType\TravelerName) {
                throw new \InvalidArgumentException(sprintf('The PersonName property can only contain items of \Sabre\UpdateReservation\StructType\TravelerName, "%s" given', is_object($newReservation_PNRBPersonNameItem) ? get_class($newReservation_PNRBPersonNameItem) : gettype($newReservation_PNRBPersonNameItem)), __LINE__);
            }
        }
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Add item to PersonName value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TravelerName $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToPersonName(\Sabre\UpdateReservation\StructType\TravelerName $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TravelerName) {
            throw new \InvalidArgumentException(sprintf('The PersonName property can only contain items of \Sabre\UpdateReservation\StructType\TravelerName, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PersonName[] = $item;
        return $this;
    }
    /**
     * Get GroupName value
     * @return \Sabre\UpdateReservation\StructType\GroupName|null
     */
    public function getGroupName()
    {
        return $this->GroupName;
    }
    /**
     * Set GroupName value
     * @param \Sabre\UpdateReservation\StructType\GroupName $groupName
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setGroupName(\Sabre\UpdateReservation\StructType\GroupName $groupName = null)
    {
        $this->GroupName = $groupName;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB[]|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB[] $phoneNumber
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setPhoneNumber(array $phoneNumber = array())
    {
        foreach ($phoneNumber as $newReservation_PNRBPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBPhoneNumberItem instanceof \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB, "%s" given', is_object($newReservation_PNRBPhoneNumberItem) ? get_class($newReservation_PNRBPhoneNumberItem) : gettype($newReservation_PNRBPhoneNumberItem)), __LINE__);
            }
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToPhoneNumber(\Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of \Sabre\UpdateReservation\StructType\PhoneNumberUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        return $this;
    }
    /**
     * Get Profile value
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB[]|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB[] $profile
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setProfile(array $profile = array())
    {
        foreach ($profile as $newReservation_PNRBProfileItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBProfileItem instanceof \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB, "%s" given', is_object($newReservation_PNRBProfileItem) ? get_class($newReservation_PNRBProfileItem) : gettype($newReservation_PNRBProfileItem)), __LINE__);
            }
        }
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Add item to Profile value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToProfile(\Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Profile[] = $item;
        return $this;
    }
    /**
     * Get DkNumber value
     * @return \Sabre\UpdateReservation\StructType\DKNumber_PNRB|null
     */
    public function getDkNumber()
    {
        return $this->DkNumber;
    }
    /**
     * Set DkNumber value
     * @param \Sabre\UpdateReservation\StructType\DKNumber_PNRB $dkNumber
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setDkNumber(\Sabre\UpdateReservation\StructType\DKNumber_PNRB $dkNumber = null)
    {
        $this->DkNumber = $dkNumber;
        return $this;
    }
    /**
     * Get TicketingInfo value
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo|null
     */
    public function getTicketingInfo()
    {
        return $this->TicketingInfo;
    }
    /**
     * Set TicketingInfo value
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfo
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setTicketingInfo(\Sabre\UpdateReservation\StructType\TicketingInfo $ticketingInfo = null)
    {
        $this->TicketingInfo = $ticketingInfo;
        return $this;
    }
    /**
     * Get Remark value
     * @return \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB[] $remark
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $newReservation_PNRBRemarkItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBRemarkItem instanceof \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB, "%s" given', is_object($newReservation_PNRBRemarkItem) ? get_class($newReservation_PNRBRemarkItem) : gettype($newReservation_PNRBRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToRemark(\Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Sabre\UpdateReservation\StructType\RemarkUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setOtherServiceInformation(array $otherServiceInformation = array())
    {
        foreach ($otherServiceInformation as $newReservation_PNRBOtherServiceInformationItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBOtherServiceInformationItem instanceof \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB) {
                throw new \InvalidArgumentException(sprintf('The OtherServiceInformation property can only contain items of \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB, "%s" given', is_object($newReservation_PNRBOtherServiceInformationItem) ? get_class($newReservation_PNRBOtherServiceInformationItem) : gettype($newReservation_PNRBOtherServiceInformationItem)), __LINE__);
            }
        }
        $this->OtherServiceInformation = $otherServiceInformation;
        return $this;
    }
    /**
     * Add item to OtherServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OtherServiceInformation_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
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
     * Get SpecialServiceRequest value
     * @return \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB[]|null
     */
    public function getSpecialServiceRequest()
    {
        return $this->SpecialServiceRequest;
    }
    /**
     * Set SpecialServiceRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB[] $specialServiceRequest
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setSpecialServiceRequest(array $specialServiceRequest = array())
    {
        foreach ($specialServiceRequest as $newReservation_PNRBSpecialServiceRequestItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBSpecialServiceRequestItem instanceof \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The SpecialServiceRequest property can only contain items of \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB, "%s" given', is_object($newReservation_PNRBSpecialServiceRequestItem) ? get_class($newReservation_PNRBSpecialServiceRequestItem) : gettype($newReservation_PNRBSpecialServiceRequestItem)), __LINE__);
            }
        }
        $this->SpecialServiceRequest = $specialServiceRequest;
        return $this;
    }
    /**
     * Add item to SpecialServiceRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToSpecialServiceRequest(\Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The SpecialServiceRequest property can only contain items of \Sabre\UpdateReservation\StructType\SpecialServiceRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServiceRequest[] = $item;
        return $this;
    }
    /**
     * Get AncillaryCreateRequest value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB[]|null
     */
    public function getAncillaryCreateRequest()
    {
        return $this->AncillaryCreateRequest;
    }
    /**
     * Set AncillaryCreateRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB[] $ancillaryCreateRequest
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setAncillaryCreateRequest(array $ancillaryCreateRequest = array())
    {
        foreach ($ancillaryCreateRequest as $newReservation_PNRBAncillaryCreateRequestItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBAncillaryCreateRequestItem instanceof \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AncillaryCreateRequest property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB, "%s" given', is_object($newReservation_PNRBAncillaryCreateRequestItem) ? get_class($newReservation_PNRBAncillaryCreateRequestItem) : gettype($newReservation_PNRBAncillaryCreateRequestItem)), __LINE__);
            }
        }
        $this->AncillaryCreateRequest = $ancillaryCreateRequest;
        return $this;
    }
    /**
     * Add item to AncillaryCreateRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToAncillaryCreateRequest(\Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The AncillaryCreateRequest property can only contain items of \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AncillaryCreateRequest[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setReceivedFrom(\Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom = null)
    {
        $this->ReceivedFrom = $receivedFrom;
        return $this;
    }
    /**
     * Get CustomEntry value
     * @return string|null
     */
    public function getCustomEntry()
    {
        return $this->CustomEntry;
    }
    /**
     * Set CustomEntry value
     * @param string $customEntry
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setCustomEntry($customEntry = null)
    {
        // validation for constraint: string
        if (!is_null($customEntry) && !is_string($customEntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customEntry)), __LINE__);
        }
        $this->CustomEntry = $customEntry;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[]|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB[] $emailAddress
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setEmailAddress(array $emailAddress = array())
    {
        foreach ($emailAddress as $newReservation_PNRBEmailAddressItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBEmailAddressItem instanceof \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB) {
                throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB, "%s" given', is_object($newReservation_PNRBEmailAddressItem) ? get_class($newReservation_PNRBEmailAddressItem) : gettype($newReservation_PNRBEmailAddressItem)), __LINE__);
            }
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Add item to EmailAddress value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToEmailAddress(\Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB) {
            throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddressUpdate_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailAddress[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setAccountingLine(array $accountingLine = array())
    {
        foreach ($accountingLine as $newReservation_PNRBAccountingLineItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBAccountingLineItem instanceof \Sabre\UpdateReservation\StructType\AccountingLine_PNRB) {
                throw new \InvalidArgumentException(sprintf('The AccountingLine property can only contain items of \Sabre\UpdateReservation\StructType\AccountingLine_PNRB, "%s" given', is_object($newReservation_PNRBAccountingLineItem) ? get_class($newReservation_PNRBAccountingLineItem) : gettype($newReservation_PNRBAccountingLineItem)), __LINE__);
            }
        }
        $this->AccountingLine = $accountingLine;
        return $this;
    }
    /**
     * Add item to AccountingLine value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountingLine_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
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
     * Get OpenReservationElement value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementType[]|null
     */
    public function getOpenReservationElement()
    {
        return $this->OpenReservationElement;
    }
    /**
     * Set OpenReservationElement value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType[] $openReservationElement
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function setOpenReservationElement(array $openReservationElement = array())
    {
        foreach ($openReservationElement as $newReservation_PNRBOpenReservationElementItem) {
            // validation for constraint: itemType
            if (!$newReservation_PNRBOpenReservationElementItem instanceof \Sabre\UpdateReservation\StructType\OpenReservationElementType) {
                throw new \InvalidArgumentException(sprintf('The OpenReservationElement property can only contain items of \Sabre\UpdateReservation\StructType\OpenReservationElementType, "%s" given', is_object($newReservation_PNRBOpenReservationElementItem) ? get_class($newReservation_PNRBOpenReservationElementItem) : gettype($newReservation_PNRBOpenReservationElementItem)), __LINE__);
            }
        }
        $this->OpenReservationElement = $openReservationElement;
        return $this;
    }
    /**
     * Add item to OpenReservationElement value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementType $item
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
     */
    public function addToOpenReservationElement(\Sabre\UpdateReservation\StructType\OpenReservationElementType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OpenReservationElementType) {
            throw new \InvalidArgumentException(sprintf('The OpenReservationElement property can only contain items of \Sabre\UpdateReservation\StructType\OpenReservationElementType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OpenReservationElement[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NewReservation_PNRB
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
