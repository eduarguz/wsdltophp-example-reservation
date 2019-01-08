<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingTransactionAmountWithRule StructType
 * @subpackage Structs
 */
class AccountingTransactionAmountWithRule extends AccountingTransactionAmount
{
    /**
     * The RuleSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RuleSet
     */
    public $RuleSet;
    /**
     * Constructor method for AccountingTransactionAmountWithRule
     * @uses AccountingTransactionAmountWithRule::setRuleSet()
     * @param \Sabre\UpdateReservation\StructType\RuleSet $ruleSet
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RuleSet $ruleSet = null)
    {
        $this
            ->setRuleSet($ruleSet);
    }
    /**
     * Get RuleSet value
     * @return \Sabre\UpdateReservation\StructType\RuleSet|null
     */
    public function getRuleSet()
    {
        return $this->RuleSet;
    }
    /**
     * Set RuleSet value
     * @param \Sabre\UpdateReservation\StructType\RuleSet $ruleSet
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule
     */
    public function setRuleSet(\Sabre\UpdateReservation\StructType\RuleSet $ruleSet = null)
    {
        $this->RuleSet = $ruleSet;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AccountingTransactionAmountWithRule
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
