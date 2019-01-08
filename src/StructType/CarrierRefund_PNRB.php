<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierRefund.PNRB StructType
 * @subpackage Structs
 */
class CarrierRefund_PNRB extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Determines amount that will be refund
     * @var string
     */
    public $Amount;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Determines segment carrier that will be refund
     * @var string
     */
    public $CarrierCode;
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - documentation: Currency amount that will be refund
     * @var string
     */
    public $Currency;
    /**
     * Constructor method for CarrierRefund.PNRB
     * @uses CarrierRefund_PNRB::setAmount()
     * @uses CarrierRefund_PNRB::setCarrierCode()
     * @uses CarrierRefund_PNRB::setCurrency()
     * @param string $amount
     * @param string $carrierCode
     * @param string $currency
     */
    public function __construct($amount = null, $carrierCode = null, $currency = null)
    {
        $this
            ->setAmount($amount)
            ->setCarrierCode($carrierCode)
            ->setCurrency($currency);
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get Currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    /**
     * Set Currency value
     * @param string $currency
     * @return \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        $this->Currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CarrierRefund_PNRB
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
