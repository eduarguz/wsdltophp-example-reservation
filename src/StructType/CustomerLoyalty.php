<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerLoyalty StructType
 * @subpackage Structs
 */
class CustomerLoyalty extends AbstractStructBase
{
    /**
     * The MembershipID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Loyality or other association membership identifier.
     * @var string
     */
    public $MembershipID;
    /**
     * The LevelValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LevelValue;
    /**
     * The LevelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LevelType;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Vendor;
    /**
     * The VendorType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VendorType;
    /**
     * Constructor method for CustomerLoyalty
     * @uses CustomerLoyalty::setMembershipID()
     * @uses CustomerLoyalty::setLevelValue()
     * @uses CustomerLoyalty::setLevelType()
     * @uses CustomerLoyalty::setVendor()
     * @uses CustomerLoyalty::setVendorType()
     * @param string $membershipID
     * @param string $levelValue
     * @param string $levelType
     * @param string $vendor
     * @param string $vendorType
     */
    public function __construct($membershipID = null, $levelValue = null, $levelType = null, $vendor = null, $vendorType = null)
    {
        $this
            ->setMembershipID($membershipID)
            ->setLevelValue($levelValue)
            ->setLevelType($levelType)
            ->setVendor($vendor)
            ->setVendorType($vendorType);
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
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty
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
     * Get LevelValue value
     * @return string|null
     */
    public function getLevelValue()
    {
        return $this->LevelValue;
    }
    /**
     * Set LevelValue value
     * @param string $levelValue
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty
     */
    public function setLevelValue($levelValue = null)
    {
        // validation for constraint: string
        if (!is_null($levelValue) && !is_string($levelValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($levelValue)), __LINE__);
        }
        $this->LevelValue = $levelValue;
        return $this;
    }
    /**
     * Get LevelType value
     * @return string|null
     */
    public function getLevelType()
    {
        return $this->LevelType;
    }
    /**
     * Set LevelType value
     * @uses \Sabre\UpdateReservation\EnumType\MembershipLevelTypeCodes::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\MembershipLevelTypeCodes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $levelType
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty
     */
    public function setLevelType($levelType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\MembershipLevelTypeCodes::valueIsValid($levelType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $levelType, implode(', ', \Sabre\UpdateReservation\EnumType\MembershipLevelTypeCodes::getValidValues())), __LINE__);
        }
        $this->LevelType = $levelType;
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
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty
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
     * Get VendorType value
     * @return string|null
     */
    public function getVendorType()
    {
        return $this->VendorType;
    }
    /**
     * Set VendorType value
     * @uses \Sabre\UpdateReservation\EnumType\TravelSectorType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\TravelSectorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vendorType
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty
     */
    public function setVendorType($vendorType = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\TravelSectorType::valueIsValid($vendorType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vendorType, implode(', ', \Sabre\UpdateReservation\EnumType\TravelSectorType::getValidValues())), __LINE__);
        }
        $this->VendorType = $vendorType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CustomerLoyalty
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
