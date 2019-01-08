<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueuePlacement StructType
 * @subpackage Structs
 */
class QueuePlacement extends AbstractStructBase
{
    /**
     * The QueueNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - maxInclusive: 511
     * - minInclusive: 0
     * @var int
     */
    public $QueueNumber;
    /**
     * The PitCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - maxInclusive: 254
     * - minInclusive: 0
     * @var int
     */
    public $PitCode;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityCode;
    /**
     * Constructor method for QueuePlacement
     * @uses QueuePlacement::setQueueNumber()
     * @uses QueuePlacement::setPitCode()
     * @uses QueuePlacement::setCityCode()
     * @param int $queueNumber
     * @param int $pitCode
     * @param string $cityCode
     */
    public function __construct($queueNumber = null, $pitCode = null, $cityCode = null)
    {
        $this
            ->setQueueNumber($queueNumber)
            ->setPitCode($pitCode)
            ->setCityCode($cityCode);
    }
    /**
     * Get QueueNumber value
     * @return int
     */
    public function getQueueNumber()
    {
        return $this->QueueNumber;
    }
    /**
     * Set QueueNumber value
     * @param int $queueNumber
     * @return \Sabre\UpdateReservation\StructType\QueuePlacement
     */
    public function setQueueNumber($queueNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($queueNumber > 511) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 511, "%s" given', $queueNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($queueNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $queueNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($queueNumber) && !is_numeric($queueNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($queueNumber)), __LINE__);
        }
        $this->QueueNumber = $queueNumber;
        return $this;
    }
    /**
     * Get PitCode value
     * @return int
     */
    public function getPitCode()
    {
        return $this->PitCode;
    }
    /**
     * Set PitCode value
     * @param int $pitCode
     * @return \Sabre\UpdateReservation\StructType\QueuePlacement
     */
    public function setPitCode($pitCode = null)
    {
        // validation for constraint: maxInclusive
        if ($pitCode > 254) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 254, "%s" given', $pitCode), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($pitCode < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $pitCode), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($pitCode) && !is_numeric($pitCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pitCode)), __LINE__);
        }
        $this->PitCode = $pitCode;
        return $this;
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Sabre\UpdateReservation\StructType\QueuePlacement
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\QueuePlacement
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
