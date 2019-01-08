<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceType StructType
 * @subpackage Structs
 */
class InsuranceType extends AbstractStructBase
{
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - documentation: "ConfirmationNumber" is used to return the confirmation number associated with the particular insurance segment.
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\QuoteID
     */
    public $QuoteID;
    /**
     * The Coverages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Coverages
     */
    public $Coverages;
    /**
     * The AddOns
     * @var \Sabre\UpdateReservation\StructType\AddOns
     */
    public $AddOns;
    /**
     * The Excess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Excess;
    /**
     * The Cancellation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Cancellation;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Commission;
    /**
     * The PremiumAmount
     * Meta informations extracted from the WSDL
     * - documentation: "PremiumAmount" is used to return the insurance premium amount associated with the particular insurance segment including discounts.
     * - minOccurs: 0
     * @var string
     */
    public $PremiumAmount;
    /**
     * The PremiumGrossAmount
     * Meta informations extracted from the WSDL
     * - documentation: "PremiumGrossAmount" is used to return the insurance premium amount associated with the particular insurance segment before any discount applies.
     * - minOccurs: 0
     * @var string
     */
    public $PremiumGrossAmount;
    /**
     * The PremiumPerDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PremiumPerDay;
    /**
     * The MaxDurationDays
     * Meta informations extracted from the WSDL
     * - documentation: Max duration associated with annual multi trip product.
     * - minOccurs: 0
     * @var string
     */
    public $MaxDurationDays;
    /**
     * The DestinationLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DestinationLocation[]
     */
    public $DestinationLocation;
    /**
     * The OriginLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OriginLocation
     */
    public $OriginLocation;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Payment
     */
    public $Payment;
    /**
     * The Travelers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Travelers
     */
    public $Travelers;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: "Text" is used to return specialized instructions associated with the particular insurance segment.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Vendor
     */
    public $Vendor;
    /**
     * The PriceDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public $PriceDetails;
    /**
     * The Declarations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Declarations
     */
    public $Declarations;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: "CurrencyCode" is used to return the insurance premium currency code associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $currencyCode;
    /**
     * The end
     * Meta informations extracted from the WSDL
     * - documentation: "End" is used to return the end date of the insurance coverage. The formate is MM:DD
     * - use: optional
     * @var string
     */
    public $end;
    /**
     * The numberOfPolicies
     * Meta informations extracted from the WSDL
     * - documentation: "numberOfPolicies" is used to return the number of policies associated with the particular insurance segment.
     * - use: optional
     * @var string
     */
    public $numberOfPolicies;
    /**
     * The productCode
     * Meta informations extracted from the WSDL
     * - documentation: "ProductType" is used to return the insurance plan type/code.
     * - use: optional
     * @var string
     */
    public $productCode;
    /**
     * The productName
     * Meta informations extracted from the WSDL
     * - documentation: "ProductType" is used to return the insurance plan type/code.
     * - use: optional
     * @var string
     */
    public $productName;
    /**
     * The planType
     * Meta informations extracted from the WSDL
     * - documentation: "PlanType" is used to return the insurance plan type/code.
     * - use: optional
     * @var string
     */
    public $planType;
    /**
     * The planName
     * Meta informations extracted from the WSDL
     * - documentation: "PlanType" is used to return the insurance plan type/code.
     * - use: optional
     * @var string
     */
    public $planName;
    /**
     * The tripType
     * Meta informations extracted from the WSDL
     * - documentation: "PlanType" is used to return the insurance plan type/code.
     * - use: optional
     * @var string
     */
    public $tripType;
    /**
     * The minAge
     * Meta informations extracted from the WSDL
     * - documentation: Minimum age supported in the product.
     * - use: optional
     * @var int
     */
    public $minAge;
    /**
     * The maxAge
     * Meta informations extracted from the WSDL
     * - documentation: Maximum age supported in the product.
     * - use: optional
     * @var int
     */
    public $maxAge;
    /**
     * The purchaseDate
     * Meta informations extracted from the WSDL
     * - documentation: "PurchaseDate" is used to return the purchase date of the insurance.
     * - use: optional
     * @var string
     */
    public $purchaseDate;
    /**
     * The start
     * Meta informations extracted from the WSDL
     * - documentation: "Start" is used to return the start date and time of the insurance coverage. The formate is MM:DDTHH:MM
     * - use: optional
     * @var string
     */
    public $start;
    /**
     * Constructor method for InsuranceType
     * @uses InsuranceType::setConfirmationNumber()
     * @uses InsuranceType::setQuoteID()
     * @uses InsuranceType::setCoverages()
     * @uses InsuranceType::setAddOns()
     * @uses InsuranceType::setExcess()
     * @uses InsuranceType::setCancellation()
     * @uses InsuranceType::setCommission()
     * @uses InsuranceType::setPremiumAmount()
     * @uses InsuranceType::setPremiumGrossAmount()
     * @uses InsuranceType::setPremiumPerDay()
     * @uses InsuranceType::setMaxDurationDays()
     * @uses InsuranceType::setDestinationLocation()
     * @uses InsuranceType::setOriginLocation()
     * @uses InsuranceType::setPayment()
     * @uses InsuranceType::setTravelers()
     * @uses InsuranceType::setText()
     * @uses InsuranceType::setVendor()
     * @uses InsuranceType::setPriceDetails()
     * @uses InsuranceType::setDeclarations()
     * @uses InsuranceType::setCurrencyCode()
     * @uses InsuranceType::setEnd()
     * @uses InsuranceType::setNumberOfPolicies()
     * @uses InsuranceType::setProductCode()
     * @uses InsuranceType::setProductName()
     * @uses InsuranceType::setPlanType()
     * @uses InsuranceType::setPlanName()
     * @uses InsuranceType::setTripType()
     * @uses InsuranceType::setMinAge()
     * @uses InsuranceType::setMaxAge()
     * @uses InsuranceType::setPurchaseDate()
     * @uses InsuranceType::setStart()
     * @param string $confirmationNumber
     * @param \Sabre\UpdateReservation\StructType\QuoteID $quoteID
     * @param \Sabre\UpdateReservation\StructType\Coverages $coverages
     * @param \Sabre\UpdateReservation\StructType\AddOns $addOns
     * @param string $excess
     * @param string $cancellation
     * @param string $commission
     * @param string $premiumAmount
     * @param string $premiumGrossAmount
     * @param string $premiumPerDay
     * @param string $maxDurationDays
     * @param \Sabre\UpdateReservation\StructType\DestinationLocation[] $destinationLocation
     * @param \Sabre\UpdateReservation\StructType\OriginLocation $originLocation
     * @param \Sabre\UpdateReservation\StructType\Payment $payment
     * @param \Sabre\UpdateReservation\StructType\Travelers $travelers
     * @param string $text
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $priceDetails
     * @param \Sabre\UpdateReservation\StructType\Declarations $declarations
     * @param string $currencyCode
     * @param string $end
     * @param string $numberOfPolicies
     * @param string $productCode
     * @param string $productName
     * @param string $planType
     * @param string $planName
     * @param string $tripType
     * @param int $minAge
     * @param int $maxAge
     * @param string $purchaseDate
     * @param string $start
     */
    public function __construct($confirmationNumber = null, \Sabre\UpdateReservation\StructType\QuoteID $quoteID = null, \Sabre\UpdateReservation\StructType\Coverages $coverages = null, \Sabre\UpdateReservation\StructType\AddOns $addOns = null, $excess = null, $cancellation = null, $commission = null, $premiumAmount = null, $premiumGrossAmount = null, $premiumPerDay = null, $maxDurationDays = null, array $destinationLocation = array(), \Sabre\UpdateReservation\StructType\OriginLocation $originLocation = null, \Sabre\UpdateReservation\StructType\Payment $payment = null, \Sabre\UpdateReservation\StructType\Travelers $travelers = null, $text = null, \Sabre\UpdateReservation\StructType\Vendor $vendor = null, \Sabre\UpdateReservation\StructType\PricingElementsType $priceDetails = null, \Sabre\UpdateReservation\StructType\Declarations $declarations = null, $currencyCode = null, $end = null, $numberOfPolicies = null, $productCode = null, $productName = null, $planType = null, $planName = null, $tripType = null, $minAge = null, $maxAge = null, $purchaseDate = null, $start = null)
    {
        $this
            ->setConfirmationNumber($confirmationNumber)
            ->setQuoteID($quoteID)
            ->setCoverages($coverages)
            ->setAddOns($addOns)
            ->setExcess($excess)
            ->setCancellation($cancellation)
            ->setCommission($commission)
            ->setPremiumAmount($premiumAmount)
            ->setPremiumGrossAmount($premiumGrossAmount)
            ->setPremiumPerDay($premiumPerDay)
            ->setMaxDurationDays($maxDurationDays)
            ->setDestinationLocation($destinationLocation)
            ->setOriginLocation($originLocation)
            ->setPayment($payment)
            ->setTravelers($travelers)
            ->setText($text)
            ->setVendor($vendor)
            ->setPriceDetails($priceDetails)
            ->setDeclarations($declarations)
            ->setCurrencyCode($currencyCode)
            ->setEnd($end)
            ->setNumberOfPolicies($numberOfPolicies)
            ->setProductCode($productCode)
            ->setProductName($productName)
            ->setPlanType($planType)
            ->setPlanName($planName)
            ->setTripType($tripType)
            ->setMinAge($minAge)
            ->setMaxAge($maxAge)
            ->setPurchaseDate($purchaseDate)
            ->setStart($start);
    }
    /**
     * Get ConfirmationNumber value
     * @return string|null
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return \Sabre\UpdateReservation\StructType\QuoteID|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param \Sabre\UpdateReservation\StructType\QuoteID $quoteID
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setQuoteID(\Sabre\UpdateReservation\StructType\QuoteID $quoteID = null)
    {
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Get Coverages value
     * @return \Sabre\UpdateReservation\StructType\Coverages|null
     */
    public function getCoverages()
    {
        return $this->Coverages;
    }
    /**
     * Set Coverages value
     * @param \Sabre\UpdateReservation\StructType\Coverages $coverages
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setCoverages(\Sabre\UpdateReservation\StructType\Coverages $coverages = null)
    {
        $this->Coverages = $coverages;
        return $this;
    }
    /**
     * Get AddOns value
     * @return \Sabre\UpdateReservation\StructType\AddOns|null
     */
    public function getAddOns()
    {
        return $this->AddOns;
    }
    /**
     * Set AddOns value
     * @param \Sabre\UpdateReservation\StructType\AddOns $addOns
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setAddOns(\Sabre\UpdateReservation\StructType\AddOns $addOns = null)
    {
        $this->AddOns = $addOns;
        return $this;
    }
    /**
     * Get Excess value
     * @return string|null
     */
    public function getExcess()
    {
        return $this->Excess;
    }
    /**
     * Set Excess value
     * @param string $excess
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setExcess($excess = null)
    {
        // validation for constraint: string
        if (!is_null($excess) && !is_string($excess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($excess)), __LINE__);
        }
        $this->Excess = $excess;
        return $this;
    }
    /**
     * Get Cancellation value
     * @return string|null
     */
    public function getCancellation()
    {
        return $this->Cancellation;
    }
    /**
     * Set Cancellation value
     * @param string $cancellation
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setCancellation($cancellation = null)
    {
        // validation for constraint: string
        if (!is_null($cancellation) && !is_string($cancellation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellation)), __LINE__);
        }
        $this->Cancellation = $cancellation;
        return $this;
    }
    /**
     * Get Commission value
     * @return string|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param string $commission
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setCommission($commission = null)
    {
        // validation for constraint: string
        if (!is_null($commission) && !is_string($commission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commission)), __LINE__);
        }
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get PremiumAmount value
     * @return string|null
     */
    public function getPremiumAmount()
    {
        return $this->PremiumAmount;
    }
    /**
     * Set PremiumAmount value
     * @param string $premiumAmount
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPremiumAmount($premiumAmount = null)
    {
        // validation for constraint: string
        if (!is_null($premiumAmount) && !is_string($premiumAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($premiumAmount)), __LINE__);
        }
        $this->PremiumAmount = $premiumAmount;
        return $this;
    }
    /**
     * Get PremiumGrossAmount value
     * @return string|null
     */
    public function getPremiumGrossAmount()
    {
        return $this->PremiumGrossAmount;
    }
    /**
     * Set PremiumGrossAmount value
     * @param string $premiumGrossAmount
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPremiumGrossAmount($premiumGrossAmount = null)
    {
        // validation for constraint: string
        if (!is_null($premiumGrossAmount) && !is_string($premiumGrossAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($premiumGrossAmount)), __LINE__);
        }
        $this->PremiumGrossAmount = $premiumGrossAmount;
        return $this;
    }
    /**
     * Get PremiumPerDay value
     * @return string|null
     */
    public function getPremiumPerDay()
    {
        return $this->PremiumPerDay;
    }
    /**
     * Set PremiumPerDay value
     * @param string $premiumPerDay
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPremiumPerDay($premiumPerDay = null)
    {
        // validation for constraint: string
        if (!is_null($premiumPerDay) && !is_string($premiumPerDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($premiumPerDay)), __LINE__);
        }
        $this->PremiumPerDay = $premiumPerDay;
        return $this;
    }
    /**
     * Get MaxDurationDays value
     * @return string|null
     */
    public function getMaxDurationDays()
    {
        return $this->MaxDurationDays;
    }
    /**
     * Set MaxDurationDays value
     * @param string $maxDurationDays
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setMaxDurationDays($maxDurationDays = null)
    {
        // validation for constraint: string
        if (!is_null($maxDurationDays) && !is_string($maxDurationDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxDurationDays)), __LINE__);
        }
        $this->MaxDurationDays = $maxDurationDays;
        return $this;
    }
    /**
     * Get DestinationLocation value
     * @return \Sabre\UpdateReservation\StructType\DestinationLocation[]|null
     */
    public function getDestinationLocation()
    {
        return $this->DestinationLocation;
    }
    /**
     * Set DestinationLocation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\DestinationLocation[] $destinationLocation
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setDestinationLocation(array $destinationLocation = array())
    {
        foreach ($destinationLocation as $insuranceTypeDestinationLocationItem) {
            // validation for constraint: itemType
            if (!$insuranceTypeDestinationLocationItem instanceof \Sabre\UpdateReservation\StructType\DestinationLocation) {
                throw new \InvalidArgumentException(sprintf('The DestinationLocation property can only contain items of \Sabre\UpdateReservation\StructType\DestinationLocation, "%s" given', is_object($insuranceTypeDestinationLocationItem) ? get_class($insuranceTypeDestinationLocationItem) : gettype($insuranceTypeDestinationLocationItem)), __LINE__);
            }
        }
        $this->DestinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Add item to DestinationLocation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\DestinationLocation $item
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function addToDestinationLocation(\Sabre\UpdateReservation\StructType\DestinationLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\DestinationLocation) {
            throw new \InvalidArgumentException(sprintf('The DestinationLocation property can only contain items of \Sabre\UpdateReservation\StructType\DestinationLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DestinationLocation[] = $item;
        return $this;
    }
    /**
     * Get OriginLocation value
     * @return \Sabre\UpdateReservation\StructType\OriginLocation|null
     */
    public function getOriginLocation()
    {
        return $this->OriginLocation;
    }
    /**
     * Set OriginLocation value
     * @param \Sabre\UpdateReservation\StructType\OriginLocation $originLocation
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setOriginLocation(\Sabre\UpdateReservation\StructType\OriginLocation $originLocation = null)
    {
        $this->OriginLocation = $originLocation;
        return $this;
    }
    /**
     * Get Payment value
     * @return \Sabre\UpdateReservation\StructType\Payment|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Sabre\UpdateReservation\StructType\Payment $payment
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPayment(\Sabre\UpdateReservation\StructType\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get Travelers value
     * @return \Sabre\UpdateReservation\StructType\Travelers|null
     */
    public function getTravelers()
    {
        return $this->Travelers;
    }
    /**
     * Set Travelers value
     * @param \Sabre\UpdateReservation\StructType\Travelers $travelers
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setTravelers(\Sabre\UpdateReservation\StructType\Travelers $travelers = null)
    {
        $this->Travelers = $travelers;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\Vendor $vendor
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get PriceDetails value
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType|null
     */
    public function getPriceDetails()
    {
        return $this->PriceDetails;
    }
    /**
     * Set PriceDetails value
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $priceDetails
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPriceDetails(\Sabre\UpdateReservation\StructType\PricingElementsType $priceDetails = null)
    {
        $this->PriceDetails = $priceDetails;
        return $this;
    }
    /**
     * Get Declarations value
     * @return \Sabre\UpdateReservation\StructType\Declarations|null
     */
    public function getDeclarations()
    {
        return $this->Declarations;
    }
    /**
     * Set Declarations value
     * @param \Sabre\UpdateReservation\StructType\Declarations $declarations
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setDeclarations(\Sabre\UpdateReservation\StructType\Declarations $declarations = null)
    {
        $this->Declarations = $declarations;
        return $this;
    }
    /**
     * Get currencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->end = $end;
        return $this;
    }
    /**
     * Get numberOfPolicies value
     * @return string|null
     */
    public function getNumberOfPolicies()
    {
        return $this->numberOfPolicies;
    }
    /**
     * Set numberOfPolicies value
     * @param string $numberOfPolicies
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setNumberOfPolicies($numberOfPolicies = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfPolicies) && !is_string($numberOfPolicies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfPolicies)), __LINE__);
        }
        $this->numberOfPolicies = $numberOfPolicies;
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Get productName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->productName;
    }
    /**
     * Set productName value
     * @param string $productName
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productName)), __LINE__);
        }
        $this->productName = $productName;
        return $this;
    }
    /**
     * Get planType value
     * @return string|null
     */
    public function getPlanType()
    {
        return $this->planType;
    }
    /**
     * Set planType value
     * @param string $planType
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPlanType($planType = null)
    {
        // validation for constraint: string
        if (!is_null($planType) && !is_string($planType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($planType)), __LINE__);
        }
        $this->planType = $planType;
        return $this;
    }
    /**
     * Get planName value
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->planName;
    }
    /**
     * Set planName value
     * @param string $planName
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPlanName($planName = null)
    {
        // validation for constraint: string
        if (!is_null($planName) && !is_string($planName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($planName)), __LINE__);
        }
        $this->planName = $planName;
        return $this;
    }
    /**
     * Get tripType value
     * @return string|null
     */
    public function getTripType()
    {
        return $this->tripType;
    }
    /**
     * Set tripType value
     * @param string $tripType
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setTripType($tripType = null)
    {
        // validation for constraint: string
        if (!is_null($tripType) && !is_string($tripType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tripType)), __LINE__);
        }
        $this->tripType = $tripType;
        return $this;
    }
    /**
     * Get minAge value
     * @return int|null
     */
    public function getMinAge()
    {
        return $this->minAge;
    }
    /**
     * Set minAge value
     * @param int $minAge
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setMinAge($minAge = null)
    {
        // validation for constraint: int
        if (!is_null($minAge) && !is_numeric($minAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minAge)), __LINE__);
        }
        $this->minAge = $minAge;
        return $this;
    }
    /**
     * Get maxAge value
     * @return int|null
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }
    /**
     * Set maxAge value
     * @param int $maxAge
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setMaxAge($maxAge = null)
    {
        // validation for constraint: int
        if (!is_null($maxAge) && !is_numeric($maxAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxAge)), __LINE__);
        }
        $this->maxAge = $maxAge;
        return $this;
    }
    /**
     * Get purchaseDate value
     * @return string|null
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }
    /**
     * Set purchaseDate value
     * @param string $purchaseDate
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setPurchaseDate($purchaseDate = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseDate) && !is_string($purchaseDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseDate)), __LINE__);
        }
        $this->purchaseDate = $purchaseDate;
        return $this;
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->start = $start;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\InsuranceType
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
