<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierRefundItem.PNRB StructType
 * @subpackage Structs
 */
class CarrierRefundItem_PNRB extends AbstractStructBase
{
    /**
     * The CarrierRecordLocator
     * Meta informations extracted from the WSDL
     * - documentation: Determines which segments will be refunded
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $CarrierRecordLocator;
    /**
     * The SegmentSubset
     * Meta informations extracted from the WSDL
     * - documentation: Tries to refund all possible segments
     * @var string
     */
    public $SegmentSubset;
    /**
     * The PaymentAuthorizationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Code needed to handle payment processing
     * - maxLength: 4
     * - minLength: 2
     * @var string
     */
    public $PaymentAuthorizationCode;
    /**
     * Constructor method for CarrierRefundItem.PNRB
     * @uses CarrierRefundItem_PNRB::setCarrierRecordLocator()
     * @uses CarrierRefundItem_PNRB::setSegmentSubset()
     * @uses CarrierRefundItem_PNRB::setPaymentAuthorizationCode()
     * @param string[] $carrierRecordLocator
     * @param string $segmentSubset
     * @param string $paymentAuthorizationCode
     */
    public function __construct(array $carrierRecordLocator = array(), $segmentSubset = null, $paymentAuthorizationCode = null)
    {
        $this
            ->setCarrierRecordLocator($carrierRecordLocator)
            ->setSegmentSubset($segmentSubset)
            ->setPaymentAuthorizationCode($paymentAuthorizationCode);
    }
    /**
     * Get CarrierRecordLocator value
     * @return string[]|null
     */
    public function getCarrierRecordLocator()
    {
        return $this->CarrierRecordLocator;
    }
    /**
     * Set CarrierRecordLocator value
     * @throws \InvalidArgumentException
     * @param string[] $carrierRecordLocator
     * @return \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB
     */
    public function setCarrierRecordLocator(array $carrierRecordLocator = array())
    {
        foreach ($carrierRecordLocator as $carrierRefundItem_PNRBCarrierRecordLocatorItem) {
            // validation for constraint: itemType
            if (!is_string($carrierRefundItem_PNRBCarrierRecordLocatorItem)) {
                throw new \InvalidArgumentException(sprintf('The CarrierRecordLocator property can only contain items of string, "%s" given', is_object($carrierRefundItem_PNRBCarrierRecordLocatorItem) ? get_class($carrierRefundItem_PNRBCarrierRecordLocatorItem) : gettype($carrierRefundItem_PNRBCarrierRecordLocatorItem)), __LINE__);
            }
        }
        $this->CarrierRecordLocator = $carrierRecordLocator;
        return $this;
    }
    /**
     * Add item to CarrierRecordLocator value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB
     */
    public function addToCarrierRecordLocator($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The CarrierRecordLocator property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CarrierRecordLocator[] = $item;
        return $this;
    }
    /**
     * Get SegmentSubset value
     * @return string|null
     */
    public function getSegmentSubset()
    {
        return $this->SegmentSubset;
    }
    /**
     * Set SegmentSubset value
     * @uses \Sabre\UpdateReservation\EnumType\SegmentSubset::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\SegmentSubset::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $segmentSubset
     * @return \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB
     */
    public function setSegmentSubset($segmentSubset = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\SegmentSubset::valueIsValid($segmentSubset)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $segmentSubset, implode(', ', \Sabre\UpdateReservation\EnumType\SegmentSubset::getValidValues())), __LINE__);
        }
        $this->SegmentSubset = $segmentSubset;
        return $this;
    }
    /**
     * Get PaymentAuthorizationCode value
     * @return string|null
     */
    public function getPaymentAuthorizationCode()
    {
        return $this->PaymentAuthorizationCode;
    }
    /**
     * Set PaymentAuthorizationCode value
     * @param string $paymentAuthorizationCode
     * @return \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB
     */
    public function setPaymentAuthorizationCode($paymentAuthorizationCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($paymentAuthorizationCode) && strlen($paymentAuthorizationCode) > 4) || (is_array($paymentAuthorizationCode) && count($paymentAuthorizationCode) > 4)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 4 element(s) or a scalar of 4 character(s) at most, "%d" length given', is_scalar($paymentAuthorizationCode) ? strlen($paymentAuthorizationCode) : count($paymentAuthorizationCode)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($paymentAuthorizationCode) && strlen($paymentAuthorizationCode) < 2) || (is_array($paymentAuthorizationCode) && count($paymentAuthorizationCode) < 2)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 2 element(s) or a scalar of 2 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($paymentAuthorizationCode) && !is_string($paymentAuthorizationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentAuthorizationCode)), __LINE__);
        }
        $this->PaymentAuthorizationCode = $paymentAuthorizationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CarrierRefundItem_PNRB
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
