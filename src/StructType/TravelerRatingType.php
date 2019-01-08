<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerRatingType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Customer Value Scores and Frequent Flyer Tiers for one traveler. It can influence Availability results when provided.
 * @subpackage Structs
 */
class TravelerRatingType extends AbstractStructBase
{
    /**
     * The Score
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Score;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FrequentFlyerType[]
     */
    public $FrequentFlyer;
    /**
     * Constructor method for TravelerRatingType
     * @uses TravelerRatingType::setScore()
     * @uses TravelerRatingType::setFrequentFlyer()
     * @param string[] $score
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyerType[] $frequentFlyer
     */
    public function __construct(array $score = array(), array $frequentFlyer = array())
    {
        $this
            ->setScore($score)
            ->setFrequentFlyer($frequentFlyer);
    }
    /**
     * Get Score value
     * @return string[]|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @uses \Sabre\UpdateReservation\EnumType\ScoreType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\ScoreType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $score
     * @return \Sabre\UpdateReservation\StructType\TravelerRatingType
     */
    public function setScore(array $score = array())
    {
        $invalidValues = array();
        foreach ($score as $travelerRatingTypeScoreItem) {
            if (!\Sabre\UpdateReservation\EnumType\ScoreType::valueIsValid($travelerRatingTypeScoreItem)) {
                $invalidValues[] = var_export($travelerRatingTypeScoreItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Sabre\UpdateReservation\EnumType\ScoreType::getValidValues())), __LINE__);
        }
        $this->Score = $score;
        return $this;
    }
    /**
     * Add item to Score value
     * @uses \Sabre\UpdateReservation\EnumType\ScoreType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\ScoreType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\TravelerRatingType
     */
    public function addToScore($item)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\ScoreType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Sabre\UpdateReservation\EnumType\ScoreType::getValidValues())), __LINE__);
        }
        $this->Score[] = $item;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyerType[]|null
     */
    public function getFrequentFlyer()
    {
        return $this->FrequentFlyer;
    }
    /**
     * Set FrequentFlyer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyerType[] $frequentFlyer
     * @return \Sabre\UpdateReservation\StructType\TravelerRatingType
     */
    public function setFrequentFlyer(array $frequentFlyer = array())
    {
        foreach ($frequentFlyer as $travelerRatingTypeFrequentFlyerItem) {
            // validation for constraint: itemType
            if (!$travelerRatingTypeFrequentFlyerItem instanceof \Sabre\UpdateReservation\StructType\FrequentFlyerType) {
                throw new \InvalidArgumentException(sprintf('The FrequentFlyer property can only contain items of \Sabre\UpdateReservation\StructType\FrequentFlyerType, "%s" given', is_object($travelerRatingTypeFrequentFlyerItem) ? get_class($travelerRatingTypeFrequentFlyerItem) : gettype($travelerRatingTypeFrequentFlyerItem)), __LINE__);
            }
        }
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Add item to FrequentFlyer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FrequentFlyerType $item
     * @return \Sabre\UpdateReservation\StructType\TravelerRatingType
     */
    public function addToFrequentFlyer(\Sabre\UpdateReservation\StructType\FrequentFlyerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FrequentFlyerType) {
            throw new \InvalidArgumentException(sprintf('The FrequentFlyer property can only contain items of \Sabre\UpdateReservation\StructType\FrequentFlyerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FrequentFlyer[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelerRatingType
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
