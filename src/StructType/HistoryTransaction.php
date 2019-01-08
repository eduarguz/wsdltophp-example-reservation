<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HistoryTransaction StructType
 * @subpackage Structs
 */
class HistoryTransaction extends AbstractStructBase
{
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SignatureType
     */
    public $Signature;
    /**
     * The ItineraryHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItineraryHistory
     */
    public $ItineraryHistory;
    /**
     * The RemarkHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RemarkHistoryType
     */
    public $RemarkHistory;
    /**
     * The FactHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public $FactHistory;
    /**
     * The TicketingHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingHistoryType
     */
    public $TicketingHistory;
    /**
     * The SeatsHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SeatsHistoryType
     */
    public $SeatsHistory;
    /**
     * The BSGHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BSGHistoryType
     */
    public $BSGHistory;
    /**
     * The FrequentFlierHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FrequentFlierHistoryType
     */
    public $FrequentFlierHistory;
    /**
     * The NameHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerNameHistoryType
     */
    public $NameHistory;
    /**
     * The SubscriptionCardHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType
     */
    public $SubscriptionCardHistory;
    /**
     * The PhoneHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PhoneHistoryType
     */
    public $PhoneHistory;
    /**
     * The AddressHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressHistoryType
     */
    public $AddressHistory;
    /**
     * The CorporateIDHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CorporateIDHistoryType
     */
    public $CorporateIDHistory;
    /**
     * The PassengerDetailsHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
     */
    public $PassengerDetailsHistory;
    /**
     * The CustomerInsightProfileHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType
     */
    public $CustomerInsightProfileHistory;
    /**
     * The AccountingLineHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountingLineHistoryType
     */
    public $AccountingLineHistory;
    /**
     * The GroupPlannerHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType
     */
    public $GroupPlannerHistory;
    /**
     * The TravelPolicyHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType
     */
    public $TravelPolicyHistory;
    /**
     * The CommentHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CommentHistoryType
     */
    public $CommentHistory;
    /**
     * The DKNumberHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DKNumberHistoryType
     */
    public $DKNumberHistory;
    /**
     * The NameChangeRestrictionHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType
     */
    public $NameChangeRestrictionHistory;
    /**
     * The ExtFrequentTravelerHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType
     */
    public $ExtFrequentTravelerHistory;
    /**
     * The ProductDetailsHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType
     */
    public $ProductDetailsHistory;
    /**
     * The AncillaryServicesHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType
     */
    public $AncillaryServicesHistory;
    /**
     * The AssociationHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AssociationHistoryType
     */
    public $AssociationHistory;
    /**
     * The OpenReservationElementHistory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType
     */
    public $OpenReservationElementHistory;
    /**
     * Constructor method for HistoryTransaction
     * @uses HistoryTransaction::setSignature()
     * @uses HistoryTransaction::setItineraryHistory()
     * @uses HistoryTransaction::setRemarkHistory()
     * @uses HistoryTransaction::setFactHistory()
     * @uses HistoryTransaction::setTicketingHistory()
     * @uses HistoryTransaction::setSeatsHistory()
     * @uses HistoryTransaction::setBSGHistory()
     * @uses HistoryTransaction::setFrequentFlierHistory()
     * @uses HistoryTransaction::setNameHistory()
     * @uses HistoryTransaction::setSubscriptionCardHistory()
     * @uses HistoryTransaction::setPhoneHistory()
     * @uses HistoryTransaction::setAddressHistory()
     * @uses HistoryTransaction::setCorporateIDHistory()
     * @uses HistoryTransaction::setPassengerDetailsHistory()
     * @uses HistoryTransaction::setCustomerInsightProfileHistory()
     * @uses HistoryTransaction::setAccountingLineHistory()
     * @uses HistoryTransaction::setGroupPlannerHistory()
     * @uses HistoryTransaction::setTravelPolicyHistory()
     * @uses HistoryTransaction::setCommentHistory()
     * @uses HistoryTransaction::setDKNumberHistory()
     * @uses HistoryTransaction::setNameChangeRestrictionHistory()
     * @uses HistoryTransaction::setExtFrequentTravelerHistory()
     * @uses HistoryTransaction::setProductDetailsHistory()
     * @uses HistoryTransaction::setAncillaryServicesHistory()
     * @uses HistoryTransaction::setAssociationHistory()
     * @uses HistoryTransaction::setOpenReservationElementHistory()
     * @param \Sabre\UpdateReservation\StructType\SignatureType $signature
     * @param \Sabre\UpdateReservation\StructType\ItineraryHistory $itineraryHistory
     * @param \Sabre\UpdateReservation\StructType\RemarkHistoryType $remarkHistory
     * @param \Sabre\UpdateReservation\StructType\FactHistoryType $factHistory
     * @param \Sabre\UpdateReservation\StructType\TicketingHistoryType $ticketingHistory
     * @param \Sabre\UpdateReservation\StructType\SeatsHistoryType $seatsHistory
     * @param \Sabre\UpdateReservation\StructType\BSGHistoryType $bSGHistory
     * @param \Sabre\UpdateReservation\StructType\FrequentFlierHistoryType $frequentFlierHistory
     * @param \Sabre\UpdateReservation\StructType\PassengerNameHistoryType $nameHistory
     * @param \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType $subscriptionCardHistory
     * @param \Sabre\UpdateReservation\StructType\PhoneHistoryType $phoneHistory
     * @param \Sabre\UpdateReservation\StructType\AddressHistoryType $addressHistory
     * @param \Sabre\UpdateReservation\StructType\CorporateIDHistoryType $corporateIDHistory
     * @param \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType $passengerDetailsHistory
     * @param \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType $customerInsightProfileHistory
     * @param \Sabre\UpdateReservation\StructType\AccountingLineHistoryType $accountingLineHistory
     * @param \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType $groupPlannerHistory
     * @param \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType $travelPolicyHistory
     * @param \Sabre\UpdateReservation\StructType\CommentHistoryType $commentHistory
     * @param \Sabre\UpdateReservation\StructType\DKNumberHistoryType $dKNumberHistory
     * @param \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType $nameChangeRestrictionHistory
     * @param \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType $extFrequentTravelerHistory
     * @param \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType $productDetailsHistory
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType $ancillaryServicesHistory
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryType $associationHistory
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType $openReservationElementHistory
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SignatureType $signature = null, \Sabre\UpdateReservation\StructType\ItineraryHistory $itineraryHistory = null, \Sabre\UpdateReservation\StructType\RemarkHistoryType $remarkHistory = null, \Sabre\UpdateReservation\StructType\FactHistoryType $factHistory = null, \Sabre\UpdateReservation\StructType\TicketingHistoryType $ticketingHistory = null, \Sabre\UpdateReservation\StructType\SeatsHistoryType $seatsHistory = null, \Sabre\UpdateReservation\StructType\BSGHistoryType $bSGHistory = null, \Sabre\UpdateReservation\StructType\FrequentFlierHistoryType $frequentFlierHistory = null, \Sabre\UpdateReservation\StructType\PassengerNameHistoryType $nameHistory = null, \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType $subscriptionCardHistory = null, \Sabre\UpdateReservation\StructType\PhoneHistoryType $phoneHistory = null, \Sabre\UpdateReservation\StructType\AddressHistoryType $addressHistory = null, \Sabre\UpdateReservation\StructType\CorporateIDHistoryType $corporateIDHistory = null, \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType $passengerDetailsHistory = null, \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType $customerInsightProfileHistory = null, \Sabre\UpdateReservation\StructType\AccountingLineHistoryType $accountingLineHistory = null, \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType $groupPlannerHistory = null, \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType $travelPolicyHistory = null, \Sabre\UpdateReservation\StructType\CommentHistoryType $commentHistory = null, \Sabre\UpdateReservation\StructType\DKNumberHistoryType $dKNumberHistory = null, \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType $nameChangeRestrictionHistory = null, \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType $extFrequentTravelerHistory = null, \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType $productDetailsHistory = null, \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType $ancillaryServicesHistory = null, \Sabre\UpdateReservation\StructType\AssociationHistoryType $associationHistory = null, \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType $openReservationElementHistory = null)
    {
        $this
            ->setSignature($signature)
            ->setItineraryHistory($itineraryHistory)
            ->setRemarkHistory($remarkHistory)
            ->setFactHistory($factHistory)
            ->setTicketingHistory($ticketingHistory)
            ->setSeatsHistory($seatsHistory)
            ->setBSGHistory($bSGHistory)
            ->setFrequentFlierHistory($frequentFlierHistory)
            ->setNameHistory($nameHistory)
            ->setSubscriptionCardHistory($subscriptionCardHistory)
            ->setPhoneHistory($phoneHistory)
            ->setAddressHistory($addressHistory)
            ->setCorporateIDHistory($corporateIDHistory)
            ->setPassengerDetailsHistory($passengerDetailsHistory)
            ->setCustomerInsightProfileHistory($customerInsightProfileHistory)
            ->setAccountingLineHistory($accountingLineHistory)
            ->setGroupPlannerHistory($groupPlannerHistory)
            ->setTravelPolicyHistory($travelPolicyHistory)
            ->setCommentHistory($commentHistory)
            ->setDKNumberHistory($dKNumberHistory)
            ->setNameChangeRestrictionHistory($nameChangeRestrictionHistory)
            ->setExtFrequentTravelerHistory($extFrequentTravelerHistory)
            ->setProductDetailsHistory($productDetailsHistory)
            ->setAncillaryServicesHistory($ancillaryServicesHistory)
            ->setAssociationHistory($associationHistory)
            ->setOpenReservationElementHistory($openReservationElementHistory);
    }
    /**
     * Get Signature value
     * @return \Sabre\UpdateReservation\StructType\SignatureType|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param \Sabre\UpdateReservation\StructType\SignatureType $signature
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setSignature(\Sabre\UpdateReservation\StructType\SignatureType $signature = null)
    {
        $this->Signature = $signature;
        return $this;
    }
    /**
     * Get ItineraryHistory value
     * @return \Sabre\UpdateReservation\StructType\ItineraryHistory|null
     */
    public function getItineraryHistory()
    {
        return $this->ItineraryHistory;
    }
    /**
     * Set ItineraryHistory value
     * @param \Sabre\UpdateReservation\StructType\ItineraryHistory $itineraryHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setItineraryHistory(\Sabre\UpdateReservation\StructType\ItineraryHistory $itineraryHistory = null)
    {
        $this->ItineraryHistory = $itineraryHistory;
        return $this;
    }
    /**
     * Get RemarkHistory value
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType|null
     */
    public function getRemarkHistory()
    {
        return $this->RemarkHistory;
    }
    /**
     * Set RemarkHistory value
     * @param \Sabre\UpdateReservation\StructType\RemarkHistoryType $remarkHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setRemarkHistory(\Sabre\UpdateReservation\StructType\RemarkHistoryType $remarkHistory = null)
    {
        $this->RemarkHistory = $remarkHistory;
        return $this;
    }
    /**
     * Get FactHistory value
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType|null
     */
    public function getFactHistory()
    {
        return $this->FactHistory;
    }
    /**
     * Set FactHistory value
     * @param \Sabre\UpdateReservation\StructType\FactHistoryType $factHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setFactHistory(\Sabre\UpdateReservation\StructType\FactHistoryType $factHistory = null)
    {
        $this->FactHistory = $factHistory;
        return $this;
    }
    /**
     * Get TicketingHistory value
     * @return \Sabre\UpdateReservation\StructType\TicketingHistoryType|null
     */
    public function getTicketingHistory()
    {
        return $this->TicketingHistory;
    }
    /**
     * Set TicketingHistory value
     * @param \Sabre\UpdateReservation\StructType\TicketingHistoryType $ticketingHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setTicketingHistory(\Sabre\UpdateReservation\StructType\TicketingHistoryType $ticketingHistory = null)
    {
        $this->TicketingHistory = $ticketingHistory;
        return $this;
    }
    /**
     * Get SeatsHistory value
     * @return \Sabre\UpdateReservation\StructType\SeatsHistoryType|null
     */
    public function getSeatsHistory()
    {
        return $this->SeatsHistory;
    }
    /**
     * Set SeatsHistory value
     * @param \Sabre\UpdateReservation\StructType\SeatsHistoryType $seatsHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setSeatsHistory(\Sabre\UpdateReservation\StructType\SeatsHistoryType $seatsHistory = null)
    {
        $this->SeatsHistory = $seatsHistory;
        return $this;
    }
    /**
     * Get BSGHistory value
     * @return \Sabre\UpdateReservation\StructType\BSGHistoryType|null
     */
    public function getBSGHistory()
    {
        return $this->BSGHistory;
    }
    /**
     * Set BSGHistory value
     * @param \Sabre\UpdateReservation\StructType\BSGHistoryType $bSGHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setBSGHistory(\Sabre\UpdateReservation\StructType\BSGHistoryType $bSGHistory = null)
    {
        $this->BSGHistory = $bSGHistory;
        return $this;
    }
    /**
     * Get FrequentFlierHistory value
     * @return \Sabre\UpdateReservation\StructType\FrequentFlierHistoryType|null
     */
    public function getFrequentFlierHistory()
    {
        return $this->FrequentFlierHistory;
    }
    /**
     * Set FrequentFlierHistory value
     * @param \Sabre\UpdateReservation\StructType\FrequentFlierHistoryType $frequentFlierHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setFrequentFlierHistory(\Sabre\UpdateReservation\StructType\FrequentFlierHistoryType $frequentFlierHistory = null)
    {
        $this->FrequentFlierHistory = $frequentFlierHistory;
        return $this;
    }
    /**
     * Get NameHistory value
     * @return \Sabre\UpdateReservation\StructType\PassengerNameHistoryType|null
     */
    public function getNameHistory()
    {
        return $this->NameHistory;
    }
    /**
     * Set NameHistory value
     * @param \Sabre\UpdateReservation\StructType\PassengerNameHistoryType $nameHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setNameHistory(\Sabre\UpdateReservation\StructType\PassengerNameHistoryType $nameHistory = null)
    {
        $this->NameHistory = $nameHistory;
        return $this;
    }
    /**
     * Get SubscriptionCardHistory value
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType|null
     */
    public function getSubscriptionCardHistory()
    {
        return $this->SubscriptionCardHistory;
    }
    /**
     * Set SubscriptionCardHistory value
     * @param \Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType $subscriptionCardHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setSubscriptionCardHistory(\Sabre\UpdateReservation\StructType\SubscriptionCardHistoryType $subscriptionCardHistory = null)
    {
        $this->SubscriptionCardHistory = $subscriptionCardHistory;
        return $this;
    }
    /**
     * Get PhoneHistory value
     * @return \Sabre\UpdateReservation\StructType\PhoneHistoryType|null
     */
    public function getPhoneHistory()
    {
        return $this->PhoneHistory;
    }
    /**
     * Set PhoneHistory value
     * @param \Sabre\UpdateReservation\StructType\PhoneHistoryType $phoneHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setPhoneHistory(\Sabre\UpdateReservation\StructType\PhoneHistoryType $phoneHistory = null)
    {
        $this->PhoneHistory = $phoneHistory;
        return $this;
    }
    /**
     * Get AddressHistory value
     * @return \Sabre\UpdateReservation\StructType\AddressHistoryType|null
     */
    public function getAddressHistory()
    {
        return $this->AddressHistory;
    }
    /**
     * Set AddressHistory value
     * @param \Sabre\UpdateReservation\StructType\AddressHistoryType $addressHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setAddressHistory(\Sabre\UpdateReservation\StructType\AddressHistoryType $addressHistory = null)
    {
        $this->AddressHistory = $addressHistory;
        return $this;
    }
    /**
     * Get CorporateIDHistory value
     * @return \Sabre\UpdateReservation\StructType\CorporateIDHistoryType|null
     */
    public function getCorporateIDHistory()
    {
        return $this->CorporateIDHistory;
    }
    /**
     * Set CorporateIDHistory value
     * @param \Sabre\UpdateReservation\StructType\CorporateIDHistoryType $corporateIDHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setCorporateIDHistory(\Sabre\UpdateReservation\StructType\CorporateIDHistoryType $corporateIDHistory = null)
    {
        $this->CorporateIDHistory = $corporateIDHistory;
        return $this;
    }
    /**
     * Get PassengerDetailsHistory value
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType|null
     */
    public function getPassengerDetailsHistory()
    {
        return $this->PassengerDetailsHistory;
    }
    /**
     * Set PassengerDetailsHistory value
     * @param \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType $passengerDetailsHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setPassengerDetailsHistory(\Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType $passengerDetailsHistory = null)
    {
        $this->PassengerDetailsHistory = $passengerDetailsHistory;
        return $this;
    }
    /**
     * Get CustomerInsightProfileHistory value
     * @return \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType|null
     */
    public function getCustomerInsightProfileHistory()
    {
        return $this->CustomerInsightProfileHistory;
    }
    /**
     * Set CustomerInsightProfileHistory value
     * @param \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType $customerInsightProfileHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setCustomerInsightProfileHistory(\Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType $customerInsightProfileHistory = null)
    {
        $this->CustomerInsightProfileHistory = $customerInsightProfileHistory;
        return $this;
    }
    /**
     * Get AccountingLineHistory value
     * @return \Sabre\UpdateReservation\StructType\AccountingLineHistoryType|null
     */
    public function getAccountingLineHistory()
    {
        return $this->AccountingLineHistory;
    }
    /**
     * Set AccountingLineHistory value
     * @param \Sabre\UpdateReservation\StructType\AccountingLineHistoryType $accountingLineHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setAccountingLineHistory(\Sabre\UpdateReservation\StructType\AccountingLineHistoryType $accountingLineHistory = null)
    {
        $this->AccountingLineHistory = $accountingLineHistory;
        return $this;
    }
    /**
     * Get GroupPlannerHistory value
     * @return \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType|null
     */
    public function getGroupPlannerHistory()
    {
        return $this->GroupPlannerHistory;
    }
    /**
     * Set GroupPlannerHistory value
     * @param \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType $groupPlannerHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setGroupPlannerHistory(\Sabre\UpdateReservation\StructType\GroupPlannerHistoryType $groupPlannerHistory = null)
    {
        $this->GroupPlannerHistory = $groupPlannerHistory;
        return $this;
    }
    /**
     * Get TravelPolicyHistory value
     * @return \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType|null
     */
    public function getTravelPolicyHistory()
    {
        return $this->TravelPolicyHistory;
    }
    /**
     * Set TravelPolicyHistory value
     * @param \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType $travelPolicyHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setTravelPolicyHistory(\Sabre\UpdateReservation\StructType\TravelPolicyHistoryType $travelPolicyHistory = null)
    {
        $this->TravelPolicyHistory = $travelPolicyHistory;
        return $this;
    }
    /**
     * Get CommentHistory value
     * @return \Sabre\UpdateReservation\StructType\CommentHistoryType|null
     */
    public function getCommentHistory()
    {
        return $this->CommentHistory;
    }
    /**
     * Set CommentHistory value
     * @param \Sabre\UpdateReservation\StructType\CommentHistoryType $commentHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setCommentHistory(\Sabre\UpdateReservation\StructType\CommentHistoryType $commentHistory = null)
    {
        $this->CommentHistory = $commentHistory;
        return $this;
    }
    /**
     * Get DKNumberHistory value
     * @return \Sabre\UpdateReservation\StructType\DKNumberHistoryType|null
     */
    public function getDKNumberHistory()
    {
        return $this->DKNumberHistory;
    }
    /**
     * Set DKNumberHistory value
     * @param \Sabre\UpdateReservation\StructType\DKNumberHistoryType $dKNumberHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setDKNumberHistory(\Sabre\UpdateReservation\StructType\DKNumberHistoryType $dKNumberHistory = null)
    {
        $this->DKNumberHistory = $dKNumberHistory;
        return $this;
    }
    /**
     * Get NameChangeRestrictionHistory value
     * @return \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType|null
     */
    public function getNameChangeRestrictionHistory()
    {
        return $this->NameChangeRestrictionHistory;
    }
    /**
     * Set NameChangeRestrictionHistory value
     * @param \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType $nameChangeRestrictionHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setNameChangeRestrictionHistory(\Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType $nameChangeRestrictionHistory = null)
    {
        $this->NameChangeRestrictionHistory = $nameChangeRestrictionHistory;
        return $this;
    }
    /**
     * Get ExtFrequentTravelerHistory value
     * @return \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType|null
     */
    public function getExtFrequentTravelerHistory()
    {
        return $this->ExtFrequentTravelerHistory;
    }
    /**
     * Set ExtFrequentTravelerHistory value
     * @param \Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType $extFrequentTravelerHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setExtFrequentTravelerHistory(\Sabre\UpdateReservation\StructType\ExtFrequentTravelerHistoryType $extFrequentTravelerHistory = null)
    {
        $this->ExtFrequentTravelerHistory = $extFrequentTravelerHistory;
        return $this;
    }
    /**
     * Get ProductDetailsHistory value
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType|null
     */
    public function getProductDetailsHistory()
    {
        return $this->ProductDetailsHistory;
    }
    /**
     * Set ProductDetailsHistory value
     * @param \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType $productDetailsHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setProductDetailsHistory(\Sabre\UpdateReservation\StructType\ProductDetailsHistoryType $productDetailsHistory = null)
    {
        $this->ProductDetailsHistory = $productDetailsHistory;
        return $this;
    }
    /**
     * Get AncillaryServicesHistory value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType|null
     */
    public function getAncillaryServicesHistory()
    {
        return $this->AncillaryServicesHistory;
    }
    /**
     * Set AncillaryServicesHistory value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType $ancillaryServicesHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setAncillaryServicesHistory(\Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType $ancillaryServicesHistory = null)
    {
        $this->AncillaryServicesHistory = $ancillaryServicesHistory;
        return $this;
    }
    /**
     * Get AssociationHistory value
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryType|null
     */
    public function getAssociationHistory()
    {
        return $this->AssociationHistory;
    }
    /**
     * Set AssociationHistory value
     * @param \Sabre\UpdateReservation\StructType\AssociationHistoryType $associationHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setAssociationHistory(\Sabre\UpdateReservation\StructType\AssociationHistoryType $associationHistory = null)
    {
        $this->AssociationHistory = $associationHistory;
        return $this;
    }
    /**
     * Get OpenReservationElementHistory value
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType|null
     */
    public function getOpenReservationElementHistory()
    {
        return $this->OpenReservationElementHistory;
    }
    /**
     * Set OpenReservationElementHistory value
     * @param \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType $openReservationElementHistory
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
     */
    public function setOpenReservationElementHistory(\Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType $openReservationElementHistory = null)
    {
        $this->OpenReservationElementHistory = $openReservationElementHistory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HistoryTransaction
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
