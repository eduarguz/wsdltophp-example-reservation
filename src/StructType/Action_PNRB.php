<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Action.PNRB StructType
 * @subpackage Structs
 */
class Action_PNRB extends AbstractStructBase
{
    /**
     * The RuleSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RuleSet;
    /**
     * The Rule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Rule;
    /**
     * The TargetMethod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TargetMethod;
    /**
     * The Target
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Target;
    /**
     * The ActionOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionOwner;
    /**
     * The ActionPrimeHost
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionPrimeHost;
    /**
     * The TripActionData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TripActionData
     */
    public $TripActionData;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The externalRecordId
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $externalRecordId;
    /**
     * The ActionDue
     * @var string
     */
    public $ActionDue;
    /**
     * The ActionDone
     * @var string
     */
    public $ActionDone;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for Action.PNRB
     * @uses Action_PNRB::setRuleSet()
     * @uses Action_PNRB::setRule()
     * @uses Action_PNRB::setTargetMethod()
     * @uses Action_PNRB::setTarget()
     * @uses Action_PNRB::setActionOwner()
     * @uses Action_PNRB::setActionPrimeHost()
     * @uses Action_PNRB::setTripActionData()
     * @uses Action_PNRB::setId()
     * @uses Action_PNRB::setExternalRecordId()
     * @uses Action_PNRB::setActionDue()
     * @uses Action_PNRB::setActionDone()
     * @uses Action_PNRB::setOp()
     * @param string $ruleSet
     * @param string $rule
     * @param string $targetMethod
     * @param string $target
     * @param string $actionOwner
     * @param string $actionPrimeHost
     * @param \Sabre\UpdateReservation\StructType\TripActionData $tripActionData
     * @param string $id
     * @param string $externalRecordId
     * @param string $actionDue
     * @param string $actionDone
     * @param string $op
     */
    public function __construct($ruleSet = null, $rule = null, $targetMethod = null, $target = null, $actionOwner = null, $actionPrimeHost = null, \Sabre\UpdateReservation\StructType\TripActionData $tripActionData = null, $id = null, $externalRecordId = null, $actionDue = null, $actionDone = null, $op = null)
    {
        $this
            ->setRuleSet($ruleSet)
            ->setRule($rule)
            ->setTargetMethod($targetMethod)
            ->setTarget($target)
            ->setActionOwner($actionOwner)
            ->setActionPrimeHost($actionPrimeHost)
            ->setTripActionData($tripActionData)
            ->setId($id)
            ->setExternalRecordId($externalRecordId)
            ->setActionDue($actionDue)
            ->setActionDone($actionDone)
            ->setOp($op);
    }
    /**
     * Get RuleSet value
     * @return string|null
     */
    public function getRuleSet()
    {
        return $this->RuleSet;
    }
    /**
     * Set RuleSet value
     * @param string $ruleSet
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setRuleSet($ruleSet = null)
    {
        // validation for constraint: string
        if (!is_null($ruleSet) && !is_string($ruleSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleSet)), __LINE__);
        }
        $this->RuleSet = $ruleSet;
        return $this;
    }
    /**
     * Get Rule value
     * @return string|null
     */
    public function getRule()
    {
        return $this->Rule;
    }
    /**
     * Set Rule value
     * @param string $rule
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setRule($rule = null)
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rule)), __LINE__);
        }
        $this->Rule = $rule;
        return $this;
    }
    /**
     * Get TargetMethod value
     * @return string|null
     */
    public function getTargetMethod()
    {
        return $this->TargetMethod;
    }
    /**
     * Set TargetMethod value
     * @param string $targetMethod
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setTargetMethod($targetMethod = null)
    {
        // validation for constraint: string
        if (!is_null($targetMethod) && !is_string($targetMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetMethod)), __LINE__);
        }
        $this->TargetMethod = $targetMethod;
        return $this;
    }
    /**
     * Get Target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param string $target
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->Target = $target;
        return $this;
    }
    /**
     * Get ActionOwner value
     * @return string|null
     */
    public function getActionOwner()
    {
        return $this->ActionOwner;
    }
    /**
     * Set ActionOwner value
     * @param string $actionOwner
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setActionOwner($actionOwner = null)
    {
        // validation for constraint: string
        if (!is_null($actionOwner) && !is_string($actionOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionOwner)), __LINE__);
        }
        $this->ActionOwner = $actionOwner;
        return $this;
    }
    /**
     * Get ActionPrimeHost value
     * @return string|null
     */
    public function getActionPrimeHost()
    {
        return $this->ActionPrimeHost;
    }
    /**
     * Set ActionPrimeHost value
     * @param string $actionPrimeHost
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setActionPrimeHost($actionPrimeHost = null)
    {
        // validation for constraint: string
        if (!is_null($actionPrimeHost) && !is_string($actionPrimeHost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionPrimeHost)), __LINE__);
        }
        $this->ActionPrimeHost = $actionPrimeHost;
        return $this;
    }
    /**
     * Get TripActionData value
     * @return \Sabre\UpdateReservation\StructType\TripActionData|null
     */
    public function getTripActionData()
    {
        return $this->TripActionData;
    }
    /**
     * Set TripActionData value
     * @param \Sabre\UpdateReservation\StructType\TripActionData $tripActionData
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setTripActionData(\Sabre\UpdateReservation\StructType\TripActionData $tripActionData = null)
    {
        $this->TripActionData = $tripActionData;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get externalRecordId value
     * @return string|null
     */
    public function getExternalRecordId()
    {
        return $this->externalRecordId;
    }
    /**
     * Set externalRecordId value
     * @param string $externalRecordId
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setExternalRecordId($externalRecordId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($externalRecordId) && !preg_match('/[0-9]{1,10}/', $externalRecordId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($externalRecordId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($externalRecordId) && !is_string($externalRecordId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalRecordId)), __LINE__);
        }
        $this->externalRecordId = $externalRecordId;
        return $this;
    }
    /**
     * Get ActionDue value
     * @return string|null
     */
    public function getActionDue()
    {
        return $this->ActionDue;
    }
    /**
     * Set ActionDue value
     * @param string $actionDue
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setActionDue($actionDue = null)
    {
        // validation for constraint: string
        if (!is_null($actionDue) && !is_string($actionDue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionDue)), __LINE__);
        }
        $this->ActionDue = $actionDue;
        return $this;
    }
    /**
     * Get ActionDone value
     * @return string|null
     */
    public function getActionDone()
    {
        return $this->ActionDone;
    }
    /**
     * Set ActionDone value
     * @param string $actionDone
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setActionDone($actionDone = null)
    {
        // validation for constraint: string
        if (!is_null($actionDone) && !is_string($actionDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionDone)), __LINE__);
        }
        $this->ActionDone = $actionDone;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Action_PNRB
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
