<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargesType StructType
 * @subpackage Structs
 */
class ChargesType extends AbstractStructBase
{
    /**
     * The GeneralNotes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GeneralNotes;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChargeType[]
     */
    public $Charge;
    /**
     * The GrandTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\MoneyType
     */
    public $GrandTotal;
    /**
     * The GeneralBillingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GeneralBillingType;
    /**
     * Constructor method for ChargesType
     * @uses ChargesType::setGeneralNotes()
     * @uses ChargesType::setCharge()
     * @uses ChargesType::setGrandTotal()
     * @uses ChargesType::setGeneralBillingType()
     * @param string $generalNotes
     * @param \Sabre\UpdateReservation\StructType\ChargeType[] $charge
     * @param \Sabre\UpdateReservation\StructType\MoneyType $grandTotal
     * @param string $generalBillingType
     */
    public function __construct($generalNotes = null, array $charge = array(), \Sabre\UpdateReservation\StructType\MoneyType $grandTotal = null, $generalBillingType = null)
    {
        $this
            ->setGeneralNotes($generalNotes)
            ->setCharge($charge)
            ->setGrandTotal($grandTotal)
            ->setGeneralBillingType($generalBillingType);
    }
    /**
     * Get GeneralNotes value
     * @return string|null
     */
    public function getGeneralNotes()
    {
        return $this->GeneralNotes;
    }
    /**
     * Set GeneralNotes value
     * @param string $generalNotes
     * @return \Sabre\UpdateReservation\StructType\ChargesType
     */
    public function setGeneralNotes($generalNotes = null)
    {
        // validation for constraint: string
        if (!is_null($generalNotes) && !is_string($generalNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($generalNotes)), __LINE__);
        }
        $this->GeneralNotes = $generalNotes;
        return $this;
    }
    /**
     * Get Charge value
     * @return \Sabre\UpdateReservation\StructType\ChargeType[]|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ChargeType[] $charge
     * @return \Sabre\UpdateReservation\StructType\ChargesType
     */
    public function setCharge(array $charge = array())
    {
        foreach ($charge as $chargesTypeChargeItem) {
            // validation for constraint: itemType
            if (!$chargesTypeChargeItem instanceof \Sabre\UpdateReservation\StructType\ChargeType) {
                throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of \Sabre\UpdateReservation\StructType\ChargeType, "%s" given', is_object($chargesTypeChargeItem) ? get_class($chargesTypeChargeItem) : gettype($chargesTypeChargeItem)), __LINE__);
            }
        }
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\ChargeType $item
     * @return \Sabre\UpdateReservation\StructType\ChargesType
     */
    public function addToCharge(\Sabre\UpdateReservation\StructType\ChargeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\ChargeType) {
            throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of \Sabre\UpdateReservation\StructType\ChargeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charge[] = $item;
        return $this;
    }
    /**
     * Get GrandTotal value
     * @return \Sabre\UpdateReservation\StructType\MoneyType|null
     */
    public function getGrandTotal()
    {
        return $this->GrandTotal;
    }
    /**
     * Set GrandTotal value
     * @param \Sabre\UpdateReservation\StructType\MoneyType $grandTotal
     * @return \Sabre\UpdateReservation\StructType\ChargesType
     */
    public function setGrandTotal(\Sabre\UpdateReservation\StructType\MoneyType $grandTotal = null)
    {
        $this->GrandTotal = $grandTotal;
        return $this;
    }
    /**
     * Get GeneralBillingType value
     * @return string|null
     */
    public function getGeneralBillingType()
    {
        return $this->GeneralBillingType;
    }
    /**
     * Set GeneralBillingType value
     * @param string $generalBillingType
     * @return \Sabre\UpdateReservation\StructType\ChargesType
     */
    public function setGeneralBillingType($generalBillingType = null)
    {
        // validation for constraint: string
        if (!is_null($generalBillingType) && !is_string($generalBillingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($generalBillingType)), __LINE__);
        }
        $this->GeneralBillingType = $generalBillingType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ChargesType
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
