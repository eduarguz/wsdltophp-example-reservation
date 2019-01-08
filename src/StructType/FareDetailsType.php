<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareDetailsType StructType
 * @subpackage Structs
 */
class FareDetailsType extends AbstractStructBase
{
    /**
     * The BaseFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $BaseFare;
    /**
     * The EquivFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $EquivFare;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $TotalTax;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Amount
     */
    public $TotalFare;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CommissionType
     */
    public $Commission;
    /**
     * The FareCalc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareCalc;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Taxes
     */
    public $Taxes;
    /**
     * Constructor method for FareDetailsType
     * @uses FareDetailsType::setBaseFare()
     * @uses FareDetailsType::setEquivFare()
     * @uses FareDetailsType::setTotalTax()
     * @uses FareDetailsType::setTotalFare()
     * @uses FareDetailsType::setCommission()
     * @uses FareDetailsType::setFareCalc()
     * @uses FareDetailsType::setTaxes()
     * @param \Sabre\UpdateReservation\StructType\Amount $baseFare
     * @param \Sabre\UpdateReservation\StructType\Amount $equivFare
     * @param \Sabre\UpdateReservation\StructType\Amount $totalTax
     * @param \Sabre\UpdateReservation\StructType\Amount $totalFare
     * @param \Sabre\UpdateReservation\StructType\CommissionType $commission
     * @param string $fareCalc
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Amount $baseFare = null, \Sabre\UpdateReservation\StructType\Amount $equivFare = null, \Sabre\UpdateReservation\StructType\Amount $totalTax = null, \Sabre\UpdateReservation\StructType\Amount $totalFare = null, \Sabre\UpdateReservation\StructType\CommissionType $commission = null, $fareCalc = null, \Sabre\UpdateReservation\StructType\Taxes $taxes = null)
    {
        $this
            ->setBaseFare($baseFare)
            ->setEquivFare($equivFare)
            ->setTotalTax($totalTax)
            ->setTotalFare($totalFare)
            ->setCommission($commission)
            ->setFareCalc($fareCalc)
            ->setTaxes($taxes);
    }
    /**
     * Get BaseFare value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getBaseFare()
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param \Sabre\UpdateReservation\StructType\Amount $baseFare
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setBaseFare(\Sabre\UpdateReservation\StructType\Amount $baseFare = null)
    {
        $this->BaseFare = $baseFare;
        return $this;
    }
    /**
     * Get EquivFare value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getEquivFare()
    {
        return $this->EquivFare;
    }
    /**
     * Set EquivFare value
     * @param \Sabre\UpdateReservation\StructType\Amount $equivFare
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setEquivFare(\Sabre\UpdateReservation\StructType\Amount $equivFare = null)
    {
        $this->EquivFare = $equivFare;
        return $this;
    }
    /**
     * Get TotalTax value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getTotalTax()
    {
        return $this->TotalTax;
    }
    /**
     * Set TotalTax value
     * @param \Sabre\UpdateReservation\StructType\Amount $totalTax
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setTotalTax(\Sabre\UpdateReservation\StructType\Amount $totalTax = null)
    {
        $this->TotalTax = $totalTax;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return \Sabre\UpdateReservation\StructType\Amount|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param \Sabre\UpdateReservation\StructType\Amount $totalFare
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setTotalFare(\Sabre\UpdateReservation\StructType\Amount $totalFare = null)
    {
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Sabre\UpdateReservation\StructType\CommissionType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Sabre\UpdateReservation\StructType\CommissionType $commission
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setCommission(\Sabre\UpdateReservation\StructType\CommissionType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get FareCalc value
     * @return string|null
     */
    public function getFareCalc()
    {
        return $this->FareCalc;
    }
    /**
     * Set FareCalc value
     * @param string $fareCalc
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setFareCalc($fareCalc = null)
    {
        // validation for constraint: string
        if (!is_null($fareCalc) && !is_string($fareCalc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalc)), __LINE__);
        }
        $this->FareCalc = $fareCalc;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\Taxes|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType
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
