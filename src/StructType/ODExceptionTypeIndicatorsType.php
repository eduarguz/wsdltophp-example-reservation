<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ODExceptionTypeIndicatorsType StructType
 * @subpackage Structs
 */
class ODExceptionTypeIndicatorsType extends AbstractStructBase
{
    /**
     * The forcedSell
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $forcedSell;
    /**
     * The schedChg
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $schedChg;
    /**
     * The forcedPartialCancel
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $forcedPartialCancel;
    /**
     * The ttyRejectAgent
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $ttyRejectAgent;
    /**
     * The ttyTransaction
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $ttyTransaction;
    /**
     * Constructor method for ODExceptionTypeIndicatorsType
     * @uses ODExceptionTypeIndicatorsType::setForcedSell()
     * @uses ODExceptionTypeIndicatorsType::setSchedChg()
     * @uses ODExceptionTypeIndicatorsType::setForcedPartialCancel()
     * @uses ODExceptionTypeIndicatorsType::setTtyRejectAgent()
     * @uses ODExceptionTypeIndicatorsType::setTtyTransaction()
     * @param bool $forcedSell
     * @param bool $schedChg
     * @param bool $forcedPartialCancel
     * @param bool $ttyRejectAgent
     * @param bool $ttyTransaction
     */
    public function __construct($forcedSell = false, $schedChg = false, $forcedPartialCancel = false, $ttyRejectAgent = false, $ttyTransaction = false)
    {
        $this
            ->setForcedSell($forcedSell)
            ->setSchedChg($schedChg)
            ->setForcedPartialCancel($forcedPartialCancel)
            ->setTtyRejectAgent($ttyRejectAgent)
            ->setTtyTransaction($ttyTransaction);
    }
    /**
     * Get forcedSell value
     * @return bool|null
     */
    public function getForcedSell()
    {
        return $this->forcedSell;
    }
    /**
     * Set forcedSell value
     * @param bool $forcedSell
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
     */
    public function setForcedSell($forcedSell = false)
    {
        // validation for constraint: boolean
        if (!is_null($forcedSell) && !is_bool($forcedSell)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forcedSell)), __LINE__);
        }
        $this->forcedSell = $forcedSell;
        return $this;
    }
    /**
     * Get schedChg value
     * @return bool|null
     */
    public function getSchedChg()
    {
        return $this->schedChg;
    }
    /**
     * Set schedChg value
     * @param bool $schedChg
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
     */
    public function setSchedChg($schedChg = false)
    {
        // validation for constraint: boolean
        if (!is_null($schedChg) && !is_bool($schedChg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($schedChg)), __LINE__);
        }
        $this->schedChg = $schedChg;
        return $this;
    }
    /**
     * Get forcedPartialCancel value
     * @return bool|null
     */
    public function getForcedPartialCancel()
    {
        return $this->forcedPartialCancel;
    }
    /**
     * Set forcedPartialCancel value
     * @param bool $forcedPartialCancel
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
     */
    public function setForcedPartialCancel($forcedPartialCancel = false)
    {
        // validation for constraint: boolean
        if (!is_null($forcedPartialCancel) && !is_bool($forcedPartialCancel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forcedPartialCancel)), __LINE__);
        }
        $this->forcedPartialCancel = $forcedPartialCancel;
        return $this;
    }
    /**
     * Get ttyRejectAgent value
     * @return bool|null
     */
    public function getTtyRejectAgent()
    {
        return $this->ttyRejectAgent;
    }
    /**
     * Set ttyRejectAgent value
     * @param bool $ttyRejectAgent
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
     */
    public function setTtyRejectAgent($ttyRejectAgent = false)
    {
        // validation for constraint: boolean
        if (!is_null($ttyRejectAgent) && !is_bool($ttyRejectAgent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ttyRejectAgent)), __LINE__);
        }
        $this->ttyRejectAgent = $ttyRejectAgent;
        return $this;
    }
    /**
     * Get ttyTransaction value
     * @return bool|null
     */
    public function getTtyTransaction()
    {
        return $this->ttyTransaction;
    }
    /**
     * Set ttyTransaction value
     * @param bool $ttyTransaction
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
     */
    public function setTtyTransaction($ttyTransaction = false)
    {
        // validation for constraint: boolean
        if (!is_null($ttyTransaction) && !is_bool($ttyTransaction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ttyTransaction)), __LINE__);
        }
        $this->ttyTransaction = $ttyTransaction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ODExceptionTypeIndicatorsType
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
