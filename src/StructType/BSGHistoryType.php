<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSGHistoryType StructType
 * @subpackage Structs
 */
class BSGHistoryType extends AbstractStructBase
{
    /**
     * The BSGReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BSGRefHistoryType
     */
    public $BSGReference;
    /**
     * The BSGCounter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BSGCounterHistoryType
     */
    public $BSGCounter;
    /**
     * Constructor method for BSGHistoryType
     * @uses BSGHistoryType::setBSGReference()
     * @uses BSGHistoryType::setBSGCounter()
     * @param \Sabre\UpdateReservation\StructType\BSGRefHistoryType $bSGReference
     * @param \Sabre\UpdateReservation\StructType\BSGCounterHistoryType $bSGCounter
     */
    public function __construct(\Sabre\UpdateReservation\StructType\BSGRefHistoryType $bSGReference = null, \Sabre\UpdateReservation\StructType\BSGCounterHistoryType $bSGCounter = null)
    {
        $this
            ->setBSGReference($bSGReference)
            ->setBSGCounter($bSGCounter);
    }
    /**
     * Get BSGReference value
     * @return \Sabre\UpdateReservation\StructType\BSGRefHistoryType|null
     */
    public function getBSGReference()
    {
        return $this->BSGReference;
    }
    /**
     * Set BSGReference value
     * @param \Sabre\UpdateReservation\StructType\BSGRefHistoryType $bSGReference
     * @return \Sabre\UpdateReservation\StructType\BSGHistoryType
     */
    public function setBSGReference(\Sabre\UpdateReservation\StructType\BSGRefHistoryType $bSGReference = null)
    {
        $this->BSGReference = $bSGReference;
        return $this;
    }
    /**
     * Get BSGCounter value
     * @return \Sabre\UpdateReservation\StructType\BSGCounterHistoryType|null
     */
    public function getBSGCounter()
    {
        return $this->BSGCounter;
    }
    /**
     * Set BSGCounter value
     * @param \Sabre\UpdateReservation\StructType\BSGCounterHistoryType $bSGCounter
     * @return \Sabre\UpdateReservation\StructType\BSGHistoryType
     */
    public function setBSGCounter(\Sabre\UpdateReservation\StructType\BSGCounterHistoryType $bSGCounter = null)
    {
        $this->BSGCounter = $bSGCounter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BSGHistoryType
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
