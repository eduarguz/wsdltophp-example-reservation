<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceVendorCodeUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceVendorCodeUpdate_PNRB extends AbstractStructBase
{
    /**
     * The VendorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VendorCode;
    /**
     * Constructor method for AncillaryServiceVendorCodeUpdate.PNRB
     * @uses AncillaryServiceVendorCodeUpdate_PNRB::setVendorCode()
     * @param string $vendorCode
     */
    public function __construct($vendorCode = null)
    {
        $this
            ->setVendorCode($vendorCode);
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceVendorCodeUpdate_PNRB
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
