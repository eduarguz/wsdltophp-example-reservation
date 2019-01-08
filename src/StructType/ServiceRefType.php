<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRefType StructType
 * @subpackage Structs
 */
class ServiceRefType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Description[]
     */
    public $Description;
    /**
     * The PassengerReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerReferences
     */
    public $PassengerReferences;
    /**
     * The Accommodation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Accommodation;
    /**
     * The Occupancy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Occupancy;
    /**
     * The NoOfServices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NoOfServices;
    /**
     * The TravellerAllocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravellerAllocation;
    /**
     * The ServicePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceType
     */
    public $ServicePrice;
    /**
     * The StealBoarding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StealBoarding;
    /**
     * The id
     * @var string
     */
    public $id;
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
     * Constructor method for ServiceRefType
     * @uses ServiceRefType::setDescription()
     * @uses ServiceRefType::setPassengerReferences()
     * @uses ServiceRefType::setAccommodation()
     * @uses ServiceRefType::setOccupancy()
     * @uses ServiceRefType::setNoOfServices()
     * @uses ServiceRefType::setTravellerAllocation()
     * @uses ServiceRefType::setServicePrice()
     * @uses ServiceRefType::setStealBoarding()
     * @uses ServiceRefType::setId()
     * @uses ServiceRefType::setProductCategory()
     * @uses ServiceRefType::setProductType()
     * @uses ServiceRefType::setVendorCode()
     * @uses ServiceRefType::setStatusCode()
     * @uses ServiceRefType::setPreviousStatusCode()
     * @uses ServiceRefType::setStartPoint()
     * @uses ServiceRefType::setStartDateTime()
     * @uses ServiceRefType::setEndPoint()
     * @uses ServiceRefType::setEndDateTime()
     * @uses ServiceRefType::setNormalizedIndicator()
     * @uses ServiceRefType::setNumberInParty()
     * @uses ServiceRefType::setVendorName()
     * @uses ServiceRefType::setSupplierName()
     * @uses ServiceRefType::setSupplierCode()
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @param \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences
     * @param string $accommodation
     * @param string $occupancy
     * @param int $noOfServices
     * @param string $travellerAllocation
     * @param \Sabre\UpdateReservation\StructType\PriceType $servicePrice
     * @param string $stealBoarding
     * @param string $id
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
    public function __construct(array $description = array(), \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences = null, $accommodation = null, $occupancy = null, $noOfServices = null, $travellerAllocation = null, \Sabre\UpdateReservation\StructType\PriceType $servicePrice = null, $stealBoarding = null, $id = null, $productCategory = null, $productType = null, $vendorCode = null, $statusCode = null, $previousStatusCode = null, $startPoint = null, $startDateTime = null, $endPoint = null, $endDateTime = null, $normalizedIndicator = null, $numberInParty = null, $vendorName = null, $supplierName = null, $supplierCode = null)
    {
        $this
            ->setDescription($description)
            ->setPassengerReferences($passengerReferences)
            ->setAccommodation($accommodation)
            ->setOccupancy($occupancy)
            ->setNoOfServices($noOfServices)
            ->setTravellerAllocation($travellerAllocation)
            ->setServicePrice($servicePrice)
            ->setStealBoarding($stealBoarding)
            ->setId($id)
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
     * Get Description value
     * @return \Sabre\UpdateReservation\StructType\Description[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description[] $description
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $serviceRefTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$serviceRefTypeDescriptionItem instanceof \Sabre\UpdateReservation\StructType\Description) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($serviceRefTypeDescriptionItem) ? get_class($serviceRefTypeDescriptionItem) : gettype($serviceRefTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Description $item
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function addToDescription(\Sabre\UpdateReservation\StructType\Description $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Description) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of \Sabre\UpdateReservation\StructType\Description, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get PassengerReferences value
     * @return \Sabre\UpdateReservation\StructType\PassengerReferences|null
     */
    public function getPassengerReferences()
    {
        return $this->PassengerReferences;
    }
    /**
     * Set PassengerReferences value
     * @param \Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setPassengerReferences(\Sabre\UpdateReservation\StructType\PassengerReferences $passengerReferences = null)
    {
        $this->PassengerReferences = $passengerReferences;
        return $this;
    }
    /**
     * Get Accommodation value
     * @return string|null
     */
    public function getAccommodation()
    {
        return $this->Accommodation;
    }
    /**
     * Set Accommodation value
     * @param string $accommodation
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setAccommodation($accommodation = null)
    {
        // validation for constraint: string
        if (!is_null($accommodation) && !is_string($accommodation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accommodation)), __LINE__);
        }
        $this->Accommodation = $accommodation;
        return $this;
    }
    /**
     * Get Occupancy value
     * @return string|null
     */
    public function getOccupancy()
    {
        return $this->Occupancy;
    }
    /**
     * Set Occupancy value
     * @param string $occupancy
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setOccupancy($occupancy = null)
    {
        // validation for constraint: string
        if (!is_null($occupancy) && !is_string($occupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($occupancy)), __LINE__);
        }
        $this->Occupancy = $occupancy;
        return $this;
    }
    /**
     * Get NoOfServices value
     * @return int|null
     */
    public function getNoOfServices()
    {
        return $this->NoOfServices;
    }
    /**
     * Set NoOfServices value
     * @param int $noOfServices
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setNoOfServices($noOfServices = null)
    {
        // validation for constraint: int
        if (!is_null($noOfServices) && !is_numeric($noOfServices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noOfServices)), __LINE__);
        }
        $this->NoOfServices = $noOfServices;
        return $this;
    }
    /**
     * Get TravellerAllocation value
     * @return string|null
     */
    public function getTravellerAllocation()
    {
        return $this->TravellerAllocation;
    }
    /**
     * Set TravellerAllocation value
     * @param string $travellerAllocation
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setTravellerAllocation($travellerAllocation = null)
    {
        // validation for constraint: string
        if (!is_null($travellerAllocation) && !is_string($travellerAllocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travellerAllocation)), __LINE__);
        }
        $this->TravellerAllocation = $travellerAllocation;
        return $this;
    }
    /**
     * Get ServicePrice value
     * @return \Sabre\UpdateReservation\StructType\PriceType|null
     */
    public function getServicePrice()
    {
        return $this->ServicePrice;
    }
    /**
     * Set ServicePrice value
     * @param \Sabre\UpdateReservation\StructType\PriceType $servicePrice
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setServicePrice(\Sabre\UpdateReservation\StructType\PriceType $servicePrice = null)
    {
        $this->ServicePrice = $servicePrice;
        return $this;
    }
    /**
     * Get StealBoarding value
     * @return string|null
     */
    public function getStealBoarding()
    {
        return $this->StealBoarding;
    }
    /**
     * Set StealBoarding value
     * @param string $stealBoarding
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setStealBoarding($stealBoarding = null)
    {
        // validation for constraint: string
        if (!is_null($stealBoarding) && !is_string($stealBoarding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stealBoarding)), __LINE__);
        }
        $this->StealBoarding = $stealBoarding;
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
     * @return \Sabre\UpdateReservation\StructType\ServiceRefType
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
