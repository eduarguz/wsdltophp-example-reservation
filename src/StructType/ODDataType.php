<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ODDataType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Bid Price and Fare Reference data - Pnr footprint
 * @subpackage Structs
 */
class ODDataType extends AbstractStructBase
{
    /**
     * The OriginalFare
     * Meta informations extracted from the WSDL
     * - documentation: Original Fare value retrieved from O and D
     * - minOccurs: 0
     * @var int
     */
    public $OriginalFare;
    /**
     * The EffectiveBidPrice
     * Meta informations extracted from the WSDL
     * - documentation: Effective bid price
     * - minOccurs: 0
     * @var int
     */
    public $EffectiveBidPrice;
    /**
     * The AdjustedFare
     * Meta informations extracted from the WSDL
     * - documentation: Adjusted final fare used for evaluation
     * - minOccurs: 0
     * @var int
     */
    public $AdjustedFare;
    /**
     * The AdjustedBidPrice
     * Meta informations extracted from the WSDL
     * - documentation: Adjusted bid price
     * - minOccurs: 0
     * @var int
     */
    public $AdjustedBidPrice;
    /**
     * The FareClass
     * Meta informations extracted from the WSDL
     * - documentation: Orign and Destination Fare Class
     * - minOccurs: 0
     * @var string
     */
    public $FareClass;
    /**
     * The LowestAvailFareClass
     * Meta informations extracted from the WSDL
     * - documentation: Lowest Orign and Destination class available
     * - minOccurs: 0
     * @var string
     */
    public $LowestAvailFareClass;
    /**
     * The PointOfCommencement
     * Meta informations extracted from the WSDL
     * - documentation: Point of Commencement
     * - minOccurs: 0
     * @var string
     */
    public $PointOfCommencement;
    /**
     * The CustomerScore
     * Meta informations extracted from the WSDL
     * - documentation: Customer Value Score | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $CustomerScore;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - documentation: Frequent Flyer
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODFrequentFlyerType
     */
    public $FrequentFlyer;
    /**
     * The Market
     * Meta informations extracted from the WSDL
     * - documentation: Financial Orign and Destination with Level
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public $Market;
    /**
     * The TripMarket
     * Meta informations extracted from the WSDL
     * - documentation: Trip Orign and Destination with Level
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public $TripMarket;
    /**
     * The RetrievedFareMarket
     * Meta informations extracted from the WSDL
     * - documentation: Retrieved Fare Orign and Destination with Level
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODMarketType
     */
    public $RetrievedFareMarket;
    /**
     * The FareTypeIndicators
     * Meta informations extracted from the WSDL
     * - documentation: Fare Type Indicators
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType
     */
    public $FareTypeIndicators;
    /**
     * The EvaluationTypeIndicators
     * Meta informations extracted from the WSDL
     * - documentation: Evaluation Type Indicators
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType
     */
    public $EvaluationTypeIndicators;
    /**
     * The ExceptionTypeIndicators
     * Meta informations extracted from the WSDL
     * - documentation: Exception Type Indicators
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
     */
    public $ExceptionTypeIndicators;
    /**
     * The AdditionalFlags
     * Meta informations extracted from the WSDL
     * - documentation: Additional Flags - undefined
     * - minOccurs: 0
     * @var int
     */
    public $AdditionalFlags;
    /**
     * The AdditionalData
     * Meta informations extracted from the WSDL
     * - documentation: Additional Data - undefined
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalData;
    /**
     * The uniqueId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $uniqueId;
    /**
     * Constructor method for ODDataType
     * @uses ODDataType::setOriginalFare()
     * @uses ODDataType::setEffectiveBidPrice()
     * @uses ODDataType::setAdjustedFare()
     * @uses ODDataType::setAdjustedBidPrice()
     * @uses ODDataType::setFareClass()
     * @uses ODDataType::setLowestAvailFareClass()
     * @uses ODDataType::setPointOfCommencement()
     * @uses ODDataType::setCustomerScore()
     * @uses ODDataType::setFrequentFlyer()
     * @uses ODDataType::setMarket()
     * @uses ODDataType::setTripMarket()
     * @uses ODDataType::setRetrievedFareMarket()
     * @uses ODDataType::setFareTypeIndicators()
     * @uses ODDataType::setEvaluationTypeIndicators()
     * @uses ODDataType::setExceptionTypeIndicators()
     * @uses ODDataType::setAdditionalFlags()
     * @uses ODDataType::setAdditionalData()
     * @uses ODDataType::setUniqueId()
     * @param int $originalFare
     * @param int $effectiveBidPrice
     * @param int $adjustedFare
     * @param int $adjustedBidPrice
     * @param string $fareClass
     * @param string $lowestAvailFareClass
     * @param string $pointOfCommencement
     * @param int $customerScore
     * @param \Sabre\UpdateReservation\StructType\ODFrequentFlyerType $frequentFlyer
     * @param \Sabre\UpdateReservation\StructType\ODMarketType $market
     * @param \Sabre\UpdateReservation\StructType\ODMarketType $tripMarket
     * @param \Sabre\UpdateReservation\StructType\ODMarketType $retrievedFareMarket
     * @param \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType $fareTypeIndicators
     * @param \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType $evaluationTypeIndicators
     * @param \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType $exceptionTypeIndicators
     * @param int $additionalFlags
     * @param string $additionalData
     * @param string $uniqueId
     */
    public function __construct($originalFare = null, $effectiveBidPrice = null, $adjustedFare = null, $adjustedBidPrice = null, $fareClass = null, $lowestAvailFareClass = null, $pointOfCommencement = null, $customerScore = null, \Sabre\UpdateReservation\StructType\ODFrequentFlyerType $frequentFlyer = null, \Sabre\UpdateReservation\StructType\ODMarketType $market = null, \Sabre\UpdateReservation\StructType\ODMarketType $tripMarket = null, \Sabre\UpdateReservation\StructType\ODMarketType $retrievedFareMarket = null, \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType $fareTypeIndicators = null, \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType $evaluationTypeIndicators = null, \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType $exceptionTypeIndicators = null, $additionalFlags = null, $additionalData = null, $uniqueId = null)
    {
        $this
            ->setOriginalFare($originalFare)
            ->setEffectiveBidPrice($effectiveBidPrice)
            ->setAdjustedFare($adjustedFare)
            ->setAdjustedBidPrice($adjustedBidPrice)
            ->setFareClass($fareClass)
            ->setLowestAvailFareClass($lowestAvailFareClass)
            ->setPointOfCommencement($pointOfCommencement)
            ->setCustomerScore($customerScore)
            ->setFrequentFlyer($frequentFlyer)
            ->setMarket($market)
            ->setTripMarket($tripMarket)
            ->setRetrievedFareMarket($retrievedFareMarket)
            ->setFareTypeIndicators($fareTypeIndicators)
            ->setEvaluationTypeIndicators($evaluationTypeIndicators)
            ->setExceptionTypeIndicators($exceptionTypeIndicators)
            ->setAdditionalFlags($additionalFlags)
            ->setAdditionalData($additionalData)
            ->setUniqueId($uniqueId);
    }
    /**
     * Get OriginalFare value
     * @return int|null
     */
    public function getOriginalFare()
    {
        return $this->OriginalFare;
    }
    /**
     * Set OriginalFare value
     * @param int $originalFare
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setOriginalFare($originalFare = null)
    {
        // validation for constraint: int
        if (!is_null($originalFare) && !is_numeric($originalFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalFare)), __LINE__);
        }
        $this->OriginalFare = $originalFare;
        return $this;
    }
    /**
     * Get EffectiveBidPrice value
     * @return int|null
     */
    public function getEffectiveBidPrice()
    {
        return $this->EffectiveBidPrice;
    }
    /**
     * Set EffectiveBidPrice value
     * @param int $effectiveBidPrice
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setEffectiveBidPrice($effectiveBidPrice = null)
    {
        // validation for constraint: int
        if (!is_null($effectiveBidPrice) && !is_numeric($effectiveBidPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($effectiveBidPrice)), __LINE__);
        }
        $this->EffectiveBidPrice = $effectiveBidPrice;
        return $this;
    }
    /**
     * Get AdjustedFare value
     * @return int|null
     */
    public function getAdjustedFare()
    {
        return $this->AdjustedFare;
    }
    /**
     * Set AdjustedFare value
     * @param int $adjustedFare
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setAdjustedFare($adjustedFare = null)
    {
        // validation for constraint: int
        if (!is_null($adjustedFare) && !is_numeric($adjustedFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($adjustedFare)), __LINE__);
        }
        $this->AdjustedFare = $adjustedFare;
        return $this;
    }
    /**
     * Get AdjustedBidPrice value
     * @return int|null
     */
    public function getAdjustedBidPrice()
    {
        return $this->AdjustedBidPrice;
    }
    /**
     * Set AdjustedBidPrice value
     * @param int $adjustedBidPrice
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setAdjustedBidPrice($adjustedBidPrice = null)
    {
        // validation for constraint: int
        if (!is_null($adjustedBidPrice) && !is_numeric($adjustedBidPrice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($adjustedBidPrice)), __LINE__);
        }
        $this->AdjustedBidPrice = $adjustedBidPrice;
        return $this;
    }
    /**
     * Get FareClass value
     * @return string|null
     */
    public function getFareClass()
    {
        return $this->FareClass;
    }
    /**
     * Set FareClass value
     * @param string $fareClass
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setFareClass($fareClass = null)
    {
        // validation for constraint: string
        if (!is_null($fareClass) && !is_string($fareClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareClass)), __LINE__);
        }
        $this->FareClass = $fareClass;
        return $this;
    }
    /**
     * Get LowestAvailFareClass value
     * @return string|null
     */
    public function getLowestAvailFareClass()
    {
        return $this->LowestAvailFareClass;
    }
    /**
     * Set LowestAvailFareClass value
     * @param string $lowestAvailFareClass
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setLowestAvailFareClass($lowestAvailFareClass = null)
    {
        // validation for constraint: string
        if (!is_null($lowestAvailFareClass) && !is_string($lowestAvailFareClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lowestAvailFareClass)), __LINE__);
        }
        $this->LowestAvailFareClass = $lowestAvailFareClass;
        return $this;
    }
    /**
     * Get PointOfCommencement value
     * @return string|null
     */
    public function getPointOfCommencement()
    {
        return $this->PointOfCommencement;
    }
    /**
     * Set PointOfCommencement value
     * @param string $pointOfCommencement
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setPointOfCommencement($pointOfCommencement = null)
    {
        // validation for constraint: string
        if (!is_null($pointOfCommencement) && !is_string($pointOfCommencement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointOfCommencement)), __LINE__);
        }
        $this->PointOfCommencement = $pointOfCommencement;
        return $this;
    }
    /**
     * Get CustomerScore value
     * @return int|null
     */
    public function getCustomerScore()
    {
        return $this->CustomerScore;
    }
    /**
     * Set CustomerScore value
     * @param int $customerScore
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setCustomerScore($customerScore = null)
    {
        // validation for constraint: maxInclusive
        if ($customerScore > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $customerScore), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($customerScore < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $customerScore), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($customerScore) && !is_numeric($customerScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerScore)), __LINE__);
        }
        $this->CustomerScore = $customerScore;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * @return \Sabre\UpdateReservation\StructType\ODFrequentFlyerType|null
     */
    public function getFrequentFlyer()
    {
        return $this->FrequentFlyer;
    }
    /**
     * Set FrequentFlyer value
     * @param \Sabre\UpdateReservation\StructType\ODFrequentFlyerType $frequentFlyer
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setFrequentFlyer(\Sabre\UpdateReservation\StructType\ODFrequentFlyerType $frequentFlyer = null)
    {
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Get Market value
     * @return \Sabre\UpdateReservation\StructType\ODMarketType|null
     */
    public function getMarket()
    {
        return $this->Market;
    }
    /**
     * Set Market value
     * @param \Sabre\UpdateReservation\StructType\ODMarketType $market
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setMarket(\Sabre\UpdateReservation\StructType\ODMarketType $market = null)
    {
        $this->Market = $market;
        return $this;
    }
    /**
     * Get TripMarket value
     * @return \Sabre\UpdateReservation\StructType\ODMarketType|null
     */
    public function getTripMarket()
    {
        return $this->TripMarket;
    }
    /**
     * Set TripMarket value
     * @param \Sabre\UpdateReservation\StructType\ODMarketType $tripMarket
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setTripMarket(\Sabre\UpdateReservation\StructType\ODMarketType $tripMarket = null)
    {
        $this->TripMarket = $tripMarket;
        return $this;
    }
    /**
     * Get RetrievedFareMarket value
     * @return \Sabre\UpdateReservation\StructType\ODMarketType|null
     */
    public function getRetrievedFareMarket()
    {
        return $this->RetrievedFareMarket;
    }
    /**
     * Set RetrievedFareMarket value
     * @param \Sabre\UpdateReservation\StructType\ODMarketType $retrievedFareMarket
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setRetrievedFareMarket(\Sabre\UpdateReservation\StructType\ODMarketType $retrievedFareMarket = null)
    {
        $this->RetrievedFareMarket = $retrievedFareMarket;
        return $this;
    }
    /**
     * Get FareTypeIndicators value
     * @return \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType|null
     */
    public function getFareTypeIndicators()
    {
        return $this->FareTypeIndicators;
    }
    /**
     * Set FareTypeIndicators value
     * @param \Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType $fareTypeIndicators
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setFareTypeIndicators(\Sabre\UpdateReservation\StructType\ODFareTypeIndicatorsType $fareTypeIndicators = null)
    {
        $this->FareTypeIndicators = $fareTypeIndicators;
        return $this;
    }
    /**
     * Get EvaluationTypeIndicators value
     * @return \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType|null
     */
    public function getEvaluationTypeIndicators()
    {
        return $this->EvaluationTypeIndicators;
    }
    /**
     * Set EvaluationTypeIndicators value
     * @param \Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType $evaluationTypeIndicators
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setEvaluationTypeIndicators(\Sabre\UpdateReservation\StructType\ODEvaluationTypeIndicatorsType $evaluationTypeIndicators = null)
    {
        $this->EvaluationTypeIndicators = $evaluationTypeIndicators;
        return $this;
    }
    /**
     * Get ExceptionTypeIndicators value
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType|null
     */
    public function getExceptionTypeIndicators()
    {
        return $this->ExceptionTypeIndicators;
    }
    /**
     * Set ExceptionTypeIndicators value
     * @param \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType $exceptionTypeIndicators
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setExceptionTypeIndicators(\Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType $exceptionTypeIndicators = null)
    {
        $this->ExceptionTypeIndicators = $exceptionTypeIndicators;
        return $this;
    }
    /**
     * Get AdditionalFlags value
     * @return int|null
     */
    public function getAdditionalFlags()
    {
        return $this->AdditionalFlags;
    }
    /**
     * Set AdditionalFlags value
     * @param int $additionalFlags
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setAdditionalFlags($additionalFlags = null)
    {
        // validation for constraint: int
        if (!is_null($additionalFlags) && !is_numeric($additionalFlags)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalFlags)), __LINE__);
        }
        $this->AdditionalFlags = $additionalFlags;
        return $this;
    }
    /**
     * Get AdditionalData value
     * @return string|null
     */
    public function getAdditionalData()
    {
        return $this->AdditionalData;
    }
    /**
     * Set AdditionalData value
     * @param string $additionalData
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setAdditionalData($additionalData = null)
    {
        // validation for constraint: string
        if (!is_null($additionalData) && !is_string($additionalData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalData)), __LINE__);
        }
        $this->AdditionalData = $additionalData;
        return $this;
    }
    /**
     * Get uniqueId value
     * @return string|null
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }
    /**
     * Set uniqueId value
     * @param string $uniqueId
     * @return \Sabre\UpdateReservation\StructType\ODDataType
     */
    public function setUniqueId($uniqueId = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueId) && !is_string($uniqueId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueId)), __LINE__);
        }
        $this->uniqueId = $uniqueId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ODDataType
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
