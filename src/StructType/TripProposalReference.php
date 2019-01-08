<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TripProposalReference StructType
 * Meta informations extracted from the WSDL
 * - type: TripProposalReference
 * @subpackage Structs
 */
class TripProposalReference extends AbstractStructBase
{
    /**
     * The ProposalId
     * @var \Sabre\UpdateReservation\StructType\ProposalId
     */
    public $ProposalId;
    /**
     * The OptionIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OptionIds
     */
    public $OptionIds;
    /**
     * Constructor method for TripProposalReference
     * @uses TripProposalReference::setProposalId()
     * @uses TripProposalReference::setOptionIds()
     * @param \Sabre\UpdateReservation\StructType\ProposalId $proposalId
     * @param \Sabre\UpdateReservation\StructType\OptionIds $optionIds
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ProposalId $proposalId = null, \Sabre\UpdateReservation\StructType\OptionIds $optionIds = null)
    {
        $this
            ->setProposalId($proposalId)
            ->setOptionIds($optionIds);
    }
    /**
     * Get ProposalId value
     * @return \Sabre\UpdateReservation\StructType\ProposalId|null
     */
    public function getProposalId()
    {
        return $this->ProposalId;
    }
    /**
     * Set ProposalId value
     * @param \Sabre\UpdateReservation\StructType\ProposalId $proposalId
     * @return \Sabre\UpdateReservation\StructType\TripProposalReference
     */
    public function setProposalId(\Sabre\UpdateReservation\StructType\ProposalId $proposalId = null)
    {
        $this->ProposalId = $proposalId;
        return $this;
    }
    /**
     * Get OptionIds value
     * @return \Sabre\UpdateReservation\StructType\OptionIds|null
     */
    public function getOptionIds()
    {
        return $this->OptionIds;
    }
    /**
     * Set OptionIds value
     * @param \Sabre\UpdateReservation\StructType\OptionIds $optionIds
     * @return \Sabre\UpdateReservation\StructType\TripProposalReference
     */
    public function setOptionIds(\Sabre\UpdateReservation\StructType\OptionIds $optionIds = null)
    {
        $this->OptionIds = $optionIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TripProposalReference
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
