<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction StructType
 * @subpackage Structs
 */
class Transaction extends AbstractStructBase
{
    /**
     * The LastUpdateTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastUpdateTime;
    /**
     * The DeploymentId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeploymentId;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DocumentNumber;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $index;
    /**
     * The paymentReferenceNumber
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $paymentReferenceNumber;
    /**
     * The faxStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $faxStatus;
    /**
     * Constructor method for Transaction
     * @uses Transaction::setLastUpdateTime()
     * @uses Transaction::setDeploymentId()
     * @uses Transaction::setDocumentNumber()
     * @uses Transaction::setConfirmationNumber()
     * @uses Transaction::setIndex()
     * @uses Transaction::setPaymentReferenceNumber()
     * @uses Transaction::setFaxStatus()
     * @param string $lastUpdateTime
     * @param string $deploymentId
     * @param string $documentNumber
     * @param string $confirmationNumber
     * @param int $index
     * @param string $paymentReferenceNumber
     * @param string $faxStatus
     */
    public function __construct($lastUpdateTime = null, $deploymentId = null, $documentNumber = null, $confirmationNumber = null, $index = null, $paymentReferenceNumber = null, $faxStatus = null)
    {
        $this
            ->setLastUpdateTime($lastUpdateTime)
            ->setDeploymentId($deploymentId)
            ->setDocumentNumber($documentNumber)
            ->setConfirmationNumber($confirmationNumber)
            ->setIndex($index)
            ->setPaymentReferenceNumber($paymentReferenceNumber)
            ->setFaxStatus($faxStatus);
    }
    /**
     * Get LastUpdateTime value
     * @return string|null
     */
    public function getLastUpdateTime()
    {
        return $this->LastUpdateTime;
    }
    /**
     * Set LastUpdateTime value
     * @param string $lastUpdateTime
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setLastUpdateTime($lastUpdateTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdateTime) && !is_string($lastUpdateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdateTime)), __LINE__);
        }
        $this->LastUpdateTime = $lastUpdateTime;
        return $this;
    }
    /**
     * Get DeploymentId value
     * @return string|null
     */
    public function getDeploymentId()
    {
        return $this->DeploymentId;
    }
    /**
     * Set DeploymentId value
     * @param string $deploymentId
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setDeploymentId($deploymentId = null)
    {
        // validation for constraint: string
        if (!is_null($deploymentId) && !is_string($deploymentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deploymentId)), __LINE__);
        }
        $this->DeploymentId = $deploymentId;
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string|null
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setIndex($index = null)
    {
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Get paymentReferenceNumber value
     * @return string|null
     */
    public function getPaymentReferenceNumber()
    {
        return $this->paymentReferenceNumber;
    }
    /**
     * Set paymentReferenceNumber value
     * @param string $paymentReferenceNumber
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setPaymentReferenceNumber($paymentReferenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($paymentReferenceNumber) && !is_string($paymentReferenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentReferenceNumber)), __LINE__);
        }
        $this->paymentReferenceNumber = $paymentReferenceNumber;
        return $this;
    }
    /**
     * Get faxStatus value
     * @return string|null
     */
    public function getFaxStatus()
    {
        return $this->faxStatus;
    }
    /**
     * Set faxStatus value
     * @param string $faxStatus
     * @return \Sabre\UpdateReservation\StructType\Transaction
     */
    public function setFaxStatus($faxStatus = null)
    {
        // validation for constraint: string
        if (!is_null($faxStatus) && !is_string($faxStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxStatus)), __LINE__);
        }
        $this->faxStatus = $faxStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Transaction
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
