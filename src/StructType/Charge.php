<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Charge StructType
 * @subpackage Structs
 */
class Charge extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: "Amount" is used to return the vehicle charge amount.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Amount;
    /**
     * The ConversionRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ConversionRate
     */
    public $ConversionRate;
    /**
     * The ChargeDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChargeDetails
     */
    public $ChargeDetails;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Commission
     */
    public $Commission;
    /**
     * The Mileage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Mileage
     */
    public $Mileage;
    /**
     * The ExcessRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ExcessRate
     */
    public $ExcessRate;
    /**
     * The dropOffCharge
     * Meta informations extracted from the WSDL
     * - documentation: "dropOffCharge" is used to return drop off charge amount.
     * - use: optional
     * @var string
     */
    public $dropOffCharge;
    /**
     * The typeOfGuarantee
     * Meta informations extracted from the WSDL
     * - documentation: "typeOfGuarantee" is used to return the type of guarantee associated with the vehicle rental.
     * - use: optional
     * @var string
     */
    public $typeOfGuarantee;
    /**
     * Constructor method for Charge
     * @uses Charge::setAmount()
     * @uses Charge::setConversionRate()
     * @uses Charge::setChargeDetails()
     * @uses Charge::setCommission()
     * @uses Charge::setMileage()
     * @uses Charge::setExcessRate()
     * @uses Charge::setDropOffCharge()
     * @uses Charge::setTypeOfGuarantee()
     * @param string[] $amount
     * @param \Sabre\UpdateReservation\StructType\ConversionRate $conversionRate
     * @param \Sabre\UpdateReservation\StructType\ChargeDetails $chargeDetails
     * @param \Sabre\UpdateReservation\StructType\Commission $commission
     * @param \Sabre\UpdateReservation\StructType\Mileage $mileage
     * @param \Sabre\UpdateReservation\StructType\ExcessRate $excessRate
     * @param string $dropOffCharge
     * @param string $typeOfGuarantee
     */
    public function __construct(array $amount = array(), \Sabre\UpdateReservation\StructType\ConversionRate $conversionRate = null, \Sabre\UpdateReservation\StructType\ChargeDetails $chargeDetails = null, \Sabre\UpdateReservation\StructType\Commission $commission = null, \Sabre\UpdateReservation\StructType\Mileage $mileage = null, \Sabre\UpdateReservation\StructType\ExcessRate $excessRate = null, $dropOffCharge = null, $typeOfGuarantee = null)
    {
        $this
            ->setAmount($amount)
            ->setConversionRate($conversionRate)
            ->setChargeDetails($chargeDetails)
            ->setCommission($commission)
            ->setMileage($mileage)
            ->setExcessRate($excessRate)
            ->setDropOffCharge($dropOffCharge)
            ->setTypeOfGuarantee($typeOfGuarantee);
    }
    /**
     * Get Amount value
     * @return string[]|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @throws \InvalidArgumentException
     * @param string[] $amount
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setAmount(array $amount = array())
    {
        foreach ($amount as $chargeAmountItem) {
            // validation for constraint: itemType
            if (!is_string($chargeAmountItem)) {
                throw new \InvalidArgumentException(sprintf('The Amount property can only contain items of string, "%s" given', is_object($chargeAmountItem) ? get_class($chargeAmountItem) : gettype($chargeAmountItem)), __LINE__);
            }
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Add item to Amount value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function addToAmount($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Amount property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Amount[] = $item;
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return \Sabre\UpdateReservation\StructType\ConversionRate|null
     */
    public function getConversionRate()
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param \Sabre\UpdateReservation\StructType\ConversionRate $conversionRate
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setConversionRate(\Sabre\UpdateReservation\StructType\ConversionRate $conversionRate = null)
    {
        $this->ConversionRate = $conversionRate;
        return $this;
    }
    /**
     * Get ChargeDetails value
     * @return \Sabre\UpdateReservation\StructType\ChargeDetails|null
     */
    public function getChargeDetails()
    {
        return $this->ChargeDetails;
    }
    /**
     * Set ChargeDetails value
     * @param \Sabre\UpdateReservation\StructType\ChargeDetails $chargeDetails
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setChargeDetails(\Sabre\UpdateReservation\StructType\ChargeDetails $chargeDetails = null)
    {
        $this->ChargeDetails = $chargeDetails;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Sabre\UpdateReservation\StructType\Commission|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Sabre\UpdateReservation\StructType\Commission $commission
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setCommission(\Sabre\UpdateReservation\StructType\Commission $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get Mileage value
     * @return \Sabre\UpdateReservation\StructType\Mileage|null
     */
    public function getMileage()
    {
        return $this->Mileage;
    }
    /**
     * Set Mileage value
     * @param \Sabre\UpdateReservation\StructType\Mileage $mileage
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setMileage(\Sabre\UpdateReservation\StructType\Mileage $mileage = null)
    {
        $this->Mileage = $mileage;
        return $this;
    }
    /**
     * Get ExcessRate value
     * @return \Sabre\UpdateReservation\StructType\ExcessRate|null
     */
    public function getExcessRate()
    {
        return $this->ExcessRate;
    }
    /**
     * Set ExcessRate value
     * @param \Sabre\UpdateReservation\StructType\ExcessRate $excessRate
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setExcessRate(\Sabre\UpdateReservation\StructType\ExcessRate $excessRate = null)
    {
        $this->ExcessRate = $excessRate;
        return $this;
    }
    /**
     * Get dropOffCharge value
     * @return string|null
     */
    public function getDropOffCharge()
    {
        return $this->dropOffCharge;
    }
    /**
     * Set dropOffCharge value
     * @param string $dropOffCharge
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setDropOffCharge($dropOffCharge = null)
    {
        // validation for constraint: string
        if (!is_null($dropOffCharge) && !is_string($dropOffCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dropOffCharge)), __LINE__);
        }
        $this->dropOffCharge = $dropOffCharge;
        return $this;
    }
    /**
     * Get typeOfGuarantee value
     * @return string|null
     */
    public function getTypeOfGuarantee()
    {
        return $this->typeOfGuarantee;
    }
    /**
     * Set typeOfGuarantee value
     * @param string $typeOfGuarantee
     * @return \Sabre\UpdateReservation\StructType\Charge
     */
    public function setTypeOfGuarantee($typeOfGuarantee = null)
    {
        // validation for constraint: string
        if (!is_null($typeOfGuarantee) && !is_string($typeOfGuarantee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfGuarantee)), __LINE__);
        }
        $this->typeOfGuarantee = $typeOfGuarantee;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Charge
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
