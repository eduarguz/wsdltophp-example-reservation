<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdbAvailableSeatCountType.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Availability seat count for specific class code
 * @subpackage Structs
 */
class RdbAvailableSeatCountType_PNRB extends AbstractStructBase
{
    /**
     * The ClassCode
     * Meta informations extracted from the WSDL
     * - documentation: Class of service
     * @var string
     */
    public $ClassCode;
    /**
     * The AvailableSeatCount
     * Meta informations extracted from the WSDL
     * - documentation: Available seat count 0-99
     * @var string
     */
    public $AvailableSeatCount;
    /**
     * Constructor method for RdbAvailableSeatCountType.PNRB
     * @uses RdbAvailableSeatCountType_PNRB::setClassCode()
     * @uses RdbAvailableSeatCountType_PNRB::setAvailableSeatCount()
     * @param string $classCode
     * @param string $availableSeatCount
     */
    public function __construct($classCode = null, $availableSeatCount = null)
    {
        $this
            ->setClassCode($classCode)
            ->setAvailableSeatCount($availableSeatCount);
    }
    /**
     * Get ClassCode value
     * @return string|null
     */
    public function getClassCode()
    {
        return $this->ClassCode;
    }
    /**
     * Set ClassCode value
     * @param string $classCode
     * @return \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB
     */
    public function setClassCode($classCode = null)
    {
        // validation for constraint: string
        if (!is_null($classCode) && !is_string($classCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classCode)), __LINE__);
        }
        $this->ClassCode = $classCode;
        return $this;
    }
    /**
     * Get AvailableSeatCount value
     * @return string|null
     */
    public function getAvailableSeatCount()
    {
        return $this->AvailableSeatCount;
    }
    /**
     * Set AvailableSeatCount value
     * @param string $availableSeatCount
     * @return \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB
     */
    public function setAvailableSeatCount($availableSeatCount = null)
    {
        // validation for constraint: string
        if (!is_null($availableSeatCount) && !is_string($availableSeatCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availableSeatCount)), __LINE__);
        }
        $this->AvailableSeatCount = $availableSeatCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RdbAvailableSeatCountType_PNRB
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
