<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApoXmlData StructType
 * @subpackage Structs
 */
class ApoXmlData extends AbstractStructBase
{
    /**
     * The AncillaryServiceData
     * Meta informations extracted from the WSDL
     * - ref: AncillaryServiceData
     * @var \Sabre\UpdateReservation\StructType\AncillaryServiceData
     */
    public $AncillaryServiceData;
    /**
     * Constructor method for ApoXmlData
     * @uses ApoXmlData::setAncillaryServiceData()
     * @param \Sabre\UpdateReservation\StructType\AncillaryServiceData $ancillaryServiceData
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AncillaryServiceData $ancillaryServiceData = null)
    {
        $this
            ->setAncillaryServiceData($ancillaryServiceData);
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
     * @return \Sabre\UpdateReservation\StructType\ApoXmlData
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
     * @return \Sabre\UpdateReservation\StructType\ApoXmlData
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
