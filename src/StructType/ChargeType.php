<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargeType StructType
 * @subpackage Structs
 */
class ChargeType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Calculation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CalculationType[]
     */
    public $Calculation;
    /**
     * The BillingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BillingType;
    /**
     * The currencyCode
     * @var string
     */
    public $currencyCode;
    /**
     * Constructor method for ChargeType
     * @uses ChargeType::setDescription()
     * @uses ChargeType::setNotes()
     * @uses ChargeType::setName()
     * @uses ChargeType::setCalculation()
     * @uses ChargeType::setBillingType()
     * @uses ChargeType::setCurrencyCode()
     * @param string $description
     * @param string $notes
     * @param string $name
     * @param \Sabre\UpdateReservation\StructType\CalculationType[] $calculation
     * @param string $billingType
     * @param string $currencyCode
     */
    public function __construct($description = null, $notes = null, $name = null, array $calculation = array(), $billingType = null, $currencyCode = null)
    {
        $this
            ->setDescription($description)
            ->setNotes($notes)
            ->setName($name)
            ->setCalculation($calculation)
            ->setBillingType($billingType)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Calculation value
     * @return \Sabre\UpdateReservation\StructType\CalculationType[]|null
     */
    public function getCalculation()
    {
        return $this->Calculation;
    }
    /**
     * Set Calculation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CalculationType[] $calculation
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function setCalculation(array $calculation = array())
    {
        foreach ($calculation as $chargeTypeCalculationItem) {
            // validation for constraint: itemType
            if (!$chargeTypeCalculationItem instanceof \Sabre\UpdateReservation\StructType\CalculationType) {
                throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of \Sabre\UpdateReservation\StructType\CalculationType, "%s" given', is_object($chargeTypeCalculationItem) ? get_class($chargeTypeCalculationItem) : gettype($chargeTypeCalculationItem)), __LINE__);
            }
        }
        $this->Calculation = $calculation;
        return $this;
    }
    /**
     * Add item to Calculation value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\CalculationType $item
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function addToCalculation(\Sabre\UpdateReservation\StructType\CalculationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\CalculationType) {
            throw new \InvalidArgumentException(sprintf('The Calculation property can only contain items of \Sabre\UpdateReservation\StructType\CalculationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Calculation[] = $item;
        return $this;
    }
    /**
     * Get BillingType value
     * @return string|null
     */
    public function getBillingType()
    {
        return $this->BillingType;
    }
    /**
     * Set BillingType value
     * @param string $billingType
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function setBillingType($billingType = null)
    {
        // validation for constraint: string
        if (!is_null($billingType) && !is_string($billingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingType)), __LINE__);
        }
        $this->BillingType = $billingType;
        return $this;
    }
    /**
     * Get currencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * Set currencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\ChargeType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ChargeType
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
