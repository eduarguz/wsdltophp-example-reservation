<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProposalId StructType
 * Meta informations extracted from the WSDL
 * - documentation: ID of TripProposal related to PNR
 * - pattern: [0-9A-Z]{10}
 * @subpackage Structs
 */
class ProposalId extends AbstractStructBase
{
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - pattern: [0-9A-Z]{10}
     * @var string
     */
    public $_;
    /**
     * The snapshotId
     * Meta informations extracted from the WSDL
     * - documentation: SnapshotID defining version of TripProposal
     * - pattern: [a-zA-Z0-9\-]{36}
     * @var string
     */
    public $snapshotId;
    /**
     * Constructor method for ProposalId
     * @uses ProposalId::set_()
     * @uses ProposalId::setSnapshotId()
     * @param string $_
     * @param string $snapshotId
     */
    public function __construct($_ = null, $snapshotId = null)
    {
        $this
            ->set_($_)
            ->setSnapshotId($snapshotId);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\ProposalId
     */
    public function set_($_ = null)
    {
        // validation for constraint: pattern
        if (is_scalar($_) && !preg_match('/[0-9A-Z]{10}/', $_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{10}", "%s" given', var_export($_, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get snapshotId value
     * @return string|null
     */
    public function getSnapshotId()
    {
        return $this->snapshotId;
    }
    /**
     * Set snapshotId value
     * @param string $snapshotId
     * @return \Sabre\UpdateReservation\StructType\ProposalId
     */
    public function setSnapshotId($snapshotId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($snapshotId) && !preg_match('/[a-zA-Z0-9\\-]{36}/', $snapshotId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z0-9\-]{36}", "%s" given', var_export($snapshotId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($snapshotId) && !is_string($snapshotId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($snapshotId)), __LINE__);
        }
        $this->snapshotId = $snapshotId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProposalId
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
