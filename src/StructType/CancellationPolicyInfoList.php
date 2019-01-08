<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancellationPolicyInfoList StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details specifics of the cancellation policy, typically the times determining the penalty period and the penalties incurred for cancellation.
 * @subpackage Structs
 */
class CancellationPolicyInfoList extends AbstractStructBase
{
    /**
     * The CancelPolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * @var \Sabre\UpdateReservation\StructType\CancelPolicyInfo[]
     */
    public $CancelPolicyInfo;
    /**
     * Constructor method for CancellationPolicyInfoList
     * @uses CancellationPolicyInfoList::setCancelPolicyInfo()
     * @param \Sabre\UpdateReservation\StructType\CancelPolicyInfo[] $cancelPolicyInfo
     */
    public function __construct(array $cancelPolicyInfo = array())
    {
        $this
            ->setCancelPolicyInfo($cancelPolicyInfo);
    }
    /**
     * Get CancelPolicyInfo value
     * @return \Sabre\UpdateReservation\StructType\CancelPolicyInfo[]|null
     */
    public function getCancelPolicyInfo()
    {
        return $this->CancelPolicyInfo;
    }
    /**
     * Set CancelPolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CancelPolicyInfo[] $cancelPolicyInfo
     * @return \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList
     */
    public function setCancelPolicyInfo(array $cancelPolicyInfo = array())
    {
        foreach ($cancelPolicyInfo as $cancellationPolicyInfoListCancelPolicyInfoItem) {
            // validation for constraint: itemType
            if (!$cancellationPolicyInfoListCancelPolicyInfoItem instanceof \Sabre\UpdateReservation\StructType\CancelPolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The CancelPolicyInfo property can only contain items of \Sabre\UpdateReservation\StructType\CancelPolicyInfo, "%s" given', is_object($cancellationPolicyInfoListCancelPolicyInfoItem) ? get_class($cancellationPolicyInfoListCancelPolicyInfoItem) : gettype($cancellationPolicyInfoListCancelPolicyInfoItem)), __LINE__);
            }
        }
        $this->CancelPolicyInfo = $cancelPolicyInfo;
        return $this;
    }
    /**
     * Add item to CancelPolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CancelPolicyInfo $item
     * @return \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList
     */
    public function addToCancelPolicyInfo(\Sabre\UpdateReservation\StructType\CancelPolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CancelPolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The CancelPolicyInfo property can only contain items of \Sabre\UpdateReservation\StructType\CancelPolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelPolicyInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CancellationPolicyInfoList
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
