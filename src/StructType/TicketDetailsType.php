<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDetailsType StructType
 * @subpackage Structs
 */
class TicketDetailsType extends AbstractStructBase
{
    /**
     * The OriginalTicketDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalTicketDetails;
    /**
     * The TransactionIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Ticket entry code indicating the type of ticketing transaction. Ex."TE"
     * - minOccurs: 0
     * @var string
     */
    public $TransactionIndicator;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - documentation: Ticket number (or numbers in the case of conjunctive tickets) associated with the indicated ticket issuance/refund/exchange/void activity. SSR ticket number may contain the coupon number at the end of the ticket number. Tickets
     * issued by the hosted airline will not include the three character airline ticket indicator at the beginning of the ticket number. Ex."8.38218E+12"
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - documentation: First five characters of passenger last name and first initial of passenger first name for whom the ticket was issued. Only populated on TK/TE/TR/TM ResArrActionCodes. Ex. "CAMPB/A"
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The AgencyLocation
     * Meta informations extracted from the WSDL
     * - documentation: The Pseudo City Code of the agent that generated the TK/TE/TR/TV/TM ticketing entry or the Pseudo City Code to whom the PNR has been queued to perform ticketing. Ex. "3Z71"
     * - minOccurs: 0
     * @var string
     */
    public $AgencyLocation;
    /**
     * The DutyCode
     * Meta informations extracted from the WSDL
     * - documentation: Duty code of the agent that issued a ticket/refund/exchange/void. Only populated on TK/TE/TR/TV/TM ResArrActionCodes. Ex. "5"
     * - minOccurs: 0
     * @var string
     */
    public $DutyCode;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - documentation: Agent sine of the agent that issued a ticket/refund/exchange/void. Only populated on TK/TE/TR/TV/TM ResArrActionCodes. Ex."SSW"
     * - minOccurs: 0
     * @var string
     */
    public $AgentSine;
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - documentation: Date that the ticket was issued or a refund/exchange/void was performed. Only populated on TK/TE/TR/TV/TM ResArrActionCodes. Date is stated according to agent's AAA city time zone. Ex. "2012-10-06T07:04:00"
     * - minOccurs: 0
     * @var string
     */
    public $Timestamp;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The TktEntry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TktEntry;
    /**
     * The NameAssociation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationType[]
     */
    public $NameAssociation;
    /**
     * The SegmentAssociation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationType[]
     */
    public $SegmentAssociation;
    /**
     * The CouponStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CouponStatus;
    /**
     * The PaperTicketInd
     * Meta informations extracted from the WSDL
     * - documentation: Paper ticket indicator from VCR
     * - minOccurs: 0
     * @var bool
     */
    public $PaperTicketInd;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: status of Ticket number e.g Active/Inactive/Unknown
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $index;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
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
     * Constructor method for TicketDetailsType
     * @uses TicketDetailsType::setOriginalTicketDetails()
     * @uses TicketDetailsType::setTransactionIndicator()
     * @uses TicketDetailsType::setTicketNumber()
     * @uses TicketDetailsType::setPassengerName()
     * @uses TicketDetailsType::setAgencyLocation()
     * @uses TicketDetailsType::setDutyCode()
     * @uses TicketDetailsType::setAgentSine()
     * @uses TicketDetailsType::setTimestamp()
     * @uses TicketDetailsType::setPaymentType()
     * @uses TicketDetailsType::setTktEntry()
     * @uses TicketDetailsType::setNameAssociation()
     * @uses TicketDetailsType::setSegmentAssociation()
     * @uses TicketDetailsType::setCouponStatus()
     * @uses TicketDetailsType::setPaperTicketInd()
     * @uses TicketDetailsType::setStatus()
     * @uses TicketDetailsType::setId()
     * @uses TicketDetailsType::setIndex()
     * @uses TicketDetailsType::setOp()
     * @uses TicketDetailsType::setElementId()
     * @uses TicketDetailsType::setRPH()
     * @param string $originalTicketDetails
     * @param string $transactionIndicator
     * @param string $ticketNumber
     * @param string $passengerName
     * @param string $agencyLocation
     * @param string $dutyCode
     * @param string $agentSine
     * @param string $timestamp
     * @param string $paymentType
     * @param string $tktEntry
     * @param \Sabre\UpdateReservation\StructType\NameAssociationType[] $nameAssociation
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationType[] $segmentAssociation
     * @param string $couponStatus
     * @param bool $paperTicketInd
     * @param string $status
     * @param string $id
     * @param int $index
     * @param string $op
     * @param string $elementId
     * @param string $rPH
     */
    public function __construct($originalTicketDetails = null, $transactionIndicator = null, $ticketNumber = null, $passengerName = null, $agencyLocation = null, $dutyCode = null, $agentSine = null, $timestamp = null, $paymentType = null, $tktEntry = null, array $nameAssociation = array(), array $segmentAssociation = array(), $couponStatus = null, $paperTicketInd = null, $status = null, $id = null, $index = null, $op = null, $elementId = null, $rPH = null)
    {
        $this
            ->setOriginalTicketDetails($originalTicketDetails)
            ->setTransactionIndicator($transactionIndicator)
            ->setTicketNumber($ticketNumber)
            ->setPassengerName($passengerName)
            ->setAgencyLocation($agencyLocation)
            ->setDutyCode($dutyCode)
            ->setAgentSine($agentSine)
            ->setTimestamp($timestamp)
            ->setPaymentType($paymentType)
            ->setTktEntry($tktEntry)
            ->setNameAssociation($nameAssociation)
            ->setSegmentAssociation($segmentAssociation)
            ->setCouponStatus($couponStatus)
            ->setPaperTicketInd($paperTicketInd)
            ->setStatus($status)
            ->setId($id)
            ->setIndex($index)
            ->setOp($op)
            ->setElementId($elementId)
            ->setRPH($rPH);
    }
    /**
     * Get OriginalTicketDetails value
     * @return string|null
     */
    public function getOriginalTicketDetails()
    {
        return $this->OriginalTicketDetails;
    }
    /**
     * Set OriginalTicketDetails value
     * @param string $originalTicketDetails
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setOriginalTicketDetails($originalTicketDetails = null)
    {
        // validation for constraint: string
        if (!is_null($originalTicketDetails) && !is_string($originalTicketDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalTicketDetails)), __LINE__);
        }
        $this->OriginalTicketDetails = $originalTicketDetails;
        return $this;
    }
    /**
     * Get TransactionIndicator value
     * @return string|null
     */
    public function getTransactionIndicator()
    {
        return $this->TransactionIndicator;
    }
    /**
     * Set TransactionIndicator value
     * @param string $transactionIndicator
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setTransactionIndicator($transactionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($transactionIndicator) && !is_string($transactionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionIndicator)), __LINE__);
        }
        $this->TransactionIndicator = $transactionIndicator;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get PassengerName value
     * @return string|null
     */
    public function getPassengerName()
    {
        return $this->PassengerName;
    }
    /**
     * Set PassengerName value
     * @param string $passengerName
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setPassengerName($passengerName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerName)), __LINE__);
        }
        $this->PassengerName = $passengerName;
        return $this;
    }
    /**
     * Get AgencyLocation value
     * @return string|null
     */
    public function getAgencyLocation()
    {
        return $this->AgencyLocation;
    }
    /**
     * Set AgencyLocation value
     * @param string $agencyLocation
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setAgencyLocation($agencyLocation = null)
    {
        // validation for constraint: string
        if (!is_null($agencyLocation) && !is_string($agencyLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyLocation)), __LINE__);
        }
        $this->AgencyLocation = $agencyLocation;
        return $this;
    }
    /**
     * Get DutyCode value
     * @return string|null
     */
    public function getDutyCode()
    {
        return $this->DutyCode;
    }
    /**
     * Set DutyCode value
     * @param string $dutyCode
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setDutyCode($dutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($dutyCode) && !is_string($dutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dutyCode)), __LINE__);
        }
        $this->DutyCode = $dutyCode;
        return $this;
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setAgentSine($agentSine = null)
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param string $paymentType
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentType)), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get TktEntry value
     * @return string|null
     */
    public function getTktEntry()
    {
        return $this->TktEntry;
    }
    /**
     * Set TktEntry value
     * @param string $tktEntry
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setTktEntry($tktEntry = null)
    {
        // validation for constraint: string
        if (!is_null($tktEntry) && !is_string($tktEntry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tktEntry)), __LINE__);
        }
        $this->TktEntry = $tktEntry;
        return $this;
    }
    /**
     * Get NameAssociation value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationType[]|null
     */
    public function getNameAssociation()
    {
        return $this->NameAssociation;
    }
    /**
     * Set NameAssociation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationType[] $nameAssociation
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setNameAssociation(array $nameAssociation = array())
    {
        foreach ($nameAssociation as $ticketDetailsTypeNameAssociationItem) {
            // validation for constraint: itemType
            if (!$ticketDetailsTypeNameAssociationItem instanceof \Sabre\UpdateReservation\StructType\NameAssociationType) {
                throw new \InvalidArgumentException(sprintf('The NameAssociation property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationType, "%s" given', is_object($ticketDetailsTypeNameAssociationItem) ? get_class($ticketDetailsTypeNameAssociationItem) : gettype($ticketDetailsTypeNameAssociationItem)), __LINE__);
            }
        }
        $this->NameAssociation = $nameAssociation;
        return $this;
    }
    /**
     * Add item to NameAssociation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NameAssociationType $item
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function addToNameAssociation(\Sabre\UpdateReservation\StructType\NameAssociationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\NameAssociationType) {
            throw new \InvalidArgumentException(sprintf('The NameAssociation property can only contain items of \Sabre\UpdateReservation\StructType\NameAssociationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NameAssociation[] = $item;
        return $this;
    }
    /**
     * Get SegmentAssociation value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationType[]|null
     */
    public function getSegmentAssociation()
    {
        return $this->SegmentAssociation;
    }
    /**
     * Set SegmentAssociation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationType[] $segmentAssociation
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setSegmentAssociation(array $segmentAssociation = array())
    {
        foreach ($segmentAssociation as $ticketDetailsTypeSegmentAssociationItem) {
            // validation for constraint: itemType
            if (!$ticketDetailsTypeSegmentAssociationItem instanceof \Sabre\UpdateReservation\StructType\SegmentAssociationType) {
                throw new \InvalidArgumentException(sprintf('The SegmentAssociation property can only contain items of \Sabre\UpdateReservation\StructType\SegmentAssociationType, "%s" given', is_object($ticketDetailsTypeSegmentAssociationItem) ? get_class($ticketDetailsTypeSegmentAssociationItem) : gettype($ticketDetailsTypeSegmentAssociationItem)), __LINE__);
            }
        }
        $this->SegmentAssociation = $segmentAssociation;
        return $this;
    }
    /**
     * Add item to SegmentAssociation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationType $item
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function addToSegmentAssociation(\Sabre\UpdateReservation\StructType\SegmentAssociationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SegmentAssociationType) {
            throw new \InvalidArgumentException(sprintf('The SegmentAssociation property can only contain items of \Sabre\UpdateReservation\StructType\SegmentAssociationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentAssociation[] = $item;
        return $this;
    }
    /**
     * Get CouponStatus value
     * @return string|null
     */
    public function getCouponStatus()
    {
        return $this->CouponStatus;
    }
    /**
     * Set CouponStatus value
     * @param string $couponStatus
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setCouponStatus($couponStatus = null)
    {
        // validation for constraint: string
        if (!is_null($couponStatus) && !is_string($couponStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($couponStatus)), __LINE__);
        }
        $this->CouponStatus = $couponStatus;
        return $this;
    }
    /**
     * Get PaperTicketInd value
     * @return bool|null
     */
    public function getPaperTicketInd()
    {
        return $this->PaperTicketInd;
    }
    /**
     * Set PaperTicketInd value
     * @param bool $paperTicketInd
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setPaperTicketInd($paperTicketInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($paperTicketInd) && !is_bool($paperTicketInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($paperTicketInd)), __LINE__);
        }
        $this->PaperTicketInd = $paperTicketInd;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
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
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
     */
    public function setIndex($index = null)
    {
        // validation for constraint: maxInclusive
        if ($index > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $index), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($index < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $index), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsType
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
