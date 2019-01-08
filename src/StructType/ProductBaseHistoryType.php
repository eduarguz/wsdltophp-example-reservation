<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductBaseHistoryType StructType
 * @subpackage Structs
 */
class ProductBaseHistoryType extends ProductBaseType
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
     * Constructor method for ProductBaseHistoryType
     * @uses ProductBaseHistoryType::setHistoryAction()
     * @uses ProductBaseHistoryType::setHistoryTimestamp()
     * @param string $historyAction
     * @param string $historyTimestamp
     */
    public function __construct($historyAction = null, $historyTimestamp = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setHistoryTimestamp($historyTimestamp);
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
     * @return \Sabre\UpdateReservation\StructType\ProductBaseHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\ProductBaseHistoryType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductBaseHistoryType
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
