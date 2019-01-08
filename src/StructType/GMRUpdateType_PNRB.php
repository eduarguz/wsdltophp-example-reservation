<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GMRUpdateType.PNRB StructType
 * @subpackage Structs
 */
class GMRUpdateType_PNRB extends AbstractStructBase
{
    /**
     * The GMRRecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - pattern: [A-Z]{6}
     * @var string
     */
    public $GMRRecordLocator;
    /**
     * The NbrOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Used for Numeric values, from 0 to 99 inclusive.
     * - maxInclusive: 99
     * - minInclusive: 0
     * @var int
     */
    public $NbrOfSeats;
    /**
     * Constructor method for GMRUpdateType.PNRB
     * @uses GMRUpdateType_PNRB::setGMRRecordLocator()
     * @uses GMRUpdateType_PNRB::setNbrOfSeats()
     * @param string $gMRRecordLocator
     * @param int $nbrOfSeats
     */
    public function __construct($gMRRecordLocator = null, $nbrOfSeats = null)
    {
        $this
            ->setGMRRecordLocator($gMRRecordLocator)
            ->setNbrOfSeats($nbrOfSeats);
    }
    /**
     * Get GMRRecordLocator value
     * @return string
     */
    public function getGMRRecordLocator()
    {
        return $this->GMRRecordLocator;
    }
    /**
     * Set GMRRecordLocator value
     * @param string $gMRRecordLocator
     * @return \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB
     */
    public function setGMRRecordLocator($gMRRecordLocator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($gMRRecordLocator) && !preg_match('/[A-Z]{6}/', $gMRRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]{6}", "%s" given', var_export($gMRRecordLocator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($gMRRecordLocator) && !is_string($gMRRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gMRRecordLocator)), __LINE__);
        }
        $this->GMRRecordLocator = $gMRRecordLocator;
        return $this;
    }
    /**
     * Get NbrOfSeats value
     * @return int
     */
    public function getNbrOfSeats()
    {
        return $this->NbrOfSeats;
    }
    /**
     * Set NbrOfSeats value
     * @param int $nbrOfSeats
     * @return \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB
     */
    public function setNbrOfSeats($nbrOfSeats = null)
    {
        // validation for constraint: maxInclusive
        if ($nbrOfSeats > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $nbrOfSeats), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($nbrOfSeats < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $nbrOfSeats), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($nbrOfSeats) && !is_numeric($nbrOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nbrOfSeats)), __LINE__);
        }
        $this->NbrOfSeats = $nbrOfSeats;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GMRUpdateType_PNRB
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
