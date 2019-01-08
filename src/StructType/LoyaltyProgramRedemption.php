<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyProgramRedemption StructType
 * @subpackage Structs
 */
class LoyaltyProgramRedemption extends AbstractStructBase
{
    /**
     * The MembershipNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MembershipNumber;
    /**
     * The ProgramName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProgramName;
    /**
     * The MemberName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MemberName;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Vendor;
    /**
     * The TierLevel
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TierLevel[]
     */
    public $TierLevel;
    /**
     * The LocalCardNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LocalCardNumber;
    /**
     * Constructor method for LoyaltyProgramRedemption
     * @uses LoyaltyProgramRedemption::setMembershipNumber()
     * @uses LoyaltyProgramRedemption::setProgramName()
     * @uses LoyaltyProgramRedemption::setMemberName()
     * @uses LoyaltyProgramRedemption::setVendor()
     * @uses LoyaltyProgramRedemption::setTierLevel()
     * @uses LoyaltyProgramRedemption::setLocalCardNumber()
     * @param string $membershipNumber
     * @param string $programName
     * @param string $memberName
     * @param string $vendor
     * @param \Sabre\UpdateReservation\StructType\TierLevel[] $tierLevel
     * @param string $localCardNumber
     */
    public function __construct($membershipNumber = null, $programName = null, $memberName = null, $vendor = null, array $tierLevel = array(), $localCardNumber = null)
    {
        $this
            ->setMembershipNumber($membershipNumber)
            ->setProgramName($programName)
            ->setMemberName($memberName)
            ->setVendor($vendor)
            ->setTierLevel($tierLevel)
            ->setLocalCardNumber($localCardNumber);
    }
    /**
     * Get MembershipNumber value
     * @return string
     */
    public function getMembershipNumber()
    {
        return $this->MembershipNumber;
    }
    /**
     * Set MembershipNumber value
     * @param string $membershipNumber
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public function setMembershipNumber($membershipNumber = null)
    {
        // validation for constraint: string
        if (!is_null($membershipNumber) && !is_string($membershipNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($membershipNumber)), __LINE__);
        }
        $this->MembershipNumber = $membershipNumber;
        return $this;
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public function setProgramName($programName = null)
    {
        // validation for constraint: string
        if (!is_null($programName) && !is_string($programName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programName)), __LINE__);
        }
        $this->ProgramName = $programName;
        return $this;
    }
    /**
     * Get MemberName value
     * @return string|null
     */
    public function getMemberName()
    {
        return $this->MemberName;
    }
    /**
     * Set MemberName value
     * @param string $memberName
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public function setMemberName($memberName = null)
    {
        // validation for constraint: string
        if (!is_null($memberName) && !is_string($memberName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memberName)), __LINE__);
        }
        $this->MemberName = $memberName;
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
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
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
     * Get TierLevel value
     * @return \Sabre\UpdateReservation\StructType\TierLevel[]|null
     */
    public function getTierLevel()
    {
        return $this->TierLevel;
    }
    /**
     * Set TierLevel value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TierLevel[] $tierLevel
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public function setTierLevel(array $tierLevel = array())
    {
        foreach ($tierLevel as $loyaltyProgramRedemptionTierLevelItem) {
            // validation for constraint: itemType
            if (!$loyaltyProgramRedemptionTierLevelItem instanceof \Sabre\UpdateReservation\StructType\TierLevel) {
                throw new \InvalidArgumentException(sprintf('The TierLevel property can only contain items of \Sabre\UpdateReservation\StructType\TierLevel, "%s" given', is_object($loyaltyProgramRedemptionTierLevelItem) ? get_class($loyaltyProgramRedemptionTierLevelItem) : gettype($loyaltyProgramRedemptionTierLevelItem)), __LINE__);
            }
        }
        $this->TierLevel = $tierLevel;
        return $this;
    }
    /**
     * Add item to TierLevel value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TierLevel $item
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public function addToTierLevel(\Sabre\UpdateReservation\StructType\TierLevel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TierLevel) {
            throw new \InvalidArgumentException(sprintf('The TierLevel property can only contain items of \Sabre\UpdateReservation\StructType\TierLevel, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TierLevel[] = $item;
        return $this;
    }
    /**
     * Get LocalCardNumber value
     * @return string|null
     */
    public function getLocalCardNumber()
    {
        return $this->LocalCardNumber;
    }
    /**
     * Set LocalCardNumber value
     * @param string $localCardNumber
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public function setLocalCardNumber($localCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($localCardNumber) && !is_string($localCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localCardNumber)), __LINE__);
        }
        $this->LocalCardNumber = $localCardNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
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
