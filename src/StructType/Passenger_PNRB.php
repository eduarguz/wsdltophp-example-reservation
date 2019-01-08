<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passenger.PNRB StructType
 * @subpackage Structs
 */
class Passenger_PNRB extends AbstractStructBase
{
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - documentation: LastName. Ex."WOOD"
     * @var string
     */
    public $LastName;
    /**
     * The OriginalLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NativeLanguageValueType
     */
    public $OriginalLastName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The OriginalFirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NativeLanguageValueType
     */
    public $OriginalFirstName;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB[]
     */
    public $FrequentFlyer;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: Email address added to the PNR. Ex."ANNE@MAIL.COM"
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[]
     */
    public $EmailAddress;
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateOfBirth;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Profiles_PNRB
     */
    public $Profiles;
    /**
     * The SpecialRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB
     */
    public $SpecialRequests;
    /**
     * The Seats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Seats_PNRB
     */
    public $Seats;
    /**
     * The PreReservedSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB
     */
    public $PreReservedSeats;
    /**
     * The AccountingLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingLines_PNRB
     */
    public $AccountingLines;
    /**
     * The PassengerProfileID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerProfileID;
    /**
     * The AncillaryServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServices
     */
    public $AncillaryServices;
    /**
     * The OSI
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OSI
     */
    public $OSI;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Remarks_PNRB
     */
    public $Remarks;
    /**
     * The PhoneNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB
     */
    public $PhoneNumbers;
    /**
     * The TicketingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB
     */
    public $TicketingInfo;
    /**
     * The FqtvUpgradeRequests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests
     */
    public $FqtvUpgradeRequests;
    /**
     * The OpenReservationElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementsType
     */
    public $OpenReservationElements;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The nameType
     * Meta informations extracted from the WSDL
     * - documentation: I = Infant, S = Standard
     * @var string
     */
    public $nameType;
    /**
     * The passengerType
     * @var string
     */
    public $passengerType;
    /**
     * The referenceNumber
     * @var string
     */
    public $referenceNumber;
    /**
     * The nameId
     * Meta informations extracted from the WSDL
     * - documentation: Name id. Ex."02.02"
     * @var string
     */
    public $nameId;
    /**
     * The nameAssocId
     * @var string
     */
    public $nameAssocId;
    /**
     * The withInfant
     * Meta informations extracted from the WSDL
     * - documentation: "with infant" True/False indicator. Ex. "TRUE"
     * @var bool
     */
    public $withInfant;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The lang
     * @var string
     */
    public $lang;
    /**
     * The elementId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $elementId;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for Passenger.PNRB
     * @uses Passenger_PNRB::setLastName()
     * @uses Passenger_PNRB::setOriginalLastName()
     * @uses Passenger_PNRB::setFirstName()
     * @uses Passenger_PNRB::setOriginalFirstName()
     * @uses Passenger_PNRB::setTitle()
     * @uses Passenger_PNRB::setFrequentFlyer()
     * @uses Passenger_PNRB::setEmailAddress()
     * @uses Passenger_PNRB::setGender()
     * @uses Passenger_PNRB::setDateOfBirth()
     * @uses Passenger_PNRB::setProfiles()
     * @uses Passenger_PNRB::setSpecialRequests()
     * @uses Passenger_PNRB::setSeats()
     * @uses Passenger_PNRB::setPreReservedSeats()
     * @uses Passenger_PNRB::setAccountingLines()
     * @uses Passenger_PNRB::setPassengerProfileID()
     * @uses Passenger_PNRB::setAncillaryServices()
     * @uses Passenger_PNRB::setOSI()
     * @uses Passenger_PNRB::setRemarks()
     * @uses Passenger_PNRB::setPhoneNumbers()
     * @uses Passenger_PNRB::setTicketingInfo()
     * @uses Passenger_PNRB::setFqtvUpgradeRequests()
     * @uses Passenger_PNRB::setOpenReservationElements()
     * @uses Passenger_PNRB::setId()
     * @uses Passenger_PNRB::setNameType()
     * @uses Passenger_PNRB::setPassengerType()
     * @uses Passenger_PNRB::setReferenceNumber()
     * @uses Passenger_PNRB::setNameId()
     * @uses Passenger_PNRB::setNameAssocId()
     * @uses Passenger_PNRB::setWithInfant()
     * @uses Passenger_PNRB::setOp()
     * @uses Passenger_PNRB::setLang()
     * @uses Passenger_PNRB::setElementId()
     * @uses Passenger_PNRB::setRPH()
     * @param string $lastName
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalLastName
     * @param string $firstName
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalFirstName
     * @param string $title
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB[] $frequentFlyer
     * @param \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[] $emailAddress
     * @param string $gender
     * @param string $dateOfBirth
     * @param \Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles
     * @param \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB $specialRequests
     * @param \Sabre\UpdateReservation\StructType\Seats_PNRB $seats
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @param \Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines
     * @param string $passengerProfileID
     * @param \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices
     * @param \Sabre\UpdateReservation\StructType\OSI $oSI
     * @param \Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks
     * @param \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements
     * @param string $id
     * @param string $nameType
     * @param string $passengerType
     * @param string $referenceNumber
     * @param string $nameId
     * @param string $nameAssocId
     * @param bool $withInfant
     * @param string $op
     * @param string $lang
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct($lastName = null, \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalLastName = null, $firstName = null, \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalFirstName = null, $title = null, array $frequentFlyer = array(), array $emailAddress = array(), $gender = null, $dateOfBirth = null, \Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles = null, \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB $specialRequests = null, \Sabre\UpdateReservation\StructType\Seats_PNRB $seats = null, \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null, \Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines = null, $passengerProfileID = null, \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices = null, \Sabre\UpdateReservation\StructType\OSI $oSI = null, \Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks = null, \Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers = null, \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo = null, \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests = null, \Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements = null, $id = null, $nameType = null, $passengerType = null, $referenceNumber = null, $nameId = null, $nameAssocId = null, $withInfant = null, $op = null, $lang = null, $elementId = null, $rPH = null)
    {
        $this
            ->setLastName($lastName)
            ->setOriginalLastName($originalLastName)
            ->setFirstName($firstName)
            ->setOriginalFirstName($originalFirstName)
            ->setTitle($title)
            ->setFrequentFlyer($frequentFlyer)
            ->setEmailAddress($emailAddress)
            ->setGender($gender)
            ->setDateOfBirth($dateOfBirth)
            ->setProfiles($profiles)
            ->setSpecialRequests($specialRequests)
            ->setSeats($seats)
            ->setPreReservedSeats($preReservedSeats)
            ->setAccountingLines($accountingLines)
            ->setPassengerProfileID($passengerProfileID)
            ->setAncillaryServices($ancillaryServices)
            ->setOSI($oSI)
            ->setRemarks($remarks)
            ->setPhoneNumbers($phoneNumbers)
            ->setTicketingInfo($ticketingInfo)
            ->setFqtvUpgradeRequests($fqtvUpgradeRequests)
            ->setOpenReservationElements($openReservationElements)
            ->setId($id)
            ->setNameType($nameType)
            ->setPassengerType($passengerType)
            ->setReferenceNumber($referenceNumber)
            ->setNameId($nameId)
            ->setNameAssocId($nameAssocId)
            ->setWithInfant($withInfant)
            ->setOp($op)
            ->setLang($lang)
            ->setElementId($elementId)
            ->setRPH($rPH);
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get OriginalLastName value
     * @return \Sabre\UpdateReservation\StructType\NativeLanguageValueType|null
     */
    public function getOriginalLastName()
    {
        return $this->OriginalLastName;
    }
    /**
     * Set OriginalLastName value
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalLastName
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setOriginalLastName(\Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalLastName = null)
    {
        $this->OriginalLastName = $originalLastName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get OriginalFirstName value
     * @return \Sabre\UpdateReservation\StructType\NativeLanguageValueType|null
     */
    public function getOriginalFirstName()
    {
        return $this->OriginalFirstName;
    }
    /**
     * Set OriginalFirstName value
     * @param \Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalFirstName
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setOriginalFirstName(\Sabre\UpdateReservation\StructType\NativeLanguageValueType $originalFirstName = null)
    {
        $this->OriginalFirstName = $originalFirstName;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB[]|null
     */
    public function getFrequentFlyer()
    {
        return $this->FrequentFlyer;
    }
    /**
     * Set FrequentFlyer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB[] $frequentFlyer
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setFrequentFlyer(array $frequentFlyer = array())
    {
        foreach ($frequentFlyer as $passenger_PNRBFrequentFlyerItem) {
            // validation for constraint: itemType
            if (!$passenger_PNRBFrequentFlyerItem instanceof \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB) {
                throw new \InvalidArgumentException(sprintf('The FrequentFlyer property can only contain items of \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB, "%s" given', is_object($passenger_PNRBFrequentFlyerItem) ? get_class($passenger_PNRBFrequentFlyerItem) : gettype($passenger_PNRBFrequentFlyerItem)), __LINE__);
            }
        }
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Add item to FrequentFlyer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function addToFrequentFlyer(\Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB) {
            throw new \InvalidArgumentException(sprintf('The FrequentFlyer property can only contain items of \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FrequentFlyer[] = $item;
        return $this;
    }
    /**
     * Get EmailAddress value
     * @return \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[]|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddress_PNRB[] $emailAddress
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setEmailAddress(array $emailAddress = array())
    {
        foreach ($emailAddress as $passenger_PNRBEmailAddressItem) {
            // validation for constraint: itemType
            if (!$passenger_PNRBEmailAddressItem instanceof \Sabre\UpdateReservation\StructType\EmailAddress_PNRB) {
                throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddress_PNRB, "%s" given', is_object($passenger_PNRBEmailAddressItem) ? get_class($passenger_PNRBEmailAddressItem) : gettype($passenger_PNRBEmailAddressItem)), __LINE__);
            }
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Add item to EmailAddress value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\EmailAddress_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function addToEmailAddress(\Sabre\UpdateReservation\StructType\EmailAddress_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\EmailAddress_PNRB) {
            throw new \InvalidArgumentException(sprintf('The EmailAddress property can only contain items of \Sabre\UpdateReservation\StructType\EmailAddress_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailAddress[] = $item;
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
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
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setProfiles(\Sabre\UpdateReservation\StructType\Profiles_PNRB $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get SpecialRequests value
     * @return \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB|null
     */
    public function getSpecialRequests()
    {
        return $this->SpecialRequests;
    }
    /**
     * Set SpecialRequests value
     * @param \Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB $specialRequests
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setSpecialRequests(\Sabre\UpdateReservation\StructType\NameAssociatedSpecialRequests_PNRB $specialRequests = null)
    {
        $this->SpecialRequests = $specialRequests;
        return $this;
    }
    /**
     * Get Seats value
     * @return \Sabre\UpdateReservation\StructType\Seats_PNRB|null
     */
    public function getSeats()
    {
        return $this->Seats;
    }
    /**
     * Set Seats value
     * @param \Sabre\UpdateReservation\StructType\Seats_PNRB $seats
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setSeats(\Sabre\UpdateReservation\StructType\Seats_PNRB $seats = null)
    {
        $this->Seats = $seats;
        return $this;
    }
    /**
     * Get PreReservedSeats value
     * @return \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB|null
     */
    public function getPreReservedSeats()
    {
        return $this->PreReservedSeats;
    }
    /**
     * Set PreReservedSeats value
     * @param \Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setPreReservedSeats(\Sabre\UpdateReservation\StructType\PreReservedSeats_PNRB $preReservedSeats = null)
    {
        $this->PreReservedSeats = $preReservedSeats;
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
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setAccountingLines(\Sabre\UpdateReservation\StructType\AccountingLines_PNRB $accountingLines = null)
    {
        $this->AccountingLines = $accountingLines;
        return $this;
    }
    /**
     * Get PassengerProfileID value
     * @return string|null
     */
    public function getPassengerProfileID()
    {
        return $this->PassengerProfileID;
    }
    /**
     * Set PassengerProfileID value
     * @param string $passengerProfileID
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setPassengerProfileID($passengerProfileID = null)
    {
        // validation for constraint: string
        if (!is_null($passengerProfileID) && !is_string($passengerProfileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerProfileID)), __LINE__);
        }
        $this->PassengerProfileID = $passengerProfileID;
        return $this;
    }
    /**
     * Get AncillaryServices value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServices|null
     */
    public function getAncillaryServices()
    {
        return $this->AncillaryServices;
    }
    /**
     * Set AncillaryServices value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setAncillaryServices(\Sabre\UpdateReservation\StructType\AncillaryServices $ancillaryServices = null)
    {
        $this->AncillaryServices = $ancillaryServices;
        return $this;
    }
    /**
     * Get OSI value
     * @return \Sabre\UpdateReservation\StructType\OSI|null
     */
    public function getOSI()
    {
        return $this->OSI;
    }
    /**
     * Set OSI value
     * @param \Sabre\UpdateReservation\StructType\OSI $oSI
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setOSI(\Sabre\UpdateReservation\StructType\OSI $oSI = null)
    {
        $this->OSI = $oSI;
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
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setRemarks(\Sabre\UpdateReservation\StructType\Remarks_PNRB $remarks = null)
    {
        $this->Remarks = $remarks;
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
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setPhoneNumbers(\Sabre\UpdateReservation\StructType\PhoneNumbers_PNRB $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get TicketingInfo value
     * @return \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB|null
     */
    public function getTicketingInfo()
    {
        return $this->TicketingInfo;
    }
    /**
     * Set TicketingInfo value
     * @param \Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setTicketingInfo(\Sabre\UpdateReservation\StructType\TicketingInfo_PNRB $ticketingInfo = null)
    {
        $this->TicketingInfo = $ticketingInfo;
        return $this;
    }
    /**
     * Get FqtvUpgradeRequests value
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests|null
     */
    public function getFqtvUpgradeRequests()
    {
        return $this->FqtvUpgradeRequests;
    }
    /**
     * Set FqtvUpgradeRequests value
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setFqtvUpgradeRequests(\Sabre\UpdateReservation\StructType\FqtvUpgradeRequests $fqtvUpgradeRequests = null)
    {
        $this->FqtvUpgradeRequests = $fqtvUpgradeRequests;
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
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setOpenReservationElements(\Sabre\UpdateReservation\StructType\OpenReservationElementsType $openReservationElements = null)
    {
        $this->OpenReservationElements = $openReservationElements;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get nameType value
     * @return string|null
     */
    public function getNameType()
    {
        return $this->nameType;
    }
    /**
     * Set nameType value
     * @uses \Sabre\UpdateReservation\EnumType\PassengerType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PassengerType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nameType
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setNameType($nameType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PassengerType_PNRB::valueIsValid($nameType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $nameType, implode(', ', \Sabre\UpdateReservation\EnumType\PassengerType_PNRB::getValidValues())), __LINE__);
        }
        $this->nameType = $nameType;
        return $this;
    }
    /**
     * Get passengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }
    /**
     * Set passengerType value
     * @param string $passengerType
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerType)), __LINE__);
        }
        $this->passengerType = $passengerType;
        return $this;
    }
    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }
    /**
     * Set referenceNumber value
     * @param string $referenceNumber
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceNumber)), __LINE__);
        }
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Get nameId value
     * @return string|null
     */
    public function getNameId()
    {
        return $this->nameId;
    }
    /**
     * Set nameId value
     * @param string $nameId
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setNameId($nameId = null)
    {
        // validation for constraint: string
        if (!is_null($nameId) && !is_string($nameId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameId)), __LINE__);
        }
        $this->nameId = $nameId;
        return $this;
    }
    /**
     * Get nameAssocId value
     * @return string|null
     */
    public function getNameAssocId()
    {
        return $this->nameAssocId;
    }
    /**
     * Set nameAssocId value
     * @param string $nameAssocId
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setNameAssocId($nameAssocId = null)
    {
        // validation for constraint: string
        if (!is_null($nameAssocId) && !is_string($nameAssocId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameAssocId)), __LINE__);
        }
        $this->nameAssocId = $nameAssocId;
        return $this;
    }
    /**
     * Get withInfant value
     * @return bool|null
     */
    public function getWithInfant()
    {
        return $this->withInfant;
    }
    /**
     * Set withInfant value
     * @param bool $withInfant
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setWithInfant($withInfant = null)
    {
        // validation for constraint: boolean
        if (!is_null($withInfant) && !is_bool($withInfant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($withInfant)), __LINE__);
        }
        $this->withInfant = $withInfant;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Get elementId value
     * @return string|null
     */
    public function getElementId()
    {
        return $this->elementId;
    }
    /**
     * Set elementId value
     * @param string $elementId
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setElementId($elementId = null)
    {
        // validation for constraint: string
        if (!is_null($elementId) && !is_string($elementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($elementId)), __LINE__);
        }
        $this->elementId = $elementId;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Passenger_PNRB
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
