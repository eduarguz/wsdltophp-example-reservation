<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketDetailsUpdate.PNRB StructType
 * @subpackage Structs
 */
class TicketDetailsUpdate_PNRB extends AbstractStructBase
{
    /**
     * The TicketDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketDetails;
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
     * Constructor method for TicketDetailsUpdate.PNRB
     * @uses TicketDetailsUpdate_PNRB::setTicketDetails()
     * @uses TicketDetailsUpdate_PNRB::setId()
     * @uses TicketDetailsUpdate_PNRB::setOp()
     * @param string $ticketDetails
     * @param string $id
     * @param string $op
     */
    public function __construct($ticketDetails = null, $id = null, $op = null)
    {
        $this
            ->setTicketDetails($ticketDetails)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get TicketDetails value
     * @return string|null
     */
    public function getTicketDetails()
    {
        return $this->TicketDetails;
    }
    /**
     * Set TicketDetails value
     * @param string $ticketDetails
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB
     */
    public function setTicketDetails($ticketDetails = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDetails) && !is_string($ticketDetails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDetails)), __LINE__);
        }
        $this->TicketDetails = $ticketDetails;
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\TicketDetailsUpdate_PNRB
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
