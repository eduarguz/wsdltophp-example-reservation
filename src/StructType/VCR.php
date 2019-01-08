<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VCR StructType
 * @subpackage Structs
 */
class VCR extends AbstractStructBase
{
    /**
     * The TicketingDocument
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingDocument[]
     */
    public $TicketingDocument;
    /**
     * Constructor method for VCR
     * @uses VCR::setTicketingDocument()
     * @param \Sabre\UpdateReservation\StructType\TicketingDocument[] $ticketingDocument
     */
    public function __construct(array $ticketingDocument = array())
    {
        $this
            ->setTicketingDocument($ticketingDocument);
    }
    /**
     * Get TicketingDocument value
     * @return \Sabre\UpdateReservation\StructType\TicketingDocument[]|null
     */
    public function getTicketingDocument()
    {
        return $this->TicketingDocument;
    }
    /**
     * Set TicketingDocument value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketingDocument[] $ticketingDocument
     * @return \Sabre\UpdateReservation\StructType\VCR
     */
    public function setTicketingDocument(array $ticketingDocument = array())
    {
        foreach ($ticketingDocument as $vCRTicketingDocumentItem) {
            // validation for constraint: itemType
            if (!$vCRTicketingDocumentItem instanceof \Sabre\UpdateReservation\StructType\TicketingDocument) {
                throw new \InvalidArgumentException(sprintf('The TicketingDocument property can only contain items of \Sabre\UpdateReservation\StructType\TicketingDocument, "%s" given', is_object($vCRTicketingDocumentItem) ? get_class($vCRTicketingDocumentItem) : gettype($vCRTicketingDocumentItem)), __LINE__);
            }
        }
        $this->TicketingDocument = $ticketingDocument;
        return $this;
    }
    /**
     * Add item to TicketingDocument value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\TicketingDocument $item
     * @return \Sabre\UpdateReservation\StructType\VCR
     */
    public function addToTicketingDocument(\Sabre\UpdateReservation\StructType\TicketingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\TicketingDocument) {
            throw new \InvalidArgumentException(sprintf('The TicketingDocument property can only contain items of \Sabre\UpdateReservation\StructType\TicketingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketingDocument[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VCR
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
