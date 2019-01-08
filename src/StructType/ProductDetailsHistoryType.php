<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductDetailsHistoryType StructType
 * @subpackage Structs
 */
class ProductDetailsHistoryType extends ProductDetailsType
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The HistoryTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryTimestamp;
    /**
     * The ProductId
     * @var string
     */
    public $ProductId;
    /**
     * Constructor method for ProductDetailsHistoryType
     * @uses ProductDetailsHistoryType::setHistoryAction()
     * @uses ProductDetailsHistoryType::setHistoryTimestamp()
     * @uses ProductDetailsHistoryType::setProductId()
     * @param string $historyAction
     * @param string $historyTimestamp
     * @param string $productId
     */
    public function __construct($historyAction = null, $historyTimestamp = null, $productId = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setHistoryTimestamp($historyTimestamp)
            ->setProductId($productId);
    }
    /**
     * Get HistoryAction value
     * @return string|null
     */
    public function getHistoryAction()
    {
        return $this->HistoryAction;
    }
    /**
     * Set HistoryAction value
     * @param string $historyAction
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType
     */
    public function setHistoryAction($historyAction = null)
    {
        // validation for constraint: string
        if (!is_null($historyAction) && !is_string($historyAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyAction)), __LINE__);
        }
        $this->HistoryAction = $historyAction;
        return $this;
    }
    /**
     * Get HistoryTimestamp value
     * @return string|null
     */
    public function getHistoryTimestamp()
    {
        return $this->HistoryTimestamp;
    }
    /**
     * Set HistoryTimestamp value
     * @param string $historyTimestamp
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType
     */
    public function setHistoryTimestamp($historyTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($historyTimestamp) && !is_string($historyTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyTimestamp)), __LINE__);
        }
        $this->HistoryTimestamp = $historyTimestamp;
        return $this;
    }
    /**
     * Get ProductId value
     * @return string|null
     */
    public function getProductId()
    {
        return $this->ProductId;
    }
    /**
     * Set ProductId value
     * @param string $productId
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType
     */
    public function setProductId($productId = null)
    {
        // validation for constraint: string
        if (!is_null($productId) && !is_string($productId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productId)), __LINE__);
        }
        $this->ProductId = $productId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsHistoryType
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
