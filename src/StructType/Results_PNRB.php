<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Results.PNRB StructType
 * @subpackage Structs
 */
class Results_PNRB extends AbstractStructBase
{
    /**
     * The Request
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Request
     */
    public $Request;
    /**
     * The UpdateResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\UpdateResult[]
     */
    public $UpdateResult;
    /**
     * Constructor method for Results.PNRB
     * @uses Results_PNRB::setRequest()
     * @uses Results_PNRB::setUpdateResult()
     * @param \Sabre\UpdateReservation\StructType\Request $request
     * @param \Sabre\UpdateReservation\StructType\UpdateResult[] $updateResult
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Request $request = null, array $updateResult = array())
    {
        $this
            ->setRequest($request)
            ->setUpdateResult($updateResult);
    }
    /**
     * Get Request value
     * @return \Sabre\UpdateReservation\StructType\Request|null
     */
    public function getRequest()
    {
        return $this->Request;
    }
    /**
     * Set Request value
     * @param \Sabre\UpdateReservation\StructType\Request $request
     * @return \Sabre\UpdateReservation\StructType\Results_PNRB
     */
    public function setRequest(\Sabre\UpdateReservation\StructType\Request $request = null)
    {
        $this->Request = $request;
        return $this;
    }
    /**
     * Get UpdateResult value
     * @return \Sabre\UpdateReservation\StructType\UpdateResult[]|null
     */
    public function getUpdateResult()
    {
        return $this->UpdateResult;
    }
    /**
     * Set UpdateResult value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\UpdateResult[] $updateResult
     * @return \Sabre\UpdateReservation\StructType\Results_PNRB
     */
    public function setUpdateResult(array $updateResult = array())
    {
        foreach ($updateResult as $results_PNRBUpdateResultItem) {
            // validation for constraint: itemType
            if (!$results_PNRBUpdateResultItem instanceof \Sabre\UpdateReservation\StructType\UpdateResult) {
                throw new \InvalidArgumentException(sprintf('The UpdateResult property can only contain items of \Sabre\UpdateReservation\StructType\UpdateResult, "%s" given', is_object($results_PNRBUpdateResultItem) ? get_class($results_PNRBUpdateResultItem) : gettype($results_PNRBUpdateResultItem)), __LINE__);
            }
        }
        $this->UpdateResult = $updateResult;
        return $this;
    }
    /**
     * Add item to UpdateResult value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\UpdateResult $item
     * @return \Sabre\UpdateReservation\StructType\Results_PNRB
     */
    public function addToUpdateResult(\Sabre\UpdateReservation\StructType\UpdateResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\UpdateResult) {
            throw new \InvalidArgumentException(sprintf('The UpdateResult property can only contain items of \Sabre\UpdateReservation\StructType\UpdateResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UpdateResult[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Results_PNRB
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
