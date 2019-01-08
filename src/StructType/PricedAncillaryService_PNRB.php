<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedAncillaryService.PNRB StructType
 * @subpackage Structs
 */
class PricedAncillaryService_PNRB extends AbstractStructBase
{
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
     * The optionalAncillaryServiceInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB[]
     */
    public $optionalAncillaryServiceInformation;
    /**
     * Constructor method for PricedAncillaryService.PNRB
     * @uses PricedAncillaryService_PNRB::setCommercialName()
     * @uses PricedAncillaryService_PNRB::setRficCode()
     * @uses PricedAncillaryService_PNRB::setRficSubcode()
     * @uses PricedAncillaryService_PNRB::setSSRCode()
     * @uses PricedAncillaryService_PNRB::setProductTextDetails()
     * @uses PricedAncillaryService_PNRB::setProductText()
     * @uses PricedAncillaryService_PNRB::setOwningCarrierCode()
     * @uses PricedAncillaryService_PNRB::setSsimCode()
     * @uses PricedAncillaryService_PNRB::setBookingIndicator()
     * @uses PricedAncillaryService_PNRB::setVendor()
     * @uses PricedAncillaryService_PNRB::setEMDType()
     * @uses PricedAncillaryService_PNRB::setEMDNumber()
     * @uses PricedAncillaryService_PNRB::setEMDCoupon()
     * @uses PricedAncillaryService_PNRB::setServiceFeeLineNumber()
     * @uses PricedAncillaryService_PNRB::setDisplayOnlyIndicator()
     * @uses PricedAncillaryService_PNRB::setConsumptionIndicator()
     * @uses PricedAncillaryService_PNRB::setPresentTo()
     * @uses PricedAncillaryService_PNRB::setAtCity()
     * @uses PricedAncillaryService_PNRB::setEndorsements()
     * @uses PricedAncillaryService_PNRB::setStationIndicator()
     * @uses PricedAncillaryService_PNRB::setServiceCity()
     * @uses PricedAncillaryService_PNRB::setServiceCityDestination()
     * @uses PricedAncillaryService_PNRB::setServiceType()
     * @uses PricedAncillaryService_PNRB::setRuleSet()
     * @uses PricedAncillaryService_PNRB::setAncillarySequenceNumber()
     * @uses PricedAncillaryService_PNRB::setOfferItemID()
     * @uses PricedAncillaryService_PNRB::setOriginalPrice()
     * @uses PricedAncillaryService_PNRB::setOptionalAncillaryServiceInformation()
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
     * @param \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB[] $optionalAncillaryServiceInformation
     */
    public function __construct($commercialName = null, $rficCode = null, $rficSubcode = null, $sSRCode = null, \Sabre\UpdateReservation\StructType\ProductTextDetails $productTextDetails = null, $productText = null, $owningCarrierCode = null, $ssimCode = null, $bookingIndicator = null, $vendor = null, $eMDType = null, $eMDNumber = null, $eMDCoupon = null, $serviceFeeLineNumber = null, $displayOnlyIndicator = null, $consumptionIndicator = null, $presentTo = null, $atCity = null, $endorsements = null, $stationIndicator = null, $serviceCity = null, $serviceCityDestination = null, $serviceType = null, \Sabre\UpdateReservation\StructType\RuleSet $ruleSet = null, $ancillarySequenceNumber = null, $offerItemID = null, \Sabre\UpdateReservation\StructType\OriginalPrice $originalPrice = null, array $optionalAncillaryServiceInformation = array())
    {
        $this
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
            ->setOptionalAncillaryServiceInformation($optionalAncillaryServiceInformation);
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
     */
    public function setOriginalPrice(\Sabre\UpdateReservation\StructType\OriginalPrice $originalPrice = null)
    {
        $this->OriginalPrice = $originalPrice;
        return $this;
    }
    /**
     * Get optionalAncillaryServiceInformation value
     * @return \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB[]|null
     */
    public function getOptionalAncillaryServiceInformation()
    {
        return $this->optionalAncillaryServiceInformation;
    }
    /**
     * Set optionalAncillaryServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB[] $optionalAncillaryServiceInformation
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
     */
    public function setOptionalAncillaryServiceInformation(array $optionalAncillaryServiceInformation = array())
    {
        foreach ($optionalAncillaryServiceInformation as $pricedAncillaryService_PNRBOptionalAncillaryServiceInformationItem) {
            // validation for constraint: itemType
            if (!$pricedAncillaryService_PNRBOptionalAncillaryServiceInformationItem instanceof \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB) {
                throw new \InvalidArgumentException(sprintf('The optionalAncillaryServiceInformation property can only contain items of \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB, "%s" given', is_object($pricedAncillaryService_PNRBOptionalAncillaryServiceInformationItem) ? get_class($pricedAncillaryService_PNRBOptionalAncillaryServiceInformationItem) : gettype($pricedAncillaryService_PNRBOptionalAncillaryServiceInformationItem)), __LINE__);
            }
        }
        $this->optionalAncillaryServiceInformation = $optionalAncillaryServiceInformation;
        return $this;
    }
    /**
     * Add item to optionalAncillaryServiceInformation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
     */
    public function addToOptionalAncillaryServiceInformation(\Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB) {
            throw new \InvalidArgumentException(sprintf('The optionalAncillaryServiceInformation property can only contain items of \Sabre\UpdateReservation\StructType\OptionalAncillaryServicesInformationData_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->optionalAncillaryServiceInformation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricedAncillaryService_PNRB
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
