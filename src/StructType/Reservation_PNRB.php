<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reservation.PNRB StructType
 * @subpackage Structs
 */
class Reservation_PNRB extends AbstractStructBase
{
    /**
     * The BookingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BookingDetails_PNRB
     */
    public $BookingDetails;
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\POS_Type_PNRB
     */
    public $POS;
    /**
     * The PassengerReservation
     * @var \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB
     */
    public $PassengerReservation;
    /**
     * The BSGReservation
     * @var \Sabre\UpdateReservation\StructType\BSGReservation_PNRB
     */
    public $BSGReservation;
    /**
     * The ReservationValueScore
     * Meta informations extracted from the WSDL
     * - documentation: Reservation value score
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CV_Score
     */
    public $ReservationValueScore;
    /**
     * The DKNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DKNumbers_PNRB
     */
    public $DKNumbers;
    /**
     * The CorporatedIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB
     */
    public $CorporatedIDs;
    /**
     * The ReceivedFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB
     */
    public $ReceivedFrom;
    /**
     * The Addresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Addresses_PNRB
     */
    public $Addresses;
    /**
     * The PhoneNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB
     */
    public $PhoneNumbers;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public $Remarks;
    /**
     * The EmailAddresses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB
     */
    public $EmailAddresses;
    /**
     * The AccountingLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingLines_PNRB
     */
    public $AccountingLines;
    /**
     * The GenericSpecialRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[]
     */
    public $GenericSpecialRequests;
    /**
     * The FileInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FileInfo_PNRB
     */
    public $FileInfo;
    /**
     * The Actions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Actions_PNRB
     */
    public $Actions;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Profiles_PNRB
     */
    public $Profiles;
    /**
     * The AssociationMatrices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB
     */
    public $AssociationMatrices;
    /**
     * The ReservationExtensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ReservationExtensions
     */
    public $ReservationExtensions;
    /**
     * The History
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\History
     */
    public $History;
    /**
     * The OpenReservationElements
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementsType
     */
    public $OpenReservationElements;
    /**
     * The numberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of name fields in the PNR. Example "6" | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - use: optional
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $numberInParty;
    /**
     * The numberOfInfants
     * Meta informations extracted from the WSDL
     * - documentation: Number Infant Name fields in the PNR. Example "1"
     * - use: optional
     * @var int
     */
    public $numberOfInfants;
    /**
     * The NumberInSegment
     * Meta informations extracted from the WSDL
     * - documentation: Number Infant Name fields in the PNR. Example "5"
     * - use: optional
     * @var int
     */
    public $NumberInSegment;
    /**
     * The hostOperatedCodeShare
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $hostOperatedCodeShare;
    /**
     * The hostMarketedCodeShare
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $hostMarketedCodeShare;
    /**
     * The isTripPNR
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $isTripPNR;
    /**
     * The isMultiCarrierPlatform
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $isMultiCarrierPlatform;
    /**
     * The isDirectConnectPlatformBooking
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if Direct Connect Platform (DCP) booking, created by GSA or ownership changed to DCP by RES agent.
     * - use: optional
     * @var bool
     */
    public $isDirectConnectPlatformBooking;
    /**
     * Constructor method for Reservation.PNRB
     * @uses Reservation_PNRB::setBookingDetails()
     * @uses Reservation_PNRB::setPOS()
     * @uses Reservation_PNRB::setPassengerReservation()
     * @uses Reservation_PNRB::setBSGReservation()
     * @uses Reservation_PNRB::setReservationValueScore()
     * @uses Reservation_PNRB::setDKNumbers()
     * @uses Reservation_PNRB::setCorporatedIDs()
     * @uses Reservation_PNRB::setReceivedFrom()
     * @uses Reservation_PNRB::setAddresses()
     * @uses Reservation_PNRB::setPhoneNumbers()
     * @uses Reservation_PNRB::setRemarks()
     * @uses Reservation_PNRB::setEmailAddresses()
     * @uses Reservation_PNRB::setAccountingLines()
     * @uses Reservation_PNRB::setGenericSpecialRequests()
     * @uses Reservation_PNRB::setFileInfo()
     * @uses Reservation_PNRB::setActions()
     * @uses Reservation_PNRB::setProfiles()
     * @uses Reservation_PNRB::setAssociationMatrices()
     * @uses Reservation_PNRB::setReservationExtensions()
     * @uses Reservation_PNRB::setHistory()
     * @uses Reservation_PNRB::setOpenReservationElements()
     * @uses Reservation_PNRB::setNumberInParty()
     * @uses Reservation_PNRB::setNumberOfInfants()
     * @uses Reservation_PNRB::setNumberInSegment()
     * @uses Reservation_PNRB::setHostOperatedCodeShare()
     * @uses Reservation_PNRB::setHostMarketedCodeShare()
     * @uses Reservation_PNRB::setIsTripPNR()
     * @uses Reservation_PNRB::setIsMultiCarrierPlatform()
     * @uses Reservation_PNRB::setIsDirectConnectPlatformBooking()
     * @param \Sabre\UpdateReservation\StructType\BookingDetails_PNRB $bookingDetails
     * @param \Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS
     * @param \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB $passengerReservation
     * @param \Sabre\UpdateReservation\StructType\BSGReservation_PNRB $bSGReservation
     * @param \Sabre\UpdateReservation\StructType\CV_Score $reservationValueScore
     * @param \Sabre\UpdateReservation\StructType\DKNumbers_PNRB $dKNumbers
     * @param \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB $corporatedIDs
     * @param \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom
     * @param \Sabre\UpdateReservation\StructType\Addresses_PNRB $addresses
     * @param \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers
     * @param \Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks
     * @param \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB $emailAddresses
     * @param \Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[] $genericSpecialRequests
     * @param \Sabre\UpdateReservation\StructType\FileInfo_PNRB $fileInfo
     * @param \Sabre\UpdateReservation\StructType\Actions_PNRB $actions
     * @param \Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB $associationMatrices
     * @param \Sabre\UpdateReservation\StructType\ReservationExtensions $reservationExtensions
     * @param \Sabre\UpdateReservation\StructType\History $history
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements
     * @param int $numberInParty
     * @param int $numberOfInfants
     * @param int $numberInSegment
     * @param bool $hostOperatedCodeShare
     * @param bool $hostMarketedCodeShare
     * @param bool $isTripPNR
     * @param bool $isMultiCarrierPlatform
     * @param bool $isDirectConnectPlatformBooking
     */
    public function __construct(\Sabre\UpdateReservation\StructType\BookingDetails_PNRB $bookingDetails = null, \Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS = null, \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB $passengerReservation = null, \Sabre\UpdateReservation\StructType\BSGReservation_PNRB $bSGReservation = null, \Sabre\UpdateReservation\StructType\CV_Score $reservationValueScore = null, \Sabre\UpdateReservation\StructType\DKNumbers_PNRB $dKNumbers = null, \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB $corporatedIDs = null, \Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom = null, \Sabre\UpdateReservation\StructType\Addresses_PNRB $addresses = null, \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers = null, \Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks = null, \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB $emailAddresses = null, \Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines = null, array $genericSpecialRequests = array(), \Sabre\UpdateReservation\StructType\FileInfo_PNRB $fileInfo = null, \Sabre\UpdateReservation\StructType\Actions_PNRB $actions = null, \Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles = null, \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB $associationMatrices = null, \Sabre\UpdateReservation\StructType\ReservationExtensions $reservationExtensions = null, \Sabre\UpdateReservation\StructType\History $history = null, \Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements = null, $numberInParty = null, $numberOfInfants = null, $numberInSegment = null, $hostOperatedCodeShare = null, $hostMarketedCodeShare = null, $isTripPNR = null, $isMultiCarrierPlatform = null, $isDirectConnectPlatformBooking = null)
    {
        $this
            ->setBookingDetails($bookingDetails)
            ->setPOS($pOS)
            ->setPassengerReservation($passengerReservation)
            ->setBSGReservation($bSGReservation)
            ->setReservationValueScore($reservationValueScore)
            ->setDKNumbers($dKNumbers)
            ->setCorporatedIDs($corporatedIDs)
            ->setReceivedFrom($receivedFrom)
            ->setAddresses($addresses)
            ->setPhoneNumbers($phoneNumbers)
            ->setRemarks($remarks)
            ->setEmailAddresses($emailAddresses)
            ->setAccountingLines($accountingLines)
            ->setGenericSpecialRequests($genericSpecialRequests)
            ->setFileInfo($fileInfo)
            ->setActions($actions)
            ->setProfiles($profiles)
            ->setAssociationMatrices($associationMatrices)
            ->setReservationExtensions($reservationExtensions)
            ->setHistory($history)
            ->setOpenReservationElements($openReservationElements)
            ->setNumberInParty($numberInParty)
            ->setNumberOfInfants($numberOfInfants)
            ->setNumberInSegment($numberInSegment)
            ->setHostOperatedCodeShare($hostOperatedCodeShare)
            ->setHostMarketedCodeShare($hostMarketedCodeShare)
            ->setIsTripPNR($isTripPNR)
            ->setIsMultiCarrierPlatform($isMultiCarrierPlatform)
            ->setIsDirectConnectPlatformBooking($isDirectConnectPlatformBooking);
    }
    /**
     * Get BookingDetails value
     * @return \Sabre\UpdateReservation\StructType\BookingDetails_PNRB|null
     */
    public function getBookingDetails()
    {
        return $this->BookingDetails;
    }
    /**
     * Set BookingDetails value
     * @param \Sabre\UpdateReservation\StructType\BookingDetails_PNRB $bookingDetails
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setBookingDetails(\Sabre\UpdateReservation\StructType\BookingDetails_PNRB $bookingDetails = null)
    {
        $this->BookingDetails = $bookingDetails;
        return $this;
    }
    /**
     * Get POS value
     * @return \Sabre\UpdateReservation\StructType\POS_Type_PNRB|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setPOS(\Sabre\UpdateReservation\StructType\POS_Type_PNRB $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get PassengerReservation value
     * @return \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB|null
     */
    public function getPassengerReservation()
    {
        return $this->PassengerReservation;
    }
    /**
     * Set PassengerReservation value
     * @param \Sabre\UpdateReservation\StructType\PassengerReservation_PNRB $passengerReservation
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setPassengerReservation(\Sabre\UpdateReservation\StructType\PassengerReservation_PNRB $passengerReservation = null)
    {
        $this->PassengerReservation = $passengerReservation;
        return $this;
    }
    /**
     * Get BSGReservation value
     * @return \Sabre\UpdateReservation\StructType\BSGReservation_PNRB|null
     */
    public function getBSGReservation()
    {
        return $this->BSGReservation;
    }
    /**
     * Set BSGReservation value
     * @param \Sabre\UpdateReservation\StructType\BSGReservation_PNRB $bSGReservation
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setBSGReservation(\Sabre\UpdateReservation\StructType\BSGReservation_PNRB $bSGReservation = null)
    {
        $this->BSGReservation = $bSGReservation;
        return $this;
    }
    /**
     * Get ReservationValueScore value
     * @return \Sabre\UpdateReservation\StructType\CV_Score|null
     */
    public function getReservationValueScore()
    {
        return $this->ReservationValueScore;
    }
    /**
     * Set ReservationValueScore value
     * @param \Sabre\UpdateReservation\StructType\CV_Score $reservationValueScore
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setReservationValueScore(\Sabre\UpdateReservation\StructType\CV_Score $reservationValueScore = null)
    {
        $this->ReservationValueScore = $reservationValueScore;
        return $this;
    }
    /**
     * Get DKNumbers value
     * @return \Sabre\UpdateReservation\StructType\DKNumbers_PNRB|null
     */
    public function getDKNumbers()
    {
        return $this->DKNumbers;
    }
    /**
     * Set DKNumbers value
     * @param \Sabre\UpdateReservation\StructType\DKNumbers_PNRB $dKNumbers
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setDKNumbers(\Sabre\UpdateReservation\StructType\DKNumbers_PNRB $dKNumbers = null)
    {
        $this->DKNumbers = $dKNumbers;
        return $this;
    }
    /**
     * Get CorporatedIDs value
     * @return \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB|null
     */
    public function getCorporatedIDs()
    {
        return $this->CorporatedIDs;
    }
    /**
     * Set CorporatedIDs value
     * @param \Sabre\UpdateReservation\StructType\CorporateIDs_PNRB $corporatedIDs
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setCorporatedIDs(\Sabre\UpdateReservation\StructType\CorporateIDs_PNRB $corporatedIDs = null)
    {
        $this->CorporatedIDs = $corporatedIDs;
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
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setReceivedFrom(\Sabre\UpdateReservation\StructType\ReceivedFrom_PNRB $receivedFrom = null)
    {
        $this->ReceivedFrom = $receivedFrom;
        return $this;
    }
    /**
     * Get Addresses value
     * @return \Sabre\UpdateReservation\StructType\Addresses_PNRB|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \Sabre\UpdateReservation\StructType\Addresses_PNRB $addresses
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setAddresses(\Sabre\UpdateReservation\StructType\Addresses_PNRB $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB|null
     */
    public function getPhoneNumbers()
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setPhoneNumbers(\Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Sabre\UpdateReservation\StructType\Remarks_PNRB|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setRemarks(\Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks = null)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Sabre\UpdateReservation\StructType\EmailAddresses_PNRB $emailAddresses
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setEmailAddresses(\Sabre\UpdateReservation\StructType\EmailAddresses_PNRB $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get AccountingLines value
     * @return \Sabre\UpdateReservation\StructType\AccountingLines_PNRB|null
     */
    public function getAccountingLines()
    {
        return $this->AccountingLines;
    }
    /**
     * Set AccountingLines value
     * @param \Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setAccountingLines(\Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines = null)
    {
        $this->AccountingLines = $accountingLines;
        return $this;
    }
    /**
     * Get GenericSpecialRequests value
     * @return \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[]|null
     */
    public function getGenericSpecialRequests()
    {
        return $this->GenericSpecialRequests;
    }
    /**
     * Set GenericSpecialRequests value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB[] $genericSpecialRequests
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setGenericSpecialRequests(array $genericSpecialRequests = array())
    {
        foreach ($genericSpecialRequests as $reservation_PNRBGenericSpecialRequestsItem) {
            // validation for constraint: itemType
            if (!$reservation_PNRBGenericSpecialRequestsItem instanceof \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB) {
                throw new \InvalidArgumentException(sprintf('The GenericSpecialRequests property can only contain items of \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB, "%s" given', is_object($reservation_PNRBGenericSpecialRequestsItem) ? get_class($reservation_PNRBGenericSpecialRequestsItem) : gettype($reservation_PNRBGenericSpecialRequestsItem)), __LINE__);
            }
        }
        $this->GenericSpecialRequests = $genericSpecialRequests;
        return $this;
    }
    /**
     * Add item to GenericSpecialRequests value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function addToGenericSpecialRequests(\Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB) {
            throw new \InvalidArgumentException(sprintf('The GenericSpecialRequests property can only contain items of \Sabre\UpdateReservation\StructType\GenericSpecialRequest_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GenericSpecialRequests[] = $item;
        return $this;
    }
    /**
     * Get FileInfo value
     * @return \Sabre\UpdateReservation\StructType\FileInfo_PNRB|null
     */
    public function getFileInfo()
    {
        return $this->FileInfo;
    }
    /**
     * Set FileInfo value
     * @param \Sabre\UpdateReservation\StructType\FileInfo_PNRB $fileInfo
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setFileInfo(\Sabre\UpdateReservation\StructType\FileInfo_PNRB $fileInfo = null)
    {
        $this->FileInfo = $fileInfo;
        return $this;
    }
    /**
     * Get Actions value
     * @return \Sabre\UpdateReservation\StructType\Actions_PNRB|null
     */
    public function getActions()
    {
        return $this->Actions;
    }
    /**
     * Set Actions value
     * @param \Sabre\UpdateReservation\StructType\Actions_PNRB $actions
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setActions(\Sabre\UpdateReservation\StructType\Actions_PNRB $actions = null)
    {
        $this->Actions = $actions;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \Sabre\UpdateReservation\StructType\Profiles_PNRB|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setProfiles(\Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get AssociationMatrices value
     * @return \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB|null
     */
    public function getAssociationMatrices()
    {
        return $this->AssociationMatrices;
    }
    /**
     * Set AssociationMatrices value
     * @param \Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB $associationMatrices
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setAssociationMatrices(\Sabre\UpdateReservation\StructType\AssociationMatrices_PNRB $associationMatrices = null)
    {
        $this->AssociationMatrices = $associationMatrices;
        return $this;
    }
    /**
     * Get ReservationExtensions value
     * @return \Sabre\UpdateReservation\StructType\ReservationExtensions|null
     */
    public function getReservationExtensions()
    {
        return $this->ReservationExtensions;
    }
    /**
     * Set ReservationExtensions value
     * @param \Sabre\UpdateReservation\StructType\ReservationExtensions $reservationExtensions
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setReservationExtensions(\Sabre\UpdateReservation\StructType\ReservationExtensions $reservationExtensions = null)
    {
        $this->ReservationExtensions = $reservationExtensions;
        return $this;
    }
    /**
     * Get History value
     * @return \Sabre\UpdateReservation\StructType\History|null
     */
    public function getHistory()
    {
        return $this->History;
    }
    /**
     * Set History value
     * @param \Sabre\UpdateReservation\StructType\History $history
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setHistory(\Sabre\UpdateReservation\StructType\History $history = null)
    {
        $this->History = $history;
        return $this;
    }
    /**
     * Get OpenReservationElements value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementsType|null
     */
    public function getOpenReservationElements()
    {
        return $this->OpenReservationElements;
    }
    /**
     * Set OpenReservationElements value
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setOpenReservationElements(\Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements = null)
    {
        $this->OpenReservationElements = $openReservationElements;
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
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
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
     * Get numberOfInfants value
     * @return int|null
     */
    public function getNumberOfInfants()
    {
        return $this->numberOfInfants;
    }
    /**
     * Set numberOfInfants value
     * @param int $numberOfInfants
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setNumberOfInfants($numberOfInfants = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfInfants) && !is_numeric($numberOfInfants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfInfants)), __LINE__);
        }
        $this->numberOfInfants = $numberOfInfants;
        return $this;
    }
    /**
     * Get NumberInSegment value
     * @return int|null
     */
    public function getNumberInSegment()
    {
        return $this->NumberInSegment;
    }
    /**
     * Set NumberInSegment value
     * @param int $numberInSegment
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setNumberInSegment($numberInSegment = null)
    {
        // validation for constraint: int
        if (!is_null($numberInSegment) && !is_numeric($numberInSegment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInSegment)), __LINE__);
        }
        $this->NumberInSegment = $numberInSegment;
        return $this;
    }
    /**
     * Get hostOperatedCodeShare value
     * @return bool|null
     */
    public function getHostOperatedCodeShare()
    {
        return $this->hostOperatedCodeShare;
    }
    /**
     * Set hostOperatedCodeShare value
     * @param bool $hostOperatedCodeShare
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setHostOperatedCodeShare($hostOperatedCodeShare = null)
    {
        // validation for constraint: boolean
        if (!is_null($hostOperatedCodeShare) && !is_bool($hostOperatedCodeShare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hostOperatedCodeShare)), __LINE__);
        }
        $this->hostOperatedCodeShare = $hostOperatedCodeShare;
        return $this;
    }
    /**
     * Get hostMarketedCodeShare value
     * @return bool|null
     */
    public function getHostMarketedCodeShare()
    {
        return $this->hostMarketedCodeShare;
    }
    /**
     * Set hostMarketedCodeShare value
     * @param bool $hostMarketedCodeShare
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setHostMarketedCodeShare($hostMarketedCodeShare = null)
    {
        // validation for constraint: boolean
        if (!is_null($hostMarketedCodeShare) && !is_bool($hostMarketedCodeShare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hostMarketedCodeShare)), __LINE__);
        }
        $this->hostMarketedCodeShare = $hostMarketedCodeShare;
        return $this;
    }
    /**
     * Get isTripPNR value
     * @return bool|null
     */
    public function getIsTripPNR()
    {
        return $this->isTripPNR;
    }
    /**
     * Set isTripPNR value
     * @param bool $isTripPNR
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setIsTripPNR($isTripPNR = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTripPNR) && !is_bool($isTripPNR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTripPNR)), __LINE__);
        }
        $this->isTripPNR = $isTripPNR;
        return $this;
    }
    /**
     * Get isMultiCarrierPlatform value
     * @return bool|null
     */
    public function getIsMultiCarrierPlatform()
    {
        return $this->isMultiCarrierPlatform;
    }
    /**
     * Set isMultiCarrierPlatform value
     * @param bool $isMultiCarrierPlatform
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setIsMultiCarrierPlatform($isMultiCarrierPlatform = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMultiCarrierPlatform) && !is_bool($isMultiCarrierPlatform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMultiCarrierPlatform)), __LINE__);
        }
        $this->isMultiCarrierPlatform = $isMultiCarrierPlatform;
        return $this;
    }
    /**
     * Get isDirectConnectPlatformBooking value
     * @return bool|null
     */
    public function getIsDirectConnectPlatformBooking()
    {
        return $this->isDirectConnectPlatformBooking;
    }
    /**
     * Set isDirectConnectPlatformBooking value
     * @param bool $isDirectConnectPlatformBooking
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
     */
    public function setIsDirectConnectPlatformBooking($isDirectConnectPlatformBooking = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDirectConnectPlatformBooking) && !is_bool($isDirectConnectPlatformBooking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDirectConnectPlatformBooking)), __LINE__);
        }
        $this->isDirectConnectPlatformBooking = $isDirectConnectPlatformBooking;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Reservation_PNRB
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
