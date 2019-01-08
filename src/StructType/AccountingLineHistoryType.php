<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingLineHistoryType StructType
 * @subpackage Structs
 */
class AccountingLineHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The AccountingLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountingLine;
    /**
     * Constructor method for AccountingLineHistoryType
     * @uses AccountingLineHistoryType::setHistoryAction()
     * @uses AccountingLineHistoryType::setAccountingLine()
     * @param string $historyAction
     * @param string $accountingLine
     */
    public function __construct($historyAction = null, $accountingLine = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setAccountingLine($accountingLine);
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
     * @return \Sabre\UpdateReservation\StructType\AccountingLineHistoryType
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
     * Get AccountingLine value
     * @return string|null
     */
    public function getAccountingLine()
    {
        return $this->AccountingLine;
    }
    /**
     * Set AccountingLine value
     * @param string $accountingLine
     * @return \Sabre\UpdateReservation\StructType\AccountingLineHistoryType
     */
    public function setAccountingLine($accountingLine = null)
    {
        // validation for constraint: string
        if (!is_null($accountingLine) && !is_string($accountingLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountingLine)), __LINE__);
        }
        $this->AccountingLine = $accountingLine;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingLineHistoryType
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
