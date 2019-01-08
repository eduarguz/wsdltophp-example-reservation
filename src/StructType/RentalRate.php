<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalRate StructType
 * Meta informations extracted from the WSDL
 * - documentation: "RentalRate" is used to return vehicle rate-related information.
 * @subpackage Structs
 */
class RentalRate extends AbstractStructBase
{
    /**
     * The Billing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Billing
     */
    public $Billing;
    /**
     * The Client
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Client
     */
    public $Client;
    /**
     * The Corporate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Corporate
     */
    public $Corporate;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CustLoyalty
     */
    public $CustLoyalty;
    /**
     * The InvoiceRemarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\InvoiceRemarks
     */
    public $InvoiceRemarks;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Remarks
     */
    public $Remarks;
    /**
     * The ReserveUnderName
     * Meta informations extracted from the WSDL
     * - documentation: "ReserveUnderName" is used to return the name of the customer associated with the vehicle reservation.
     * - minOccurs: 0
     * @var string
     */
    public $ReserveUnderName;
    /**
     * The ServiceInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceInformation
     */
    public $ServiceInformation;
    /**
     * The TourCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TourCode
     */
    public $TourCode;
    /**
     * The VehicleTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehicleTypes
     */
    public $VehicleTypes;
    /**
     * The Voucher
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Voucher
     */
    public $Voucher;
    /**
     * The changed
     * Meta informations extracted from the WSDL
     * - documentation: ‘@’ preceding rate item or any other car segment field indicating update by car supplier - /RG-¤USD52.72 UNL DY XH8.79 UNL
     * - use: optional
     * @var string
     */
    public $changed;
    /**
     * The guaranteedQuoted
     * Meta informations extracted from the WSDL
     * - documentation: Indication of Guaranteed or Subject to Change Rate – ‘/RG-’ and ‘/RQ-’
     * - use: optional
     * @var string
     */
    public $guaranteedQuoted;
    /**
     * The rateCode
     * Meta informations extracted from the WSDL
     * - documentation: Rate item Rate Code – ‘/RC-¤STDR’
     * - use: optional
     * @var string
     */
    public $rateCode;
    /**
     * The stmRatePlan
     * Meta informations extracted from the WSDL
     * - documentation: Rate item rate plan – ‘/RG-¤USD52.72 UNL DY XH8.79 UNL’
     * - use: optional
     * @var string
     */
    public $stmRatePlan;
    /**
     * Constructor method for RentalRate
     * @uses RentalRate::setBilling()
     * @uses RentalRate::setClient()
     * @uses RentalRate::setCorporate()
     * @uses RentalRate::setCustLoyalty()
     * @uses RentalRate::setInvoiceRemarks()
     * @uses RentalRate::setRemarks()
     * @uses RentalRate::setReserveUnderName()
     * @uses RentalRate::setServiceInformation()
     * @uses RentalRate::setTourCode()
     * @uses RentalRate::setVehicleTypes()
     * @uses RentalRate::setVoucher()
     * @uses RentalRate::setChanged()
     * @uses RentalRate::setGuaranteedQuoted()
     * @uses RentalRate::setRateCode()
     * @uses RentalRate::setStmRatePlan()
     * @param \Sabre\UpdateReservation\StructType\Billing $billing
     * @param \Sabre\UpdateReservation\StructType\Client $client
     * @param \Sabre\UpdateReservation\StructType\Corporate $corporate
     * @param \Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty
     * @param \Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks
     * @param \Sabre\UpdateReservation\StructType\Remarks $remarks
     * @param string $reserveUnderName
     * @param \Sabre\UpdateReservation\StructType\ServiceInformation $serviceInformation
     * @param \Sabre\UpdateReservation\StructType\TourCode $tourCode
     * @param \Sabre\UpdateReservation\StructType\VehicleTypes $vehicleTypes
     * @param \Sabre\UpdateReservation\StructType\Voucher $voucher
     * @param string $changed
     * @param string $guaranteedQuoted
     * @param string $rateCode
     * @param string $stmRatePlan
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Billing $billing = null, \Sabre\UpdateReservation\StructType\Client $client = null, \Sabre\UpdateReservation\StructType\Corporate $corporate = null, \Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty = null, \Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks = null, \Sabre\UpdateReservation\StructType\Remarks $remarks = null, $reserveUnderName = null, \Sabre\UpdateReservation\StructType\ServiceInformation $serviceInformation = null, \Sabre\UpdateReservation\StructType\TourCode $tourCode = null, \Sabre\UpdateReservation\StructType\VehicleTypes $vehicleTypes = null, \Sabre\UpdateReservation\StructType\Voucher $voucher = null, $changed = null, $guaranteedQuoted = null, $rateCode = null, $stmRatePlan = null)
    {
        $this
            ->setBilling($billing)
            ->setClient($client)
            ->setCorporate($corporate)
            ->setCustLoyalty($custLoyalty)
            ->setInvoiceRemarks($invoiceRemarks)
            ->setRemarks($remarks)
            ->setReserveUnderName($reserveUnderName)
            ->setServiceInformation($serviceInformation)
            ->setTourCode($tourCode)
            ->setVehicleTypes($vehicleTypes)
            ->setVoucher($voucher)
            ->setChanged($changed)
            ->setGuaranteedQuoted($guaranteedQuoted)
            ->setRateCode($rateCode)
            ->setStmRatePlan($stmRatePlan);
    }
    /**
     * Get Billing value
     * @return \Sabre\UpdateReservation\StructType\Billing|null
     */
    public function getBilling()
    {
        return $this->Billing;
    }
    /**
     * Set Billing value
     * @param \Sabre\UpdateReservation\StructType\Billing $billing
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setBilling(\Sabre\UpdateReservation\StructType\Billing $billing = null)
    {
        $this->Billing = $billing;
        return $this;
    }
    /**
     * Get Client value
     * @return \Sabre\UpdateReservation\StructType\Client|null
     */
    public function getClient()
    {
        return $this->Client;
    }
    /**
     * Set Client value
     * @param \Sabre\UpdateReservation\StructType\Client $client
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setClient(\Sabre\UpdateReservation\StructType\Client $client = null)
    {
        $this->Client = $client;
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
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setCorporate(\Sabre\UpdateReservation\StructType\Corporate $corporate = null)
    {
        $this->Corporate = $corporate;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return \Sabre\UpdateReservation\StructType\CustLoyalty|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @param \Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setCustLoyalty(\Sabre\UpdateReservation\StructType\CustLoyalty $custLoyalty = null)
    {
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Get InvoiceRemarks value
     * @return \Sabre\UpdateReservation\StructType\InvoiceRemarks|null
     */
    public function getInvoiceRemarks()
    {
        return $this->InvoiceRemarks;
    }
    /**
     * Set InvoiceRemarks value
     * @param \Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setInvoiceRemarks(\Sabre\UpdateReservation\StructType\InvoiceRemarks $invoiceRemarks = null)
    {
        $this->InvoiceRemarks = $invoiceRemarks;
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Sabre\UpdateReservation\StructType\Remarks|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Sabre\UpdateReservation\StructType\Remarks $remarks
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setRemarks(\Sabre\UpdateReservation\StructType\Remarks $remarks = null)
    {
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get ReserveUnderName value
     * @return string|null
     */
    public function getReserveUnderName()
    {
        return $this->ReserveUnderName;
    }
    /**
     * Set ReserveUnderName value
     * @param string $reserveUnderName
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setReserveUnderName($reserveUnderName = null)
    {
        // validation for constraint: string
        if (!is_null($reserveUnderName) && !is_string($reserveUnderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reserveUnderName)), __LINE__);
        }
        $this->ReserveUnderName = $reserveUnderName;
        return $this;
    }
    /**
     * Get ServiceInformation value
     * @return \Sabre\UpdateReservation\StructType\ServiceInformation|null
     */
    public function getServiceInformation()
    {
        return $this->ServiceInformation;
    }
    /**
     * Set ServiceInformation value
     * @param \Sabre\UpdateReservation\StructType\ServiceInformation $serviceInformation
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setServiceInformation(\Sabre\UpdateReservation\StructType\ServiceInformation $serviceInformation = null)
    {
        $this->ServiceInformation = $serviceInformation;
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Sabre\UpdateReservation\StructType\TourCode|null
     */
    public function getTourCode()
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Sabre\UpdateReservation\StructType\TourCode $tourCode
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setTourCode(\Sabre\UpdateReservation\StructType\TourCode $tourCode = null)
    {
        $this->TourCode = $tourCode;
        return $this;
    }
    /**
     * Get VehicleTypes value
     * @return \Sabre\UpdateReservation\StructType\VehicleTypes|null
     */
    public function getVehicleTypes()
    {
        return $this->VehicleTypes;
    }
    /**
     * Set VehicleTypes value
     * @param \Sabre\UpdateReservation\StructType\VehicleTypes $vehicleTypes
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setVehicleTypes(\Sabre\UpdateReservation\StructType\VehicleTypes $vehicleTypes = null)
    {
        $this->VehicleTypes = $vehicleTypes;
        return $this;
    }
    /**
     * Get Voucher value
     * @return \Sabre\UpdateReservation\StructType\Voucher|null
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param \Sabre\UpdateReservation\StructType\Voucher $voucher
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setVoucher(\Sabre\UpdateReservation\StructType\Voucher $voucher = null)
    {
        $this->Voucher = $voucher;
        return $this;
    }
    /**
     * Get changed value
     * @return string|null
     */
    public function getChanged()
    {
        return $this->changed;
    }
    /**
     * Set changed value
     * @param string $changed
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setChanged($changed = null)
    {
        // validation for constraint: string
        if (!is_null($changed) && !is_string($changed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($changed)), __LINE__);
        }
        $this->changed = $changed;
        return $this;
    }
    /**
     * Get guaranteedQuoted value
     * @return string|null
     */
    public function getGuaranteedQuoted()
    {
        return $this->guaranteedQuoted;
    }
    /**
     * Set guaranteedQuoted value
     * @param string $guaranteedQuoted
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setGuaranteedQuoted($guaranteedQuoted = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteedQuoted) && !is_string($guaranteedQuoted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteedQuoted)), __LINE__);
        }
        $this->guaranteedQuoted = $guaranteedQuoted;
        return $this;
    }
    /**
     * Get rateCode value
     * @return string|null
     */
    public function getRateCode()
    {
        return $this->rateCode;
    }
    /**
     * Set rateCode value
     * @param string $rateCode
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setRateCode($rateCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateCode) && !is_string($rateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateCode)), __LINE__);
        }
        $this->rateCode = $rateCode;
        return $this;
    }
    /**
     * Get stmRatePlan value
     * @return string|null
     */
    public function getStmRatePlan()
    {
        return $this->stmRatePlan;
    }
    /**
     * Set stmRatePlan value
     * @param string $stmRatePlan
     * @return \Sabre\UpdateReservation\StructType\RentalRate
     */
    public function setStmRatePlan($stmRatePlan = null)
    {
        // validation for constraint: string
        if (!is_null($stmRatePlan) && !is_string($stmRatePlan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stmRatePlan)), __LINE__);
        }
        $this->stmRatePlan = $stmRatePlan;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RentalRate
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
