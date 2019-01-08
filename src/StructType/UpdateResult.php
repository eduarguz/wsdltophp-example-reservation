<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateResult StructType
 * @subpackage Structs
 */
class UpdateResult extends AbstractStructBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Item[]
     */
    public $Item;
    /**
     * The UpdateId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $UpdateId;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Success, Failure
     * @var string
     */
    public $Status;
    /**
     * Constructor method for UpdateResult
     * @uses UpdateResult::setItem()
     * @uses UpdateResult::setUpdateId()
     * @uses UpdateResult::setStatus()
     * @param \Sabre\UpdateReservation\StructType\Item[] $item
     * @param string $updateId
     * @param string $status
     */
    public function __construct(array $item = array(), $updateId = null, $status = null)
    {
        $this
            ->setItem($item)
            ->setUpdateId($updateId)
            ->setStatus($status);
    }
    /**
     * Get Item value
     * @return \Sabre\UpdateReservation\StructType\Item[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Item[] $item
     * @return \Sabre\UpdateReservation\StructType\UpdateResult
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $updateResultItemItem) {
            // validation for constraint: itemType
            if (!$updateResultItemItem instanceof \Sabre\UpdateReservation\StructType\Item) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Sabre\UpdateReservation\StructType\Item, "%s" given', is_object($updateResultItemItem) ? get_class($updateResultItemItem) : gettype($updateResultItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Item $item
     * @return \Sabre\UpdateReservation\StructType\UpdateResult
     */
    public function addToItem(\Sabre\UpdateReservation\StructType\Item $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Item) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Sabre\UpdateReservation\StructType\Item, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Get UpdateId value
     * @return string|null
     */
    public function getUpdateId()
    {
        return $this->UpdateId;
    }
    /**
     * Set UpdateId value
     * @param string $updateId
     * @return \Sabre\UpdateReservation\StructType\UpdateResult
     */
    public function setUpdateId($updateId = null)
    {
        // validation for constraint: string
        if (!is_null($updateId) && !is_string($updateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateId)), __LINE__);
        }
        $this->UpdateId = $updateId;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Sabre\UpdateReservation\StructType\UpdateResult
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\UpdateResult
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
