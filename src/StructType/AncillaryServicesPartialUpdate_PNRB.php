<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServicesPartialUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServicesPartialUpdate_PNRB extends AbstractStructBase
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
     * - documentation: Segment Association is a mandatory field when using EMDNumberUpdate/ETicketNumberUpdate for EMD-A (EMDType 2) AEs.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB
     */
    public $SegmentAssociationList;
    /**
     * The ActionCodeUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB
     */
    public $ActionCodeUpdate;
    /**
     * The SeatRequestTransactionIDUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB
     */
    public $SeatRequestTransactionIDUpdate;
    /**
     * The EMDNumberUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB
     */
    public $EMDNumberUpdate;
    /**
     * The ETicketNumberUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate_PNRB
     */
    public $ETicketNumberUpdate;
    /**
     * The PricingAndTaxesPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public $PricingAndTaxesPartialUpdate;
    /**
     * The PassengerTypeCodePartialUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicePassengerTypeCodePartialUpdate_PNRB
     */
    public $PassengerTypeCodePartialUpdate;
    /**
     * The IATAIndicatorPartialUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB
     */
    public $IATAIndicatorPartialUpdate;
    /**
     * The FeeGuaranteePartialUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB
     */
    public $FeeGuaranteePartialUpdate;
    /**
     * The PurchaseDateUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB
     */
    public $PurchaseDateUpdate;
    /**
     * The GroupCodeAndRficSubcodeUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB
     */
    public $GroupCodeAndRficSubcodeUpdate;
    /**
     * The EMDTypeUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB
     */
    public $EMDTypeUpdate;
    /**
     * The AcsCountUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB
     */
    public $AcsCountUpdate;
    /**
     * The VendorCodeUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB
     */
    public $VendorCodeUpdate;
    /**
     * The SegmentAdvisoryList
     * Meta informations extracted from the WSDL
     * - documentation: Segment Advisory List data is provided only when collapsing 2 sector AEs into portions. It is used to specify details of interline flights that are not hosted in Sabre.
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB
     */
    public $SegmentAdvisoryList;
    /**
     * The AaPayOptionalStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AaPayOptionalStatus;
    /**
     * The TaxExemption
     * Meta informations extracted from the WSDL
     * - documentation: When Tax is exempt PNR Ancillary displays will be updated to display "TAX EXEMPT - Y". This applies to both EMD-S and EMD-A.
     * - minOccurs: 0
     * @var string
     */
    public $TaxExemption;
    /**
     * The PdcSeatUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB
     */
    public $PdcSeatUpdate;
    /**
     * The RuleSetUpdate
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB
     */
    public $RuleSetUpdate;
    /**
     * The aePortionId
     * @var int
     */
    public $aePortionId;
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
     * Constructor method for AncillaryServicesPartialUpdate.PNRB
     * @uses AncillaryServicesPartialUpdate_PNRB::setNameAssociationList()
     * @uses AncillaryServicesPartialUpdate_PNRB::setSegmentAssociationList()
     * @uses AncillaryServicesPartialUpdate_PNRB::setActionCodeUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setSeatRequestTransactionIDUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setEMDNumberUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setETicketNumberUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setPricingAndTaxesPartialUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setPassengerTypeCodePartialUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setIATAIndicatorPartialUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setFeeGuaranteePartialUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setPurchaseDateUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setGroupCodeAndRficSubcodeUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setEMDTypeUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setAcsCountUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setVendorCodeUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setSegmentAdvisoryList()
     * @uses AncillaryServicesPartialUpdate_PNRB::setAaPayOptionalStatus()
     * @uses AncillaryServicesPartialUpdate_PNRB::setTaxExemption()
     * @uses AncillaryServicesPartialUpdate_PNRB::setPdcSeatUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setRuleSetUpdate()
     * @uses AncillaryServicesPartialUpdate_PNRB::setAePortionId()
     * @uses AncillaryServicesPartialUpdate_PNRB::setId()
     * @uses AncillaryServicesPartialUpdate_PNRB::setOp()
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @param \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB $actionCodeUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB $seatRequestTransactionIDUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB $eMDNumberUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate_PNRB $eTicketNumberUpdate
     * @param \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB $pricingAndTaxesPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePassengerTypeCodePartialUpdate_PNRB $passengerTypeCodePartialUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB $iATAIndicatorPartialUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB $feeGuaranteePartialUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB $purchaseDateUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB $groupCodeAndRficSubcodeUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB $eMDTypeUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB $acsCountUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB $vendorCodeUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB $segmentAdvisoryList
     * @param string $aaPayOptionalStatus
     * @param string $taxExemption
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB $pdcSeatUpdate
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB $ruleSetUpdate
     * @param int $aePortionId
     * @param string $id
     * @param string $op
     */
    public function __construct(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null, \Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null, \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB $actionCodeUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB $seatRequestTransactionIDUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB $eMDNumberUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate_PNRB $eTicketNumberUpdate = null, \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB $pricingAndTaxesPartialUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServicePassengerTypeCodePartialUpdate_PNRB $passengerTypeCodePartialUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB $iATAIndicatorPartialUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB $feeGuaranteePartialUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB $purchaseDateUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB $groupCodeAndRficSubcodeUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB $eMDTypeUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB $acsCountUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB $vendorCodeUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB $segmentAdvisoryList = null, $aaPayOptionalStatus = null, $taxExemption = null, \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB $pdcSeatUpdate = null, \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB $ruleSetUpdate = null, $aePortionId = null, $id = null, $op = null)
    {
        $this
            ->setNameAssociationList($nameAssociationList)
            ->setSegmentAssociationList($segmentAssociationList)
            ->setActionCodeUpdate($actionCodeUpdate)
            ->setSeatRequestTransactionIDUpdate($seatRequestTransactionIDUpdate)
            ->setEMDNumberUpdate($eMDNumberUpdate)
            ->setETicketNumberUpdate($eTicketNumberUpdate)
            ->setPricingAndTaxesPartialUpdate($pricingAndTaxesPartialUpdate)
            ->setPassengerTypeCodePartialUpdate($passengerTypeCodePartialUpdate)
            ->setIATAIndicatorPartialUpdate($iATAIndicatorPartialUpdate)
            ->setFeeGuaranteePartialUpdate($feeGuaranteePartialUpdate)
            ->setPurchaseDateUpdate($purchaseDateUpdate)
            ->setGroupCodeAndRficSubcodeUpdate($groupCodeAndRficSubcodeUpdate)
            ->setEMDTypeUpdate($eMDTypeUpdate)
            ->setAcsCountUpdate($acsCountUpdate)
            ->setVendorCodeUpdate($vendorCodeUpdate)
            ->setSegmentAdvisoryList($segmentAdvisoryList)
            ->setAaPayOptionalStatus($aaPayOptionalStatus)
            ->setTaxExemption($taxExemption)
            ->setPdcSeatUpdate($pdcSeatUpdate)
            ->setRuleSetUpdate($ruleSetUpdate)
            ->setAePortionId($aePortionId)
            ->setId($id)
            ->setOp($op);
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setSegmentAssociationList(\Sabre\UpdateReservation\StructType\SegmentAssociationList_PNRB $segmentAssociationList = null)
    {
        $this->SegmentAssociationList = $segmentAssociationList;
        return $this;
    }
    /**
     * Get ActionCodeUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB|null
     */
    public function getActionCodeUpdate()
    {
        return $this->ActionCodeUpdate;
    }
    /**
     * Set ActionCodeUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB $actionCodeUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setActionCodeUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceActionCodeUpdate_PNRB $actionCodeUpdate = null)
    {
        $this->ActionCodeUpdate = $actionCodeUpdate;
        return $this;
    }
    /**
     * Get SeatRequestTransactionIDUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB|null
     */
    public function getSeatRequestTransactionIDUpdate()
    {
        return $this->SeatRequestTransactionIDUpdate;
    }
    /**
     * Set SeatRequestTransactionIDUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB $seatRequestTransactionIDUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setSeatRequestTransactionIDUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceSeatRequestTransactionIDUpdate_PNRB $seatRequestTransactionIDUpdate = null)
    {
        $this->SeatRequestTransactionIDUpdate = $seatRequestTransactionIDUpdate;
        return $this;
    }
    /**
     * Get EMDNumberUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB|null
     */
    public function getEMDNumberUpdate()
    {
        return $this->EMDNumberUpdate;
    }
    /**
     * Set EMDNumberUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB $eMDNumberUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setEMDNumberUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB $eMDNumberUpdate = null)
    {
        $this->EMDNumberUpdate = $eMDNumberUpdate;
        return $this;
    }
    /**
     * Get ETicketNumberUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate_PNRB|null
     */
    public function getETicketNumberUpdate()
    {
        return $this->ETicketNumberUpdate;
    }
    /**
     * Set ETicketNumberUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate_PNRB $eTicketNumberUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setETicketNumberUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate_PNRB $eTicketNumberUpdate = null)
    {
        $this->ETicketNumberUpdate = $eTicketNumberUpdate;
        return $this;
    }
    /**
     * Get PricingAndTaxesPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB|null
     */
    public function getPricingAndTaxesPartialUpdate()
    {
        return $this->PricingAndTaxesPartialUpdate;
    }
    /**
     * Set PricingAndTaxesPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB $pricingAndTaxesPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setPricingAndTaxesPartialUpdate(\Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB $pricingAndTaxesPartialUpdate = null)
    {
        $this->PricingAndTaxesPartialUpdate = $pricingAndTaxesPartialUpdate;
        return $this;
    }
    /**
     * Get PassengerTypeCodePartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePassengerTypeCodePartialUpdate_PNRB|null
     */
    public function getPassengerTypeCodePartialUpdate()
    {
        return $this->PassengerTypeCodePartialUpdate;
    }
    /**
     * Set PassengerTypeCodePartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePassengerTypeCodePartialUpdate_PNRB $passengerTypeCodePartialUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setPassengerTypeCodePartialUpdate(\Sabre\UpdateReservation\StructType\AncillaryServicePassengerTypeCodePartialUpdate_PNRB $passengerTypeCodePartialUpdate = null)
    {
        $this->PassengerTypeCodePartialUpdate = $passengerTypeCodePartialUpdate;
        return $this;
    }
    /**
     * Get IATAIndicatorPartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB|null
     */
    public function getIATAIndicatorPartialUpdate()
    {
        return $this->IATAIndicatorPartialUpdate;
    }
    /**
     * Set IATAIndicatorPartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB $iATAIndicatorPartialUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setIATAIndicatorPartialUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB $iATAIndicatorPartialUpdate = null)
    {
        $this->IATAIndicatorPartialUpdate = $iATAIndicatorPartialUpdate;
        return $this;
    }
    /**
     * Get FeeGuaranteePartialUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB|null
     */
    public function getFeeGuaranteePartialUpdate()
    {
        return $this->FeeGuaranteePartialUpdate;
    }
    /**
     * Set FeeGuaranteePartialUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB $feeGuaranteePartialUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setFeeGuaranteePartialUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB $feeGuaranteePartialUpdate = null)
    {
        $this->FeeGuaranteePartialUpdate = $feeGuaranteePartialUpdate;
        return $this;
    }
    /**
     * Get PurchaseDateUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB|null
     */
    public function getPurchaseDateUpdate()
    {
        return $this->PurchaseDateUpdate;
    }
    /**
     * Set PurchaseDateUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB $purchaseDateUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setPurchaseDateUpdate(\Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB $purchaseDateUpdate = null)
    {
        $this->PurchaseDateUpdate = $purchaseDateUpdate;
        return $this;
    }
    /**
     * Get GroupCodeAndRficSubcodeUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB|null
     */
    public function getGroupCodeAndRficSubcodeUpdate()
    {
        return $this->GroupCodeAndRficSubcodeUpdate;
    }
    /**
     * Set GroupCodeAndRficSubcodeUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB $groupCodeAndRficSubcodeUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setGroupCodeAndRficSubcodeUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceGroupCodeAndRficSubcodeUpdate_PNRB $groupCodeAndRficSubcodeUpdate = null)
    {
        $this->GroupCodeAndRficSubcodeUpdate = $groupCodeAndRficSubcodeUpdate;
        return $this;
    }
    /**
     * Get EMDTypeUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB|null
     */
    public function getEMDTypeUpdate()
    {
        return $this->EMDTypeUpdate;
    }
    /**
     * Set EMDTypeUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB $eMDTypeUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setEMDTypeUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB $eMDTypeUpdate = null)
    {
        $this->EMDTypeUpdate = $eMDTypeUpdate;
        return $this;
    }
    /**
     * Get AcsCountUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB|null
     */
    public function getAcsCountUpdate()
    {
        return $this->AcsCountUpdate;
    }
    /**
     * Set AcsCountUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB $acsCountUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setAcsCountUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceAcsCountUpdate_PNRB $acsCountUpdate = null)
    {
        $this->AcsCountUpdate = $acsCountUpdate;
        return $this;
    }
    /**
     * Get VendorCodeUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB|null
     */
    public function getVendorCodeUpdate()
    {
        return $this->VendorCodeUpdate;
    }
    /**
     * Set VendorCodeUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB $vendorCodeUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setVendorCodeUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB $vendorCodeUpdate = null)
    {
        $this->VendorCodeUpdate = $vendorCodeUpdate;
        return $this;
    }
    /**
     * Get SegmentAdvisoryList value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB|null
     */
    public function getSegmentAdvisoryList()
    {
        return $this->SegmentAdvisoryList;
    }
    /**
     * Set SegmentAdvisoryList value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB $segmentAdvisoryList
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setSegmentAdvisoryList(\Sabre\UpdateReservation\StructType\AncillaryServiceAdvisorySegmentList_PNRB $segmentAdvisoryList = null)
    {
        $this->SegmentAdvisoryList = $segmentAdvisoryList;
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
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
     * Get PdcSeatUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB|null
     */
    public function getPdcSeatUpdate()
    {
        return $this->PdcSeatUpdate;
    }
    /**
     * Set PdcSeatUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB $pdcSeatUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setPdcSeatUpdate(\Sabre\UpdateReservation\StructType\AncillaryServicePdcSeatPartialUpdate_PNRB $pdcSeatUpdate = null)
    {
        $this->PdcSeatUpdate = $pdcSeatUpdate;
        return $this;
    }
    /**
     * Get RuleSetUpdate value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB|null
     */
    public function getRuleSetUpdate()
    {
        return $this->RuleSetUpdate;
    }
    /**
     * Set RuleSetUpdate value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB $ruleSetUpdate
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setRuleSetUpdate(\Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB $ruleSetUpdate = null)
    {
        $this->RuleSetUpdate = $ruleSetUpdate;
        return $this;
    }
    /**
     * Get aePortionId value
     * @return int|null
     */
    public function getAePortionId()
    {
        return $this->aePortionId;
    }
    /**
     * Set aePortionId value
     * @param int $aePortionId
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
     */
    public function setAePortionId($aePortionId = null)
    {
        // validation for constraint: int
        if (!is_null($aePortionId) && !is_numeric($aePortionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($aePortionId)), __LINE__);
        }
        $this->aePortionId = $aePortionId;
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesPartialUpdate_PNRB
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
