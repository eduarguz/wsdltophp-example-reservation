<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCard StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Card like Credit card or debit card which is used to pay
 * - type: PaymentCard
 * @subpackage Structs
 */
class PaymentCard extends AbstractStructBase
{
    /**
     * The CardCode
     * Meta informations extracted from the WSDL
     * - documentation: The 2 character code of the credit card issuer | Code identifying the card type
     * - use: required
     * @var string
     */
    public $CardCode;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - documentation: CC - credit card
     * @var string
     */
    public $PaymentType;
    /**
     * The TripCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Not Used
     * @var string
     */
    public $TripCategory;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of magnetic striped card. Refer to OTA Code ListCard Type (CDT). | Used for codes in the OTA code tables.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-9A-Z]{1,3}
     * @var string
     */
    public $CardType;
    /**
     * The CardNumber
     * @var \Sabre\UpdateReservation\StructType\CardNumber
     */
    public $CardNumber;
    /**
     * The ExpiryMonth
     * @var string
     */
    public $ExpiryMonth;
    /**
     * The ExpiryYear
     * @var string
     */
    public $ExpiryYear;
    /**
     * The ExtendPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExtendPayment;
    /**
     * The ApprovalList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ApprovalList
     */
    public $ApprovalList;
    /**
     * The DeferredPaymentID
     * Meta informations extracted from the WSDL
     * - documentation: Used to store Deferred Payment ID from ticketing transaction
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeferredPaymentID;
    /**
     * The DefaultExtendPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DefaultExtendPayment;
    /**
     * The SuppressFromInvoice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SuppressFromInvoice;
    /**
     * The GenerateApprovalAtTicketing
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $GenerateApprovalAtTicketing;
    /**
     * The CSCResultCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CSCResultCode;
    /**
     * The CSCRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CSCRemark;
    /**
     * The AVSResultCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AVSResultCode;
    /**
     * The AVSRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AVSRemark;
    /**
     * The BNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BNumber;
    /**
     * The CardHolderName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderName;
    /**
     * The FullCardHolderName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FullCardHolderName
     */
    public $FullCardHolderName;
    /**
     * The CSC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CSC;
    /**
     * The CSCValidatingCarrier
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CSCValidatingCarrier;
    /**
     * The CorporateIDNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CorporateIDNumber;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressType
     */
    public $Address;
    /**
     * The reconcileAsCash
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $reconcileAsCash;
    /**
     * Constructor method for PaymentCard
     * @uses PaymentCard::setCardCode()
     * @uses PaymentCard::set_()
     * @uses PaymentCard::setPaymentType()
     * @uses PaymentCard::setTripCategory()
     * @uses PaymentCard::setCardType()
     * @uses PaymentCard::setCardNumber()
     * @uses PaymentCard::setExpiryMonth()
     * @uses PaymentCard::setExpiryYear()
     * @uses PaymentCard::setExtendPayment()
     * @uses PaymentCard::setApprovalList()
     * @uses PaymentCard::setDeferredPaymentID()
     * @uses PaymentCard::setDefaultExtendPayment()
     * @uses PaymentCard::setSuppressFromInvoice()
     * @uses PaymentCard::setGenerateApprovalAtTicketing()
     * @uses PaymentCard::setCSCResultCode()
     * @uses PaymentCard::setCSCRemark()
     * @uses PaymentCard::setAVSResultCode()
     * @uses PaymentCard::setAVSRemark()
     * @uses PaymentCard::setBNumber()
     * @uses PaymentCard::setCardHolderName()
     * @uses PaymentCard::setFullCardHolderName()
     * @uses PaymentCard::setCSC()
     * @uses PaymentCard::setCSCValidatingCarrier()
     * @uses PaymentCard::setCorporateIDNumber()
     * @uses PaymentCard::setCustom()
     * @uses PaymentCard::setAddress()
     * @uses PaymentCard::setReconcileAsCash()
     * @param string $cardCode
     * @param string $_
     * @param string $paymentType
     * @param string $tripCategory
     * @param string $cardType
     * @param \Sabre\UpdateReservation\StructType\CardNumber $cardNumber
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string $extendPayment
     * @param \Sabre\UpdateReservation\StructType\ApprovalList $approvalList
     * @param string $deferredPaymentID
     * @param bool $defaultExtendPayment
     * @param bool $suppressFromInvoice
     * @param bool $generateApprovalAtTicketing
     * @param string $cSCResultCode
     * @param string $cSCRemark
     * @param string $aVSResultCode
     * @param string $aVSRemark
     * @param string $bNumber
     * @param string $cardHolderName
     * @param \Sabre\UpdateReservation\StructType\FullCardHolderName $fullCardHolderName
     * @param string $cSC
     * @param string $cSCValidatingCarrier
     * @param string $corporateIDNumber
     * @param string $custom
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @param bool $reconcileAsCash
     */
    public function __construct($cardCode = null, $_ = null, $paymentType = null, $tripCategory = null, $cardType = null, \Sabre\UpdateReservation\StructType\CardNumber $cardNumber = null, $expiryMonth = null, $expiryYear = null, $extendPayment = null, \Sabre\UpdateReservation\StructType\ApprovalList $approvalList = null, $deferredPaymentID = null, $defaultExtendPayment = null, $suppressFromInvoice = null, $generateApprovalAtTicketing = null, $cSCResultCode = null, $cSCRemark = null, $aVSResultCode = null, $aVSRemark = null, $bNumber = null, $cardHolderName = null, \Sabre\UpdateReservation\StructType\FullCardHolderName $fullCardHolderName = null, $cSC = null, $cSCValidatingCarrier = null, $corporateIDNumber = null, $custom = null, \Sabre\UpdateReservation\StructType\AddressType $address = null, $reconcileAsCash = null)
    {
        $this
            ->setCardCode($cardCode)
            ->set_($_)
            ->setPaymentType($paymentType)
            ->setTripCategory($tripCategory)
            ->setCardType($cardType)
            ->setCardNumber($cardNumber)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear)
            ->setExtendPayment($extendPayment)
            ->setApprovalList($approvalList)
            ->setDeferredPaymentID($deferredPaymentID)
            ->setDefaultExtendPayment($defaultExtendPayment)
            ->setSuppressFromInvoice($suppressFromInvoice)
            ->setGenerateApprovalAtTicketing($generateApprovalAtTicketing)
            ->setCSCResultCode($cSCResultCode)
            ->setCSCRemark($cSCRemark)
            ->setAVSResultCode($aVSResultCode)
            ->setAVSRemark($aVSRemark)
            ->setBNumber($bNumber)
            ->setCardHolderName($cardHolderName)
            ->setFullCardHolderName($fullCardHolderName)
            ->setCSC($cSC)
            ->setCSCValidatingCarrier($cSCValidatingCarrier)
            ->setCorporateIDNumber($corporateIDNumber)
            ->setCustom($custom)
            ->setAddress($address)
            ->setReconcileAsCash($reconcileAsCash);
    }
    /**
     * Get CardCode value
     * @return string
     */
    public function getCardCode()
    {
        return $this->CardCode;
    }
    /**
     * Set CardCode value
     * @uses \Sabre\UpdateReservation\EnumType\PaymentCardCodeType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PaymentCardCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cardCode
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCardCode($cardCode = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PaymentCardCodeType::valueIsValid($cardCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cardCode, implode(', ', \Sabre\UpdateReservation\EnumType\PaymentCardCodeType::getValidValues())), __LINE__);
        }
        $this->CardCode = $cardCode;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
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
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
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
     * Get TripCategory value
     * @return string|null
     */
    public function getTripCategory()
    {
        return $this->TripCategory;
    }
    /**
     * Set TripCategory value
     * @param string $tripCategory
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setTripCategory($tripCategory = null)
    {
        // validation for constraint: string
        if (!is_null($tripCategory) && !is_string($tripCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tripCategory)), __LINE__);
        }
        $this->TripCategory = $tripCategory;
        return $this;
    }
    /**
     * Get CardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param string $cardType
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: pattern
        if (is_scalar($cardType) && !preg_match('/[0-9A-Z]{1,3}/', $cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{1,3}", "%s" given', var_export($cardType, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardType)), __LINE__);
        }
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return \Sabre\UpdateReservation\StructType\CardNumber|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param \Sabre\UpdateReservation\StructType\CardNumber $cardNumber
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCardNumber(\Sabre\UpdateReservation\StructType\CardNumber $cardNumber = null)
    {
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get ExpiryMonth value
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->ExpiryMonth;
    }
    /**
     * Set ExpiryMonth value
     * @param string $expiryMonth
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: string
        if (!is_null($expiryMonth) && !is_string($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryMonth)), __LINE__);
        }
        $this->ExpiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * Get ExpiryYear value
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->ExpiryYear;
    }
    /**
     * Set ExpiryYear value
     * @param string $expiryYear
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: string
        if (!is_null($expiryYear) && !is_string($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryYear)), __LINE__);
        }
        $this->ExpiryYear = $expiryYear;
        return $this;
    }
    /**
     * Get ExtendPayment value
     * @return string|null
     */
    public function getExtendPayment()
    {
        return $this->ExtendPayment;
    }
    /**
     * Set ExtendPayment value
     * @param string $extendPayment
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setExtendPayment($extendPayment = null)
    {
        // validation for constraint: string
        if (!is_null($extendPayment) && !is_string($extendPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendPayment)), __LINE__);
        }
        $this->ExtendPayment = $extendPayment;
        return $this;
    }
    /**
     * Get ApprovalList value
     * @return \Sabre\UpdateReservation\StructType\ApprovalList|null
     */
    public function getApprovalList()
    {
        return $this->ApprovalList;
    }
    /**
     * Set ApprovalList value
     * @param \Sabre\UpdateReservation\StructType\ApprovalList $approvalList
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setApprovalList(\Sabre\UpdateReservation\StructType\ApprovalList $approvalList = null)
    {
        $this->ApprovalList = $approvalList;
        return $this;
    }
    /**
     * Get DeferredPaymentID value
     * @return string|null
     */
    public function getDeferredPaymentID()
    {
        return $this->DeferredPaymentID;
    }
    /**
     * Set DeferredPaymentID value
     * @param string $deferredPaymentID
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setDeferredPaymentID($deferredPaymentID = null)
    {
        // validation for constraint: string
        if (!is_null($deferredPaymentID) && !is_string($deferredPaymentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deferredPaymentID)), __LINE__);
        }
        $this->DeferredPaymentID = $deferredPaymentID;
        return $this;
    }
    /**
     * Get DefaultExtendPayment value
     * @return bool|null
     */
    public function getDefaultExtendPayment()
    {
        return $this->DefaultExtendPayment;
    }
    /**
     * Set DefaultExtendPayment value
     * @param bool $defaultExtendPayment
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setDefaultExtendPayment($defaultExtendPayment = null)
    {
        // validation for constraint: boolean
        if (!is_null($defaultExtendPayment) && !is_bool($defaultExtendPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($defaultExtendPayment)), __LINE__);
        }
        $this->DefaultExtendPayment = $defaultExtendPayment;
        return $this;
    }
    /**
     * Get SuppressFromInvoice value
     * @return bool|null
     */
    public function getSuppressFromInvoice()
    {
        return $this->SuppressFromInvoice;
    }
    /**
     * Set SuppressFromInvoice value
     * @param bool $suppressFromInvoice
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setSuppressFromInvoice($suppressFromInvoice = null)
    {
        // validation for constraint: boolean
        if (!is_null($suppressFromInvoice) && !is_bool($suppressFromInvoice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suppressFromInvoice)), __LINE__);
        }
        $this->SuppressFromInvoice = $suppressFromInvoice;
        return $this;
    }
    /**
     * Get GenerateApprovalAtTicketing value
     * @return bool|null
     */
    public function getGenerateApprovalAtTicketing()
    {
        return $this->GenerateApprovalAtTicketing;
    }
    /**
     * Set GenerateApprovalAtTicketing value
     * @param bool $generateApprovalAtTicketing
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setGenerateApprovalAtTicketing($generateApprovalAtTicketing = null)
    {
        // validation for constraint: boolean
        if (!is_null($generateApprovalAtTicketing) && !is_bool($generateApprovalAtTicketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($generateApprovalAtTicketing)), __LINE__);
        }
        $this->GenerateApprovalAtTicketing = $generateApprovalAtTicketing;
        return $this;
    }
    /**
     * Get CSCResultCode value
     * @return string|null
     */
    public function getCSCResultCode()
    {
        return $this->CSCResultCode;
    }
    /**
     * Set CSCResultCode value
     * @param string $cSCResultCode
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCSCResultCode($cSCResultCode = null)
    {
        // validation for constraint: string
        if (!is_null($cSCResultCode) && !is_string($cSCResultCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSCResultCode)), __LINE__);
        }
        $this->CSCResultCode = $cSCResultCode;
        return $this;
    }
    /**
     * Get CSCRemark value
     * @return string|null
     */
    public function getCSCRemark()
    {
        return $this->CSCRemark;
    }
    /**
     * Set CSCRemark value
     * @param string $cSCRemark
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCSCRemark($cSCRemark = null)
    {
        // validation for constraint: string
        if (!is_null($cSCRemark) && !is_string($cSCRemark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSCRemark)), __LINE__);
        }
        $this->CSCRemark = $cSCRemark;
        return $this;
    }
    /**
     * Get AVSResultCode value
     * @return string|null
     */
    public function getAVSResultCode()
    {
        return $this->AVSResultCode;
    }
    /**
     * Set AVSResultCode value
     * @param string $aVSResultCode
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setAVSResultCode($aVSResultCode = null)
    {
        // validation for constraint: string
        if (!is_null($aVSResultCode) && !is_string($aVSResultCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aVSResultCode)), __LINE__);
        }
        $this->AVSResultCode = $aVSResultCode;
        return $this;
    }
    /**
     * Get AVSRemark value
     * @return string|null
     */
    public function getAVSRemark()
    {
        return $this->AVSRemark;
    }
    /**
     * Set AVSRemark value
     * @param string $aVSRemark
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setAVSRemark($aVSRemark = null)
    {
        // validation for constraint: string
        if (!is_null($aVSRemark) && !is_string($aVSRemark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aVSRemark)), __LINE__);
        }
        $this->AVSRemark = $aVSRemark;
        return $this;
    }
    /**
     * Get BNumber value
     * @return string|null
     */
    public function getBNumber()
    {
        return $this->BNumber;
    }
    /**
     * Set BNumber value
     * @param string $bNumber
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setBNumber($bNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bNumber) && !is_string($bNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bNumber)), __LINE__);
        }
        $this->BNumber = $bNumber;
        return $this;
    }
    /**
     * Get CardHolderName value
     * @return string|null
     */
    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }
    /**
     * Set CardHolderName value
     * @param string $cardHolderName
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCardHolderName($cardHolderName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderName) && !is_string($cardHolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderName)), __LINE__);
        }
        $this->CardHolderName = $cardHolderName;
        return $this;
    }
    /**
     * Get FullCardHolderName value
     * @return \Sabre\UpdateReservation\StructType\FullCardHolderName|null
     */
    public function getFullCardHolderName()
    {
        return $this->FullCardHolderName;
    }
    /**
     * Set FullCardHolderName value
     * @param \Sabre\UpdateReservation\StructType\FullCardHolderName $fullCardHolderName
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setFullCardHolderName(\Sabre\UpdateReservation\StructType\FullCardHolderName $fullCardHolderName = null)
    {
        $this->FullCardHolderName = $fullCardHolderName;
        return $this;
    }
    /**
     * Get CSC value
     * @return string|null
     */
    public function getCSC()
    {
        return $this->CSC;
    }
    /**
     * Set CSC value
     * @param string $cSC
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCSC($cSC = null)
    {
        // validation for constraint: string
        if (!is_null($cSC) && !is_string($cSC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSC)), __LINE__);
        }
        $this->CSC = $cSC;
        return $this;
    }
    /**
     * Get CSCValidatingCarrier value
     * @return string|null
     */
    public function getCSCValidatingCarrier()
    {
        return $this->CSCValidatingCarrier;
    }
    /**
     * Set CSCValidatingCarrier value
     * @param string $cSCValidatingCarrier
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCSCValidatingCarrier($cSCValidatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($cSCValidatingCarrier) && !is_string($cSCValidatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSCValidatingCarrier)), __LINE__);
        }
        $this->CSCValidatingCarrier = $cSCValidatingCarrier;
        return $this;
    }
    /**
     * Get CorporateIDNumber value
     * @return string|null
     */
    public function getCorporateIDNumber()
    {
        return $this->CorporateIDNumber;
    }
    /**
     * Set CorporateIDNumber value
     * @param string $corporateIDNumber
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCorporateIDNumber($corporateIDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($corporateIDNumber) && !is_string($corporateIDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateIDNumber)), __LINE__);
        }
        $this->CorporateIDNumber = $corporateIDNumber;
        return $this;
    }
    /**
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get Address value
     * @return \Sabre\UpdateReservation\StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Sabre\UpdateReservation\StructType\AddressType $address
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setAddress(\Sabre\UpdateReservation\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get reconcileAsCash value
     * @return bool|null
     */
    public function getReconcileAsCash()
    {
        return $this->reconcileAsCash;
    }
    /**
     * Set reconcileAsCash value
     * @param bool $reconcileAsCash
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public function setReconcileAsCash($reconcileAsCash = null)
    {
        // validation for constraint: boolean
        if (!is_null($reconcileAsCash) && !is_bool($reconcileAsCash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reconcileAsCash)), __LINE__);
        }
        $this->reconcileAsCash = $reconcileAsCash;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PaymentCard
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
