<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DivideSplitDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: The original record information.
 * @subpackage Structs
 */
class DivideSplitDetails extends AbstractStructBase
{
    /**
     * The DividedRecord
     * @var \Sabre\UpdateReservation\StructType\DividedRemarkType
     */
    public $DividedRecord;
    /**
     * The SplitFromRecord
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if divided from another PNR
     * @var \Sabre\UpdateReservation\StructType\SplitFromRemarkType
     */
    public $SplitFromRecord;
    /**
     * The SplitToRecord
     * Meta informations extracted from the WSDL
     * - documentation: The new record type to which pax is splited.
     * @var \Sabre\UpdateReservation\StructType\SplitToRemarkType
     */
    public $SplitToRecord;
    /**
     * Constructor method for DivideSplitDetails
     * @uses DivideSplitDetails::setDividedRecord()
     * @uses DivideSplitDetails::setSplitFromRecord()
     * @uses DivideSplitDetails::setSplitToRecord()
     * @param \Sabre\UpdateReservation\StructType\DividedRemarkType $dividedRecord
     * @param \Sabre\UpdateReservation\StructType\SplitFromRemarkType $splitFromRecord
     * @param \Sabre\UpdateReservation\StructType\SplitToRemarkType $splitToRecord
     */
    public function __construct(\Sabre\UpdateReservation\StructType\DividedRemarkType $dividedRecord = null, \Sabre\UpdateReservation\StructType\SplitFromRemarkType $splitFromRecord = null, \Sabre\UpdateReservation\StructType\SplitToRemarkType $splitToRecord = null)
    {
        $this
            ->setDividedRecord($dividedRecord)
            ->setSplitFromRecord($splitFromRecord)
            ->setSplitToRecord($splitToRecord);
    }
    /**
     * Get DividedRecord value
     * @return \Sabre\UpdateReservation\StructType\DividedRemarkType|null
     */
    public function getDividedRecord()
    {
        return $this->DividedRecord;
    }
    /**
     * Set DividedRecord value
     * @param \Sabre\UpdateReservation\StructType\DividedRemarkType $dividedRecord
     * @return \Sabre\UpdateReservation\StructType\DivideSplitDetails
     */
    public function setDividedRecord(\Sabre\UpdateReservation\StructType\DividedRemarkType $dividedRecord = null)
    {
        $this->DividedRecord = $dividedRecord;
        return $this;
    }
    /**
     * Get SplitFromRecord value
     * @return \Sabre\UpdateReservation\StructType\SplitFromRemarkType|null
     */
    public function getSplitFromRecord()
    {
        return $this->SplitFromRecord;
    }
    /**
     * Set SplitFromRecord value
     * @param \Sabre\UpdateReservation\StructType\SplitFromRemarkType $splitFromRecord
     * @return \Sabre\UpdateReservation\StructType\DivideSplitDetails
     */
    public function setSplitFromRecord(\Sabre\UpdateReservation\StructType\SplitFromRemarkType $splitFromRecord = null)
    {
        $this->SplitFromRecord = $splitFromRecord;
        return $this;
    }
    /**
     * Get SplitToRecord value
     * @return \Sabre\UpdateReservation\StructType\SplitToRemarkType|null
     */
    public function getSplitToRecord()
    {
        return $this->SplitToRecord;
    }
    /**
     * Set SplitToRecord value
     * @param \Sabre\UpdateReservation\StructType\SplitToRemarkType $splitToRecord
     * @return \Sabre\UpdateReservation\StructType\DivideSplitDetails
     */
    public function setSplitToRecord(\Sabre\UpdateReservation\StructType\SplitToRemarkType $splitToRecord = null)
    {
        $this->SplitToRecord = $splitToRecord;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DivideSplitDetails
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
