<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServicePurchaseDateUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServicePurchaseDateUpdate_PNRB extends AbstractStructBase
{
    /**
     * The PurchaseTimestamp
     * @var string
     */
    public $PurchaseTimestamp;
    /**
     * Constructor method for AncillaryServicePurchaseDateUpdate.PNRB
     * @uses AncillaryServicePurchaseDateUpdate_PNRB::setPurchaseTimestamp()
     * @param string $purchaseTimestamp
     */
    public function __construct($purchaseTimestamp = null)
    {
        $this
            ->setPurchaseTimestamp($purchaseTimestamp);
    }
    /**
     * Get PurchaseTimestamp value
     * @return string|null
     */
    public function getPurchaseTimestamp()
    {
        return $this->PurchaseTimestamp;
    }
    /**
     * Set PurchaseTimestamp value
     * @param string $purchaseTimestamp
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB
     */
    public function setPurchaseTimestamp($purchaseTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseTimestamp) && !is_string($purchaseTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseTimestamp)), __LINE__);
        }
        $this->PurchaseTimestamp = $purchaseTimestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicePurchaseDateUpdate_PNRB
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
