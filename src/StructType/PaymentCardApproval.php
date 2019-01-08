<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentCardApproval StructType
 * @subpackage Structs
 */
class PaymentCardApproval extends AbstractStructBase
{
    /**
     * The ManualApproval
     * @var bool
     */
    public $ManualApproval;
    /**
     * The ResponseCode
     * @var string
     */
    public $ResponseCode;
    /**
     * The ApprovalCode
     * @var string
     */
    public $ApprovalCode;
    /**
     * The RequestTime
     * Meta informations extracted from the WSDL
     * - documentation: Approval request time
     * @var string
     */
    public $RequestTime;
    /**
     * The ExpiryTime
     * Meta informations extracted from the WSDL
     * - documentation: Approval expiry time
     * @var string
     */
    public $ExpiryTime;
    /**
     * The AirlineCode
     * @var string
     */
    public $AirlineCode;
    /**
     * The Amount
     * @var \Sabre\UpdateReservation\StructType\MoneyType
     */
    public $Amount;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Remarks;
    /**
     * The SupplierTransID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SupplierTransID;
    /**
     * The PaymentRef
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentRef;
    /**
     * The CSCMatched
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CSCMatched;
    /**
     * The CSCRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CSCRemark;
    /**
     * The Qualifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Qualifier;
    /**
     * The ExtendPayment
     * Meta informations extracted from the WSDL
     * - documentation: Number of months or installments.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExtendPayment;
    /**
     * The Acquirer
     * Meta informations extracted from the WSDL
     * - documentation: SabrePWS if Sabre Payment Web Services. User may enter any value for 3rd party acquirer.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Acquirer;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * Constructor method for PaymentCardApproval
     * @uses PaymentCardApproval::setManualApproval()
     * @uses PaymentCardApproval::setResponseCode()
     * @uses PaymentCardApproval::setApprovalCode()
     * @uses PaymentCardApproval::setRequestTime()
     * @uses PaymentCardApproval::setExpiryTime()
     * @uses PaymentCardApproval::setAirlineCode()
     * @uses PaymentCardApproval::setAmount()
     * @uses PaymentCardApproval::setRemarks()
     * @uses PaymentCardApproval::setSupplierTransID()
     * @uses PaymentCardApproval::setPaymentRef()
     * @uses PaymentCardApproval::setCSCMatched()
     * @uses PaymentCardApproval::setCSCRemark()
     * @uses PaymentCardApproval::setQualifier()
     * @uses PaymentCardApproval::setExtendPayment()
     * @uses PaymentCardApproval::setAcquirer()
     * @uses PaymentCardApproval::setId()
     * @param bool $manualApproval
     * @param string $responseCode
     * @param string $approvalCode
     * @param string $requestTime
     * @param string $expiryTime
     * @param string $airlineCode
     * @param \Sabre\UpdateReservation\StructType\MoneyType $amount
     * @param string $remarks
     * @param string $supplierTransID
     * @param string $paymentRef
     * @param string $cSCMatched
     * @param string $cSCRemark
     * @param string $qualifier
     * @param string $extendPayment
     * @param string $acquirer
     * @param int $id
     */
    public function __construct($manualApproval = null, $responseCode = null, $approvalCode = null, $requestTime = null, $expiryTime = null, $airlineCode = null, \Sabre\UpdateReservation\StructType\MoneyType $amount = null, $remarks = null, $supplierTransID = null, $paymentRef = null, $cSCMatched = null, $cSCRemark = null, $qualifier = null, $extendPayment = null, $acquirer = null, $id = null)
    {
        $this
            ->setManualApproval($manualApproval)
            ->setResponseCode($responseCode)
            ->setApprovalCode($approvalCode)
            ->setRequestTime($requestTime)
            ->setExpiryTime($expiryTime)
            ->setAirlineCode($airlineCode)
            ->setAmount($amount)
            ->setRemarks($remarks)
            ->setSupplierTransID($supplierTransID)
            ->setPaymentRef($paymentRef)
            ->setCSCMatched($cSCMatched)
            ->setCSCRemark($cSCRemark)
            ->setQualifier($qualifier)
            ->setExtendPayment($extendPayment)
            ->setAcquirer($acquirer)
            ->setId($id);
    }
    /**
     * Get ManualApproval value
     * @return bool|null
     */
    public function getManualApproval()
    {
        return $this->ManualApproval;
    }
    /**
     * Set ManualApproval value
     * @param bool $manualApproval
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setManualApproval($manualApproval = null)
    {
        // validation for constraint: boolean
        if (!is_null($manualApproval) && !is_bool($manualApproval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($manualApproval)), __LINE__);
        }
        $this->ManualApproval = $manualApproval;
        return $this;
    }
    /**
     * Get ResponseCode value
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }
    /**
     * Set ResponseCode value
     * @param string $responseCode
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setResponseCode($responseCode = null)
    {
        // validation for constraint: string
        if (!is_null($responseCode) && !is_string($responseCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseCode)), __LINE__);
        }
        $this->ResponseCode = $responseCode;
        return $this;
    }
    /**
     * Get ApprovalCode value
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }
    /**
     * Set ApprovalCode value
     * @param string $approvalCode
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setApprovalCode($approvalCode = null)
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approvalCode)), __LINE__);
        }
        $this->ApprovalCode = $approvalCode;
        return $this;
    }
    /**
     * Get RequestTime value
     * @return string|null
     */
    public function getRequestTime()
    {
        return $this->RequestTime;
    }
    /**
     * Set RequestTime value
     * @param string $requestTime
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setRequestTime($requestTime = null)
    {
        // validation for constraint: string
        if (!is_null($requestTime) && !is_string($requestTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestTime)), __LINE__);
        }
        $this->RequestTime = $requestTime;
        return $this;
    }
    /**
     * Get ExpiryTime value
     * @return string|null
     */
    public function getExpiryTime()
    {
        return $this->ExpiryTime;
    }
    /**
     * Set ExpiryTime value
     * @param string $expiryTime
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setExpiryTime($expiryTime = null)
    {
        // validation for constraint: string
        if (!is_null($expiryTime) && !is_string($expiryTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryTime)), __LINE__);
        }
        $this->ExpiryTime = $expiryTime;
        return $this;
    }
    /**
     * Get AirlineCode value
     * @return string|null
     */
    public function getAirlineCode()
    {
        return $this->AirlineCode;
    }
    /**
     * Set AirlineCode value
     * @param string $airlineCode
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setAirlineCode($airlineCode = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCode)), __LINE__);
        }
        $this->AirlineCode = $airlineCode;
        return $this;
    }
    /**
     * Get Amount value
     * @return \Sabre\UpdateReservation\StructType\MoneyType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Sabre\UpdateReservation\StructType\MoneyType $amount
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setAmount(\Sabre\UpdateReservation\StructType\MoneyType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get Remarks value
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setRemarks($remarks = null)
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarks)), __LINE__);
        }
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get SupplierTransID value
     * @return string|null
     */
    public function getSupplierTransID()
    {
        return $this->SupplierTransID;
    }
    /**
     * Set SupplierTransID value
     * @param string $supplierTransID
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setSupplierTransID($supplierTransID = null)
    {
        // validation for constraint: string
        if (!is_null($supplierTransID) && !is_string($supplierTransID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierTransID)), __LINE__);
        }
        $this->SupplierTransID = $supplierTransID;
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return string|null
     */
    public function getPaymentRef()
    {
        return $this->PaymentRef;
    }
    /**
     * Set PaymentRef value
     * @param string $paymentRef
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setPaymentRef($paymentRef = null)
    {
        // validation for constraint: string
        if (!is_null($paymentRef) && !is_string($paymentRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentRef)), __LINE__);
        }
        $this->PaymentRef = $paymentRef;
        return $this;
    }
    /**
     * Get CSCMatched value
     * @return string|null
     */
    public function getCSCMatched()
    {
        return $this->CSCMatched;
    }
    /**
     * Set CSCMatched value
     * @param string $cSCMatched
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setCSCMatched($cSCMatched = null)
    {
        // validation for constraint: string
        if (!is_null($cSCMatched) && !is_string($cSCMatched)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSCMatched)), __LINE__);
        }
        $this->CSCMatched = $cSCMatched;
        return $this;
    }
    /**
     * Get CSCRemark value
     * @return string|null
     */
    public function getCSCRemark()
    {
        return $this->CSCRemark;
    }
    /**
     * Set CSCRemark value
     * @param string $cSCRemark
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setCSCRemark($cSCRemark = null)
    {
        // validation for constraint: string
        if (!is_null($cSCRemark) && !is_string($cSCRemark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cSCRemark)), __LINE__);
        }
        $this->CSCRemark = $cSCRemark;
        return $this;
    }
    /**
     * Get Qualifier value
     * @return string|null
     */
    public function getQualifier()
    {
        return $this->Qualifier;
    }
    /**
     * Set Qualifier value
     * @param string $qualifier
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setQualifier($qualifier = null)
    {
        // validation for constraint: string
        if (!is_null($qualifier) && !is_string($qualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($qualifier)), __LINE__);
        }
        $this->Qualifier = $qualifier;
        return $this;
    }
    /**
     * Get ExtendPayment value
     * @return string|null
     */
    public function getExtendPayment()
    {
        return $this->ExtendPayment;
    }
    /**
     * Set ExtendPayment value
     * @param string $extendPayment
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setExtendPayment($extendPayment = null)
    {
        // validation for constraint: string
        if (!is_null($extendPayment) && !is_string($extendPayment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendPayment)), __LINE__);
        }
        $this->ExtendPayment = $extendPayment;
        return $this;
    }
    /**
     * Get Acquirer value
     * @return string|null
     */
    public function getAcquirer()
    {
        return $this->Acquirer;
    }
    /**
     * Set Acquirer value
     * @param string $acquirer
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setAcquirer($acquirer = null)
    {
        // validation for constraint: string
        if (!is_null($acquirer) && !is_string($acquirer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acquirer)), __LINE__);
        }
        $this->Acquirer = $acquirer;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PaymentCardApproval
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
