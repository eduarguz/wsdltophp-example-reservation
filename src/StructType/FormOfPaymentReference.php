<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormOfPaymentReference StructType
 * @subpackage Structs
 */
class FormOfPaymentReference extends AbstractStructBase
{
    /**
     * The ref
     * @var string
     */
    public $ref;
    /**
     * The newRef
     * @var string
     */
    public $newRef;
    /**
     * The deploymentId
     * @var string
     */
    public $deploymentId;
    /**
     * Constructor method for FormOfPaymentReference
     * @uses FormOfPaymentReference::setRef()
     * @uses FormOfPaymentReference::setNewRef()
     * @uses FormOfPaymentReference::setDeploymentId()
     * @param string $ref
     * @param string $newRef
     * @param string $deploymentId
     */
    public function __construct($ref = null, $newRef = null, $deploymentId = null)
    {
        $this
            ->setRef($ref)
            ->setNewRef($newRef)
            ->setDeploymentId($deploymentId);
    }
    /**
     * Get ref value
     * @return string|null
     */
    public function getRef()
    {
        return $this->ref;
    }
    /**
     * Set ref value
     * @param string $ref
     * @return \Sabre\UpdateReservation\StructType\FormOfPaymentReference
     */
    public function setRef($ref = null)
    {
        // validation for constraint: string
        if (!is_null($ref) && !is_string($ref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ref)), __LINE__);
        }
        $this->ref = $ref;
        return $this;
    }
    /**
     * Get newRef value
     * @return string|null
     */
    public function getNewRef()
    {
        return $this->newRef;
    }
    /**
     * Set newRef value
     * @param string $newRef
     * @return \Sabre\UpdateReservation\StructType\FormOfPaymentReference
     */
    public function setNewRef($newRef = null)
    {
        // validation for constraint: string
        if (!is_null($newRef) && !is_string($newRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newRef)), __LINE__);
        }
        $this->newRef = $newRef;
        return $this;
    }
    /**
     * Get deploymentId value
     * @return string|null
     */
    public function getDeploymentId()
    {
        return $this->deploymentId;
    }
    /**
     * Set deploymentId value
     * @param string $deploymentId
     * @return \Sabre\UpdateReservation\StructType\FormOfPaymentReference
     */
    public function setDeploymentId($deploymentId = null)
    {
        // validation for constraint: string
        if (!is_null($deploymentId) && !is_string($deploymentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deploymentId)), __LINE__);
        }
        $this->deploymentId = $deploymentId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FormOfPaymentReference
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
