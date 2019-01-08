<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServiceRuleSetPartialUpdate.PNRB StructType
 * @subpackage Structs
 */
class AncillaryServiceRuleSetPartialUpdate_PNRB extends AbstractStructBase
{
    /**
     * The RuleSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\RuleSet
     */
    public $RuleSet;
    /**
     * Constructor method for AncillaryServiceRuleSetPartialUpdate.PNRB
     * @uses AncillaryServiceRuleSetPartialUpdate_PNRB::setRuleSet()
     * @param \Sabre\UpdateReservation\StructType\RuleSet $ruleSet
     */
    public function __construct(\Sabre\UpdateReservation\StructType\RuleSet $ruleSet = null)
    {
        $this
            ->setRuleSet($ruleSet);
    }
    /**
     * Get RuleSet value
     * @return \Sabre\UpdateReservation\StructType\RuleSet
     */
    public function getRuleSet()
    {
        return $this->RuleSet;
    }
    /**
     * Set RuleSet value
     * @param \Sabre\UpdateReservation\StructType\RuleSet $ruleSet
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServiceRuleSetPartialUpdate_PNRB
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
