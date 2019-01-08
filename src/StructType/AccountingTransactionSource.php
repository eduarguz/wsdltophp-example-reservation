<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingTransactionSource StructType
 * @subpackage Structs
 */
class AccountingTransactionSource extends AbstractStructBase
{
    /**
     * The SegmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SegmentData
     */
    public $SegmentData;
    /**
     * The AncillaryServiceData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceData
     */
    public $AncillaryServiceData;
    /**
     * Constructor method for AccountingTransactionSource
     * @uses AccountingTransactionSource::setSegmentData()
     * @uses AccountingTransactionSource::setAncillaryServiceData()
     * @param \Sabre\UpdateReservation\StructType\SegmentData $segmentData
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceData $ancillaryServiceData
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SegmentData $segmentData = null, \Sabre\UpdateReservation\StructType\AncillaryServiceData $ancillaryServiceData = null)
    {
        $this
            ->setSegmentData($segmentData)
            ->setAncillaryServiceData($ancillaryServiceData);
    }
    /**
     * Get SegmentData value
     * @return \Sabre\UpdateReservation\StructType\SegmentData|null
     */
    public function getSegmentData()
    {
        return $this->SegmentData;
    }
    /**
     * Set SegmentData value
     * @param \Sabre\UpdateReservation\StructType\SegmentData $segmentData
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionSource
     */
    public function setSegmentData(\Sabre\UpdateReservation\StructType\SegmentData $segmentData = null)
    {
        $this->SegmentData = $segmentData;
        return $this;
    }
    /**
     * Get AncillaryServiceData value
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceData|null
     */
    public function getAncillaryServiceData()
    {
        return $this->AncillaryServiceData;
    }
    /**
     * Set AncillaryServiceData value
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceData $ancillaryServiceData
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionSource
     */
    public function setAncillaryServiceData(\Sabre\UpdateReservation\StructType\AncillaryServiceData $ancillaryServiceData = null)
    {
        $this->AncillaryServiceData = $ancillaryServiceData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionSource
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
