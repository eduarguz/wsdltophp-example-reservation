<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehSegmentInfo.PNRB StructType
 * @subpackage Structs
 */
class VehSegmentInfo_PNRB extends AbstractStructBase
{
    /**
     * The PricedOffLocServiceTelephone
     * Meta informations extracted from the WSDL
     * - documentation: Phone number of off airport location.
     * - minOccurs: 0
     * @var string
     */
    public $PricedOffLocServiceTelephone;
    /**
     * The PricedOffLocServiceFax
     * Meta informations extracted from the WSDL
     * - documentation: fax number of off airport location
     * - minOccurs: 0
     * @var string
     */
    public $PricedOffLocServiceFax;
    /**
     * The CorporateID
     * Meta informations extracted from the WSDL
     * - documentation: Corporate Discount number affilated to renter. Example "8"
     * - minOccurs: 0
     * @var string
     */
    public $CorporateID;
    /**
     * The ClientID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClientID;
    /**
     * The CustLoyaltyMembershipID
     * Meta informations extracted from the WSDL
     * - documentation: unique loyalty membership ID
     * - minOccurs: 0
     * @var string
     */
    public $CustLoyaltyMembershipID;
    /**
     * The InvoiceRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\InvoiceRemarks
     */
    public $InvoiceRemarks;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Remarks
     */
    public $Remarks;
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The VoucherType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VoucherType;
    /**
     * The VoucherBillingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Company eVoucher Billing Number
     * - minOccurs: 0
     * @var string
     */
    public $VoucherBillingNumber;
    /**
     * The VoucherID
     * Meta informations extracted from the WSDL
     * - documentation: voucher ID
     * - minOccurs: 0
     * @var string
     */
    public $VoucherID;
    /**
     * The VoucherFormat
     * Meta informations extracted from the WSDL
     * - documentation: format of voucher
     * - minOccurs: 0
     * @var string
     */
    public $VoucherFormat;
    /**
     * The SpecialEquipment
     * Meta informations extracted from the WSDL
     * - documentation: any special equipment, e.g., ski rack, included in rental
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialEquipment;
    /**
     * Constructor method for VehSegmentInfo.PNRB
     * @uses VehSegmentInfo_PNRB::setPricedOffLocServiceTelephone()
     * @uses VehSegmentInfo_PNRB::setPricedOffLocServiceFax()
     * @uses VehSegmentInfo_PNRB::setCorporateID()
     * @uses VehSegmentInfo_PNRB::setClientID()
     * @uses VehSegmentInfo_PNRB::setCustLoyaltyMembershipID()
     * @uses VehSegmentInfo_PNRB::setInvoiceRemarks()
     * @uses VehSegmentInfo_PNRB::setRemarks()
     * @uses VehSegmentInfo_PNRB::setPassengerName()
     * @uses VehSegmentInfo_PNRB::setVoucherType()
     * @uses VehSegmentInfo_PNRB::setVoucherBillingNumber()
     * @uses VehSegmentInfo_PNRB::setVoucherID()
     * @uses VehSegmentInfo_PNRB::setVoucherFormat()
     * @uses VehSegmentInfo_PNRB::setSpecialEquipment()
     * @param string $pricedOffLocServiceTelephone
     * @param string $pricedOffLocServiceFax
     * @param string $corporateID
     * @param string $clientID
     * @param string $custLoyaltyMembershipID
     * @param \Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks
     * @param \Sabre\UpdateReservation\StructType\Remarks $remarks
     * @param string $passengerName
     * @param string $voucherType
     * @param string $voucherBillingNumber
     * @param string $voucherID
     * @param string $voucherFormat
     * @param string[] $specialEquipment
     */
    public function __construct($pricedOffLocServiceTelephone = null, $pricedOffLocServiceFax = null, $corporateID = null, $clientID = null, $custLoyaltyMembershipID = null, \Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks = null, \Sabre\UpdateReservation\StructType\Remarks $remarks = null, $passengerName = null, $voucherType = null, $voucherBillingNumber = null, $voucherID = null, $voucherFormat = null, array $specialEquipment = array())
    {
        $this
            ->setPricedOffLocServiceTelephone($pricedOffLocServiceTelephone)
            ->setPricedOffLocServiceFax($pricedOffLocServiceFax)
            ->setCorporateID($corporateID)
            ->setClientID($clientID)
            ->setCustLoyaltyMembershipID($custLoyaltyMembershipID)
            ->setInvoiceRemarks($invoiceRemarks)
            ->setRemarks($remarks)
            ->setPassengerName($passengerName)
            ->setVoucherType($voucherType)
            ->setVoucherBillingNumber($voucherBillingNumber)
            ->setVoucherID($voucherID)
            ->setVoucherFormat($voucherFormat)
            ->setSpecialEquipment($specialEquipment);
    }
    /**
     * Get PricedOffLocServiceTelephone value
     * @return string|null
     */
    public function getPricedOffLocServiceTelephone()
    {
        return $this->PricedOffLocServiceTelephone;
    }
    /**
     * Set PricedOffLocServiceTelephone value
     * @param string $pricedOffLocServiceTelephone
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setPricedOffLocServiceTelephone($pricedOffLocServiceTelephone = null)
    {
        // validation for constraint: string
        if (!is_null($pricedOffLocServiceTelephone) && !is_string($pricedOffLocServiceTelephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricedOffLocServiceTelephone)), __LINE__);
        }
        $this->PricedOffLocServiceTelephone = $pricedOffLocServiceTelephone;
        return $this;
    }
    /**
     * Get PricedOffLocServiceFax value
     * @return string|null
     */
    public function getPricedOffLocServiceFax()
    {
        return $this->PricedOffLocServiceFax;
    }
    /**
     * Set PricedOffLocServiceFax value
     * @param string $pricedOffLocServiceFax
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setPricedOffLocServiceFax($pricedOffLocServiceFax = null)
    {
        // validation for constraint: string
        if (!is_null($pricedOffLocServiceFax) && !is_string($pricedOffLocServiceFax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricedOffLocServiceFax)), __LINE__);
        }
        $this->PricedOffLocServiceFax = $pricedOffLocServiceFax;
        return $this;
    }
    /**
     * Get CorporateID value
     * @return string|null
     */
    public function getCorporateID()
    {
        return $this->CorporateID;
    }
    /**
     * Set CorporateID value
     * @param string $corporateID
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setCorporateID($corporateID = null)
    {
        // validation for constraint: string
        if (!is_null($corporateID) && !is_string($corporateID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateID)), __LINE__);
        }
        $this->CorporateID = $corporateID;
        return $this;
    }
    /**
     * Get ClientID value
     * @return string|null
     */
    public function getClientID()
    {
        return $this->ClientID;
    }
    /**
     * Set ClientID value
     * @param string $clientID
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setClientID($clientID = null)
    {
        // validation for constraint: string
        if (!is_null($clientID) && !is_string($clientID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientID)), __LINE__);
        }
        $this->ClientID = $clientID;
        return $this;
    }
    /**
     * Get CustLoyaltyMembershipID value
     * @return string|null
     */
    public function getCustLoyaltyMembershipID()
    {
        return $this->CustLoyaltyMembershipID;
    }
    /**
     * Set CustLoyaltyMembershipID value
     * @param string $custLoyaltyMembershipID
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setCustLoyaltyMembershipID($custLoyaltyMembershipID = null)
    {
        // validation for constraint: string
        if (!is_null($custLoyaltyMembershipID) && !is_string($custLoyaltyMembershipID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custLoyaltyMembershipID)), __LINE__);
        }
        $this->CustLoyaltyMembershipID = $custLoyaltyMembershipID;
        return $this;
    }
    /**
     * Get InvoiceRemarks value
     * @return \Sabre\UpdateReservation\StructType\InvoiceRemarks|null
     */
    public function getInvoiceRemarks()
    {
        return $this->InvoiceRemarks;
    }
    /**
     * Set InvoiceRemarks value
     * @param \Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setInvoiceRemarks(\Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks = null)
    {
        $this->InvoiceRemarks = $invoiceRemarks;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Sabre\UpdateReservation\StructType\Remarks|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Sabre\UpdateReservation\StructType\Remarks $remarks
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setRemarks(\Sabre\UpdateReservation\StructType\Remarks $remarks = null)
    {
        $this->Remarks = $remarks;
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
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
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
     * Get VoucherType value
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->VoucherType;
    }
    /**
     * Set VoucherType value
     * @param string $voucherType
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setVoucherType($voucherType = null)
    {
        // validation for constraint: string
        if (!is_null($voucherType) && !is_string($voucherType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucherType)), __LINE__);
        }
        $this->VoucherType = $voucherType;
        return $this;
    }
    /**
     * Get VoucherBillingNumber value
     * @return string|null
     */
    public function getVoucherBillingNumber()
    {
        return $this->VoucherBillingNumber;
    }
    /**
     * Set VoucherBillingNumber value
     * @param string $voucherBillingNumber
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setVoucherBillingNumber($voucherBillingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($voucherBillingNumber) && !is_string($voucherBillingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucherBillingNumber)), __LINE__);
        }
        $this->VoucherBillingNumber = $voucherBillingNumber;
        return $this;
    }
    /**
     * Get VoucherID value
     * @return string|null
     */
    public function getVoucherID()
    {
        return $this->VoucherID;
    }
    /**
     * Set VoucherID value
     * @param string $voucherID
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setVoucherID($voucherID = null)
    {
        // validation for constraint: string
        if (!is_null($voucherID) && !is_string($voucherID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucherID)), __LINE__);
        }
        $this->VoucherID = $voucherID;
        return $this;
    }
    /**
     * Get VoucherFormat value
     * @return string|null
     */
    public function getVoucherFormat()
    {
        return $this->VoucherFormat;
    }
    /**
     * Set VoucherFormat value
     * @param string $voucherFormat
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setVoucherFormat($voucherFormat = null)
    {
        // validation for constraint: string
        if (!is_null($voucherFormat) && !is_string($voucherFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucherFormat)), __LINE__);
        }
        $this->VoucherFormat = $voucherFormat;
        return $this;
    }
    /**
     * Get SpecialEquipment value
     * @return string[]|null
     */
    public function getSpecialEquipment()
    {
        return $this->SpecialEquipment;
    }
    /**
     * Set SpecialEquipment value
     * @throws \InvalidArgumentException
     * @param string[] $specialEquipment
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function setSpecialEquipment(array $specialEquipment = array())
    {
        foreach ($specialEquipment as $vehSegmentInfo_PNRBSpecialEquipmentItem) {
            // validation for constraint: itemType
            if (!is_string($vehSegmentInfo_PNRBSpecialEquipmentItem)) {
                throw new \InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of string, "%s" given', is_object($vehSegmentInfo_PNRBSpecialEquipmentItem) ? get_class($vehSegmentInfo_PNRBSpecialEquipmentItem) : gettype($vehSegmentInfo_PNRBSpecialEquipmentItem)), __LINE__);
            }
        }
        $this->SpecialEquipment = $specialEquipment;
        return $this;
    }
    /**
     * Add item to SpecialEquipment value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
     */
    public function addToSpecialEquipment($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SpecialEquipment property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialEquipment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VehSegmentInfo_PNRB
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
