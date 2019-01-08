<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarningCarrierRefund.PNRB StructType
 * @subpackage Structs
 */
class WarningCarrierRefund_PNRB extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Determines segment carrier that will not be refund
     * @var string
     */
    public $CarrierCode;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Determines the cause, why segments for carrier can not be refund
     * @var string
     */
    public $Message;
    /**
     * Constructor method for WarningCarrierRefund.PNRB
     * @uses WarningCarrierRefund_PNRB::setCarrierCode()
     * @uses WarningCarrierRefund_PNRB::setMessage()
     * @param string $carrierCode
     * @param string $message
     */
    public function __construct($carrierCode = null, $message = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setMessage($message);
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
     * @return \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB
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
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\WarningCarrierRefund_PNRB
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
