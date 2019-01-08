<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangePolicy StructType
 * @subpackage Structs
 */
class ChangePolicy extends AbstractStructBase
{
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - documentation: Conditions of the change policy
     * - minOccurs: 0
     * @var string
     */
    public $Conditions;
    /**
     * The ConditionsDefault
     * Meta informations extracted from the WSDL
     * - documentation: Default conditions of the change policy
     * - minOccurs: 0
     * @var string
     */
    public $ConditionsDefault;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * Constructor method for ChangePolicy
     * @uses ChangePolicy::setConditions()
     * @uses ChangePolicy::setConditionsDefault()
     * @uses ChangePolicy::setComment()
     * @param string $conditions
     * @param string $conditionsDefault
     * @param string $comment
     */
    public function __construct($conditions = null, $conditionsDefault = null, $comment = null)
    {
        $this
            ->setConditions($conditions)
            ->setConditionsDefault($conditionsDefault)
            ->setComment($comment);
    }
    /**
     * Get Conditions value
     * @return string|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }
    /**
     * Set Conditions value
     * @param string $conditions
     * @return \Sabre\UpdateReservation\StructType\ChangePolicy
     */
    public function setConditions($conditions = null)
    {
        // validation for constraint: string
        if (!is_null($conditions) && !is_string($conditions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditions)), __LINE__);
        }
        $this->Conditions = $conditions;
        return $this;
    }
    /**
     * Get ConditionsDefault value
     * @return string|null
     */
    public function getConditionsDefault()
    {
        return $this->ConditionsDefault;
    }
    /**
     * Set ConditionsDefault value
     * @param string $conditionsDefault
     * @return \Sabre\UpdateReservation\StructType\ChangePolicy
     */
    public function setConditionsDefault($conditionsDefault = null)
    {
        // validation for constraint: string
        if (!is_null($conditionsDefault) && !is_string($conditionsDefault)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($conditionsDefault)), __LINE__);
        }
        $this->ConditionsDefault = $conditionsDefault;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \Sabre\UpdateReservation\StructType\ChangePolicy
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ChangePolicy
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
