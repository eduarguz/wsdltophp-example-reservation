<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BNumberPayment.PNRB StructType
 * @subpackage Structs
 */
class BNumberPayment_PNRB extends Payment_PNRB
{
    /**
     * The FormOfPaymentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FormOfPaymentInfo;
    /**
     * The BNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BNumber;
    /**
     * Constructor method for BNumberPayment.PNRB
     * @uses BNumberPayment_PNRB::setFormOfPaymentInfo()
     * @uses BNumberPayment_PNRB::setBNumber()
     * @param string $formOfPaymentInfo
     * @param string $bNumber
     */
    public function __construct($formOfPaymentInfo = null, $bNumber = null)
    {
        $this
            ->setFormOfPaymentInfo($formOfPaymentInfo)
            ->setBNumber($bNumber);
    }
    /**
     * Get FormOfPaymentInfo value
     * @return string|null
     */
    public function getFormOfPaymentInfo()
    {
        return $this->FormOfPaymentInfo;
    }
    /**
     * Set FormOfPaymentInfo value
     * @param string $formOfPaymentInfo
     * @return \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB
     */
    public function setFormOfPaymentInfo($formOfPaymentInfo = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPaymentInfo) && !is_string($formOfPaymentInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPaymentInfo)), __LINE__);
        }
        $this->FormOfPaymentInfo = $formOfPaymentInfo;
        return $this;
    }
    /**
     * Get BNumber value
     * @return string|null
     */
    public function getBNumber()
    {
        return $this->BNumber;
    }
    /**
     * Set BNumber value
     * @param string $bNumber
     * @return \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB
     */
    public function setBNumber($bNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bNumber) && !is_string($bNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bNumber)), __LINE__);
        }
        $this->BNumber = $bNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BNumberPayment_PNRB
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
