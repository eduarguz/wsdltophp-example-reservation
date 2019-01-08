<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingDocument StructType
 * @subpackage Structs
 */
class TicketingDocument extends AbstractStructBase
{
    /**
     * The ServiceCoupon
     * Meta informations extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceCoupon[]
     */
    public $ServiceCoupon;
    /**
     * The accountingCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $accountingCode;
    /**
     * The checkDigit
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $checkDigit;
    /**
     * The formNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $formNumber;
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The serialNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $serialNumber;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $type;
    /**
     * Constructor method for TicketingDocument
     * @uses TicketingDocument::setServiceCoupon()
     * @uses TicketingDocument::setAccountingCode()
     * @uses TicketingDocument::setCheckDigit()
     * @uses TicketingDocument::setFormNumber()
     * @uses TicketingDocument::setNumber()
     * @uses TicketingDocument::setSerialNumber()
     * @uses TicketingDocument::setType()
     * @param \Sabre\UpdateReservation\StructType\ServiceCoupon[] $serviceCoupon
     * @param string $accountingCode
     * @param string $checkDigit
     * @param string $formNumber
     * @param string $number
     * @param string $serialNumber
     * @param string $type
     */
    public function __construct(array $serviceCoupon = array(), $accountingCode = null, $checkDigit = null, $formNumber = null, $number = null, $serialNumber = null, $type = null)
    {
        $this
            ->setServiceCoupon($serviceCoupon)
            ->setAccountingCode($accountingCode)
            ->setCheckDigit($checkDigit)
            ->setFormNumber($formNumber)
            ->setNumber($number)
            ->setSerialNumber($serialNumber)
            ->setType($type);
    }
    /**
     * Get ServiceCoupon value
     * @return \Sabre\UpdateReservation\StructType\ServiceCoupon[]|null
     */
    public function getServiceCoupon()
    {
        return $this->ServiceCoupon;
    }
    /**
     * Set ServiceCoupon value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ServiceCoupon[] $serviceCoupon
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setServiceCoupon(array $serviceCoupon = array())
    {
        foreach ($serviceCoupon as $ticketingDocumentServiceCouponItem) {
            // validation for constraint: itemType
            if (!$ticketingDocumentServiceCouponItem instanceof \Sabre\UpdateReservation\StructType\ServiceCoupon) {
                throw new \InvalidArgumentException(sprintf('The ServiceCoupon property can only contain items of \Sabre\UpdateReservation\StructType\ServiceCoupon, "%s" given', is_object($ticketingDocumentServiceCouponItem) ? get_class($ticketingDocumentServiceCouponItem) : gettype($ticketingDocumentServiceCouponItem)), __LINE__);
            }
        }
        $this->ServiceCoupon = $serviceCoupon;
        return $this;
    }
    /**
     * Add item to ServiceCoupon value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ServiceCoupon $item
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function addToServiceCoupon(\Sabre\UpdateReservation\StructType\ServiceCoupon $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ServiceCoupon) {
            throw new \InvalidArgumentException(sprintf('The ServiceCoupon property can only contain items of \Sabre\UpdateReservation\StructType\ServiceCoupon, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceCoupon[] = $item;
        return $this;
    }
    /**
     * Get accountingCode value
     * @return string|null
     */
    public function getAccountingCode()
    {
        return $this->accountingCode;
    }
    /**
     * Set accountingCode value
     * @param string $accountingCode
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setAccountingCode($accountingCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountingCode) && !is_string($accountingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountingCode)), __LINE__);
        }
        $this->accountingCode = $accountingCode;
        return $this;
    }
    /**
     * Get checkDigit value
     * @return string|null
     */
    public function getCheckDigit()
    {
        return $this->checkDigit;
    }
    /**
     * Set checkDigit value
     * @param string $checkDigit
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setCheckDigit($checkDigit = null)
    {
        // validation for constraint: string
        if (!is_null($checkDigit) && !is_string($checkDigit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkDigit)), __LINE__);
        }
        $this->checkDigit = $checkDigit;
        return $this;
    }
    /**
     * Get formNumber value
     * @return string|null
     */
    public function getFormNumber()
    {
        return $this->formNumber;
    }
    /**
     * Set formNumber value
     * @param string $formNumber
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setFormNumber($formNumber = null)
    {
        // validation for constraint: string
        if (!is_null($formNumber) && !is_string($formNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formNumber)), __LINE__);
        }
        $this->formNumber = $formNumber;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get serialNumber value
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
    /**
     * Set serialNumber value
     * @param string $serialNumber
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setSerialNumber($serialNumber = null)
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serialNumber)), __LINE__);
        }
        $this->serialNumber = $serialNumber;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument
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
