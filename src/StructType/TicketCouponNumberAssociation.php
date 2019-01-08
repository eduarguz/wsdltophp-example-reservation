<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketCouponNumberAssociation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Etkt coupon number to which the EMD is associated.
 * - maxOccurs: 4
 * - minOccurs: 0
 * @subpackage Structs
 */
class TicketCouponNumberAssociation extends AbstractStructBase
{
    /**
     * The TicketCouponNumber
     * Meta informations extracted from the WSDL
     * - documentation: Coupon number of the ticket.
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var int[]
     */
    public $TicketCouponNumber;
    /**
     * The TicketReferenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The Etkt number.
     * - minOccurs: 0
     * @var string
     */
    public $TicketReferenceNumber;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * Constructor method for TicketCouponNumberAssociation
     * @uses TicketCouponNumberAssociation::setTicketCouponNumber()
     * @uses TicketCouponNumberAssociation::setTicketReferenceNumber()
     * @uses TicketCouponNumberAssociation::setTicketNumber()
     * @param int[] $ticketCouponNumber
     * @param string $ticketReferenceNumber
     * @param string $ticketNumber
     */
    public function __construct(array $ticketCouponNumber = array(), $ticketReferenceNumber = null, $ticketNumber = null)
    {
        $this
            ->setTicketCouponNumber($ticketCouponNumber)
            ->setTicketReferenceNumber($ticketReferenceNumber)
            ->setTicketNumber($ticketNumber);
    }
    /**
     * Get TicketCouponNumber value
     * @return int[]|null
     */
    public function getTicketCouponNumber()
    {
        return $this->TicketCouponNumber;
    }
    /**
     * Set TicketCouponNumber value
     * @throws \InvalidArgumentException
     * @param int[] $ticketCouponNumber
     * @return \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation
     */
    public function setTicketCouponNumber(array $ticketCouponNumber = array())
    {
        foreach ($ticketCouponNumber as $ticketCouponNumberAssociationTicketCouponNumberItem) {
            // validation for constraint: itemType
            if (!is_numeric($ticketCouponNumberAssociationTicketCouponNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The TicketCouponNumber property can only contain items of short, "%s" given', is_object($ticketCouponNumberAssociationTicketCouponNumberItem) ? get_class($ticketCouponNumberAssociationTicketCouponNumberItem) : gettype($ticketCouponNumberAssociationTicketCouponNumberItem)), __LINE__);
            }
        }
        $this->TicketCouponNumber = $ticketCouponNumber;
        return $this;
    }
    /**
     * Add item to TicketCouponNumber value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation
     */
    public function addToTicketCouponNumber($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The TicketCouponNumber property can only contain items of short, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketCouponNumber[] = $item;
        return $this;
    }
    /**
     * Get TicketReferenceNumber value
     * @return string|null
     */
    public function getTicketReferenceNumber()
    {
        return $this->TicketReferenceNumber;
    }
    /**
     * Set TicketReferenceNumber value
     * @param string $ticketReferenceNumber
     * @return \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation
     */
    public function setTicketReferenceNumber($ticketReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketReferenceNumber) && !is_string($ticketReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketReferenceNumber)), __LINE__);
        }
        $this->TicketReferenceNumber = $ticketReferenceNumber;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TicketCouponNumberAssociation
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
