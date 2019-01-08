<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FqtvUpgradeRequests StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of Fqtv Upgrade requests associated to passenger and air.
 * @subpackage Structs
 */
class FqtvUpgradeRequests extends AbstractStructBase
{
    /**
     * The FqtvUpgradeRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest[]
     */
    public $FqtvUpgradeRequest;
    /**
     * Constructor method for FqtvUpgradeRequests
     * @uses FqtvUpgradeRequests::setFqtvUpgradeRequest()
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest[] $fqtvUpgradeRequest
     */
    public function __construct(array $fqtvUpgradeRequest = array())
    {
        $this
            ->setFqtvUpgradeRequest($fqtvUpgradeRequest);
    }
    /**
     * Get FqtvUpgradeRequest value
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest[]|null
     */
    public function getFqtvUpgradeRequest()
    {
        return $this->FqtvUpgradeRequest;
    }
    /**
     * Set FqtvUpgradeRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest[] $fqtvUpgradeRequest
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests
     */
    public function setFqtvUpgradeRequest(array $fqtvUpgradeRequest = array())
    {
        foreach ($fqtvUpgradeRequest as $fqtvUpgradeRequestsFqtvUpgradeRequestItem) {
            // validation for constraint: itemType
            if (!$fqtvUpgradeRequestsFqtvUpgradeRequestItem instanceof \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest) {
                throw new \InvalidArgumentException(sprintf('The FqtvUpgradeRequest property can only contain items of \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest, "%s" given', is_object($fqtvUpgradeRequestsFqtvUpgradeRequestItem) ? get_class($fqtvUpgradeRequestsFqtvUpgradeRequestItem) : gettype($fqtvUpgradeRequestsFqtvUpgradeRequestItem)), __LINE__);
            }
        }
        $this->FqtvUpgradeRequest = $fqtvUpgradeRequest;
        return $this;
    }
    /**
     * Add item to FqtvUpgradeRequest value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest $item
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests
     */
    public function addToFqtvUpgradeRequest(\Sabre\UpdateReservation\StructType\FqtvUpgradeRequest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest) {
            throw new \InvalidArgumentException(sprintf('The FqtvUpgradeRequest property can only contain items of \Sabre\UpdateReservation\StructType\FqtvUpgradeRequest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FqtvUpgradeRequest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FqtvUpgradeRequests
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
