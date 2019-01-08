<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalAncillaryServicesInformationData.PNRB StructType
 * @subpackage Structs
 */
class OptionalAncillaryServicesInformationData_PNRB extends AbstractStructBase
{
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
     * Constructor method for OptionalAncillaryServicesInformationData.PNRB
     * @uses OptionalAncillaryServicesInformationData_PNRB::setQuantity()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setSegmentNumber()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setEquivalentPrice()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTTLPrice()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setPortionOfTravelIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setOriginalBasePrice()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setRefundIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setCommisionIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setInterlineIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setFeeApplicationIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setPassengerTypeCode()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setBoardPoint()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setOffPoint()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTaxesIncluded()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTaxes()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setSoftMatchIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setNoChargeNotAvailIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTicketCouponNumberAssociation()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setSimultaneousTicketIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setFormOfRefund()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setFeeNotGuaranteedIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setFQTVTierLevel()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTourCodeSHC()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTravelDateEffective()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setLatestTravelDatePermitted()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setPurchaseByDate()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTotalOriginalBasePrice()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTotalEquivalentPrice()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTotalTTLPrice()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTotalTaxes()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setTaxExemptIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setBagWeight()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setFareCalculationModeIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setFareCalculationPriceIndicator()
     * @uses OptionalAncillaryServicesInformationData_PNRB::setBagOccurence()
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
     */
    public function __construct($quantity = null, $segmentNumber = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null, $portionOfTravelIndicator = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null, $refundIndicator = null, $commisionIndicator = null, $interlineIndicator = null, $feeApplicationIndicator = null, $passengerTypeCode = null, $boardPoint = null, $offPoint = null, $taxesIncluded = null, \Sabre\UpdateReservation\StructType\Taxes $taxes = null, $softMatchIndicator = null, $noChargeNotAvailIndicator = null, \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation $ticketCouponNumberAssociation = null, $simultaneousTicketIndicator = null, $formOfRefund = null, $feeNotGuaranteedIndicator = null, $fQTVTierLevel = null, $tourCodeSHC = null, $travelDateEffective = null, $latestTravelDatePermitted = null, $purchaseByDate = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalOriginalBasePrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalEquivalentPrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $totalTTLPrice = null, \Sabre\UpdateReservation\StructType\TotalTaxes $totalTaxes = null, $taxExemptIndicator = null, \Sabre\UpdateReservation\StructType\BagWeight $bagWeight = null, $fareCalculationModeIndicator = null, $fareCalculationPriceIndicator = null, $bagOccurence = null)
    {
        $this
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
            ->setBagOccurence($bagOccurence);
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($segmentNumber > 24) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 24, "%s" given', $segmentNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($segmentNumber < 1) {
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB
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
