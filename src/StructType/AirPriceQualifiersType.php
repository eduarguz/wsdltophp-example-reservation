<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPriceQualifiersType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies passenger numbers and types.
 * @subpackage Structs
 */
class AirPriceQualifiersType extends AbstractStructBase
{
    /**
     * The SeatsRequested
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all seats required by all passenger groups.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var int[]
     */
    public $SeatsRequested;
    /**
     * The AirTravelerAvail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies passenger numbers and types.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelerInformationType[]
     */
    public $AirTravelerAvail;
    /**
     * The PriceRequestOptions
     * Meta informations extracted from the WSDL
     * - documentation: Identify pricing source, if negotiated fares are requested and if it is a reprice request.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceRequestOptionsType
     */
    public $PriceRequestOptions;
    /**
     * The TravelerRating
     * Meta informations extracted from the WSDL
     * - documentation: Customer Value Scores and Frequent Flyer Tiers for one traveler. It can influence Availability results when provided.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelerRatingType[]
     */
    public $TravelerRating;
    /**
     * The GoverningCarrierOverride
     * Meta informations extracted from the WSDL
     * - documentation: Airline Carrier Code - override the GOVERNING CARRIER to get the fare filed by that carrier.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType
     */
    public $GoverningCarrierOverride;
    /**
     * The VoluntaryChanges
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether penalties associated with voluntary changes should be included in the search results.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType
     */
    public $VoluntaryChanges;
    /**
     * The RetailerRules
     * Meta informations extracted from the WSDL
     * - documentation: TBD.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RetailerRulesType
     */
    public $RetailerRules;
    /**
     * The TaxRules
     * Meta informations extracted from the WSDL
     * - documentation: Contains tax depending rules.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TaxRulesType
     */
    public $TaxRules;
    /**
     * The ValidatingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: Validating carrier rule.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ValidatingCarrierType
     */
    public $ValidatingCarrier;
    /**
     * The CabinPref
     * Meta informations extracted from the WSDL
     * - documentation: Defines preferred cabin to be used in a search for this leg level (if SegmentType is "O") or segment (if SegmentType is "X"). The cabin type specified in this element will override the cabin type specified at the request level for
     * this leg/segment. If a cabin type is not specified for this element the cabin type at request level will be used as default for this leg or segment. If the cabin type is not specified at both the leg/segment level and request level a default cabin of
     * "Economy" will be used?
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CabinPrefType
     */
    public $CabinPref;
    /**
     * The CommissionCode
     * Meta informations extracted from the WSDL
     * - documentation: Up to 4 negotiated commission codes | Identifies TN Agency contract code.
     * - maxOccurs: 4
     * - minOccurs: 0
     * - maxLength: 20
     * - minLength: 2
     * @var string[]
     */
    public $CommissionCode;
    /**
     * The specificPTC_Indicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, this request is for a specific PTC and only fares applicable to that PTC will be checked and returned. It is the same as XOFares flag in Intellisell request.
     * @var bool
     */
    public $specificPTC_Indicator;
    /**
     * The tripType
     * Meta informations extracted from the WSDL
     * - documentation: Specify air trip type.
     * @var string
     */
    public $tripType;
    /**
     * The xOFares
     * Meta informations extracted from the WSDL
     * - documentation: XOFares indicator
     * @var bool
     */
    public $xOFares;
    /**
     * The roundTheWorld
     * Meta informations extracted from the WSDL
     * - documentation: Indicates, that itinerary should be treated as trip around the World.
     * @var bool
     */
    public $roundTheWorld;
    /**
     * Constructor method for AirPriceQualifiersType
     * @uses AirPriceQualifiersType::setSeatsRequested()
     * @uses AirPriceQualifiersType::setAirTravelerAvail()
     * @uses AirPriceQualifiersType::setPriceRequestOptions()
     * @uses AirPriceQualifiersType::setTravelerRating()
     * @uses AirPriceQualifiersType::setGoverningCarrierOverride()
     * @uses AirPriceQualifiersType::setVoluntaryChanges()
     * @uses AirPriceQualifiersType::setRetailerRules()
     * @uses AirPriceQualifiersType::setTaxRules()
     * @uses AirPriceQualifiersType::setValidatingCarrier()
     * @uses AirPriceQualifiersType::setCabinPref()
     * @uses AirPriceQualifiersType::setCommissionCode()
     * @uses AirPriceQualifiersType::setSpecificPTC_Indicator()
     * @uses AirPriceQualifiersType::setTripType()
     * @uses AirPriceQualifiersType::setXOFares()
     * @uses AirPriceQualifiersType::setRoundTheWorld()
     * @param int[] $seatsRequested
     * @param \Sabre\UpdateReservation\StructType\TravelerInformationType[] $airTravelerAvail
     * @param \Sabre\UpdateReservation\StructType\PriceRequestOptionsType $priceRequestOptions
     * @param \Sabre\UpdateReservation\StructType\TravelerRatingType[] $travelerRating
     * @param \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType $governingCarrierOverride
     * @param \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType $voluntaryChanges
     * @param \Sabre\UpdateReservation\StructType\RetailerRulesType $retailerRules
     * @param \Sabre\UpdateReservation\StructType\TaxRulesType $taxRules
     * @param \Sabre\UpdateReservation\StructType\ValidatingCarrierType $validatingCarrier
     * @param \Sabre\UpdateReservation\StructType\CabinPrefType $cabinPref
     * @param string[] $commissionCode
     * @param bool $specificPTC_Indicator
     * @param string $tripType
     * @param bool $xOFares
     * @param bool $roundTheWorld
     */
    public function __construct(array $seatsRequested = array(), array $airTravelerAvail = array(), \Sabre\UpdateReservation\StructType\PriceRequestOptionsType $priceRequestOptions = null, array $travelerRating = array(), \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType $governingCarrierOverride = null, \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType $voluntaryChanges = null, \Sabre\UpdateReservation\StructType\RetailerRulesType $retailerRules = null, \Sabre\UpdateReservation\StructType\TaxRulesType $taxRules = null, \Sabre\UpdateReservation\StructType\ValidatingCarrierType $validatingCarrier = null, \Sabre\UpdateReservation\StructType\CabinPrefType $cabinPref = null, array $commissionCode = array(), $specificPTC_Indicator = null, $tripType = null, $xOFares = null, $roundTheWorld = null)
    {
        $this
            ->setSeatsRequested($seatsRequested)
            ->setAirTravelerAvail($airTravelerAvail)
            ->setPriceRequestOptions($priceRequestOptions)
            ->setTravelerRating($travelerRating)
            ->setGoverningCarrierOverride($governingCarrierOverride)
            ->setVoluntaryChanges($voluntaryChanges)
            ->setRetailerRules($retailerRules)
            ->setTaxRules($taxRules)
            ->setValidatingCarrier($validatingCarrier)
            ->setCabinPref($cabinPref)
            ->setCommissionCode($commissionCode)
            ->setSpecificPTC_Indicator($specificPTC_Indicator)
            ->setTripType($tripType)
            ->setXOFares($xOFares)
            ->setRoundTheWorld($roundTheWorld);
    }
    /**
     * Get SeatsRequested value
     * @return int[]|null
     */
    public function getSeatsRequested()
    {
        return $this->SeatsRequested;
    }
    /**
     * Set SeatsRequested value
     * @throws \InvalidArgumentException
     * @param int[] $seatsRequested
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setSeatsRequested(array $seatsRequested = array())
    {
        foreach ($seatsRequested as $airPriceQualifiersTypeSeatsRequestedItem) {
            // validation for constraint: itemType
            if (!is_numeric($airPriceQualifiersTypeSeatsRequestedItem)) {
                throw new \InvalidArgumentException(sprintf('The SeatsRequested property can only contain items of nonNegativeInteger, "%s" given', is_object($airPriceQualifiersTypeSeatsRequestedItem) ? get_class($airPriceQualifiersTypeSeatsRequestedItem) : gettype($airPriceQualifiersTypeSeatsRequestedItem)), __LINE__);
            }
        }
        $this->SeatsRequested = $seatsRequested;
        return $this;
    }
    /**
     * Add item to SeatsRequested value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function addToSeatsRequested($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The SeatsRequested property can only contain items of nonNegativeInteger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatsRequested[] = $item;
        return $this;
    }
    /**
     * Get AirTravelerAvail value
     * @return \Sabre\UpdateReservation\StructType\TravelerInformationType[]|null
     */
    public function getAirTravelerAvail()
    {
        return $this->AirTravelerAvail;
    }
    /**
     * Set AirTravelerAvail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TravelerInformationType[] $airTravelerAvail
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setAirTravelerAvail(array $airTravelerAvail = array())
    {
        foreach ($airTravelerAvail as $airPriceQualifiersTypeAirTravelerAvailItem) {
            // validation for constraint: itemType
            if (!$airPriceQualifiersTypeAirTravelerAvailItem instanceof \Sabre\UpdateReservation\StructType\TravelerInformationType) {
                throw new \InvalidArgumentException(sprintf('The AirTravelerAvail property can only contain items of \Sabre\UpdateReservation\StructType\TravelerInformationType, "%s" given', is_object($airPriceQualifiersTypeAirTravelerAvailItem) ? get_class($airPriceQualifiersTypeAirTravelerAvailItem) : gettype($airPriceQualifiersTypeAirTravelerAvailItem)), __LINE__);
            }
        }
        $this->AirTravelerAvail = $airTravelerAvail;
        return $this;
    }
    /**
     * Add item to AirTravelerAvail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TravelerInformationType $item
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function addToAirTravelerAvail(\Sabre\UpdateReservation\StructType\TravelerInformationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TravelerInformationType) {
            throw new \InvalidArgumentException(sprintf('The AirTravelerAvail property can only contain items of \Sabre\UpdateReservation\StructType\TravelerInformationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirTravelerAvail[] = $item;
        return $this;
    }
    /**
     * Get PriceRequestOptions value
     * @return \Sabre\UpdateReservation\StructType\PriceRequestOptionsType|null
     */
    public function getPriceRequestOptions()
    {
        return $this->PriceRequestOptions;
    }
    /**
     * Set PriceRequestOptions value
     * @param \Sabre\UpdateReservation\StructType\PriceRequestOptionsType $priceRequestOptions
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setPriceRequestOptions(\Sabre\UpdateReservation\StructType\PriceRequestOptionsType $priceRequestOptions = null)
    {
        $this->PriceRequestOptions = $priceRequestOptions;
        return $this;
    }
    /**
     * Get TravelerRating value
     * @return \Sabre\UpdateReservation\StructType\TravelerRatingType[]|null
     */
    public function getTravelerRating()
    {
        return $this->TravelerRating;
    }
    /**
     * Set TravelerRating value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TravelerRatingType[] $travelerRating
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setTravelerRating(array $travelerRating = array())
    {
        foreach ($travelerRating as $airPriceQualifiersTypeTravelerRatingItem) {
            // validation for constraint: itemType
            if (!$airPriceQualifiersTypeTravelerRatingItem instanceof \Sabre\UpdateReservation\StructType\TravelerRatingType) {
                throw new \InvalidArgumentException(sprintf('The TravelerRating property can only contain items of \Sabre\UpdateReservation\StructType\TravelerRatingType, "%s" given', is_object($airPriceQualifiersTypeTravelerRatingItem) ? get_class($airPriceQualifiersTypeTravelerRatingItem) : gettype($airPriceQualifiersTypeTravelerRatingItem)), __LINE__);
            }
        }
        $this->TravelerRating = $travelerRating;
        return $this;
    }
    /**
     * Add item to TravelerRating value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TravelerRatingType $item
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function addToTravelerRating(\Sabre\UpdateReservation\StructType\TravelerRatingType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TravelerRatingType) {
            throw new \InvalidArgumentException(sprintf('The TravelerRating property can only contain items of \Sabre\UpdateReservation\StructType\TravelerRatingType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelerRating[] = $item;
        return $this;
    }
    /**
     * Get GoverningCarrierOverride value
     * @return \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType|null
     */
    public function getGoverningCarrierOverride()
    {
        return $this->GoverningCarrierOverride;
    }
    /**
     * Set GoverningCarrierOverride value
     * @param \Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType $governingCarrierOverride
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setGoverningCarrierOverride(\Sabre\UpdateReservation\StructType\GoverningCarrierOverrideType $governingCarrierOverride = null)
    {
        $this->GoverningCarrierOverride = $governingCarrierOverride;
        return $this;
    }
    /**
     * Get VoluntaryChanges value
     * @return \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType|null
     */
    public function getVoluntaryChanges()
    {
        return $this->VoluntaryChanges;
    }
    /**
     * Set VoluntaryChanges value
     * @param \Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType $voluntaryChanges
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setVoluntaryChanges(\Sabre\UpdateReservation\StructType\VoluntaryChangesSMPType $voluntaryChanges = null)
    {
        $this->VoluntaryChanges = $voluntaryChanges;
        return $this;
    }
    /**
     * Get RetailerRules value
     * @return \Sabre\UpdateReservation\StructType\RetailerRulesType|null
     */
    public function getRetailerRules()
    {
        return $this->RetailerRules;
    }
    /**
     * Set RetailerRules value
     * @param \Sabre\UpdateReservation\StructType\RetailerRulesType $retailerRules
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setRetailerRules(\Sabre\UpdateReservation\StructType\RetailerRulesType $retailerRules = null)
    {
        $this->RetailerRules = $retailerRules;
        return $this;
    }
    /**
     * Get TaxRules value
     * @return \Sabre\UpdateReservation\StructType\TaxRulesType|null
     */
    public function getTaxRules()
    {
        return $this->TaxRules;
    }
    /**
     * Set TaxRules value
     * @param \Sabre\UpdateReservation\StructType\TaxRulesType $taxRules
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setTaxRules(\Sabre\UpdateReservation\StructType\TaxRulesType $taxRules = null)
    {
        $this->TaxRules = $taxRules;
        return $this;
    }
    /**
     * Get ValidatingCarrier value
     * @return \Sabre\UpdateReservation\StructType\ValidatingCarrierType|null
     */
    public function getValidatingCarrier()
    {
        return $this->ValidatingCarrier;
    }
    /**
     * Set ValidatingCarrier value
     * @param \Sabre\UpdateReservation\StructType\ValidatingCarrierType $validatingCarrier
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setValidatingCarrier(\Sabre\UpdateReservation\StructType\ValidatingCarrierType $validatingCarrier = null)
    {
        $this->ValidatingCarrier = $validatingCarrier;
        return $this;
    }
    /**
     * Get CabinPref value
     * @return \Sabre\UpdateReservation\StructType\CabinPrefType|null
     */
    public function getCabinPref()
    {
        return $this->CabinPref;
    }
    /**
     * Set CabinPref value
     * @param \Sabre\UpdateReservation\StructType\CabinPrefType $cabinPref
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setCabinPref(\Sabre\UpdateReservation\StructType\CabinPrefType $cabinPref = null)
    {
        $this->CabinPref = $cabinPref;
        return $this;
    }
    /**
     * Get CommissionCode value
     * @return string[]|null
     */
    public function getCommissionCode()
    {
        return $this->CommissionCode;
    }
    /**
     * Set CommissionCode value
     * @throws \InvalidArgumentException
     * @param string[] $commissionCode
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setCommissionCode(array $commissionCode = array())
    {
        // validation for constraint: maxLength
        if ((is_scalar($commissionCode) && strlen($commissionCode) > 20) || (is_array($commissionCode) && count($commissionCode) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($commissionCode) ? strlen($commissionCode) : count($commissionCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($commissionCode) && strlen($commissionCode) < 2) || (is_array($commissionCode) && count($commissionCode) < 2)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at least', __LINE__);
        }
        foreach ($commissionCode as $airPriceQualifiersTypeCommissionCodeItem) {
            // validation for constraint: itemType
            if (!is_string($airPriceQualifiersTypeCommissionCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The CommissionCode property can only contain items of string, "%s" given', is_object($airPriceQualifiersTypeCommissionCodeItem) ? get_class($airPriceQualifiersTypeCommissionCodeItem) : gettype($airPriceQualifiersTypeCommissionCodeItem)), __LINE__);
            }
        }
        $this->CommissionCode = $commissionCode;
        return $this;
    }
    /**
     * Add item to CommissionCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function addToCommissionCode($item)
    {
        // validation for constraint: maxLength
        if ((is_scalar($item) && strlen($item) > 20) || (is_array($item) && count($item) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($item) ? strlen($item) : count($item)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($item) && strlen($item) < 2) || (is_array($item) && count($item) < 2)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at least', __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CommissionCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommissionCode[] = $item;
        return $this;
    }
    /**
     * Get specificPTC_Indicator value
     * @return bool|null
     */
    public function getSpecificPTC_Indicator()
    {
        return $this->specificPTC_Indicator;
    }
    /**
     * Set specificPTC_Indicator value
     * @param bool $specificPTC_Indicator
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setSpecificPTC_Indicator($specificPTC_Indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($specificPTC_Indicator) && !is_bool($specificPTC_Indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($specificPTC_Indicator)), __LINE__);
        }
        $this->specificPTC_Indicator = $specificPTC_Indicator;
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
     * @uses \Sabre\UpdateReservation\EnumType\AirTripType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\AirTripType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tripType
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setTripType($tripType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\AirTripType::valueIsValid($tripType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tripType, implode(', ', \Sabre\UpdateReservation\EnumType\AirTripType::getValidValues())), __LINE__);
        }
        $this->tripType = $tripType;
        return $this;
    }
    /**
     * Get xOFares value
     * @return bool|null
     */
    public function getXOFares()
    {
        return $this->xOFares;
    }
    /**
     * Set xOFares value
     * @param bool $xOFares
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setXOFares($xOFares = null)
    {
        // validation for constraint: boolean
        if (!is_null($xOFares) && !is_bool($xOFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($xOFares)), __LINE__);
        }
        $this->xOFares = $xOFares;
        return $this;
    }
    /**
     * Get roundTheWorld value
     * @return bool|null
     */
    public function getRoundTheWorld()
    {
        return $this->roundTheWorld;
    }
    /**
     * Set roundTheWorld value
     * @param bool $roundTheWorld
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
     */
    public function setRoundTheWorld($roundTheWorld = null)
    {
        // validation for constraint: boolean
        if (!is_null($roundTheWorld) && !is_bool($roundTheWorld)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($roundTheWorld)), __LINE__);
        }
        $this->roundTheWorld = $roundTheWorld;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirPriceQualifiersType
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
