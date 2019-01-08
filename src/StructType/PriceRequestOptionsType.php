<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceRequestOptionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identify pricing source, if negotiated fares are requested and if it is a reprice request.
 * @subpackage Structs
 */
class PriceRequestOptionsType extends AbstractStructBase
{
    /**
     * The NegotiatedFareCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType[]
     */
    public $NegotiatedFareCode;
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountCodeType[]
     */
    public $AccountCode;
    /**
     * The PublicFare
     * Meta informations extracted from the WSDL
     * - documentation: This element finds only public fares.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndDefaultFalseType
     */
    public $PublicFare;
    /**
     * The PrivateFare
     * Meta informations extracted from the WSDL
     * - documentation: This element finds only private fares.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndDefaultFalseType
     */
    public $PrivateFare;
    /**
     * The IATAFare
     * Meta informations extracted from the WSDL
     * - documentation: This element finds only IATA fares.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndDefaultFalseType
     */
    public $IATAFare;
    /**
     * The WebFare
     * Meta informations extracted from the WSDL
     * - documentation: Web fare
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndType
     */
    public $WebFare;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - documentation: This element governs how flights are returned. A user can uses a priority of 1-9 to make this determination.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriorityComplexType
     */
    public $Priority;
    /**
     * The Indicators
     * Meta informations extracted from the WSDL
     * - documentation: This element restricts fares which can be returned in response. If a customer passes this element, all its children should be specified.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndicatorsType
     */
    public $Indicators;
    /**
     * The PromoID
     * Meta informations extracted from the WSDL
     * - documentation: Promotional Identifier - a string which identifies a promotion, possibly giving a discount prices etc.
     * - minOccurs: 0
     * @var string
     */
    public $PromoID;
    /**
     * The CustomerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerType;
    /**
     * The MultipleTravelerGroups
     * Meta informations extracted from the WSDL
     * - documentation: This element governs how flights are returned when multiple passenger groups are requested.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType
     */
    public $MultipleTravelerGroups;
    /**
     * The BrandedFareIndicators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType
     */
    public $BrandedFareIndicators;
    /**
     * The PassengerStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerStatusType
     */
    public $PassengerStatus;
    /**
     * The PointOfSaleOverride
     * Meta informations extracted from the WSDL
     * - documentation: Will return the fares available for specified point of sale and priced in this point of sale currency. Currency is overriden by PriceRequestInformation@CurrencyCode.
     * - minOccurs: 0
     * @var string
     */
    public $PointOfSaleOverride;
    /**
     * The PointOfTicketingOverride
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PointOfTicketingOverride;
    /**
     * The ApplyResidentDiscount
     * Meta informations extracted from the WSDL
     * - documentation: Apply resident discount in CLFE
     * - minOccurs: 0
     * @var bool
     */
    public $ApplyResidentDiscount;
    /**
     * The ETicketableOverride
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ETicketableOverrideType
     */
    public $ETicketableOverride;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CurrencyType
     */
    public $Currency;
    /**
     * The UseReducedConstructions
     * Meta informations extracted from the WSDL
     * - documentation: Use reduced constructions (simple fare paths with restrictions on the number of fare components).
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndType
     */
    public $UseReducedConstructions;
    /**
     * The OBFees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OBFeesType
     */
    public $OBFees;
    /**
     * The FareBreaksAtLegs
     * Meta informations extracted from the WSDL
     * - documentation: Force fare breaks at leg points if split taxes by leg requested. By default set to true.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndType
     */
    public $FareBreaksAtLegs;
    /**
     * The FareAdjustment
     * Meta informations extracted from the WSDL
     * - documentation: Capability to specify Plus-Up and Discount Amount and Percentage.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareAdjustmentType[]
     */
    public $FareAdjustment;
    /**
     * The ForceCompanion
     * Meta informations extracted from the WSDL
     * - documentation: Force companion fare value.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ValueType
     */
    public $ForceCompanion;
    /**
     * The UsePassengerFares
     * Meta informations extracted from the WSDL
     * - documentation: At least one fare component for each passenger type must be applicable for that passenger type.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $UsePassengerFares;
    /**
     * The UseNegotiatedFares
     * Meta informations extracted from the WSDL
     * - documentation: Returned fares need to match AcccountCode/CorporateID on at least one fare component.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\IndRequiredType
     */
    public $UseNegotiatedFares;
    /**
     * The fareQualifier
     * @var string
     */
    public $fareQualifier;
    /**
     * The negotiatedFaresOnly
     * Meta informations extracted from the WSDL
     * - documentation: If set to true then returned fares need to match requested AcccountCode/CorpID on all fare components
     * @var bool
     */
    public $negotiatedFaresOnly;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Type of funds preferred for reviewing monetary values, in ISO 4217 codes. | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $currencyCode;
    /**
     * The pricingSource
     * Meta informations extracted from the WSDL
     * - documentation: It can be used to indicate whether the fare is public or private.
     * @var string
     */
    public $pricingSource;
    /**
     * The reprice
     * @var bool
     */
    public $reprice;
    /**
     * The processThruFaresOnly
     * Meta informations extracted from the WSDL
     * - documentation: Activates processing of thru fares only.
     * @var bool
     */
    public $processThruFaresOnly;
    /**
     * The purchaseDate
     * Meta informations extracted from the WSDL
     * - documentation: Specify purchase date. Fares returned will be based on the purchase date.
     * @var string
     */
    public $purchaseDate;
    /**
     * The purchaseTime
     * Meta informations extracted from the WSDL
     * - documentation: Specify purchase time. Fares returned will be based on the purchase time.
     * @var string
     */
    public $purchaseTime;
    /**
     * The netFaresUsed
     * Meta informations extracted from the WSDL
     * - documentation: Set to true when exchange ticket uses net fare.
     * @var bool
     */
    public $netFaresUsed;
    /**
     * Constructor method for PriceRequestOptionsType
     * @uses PriceRequestOptionsType::setNegotiatedFareCode()
     * @uses PriceRequestOptionsType::setAccountCode()
     * @uses PriceRequestOptionsType::setPublicFare()
     * @uses PriceRequestOptionsType::setPrivateFare()
     * @uses PriceRequestOptionsType::setIATAFare()
     * @uses PriceRequestOptionsType::setWebFare()
     * @uses PriceRequestOptionsType::setPriority()
     * @uses PriceRequestOptionsType::setIndicators()
     * @uses PriceRequestOptionsType::setPromoID()
     * @uses PriceRequestOptionsType::setCustomerType()
     * @uses PriceRequestOptionsType::setMultipleTravelerGroups()
     * @uses PriceRequestOptionsType::setBrandedFareIndicators()
     * @uses PriceRequestOptionsType::setPassengerStatus()
     * @uses PriceRequestOptionsType::setPointOfSaleOverride()
     * @uses PriceRequestOptionsType::setPointOfTicketingOverride()
     * @uses PriceRequestOptionsType::setApplyResidentDiscount()
     * @uses PriceRequestOptionsType::setETicketableOverride()
     * @uses PriceRequestOptionsType::setCurrency()
     * @uses PriceRequestOptionsType::setUseReducedConstructions()
     * @uses PriceRequestOptionsType::setOBFees()
     * @uses PriceRequestOptionsType::setFareBreaksAtLegs()
     * @uses PriceRequestOptionsType::setFareAdjustment()
     * @uses PriceRequestOptionsType::setForceCompanion()
     * @uses PriceRequestOptionsType::setUsePassengerFares()
     * @uses PriceRequestOptionsType::setUseNegotiatedFares()
     * @uses PriceRequestOptionsType::setFareQualifier()
     * @uses PriceRequestOptionsType::setNegotiatedFaresOnly()
     * @uses PriceRequestOptionsType::setCurrencyCode()
     * @uses PriceRequestOptionsType::setPricingSource()
     * @uses PriceRequestOptionsType::setReprice()
     * @uses PriceRequestOptionsType::setProcessThruFaresOnly()
     * @uses PriceRequestOptionsType::setPurchaseDate()
     * @uses PriceRequestOptionsType::setPurchaseTime()
     * @uses PriceRequestOptionsType::setNetFaresUsed()
     * @param \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType[] $negotiatedFareCode
     * @param \Sabre\UpdateReservation\StructType\AccountCodeType[] $accountCode
     * @param \Sabre\UpdateReservation\StructType\IndDefaultFalseType $publicFare
     * @param \Sabre\UpdateReservation\StructType\IndDefaultFalseType $privateFare
     * @param \Sabre\UpdateReservation\StructType\IndDefaultFalseType $iATAFare
     * @param \Sabre\UpdateReservation\StructType\IndType $webFare
     * @param \Sabre\UpdateReservation\StructType\PriorityComplexType $priority
     * @param \Sabre\UpdateReservation\StructType\IndicatorsType $indicators
     * @param string $promoID
     * @param string $customerType
     * @param \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType $multipleTravelerGroups
     * @param \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType $brandedFareIndicators
     * @param \Sabre\UpdateReservation\StructType\PassengerStatusType $passengerStatus
     * @param string $pointOfSaleOverride
     * @param string $pointOfTicketingOverride
     * @param bool $applyResidentDiscount
     * @param \Sabre\UpdateReservation\StructType\ETicketableOverrideType $eTicketableOverride
     * @param \Sabre\UpdateReservation\StructType\CurrencyType $currency
     * @param \Sabre\UpdateReservation\StructType\IndType $useReducedConstructions
     * @param \Sabre\UpdateReservation\StructType\OBFeesType $oBFees
     * @param \Sabre\UpdateReservation\StructType\IndType $fareBreaksAtLegs
     * @param \Sabre\UpdateReservation\StructType\FareAdjustmentType[] $fareAdjustment
     * @param \Sabre\UpdateReservation\StructType\ValueType $forceCompanion
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $usePassengerFares
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $useNegotiatedFares
     * @param string $fareQualifier
     * @param bool $negotiatedFaresOnly
     * @param string $currencyCode
     * @param string $pricingSource
     * @param bool $reprice
     * @param bool $processThruFaresOnly
     * @param string $purchaseDate
     * @param string $purchaseTime
     * @param bool $netFaresUsed
     */
    public function __construct(array $negotiatedFareCode = array(), array $accountCode = array(), \Sabre\UpdateReservation\StructType\IndDefaultFalseType $publicFare = null, \Sabre\UpdateReservation\StructType\IndDefaultFalseType $privateFare = null, \Sabre\UpdateReservation\StructType\IndDefaultFalseType $iATAFare = null, \Sabre\UpdateReservation\StructType\IndType $webFare = null, \Sabre\UpdateReservation\StructType\PriorityComplexType $priority = null, \Sabre\UpdateReservation\StructType\IndicatorsType $indicators = null, $promoID = null, $customerType = null, \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType $multipleTravelerGroups = null, \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType $brandedFareIndicators = null, \Sabre\UpdateReservation\StructType\PassengerStatusType $passengerStatus = null, $pointOfSaleOverride = null, $pointOfTicketingOverride = null, $applyResidentDiscount = null, \Sabre\UpdateReservation\StructType\ETicketableOverrideType $eTicketableOverride = null, \Sabre\UpdateReservation\StructType\CurrencyType $currency = null, \Sabre\UpdateReservation\StructType\IndType $useReducedConstructions = null, \Sabre\UpdateReservation\StructType\OBFeesType $oBFees = null, \Sabre\UpdateReservation\StructType\IndType $fareBreaksAtLegs = null, array $fareAdjustment = array(), \Sabre\UpdateReservation\StructType\ValueType $forceCompanion = null, \Sabre\UpdateReservation\StructType\IndRequiredType $usePassengerFares = null, \Sabre\UpdateReservation\StructType\IndRequiredType $useNegotiatedFares = null, $fareQualifier = null, $negotiatedFaresOnly = null, $currencyCode = null, $pricingSource = null, $reprice = null, $processThruFaresOnly = null, $purchaseDate = null, $purchaseTime = null, $netFaresUsed = null)
    {
        $this
            ->setNegotiatedFareCode($negotiatedFareCode)
            ->setAccountCode($accountCode)
            ->setPublicFare($publicFare)
            ->setPrivateFare($privateFare)
            ->setIATAFare($iATAFare)
            ->setWebFare($webFare)
            ->setPriority($priority)
            ->setIndicators($indicators)
            ->setPromoID($promoID)
            ->setCustomerType($customerType)
            ->setMultipleTravelerGroups($multipleTravelerGroups)
            ->setBrandedFareIndicators($brandedFareIndicators)
            ->setPassengerStatus($passengerStatus)
            ->setPointOfSaleOverride($pointOfSaleOverride)
            ->setPointOfTicketingOverride($pointOfTicketingOverride)
            ->setApplyResidentDiscount($applyResidentDiscount)
            ->setETicketableOverride($eTicketableOverride)
            ->setCurrency($currency)
            ->setUseReducedConstructions($useReducedConstructions)
            ->setOBFees($oBFees)
            ->setFareBreaksAtLegs($fareBreaksAtLegs)
            ->setFareAdjustment($fareAdjustment)
            ->setForceCompanion($forceCompanion)
            ->setUsePassengerFares($usePassengerFares)
            ->setUseNegotiatedFares($useNegotiatedFares)
            ->setFareQualifier($fareQualifier)
            ->setNegotiatedFaresOnly($negotiatedFaresOnly)
            ->setCurrencyCode($currencyCode)
            ->setPricingSource($pricingSource)
            ->setReprice($reprice)
            ->setProcessThruFaresOnly($processThruFaresOnly)
            ->setPurchaseDate($purchaseDate)
            ->setPurchaseTime($purchaseTime)
            ->setNetFaresUsed($netFaresUsed);
    }
    /**
     * Get NegotiatedFareCode value
     * @return \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType[]|null
     */
    public function getNegotiatedFareCode()
    {
        return $this->NegotiatedFareCode;
    }
    /**
     * Set NegotiatedFareCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType[] $negotiatedFareCode
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setNegotiatedFareCode(array $negotiatedFareCode = array())
    {
        foreach ($negotiatedFareCode as $priceRequestOptionsTypeNegotiatedFareCodeItem) {
            // validation for constraint: itemType
            if (!$priceRequestOptionsTypeNegotiatedFareCodeItem instanceof \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType) {
                throw new \InvalidArgumentException(sprintf('The NegotiatedFareCode property can only contain items of \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType, "%s" given', is_object($priceRequestOptionsTypeNegotiatedFareCodeItem) ? get_class($priceRequestOptionsTypeNegotiatedFareCodeItem) : gettype($priceRequestOptionsTypeNegotiatedFareCodeItem)), __LINE__);
            }
        }
        $this->NegotiatedFareCode = $negotiatedFareCode;
        return $this;
    }
    /**
     * Add item to NegotiatedFareCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType $item
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function addToNegotiatedFareCode(\Sabre\UpdateReservation\StructType\NegotiatedFareCodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType) {
            throw new \InvalidArgumentException(sprintf('The NegotiatedFareCode property can only contain items of \Sabre\UpdateReservation\StructType\NegotiatedFareCodeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NegotiatedFareCode[] = $item;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Sabre\UpdateReservation\StructType\AccountCodeType[]|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountCodeType[] $accountCode
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setAccountCode(array $accountCode = array())
    {
        foreach ($accountCode as $priceRequestOptionsTypeAccountCodeItem) {
            // validation for constraint: itemType
            if (!$priceRequestOptionsTypeAccountCodeItem instanceof \Sabre\UpdateReservation\StructType\AccountCodeType) {
                throw new \InvalidArgumentException(sprintf('The AccountCode property can only contain items of \Sabre\UpdateReservation\StructType\AccountCodeType, "%s" given', is_object($priceRequestOptionsTypeAccountCodeItem) ? get_class($priceRequestOptionsTypeAccountCodeItem) : gettype($priceRequestOptionsTypeAccountCodeItem)), __LINE__);
            }
        }
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AccountCodeType $item
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function addToAccountCode(\Sabre\UpdateReservation\StructType\AccountCodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AccountCodeType) {
            throw new \InvalidArgumentException(sprintf('The AccountCode property can only contain items of \Sabre\UpdateReservation\StructType\AccountCodeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccountCode[] = $item;
        return $this;
    }
    /**
     * Get PublicFare value
     * @return \Sabre\UpdateReservation\StructType\IndDefaultFalseType|null
     */
    public function getPublicFare()
    {
        return $this->PublicFare;
    }
    /**
     * Set PublicFare value
     * @param \Sabre\UpdateReservation\StructType\IndDefaultFalseType $publicFare
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPublicFare(\Sabre\UpdateReservation\StructType\IndDefaultFalseType $publicFare = null)
    {
        $this->PublicFare = $publicFare;
        return $this;
    }
    /**
     * Get PrivateFare value
     * @return \Sabre\UpdateReservation\StructType\IndDefaultFalseType|null
     */
    public function getPrivateFare()
    {
        return $this->PrivateFare;
    }
    /**
     * Set PrivateFare value
     * @param \Sabre\UpdateReservation\StructType\IndDefaultFalseType $privateFare
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPrivateFare(\Sabre\UpdateReservation\StructType\IndDefaultFalseType $privateFare = null)
    {
        $this->PrivateFare = $privateFare;
        return $this;
    }
    /**
     * Get IATAFare value
     * @return \Sabre\UpdateReservation\StructType\IndDefaultFalseType|null
     */
    public function getIATAFare()
    {
        return $this->IATAFare;
    }
    /**
     * Set IATAFare value
     * @param \Sabre\UpdateReservation\StructType\IndDefaultFalseType $iATAFare
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setIATAFare(\Sabre\UpdateReservation\StructType\IndDefaultFalseType $iATAFare = null)
    {
        $this->IATAFare = $iATAFare;
        return $this;
    }
    /**
     * Get WebFare value
     * @return \Sabre\UpdateReservation\StructType\IndType|null
     */
    public function getWebFare()
    {
        return $this->WebFare;
    }
    /**
     * Set WebFare value
     * @param \Sabre\UpdateReservation\StructType\IndType $webFare
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setWebFare(\Sabre\UpdateReservation\StructType\IndType $webFare = null)
    {
        $this->WebFare = $webFare;
        return $this;
    }
    /**
     * Get Priority value
     * @return \Sabre\UpdateReservation\StructType\PriorityComplexType|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param \Sabre\UpdateReservation\StructType\PriorityComplexType $priority
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPriority(\Sabre\UpdateReservation\StructType\PriorityComplexType $priority = null)
    {
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get Indicators value
     * @return \Sabre\UpdateReservation\StructType\IndicatorsType|null
     */
    public function getIndicators()
    {
        return $this->Indicators;
    }
    /**
     * Set Indicators value
     * @param \Sabre\UpdateReservation\StructType\IndicatorsType $indicators
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setIndicators(\Sabre\UpdateReservation\StructType\IndicatorsType $indicators = null)
    {
        $this->Indicators = $indicators;
        return $this;
    }
    /**
     * Get PromoID value
     * @return string|null
     */
    public function getPromoID()
    {
        return $this->PromoID;
    }
    /**
     * Set PromoID value
     * @param string $promoID
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPromoID($promoID = null)
    {
        // validation for constraint: string
        if (!is_null($promoID) && !is_string($promoID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promoID)), __LINE__);
        }
        $this->PromoID = $promoID;
        return $this;
    }
    /**
     * Get CustomerType value
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->CustomerType;
    }
    /**
     * Set CustomerType value
     * @uses \Sabre\UpdateReservation\EnumType\CustomerComplexType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\CustomerComplexType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customerType
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setCustomerType($customerType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\CustomerComplexType::valueIsValid($customerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customerType, implode(', ', \Sabre\UpdateReservation\EnumType\CustomerComplexType::getValidValues())), __LINE__);
        }
        $this->CustomerType = $customerType;
        return $this;
    }
    /**
     * Get MultipleTravelerGroups value
     * @return \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType|null
     */
    public function getMultipleTravelerGroups()
    {
        return $this->MultipleTravelerGroups;
    }
    /**
     * Set MultipleTravelerGroups value
     * @param \Sabre\UpdateReservation\StructType\ItinerariesPerGroupType $multipleTravelerGroups
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setMultipleTravelerGroups(\Sabre\UpdateReservation\StructType\ItinerariesPerGroupType $multipleTravelerGroups = null)
    {
        $this->MultipleTravelerGroups = $multipleTravelerGroups;
        return $this;
    }
    /**
     * Get BrandedFareIndicators value
     * @return \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType|null
     */
    public function getBrandedFareIndicators()
    {
        return $this->BrandedFareIndicators;
    }
    /**
     * Set BrandedFareIndicators value
     * @param \Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType $brandedFareIndicators
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setBrandedFareIndicators(\Sabre\UpdateReservation\StructType\BrandedFareIndicatorsType $brandedFareIndicators = null)
    {
        $this->BrandedFareIndicators = $brandedFareIndicators;
        return $this;
    }
    /**
     * Get PassengerStatus value
     * @return \Sabre\UpdateReservation\StructType\PassengerStatusType|null
     */
    public function getPassengerStatus()
    {
        return $this->PassengerStatus;
    }
    /**
     * Set PassengerStatus value
     * @param \Sabre\UpdateReservation\StructType\PassengerStatusType $passengerStatus
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPassengerStatus(\Sabre\UpdateReservation\StructType\PassengerStatusType $passengerStatus = null)
    {
        $this->PassengerStatus = $passengerStatus;
        return $this;
    }
    /**
     * Get PointOfSaleOverride value
     * @return string|null
     */
    public function getPointOfSaleOverride()
    {
        return $this->PointOfSaleOverride;
    }
    /**
     * Set PointOfSaleOverride value
     * @param string $pointOfSaleOverride
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPointOfSaleOverride($pointOfSaleOverride = null)
    {
        // validation for constraint: string
        if (!is_null($pointOfSaleOverride) && !is_string($pointOfSaleOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointOfSaleOverride)), __LINE__);
        }
        $this->PointOfSaleOverride = $pointOfSaleOverride;
        return $this;
    }
    /**
     * Get PointOfTicketingOverride value
     * @return string|null
     */
    public function getPointOfTicketingOverride()
    {
        return $this->PointOfTicketingOverride;
    }
    /**
     * Set PointOfTicketingOverride value
     * @param string $pointOfTicketingOverride
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPointOfTicketingOverride($pointOfTicketingOverride = null)
    {
        // validation for constraint: string
        if (!is_null($pointOfTicketingOverride) && !is_string($pointOfTicketingOverride)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointOfTicketingOverride)), __LINE__);
        }
        $this->PointOfTicketingOverride = $pointOfTicketingOverride;
        return $this;
    }
    /**
     * Get ApplyResidentDiscount value
     * @return bool|null
     */
    public function getApplyResidentDiscount()
    {
        return $this->ApplyResidentDiscount;
    }
    /**
     * Set ApplyResidentDiscount value
     * @param bool $applyResidentDiscount
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setApplyResidentDiscount($applyResidentDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($applyResidentDiscount) && !is_bool($applyResidentDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($applyResidentDiscount)), __LINE__);
        }
        $this->ApplyResidentDiscount = $applyResidentDiscount;
        return $this;
    }
    /**
     * Get ETicketableOverride value
     * @return \Sabre\UpdateReservation\StructType\ETicketableOverrideType|null
     */
    public function getETicketableOverride()
    {
        return $this->ETicketableOverride;
    }
    /**
     * Set ETicketableOverride value
     * @param \Sabre\UpdateReservation\StructType\ETicketableOverrideType $eTicketableOverride
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setETicketableOverride(\Sabre\UpdateReservation\StructType\ETicketableOverrideType $eTicketableOverride = null)
    {
        $this->ETicketableOverride = $eTicketableOverride;
        return $this;
    }
    /**
     * Get Currency value
     * @return \Sabre\UpdateReservation\StructType\CurrencyType|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param \Sabre\UpdateReservation\StructType\CurrencyType $currency
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setCurrency(\Sabre\UpdateReservation\StructType\CurrencyType $currency = null)
    {
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Get UseReducedConstructions value
     * @return \Sabre\UpdateReservation\StructType\IndType|null
     */
    public function getUseReducedConstructions()
    {
        return $this->UseReducedConstructions;
    }
    /**
     * Set UseReducedConstructions value
     * @param \Sabre\UpdateReservation\StructType\IndType $useReducedConstructions
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setUseReducedConstructions(\Sabre\UpdateReservation\StructType\IndType $useReducedConstructions = null)
    {
        $this->UseReducedConstructions = $useReducedConstructions;
        return $this;
    }
    /**
     * Get OBFees value
     * @return \Sabre\UpdateReservation\StructType\OBFeesType|null
     */
    public function getOBFees()
    {
        return $this->OBFees;
    }
    /**
     * Set OBFees value
     * @param \Sabre\UpdateReservation\StructType\OBFeesType $oBFees
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setOBFees(\Sabre\UpdateReservation\StructType\OBFeesType $oBFees = null)
    {
        $this->OBFees = $oBFees;
        return $this;
    }
    /**
     * Get FareBreaksAtLegs value
     * @return \Sabre\UpdateReservation\StructType\IndType|null
     */
    public function getFareBreaksAtLegs()
    {
        return $this->FareBreaksAtLegs;
    }
    /**
     * Set FareBreaksAtLegs value
     * @param \Sabre\UpdateReservation\StructType\IndType $fareBreaksAtLegs
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setFareBreaksAtLegs(\Sabre\UpdateReservation\StructType\IndType $fareBreaksAtLegs = null)
    {
        $this->FareBreaksAtLegs = $fareBreaksAtLegs;
        return $this;
    }
    /**
     * Get FareAdjustment value
     * @return \Sabre\UpdateReservation\StructType\FareAdjustmentType[]|null
     */
    public function getFareAdjustment()
    {
        return $this->FareAdjustment;
    }
    /**
     * Set FareAdjustment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareAdjustmentType[] $fareAdjustment
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setFareAdjustment(array $fareAdjustment = array())
    {
        foreach ($fareAdjustment as $priceRequestOptionsTypeFareAdjustmentItem) {
            // validation for constraint: itemType
            if (!$priceRequestOptionsTypeFareAdjustmentItem instanceof \Sabre\UpdateReservation\StructType\FareAdjustmentType) {
                throw new \InvalidArgumentException(sprintf('The FareAdjustment property can only contain items of \Sabre\UpdateReservation\StructType\FareAdjustmentType, "%s" given', is_object($priceRequestOptionsTypeFareAdjustmentItem) ? get_class($priceRequestOptionsTypeFareAdjustmentItem) : gettype($priceRequestOptionsTypeFareAdjustmentItem)), __LINE__);
            }
        }
        $this->FareAdjustment = $fareAdjustment;
        return $this;
    }
    /**
     * Add item to FareAdjustment value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FareAdjustmentType $item
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function addToFareAdjustment(\Sabre\UpdateReservation\StructType\FareAdjustmentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FareAdjustmentType) {
            throw new \InvalidArgumentException(sprintf('The FareAdjustment property can only contain items of \Sabre\UpdateReservation\StructType\FareAdjustmentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareAdjustment[] = $item;
        return $this;
    }
    /**
     * Get ForceCompanion value
     * @return \Sabre\UpdateReservation\StructType\ValueType|null
     */
    public function getForceCompanion()
    {
        return $this->ForceCompanion;
    }
    /**
     * Set ForceCompanion value
     * @param \Sabre\UpdateReservation\StructType\ValueType $forceCompanion
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setForceCompanion(\Sabre\UpdateReservation\StructType\ValueType $forceCompanion = null)
    {
        $this->ForceCompanion = $forceCompanion;
        return $this;
    }
    /**
     * Get UsePassengerFares value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getUsePassengerFares()
    {
        return $this->UsePassengerFares;
    }
    /**
     * Set UsePassengerFares value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $usePassengerFares
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setUsePassengerFares(\Sabre\UpdateReservation\StructType\IndRequiredType $usePassengerFares = null)
    {
        $this->UsePassengerFares = $usePassengerFares;
        return $this;
    }
    /**
     * Get UseNegotiatedFares value
     * @return \Sabre\UpdateReservation\StructType\IndRequiredType|null
     */
    public function getUseNegotiatedFares()
    {
        return $this->UseNegotiatedFares;
    }
    /**
     * Set UseNegotiatedFares value
     * @param \Sabre\UpdateReservation\StructType\IndRequiredType $useNegotiatedFares
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setUseNegotiatedFares(\Sabre\UpdateReservation\StructType\IndRequiredType $useNegotiatedFares = null)
    {
        $this->UseNegotiatedFares = $useNegotiatedFares;
        return $this;
    }
    /**
     * Get fareQualifier value
     * @return string|null
     */
    public function getFareQualifier()
    {
        return $this->fareQualifier;
    }
    /**
     * Set fareQualifier value
     * @param string $fareQualifier
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setFareQualifier($fareQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($fareQualifier) && !is_string($fareQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareQualifier)), __LINE__);
        }
        $this->fareQualifier = $fareQualifier;
        return $this;
    }
    /**
     * Get negotiatedFaresOnly value
     * @return bool|null
     */
    public function getNegotiatedFaresOnly()
    {
        return $this->negotiatedFaresOnly;
    }
    /**
     * Set negotiatedFaresOnly value
     * @param bool $negotiatedFaresOnly
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setNegotiatedFaresOnly($negotiatedFaresOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($negotiatedFaresOnly) && !is_bool($negotiatedFaresOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($negotiatedFaresOnly)), __LINE__);
        }
        $this->negotiatedFaresOnly = $negotiatedFaresOnly;
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
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currencyCode) && !preg_match('/[a-zA-Z]{3}/', $currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($currencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get pricingSource value
     * @return string|null
     */
    public function getPricingSource()
    {
        return $this->pricingSource;
    }
    /**
     * Set pricingSource value
     * @uses \Sabre\UpdateReservation\EnumType\RequestPricingSourceType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\RequestPricingSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pricingSource
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPricingSource($pricingSource = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\RequestPricingSourceType::valueIsValid($pricingSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pricingSource, implode(', ', \Sabre\UpdateReservation\EnumType\RequestPricingSourceType::getValidValues())), __LINE__);
        }
        $this->pricingSource = $pricingSource;
        return $this;
    }
    /**
     * Get reprice value
     * @return bool|null
     */
    public function getReprice()
    {
        return $this->reprice;
    }
    /**
     * Set reprice value
     * @param bool $reprice
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setReprice($reprice = null)
    {
        // validation for constraint: boolean
        if (!is_null($reprice) && !is_bool($reprice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reprice)), __LINE__);
        }
        $this->reprice = $reprice;
        return $this;
    }
    /**
     * Get processThruFaresOnly value
     * @return bool|null
     */
    public function getProcessThruFaresOnly()
    {
        return $this->processThruFaresOnly;
    }
    /**
     * Set processThruFaresOnly value
     * @param bool $processThruFaresOnly
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setProcessThruFaresOnly($processThruFaresOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($processThruFaresOnly) && !is_bool($processThruFaresOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($processThruFaresOnly)), __LINE__);
        }
        $this->processThruFaresOnly = $processThruFaresOnly;
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
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
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
     * Get purchaseTime value
     * @return string|null
     */
    public function getPurchaseTime()
    {
        return $this->purchaseTime;
    }
    /**
     * Set purchaseTime value
     * @param string $purchaseTime
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setPurchaseTime($purchaseTime = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseTime) && !is_string($purchaseTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseTime)), __LINE__);
        }
        $this->purchaseTime = $purchaseTime;
        return $this;
    }
    /**
     * Get netFaresUsed value
     * @return bool|null
     */
    public function getNetFaresUsed()
    {
        return $this->netFaresUsed;
    }
    /**
     * Set netFaresUsed value
     * @param bool $netFaresUsed
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public function setNetFaresUsed($netFaresUsed = null)
    {
        // validation for constraint: boolean
        if (!is_null($netFaresUsed) && !is_bool($netFaresUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($netFaresUsed)), __LINE__);
        }
        $this->netFaresUsed = $netFaresUsed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
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
