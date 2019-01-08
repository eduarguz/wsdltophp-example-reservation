<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentRules StructType
 * @subpackage Structs
 */
class DocumentRules extends AbstractStructBase
{
    /**
     * The Exchangable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Exchangable;
    /**
     * The Refundable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Refundable;
    /**
     * The Rule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Rule[]
     */
    public $Rule;
    /**
     * Constructor method for DocumentRules
     * @uses DocumentRules::setExchangable()
     * @uses DocumentRules::setRefundable()
     * @uses DocumentRules::setRule()
     * @param string $exchangable
     * @param string $refundable
     * @param \Sabre\UpdateReservation\StructType\Rule[] $rule
     */
    public function __construct($exchangable = null, $refundable = null, array $rule = array())
    {
        $this
            ->setExchangable($exchangable)
            ->setRefundable($refundable)
            ->setRule($rule);
    }
    /**
     * Get Exchangable value
     * @return string|null
     */
    public function getExchangable()
    {
        return $this->Exchangable;
    }
    /**
     * Set Exchangable value
     * @param string $exchangable
     * @return \Sabre\UpdateReservation\StructType\DocumentRules
     */
    public function setExchangable($exchangable = null)
    {
        // validation for constraint: string
        if (!is_null($exchangable) && !is_string($exchangable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exchangable)), __LINE__);
        }
        $this->Exchangable = $exchangable;
        return $this;
    }
    /**
     * Get Refundable value
     * @return string|null
     */
    public function getRefundable()
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param string $refundable
     * @return \Sabre\UpdateReservation\StructType\DocumentRules
     */
    public function setRefundable($refundable = null)
    {
        // validation for constraint: string
        if (!is_null($refundable) && !is_string($refundable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundable)), __LINE__);
        }
        $this->Refundable = $refundable;
        return $this;
    }
    /**
     * Get Rule value
     * @return \Sabre\UpdateReservation\StructType\Rule[]|null
     */
    public function getRule()
    {
        return $this->Rule;
    }
    /**
     * Set Rule value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Rule[] $rule
     * @return \Sabre\UpdateReservation\StructType\DocumentRules
     */
    public function setRule(array $rule = array())
    {
        foreach ($rule as $documentRulesRuleItem) {
            // validation for constraint: itemType
            if (!$documentRulesRuleItem instanceof \Sabre\UpdateReservation\StructType\Rule) {
                throw new \InvalidArgumentException(sprintf('The Rule property can only contain items of \Sabre\UpdateReservation\StructType\Rule, "%s" given', is_object($documentRulesRuleItem) ? get_class($documentRulesRuleItem) : gettype($documentRulesRuleItem)), __LINE__);
            }
        }
        $this->Rule = $rule;
        return $this;
    }
    /**
     * Add item to Rule value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Rule $item
     * @return \Sabre\UpdateReservation\StructType\DocumentRules
     */
    public function addToRule(\Sabre\UpdateReservation\StructType\Rule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Rule) {
            throw new \InvalidArgumentException(sprintf('The Rule property can only contain items of \Sabre\UpdateReservation\StructType\Rule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\DocumentRules
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
