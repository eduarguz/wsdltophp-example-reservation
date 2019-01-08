<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceEMDNumberUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceEMDNumberUpdate_PNRB extends AbstractStructBase
{
    /**
     * The EMDNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EMDNumber;
    /**
     * The EMDCoupon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EMDCoupon;
    /**
     * Constructor method for AncillaryServiceEMDNumberUpdate.PNRB
     * @uses AncillaryServiceEMDNumberUpdate_PNRB::setEMDNumber()
     * @uses AncillaryServiceEMDNumberUpdate_PNRB::setEMDCoupon()
     * @param string $eMDNumber
     * @param string $eMDCoupon
     */
    public function __construct($eMDNumber = null, $eMDCoupon = null)
    {
        $this
            ->setEMDNumber($eMDNumber)
            ->setEMDCoupon($eMDCoupon);
    }
    /**
     * Get EMDNumber value
     * @return string|null
     */
    public function getEMDNumber()
    {
        return $this->EMDNumber;
    }
    /**
     * Set EMDNumber value
     * @param string $eMDNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB
     */
    public function setEMDNumber($eMDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eMDNumber) && !is_string($eMDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDNumber)), __LINE__);
        }
        $this->EMDNumber = $eMDNumber;
        return $this;
    }
    /**
     * Get EMDCoupon value
     * @return string|null
     */
    public function getEMDCoupon()
    {
        return $this->EMDCoupon;
    }
    /**
     * Set EMDCoupon value
     * @param string $eMDCoupon
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB
     */
    public function setEMDCoupon($eMDCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($eMDCoupon) && !is_string($eMDCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDCoupon)), __LINE__);
        }
        $this->EMDCoupon = $eMDCoupon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDNumberUpdate_PNRB
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
