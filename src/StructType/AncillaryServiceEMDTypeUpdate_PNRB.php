<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceEMDTypeUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceEMDTypeUpdate_PNRB extends AbstractStructBase
{
    /**
     * The EMDType
     * @var string
     */
    public $EMDType;
    /**
     * Constructor method for AncillaryServiceEMDTypeUpdate.PNRB
     * @uses AncillaryServiceEMDTypeUpdate_PNRB::setEMDType()
     * @param string $eMDType
     */
    public function __construct($eMDType = null)
    {
        $this
            ->setEMDType($eMDType);
    }
    /**
     * Get EMDType value
     * @return string|null
     */
    public function getEMDType()
    {
        return $this->EMDType;
    }
    /**
     * Set EMDType value
     * @param string $eMDType
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB
     */
    public function setEMDType($eMDType = null)
    {
        // validation for constraint: string
        if (!is_null($eMDType) && !is_string($eMDType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDType)), __LINE__);
        }
        $this->EMDType = $eMDType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceEMDTypeUpdate_PNRB
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
