<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Loyalty.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: These are the formats for Frequent Flyer (FF) - add frequent flyer number FF(carrier code)(number)-(name number) FFUS87658768-2.1 - add frequent flyer number using a specific passenger name FF(carrier code)(number)-(name)
 * FFBA12345678-BRIAND/FREDERIC - add frequent flyer number on LAN airlines for new customer numbers in Argentina, Ecuador and Peru FF(carrier code LP)(number) FFLP34593001 - delete a frequent flyer number FF(frequent flyer line number)¤ FF1¤ - delete
 * all frequent flyer numbers FF¤ALL - delete range of frequent flyer numbers FF(first FF line #)-(last FF line #)¤ FF1-4¤ - delete specific FF numbers FF(FF line #),(FF line #)¤ FF1,3¤ - modify FF info FF(line #)¤(carrier code)(FF #)
 * FF1¤4UA5522123 To add name number: FF1¤4UA5522123-3.1 | TODO - what is relationship to FrequentFlyer.PNRB. If different, then why is comment the same?
 * @subpackage Structs
 */
class Loyalty_PNRB extends AbstractStructBase
{
    /**
     * The SupplierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SupplierCode;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Number;
    /**
     * The TierLevelNumber
     * Meta informations extracted from the WSDL
     * - documentation: Represents the level that pax reached within the loyalty program. | Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - minOccurs: 0
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $TierLevelNumber;
    /**
     * The ShortText
     * Meta informations extracted from the WSDL
     * - documentation: Miscellaneous remark regarding FF.
     * - minOccurs: 0
     * @var string
     */
    public $ShortText;
    /**
     * The ReceivingCarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Receiving carrier code for FF supplier.
     * - minOccurs: 0
     * @var string
     */
    public $ReceivingCarrierCode;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - documentation: Indication of the validity of the Frequent Flyer, loyalty program confirmation.
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: unique identifier identifying a specific FrequentFlyer instance
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for Loyalty.PNRB
     * @uses Loyalty_PNRB::setSupplierCode()
     * @uses Loyalty_PNRB::setNumber()
     * @uses Loyalty_PNRB::setTierLevelNumber()
     * @uses Loyalty_PNRB::setShortText()
     * @uses Loyalty_PNRB::setReceivingCarrierCode()
     * @uses Loyalty_PNRB::setStatusCode()
     * @uses Loyalty_PNRB::setId()
     * @uses Loyalty_PNRB::setOp()
     * @param string $supplierCode
     * @param string $number
     * @param int $tierLevelNumber
     * @param string $shortText
     * @param string $receivingCarrierCode
     * @param string $statusCode
     * @param string $id
     * @param string $op
     */
    public function __construct($supplierCode = null, $number = null, $tierLevelNumber = null, $shortText = null, $receivingCarrierCode = null, $statusCode = null, $id = null, $op = null)
    {
        $this
            ->setSupplierCode($supplierCode)
            ->setNumber($number)
            ->setTierLevelNumber($tierLevelNumber)
            ->setShortText($shortText)
            ->setReceivingCarrierCode($receivingCarrierCode)
            ->setStatusCode($statusCode)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode()
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setSupplierCode($supplierCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get TierLevelNumber value
     * @return int|null
     */
    public function getTierLevelNumber()
    {
        return $this->TierLevelNumber;
    }
    /**
     * Set TierLevelNumber value
     * @param int $tierLevelNumber
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setTierLevelNumber($tierLevelNumber = null)
    {
        // validation for constraint: maxInclusive
        if ($tierLevelNumber > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $tierLevelNumber), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($tierLevelNumber < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $tierLevelNumber), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($tierLevelNumber) && !is_numeric($tierLevelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tierLevelNumber)), __LINE__);
        }
        $this->TierLevelNumber = $tierLevelNumber;
        return $this;
    }
    /**
     * Get ShortText value
     * @return string|null
     */
    public function getShortText()
    {
        return $this->ShortText;
    }
    /**
     * Set ShortText value
     * @param string $shortText
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setShortText($shortText = null)
    {
        // validation for constraint: string
        if (!is_null($shortText) && !is_string($shortText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortText)), __LINE__);
        }
        $this->ShortText = $shortText;
        return $this;
    }
    /**
     * Get ReceivingCarrierCode value
     * @return string|null
     */
    public function getReceivingCarrierCode()
    {
        return $this->ReceivingCarrierCode;
    }
    /**
     * Set ReceivingCarrierCode value
     * @param string $receivingCarrierCode
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setReceivingCarrierCode($receivingCarrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($receivingCarrierCode) && !is_string($receivingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivingCarrierCode)), __LINE__);
        }
        $this->ReceivingCarrierCode = $receivingCarrierCode;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Loyalty_PNRB
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
