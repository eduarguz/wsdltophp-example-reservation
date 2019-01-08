<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPosType StructType
 * Meta informations extracted from the WSDL
 * - documentation: OAC POS details for segments
 * @subpackage Structs
 */
class AirPosType extends AbstractStructBase
{
    /**
     * The CrsCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC POS Crs code
     * - minOccurs: 0
     * @var string
     */
    public $CrsCode;
    /**
     * The IataNumber
     * Meta informations extracted from the WSDL
     * - documentation: OAC POS IATA number
     * - minOccurs: 0
     * @var string
     */
    public $IataNumber;
    /**
     * The AgencyCityCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC POS Agency city code
     * - minOccurs: 0
     * @var string
     */
    public $AgencyCityCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC POS Booking country code
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The DutyCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC POS Duty code
     * - minOccurs: 0
     * @var string
     */
    public $DutyCode;
    /**
     * The OACAccountingCityCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC Accounting City code
     * - minOccurs: 0
     * @var string
     */
    public $OACAccountingCityCode;
    /**
     * The OACAccountingCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC Accounting code
     * - minOccurs: 0
     * @var string
     */
    public $OACAccountingCode;
    /**
     * The HomeCityCode
     * Meta informations extracted from the WSDL
     * - documentation: OAC POS Agent home city code
     * - minOccurs: 0
     * @var string
     */
    public $HomeCityCode;
    /**
     * Constructor method for AirPosType
     * @uses AirPosType::setCrsCode()
     * @uses AirPosType::setIataNumber()
     * @uses AirPosType::setAgencyCityCode()
     * @uses AirPosType::setCountryCode()
     * @uses AirPosType::setDutyCode()
     * @uses AirPosType::setOACAccountingCityCode()
     * @uses AirPosType::setOACAccountingCode()
     * @uses AirPosType::setHomeCityCode()
     * @param string $crsCode
     * @param string $iataNumber
     * @param string $agencyCityCode
     * @param string $countryCode
     * @param string $dutyCode
     * @param string $oACAccountingCityCode
     * @param string $oACAccountingCode
     * @param string $homeCityCode
     */
    public function __construct($crsCode = null, $iataNumber = null, $agencyCityCode = null, $countryCode = null, $dutyCode = null, $oACAccountingCityCode = null, $oACAccountingCode = null, $homeCityCode = null)
    {
        $this
            ->setCrsCode($crsCode)
            ->setIataNumber($iataNumber)
            ->setAgencyCityCode($agencyCityCode)
            ->setCountryCode($countryCode)
            ->setDutyCode($dutyCode)
            ->setOACAccountingCityCode($oACAccountingCityCode)
            ->setOACAccountingCode($oACAccountingCode)
            ->setHomeCityCode($homeCityCode);
    }
    /**
     * Get CrsCode value
     * @return string|null
     */
    public function getCrsCode()
    {
        return $this->CrsCode;
    }
    /**
     * Set CrsCode value
     * @param string $crsCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setCrsCode($crsCode = null)
    {
        // validation for constraint: string
        if (!is_null($crsCode) && !is_string($crsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($crsCode)), __LINE__);
        }
        $this->CrsCode = $crsCode;
        return $this;
    }
    /**
     * Get IataNumber value
     * @return string|null
     */
    public function getIataNumber()
    {
        return $this->IataNumber;
    }
    /**
     * Set IataNumber value
     * @param string $iataNumber
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setIataNumber($iataNumber = null)
    {
        // validation for constraint: string
        if (!is_null($iataNumber) && !is_string($iataNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iataNumber)), __LINE__);
        }
        $this->IataNumber = $iataNumber;
        return $this;
    }
    /**
     * Get AgencyCityCode value
     * @return string|null
     */
    public function getAgencyCityCode()
    {
        return $this->AgencyCityCode;
    }
    /**
     * Set AgencyCityCode value
     * @param string $agencyCityCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setAgencyCityCode($agencyCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($agencyCityCode) && !is_string($agencyCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyCityCode)), __LINE__);
        }
        $this->AgencyCityCode = $agencyCityCode;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get DutyCode value
     * @return string|null
     */
    public function getDutyCode()
    {
        return $this->DutyCode;
    }
    /**
     * Set DutyCode value
     * @param string $dutyCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setDutyCode($dutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($dutyCode) && !is_string($dutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dutyCode)), __LINE__);
        }
        $this->DutyCode = $dutyCode;
        return $this;
    }
    /**
     * Get OACAccountingCityCode value
     * @return string|null
     */
    public function getOACAccountingCityCode()
    {
        return $this->OACAccountingCityCode;
    }
    /**
     * Set OACAccountingCityCode value
     * @param string $oACAccountingCityCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setOACAccountingCityCode($oACAccountingCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($oACAccountingCityCode) && !is_string($oACAccountingCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oACAccountingCityCode)), __LINE__);
        }
        $this->OACAccountingCityCode = $oACAccountingCityCode;
        return $this;
    }
    /**
     * Get OACAccountingCode value
     * @return string|null
     */
    public function getOACAccountingCode()
    {
        return $this->OACAccountingCode;
    }
    /**
     * Set OACAccountingCode value
     * @param string $oACAccountingCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setOACAccountingCode($oACAccountingCode = null)
    {
        // validation for constraint: string
        if (!is_null($oACAccountingCode) && !is_string($oACAccountingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oACAccountingCode)), __LINE__);
        }
        $this->OACAccountingCode = $oACAccountingCode;
        return $this;
    }
    /**
     * Get HomeCityCode value
     * @return string|null
     */
    public function getHomeCityCode()
    {
        return $this->HomeCityCode;
    }
    /**
     * Set HomeCityCode value
     * @param string $homeCityCode
     * @return \Sabre\UpdateReservation\StructType\AirPosType
     */
    public function setHomeCityCode($homeCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($homeCityCode) && !is_string($homeCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($homeCityCode)), __LINE__);
        }
        $this->HomeCityCode = $homeCityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AirPosType
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
