<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingLine.PNRB StructType
 * @subpackage Structs
 */
class AccountingLine_PNRB extends AbstractStructBase
{
    /**
     * The TypeIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicator of the accounting line, e.g. AC.
     * - minOccurs: 0
     * @var string
     */
    public $TypeIndicator;
    /**
     * The FareApplication
     * Meta informations extracted from the WSDL
     * - documentation: Fare Application indicates whom Form of Payment is applied to. Possible values: ONE - a specific passenger ALL - all the passengers in the PNR PER - per person
     * - minOccurs: 0
     * @var string
     */
    public $FareApplication;
    /**
     * The FormOfPaymentCode
     * Meta informations extracted from the WSDL
     * - documentation: Possible options: CK - check, CA - cash, CH - check or cash (trams only), CC - credit card, CX - credit card (printed with masking).
     * - minOccurs: 0
     * @var string
     */
    public $FormOfPaymentCode;
    /**
     * The LinkCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LinkCode;
    /**
     * The AccountingVendorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountingVendorCode;
    /**
     * The ChargeCategoryCoded
     * Meta informations extracted from the WSDL
     * - documentation: Charge category code, e.g. TKT.
     * - minOccurs: 0
     * @var string
     */
    public $ChargeCategoryCoded;
    /**
     * The AirlineDesignator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirlineDesignator;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Number used in conjunction with Charge Category Code. Document Number must contain up to 7 digits.
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The CommissionPercentage
     * Meta informations extracted from the WSDL
     * - documentation: Commission percentage in range 0-99.
     * - minOccurs: 0
     * @var string
     */
    public $CommissionPercentage;
    /**
     * The CommissionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Commission amount in range 0-9,999,999.99.
     * - minOccurs: 0
     * @var string
     */
    public $CommissionAmount;
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - documentation: Base fare amount in range 0-9,999,999.99.
     * - minOccurs: 0
     * @var string
     */
    public $BaseFare;
    /**
     * The BasePercent
     * Meta informations extracted from the WSDL
     * - documentation: Base fare percentage in range 0-99.
     * - minOccurs: 0
     * @var string
     */
    public $BasePercent;
    /**
     * The TaxPercentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaxPercentage;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: Tax amount in range 0-9,999,999.99.
     * - minOccurs: 0
     * @var string
     */
    public $TaxAmount;
    /**
     * The TaxSurchargeCode2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaxSurchargeCode2;
    /**
     * The GSTCode
     * Meta informations extracted from the WSDL
     * - documentation: Goods and Services Tax or Value-Added Tax code: A, B, C or D.
     * - minOccurs: 0
     * @var string
     */
    public $GSTCode;
    /**
     * The GSTAmount
     * Meta informations extracted from the WSDL
     * - documentation: Goods and Services Tax or Value-Added Tax amount in range 0-9,999,999.99.
     * - minOccurs: 0
     * @var string
     */
    public $GSTAmount;
    /**
     * The GSTPercent
     * Meta informations extracted from the WSDL
     * - documentation: Goods and Services Tax or Value-Added Tax percentage in range 0-99.
     * - minOccurs: 0
     * @var string
     */
    public $GSTPercent;
    /**
     * The QSTCode
     * Meta informations extracted from the WSDL
     * - documentation: Quebec Sales Tax code: A, B, C or D.
     * - minOccurs: 0
     * @var string
     */
    public $QSTCode;
    /**
     * The QSTAmount
     * Meta informations extracted from the WSDL
     * - documentation: Quebec Sales Tax amount in range 0-9,999,999.99.
     * - minOccurs: 0
     * @var string
     */
    public $QSTAmount;
    /**
     * The QSTPercent
     * Meta informations extracted from the WSDL
     * - documentation: Quebec Sales Tax percentage in range 0-99.
     * - minOccurs: 0
     * @var string
     */
    public $QSTPercent;
    /**
     * The CreditCardNumber
     * Meta informations extracted from the WSDL
     * - documentation: Credit Card Number containing at most 16 digits.
     * - minOccurs: 0
     * @var string
     */
    public $CreditCardNumber;
    /**
     * The CreditCardCode
     * Meta informations extracted from the WSDL
     * - documentation: Two-letter code of Credit Card provider. | The 2 digit code that identifies the credit card.
     * - minOccurs: 0
     * - union: _PaymentCardType | _PaymentCardType_Other
     * @var string
     */
    public $CreditCardCode;
    /**
     * The PassengerName
     * Meta informations extracted from the WSDL
     * - documentation: Passenger used in Form of Payment association (if Fare Application is ONE). Entry must follow the pattern: [Name Number][Surname] [Given name or initial]
     * - minOccurs: 0
     * @var string
     */
    public $PassengerName;
    /**
     * The NumberOfConjunctedDocuments
     * Meta informations extracted from the WSDL
     * - documentation: Number of documents the Accounting Line applies to. Amount in range 1-9
     * - minOccurs: 0
     * @var string
     */
    public $NumberOfConjunctedDocuments;
    /**
     * The NumberOfCoupons
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NumberOfCoupons;
    /**
     * The OriginalTicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalTicketNumber;
    /**
     * The OriginalDateOfIssue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalDateOfIssue;
    /**
     * The OriginalPlaceOfIssue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalPlaceOfIssue;
    /**
     * The FullPartialExchangeIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FullPartialExchangeIndicator;
    /**
     * The OriginalInvoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalInvoice;
    /**
     * The TarriffBasis
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TarriffBasis;
    /**
     * The FreeFormText
     * Meta informations extracted from the WSDL
     * - documentation: Optional text which can contain up to 29 characters.
     * - minOccurs: 0
     * @var string
     */
    public $FreeFormText;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Three-letter currency code.
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The SegmentType
     * Meta informations extracted from the WSDL
     * - documentation: Type of segment the Accounting Line is associated to, e.g. RAL.
     * - minOccurs: 0
     * @var string
     */
    public $SegmentType;
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Number of segment the Accounting Line is associated to.
     * - minOccurs: 0
     * @var string
     */
    public $SegmentNumber;
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
     * Constructor method for AccountingLine.PNRB
     * @uses AccountingLine_PNRB::setTypeIndicator()
     * @uses AccountingLine_PNRB::setFareApplication()
     * @uses AccountingLine_PNRB::setFormOfPaymentCode()
     * @uses AccountingLine_PNRB::setLinkCode()
     * @uses AccountingLine_PNRB::setAccountingVendorCode()
     * @uses AccountingLine_PNRB::setChargeCategoryCoded()
     * @uses AccountingLine_PNRB::setAirlineDesignator()
     * @uses AccountingLine_PNRB::setDocumentNumber()
     * @uses AccountingLine_PNRB::setCommissionPercentage()
     * @uses AccountingLine_PNRB::setCommissionAmount()
     * @uses AccountingLine_PNRB::setBaseFare()
     * @uses AccountingLine_PNRB::setBasePercent()
     * @uses AccountingLine_PNRB::setTaxPercentage()
     * @uses AccountingLine_PNRB::setTaxAmount()
     * @uses AccountingLine_PNRB::setTaxSurchargeCode2()
     * @uses AccountingLine_PNRB::setGSTCode()
     * @uses AccountingLine_PNRB::setGSTAmount()
     * @uses AccountingLine_PNRB::setGSTPercent()
     * @uses AccountingLine_PNRB::setQSTCode()
     * @uses AccountingLine_PNRB::setQSTAmount()
     * @uses AccountingLine_PNRB::setQSTPercent()
     * @uses AccountingLine_PNRB::setCreditCardNumber()
     * @uses AccountingLine_PNRB::setCreditCardCode()
     * @uses AccountingLine_PNRB::setPassengerName()
     * @uses AccountingLine_PNRB::setNumberOfConjunctedDocuments()
     * @uses AccountingLine_PNRB::setNumberOfCoupons()
     * @uses AccountingLine_PNRB::setOriginalTicketNumber()
     * @uses AccountingLine_PNRB::setOriginalDateOfIssue()
     * @uses AccountingLine_PNRB::setOriginalPlaceOfIssue()
     * @uses AccountingLine_PNRB::setFullPartialExchangeIndicator()
     * @uses AccountingLine_PNRB::setOriginalInvoice()
     * @uses AccountingLine_PNRB::setTarriffBasis()
     * @uses AccountingLine_PNRB::setFreeFormText()
     * @uses AccountingLine_PNRB::setCurrencyCode()
     * @uses AccountingLine_PNRB::setSegmentType()
     * @uses AccountingLine_PNRB::setSegmentNumber()
     * @uses AccountingLine_PNRB::setId()
     * @uses AccountingLine_PNRB::setIndex()
     * @uses AccountingLine_PNRB::setOp()
     * @uses AccountingLine_PNRB::setElementId()
     * @param string $typeIndicator
     * @param string $fareApplication
     * @param string $formOfPaymentCode
     * @param string $linkCode
     * @param string $accountingVendorCode
     * @param string $chargeCategoryCoded
     * @param string $airlineDesignator
     * @param string $documentNumber
     * @param string $commissionPercentage
     * @param string $commissionAmount
     * @param string $baseFare
     * @param string $basePercent
     * @param string $taxPercentage
     * @param string $taxAmount
     * @param string $taxSurchargeCode2
     * @param string $gSTCode
     * @param string $gSTAmount
     * @param string $gSTPercent
     * @param string $qSTCode
     * @param string $qSTAmount
     * @param string $qSTPercent
     * @param string $creditCardNumber
     * @param string $creditCardCode
     * @param string $passengerName
     * @param string $numberOfConjunctedDocuments
     * @param string $numberOfCoupons
     * @param string $originalTicketNumber
     * @param string $originalDateOfIssue
     * @param string $originalPlaceOfIssue
     * @param string $fullPartialExchangeIndicator
     * @param string $originalInvoice
     * @param string $tarriffBasis
     * @param string $freeFormText
     * @param string $currencyCode
     * @param string $segmentType
     * @param string $segmentNumber
     * @param string $id
     * @param int $index
     * @param string $op
     * @param string $elementId
     */
    public function __construct($typeIndicator = null, $fareApplication = null, $formOfPaymentCode = null, $linkCode = null, $accountingVendorCode = null, $chargeCategoryCoded = null, $airlineDesignator = null, $documentNumber = null, $commissionPercentage = null, $commissionAmount = null, $baseFare = null, $basePercent = null, $taxPercentage = null, $taxAmount = null, $taxSurchargeCode2 = null, $gSTCode = null, $gSTAmount = null, $gSTPercent = null, $qSTCode = null, $qSTAmount = null, $qSTPercent = null, $creditCardNumber = null, $creditCardCode = null, $passengerName = null, $numberOfConjunctedDocuments = null, $numberOfCoupons = null, $originalTicketNumber = null, $originalDateOfIssue = null, $originalPlaceOfIssue = null, $fullPartialExchangeIndicator = null, $originalInvoice = null, $tarriffBasis = null, $freeFormText = null, $currencyCode = null, $segmentType = null, $segmentNumber = null, $id = null, $index = null, $op = null, $elementId = null)
    {
        $this
            ->setTypeIndicator($typeIndicator)
            ->setFareApplication($fareApplication)
            ->setFormOfPaymentCode($formOfPaymentCode)
            ->setLinkCode($linkCode)
            ->setAccountingVendorCode($accountingVendorCode)
            ->setChargeCategoryCoded($chargeCategoryCoded)
            ->setAirlineDesignator($airlineDesignator)
            ->setDocumentNumber($documentNumber)
            ->setCommissionPercentage($commissionPercentage)
            ->setCommissionAmount($commissionAmount)
            ->setBaseFare($baseFare)
            ->setBasePercent($basePercent)
            ->setTaxPercentage($taxPercentage)
            ->setTaxAmount($taxAmount)
            ->setTaxSurchargeCode2($taxSurchargeCode2)
            ->setGSTCode($gSTCode)
            ->setGSTAmount($gSTAmount)
            ->setGSTPercent($gSTPercent)
            ->setQSTCode($qSTCode)
            ->setQSTAmount($qSTAmount)
            ->setQSTPercent($qSTPercent)
            ->setCreditCardNumber($creditCardNumber)
            ->setCreditCardCode($creditCardCode)
            ->setPassengerName($passengerName)
            ->setNumberOfConjunctedDocuments($numberOfConjunctedDocuments)
            ->setNumberOfCoupons($numberOfCoupons)
            ->setOriginalTicketNumber($originalTicketNumber)
            ->setOriginalDateOfIssue($originalDateOfIssue)
            ->setOriginalPlaceOfIssue($originalPlaceOfIssue)
            ->setFullPartialExchangeIndicator($fullPartialExchangeIndicator)
            ->setOriginalInvoice($originalInvoice)
            ->setTarriffBasis($tarriffBasis)
            ->setFreeFormText($freeFormText)
            ->setCurrencyCode($currencyCode)
            ->setSegmentType($segmentType)
            ->setSegmentNumber($segmentNumber)
            ->setId($id)
            ->setIndex($index)
            ->setOp($op)
            ->setElementId($elementId);
    }
    /**
     * Get TypeIndicator value
     * @return string|null
     */
    public function getTypeIndicator()
    {
        return $this->TypeIndicator;
    }
    /**
     * Set TypeIndicator value
     * @param string $typeIndicator
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setTypeIndicator($typeIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($typeIndicator) && !is_string($typeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeIndicator)), __LINE__);
        }
        $this->TypeIndicator = $typeIndicator;
        return $this;
    }
    /**
     * Get FareApplication value
     * @return string|null
     */
    public function getFareApplication()
    {
        return $this->FareApplication;
    }
    /**
     * Set FareApplication value
     * @param string $fareApplication
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setFareApplication($fareApplication = null)
    {
        // validation for constraint: string
        if (!is_null($fareApplication) && !is_string($fareApplication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareApplication)), __LINE__);
        }
        $this->FareApplication = $fareApplication;
        return $this;
    }
    /**
     * Get FormOfPaymentCode value
     * @return string|null
     */
    public function getFormOfPaymentCode()
    {
        return $this->FormOfPaymentCode;
    }
    /**
     * Set FormOfPaymentCode value
     * @param string $formOfPaymentCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setFormOfPaymentCode($formOfPaymentCode = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPaymentCode) && !is_string($formOfPaymentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPaymentCode)), __LINE__);
        }
        $this->FormOfPaymentCode = $formOfPaymentCode;
        return $this;
    }
    /**
     * Get LinkCode value
     * @return string|null
     */
    public function getLinkCode()
    {
        return $this->LinkCode;
    }
    /**
     * Set LinkCode value
     * @param string $linkCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setLinkCode($linkCode = null)
    {
        // validation for constraint: string
        if (!is_null($linkCode) && !is_string($linkCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($linkCode)), __LINE__);
        }
        $this->LinkCode = $linkCode;
        return $this;
    }
    /**
     * Get AccountingVendorCode value
     * @return string|null
     */
    public function getAccountingVendorCode()
    {
        return $this->AccountingVendorCode;
    }
    /**
     * Set AccountingVendorCode value
     * @param string $accountingVendorCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setAccountingVendorCode($accountingVendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountingVendorCode) && !is_string($accountingVendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountingVendorCode)), __LINE__);
        }
        $this->AccountingVendorCode = $accountingVendorCode;
        return $this;
    }
    /**
     * Get ChargeCategoryCoded value
     * @return string|null
     */
    public function getChargeCategoryCoded()
    {
        return $this->ChargeCategoryCoded;
    }
    /**
     * Set ChargeCategoryCoded value
     * @param string $chargeCategoryCoded
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setChargeCategoryCoded($chargeCategoryCoded = null)
    {
        // validation for constraint: string
        if (!is_null($chargeCategoryCoded) && !is_string($chargeCategoryCoded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeCategoryCoded)), __LINE__);
        }
        $this->ChargeCategoryCoded = $chargeCategoryCoded;
        return $this;
    }
    /**
     * Get AirlineDesignator value
     * @return string|null
     */
    public function getAirlineDesignator()
    {
        return $this->AirlineDesignator;
    }
    /**
     * Set AirlineDesignator value
     * @param string $airlineDesignator
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setAirlineDesignator($airlineDesignator = null)
    {
        // validation for constraint: string
        if (!is_null($airlineDesignator) && !is_string($airlineDesignator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineDesignator)), __LINE__);
        }
        $this->AirlineDesignator = $airlineDesignator;
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get CommissionPercentage value
     * @return string|null
     */
    public function getCommissionPercentage()
    {
        return $this->CommissionPercentage;
    }
    /**
     * Set CommissionPercentage value
     * @param string $commissionPercentage
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setCommissionPercentage($commissionPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($commissionPercentage) && !is_string($commissionPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commissionPercentage)), __LINE__);
        }
        $this->CommissionPercentage = $commissionPercentage;
        return $this;
    }
    /**
     * Get CommissionAmount value
     * @return string|null
     */
    public function getCommissionAmount()
    {
        return $this->CommissionAmount;
    }
    /**
     * Set CommissionAmount value
     * @param string $commissionAmount
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setCommissionAmount($commissionAmount = null)
    {
        // validation for constraint: string
        if (!is_null($commissionAmount) && !is_string($commissionAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commissionAmount)), __LINE__);
        }
        $this->CommissionAmount = $commissionAmount;
        return $this;
    }
    /**
     * Get BaseFare value
     * @return string|null
     */
    public function getBaseFare()
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setBaseFare($baseFare = null)
    {
        // validation for constraint: string
        if (!is_null($baseFare) && !is_string($baseFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseFare)), __LINE__);
        }
        $this->BaseFare = $baseFare;
        return $this;
    }
    /**
     * Get BasePercent value
     * @return string|null
     */
    public function getBasePercent()
    {
        return $this->BasePercent;
    }
    /**
     * Set BasePercent value
     * @param string $basePercent
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setBasePercent($basePercent = null)
    {
        // validation for constraint: string
        if (!is_null($basePercent) && !is_string($basePercent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($basePercent)), __LINE__);
        }
        $this->BasePercent = $basePercent;
        return $this;
    }
    /**
     * Get TaxPercentage value
     * @return string|null
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    /**
     * Set TaxPercentage value
     * @param string $taxPercentage
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setTaxPercentage($taxPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($taxPercentage) && !is_string($taxPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxPercentage)), __LINE__);
        }
        $this->TaxPercentage = $taxPercentage;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $taxAmount
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: string
        if (!is_null($taxAmount) && !is_string($taxAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxAmount)), __LINE__);
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get TaxSurchargeCode2 value
     * @return string|null
     */
    public function getTaxSurchargeCode2()
    {
        return $this->TaxSurchargeCode2;
    }
    /**
     * Set TaxSurchargeCode2 value
     * @param string $taxSurchargeCode2
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setTaxSurchargeCode2($taxSurchargeCode2 = null)
    {
        // validation for constraint: string
        if (!is_null($taxSurchargeCode2) && !is_string($taxSurchargeCode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxSurchargeCode2)), __LINE__);
        }
        $this->TaxSurchargeCode2 = $taxSurchargeCode2;
        return $this;
    }
    /**
     * Get GSTCode value
     * @return string|null
     */
    public function getGSTCode()
    {
        return $this->GSTCode;
    }
    /**
     * Set GSTCode value
     * @param string $gSTCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setGSTCode($gSTCode = null)
    {
        // validation for constraint: string
        if (!is_null($gSTCode) && !is_string($gSTCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gSTCode)), __LINE__);
        }
        $this->GSTCode = $gSTCode;
        return $this;
    }
    /**
     * Get GSTAmount value
     * @return string|null
     */
    public function getGSTAmount()
    {
        return $this->GSTAmount;
    }
    /**
     * Set GSTAmount value
     * @param string $gSTAmount
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setGSTAmount($gSTAmount = null)
    {
        // validation for constraint: string
        if (!is_null($gSTAmount) && !is_string($gSTAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gSTAmount)), __LINE__);
        }
        $this->GSTAmount = $gSTAmount;
        return $this;
    }
    /**
     * Get GSTPercent value
     * @return string|null
     */
    public function getGSTPercent()
    {
        return $this->GSTPercent;
    }
    /**
     * Set GSTPercent value
     * @param string $gSTPercent
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setGSTPercent($gSTPercent = null)
    {
        // validation for constraint: string
        if (!is_null($gSTPercent) && !is_string($gSTPercent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gSTPercent)), __LINE__);
        }
        $this->GSTPercent = $gSTPercent;
        return $this;
    }
    /**
     * Get QSTCode value
     * @return string|null
     */
    public function getQSTCode()
    {
        return $this->QSTCode;
    }
    /**
     * Set QSTCode value
     * @param string $qSTCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setQSTCode($qSTCode = null)
    {
        // validation for constraint: string
        if (!is_null($qSTCode) && !is_string($qSTCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qSTCode)), __LINE__);
        }
        $this->QSTCode = $qSTCode;
        return $this;
    }
    /**
     * Get QSTAmount value
     * @return string|null
     */
    public function getQSTAmount()
    {
        return $this->QSTAmount;
    }
    /**
     * Set QSTAmount value
     * @param string $qSTAmount
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setQSTAmount($qSTAmount = null)
    {
        // validation for constraint: string
        if (!is_null($qSTAmount) && !is_string($qSTAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qSTAmount)), __LINE__);
        }
        $this->QSTAmount = $qSTAmount;
        return $this;
    }
    /**
     * Get QSTPercent value
     * @return string|null
     */
    public function getQSTPercent()
    {
        return $this->QSTPercent;
    }
    /**
     * Set QSTPercent value
     * @param string $qSTPercent
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setQSTPercent($qSTPercent = null)
    {
        // validation for constraint: string
        if (!is_null($qSTPercent) && !is_string($qSTPercent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qSTPercent)), __LINE__);
        }
        $this->QSTPercent = $qSTPercent;
        return $this;
    }
    /**
     * Get CreditCardNumber value
     * @return string|null
     */
    public function getCreditCardNumber()
    {
        return $this->CreditCardNumber;
    }
    /**
     * Set CreditCardNumber value
     * @param string $creditCardNumber
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setCreditCardNumber($creditCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardNumber) && !is_string($creditCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardNumber)), __LINE__);
        }
        $this->CreditCardNumber = $creditCardNumber;
        return $this;
    }
    /**
     * Get CreditCardCode value
     * @return string|null
     */
    public function getCreditCardCode()
    {
        return $this->CreditCardCode;
    }
    /**
     * Set CreditCardCode value
     * @param string $creditCardCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setCreditCardCode($creditCardCode = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardCode) && !is_string($creditCardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardCode)), __LINE__);
        }
        $this->CreditCardCode = $creditCardCode;
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
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
     * Get NumberOfConjunctedDocuments value
     * @return string|null
     */
    public function getNumberOfConjunctedDocuments()
    {
        return $this->NumberOfConjunctedDocuments;
    }
    /**
     * Set NumberOfConjunctedDocuments value
     * @param string $numberOfConjunctedDocuments
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setNumberOfConjunctedDocuments($numberOfConjunctedDocuments = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfConjunctedDocuments) && !is_string($numberOfConjunctedDocuments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfConjunctedDocuments)), __LINE__);
        }
        $this->NumberOfConjunctedDocuments = $numberOfConjunctedDocuments;
        return $this;
    }
    /**
     * Get NumberOfCoupons value
     * @return string|null
     */
    public function getNumberOfCoupons()
    {
        return $this->NumberOfCoupons;
    }
    /**
     * Set NumberOfCoupons value
     * @param string $numberOfCoupons
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setNumberOfCoupons($numberOfCoupons = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfCoupons) && !is_string($numberOfCoupons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfCoupons)), __LINE__);
        }
        $this->NumberOfCoupons = $numberOfCoupons;
        return $this;
    }
    /**
     * Get OriginalTicketNumber value
     * @return string|null
     */
    public function getOriginalTicketNumber()
    {
        return $this->OriginalTicketNumber;
    }
    /**
     * Set OriginalTicketNumber value
     * @param string $originalTicketNumber
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setOriginalTicketNumber($originalTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originalTicketNumber) && !is_string($originalTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalTicketNumber)), __LINE__);
        }
        $this->OriginalTicketNumber = $originalTicketNumber;
        return $this;
    }
    /**
     * Get OriginalDateOfIssue value
     * @return string|null
     */
    public function getOriginalDateOfIssue()
    {
        return $this->OriginalDateOfIssue;
    }
    /**
     * Set OriginalDateOfIssue value
     * @param string $originalDateOfIssue
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setOriginalDateOfIssue($originalDateOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($originalDateOfIssue) && !is_string($originalDateOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDateOfIssue)), __LINE__);
        }
        $this->OriginalDateOfIssue = $originalDateOfIssue;
        return $this;
    }
    /**
     * Get OriginalPlaceOfIssue value
     * @return string|null
     */
    public function getOriginalPlaceOfIssue()
    {
        return $this->OriginalPlaceOfIssue;
    }
    /**
     * Set OriginalPlaceOfIssue value
     * @param string $originalPlaceOfIssue
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setOriginalPlaceOfIssue($originalPlaceOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($originalPlaceOfIssue) && !is_string($originalPlaceOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalPlaceOfIssue)), __LINE__);
        }
        $this->OriginalPlaceOfIssue = $originalPlaceOfIssue;
        return $this;
    }
    /**
     * Get FullPartialExchangeIndicator value
     * @return string|null
     */
    public function getFullPartialExchangeIndicator()
    {
        return $this->FullPartialExchangeIndicator;
    }
    /**
     * Set FullPartialExchangeIndicator value
     * @param string $fullPartialExchangeIndicator
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setFullPartialExchangeIndicator($fullPartialExchangeIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($fullPartialExchangeIndicator) && !is_string($fullPartialExchangeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullPartialExchangeIndicator)), __LINE__);
        }
        $this->FullPartialExchangeIndicator = $fullPartialExchangeIndicator;
        return $this;
    }
    /**
     * Get OriginalInvoice value
     * @return string|null
     */
    public function getOriginalInvoice()
    {
        return $this->OriginalInvoice;
    }
    /**
     * Set OriginalInvoice value
     * @param string $originalInvoice
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setOriginalInvoice($originalInvoice = null)
    {
        // validation for constraint: string
        if (!is_null($originalInvoice) && !is_string($originalInvoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalInvoice)), __LINE__);
        }
        $this->OriginalInvoice = $originalInvoice;
        return $this;
    }
    /**
     * Get TarriffBasis value
     * @return string|null
     */
    public function getTarriffBasis()
    {
        return $this->TarriffBasis;
    }
    /**
     * Set TarriffBasis value
     * @param string $tarriffBasis
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setTarriffBasis($tarriffBasis = null)
    {
        // validation for constraint: string
        if (!is_null($tarriffBasis) && !is_string($tarriffBasis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tarriffBasis)), __LINE__);
        }
        $this->TarriffBasis = $tarriffBasis;
        return $this;
    }
    /**
     * Get FreeFormText value
     * @return string|null
     */
    public function getFreeFormText()
    {
        return $this->FreeFormText;
    }
    /**
     * Set FreeFormText value
     * @param string $freeFormText
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setFreeFormText($freeFormText = null)
    {
        // validation for constraint: string
        if (!is_null($freeFormText) && !is_string($freeFormText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeFormText)), __LINE__);
        }
        $this->FreeFormText = $freeFormText;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get SegmentType value
     * @return string|null
     */
    public function getSegmentType()
    {
        return $this->SegmentType;
    }
    /**
     * Set SegmentType value
     * @param string $segmentType
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setSegmentType($segmentType = null)
    {
        // validation for constraint: string
        if (!is_null($segmentType) && !is_string($segmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentType)), __LINE__);
        }
        $this->SegmentType = $segmentType;
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($segmentNumber) && !is_string($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->SegmentNumber = $segmentNumber;
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingLine_PNRB
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
