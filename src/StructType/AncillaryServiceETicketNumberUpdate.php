<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceETicketNumberUpdate StructType
 * @subpackage Structs
 */
class AncillaryServiceETicketNumberUpdate extends AbstractStructBase
{
    /**
     * The ETicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ETicketNumber;
    /**
     * The ETicketCoupon
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ETicketCoupon;
    /**
     * Constructor method for AncillaryServiceETicketNumberUpdate
     * @uses AncillaryServiceETicketNumberUpdate::setETicketNumber()
     * @uses AncillaryServiceETicketNumberUpdate::setETicketCoupon()
     * @param string $eTicketNumber
     * @param string $eTicketCoupon
     */
    public function __construct($eTicketNumber = null, $eTicketCoupon = null)
    {
        $this
            ->setETicketNumber($eTicketNumber)
            ->setETicketCoupon($eTicketCoupon);
    }
    /**
     * Get ETicketNumber value
     * @return string|null
     */
    public function getETicketNumber()
    {
        return $this->ETicketNumber;
    }
    /**
     * Set ETicketNumber value
     * @param string $eTicketNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate
     */
    public function setETicketNumber($eTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eTicketNumber) && !is_string($eTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eTicketNumber)), __LINE__);
        }
        $this->ETicketNumber = $eTicketNumber;
        return $this;
    }
    /**
     * Get ETicketCoupon value
     * @return string|null
     */
    public function getETicketCoupon()
    {
        return $this->ETicketCoupon;
    }
    /**
     * Set ETicketCoupon value
     * @param string $eTicketCoupon
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate
     */
    public function setETicketCoupon($eTicketCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($eTicketCoupon) && !is_string($eTicketCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eTicketCoupon)), __LINE__);
        }
        $this->ETicketCoupon = $eTicketCoupon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceETicketNumberUpdate
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
