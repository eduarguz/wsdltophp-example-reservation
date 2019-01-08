<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FormOfPayment StructType
 * Meta informations extracted from the WSDL
 * - type: FormOfPayment
 * @subpackage Structs
 */
class FormOfPayment extends AbstractStructBase
{
    /**
     * The CreditCard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CreditCard
     */
    public $CreditCard;
    /**
     * The Cash
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Cash;
    /**
     * The Check
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Check;
    /**
     * The Voucher
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Voucher;
    /**
     * The Other
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Other;
    /**
     * The transactionID
     * @var string
     */
    public $transactionID;
    /**
     * The PaymentCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PaymentCard
     */
    public $PaymentCard;
    /**
     * The Invoice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Invoice
     */
    public $Invoice;
    /**
     * The Docket
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Docket
     */
    public $Docket;
    /**
     * The GTR
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GTR
     */
    public $GTR;
    /**
     * The VirtualCard
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VirtualCard
     */
    public $VirtualCard;
    /**
     * The PayLaterPlan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PayLaterPlan
     */
    public $PayLaterPlan;
    /**
     * The LoyaltyProgramRedemption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption
     */
    public $LoyaltyProgramRedemption;
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AccountCode
     */
    public $AccountCode;
    /**
     * The Agency
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Agency
     */
    public $Agency;
    /**
     * The Corporate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Corporate
     */
    public $Corporate;
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CompanyType
     */
    public $Company;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerType
     */
    public $Customer;
    /**
     * The Deposit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Deposit
     */
    public $Deposit;
    /**
     * The miscFOP
     * @var bool
     */
    public $miscFOP;
    /**
     * The migrated
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $migrated;
    /**
     * Constructor method for FormOfPayment
     * @uses FormOfPayment::setCreditCard()
     * @uses FormOfPayment::setCash()
     * @uses FormOfPayment::setCheck()
     * @uses FormOfPayment::setVoucher()
     * @uses FormOfPayment::setOther()
     * @uses FormOfPayment::setTransactionID()
     * @uses FormOfPayment::setPaymentCard()
     * @uses FormOfPayment::setInvoice()
     * @uses FormOfPayment::setDocket()
     * @uses FormOfPayment::setGTR()
     * @uses FormOfPayment::setVirtualCard()
     * @uses FormOfPayment::setPayLaterPlan()
     * @uses FormOfPayment::setLoyaltyProgramRedemption()
     * @uses FormOfPayment::setAccountCode()
     * @uses FormOfPayment::setAgency()
     * @uses FormOfPayment::setCorporate()
     * @uses FormOfPayment::setCompany()
     * @uses FormOfPayment::setCustomer()
     * @uses FormOfPayment::setDeposit()
     * @uses FormOfPayment::setMiscFOP()
     * @uses FormOfPayment::setMigrated()
     * @param \Sabre\UpdateReservation\StructType\CreditCard $creditCard
     * @param string $cash
     * @param string $check
     * @param string $voucher
     * @param string $other
     * @param string $transactionID
     * @param \Sabre\UpdateReservation\StructType\PaymentCard $paymentCard
     * @param \Sabre\UpdateReservation\StructType\Invoice $invoice
     * @param \Sabre\UpdateReservation\StructType\Docket $docket
     * @param \Sabre\UpdateReservation\StructType\GTR $gTR
     * @param \Sabre\UpdateReservation\StructType\VirtualCard $virtualCard
     * @param \Sabre\UpdateReservation\StructType\PayLaterPlan $payLaterPlan
     * @param \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption $loyaltyProgramRedemption
     * @param \Sabre\UpdateReservation\StructType\AccountCode $accountCode
     * @param \Sabre\UpdateReservation\StructType\Agency $agency
     * @param \Sabre\UpdateReservation\StructType\Corporate $corporate
     * @param \Sabre\UpdateReservation\StructType\CompanyType $company
     * @param \Sabre\UpdateReservation\StructType\PassengerType $customer
     * @param \Sabre\UpdateReservation\StructType\Deposit $deposit
     * @param bool $miscFOP
     * @param bool $migrated
     */
    public function __construct(\Sabre\UpdateReservation\StructType\CreditCard $creditCard = null, $cash = null, $check = null, $voucher = null, $other = null, $transactionID = null, \Sabre\UpdateReservation\StructType\PaymentCard $paymentCard = null, \Sabre\UpdateReservation\StructType\Invoice $invoice = null, \Sabre\UpdateReservation\StructType\Docket $docket = null, \Sabre\UpdateReservation\StructType\GTR $gTR = null, \Sabre\UpdateReservation\StructType\VirtualCard $virtualCard = null, \Sabre\UpdateReservation\StructType\PayLaterPlan $payLaterPlan = null, \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption $loyaltyProgramRedemption = null, \Sabre\UpdateReservation\StructType\AccountCode $accountCode = null, \Sabre\UpdateReservation\StructType\Agency $agency = null, \Sabre\UpdateReservation\StructType\Corporate $corporate = null, \Sabre\UpdateReservation\StructType\CompanyType $company = null, \Sabre\UpdateReservation\StructType\PassengerType $customer = null, \Sabre\UpdateReservation\StructType\Deposit $deposit = null, $miscFOP = null, $migrated = false)
    {
        $this
            ->setCreditCard($creditCard)
            ->setCash($cash)
            ->setCheck($check)
            ->setVoucher($voucher)
            ->setOther($other)
            ->setTransactionID($transactionID)
            ->setPaymentCard($paymentCard)
            ->setInvoice($invoice)
            ->setDocket($docket)
            ->setGTR($gTR)
            ->setVirtualCard($virtualCard)
            ->setPayLaterPlan($payLaterPlan)
            ->setLoyaltyProgramRedemption($loyaltyProgramRedemption)
            ->setAccountCode($accountCode)
            ->setAgency($agency)
            ->setCorporate($corporate)
            ->setCompany($company)
            ->setCustomer($customer)
            ->setDeposit($deposit)
            ->setMiscFOP($miscFOP)
            ->setMigrated($migrated);
    }
    /**
     * Get CreditCard value
     * @return \Sabre\UpdateReservation\StructType\CreditCard|null
     */
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \Sabre\UpdateReservation\StructType\CreditCard $creditCard
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setCreditCard(\Sabre\UpdateReservation\StructType\CreditCard $creditCard = null)
    {
        $this->CreditCard = $creditCard;
        return $this;
    }
    /**
     * Get Cash value
     * @return string|null
     */
    public function getCash()
    {
        return $this->Cash;
    }
    /**
     * Set Cash value
     * @param string $cash
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setCash($cash = null)
    {
        // validation for constraint: string
        if (!is_null($cash) && !is_string($cash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cash)), __LINE__);
        }
        $this->Cash = $cash;
        return $this;
    }
    /**
     * Get Check value
     * @return string|null
     */
    public function getCheck()
    {
        return $this->Check;
    }
    /**
     * Set Check value
     * @param string $check
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setCheck($check = null)
    {
        // validation for constraint: string
        if (!is_null($check) && !is_string($check)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($check)), __LINE__);
        }
        $this->Check = $check;
        return $this;
    }
    /**
     * Get Voucher value
     * @return string|null
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param string $voucher
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setVoucher($voucher = null)
    {
        // validation for constraint: string
        if (!is_null($voucher) && !is_string($voucher)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucher)), __LINE__);
        }
        $this->Voucher = $voucher;
        return $this;
    }
    /**
     * Get Other value
     * @return string|null
     */
    public function getOther()
    {
        return $this->Other;
    }
    /**
     * Set Other value
     * @param string $other
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setOther($other = null)
    {
        // validation for constraint: string
        if (!is_null($other) && !is_string($other)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($other)), __LINE__);
        }
        $this->Other = $other;
        return $this;
    }
    /**
     * Get transactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }
    /**
     * Set transactionID value
     * @param string $transactionID
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->transactionID = $transactionID;
        return $this;
    }
    /**
     * Get PaymentCard value
     * @return \Sabre\UpdateReservation\StructType\PaymentCard|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param \Sabre\UpdateReservation\StructType\PaymentCard $paymentCard
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setPaymentCard(\Sabre\UpdateReservation\StructType\PaymentCard $paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get Invoice value
     * @return \Sabre\UpdateReservation\StructType\Invoice|null
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }
    /**
     * Set Invoice value
     * @param \Sabre\UpdateReservation\StructType\Invoice $invoice
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setInvoice(\Sabre\UpdateReservation\StructType\Invoice $invoice = null)
    {
        $this->Invoice = $invoice;
        return $this;
    }
    /**
     * Get Docket value
     * @return \Sabre\UpdateReservation\StructType\Docket|null
     */
    public function getDocket()
    {
        return $this->Docket;
    }
    /**
     * Set Docket value
     * @param \Sabre\UpdateReservation\StructType\Docket $docket
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setDocket(\Sabre\UpdateReservation\StructType\Docket $docket = null)
    {
        $this->Docket = $docket;
        return $this;
    }
    /**
     * Get GTR value
     * @return \Sabre\UpdateReservation\StructType\GTR|null
     */
    public function getGTR()
    {
        return $this->GTR;
    }
    /**
     * Set GTR value
     * @param \Sabre\UpdateReservation\StructType\GTR $gTR
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setGTR(\Sabre\UpdateReservation\StructType\GTR $gTR = null)
    {
        $this->GTR = $gTR;
        return $this;
    }
    /**
     * Get VirtualCard value
     * @return \Sabre\UpdateReservation\StructType\VirtualCard|null
     */
    public function getVirtualCard()
    {
        return $this->VirtualCard;
    }
    /**
     * Set VirtualCard value
     * @param \Sabre\UpdateReservation\StructType\VirtualCard $virtualCard
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setVirtualCard(\Sabre\UpdateReservation\StructType\VirtualCard $virtualCard = null)
    {
        $this->VirtualCard = $virtualCard;
        return $this;
    }
    /**
     * Get PayLaterPlan value
     * @return \Sabre\UpdateReservation\StructType\PayLaterPlan|null
     */
    public function getPayLaterPlan()
    {
        return $this->PayLaterPlan;
    }
    /**
     * Set PayLaterPlan value
     * @param \Sabre\UpdateReservation\StructType\PayLaterPlan $payLaterPlan
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setPayLaterPlan(\Sabre\UpdateReservation\StructType\PayLaterPlan $payLaterPlan = null)
    {
        $this->PayLaterPlan = $payLaterPlan;
        return $this;
    }
    /**
     * Get LoyaltyProgramRedemption value
     * @return \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption|null
     */
    public function getLoyaltyProgramRedemption()
    {
        return $this->LoyaltyProgramRedemption;
    }
    /**
     * Set LoyaltyProgramRedemption value
     * @param \Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption $loyaltyProgramRedemption
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setLoyaltyProgramRedemption(\Sabre\UpdateReservation\StructType\LoyaltyProgramRedemption $loyaltyProgramRedemption = null)
    {
        $this->LoyaltyProgramRedemption = $loyaltyProgramRedemption;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Sabre\UpdateReservation\StructType\AccountCode|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Sabre\UpdateReservation\StructType\AccountCode $accountCode
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setAccountCode(\Sabre\UpdateReservation\StructType\AccountCode $accountCode = null)
    {
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Get Agency value
     * @return \Sabre\UpdateReservation\StructType\Agency|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }
    /**
     * Set Agency value
     * @param \Sabre\UpdateReservation\StructType\Agency $agency
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setAgency(\Sabre\UpdateReservation\StructType\Agency $agency = null)
    {
        $this->Agency = $agency;
        return $this;
    }
    /**
     * Get Corporate value
     * @return \Sabre\UpdateReservation\StructType\Corporate|null
     */
    public function getCorporate()
    {
        return $this->Corporate;
    }
    /**
     * Set Corporate value
     * @param \Sabre\UpdateReservation\StructType\Corporate $corporate
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setCorporate(\Sabre\UpdateReservation\StructType\Corporate $corporate = null)
    {
        $this->Corporate = $corporate;
        return $this;
    }
    /**
     * Get Company value
     * @return \Sabre\UpdateReservation\StructType\CompanyType|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param \Sabre\UpdateReservation\StructType\CompanyType $company
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setCompany(\Sabre\UpdateReservation\StructType\CompanyType $company = null)
    {
        $this->Company = $company;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Sabre\UpdateReservation\StructType\PassengerType|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Sabre\UpdateReservation\StructType\PassengerType $customer
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setCustomer(\Sabre\UpdateReservation\StructType\PassengerType $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get Deposit value
     * @return \Sabre\UpdateReservation\StructType\Deposit|null
     */
    public function getDeposit()
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param \Sabre\UpdateReservation\StructType\Deposit $deposit
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setDeposit(\Sabre\UpdateReservation\StructType\Deposit $deposit = null)
    {
        $this->Deposit = $deposit;
        return $this;
    }
    /**
     * Get miscFOP value
     * @return bool|null
     */
    public function getMiscFOP()
    {
        return $this->miscFOP;
    }
    /**
     * Set miscFOP value
     * @param bool $miscFOP
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setMiscFOP($miscFOP = null)
    {
        // validation for constraint: boolean
        if (!is_null($miscFOP) && !is_bool($miscFOP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($miscFOP)), __LINE__);
        }
        $this->miscFOP = $miscFOP;
        return $this;
    }
    /**
     * Get migrated value
     * @return bool|null
     */
    public function getMigrated()
    {
        return $this->migrated;
    }
    /**
     * Set migrated value
     * @param bool $migrated
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
     */
    public function setMigrated($migrated = false)
    {
        // validation for constraint: boolean
        if (!is_null($migrated) && !is_bool($migrated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($migrated)), __LINE__);
        }
        $this->migrated = $migrated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FormOfPayment
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
