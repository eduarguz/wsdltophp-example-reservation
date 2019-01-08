<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResultAction StructType
 * @subpackage Structs
 */
class ResultAction extends AbstractStructBase
{
    /**
     * The QueuePlaceAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\QueuePlaceAction
     */
    public $QueuePlaceAction;
    /**
     * The EvaluateOnly
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * @var bool
     */
    public $EvaluateOnly;
    /**
     * Constructor method for ResultAction
     * @uses ResultAction::setQueuePlaceAction()
     * @uses ResultAction::setEvaluateOnly()
     * @param \Sabre\UpdateReservation\StructType\QueuePlaceAction $queuePlaceAction
     * @param bool $evaluateOnly
     */
    public function __construct(\Sabre\UpdateReservation\StructType\QueuePlaceAction $queuePlaceAction = null, $evaluateOnly = null)
    {
        $this
            ->setQueuePlaceAction($queuePlaceAction)
            ->setEvaluateOnly($evaluateOnly);
    }
    /**
     * Get QueuePlaceAction value
     * @return \Sabre\UpdateReservation\StructType\QueuePlaceAction|null
     */
    public function getQueuePlaceAction()
    {
        return $this->QueuePlaceAction;
    }
    /**
     * Set QueuePlaceAction value
     * @param \Sabre\UpdateReservation\StructType\QueuePlaceAction $queuePlaceAction
     * @return \Sabre\UpdateReservation\StructType\ResultAction
     */
    public function setQueuePlaceAction(\Sabre\UpdateReservation\StructType\QueuePlaceAction $queuePlaceAction = null)
    {
        $this->QueuePlaceAction = $queuePlaceAction;
        return $this;
    }
    /**
     * Get EvaluateOnly value
     * @return bool|null
     */
    public function getEvaluateOnly()
    {
        return $this->EvaluateOnly;
    }
    /**
     * Set EvaluateOnly value
     * @param bool $evaluateOnly
     * @return \Sabre\UpdateReservation\StructType\ResultAction
     */
    public function setEvaluateOnly($evaluateOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($evaluateOnly) && !is_bool($evaluateOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($evaluateOnly)), __LINE__);
        }
        $this->EvaluateOnly = $evaluateOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ResultAction
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
