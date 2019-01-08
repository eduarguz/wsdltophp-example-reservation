<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Profile StructType
 * Meta informations extracted from the WSDL
 * - type: ProfileType
 * @subpackage Structs
 */
class Profile extends AbstractStructBase
{
    /**
     * The ProfileID
     * @var string
     */
    public $ProfileID;
    /**
     * The ProfileType
     * @var string
     */
    public $ProfileType;
    /**
     * The PolicyId
     * @var string
     */
    public $PolicyId;
    /**
     * The PreferenceId
     * @var string
     */
    public $PreferenceId;
    /**
     * The PolicyRemovalReason
     * @var string
     */
    public $PolicyRemovalReason;
    /**
     * The OwningAgency
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z0-9]{4}
     * @var string
     */
    public $OwningAgency;
    /**
     * The AirlineCode
     * Meta informations extracted from the WSDL
     * - documentation: Profile Type like TVL, CRP eyc
     * - minOccurs: 0
     * @var string
     */
    public $AirlineCode;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CustomerLoyalty[]
     */
    public $FrequentFlyer;
    /**
     * The ValueScore
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CV_Score[]
     */
    public $ValueScore;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * Constructor method for Profile
     * @uses Profile::setProfileID()
     * @uses Profile::setProfileType()
     * @uses Profile::setPolicyId()
     * @uses Profile::setPreferenceId()
     * @uses Profile::setPolicyRemovalReason()
     * @uses Profile::setOwningAgency()
     * @uses Profile::setAirlineCode()
     * @uses Profile::setFrequentFlyer()
     * @uses Profile::setValueScore()
     * @uses Profile::setId()
     * @param string $profileID
     * @param string $profileType
     * @param string $policyId
     * @param string $preferenceId
     * @param string $policyRemovalReason
     * @param string $owningAgency
     * @param string $airlineCode
     * @param \Sabre\UpdateReservation\StructType\CustomerLoyalty[] $frequentFlyer
     * @param \Sabre\UpdateReservation\StructType\CV_Score[] $valueScore
     * @param string $id
     */
    public function __construct($profileID = null, $profileType = null, $policyId = null, $preferenceId = null, $policyRemovalReason = null, $owningAgency = null, $airlineCode = null, array $frequentFlyer = array(), array $valueScore = array(), $id = null)
    {
        $this
            ->setProfileID($profileID)
            ->setProfileType($profileType)
            ->setPolicyId($policyId)
            ->setPreferenceId($preferenceId)
            ->setPolicyRemovalReason($policyRemovalReason)
            ->setOwningAgency($owningAgency)
            ->setAirlineCode($airlineCode)
            ->setFrequentFlyer($frequentFlyer)
            ->setValueScore($valueScore)
            ->setId($id);
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
    /**
     * Get ProfileType value
     * @return string|null
     */
    public function getProfileType()
    {
        return $this->ProfileType;
    }
    /**
     * Set ProfileType value
     * @param string $profileType
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setProfileType($profileType = null)
    {
        // validation for constraint: string
        if (!is_null($profileType) && !is_string($profileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileType)), __LINE__);
        }
        $this->ProfileType = $profileType;
        return $this;
    }
    /**
     * Get PolicyId value
     * @return string|null
     */
    public function getPolicyId()
    {
        return $this->PolicyId;
    }
    /**
     * Set PolicyId value
     * @param string $policyId
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: string
        if (!is_null($policyId) && !is_string($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyId)), __LINE__);
        }
        $this->PolicyId = $policyId;
        return $this;
    }
    /**
     * Get PreferenceId value
     * @return string|null
     */
    public function getPreferenceId()
    {
        return $this->PreferenceId;
    }
    /**
     * Set PreferenceId value
     * @param string $preferenceId
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setPreferenceId($preferenceId = null)
    {
        // validation for constraint: string
        if (!is_null($preferenceId) && !is_string($preferenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferenceId)), __LINE__);
        }
        $this->PreferenceId = $preferenceId;
        return $this;
    }
    /**
     * Get PolicyRemovalReason value
     * @return string|null
     */
    public function getPolicyRemovalReason()
    {
        return $this->PolicyRemovalReason;
    }
    /**
     * Set PolicyRemovalReason value
     * @param string $policyRemovalReason
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setPolicyRemovalReason($policyRemovalReason = null)
    {
        // validation for constraint: string
        if (!is_null($policyRemovalReason) && !is_string($policyRemovalReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyRemovalReason)), __LINE__);
        }
        $this->PolicyRemovalReason = $policyRemovalReason;
        return $this;
    }
    /**
     * Get OwningAgency value
     * @return string|null
     */
    public function getOwningAgency()
    {
        return $this->OwningAgency;
    }
    /**
     * Set OwningAgency value
     * @param string $owningAgency
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setOwningAgency($owningAgency = null)
    {
        // validation for constraint: pattern
        if (is_scalar($owningAgency) && !preg_match('/[A-Z0-9]{4}/', $owningAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9]{4}", "%s" given', var_export($owningAgency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($owningAgency) && !is_string($owningAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owningAgency)), __LINE__);
        }
        $this->OwningAgency = $owningAgency;
        return $this;
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty[]|null
     */
    public function getFrequentFlyer()
    {
        return $this->FrequentFlyer;
    }
    /**
     * Set FrequentFlyer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CustomerLoyalty[] $frequentFlyer
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setFrequentFlyer(array $frequentFlyer = array())
    {
        foreach ($frequentFlyer as $profileFrequentFlyerItem) {
            // validation for constraint: itemType
            if (!$profileFrequentFlyerItem instanceof \Sabre\UpdateReservation\StructType\CustomerLoyalty) {
                throw new \InvalidArgumentException(sprintf('The FrequentFlyer property can only contain items of \Sabre\UpdateReservation\StructType\CustomerLoyalty, "%s" given', is_object($profileFrequentFlyerItem) ? get_class($profileFrequentFlyerItem) : gettype($profileFrequentFlyerItem)), __LINE__);
            }
        }
        $this->FrequentFlyer = $frequentFlyer;
        return $this;
    }
    /**
     * Add item to FrequentFlyer value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CustomerLoyalty $item
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function addToFrequentFlyer(\Sabre\UpdateReservation\StructType\CustomerLoyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CustomerLoyalty) {
            throw new \InvalidArgumentException(sprintf('The FrequentFlyer property can only contain items of \Sabre\UpdateReservation\StructType\CustomerLoyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FrequentFlyer[] = $item;
        return $this;
    }
    /**
     * Get ValueScore value
     * @return \Sabre\UpdateReservation\StructType\CV_Score[]|null
     */
    public function getValueScore()
    {
        return $this->ValueScore;
    }
    /**
     * Set ValueScore value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CV_Score[] $valueScore
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setValueScore(array $valueScore = array())
    {
        foreach ($valueScore as $profileValueScoreItem) {
            // validation for constraint: itemType
            if (!$profileValueScoreItem instanceof \Sabre\UpdateReservation\StructType\CV_Score) {
                throw new \InvalidArgumentException(sprintf('The ValueScore property can only contain items of \Sabre\UpdateReservation\StructType\CV_Score, "%s" given', is_object($profileValueScoreItem) ? get_class($profileValueScoreItem) : gettype($profileValueScoreItem)), __LINE__);
            }
        }
        $this->ValueScore = $valueScore;
        return $this;
    }
    /**
     * Add item to ValueScore value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CV_Score $item
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function addToValueScore(\Sabre\UpdateReservation\StructType\CV_Score $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CV_Score) {
            throw new \InvalidArgumentException(sprintf('The ValueScore property can only contain items of \Sabre\UpdateReservation\StructType\CV_Score, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ValueScore[] = $item;
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
     * @return \Sabre\UpdateReservation\StructType\Profile
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Profile
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
