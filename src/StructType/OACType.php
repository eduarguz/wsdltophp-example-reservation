<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OACType StructType
 * @subpackage Structs
 */
class OACType extends AbstractStructBase
{
    /**
     * The PartitionId
     * Meta informations extracted from the WSDL
     * - documentation: Deafult partition code from the OAC data.
     * - minOccurs: 0
     * @var string
     */
    public $PartitionId;
    /**
     * The AccountingCityCode
     * Meta informations extracted from the WSDL
     * - documentation: The personal account city code associated with user AAA city during the original PNR create session.
     * - minOccurs: 0
     * @var string
     */
    public $AccountingCityCode;
    /**
     * The AccountingCode
     * Meta informations extracted from the WSDL
     * - documentation: The personal account code associated with user AAA city during the original PNR create session.
     * - minOccurs: 0
     * @var string
     */
    public $AccountingCode;
    /**
     * The AccountingOfficeStationCode
     * Meta informations extracted from the WSDL
     * - documentation: The station code from the OAC line used in this PNR Create Session
     * - minOccurs: 0
     * @var string
     */
    public $AccountingOfficeStationCode;
    /**
     * Constructor method for OACType
     * @uses OACType::setPartitionId()
     * @uses OACType::setAccountingCityCode()
     * @uses OACType::setAccountingCode()
     * @uses OACType::setAccountingOfficeStationCode()
     * @param string $partitionId
     * @param string $accountingCityCode
     * @param string $accountingCode
     * @param string $accountingOfficeStationCode
     */
    public function __construct($partitionId = null, $accountingCityCode = null, $accountingCode = null, $accountingOfficeStationCode = null)
    {
        $this
            ->setPartitionId($partitionId)
            ->setAccountingCityCode($accountingCityCode)
            ->setAccountingCode($accountingCode)
            ->setAccountingOfficeStationCode($accountingOfficeStationCode);
    }
    /**
     * Get PartitionId value
     * @return string|null
     */
    public function getPartitionId()
    {
        return $this->PartitionId;
    }
    /**
     * Set PartitionId value
     * @param string $partitionId
     * @return \Sabre\UpdateReservation\StructType\OACType
     */
    public function setPartitionId($partitionId = null)
    {
        // validation for constraint: string
        if (!is_null($partitionId) && !is_string($partitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partitionId)), __LINE__);
        }
        $this->PartitionId = $partitionId;
        return $this;
    }
    /**
     * Get AccountingCityCode value
     * @return string|null
     */
    public function getAccountingCityCode()
    {
        return $this->AccountingCityCode;
    }
    /**
     * Set AccountingCityCode value
     * @param string $accountingCityCode
     * @return \Sabre\UpdateReservation\StructType\OACType
     */
    public function setAccountingCityCode($accountingCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountingCityCode) && !is_string($accountingCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountingCityCode)), __LINE__);
        }
        $this->AccountingCityCode = $accountingCityCode;
        return $this;
    }
    /**
     * Get AccountingCode value
     * @return string|null
     */
    public function getAccountingCode()
    {
        return $this->AccountingCode;
    }
    /**
     * Set AccountingCode value
     * @param string $accountingCode
     * @return \Sabre\UpdateReservation\StructType\OACType
     */
    public function setAccountingCode($accountingCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountingCode) && !is_string($accountingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountingCode)), __LINE__);
        }
        $this->AccountingCode = $accountingCode;
        return $this;
    }
    /**
     * Get AccountingOfficeStationCode value
     * @return string|null
     */
    public function getAccountingOfficeStationCode()
    {
        return $this->AccountingOfficeStationCode;
    }
    /**
     * Set AccountingOfficeStationCode value
     * @param string $accountingOfficeStationCode
     * @return \Sabre\UpdateReservation\StructType\OACType
     */
    public function setAccountingOfficeStationCode($accountingOfficeStationCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountingOfficeStationCode) && !is_string($accountingOfficeStationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountingOfficeStationCode)), __LINE__);
        }
        $this->AccountingOfficeStationCode = $accountingOfficeStationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OACType
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
