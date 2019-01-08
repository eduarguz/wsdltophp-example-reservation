<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetailerRulesType StructType
 * @subpackage Structs
 */
class RetailerRulesType extends AbstractStructBase
{
    /**
     * The RetailerRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 1
     * @var \Sabre\UpdateReservation\StructType\RetailerRule[]
     */
    public $RetailerRule;
    /**
     * The force
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: If set to true, only fares with a matched Business Rule containing the specified Retailer Rule Qualifier will be returned
     * - use: optional
     * @var bool
     */
    public $force;
    /**
     * Constructor method for RetailerRulesType
     * @uses RetailerRulesType::setRetailerRule()
     * @uses RetailerRulesType::setForce()
     * @param \Sabre\UpdateReservation\StructType\RetailerRule[] $retailerRule
     * @param bool $force
     */
    public function __construct(array $retailerRule = array(), $force = false)
    {
        $this
            ->setRetailerRule($retailerRule)
            ->setForce($force);
    }
    /**
     * Get RetailerRule value
     * @return \Sabre\UpdateReservation\StructType\RetailerRule[]
     */
    public function getRetailerRule()
    {
        return $this->RetailerRule;
    }
    /**
     * Set RetailerRule value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RetailerRule[] $retailerRule
     * @return \Sabre\UpdateReservation\StructType\RetailerRulesType
     */
    public function setRetailerRule(array $retailerRule = array())
    {
        foreach ($retailerRule as $retailerRulesTypeRetailerRuleItem) {
            // validation for constraint: itemType
            if (!$retailerRulesTypeRetailerRuleItem instanceof \Sabre\UpdateReservation\StructType\RetailerRule) {
                throw new \InvalidArgumentException(sprintf('The RetailerRule property can only contain items of \Sabre\UpdateReservation\StructType\RetailerRule, "%s" given', is_object($retailerRulesTypeRetailerRuleItem) ? get_class($retailerRulesTypeRetailerRuleItem) : gettype($retailerRulesTypeRetailerRuleItem)), __LINE__);
            }
        }
        $this->RetailerRule = $retailerRule;
        return $this;
    }
    /**
     * Add item to RetailerRule value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RetailerRule $item
     * @return \Sabre\UpdateReservation\StructType\RetailerRulesType
     */
    public function addToRetailerRule(\Sabre\UpdateReservation\StructType\RetailerRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RetailerRule) {
            throw new \InvalidArgumentException(sprintf('The RetailerRule property can only contain items of \Sabre\UpdateReservation\StructType\RetailerRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RetailerRule[] = $item;
        return $this;
    }
    /**
     * Get force value
     * @return bool|null
     */
    public function getForce()
    {
        return $this->force;
    }
    /**
     * Set force value
     * @param bool $force
     * @return \Sabre\UpdateReservation\StructType\RetailerRulesType
     */
    public function setForce($force = false)
    {
        // validation for constraint: boolean
        if (!is_null($force) && !is_bool($force)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($force)), __LINE__);
        }
        $this->force = $force;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RetailerRulesType
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
