<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundResult.PNRB StructType
 * @subpackage Structs
 */
class RefundResult_PNRB extends AbstractStructBase
{
    /**
     * The CarrierRefund
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB[]
     */
    public $CarrierRefund;
    /**
     * The WarningCarrierRefund
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB[]
     */
    public $WarningCarrierRefund;
    /**
     * Constructor method for RefundResult.PNRB
     * @uses RefundResult_PNRB::setCarrierRefund()
     * @uses RefundResult_PNRB::setWarningCarrierRefund()
     * @param \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB[] $carrierRefund
     * @param \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB[] $warningCarrierRefund
     */
    public function __construct(array $carrierRefund = array(), array $warningCarrierRefund = array())
    {
        $this
            ->setCarrierRefund($carrierRefund)
            ->setWarningCarrierRefund($warningCarrierRefund);
    }
    /**
     * Get CarrierRefund value
     * @return \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB[]|null
     */
    public function getCarrierRefund()
    {
        return $this->CarrierRefund;
    }
    /**
     * Set CarrierRefund value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB[] $carrierRefund
     * @return \Sabre\UpdateReservation\StructType\RefundResult_PNRB
     */
    public function setCarrierRefund(array $carrierRefund = array())
    {
        foreach ($carrierRefund as $refundResult_PNRBCarrierRefundItem) {
            // validation for constraint: itemType
            if (!$refundResult_PNRBCarrierRefundItem instanceof \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB) {
                throw new \InvalidArgumentException(sprintf('The CarrierRefund property can only contain items of \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB, "%s" given', is_object($refundResult_PNRBCarrierRefundItem) ? get_class($refundResult_PNRBCarrierRefundItem) : gettype($refundResult_PNRBCarrierRefundItem)), __LINE__);
            }
        }
        $this->CarrierRefund = $carrierRefund;
        return $this;
    }
    /**
     * Add item to CarrierRefund value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\RefundResult_PNRB
     */
    public function addToCarrierRefund(\Sabre\UpdateReservation\StructType\CarrierRefund_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB) {
            throw new \InvalidArgumentException(sprintf('The CarrierRefund property can only contain items of \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CarrierRefund[] = $item;
        return $this;
    }
    /**
     * Get WarningCarrierRefund value
     * @return \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB[]|null
     */
    public function getWarningCarrierRefund()
    {
        return $this->WarningCarrierRefund;
    }
    /**
     * Set WarningCarrierRefund value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB[] $warningCarrierRefund
     * @return \Sabre\UpdateReservation\StructType\RefundResult_PNRB
     */
    public function setWarningCarrierRefund(array $warningCarrierRefund = array())
    {
        foreach ($warningCarrierRefund as $refundResult_PNRBWarningCarrierRefundItem) {
            // validation for constraint: itemType
            if (!$refundResult_PNRBWarningCarrierRefundItem instanceof \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB) {
                throw new \InvalidArgumentException(sprintf('The WarningCarrierRefund property can only contain items of \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB, "%s" given', is_object($refundResult_PNRBWarningCarrierRefundItem) ? get_class($refundResult_PNRBWarningCarrierRefundItem) : gettype($refundResult_PNRBWarningCarrierRefundItem)), __LINE__);
            }
        }
        $this->WarningCarrierRefund = $warningCarrierRefund;
        return $this;
    }
    /**
     * Add item to WarningCarrierRefund value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB $item
     * @return \Sabre\UpdateReservation\StructType\RefundResult_PNRB
     */
    public function addToWarningCarrierRefund(\Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB) {
            throw new \InvalidArgumentException(sprintf('The WarningCarrierRefund property can only contain items of \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WarningCarrierRefund[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RefundResult_PNRB
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
