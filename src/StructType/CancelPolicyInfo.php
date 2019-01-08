<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains cancellation information, e.g. additional charges.
 * @subpackage Structs
 */
class CancelPolicyInfo extends AbstractStructBase
{
    /**
     * The VersionId
     * Meta informations extracted from the WSDL
     * - documentation: Version ID value.
     * - minOccurs: 0
     * @var int
     */
    public $VersionId;
    /**
     * The CancelTime
     * Meta informations extracted from the WSDL
     * - documentation: The time of day the policy window begins/ends.
     * - minOccurs: 0
     * @var string
     */
    public $CancelTime;
    /**
     * The StartWindowHours
     * Meta informations extracted from the WSDL
     * - documentation: Hours before the day of check-in that the policy window begins, counting back from the specific time returned in CancelTime. This will return as 0 within the first instance of CancelPolicyInfo (since the window extends up until the
     * actual check-in time) and then the actual number of hours the policy window spans for the second instance. Returns with a value of 999 for nonrefundable rooms.
     * - minOccurs: 0
     * @var string
     */
    public $StartWindowHours;
    /**
     * The NightCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of nights charged as a penalty for cancelling within the policy window. A value of 1 = the first night's value plus tax; 2 = first and second night's individual values plus tax (do not multiply the first night's value).
     * - minOccurs: 0
     * @var int
     */
    public $NightCount;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: Percentage of the value of the total cost of stay (less taxes and fees) that will be charged as a penalty for cancelling within the policy window
     * - minOccurs: 0
     * @var float
     */
    public $Percent;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Flat fee to be charged as a penalty for cancelling within the policy window.
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Currency penalties will be charged in.
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The TimeZoneDescription
     * Meta informations extracted from the WSDL
     * - documentation: Time zone the property applies to the stated policy period.
     * - minOccurs: 0
     * @var string
     */
    public $TimeZoneDescription;
    /**
     * Constructor method for CancelPolicyInfo
     * @uses CancelPolicyInfo::setVersionId()
     * @uses CancelPolicyInfo::setCancelTime()
     * @uses CancelPolicyInfo::setStartWindowHours()
     * @uses CancelPolicyInfo::setNightCount()
     * @uses CancelPolicyInfo::setPercent()
     * @uses CancelPolicyInfo::setAmount()
     * @uses CancelPolicyInfo::setCurrencyCode()
     * @uses CancelPolicyInfo::setTimeZoneDescription()
     * @param int $versionId
     * @param string $cancelTime
     * @param string $startWindowHours
     * @param int $nightCount
     * @param float $percent
     * @param float $amount
     * @param string $currencyCode
     * @param string $timeZoneDescription
     */
    public function __construct($versionId = null, $cancelTime = null, $startWindowHours = null, $nightCount = null, $percent = null, $amount = null, $currencyCode = null, $timeZoneDescription = null)
    {
        $this
            ->setVersionId($versionId)
            ->setCancelTime($cancelTime)
            ->setStartWindowHours($startWindowHours)
            ->setNightCount($nightCount)
            ->setPercent($percent)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setTimeZoneDescription($timeZoneDescription);
    }
    /**
     * Get VersionId value
     * @return int|null
     */
    public function getVersionId()
    {
        return $this->VersionId;
    }
    /**
     * Set VersionId value
     * @param int $versionId
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setVersionId($versionId = null)
    {
        // validation for constraint: int
        if (!is_null($versionId) && !is_numeric($versionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versionId)), __LINE__);
        }
        $this->VersionId = $versionId;
        return $this;
    }
    /**
     * Get CancelTime value
     * @return string|null
     */
    public function getCancelTime()
    {
        return $this->CancelTime;
    }
    /**
     * Set CancelTime value
     * @param string $cancelTime
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setCancelTime($cancelTime = null)
    {
        // validation for constraint: string
        if (!is_null($cancelTime) && !is_string($cancelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelTime)), __LINE__);
        }
        $this->CancelTime = $cancelTime;
        return $this;
    }
    /**
     * Get StartWindowHours value
     * @return string|null
     */
    public function getStartWindowHours()
    {
        return $this->StartWindowHours;
    }
    /**
     * Set StartWindowHours value
     * @param string $startWindowHours
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setStartWindowHours($startWindowHours = null)
    {
        // validation for constraint: string
        if (!is_null($startWindowHours) && !is_string($startWindowHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startWindowHours)), __LINE__);
        }
        $this->StartWindowHours = $startWindowHours;
        return $this;
    }
    /**
     * Get NightCount value
     * @return int|null
     */
    public function getNightCount()
    {
        return $this->NightCount;
    }
    /**
     * Set NightCount value
     * @param int $nightCount
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setNightCount($nightCount = null)
    {
        // validation for constraint: int
        if (!is_null($nightCount) && !is_numeric($nightCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nightCount)), __LINE__);
        }
        $this->NightCount = $nightCount;
        return $this;
    }
    /**
     * Get Percent value
     * @return float|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param float $percent
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setPercent($percent = null)
    {
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
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
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get TimeZoneDescription value
     * @return string|null
     */
    public function getTimeZoneDescription()
    {
        return $this->TimeZoneDescription;
    }
    /**
     * Set TimeZoneDescription value
     * @param string $timeZoneDescription
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
     */
    public function setTimeZoneDescription($timeZoneDescription = null)
    {
        // validation for constraint: string
        if (!is_null($timeZoneDescription) && !is_string($timeZoneDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZoneDescription)), __LINE__);
        }
        $this->TimeZoneDescription = $timeZoneDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo
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
