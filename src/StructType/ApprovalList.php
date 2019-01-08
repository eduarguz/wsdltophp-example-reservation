<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApprovalList StructType
 * @subpackage Structs
 */
class ApprovalList extends AbstractStructBase
{
    /**
     * The Approval
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PaymentCardApproval[]
     */
    public $Approval;
    /**
     * Constructor method for ApprovalList
     * @uses ApprovalList::setApproval()
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApproval[] $approval
     */
    public function __construct(array $approval = array())
    {
        $this
            ->setApproval($approval);
    }
    /**
     * Get Approval value
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval[]|null
     */
    public function getApproval()
    {
        return $this->Approval;
    }
    /**
     * Set Approval value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApproval[] $approval
     * @return \Sabre\UpdateReservation\StructType\ApprovalList
     */
    public function setApproval(array $approval = array())
    {
        foreach ($approval as $approvalListApprovalItem) {
            // validation for constraint: itemType
            if (!$approvalListApprovalItem instanceof \Sabre\UpdateReservation\StructType\PaymentCardApproval) {
                throw new \InvalidArgumentException(sprintf('The Approval property can only contain items of \Sabre\UpdateReservation\StructType\PaymentCardApproval, "%s" given', is_object($approvalListApprovalItem) ? get_class($approvalListApprovalItem) : gettype($approvalListApprovalItem)), __LINE__);
            }
        }
        $this->Approval = $approval;
        return $this;
    }
    /**
     * Add item to Approval value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PaymentCardApproval $item
     * @return \Sabre\UpdateReservation\StructType\ApprovalList
     */
    public function addToApproval(\Sabre\UpdateReservation\StructType\PaymentCardApproval $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PaymentCardApproval) {
            throw new \InvalidArgumentException(sprintf('The Approval property can only contain items of \Sabre\UpdateReservation\StructType\PaymentCardApproval, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Approval[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ApprovalList
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
