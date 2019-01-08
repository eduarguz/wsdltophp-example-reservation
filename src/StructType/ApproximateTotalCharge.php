<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApproximateTotalCharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: ‘/AP-¤USD281.27’
 * @subpackage Structs
 */
class ApproximateTotalCharge extends AbstractStructBase
{
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: ‘/AP-¤USD281.27’
     * - use: optional
     * @var string
     */
    public $amount;
    /**
     * The mileageAllowance
     * Meta informations extracted from the WSDL
     * - documentation: Unlimited or Free Miles allowed – ‘UNL’
     * - use: optional
     * @var string
     */
    public $mileageAllowance;
    /**
     * The numDays
     * Meta informations extracted from the WSDL
     * - documentation: Number of days of rental – ‘3DY 0HR’
     * - use: optional
     * @var string
     */
    public $numDays;
    /**
     * The numHours
     * Meta informations extracted from the WSDL
     * - documentation: Number of hours of rental – ‘3DY 0HR’
     * - use: optional
     * @var string
     */
    public $numHours;
    /**
     * The rateType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies rate code as defined by the product / service provider
     * - use: optional
     * @var string
     */
    public $rateType;
    /**
     * The totalMandatoryCharges
     * Meta informations extracted from the WSDL
     * - documentation: Mandatory Charges – Taxes + Fees + etc… - ‘123.11MC’
     * - use: optional
     * @var string
     */
    public $totalMandatoryCharges;
    /**
     * Constructor method for ApproximateTotalCharge
     * @uses ApproximateTotalCharge::setAmount()
     * @uses ApproximateTotalCharge::setMileageAllowance()
     * @uses ApproximateTotalCharge::setNumDays()
     * @uses ApproximateTotalCharge::setNumHours()
     * @uses ApproximateTotalCharge::setRateType()
     * @uses ApproximateTotalCharge::setTotalMandatoryCharges()
     * @param string $amount
     * @param string $mileageAllowance
     * @param string $numDays
     * @param string $numHours
     * @param string $rateType
     * @param string $totalMandatoryCharges
     */
    public function __construct($amount = null, $mileageAllowance = null, $numDays = null, $numHours = null, $rateType = null, $totalMandatoryCharges = null)
    {
        $this
            ->setAmount($amount)
            ->setMileageAllowance($mileageAllowance)
            ->setNumDays($numDays)
            ->setNumHours($numHours)
            ->setRateType($rateType)
            ->setTotalMandatoryCharges($totalMandatoryCharges);
    }
    /**
     * Get amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param string $amount
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        return $this;
    }
    /**
     * Get mileageAllowance value
     * @return string|null
     */
    public function getMileageAllowance()
    {
        return $this->mileageAllowance;
    }
    /**
     * Set mileageAllowance value
     * @param string $mileageAllowance
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
     */
    public function setMileageAllowance($mileageAllowance = null)
    {
        // validation for constraint: string
        if (!is_null($mileageAllowance) && !is_string($mileageAllowance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mileageAllowance)), __LINE__);
        }
        $this->mileageAllowance = $mileageAllowance;
        return $this;
    }
    /**
     * Get numDays value
     * @return string|null
     */
    public function getNumDays()
    {
        return $this->numDays;
    }
    /**
     * Set numDays value
     * @param string $numDays
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
     */
    public function setNumDays($numDays = null)
    {
        // validation for constraint: string
        if (!is_null($numDays) && !is_string($numDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numDays)), __LINE__);
        }
        $this->numDays = $numDays;
        return $this;
    }
    /**
     * Get numHours value
     * @return string|null
     */
    public function getNumHours()
    {
        return $this->numHours;
    }
    /**
     * Set numHours value
     * @param string $numHours
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
     */
    public function setNumHours($numHours = null)
    {
        // validation for constraint: string
        if (!is_null($numHours) && !is_string($numHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numHours)), __LINE__);
        }
        $this->numHours = $numHours;
        return $this;
    }
    /**
     * Get rateType value
     * @return string|null
     */
    public function getRateType()
    {
        return $this->rateType;
    }
    /**
     * Set rateType value
     * @param string $rateType
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
     */
    public function setRateType($rateType = null)
    {
        // validation for constraint: string
        if (!is_null($rateType) && !is_string($rateType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateType)), __LINE__);
        }
        $this->rateType = $rateType;
        return $this;
    }
    /**
     * Get totalMandatoryCharges value
     * @return string|null
     */
    public function getTotalMandatoryCharges()
    {
        return $this->totalMandatoryCharges;
    }
    /**
     * Set totalMandatoryCharges value
     * @param string $totalMandatoryCharges
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
     */
    public function setTotalMandatoryCharges($totalMandatoryCharges = null)
    {
        // validation for constraint: string
        if (!is_null($totalMandatoryCharges) && !is_string($totalMandatoryCharges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalMandatoryCharges)), __LINE__);
        }
        $this->totalMandatoryCharges = $totalMandatoryCharges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ApproximateTotalCharge
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
