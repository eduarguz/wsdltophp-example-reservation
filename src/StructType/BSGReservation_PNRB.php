<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSGReservation.PNRB StructType
 * @subpackage Structs
 */
class BSGReservation_PNRB extends AbstractStructBase
{
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB
     */
    public $Segments;
    /**
     * The TicketingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB
     */
    public $TicketingInfo;
    /**
     * The AssociatedReferenceInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation
     */
    public $AssociatedReferenceInformation;
    /**
     * Constructor method for BSGReservation.PNRB
     * @uses BSGReservation_PNRB::setSegments()
     * @uses BSGReservation_PNRB::setTicketingInfo()
     * @uses BSGReservation_PNRB::setAssociatedReferenceInformation()
     * @param \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $segments
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingInfo
     * @param \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $segments = null, \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingInfo = null, \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation = null)
    {
        $this
            ->setSegments($segments)
            ->setTicketingInfo($ticketingInfo)
            ->setAssociatedReferenceInformation($associatedReferenceInformation);
    }
    /**
     * Get Segments value
     * @return \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $segments
     * @return \Sabre\UpdateReservation\StructType\BSGReservation_PNRB
     */
    public function setSegments(\Sabre\UpdateReservation\StructType\AirSegmentSellFromBSGInventory_PNRB $segments = null)
    {
        $this->Segments = $segments;
        return $this;
    }
    /**
     * Get TicketingInfo value
     * @return \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB|null
     */
    public function getTicketingInfo()
    {
        return $this->TicketingInfo;
    }
    /**
     * Set TicketingInfo value
     * @param \Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingInfo
     * @return \Sabre\UpdateReservation\StructType\BSGReservation_PNRB
     */
    public function setTicketingInfo(\Sabre\UpdateReservation\StructType\TicketingTimeLimit_PNRB $ticketingInfo = null)
    {
        $this->TicketingInfo = $ticketingInfo;
        return $this;
    }
    /**
     * Get AssociatedReferenceInformation value
     * @return \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation|null
     */
    public function getAssociatedReferenceInformation()
    {
        return $this->AssociatedReferenceInformation;
    }
    /**
     * Set AssociatedReferenceInformation value
     * @param \Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation
     * @return \Sabre\UpdateReservation\StructType\BSGReservation_PNRB
     */
    public function setAssociatedReferenceInformation(\Sabre\UpdateReservation\StructType\BSGAssociatedReferenceInformation $associatedReferenceInformation = null)
    {
        $this->AssociatedReferenceInformation = $associatedReferenceInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BSGReservation_PNRB
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
