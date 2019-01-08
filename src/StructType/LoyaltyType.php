<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyType StructType
 * @subpackage Structs
 */
class LoyaltyType extends AbstractStructBase
{
    /**
     * The ProgramName
     * @var string
     */
    public $ProgramName;
    /**
     * The MembershipID
     * @var string
     */
    public $MembershipID;
    /**
     * The LoyaltyLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CodeDescriptionType
     */
    public $LoyaltyLevel;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The ExpireDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpireDate;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Remark;
    /**
     * Constructor method for LoyaltyType
     * @uses LoyaltyType::setProgramName()
     * @uses LoyaltyType::setMembershipID()
     * @uses LoyaltyType::setLoyaltyLevel()
     * @uses LoyaltyType::setEffectiveDate()
     * @uses LoyaltyType::setExpireDate()
     * @uses LoyaltyType::setRemark()
     * @param string $programName
     * @param string $membershipID
     * @param \Sabre\UpdateReservation\StructType\CodeDescriptionType $loyaltyLevel
     * @param string $effectiveDate
     * @param string $expireDate
     * @param string[] $remark
     */
    public function __construct($programName = null, $membershipID = null, \Sabre\UpdateReservation\StructType\CodeDescriptionType $loyaltyLevel = null, $effectiveDate = null, $expireDate = null, array $remark = array())
    {
        $this
            ->setProgramName($programName)
            ->setMembershipID($membershipID)
            ->setLoyaltyLevel($loyaltyLevel)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate)
            ->setRemark($remark);
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
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
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
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
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
     * Get LoyaltyLevel value
     * @return \Sabre\UpdateReservation\StructType\CodeDescriptionType|null
     */
    public function getLoyaltyLevel()
    {
        return $this->LoyaltyLevel;
    }
    /**
     * Set LoyaltyLevel value
     * @param \Sabre\UpdateReservation\StructType\CodeDescriptionType $loyaltyLevel
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
     */
    public function setLoyaltyLevel(\Sabre\UpdateReservation\StructType\CodeDescriptionType $loyaltyLevel = null)
    {
        $this->LoyaltyLevel = $loyaltyLevel;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate()
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        $this->ExpireDate = $expireDate;
        return $this;
    }
    /**
     * Get Remark value
     * @return string[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param string[] $remark
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $loyaltyTypeRemarkItem) {
            // validation for constraint: itemType
            if (!is_string($loyaltyTypeRemarkItem)) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of string, "%s" given', is_object($loyaltyTypeRemarkItem) ? get_class($loyaltyTypeRemarkItem) : gettype($loyaltyTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
     */
    public function addToRemark($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType
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
