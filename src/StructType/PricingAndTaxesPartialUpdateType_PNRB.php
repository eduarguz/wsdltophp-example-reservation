<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingAndTaxesPartialUpdateType.PNRB StructType
 * @subpackage Structs
 */
class PricingAndTaxesPartialUpdateType_PNRB extends AbstractStructBase
{
    /**
     * The OriginalBasePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $OriginalBasePrice;
    /**
     * The EquivalentPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $EquivalentPrice;
    /**
     * The TTLPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB
     */
    public $TTLPrice;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Taxes
     */
    public $Taxes;
    /**
     * The FareCalculationModeIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareCalculationModeIndicator;
    /**
     * The FareCalculationPriceIndicator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [0-9A-Z]
     * @var string
     */
    public $FareCalculationPriceIndicator;
    /**
     * Constructor method for PricingAndTaxesPartialUpdateType.PNRB
     * @uses PricingAndTaxesPartialUpdateType_PNRB::setOriginalBasePrice()
     * @uses PricingAndTaxesPartialUpdateType_PNRB::setEquivalentPrice()
     * @uses PricingAndTaxesPartialUpdateType_PNRB::setTTLPrice()
     * @uses PricingAndTaxesPartialUpdateType_PNRB::setTaxes()
     * @uses PricingAndTaxesPartialUpdateType_PNRB::setFareCalculationModeIndicator()
     * @uses PricingAndTaxesPartialUpdateType_PNRB::setFareCalculationPriceIndicator()
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice
     * @param \Sabre\UpdateReservation\StructType\Taxes $taxes
     * @param string $fareCalculationModeIndicator
     * @param string $fareCalculationPriceIndicator
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null, \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null, \Sabre\UpdateReservation\StructType\Taxes $taxes = null, $fareCalculationModeIndicator = null, $fareCalculationPriceIndicator = null)
    {
        $this
            ->setOriginalBasePrice($originalBasePrice)
            ->setEquivalentPrice($equivalentPrice)
            ->setTTLPrice($tTLPrice)
            ->setTaxes($taxes)
            ->setFareCalculationModeIndicator($fareCalculationModeIndicator)
            ->setFareCalculationPriceIndicator($fareCalculationPriceIndicator);
    }
    /**
     * Get OriginalBasePrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getOriginalBasePrice()
    {
        return $this->OriginalBasePrice;
    }
    /**
     * Set OriginalBasePrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public function setOriginalBasePrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $originalBasePrice = null)
    {
        $this->OriginalBasePrice = $originalBasePrice;
        return $this;
    }
    /**
     * Get EquivalentPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getEquivalentPrice()
    {
        return $this->EquivalentPrice;
    }
    /**
     * Set EquivalentPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public function setEquivalentPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $equivalentPrice = null)
    {
        $this->EquivalentPrice = $equivalentPrice;
        return $this;
    }
    /**
     * Get TTLPrice value
     * @return \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB|null
     */
    public function getTTLPrice()
    {
        return $this->TTLPrice;
    }
    /**
     * Set TTLPrice value
     * @param \Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public function setTTLPrice(\Sabre\UpdateReservation\StructType\AncillaryPrice_PNRB $tTLPrice = null)
    {
        $this->TTLPrice = $tTLPrice;
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
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\Taxes $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get FareCalculationModeIndicator value
     * @return string|null
     */
    public function getFareCalculationModeIndicator()
    {
        return $this->FareCalculationModeIndicator;
    }
    /**
     * Set FareCalculationModeIndicator value
     * @uses \Sabre\UpdateReservation\EnumType\FCMIType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\FCMIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareCalculationModeIndicator
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public function setFareCalculationModeIndicator($fareCalculationModeIndicator = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\FCMIType::valueIsValid($fareCalculationModeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareCalculationModeIndicator, implode(', ', \Sabre\UpdateReservation\EnumType\FCMIType::getValidValues())), __LINE__);
        }
        $this->FareCalculationModeIndicator = $fareCalculationModeIndicator;
        return $this;
    }
    /**
     * Get FareCalculationPriceIndicator value
     * @return string|null
     */
    public function getFareCalculationPriceIndicator()
    {
        return $this->FareCalculationPriceIndicator;
    }
    /**
     * Set FareCalculationPriceIndicator value
     * @param string $fareCalculationPriceIndicator
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
     */
    public function setFareCalculationPriceIndicator($fareCalculationPriceIndicator = null)
    {
        // validation for constraint: pattern
        if (is_scalar($fareCalculationPriceIndicator) && !preg_match('/[0-9A-Z]/', $fareCalculationPriceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]", "%s" given', var_export($fareCalculationPriceIndicator, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($fareCalculationPriceIndicator) && !is_string($fareCalculationPriceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalculationPriceIndicator)), __LINE__);
        }
        $this->FareCalculationPriceIndicator = $fareCalculationPriceIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricingAndTaxesPartialUpdateType_PNRB
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
