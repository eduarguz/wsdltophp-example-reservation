<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Warning StructType
 * @subpackage Structs
 */
class Warning extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Severity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Severity;
    /**
     * The UpdateId
     * @var string
     */
    public $UpdateId;
    /**
     * Constructor method for Warning
     * @uses Warning::setCode()
     * @uses Warning::setMessage()
     * @uses Warning::setSeverity()
     * @uses Warning::setUpdateId()
     * @param string $code
     * @param string $message
     * @param string $severity
     * @param string $updateId
     */
    public function __construct($code = null, $message = null, $severity = null, $updateId = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message)
            ->setSeverity($severity)
            ->setUpdateId($updateId);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Warning
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Sabre\UpdateReservation\StructType\Warning
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Severity value
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->Severity;
    }
    /**
     * Set Severity value
     * @param string $severity
     * @return \Sabre\UpdateReservation\StructType\Warning
     */
    public function setSeverity($severity = null)
    {
        // validation for constraint: string
        if (!is_null($severity) && !is_string($severity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($severity)), __LINE__);
        }
        $this->Severity = $severity;
        return $this;
    }
    /**
     * Get UpdateId value
     * @return string|null
     */
    public function getUpdateId()
    {
        return $this->UpdateId;
    }
    /**
     * Set UpdateId value
     * @param string $updateId
     * @return \Sabre\UpdateReservation\StructType\Warning
     */
    public function setUpdateId($updateId = null)
    {
        // validation for constraint: string
        if (!is_null($updateId) && !is_string($updateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($updateId)), __LINE__);
        }
        $this->UpdateId = $updateId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Warning
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
