<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceIATAIndicatorPartialUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceIATAIndicatorPartialUpdate_PNRB extends AbstractStructBase
{
    /**
     * The RefundIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RefundIndicator;
    /**
     * The CommisionIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CommisionIndicator;
    /**
     * The InterlineIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InterlineIndicator;
    /**
     * Constructor method for AncillaryServiceIATAIndicatorPartialUpdate.PNRB
     * @uses AncillaryServiceIATAIndicatorPartialUpdate_PNRB::setRefundIndicator()
     * @uses AncillaryServiceIATAIndicatorPartialUpdate_PNRB::setCommisionIndicator()
     * @uses AncillaryServiceIATAIndicatorPartialUpdate_PNRB::setInterlineIndicator()
     * @param string $refundIndicator
     * @param string $commisionIndicator
     * @param string $interlineIndicator
     */
    public function __construct($refundIndicator = null, $commisionIndicator = null, $interlineIndicator = null)
    {
        $this
            ->setRefundIndicator($refundIndicator)
            ->setCommisionIndicator($commisionIndicator)
            ->setInterlineIndicator($interlineIndicator);
    }
    /**
     * Get RefundIndicator value
     * @return string|null
     */
    public function getRefundIndicator()
    {
        return $this->RefundIndicator;
    }
    /**
     * Set RefundIndicator value
     * @param string $refundIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB
     */
    public function setRefundIndicator($refundIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($refundIndicator) && !is_string($refundIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundIndicator)), __LINE__);
        }
        $this->RefundIndicator = $refundIndicator;
        return $this;
    }
    /**
     * Get CommisionIndicator value
     * @return string|null
     */
    public function getCommisionIndicator()
    {
        return $this->CommisionIndicator;
    }
    /**
     * Set CommisionIndicator value
     * @param string $commisionIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB
     */
    public function setCommisionIndicator($commisionIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($commisionIndicator) && !is_string($commisionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commisionIndicator)), __LINE__);
        }
        $this->CommisionIndicator = $commisionIndicator;
        return $this;
    }
    /**
     * Get InterlineIndicator value
     * @return string|null
     */
    public function getInterlineIndicator()
    {
        return $this->InterlineIndicator;
    }
    /**
     * Set InterlineIndicator value
     * @param string $interlineIndicator
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB
     */
    public function setInterlineIndicator($interlineIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($interlineIndicator) && !is_string($interlineIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($interlineIndicator)), __LINE__);
        }
        $this->InterlineIndicator = $interlineIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceIATAIndicatorPartialUpdate_PNRB
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
