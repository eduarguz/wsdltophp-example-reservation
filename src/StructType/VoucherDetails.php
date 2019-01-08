<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherDetails StructType
 * @subpackage Structs
 */
class VoucherDetails extends AbstractStructBase
{
    /**
     * The VoucherDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\VoucherDetail[]
     */
    public $VoucherDetail;
    /**
     * Constructor method for VoucherDetails
     * @uses VoucherDetails::setVoucherDetail()
     * @param \Sabre\UpdateReservation\StructType\VoucherDetail[] $voucherDetail
     */
    public function __construct(array $voucherDetail = array())
    {
        $this
            ->setVoucherDetail($voucherDetail);
    }
    /**
     * Get VoucherDetail value
     * @return \Sabre\UpdateReservation\StructType\VoucherDetail[]|null
     */
    public function getVoucherDetail()
    {
        return $this->VoucherDetail;
    }
    /**
     * Set VoucherDetail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\VoucherDetail[] $voucherDetail
     * @return \Sabre\UpdateReservation\StructType\VoucherDetails
     */
    public function setVoucherDetail(array $voucherDetail = array())
    {
        foreach ($voucherDetail as $voucherDetailsVoucherDetailItem) {
            // validation for constraint: itemType
            if (!$voucherDetailsVoucherDetailItem instanceof \Sabre\UpdateReservation\StructType\VoucherDetail) {
                throw new \InvalidArgumentException(sprintf('The VoucherDetail property can only contain items of \Sabre\UpdateReservation\StructType\VoucherDetail, "%s" given', is_object($voucherDetailsVoucherDetailItem) ? get_class($voucherDetailsVoucherDetailItem) : gettype($voucherDetailsVoucherDetailItem)), __LINE__);
            }
        }
        $this->VoucherDetail = $voucherDetail;
        return $this;
    }
    /**
     * Add item to VoucherDetail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\VoucherDetail $item
     * @return \Sabre\UpdateReservation\StructType\VoucherDetails
     */
    public function addToVoucherDetail(\Sabre\UpdateReservation\StructType\VoucherDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\VoucherDetail) {
            throw new \InvalidArgumentException(sprintf('The VoucherDetail property can only contain items of \Sabre\UpdateReservation\StructType\VoucherDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VoucherDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VoucherDetails
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
