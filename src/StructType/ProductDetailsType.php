<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDetailsType StructType
 * @subpackage Structs
 */
class ProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductName
     * @var \Sabre\UpdateReservation\StructType\ProductNameType
     */
    public $ProductName;
    /**
     * The Hotel
     * @var \Sabre\UpdateReservation\StructType\HotelProductType
     */
    public $Hotel;
    /**
     * The GroundTransportation
     * @var \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public $GroundTransportation;
    /**
     * The Rail
     * @var \Sabre\UpdateReservation\StructType\RailType
     */
    public $Rail;
    /**
     * The Tour
     * @var \Sabre\UpdateReservation\StructType\TourType
     */
    public $Tour;
    /**
     * The Air
     * @var \Sabre\UpdateReservation\StructType\AirType
     */
    public $Air;
    /**
     * The Visa
     * @var \Sabre\UpdateReservation\StructType\VisaType
     */
    public $Visa;
    /**
     * The Vehicle
     * @var \Sabre\UpdateReservation\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * The Ski
     * @var \Sabre\UpdateReservation\StructType\SkiType
     */
    public $Ski;
    /**
     * The Other
     * @var \Sabre\UpdateReservation\StructType\OtherType
     */
    public $Other;
    /**
     * The Insurance
     * @var \Sabre\UpdateReservation\StructType\InsuranceType
     */
    public $Insurance;
    /**
     * The ExternalSystemReference
     * Meta informations extracted from the WSDL
     * - documentation: Hold reference ID given by external system/application which can be used to reference to product item that is in the external system
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType[]
     */
    public $ExternalSystemReference;
    /**
     * The TransactionInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TransactionInfo
     */
    public $TransactionInfo;
    /**
     * The BillingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BillingInfo
     */
    public $BillingInfo;
    /**
     * The CO2Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CO2ValueType
     */
    public $CO2Value;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The productCategory
     * Meta informations extracted from the WSDL
     * - documentation: eg. TruTrip, passive, high level source/type
     * @var string
     */
    public $productCategory;
    /**
     * The productType
     * @var string
     */
    public $productType;
    /**
     * The vendorCode
     * @var string
     */
    public $vendorCode;
    /**
     * The statusCode
     * @var string
     */
    public $statusCode;
    /**
     * The previousStatusCode
     * @var string
     */
    public $previousStatusCode;
    /**
     * The startPoint
     * @var string
     */
    public $startPoint;
    /**
     * The startDateTime
     * @var string
     */
    public $startDateTime;
    /**
     * The endPoint
     * @var string
     */
    public $endPoint;
    /**
     * The endDateTime
     * @var string
     */
    public $endDateTime;
    /**
     * The normalizedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: when equals to "true" means this data has been normalized with Normalized Service
     * @var bool
     */
    public $normalizedIndicator;
    /**
     * The numberInParty
     * @var int
     */
    public $numberInParty;
    /**
     * The vendorName
     * @var string
     */
    public $vendorName;
    /**
     * The supplierName
     * @var string
     */
    public $supplierName;
    /**
     * The supplierCode
     * @var string
     */
    public $supplierCode;
    /**
     * Constructor method for ProductDetailsType
     * @uses ProductDetailsType::setProductName()
     * @uses ProductDetailsType::setHotel()
     * @uses ProductDetailsType::setGroundTransportation()
     * @uses ProductDetailsType::setRail()
     * @uses ProductDetailsType::setTour()
     * @uses ProductDetailsType::setAir()
     * @uses ProductDetailsType::setVisa()
     * @uses ProductDetailsType::setVehicle()
     * @uses ProductDetailsType::setSki()
     * @uses ProductDetailsType::setOther()
     * @uses ProductDetailsType::setInsurance()
     * @uses ProductDetailsType::setExternalSystemReference()
     * @uses ProductDetailsType::setTransactionInfo()
     * @uses ProductDetailsType::setBillingInfo()
     * @uses ProductDetailsType::setCO2Value()
     * @uses ProductDetailsType::setComment()
     * @uses ProductDetailsType::setProductCategory()
     * @uses ProductDetailsType::setProductType()
     * @uses ProductDetailsType::setVendorCode()
     * @uses ProductDetailsType::setStatusCode()
     * @uses ProductDetailsType::setPreviousStatusCode()
     * @uses ProductDetailsType::setStartPoint()
     * @uses ProductDetailsType::setStartDateTime()
     * @uses ProductDetailsType::setEndPoint()
     * @uses ProductDetailsType::setEndDateTime()
     * @uses ProductDetailsType::setNormalizedIndicator()
     * @uses ProductDetailsType::setNumberInParty()
     * @uses ProductDetailsType::setVendorName()
     * @uses ProductDetailsType::setSupplierName()
     * @uses ProductDetailsType::setSupplierCode()
     * @param \Sabre\UpdateReservation\StructType\ProductNameType $productName
     * @param \Sabre\UpdateReservation\StructType\HotelProductType $hotel
     * @param \Sabre\UpdateReservation\StructType\GroundTransportationType $groundTransportation
     * @param \Sabre\UpdateReservation\StructType\RailType $rail
     * @param \Sabre\UpdateReservation\StructType\TourType $tour
     * @param \Sabre\UpdateReservation\StructType\AirType $air
     * @param \Sabre\UpdateReservation\StructType\VisaType $visa
     * @param \Sabre\UpdateReservation\StructType\VehicleType $vehicle
     * @param \Sabre\UpdateReservation\StructType\SkiType $ski
     * @param \Sabre\UpdateReservation\StructType\OtherType $other
     * @param \Sabre\UpdateReservation\StructType\InsuranceType $insurance
     * @param \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType[] $externalSystemReference
     * @param \Sabre\UpdateReservation\StructType\TransactionInfo $transactionInfo
     * @param \Sabre\UpdateReservation\StructType\BillingInfo $billingInfo
     * @param \Sabre\UpdateReservation\StructType\CO2ValueType $cO2Value
     * @param string $comment
     * @param string $productCategory
     * @param string $productType
     * @param string $vendorCode
     * @param string $statusCode
     * @param string $previousStatusCode
     * @param string $startPoint
     * @param string $startDateTime
     * @param string $endPoint
     * @param string $endDateTime
     * @param bool $normalizedIndicator
     * @param int $numberInParty
     * @param string $vendorName
     * @param string $supplierName
     * @param string $supplierCode
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ProductNameType $productName = null, \Sabre\UpdateReservation\StructType\HotelProductType $hotel = null, \Sabre\UpdateReservation\StructType\GroundTransportationType $groundTransportation = null, \Sabre\UpdateReservation\StructType\RailType $rail = null, \Sabre\UpdateReservation\StructType\TourType $tour = null, \Sabre\UpdateReservation\StructType\AirType $air = null, \Sabre\UpdateReservation\StructType\VisaType $visa = null, \Sabre\UpdateReservation\StructType\VehicleType $vehicle = null, \Sabre\UpdateReservation\StructType\SkiType $ski = null, \Sabre\UpdateReservation\StructType\OtherType $other = null, \Sabre\UpdateReservation\StructType\InsuranceType $insurance = null, array $externalSystemReference = array(), \Sabre\UpdateReservation\StructType\TransactionInfo $transactionInfo = null, \Sabre\UpdateReservation\StructType\BillingInfo $billingInfo = null, \Sabre\UpdateReservation\StructType\CO2ValueType $cO2Value = null, $comment = null, $productCategory = null, $productType = null, $vendorCode = null, $statusCode = null, $previousStatusCode = null, $startPoint = null, $startDateTime = null, $endPoint = null, $endDateTime = null, $normalizedIndicator = null, $numberInParty = null, $vendorName = null, $supplierName = null, $supplierCode = null)
    {
        $this
            ->setProductName($productName)
            ->setHotel($hotel)
            ->setGroundTransportation($groundTransportation)
            ->setRail($rail)
            ->setTour($tour)
            ->setAir($air)
            ->setVisa($visa)
            ->setVehicle($vehicle)
            ->setSki($ski)
            ->setOther($other)
            ->setInsurance($insurance)
            ->setExternalSystemReference($externalSystemReference)
            ->setTransactionInfo($transactionInfo)
            ->setBillingInfo($billingInfo)
            ->setCO2Value($cO2Value)
            ->setComment($comment)
            ->setProductCategory($productCategory)
            ->setProductType($productType)
            ->setVendorCode($vendorCode)
            ->setStatusCode($statusCode)
            ->setPreviousStatusCode($previousStatusCode)
            ->setStartPoint($startPoint)
            ->setStartDateTime($startDateTime)
            ->setEndPoint($endPoint)
            ->setEndDateTime($endDateTime)
            ->setNormalizedIndicator($normalizedIndicator)
            ->setNumberInParty($numberInParty)
            ->setVendorName($vendorName)
            ->setSupplierName($supplierName)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get ProductName value
     * @return \Sabre\UpdateReservation\StructType\ProductNameType|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param \Sabre\UpdateReservation\StructType\ProductNameType $productName
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setProductName(\Sabre\UpdateReservation\StructType\ProductNameType $productName = null)
    {
        $this->ProductName = $productName;
        return $this;
    }
    /**
     * Get Hotel value
     * @return \Sabre\UpdateReservation\StructType\HotelProductType|null
     */
    public function getHotel()
    {
        return $this->Hotel;
    }
    /**
     * Set Hotel value
     * @param \Sabre\UpdateReservation\StructType\HotelProductType $hotel
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setHotel(\Sabre\UpdateReservation\StructType\HotelProductType $hotel = null)
    {
        $this->Hotel = $hotel;
        return $this;
    }
    /**
     * Get GroundTransportation value
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType|null
     */
    public function getGroundTransportation()
    {
        return $this->GroundTransportation;
    }
    /**
     * Set GroundTransportation value
     * @param \Sabre\UpdateReservation\StructType\GroundTransportationType $groundTransportation
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setGroundTransportation(\Sabre\UpdateReservation\StructType\GroundTransportationType $groundTransportation = null)
    {
        $this->GroundTransportation = $groundTransportation;
        return $this;
    }
    /**
     * Get Rail value
     * @return \Sabre\UpdateReservation\StructType\RailType|null
     */
    public function getRail()
    {
        return $this->Rail;
    }
    /**
     * Set Rail value
     * @param \Sabre\UpdateReservation\StructType\RailType $rail
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setRail(\Sabre\UpdateReservation\StructType\RailType $rail = null)
    {
        $this->Rail = $rail;
        return $this;
    }
    /**
     * Get Tour value
     * @return \Sabre\UpdateReservation\StructType\TourType|null
     */
    public function getTour()
    {
        return $this->Tour;
    }
    /**
     * Set Tour value
     * @param \Sabre\UpdateReservation\StructType\TourType $tour
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setTour(\Sabre\UpdateReservation\StructType\TourType $tour = null)
    {
        $this->Tour = $tour;
        return $this;
    }
    /**
     * Get Air value
     * @return \Sabre\UpdateReservation\StructType\AirType|null
     */
    public function getAir()
    {
        return $this->Air;
    }
    /**
     * Set Air value
     * @param \Sabre\UpdateReservation\StructType\AirType $air
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setAir(\Sabre\UpdateReservation\StructType\AirType $air = null)
    {
        $this->Air = $air;
        return $this;
    }
    /**
     * Get Visa value
     * @return \Sabre\UpdateReservation\StructType\VisaType|null
     */
    public function getVisa()
    {
        return $this->Visa;
    }
    /**
     * Set Visa value
     * @param \Sabre\UpdateReservation\StructType\VisaType $visa
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setVisa(\Sabre\UpdateReservation\StructType\VisaType $visa = null)
    {
        $this->Visa = $visa;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Sabre\UpdateReservation\StructType\VehicleType|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Sabre\UpdateReservation\StructType\VehicleType $vehicle
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setVehicle(\Sabre\UpdateReservation\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get Ski value
     * @return \Sabre\UpdateReservation\StructType\SkiType|null
     */
    public function getSki()
    {
        return $this->Ski;
    }
    /**
     * Set Ski value
     * @param \Sabre\UpdateReservation\StructType\SkiType $ski
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setSki(\Sabre\UpdateReservation\StructType\SkiType $ski = null)
    {
        $this->Ski = $ski;
        return $this;
    }
    /**
     * Get Other value
     * @return \Sabre\UpdateReservation\StructType\OtherType|null
     */
    public function getOther()
    {
        return $this->Other;
    }
    /**
     * Set Other value
     * @param \Sabre\UpdateReservation\StructType\OtherType $other
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setOther(\Sabre\UpdateReservation\StructType\OtherType $other = null)
    {
        $this->Other = $other;
        return $this;
    }
    /**
     * Get Insurance value
     * @return \Sabre\UpdateReservation\StructType\InsuranceType|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \Sabre\UpdateReservation\StructType\InsuranceType $insurance
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setInsurance(\Sabre\UpdateReservation\StructType\InsuranceType $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get ExternalSystemReference value
     * @return \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType[]|null
     */
    public function getExternalSystemReference()
    {
        return $this->ExternalSystemReference;
    }
    /**
     * Set ExternalSystemReference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType[] $externalSystemReference
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setExternalSystemReference(array $externalSystemReference = array())
    {
        foreach ($externalSystemReference as $productDetailsTypeExternalSystemReferenceItem) {
            // validation for constraint: itemType
            if (!$productDetailsTypeExternalSystemReferenceItem instanceof \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType) {
                throw new \InvalidArgumentException(sprintf('The ExternalSystemReference property can only contain items of \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType, "%s" given', is_object($productDetailsTypeExternalSystemReferenceItem) ? get_class($productDetailsTypeExternalSystemReferenceItem) : gettype($productDetailsTypeExternalSystemReferenceItem)), __LINE__);
            }
        }
        $this->ExternalSystemReference = $externalSystemReference;
        return $this;
    }
    /**
     * Add item to ExternalSystemReference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType $item
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function addToExternalSystemReference(\Sabre\UpdateReservation\StructType\ExternalSystemReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType) {
            throw new \InvalidArgumentException(sprintf('The ExternalSystemReference property can only contain items of \Sabre\UpdateReservation\StructType\ExternalSystemReferenceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExternalSystemReference[] = $item;
        return $this;
    }
    /**
     * Get TransactionInfo value
     * @return \Sabre\UpdateReservation\StructType\TransactionInfo|null
     */
    public function getTransactionInfo()
    {
        return $this->TransactionInfo;
    }
    /**
     * Set TransactionInfo value
     * @param \Sabre\UpdateReservation\StructType\TransactionInfo $transactionInfo
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setTransactionInfo(\Sabre\UpdateReservation\StructType\TransactionInfo $transactionInfo = null)
    {
        $this->TransactionInfo = $transactionInfo;
        return $this;
    }
    /**
     * Get BillingInfo value
     * @return \Sabre\UpdateReservation\StructType\BillingInfo|null
     */
    public function getBillingInfo()
    {
        return $this->BillingInfo;
    }
    /**
     * Set BillingInfo value
     * @param \Sabre\UpdateReservation\StructType\BillingInfo $billingInfo
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setBillingInfo(\Sabre\UpdateReservation\StructType\BillingInfo $billingInfo = null)
    {
        $this->BillingInfo = $billingInfo;
        return $this;
    }
    /**
     * Get CO2Value value
     * @return \Sabre\UpdateReservation\StructType\CO2ValueType|null
     */
    public function getCO2Value()
    {
        return $this->CO2Value;
    }
    /**
     * Set CO2Value value
     * @param \Sabre\UpdateReservation\StructType\CO2ValueType $cO2Value
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setCO2Value(\Sabre\UpdateReservation\StructType\CO2ValueType $cO2Value = null)
    {
        $this->CO2Value = $cO2Value;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get productCategory value
     * @return string|null
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }
    /**
     * Set productCategory value
     * @param string $productCategory
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setProductCategory($productCategory = null)
    {
        // validation for constraint: string
        if (!is_null($productCategory) && !is_string($productCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productCategory)), __LINE__);
        }
        $this->productCategory = $productCategory;
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        return $this;
    }
    /**
     * Get vendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }
    /**
     * Set vendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->vendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get statusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * Get previousStatusCode value
     * @return string|null
     */
    public function getPreviousStatusCode()
    {
        return $this->previousStatusCode;
    }
    /**
     * Set previousStatusCode value
     * @param string $previousStatusCode
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setPreviousStatusCode($previousStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($previousStatusCode) && !is_string($previousStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousStatusCode)), __LINE__);
        }
        $this->previousStatusCode = $previousStatusCode;
        return $this;
    }
    /**
     * Get startPoint value
     * @return string|null
     */
    public function getStartPoint()
    {
        return $this->startPoint;
    }
    /**
     * Set startPoint value
     * @param string $startPoint
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setStartPoint($startPoint = null)
    {
        // validation for constraint: string
        if (!is_null($startPoint) && !is_string($startPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startPoint)), __LINE__);
        }
        $this->startPoint = $startPoint;
        return $this;
    }
    /**
     * Get startDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }
    /**
     * Set startDateTime value
     * @param string $startDateTime
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->startDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get endPoint value
     * @return string|null
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }
    /**
     * Set endPoint value
     * @param string $endPoint
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setEndPoint($endPoint = null)
    {
        // validation for constraint: string
        if (!is_null($endPoint) && !is_string($endPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endPoint)), __LINE__);
        }
        $this->endPoint = $endPoint;
        return $this;
    }
    /**
     * Get endDateTime value
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }
    /**
     * Set endDateTime value
     * @param string $endDateTime
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTime)), __LINE__);
        }
        $this->endDateTime = $endDateTime;
        return $this;
    }
    /**
     * Get normalizedIndicator value
     * @return bool|null
     */
    public function getNormalizedIndicator()
    {
        return $this->normalizedIndicator;
    }
    /**
     * Set normalizedIndicator value
     * @param bool $normalizedIndicator
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setNormalizedIndicator($normalizedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($normalizedIndicator) && !is_bool($normalizedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($normalizedIndicator)), __LINE__);
        }
        $this->normalizedIndicator = $normalizedIndicator;
        return $this;
    }
    /**
     * Get numberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->numberInParty;
    }
    /**
     * Set numberInParty value
     * @param int $numberInParty
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->numberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get vendorName value
     * @return string|null
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }
    /**
     * Set vendorName value
     * @param string $vendorName
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setVendorName($vendorName = null)
    {
        // validation for constraint: string
        if (!is_null($vendorName) && !is_string($vendorName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorName)), __LINE__);
        }
        $this->vendorName = $vendorName;
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName()
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setSupplierName($supplierName = null)
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        return $this;
    }
    /**
     * Get supplierCode value
     * @return string|null
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }
    /**
     * Set supplierCode value
     * @param string $supplierCode
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public function setSupplierCode($supplierCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierCode)), __LINE__);
        }
        $this->supplierCode = $supplierCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType
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
