<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedPNRSummary.PNRB StructType
 * @subpackage Structs
 */
class AssociatedPNRSummary_PNRB extends AbstractStructBase
{
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecordLocator;
    /**
     * The NumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Used for Numeric values, from 1 to 9999 inclusive. | Used for Numeric values, from 1 to 9999 inclusive.
     * - maxInclusive: 99999
     * - minInclusive: 0
     * @var int
     */
    public $NumberOfSeats;
    /**
     * The TicketingTimeLimitInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketingTimeLimitInfo;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The id
     * Meta informations extracted from the WSDL
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
     * Constructor method for AssociatedPNRSummary.PNRB
     * @uses AssociatedPNRSummary_PNRB::setRecordLocator()
     * @uses AssociatedPNRSummary_PNRB::setNumberOfSeats()
     * @uses AssociatedPNRSummary_PNRB::setTicketingTimeLimitInfo()
     * @uses AssociatedPNRSummary_PNRB::setFreeText()
     * @uses AssociatedPNRSummary_PNRB::setId()
     * @uses AssociatedPNRSummary_PNRB::setOp()
     * @param string $recordLocator
     * @param int $numberOfSeats
     * @param string $ticketingTimeLimitInfo
     * @param string $freeText
     * @param string $id
     * @param string $op
     */
    public function __construct($recordLocator = null, $numberOfSeats = null, $ticketingTimeLimitInfo = null, $freeText = null, $id = null, $op = null)
    {
        $this
            ->setRecordLocator($recordLocator)
            ->setNumberOfSeats($numberOfSeats)
            ->setTicketingTimeLimitInfo($ticketingTimeLimitInfo)
            ->setFreeText($freeText)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get NumberOfSeats value
     * @return int|null
     */
    public function getNumberOfSeats()
    {
        return $this->NumberOfSeats;
    }
    /**
     * Set NumberOfSeats value
     * @param int $numberOfSeats
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
     */
    public function setNumberOfSeats($numberOfSeats = null)
    {
        // validation for constraint: maxInclusive
        if ($numberOfSeats > 99999) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99999, "%s" given', $numberOfSeats), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($numberOfSeats < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $numberOfSeats), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($numberOfSeats) && !is_numeric($numberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeats)), __LINE__);
        }
        $this->NumberOfSeats = $numberOfSeats;
        return $this;
    }
    /**
     * Get TicketingTimeLimitInfo value
     * @return string|null
     */
    public function getTicketingTimeLimitInfo()
    {
        return $this->TicketingTimeLimitInfo;
    }
    /**
     * Set TicketingTimeLimitInfo value
     * @param string $ticketingTimeLimitInfo
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
     */
    public function setTicketingTimeLimitInfo($ticketingTimeLimitInfo = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingTimeLimitInfo) && !is_string($ticketingTimeLimitInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingTimeLimitInfo)), __LINE__);
        }
        $this->TicketingTimeLimitInfo = $ticketingTimeLimitInfo;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
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
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AssociatedPNRSummary_PNRB
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
