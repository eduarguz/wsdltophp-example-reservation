<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServicesUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServicesUpdate_PNRB extends AbstractStructBase
{
    /**
     * The NameAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public $NameAssociationList;
    /**
     * The SegmentAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public $SegmentAssociationList;
    /**
     * The CommercialName
     * @var string
     */
    public $CommercialName;
    /**
     * The RficCode
     * @var string
     */
    public $RficCode;
    /**
     * The RficSubcode
     * @var string
     */
    public $RficSubcode;
    /**
     * The SSRCode
     * @var string
     */
    public $SSRCode;
    /**
     * The ProductTextDetails
     * @var \Sabre\UpdateReservation\StructType\ProductTextDetails
     */
    public $ProductTextDetails;
    /**
     * The ProductText
     * @var string
     */
    public $ProductText;
    /**
     * The OwningCarrierCode
     * @var string
     */
    public $OwningCarrierCode;
    /**
     * The SsimCode
     * @var string
     */
    public $SsimCode;
    /**
     * The BookingIndicator
     * @var string
     */
    public $BookingIndicator;
    /**
     * The Vendor
     * @var string
     */
    public $Vendor;
    /**
     * The EMDType
     * @var string
     */
    public $EMDType;
    /**
     * The EMDNumber
     * @var string
     */
    public $EMDNumber;
    /**
     * The EMDCoupon
     * @var string
     */
    public $EMDCoupon;
    /**
     * The ServiceFeeLineNumber
     * @var string
     */
    public $ServiceFeeLineNumber;
    /**
     * The DisplayOnlyIndicator
     * @var bool
     */
    public $DisplayOnlyIndicator;
    /**
     * The ConsumptionIndicator
     * @var string
     */
    public $ConsumptionIndicator;
    /**
     * The PresentTo
     * @var string
     */
    public $PresentTo;
    /**
     * The AtCity
     * @var string
     */
    public $AtCity;
    /**
     * The Endorsements
     * @var string
     */
    public $Endorsements;
    /**
     * The StationIndicator
     * @var string
     */
    public $StationIndicator;
    /**
     * The ServiceCity
     * @var string
     */
    public $ServiceCity;
    /**
     * The ServiceCityDestination
     * @var string
     */
    public $ServiceCityDestination;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: Need to know the Service Type to e.g. 'A'llowance - indicate registered bag that is part of allowance; 'C'harges; 'F'light Related; 'P'repaid | Need to know the Service Type to e.g. 'A'llowance - indicate registered bag that is part
     * of allowance; 'C'harges; 'F'light Related; 'P'repaid | Need to know the Service Type to e.g. 'A'llowance - indicate registered bag that is part of allowance; 'C'harges; 'F'light Related; 'P'repaid
     * - minOccurs: 0
     * - pattern: [A-Z]
     * @var string
     */
    public $ServiceType;
    /**
     * The RuleSet
     * @var \Sabre\UpdateReservation\StructType\RuleSet
     */
    public $RuleSet;
    /**
     * The AncillarySequenceNumber
     * @var string
     */
    public $AncillarySequenceNumber;
    /**
     * The OfferItemID
     * @var string
     */
    public $OfferItemID;
    /**
     * The OriginalPrice
     * @var \Sabre\UpdateReservation\StructType\OriginalPrice
     */
    public $OriginalPrice;
    /**
     * The Quantity
     * @var int
     */
    public $Quantity;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - maxInclusive: 24
     * - minInclusive: 1
     * @var string
     */
    public $SegmentNumber;
    /**
     * The EquivalentPrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $EquivalentPrice;
    /**
     * The TTLPrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $TTLPrice;
    /**
     * The PortionOfTravelIndicator
     * @var string
     */
    public $PortionOfTravelIndicator;
    /**
     * The OriginalBasePrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $OriginalBasePrice;
    /**
     * The RefundIndicator
     * @var string
     */
    public $RefundIndicator;
    /**
     * The CommisionIndicator
     * @var string
     */
    public $CommisionIndicator;
    /**
     * The InterlineIndicator
     * @var string
     */
    public $InterlineIndicator;
    /**
     * The FeeApplicationIndicator
     * @var string
     */
    public $FeeApplicationIndicator;
    /**
     * The PassengerTypeCode
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The BoardPoint
     * @var string
     */
    public $BoardPoint;
    /**
     * The OffPoint
     * @var string
     */
    public $OffPoint;
    /**
     * The TaxesIncluded
     * @var bool
     */
    public $TaxesIncluded;
    /**
     * The Taxes
     * @var \Sabre\UpdateReservation\StructType\Taxes
     */
    public $Taxes;
    /**
     * The SoftMatchIndicator
     * @var bool
     */
    public $SoftMatchIndicator;
    /**
     * The NoChargeNotAvailIndicator
     * @var string
     */
    public $NoChargeNotAvailIndicator;
    /**
     * The TicketCouponNumberAssociation
     * @var \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation
     */
    public $TicketCouponNumberAssociation;
    /**
     * The SimultaneousTicketIndicator
     * @var string
     */
    public $SimultaneousTicketIndicator;
    /**
     * The FormOfRefund
     * @var string
     */
    public $FormOfRefund;
    /**
     * The FeeNotGuaranteedIndicator
     * @var bool
     */
    public $FeeNotGuaranteedIndicator;
    /**
     * The FQTVTierLevel
     * @var int
     */
    public $FQTVTierLevel;
    /**
     * The TourCodeSHC
     * @var string
     */
    public $TourCodeSHC;
    /**
     * The TravelDateEffective
     * @var string
     */
    public $TravelDateEffective;
    /**
     * The LatestTravelDatePermitted
     * @var string
     */
    public $LatestTravelDatePermitted;
    /**
     * The PurchaseByDate
     * @var string
     */
    public $PurchaseByDate;
    /**
     * The TotalOriginalBasePrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $TotalOriginalBasePrice;
    /**
     * The TotalEquivalentPrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $TotalEquivalentPrice;
    /**
     * The TotalTTLPrice
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $TotalTTLPrice;
    /**
     * The TotalTaxes
     * @var \Sabre\UpdateReservation\StructType\TotalTaxes
     */
    public $TotalTaxes;
    /**
     * The TaxExemptIndicator
     * @var string
     */
    public $TaxExemptIndicator;
    /**
     * The BagWeight
     * @var \Sabre\UpdateReservation\StructType\BagWeight
     */
    public $BagWeight;
    /**
     * The FareCalculationModeIndicator
     * @var string
     */
    public $FareCalculationModeIndicator;
    /**
     * The FareCalculationPriceIndicator
     * Meta informations extracted from the WSDL
     * - pattern: [0-9A-Z]
     * @var string
     */
    public $FareCalculationPriceIndicator;
    /**
     * The BagOccurence
     * @var int
     */
    public $BagOccurence;
    /**
     * The StatusIndicator
     * @var int
     */
    public $StatusIndicator;
    /**
     * The NumberOfItems
     * @var string
     */
    public $NumberOfItems;
    /**
     * The ActionCode
     * @var string
     */
    public $ActionCode;
    /**
     * The SegmentIndicator
     * @var string
     */
    public $SegmentIndicator;
    /**
     * The FrequentFlyerTier
     * @var string
     */
    public $FrequentFlyerTier;
    /**
     * The RefundFormIndicator
     * @var string
     */
    public $RefundFormIndicator;
    /**
     * The FareGuaranteedIndicator
     * @var string
     */
    public $FareGuaranteedIndicator;
    /**
     * The ServiceChargeIndicator
     * @var string
     */
    public $ServiceChargeIndicator;
    /**
     * The AdvancePurchaseIndicator
     * @var string
     */
    public $AdvancePurchaseIndicator;
    /**
     * The BookingSource
     * @var string
     */
    public $BookingSource;
    /**
     * The TaxIndicator
     * @var string
     */
    public $TaxIndicator;
    /**
     * The TicketingIndicator
     * @var string
     */
    public $TicketingIndicator;
    /**
     * The FeeWaiveReason
     * @var string
     */
    public $FeeWaiveReason;
    /**
     * The FulfillmentType
     * @var string
     */
    public $FulfillmentType;
    /**
     * The AaPayOriginalSeat
     * @var string
     */
    public $AaPayOriginalSeat;
    /**
     * The PdcSeat
     * @var string
     */
    public $PdcSeat;
    /**
     * The EquipmentType
     * @var string
     */
    public $EquipmentType;
    /**
     * The AaPayOptionalStatus
     * @var string
     */
    public $AaPayOptionalStatus;
    /**
     * The FirstTravelDate
     * @var string
     */
    public $FirstTravelDate;
    /**
     * The LastTravelDate
     * @var string
     */
    public $LastTravelDate;
    /**
     * The TTYConfirmationTimestamp
     * @var string
     */
    public $TTYConfirmationTimestamp;
    /**
     * The PurchaseTimestamp
     * @var string
     */
    public $PurchaseTimestamp;
    /**
     * The BrandedFareId
     * @var string
     */
    public $BrandedFareId;
    /**
     * The GroupCode
     * @var string
     */
    public $GroupCode;
    /**
     * The TourCode
     * @var string
     */
    public $TourCode;
    /**
     * The EmdPaperIndicator
     * @var string
     */
    public $EmdPaperIndicator;
    /**
     * The SeatRequestTransactionID
     * @var string
     */
    public $SeatRequestTransactionID;
    /**
     * The TicketUsedForEMDPricing
     * @var string
     */
    public $TicketUsedForEMDPricing;
    /**
     * The EMDConsummedAtIssuance
     * @var string
     */
    public $EMDConsummedAtIssuance;
    /**
     * The PaperDocRequired
     * @var string
     */
    public $PaperDocRequired;
    /**
     * The TaxExemption
     * @var string
     */
    public $TaxExemption;
    /**
     * The ACSCount
     * @var int
     */
    public $ACSCount;
    /**
     * The NetAmount
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $NetAmount;
    /**
     * The PriceQuoteDesignator
     * @var int
     */
    public $PriceQuoteDesignator;
    /**
     * The PriceMismatchAction
     * @var string
     */
    public $PriceMismatchAction;
    /**
     * The Segment
     * @var \Sabre\UpdateReservation\StructType\SegmentOrTravelPortionType
     */
    public $Segment;
    /**
     * The TravelPortions
     * @var \Sabre\UpdateReservation\StructType\TravelPortions
     */
    public $TravelPortions;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * The elementId
     * @var string
     */
    public $elementId;
    /**
     * The UpdateId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $UpdateId;
    /**
     * Constructor method for AncillaryServicesUpdate.PNRB
     * @uses AncillaryServicesUpdate_PNRB::setNameAssociationList()
     * @uses AncillaryServicesUpdate_PNRB::setSegmentAssociationList()
     * @uses AncillaryServicesUpdate_PNRB::setCommercialName()
     * @uses AncillaryServicesUpdate_PNRB::setRficCode()
     * @uses AncillaryServicesUpdate_PNRB::setRficSubcode()
     * @uses AncillaryServicesUpdate_PNRB::setSSRCode()
     * @uses AncillaryServicesUpdate_PNRB::setProductTextDetails()
     * @uses AncillaryServicesUpdate_PNRB::setProductText()
     * @uses AncillaryServicesUpdate_PNRB::setOwningCarrierCode()
     * @uses AncillaryServicesUpdate_PNRB::setSsimCode()
     * @uses AncillaryServicesUpdate_PNRB::setBookingIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setVendor()
     * @uses AncillaryServicesUpdate_PNRB::setEMDType()
     * @uses AncillaryServicesUpdate_PNRB::setEMDNumber()
     * @uses AncillaryServicesUpdate_PNRB::setEMDCoupon()
     * @uses AncillaryServicesUpdate_PNRB::setServiceFeeLineNumber()
     * @uses AncillaryServicesUpdate_PNRB::setDisplayOnlyIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setConsumptionIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setPresentTo()
     * @uses AncillaryServicesUpdate_PNRB::setAtCity()
     * @uses AncillaryServicesUpdate_PNRB::setEndorsements()
     * @uses AncillaryServicesUpdate_PNRB::setStationIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setServiceCity()
     * @uses AncillaryServicesUpdate_PNRB::setServiceCityDestination()
     * @uses AncillaryServicesUpdate_PNRB::setServiceType()
     * @uses AncillaryServicesUpdate_PNRB::setRuleSet()
     * @uses AncillaryServicesUpdate_PNRB::setAncillarySequenceNumber()
     * @uses AncillaryServicesUpdate_PNRB::setOfferItemID()
     * @uses AncillaryServicesUpdate_PNRB::setOriginalPrice()
     * @uses AncillaryServicesUpdate_PNRB::setQuantity()
     * @uses AncillaryServicesUpdate_PNRB::setSegmentNumber()
     * @uses AncillaryServicesUpdate_PNRB::setEquivalentPrice()
     * @uses AncillaryServicesUpdate_PNRB::setTTLPrice()
     * @uses AncillaryServicesUpdate_PNRB::setPortionOfTravelIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setOriginalBasePrice()
     * @uses AncillaryServicesUpdate_PNRB::setRefundIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setCommisionIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setInterlineIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFeeApplicationIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setPassengerTypeCode()
     * @uses AncillaryServicesUpdate_PNRB::setBoardPoint()
     * @uses AncillaryServicesUpdate_PNRB::setOffPoint()
     * @uses AncillaryServicesUpdate_PNRB::setTaxesIncluded()
     * @uses AncillaryServicesUpdate_PNRB::setTaxes()
     * @uses AncillaryServicesUpdate_PNRB::setSoftMatchIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setNoChargeNotAvailIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setTicketCouponNumberAssociation()
     * @uses AncillaryServicesUpdate_PNRB::setSimultaneousTicketIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFormOfRefund()
     * @uses AncillaryServicesUpdate_PNRB::setFeeNotGuaranteedIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFQTVTierLevel()
     * @uses AncillaryServicesUpdate_PNRB::setTourCodeSHC()
     * @uses AncillaryServicesUpdate_PNRB::setTravelDateEffective()
     * @uses AncillaryServicesUpdate_PNRB::setLatestTravelDatePermitted()
     * @uses AncillaryServicesUpdate_PNRB::setPurchaseByDate()
     * @uses AncillaryServicesUpdate_PNRB::setTotalOriginalBasePrice()
     * @uses AncillaryServicesUpdate_PNRB::setTotalEquivalentPrice()
     * @uses AncillaryServicesUpdate_PNRB::setTotalTTLPrice()
     * @uses AncillaryServicesUpdate_PNRB::setTotalTaxes()
     * @uses AncillaryServicesUpdate_PNRB::setTaxExemptIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setBagWeight()
     * @uses AncillaryServicesUpdate_PNRB::setFareCalculationModeIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFareCalculationPriceIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setBagOccurence()
     * @uses AncillaryServicesUpdate_PNRB::setStatusIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setNumberOfItems()
     * @uses AncillaryServicesUpdate_PNRB::setActionCode()
     * @uses AncillaryServicesUpdate_PNRB::setSegmentIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFrequentFlyerTier()
     * @uses AncillaryServicesUpdate_PNRB::setRefundFormIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFareGuaranteedIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setServiceChargeIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setAdvancePurchaseIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setBookingSource()
     * @uses AncillaryServicesUpdate_PNRB::setTaxIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setTicketingIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setFeeWaiveReason()
     * @uses AncillaryServicesUpdate_PNRB::setFulfillmentType()
     * @uses AncillaryServicesUpdate_PNRB::setAaPayOriginalSeat()
     * @uses AncillaryServicesUpdate_PNRB::setPdcSeat()
     * @uses AncillaryServicesUpdate_PNRB::setEquipmentType()
     * @uses AncillaryServicesUpdate_PNRB::setAaPayOptionalStatus()
     * @uses AncillaryServicesUpdate_PNRB::setFirstTravelDate()
     * @uses AncillaryServicesUpdate_PNRB::setLastTravelDate()
     * @uses AncillaryServicesUpdate_PNRB::setTTYConfirmationTimestamp()
     * @uses AncillaryServicesUpdate_PNRB::setPurchaseTimestamp()
     * @uses AncillaryServicesUpdate_PNRB::setBrandedFareId()
     * @uses AncillaryServicesUpdate_PNRB::setGroupCode()
     * @uses AncillaryServicesUpdate_PNRB::setTourCode()
     * @uses AncillaryServicesUpdate_PNRB::setEmdPaperIndicator()
     * @uses AncillaryServicesUpdate_PNRB::setSeatRequestTransactionID()
     * @uses AncillaryServicesUpdate_PNRB::setTicketUsedForEMDPricing()
     * @uses AncillaryServicesUpdate_PNRB::setEMDConsummedAtIssuance()
     * @uses AncillaryServicesUpdate_PNRB::setPaperDocRequired()
     * @uses AncillaryServicesUpdate_PNRB::setTaxExemption()
     * @uses AncillaryServicesUpdate_PNRB::setACSCount()
     * @uses AncillaryServicesUpdate_PNRB::setNetAmount()
     * @uses AncillaryServicesUpdate_PNRB::setPriceQuoteDesignator()
     * @uses AncillaryServicesUpdate_PNRB::setPriceMismatchAction()
     * @uses AncillaryServicesUpdate_PNRB::setSegment()
     * @uses AncillaryServicesUpdate_PNRB::setTravelPortions()
     * @uses AncillaryServicesUpdate_PNRB::setId()
     * @uses AncillaryServicesUpdate_PNRB::setOp()
     * @uses AncillaryServicesUpdate_PNRB::setElementId()
     * @uses AncillaryServicesUpdate_PNRB::setUpdateId()
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @param string $commercialName
     * @param string $rficCode
     * @param string $rficSubcode
     * @param string $sSRCode
     * @param \Sabre\UpdateReservation\StructType\ProductTextDetails $productTextDetails
     * @param string $productText
     * @param string $owningCarrierCode
     * @param string $ssimCode
     * @param string $bookingIndicator
     * @param string $vendor
     * @param string $eMDType
     * @param string $eMDNumber
     * @param string $eMDCoupon
     * @param string $serviceFeeLineNumber
     * @param bool $displayOnlyIndicator
     * @param string $consumptionIndicator
     * @param string $presentTo
     * @param string $atCity
     * @param string $endorsements
     * @param string $stationIndicator
     * @param string $serviceCity
     * @param string $serviceCityDestination
     * @param string $serviceType
     * @param \Sabre\UpdateReservation\StructType\RuleSet $ruleSet
     * @param string $ancillarySequenceNumber
     * @param string $offerItemID
     * @param \Sabre\UpdateReservation\StructType\OriginalPrice $originalPrice
     * @param int $quantity
     * @param string $segmentNumber
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice
     * @param string $portionOfTravelIndicator
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice
     * @param string $refundIndicator
     * @param string $commisionIndicator
     * @param string $interlineIndicator
     * @param string $feeApplicationIndicator
     * @param string $passengerTypeCode
     * @param string $boardPoint
     * @param string $offPoint
     * @param bool $taxesIncluded
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @param bool $softMatchIndicator
     * @param string $noChargeNotAvailIndicator
     * @param \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation $ticketCouponNumberAssociation
     * @param string $simultaneousTicketIndicator
     * @param string $formOfRefund
     * @param bool $feeNotGuaranteedIndicator
     * @param int $fQTVTierLevel
     * @param string $tourCodeSHC
     * @param string $travelDateEffective
     * @param string $latestTravelDatePermitted
     * @param string $purchaseByDate
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalOriginalBasePrice
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalEquivalentPrice
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalTTLPrice
     * @param \Sabre\UpdateReservation\StructType\TotalTaxes $totalTaxes
     * @param string $taxExemptIndicator
     * @param \Sabre\UpdateReservation\StructType\BagWeight $bagWeight
     * @param string $fareCalculationModeIndicator
     * @param string $fareCalculationPriceIndicator
     * @param int $bagOccurence
     * @param int $statusIndicator
     * @param string $numberOfItems
     * @param string $actionCode
     * @param string $segmentIndicator
     * @param string $frequentFlyerTier
     * @param string $refundFormIndicator
     * @param string $fareGuaranteedIndicator
     * @param string $serviceChargeIndicator
     * @param string $advancePurchaseIndicator
     * @param string $bookingSource
     * @param string $taxIndicator
     * @param string $ticketingIndicator
     * @param string $feeWaiveReason
     * @param string $fulfillmentType
     * @param string $aaPayOriginalSeat
     * @param string $pdcSeat
     * @param string $equipmentType
     * @param string $aaPayOptionalStatus
     * @param string $firstTravelDate
     * @param string $lastTravelDate
     * @param string $tTYConfirmationTimestamp
     * @param string $purchaseTimestamp
     * @param string $brandedFareId
     * @param string $groupCode
     * @param string $tourCode
     * @param string $emdPaperIndicator
     * @param string $seatRequestTransactionID
     * @param string $ticketUsedForEMDPricing
     * @param string $eMDConsummedAtIssuance
     * @param string $paperDocRequired
     * @param string $taxExemption
     * @param int $aCSCount
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $netAmount
     * @param int $priceQuoteDesignator
     * @param string $priceMismatchAction
     * @param \Sabre\UpdateReservation\StructType\SegmentOrTravelPortionType $segment
     * @param \Sabre\UpdateReservation\StructType\TravelPortions $travelPortions
     * @param string $id
     * @param string $op
     * @param string $elementId
     * @param string $updateId
     */
    public function __construct(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null, \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null, $commercialName = null, $rficCode = null, $rficSubcode = null, $sSRCode = null, \Sabre\UpdateReservation\StructType\ProductTextDetails $productTextDetails = null, $productText = null, $owningCarrierCode = null, $ssimCode = null, $bookingIndicator = null, $vendor = null, $eMDType = null, $eMDNumber = null, $eMDCoupon = null, $serviceFeeLineNumber = null, $displayOnlyIndicator = null, $consumptionIndicator = null, $presentTo = null, $atCity = null, $endorsements = null, $stationIndicator = null, $serviceCity = null, $serviceCityDestination = null, $serviceType = null, \Sabre\UpdateReservation\StructType\RuleSet $ruleSet = null, $ancillarySequenceNumber = null, $offerItemID = null, \Sabre\UpdateReservation\StructType\OriginalPrice $originalPrice = null, $quantity = null, $segmentNumber = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null, $portionOfTravelIndicator = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null, $refundIndicator = null, $commisionIndicator = null, $interlineIndicator = null, $feeApplicationIndicator = null, $passengerTypeCode = null, $boardPoint = null, $offPoint = null, $taxesIncluded = null, \Sabre\UpdateReservation\StructType\Taxes $taxes = null, $softMatchIndicator = null, $noChargeNotAvailIndicator = null, \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation $ticketCouponNumberAssociation = null, $simultaneousTicketIndicator = null, $formOfRefund = null, $feeNotGuaranteedIndicator = null, $fQTVTierLevel = null, $tourCodeSHC = null, $travelDateEffective = null, $latestTravelDatePermitted = null, $purchaseByDate = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalOriginalBasePrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalEquivalentPrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalTTLPrice = null, \Sabre\UpdateReservation\StructType\TotalTaxes $totalTaxes = null, $taxExemptIndicator = null, \Sabre\UpdateReservation\StructType\BagWeight $bagWeight = null, $fareCalculationModeIndicator = null, $fareCalculationPriceIndicator = null, $bagOccurence = null, $statusIndicator = null, $numberOfItems = null, $actionCode = null, $segmentIndicator = null, $frequentFlyerTier = null, $refundFormIndicator = null, $fareGuaranteedIndicator = null, $serviceChargeIndicator = null, $advancePurchaseIndicator = null, $bookingSource = null, $taxIndicator = null, $ticketingIndicator = null, $feeWaiveReason = null, $fulfillmentType = null, $aaPayOriginalSeat = null, $pdcSeat = null, $equipmentType = null, $aaPayOptionalStatus = null, $firstTravelDate = null, $lastTravelDate = null, $tTYConfirmationTimestamp = null, $purchaseTimestamp = null, $brandedFareId = null, $groupCode = null, $tourCode = null, $emdPaperIndicator = null, $seatRequestTransactionID = null, $ticketUsedForEMDPricing = null, $eMDConsummedAtIssuance = null, $paperDocRequired = null, $taxExemption = null, $aCSCount = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $netAmount = null, $priceQuoteDesignator = null, $priceMismatchAction = null, \Sabre\UpdateReservation\StructType\SegmentOrTravelPortionType $segment = null, \Sabre\UpdateReservation\StructType\TravelPortions $travelPortions = null, $id = null, $op = null, $elementId = null, $updateId = null)
    {
        $this
            ->setNameAssociationList($nameAssociationList)
            ->setSegmentAssociationList($segmentAssociationList)
            ->setCommercialName($commercialName)
            ->setRficCode($rficCode)
            ->setRficSubcode($rficSubcode)
            ->setSSRCode($sSRCode)
            ->setProductTextDetails($productTextDetails)
            ->setProductText($productText)
            ->setOwningCarrierCode($owningCarrierCode)
            ->setSsimCode($ssimCode)
            ->setBookingIndicator($bookingIndicator)
            ->setVendor($vendor)
            ->setEMDType($eMDType)
            ->setEMDNumber($eMDNumber)
            ->setEMDCoupon($eMDCoupon)
            ->setServiceFeeLineNumber($serviceFeeLineNumber)
            ->setDisplayOnlyIndicator($displayOnlyIndicator)
            ->setConsumptionIndicator($consumptionIndicator)
            ->setPresentTo($presentTo)
            ->setAtCity($atCity)
            ->setEndorsements($endorsements)
            ->setStationIndicator($stationIndicator)
            ->setServiceCity($serviceCity)
            ->setServiceCityDestination($serviceCityDestination)
            ->setServiceType($serviceType)
            ->setRuleSet($ruleSet)
            ->setAncillarySequenceNumber($ancillarySequenceNumber)
            ->setOfferItemID($offerItemID)
            ->setOriginalPrice($originalPrice)
            ->setQuantity($quantity)
            ->setSegmentNumber($segmentNumber)
            ->setEquivalentPrice($equivalentPrice)
            ->setTTLPrice($tTLPrice)
            ->setPortionOfTravelIndicator($portionOfTravelIndicator)
            ->setOriginalBasePrice($originalBasePrice)
            ->setRefundIndicator($refundIndicator)
            ->setCommisionIndicator($commisionIndicator)
            ->setInterlineIndicator($interlineIndicator)
            ->setFeeApplicationIndicator($feeApplicationIndicator)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setTaxesIncluded($taxesIncluded)
            ->setTaxes($taxes)
            ->setSoftMatchIndicator($softMatchIndicator)
            ->setNoChargeNotAvailIndicator($noChargeNotAvailIndicator)
            ->setTicketCouponNumberAssociation($ticketCouponNumberAssociation)
            ->setSimultaneousTicketIndicator($simultaneousTicketIndicator)
            ->setFormOfRefund($formOfRefund)
            ->setFeeNotGuaranteedIndicator($feeNotGuaranteedIndicator)
            ->setFQTVTierLevel($fQTVTierLevel)
            ->setTourCodeSHC($tourCodeSHC)
            ->setTravelDateEffective($travelDateEffective)
            ->setLatestTravelDatePermitted($latestTravelDatePermitted)
            ->setPurchaseByDate($purchaseByDate)
            ->setTotalOriginalBasePrice($totalOriginalBasePrice)
            ->setTotalEquivalentPrice($totalEquivalentPrice)
            ->setTotalTTLPrice($totalTTLPrice)
            ->setTotalTaxes($totalTaxes)
            ->setTaxExemptIndicator($taxExemptIndicator)
            ->setBagWeight($bagWeight)
            ->setFareCalculationModeIndicator($fareCalculationModeIndicator)
            ->setFareCalculationPriceIndicator($fareCalculationPriceIndicator)
            ->setBagOccurence($bagOccurence)
            ->setStatusIndicator($statusIndicator)
            ->setNumberOfItems($numberOfItems)
            ->setActionCode($actionCode)
            ->setSegmentIndicator($segmentIndicator)
            ->setFrequentFlyerTier($frequentFlyerTier)
            ->setRefundFormIndicator($refundFormIndicator)
            ->setFareGuaranteedIndicator($fareGuaranteedIndicator)
            ->setServiceChargeIndicator($serviceChargeIndicator)
            ->setAdvancePurchaseIndicator($advancePurchaseIndicator)
            ->setBookingSource($bookingSource)
            ->setTaxIndicator($taxIndicator)
            ->setTicketingIndicator($ticketingIndicator)
            ->setFeeWaiveReason($feeWaiveReason)
            ->setFulfillmentType($fulfillmentType)
            ->setAaPayOriginalSeat($aaPayOriginalSeat)
            ->setPdcSeat($pdcSeat)
            ->setEquipmentType($equipmentType)
            ->setAaPayOptionalStatus($aaPayOptionalStatus)
            ->setFirstTravelDate($firstTravelDate)
            ->setLastTravelDate($lastTravelDate)
            ->setTTYConfirmationTimestamp($tTYConfirmationTimestamp)
            ->setPurchaseTimestamp($purchaseTimestamp)
            ->setBrandedFareId($brandedFareId)
            ->setGroupCode($groupCode)
            ->setTourCode($tourCode)
            ->setEmdPaperIndicator($emdPaperIndicator)
            ->setSeatRequestTransactionID($seatRequestTransactionID)
            ->setTicketUsedForEMDPricing($ticketUsedForEMDPricing)
            ->setEMDConsummedAtIssuance($eMDConsummedAtIssuance)
            ->setPaperDocRequired($paperDocRequired)
            ->setTaxExemption($taxExemption)
            ->setACSCount($aCSCount)
            ->setNetAmount($netAmount)
            ->setPriceQuoteDesignator($priceQuoteDesignator)
            ->setPriceMismatchAction($priceMismatchAction)
            ->setSegment($segment)
            ->setTravelPortions($travelPortions)
            ->setId($id)
            ->setOp($op)
            ->setElementId($elementId)
            ->setUpdateId($updateId);
    }
    /**
     * Get NameAssociationList value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB|null
     */
    public function getNameAssociationList()
    {
        return $this->NameAssociationList;
    }
    /**
     * Set NameAssociationList value
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setNameAssociationList(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null)
    {
        $this->NameAssociationList = $nameAssociationList;
        return $this;
    }
    /**
     * Get SegmentAssociationList value
     * @return \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB|null
     */
    public function getSegmentAssociationList()
    {
        return $this->SegmentAssociationList;
    }
    /**
     * Set SegmentAssociationList value
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSegmentAssociationList(\Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null)
    {
        $this->SegmentAssociationList = $segmentAssociationList;
        return $this;
    }
    /**
     * Get CommercialName value
     * @return string|null
     */
    public function getCommercialName()
    {
        return $this->CommercialName;
    }
    /**
     * Set CommercialName value
     * @param string $commercialName
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setCommercialName($commercialName = null)
    {
        // validation for constraint: string
        if (!is_null($commercialName) && !is_string($commercialName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commercialName)), __LINE__);
        }
        $this->CommercialName = $commercialName;
        return $this;
    }
    /**
     * Get RficCode value
     * @return string|null
     */
    public function getRficCode()
    {
        return $this->RficCode;
    }
    /**
     * Set RficCode value
     * @param string $rficCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setRficCode($rficCode = null)
    {
        // validation for constraint: string
        if (!is_null($rficCode) && !is_string($rficCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rficCode)), __LINE__);
        }
        $this->RficCode = $rficCode;
        return $this;
    }
    /**
     * Get RficSubcode value
     * @return string|null
     */
    public function getRficSubcode()
    {
        return $this->RficSubcode;
    }
    /**
     * Set RficSubcode value
     * @param string $rficSubcode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setRficSubcode($rficSubcode = null)
    {
        // validation for constraint: string
        if (!is_null($rficSubcode) && !is_string($rficSubcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rficSubcode)), __LINE__);
        }
        $this->RficSubcode = $rficSubcode;
        return $this;
    }
    /**
     * Get SSRCode value
     * @return string|null
     */
    public function getSSRCode()
    {
        return $this->SSRCode;
    }
    /**
     * Set SSRCode value
     * @param string $sSRCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSSRCode($sSRCode = null)
    {
        // validation for constraint: string
        if (!is_null($sSRCode) && !is_string($sSRCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSRCode)), __LINE__);
        }
        $this->SSRCode = $sSRCode;
        return $this;
    }
    /**
     * Get ProductTextDetails value
     * @return \Sabre\UpdateReservation\StructType\ProductTextDetails|null
     */
    public function getProductTextDetails()
    {
        return $this->ProductTextDetails;
    }
    /**
     * Set ProductTextDetails value
     * @param \Sabre\UpdateReservation\StructType\ProductTextDetails $productTextDetails
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setProductTextDetails(\Sabre\UpdateReservation\StructType\ProductTextDetails $productTextDetails = null)
    {
        $this->ProductTextDetails = $productTextDetails;
        return $this;
    }
    /**
     * Get ProductText value
     * @return string|null
     */
    public function getProductText()
    {
        return $this->ProductText;
    }
    /**
     * Set ProductText value
     * @param string $productText
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setProductText($productText = null)
    {
        // validation for constraint: string
        if (!is_null($productText) && !is_string($productText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productText)), __LINE__);
        }
        $this->ProductText = $productText;
        return $this;
    }
    /**
     * Get OwningCarrierCode value
     * @return string|null
     */
    public function getOwningCarrierCode()
    {
        return $this->OwningCarrierCode;
    }
    /**
     * Set OwningCarrierCode value
     * @param string $owningCarrierCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setOwningCarrierCode($owningCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($owningCarrierCode) && !is_string($owningCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owningCarrierCode)), __LINE__);
        }
        $this->OwningCarrierCode = $owningCarrierCode;
        return $this;
    }
    /**
     * Get SsimCode value
     * @return string|null
     */
    public function getSsimCode()
    {
        return $this->SsimCode;
    }
    /**
     * Set SsimCode value
     * @param string $ssimCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSsimCode($ssimCode = null)
    {
        // validation for constraint: string
        if (!is_null($ssimCode) && !is_string($ssimCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ssimCode)), __LINE__);
        }
        $this->SsimCode = $ssimCode;
        return $this;
    }
    /**
     * Get BookingIndicator value
     * @return string|null
     */
    public function getBookingIndicator()
    {
        return $this->BookingIndicator;
    }
    /**
     * Set BookingIndicator value
     * @param string $bookingIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setBookingIndicator($bookingIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($bookingIndicator) && !is_string($bookingIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingIndicator)), __LINE__);
        }
        $this->BookingIndicator = $bookingIndicator;
        return $this;
    }
    /**
     * Get Vendor value
     * @return string|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param string $vendor
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setVendor($vendor = null)
    {
        // validation for constraint: string
        if (!is_null($vendor) && !is_string($vendor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendor)), __LINE__);
        }
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get EMDType value
     * @return string|null
     */
    public function getEMDType()
    {
        return $this->EMDType;
    }
    /**
     * Set EMDType value
     * @param string $eMDType
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEMDType($eMDType = null)
    {
        // validation for constraint: string
        if (!is_null($eMDType) && !is_string($eMDType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDType)), __LINE__);
        }
        $this->EMDType = $eMDType;
        return $this;
    }
    /**
     * Get EMDNumber value
     * @return string|null
     */
    public function getEMDNumber()
    {
        return $this->EMDNumber;
    }
    /**
     * Set EMDNumber value
     * @param string $eMDNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEMDNumber($eMDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eMDNumber) && !is_string($eMDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDNumber)), __LINE__);
        }
        $this->EMDNumber = $eMDNumber;
        return $this;
    }
    /**
     * Get EMDCoupon value
     * @return string|null
     */
    public function getEMDCoupon()
    {
        return $this->EMDCoupon;
    }
    /**
     * Set EMDCoupon value
     * @param string $eMDCoupon
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEMDCoupon($eMDCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($eMDCoupon) && !is_string($eMDCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDCoupon)), __LINE__);
        }
        $this->EMDCoupon = $eMDCoupon;
        return $this;
    }
    /**
     * Get ServiceFeeLineNumber value
     * @return string|null
     */
    public function getServiceFeeLineNumber()
    {
        return $this->ServiceFeeLineNumber;
    }
    /**
     * Set ServiceFeeLineNumber value
     * @param string $serviceFeeLineNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setServiceFeeLineNumber($serviceFeeLineNumber = null)
    {
        // validation for constraint: string
        if (!is_null($serviceFeeLineNumber) && !is_string($serviceFeeLineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceFeeLineNumber)), __LINE__);
        }
        $this->ServiceFeeLineNumber = $serviceFeeLineNumber;
        return $this;
    }
    /**
     * Get DisplayOnlyIndicator value
     * @return bool|null
     */
    public function getDisplayOnlyIndicator()
    {
        return $this->DisplayOnlyIndicator;
    }
    /**
     * Set DisplayOnlyIndicator value
     * @param bool $displayOnlyIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setDisplayOnlyIndicator($displayOnlyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayOnlyIndicator) && !is_bool($displayOnlyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($displayOnlyIndicator)), __LINE__);
        }
        $this->DisplayOnlyIndicator = $displayOnlyIndicator;
        return $this;
    }
    /**
     * Get ConsumptionIndicator value
     * @return string|null
     */
    public function getConsumptionIndicator()
    {
        return $this->ConsumptionIndicator;
    }
    /**
     * Set ConsumptionIndicator value
     * @param string $consumptionIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setConsumptionIndicator($consumptionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($consumptionIndicator) && !is_string($consumptionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($consumptionIndicator)), __LINE__);
        }
        $this->ConsumptionIndicator = $consumptionIndicator;
        return $this;
    }
    /**
     * Get PresentTo value
     * @return string|null
     */
    public function getPresentTo()
    {
        return $this->PresentTo;
    }
    /**
     * Set PresentTo value
     * @param string $presentTo
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPresentTo($presentTo = null)
    {
        // validation for constraint: string
        if (!is_null($presentTo) && !is_string($presentTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($presentTo)), __LINE__);
        }
        $this->PresentTo = $presentTo;
        return $this;
    }
    /**
     * Get AtCity value
     * @return string|null
     */
    public function getAtCity()
    {
        return $this->AtCity;
    }
    /**
     * Set AtCity value
     * @param string $atCity
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setAtCity($atCity = null)
    {
        // validation for constraint: string
        if (!is_null($atCity) && !is_string($atCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($atCity)), __LINE__);
        }
        $this->AtCity = $atCity;
        return $this;
    }
    /**
     * Get Endorsements value
     * @return string|null
     */
    public function getEndorsements()
    {
        return $this->Endorsements;
    }
    /**
     * Set Endorsements value
     * @param string $endorsements
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEndorsements($endorsements = null)
    {
        // validation for constraint: string
        if (!is_null($endorsements) && !is_string($endorsements)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endorsements)), __LINE__);
        }
        $this->Endorsements = $endorsements;
        return $this;
    }
    /**
     * Get StationIndicator value
     * @return string|null
     */
    public function getStationIndicator()
    {
        return $this->StationIndicator;
    }
    /**
     * Set StationIndicator value
     * @param string $stationIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setStationIndicator($stationIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($stationIndicator) && !is_string($stationIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stationIndicator)), __LINE__);
        }
        $this->StationIndicator = $stationIndicator;
        return $this;
    }
    /**
     * Get ServiceCity value
     * @return string|null
     */
    public function getServiceCity()
    {
        return $this->ServiceCity;
    }
    /**
     * Set ServiceCity value
     * @param string $serviceCity
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setServiceCity($serviceCity = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCity) && !is_string($serviceCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCity)), __LINE__);
        }
        $this->ServiceCity = $serviceCity;
        return $this;
    }
    /**
     * Get ServiceCityDestination value
     * @return string|null
     */
    public function getServiceCityDestination()
    {
        return $this->ServiceCityDestination;
    }
    /**
     * Set ServiceCityDestination value
     * @param string $serviceCityDestination
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setServiceCityDestination($serviceCityDestination = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCityDestination) && !is_string($serviceCityDestination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCityDestination)), __LINE__);
        }
        $this->ServiceCityDestination = $serviceCityDestination;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: pattern
        if (is_scalar($serviceType) && !preg_match('/[A-Z]/', $serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]", "%s" given', var_export($serviceType, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceType)), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get RuleSet value
     * @return \Sabre\UpdateReservation\StructType\RuleSet|null
     */
    public function getRuleSet()
    {
        return $this->RuleSet;
    }
    /**
     * Set RuleSet value
     * @param \Sabre\UpdateReservation\StructType\RuleSet $ruleSet
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setRuleSet(\Sabre\UpdateReservation\StructType\RuleSet $ruleSet = null)
    {
        $this->RuleSet = $ruleSet;
        return $this;
    }
    /**
     * Get AncillarySequenceNumber value
     * @return string|null
     */
    public function getAncillarySequenceNumber()
    {
        return $this->AncillarySequenceNumber;
    }
    /**
     * Set AncillarySequenceNumber value
     * @param string $ancillarySequenceNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setAncillarySequenceNumber($ancillarySequenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ancillarySequenceNumber) && !is_string($ancillarySequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ancillarySequenceNumber)), __LINE__);
        }
        $this->AncillarySequenceNumber = $ancillarySequenceNumber;
        return $this;
    }
    /**
     * Get OfferItemID value
     * @return string|null
     */
    public function getOfferItemID()
    {
        return $this->OfferItemID;
    }
    /**
     * Set OfferItemID value
     * @param string $offerItemID
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setOfferItemID($offerItemID = null)
    {
        // validation for constraint: string
        if (!is_null($offerItemID) && !is_string($offerItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerItemID)), __LINE__);
        }
        $this->OfferItemID = $offerItemID;
        return $this;
    }
    /**
     * Get OriginalPrice value
     * @return \Sabre\UpdateReservation\StructType\OriginalPrice|null
     */
    public function getOriginalPrice()
    {
        return $this->OriginalPrice;
    }
    /**
     * Set OriginalPrice value
     * @param \Sabre\UpdateReservation\StructType\OriginalPrice $originalPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setOriginalPrice(\Sabre\UpdateReservation\StructType\OriginalPrice $originalPrice = null)
    {
        $this->OriginalPrice = $originalPrice;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get SegmentNumber value
     * @return string|null
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @param string $segmentNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 24) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 24, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($segmentNumber) && $segmentNumber < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($segmentNumber) && !is_string($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get EquivalentPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getEquivalentPrice()
    {
        return $this->EquivalentPrice;
    }
    /**
     * Set EquivalentPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEquivalentPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null)
    {
        $this->EquivalentPrice = $equivalentPrice;
        return $this;
    }
    /**
     * Get TTLPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getTTLPrice()
    {
        return $this->TTLPrice;
    }
    /**
     * Set TTLPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTTLPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null)
    {
        $this->TTLPrice = $tTLPrice;
        return $this;
    }
    /**
     * Get PortionOfTravelIndicator value
     * @return string|null
     */
    public function getPortionOfTravelIndicator()
    {
        return $this->PortionOfTravelIndicator;
    }
    /**
     * Set PortionOfTravelIndicator value
     * @param string $portionOfTravelIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPortionOfTravelIndicator($portionOfTravelIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($portionOfTravelIndicator) && !is_string($portionOfTravelIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($portionOfTravelIndicator)), __LINE__);
        }
        $this->PortionOfTravelIndicator = $portionOfTravelIndicator;
        return $this;
    }
    /**
     * Get OriginalBasePrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getOriginalBasePrice()
    {
        return $this->OriginalBasePrice;
    }
    /**
     * Set OriginalBasePrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setOriginalBasePrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null)
    {
        $this->OriginalBasePrice = $originalBasePrice;
        return $this;
    }
    /**
     * Get RefundIndicator value
     * @return string|null
     */
    public function getRefundIndicator()
    {
        return $this->RefundIndicator;
    }
    /**
     * Set RefundIndicator value
     * @param string $refundIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setRefundIndicator($refundIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($refundIndicator) && !is_string($refundIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundIndicator)), __LINE__);
        }
        $this->RefundIndicator = $refundIndicator;
        return $this;
    }
    /**
     * Get CommisionIndicator value
     * @return string|null
     */
    public function getCommisionIndicator()
    {
        return $this->CommisionIndicator;
    }
    /**
     * Set CommisionIndicator value
     * @param string $commisionIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setCommisionIndicator($commisionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($commisionIndicator) && !is_string($commisionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commisionIndicator)), __LINE__);
        }
        $this->CommisionIndicator = $commisionIndicator;
        return $this;
    }
    /**
     * Get InterlineIndicator value
     * @return string|null
     */
    public function getInterlineIndicator()
    {
        return $this->InterlineIndicator;
    }
    /**
     * Set InterlineIndicator value
     * @param string $interlineIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setInterlineIndicator($interlineIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($interlineIndicator) && !is_string($interlineIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interlineIndicator)), __LINE__);
        }
        $this->InterlineIndicator = $interlineIndicator;
        return $this;
    }
    /**
     * Get FeeApplicationIndicator value
     * @return string|null
     */
    public function getFeeApplicationIndicator()
    {
        return $this->FeeApplicationIndicator;
    }
    /**
     * Set FeeApplicationIndicator value
     * @param string $feeApplicationIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFeeApplicationIndicator($feeApplicationIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($feeApplicationIndicator) && !is_string($feeApplicationIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeApplicationIndicator)), __LINE__);
        }
        $this->FeeApplicationIndicator = $feeApplicationIndicator;
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Get BoardPoint value
     * @return string|null
     */
    public function getBoardPoint()
    {
        return $this->BoardPoint;
    }
    /**
     * Set BoardPoint value
     * @param string $boardPoint
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setBoardPoint($boardPoint = null)
    {
        // validation for constraint: string
        if (!is_null($boardPoint) && !is_string($boardPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardPoint)), __LINE__);
        }
        $this->BoardPoint = $boardPoint;
        return $this;
    }
    /**
     * Get OffPoint value
     * @return string|null
     */
    public function getOffPoint()
    {
        return $this->OffPoint;
    }
    /**
     * Set OffPoint value
     * @param string $offPoint
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setOffPoint($offPoint = null)
    {
        // validation for constraint: string
        if (!is_null($offPoint) && !is_string($offPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offPoint)), __LINE__);
        }
        $this->OffPoint = $offPoint;
        return $this;
    }
    /**
     * Get TaxesIncluded value
     * @return bool|null
     */
    public function getTaxesIncluded()
    {
        return $this->TaxesIncluded;
    }
    /**
     * Set TaxesIncluded value
     * @param bool $taxesIncluded
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTaxesIncluded($taxesIncluded = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxesIncluded) && !is_bool($taxesIncluded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxesIncluded)), __LINE__);
        }
        $this->TaxesIncluded = $taxesIncluded;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get SoftMatchIndicator value
     * @return bool|null
     */
    public function getSoftMatchIndicator()
    {
        return $this->SoftMatchIndicator;
    }
    /**
     * Set SoftMatchIndicator value
     * @param bool $softMatchIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSoftMatchIndicator($softMatchIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($softMatchIndicator) && !is_bool($softMatchIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($softMatchIndicator)), __LINE__);
        }
        $this->SoftMatchIndicator = $softMatchIndicator;
        return $this;
    }
    /**
     * Get NoChargeNotAvailIndicator value
     * @return string|null
     */
    public function getNoChargeNotAvailIndicator()
    {
        return $this->NoChargeNotAvailIndicator;
    }
    /**
     * Set NoChargeNotAvailIndicator value
     * @param string $noChargeNotAvailIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setNoChargeNotAvailIndicator($noChargeNotAvailIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($noChargeNotAvailIndicator) && !is_string($noChargeNotAvailIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noChargeNotAvailIndicator)), __LINE__);
        }
        $this->NoChargeNotAvailIndicator = $noChargeNotAvailIndicator;
        return $this;
    }
    /**
     * Get TicketCouponNumberAssociation value
     * @return \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation|null
     */
    public function getTicketCouponNumberAssociation()
    {
        return $this->TicketCouponNumberAssociation;
    }
    /**
     * Set TicketCouponNumberAssociation value
     * @param \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation $ticketCouponNumberAssociation
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTicketCouponNumberAssociation(\Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation $ticketCouponNumberAssociation = null)
    {
        $this->TicketCouponNumberAssociation = $ticketCouponNumberAssociation;
        return $this;
    }
    /**
     * Get SimultaneousTicketIndicator value
     * @return string|null
     */
    public function getSimultaneousTicketIndicator()
    {
        return $this->SimultaneousTicketIndicator;
    }
    /**
     * Set SimultaneousTicketIndicator value
     * @param string $simultaneousTicketIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSimultaneousTicketIndicator($simultaneousTicketIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($simultaneousTicketIndicator) && !is_string($simultaneousTicketIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($simultaneousTicketIndicator)), __LINE__);
        }
        $this->SimultaneousTicketIndicator = $simultaneousTicketIndicator;
        return $this;
    }
    /**
     * Get FormOfRefund value
     * @return string|null
     */
    public function getFormOfRefund()
    {
        return $this->FormOfRefund;
    }
    /**
     * Set FormOfRefund value
     * @param string $formOfRefund
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFormOfRefund($formOfRefund = null)
    {
        // validation for constraint: string
        if (!is_null($formOfRefund) && !is_string($formOfRefund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfRefund)), __LINE__);
        }
        $this->FormOfRefund = $formOfRefund;
        return $this;
    }
    /**
     * Get FeeNotGuaranteedIndicator value
     * @return bool|null
     */
    public function getFeeNotGuaranteedIndicator()
    {
        return $this->FeeNotGuaranteedIndicator;
    }
    /**
     * Set FeeNotGuaranteedIndicator value
     * @param bool $feeNotGuaranteedIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFeeNotGuaranteedIndicator($feeNotGuaranteedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($feeNotGuaranteedIndicator) && !is_bool($feeNotGuaranteedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($feeNotGuaranteedIndicator)), __LINE__);
        }
        $this->FeeNotGuaranteedIndicator = $feeNotGuaranteedIndicator;
        return $this;
    }
    /**
     * Get FQTVTierLevel value
     * @return int|null
     */
    public function getFQTVTierLevel()
    {
        return $this->FQTVTierLevel;
    }
    /**
     * Set FQTVTierLevel value
     * @param int $fQTVTierLevel
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFQTVTierLevel($fQTVTierLevel = null)
    {
        // validation for constraint: int
        if (!is_null($fQTVTierLevel) && !is_numeric($fQTVTierLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fQTVTierLevel)), __LINE__);
        }
        $this->FQTVTierLevel = $fQTVTierLevel;
        return $this;
    }
    /**
     * Get TourCodeSHC value
     * @return string|null
     */
    public function getTourCodeSHC()
    {
        return $this->TourCodeSHC;
    }
    /**
     * Set TourCodeSHC value
     * @param string $tourCodeSHC
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTourCodeSHC($tourCodeSHC = null)
    {
        // validation for constraint: string
        if (!is_null($tourCodeSHC) && !is_string($tourCodeSHC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourCodeSHC)), __LINE__);
        }
        $this->TourCodeSHC = $tourCodeSHC;
        return $this;
    }
    /**
     * Get TravelDateEffective value
     * @return string|null
     */
    public function getTravelDateEffective()
    {
        return $this->TravelDateEffective;
    }
    /**
     * Set TravelDateEffective value
     * @param string $travelDateEffective
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTravelDateEffective($travelDateEffective = null)
    {
        // validation for constraint: string
        if (!is_null($travelDateEffective) && !is_string($travelDateEffective)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelDateEffective)), __LINE__);
        }
        $this->TravelDateEffective = $travelDateEffective;
        return $this;
    }
    /**
     * Get LatestTravelDatePermitted value
     * @return string|null
     */
    public function getLatestTravelDatePermitted()
    {
        return $this->LatestTravelDatePermitted;
    }
    /**
     * Set LatestTravelDatePermitted value
     * @param string $latestTravelDatePermitted
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setLatestTravelDatePermitted($latestTravelDatePermitted = null)
    {
        // validation for constraint: string
        if (!is_null($latestTravelDatePermitted) && !is_string($latestTravelDatePermitted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestTravelDatePermitted)), __LINE__);
        }
        $this->LatestTravelDatePermitted = $latestTravelDatePermitted;
        return $this;
    }
    /**
     * Get PurchaseByDate value
     * @return string|null
     */
    public function getPurchaseByDate()
    {
        return $this->PurchaseByDate;
    }
    /**
     * Set PurchaseByDate value
     * @param string $purchaseByDate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPurchaseByDate($purchaseByDate = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseByDate) && !is_string($purchaseByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseByDate)), __LINE__);
        }
        $this->PurchaseByDate = $purchaseByDate;
        return $this;
    }
    /**
     * Get TotalOriginalBasePrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getTotalOriginalBasePrice()
    {
        return $this->TotalOriginalBasePrice;
    }
    /**
     * Set TotalOriginalBasePrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalOriginalBasePrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTotalOriginalBasePrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalOriginalBasePrice = null)
    {
        $this->TotalOriginalBasePrice = $totalOriginalBasePrice;
        return $this;
    }
    /**
     * Get TotalEquivalentPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getTotalEquivalentPrice()
    {
        return $this->TotalEquivalentPrice;
    }
    /**
     * Set TotalEquivalentPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalEquivalentPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTotalEquivalentPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalEquivalentPrice = null)
    {
        $this->TotalEquivalentPrice = $totalEquivalentPrice;
        return $this;
    }
    /**
     * Get TotalTTLPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getTotalTTLPrice()
    {
        return $this->TotalTTLPrice;
    }
    /**
     * Set TotalTTLPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalTTLPrice
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTotalTTLPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalTTLPrice = null)
    {
        $this->TotalTTLPrice = $totalTTLPrice;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \Sabre\UpdateReservation\StructType\TotalTaxes|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \Sabre\UpdateReservation\StructType\TotalTaxes $totalTaxes
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTotalTaxes(\Sabre\UpdateReservation\StructType\TotalTaxes $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get TaxExemptIndicator value
     * @return string|null
     */
    public function getTaxExemptIndicator()
    {
        return $this->TaxExemptIndicator;
    }
    /**
     * Set TaxExemptIndicator value
     * @param string $taxExemptIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTaxExemptIndicator($taxExemptIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($taxExemptIndicator) && !is_string($taxExemptIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxExemptIndicator)), __LINE__);
        }
        $this->TaxExemptIndicator = $taxExemptIndicator;
        return $this;
    }
    /**
     * Get BagWeight value
     * @return \Sabre\UpdateReservation\StructType\BagWeight|null
     */
    public function getBagWeight()
    {
        return $this->BagWeight;
    }
    /**
     * Set BagWeight value
     * @param \Sabre\UpdateReservation\StructType\BagWeight $bagWeight
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setBagWeight(\Sabre\UpdateReservation\StructType\BagWeight $bagWeight = null)
    {
        $this->BagWeight = $bagWeight;
        return $this;
    }
    /**
     * Get FareCalculationModeIndicator value
     * @return string|null
     */
    public function getFareCalculationModeIndicator()
    {
        return $this->FareCalculationModeIndicator;
    }
    /**
     * Set FareCalculationModeIndicator value
     * @uses \Sabre\UpdateReservation\EnumType\FCMIType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\FCMIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareCalculationModeIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFareCalculationModeIndicator($fareCalculationModeIndicator = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\FCMIType::valueIsValid($fareCalculationModeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareCalculationModeIndicator, implode(', ', \Sabre\UpdateReservation\EnumType\FCMIType::getValidValues())), __LINE__);
        }
        $this->FareCalculationModeIndicator = $fareCalculationModeIndicator;
        return $this;
    }
    /**
     * Get FareCalculationPriceIndicator value
     * @return string|null
     */
    public function getFareCalculationPriceIndicator()
    {
        return $this->FareCalculationPriceIndicator;
    }
    /**
     * Set FareCalculationPriceIndicator value
     * @param string $fareCalculationPriceIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFareCalculationPriceIndicator($fareCalculationPriceIndicator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($fareCalculationPriceIndicator) && !preg_match('/[0-9A-Z]/', $fareCalculationPriceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]", "%s" given', var_export($fareCalculationPriceIndicator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($fareCalculationPriceIndicator) && !is_string($fareCalculationPriceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalculationPriceIndicator)), __LINE__);
        }
        $this->FareCalculationPriceIndicator = $fareCalculationPriceIndicator;
        return $this;
    }
    /**
     * Get BagOccurence value
     * @return int|null
     */
    public function getBagOccurence()
    {
        return $this->BagOccurence;
    }
    /**
     * Set BagOccurence value
     * @param int $bagOccurence
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setBagOccurence($bagOccurence = null)
    {
        // validation for constraint: int
        if (!is_null($bagOccurence) && !is_numeric($bagOccurence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bagOccurence)), __LINE__);
        }
        $this->BagOccurence = $bagOccurence;
        return $this;
    }
    /**
     * Get StatusIndicator value
     * @return int|null
     */
    public function getStatusIndicator()
    {
        return $this->StatusIndicator;
    }
    /**
     * Set StatusIndicator value
     * @param int $statusIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setStatusIndicator($statusIndicator = null)
    {
        // validation for constraint: int
        if (!is_null($statusIndicator) && !is_numeric($statusIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusIndicator)), __LINE__);
        }
        $this->StatusIndicator = $statusIndicator;
        return $this;
    }
    /**
     * Get NumberOfItems value
     * @return string|null
     */
    public function getNumberOfItems()
    {
        return $this->NumberOfItems;
    }
    /**
     * Set NumberOfItems value
     * @param string $numberOfItems
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setNumberOfItems($numberOfItems = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfItems) && !is_string($numberOfItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfItems)), __LINE__);
        }
        $this->NumberOfItems = $numberOfItems;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get SegmentIndicator value
     * @return string|null
     */
    public function getSegmentIndicator()
    {
        return $this->SegmentIndicator;
    }
    /**
     * Set SegmentIndicator value
     * @param string $segmentIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSegmentIndicator($segmentIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($segmentIndicator) && !is_string($segmentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentIndicator)), __LINE__);
        }
        $this->SegmentIndicator = $segmentIndicator;
        return $this;
    }
    /**
     * Get FrequentFlyerTier value
     * @return string|null
     */
    public function getFrequentFlyerTier()
    {
        return $this->FrequentFlyerTier;
    }
    /**
     * Set FrequentFlyerTier value
     * @param string $frequentFlyerTier
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFrequentFlyerTier($frequentFlyerTier = null)
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerTier) && !is_string($frequentFlyerTier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlyerTier)), __LINE__);
        }
        $this->FrequentFlyerTier = $frequentFlyerTier;
        return $this;
    }
    /**
     * Get RefundFormIndicator value
     * @return string|null
     */
    public function getRefundFormIndicator()
    {
        return $this->RefundFormIndicator;
    }
    /**
     * Set RefundFormIndicator value
     * @param string $refundFormIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setRefundFormIndicator($refundFormIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($refundFormIndicator) && !is_string($refundFormIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundFormIndicator)), __LINE__);
        }
        $this->RefundFormIndicator = $refundFormIndicator;
        return $this;
    }
    /**
     * Get FareGuaranteedIndicator value
     * @return string|null
     */
    public function getFareGuaranteedIndicator()
    {
        return $this->FareGuaranteedIndicator;
    }
    /**
     * Set FareGuaranteedIndicator value
     * @param string $fareGuaranteedIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFareGuaranteedIndicator($fareGuaranteedIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($fareGuaranteedIndicator) && !is_string($fareGuaranteedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareGuaranteedIndicator)), __LINE__);
        }
        $this->FareGuaranteedIndicator = $fareGuaranteedIndicator;
        return $this;
    }
    /**
     * Get ServiceChargeIndicator value
     * @return string|null
     */
    public function getServiceChargeIndicator()
    {
        return $this->ServiceChargeIndicator;
    }
    /**
     * Set ServiceChargeIndicator value
     * @param string $serviceChargeIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setServiceChargeIndicator($serviceChargeIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($serviceChargeIndicator) && !is_string($serviceChargeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceChargeIndicator)), __LINE__);
        }
        $this->ServiceChargeIndicator = $serviceChargeIndicator;
        return $this;
    }
    /**
     * Get AdvancePurchaseIndicator value
     * @return string|null
     */
    public function getAdvancePurchaseIndicator()
    {
        return $this->AdvancePurchaseIndicator;
    }
    /**
     * Set AdvancePurchaseIndicator value
     * @param string $advancePurchaseIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setAdvancePurchaseIndicator($advancePurchaseIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($advancePurchaseIndicator) && !is_string($advancePurchaseIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($advancePurchaseIndicator)), __LINE__);
        }
        $this->AdvancePurchaseIndicator = $advancePurchaseIndicator;
        return $this;
    }
    /**
     * Get BookingSource value
     * @return string|null
     */
    public function getBookingSource()
    {
        return $this->BookingSource;
    }
    /**
     * Set BookingSource value
     * @param string $bookingSource
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setBookingSource($bookingSource = null)
    {
        // validation for constraint: string
        if (!is_null($bookingSource) && !is_string($bookingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingSource)), __LINE__);
        }
        $this->BookingSource = $bookingSource;
        return $this;
    }
    /**
     * Get TaxIndicator value
     * @return string|null
     */
    public function getTaxIndicator()
    {
        return $this->TaxIndicator;
    }
    /**
     * Set TaxIndicator value
     * @param string $taxIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTaxIndicator($taxIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($taxIndicator) && !is_string($taxIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxIndicator)), __LINE__);
        }
        $this->TaxIndicator = $taxIndicator;
        return $this;
    }
    /**
     * Get TicketingIndicator value
     * @return string|null
     */
    public function getTicketingIndicator()
    {
        return $this->TicketingIndicator;
    }
    /**
     * Set TicketingIndicator value
     * @param string $ticketingIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTicketingIndicator($ticketingIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingIndicator) && !is_string($ticketingIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingIndicator)), __LINE__);
        }
        $this->TicketingIndicator = $ticketingIndicator;
        return $this;
    }
    /**
     * Get FeeWaiveReason value
     * @return string|null
     */
    public function getFeeWaiveReason()
    {
        return $this->FeeWaiveReason;
    }
    /**
     * Set FeeWaiveReason value
     * @param string $feeWaiveReason
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFeeWaiveReason($feeWaiveReason = null)
    {
        // validation for constraint: string
        if (!is_null($feeWaiveReason) && !is_string($feeWaiveReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeWaiveReason)), __LINE__);
        }
        $this->FeeWaiveReason = $feeWaiveReason;
        return $this;
    }
    /**
     * Get FulfillmentType value
     * @return string|null
     */
    public function getFulfillmentType()
    {
        return $this->FulfillmentType;
    }
    /**
     * Set FulfillmentType value
     * @param string $fulfillmentType
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFulfillmentType($fulfillmentType = null)
    {
        // validation for constraint: string
        if (!is_null($fulfillmentType) && !is_string($fulfillmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fulfillmentType)), __LINE__);
        }
        $this->FulfillmentType = $fulfillmentType;
        return $this;
    }
    /**
     * Get AaPayOriginalSeat value
     * @return string|null
     */
    public function getAaPayOriginalSeat()
    {
        return $this->AaPayOriginalSeat;
    }
    /**
     * Set AaPayOriginalSeat value
     * @param string $aaPayOriginalSeat
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setAaPayOriginalSeat($aaPayOriginalSeat = null)
    {
        // validation for constraint: string
        if (!is_null($aaPayOriginalSeat) && !is_string($aaPayOriginalSeat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aaPayOriginalSeat)), __LINE__);
        }
        $this->AaPayOriginalSeat = $aaPayOriginalSeat;
        return $this;
    }
    /**
     * Get PdcSeat value
     * @return string|null
     */
    public function getPdcSeat()
    {
        return $this->PdcSeat;
    }
    /**
     * Set PdcSeat value
     * @param string $pdcSeat
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPdcSeat($pdcSeat = null)
    {
        // validation for constraint: string
        if (!is_null($pdcSeat) && !is_string($pdcSeat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pdcSeat)), __LINE__);
        }
        $this->PdcSeat = $pdcSeat;
        return $this;
    }
    /**
     * Get EquipmentType value
     * @return string|null
     */
    public function getEquipmentType()
    {
        return $this->EquipmentType;
    }
    /**
     * Set EquipmentType value
     * @param string $equipmentType
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEquipmentType($equipmentType = null)
    {
        // validation for constraint: string
        if (!is_null($equipmentType) && !is_string($equipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipmentType)), __LINE__);
        }
        $this->EquipmentType = $equipmentType;
        return $this;
    }
    /**
     * Get AaPayOptionalStatus value
     * @return string|null
     */
    public function getAaPayOptionalStatus()
    {
        return $this->AaPayOptionalStatus;
    }
    /**
     * Set AaPayOptionalStatus value
     * @param string $aaPayOptionalStatus
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setAaPayOptionalStatus($aaPayOptionalStatus = null)
    {
        // validation for constraint: string
        if (!is_null($aaPayOptionalStatus) && !is_string($aaPayOptionalStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aaPayOptionalStatus)), __LINE__);
        }
        $this->AaPayOptionalStatus = $aaPayOptionalStatus;
        return $this;
    }
    /**
     * Get FirstTravelDate value
     * @return string|null
     */
    public function getFirstTravelDate()
    {
        return $this->FirstTravelDate;
    }
    /**
     * Set FirstTravelDate value
     * @param string $firstTravelDate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setFirstTravelDate($firstTravelDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstTravelDate) && !is_string($firstTravelDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstTravelDate)), __LINE__);
        }
        $this->FirstTravelDate = $firstTravelDate;
        return $this;
    }
    /**
     * Get LastTravelDate value
     * @return string|null
     */
    public function getLastTravelDate()
    {
        return $this->LastTravelDate;
    }
    /**
     * Set LastTravelDate value
     * @param string $lastTravelDate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setLastTravelDate($lastTravelDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastTravelDate) && !is_string($lastTravelDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTravelDate)), __LINE__);
        }
        $this->LastTravelDate = $lastTravelDate;
        return $this;
    }
    /**
     * Get TTYConfirmationTimestamp value
     * @return string|null
     */
    public function getTTYConfirmationTimestamp()
    {
        return $this->TTYConfirmationTimestamp;
    }
    /**
     * Set TTYConfirmationTimestamp value
     * @param string $tTYConfirmationTimestamp
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTTYConfirmationTimestamp($tTYConfirmationTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($tTYConfirmationTimestamp) && !is_string($tTYConfirmationTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tTYConfirmationTimestamp)), __LINE__);
        }
        $this->TTYConfirmationTimestamp = $tTYConfirmationTimestamp;
        return $this;
    }
    /**
     * Get PurchaseTimestamp value
     * @return string|null
     */
    public function getPurchaseTimestamp()
    {
        return $this->PurchaseTimestamp;
    }
    /**
     * Set PurchaseTimestamp value
     * @param string $purchaseTimestamp
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPurchaseTimestamp($purchaseTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseTimestamp) && !is_string($purchaseTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseTimestamp)), __LINE__);
        }
        $this->PurchaseTimestamp = $purchaseTimestamp;
        return $this;
    }
    /**
     * Get BrandedFareId value
     * @return string|null
     */
    public function getBrandedFareId()
    {
        return $this->BrandedFareId;
    }
    /**
     * Set BrandedFareId value
     * @param string $brandedFareId
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setBrandedFareId($brandedFareId = null)
    {
        // validation for constraint: string
        if (!is_null($brandedFareId) && !is_string($brandedFareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandedFareId)), __LINE__);
        }
        $this->BrandedFareId = $brandedFareId;
        return $this;
    }
    /**
     * Get GroupCode value
     * @return string|null
     */
    public function getGroupCode()
    {
        return $this->GroupCode;
    }
    /**
     * Set GroupCode value
     * @param string $groupCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setGroupCode($groupCode = null)
    {
        // validation for constraint: string
        if (!is_null($groupCode) && !is_string($groupCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupCode)), __LINE__);
        }
        $this->GroupCode = $groupCode;
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTourCode($tourCode = null)
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get EmdPaperIndicator value
     * @return string|null
     */
    public function getEmdPaperIndicator()
    {
        return $this->EmdPaperIndicator;
    }
    /**
     * Set EmdPaperIndicator value
     * @param string $emdPaperIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEmdPaperIndicator($emdPaperIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($emdPaperIndicator) && !is_string($emdPaperIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emdPaperIndicator)), __LINE__);
        }
        $this->EmdPaperIndicator = $emdPaperIndicator;
        return $this;
    }
    /**
     * Get SeatRequestTransactionID value
     * @return string|null
     */
    public function getSeatRequestTransactionID()
    {
        return $this->SeatRequestTransactionID;
    }
    /**
     * Set SeatRequestTransactionID value
     * @param string $seatRequestTransactionID
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSeatRequestTransactionID($seatRequestTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($seatRequestTransactionID) && !is_string($seatRequestTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatRequestTransactionID)), __LINE__);
        }
        $this->SeatRequestTransactionID = $seatRequestTransactionID;
        return $this;
    }
    /**
     * Get TicketUsedForEMDPricing value
     * @return string|null
     */
    public function getTicketUsedForEMDPricing()
    {
        return $this->TicketUsedForEMDPricing;
    }
    /**
     * Set TicketUsedForEMDPricing value
     * @param string $ticketUsedForEMDPricing
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTicketUsedForEMDPricing($ticketUsedForEMDPricing = null)
    {
        // validation for constraint: string
        if (!is_null($ticketUsedForEMDPricing) && !is_string($ticketUsedForEMDPricing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketUsedForEMDPricing)), __LINE__);
        }
        $this->TicketUsedForEMDPricing = $ticketUsedForEMDPricing;
        return $this;
    }
    /**
     * Get EMDConsummedAtIssuance value
     * @return string|null
     */
    public function getEMDConsummedAtIssuance()
    {
        return $this->EMDConsummedAtIssuance;
    }
    /**
     * Set EMDConsummedAtIssuance value
     * @uses \Sabre\UpdateReservation\EnumType\OptionalIndicatorType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OptionalIndicatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eMDConsummedAtIssuance
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setEMDConsummedAtIssuance($eMDConsummedAtIssuance = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OptionalIndicatorType::valueIsValid($eMDConsummedAtIssuance)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eMDConsummedAtIssuance, implode(', ', \Sabre\UpdateReservation\EnumType\OptionalIndicatorType::getValidValues())), __LINE__);
        }
        $this->EMDConsummedAtIssuance = $eMDConsummedAtIssuance;
        return $this;
    }
    /**
     * Get PaperDocRequired value
     * @return string|null
     */
    public function getPaperDocRequired()
    {
        return $this->PaperDocRequired;
    }
    /**
     * Set PaperDocRequired value
     * @uses \Sabre\UpdateReservation\EnumType\OptionalIndicatorType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OptionalIndicatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paperDocRequired
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPaperDocRequired($paperDocRequired = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OptionalIndicatorType::valueIsValid($paperDocRequired)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paperDocRequired, implode(', ', \Sabre\UpdateReservation\EnumType\OptionalIndicatorType::getValidValues())), __LINE__);
        }
        $this->PaperDocRequired = $paperDocRequired;
        return $this;
    }
    /**
     * Get TaxExemption value
     * @return string|null
     */
    public function getTaxExemption()
    {
        return $this->TaxExemption;
    }
    /**
     * Set TaxExemption value
     * @uses \Sabre\UpdateReservation\EnumType\IndicatorType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\IndicatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxExemption
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTaxExemption($taxExemption = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\IndicatorType::valueIsValid($taxExemption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxExemption, implode(', ', \Sabre\UpdateReservation\EnumType\IndicatorType::getValidValues())), __LINE__);
        }
        $this->TaxExemption = $taxExemption;
        return $this;
    }
    /**
     * Get ACSCount value
     * @return int|null
     */
    public function getACSCount()
    {
        return $this->ACSCount;
    }
    /**
     * Set ACSCount value
     * @param int $aCSCount
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setACSCount($aCSCount = null)
    {
        // validation for constraint: int
        if (!is_null($aCSCount) && !is_numeric($aCSCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aCSCount)), __LINE__);
        }
        $this->ACSCount = $aCSCount;
        return $this;
    }
    /**
     * Get NetAmount value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $netAmount
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setNetAmount(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $netAmount = null)
    {
        $this->NetAmount = $netAmount;
        return $this;
    }
    /**
     * Get PriceQuoteDesignator value
     * @return int|null
     */
    public function getPriceQuoteDesignator()
    {
        return $this->PriceQuoteDesignator;
    }
    /**
     * Set PriceQuoteDesignator value
     * @param int $priceQuoteDesignator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPriceQuoteDesignator($priceQuoteDesignator = null)
    {
        // validation for constraint: int
        if (!is_null($priceQuoteDesignator) && !is_numeric($priceQuoteDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priceQuoteDesignator)), __LINE__);
        }
        $this->PriceQuoteDesignator = $priceQuoteDesignator;
        return $this;
    }
    /**
     * Get PriceMismatchAction value
     * @return string|null
     */
    public function getPriceMismatchAction()
    {
        return $this->PriceMismatchAction;
    }
    /**
     * Set PriceMismatchAction value
     * @uses \Sabre\UpdateReservation\EnumType\PriceMismatchActionType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PriceMismatchActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $priceMismatchAction
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setPriceMismatchAction($priceMismatchAction = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PriceMismatchActionType::valueIsValid($priceMismatchAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $priceMismatchAction, implode(', ', \Sabre\UpdateReservation\EnumType\PriceMismatchActionType::getValidValues())), __LINE__);
        }
        $this->PriceMismatchAction = $priceMismatchAction;
        return $this;
    }
    /**
     * Get Segment value
     * @return \Sabre\UpdateReservation\StructType\SegmentOrTravelPortionType|null
     */
    public function getSegment()
    {
        return $this->Segment;
    }
    /**
     * Set Segment value
     * @param \Sabre\UpdateReservation\StructType\SegmentOrTravelPortionType $segment
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setSegment(\Sabre\UpdateReservation\StructType\SegmentOrTravelPortionType $segment = null)
    {
        $this->Segment = $segment;
        return $this;
    }
    /**
     * Get TravelPortions value
     * @return \Sabre\UpdateReservation\StructType\TravelPortions|null
     */
    public function getTravelPortions()
    {
        return $this->TravelPortions;
    }
    /**
     * Set TravelPortions value
     * @param \Sabre\UpdateReservation\StructType\TravelPortions $travelPortions
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
     */
    public function setTravelPortions(\Sabre\UpdateReservation\StructType\TravelPortions $travelPortions = null)
    {
        $this->TravelPortions = $travelPortions;
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesUpdate_PNRB
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
