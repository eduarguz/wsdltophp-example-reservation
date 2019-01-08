<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionCardBasicHistoryType StructType
 * @subpackage Structs
 */
class SubscriptionCardBasicHistoryType extends AbstractStructBase
{
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Airline;
    /**
     * The FrequentFlierNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FrequentFlierNumber;
    /**
     * The DateValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateValidFrom;
    /**
     * The DateValidTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateValidTo;
    /**
     * Constructor method for SubscriptionCardBasicHistoryType
     * @uses SubscriptionCardBasicHistoryType::setAirline()
     * @uses SubscriptionCardBasicHistoryType::setFrequentFlierNumber()
     * @uses SubscriptionCardBasicHistoryType::setDateValidFrom()
     * @uses SubscriptionCardBasicHistoryType::setDateValidTo()
     * @param string $airline
     * @param string $frequentFlierNumber
     * @param string $dateValidFrom
     * @param string $dateValidTo
     */
    public function __construct($airline = null, $frequentFlierNumber = null, $dateValidFrom = null, $dateValidTo = null)
    {
        $this
            ->setAirline($airline)
            ->setFrequentFlierNumber($frequentFlierNumber)
            ->setDateValidFrom($dateValidFrom)
            ->setDateValidTo($dateValidTo);
    }
    /**
     * Get Airline value
     * @return string|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param string $airline
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType
     */
    public function setAirline($airline = null)
    {
        // validation for constraint: string
        if (!is_null($airline) && !is_string($airline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airline)), __LINE__);
        }
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get FrequentFlierNumber value
     * @return string|null
     */
    public function getFrequentFlierNumber()
    {
        return $this->FrequentFlierNumber;
    }
    /**
     * Set FrequentFlierNumber value
     * @param string $frequentFlierNumber
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType
     */
    public function setFrequentFlierNumber($frequentFlierNumber = null)
    {
        // validation for constraint: string
        if (!is_null($frequentFlierNumber) && !is_string($frequentFlierNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequentFlierNumber)), __LINE__);
        }
        $this->FrequentFlierNumber = $frequentFlierNumber;
        return $this;
    }
    /**
     * Get DateValidFrom value
     * @return string|null
     */
    public function getDateValidFrom()
    {
        return $this->DateValidFrom;
    }
    /**
     * Set DateValidFrom value
     * @param string $dateValidFrom
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType
     */
    public function setDateValidFrom($dateValidFrom = null)
    {
        // validation for constraint: string
        if (!is_null($dateValidFrom) && !is_string($dateValidFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateValidFrom)), __LINE__);
        }
        $this->DateValidFrom = $dateValidFrom;
        return $this;
    }
    /**
     * Get DateValidTo value
     * @return string|null
     */
    public function getDateValidTo()
    {
        return $this->DateValidTo;
    }
    /**
     * Set DateValidTo value
     * @param string $dateValidTo
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType
     */
    public function setDateValidTo($dateValidTo = null)
    {
        // validation for constraint: string
        if (!is_null($dateValidTo) && !is_string($dateValidTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateValidTo)), __LINE__);
        }
        $this->DateValidTo = $dateValidTo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SubscriptionCardBasicHistoryType
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
