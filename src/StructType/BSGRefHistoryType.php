<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BSGRefHistoryType StructType
 * @subpackage Structs
 */
class BSGRefHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The BSGPNRRecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BSGPNRRecordLocator;
    /**
     * The ActiveAssocPnr
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ActiveAssocPnr;
    /**
     * The CancelAssocPnr
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CancelAssocPnr;
    /**
     * Constructor method for BSGRefHistoryType
     * @uses BSGRefHistoryType::setHistoryAction()
     * @uses BSGRefHistoryType::setBSGPNRRecordLocator()
     * @uses BSGRefHistoryType::setActiveAssocPnr()
     * @uses BSGRefHistoryType::setCancelAssocPnr()
     * @param string $historyAction
     * @param string $bSGPNRRecordLocator
     * @param bool $activeAssocPnr
     * @param bool $cancelAssocPnr
     */
    public function __construct($historyAction = null, $bSGPNRRecordLocator = null, $activeAssocPnr = null, $cancelAssocPnr = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setBSGPNRRecordLocator($bSGPNRRecordLocator)
            ->setActiveAssocPnr($activeAssocPnr)
            ->setCancelAssocPnr($cancelAssocPnr);
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
     * @return \Sabre\UpdateReservation\StructType\BSGRefHistoryType
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
     * Get BSGPNRRecordLocator value
     * @return string|null
     */
    public function getBSGPNRRecordLocator()
    {
        return $this->BSGPNRRecordLocator;
    }
    /**
     * Set BSGPNRRecordLocator value
     * @param string $bSGPNRRecordLocator
     * @return \Sabre\UpdateReservation\StructType\BSGRefHistoryType
     */
    public function setBSGPNRRecordLocator($bSGPNRRecordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($bSGPNRRecordLocator) && !is_string($bSGPNRRecordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bSGPNRRecordLocator)), __LINE__);
        }
        $this->BSGPNRRecordLocator = $bSGPNRRecordLocator;
        return $this;
    }
    /**
     * Get ActiveAssocPnr value
     * @return bool|null
     */
    public function getActiveAssocPnr()
    {
        return $this->ActiveAssocPnr;
    }
    /**
     * Set ActiveAssocPnr value
     * @param bool $activeAssocPnr
     * @return \Sabre\UpdateReservation\StructType\BSGRefHistoryType
     */
    public function setActiveAssocPnr($activeAssocPnr = null)
    {
        // validation for constraint: boolean
        if (!is_null($activeAssocPnr) && !is_bool($activeAssocPnr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($activeAssocPnr)), __LINE__);
        }
        $this->ActiveAssocPnr = $activeAssocPnr;
        return $this;
    }
    /**
     * Get CancelAssocPnr value
     * @return bool|null
     */
    public function getCancelAssocPnr()
    {
        return $this->CancelAssocPnr;
    }
    /**
     * Set CancelAssocPnr value
     * @param bool $cancelAssocPnr
     * @return \Sabre\UpdateReservation\StructType\BSGRefHistoryType
     */
    public function setCancelAssocPnr($cancelAssocPnr = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelAssocPnr) && !is_bool($cancelAssocPnr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cancelAssocPnr)), __LINE__);
        }
        $this->CancelAssocPnr = $cancelAssocPnr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BSGRefHistoryType
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
