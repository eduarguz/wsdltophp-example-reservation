<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Basic Property Information
 * @subpackage Structs
 */
class HotelInfoType extends AbstractStructBase
{
    /**
     * The HotelCode
     * Meta informations extracted from the WSDL
     * - documentation: Hotel Id from SABRE hotels platform
     * - use: required
     * @var string
     */
    public $HotelCode;
    /**
     * The TierLabels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TierLabels
     */
    public $TierLabels;
    /**
     * The LocationInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationInfo
     */
    public $LocationInfo;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amenities
     */
    public $Amenities;
    /**
     * The PropertyTypeInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PropertyTypeInfo
     */
    public $PropertyTypeInfo;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CodeContext;
    /**
     * The GlobalChainCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $GlobalChainCode;
    /**
     * The HotelName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $HotelName;
    /**
     * The BrandCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BrandCode;
    /**
     * The SabreRating
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Single Decimal value for rating
     * - fractionDigits: 1
     * @var float
     */
    public $SabreRating;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
    /**
     * The ChainName
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Character Strings, length 0 to 500.
     * - maxLength: 500
     * - minLength: 0
     * @var string
     */
    public $ChainName;
    /**
     * The BrandName
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Character Strings, length 0 to 500.
     * - maxLength: 500
     * - minLength: 0
     * @var string
     */
    public $BrandName;
    /**
     * The SupplierChainCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SupplierChainCode;
    /**
     * The SourceHotelCode
     * Meta informations extracted from the WSDL
     * - documentation: Supplier/Source Hotel Id
     * - use: optional
     * @var string
     */
    public $SourceHotelCode;
    /**
     * Constructor method for HotelInfoType
     * @uses HotelInfoType::setHotelCode()
     * @uses HotelInfoType::setTierLabels()
     * @uses HotelInfoType::setLocationInfo()
     * @uses HotelInfoType::setAmenities()
     * @uses HotelInfoType::setPropertyTypeInfo()
     * @uses HotelInfoType::setCodeContext()
     * @uses HotelInfoType::setGlobalChainCode()
     * @uses HotelInfoType::setHotelName()
     * @uses HotelInfoType::setBrandCode()
     * @uses HotelInfoType::setSabreRating()
     * @uses HotelInfoType::setCurrencyCode()
     * @uses HotelInfoType::setChainName()
     * @uses HotelInfoType::setBrandName()
     * @uses HotelInfoType::setSupplierChainCode()
     * @uses HotelInfoType::setSourceHotelCode()
     * @param string $hotelCode
     * @param \Sabre\UpdateReservation\StructType\TierLabels $tierLabels
     * @param \Sabre\UpdateReservation\StructType\LocationInfo $locationInfo
     * @param \Sabre\UpdateReservation\StructType\Amenities $amenities
     * @param \Sabre\UpdateReservation\StructType\PropertyTypeInfo $propertyTypeInfo
     * @param string $codeContext
     * @param string $globalChainCode
     * @param string $hotelName
     * @param string $brandCode
     * @param float $sabreRating
     * @param string $currencyCode
     * @param string $chainName
     * @param string $brandName
     * @param string $supplierChainCode
     * @param string $sourceHotelCode
     */
    public function __construct($hotelCode = null, \Sabre\UpdateReservation\StructType\TierLabels $tierLabels = null, \Sabre\UpdateReservation\StructType\LocationInfo $locationInfo = null, \Sabre\UpdateReservation\StructType\Amenities $amenities = null, \Sabre\UpdateReservation\StructType\PropertyTypeInfo $propertyTypeInfo = null, $codeContext = null, $globalChainCode = null, $hotelName = null, $brandCode = null, $sabreRating = null, $currencyCode = null, $chainName = null, $brandName = null, $supplierChainCode = null, $sourceHotelCode = null)
    {
        $this
            ->setHotelCode($hotelCode)
            ->setTierLabels($tierLabels)
            ->setLocationInfo($locationInfo)
            ->setAmenities($amenities)
            ->setPropertyTypeInfo($propertyTypeInfo)
            ->setCodeContext($codeContext)
            ->setGlobalChainCode($globalChainCode)
            ->setHotelName($hotelName)
            ->setBrandCode($brandCode)
            ->setSabreRating($sabreRating)
            ->setCurrencyCode($currencyCode)
            ->setChainName($chainName)
            ->setBrandName($brandName)
            ->setSupplierChainCode($supplierChainCode)
            ->setSourceHotelCode($sourceHotelCode);
    }
    /**
     * Get HotelCode value
     * @return string
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get TierLabels value
     * @return \Sabre\UpdateReservation\StructType\TierLabels|null
     */
    public function getTierLabels()
    {
        return $this->TierLabels;
    }
    /**
     * Set TierLabels value
     * @param \Sabre\UpdateReservation\StructType\TierLabels $tierLabels
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setTierLabels(\Sabre\UpdateReservation\StructType\TierLabels $tierLabels = null)
    {
        $this->TierLabels = $tierLabels;
        return $this;
    }
    /**
     * Get LocationInfo value
     * @return \Sabre\UpdateReservation\StructType\LocationInfo|null
     */
    public function getLocationInfo()
    {
        return $this->LocationInfo;
    }
    /**
     * Set LocationInfo value
     * @param \Sabre\UpdateReservation\StructType\LocationInfo $locationInfo
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setLocationInfo(\Sabre\UpdateReservation\StructType\LocationInfo $locationInfo = null)
    {
        $this->LocationInfo = $locationInfo;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Sabre\UpdateReservation\StructType\Amenities|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Sabre\UpdateReservation\StructType\Amenities $amenities
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setAmenities(\Sabre\UpdateReservation\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get PropertyTypeInfo value
     * @return \Sabre\UpdateReservation\StructType\PropertyTypeInfo|null
     */
    public function getPropertyTypeInfo()
    {
        return $this->PropertyTypeInfo;
    }
    /**
     * Set PropertyTypeInfo value
     * @param \Sabre\UpdateReservation\StructType\PropertyTypeInfo $propertyTypeInfo
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setPropertyTypeInfo(\Sabre\UpdateReservation\StructType\PropertyTypeInfo $propertyTypeInfo = null)
    {
        $this->PropertyTypeInfo = $propertyTypeInfo;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param string $codeContext
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setCodeContext($codeContext = null)
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Get GlobalChainCode value
     * @return string|null
     */
    public function getGlobalChainCode()
    {
        return $this->GlobalChainCode;
    }
    /**
     * Set GlobalChainCode value
     * @param string $globalChainCode
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setGlobalChainCode($globalChainCode = null)
    {
        // validation for constraint: string
        if (!is_null($globalChainCode) && !is_string($globalChainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($globalChainCode)), __LINE__);
        }
        $this->GlobalChainCode = $globalChainCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Get BrandCode value
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->BrandCode;
    }
    /**
     * Set BrandCode value
     * @param string $brandCode
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setBrandCode($brandCode = null)
    {
        // validation for constraint: string
        if (!is_null($brandCode) && !is_string($brandCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandCode)), __LINE__);
        }
        $this->BrandCode = $brandCode;
        return $this;
    }
    /**
     * Get SabreRating value
     * @return float|null
     */
    public function getSabreRating()
    {
        return $this->SabreRating;
    }
    /**
     * Set SabreRating value
     * @param float $sabreRating
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setSabreRating($sabreRating = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($sabreRating) && strlen(substr($sabreRating, strpos($sabreRating, '.') + 1)) !== 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 1 fraction digits, "%d" given', strlen(substr($sabreRating, strpos($sabreRating, '.') + 1))), __LINE__);
        }
        $this->SabreRating = $sabreRating;
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
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) > 3) || (is_array($currencyCode) && count($currencyCode) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($currencyCode) ? strlen($currencyCode) : count($currencyCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get ChainName value
     * @return string|null
     */
    public function getChainName()
    {
        return $this->ChainName;
    }
    /**
     * Set ChainName value
     * @param string $chainName
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setChainName($chainName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($chainName) && strlen($chainName) > 500) || (is_array($chainName) && count($chainName) > 500)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 500 element(s) or a scalar of 500 character(s) at most, "%d" length given', is_scalar($chainName) ? strlen($chainName) : count($chainName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($chainName) && strlen($chainName) < 0) || (is_array($chainName) && count($chainName) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($chainName) && !is_string($chainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainName)), __LINE__);
        }
        $this->ChainName = $chainName;
        return $this;
    }
    /**
     * Get BrandName value
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }
    /**
     * Set BrandName value
     * @param string $brandName
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($brandName) && strlen($brandName) > 500) || (is_array($brandName) && count($brandName) > 500)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 500 element(s) or a scalar of 500 character(s) at most, "%d" length given', is_scalar($brandName) ? strlen($brandName) : count($brandName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($brandName) && strlen($brandName) < 0) || (is_array($brandName) && count($brandName) < 0)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 0 element(s) or a scalar of 0 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        $this->BrandName = $brandName;
        return $this;
    }
    /**
     * Get SupplierChainCode value
     * @return string|null
     */
    public function getSupplierChainCode()
    {
        return $this->SupplierChainCode;
    }
    /**
     * Set SupplierChainCode value
     * @param string $supplierChainCode
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setSupplierChainCode($supplierChainCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierChainCode) && !is_string($supplierChainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierChainCode)), __LINE__);
        }
        $this->SupplierChainCode = $supplierChainCode;
        return $this;
    }
    /**
     * Get SourceHotelCode value
     * @return string|null
     */
    public function getSourceHotelCode()
    {
        return $this->SourceHotelCode;
    }
    /**
     * Set SourceHotelCode value
     * @param string $sourceHotelCode
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public function setSourceHotelCode($sourceHotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($sourceHotelCode) && !is_string($sourceHotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceHotelCode)), __LINE__);
        }
        $this->SourceHotelCode = $sourceHotelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType
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
