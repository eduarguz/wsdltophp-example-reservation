<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualCard StructType
 * @subpackage Structs
 */
class VirtualCard extends AbstractStructBase
{
    /**
     * The CustomerAccountCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CustomerAccountCode;
    /**
     * The BNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BNumber;
    /**
     * The Transactions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Transactions
     */
    public $Transactions;
    /**
     * Constructor method for VirtualCard
     * @uses VirtualCard::setCustomerAccountCode()
     * @uses VirtualCard::setBNumber()
     * @uses VirtualCard::setTransactions()
     * @param string $customerAccountCode
     * @param string $bNumber
     * @param \Sabre\UpdateReservation\StructType\Transactions $transactions
     */
    public function __construct($customerAccountCode = null, $bNumber = null, \Sabre\UpdateReservation\StructType\Transactions $transactions = null)
    {
        $this
            ->setCustomerAccountCode($customerAccountCode)
            ->setBNumber($bNumber)
            ->setTransactions($transactions);
    }
    /**
     * Get CustomerAccountCode value
     * @return string
     */
    public function getCustomerAccountCode()
    {
        return $this->CustomerAccountCode;
    }
    /**
     * Set CustomerAccountCode value
     * @param string $customerAccountCode
     * @return \Sabre\UpdateReservation\StructType\VirtualCard
     */
    public function setCustomerAccountCode($customerAccountCode = null)
    {
        // validation for constraint: string
        if (!is_null($customerAccountCode) && !is_string($customerAccountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerAccountCode)), __LINE__);
        }
        $this->CustomerAccountCode = $customerAccountCode;
        return $this;
    }
    /**
     * Get BNumber value
     * @return string|null
     */
    public function getBNumber()
    {
        return $this->BNumber;
    }
    /**
     * Set BNumber value
     * @param string $bNumber
     * @return \Sabre\UpdateReservation\StructType\VirtualCard
     */
    public function setBNumber($bNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bNumber) && !is_string($bNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bNumber)), __LINE__);
        }
        $this->BNumber = $bNumber;
        return $this;
    }
    /**
     * Get Transactions value
     * @return \Sabre\UpdateReservation\StructType\Transactions|null
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @param \Sabre\UpdateReservation\StructType\Transactions $transactions
     * @return \Sabre\UpdateReservation\StructType\VirtualCard
     */
    public function setTransactions(\Sabre\UpdateReservation\StructType\Transactions $transactions = null)
    {
        $this->Transactions = $transactions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\VirtualCard
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
