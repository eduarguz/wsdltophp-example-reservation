<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentTravelerBasicType StructType
 * @subpackage Structs
 */
class FrequentTravelerBasicType extends FlightBasicData
{
    /**
     * The IsOption2Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOption2Format;
    /**
     * The IsCompanionDataExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCompanionDataExist;
    /**
     * The IsNoSplitCompanionOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNoSplitCompanionOption;
    /**
     * The IsUpgradeTypeDataExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUpgradeTypeDataExist;
    /**
     * The IsRedemptionDataExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRedemptionDataExist;
    /**
     * The IsApprovedForUpdateAtET
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsApprovedForUpdateAtET;
    /**
     * The IsUnaccompaniedCompanion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsUnaccompaniedCompanion;
    /**
     * The IsGeneratedViaTTY
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGeneratedViaTTY;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The OriginalRequestTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OriginalRequestTimestamp;
    /**
     * The LocalDepartureDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocalDepartureDate;
    /**
     * The TierLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TierLevel;
    /**
     * The RequestedUpgradeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestedUpgradeClass;
    /**
     * The CompanionData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompanionData;
    /**
     * The UpgradeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpgradeType;
    /**
     * Constructor method for FrequentTravelerBasicType
     * @uses FrequentTravelerBasicType::setIsOption2Format()
     * @uses FrequentTravelerBasicType::setIsCompanionDataExist()
     * @uses FrequentTravelerBasicType::setIsNoSplitCompanionOption()
     * @uses FrequentTravelerBasicType::setIsUpgradeTypeDataExist()
     * @uses FrequentTravelerBasicType::setIsRedemptionDataExist()
     * @uses FrequentTravelerBasicType::setIsApprovedForUpdateAtET()
     * @uses FrequentTravelerBasicType::setIsUnaccompaniedCompanion()
     * @uses FrequentTravelerBasicType::setIsGeneratedViaTTY()
     * @uses FrequentTravelerBasicType::setStatusCode()
     * @uses FrequentTravelerBasicType::setOriginalRequestTimestamp()
     * @uses FrequentTravelerBasicType::setLocalDepartureDate()
     * @uses FrequentTravelerBasicType::setTierLevel()
     * @uses FrequentTravelerBasicType::setRequestedUpgradeClass()
     * @uses FrequentTravelerBasicType::setCompanionData()
     * @uses FrequentTravelerBasicType::setUpgradeType()
     * @param bool $isOption2Format
     * @param bool $isCompanionDataExist
     * @param bool $isNoSplitCompanionOption
     * @param bool $isUpgradeTypeDataExist
     * @param bool $isRedemptionDataExist
     * @param bool $isApprovedForUpdateAtET
     * @param bool $isUnaccompaniedCompanion
     * @param bool $isGeneratedViaTTY
     * @param string $statusCode
     * @param string $originalRequestTimestamp
     * @param string $localDepartureDate
     * @param int $tierLevel
     * @param string $requestedUpgradeClass
     * @param string $companionData
     * @param string $upgradeType
     */
    public function __construct($isOption2Format = null, $isCompanionDataExist = null, $isNoSplitCompanionOption = null, $isUpgradeTypeDataExist = null, $isRedemptionDataExist = null, $isApprovedForUpdateAtET = null, $isUnaccompaniedCompanion = null, $isGeneratedViaTTY = null, $statusCode = null, $originalRequestTimestamp = null, $localDepartureDate = null, $tierLevel = null, $requestedUpgradeClass = null, $companionData = null, $upgradeType = null)
    {
        $this
            ->setIsOption2Format($isOption2Format)
            ->setIsCompanionDataExist($isCompanionDataExist)
            ->setIsNoSplitCompanionOption($isNoSplitCompanionOption)
            ->setIsUpgradeTypeDataExist($isUpgradeTypeDataExist)
            ->setIsRedemptionDataExist($isRedemptionDataExist)
            ->setIsApprovedForUpdateAtET($isApprovedForUpdateAtET)
            ->setIsUnaccompaniedCompanion($isUnaccompaniedCompanion)
            ->setIsGeneratedViaTTY($isGeneratedViaTTY)
            ->setStatusCode($statusCode)
            ->setOriginalRequestTimestamp($originalRequestTimestamp)
            ->setLocalDepartureDate($localDepartureDate)
            ->setTierLevel($tierLevel)
            ->setRequestedUpgradeClass($requestedUpgradeClass)
            ->setCompanionData($companionData)
            ->setUpgradeType($upgradeType);
    }
    /**
     * Get IsOption2Format value
     * @return bool|null
     */
    public function getIsOption2Format()
    {
        return $this->IsOption2Format;
    }
    /**
     * Set IsOption2Format value
     * @param bool $isOption2Format
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsOption2Format($isOption2Format = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOption2Format) && !is_bool($isOption2Format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOption2Format)), __LINE__);
        }
        $this->IsOption2Format = $isOption2Format;
        return $this;
    }
    /**
     * Get IsCompanionDataExist value
     * @return bool|null
     */
    public function getIsCompanionDataExist()
    {
        return $this->IsCompanionDataExist;
    }
    /**
     * Set IsCompanionDataExist value
     * @param bool $isCompanionDataExist
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsCompanionDataExist($isCompanionDataExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompanionDataExist) && !is_bool($isCompanionDataExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompanionDataExist)), __LINE__);
        }
        $this->IsCompanionDataExist = $isCompanionDataExist;
        return $this;
    }
    /**
     * Get IsNoSplitCompanionOption value
     * @return bool|null
     */
    public function getIsNoSplitCompanionOption()
    {
        return $this->IsNoSplitCompanionOption;
    }
    /**
     * Set IsNoSplitCompanionOption value
     * @param bool $isNoSplitCompanionOption
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsNoSplitCompanionOption($isNoSplitCompanionOption = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNoSplitCompanionOption) && !is_bool($isNoSplitCompanionOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNoSplitCompanionOption)), __LINE__);
        }
        $this->IsNoSplitCompanionOption = $isNoSplitCompanionOption;
        return $this;
    }
    /**
     * Get IsUpgradeTypeDataExist value
     * @return bool|null
     */
    public function getIsUpgradeTypeDataExist()
    {
        return $this->IsUpgradeTypeDataExist;
    }
    /**
     * Set IsUpgradeTypeDataExist value
     * @param bool $isUpgradeTypeDataExist
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsUpgradeTypeDataExist($isUpgradeTypeDataExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUpgradeTypeDataExist) && !is_bool($isUpgradeTypeDataExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUpgradeTypeDataExist)), __LINE__);
        }
        $this->IsUpgradeTypeDataExist = $isUpgradeTypeDataExist;
        return $this;
    }
    /**
     * Get IsRedemptionDataExist value
     * @return bool|null
     */
    public function getIsRedemptionDataExist()
    {
        return $this->IsRedemptionDataExist;
    }
    /**
     * Set IsRedemptionDataExist value
     * @param bool $isRedemptionDataExist
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsRedemptionDataExist($isRedemptionDataExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRedemptionDataExist) && !is_bool($isRedemptionDataExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRedemptionDataExist)), __LINE__);
        }
        $this->IsRedemptionDataExist = $isRedemptionDataExist;
        return $this;
    }
    /**
     * Get IsApprovedForUpdateAtET value
     * @return bool|null
     */
    public function getIsApprovedForUpdateAtET()
    {
        return $this->IsApprovedForUpdateAtET;
    }
    /**
     * Set IsApprovedForUpdateAtET value
     * @param bool $isApprovedForUpdateAtET
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsApprovedForUpdateAtET($isApprovedForUpdateAtET = null)
    {
        // validation for constraint: boolean
        if (!is_null($isApprovedForUpdateAtET) && !is_bool($isApprovedForUpdateAtET)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isApprovedForUpdateAtET)), __LINE__);
        }
        $this->IsApprovedForUpdateAtET = $isApprovedForUpdateAtET;
        return $this;
    }
    /**
     * Get IsUnaccompaniedCompanion value
     * @return bool|null
     */
    public function getIsUnaccompaniedCompanion()
    {
        return $this->IsUnaccompaniedCompanion;
    }
    /**
     * Set IsUnaccompaniedCompanion value
     * @param bool $isUnaccompaniedCompanion
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsUnaccompaniedCompanion($isUnaccompaniedCompanion = null)
    {
        // validation for constraint: boolean
        if (!is_null($isUnaccompaniedCompanion) && !is_bool($isUnaccompaniedCompanion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isUnaccompaniedCompanion)), __LINE__);
        }
        $this->IsUnaccompaniedCompanion = $isUnaccompaniedCompanion;
        return $this;
    }
    /**
     * Get IsGeneratedViaTTY value
     * @return bool|null
     */
    public function getIsGeneratedViaTTY()
    {
        return $this->IsGeneratedViaTTY;
    }
    /**
     * Set IsGeneratedViaTTY value
     * @param bool $isGeneratedViaTTY
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setIsGeneratedViaTTY($isGeneratedViaTTY = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGeneratedViaTTY) && !is_bool($isGeneratedViaTTY)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGeneratedViaTTY)), __LINE__);
        }
        $this->IsGeneratedViaTTY = $isGeneratedViaTTY;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get OriginalRequestTimestamp value
     * @return string|null
     */
    public function getOriginalRequestTimestamp()
    {
        return $this->OriginalRequestTimestamp;
    }
    /**
     * Set OriginalRequestTimestamp value
     * @param string $originalRequestTimestamp
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setOriginalRequestTimestamp($originalRequestTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($originalRequestTimestamp) && !is_string($originalRequestTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalRequestTimestamp)), __LINE__);
        }
        $this->OriginalRequestTimestamp = $originalRequestTimestamp;
        return $this;
    }
    /**
     * Get LocalDepartureDate value
     * @return string|null
     */
    public function getLocalDepartureDate()
    {
        return $this->LocalDepartureDate;
    }
    /**
     * Set LocalDepartureDate value
     * @param string $localDepartureDate
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setLocalDepartureDate($localDepartureDate = null)
    {
        // validation for constraint: string
        if (!is_null($localDepartureDate) && !is_string($localDepartureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localDepartureDate)), __LINE__);
        }
        $this->LocalDepartureDate = $localDepartureDate;
        return $this;
    }
    /**
     * Get TierLevel value
     * @return int|null
     */
    public function getTierLevel()
    {
        return $this->TierLevel;
    }
    /**
     * Set TierLevel value
     * @param int $tierLevel
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setTierLevel($tierLevel = null)
    {
        // validation for constraint: int
        if (!is_null($tierLevel) && !is_numeric($tierLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tierLevel)), __LINE__);
        }
        $this->TierLevel = $tierLevel;
        return $this;
    }
    /**
     * Get RequestedUpgradeClass value
     * @return string|null
     */
    public function getRequestedUpgradeClass()
    {
        return $this->RequestedUpgradeClass;
    }
    /**
     * Set RequestedUpgradeClass value
     * @param string $requestedUpgradeClass
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setRequestedUpgradeClass($requestedUpgradeClass = null)
    {
        // validation for constraint: string
        if (!is_null($requestedUpgradeClass) && !is_string($requestedUpgradeClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedUpgradeClass)), __LINE__);
        }
        $this->RequestedUpgradeClass = $requestedUpgradeClass;
        return $this;
    }
    /**
     * Get CompanionData value
     * @return string|null
     */
    public function getCompanionData()
    {
        return $this->CompanionData;
    }
    /**
     * Set CompanionData value
     * @param string $companionData
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setCompanionData($companionData = null)
    {
        // validation for constraint: string
        if (!is_null($companionData) && !is_string($companionData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companionData)), __LINE__);
        }
        $this->CompanionData = $companionData;
        return $this;
    }
    /**
     * Get UpgradeType value
     * @return string|null
     */
    public function getUpgradeType()
    {
        return $this->UpgradeType;
    }
    /**
     * Set UpgradeType value
     * @param string $upgradeType
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
     */
    public function setUpgradeType($upgradeType = null)
    {
        // validation for constraint: string
        if (!is_null($upgradeType) && !is_string($upgradeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($upgradeType)), __LINE__);
        }
        $this->UpgradeType = $upgradeType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FrequentTravelerBasicType
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
