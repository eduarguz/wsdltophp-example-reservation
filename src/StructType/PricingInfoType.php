<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingInfoType StructType
 * @subpackage Structs
 */
class PricingInfoType extends AbstractStructBase
{
    /**
     * The PriceSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PriceSummaryType[]
     */
    public $PriceSummary;
    /**
     * The PriceProvider
     * @var \Sabre\UpdateReservation\StructType\PricingProviderType
     */
    public $PriceProvider;
    /**
     * Constructor method for PricingInfoType
     * @uses PricingInfoType::setPriceSummary()
     * @uses PricingInfoType::setPriceProvider()
     * @param \Sabre\UpdateReservation\StructType\PriceSummaryType[] $priceSummary
     * @param \Sabre\UpdateReservation\StructType\PricingProviderType $priceProvider
     */
    public function __construct(array $priceSummary = array(), \Sabre\UpdateReservation\StructType\PricingProviderType $priceProvider = null)
    {
        $this
            ->setPriceSummary($priceSummary)
            ->setPriceProvider($priceProvider);
    }
    /**
     * Get PriceSummary value
     * @return \Sabre\UpdateReservation\StructType\PriceSummaryType[]|null
     */
    public function getPriceSummary()
    {
        return $this->PriceSummary;
    }
    /**
     * Set PriceSummary value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PriceSummaryType[] $priceSummary
     * @return \Sabre\UpdateReservation\StructType\PricingInfoType
     */
    public function setPriceSummary(array $priceSummary = array())
    {
        foreach ($priceSummary as $pricingInfoTypePriceSummaryItem) {
            // validation for constraint: itemType
            if (!$pricingInfoTypePriceSummaryItem instanceof \Sabre\UpdateReservation\StructType\PriceSummaryType) {
                throw new \InvalidArgumentException(sprintf('The PriceSummary property can only contain items of \Sabre\UpdateReservation\StructType\PriceSummaryType, "%s" given', is_object($pricingInfoTypePriceSummaryItem) ? get_class($pricingInfoTypePriceSummaryItem) : gettype($pricingInfoTypePriceSummaryItem)), __LINE__);
            }
        }
        $this->PriceSummary = $priceSummary;
        return $this;
    }
    /**
     * Add item to PriceSummary value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PriceSummaryType $item
     * @return \Sabre\UpdateReservation\StructType\PricingInfoType
     */
    public function addToPriceSummary(\Sabre\UpdateReservation\StructType\PriceSummaryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PriceSummaryType) {
            throw new \InvalidArgumentException(sprintf('The PriceSummary property can only contain items of \Sabre\UpdateReservation\StructType\PriceSummaryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PriceSummary[] = $item;
        return $this;
    }
    /**
     * Get PriceProvider value
     * @return \Sabre\UpdateReservation\StructType\PricingProviderType|null
     */
    public function getPriceProvider()
    {
        return $this->PriceProvider;
    }
    /**
     * Set PriceProvider value
     * @param \Sabre\UpdateReservation\StructType\PricingProviderType $priceProvider
     * @return \Sabre\UpdateReservation\StructType\PricingInfoType
     */
    public function setPriceProvider(\Sabre\UpdateReservation\StructType\PricingProviderType $priceProvider = null)
    {
        $this->PriceProvider = $priceProvider;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricingInfoType
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
