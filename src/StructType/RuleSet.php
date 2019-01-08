<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleSet StructType
 * Meta informations extracted from the WSDL
 * - documentation: Needed to keep track of companion benefits for example. Will come from the Rules Processor | Needed to keep track of companion benefits for example. Will come from the Rules Processor | Needed to keep track of companion benefits for
 * example. Will come from the Rules Processor | Needed to keep track of companion benefits for example. Will come from the Rules Processor
 * - minOccurs: 0
 * - maxLength: 20
 * - minLength: 1
 * @subpackage Structs
 */
class RuleSet extends AbstractStructBase
{
    /**
     * The RuleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RuleName;
    /**
     * The Deal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Deal
     */
    public $Deal;
    /**
     * The RuleId
     * @var int
     */
    public $RuleId;
    /**
     * The _
     * Meta informations extracted from the WSDL
     * - maxLength: 20
     * - minLength: 1
     * @var string
     */
    public $_;
    /**
     * Constructor method for RuleSet
     * @uses RuleSet::setRuleName()
     * @uses RuleSet::setDeal()
     * @uses RuleSet::setRuleId()
     * @uses RuleSet::set_()
     * @param string $ruleName
     * @param \Sabre\UpdateReservation\StructType\Deal $deal
     * @param int $ruleId
     * @param string $_
     */
    public function __construct($ruleName = null, \Sabre\UpdateReservation\StructType\Deal $deal = null, $ruleId = null, $_ = null)
    {
        $this
            ->setRuleName($ruleName)
            ->setDeal($deal)
            ->setRuleId($ruleId)
            ->set_($_);
    }
    /**
     * Get RuleName value
     * @return string|null
     */
    public function getRuleName()
    {
        return $this->RuleName;
    }
    /**
     * Set RuleName value
     * @param string $ruleName
     * @return \Sabre\UpdateReservation\StructType\RuleSet
     */
    public function setRuleName($ruleName = null)
    {
        // validation for constraint: string
        if (!is_null($ruleName) && !is_string($ruleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleName)), __LINE__);
        }
        $this->RuleName = $ruleName;
        return $this;
    }
    /**
     * Get Deal value
     * @return \Sabre\UpdateReservation\StructType\Deal|null
     */
    public function getDeal()
    {
        return $this->Deal;
    }
    /**
     * Set Deal value
     * @param \Sabre\UpdateReservation\StructType\Deal $deal
     * @return \Sabre\UpdateReservation\StructType\RuleSet
     */
    public function setDeal(\Sabre\UpdateReservation\StructType\Deal $deal = null)
    {
        $this->Deal = $deal;
        return $this;
    }
    /**
     * Get RuleId value
     * @return int|null
     */
    public function getRuleId()
    {
        return $this->RuleId;
    }
    /**
     * Set RuleId value
     * @param int $ruleId
     * @return \Sabre\UpdateReservation\StructType\RuleSet
     */
    public function setRuleId($ruleId = null)
    {
        // validation for constraint: int
        if (!is_null($ruleId) && !is_numeric($ruleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ruleId)), __LINE__);
        }
        $this->RuleId = $ruleId;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Sabre\UpdateReservation\StructType\RuleSet
     */
    public function set_($_ = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($_) && strlen($_) > 20) || (is_array($_) && count($_) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($_) ? strlen($_) : count($_)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($_) && strlen($_) < 1) || (is_array($_) && count($_) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RuleSet
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
