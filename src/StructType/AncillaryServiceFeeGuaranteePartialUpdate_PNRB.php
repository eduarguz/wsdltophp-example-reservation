<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceFeeGuaranteePartialUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceFeeGuaranteePartialUpdate_PNRB extends AbstractStructBase
{
    /**
     * The FeeGuaranteeIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FeeGuaranteeIndicator;
    /**
     * Constructor method for AncillaryServiceFeeGuaranteePartialUpdate.PNRB
     * @uses AncillaryServiceFeeGuaranteePartialUpdate_PNRB::setFeeGuaranteeIndicator()
     * @param string $feeGuaranteeIndicator
     */
    public function __construct($feeGuaranteeIndicator = null)
    {
        $this
            ->setFeeGuaranteeIndicator($feeGuaranteeIndicator);
    }
    /**
     * Get FeeGuaranteeIndicator value
     * @return string|null
     */
    public function getFeeGuaranteeIndicator()
    {
        return $this->FeeGuaranteeIndicator;
    }
    /**
     * Set FeeGuaranteeIndicator value
     * @param string $feeGuaranteeIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB
     */
    public function setFeeGuaranteeIndicator($feeGuaranteeIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($feeGuaranteeIndicator) && !is_string($feeGuaranteeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeGuaranteeIndicator)), __LINE__);
        }
        $this->FeeGuaranteeIndicator = $feeGuaranteeIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceFeeGuaranteePartialUpdate_PNRB
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
