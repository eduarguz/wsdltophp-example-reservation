<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherInformation StructType
 * @subpackage Structs
 */
class VoucherInformation extends AbstractStructBase
{
    /**
     * The VoucherAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VoucherAttributes
     */
    public $VoucherAttributes;
    /**
     * The VoucherDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VoucherDetails
     */
    public $VoucherDetails;
    /**
     * The OfficialSupplierName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $OfficialSupplierName;
    /**
     * Constructor method for VoucherInformation
     * @uses VoucherInformation::setVoucherAttributes()
     * @uses VoucherInformation::setVoucherDetails()
     * @uses VoucherInformation::setOfficialSupplierName()
     * @param \Sabre\UpdateReservation\StructType\VoucherAttributes $voucherAttributes
     * @param \Sabre\UpdateReservation\StructType\VoucherDetails $voucherDetails
     * @param string $officialSupplierName
     */
    public function __construct(\Sabre\UpdateReservation\StructType\VoucherAttributes $voucherAttributes = null, \Sabre\UpdateReservation\StructType\VoucherDetails $voucherDetails = null, $officialSupplierName = null)
    {
        $this
            ->setVoucherAttributes($voucherAttributes)
            ->setVoucherDetails($voucherDetails)
            ->setOfficialSupplierName($officialSupplierName);
    }
    /**
     * Get VoucherAttributes value
     * @return \Sabre\UpdateReservation\StructType\VoucherAttributes|null
     */
    public function getVoucherAttributes()
    {
        return $this->VoucherAttributes;
    }
    /**
     * Set VoucherAttributes value
     * @param \Sabre\UpdateReservation\StructType\VoucherAttributes $voucherAttributes
     * @return \Sabre\UpdateReservation\StructType\VoucherInformation
     */
    public function setVoucherAttributes(\Sabre\UpdateReservation\StructType\VoucherAttributes $voucherAttributes = null)
    {
        $this->VoucherAttributes = $voucherAttributes;
        return $this;
    }
    /**
     * Get VoucherDetails value
     * @return \Sabre\UpdateReservation\StructType\VoucherDetails|null
     */
    public function getVoucherDetails()
    {
        return $this->VoucherDetails;
    }
    /**
     * Set VoucherDetails value
     * @param \Sabre\UpdateReservation\StructType\VoucherDetails $voucherDetails
     * @return \Sabre\UpdateReservation\StructType\VoucherInformation
     */
    public function setVoucherDetails(\Sabre\UpdateReservation\StructType\VoucherDetails $voucherDetails = null)
    {
        $this->VoucherDetails = $voucherDetails;
        return $this;
    }
    /**
     * Get OfficialSupplierName value
     * @return string|null
     */
    public function getOfficialSupplierName()
    {
        return $this->OfficialSupplierName;
    }
    /**
     * Set OfficialSupplierName value
     * @param string $officialSupplierName
     * @return \Sabre\UpdateReservation\StructType\VoucherInformation
     */
    public function setOfficialSupplierName($officialSupplierName = null)
    {
        // validation for constraint: string
        if (!is_null($officialSupplierName) && !is_string($officialSupplierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($officialSupplierName)), __LINE__);
        }
        $this->OfficialSupplierName = $officialSupplierName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VoucherInformation
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
