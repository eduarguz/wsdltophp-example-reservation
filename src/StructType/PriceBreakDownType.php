<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceBreakDownType StructType
 * @subpackage Structs
 */
class PriceBreakDownType extends AbstractStructBase
{
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - documentation: PassengerType used for breakdown.
     * @var \Sabre\UpdateReservation\StructType\PassengerTypeCode
     */
    public $PassengerType;
    /**
     * The NumberOfPassengers
     * Meta informations extracted from the WSDL
     * - default: 1
     * - documentation: Number of Passengers each Type used for itinerary pricing.
     * @var int
     */
    public $NumberOfPassengers;
    /**
     * The BasePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $BasePrice;
    /**
     * The EquivPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $EquivPrice;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: Taxes by code summary.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TaxesType
     */
    public $Taxes;
    /**
     * The Price
     * @var \Sabre\UpdateReservation\StructType\DecimalPrice
     */
    public $Price;
    /**
     * Constructor method for PriceBreakDownType
     * @uses PriceBreakDownType::setPassengerType()
     * @uses PriceBreakDownType::setNumberOfPassengers()
     * @uses PriceBreakDownType::setBasePrice()
     * @uses PriceBreakDownType::setEquivPrice()
     * @uses PriceBreakDownType::setTaxes()
     * @uses PriceBreakDownType::setPrice()
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeCode $passengerType
     * @param int $numberOfPassengers
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $basePrice
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice
     * @param \Sabre\UpdateReservation\StructType\TaxesType $taxes
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $price
     */
    public function __construct(\Sabre\UpdateReservation\StructType\PassengerTypeCode $passengerType = null, $numberOfPassengers = 1, \Sabre\UpdateReservation\StructType\DecimalPrice $basePrice = null, \Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice = null, \Sabre\UpdateReservation\StructType\TaxesType $taxes = null, \Sabre\UpdateReservation\StructType\DecimalPrice $price = null)
    {
        $this
            ->setPassengerType($passengerType)
            ->setNumberOfPassengers($numberOfPassengers)
            ->setBasePrice($basePrice)
            ->setEquivPrice($equivPrice)
            ->setTaxes($taxes)
            ->setPrice($price);
    }
    /**
     * Get PassengerType value
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeCode|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param \Sabre\UpdateReservation\StructType\PassengerTypeCode $passengerType
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
     */
    public function setPassengerType(\Sabre\UpdateReservation\StructType\PassengerTypeCode $passengerType = null)
    {
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get NumberOfPassengers value
     * @return int|null
     */
    public function getNumberOfPassengers()
    {
        return $this->NumberOfPassengers;
    }
    /**
     * Set NumberOfPassengers value
     * @param int $numberOfPassengers
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
     */
    public function setNumberOfPassengers($numberOfPassengers = 1)
    {
        // validation for constraint: int
        if (!is_null($numberOfPassengers) && !is_numeric($numberOfPassengers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPassengers)), __LINE__);
        }
        $this->NumberOfPassengers = $numberOfPassengers;
        return $this;
    }
    /**
     * Get BasePrice value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getBasePrice()
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $basePrice
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
     */
    public function setBasePrice(\Sabre\UpdateReservation\StructType\DecimalPrice $basePrice = null)
    {
        $this->BasePrice = $basePrice;
        return $this;
    }
    /**
     * Get EquivPrice value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getEquivPrice()
    {
        return $this->EquivPrice;
    }
    /**
     * Set EquivPrice value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
     */
    public function setEquivPrice(\Sabre\UpdateReservation\StructType\DecimalPrice $equivPrice = null)
    {
        $this->EquivPrice = $equivPrice;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\TaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\TaxesType $taxes
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\TaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Price value
     * @return \Sabre\UpdateReservation\StructType\DecimalPrice|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \Sabre\UpdateReservation\StructType\DecimalPrice $price
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
     */
    public function setPrice(\Sabre\UpdateReservation\StructType\DecimalPrice $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriceBreakDownType
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
