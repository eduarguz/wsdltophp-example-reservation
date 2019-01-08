<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentFlyer StructType
 * Meta informations extracted from the WSDL
 * - type: FrequentFlyer
 * @subpackage Structs
 */
class FrequentFlyer extends AbstractStructBase
{
    /**
     * The PartnershipAirlineCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PartnershipAirlineCodes;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The PreviousActionCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PreviousActionCode;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Vendor;
    /**
     * The ReceivingCarrierCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceivingCarrierCode;
    /**
     * The VitType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $VitType;
    /**
     * The FrequentFlyerNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FrequentFlyerNumber;
    /**
     * The MembershipID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MembershipID;
    /**
     * The ProductType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductType;
    /**
     * The ProgramCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProgramCode;
    /**
     * The Provider
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Provider;
    /**
     * The CITierLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CITierLevel;
    /**
     * The ATPCOTierLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ATPCOTierLevel;
    /**
     * The Indicators
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Indicators;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Contains information on vendor validation ex. "INVLD NAME FOR ACCT"
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The Banner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Banner;
    /**
     * The Tag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Tag;
    /**
     * The Tag2Char
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Tag2Char;
    /**
     * The TierPriority
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TierPriority;
    /**
     * Constructor method for FrequentFlyer
     * @uses FrequentFlyer::setPartnershipAirlineCodes()
     * @uses FrequentFlyer::setActionCode()
     * @uses FrequentFlyer::setPreviousActionCode()
     * @uses FrequentFlyer::setVendor()
     * @uses FrequentFlyer::setReceivingCarrierCode()
     * @uses FrequentFlyer::setVitType()
     * @uses FrequentFlyer::setFrequentFlyerNumber()
     * @uses FrequentFlyer::setMembershipID()
     * @uses FrequentFlyer::setProductType()
     * @uses FrequentFlyer::setProgramCode()
     * @uses FrequentFlyer::setProvider()
     * @uses FrequentFlyer::setCITierLevel()
     * @uses FrequentFlyer::setATPCOTierLevel()
     * @uses FrequentFlyer::setIndicators()
     * @uses FrequentFlyer::setText()
     * @uses FrequentFlyer::setBanner()
     * @uses FrequentFlyer::setTag()
     * @uses FrequentFlyer::setTag2Char()
     * @uses FrequentFlyer::setTierPriority()
     * @param string[] $partnershipAirlineCodes
     * @param string $actionCode
     * @param string $previousActionCode
     * @param string $vendor
     * @param string $receivingCarrierCode
     * @param int $vitType
     * @param string $frequentFlyerNumber
     * @param string $membershipID
     * @param string $productType
     * @param string $programCode
     * @param string $provider
     * @param string $cITierLevel
     * @param string $aTPCOTierLevel
     * @param string $indicators
     * @param string $text
     * @param string $banner
     * @param string $tag
     * @param string $tag2Char
     * @param int $tierPriority
     */
    public function __construct(array $partnershipAirlineCodes = array(), $actionCode = null, $previousActionCode = null, $vendor = null, $receivingCarrierCode = null, $vitType = null, $frequentFlyerNumber = null, $membershipID = null, $productType = null, $programCode = null, $provider = null, $cITierLevel = null, $aTPCOTierLevel = null, $indicators = null, $text = null, $banner = null, $tag = null, $tag2Char = null, $tierPriority = null)
    {
        $this
            ->setPartnershipAirlineCodes($partnershipAirlineCodes)
            ->setActionCode($actionCode)
            ->setPreviousActionCode($previousActionCode)
            ->setVendor($vendor)
            ->setReceivingCarrierCode($receivingCarrierCode)
            ->setVitType($vitType)
            ->setFrequentFlyerNumber($frequentFlyerNumber)
            ->setMembershipID($membershipID)
            ->setProductType($productType)
            ->setProgramCode($programCode)
            ->setProvider($provider)
            ->setCITierLevel($cITierLevel)
            ->setATPCOTierLevel($aTPCOTierLevel)
            ->setIndicators($indicators)
            ->setText($text)
            ->setBanner($banner)
            ->setTag($tag)
            ->setTag2Char($tag2Char)
            ->setTierPriority($tierPriority);
    }
    /**
     * Get PartnershipAirlineCodes value
     * @return string[]|null
     */
    public function getPartnershipAirlineCodes()
    {
        return $this->PartnershipAirlineCodes;
    }
    /**
     * Set PartnershipAirlineCodes value
     * @throws \InvalidArgumentException
     * @param string[] $partnershipAirlineCodes
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setPartnershipAirlineCodes(array $partnershipAirlineCodes = array())
    {
        foreach ($partnershipAirlineCodes as $frequentFlyerPartnershipAirlineCodesItem) {
            // validation for constraint: itemType
            if (!is_string($frequentFlyerPartnershipAirlineCodesItem)) {
                throw new \InvalidArgumentException(sprintf('The PartnershipAirlineCodes property can only contain items of string, "%s" given', is_object($frequentFlyerPartnershipAirlineCodesItem) ? get_class($frequentFlyerPartnershipAirlineCodesItem) : gettype($frequentFlyerPartnershipAirlineCodesItem)), __LINE__);
            }
        }
        $this->PartnershipAirlineCodes = $partnershipAirlineCodes;
        return $this;
    }
    /**
     * Add item to PartnershipAirlineCodes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function addToPartnershipAirlineCodes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PartnershipAirlineCodes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PartnershipAirlineCodes[] = $item;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get PreviousActionCode value
     * @return string|null
     */
    public function getPreviousActionCode()
    {
        return $this->PreviousActionCode;
    }
    /**
     * Set PreviousActionCode value
     * @param string $previousActionCode
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setPreviousActionCode($previousActionCode = null)
    {
        // validation for constraint: string
        if (!is_null($previousActionCode) && !is_string($previousActionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousActionCode)), __LINE__);
        }
        $this->PreviousActionCode = $previousActionCode;
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
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
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
     * Get ReceivingCarrierCode value
     * @return string|null
     */
    public function getReceivingCarrierCode()
    {
        return $this->ReceivingCarrierCode;
    }
    /**
     * Set ReceivingCarrierCode value
     * @param string $receivingCarrierCode
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setReceivingCarrierCode($receivingCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($receivingCarrierCode) && !is_string($receivingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivingCarrierCode)), __LINE__);
        }
        $this->ReceivingCarrierCode = $receivingCarrierCode;
        return $this;
    }
    /**
     * Get VitType value
     * @return int|null
     */
    public function getVitType()
    {
        return $this->VitType;
    }
    /**
     * Set VitType value
     * @param int $vitType
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setVitType($vitType = null)
    {
        // validation for constraint: int
        if (!is_null($vitType) && !is_numeric($vitType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vitType)), __LINE__);
        }
        $this->VitType = $vitType;
        return $this;
    }
    /**
     * Get FrequentFlyerNumber value
     * @return string|null
     */
    public function getFrequentFlyerNumber()
    {
        return $this->FrequentFlyerNumber;
    }
    /**
     * Set FrequentFlyerNumber value
     * @param string $frequentFlyerNumber
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setFrequentFlyerNumber($frequentFlyerNumber = null)
    {
        // validation for constraint: string
        if (!is_null($frequentFlyerNumber) && !is_string($frequentFlyerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlyerNumber)), __LINE__);
        }
        $this->FrequentFlyerNumber = $frequentFlyerNumber;
        return $this;
    }
    /**
     * Get MembershipID value
     * @return string|null
     */
    public function getMembershipID()
    {
        return $this->MembershipID;
    }
    /**
     * Set MembershipID value
     * @param string $membershipID
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setMembershipID($membershipID = null)
    {
        // validation for constraint: string
        if (!is_null($membershipID) && !is_string($membershipID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($membershipID)), __LINE__);
        }
        $this->MembershipID = $membershipID;
        return $this;
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $productType
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productType)), __LINE__);
        }
        $this->ProductType = $productType;
        return $this;
    }
    /**
     * Get ProgramCode value
     * @return string|null
     */
    public function getProgramCode()
    {
        return $this->ProgramCode;
    }
    /**
     * Set ProgramCode value
     * @param string $programCode
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setProgramCode($programCode = null)
    {
        // validation for constraint: string
        if (!is_null($programCode) && !is_string($programCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programCode)), __LINE__);
        }
        $this->ProgramCode = $programCode;
        return $this;
    }
    /**
     * Get Provider value
     * @return string|null
     */
    public function getProvider()
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param string $provider
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setProvider($provider = null)
    {
        // validation for constraint: string
        if (!is_null($provider) && !is_string($provider)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($provider)), __LINE__);
        }
        $this->Provider = $provider;
        return $this;
    }
    /**
     * Get CITierLevel value
     * @return string|null
     */
    public function getCITierLevel()
    {
        return $this->CITierLevel;
    }
    /**
     * Set CITierLevel value
     * @param string $cITierLevel
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setCITierLevel($cITierLevel = null)
    {
        // validation for constraint: string
        if (!is_null($cITierLevel) && !is_string($cITierLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cITierLevel)), __LINE__);
        }
        $this->CITierLevel = $cITierLevel;
        return $this;
    }
    /**
     * Get ATPCOTierLevel value
     * @return string|null
     */
    public function getATPCOTierLevel()
    {
        return $this->ATPCOTierLevel;
    }
    /**
     * Set ATPCOTierLevel value
     * @param string $aTPCOTierLevel
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setATPCOTierLevel($aTPCOTierLevel = null)
    {
        // validation for constraint: string
        if (!is_null($aTPCOTierLevel) && !is_string($aTPCOTierLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aTPCOTierLevel)), __LINE__);
        }
        $this->ATPCOTierLevel = $aTPCOTierLevel;
        return $this;
    }
    /**
     * Get Indicators value
     * @return string|null
     */
    public function getIndicators()
    {
        return $this->Indicators;
    }
    /**
     * Set Indicators value
     * @param string $indicators
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setIndicators($indicators = null)
    {
        // validation for constraint: string
        if (!is_null($indicators) && !is_string($indicators)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indicators)), __LINE__);
        }
        $this->Indicators = $indicators;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Banner value
     * @return string|null
     */
    public function getBanner()
    {
        return $this->Banner;
    }
    /**
     * Set Banner value
     * @param string $banner
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setBanner($banner = null)
    {
        // validation for constraint: string
        if (!is_null($banner) && !is_string($banner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($banner)), __LINE__);
        }
        $this->Banner = $banner;
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag()
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setTag($tag = null)
    {
        // validation for constraint: string
        if (!is_null($tag) && !is_string($tag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tag)), __LINE__);
        }
        $this->Tag = $tag;
        return $this;
    }
    /**
     * Get Tag2Char value
     * @return string|null
     */
    public function getTag2Char()
    {
        return $this->Tag2Char;
    }
    /**
     * Set Tag2Char value
     * @param string $tag2Char
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setTag2Char($tag2Char = null)
    {
        // validation for constraint: string
        if (!is_null($tag2Char) && !is_string($tag2Char)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tag2Char)), __LINE__);
        }
        $this->Tag2Char = $tag2Char;
        return $this;
    }
    /**
     * Get TierPriority value
     * @return int|null
     */
    public function getTierPriority()
    {
        return $this->TierPriority;
    }
    /**
     * Set TierPriority value
     * @param int $tierPriority
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
     */
    public function setTierPriority($tierPriority = null)
    {
        // validation for constraint: int
        if (!is_null($tierPriority) && !is_numeric($tierPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tierPriority)), __LINE__);
        }
        $this->TierPriority = $tierPriority;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer
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
