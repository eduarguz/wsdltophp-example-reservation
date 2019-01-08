<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustLoyaltyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Program rewarding frequent use by accumulating credits for services provided by vendors.
 * @subpackage Structs
 */
class CustLoyaltyType extends AbstractStructBase
{
    /**
     * The programID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier to indicate the company owner of the loyalty program.
     * @var string
     */
    public $programID;
    /**
     * The membershipID
     * Meta informations extracted from the WSDL
     * - documentation: Unique identifier of the member in the program (membership number, account number, etc.).
     * @var string
     */
    public $membershipID;
    /**
     * The travelSector
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the travel sector. Refer to OTA Code List Travel Sector (TVS).
     * @var string
     */
    public $travelSector;
    /**
     * The loyalLevel
     * @var string
     */
    public $loyalLevel;
    /**
     * The singleVendorInd
     * @var string
     */
    public $singleVendorInd;
    /**
     * The signupDate
     * @var string
     */
    public $signupDate;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference place holder, to reference it back in the response.
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for CustLoyaltyType
     * @uses CustLoyaltyType::setProgramID()
     * @uses CustLoyaltyType::setMembershipID()
     * @uses CustLoyaltyType::setTravelSector()
     * @uses CustLoyaltyType::setLoyalLevel()
     * @uses CustLoyaltyType::setSingleVendorInd()
     * @uses CustLoyaltyType::setSignupDate()
     * @uses CustLoyaltyType::setRPH()
     * @param string $programID
     * @param string $membershipID
     * @param string $travelSector
     * @param string $loyalLevel
     * @param string $singleVendorInd
     * @param string $signupDate
     * @param string $rPH
     */
    public function __construct($programID = null, $membershipID = null, $travelSector = null, $loyalLevel = null, $singleVendorInd = null, $signupDate = null, $rPH = null)
    {
        $this
            ->setProgramID($programID)
            ->setMembershipID($membershipID)
            ->setTravelSector($travelSector)
            ->setLoyalLevel($loyalLevel)
            ->setSingleVendorInd($singleVendorInd)
            ->setSignupDate($signupDate)
            ->setRPH($rPH);
    }
    /**
     * Get programID value
     * @return string|null
     */
    public function getProgramID()
    {
        return $this->programID;
    }
    /**
     * Set programID value
     * @param string $programID
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setProgramID($programID = null)
    {
        // validation for constraint: string
        if (!is_null($programID) && !is_string($programID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programID)), __LINE__);
        }
        $this->programID = $programID;
        return $this;
    }
    /**
     * Get membershipID value
     * @return string|null
     */
    public function getMembershipID()
    {
        return $this->membershipID;
    }
    /**
     * Set membershipID value
     * @param string $membershipID
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setMembershipID($membershipID = null)
    {
        // validation for constraint: string
        if (!is_null($membershipID) && !is_string($membershipID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($membershipID)), __LINE__);
        }
        $this->membershipID = $membershipID;
        return $this;
    }
    /**
     * Get travelSector value
     * @return string|null
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }
    /**
     * Set travelSector value
     * @param string $travelSector
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setTravelSector($travelSector = null)
    {
        // validation for constraint: string
        if (!is_null($travelSector) && !is_string($travelSector)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelSector)), __LINE__);
        }
        $this->travelSector = $travelSector;
        return $this;
    }
    /**
     * Get loyalLevel value
     * @return string|null
     */
    public function getLoyalLevel()
    {
        return $this->loyalLevel;
    }
    /**
     * Set loyalLevel value
     * @param string $loyalLevel
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setLoyalLevel($loyalLevel = null)
    {
        // validation for constraint: string
        if (!is_null($loyalLevel) && !is_string($loyalLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($loyalLevel)), __LINE__);
        }
        $this->loyalLevel = $loyalLevel;
        return $this;
    }
    /**
     * Get singleVendorInd value
     * @return string|null
     */
    public function getSingleVendorInd()
    {
        return $this->singleVendorInd;
    }
    /**
     * Set singleVendorInd value
     * @uses \Sabre\UpdateReservation\EnumType\SingleVendorIndType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\SingleVendorIndType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $singleVendorInd
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setSingleVendorInd($singleVendorInd = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\SingleVendorIndType::valueIsValid($singleVendorInd)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $singleVendorInd, implode(', ', \Sabre\UpdateReservation\EnumType\SingleVendorIndType::getValidValues())), __LINE__);
        }
        $this->singleVendorInd = $singleVendorInd;
        return $this;
    }
    /**
     * Get signupDate value
     * @return string|null
     */
    public function getSignupDate()
    {
        return $this->signupDate;
    }
    /**
     * Set signupDate value
     * @param string $signupDate
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setSignupDate($signupDate = null)
    {
        // validation for constraint: string
        if (!is_null($signupDate) && !is_string($signupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($signupDate)), __LINE__);
        }
        $this->signupDate = $signupDate;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CustLoyaltyType
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
