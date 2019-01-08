<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingPOSSource StructType
 * Meta informations extracted from the WSDL
 * - documentation: Source Information For Point Of Sale
 * @subpackage Structs
 */
class LodgingPOSSource extends AbstractStructBase
{
    /**
     * The AgencyName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AgencyName;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AgentSine;
    /**
     * The AgentDutyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AgentDutyCode;
    /**
     * The Lniata
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Lniata;
    /**
     * The AgentOriginCity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AgentOriginCity;
    /**
     * The ISOCountryCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ISOCountryCode;
    /**
     * The ISOCurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ISOCurrencyCode;
    /**
     * The AuxPlaceOfOrigin
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AuxPlaceOfOrigin;
    /**
     * The IATAOriginatorTypeCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $IATAOriginatorTypeCode;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CreationDate;
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CreationTime;
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PseudoCityCode;
    /**
     * Constructor method for LodgingPOSSource
     * @uses LodgingPOSSource::setAgencyName()
     * @uses LodgingPOSSource::setAgentSine()
     * @uses LodgingPOSSource::setAgentDutyCode()
     * @uses LodgingPOSSource::setLniata()
     * @uses LodgingPOSSource::setAgentOriginCity()
     * @uses LodgingPOSSource::setISOCountryCode()
     * @uses LodgingPOSSource::setISOCurrencyCode()
     * @uses LodgingPOSSource::setAuxPlaceOfOrigin()
     * @uses LodgingPOSSource::setIATAOriginatorTypeCode()
     * @uses LodgingPOSSource::setCreationDate()
     * @uses LodgingPOSSource::setCreationTime()
     * @uses LodgingPOSSource::setPseudoCityCode()
     * @param string $agencyName
     * @param string $agentSine
     * @param string $agentDutyCode
     * @param string $lniata
     * @param string $agentOriginCity
     * @param string $iSOCountryCode
     * @param string $iSOCurrencyCode
     * @param string $auxPlaceOfOrigin
     * @param string $iATAOriginatorTypeCode
     * @param string $creationDate
     * @param string $creationTime
     * @param string $pseudoCityCode
     */
    public function __construct($agencyName = null, $agentSine = null, $agentDutyCode = null, $lniata = null, $agentOriginCity = null, $iSOCountryCode = null, $iSOCurrencyCode = null, $auxPlaceOfOrigin = null, $iATAOriginatorTypeCode = null, $creationDate = null, $creationTime = null, $pseudoCityCode = null)
    {
        $this
            ->setAgencyName($agencyName)
            ->setAgentSine($agentSine)
            ->setAgentDutyCode($agentDutyCode)
            ->setLniata($lniata)
            ->setAgentOriginCity($agentOriginCity)
            ->setISOCountryCode($iSOCountryCode)
            ->setISOCurrencyCode($iSOCurrencyCode)
            ->setAuxPlaceOfOrigin($auxPlaceOfOrigin)
            ->setIATAOriginatorTypeCode($iATAOriginatorTypeCode)
            ->setCreationDate($creationDate)
            ->setCreationTime($creationTime)
            ->setPseudoCityCode($pseudoCityCode);
    }
    /**
     * Get AgencyName value
     * @return string|null
     */
    public function getAgencyName()
    {
        return $this->AgencyName;
    }
    /**
     * Set AgencyName value
     * @param string $agencyName
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setAgencyName($agencyName = null)
    {
        // validation for constraint: string
        if (!is_null($agencyName) && !is_string($agencyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyName)), __LINE__);
        }
        $this->AgencyName = $agencyName;
        return $this;
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setAgentSine($agentSine = null)
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get AgentDutyCode value
     * @return string|null
     */
    public function getAgentDutyCode()
    {
        return $this->AgentDutyCode;
    }
    /**
     * Set AgentDutyCode value
     * @param string $agentDutyCode
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setAgentDutyCode($agentDutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($agentDutyCode) && !is_string($agentDutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentDutyCode)), __LINE__);
        }
        $this->AgentDutyCode = $agentDutyCode;
        return $this;
    }
    /**
     * Get Lniata value
     * @return string|null
     */
    public function getLniata()
    {
        return $this->Lniata;
    }
    /**
     * Set Lniata value
     * @param string $lniata
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setLniata($lniata = null)
    {
        // validation for constraint: string
        if (!is_null($lniata) && !is_string($lniata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lniata)), __LINE__);
        }
        $this->Lniata = $lniata;
        return $this;
    }
    /**
     * Get AgentOriginCity value
     * @return string|null
     */
    public function getAgentOriginCity()
    {
        return $this->AgentOriginCity;
    }
    /**
     * Set AgentOriginCity value
     * @param string $agentOriginCity
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setAgentOriginCity($agentOriginCity = null)
    {
        // validation for constraint: string
        if (!is_null($agentOriginCity) && !is_string($agentOriginCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentOriginCity)), __LINE__);
        }
        $this->AgentOriginCity = $agentOriginCity;
        return $this;
    }
    /**
     * Get ISOCountryCode value
     * @return string|null
     */
    public function getISOCountryCode()
    {
        return $this->ISOCountryCode;
    }
    /**
     * Set ISOCountryCode value
     * @param string $iSOCountryCode
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setISOCountryCode($iSOCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCountryCode) && !is_string($iSOCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCountryCode)), __LINE__);
        }
        $this->ISOCountryCode = $iSOCountryCode;
        return $this;
    }
    /**
     * Get ISOCurrencyCode value
     * @return string|null
     */
    public function getISOCurrencyCode()
    {
        return $this->ISOCurrencyCode;
    }
    /**
     * Set ISOCurrencyCode value
     * @param string $iSOCurrencyCode
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setISOCurrencyCode($iSOCurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCurrencyCode) && !is_string($iSOCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCurrencyCode)), __LINE__);
        }
        $this->ISOCurrencyCode = $iSOCurrencyCode;
        return $this;
    }
    /**
     * Get AuxPlaceOfOrigin value
     * @return string|null
     */
    public function getAuxPlaceOfOrigin()
    {
        return $this->AuxPlaceOfOrigin;
    }
    /**
     * Set AuxPlaceOfOrigin value
     * @param string $auxPlaceOfOrigin
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setAuxPlaceOfOrigin($auxPlaceOfOrigin = null)
    {
        // validation for constraint: string
        if (!is_null($auxPlaceOfOrigin) && !is_string($auxPlaceOfOrigin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auxPlaceOfOrigin)), __LINE__);
        }
        $this->AuxPlaceOfOrigin = $auxPlaceOfOrigin;
        return $this;
    }
    /**
     * Get IATAOriginatorTypeCode value
     * @return string|null
     */
    public function getIATAOriginatorTypeCode()
    {
        return $this->IATAOriginatorTypeCode;
    }
    /**
     * Set IATAOriginatorTypeCode value
     * @param string $iATAOriginatorTypeCode
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setIATAOriginatorTypeCode($iATAOriginatorTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($iATAOriginatorTypeCode) && !is_string($iATAOriginatorTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATAOriginatorTypeCode)), __LINE__);
        }
        $this->IATAOriginatorTypeCode = $iATAOriginatorTypeCode;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
     */
    public function setPseudoCityCode($pseudoCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingPOSSource
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
